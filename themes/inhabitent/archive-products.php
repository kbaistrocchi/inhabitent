
<?php get_header(); ?>

<section class="archive-product-header">
    <h2>Shop Stuff</h2>
</section>

<div class="archive-products-wrapper">
    <?php
    if( have_posts() ) :  
        // THE WP LOOP
        while( have_posts() ) :   
        the_post(); ?>  
        
        <div class="indi-product-wrapper">
            <div class="product-img-wrapper">
                <a href="<?php the_permalink(); ?>" >
                    <?php the_post_thumbnail();?>
                </a>
                
            </div>
            <div class="product-info-container">
            <p><?php the_title(); ?></p>
            <hr>
            <!-- use the custom fields plugin built in function -->
            <p><?php echo '$' . get_field('price'); ?></p>
            </div>
            
        </div>       


    <!-- <?php the_permalink(); ?> -->

        <!-- end of wp loop -->
        <?php endwhile; ?>

     
   
    <?php the_posts_navigation(); ?> 

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

                        