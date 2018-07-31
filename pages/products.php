
<!-- main page part -->
<main>
  <div class="container-fluid container-products">
    <div class="row no-gutters">
      <aside class="sidebar-filter">
        <form class="filter-form" method="get">
          <div class="accordion">
            <div class="card">
              <div class="card-header collapsed" data-toggle="collapse" data-target="#sort-by">
                Sort By
              </div>
            </div>
            <div class="collapse" id="sort-by">
              <input type="radio" name="sort" value="low_to_high"> Price: Low To High<br/>
              <input type="radio" name="sort" value="high_to_low"> Price: High To Low<br/>
              <input type="radio" name="sort" value="newest"> Newest
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


          </div>
        </form>
      </aside>
      <div class="col item-list">
        hi
      </div>
    </div>
  </div>

</main>
