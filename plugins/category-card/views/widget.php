<div class="category-card">
    <?php if($image) : ?>
        <img src='<?php echo $instance['image'] ?>' class='category-icon'>
    <?php endif; ?>
    <?php if(strlen(trim($tag_line)) > 0 ) : ?>
        <p><?php echo $tag_line; ?></p>
    <?php endif; ?>

    <?php if(strlen(trim($category_url)) > 0 ) : ?>
        <a href="<?php echo get_home_url() . '/' . $category_url; ?>" class="category-btn green-btn">
    <?php endif; ?>
        <?php if(strlen(trim($btn_txt)) > 0 ) : ?>
            <?php echo $btn_txt; ?></a>
        <?php endif; ?>
</div>