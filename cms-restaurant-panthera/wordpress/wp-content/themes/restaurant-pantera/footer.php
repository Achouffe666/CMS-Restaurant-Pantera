<div class="row newsletter">
<div class="col-lg-4 col-md-12 col-sm-12 newsletter-title">
        <h5><?php the_field('newsletter_main_title', 'option'); ?><br><?php the_field('newsletter_subtitle', 'option'); ?></h5>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 newsletter-input">
        <form action="">
            <input type="text" placeholder="Yous Email Adress">
            <button><?php the_field('newsletter_subscribe', 'option'); ?></button>
        </form>
        </div>
    </div>

<div class="foot">

<div class=" row footer">

    <div class="col-lg-3 sub-footer">

<div class="grid1"><h6 style="font-size: 40px;"><?php the_field('description_title', 'option'); ?></h6></div>
        <div class="grid2"><p><?php the_field('description_short_description', 'option'); ?></p></div>
        <ul class="row media">
            <?php
            $medias = get_field('social_media','option'); 
            foreach($medias as $media){
            ?>
            <li class="col-lg-4 grid3 media-links" ><a href="<?php echo $media['link']; ?>"><img src="<?php echo $media['image']['url']; ?>" alt="media-link"></a></li>
       <?php 
       } ?>
        </ul>
    </div>
    <div class="col-lg-3 grid4 sub-footer">
        <h6><?php the_field('open_hours_title', 'option'); ?></h6>
        <div class="hours">
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg"><?php the_field('open_hours_row_1_day', 'option'); ?> <hr> <?php the_field('open_hours_row_1_hours', 'option'); ?></div>
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg"><?php the_field('open_hours_row_2_day', 'option'); ?> <hr> <?php the_field('open_hours_row_1_hours', 'option'); ?></div>
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg"><?php the_field('open_hours_row_3_day', 'option'); ?> <hr> <?php the_field('open_hours_row_1_hours', 'option'); ?></div>
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg"><?php the_field('open_hours_row_4_day', 'option'); ?><hr> <?php the_field('open_hours_row_1_hours', 'option'); ?></div>
</div>
    </div>
    <div class="col-lg-3 grid5 sub-footer">
        <h6><?php the_field('adress_title', 'option'); ?></h6>
        <div class="contact"><img src="<?php echo get_template_directory_uri(); ?>/svg/call (10).svg" alt="phone"><a href="tel: <?php the_field('adress_phone_number', 'option'); ?>"><?php the_field('adress_phone_number', 'option'); ?></a></div>
        <div class="contact"><img src="<?php echo get_template_directory_uri(); ?>/svg/place (14).svg" alt="Map"><?php the_field('adress_street', 'option'); ?><br><div style="margin-left: 7.5%"><?php the_field('adress_post_code', 'option'); ?><br><?php the_field('adress_country', 'option'); ?></div></div>
        <div class="contact"><img src="<?php echo get_template_directory_uri(); ?>/svg/mail-1.svg" alt="Mail"><a href="mailto: devDesign@gmail.com"><?php the_field('adress_email', 'option'); ?></a></div>
    </div>
    <div class="col-lg-3 grid6 sub-footer">
        <h6><?php the_field('images_title', 'option'); ?></h6>
        <div class="insta-image">
            <img src="<?php echo get_field('images_image_1','options')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_2','options')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_3','options')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_4','options')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_5','options')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_6','options')['url']?>" alt="">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="grey-line"></div>
        <p> <?php the_field('copyright', 'option'); ?></p>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
<?php wp_footer();?>

</body>
</html>