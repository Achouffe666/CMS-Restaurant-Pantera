<?php get_header();?>
<header style="background-image:url('<?php echo get_field("banner_top_image")['url']; ?>');">
<div class="navbar menubar">
<h1><a href="<?php echo home_url( '/' ); ?>"><?php echo get_field("banner_top_main_title");?></a></h1>
<div class="menu"><?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?></div>
</div>
<div class="first-title">
    <p><?php echo get_field("banner_top_subtitle");?></p>
</div>
<div class="left-bars">
    <div class="bars bars-1"></div>
    <div class="bars bars-2"></div>
    <div class="bars bars-3"></div>
    <div class="bars bars-4"></div>
</div>
<div class="subtitle">
<div class="white-bar"></div><a href="#"> Check our menu </a>
</div>

</header>

<div class="bg-white">
<div class="page-title">
  <h5><?php echo get_field("banner_presentation_title");?></h5>
  <h6><?php echo get_field("banner_presentation_subtitle");?></h6>
</div>

<!-- for each cards... -->
<?php 
$repeater = get_field("banner_presentation_repeater");
$r = 0;

foreach ($repeater as $element){

?>
  <?php if($r==0){ ?>
<div class="row presentations-cards">

  <div class="col-lg-6 col-md-12 col-sm-12 presentation-cards-image">
    <img src="<?php echo $element['image']['url'];?>">
  </div>
  <!-- if i=0 => -->
  <div class="col-lg-6 col-md-12 col-sm-12 presentation-cards-text">
    <h5><?php echo $element['title'];?></h5>
    <h6><?php echo $element['subtitle'];?></h6>
    <p>
    <?php echo $element['text_area'];?>  
  </p>
  </div>
</div>
<?php }else{ ?>
<!-- else -->
<div class="row presentations-cards">
<div class="col-lg-6 col-md-12 col-sm-12 presentation-cards-text">
    <h5><?php echo $element['title'];?></h5>
    <h6><?php echo $element['subtitle'];?></h6>
    <p>
    <?php echo $element['text_area'];?>  
  </p>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 presentation-cards-image">
    <img src="<?php echo $element['image']['url'];?>">
  </div>
</div>
<?php $r = 0;} ?>
<?php 
 $r++;
}?>

<div class='col-lg-12 col-md-12 col-sm-12 map'>
  <h5><?php echo get_field("location_title");?></h5>
  <h6><?php echo get_field("location_subtitle");?></h6>

  <?php if (have_rows('location')) : ?>

<?php while (have_rows('location')) : the_row(); ?>

    <?php
    get_template_part('template-parts/content', get_post_format());

    $location = get_sub_field('map');

    if (!empty($location)) :
    ?>
        <div class="acf-map google-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
    <?php endif; ?>


<?php endwhile;
endif; ?>


<div class="col-lg-12 col-md-12 col-sm-12 reservation">
  <h5><?php echo get_field("reservation_title");?></h5>
  <h6><?php echo get_field("reservation_subtitle");?></h6>
  <div class='reservation-container'>
  <img src="<?php echo get_field("reservation_image")['url']; ?>">

    <div class='reservation-form'>
      <form method = 'POST'>
      <input type="hidden" name="action" value="process_form">
        <div class="form-row">
          <div class="form-group col-md-6 col-sm-12">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" class="form-control">
          </div>
          <div class="form-group col-md-6 col-sm-12">
            <label for="email">Your email</label>
            <input type="email" name="email" id="email" class="form-control">
          </div>
        </div>
          <div class="form-row">
            <div class="form-group col-md-6 col-sm-12">
              <label for="phonenumber">Your phone Number</label>
              <input type="tel" phonenumber="phonenumber" id="phonenumber" class="form-control">
            </div>
            <div class="form-group col-md-6 col-sm-12">
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
          <input type="submit" name = "submit" value="Reserve now!" class="revervation-button">
      </form>
    </div>
</div>
</div>
<?php include ("include-last-post.php"); ?>

<?php get_footer(); ?>