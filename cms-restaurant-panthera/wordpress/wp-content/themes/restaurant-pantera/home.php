<?php get_header(); ?>
<div class="bg">
<div class="container">
bla bla bla bla bla

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="col-sm">
	
    <div class="card">
	
	<div class="card-body">
	<i class="far fa-clock"></i> <?php the_time( get_option( 'date_format' ) ); ?> 
            </p>
		<article class="post">
		<h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
		<h5 class="card-title"><?php the_title(); ?></h5>
      
        	<?php the_post_thumbnail(); ?>
            
          
			<p class="card-text">
      		<?php the_excerpt(); ?>
              
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">Read more</button></a>
            </p>
		</article>
  </div>
</div>
 </div>



	<?php endwhile; endif; ?></div>
<?php get_footer(); ?>