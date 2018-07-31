<?php
  $category = explode("-", $c);
  $category = ucwords($category[0])." - ".ucwords($category[1]);
?>

<!-- main page part -->
<main>
  <div class="container-fluid container-products">
    <div class="row no-gutters">
      <aside class="sidebar-filter">
        <p class="h3 mt-3"><?= $category; ?></p>
        <hr>
        <form class="filter-form" method="get">
          <div class="accordion">
            <div class="card">
              <div class="card-header collapsed" data-toggle="collapse" data-target="#sort-by">
                Sort By
              </div>
            </div>
            <div class="collapse" id="sort-by">
              <input type="radio" name="sort" id="low_to_high" value="low_to_high">
              <label for="low_to_high">Price: Low To High</label><br/>
              <input type="radio" name="sort" id="high_to_low" value="high_to_low">
              <label for="high_to_low">Price: High To Low</label><br/>
              <input type="radio" name="sort" id="newest" value="newest" checked>
              <label for="newest">Newest</label>
            </div>

            <div class="card">
              <div class="card-header collapsed" data-toggle="collapse" data-target="#price-range">
                Price Range
              </div>
            </div>
            <div class="collapse" id="price-range">
              <p>
                <label for="amount">Price range:</label>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
              </p>

              <div id="slider-range"></div>
            </div>

            <div class="card">
              <div class="card-header collapsed" data-toggle="collapse" data-target="#size">
                Size
              </div>
            </div>
            <div class="collapse" id="size">
              <input type="checkbox" name="size" value="XS" checked hidden>
              <input type="checkbox" name="size" value="S" checked hidden>
              <input type="checkbox" name="size" value="M" checked hidden>
              <input type="checkbox" name="size" value="L" checked hidden>
              <input type="checkbox" name="size" value="XL" checked hidden>
              <input type="checkbox" name="size" value="XXL" checked hidden>
              <div class="row no-gutters size-btn-group px-4">
                <div class="col-4 text-center selected" data-select="XS">
                  XS
                </div>
                <div class="col-4 text-center selected" data-select="S">
                  S
                </div>
                <div class="col-4 text-center selected" data-select="M">
                  M
                </div>
                <div class="col-4 text-center selected" data-select="L">
                  L
                </div>
                <div class="col-4 text-center selected" data-select="XL">
                  XL
                </div>
                <div class="col-4 text-center selected" data-select="XXL">
                  XXL
                </div>

              </div>
            </div>


          </div>
        </form>
      </aside>

      <div class="col item-list">
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

        </div>
      </div>
    </div>
  </div>

</main>
