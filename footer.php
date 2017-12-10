<footer>
    <div class="footerBottom clearfix">
        <div class="container">
            <div class="footerBottom-inner">
                <div class="row">

                    <div class="col-sm-6 col-xs-12">
                        <div class="media">
                            <div class="media-body">
                                <?php dynamic_sidebar('rodape-widget-1'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="footerInfo">
                            <?php dynamic_sidebar('rodape-widget-2'); ?>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="footerInfo">
                            <?php dynamic_sidebar('rodape-widget-3'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyRight clearfix">
            <div class="row">
                <div class="col-sm-7 col-xs-12">
                    <div class="copyRightText">
                        <p>Copyrighgt <a href="<?php echo get_option('home'); ?>/"><?php echo get_bloginfo('name'); ?></a> - Desenvolvido por <a href="https://www.cooprotec.com.br/" target="new">Cooprotec</a>.</p>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-12">
                    <?php
                    $options = theme_setup_data();
                    $header_contact_setting = wp_parse_args(  get_option( 'theme_options', array() ), $options );
                    ?>
                    <ul class="list-inline">
                        <?php if(!empty($header_contact_setting['header_contact_facebook'])) { ?>
                            <li><a href="<?php echo $header_contact_setting['header_contact_facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <?php } ?>

                        <?php if(!empty($header_contact_setting['header_contact_twitter'])) { ?>
                            <li><a href="<?php echo $header_contact_setting['header_contact_twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <?php } ?>

                        <?php if(!empty($header_contact_setting['header_contact_linkedin'])) { ?>
                            <li><a href="<?php echo $header_contact_setting['header_contact_linkedin']; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>



</div>

<div class="scrolling">
    <a href="#pageTop" class="backToTop" id="backToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>

<!-- CREATE ACCOUNT MODAL -->
<div class="modal fade customModal" id="requestCosultation" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="panel formPanel">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">request free consultation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                </div>
                <div class="panel-body">
                    <form action="#" method="POST" role="form">
                        <div class="form-group formField formField-left">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group formField formField-right">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group formField formField-left">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group formField formField-right">
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group formField">
                            <textarea class="form-control" placeholder="Your Description"></textarea>
                        </div>
                        <div class="form-group formField text-center">
                            <button type="submit" class="btn btn-secondary" value="Submit Request">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="plugins/appear/waypoints.min.js"></script>
<script src="plugins/appear/wow.min.js"></script>
<script src="plugins/counter-up/jquery.counterup.min.js"></script>
<script src="plugins/isotope/isotope.min.js"></script>
<script src="plugins/isotope/jquery.fancybox.pack.js"></script>
<script src="plugins/isotope/isotope-triger.js"></script>
<script src="plugins/countdown/jquery.syotimer.js"></script>
<script src="plugins/velocity/velocity.min.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<script src="plugins/google-custom-map/google-map.js"></script>
<script src="js/custom.js"></script>

<script>
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
</script>

<script>
    $(document).ready(function () {
        // Handler for .ready() called.
        $('html, body').animate({
            scrollTop: $('#msg').offset().top
        }, 'slow');
    });
</script>
<?php wp_footer(); ?>

</body>

</html>
