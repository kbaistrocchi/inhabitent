<?php get_header(); ?>

<h1 class="archive-header">Latest Adventures</h1>

<div class="all-page-wrapper adventure-grid">
    <?php
        if( have_posts() ) :   
        
            while( have_posts() ) :   
            the_post(); ?>  
            <div class="adventure-block">
                <?php the_post_thumbnail(); ?>
                <!-- <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h3><a href="<?php the_permalink(); ?>" class="read-entry-btn">Read More</a></h3> -->
            </div>        
        

            <!-- end of wp loop -->
            <?php endwhile; ?>

        <?php the_posts_navigation(); ?> <!-- if too much content to load on page - can change amount in settings -->

        <?php else : ?>
                <p>No posts found</p>
    <?php endif; ?>
</div>



<?php get_footer(); ?>

                        