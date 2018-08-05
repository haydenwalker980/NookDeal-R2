
<?php require_once 'inc/database.php'; // database connection ?>
<?php require_once 'inc/functions.php'; // helper functions ?>
<?php require_once 'inc/sql.php'; // SQL statements ?>
<?php require_once 'inc/config.php'; // page navigation config ?>
<?php include_once 'components/header.php'; ?>
<?php include_once 'components/navbar.php'; ?>

<div class="fixed-navbar-on" style="height: 75px;"></div>

<?php
// main page part
// page navigation depends on ?page= GET value
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
      echo "PAGE DOES NOT EXIST!<br/> * Need Page Not found page";
      break;
  }
?>
<?php include_once 'components/footer.php'; ?>
