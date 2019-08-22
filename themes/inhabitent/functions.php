
<?php 

// Adds scripts and stylesheets
function inhabitent_files() {
    wp_enqueue_script('navigation-js', get_template_directory_uri() . '/js/navigation.js', array('jquery'), null, true);
    wp_enqueue_script('archive-404-js', get_template_directory_uri() . '/js/archive-404.js', array('jquery'), null, true);
    wp_enqueue_style('inhabitent_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    // Load fonts and icons
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style('custom-fa', "https://use.fontawesome.com/releases/v5.8.2/css/all.css");
};

add_action('wp_enqueue_scripts', 'inhabitent_files');


// Add theme support, (title tag, featured img, nav menu)
function inhabitent_features() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus( array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    ));
};

add_action('after_setup_theme', 'inhabitent_features'); 


// Initialize sidebars
function inhabitent_sidebar_widget() {
    // Page.php Sidebar
    register_sidebar( array(
        'name' => esc_html('Sidebar'),
        'id' => 'sidebar-1',
        'description' => 'my first sidebar',
        'class' => 'the-sidebar',
        'before_widget' => '<aside id="%1$s" class="%2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    // Front-page Sidebar
    register_sidebar( array(
        'name' => esc_html('Front Page Widget Display'),
        'id' => 'sidebar-frontpg',
        'description' => 'An area to display category cards on the front page.',
        'class' => 'front-pg-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="hide-title">',
        'after_title' => '</span>' 
    ));

    // Footer Sidebar - for business hours widget
    register_sidebar( array(
        'name' => esc_html('Footer Widget Area'),
        'id' => 'sidebar-footer',
        'description' => 'A widget area to display business hours',
        'class' => 'footer-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>' 
    ));
}

add_action('widgets_init', 'inhabitent_sidebar_widget');


// Enable .svg uploads
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');


// Modify 'Read More' Link
function inhabitent_read_more_link($more) {
    global $post;
    return ' [...]<a class="read-more-link" href="' . get_permalink($post->ID) . '" >Read More <i class="fas fa-long-arrow-alt-right"></i></a>';
}

add_filter('excerpt_more', 'inhabitent_read_more_link');


// Initialize Custom Post-Type: Products
function inhabitent_post_types() {
    register_post_type('products', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Products',
            'add_new' => 'Add New Product',
            'add_new_item' => 'Product',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Products',
            'singular_name' => 'Product'
         ),
         'menu_icon' => 'dashicons-cart'
    ));

    // Initialize Custom Post-Type: Adventures
    register_post_type('adventures', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Adventures',
            'add_new' => 'Add New Adventure Post',
            'add_new_item' => 'Adventure Post',
            'edit_item' => 'Edit Adventure Post',
            'all_items' => 'All Adventure Posts',
            'singular_name' => 'Adventure'
         ),
         'menu_icon' => 'dashicons-location-alt',
    ));
}

add_action('init', 'inhabitent_post_types');


// Custom Taxonomies
function inhabitent_register_taxonomies() {
    register_taxonomy('product_type', 'products', array(  
        'show_in_rest' => true,
        'hierarchical' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Product Types',
            'singular_name' => 'Product Type'
        )
    ));
}
add_action('init', 'inhabitent_register_taxonomies');


// Change login logo
function inhabitent_login_logo() {
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
            height:65px;
            width:250px;
            background-size: 250px 65px;
            background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php
}

add_action('login_enqueue_scripts', 'inhabitent_login_logo');


// Set login logo link destination
function inhabitent_login_logo_url(){
    return home_url();
}

add_filter('login_headerurl', 'inhabitent_login_logo_url');


// Add title tag to login pg
function inhabitent_login_logo_url_title() {
    return "InhabiTent Camping Supply Co.";
}

add_filter('login_title', 'inhabitent_login_logo_url_title');


// Set Favicon
function inhabitent_favicon() {
	echo '<link rel="shortcut icon" type="image/png" href="'. get_template_directory_uri().'/images/logos/inhabitent-logo-tent-icon.ico">';
}

add_action('wp_head', 'inhabitent_favicon');

?>