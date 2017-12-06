<style>
    /* enable absolute positioning */
    .inner-addon {
        position: relative;
    }

    /* style icon */
    .inner-addon .glyphicon {
        position: absolute;
        padding: 10px;
        pointer-events: none;
    }

    /* align icon */
    .left-addon .glyphicon  { left:  0px;}
    .right-addon .glyphicon { right: 0px;}

    /* add padding  */
    .left-addon input  { padding-left:  30px; }
    .right-addon input { padding-right: 30px; }
</style>
<div class="block">
    <h3>Faça uma busca</h3>
    <div class="block-inner">

    <form method="get" id="searchform" action="<?php echo home_url() ; ?>">
        <div class="inner-addon right-addon">
            <i style="font-size:1.7em;" class="glyphicon glyphicon-search"></i>
            <input value="<?php echo esc_html($s, 1); ?>" name="s" id="s" type="text" class="form-control input-lg" placeholder="Busque um post ou notícia"/>
        </div>
    </form>
</div>
</div>
