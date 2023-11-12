<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Springs
 */

?>
	<!-- Footer -->
	<footer id="footer">
        <img src="<?php bloginfo('template_directory'); ?>/vendor/imgs/img-footer.svg" alt="" class="img">
        <p>©Springs. 2023</span>
    </footer>
    <!-- </div> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
    
    <script src="<?php bloginfo('template_directory'); ?>/vendor/libs/jquery-3.5.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/libs/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/js/common.js"></script>

    <script>
        AOS.init();
        $(document).ready(function () {
            $("#a").attr('disabled', 'disabled')
            $(".form-check-input").on('change', function(e) {
                if (!e.target.checked) {
                    $("#a").attr('disabled', 'disabled')
                } else {
                    $("#a").removeAttr("disabled");
                }
            })
        })
    </script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
