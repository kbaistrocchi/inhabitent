<?php get_header(); ?>

<div class="all-page-wrapper">
    <section class="archive-header">
        
        <?php if (is_tax('product_type', 'do')) : ?>
            <h1>Do</h1>
            <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
        <?php elseif (is_tax('product_type', 'eat')) : ?>
            <h1>Eat</h1>
            <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
        <?php elseif (is_tax('product_type', 'sleep')) : ?>
            <h1>Sleep</h1>
            <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
        <?php elseif (is_tax('product_type', 'wear')) : ?>
            <h1>Wear</h1>
            <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
        <?php endif; ?>

    </section>

    <div class="archive-products-wrapper">
        <?php
        if( have_posts() ) : 
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
                <p><?php echo '$' . get_field('price'); ?></p>
                </div>
                
            </div>       

            <?php endwhile; ?>
    
        <?php the_posts_navigation(); ?> 

        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>