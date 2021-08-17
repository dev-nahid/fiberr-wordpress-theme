<?php
/**
 * The template for displaying the footer
 * 
 * @package Fiberr
 */

?>
  <footer class="theme-footer-section text-center" style="background-color:<?php echo get_theme_mod('footer_bgcolor'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="theme-footer-wrap">
                  <a href="#home">
                    <img class="footer-logo" src="<? echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                  </a>
                  <ul class="footer-social-list">
                    <li><a href="#"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="#"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="#"><i class="fab fa-instagram"></i> </a> </li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i> </a> </li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i> </a> </li>
                  </ul>
                  <p class="footer-copyright">© 2021 Helal Hossain. Made With Love by Themesindustry</p>
                </div>
            </div>
        </div>
    </div>
  </footer><!-- .theme-footer-section -->


<?php wp_footer(); ?>

</body>
</html>
