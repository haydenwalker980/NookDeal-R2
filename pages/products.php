<?php
  $category = explode("-", $c);
  $category = ucwords($category[0])." - ".ucwords($category[1]);
?>

<!-- main page part -->
<main>
  <div class="container-fluid container-products">
    <div class="row no-gutters justify-content-center">
      <aside class="sidebar-filter col-8 col-sm-2">
        <p class="h3 mt-3"><?= $category; ?></p>
        <hr>
        <?php include('./components/filterForm.php'); ?>
      </aside>

      <div class="col-12 col-sm item-list mt-5">
        <div class="row justify-content-start">

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
            <p class="h5">Men's Polo Shirts</p>
            <img class="img-fluid" src="/imgs/products/polo_shirts.jpg" alt="polo_shirts.jpg">
            <p class="price">$20.99</p>
            <a href="/product/1" class="btn btn-sm btn-success">Details</a>
          </div>

        </div>
      </div>
    </div>
  </div>


</main>
