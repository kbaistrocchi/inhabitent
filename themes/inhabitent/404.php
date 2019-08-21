<?php get_header(); ?>

<main class="page-sidebar-content-wrapper all-page-wrapper">
    <section class="posts-content-wrapper">
        <h1 class="four-0-four-block">Oops! That page cant' be found.</h1>
        <p>It looks like nothing was found at this location. 
            Maybe try one of the links below or a search.</p>
        <div class="four-0-four-search-form four-0-four-block">
            <?php get_search_form();?>
        </div>
            
        <div class="four-0-four-block four-0-four-posts">
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
                    <p><a href="<?php the_guid(); ?>"><?php the_title(); ?></a></p>
                <?php endforeach; ?>
        </div>
                
        <div class="four-0-four-block four-0-four-categories">
            <h2>Most used categories</h2>
            <?php 
            wp_list_categories(array(
                'order' => 'DESC',
                'show_count' => true,
                'title_li' => ''
            )); ?>
        </div>

        <div class="four-0-four-block four-0-four-archives">
            <h2>Archives</h2>
            <p>Try looking in the monthly archives </p>
            <select name="archive-dropdown" class="archive-select">
                <option>Select Month</option>
                <?php
                wp_get_archives(array(
                    'type' => 'monthly',
                    'format' => 'option',

                )); ?>
            </select>
            
        </div>
        
        
       
    </section>
    <section class="the-sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </section>
    
</main>


<?php get_footer(); ?>

                        