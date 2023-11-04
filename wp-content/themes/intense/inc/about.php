<?php
/**
 * Theme About Page
 *
 * @package Intense
 * @since 1.0
 */

function intense_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_intense-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'intense-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'intense_theme_page_admin_style' );

/**
 * Add theme page
 */
function intense_menu() {
	add_theme_page( esc_html__( 'Intense', 'intense' ), esc_html__( 'Intense', 'intense' ), 'edit_theme_options', 'intense-theme', 'intense_theme_page_display' );
}
add_action( 'admin_menu', 'intense_menu' );

/**
 * Display About page
 */
function intense_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'intense' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://flythemes.net/','intense'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/images/flylogo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Intense!', 'intense' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Intense has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'intense' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Intense Pro Theme', 'intense' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Intense Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'intense' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href=<?php echo esc_url("https://flythemes.net/wordpress-themes/intense-wordpress-theme"); ?>><?php esc_html_e( 'Buy Intense Pro', 'intense' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'intense' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/wordpress-themes/intense-wordpress-theme' ); ?>"><?php esc_html_e( 'Theme Info', 'intense' ); ?></a>
						<a target="_blank" href="https://flydemos.net/intense/"><?php esc_html_e( 'View Demo', 'intense' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'intense' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'intense' ); ?></h3>
						<p><?php esc_html_e( 'Loved Intense? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'intense' ); ?></p>
						<a href="https://wordpress.org/support/theme/intense/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'intense' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
