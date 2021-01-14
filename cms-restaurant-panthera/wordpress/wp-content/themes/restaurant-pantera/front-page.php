<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	
    
    	<?php the_content(); ?>

    <?php endwhile; endif; ?>
    
<main class="bg-white">
    <div class="container-fluid card-main-box">
    
        <div class="container row  col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
        

            <div class="card  shadow p-3 mb-5 quality-cards" style="width: 30rem;">
            
                <img src="<?php echo get_template_directory_uri(); ?>/svg/quality-food.svg" alt="quality-food-icon" class="img-fluid quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title">Quality Foods</h5>
                        
                    <p class="card-text quality-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde vel natus quidem ratione, similique modi numquam ad recusandae iure voluptate?.</p>
                </div>

            </div>
                
                
            <div class="card  shadow p-3 mb-5 quality-cards" style="width: 30rem;">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/fastest-delivery.svg" alt="fastest-delivery" class="quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title">Fastest Delivery</h5>
                    
                    <p class="card-text quality-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dolores illo unde ratione laudantium autem modi maxime molestiae deleniti voluptas!</p>

                </div>
            </div>

            <div class="card  shadow p-3 mb-5 quality-cards" style="width: 30rem;">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/original-recipes.svg" alt="origina-recipes" class="quality-food-icon">
                <div class="card-body">
                    <h5 class="card-title quality-title">Original Recipes</h5>
                
                    <p class="card-text quality-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur laborum fuga earum qui nobis, dicta quam reprehenderit ducimus repellat a..</p>
            
                </div>
            </div>
        
        </div>
    
    </div>

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
        </div>

    </div>

    <div class="burger-party">


    </div>

</main>
<?php get_footer() ?>