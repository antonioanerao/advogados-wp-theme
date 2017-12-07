<?php
$coop_options=theme_setup_data();
$practice_area_setting = wp_parse_args(  get_option( 'coop_options', array() ), $coop_options );
if($practice_area_setting['practice_area_section_enabled'] == 0 ) {
?>
<!-- PRACTICE AREA -->
<section class="commonSection clearfix whiteSection gallery-section" style="margin-top: -120px;">
    <div class="container">

        <div class="sectionTitle text-center">
            <h2>practice area</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <article class="gallery-img text-center">
                    <figure>
                        <img src="<?php echo $practice_area_setting['practice_area_bloco01_image']; ?>" alt="Image" class="img-responsive">
                        <div class="overlay">
                            <div class="overlayInfo">
                                <i class="<?php echo $practice_area_setting['practice_area_bloco01_icon']; ?>"></i>
                                <h4><?php echo $practice_area_setting['practice_area_bloco01_title']; ?></h4>
                                <p><?php echo $practice_area_setting['practice_area_bloco01_description']; ?></p>
                            </div>
                        </div>
                    </figure>
                </article>
            </div>

            <div class="col-sm-4">
                <article class="gallery-img text-center">
                    <figure>
                        <img src="<?php echo $practice_area_setting['practice_area_bloco02_image']; ?>" alt="Image" class="img-responsive">
                        <div class="overlay">
                            <div class="overlayInfo">
                                <i class="<?php echo $practice_area_setting['practice_area_bloco02_icon']; ?>"></i>
                                <h4><?php echo $practice_area_setting['practice_area_bloco02_title']; ?></h4>
                                <p><?php echo $practice_area_setting['practice_area_bloco02_description']; ?></p>
                            </div>
                        </div>
                    </figure>
                </article>
            </div>

            <div class="col-sm-4">
                <article class="gallery-img text-center">
                    <figure>
                        <img src="<?php echo $practice_area_setting['practice_area_bloco03_image']; ?>" alt="Image" class="img-responsive">
                        <div class="overlay">
                            <div class="overlayInfo">
                                <i class="<?php echo $practice_area_setting['practice_area_bloco03_icon']; ?>"></i>
                                <h4><?php echo $practice_area_setting['practice_area_bloco03_title']; ?></h4>
                                <p><?php echo $practice_area_setting['practice_area_bloco03_description']; ?></p>
                            </div>
                        </div>
                    </figure>
                </article>
            </div>

            <div class="col-sm-4">
                <article class="gallery-img text-center">
                    <figure>
                        <img src="<?php echo $practice_area_setting['practice_area_bloco04_image']; ?>" alt="Image" class="img-responsive">
                        <div class="overlay">
                            <div class="overlayInfo">
                                <i class="<?php echo $practice_area_setting['practice_area_bloco04_icon']; ?>"></i>
                                <h4><?php echo $practice_area_setting['practice_area_bloco04_title']; ?></h4>
                                <p><?php echo $practice_area_setting['practice_area_bloco04_description']; ?></p>
                            </div>
                        </div>
                    </figure>
                </article>
            </div>

            <div class="col-sm-4">
                <article class="gallery-img text-center">
                    <figure>
                        <img src="<?php echo $practice_area_setting['practice_area_bloco05_image']; ?>" alt="Image" class="img-responsive">
                        <div class="overlay">
                            <div class="overlayInfo">
                                <i class="<?php echo $practice_area_setting['practice_area_bloco05_icon']; ?>"></i>
                                <h4><?php echo $practice_area_setting['practice_area_bloco05_title']; ?></h4>
                                <p><?php echo $practice_area_setting['practice_area_bloco05_description']; ?></p>
                            </div>
                        </div>
                    </figure>
                </article>
            </div>

            <div class="col-sm-4">
                <article class="gallery-img text-center">
                    <figure>
                        <img src="<?php echo $practice_area_setting['practice_area_bloco06_image']; ?>" alt="Image" class="img-responsive">
                        <div class="overlay">
                            <div class="overlayInfo">
                                <i class="<?php echo $practice_area_setting['practice_area_bloco06_icon']; ?>"></i>
                                <h4><?php echo $practice_area_setting['practice_area_bloco06_title']; ?></h4>
                                <p><?php echo $practice_area_setting['practice_area_bloco06_description']; ?></p>
                            </div>
                        </div>
                    </figure>
                </article>
            </div>


        </div>

    </div>
</section>
<?php } ?>