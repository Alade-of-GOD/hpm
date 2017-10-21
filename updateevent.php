<?php
  require_once('dbconnect.php');
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['title']) && !empty($_POST['title'])
      && isset($_POST['venue']) && !empty($_POST['venue'])
      && isset($_POST['date']) && !empty($_POST['date'])
      && isset($_POST['time']) && !empty($_POST['time'])
      && isset($_FILES['cover']) && !empty($_FILES['cover'])){

      $sql = "UPDATE `hpm_event`
              SET eTitle = '".mysqli_real_escape_string($dbcon, $_POST['title'])."',
              eVenue = '".mysqli_real_escape_string($dbcon, $_POST['venue'])."',
              eDate = '".mysqli_real_escape_string($dbcon, $_POST['date'])."',
              eTime = '".mysqli_real_escape_string($dbcon, $_POST['time'])."'
              WHERE rowId = '".mysqli_real_escape_string($dbcon, $_GET['row'])."'";
      if (!$result = $dbcon->query($sql)){
          header('Location: http://www.hpm.otunwrites.com/admin/index.php#event?res=failed');
      }
      else{
        $f = 'event.jpg';
        if (file_exists($f)) unlink($f);
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $f))
          header('Location: http://www.hpm.otunwrites.com/admin/index.php#event?res=success');
        else
          header('Location: http://www.hpm.otunwrites.com/admin/index.php#event?res=failed');
      }
    }
  }
?>
