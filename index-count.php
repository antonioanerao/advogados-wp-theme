<?php
$appointment_options=theme_setup_data();
$count_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($count_setting['count_section_enabled'] == 0 ) { ?>

<!-- COUNT Up SECTION -->
<section class="countUpSection paralax" style="background-image: url(img/paralax/paralax-img1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <div class="counter-inner">
                    <div class="icon text-center">
                        <i class="<?php echo $count_setting['count_bloco01_icon']; ?>"></i>
                    </div>
                    <div class="counter"><?php echo $count_setting['count_bloco01_title']; ?></div>
                    <h5><?php echo $count_setting['count_bloco01_description']; ?></h5>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="counter-inner">
                    <div class="icon text-center">
                        <i class="<?php echo $count_setting['count_bloco02_icon']; ?>"></i>
                    </div>
                    <div class="counter"><?php echo $count_setting['count_bloco02_title']; ?></div>
                    <h5><?php echo $count_setting['count_bloco02_description']; ?></h5>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="counter-inner">
                    <div class="icon text-center">
                        <i class="<?php echo $count_setting['count_bloco03_icon']; ?>"></i>
                    </div>
                    <div class="counter"><?php echo $count_setting['count_bloco03_title']; ?></div>
                    <h5><?php echo $count_setting['count_bloco03_description']; ?></h5>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="counter-inner">
                    <div class="icon text-center">
                        <i class="<?php echo $count_setting['count_bloco04_icon']; ?>"></i>
                    </div>
                    <div class="counter"><?php echo $count_setting['count_bloco04_title']; ?></div>
                    <h5><?php echo $count_setting['count_bloco04_description']; ?></h5>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>