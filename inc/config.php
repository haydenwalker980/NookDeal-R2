<?php

// page navigation GET to variables
if(isset($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = "";
}
if(isset($_GET["c"])) {
  $c = $_GET["c"];
} else {
  $c = "";
}
if(isset($_GET["p"])) {
  $p = $_GET["p"];
} else {
  $p = "";
}
if(isset($_GET["pid"])) {
  $pid = $_GET["pid"];
} else {
  $pid = "";
}

// dynamic meta tags and stylesheets go here
// dynamic meta tags
$meta = [
  "title" => "My eCommerce Website",
];

// initialize different meta for products category and product id
switch($page) {
  case "products":
    $category = ucwords(str_replace('-', ' ', $c));
    $meta = [
      "title" => $category . " | My eCommerce Website",
    ];
    break;
  case "product":
    $meta = [
      "title" => $pid . " | My eCommerce Website",
    ];
    break;
}

?>
