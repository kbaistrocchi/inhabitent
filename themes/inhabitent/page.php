<?php get_header(); ?>

<main class="page-sidebar-content-wrapper all-page-wrapper">
    <section class="posts-content-wrapper page-content-wrapper">
        <?php
        if( have_posts() ) :   
            while( have_posts() ) :   
            the_post(); ?>          
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

            <?php endwhile; ?>

        <?php the_posts_navigation(); ?> 

        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
    </section>
    <section class="the-sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </section>
    
</main>  



<?php get_footer(); ?>