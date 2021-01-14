<?php get_header(); ?>
<div class="bg">

<div class="container home">

<div class="color">
<?php $cuisines = get_terms(['taxonomy' => 'cuisine']); ?>

<ul class="nav nav-pills my-6">
    <?php foreach($cuisines as $cuisine): ?>
		 <li class="nav-item">
		 <img src="<?php echo get_template_directory_uri(); ?>/svg/cutelry.svg" alt="" style="width: 15px;margin-right: 5px;">
		<a href="<?= get_term_link($cuisine) ?>" class="nav-link <?= is_tax('cuisine', $cuisine->term_id) ? 'active' : '' ?>"><?= $cuisine->name ?></a>
    </li>
    <?php endforeach; ?>
</ul></div>


	
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
			<article class="post"> <img src="<?php echo get_template_directory_uri(); ?>/svg/cutelry.svg" alt="" style="width: 15px;margin-right: 5px;"> <?php the_terms(get_the_ID(),"cuisine") ?>
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
			<article class="post"> <img src="<?php echo get_template_directory_uri(); ?>/svg/cutelry.svg" alt="" style="width: 15px;margin-right: 5px;"> <?php the_terms(get_the_ID(),"cuisine") ?>
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


	<?php endwhile; endif; ?>
	<?= pantera_pagination(); ?>




</div>

<?php get_footer(); ?>
