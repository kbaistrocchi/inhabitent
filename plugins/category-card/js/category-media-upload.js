jQuery(document).ready(function ($) {
 
    $(document).on("click", ".upload_image_button", function (e) {
       e.preventDefault();
       let $button = $(this);
  
  
       // Create the media frame.
       let file_frame = wp.media.frames.file_frame = wp.media({
          title: 'Select or upload image',
          library: { // remove these to show all
             type: 'image' // specific mime
          },
          button: {
             text: 'Select'
          },
          multiple: false 
       });
  
       // When an image is selected, run a callback.
       file_frame.on('select', function () {
  
          let attachment = file_frame.state().get('selection').first().toJSON();
  
          $button.siblings('input').val(attachment.url);
  
       });
  
       // Finally, open the modal
       file_frame.open();
    });
 });