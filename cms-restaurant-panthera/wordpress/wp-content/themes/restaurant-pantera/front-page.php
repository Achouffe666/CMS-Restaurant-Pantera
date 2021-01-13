<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	
    
    	<?php the_content(); ?>

	<?php endwhile; endif; ?>

<div class="container-fluid">
    <div class="container foods-cards">
        <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4 quality">
            <h1> Article </h1></p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic tempore temporibus, voluptatum natus laudantium ea iste. Aliquid, magnam quo.</p>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4 quality">
            <h1> Article </h1></p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic tempore temporibus, voluptatum natus laudantium ea iste. Aliquid, magnam quo.</p>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4 quality">
            <h1> Article </h1></p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic tempore temporibus, voluptatum natus laudantium ea iste. Aliquid, magnam quo.</p>
        </article>
        </div>
    </div>
</div>


<?php get_footer() ?>