<?php
  require_once('../dbconnect.php');
  if (!isset($_GET['next']) || empty($_GET['next']) || $_GET['next'] < 1) $next = 1;
  else $next = $_GET['next'];
  $end = 12;
  $checkend = ($next * $end);
  $page = (($next * $end) - $end);
  $fetch = "SELECT * FROM `booksstores`
          ORDER BY `rowId` DESC LIMIT $page, $end";
  $next++;
  if(!$result = $dbcon->query($fetch)){
    die('There was an error running the query [' . $dbcon->error . ']');
  }
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $booktitle = $row['bookTitle'];
      $booksum = $row['bookSummary'];
      $bookcover = $row['bookCover'];
      echo '<li class="post-616 product type-product status-publish has-post-thumbnail product_cat-posters first instock sale shipping-taxable purchasable product-type-simple">
              <a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                <img width="300" height="300" src="../'.$bookcover.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="'.$booktitle.'" sizes="(max-width: 300px) 100vw, 300px"/>
          <p>'.$booksum.'</p>
          <span class="price">
            <del>
            <span class="woocommerce-Price-amount amount">
            <span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins></span>
        </a>
      </li>
      ';
    }
  }

  $count = $dbcon->query("SELECT COUNT(`rowId`) as c FROM `booksstores`");
  $row = $count->fetch_assoc();
  $count = $row['c'];
  if ($checkend >= $count)

  echo '<nav class="woocommerce-pagination">
    <ul class="page-numbers">
      <li><a class="previous page-numbers" href="index.php?next='.($next-2).'">&larr;</a></li>
    </ul>
  </nav>';

  else if (($next-2) == 0)
  echo '<nav class="woocommerce-pagination">
    <ul class="page-numbers">
      <li><a class="next page-numbers" href="index.php?next='.($next).'">&rarr;</a></li>
    </ul>
  </nav>';

  else
  echo '<nav class="woocommerce-pagination">
    <ul class="page-numbers">
      <li><a class="previous page-numbers" href="index.php?next='.($next-2).'">&larr;</a></li>
      <li><a class="next page-numbers" href="index.php?next='.($next).'">&rarr;</a></li>
    </ul>
  </nav>';

?>
