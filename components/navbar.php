<?php
  $parent_cats = fetchParentCategories();
?>
<!-- top navigation bar -->

<nav>
  <div class="upper-nav">
    <div class="collapse-btn">
      <span class="hamburger"></span>
      <span class="hamburger"></span>
      <span class="hamburger"></span>
    </div>
    <a href="/"><img class="navbar-logo img-fluid" src="/img/logo.png" alt="logo.png"></a>
    <div class="help-account-cart">
      <a href="/account"><i class="fas fa-user-circle account-icon <?php if($page == 'account') {echo 'active';} ?>"></i></a>
      <a href="/cart"><i class="fas fa-shopping-cart cart-icon <?php if($page == 'cart') {echo 'active';} ?>"></i></a>
      <a href="/help"><i class="fas fa-question-circle help-icon <?php if($page == 'help') {echo 'active';} ?>"></i></a>
    </div>
  </div>
  <div class="lower-nav">
    <a href="/"><img class="navbar-logo img-fluid" src="/img/logo.png" alt="logo.png"></a>
    <ul class="navbar">
      <li class="navbar-item"><a href="/" class="navbar-link <?php if($page=='') {echo 'active';} ?>">HOME</a></li>

      <li class="navbar-item"><a href="#" class="navbar-link product-dropdown-button">PRODUCTS</a>
        <ul class="product-dropdown">
          <div class="row no-gutters justify-content-center">

          <?php foreach($parent_cats as $parent_cat) : ?>

            <div class="col-12 col-sm-3">
              <li class="dropdown-title"><?= $parent_cat['category'] ?></li>

                <?php
                  $child_cats = fetchChildCategories($parent_cat['category']);
                  foreach($child_cats as $child_cat) :
                ?>

              <li class="dropdown-item"><a href="/products/<?= $parent_cat['category'].'-'.$child_cat['category']; ?>" class="dropdown-link <?php if($c == $parent_cat['category'].'-'.$child_cat['category']) {echo 'active';} ?>"><?= $child_cat['category']; ?></a></li>

            <?php endforeach; ?>

            </div>

          <?php endforeach; ?>

          </div>
        </ul>
      </li>

      <li class="navbar-item"><a href="/about" class="navbar-link <?php if($page == 'about') {echo 'active';} ?>">ABOUT</a></li>

      <li class="navbar-item"><a href="/locations" class="navbar-link <?php if($page == 'locations') {echo 'active';} ?>">LOCATIONS</a></li>

    </ul>

    <div class="help-account-cart">
      <a href="/account"><i class="fas fa-user-circle account-icon <?php if($page == 'account') {echo 'active';} ?>"></i></a>
      <a href="/cart"><i class="fas fa-shopping-cart cart-icon <?php if($page == 'cart') {echo 'active';} ?>"></i></a>
      <a href="/help"><i class="fas fa-question-circle help-icon <?php if($page == 'help') {echo 'active';} ?>"></i></a>
    </div>
  </div>

</nav>
