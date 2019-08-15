<?php get_header('dark'); ?>


<div class="front-pg-wrapper all-page-wrapper">
    <?php
    if( have_posts() ) :   
        while( have_posts() ) :   
        the_post(); ?> 
        <?php $postID = get_the_ID(); ?>
        <div class="front-hero-wrapper" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo get_the_post_thumbnail_url( $postID, 'full'); ?>')">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent circular logo">
        </div>
        <?php the_content(); ?>

        <?php endwhile; ?>

        

    <?php the_posts_navigation(); ?> 

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>

    <h1 class="front-header">Shop Stuff</h1>
    <section class="shop-stuff-menu">
        
        <!-- Get product catagories -->
        <?php $terms = get_terms(array(
                'taxonomy' => 'product_type',
                'hide_empty' => 0 // shows empty catagories
            ));
        ?>
        

        <div class="stuff-product-card margin-right-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/do.svg"  class="stuff-icon" alt="do stuff map icon">
            <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
            <a href="<?php echo get_term_link($terms[0]); ?>" class="stuff-btn"><?php echo $terms[0]->name; ?> Stuff</a>
        </div>
        <div class="stuff-product-card margin-right-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/eat.svg"  class="stuff-icon" alt="do stuff map icon">
            <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
            <a href="<?php echo get_term_link($terms[1]); ?>" class="stuff-btn"><?php echo $terms[1]->name; ?> Stuff</a>
        </div>
        <div class="stuff-product-card margin-right-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/sleep.svg"  class="stuff-icon" alt="do stuff map icon">
            <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
            <a href="<?php echo get_term_link($terms[2]); ?>" class="stuff-btn"><?php echo $terms[2]->name; ?> Stuff</a>
        </div>
        <div class="stuff-product-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/wear.svg"  class="stuff-icon" alt="do stuff map icon">
            <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
            <a href="<?php echo get_term_link($terms[3]); ?>" class="stuff-btn"><?php echo $terms[3]->name; ?> Stuff</a>
        </div>

    </section>

    <h1 class="front-header">Inhabitent Journal</h1>
    <section class="inhab-journal-teaser">
        <?php
            // Custom Loop for Journal Entries
            $args = array(
                'post_type' => 'post',
                'numberposts' => 3,
                'order' => 'ASC'
            );
            $posts = get_posts($args);

            foreach($posts as $post) :
                setup_postdata($post); ?> 
                <div class="journal-card">
                    <div class="journal-card-img-wrapper">
                        <?php echo get_the_post_thumbnail($post->ID); ?>
                    </div>
                    <div class="journal-info">
                        <p><?php the_date('j F Y'); ?> / <?php echo get_comments_number(); ?> Comments</p>
                        <h3><a href="<?php the_guid(); ?>"><?php the_title(); ?></a></h3>
                        <a href="<?php the_guid(); ?>" class="read-entry-btn">Read Entry</a>
                    </div>
                </div>
            <?php endforeach; ?>
    </section>
    <h1 class="front-header">Latest Adventures</h1>
               
         


 <!-- WP_Query Loop -->
 <!-- <?php 
        $stuff = new WP_Query(array(
            'post_type' => 'products',
            'posts_per_page' => -1,  // -1 displays all 
        ));
        // -> arrow grabs a particular property (like dot notation)
        while($stuff->have_posts()) :
            echo $stuff->the_post(); 
        endwhile;
        ?> -->
    
   

</div>



<?php get_footer(); ?>

                        