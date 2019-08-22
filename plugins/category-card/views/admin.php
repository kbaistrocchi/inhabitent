<div class='widget-content'>
    <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
    name="<?php echo $this->get_field_name('title'); ?>"
    type="text" value="<?php echo $title; ?>">
    </p>

    <p><label for="<?php echo $this->get_field_id('image'); ?>">Choose image:</label>
    <input name="<?php echo $this->get_field_name('image'); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>"
     class="widefat" type="text" size="36"  value="<?php echo esc_url($image) ; ?>" />
    <input class="upload_image_button" type="button" value="Upload Image" />
    </p>

    <p><label for="<?php echo $this->get_field_id('tag_line'); ?>">Category tag line or description: </label>
    <input class="widefat" id="<?php echo $this->get_field_id('tag_line'); ?>" 
    name="<?php echo $this->get_field_name('tag_line'); ?>"
    type="text" value="<?php echo $tag_line; ?>">
    </p>

    <p><label for="<?php echo $this->get_field_id('btn_txt'); ?>">Button Text: </label>
    <input class="widefat" id="<?php echo $this->get_field_id('btn_txt'); ?>" 
    name="<?php echo $this->get_field_name('btn_txt'); ?>"
    type="text" value="<?php echo $btn_txt; ?>">
    </p>

    <p><label for="<?php echo $this->get_field_id('category_url'); ?>">Category slug: </label>
    <input class="widefat" id="<?php echo $this->get_field_id('category_url'); ?>" 
    name="<?php echo $this->get_field_name('category_url'); ?>"
    type="text" value="<?php echo $category_url; ?>">
    </p>
</div>