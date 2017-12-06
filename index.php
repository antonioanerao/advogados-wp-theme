<?php get_header() ?>
    <!-- MAIN SLIDER -->
    <section class="main-slider" data-loop="true" data-autoplay="true" data-interval="7000">
        <div class="inner">
            <div class="slide" style="background-image: url(img/home/slider1.jpg);">
                <div class="container text-center">
                    <div class="slide-inner1">
                        <span class="h3 from-bottom">A Complete Solution</span><br>
                        <span class="h1 from-bottom">Lawyer Theme</span><br>
                        <span class="h4 from-bottom">This is a Professional HTML Template for Attorney & Lawyer. Modern, function and easy to customize. Place your logo, change color and you are ready to go.</span><br>
                        <a target="_blank" href="https://goo.gl/N8uaDM" class="btn btn-primary first-btn waves-effect waves-light scale-up">Buy Now</a>
                        <a target="_blank" href="https://goo.gl/N8uaDM" class="btn btn-border waves-effect waves-light scale-up">View Details</a>
                    </div>
                </div>
            </div><!-- .slide -->

            <div class="slide" style="background-image: url(img/home/slider2.jpg);">
                <div class="container">
                    <div class="slide-inner2 common-inner">
                        <span class="h3 from-left">Legal Solution</span><br>
                        <span class="h2 from-right delay-1">Lawyer Theme</span><br>
                        <span class="h4 from-bottom delay-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
               eiusmod tempor incididunt ut labore aliqua. veniam.</span><br>
                        <a target="_blank" href="https://goo.gl/N8uaDM" class="btn btn-primary waves-effect waves-light scale-up delay-3">Buy Now</a>
                    </div>
                </div>
            </div><!-- .slide -->

            <div class="slide" style="background-image: url(img/home/slider3.jpg);">
                <div class="container">
                    <div class="common-inner slide-inner3">
                        <span class="h3 scale-up">A Certified</span><br>
                        <span class="h2 scale-up delay-1">Family Lawyer</span><br>
                        <span class="h4 scale-up delay-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
               eiusmod tempor incididunt ut labore aliqua. veniam.</span><br>
                        <a target="_blank" href="https://goo.gl/N8uaDM" class="btn btn-border waves-effect waves-light scale-up delay-3">Buy Now</a>
                    </div>
                </div>
            </div><!-- .slide -->
        </div><!-- .inner -->
    </section><!-- .hero-slider -->


    <?php
        //****** get index service  ********
        get_template_part('index', 'banner01');
    ?>

    <section class="commonSection clearfix whiteSection padding-top about-section">
        <div class="container">

            <div class="sectionTitle text-center">
                <?php
                    //****** get index service  ********
                    get_template_part('index', 'service');
                ?>
            </div>
        </div>
    </section>


    <!-- CONSULTATION SECTION -->
    <section class="full-width-section clearfix">
        <div class="half-width half-width-left hidden-xs">
        </div>
        <div class="half-width half-width-right hidden-xs">
            <div class="free-request">
                <i class="icon-lawyer-hammer"></i>
                <h2>get a free consultation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a href="#" class="btn btn-secondary">submit your request</a>
            </div>
        </div>
        <div class="container visible-xs">
            <div class="free-request">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <h2>get a free consultation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <a href="#requestCosultation" data-toggle="modal" class="btn btn-secondary">submit your request</a>
            </div>
        </div>
    </section>

<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); if(is_plugin_active('our-team-enhanced/our-team-showcase.php')) { ?>
<!-- Equipe -->
<section class="commonSection clearfix whiteSection teamSection">
    <div class="container">
        <div class="sectionTitle text-center">
            <h2>Nossa Equipe</h2>
        </div>
        <?php echo do_shortcode('[our-team single_template="vcard"]'); ?>
    </div>
</section>
<?php } ?>

<?php
    //****** get index countdown  ********
    get_template_part('index', 'count');
?>


<!-- Blog -->
<section class="commonSection whiteSection clearfix newsSection">
    <div class="container">
        <div class="sectionTitle text-center">
            <h2>Blog e novidades</h2>
        </div>

        <div class="row">

            <?php
            $args_last_post = array(
                'post_type' => 'post',
                'posts_per_page' => '1'
            );

            query_posts($args_last_post);
            ?>

            <?php
                while ( have_posts() ) : the_post();
                $image_last_post = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slide-home' );
            ?>

            <div class="col-sm-6 col-xs-12">
                <div class="thumbnail gridView">
                    <a href="<?php the_permalink() ?>">
                        <img src="<?php echo $image_last_post[0]; ?>" alt="image" class="img-responsive">
                    </a>
                    <div class="caption">
                        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Publicado por <?php the_author(); ?></a></li>
                        </ul>
                        <p><?php echo excerpt(100); ?></p>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>


            <div class="col-sm-6 col-xs-12">
                <?php
                    $args_skip_last_post = array(
                        'post_type' => 'post',
                        'posts_per_page' => '3',
                        'offset' => '1' /* skip the latest post */
                    );
                    query_posts($args_skip_last_post);
                ?>

                <?php
                    while ( have_posts() ) : the_post();
                    $image_skip_last_post = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slide-home' );
                ?>
                <div class="media listView border-bottom">
                    <a class="media-left" href="<?php the_permalink() ?>">
                        <img src="<?php echo $image_skip_last_post[0]; ?>" alt="Image" class="img-responsive">
                    </a>
                    <div class="media-body">
                        <h3 class="media-heading"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Publicado por <?php the_author(); ?></a></li>
                        </ul>
                        <p><?php echo excerpt(31); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>

        <div class="bottom-button text-center">
            <a href="<?php echo get_option('/'); ?>/blog" class="btn btn-secondary waves-effect waves-button waves-float">Ver Tudo</a>
        </div>

    </div>
</section>

    <!-- COMMENT SECTION -->
    <section class="clearfix commentSection paralax" style="background-image: url(img/paralax/paralax-img2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="owl-carousel commentSlider">
                        <div class="slide">
                            <div class="commentContent text-center">
                                <i class="icon-quote" aria-hidden="true"></i>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in</p>
                                <h3>Santana White</h3>
                                <h4>Sextual Offence</h4>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="commentContent text-center">
                                <i class="icon-quote" aria-hidden="true"></i>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in</p>
                                <h3>Santana White</h3>
                                <h4>Sextual Offence</h4>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="commentContent text-center">
                                <i class="icon-quote" aria-hidden="true"></i>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in</p>
                                <h3>Santana White</h3>
                                <h4>Sextual Offence</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BRAND SECTION -->
    <section class="brandSection clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="owl-carousel partnersLogoSlider">
                        <div class="slide">
                            <div class="partnersLogo clearfix">
                                <img src="img/home/partner-01.png" alt="partner-img">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="partnersLogo clearfix">
                                <img src="img/home/partner-02.png" alt="partner-img">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="partnersLogo clearfix">
                                <img src="img/home/partner-03.png" alt="partner-img">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="partnersLogo clearfix">
                                <img src="img/home/partner-04.png" alt="partner-img">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="partnersLogo clearfix">
                                <img src="img/home/partner-01.png" alt="partner-img">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="partnersLogo clearfix">
                                <img src="img/home/partner-02.png" alt="partner-img">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="partnersLogo clearfix">
                                <img src="img/home/partner-03.png" alt="partner-img">
                            </div>
                        </div>
                        <div class="slide">
                            <div class="partnersLogo clearfix">
                                <img src="img/home/partner-04.png" alt="partner-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>