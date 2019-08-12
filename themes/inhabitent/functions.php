
<?php 

// filter stylesheet to point to minified CSS

// function inhabitent_min_css() {
//     // get_temp_dir - points to root directory 
//     // so, if there is a file in root/build..., then return that stylesheet
//     if ( file_exists( get_template_directory() . '/build/css/style.min.css')) {
//         $stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
//     }
//     return $stylesheet_uri;
// }

// add_filter('stylesheet_uri', 'inhabitent_min_css');

// adds script and stylesheets
function inhabitent_files() {
    // 1st - , 2nd - location of files but use dynamically...
    // use wp method to get this info - find root then find .css file
    wp_enqueue_style('inhabitent_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    // microtime forces browser to reload all info everytime instead of caching

    // load fonts
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style('custom-fa', "https://use.fontawesome.com/releases/v5.8.2/css/all.css");
};

// this is called a hook;
add_action('wp_enqueue_scripts', 'inhabitent_files');

// adds theme support, ex title and tag, featured img
function inhabitent_features() {
    add_theme_support('post-thumbnails');
    add_image_size('square', 250, 250, true);
    add_theme_support('title-tag');
    register_nav_menus( array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    ));
};

// this function dynamically loads title and tag line and is better than the header version
// after_theme_setup, function_name
add_action('after_setup_theme', 'inhabitent_features'); 

// initialize sidebar
function inhabitent_sidebar_widget() {
    // us wp function which takes associative array as paramenter - see docs
    register_sidebar( array(
        'name' => esc_html('Sidebar'),
        'id' => 'sidebar-1',
        'description' => 'my first sidebar',
        'class' => 'the-sidebar',
        'before_widget' => '<aside id="%1$s" class="%2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}

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
}

add_action('init', 'inhabitent_post_types');

// Custom Taxonomies
function inhabitent_register_taxonomies() {
    register_taxonomy('product_type', 'products', array(   // 2nd param must relate to the post site name (above)
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


add_action('widgets_init', 'inhabitent_sidebar_widget');


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

// Add hover text to login logo
function inhabitent_login_logo_url_title() {
    return "InhabiTent Camping Supply Co.";
}

add_filter('login_title', 'inhabitent_login_logo_url_title');

// // Favicon
// function inhabitent_favicon() {
//     // echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/images/logos/inhabitent-logo-tent.svg" />';
//     echo "<link rel='shortcut icon' type='image/x-icon' href='"get_template_directory_uri()"/images/logos/inhabitent-logo-tent.svg">';
// }

// add_action('wp_head', 'inhabitent_favicon');


?>