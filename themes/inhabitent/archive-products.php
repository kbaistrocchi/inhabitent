<?php 
/* Template Name: Products Archive */
?>
<?php get_header(); ?>

<div class="all-page-wrapper">
    <section class="archive-header">
        <h1>Shop Stuff</h1>
        <!-- Custom loop -->
        <?php 
        $terms = get_terms(array(
            'taxonomy' => 'product_type',
            'hide_empty' => 0
        ));

        foreach($terms as $term) :
        ?> <a href="<?php echo get_term_link($term); ?>"> <?php echo $term->name; ?> </a>
        <?php ;
        endforeach;

        ?>


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
                <!-- use the custom fields plugin -->
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

                        