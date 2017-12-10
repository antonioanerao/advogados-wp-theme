<?php get_header(); ?>

<!-- PAGE TITLE1 SECTION-->
<section class="pageTitleSection">
    <div class="container">
        <div class="pageTitleInfo text-center">
            <h2>Página Não Encontrada</h2>
        </div>
    </div>
</section>


<!-- ERROR SECTION -->
<section class="commonSection clearfix errorSection">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="errorMsg">
                    <h1>404</h1>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="errorInfo">
                    <h3>Oops! Página Não Encontrada</h3>
                    <form method="get" id="searchform" action="<?php echo home_url() ; ?>">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Faça uma busca" aria-describedby="basic-addon2" value="<?php echo esc_html($s, 1); ?>" name="s" id="s">
                            <button type="submit" class="input-group-addon"><i class="fa fa-arrow-right"></i></button>
                        </div>
                        <div class="formBtnArea pull-left">
                            <a href="<?php echo get_option('home'); ?>/" class="btn btn-secondary"><span class="fa fa-home"> Página Inicial</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
