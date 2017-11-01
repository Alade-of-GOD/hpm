<?php

require_once('dbconnect.php');
$fetch = "SELECT * FROM `hpm_event`
        ORDER BY `rowId` DESC LIMIT 5";
if(!$result = $dbcon->query($fetch)){
  die('There was an error running the query [' . $dbcon->error . ']');
}
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $eDate = $row['eDate'];
    $eTime = $row['eTime'];
    $eImage = $row['eImage'];
    $eVenue = $row['eVenue'];
    $eTitle = $row['eTitle'];
    $eDate = strtotime($eDate);
    $eDateMonth = date("M", $eDate);
    $eDateDay = date("d", $eDate);
    echo '
    <div class="event-col">
      <div class="thumb"> <img src="hpm-content/events/'.$eImage.'" width="171" height="145" alt="'.$eTitle.'"> </div>
      <div class="text-box">
      <strong class="date">'.$eDateDay.'<span>'.$eDateMonth.'</span></strong>
      <a href="contact/" class="btn-style-2">Contact Us Now</a>
        <a href="#" class="title">'.$eTitle.'</a>
        <span>'.$eTime.' - '.$eVenue.'</span>
        <ul class="links">
          <li><a href="https://www.facebook.com/HisPraiseMinistries/"><span><i class="fa fa-facebook-square"></i></span></a></li>
          <li><a href="https://www.twitter.com/HispraiseM"><span><i class="fa fa-twitter"></i></span></a></li>
          <li><a href="https://www.linkedin.com/company/11284335/"><span><i class="fa fa-linkedin"></i></span></a></li>
        </ul>
      </div>
    </div>';
  }
}
else{
  echo '
  <div class="event-col">
    <div class="text-box">
      <a href="contact" class="btn-style-2">Contact Us Now</a>
      <a href="#" class="title">No Event yet... stay tuned to our website and social media platforms</a>
      <ul class="links">
        <li><a href="https://www.facebook.com/HisPraiseMinistries/"><span><i class="fa fa-facebook-square"></i></span></a></li>
        <li><a href="https://www.twitter.com/HispraiseM"><span><i class="fa fa-twitter"></i></span></a></li>
        <li><a href="https://www.linkedin.com/company/11284335/"><span><i class="fa fa-linkedin"></i></span></a></li>
      </ul>
    </div>
  </div>';
}

?>
