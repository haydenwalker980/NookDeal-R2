<?php
  $sql = 'SELECT * FROM `products` WHERE featured = 1';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $featured = $stmt->fetchAll();
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

          <?php foreach($featured as $featured) : ?>

            <?php
              // get category name from products' category_id
              $cat_id = $featured['category_id'];
              $sql = "SELECT * FROM `categories` WHERE id = :cat_id";
              $stmt = $pdo->prepare($sql);
              $stmt->execute([
                "cat_id" => $cat_id,
              ]);
              $child_cat = $stmt->fetch();
              $cat_name = ucwords($child_cat['category']);
              // get category's parent category name
              if ($child_cat['parent_id'] != 0) {
                $parent_id = $child_cat['parent_id'];
                $sql = "SELECT * FROM `categories` WHERE id = :parent_id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                  "parent_id" => $parent_id,
                ]);
                $parent_cat = $stmt->fetch();
                $cat_name = ucwords($parent_cat['category'])."-".ucwords($child_cat['category']);
              }
            ?>

          <div class="col-sm-3 text-center product-item">
            <p class="h5"><?= $featured['name']; ?></p>
            <p class="text-muted"><?= $cat_name ?></p>
            <img class="img-fluid" src="/imgs/products/<?= $featured['image']; ?>" alt="<?= $featured['image']; ?>">
            <p class="price text-danger">List Price: <s>$<?= $featured['list_price']; ?></s></p>
            <p class="price">Our Price: $<?= $featured['our_price']; ?></p>
            <a href="/product/<?= $featured['id']; ?>" class="btn btn-sm btn-success">Details</a>
          </div>

          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</main>
