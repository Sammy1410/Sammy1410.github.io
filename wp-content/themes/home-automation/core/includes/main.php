<?php

add_action( 'admin_menu', 'home_automation_getting_started' );
function home_automation_getting_started() {
	add_theme_page( esc_html__('Get Started', 'home-automation'), esc_html__('Get Started', 'home-automation'), 'edit_theme_options', 'home-automation-guide-page', 'home_automation_test_guide');
}

function home_automation_admin_enqueue_scripts() {
	wp_enqueue_style( 'home-automation-admin-style',get_template_directory_uri().'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'home_automation_admin_enqueue_scripts' );

if ( ! defined( 'HOME_AUTOMATION_DOCS_FREE' ) ) {
define('HOME_AUTOMATION_DOCS_FREE',__('https://www.misbahwp.com/docs/home-automation-free-docs/','home-automation'));
}
if ( ! defined( 'HOME_AUTOMATION_DOCS_PRO' ) ) {
define('HOME_AUTOMATION_DOCS_PRO',__('https://www.misbahwp.com/docs/home-automation-pro-docs','home-automation'));
}
if ( ! defined( 'HOME_AUTOMATION_BUY_NOW' ) ) {
define('HOME_AUTOMATION_BUY_NOW',__('https://www.misbahwp.com/themes/cafe-wordpress-theme/','home-automation'));
}
if ( ! defined( 'HOME_AUTOMATION_SUPPORT_FREE' ) ) {
define('HOME_AUTOMATION_SUPPORT_FREE',__('https://wordpress.org/support/theme/home-automation','home-automation'));
}
if ( ! defined( 'HOME_AUTOMATION_REVIEW_FREE' ) ) {
define('HOME_AUTOMATION_REVIEW_FREE',__('https://wordpress.org/support/theme/home-automation/reviews/#new-post','home-automation'));
}
if ( ! defined( 'HOME_AUTOMATION_DEMO_PRO' ) ) {
define('HOME_AUTOMATION_DEMO_PRO',__('https://www.misbahwp.com/demo/home-automation/','home-automation'));
}

function home_automation_test_guide() { ?>
	<?php $home_automation_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( HOME_AUTOMATION_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'home-automation' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'home-automation' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( HOME_AUTOMATION_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'home-automation' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( HOME_AUTOMATION_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'home-automation' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','home-automation'); ?><?php echo esc_html( $home_automation_theme ); ?>  <span><?php esc_html_e('Version: ', 'home-automation'); ?><?php echo esc_html($home_automation_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$home_automation_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $home_automation_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','home-automation'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','home-automation'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','home-automation'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','home-automation'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'home-automation' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','home-automation'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( HOME_AUTOMATION_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'home-automation' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( HOME_AUTOMATION_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'home-automation' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( HOME_AUTOMATION_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'home-automation' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
