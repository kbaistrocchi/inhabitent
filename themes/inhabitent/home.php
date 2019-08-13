<!-- wp goes into database, locates title, content and outputs
into here. Know as the loop -->
<?php get_header(); ?>

<main class="page-sidebar-content-wrapper">
    <section class="home-content-wrapper">
        <?php
        if( have_posts() ) :   // checks if posts are available if true, on to loop
            // THE WP LOOP
            while( have_posts() ) :   // while there are posts, runs as many times as are posts
            the_post(); ?>          <!-- load all posts, needed to make loop run -->

        <div class="journal-post-head">
            <h2 class="journal-post-title"><?php the_title(); ?></h2>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="featured-image-wrapper journal-img-wrapper">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h4><?php the_date('j F Y'); ?> / <?php echo get_comments_number(); ?> Comments / By <?php the_author(); ?></h4>
            <?php endif; ?>
           
        </div>
        
        <div class="journal-post-text">
            <?php the_excerpt(); ?>
        </div>
       

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

                        