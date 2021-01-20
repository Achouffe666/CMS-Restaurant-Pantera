<div class="row newsletter">
        <div class="col-4 newsletter-title">
        <h5>Join our<br>newsletter</h5>
        </div>
        <div class="col-8 newsletter-input">
        <form action="">
            <input type="text" placeholder="Yous Email Adress">
            <button>SUBSCRIBE</button>
        </form>
        </div>
    </div>

<div class="foot">

<div class=" row footer">
    
    <div class="col-3 sub-footer">

        <h6 style="font-size: 40px;"><?php the_field('description_title', 'option'); ?></h6>
        <p><?php the_field('description_short_description', 'option'); ?></p>
        <ul class="row media">
            <li class="col-4 media-links" style="background-color: #3B5999;"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/svg/facebook.svg" alt="Facebook"></a></li>
            <li class="col-4 media-links" style="background-color: #56ADF0;"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/svg/twitter.svg" alt="Twitter"></a></li>
            <li class="col-4 media-links" style="background-color: #E54261;"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/svg/instagram.svg" alt="Instagram"></a></li>
            <li class="col-4 media-links" style="background-color: #0077B4;"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/svg/linkedin.svg" alt="Linkdin"></a></li>
        </ul>
    </div>
    <div class="col-3 sub-footer">
        <h6><?php the_field('open_hours_title', 'option'); ?></h6>
        <div class="hours">
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg"><?php the_field('open_hours_row_1_day', 'option'); ?> <hr> <?php the_field('open_hours_row_1_hours', 'option'); ?></div>
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg"><?php the_field('open_hours_row_2_day', 'option'); ?> <hr> <?php the_field('open_hours_row_1_hours', 'option'); ?></div>
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg"><?php the_field('open_hours_row_3_day', 'option'); ?> <hr> <?php the_field('open_hours_row_1_hours', 'option'); ?></div>
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg"><?php the_field('open_hours_row_4_day', 'option'); ?><hr> <?php the_field('open_hours_row_1_hours', 'option'); ?></div>
</div>
    </div>
    <div class="col-3 sub-footer">
        <h6><?php the_field('adress_title', 'option'); ?></h6>
        <div class="contact"><img src="<?php echo get_template_directory_uri(); ?>/svg/call (10).svg" alt="phone"><a href="tel: <?php the_field('adress_phone_number', 'option'); ?>"><?php the_field('adress_phone_number', 'option'); ?></a></div>
        <div class="contact"><img src="<?php echo get_template_directory_uri(); ?>/svg/place (14).svg" alt="Map"><?php the_field('adress_street', 'option'); ?><br><div style="margin-left: 7.5%"><?php the_field('adress_post_code', 'option'); ?><br><?php the_field('adress_country', 'option'); ?></div></div>
        <div class="contact"><img src="<?php echo get_template_directory_uri(); ?>/svg/mail-1.svg" alt="Mail"><a href="mailto: devDesign@gmail.com"><?php the_field('adress_email', 'option'); ?></a></div>
    </div>
    <div class="col-3 sub-footer">
        <h6><?php the_field('images_title', 'option'); ?></h6>
        <div class="insta-image">
           
            <img src="<?php echo get_field('images_image_1')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_2')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_3')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_4')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_5')['url']?>" alt="">
            <img src="<?php echo get_field('images_image_6')['url']?>" alt="">
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