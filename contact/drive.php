<?php
  function Redirect($e){
    header('Location: index.php?error='.$e.'#messageresponse');
  }
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['val']) && $_GET['val'] == 'wpcf7f408-ifp169-o1'){
    //echo 'cool';
    if (isset($_POST['personName']) && isset($_POST['personMail']) &&isset($_POST['personSubject']) &&isset($_POST['personMessage'])){
      if (empty($_POST['personName']) || empty($_POST['personMail']) || empty($_POST['personSubject']) || empty($_POST['personMessage']))  Redirect(1);
      $personName = $_POST['personName'];
      $personMail = $_POST['personMail'];
      $personSubject = $_POST['personSubject'];
      $personMessage = nl2br($_POST['personMessage']);
      $personStatus = $_POST['personStatus'];
      $personSex = $_POST['personSex'];
      if ($personSex == '') $personSex = 'Not Specified';
      if ($personStatus == '') $personStatus = 'Not Specified';
      $personMessage = wordwrap($personMessage, 70);
      $to = "hispraisemin@yahoo.co.uk, micoluwafemibiz@gmail.com";
      $subject = $personSubject;
      $message = '
          <html>
            <head>
              <title>Mail from '.$personMail.'</title>
            </head>
            <body style="background-color: #f4424b; color: #fff; padding: 50px;">
              <p>'.$personMessage.'</p>
              <p>Sex: '.$personSex.'</p>
              <p>Status: '.$personStatus.'</p>
            </body>
          </html>
          ';
      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From: <'.$personMail.'>' . "\r\n";
      $headers .= 'Cc: www.hispraiseministries.com/contact' . "\r\n";

      if (mail($to, $subject, $message, $headers)) Redirect(4);
      else Redirect(5);
    }
    else Redirect(2);
  }
  else Redirect(3);
?>
