
<!-- main page part -->
<main>
  <div class="container-fluid container-singleProduct">
    <p class="h1 text-center">Men's Polo Shirts</p>
    <div class="row justify-content-center my-5 product-details">
      <div class="col-12 col-md-5">
        <img src="/imgs/products/polo_shirts.jpg" alt="Product.jpg" class="img-fluid">
      </div>
      <div class="col-10 col-md-7">
        <p class="h3">Details</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <hr>
        <form class="add-to-cart" action="#" method="POST">
          <label class="h4" for="size">Sizes:</label>
          <select class="add-size form-control" name="size" id="size">
            <option value="XS">Extra Small - 3 in Stock</option>
            <option value="S">Small - 5 in Stock</option>
            <option value="M">Medium - Out of Stock</option>
            <option value="L">Large - 2 in Stock</option>
            <option value="XL">Extra Large - 8 in Stock</option>
            <option value="XXL">Extra Extra Large - 2 in Stock</option>
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
        <hr>

        <div class="row review-card text-left">
          <div class="col-md-4">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="col-md-8">
            <p class="h4"><strong>Review Title</strong></p>
          </div>
          <div class="col-md-4 order-4 order-md-3">
            <strong>Customer</strong>
            <p class="text-muted">On 26 July, 2018</p>
          </div>
          <div class="col-md-8 order-3 order-md-4">
            <p class="lead">Wow Really nice shirts!</p>
            <br>
            <p><strong>Size: </strong> S</p>
            <p><strong>Would you recommend?: </strong>Yes</p>
          </div>
        </div>

        <hr>

        <div class="row review-card text-left">
          <div class="col-md-4">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="col-md-8">
            <p class="h4"><strong>Review Title</strong></p>
          </div>
          <div class="col-md-4 order-4 order-md-3">
            <strong>Customer</strong>
            <p class="text-muted">On 26 July, 2018</p>
          </div>
          <div class="col-md-8 order-3 order-md-4">
            <p class="lead">Wow Really nice shirts!</p>
            <br>
            <p><strong>Size: </strong> S</p>
            <p><strong>Would you recommend?: </strong>Yes</p>
          </div>
        </div>

        <hr>

        <div class="row review-card text-left">
          <div class="col-md-4">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <div class="col-md-8">
            <p class="h4"><strong>Review Title</strong></p>
          </div>
          <div class="col-md-4 order-4 order-md-3">
            <strong>Customer</strong>
            <p class="text-muted">On 26 July, 2018</p>
          </div>
          <div class="col-md-8 order-3 order-md-4">
            <p class="lead">Wow Really nice shirts!</p>
            <br>
            <p><strong>Size: </strong> S</p>
            <p><strong>Would you recommend?: </strong>Yes</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Write a Post Modal -->
  <div class="modal fade" id="add-review-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Write a Review</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-group" action="#" method="POST">
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="col-4">
                <img src="/imgs/products/polo_shirts.jpg" alt="Product.jpg" class="img-fluid">
              </div>
              <div class="col-8">
                <p class="h4"><strong>Polo Shirts</strong></p>
                <p class="mt-5">Overall Rating:
                  <span id="overall-rating"></span>
                </p>
                <input type="number" name="rating" id="rating-hidden" value="0" hidden>
                <div class="star-rating">
                  <i class="far fa-star" data-rating="Poor"></i>
                  <i class="far fa-star" data-rating="Fair"></i>
                  <i class="far fa-star" data-rating="Average"></i>
                  <i class="far fa-star" data-rating="Good"></i>
                  <i class="far fa-star" data-rating="Excellent"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-secondary w-100">Submit Your Review</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</main>
