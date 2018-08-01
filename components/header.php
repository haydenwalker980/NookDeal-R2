<!-- dynamic meta tags and stylesheets go here -->
<?php
//dynamic meta tags
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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite|Great+Vibes|Merienda|Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/style/style.min.css">
    <title><?= $meta['title']; ?></title>
  </head>
  <body>
