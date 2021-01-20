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
            <div class="card  shadow p-3 mb-5 quality-cards" style="width: 30rem;">


                <img src="<?php the_field('banner_top_top_cards_icon');?>" alt="quality-food-icon" class="img-fluid quality-food-icon"/>
                <div class="card-body">
                    <h5 class="card-title quality-title"><?php echo get_field ( 'banner_top_top_cards_title' );?></h5>
                        
                    <p class="card-text quality-text"><?php echo get_field ( 'banner_top_top_cards_text' );?>.</p>
                </div>
            </div>
            
            <!-- FASTEST DELIVERY CARD -->
            <div class="card  shadow p-3 mb-5 quality-cards" style="width: 30rem;">
                <img src="<?php the_field('banner_top_top_cards_2_icon');?>" alt="fastest-delivery" class="quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title"><?php echo get_field ( 'banner_top_top_cards_2_title' );?></h5>
                    
                    <p class="card-text quality-text"><?php echo get_field ( 'banner_top_top_cards_2_text' );?></p>

                </div>
            </div>
            <!-- ORIGINAL RECIPES CARD -->
            <div class="card  shadow p-3 mb-5 quality-cards" style="width: 30rem;">
                <img src="<?php the_field('banner_top_top_cards_3_icon');?>" alt="origina-recipes" class="quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title"><?php echo get_field ( 'banner_top_top_cards_3_title' );?></h5>
                
                    <p class="card-text quality-text"><?php echo get_field ( 'banner_top_top_cards_3_text' );?></p>
            
                </div>
            </div>

            <!-- END OF CARDS -->
        
        </div> <!-- END OF CONTAINER ROW --> 
    
    </div><!-- END OF CONTAINER FLUID OF THE CARDS --> 







    <div class="container-fluid  d-flex justify-content-center the-chef">
        <img src="<?php the_field('intro_left_image');?>" alt="the-chef" class="chef-img; width: 20rem;">


        <div class="card story" style="width: 50rem; height: 45rem;">
            <div class="card-body story-card shadow p-3 mb-5 ">
                <h5 class="card-title discover-title"><?php the_field('intro_right_title');?></h5>
                <h6 class="card-subtitle  story-title"><?php the_field('intro_right_title_2');?></h6>
                <h6 class="card-subtitle  story-subtitle"><?php the_field('intro_right_subtitle');?></h6>
                <p class="card-text story-text"><?php the_field('intro_right_text');?>.</p>
                <p class="story-founder"><?php the_field('intro_right_signature_title');?></p>
                <p class="discover-title"> <?php the_field('intro_right_signature_subtitle');?> </p>
            
            </div>
        </div> <!-- END OF CARD STORY -->

    </div> <!-- END OF THE CHEF -->

</div> <!-- END OF BG WHITE DIV -->







                    <!-- DISCOVER OURS RESTAURANTS PART -->

<div class=" container-fluid d-flex flex-column justify-content-center align-items-center burger-party">
<p class="discover-restaurant"> Discover our franchise </p>
        <p class="our-restaurant"> Our restaurants </p>
   
        

        <?php
        
        $args = array(
            'category_name' => 'Restaurant',
            'paged' => get_query_var( 'paged' ) 
            
            );
        $the_query = new WP_Query( $args );
        $t=1; 
    $i=0; if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();
    var_dump(get_field('3_restaurants_restaurant_'.$t.'_subtitle'));
        if ($i==0){ $i++;


        ?>

<div class="container-fluid  d-flex justify-content-center the-chef">
<div class="col-5"><?php the_field('restaurant_1_img');?> </div>

  
        <div class="card story" style="width: 50rem; height: 45rem;">
            <div class="card-body story-card shadow p-3 mb-5 ">
                <h5 class="card-title discover-title"><?php echo get_field('restaurant_1_subtitle');?></h5>
                <h6 class="card-subtitle story-title"><?php the_field('restaurant_1_title');?></h6>
                <p class="card-text story-text"><?php the_field('restaurant_1_text');?></p>
                <p class="d-flex justify-content-center">
                    <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">More infos</button></a>
                </p>
            
            </div>
        </div> <!-- END OF CARD STORY -->

    </div> <!-- END OF THE CHEF -->
   

    <?php 
     } 


    else{
        var_dump($t);
       
        
        ?>
    
    <div class="container-fluid  d-flex justify-content-center the-chef">



        <div class="card story" style="width: 50rem; height: 45rem;">
            <div class="card-body story-card-right shadow p-3 mb-5 ">
                <h5 class="card-title discover-title"><?php echo get_field('restaurant_3_subtitle');?></h5>
                <h6 class="card-subtitle  story-title"><?php echo get_field('restaurant_3_title');?></h6>
                <p class="card-text story-text"><?php echo get_field('restaurant_3_text');?></p>
                <p class="d-flex justify-content-center">
                    <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">More lol infos</button></a>
                </p>
               
            </div>
           
        </div> <!-- END OF CARD STORY -->
        <div class="col-5"><?php the_post_thumbnail("post-thumbnail", ["class" => "card-img", "alt" => "", "style" => "height: 100%; width:100%;"
        ]) ?> </div>
    </div> 

    <?php $i=0;
    
    }
    $t++;
    ?>


        <?php endwhile; endif; ?>



</div>
</div>




<div class="menu-overview"><?php include("menuoverview.php"); ?></div>



<div class="container-fluid  row  citation">
    
    <div class="g-bg col-6 d-flex justify-content-center flex-column">
        <p class="white-quote"> " </p>
        <p class="text-citation"> Any time We Start Something New It Is Exciting And We Are Very Motivated and Committed. As Time Goes By </p>
        <p class="author-citation">  - Devil Roy Barman </p>
    </div>
    <div class="picture-citation col-6" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/resto1.jpg'); ?>">
    
    </div>
</div>

<?php get_footer() ?>


