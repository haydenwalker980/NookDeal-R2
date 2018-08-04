<form class="filter-form" method="GET">
  <div class="accordion">
    <div class="card">
      <div class="card-header collapsed" data-toggle="collapse" data-target="#sort-by">
        Sort By
      </div>
    </div>
    <div class="collapse" id="sort-by">
      <input type="radio" name="sort" id="low_to_high" value="low_to_high">
      <label for="low_to_high">Price: Low To High</label><br/>
      <input type="radio" name="sort" id="high_to_low" value="high_to_low">
      <label for="high_to_low">Price: High To Low</label><br/>
      <input type="radio" name="sort" id="newest" value="newest" checked>
      <label for="newest">Newest</label>
    </div>

    <div class="card">
      <div class="card-header collapsed" data-toggle="collapse" data-target="#price-range">
        Price Range
      </div>
    </div>
    <div class="collapse" id="price-range">
      <label for="minPrice">Minimum Price:</label>
      <div class="input-group">
        <i class="fas fa-dollar-sign"></i>
        <input type="number" id="minPrice" name="minPrice" class="form-control" step="1" min="0">
      </div>
      <label for="maxPrice">Maximum Price:</label>
      <div class="input-group mb-3">
        <i class="fas fa-dollar-sign"></i>
        <input type="number" id="maxPrice" name="maxPrice" class="form-control" step="1" min="0">
      </div>
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
  <div class="text-center pt-3">
    <button type="submit" name="refine-search" class="btn btn-info" value="true">
      Refine Search
    </button>
  </div>
</form>
