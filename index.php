<?php get_header() ?>
    <section class="main-slider" data-loop="true" data-autoplay="true" data-interval="7000">
        <?php echo do_shortcode('[soliloquy id="420"]'); ?>
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

    <section class="full-width-section clearfix">
        <div class="half-width half-width-left hidden-xs">
        </div>
        <div class="half-width half-width-right hidden-xs">
            <div class="free-request">
                <i class="icon-lawyer-hammer"></i>
                <h2>Entre em contato conosco</h2>
                <a href="<?php get_option('home'); ?>/contato" class="btn btn-secondary">Enviar Mensagem</a>
            </div>
        </div>
        <div class="container visible-xs">
            <div class="free-request">
                <i class="icon-lawyer-hammer" aria-hidden="true"></i>
                <h2>Entre em contato conosco</h2>
                <a href="<?php get_option('home'); ?>/contato" class="btn btn-secondary">Enviar Mensagem</a>
            </div>
        </div>
    </section>

<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); if(is_plugin_active('our-team-enhanced/our-team-showcase.php')) { ?>

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
    /* get index practice areas */
    get_template_part('index', 'practice_area');
?>

<?php
    //****** get index countdown  ********
    get_template_part('index', 'count');
?>


<?php if(have_posts()) : ?>
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
<?php endif; ?>

<?php get_footer(); ?>