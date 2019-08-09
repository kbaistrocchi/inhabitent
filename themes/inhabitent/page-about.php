<?php get_header(); ?>

<!-- <?php
echo "About Page";?>  -->

<main class="narrow-content-wrapper">  <?php 
    if( have_posts() ) : 
         while( have_posts() ) :
        the_post(); ?>
        <div class="hero-wrapper">
            <h2><?php the_title(); ?></h2>
        </div>         
        
        <?php the_content(); ?>

        <!-- end of wp loop -->
        <?php endwhile; ?>

    <?php the_posts_navigation(); ?> <!-- if too much content to load on page - can change amount in settings -->

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>

    </main>



<?php get_footer(); ?>

                        