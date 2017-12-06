<?php get_header() ?>
<?php if( have_posts()) : the_post() ?>

<!-- PAGE TITLE2 SECTION-->
<section class="pageTitleSection paralax-bg" style="background-image: url(img/page-banner/page-banner-1.jpg);">
    <div class="container">
        <div class="pageTitleInfo text-center">
            <h2><?php the_title() ?></h2>
        </div>
    </div>
</section>

<section class="commonSection clearfix whiteSection padding-top about-section">
    <div class="container">
        <?php the_content() ?>
    </div>
</section>

<?php endif; ?>
<?php get_footer() ?>
