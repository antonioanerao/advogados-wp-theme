<footer>

    <div class="footerBottom clearfix">
        <div class="container">
            <div class="footerBottom-inner">
                <div class="row">

                    <div class="col-sm-6 col-xs-12">
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="img/footer-logo.png" alt="Image" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <p>Nullam eget iaculis odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam at tortor congue, elementum libero a, tincidunt urna.</p>
                                <p>Vivamus sodales sit amet nulla rhoncus pulvinar. Mauris faucibus justo tortor, cursus efficitur magna porta ac. Vivamus semper rutrum enim eget fringilla. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="footerTitle">
                            <h4>New York office</h4>
                        </div>
                        <div class="footerInfo">
                            <address>
                                <p>23 East 2nd Street, 1st Floor,<br>
                                    New York, NY</p>
                                <span>154 564 2245</span>
                                <span>256 3541</span>
                                <a href="#">hello@example.com</a>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="footerTitle">
                            <h4>London office</h4>
                        </div>
                        <div class="footerInfo">
                            <address>
                                <p>23 East 2nd Street, 1st Floor,<br>
                                    New York, NY</p>
                                <span>154 564 2245</span>
                                <span>256 3541</span>
                                <a href="#">hello@example.com</a>
                            </address>
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
                        <p>© 2016 Copyrighgt Trust Law Bootstrap Template by <a href="http://www.iamabdus.com/">Abdus</a>.</p>
                    </div>
                </div>
                <div class="col-sm-5 col-xs-12">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
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
<?php wp_footer(); ?>

</body>

</html>
