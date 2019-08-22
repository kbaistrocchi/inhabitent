<!DOCTYPE html>
<html <?php language_attributes(); ?> > 
<head>
    <!-- link stylesheet using php -->
    <?php wp_head(); ?> 
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('title'); ?></title>
</head>
<body <?php body_class(); ?>> 
    <header class="header-green">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent.svg" alt="tent logo"></a>
        <nav><?php wp_nav_menu( array(
                'theme_location' => 'primary'
            )); ?>
            <div class="header-search">
                <?php get_search_form();?>
            </div>
        </nav>
    </header>

