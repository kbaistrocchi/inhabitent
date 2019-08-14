<?php get_header('dark'); ?>


<div class="front-pg-wrapper">
    <?php
    if( have_posts() ) :   
        while( have_posts() ) :   
        the_post(); ?> 
        <?php $postID = get_the_ID(); ?>
        <div class="front-hero-wrapper" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo get_the_post_thumbnail_url( $postID, 'full'); ?>')">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent circular logo">
        </div>
        <?php the_content(); ?>

        <?php endwhile; ?>

        

    <?php the_posts_navigation(); ?> 

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>



    <section class="inhab-journal-teaser">
    <?php
        // Custom loop variable
        $args = array(
            'post_type' => 'posts',  // specific posts to grab (posts, products or adventures)
            'numberposts' => 3,
            'order' => 'ASC'
        );

        $posts = get_posts($args);
        // use a for each to loop through array saved in $posts
        // first parameter is array, second is each item in array
        foreach($posts as $post) :
            setup_postdata($post);
            the_title();
            the_content();
        endforeach;

        ?>


        <!-- WP_Query Loop -->
<!-- <?php 
$blogs = new WP_Query(array(
    'post_type' => 'products',
    'posts_per_page' => 3,  // -1 displays all 
    'order_by' => 'date',
    'order' => 'ASC'
));
// -> arrow grabs a particular property (like dot notation)
while($blogs->have_posts()) :
    echo $blogs->the_post();  
    the_title();
endwhile;
?> -->
    </section>
   

</div>



<?php get_footer(); ?>

                        