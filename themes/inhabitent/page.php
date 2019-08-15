<?php get_header(); ?>

<main class="page-sidebar-content-wrapper all-page-wrapper">
    <section class="page-content-wrapper">
        <?php
        if( have_posts() ) :   // checks if pages are available if true, on to loop
            // THE WP LOOP
            while( have_posts() ) :   // while there are posts, runs as many times as are posts
            the_post(); ?>          <!-- load all posts, needed to make loop run -->
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

            <!-- end of wp loop -->
            <?php endwhile; ?>

        <?php the_posts_navigation(); ?> <!-- if too much content to load on page - can change amount in settings -->

        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
</main>  



<?php get_footer(); ?>