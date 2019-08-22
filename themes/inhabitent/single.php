<?php get_header(); ?>


<main class="page-sidebar-content-wrapper all-page-wrapper">
    <section class="posts-content-wrapper">
        <?php
        if( have_posts() ) :   
            while( have_posts() ) :   
            the_post(); ?>    

        <div class="journal-post-head">
            <h2 class="journal-post-title"><?php the_title(); ?></h2>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="featured-image-wrapper journal-img-wrapper">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h4><?php the_date('j F Y'); ?> / <?php echo get_comments_number(); ?> Comments / By <?php the_author(); ?></h4>
            <?php endif; ?>
           
        </div>
        
        <div class="journal-post-text single-journal-text">
            <?php the_content(); ?>
            <h5>posted in <i class="fas fa-long-arrow-alt-right"></i> <?php the_category(', '); ?></h5>
            <h5>tagged <i class="fas fa-long-arrow-alt-right"></i> <?php the_tags(''); ?></h5>
        </div>
       
            <?php endwhile; ?>

        <?php the_posts_navigation(); ?> 

        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>

        <div class="social-media-buttons">
            <button class="btn-social-media"><a href="#"><i class="fab fa-facebook-f"></i>Like</a></button>
            <button class="btn-social-media"><a href="#"><i class="fab fa-twitter"></i>Tweet</a></button>
            <button class="btn-social-media"><a href="#"><i class="fab fa-pinterest"></i>Pin</a></button>
        </div>
        <section class="comments">
            <h2><?php echo get_comments_number(); ?> comments</h2>
            <?php comments_template(); ?>
        </section>
    
    </section>
    <section class="the-sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </section>
    
</main>

<?php get_footer(); ?>