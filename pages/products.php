<?php
  define("ITEMS_PER_PAGE", 8);
  $category = explode("-", $c);
  $full_category = ucwords($category[0])." - ".ucwords($category[1]);
  // $category[0] = parent category
  // $category[1] = child category

  // pagination
  $row_num = totalProducts($category[0], $category[1]);
  $page_num = ceil($row_num/ITEMS_PER_PAGE);
  $first_of_page = ITEMS_PER_PAGE*($p-1);
?>

<!-- main page part -->
<main>
  <div class="container-fluid container-products">
    <div class="row no-gutters justify-content-center">
      <aside class="sidebar-filter col-8 col-sm-2">
        <p class="h3 mt-3"><?= $full_category; ?></p>
        <hr>
        <?php include_once('./components/filterForm.php'); ?>
      </aside>

      <div class="col-12 col-sm item-list mt-5">
        <div class="row justify-content-start">

        <?php include_once('components/productCard.php'); ?>

        </div>
        <?php include_once('components/pagination.php'); ?>
      </div>
    </div>



</main>
