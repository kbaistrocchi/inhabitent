<?php get_header('dark'); ?>

<!-- <?php
echo "About Page";?>  -->

<main class="narrow-content-wrapper">  <?php 
    if( have_posts() ) : 
         while( have_posts() ) :
        the_post(); ?>
        <div class="hero-wrapper" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo get_the_post_thumbnail_url( '38', 'full'); ?>')">
            <!-- <?php the_post_thumbnail(); ?> -->
            <h1><?php the_title(); ?></h1>
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

                        