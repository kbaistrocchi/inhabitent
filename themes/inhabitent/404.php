<?php get_header(); ?>

<main class="page-sidebar-content-wrapper all-page-wrapper">
    <section class="posts-content-wrapper">
        <h2>Oops! That page cant' be found.</h2>
        <p>It looks like nothing was found at this location. 
            Maybe try one of the links below or a search.</p>

        <h2>Recent Posts</h2>
        <?php
            // Custom Loop Recent Journal Entries
            $args = array(
                'post_type' => 'post',
                'numberposts' => 5,
                'order' => 'DESC'
            );
            $posts = get_posts($args);

            foreach($posts as $post) :
                setup_postdata($post); ?>  
                <p class="four-0-four"><a href="<?php the_guid(); ?>"><?php the_title(); ?></a></p>
            <?php endforeach; ?>


        <h2>Most used categories</h2>
        <h2>Archives</h2>
        <p>Try looking in the monthly archives </p>
       
    </section>
    <section class="the-sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </section>
    
</main>


<?php get_footer(); ?>

                        