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

</div>



<?php get_footer(); ?>

                        