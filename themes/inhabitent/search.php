<?php get_header(); ?>

<main class="page-sidebar-content-wrapper all-page-wrapper">
    <section class="posts-content-wrapper">
    <div class="four-0-four-search-form four-0-four-block">
            <?php get_search_form();?>
    </div>
    
        <?php
        if( have_posts() ) :  
            while( have_posts() ) :   
            the_post(); ?>         

        <div class="journal-post-head">
            <h2 class="journal-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="featured-image-wrapper journal-img-wrapper">
                    <?php the_post_thumbnail(); ?>
                </div>
                <h4><?php the_date('j F Y'); ?> / <?php echo get_comments_number(); ?> Comments / By <?php the_author(); ?></h4>
            <?php endif; ?>
           
        </div>
        
        <div class="journal-post-text">
            <?php the_excerpt(); ?>
        </div>
       
            <?php endwhile; ?>

        <?php the_posts_navigation(); ?> 

        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
    </section>
    <section class="the-sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </section>
    
</main>


<?php get_footer(); ?>

                        