
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
};

add_action('wp_enqueue_scripts', 'inhabitent_files');

// adds theme support, ex title and tag, featured img
function inhabitant_features() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
};
// this function dynamically loads title and tag line and is better than the header version

// after_theme_setup, function_name
add_action('after_setup_theme', 'inhabitent_features'); 
?>