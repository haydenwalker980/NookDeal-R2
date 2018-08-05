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
              <img src="<?= $s3_path.'/products/'.$product['image'] ?>" alt="<?= $product['image']; ?>" class="img-fluid">
            </div>
            <div class="col-8">
              <p class="h4"><strong><?= $product['name']; ?></strong></p>
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
