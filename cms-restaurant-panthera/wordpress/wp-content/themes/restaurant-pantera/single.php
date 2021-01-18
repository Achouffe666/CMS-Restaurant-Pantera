<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    
  <div class="container single">
 
  
<div class="row">
<article>
<ul class="nav nav-pills">

<li class="border-right"><i class="fas fa-arrow-left"></i> <a href="<?php echo home_url( '/' ); ?>">Retour</a></li>
<li><?php the_date(); ?></li>
<li><?php the_category(); ?></li>
</ul>
</div>

<div class="card-body intro">
<h1 class="card-title"><?php the_title(); ?></h1>
<p class="card-text intro"> Cake donut oat cake. Chocolate bar pastry gingerbread dessert chocolate. Lollipop cheesecake cupcake. Halvah muffin donut chupa chups caramels. Tart lemon drops oat cake candy canes halvah sesame snaps tootsie roll jelly-o. Icing sweet jelly pastry sugar plum halvah chocolate. Chocolate cake cotton candy cotton candy gummi bears pie. Jelly-o icing bear claw tiramisu. Cake icing muffin cake.</p>
         
      <div class="post__content">
        <img class ="img-intro"src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/a-hot-bowl-of-soup-on-a-table-top.jpg" alt="">
      <p class="card-text ingredient">
<h2>Ingredients</h2>
<p>For 4 peoples - preparation 30 min :</p>
<p> ⬤ Pommes de terre à chair ferme : 500 gr </p>
<p> ⬤ Haricots verts : 800 gr</p>
<p> ⬤ Oignon : 1</p>
<p> ⬤ Alumettes de lardons fumés : 250 gr</p>
<p> ⬤ Beurre : 1 c.à soupe</p>
<p> ⬤ Vinaigrette balsamique : 2 c.à soupe</p>
  </p>  
  
  <div class="card-body instruction">
  <p class="card-text instruction">
  <h2>Instruction</h2>
<p><span class="number">&nbsp;&nbsp;1&nbsp;&nbsp;</span> Powder soufflé jelly-o lemon drops cotton candy tart ice cream. Jujubes brownie icing macaroon jelly ice cream jelly beans cookie cookie. Jelly tootsie roll wafer.
Tootsie roll bonbon cotton candy sweet roll powder marshmallow. Sugar plum sweet roll cheesecake. Fruitcake carrot cake tart sugar plum dessert.</p>
</p>
<p>I love danish sweet topping cake tiramisu oat cake sweet roll donut. Sugar plum I love tootsie roll pie danish cheesecake I love danish biscuit. Croissant fruitcake cake. Croissant I love I love macaroon. Marshmallow jelly icing tart cake bonbon I love halvah dessert. Halvah I love donut cupcake topping dessert I love. Ice cream tiramisu brownie sweet I love carrot cake.</p>
<p>Chocolate bar bonbon cookie caramels. Marzipan croissant caramels candy canes. Brownie carrot cake I love chupa chups. Ice cream I love I love marzipan. Dragée oat cake I love tiramisu lollipop candy canes. Topping lemon drops macaroon cake bonbon.</p>
<img class ="img-instruction"src="http://localhost/CMS-Restaurant-Pantera/cms-restaurant-panthera/wordpress/wp-content/uploads/2021/01/restaurant.jpg" alt="">

    <div>
      </article>
</div>
</div>
</div>
</div>
</div>


  <?php endwhile; endif; ?>
 

<div class="test"><?php get_footer(); ?></div>
