<?php get_header(); ?>
<div class="bg-white">
<div class="page-title">
  <h5>Welcome in Liege</h5>
  <h6>Presentation</h6>
</div>

<!-- for each cards... -->
<div class="row presentations-cards">
  <div class="col-6 presentation-cards-image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/the-chef.jpg">
  </div>
  <!-- if i=0 => -->
  <div class="col-6 presentation-cards-text">
    <h5>Our original restaurant</h5>
    <h6>The chef's cafeteria</h6>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, consequatur eaque. Ab architecto possimus quasi iusto dolor quia inventore quae in assumenda similique, ipsum officia provident tempore, repellat ratione voluptates.
    </p>
  </div>
</div>
<!-- else -->
<div class="row presentations-cards">
  <div class="col-6 presentation-cards-text">
    <h5>Our original restaurant</h5>
    <h6>The chef's cafeteria</h6>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, consequatur eaque. Ab architecto possimus quasi iusto dolor quia inventore quae in assumenda similique, ipsum officia provident tempore, repellat ratione voluptates.
    </p>
  </div>
  <div class="col-6 presentation-cards-image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/the-chef.jpg">
  </div>
</div>

<div class='map'>
  <h5>Find us</h5>
  <h6>Location</h6>
  <div class="google-map">
    google map here
  </div>
</div>

<div class="reservation">
  <h5>Submit information to place order</h5>
  <h6>Reserve a table</h6>
  <div class='reservation-container'>
  <img src="<?php echo get_template_directory_uri(); ?>/images/the-chef.jpg">
    <div class='reservation-form'>
      <form action="">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label for="email">Your email</label>
            <input type="email" name="email" id="email" class="form-control">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="phonenumber">Your phone Number</label>
              <input type="tel" phonenumber="phonenumber" id="phonenumber" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="table-number">Table for</label>
              <select name="table-number" id="table-number" class="form-control">
                <option value="1">1 person</option>
                <option value="2">2 person</option>
                <option value="3">3 person</option>
                <option value="4">4 person</option>
                <option value="5">5 person</option>
                <option value="6">6 person</option>
                <option value="7">7 person</option>
                <option value="8">8 person</option>
              </select>
            </div>
          </div>
        </div>

          <div class="form-group">
            <label for="message">Place</label>
            <select name="place" id="place" class="form-control">
            </select>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="message">Select Time</label>
              <select type="text" name="time" id="time" class="form-control">
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="message">Select Date</label>
              <select type="text" name="date" id="date" class="form-control">
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="message">Your Message</label>
            <textarea type="text" name="message" id="message" class="form-control"></textarea>
          </div>
          <input type="submit" value="Reserve now!">
      </form>
    </div>
</div>
</div>

<?php get_footer();?>