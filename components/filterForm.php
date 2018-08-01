<?php

  if(isset($_GET['sort'])) {
    $sort = mysqli_real_escape_string($db, $_GET['sort']);
    $size = array();
    if($_GET['XS']) {
      array_push($size, 'XS');
    }
    if($_GET['S']) {
      array_push($size, 'S');
    }
    if($_GET['M']) {
      array_push($size, 'M');
    }
    if($_GET['L']) {
      array_push($size, 'L');
    }
    if($_GET['XL']) {
      array_push($size, 'XL');
    }
    if($_GET['XXL']) {
      array_push($size, 'XXL');
    }
    $minPrice = (int)mysqli_real_escape_string($db, $_GET['minPrice'] );
    $maxPrice = (int)mysqli_real_escape_string($db, $_GET['maxPrice'] );
  } else {
    $sort = 'newest';
    $minPrice = 75;
    $maxPrice = 300;
    $size = array('XS', 'S', 'M', 'L', 'XL', 'XXL');
  }

?>

<form class="filter-form" method="get">
  <div class="accordion">
    <div class="card">
      <div class="card-header collapsed" data-toggle="collapse" data-target="#sort-by">
        Sort By
      </div>
    </div>
    <div class="collapse" id="sort-by">
      <input type="radio" name="sort" id="low_to_high" value="low_to_high" <?php if($sort=='low_to_high'){echo 'checked';} ?>>
      <label for="low_to_high">Price: Low To High</label><br/>
      <input type="radio" name="sort" id="high_to_low" value="high_to_low" <?php if($sort=='high_to_low'){echo 'checked';} ?>>
      <label for="high_to_low">Price: High To Low</label><br/>
      <input type="radio" name="sort" id="newest" value="newest" <?php if($sort=='newest'){echo 'checked';} ?>>
      <label for="newest">Newest</label>
    </div>

    <div class="card">
      <div class="card-header collapsed" data-toggle="collapse" data-target="#price-range">
        Price Range
      </div>
    </div>
    <div class="collapse" id="price-range">
      <p>
        <label for="amount">Price range:</label>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
      </p>

      <div id="slider-range"></div>
    </div>

    <div class="card">
      <div class="card-header collapsed" data-toggle="collapse" data-target="#size">
        Size
      </div>
    </div>
    <div class="collapse" id="size">
      <input type="checkbox" name="XS" value="true" checked hidden>
      <input type="checkbox" name="S" value="true" checked hidden>
      <input type="checkbox" name="M" value="true" checked hidden>
      <input type="checkbox" name="L" value="true" checked hidden>
      <input type="checkbox" name="XL" value="true" checked hidden>
      <input type="checkbox" name="XXL" value="true" checked hidden>
      <div class="row no-gutters size-btn-group px-4">
        <div class="col-4 text-center selected" data-select="XS">
          XS
        </div>
        <div class="col-4 text-center selected" data-select="S">
          S
        </div>
        <div class="col-4 text-center selected" data-select="M">
          M
        </div>
        <div class="col-4 text-center selected" data-select="L">
          L
        </div>
        <div class="col-4 text-center selected" data-select="XL">
          XL
        </div>
        <div class="col-4 text-center selected" data-select="XXL">
          XXL
        </div>

      </div>
    </div>

  </div>
</form>
