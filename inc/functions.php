<?php
// =============================================================================
// return total number of products under specific category
// =============================================================================
function totalProducts($p_cat, $c_cat) {
  global $pdo;
  $sql = "SELECT products.id, name, list_price, our_price, XS, S, M, L, XL, XXL, image, categories.category, categories.parent_cat
          FROM `products`
          JOIN `categories` ON categories.id = products.category_id
          WHERE category = '$c_cat' AND parent_cat = '$p_cat'";
  $query = $pdo->query($sql);
  return $query->rowCount();
}

?>
