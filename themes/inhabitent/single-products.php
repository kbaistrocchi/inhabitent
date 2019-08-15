<!-- wp goes into database, locates title, content and outputs
into here. Know as the loop -->
<?php get_header(); ?>

<div class="all-page-wrapper">
    <?php
    if( have_posts() ) :   // checks if posts are available if true, on to loop
        // THE WP LOOP
        while( have_posts() ) :   
        the_post(); ?>  
        <main class="single-product-content">
            <div class="single-product-img-wrapper">
                <?php the_post_thumbnail(); ?>
            </div>
            <section class="single-product-info">
                <h2><?php the_title(); ?></h2>
                <!-- use the custom fields plugin built in function -->
                <span><?php echo '$' . get_field('price'); ?></span>
                <?php the_content(); ?>
                <div class="product-social-media-bts">
                    <button class="btn-social-media"><a href="#"><i class="fab fa-facebook-f"></i>Like</a></button>
                    <button class="btn-social-media"><a href="#"><i class="fab fa-twitter"></i>Tweet</a></button>
                    <button class="btn-social-media"><a href="#"><i class="fab fa-pinterest"></i>Pin</a></button>
                </div>
                
            </section>
        </main>
        
                
        


        <!-- end of wp loop -->
        <?php endwhile; ?>

    <?php the_posts_navigation(); ?> 

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>
</div>



<?php get_footer(); ?>

                        