<!DOCTYPE html>
<html <?php language_attributes(); ?> > 
<head>
    <!-- link stylesheet using php -->
    <?php wp_head(); ?> <!--  grabs any functions with wp_enqueue_scripts | without this, no styles will load -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent.svg"> -->
    <!-- make title dynamic - Grabs info from title in General settings-->
    <title><?php bloginfo('title'); ?></title>
</head>
<!-- add a diff class name depending on which page we're on -->
<body <?php body_class(); ?>> 

<header class="header-white">
<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent-white.svg" alt="tent logo"></a>
        <?php wp_nav_menu( array(
            'theme_location' => 'primary'
        )); ?>
    </header>