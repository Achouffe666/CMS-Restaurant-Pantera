<div class="row newsletter">
        <div class="col-4 newsletter-title">
        <h5><?php the_field('newsletter_main_title', 'option'); ?><br><?php the_field('newsletter_subtitle', 'option'); ?></h5>
        </div>
        <div class="col-8 newsletter-input">
        <form action="">
            <input type="text" placeholder="Yous Email Adress">
            <button><?php the_field('newsletter_subscribe', 'option'); ?></button>
        </form>
        </div>
    </div>

<div class="foot">

<div class=" row footer">
    
    <div class="col-3 sub-footer">
        <h6 style="font-size: 40px;">Pantera restaurant</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam asperiores ullam sequi natus odio! Pariatur, atque? Architecto suscipit perferendis .</p>
        <ul class="row media">
            <?php 
            $medias = get_field('social_media','option');
            foreach($medias as $elem) {
               ?>
            <li class="col-4 media-links" ><a href="<?php echo $elem['link']; ?>"><img src="<?php echo $elem['image']['url'];?>"></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="col-3 sub-footer">
        <h6>Open Hours</h6>
        <div class="hours">
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg">Mondays <hr> Closed</div>
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg">Tue-Fri <hr> 10am - 12am</div>
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg">Sat-Sun <hr> 7am - 1am</div>
            <div class="open-days"><img src="<?php echo get_template_directory_uri(); ?>/svg/time-clock.svg">Public Holidays <hr> 7am - 1am</div>
</div>
    </div>
    <div class="col-3 sub-footer">
        <h6>Contact us</h6>
        <div class="contact"><img src="<?php echo get_template_directory_uri(); ?>/svg/call (10).svg" alt="phone"><a href="tel: 000000">+1 (123) XXX-XXXX</a></div>
        <div class="contact"><img src="<?php echo get_template_directory_uri(); ?>/svg/place (14).svg" alt="Map">Rue de Mulhouse, 36<br><div style="margin-left: 7.5%">4020 Liege<br>Belgium</div></div>
        <div class="contact"><img src="<?php echo get_template_directory_uri(); ?>/svg/mail-1.svg" alt="Mail"><a href="mailto: devDesign@gmail.com">devDesign.studio@gmail.com</a></div>
    </div>
    <div class="col-3 sub-footer">
        <h6>Instagram</h6>
        <div class="insta-image">
            <img src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/0201510e-2cc0-3706-9d9f-261f1db0d54c.jpg" alt="">
            <img src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/0201510e-2cc0-3706-9d9f-261f1db0d54c.jpg" alt="">
            <img src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/0201510e-2cc0-3706-9d9f-261f1db0d54c.jpg" alt="">
            <img src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/0201510e-2cc0-3706-9d9f-261f1db0d54c.jpg" alt="">
            <img src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/0201510e-2cc0-3706-9d9f-261f1db0d54c.jpg" alt="">
            <img src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/0201510e-2cc0-3706-9d9f-261f1db0d54c.jpg" alt="">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="grey-line"></div>
        <p> &#169; All rights Reserved. Designed By Devdesign Studio</p>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
<?php wp_footer();?>

</body>
</html>