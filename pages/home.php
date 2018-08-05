<?php
  $products = fetchProducts("featured");
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

          <?php foreach($products as $product) : ?>

          <div class="col-sm-3 text-center product-item">
            <p class="h5"><?= ucwords($product['name']); ?></p>
            <p class="text-muted mb-0"><?= ucwords($product['parent_cat']); ?></p>
            <p class="text-muted"><?= ucwords($product['category']); ?></p>
            <img class="img-fluid" src="<?= $s3_path.'/products/'.$product['image']; ?>" alt="<?= $product['image']; ?>">
            <p class="price text-danger">List Price: <s>$<?= $product['list_price']; ?></s></p>
            <p class="price">Our Price: $<?= $product['our_price']; ?></p>
            <a href="/product/<?= $product['id']; ?>" class="btn btn-sm btn-success">Details</a>
          </div>

          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</main>
