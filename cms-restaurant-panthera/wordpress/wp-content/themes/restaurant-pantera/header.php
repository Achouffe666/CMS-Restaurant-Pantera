<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php wp_head() ?>
    <title>Restaurant Pantera</title>
</head>
<body <?php body_class();?>>
<header>
<div class="navbar menubar">
<h1><a href="<?php echo home_url( '/' ); ?>">Pantera Restaurant</a></h1>
<div class="menu"><?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?></div>
</div>
<div class="first-title">
    <p>For Happy Day</p>
    <p class="upp"> Enjoy <br/>Happy  meal </p>
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
<div class="hachures-blanches"></div>
</header>
