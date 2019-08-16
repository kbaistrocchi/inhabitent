
<?php get_header('dark'); ?>

<?php
if( have_posts() ) : 
    while( have_posts() ) :   
    the_post(); ?>
    <div class="lrg-img-wrapper">
        <?php the_post_thumbnail(); ?> 
    </div>
    

    <div class="adventure-content">
        <h1 class="adventure-heading"><?php the_title(); ?></h1>
        <h3>By <?php the_author(); ?></h3>
        <?php the_content(); ?>

            <!-- end of wp loop -->
            <?php endwhile; ?>


        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>
        <div class="social-media-buttons">
            <button class="btn-social-media"><a href="#"><i class="fab fa-facebook-f"></i>Like</a></button>
            <button class="btn-social-media"><a href="#"><i class="fab fa-twitter"></i>Tweet</a></button>
            <button class="btn-social-media"><a href="#"><i class="fab fa-pinterest"></i>Pin</a></button>
        </div>

    </div>        


<?php get_footer(); ?>

                        