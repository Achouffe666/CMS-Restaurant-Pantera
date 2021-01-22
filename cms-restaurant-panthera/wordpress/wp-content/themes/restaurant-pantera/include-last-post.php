<div class="bg-post">

<div class ="container last-post">
<div class="title-post ">
    <h2 class="d-flex justify-content-center">Latest Updated
    </h2>
    <h1 class="d-flex justify-content-center"> RECIPES BLOG</h1>
</div>

<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=4');
?>
<div class="row">

<?php 
if ($recentPosts->have_posts()) 
{
while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>


    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
        <?php the_post_thumbnail("post-thumbnail", ["class" => "card-img", "alt" => "", "style" => "height: auto;"
    ]) ?> 
    <div class="card-body">
	<p class="card-date"><i class="far fa-clock"></i> <?php the_time( get_option( 'date_format' ) ); ?> </p>
    <h5 class="card-title"><?php the_title() ?></h5>

    <p class="card-text"><?php the_excerpt() ?>
</p>
<a class="title-read" href="<?php the_permalink() ?>" class="card-link title-read">................................... READ MORE</a>

    
    </div>
        </div>
        </div> 

        <?php endwhile ?>
        </div>
    </div> 

<?php 
}
else 
{ ?>
    <h1>No articles</h1>
    <?php 
}
 ?> 
  <?php get_footer(); ?>

</div>