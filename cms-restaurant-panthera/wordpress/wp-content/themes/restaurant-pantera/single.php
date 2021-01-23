<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php wp_head() ?>
    <title>Restaurant Pantera</title>
</head>
<body <?php body_class(); ?>>
<header class="background-sing">

<div class="navbar menubar title-nav color-white">
<h1><a href="<?php echo home_url('/'); ?>">Pantera Restaurant</a></h1>
<div class="menu"><?php wp_nav_menu(array(
    'theme_location' => 'main'
)); ?></div>
</div>



</header>

  <?php

$cuisines = get_terms(['category' => 'cuisine']);
//if( have_posts() ) : while( have_posts() ) : the_post();
if (have_posts())
{
    while (have_posts())
    {
        the_post();

        $cuisineSlug = array_column($cuisines, 'slug');
        $categories = get_the_category();

        $isCuisine = false;

        foreach ($categories as $categorie)
        {

            if (in_array($categorie->slug, $cuisineSlug))
            {
                $isCuisine = true;
                break;
            }

        }

?>
   
  <div class="bg-single">

  <div class="container single">
 
  
<div class="row">
<article>
<nav class="navbar navbar-expand-md ">
<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class=" navbar-nav mr-auto">
            <li class="border-right d-flex align-items-center nav-item active">
            <i class="fas fa-arrow-left"></i>                <a class="nav-link" href="<?php echo home_url('/'); ?>">Retour</a>
            </li>
            <li class="nav-item d-flex align-items-center align color-date">
              <?php the_date(); ?>
            </li>
        </ul>
<div>

    <div class="navbar-collapse collapse w-100 order-2 dual-collapse2">
        <ol class="navbar-nav ml-auto">
            <li class="nav-item " >
            <div class="d-flex align-items-center"> <img class="svg-color" src="<?php echo get_template_directory_uri(); ?>/svg/cutelry.svg" alt="" style="width: 15px;"><?php the_category() ?></div>
            </li>
           
        </ol>
    </div>
</nav>



<div class="card-body intro ">
<h1 class="card-title color-title"><?php the_title(); ?></h1>
<div class="card-text intro color-intro"> 
<?php 
if($isCuisine)
{
  $bannerTop = get_field('banner_top');
  echo $bannerTop['text'];
}
else
the_content() ?>
</div>
         
      <div class="post__content">
        <div class="img-def  d-flex justify-content-center align-items-center flex-column ">
      <?php 
      if($isCuisine && !is_null(get_field('banner_top')['image']['url']))
      {
        ?><img class ="img-intro"src="<?= get_field('banner_top')['image']['url'] ?>" alt="">
        <?php  
      }
      else
      the_post_thumbnail("post-thumbnail", ["class" => "img-intro ", "alt" => "", "style" => "width: auto;"]) ?>
      <!-- <img class ="img-intro"src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/a-hot-bowl-of-soup-on-a-table-top.jpg" alt=""> -->
      </div>
    <?php
    if($isCuisine)
    {
    
    ?>
      <div class="grid-intro">
        <div class="ingredient">
                <p class="card-text ">


        <h2 class="title-intro">Ingredients</h2>
        <p></p>

          <?php $ingredients = get_field('ingredients');
                echo $ingredients; ?>

        </div>

        <div class="social-media d-flex flex-column bd-highlight mb-3">
          <?php
              $socialMedias = get_field('social_media');

              foreach ($socialMedias as $socialMedia)
              {
                ?><div class="p-2 bd-highlight"><a href="<?=$socialMedia['link'] ?>"><img class="social-media" src="<?=$socialMedia['img']['url'] ?>"></img> </a></div><?php
              }

        ?>
        </div>

      </div>
  
      <div class="card-body instruction">
      <!-- <p class="card-text instruction"> -->
      <h2 class="title-instruction">Instruction</h2>
        <?php
        $instructions = get_field('instructions');
        $stepIndex = 1;
        foreach ($instructions as $instruction)
        {
          ?>
          <span style="grid-row: <?=($stepIndex + 1) ?>;" class="step-number d-flex justify-content-center"><?=$stepIndex ?></span> 
          <div style="grid-row: <?=($stepIndex + 1) ?>;" class="step-content">
            <p ><?=$instruction['step'] ?> </p>
            <?php
            if (!is_null($instruction['img']['url']))
            {
              ?>
              <div class="img-instru d-flex justify-content-center align-items-center flex-column ">
              <p><img class ="img-instruction" src="<?=$instruction['img']['url'] ?>" alt=""></p></div>
              <?php
            }
            ?>
            </p>

          </div>
 
          <?php
          $stepIndex++;
        }
        ?>
      </div>
      <?php
      }
    
    ?>
      </article>

 

 </div>
</div>
</div>
</div>
</div>
<?php
    }
} ?>

<?php include ("include-last-post.php"); ?>
