<?php get_header() ?>
<div class="page-title">
  <h5>Welcome in Liege</h5>
  <h6>Presentation</h6>
</div>

<!-- for each cards... -->
<div class="row presentations-cards">
  <div class="col-6 presentation-cards-image">
    <img src="" alt="Image">
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
    <img src="" alt="Image">
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
    <img src="" alt="Presentation image">
    <div reservation-form>
        <form action="">
        <label for="name">Your Name</label>
        <input type="text" name="name" id="name">

        <label for="email">Your email</label>
        <input type="email" name="email" id="email">

        <label for="phonenumber">Your phone Number</label>
        <input type="tel" phonenumber="phonenumber" id="phonenumber">

        <select name="table-number" id="table-number">
          <option value="1">1 person</option>
          <option value="2">2 person</option>
          <option value="3">3 person</option>
          <option value="4">4 person</option>
          <option value="5">5 person</option>
          <option value="6">6 person</option>
          <option value="7">7 person</option>
          <option value="8">8 person</option>
        </select>

        <label for="message">Place</label>
        <select name="place" id="place">
        </select>

        <label for="message">Select Time</label>
        <select type="text" name="time" id="time">
        </select>

        <label for="message">Select Date</label>
        <select type="text" name="date" id="date">
        </select>

        <label for="message">Your Message</label>
        <input type="text" name="message" id="message">

        <input type="submit" value="Reserve now!">
        </form>
    </div>
  </div>

  <?php get_footer() ?>