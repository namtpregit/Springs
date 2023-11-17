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

    <div class="loading" id="loading">
        <div class="content">
            <img src="https://i.gifer.com/origin/4a/4a287dd4b9222ebb17dc354257d0ef79_w200.gif" alt="loading" class="img">
            <span>Loading...</span>
        </div>
    </div>

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

            $('#toggle').click(function() {
                $(this).toggleClass('open');
                $('#overlay').toggleClass('open');
                $('#header-fix').toggleClass('open');
            });

            $('#overlay li a, #overlay .link-c').on('click', function () {
                $('#overlay').toggleClass('open');
                $('#header-fix').toggleClass('open');
                $('#toggle').toggleClass('open');
            })

            $(".wpcf7-form-control-wrap .wpcf7-list-item-label").on("click", function (e) {
                $(this).next().prop('checked', true);
            })
        })

        const wpcf7Elm = document.querySelector( '.wpcf7' );
        wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
            const d = $(".wpcf7-form .wpcf7-not-valid-tip").length
            console.log('d :>> ', d);
            var inputs = event.detail.inputs;
            inputs.shift()
            if (d === 0 && inputs.every(item => item.value !== '')) {
                $("#loading").toggleClass("open")
            }
            setTimeout(() => {
            $("#loading").removeClass("open")
        }, 3000)
        }, false );

    </script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
