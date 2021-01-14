<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

<div class="container-fluid">
    <div class="container foods-cards ">
        <div class="row front-page-cards d-flex justify-content-center">
        <article class="col-xs-12 col-sm-12 col-md-5 col-lg-5 quality">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/quality-food.svg" alt="quality-food-icon" class="quality-food-icon">
            <h1> Quality Food </h1></p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic tempore temporibus, voluptatum natus laudantium ea iste. Aliquid, magnam quo.</p>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-5 col-lg-5 quality">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/fastest-delivery.svg" alt="fastest-delivery" class="quality-food-icon">
            <h1> Fastest delivery </h1></p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic tempore temporibus, voluptatum natus laudantium ea iste. Aliquid, magnam quo.</p>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-5 col-lg-5 quality">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/original-recipes.svg" alt="origina-recipes" class="quality-food-icon">
            <h1> Original repices </h1></p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic tempore temporibus, voluptatum natus laudantium ea iste. Aliquid, magnam quo.</p>
        </article>
        </div>
    </div>
</div>

<div class="the-chef">
    <img src="<?php echo get_template_directory_uri(); ?>/images/the-chef.jpg" alt="the-chef" class="">
    <div class="story">
        <p class="title-story">Discover</p>
        <p class="our-story"> Our story </p>
        <p class="subtitle-story"> ultimate dinning experience like no other </p>
        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem beatae ratione fuga sapiente quasi! Aliquid quibusdam quod, esse sapiente illum, voluptates velit eos similique illo ab, harum nemo commodi! 
            
        Laboriosam quam ratione nisi accusamus molestiae nobis, unde exercitationem asperiores magni? Aspernatur odit recusandae quos et nemo, consectetur sunt? Porro, maiores!</p>
       <p class="founder">Our founder</p>
       <p class="author">The Chef</p>
    </div>
</div>


<?php get_footer() ?>