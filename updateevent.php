<?php
  require_once('dbconnect.php');
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['title']) && !empty($_POST['title'])
      && isset($_POST['venue']) && !empty($_POST['venue'])
      && isset($_POST['date']) && !empty($_POST['date'])
      && isset($_POST['time']) && !empty($_POST['time'])
      && isset($_FILES['cover']) && !empty($_FILES['cover'])){

      $image = $_POST['title'].$_POST['date'];
      $f = 'hpm-content/events/'.$image;
      if (file_exists($f)) unlink($f);
      if (move_uploaded_file($_FILES["cover"]["tmp_name"], $f)){
        $sql = "INSERT INTO  `hpm_event` (eTitle, eVenue, eDate, eTime, eImage)
                VALUES ('".mysqli_real_escape_string($dbcon, $_POST['title'])."', '".mysqli_real_escape_string($dbcon, $_POST['venue'])."',
                '".mysqli_real_escape_string($dbcon, $_POST['date'])."', '".mysqli_real_escape_string($dbcon, $_POST['time'])."',
                '".mysqli_real_escape_string($dbcon, $image)."')";

        if (!$result = $dbcon->query($sql)){
            header('Location: http://www/admin.hispraiseministries.com/index.php?res=failed#event');
        }
        else{
          header('Location: http://www/admin.hispraiseministries.com/index.php?res=success#event');
        }
      }
      else{
        header('Location: http://www/admin.hispraiseministries.com/index.php?res=failed#event');
      }
    }
  }
?>
