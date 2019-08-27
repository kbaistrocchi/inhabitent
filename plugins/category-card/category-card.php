<?php
/**
 * Plugin Name
 *
 * @package     category_card
 * @author      Kayla
 * @copyright   2019 Inhabitent
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Category Card
 * Description: A clean, simple card display/link for categories.
 * Version:     1.0.0
 * Author:      Kayla
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

//  Prevent direct file access
if(! defined ('ABSPATH')) {
    exit;
}

// new class extends existing WP_Widget,
// name new class same as package above

class category_card extends WP_Widget {
    // key word 'protected' changes scope of variable
    protected $widget_slug = 'category-card';

    // set up widget
    public function __construct() {
        parent::__construct(
            $this->get_widget_slug(),
            'Category Card',
            array(
                'classname' => $this->get_widget_slug() . '-class',
                'description' => "Displays an icon, tag line and button linking to category."
             )
            );
            add_action('admin_enqueue_scripts', array($this, 'category_assets'));
    }

    public function get_widget_slug() {
        return $this->widget_slug;
    }

    public function widget($args, $instance) {
        // look inside widget $args to see if no id, if not then set one
        if( ! isset( $args['widget_id']))  {
            $args['widget_id'] = $this->$id;
        }  

        extract($args,  EXTR_SKIP);

        $widget_string = $before_widget;

        // check if field is empty, if so, set property
        // if field is empty then make blank string or set to field value (updating form)
        $title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
        $image = empty($instance['image']) ? '' : apply_filters('image', $instance['image']);
        $tag_line = empty($instance['tag_line']) ? '' : apply_filters('tag_line', $instance['tag_line']);
        $btn_txt = empty($instance['btn_txt']) ? '' : apply_filters('btn_txt', $instance['btn_txt']);
        $category_url = empty($instance['category_url']) ? '' : apply_filters('category_url', $instance['category_url']);

        ob_start();

        if($title) {
            $widget_string .= $before_title;
            $widget_string .= $title;
            $widget_string .= $after_title;
        }

        include( plugin_dir_path(__FILE__) . 'views/widget.php');
        $widget_string .= ob_get_clean();
        $widget_string .= $after_widget;

        print $widget_string;

    }

    public function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);
        $instance['image'] = strip_tags($new_instance['image']);
        $instance['tag_line'] = strip_tags($new_instance['tag_line']);
        $instance['btn_txt'] = strip_tags($new_instance['btn_txt']);
        $instance['category_url'] = strip_tags($new_instance['category_url']);

        return $instance;
    }

    public function form( $instance ) {

        $instance = wp_parse_args(
            (array) $instance, 
            array(
                // default placeholders
                'title' => 'Category',
                'image' => '',
                'tag_line' => 'Write something about your category here.',
                'btn_txt' => 'Click Here',
                'category_url' => 'ex: product_type/wear'
            )
        );

        $title = strip_tags($instance['title']);
        $image = strip_tags($instance['image']);
        $tag_line = strip_tags($instance['tag_line']);
        $btn_txt = strip_tags($instance['btn_txt']);
        $category_url = strip_tags($instance['category_url']);

        include(plugin_dir_path(__FILE__) . 'views/admin.php');
    }

// Enable js for media upload
public function category_assets() {
    wp_enqueue_script('media-upload');
    wp_enqueue_media();
    wp_enqueue_script('thickbox');
    wp_enqueue_script('category-media-upload', plugin_dir_url(__FILE__) . 'js/category-media-upload.js', array( 'jquery' )) ;
    wp_enqueue_style('thickbox');
}

}

add_action('widgets_init', function() {
    register_widget('category_card');
} );


 ?>