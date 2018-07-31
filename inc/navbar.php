<?php
  // load categories from database
  $pcat_query =  "SELECT * FROM categories WHERE parent_id = 0";
  $pcat_result = mysqli_query($db, $pcat_query);
?>

<!-- top navigation bar -->

<nav>
  <div class="upper-nav">
    <div class="collapse-btn">
      <span class="hamburger"></span>
      <span class="hamburger"></span>
      <span class="hamburger"></span>
    </div>
    <a href="/"><img class="navbar-logo img-fluid" src="/imgs/logo.png" alt="logo.png"></a>
    <div class="help-account-cart">
      <a href="/account"><i class="fas fa-user-circle account-icon <?php if($page == 'account') {echo 'active';} ?>"></i></a>
      <a href="/cart"><i class="fas fa-shopping-cart cart-icon <?php if($page == 'cart') {echo 'active';} ?>"></i></a>
      <a href="/help"><i class="fas fa-question-circle help-icon <?php if($page == 'help') {echo 'active';} ?>"></i></a>
    </div>
  </div>
  <div class="lower-nav">
    <a href="/"><img class="navbar-logo img-fluid" src="/imgs/logo.png" alt="logo.png"></a>
    <ul class="navbar">
      <li class="navbar-item"><a href="/" class="navbar-link <?php if($page=='') {echo 'active';} ?>">HOME</a></li>

      <li class="navbar-item"><a href="#" class="navbar-link product-dropdown-button">PRODUCTS</a>
        <ul class="product-dropdown">
          <div class="row no-gutters justify-content-center">

          <?php while($pcat_row = mysqli_fetch_assoc($pcat_result)) : ?>

            <div class="col-12 col-sm-3">
              <li class="dropdown-title"><?= $pcat_row['category'] ?></li>

            <?php
              $parent_id = $pcat_row['id'];
              $scat_query = "SELECT * FROM categories WHERE parent_id = $parent_id";
              $scat_result = mysqli_query($db, $scat_query);
              while ($scat_row = mysqli_fetch_assoc($scat_result)) :
            ?>

              <li class="dropdown-item"><a href="/products/<?= $pcat_row['category'].'-'.$scat_row['category']; ?>" class="dropdown-link <?php if($c == $pcat_row['category'].'-'.$scat_row['category']) {echo 'active';} ?>"><?= $scat_row['category']; ?></a></li>

            <?php endwhile; ?>

            </div>

          <?php endwhile; ?>

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
