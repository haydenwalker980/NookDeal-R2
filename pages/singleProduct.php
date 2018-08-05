<?php
  $product = fetchProductById($pid);
  include_once('components/writeReviewModal.php');
?>
<!-- main page part -->
<main>
  <div class="container-fluid container-singleProduct">
    <p class="h1 text-center"><?= $product['name']; ?></p>
    <div class="row justify-content-center my-5 product-details">
      <div class="col-12 col-md-5">
        <img src="<?= $s3_path.'/products/'.$product['image'] ?>" alt="<?= $product['image']; ?>" class="img-fluid">
      </div>
      <div class="col-10 col-md-7">
        <p class="h3">Details</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <hr>
        <form class="add-to-cart" action="#" method="POST">
          <label class="h4" for="size">Sizes:</label>
          <select class="add-size form-control" name="size" id="size">
            <option value="XS" <?php if($product['XS']==0) { echo "disabled"; }?> >
              Extra Small - <?php if($product['XS']==0) { echo "Out of Stock"; } else { echo $product['XS']." in Stock"; }?>
            </option>
            <option value="S" <?php if($product['S']==0) { echo "disabled"; }?> >
              Small - <?php if($product['S']==0) { echo "Out of Stock"; } else { echo $product['S']." in Stock"; }?>
            </option>
            <option value="M" <?php if($product['M']==0) { echo "disabled"; }?> >
              Medium - <?php if($product['M']==0) { echo "Out of Stock"; } else { echo $product['M']." in Stock"; }?>
            </option>
            <option value="L" <?php if($product['L']==0) { echo "disabled"; }?> >
              Large - <?php if($product['L']==0) { echo "Out of Stock"; } else { echo $product['L']." in Stock"; }?>
            </option>
            <option value="XL" <?php if($product['XL']==0) { echo "disabled"; }?> >
              Extra Large - <?php if($product['XL']==0) { echo "Out of Stock"; } else { echo $product['XL']." in Stock"; }?>
            </option>
            <option value="XXL" <?php if($product['XXL']==0) { echo "disabled"; }?> >
              Extra Extra Large - <?php if($product['XXL']==0) { echo "Out of Stock"; } else { echo $product['XXL']." in Stock"; }?>
            </option>
          </select>
          <div class="text-center mt-5">
            <button type="submit" name="button" class="btn btn-info">
              <i class="fas fa-cart-arrow-down"></i>
              Add To Cart
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="row justify-content-center product-review">
      <div class="col-10 text-center p-0">
        <p class="display-4">Ratings & Reviews</p>
        <hr class="w-75">
        <div class="overall-rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <p class="mt-2">5.0 (<a href="#"><u>3 Reviews</u></a>)</p>
          <p><strong>100%</strong> Recommended This Item.</p>
        </div>
        <button type="button" class="btn btn-write-review" data-toggle="modal" data-target="#add-review-modal">Write a Review</button>

      <?php for($i = 0; $i < 3; $i++) : ?>
        <hr>
        <?php include('components/reviewCard.php'); ?>
      <?php endfor; ?>

      </div>
    </div>
  </div>

</main>
