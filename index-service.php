<?php
$appointment_options=theme_setup_data();
$sobrenos_setting = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
if($sobrenos_setting['sobrenos_section_enabled'] == 0 ) { ?>
<div class="Service-section">
	<div class="container">

		<div class="row">
			<div class="col-md-12">

				<div class="section-heading-title">
					<h2><?php echo $sobrenos_setting['sobrenos_title']; ?></h2>
					<p><?php echo $sobrenos_setting['sobrenos_description']; ?> </p>
				</div>
			</div>
		</div>
        <br><br>

        <div class="row">

            <!-- Service one -->
            <div class="col-sm-4">
                <div class="lawInfo">
                    <?php echo $sobrenos_setting['sobrenos_one_title']; ?>
                    <?php echo $sobrenos_setting['sobrenos_one_description']; ?>
                </div>
            </div>

            <!-- Simple image -->
            <div class="col-sm-4">
                <div class="info-img">
                    <img src="<?php echo $sobrenos_setting['sobrenos_three_description']; ?>">
                </div>
            </div>

            <!-- Service two -->
            <div class="col-sm-4">
                <div class="lawInfo">
                    <h2><?php echo $sobrenos_setting['sobrenos_two_title']; ?></h2>
                    <?php echo $sobrenos_setting['sobrenos_two_description']; ?>
                </div>
            </div>
        </div>

	</div>
</div>
<!-- /HomePage Service Section -->
<?php } ?>