<?php
  // load categories from database
  $sql = "SELECT * FROM `categories` WHERE parent_id = 0";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $parent_cat = $stmt->fetchAll();

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

          <?php
            foreach($parent_cat as $parent) :
            ?>

            <div class="col-12 col-sm-3">
              <li class="dropdown-title"><?= $parent['category'] ?></li>

            <?php
              $parent_id = $parent['id'];
              $sql = "SELECT * FROM `categories` WHERE parent_id = :parent_id";
              $stmt = $pdo->prepare($sql);
              $stmt->execute([
                "parent_id" => $parent_id,
              ]);
              $child_cat = $stmt->fetchAll();
              foreach($child_cat as $child) :
            ?>

              <li class="dropdown-item"><a href="/products/<?= $parent['category'].'-'.$child['category']; ?>" class="dropdown-link <?php if($c == $parent['category'].'-'.$child['category']) {echo 'active';} ?>"><?= $child['category']; ?></a></li>

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
