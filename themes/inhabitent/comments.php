<ul class="comment-list">
    <?php wp_list_comments(array(
        'avatar_size' => 60,
        'type' => 'comment',
    )); ?>
</ul>    



<!-- <ol class="comment-list">
    <?php
        wp_list_comments( array(
            'avatar_size' => 60,
            'max_depth'   => 5,
            'style'      => 'ol',
            'short_ping' => true,
            'type'       => 'comment',
        ) );
    ?>
</ol> -->