
<?php 

// adds script and stylesheets
function inhabitant_files() {
    // 1st - , 2nd - location of files but use dynamically...
    // use wp method to get this info - find root then find .css file
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri(), NULL, microtime());
    // microtime forces browser to reload all info everytime instead of caching

    // load fonts
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
};

add_action('wp_enqueue_scripts', 'inhabitant_files');

// adds theme support, ex title and tag, featured img
function inhabitant_features() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
};
// this function dynamically loads title and tag line and is better than the header version

// after_theme_setup, function_name
add_action('after_setup_theme', 'inhabitant_features'); 
?>