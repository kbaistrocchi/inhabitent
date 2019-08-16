<!-- wp goes into database, locates title, content and outputs
into here. Know as the loop -->
<?php get_header(); ?>
<div class="all-page-wrapper">
    <h1>Kay</h1>
</div>
<?php
if( have_posts() ) :   // checks if posts are available if true, on to loop
    // THE WP LOOP
    while( have_posts() ) :   // while there are posts, runs as many times as are posts
    the_post(); ?>          <!-- load all posts, needed to make loop run -->
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

    <!-- end of wp loop -->
    <?php endwhile; ?>

<?php the_posts_navigation(); ?> <!-- if too much content to load on page - can change amount in settings -->

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>

                        