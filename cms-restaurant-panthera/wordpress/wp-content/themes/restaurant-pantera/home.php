<?php get_header(); ?>
<div class="bg">
<div class="container home">
bla bla bla bla bla

	<?php $i=0; if( have_posts() ) : while( have_posts() ) : the_post();
	if ($i==0){ $i++;

	
	?>
    <div class="container col-xs-12 col-sm-12">
    <div class="row border">
	 <div class="col-7 reset"><?php the_post_thumbnail("post-thumbnail", ["class" => "card-img", "alt" => "", "style" => "height: auto;"
    ]) ?> </div>
	<div class="col-5 reset card-body">
	<i class="far fa-clock"></i> <?php the_time( get_option( 'date_format' ) ); ?> 
            </p>
		<article class="post">
		<h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
		<h5 class="card-title"><?php the_title(); ?></h5>  	
            
			<p class="card-text">
			<?php the_excerpt(); ?>
		<p class="d-flex justify-content-center">
                <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">Read more</button></a>
            </p>
		</article>
  </div>
</div>
 </div>
<?php } 
else{?><div class="container col-xs-12 col-sm-12">
    <div class="row border">
	 
	<div class="col-5 reset card-body">
	<i class="far fa-clock"></i> <?php the_time( get_option( 'date_format' ) ); ?> 
            </p>
		<article class="post">
		<h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
		<h5 class="card-title"><?php the_title(); ?></h5>  	
            
			<p class="card-text">
			<?php the_excerpt(); ?>
		<p class="d-flex justify-content-center">
                <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">Read more</button></a>
            </p>
		</article>
  </div>
  <div class="col-7 reset"><?php the_post_thumbnail("post-thumbnail", ["class" => "card-img", "alt" => "", "style" => "height: auto;"
    ]) ?> </div>
</div>
 </div>
<?php $i=0;
}
?>

	<?php endwhile; endif; ?></div>
<?php get_footer(); ?>