
<?php include_once 'inc/database.php'; ?>
<?php include_once 'inc/config.php'; ?>
<?php include_once 'components/header.php'; ?>
<?php include_once 'components/navbar.php'; ?>

<div class="fixed-navbar-on" style="height: 75px;"></div>

<?php
// main page part
  switch($page) {
    case "":
      include("pages/home.php");
      break;
    case "products":
      include("pages/products.php");
      break;
    case "product":
      include("pages/singleProduct.php");
      break;
    case "about":
      include("pages/about.php");
      break;
    case "locations":
      include("pages/locations.php");
      break;
    case "account":
      include("pages/account.php");
      break;
    case "cart":
      include("pages/cart.php");
      break;
    case "help":
      include("pages/help.php");
      break;
    default:
      include("pages/home.php");
      break;
  }
?>
<?php include 'components/footer.php'; ?>
