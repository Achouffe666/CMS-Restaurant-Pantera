<?php get_header();
$bannerTop = get_field("banner_top");

?>
<header style="background-image:url('<?=  $bannerTop['img']['url']; ?>');">
<div class="navbar menubar">
<h1><a href="<?php echo home_url( '/' ); ?>"><?php echo get_field("banner_top_main_title");?></a></h1>
<div class="menu"><?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?></div>
</div>
<div class="first-title">
<p><?= $bannerTop['subtitle'];?></p>
    <p class="upp"><?= $bannerTop['main_title'];?></p>
</div>
<div class="left-bars">
    <div class="bars bars-1"></div>
    <div class="bars bars-2"></div>
    <div class="bars bars-3"></div>
    <div class="bars bars-4"></div>
</div>
<div class="subtitle">
<div class="white-bar"></div><a href="#">Order Online</a>
</div>

</header>

<div class="bg-menu">

<div class ="container menu">

<?php

$menu = get_field('the_menu');

?>
<div class="title-menu ">
    <h2 class="d-flex justify-content-center"><?= $menu['subtitle'];?></h2>
    <h1 class="d-flex justify-content-center"> <?= $menu['title'];?></h1>
</div>

<div class="menu-container">
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">

    <?php

 
    $menuContent = $menu["menu_content"];
    //var_dump($repeater);
    $subMenuIndex= 0;
    foreach ($menuContent as $subMenu) {
        if($subMenuIndex == 0)
        {
            ?><div class="card-text "> <?php
        }
        else
        {
            ?><div class="card-text menu-padding"> <?php
        }
        ?>
       
       
          <h3 class="highlighted d-flex justify-content-center"><span class="border-bottom border-dark"><?= $subMenu["title"] ?></span></h3>
          <?php

          
          foreach ($subMenu["menu_list"] as $menuItem) {
              if($menuItem["chef_selection"] == true)
              {
                ?> <div class="chef-selection">CHEF SELECTION</div> 
                <div class="color-yellow">
                <?php
              }
            ?><p><h5>&nbsp;<?= $menuItem["title"] ?>      <?= $menuItem["price"] ?> </br>
            &nbsp;<?= $menuItem["text"] ?></p> 
            <?php
            if($menuItem["chef_selection"] == true)
            {
              ?> </div> <?php
            }
            
            }
            ?> </div> <?php
       

        $subMenuIndex++;
    }

    ?>

       </div>
       </div>
        </div>
        </div> 
        </div>
        </div> 
        <?php include("include-last-post.php"); ?>
