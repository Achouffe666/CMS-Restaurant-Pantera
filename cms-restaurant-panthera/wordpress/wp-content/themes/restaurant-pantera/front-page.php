<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	
    
    	<?php the_content(); ?>

    <?php endwhile; endif; ?>
    
<div class="bg-white">
    <div class="container-fluid card-main-box">
    
        <div class="container row  col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
        


            <!-- QUALITY FOOD CARD -->
            <div class="card  shadow p-3 mb-5 quality-cards" style="width: 30rem;">
            
                <img src="<?php echo get_template_directory_uri(); ?>/svg/quality-food.svg" alt="quality-food-icon" class="img-fluid quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title">Quality Foods</h5>
                        
                    <p class="card-text quality-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde vel natus quidem ratione, similique modi numquam ad recusandae iure voluptate?.</p>
                </div>
            </div>
                
            <!-- FASTEST DELIVERY CARD -->
            <div class="card  shadow p-3 mb-5 quality-cards" style="width: 30rem;">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/fastest-delivery.svg" alt="fastest-delivery" class="quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title">Fastest Delivery</h5>
                    
                    <p class="card-text quality-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dolores illo unde ratione laudantium autem modi maxime molestiae deleniti voluptas!</p>

                </div>
            </div>
            <!-- ORIGINAL RECIPES CARD -->
            <div class="card  shadow p-3 mb-5 quality-cards" style="width: 30rem;">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/original-recipes.svg" alt="origina-recipes" class="quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title">Original Recipes</h5>
                
                    <p class="card-text quality-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur laborum fuga earum qui nobis, dicta quam reprehenderit ducimus repellat a..</p>
            
                </div>
            </div>

            <!-- END OF CARDS -->
        
        </div> <!-- END OF CONTAINER ROW --> 
    
    </div><!-- END OF CONTAINER FLUID OF THE CARDS --> 







    <div class="container-fluid  d-flex justify-content-center the-chef">
        <img src="<?php echo get_template_directory_uri(); ?>/images/the-chef.jpg" alt="the-chef" class="chef-img; width: 20rem;">


        <div class="card story" style="width: 50rem; height: 45rem;">
            <div class="card-body story-card shadow p-3 mb-5 ">
                <h5 class="card-title discover-title">Discover</h5>
                <h6 class="card-subtitle  story-title">Our story</h6>
                <h6 class="card-subtitle  story-subtitle">Ultimate dinning experience lile no other</h6>
                <p class="card-text story-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti qui iure, odio deserunt nesciunt excepturi eius assumenda perferendis velit hic illum voluptate provident soluta, maiores repudiandae fuga praesentium reiciendis officiis rerum recusandae natus quasi voluptatum commodi? Adipisci esse obcaecati odit veritatis dignissimos. Libero voluptas a perferendis eius quidem officia aliquid dolores nulla perspiciatis vitae ut consequuntur, in repellat sunt enim, assumenda expedita impedit et quis! Ex possimus, cumque laudantium ipsam sunt quae, aliquam quidem voluptatibus quas hic nobis perspiciatis officia voluptates recusandae dignissimos at enim repudiandae explicabo suscipit doloribus vitae. Veritatis magni quisquam, ratione adipisci fugiat optio! Aperiam, similique deleniti..</p>
                <p class="story-founder">Our founder</p>
                <p class="discover-title"> The Chef </p>
            
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

    $i=0; if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post();

        if ($i==0){ $i++;


        ?>

        <div class="container col-xs-12 col-sm-12">
        <div class="row">
        <div class="col-5 reset"><?php the_post_thumbnail("post-thumbnail", ["class" => "card-img", "alt" => "", "style" => "height: auto;"
        ]) ?> </div>
        <div class="col-5 reset  border card-body">
        <i class="far fa-clock"></i> <?php the_time( get_option( 'date_format' ) ); ?> 
        </p>
                <article class="post"><?php the_category() ?>
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
        <div class="row">
        
        <div class="col-5 reset  border card-body">
        <i class="far fa-clock"></i> <?php the_time( get_option( 'date_format' ) ); ?> 
        </p>
    <article class="post"><?php the_category() ?>
            <h5 class="card-title"><?php the_title(); ?></h5>
                
                <p class="card-text ">
                <?php the_excerpt(); ?>
            <p class="d-flex justify-content-center">
                    <a href="<?php the_permalink(); ?>" class="post__link"><button type="button" class="btn btn-dark">Read more</button></a>
                </p>
            </article>
    </div>
    <div class="col-5 reset"><?php the_post_thumbnail("post-thumbnail", ["class" => "card-img", "alt" => "", "style" => "height: auto;"
        ]) ?> </div>
    </div>
    </div>
    <?php $i=0;
    }
    ?>


        <?php endwhile; endif; ?>



    </div>
   
</div>




<div class="menu-overview"><?php include("menuoverview.php"); ?></div>



  
<?php get_footer() ?>