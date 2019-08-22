<?php get_header(); ?>


<main class="page-sidebar-content-wrapper all-page-wrapper">
    <section class="posts-content-wrapper">
        <?php
        if( have_posts() ) :   // checks if posts are available if true, on to loop
            // THE WP LOOP
            while( have_posts() ) :   // while there are posts, runs as many times as are posts
            the_post(); ?>          <!-- load all posts, needed to make loop run -->

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
            <h5>posted in <i class="fas fa-long-arrow-alt-right"></i> <?php the_category(); ?></h5>
            <h5>tagged <i class="fas fa-long-arrow-alt-right"></i> <?php the_tags(''); ?></h5>
        </div>
       

            <!-- end of wp loop -->
            <?php endwhile; ?>

        <?php the_posts_navigation(); ?> <!-- if too much content to load on page - can change amount in settings -->

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
            <!-- <?php comment_form(); ?> -->
        </section>
        <!-- // 'comment_field' => '<label for="comment-textfield">Comment</label><textarea id="comment-textfield" cols="30" rows="10" required="required"></textarea>',
                // 'author' => '<p><label for="comment-author">Name</label><input id="comment-author" type="text"></p>',
                // 'email' => 'Email',
                // 'url' => 'Website',
                // 'logged_in_as' => '',
                // 'comment_notes_before' => 'Want to join the discussion? Feel free to contribute!' -->
    
        
       
    </section>
    <section class="the-sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </section>
    
</main>

<?php get_footer(); ?>