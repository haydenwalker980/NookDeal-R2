<?php
  // fetch fixed rows of products for specific page
  $products = fetchProductsByCat($category[0], $category[1], $first_of_page, ITEMS_PER_PAGE);
?>

<?php foreach($products as $product) : ?>

<div class="col-12 col-sm-6 col-md-4 col-lg-3 text-center product-item">
  <p class="h5"><?= $product['name']; ?></p>
  <img class="img-fluid" src="<?= $s3_path.'/products/'.$product['image']; ?>" alt="<?= $product['image']; ?>">
  <p class="price">$ <?= $product['our_price']; ?></p>
  <a href="/product/<?= $product['id']; ?>" class="btn btn-sm btn-success">Details</a>
</div>

<?php endforeach; ?>
