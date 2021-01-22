<?php get_header(); ?>

<?php 
    $image_id =  get_field( 'banner_top_img_banner_top' );
  

?>

            <header style="background-image: url(<?php echo $image_id ['url']; ?>)">

                <div class="navbar menubar">
                    <h1><a href="<?php echo home_url( '/' ); ?>"> <?php echo get_field ( 'banner_top_main_title' );?></a></h1>
                    <div class="menu"><?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?></div>
                </div>
                <div class="first-title">

                    <p> <?php echo get_field ( 'banner_top_subtitle' );?> </p>
                    <p class="upp"> <?php echo get_field ( 'banner_top_subtitlecopie' );?> </p><br/>
                </div>
                <div class="left-bars">
                    <div class="bars bars-1"></div>
                    <div class="bars bars-2"></div>
                    <div class="bars bars-3"></div>
                    <div class="bars bars-4"></div>
                </div>
                <div class="subtitle">
                    <div class="white-bar"></div><a href="#"> Check our menu </a>
                </div>

            </header>



<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    
<?php the_content(); ?>

<?php endwhile; endif; ?>
    
<div class="bg-white">


    <div class="container-fluid card-main-box">
        <div class="container row  col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">

            <!-- QUALITY FOOD CARD -->
            <div class="card shadow p-3 mb-5 col-xs-12- col-sm-12 col-md-12  col-lg-3 quality-cards">
                <img src="<?php the_field('banner_top_top_cards_icon');?>" alt="quality-food-icon" class="img-fluid quality-food-icon"/>
                <div class="card-body">
                    <h5 class="card-title quality-title"><?php echo get_field ( 'banner_top_top_cards_title' );?></h5>  
                    <p class="card-text quality-text"><?php echo get_field ( 'banner_top_top_cards_text' );?>.</p>
                </div>
            </div>
            
            <!-- FASTEST DELIVERY CARD -->
            <div class="card  shadow p-3 mb-5 quality-cards">
                <img src="<?php the_field('banner_top_top_cards_2_icon');?>" alt="fastest-delivery" class="quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title"><?php echo get_field ( 'banner_top_top_cards_2_title' );?></h5>
                    <p class="card-text quality-text"><?php echo get_field ( 'banner_top_top_cards_2_text' );?></p>
                </div>
            </div>

            <!-- ORIGINAL RECIPES CARD -->
            <div class="card  shadow p-3 mb-5 quality-cards" >
                <img src="<?php the_field('banner_top_top_cards_3_icon');?>" alt="origina-recipes" class="quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title"><?php echo get_field ( 'banner_top_top_cards_3_title' );?></h5>
                    <p class="card-text quality-text"><?php echo get_field ( 'banner_top_top_cards_3_text' );?></p>
                </div>
            </div>

            <!-- END OF RECIPES CARDS -->
        
        </div> <!-- END OF CONTAINER ROW --> 
    </div> <!-- END OF CONTAINER FLUID OF THE CARDS --> 








    <div class="container-fluid  d-flex justify-content-center the-chef">

        <!-- IMAGE OF THE CHEF -->
        <img src="<?php the_field('intro_left_image');?>" alt="the-chef" class="chef-img; width: 20rem;">

         <!-- TEXT CARD -->
        <div class="card story">
            <div class="card-body story-card shadow p-3 mb-5 ">
                <h5 class="card-title discover-title"><?php the_field('intro_right_title');?></h5>
                <h6 class="card-subtitle  story-title"><?php the_field('intro_right_title_2');?></h6>
                <h6 class="card-subtitle  story-subtitle"><?php the_field('intro_right_subtitle');?></h6>
                <p class="card-text story-text"><?php the_field('intro_right_text');?>.</p>
                <p class="story-founder"><?php the_field('intro_right_signature_title');?></p>
                <p class="discover-title"> <?php the_field('intro_right_signature_subtitle');?> </p>
        </div> <!-- END OF CARD STORY -->

    </div> <!-- END OF THE CHEF -->

</div> <!-- END OF BG WHITE DIV -->







                    <!-- DISCOVER OURS RESTAURANTS PART -->
<div class=" hachures-grises">
<div class=" container-fluid d-flex flex-column justify-content-center align-items-center burger-party ">
    <p class="discover-restaurant"> Discover our franchise </p>
    <p class="our-restaurant"> Our restaurants </p>
   
        

<?php
   
    $args = array(
    'category_name' => 'Restaurant',
    
            
    );
    $the_query = new WP_Query( $args );
    
    
    $restaurant = get_field("3_restaurants");
    $i = 0;
    foreach ($restaurant AS $article){

    if ($i == 0){
        $i++;
?>


<!-- FIRST RESTAURANT -->
    <div class="container-fluid  d-flex justify-content-center the-chef">
    
        <div class="card story">
            <div class="card-body story-card-right shadow p-3 mb-5 ">
                <h5 class="card-title discover-title"><?php echo $article["subtitle"];?></h5>
                <h6 class="card-subtitle story-title"><?php echo $article ["title"];?></h6>
                <p class="card-text story-text"><?php echo $article ["text"];;?></p>
                <p class="d-flex justify-content-center">
                    <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">More infos !!!!</button></a>
                </p>
            </div>
        </div> <!-- END OF CARD STORY -->
        <img src="<?php echo $article ["img"];?>" class="resto-img col-lg-6  col-sm-12" /> 
    </div> <!-- END OF THE CHEF -->
   
   
    <?php 
    
    } else {


 



       
       
        
        ?>
    
    <div class="container-fluid  d-flex justify-content-center the-chef">


        <img src="<?php echo $article ["img"];?>" class="resto-img col-lg-6  col-sm-12"/> 
            <div class="card story">
                <div class="card-body story-card shadow p-3 mb-5 ">
                    <h5 class="card-title discover-title"><?php echo $article["subtitle"];?></h5>
                    <h6 class="card-subtitle story-title"><?php echo $article["title"];?></h6>
                    <p class="card-text story-text"><?php echo $article["text"];?></p>
                    <p class="d-flex justify-content-center">
                        <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">More lol infos</button></a>
                    </p>
                </div>
            </div> <!-- END OF CARD STORY -->
        
    </div> 

    <?php 
      $i=0;
}
} 
  
    ?>


        <?php ?>



</div><!-- END OF CONTAINER FLUID -->
</div><!-- END OF HACHURES GRISES-->



<div class="menu-overview"><?php include("menuoverview.php"); ?></div>



<div class="container-fluid  row  citation">
    
    <div class="g-bg col-6 d-flex justify-content-center flex-column">
        <p class="white-quote"> " </p>
        <p class="text-citation"> <?php the_field('testimony_text');?> </p>
        <p class="author-citation"> <?php the_field('testimony_name');?></p>
    </div>

    <?php
    $image_id2 = get_field('testimony_image');
    ?>
    <div class=" col-6 picture-citation" style="background-image:url('<?php echo $image_id2 ['url']; ?>;')">
    
    </div>
</div>

<?php include("include-last-post.php") ?>
<?php get_footer() ?>