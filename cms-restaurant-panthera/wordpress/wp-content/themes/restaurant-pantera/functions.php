<?php

function pantera_register_assets () {
wp_register_style("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", []);
wp_register_script("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"); //l'order dans lequel il execute ( il a besoin de popper et jquery avant de lancer bootstrap )
wp_deregister_script("jquerymin"); 
wp_register_script("jquery","https://code.jquery.com/jquery-3.2.1.slim.min.js", [], false, true);
wp_enqueue_style("bootstrap");
wp_enqueue_script("bootstrap");
wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVIvqjTKzFsDeAWCDuh3mxBgrLAy-Xfx0', array(), '3', true );
wp_enqueue_script( 'map', get_template_directory_uri() . '/map.js', array('google-map', 'jquery'), '0.1', true );
}

function wpm_new_image(){

    add_post_type_support( 'page', 'post-formats');
    add_image_size('wpm_taille_2', 800, 350, true);
    
    }

    add_action( 'after_setup_theme', 'wpm_new_image' );


function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDVIvqjTKzFsDeAWCDuh3mxBgrLAy-Xfx0');

}
if( function_exists('acf_add_options_page') ) {


	
	acf_add_options_page('footer');
}


add_action("wp_enqueue_scripts", "pantera_register_assets");
add_theme_support("post-thumbnails");
add_theme_support("title-tag");


register_nav_menus( array(
'main' => 'Menu Principal',
) );

// Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'restaurant-pantera',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
   

    function pantera_pagination () {
        $pages = paginate_links(["type" => "array"]);
        if ($pages === null)
        {
            return;
        }
        echo '<nav aria-label="Pagination" class="my-4 d-flex justify-content-center">';
        echo '<ul class="pagination">';
    
        //$pages = paginate_links(["type" => "array"]);
        foreach($pages as $page) { 
            $active = strpos($page,"current") !== false;
            $class = "page-item";
            if ($active) {
                $class .= " active";
            }
        echo '<li class="' .$class . '">'; //concatenation
        echo str_replace("page-numbers", "page-link",$page); //remplacer l'apparence wp par bootstrap
    
        echo '</li>';
    
    }
    echo '</ul>';
    
      echo '</nav>';
    }

  
function pantera_init() {
register_taxonomy("cuisine","post", [ "labels" => [ 'name' => 'Cuisine',
'singular_name'     => 'Cuisine',
'plural_name'       => 'Cuisines',
'search_items'      => 'Rechercher les cuisines',
'all_items'         => 'Toutes les cuisines',
'edit_item'         => 'Editer lescuisines',
'update_item'       => 'Mettre à jour la cuisine',
'add_new_item'      => 'Ajouter uune nouvelle cuisine',
'new_item_name'     => 'Ajouter une nouvelle cuisine',
'menu_name'         => 'Cuisine',
],
'show_in_rest' => true,
'hierarchical' => true,
'show_admin_column' => true,
]);
};
    
add_action("init", "pantera_init");
add_action('acf/init', 'my_acf_init');

