<?php get_header(); ?>
<?php get_header('dark'); ?>


<div class="front-pg-wrapper">
    <?php
    if( have_posts() ) :   
        while( have_posts() ) :   
        the_post(); ?> 
        <?php $postID = get_the_ID(); ?>
        <div class="front-hero-wrapper hide-fixed-header" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo get_the_post_thumbnail_url( $postID, 'full'); ?>')">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent circular logo">
        </div>
        <?php the_content(); ?>

        <?php endwhile; ?>

    <!-- <?php the_posts_navigation(); ?>  -->

    <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>

    <!-- Shop Stuff Section -->

    <h1 class="front-header">Shop Stuff</h1>
    <section class='category-card-container'>
        <?php dynamic_sidebar('sidebar-frontpg'); ?>
    </section>

    <!-- Latest Journal Entries -->

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

    <!-- Latest Adventures Section -->
    <h1 class="front-header">Latest Adventures</h1>
    <section class="adventures-teaser">
        <?php 
            $adventure = new WP_Query( array(
                'post_type' => 'adventures',
                'posts_per_page' => 4,
            ));
            // var_dump($adventure);
            $i = 1;
            while($adventure->have_posts()) :
                $adventure->the_post();
                ?> 
                <div class="adventure-card position-<?php echo $i; ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="overlay adventure-overlay"></div>
                    <div class="adventure-cta">
                        <h1 class="adventure-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <a href="<?php the_permalink(); ?>" class="read-adventure-btn">Read More</a>
                    </div>
                </div> 
                
                <?php
                $i++;
            endwhile; ?>
    </section>
    <a href="<?php echo get_post_type_archive_link('adventures'); ?>" class="green-btn more-adventures">More Adventures</a>
               
         


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

                        