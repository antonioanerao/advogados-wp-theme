<?php
$appointment_options=theme_setup_data();
$service_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($service_setting['banner01_section_enabled'] == 0 ) {
?>
<!-- BANNER BOTTOM -->
<section class="banner-bottom">
    <div class="container">
        <div class="banner-bottom-inner">
            <div class="row">
                <div class="col-sm-4">
                    <div class="media colContent">
                <span class="media-left">
                  <i class="<?php echo $service_setting['banner01_bloco01_icon']; ?>"></i>
                </span>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $service_setting['banner01_bloco01_title']; ?></h3>
                            <p><?php echo $service_setting['banner01_bloco01_description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media colContent">
                <span class="media-left">
                  <i class="<?php echo $service_setting['banner01_bloco02_icon']; ?>"></i>
                </span>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $service_setting['banner01_bloco02_title']; ?></h3>
                            <p><?php echo $service_setting['banner01_bloco02_description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media colContent">
                <span class="media-left">
                  <i class="<?php echo $service_setting['banner01_bloco03_icon']; ?>"></i>
                </span>
                        <div class="media-body">
                            <h3 class="media-heading color-1"><?php echo $service_setting['banner01_bloco03_title']; ?></h3>
                            <p><?php echo $service_setting['banner01_bloco03_description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>