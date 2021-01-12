<?php //Interpreter bootstrap
function montheme_register_assets () {
wp_register_style("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", []);
wp_register_script("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"); //l'order dans lequel il execute ( il a besoin de popper et jquery avant de lancer bootstrap )
wp_deregister_script("jquerymin"); 
wp_register_script("jquery","https://code.jquery.com/jquery-3.2.1.slim.min.js", [], false, true);
wp_enqueue_style("bootstrap");
wp_enqueue_script("bootstrap");
}

add_action("wp_enqueue_scripts", "montheme_register_assets");
add_theme_support( 'title-tag' );
