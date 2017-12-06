<?php get_header() ?>
<?php if ( have_posts() ) : the_post(); $pega_id_cat = get_the_category($post->ID); ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slide-home' ); ?>
<!-- PAGE TITLE2 SECTION-->
<section class="pageTitleSection paralax-bg" style="background-image: url(img/page-banner/page-banner-2.jpg);">
    <div class="container">
        <div class="pageTitleInfo text-center">
            <h2>Blog</h2>
            <ol class="breadcrumb">
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
            </ol>
        </div>
    </div>
</section>

<!-- BLOG DETAIL SECTION -->
<section class="whiteSection commonSection clearfix blog-grid">
    <div class="container">
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 @@right">
                    <div class="primary-content">
                        <div class="thumbnail gridView blog-details">
                            <img src="<?php echo $image[0]; ?>" alt="image" class="img-responsive">
                            <div class="caption">
                                <h2><?php the_title() ?></h2>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php the_author() ?></a></li>
                                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date('d/m/Y'); ?> </a></li>
                                </ul>

                                <?php the_content() ?>

                                <div class="tag">
                                        <span>TAGS:
                                        <?php
                                            $posttags = get_the_tags();
                                            if ($posttags) { foreach($posttags as $tag) {
                                        ?>
                                        <i class="fa fa-tag"></i> <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                                        <?php } } ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="comments">
                            <div class="sectionTitle text-left">
                                <h2>Comentários</h2>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="sidedbar">
                        <?php dynamic_sidebar('right-single-blog-sidebar'); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer() ?>
