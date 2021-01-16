<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    
  <div class="container single">
 
  
<div class="row">

<ul class="nav nav-pills">

<li class="border-right"><i class="fas fa-arrow-left"></i> <a href="<?php echo home_url( '/' ); ?>">Retour</a></li>
<li><?php the_date(); ?></li>
<li><?php the_category(); ?></li>
</ul>



<h1><?php the_title(); ?></h1>
          <?php the_date(); ?>

         
      <div class="post__content">
        <?php the_content(); ?>
        </article>
</div>
</div>
</div>
</div>


  <?php endwhile; endif; ?>
 

<div class="test"><?php get_footer(); ?></div>
