<?php
function pantera_register_assets () {
wp_register_style("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", []);
wp_register_script("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"); //l'order dans lequel il execute ( il a besoin de popper et jquery avant de lancer bootstrap )
wp_deregister_script("jquerymin"); 
wp_register_script("jquery","https://code.jquery.com/jquery-3.2.1.slim.min.js", [], false, true);
wp_enqueue_style("bootstrap");
wp_enqueue_script("bootstrap");
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
    
        $pages = paginate_links(["type" => "array"]);
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
