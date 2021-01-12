<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<<<<<<< HEAD
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
=======
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
>>>>>>> 440d8cd89399f5b9f6999bc2434c3291e970a3c5
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php wp_head() ?>
    <title>Restaurant Pantera</title>
</head>
<body>
<header>
<div class="container navbar">
<h1><a href="<?php echo home_url( '/' ); ?>">Pantera Restaurant</a></h1>
<div class="menu"><?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?></div>
</div>
</header>