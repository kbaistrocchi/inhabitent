<?php
wp_footer();
?>
<footer>
    <div class='footer-content-wrapper'>
        <div class="company-info">
            <div class='contact-info'>
                <h3>Contact Info</h3>
                <p><i class="fas fa-envelope"></i>info@inhabitent.com</p>
                <p><i class="fas fa-phone fa-flip-horizontal"></i>778-456-7891</p>
                <ul>
                    <li><a href='#'><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href='#'><i class="fab fa-twitter-square"></i></a></li>
                    <li><a href='#'><i class="fab fa-google-plus-square"></i></a></li>
                </ul>
            </div>
                <?php dynamic_sidebar('sidebar-footer'); ?>
              
        </div>
        

        <div class="logo-text-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="inhabitent logo and store name">
        </div>
    </div>
    
    <p class="copyright">COPYRIGHT &copy 2019 inhabiTENT</p>


</footer>


</body>
</html>