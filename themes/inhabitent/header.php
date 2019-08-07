<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <!-- link stylesheet using php -->
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- make title dynamic - Grabs info from title in General settings-->
    <title><?php bloginfo('title'); ?></title>
</head>
<!-- add a diff class name depending on which page we're on -->
<body <?php body_class(); ?>> 

