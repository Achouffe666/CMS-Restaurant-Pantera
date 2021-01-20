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
<body <?php body_class();?>>
<header class="background-sing">

<div class="navbar menubar title-nav">
<h1><a href="<?php echo home_url( '/' ); ?>">Pantera Restaurant</a></h1>
<div class="menu"><?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?></div>
</div>



</header>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
   
  <div class="bg-single">

  <div class="container single">
 
  
<div class="row">
<article>
<nav class="navbar navbar-expand-md ">
<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class=" navbar-nav mr-auto">
            <li class="border-right d-flex align-items-center nav-item active">
            <i class="fas fa-arrow-left"></i>                <a class="nav-link" href="<?php echo home_url( '/' ); ?>">Retour</a>
            </li>
            <li class="nav-item d-flex align-items-center align color-date">
              <?php the_date(); ?>
            </li>
        </ul>
    </div>

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
<p class="card-text intro color-intro"> Cake donut oat cake. Chocolate bar pastry gingerbread dessert chocolate. Lollipop cheesecake cupcake. Halvah muffin donut chupa chups caramels. Tart lemon drops oat cake candy canes halvah sesame snaps tootsie roll jelly-o. Icing sweet jelly pastry sugar plum halvah chocolate. Chocolate cake cotton candy cotton candy gummi bears pie. Jelly-o icing bear claw tiramisu. Cake icing muffin cake.</p>
         
      <div class="post__content">
        
      <img class ="img-intro"src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/a-hot-bowl-of-soup-on-a-table-top.jpg" alt="">
      <div class="grid-intro">
<div class="ingredient">
        <p class="card-text ">
<h2 class="title-intro">Ingredients</h2>
<p>For 4 peoples - preparation 30 min :</p>
<p> • &nbsp;&nbsp;&nbsp;&nbsp; Pommes de terre à chair ferme : 500 gr </p>
<p> • &nbsp;&nbsp;&nbsp;&nbsp; Haricots verts : 800 gr</p>
<p> • &nbsp;&nbsp;&nbsp;&nbsp; Oignon : 1</p>
<p> • &nbsp;&nbsp;&nbsp;&nbsp; Alumettes de lardons fumés : 250 gr</p>
<p> • &nbsp;&nbsp;&nbsp;&nbsp; Beurre : 1 c.à soupe</p>
<p> • &nbsp;&nbsp;&nbsp;&nbsp; Vinaigrette balsamique : 2 c.à soupe</p>
  </p>  </div>

  <div class="social-media d-flex flex-column bd-highlight mb-3">
  <div class="p-2 bd-highlight"><a href="https://www.facebook.com"><i class="fab fa-facebook-f emote1"></i></a></div>
  <div class="p-2 bd-highlight"><a href="https://www.twitter.com"><i class="fab fa-twitter emote2"></i></a></div>
  <div class="p-2 bd-highlight"><a href="https://www.instagram.com"><i class="fab fa-instagram emote3"></i></a></div>
  <div class="p-2 bd-highlight"><a href="https://www.outlook.com"><i class="fas fa-envelope"></i></a></div>
</div>

</div>
  
  <div class="card-body instruction">
  <p class="card-text instruction">
  <h2 class="title-instruction">Instruction</h2>
<span class="number1 d-flex justify-content-center">1</span> <p class="text1">Powder soufflé jelly-o lemon drops cotton candy tart ice cream. Jujubes brownie icing macaroon jelly ice cream jelly beans cookie cookie. Jelly tootsie roll wafer.
Tootsie roll bonbon cotton candy sweet roll powder marshmallow. Sugar plum sweet roll cheesecake. Fruitcake carrot cake tart sugar plum dessert.</p>
</p>
<p class="text2">I love danish sweet topping cake tiramisu oat cake sweet roll donut. Sugar plum I love tootsie roll pie danish cheesecake I love danish biscuit. Croissant fruitcake cake. Croissant I love I love macaroon. Marshmallow jelly icing tart cake bonbon I love halvah dessert. Halvah I love donut cupcake topping dessert I love. Ice cream tiramisu brownie sweet I love carrot cake.</p>
<span class="number2 d-flex justify-content-center ">&nbsp;&nbsp;2&nbsp;&nbsp;</span><p class="text3">Chocolate bar bonbon cookie caramels. Marzipan croissant caramels candy canes. Brownie carrot cake I love chupa chups. Ice cream I love I love marzipan. Dragée oat cake I love tiramisu lollipop candy canes. Topping lemon drops macaroon cake bonbon.</p>
<p class="text4" >Lollipop wafer I love. Donut halvah donut bonbon lemon drops. Dragée biscuit wafer lollipop danish lemon drops croissant lemon drops. Jujubes danish lollipop oat cake I love candy dragée powder powder.</p>
<p class="text5"><img class ="img-instruction"src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/restaurant.jpg" alt=""></p>
<span class="number3 d-flex justify-content-center">&nbsp;&nbsp;3&nbsp;&nbsp;</span><p class="text6"> Candy candy cake fruitcake bear claw gummies caramels. Cheesecake sesame snaps gummi bears lemon drops sweet roll dessert donut carrot cake. Sugar plum tiramisu tiramisu jelly beans sugar plum icing pie jujubes powder. Sweet roll marshmallow dragée tart chocolate bar donut tart tiramisu.</p>
<p class="text7">Gummies cookie ice cream sweet candy. Dessert marzipan halvah sweet roll gingerbread cake. Pudding I love bonbon chupa chups. Lemon drops cookie powder chupa chups dragée tart.</p>
<span class="number4 d-flex justify-content-center">&nbsp;&nbsp;4&nbsp;&nbsp;</span><p class="text8" > Dragée danish lemon drops cake tiramisu macaroon oat cake. Sweet muffin chocolate topping. Soufflé I love I love chocolate bar wafer. Jujubes sugar plum I love.</p>
<p class="text9">Dragée danish donut candy canes jelly beans marshmallow cookie marzipan pastry. Bonbon jujubes I love marshmallow. Sugar plum cake pastry gummi bears.</p>

    <div>
      </article>
</div>
</div>
</div>
</div>
</div>


  <?php endwhile; endif; ?>
 
<?php include("include-last-post.php"); ?>

