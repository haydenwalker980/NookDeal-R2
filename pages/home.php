<?php
  $featured_query = "SELECT * FROM products WHERE `featured` = 1";
  $featured_result = mysqli_query($db, $featured_query);
?>


<main>
  <div class="banner-full">
    <div class="banner-overlay"></div>
    <div class="banner-text-box">
      <p class="banner-text-title h2">Summer Special!</p>
      <p class="banner-text">All featuring summer outfits for up to <span>30%</span> off.</p>
      <div class="text-center">
         <a href="#" class="banner-btn">View Featured Items</a>
      </div>
    </div>
  </div>

  <div class="container-fluid container-featured mt-5 mb-5 text-center">
    <p class="h2">Featured Products</p>
    <hr class="w-50 mb-4">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <div class="row product-list">

          <?php while($featured_row = mysqli_fetch_assoc($featured_result)) : ?>

            <?php
              // get category name from products' category_id
              $category_id = $featured_row['category_id'];
              $scat_query = "SELECT * FROM `categories` WHERE id = $category_id";
              $scat_result = mysqli_query($db, $scat_query);
              $scat_row = mysqli_fetch_assoc($scat_result);
              $category_name = ucwords($scat_row['category']);
              // get category's parent category name
              if ($scat_row['parent_id'] != 0) {
                $parent_id = $scat_row['parent_id'];
                $pcat_query = "SELECT * FROM `categories` WHERE id = $parent_id";
                $pcat_result = mysqli_query($db, $pcat_query);
                $pcat_row = mysqli_fetch_assoc($pcat_result);
                $category_name = ucwords($pcat_row['category'])."-".ucwords($scat_row['category']);
              }
            ?>

          <div class="col-sm-3 text-center product-item">
            <p class="h5"><?= $featured_row['name']; ?></p>
            <p class="text-muted"><?= $category_name ?></p>
            <img class="img-fluid" src="/imgs/products/<?= $featured_row['image']; ?>" alt="<?= $featured_row['image']; ?>">
            <p class="price text-danger">List Price: <s>$<?= $featured_row['list_price']; ?></s></p>
            <p class="price">Our Price: $<?= $featured_row['our_price']; ?></p>
            <a href="/product/<?= $featured_row['id']; ?>" class="btn btn-sm btn-success">Details</a>
          </div>

          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </div>
</main>
