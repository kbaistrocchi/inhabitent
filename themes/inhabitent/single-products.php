<!-- wp goes into database, locates title, content and outputs
into here. Know as the loop -->
<?php get_header(); ?>

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
            <ul class="product-social-buttons">
                <!-- <a class="link-buttons" href="#"><li><i class="fab fa-facebook-f"></i>Like</li></a> -->
                <!-- <a class="link-buttons" href="#"><li><i class="fab fa-twitter"></i>Tweet</li></a> -->
                <!-- <a class="link-buttons" href="#"><li><i class="fab fa-pinterest"></i>Pin</li></a> -->
                <li><a href="#" class="link-buttons"><i class="fab fa-facebook-f"></i>Like</a></li>
                <!-- <li class="link-buttons"><a href="#"><i class="fab fa-twitter"></i>Tweet</a></li>
                <li class="link-buttons"><a href="#"><i class="fab fa-pinterest"></i>Pin</a></li> -->
            </ul>
        </section>
    </main>
    
            
    


    <!-- end of wp loop -->
    <?php endwhile; ?>

<?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>

                        