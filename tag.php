<?php /* Template Name: Blog */ get_header() ?>


<!-- PAGE TITLE SECTION-->
<section class="pageTitleSection paralax-bg" style="background-image: url(img/page-banner/page-banner-2.jpg);">
    <div class="container">
        <div class="pageTitleInfo text-center">
            <h2>Blog</h2>
            <ol class="breadcrumb">
                <li><a href="<?php echo get_option('/'); ?>">Home</a></li>
                <li class="active">Blog</li>
            </ol>
        </div>
    </div>
</section>


<!-- BLOG GRID SECTION -->
<section class="whiteSection commonSection clearfix blog blog-list">
    <div class="container">
        <div class="main-content">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="primary-content">
                        <?php
                        while ( have_posts() ) : the_post();
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slide-home' );
                            ?>

                            <div class="media listView">
                                <a class="media-left" href="<?php the_permalink() ?>">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title() ?>" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php the_author() ?></a></li>
                                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?></a></li>
                                    </ul>
                                    <p><?php echo excerpt(100); ?></p>
                                    <a class="more" href="<?php the_permalink() ?>">Continue Lendo</a>
                                </div>
                            </div>

                        <?php endwhile; ?>

                        <?php wp_pagenavi(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>
