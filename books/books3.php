<?php
$fetch = "SELECT * FROM `booksstores`
        ORDER BY `rowId` DESC LIMIT 3";
if(!$result = $dbcon->query($fetch)){
  die('There was an error running the query [' . $dbcon->error . ']');
}
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $booktitle = $row['bookTitle'];
    $booksum = $row['bookSummary'];
    $bookcover = $row['bookCover'];
    echo '<div class="col-md-4 col-sm-4">
            <div class="blog-style-1">
              <a href="#" class="title">'.$booktitle.'</a>
              <div class="">
                <img alt="'.$booktitle.'" src="'.$bookcover.'" class="photo" height="250" width="250" />
              </div>
            </div>
          </div>';
  }
}

?>
