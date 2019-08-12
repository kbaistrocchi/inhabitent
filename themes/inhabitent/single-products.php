<!-- wp goes into database, locates title, content and outputs
into here. Know as the loop -->
<?php get_header(); ?>

<?php
if( have_posts() ) :   // checks if posts are available if true, on to loop
    // THE WP LOOP
    while( have_posts() ) :   
    the_post(); ?>          
<h2><?php the_title(); ?></h2>
<!-- use the custom fields plugin built in function -->
<?php echo '$' . get_field('price'); ?>
<?php the_content(); ?>
<?php the_post_thumbnail(); ?>

    <!-- end of wp loop -->
    <?php endwhile; ?>

<?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>

                        