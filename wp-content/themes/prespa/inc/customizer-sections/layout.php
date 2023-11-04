<?php

/*
 ** Allow users to change page layout via Theme Customizer
 */

function prespa_register_theme_layout_options( $wp_customize ) {

	$wp_customize->add_panel(
		'prespa_layout_options',
		array(
			'title'       => esc_html__( 'Site Layout & Sidebar', 'prespa' ),
			'description' => esc_html__( 'Set custom width for the header, container and the footer. Wrap posts and pages into beatiful containers.', 'prespa' ),
		)
	);

	$wp_customize->add_section(
		'header_layout',
		array(
			'title'       => esc_html__( 'Header Layout', 'prespa' ),
			'description' => esc_html__( 'Set custom width for the header.', 'prespa' ),
			'panel'       => esc_html__( 'prespa_layout_options', 'prespa' ),
		)
	);

	$wp_customize->add_section(
		'container_layout',
		array(
			'title'       => esc_html__( 'Container Layout', 'prespa' ),
			'description' => esc_html__( 'Set custom width for posts and pages. Wrap posts and pages into beatiful containers. More options - go pro version.', 'prespa' ),
			'panel'       => esc_html__( 'prespa_layout_options', 'prespa' ),
		)
	);

	$wp_customize->add_section(
		'sidebar_layout',
		array(
			'title'       => esc_html__( 'Sidebar Layout', 'prespa' ),
			'panel'       => esc_html__( 'prespa_layout_options', 'prespa' ),
			'description' => esc_html__( 'Please make sure that you have first added widgets from "Widgets" section. More sidebar options - go pro version.', 'prespa' )
		)
	);

	$wp_customize->add_section(
		'footer_layout',
		array(
			'title'       => esc_html__( 'Footer Layout', 'prespa' ),
			'description' => esc_html__( 'Set custom width for the footer.', 'prespa' ),
			'panel'       => esc_html__( 'prespa_layout_options', 'prespa' ),
		)
	);

	// Header
	$wp_customize->add_setting(
		'header_width',
		array(
			'default'           => '1180',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new Prespa_Range_Slider_Control(
			$wp_customize,
			'header_width',
			array(
				'type'     => 'prespa-range-slider',
				'label'    => __( 'Header Width', 'prespa' ),
				'section'  => 'header_layout',
				'settings' => array(
					'desktop' => 'header_width',
				),
				'choices'  => array(
					'desktop' => array(
						'min'  => 700,
						'max'  => 2000,
						'step' => 5,
						'edit' => true,
						'unit' => 'px',
					),
				),
			)
		)
	);

	// Container
	$wp_customize->add_setting(
		'container_width',
		array(
			'default'           => '980',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new Prespa_Range_Slider_Control(
			$wp_customize,
			'container_width',
			array(
				'type'        => 'prespa-range-slider',
				'label'       => __( 'Page Content Width', 'prespa' ),
				'description' => __( 'Adjust the width of the page container', 'prespa' ),
				'section'     => 'container_layout',
				'settings'    => array(
					'desktop' => 'container_width',
				),
				'choices'     => array(
					'desktop' => array(
						'min'  => 700,
						'max'  => 2000,
						'step' => 5,
						'edit' => true,
						'unit' => 'px',
					),
				),
			)
		)
	);

	$wp_customize->add_setting(
		'post_container_width',
		array(
			'default'           => '1180',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new Prespa_Range_Slider_Control(
			$wp_customize,
			'post_container_width',
			array(
				'type'        => 'prespa-range-slider',
				'label'       => __( 'Post Content Width', 'prespa' ),
				'description' => __( 'Adjust the width of the container in single posts and post archives', 'prespa' ),
				'section'     => 'container_layout',
				'settings'    => array(
					'desktop' => 'post_container_width',
				),
				'choices'     => array(
					'desktop' => array(
						'min'  => 700,
						'max'  => 2000,
						'step' => 5,
						'edit' => true,
						'unit' => 'px',
					),
				),
			)
		)
	);

	// Page wrap
	$wp_customize->add_setting(
		'page_content_layout',
		array(
			'default'           => 'one_container',
			'sanitize_callback' => 'prespa_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'page_content_layout',
		array(
			'label'       => esc_html__( 'Page Content Wrap', 'prespa' ),
			'section'     => 'container_layout',
			'description' => esc_html__( 'Wrap pages in a card or leave them as plain text. Page wrapper might not work well if you have full-width blocks.', 'prespa' ),
			'type'        => 'select',
			'choices'     => array(
				'one_container'       => esc_html__( 'No Wrap', 'prespa' ),
				'seperate_containers' => esc_html__( 'Seperate Containers', 'prespa' ),
			),
		)
	);

	// Post wrap
	$wp_customize->add_setting(
		'content_layout',
		array(
			'default'           => 'seperate_containers',
			'sanitize_callback' => 'prespa_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'content_layout',
		array(
			'label'       => esc_html__( 'Post Content Wrap', 'prespa' ),
			'section'     => 'container_layout',
			'description' => esc_html__( 'Wrap posts in a card or leave them as plain text.', 'prespa' ),
			'type'        => 'select',
			'choices'     => array(
				'one_container'       => esc_html__( 'No Wrap', 'prespa' ),
				'seperate_containers' => esc_html__( 'Seperate Containers', 'prespa' ),
			),
		)
	);

	// Footer

	$wp_customize->add_setting(
		'footer_width',
		array(
			'default'           => '1220',
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		new Prespa_Range_Slider_Control(
			$wp_customize,
			'footer_width',
			array(
				'type'     => 'prespa-range-slider',
				'label'    => __( 'Footer Width', 'prespa' ),
				'section'  => 'footer_layout',
				'settings' => array(
					'desktop' => 'footer_width',
				),
				'choices'  => array(
					'desktop' => array(
						'min'  => 700,
						'max'  => 2000,
						'step' => 5,
						'edit' => true,
						'unit' => 'px',
					),
				),
			)
		)
	);

	/* Single Page Layout */
	$wp_customize->add_setting(
		'page_layout',
		array(
			'default'           => 'none',
			'sanitize_callback' => 'prespa_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'page_layout',
		array(
			'label'       => esc_html__( 'Page Sidebar', 'prespa' ),
			'section'     => 'sidebar_layout',
			'type'        => 'select',
			'choices'     => array(
				'right' => esc_html__( 'Right Sidebar', 'prespa' ),
				'none'  => esc_html__( 'None', 'prespa' ),
				'left'  => esc_html__( 'Left Sidebar', 'prespa' ),
			),
			'description' => esc_html__( "Choose the sidebar position on the site's pages, including the static home page.", 'prespa' ),
		)
	);

	/* Single Post Layout */
	$wp_customize->add_setting(
		'post_layout',
		array(
			'default'           => 'right',
			'sanitize_callback' => 'prespa_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'post_layout',
		array(
			'label'       => esc_html__( 'Post Sidebar', 'prespa' ),
			'section'     => 'sidebar_layout',
			'type'        => 'select',
			'choices'     => array(
				'right' => esc_html__( 'Right Sidebar', 'prespa' ),
				'none'  => esc_html__( 'None', 'prespa' ),
				'left'  => esc_html__( 'Left Sidebar', 'prespa' ),
			),
			'description' => esc_html__( 'Choose the sidebar position on the blog posts, including the post archives.', 'prespa' ),
		)
	);

	/* Shop Page Layout */
	if ( class_exists( 'Woocommerce' ) ) :
		$wp_customize->add_setting(
			'shop_page_layout',
			array(
				'default'           => 'right',
				'sanitize_callback' => 'prespa_sanitize_select',
			)
		);
		$wp_customize->add_control(
			'shop_page_layout',
			array(
				'label'       => esc_html__( 'Woocommerce Sidebar', 'prespa' ),
				'section'     => 'sidebar_layout',
				'type'        => 'select',
				'choices'     => array(
					'right' => esc_html__( 'Right Sidebar', 'prespa' ),
					'none'  => esc_html__( 'None', 'prespa' ),
					'left'  => esc_html__( 'Left Sidebar', 'prespa' ),
				),
				'description' => esc_html__( 'Choose the sidebar position on the page that lists products and the product page.', 'prespa' ),
			)
		);
	endif;

}

add_action( 'customize_register', 'prespa_register_theme_layout_options' );

function prespa_customize_css() {
	$header_wrapper = get_theme_mod( 'header_width', 1180 );
	$page_wrapper   = get_theme_mod( 'container_width', 980 );
	$post_wrapper   = get_theme_mod( 'post_container_width', 1180 );
	$footer_wrapper = get_theme_mod( 'footer_width', 1180 );
	// post wrap
	$post_content_layout = get_theme_mod( 'content_layout', 'seperate_containers' );
	$page_content_layout = get_theme_mod( 'page_content_layout', 'one_container' );
	// sidebar
	$page_layout          = get_theme_mod( 'page_layout', 'none' );
	$post_layout          = get_theme_mod( 'post_layout', 'right' );
	$post_archives_layout = get_theme_mod( 'post_archives_layout', 'right' );
	$shop_layout          = get_theme_mod( 'shop_page_layout', 'none' );

	$cursor_layout = get_theme_mod( 'cursor_layout', 'transparent' );
	?>

<style type="text/css">
	.header-content-wrapper {
		max-width: <?php echo esc_attr( $header_wrapper ); ?>px;
	}
	.page .site-wrapper, .woocommerce .site-wrapper {
		max-width: <?php echo esc_attr( $page_wrapper ); ?>px;
	}
	.site-wrapper {
		max-width: <?php echo esc_attr( $post_wrapper ); ?>px;
	}
	.footer-content {
		max-width: <?php echo esc_attr( $footer_wrapper ); ?>px;
	}

	<?php
	// Post wrap, Post archives wrap - exclude woo products if applicable
	if ( ( is_single() || prespa_is_blog() ) && $post_content_layout == 'seperate_containers' && ! ( class_exists( 'Woocommerce' ) && is_product() ) ) :
		?>
	.hentry,
	#secondary > section {
		margin: 2rem 0 2.75rem;
		box-shadow: var(--p-box-shadow);
		padding: 1rem;
	}
	body:not(.page):not(.single) .hentry:hover {
		box-shadow: var(--p-box-shadow-hover);
	}
	body:not(.dark-mode) {
		background-color: #f7f8f9
	}
	body:not(.dark-mode) .main-navigation-container {
		background-color: #fff;
	}
	.comment-body,
	.comment-form {
		box-shadow: 0 20px 80px 0 rgba(193, 199, 212, 0.1);
		margin: 1.25em 0 2em;
		padding: 1rem;
		background-color: #fff;
	}
	body:not(.dark-mode) .hentry,
	body:not(.dark-mode) #secondary > section {
		background-color: #fff;
	}
	.about-author {
		padding: 1em;
	}
	@media (min-width:54rem) {
		.hentry,
		#secondary > section,
		.comment-body, 
		.comment-form, 
		.about-author  {
			padding: 2rem;
		}
	}
	<?php
	// Page wrap
	elseif ( is_page() && $page_content_layout == 'seperate_containers' && ! ( class_exists( 'Woocommerce' ) && is_shop() ) ) :
		?>
	.hentry, #secondary > section {
		box-shadow: var(--p-box-shadow);
		margin: 2rem 0 2.75rem;
		padding: 1rem;
	}
	body:not(.dark-mode) {
		background-color: #f7f8f9
	}
	body:not(.dark-mode) .main-navigation-container {
		background-color: #fff;
	}

	body:not(.dark-mode) .hentry, 
	body:not(.dark-mode) #secondary > section {
		background-color: #fff;
	}
	.comment-body,
	.comment-form {
		box-shadow: 0 20px 80px 0 rgba(193, 199, 212, 0.1);
		margin: 1.25em 0 2em;
		padding: 1rem;
		background-color: #fff;
	}
	@media (min-width:40rem) {
		.hentry,
		#secondary > section,
		.comment-body, 
		.comment-form {
			padding: 2rem;
		}
	}
	<?php
	endif;
	// no wrap for posts and post archives
	if ( ( is_single() || prespa_is_blog() ) && $post_content_layout == 'one_container' ) :
		?>
		.top-meta {
			margin-top: 1rem;
		}
		body:not(.single) .hentry:not(:last-child) {
			border-bottom: 1px solid var(--p-border-color);
		}
		.comment:not(:last-child) {
			border-bottom: 1px solid var(--p-border-color);
		}
		.single .entry-footer {
			border-bottom: 1px solid var(--p-line-light);
		}
		.about-author.hentry {
			border-bottom: 1px solid var(--p-line-light);
			margin-top: -1rem;
		}
		.hentry:nth-child(1) {
			margin-top: 2rem;
		}
		.hentry {
			margin-bottom: 1rem;
			padding-bottom: .75rem;
		}
	<?php // no wrap for pages
	elseif ( is_page() && $page_content_layout == 'one_container' ) : ?>
		.page .post-thumbnail {
			margin-top: 2rem;
		}
		<?php
	endif;

	if ( $page_layout == 'left' ) :
		?>
	.page:not(.woocommerce) .site-wrapper {
		flex-direction: row-reverse;
	}

		<?php
	endif;

	if ( $shop_layout == 'left' ) :
		?>
	.woocommerce .site-wrapper {
		flex-direction: row-reverse;
	}

		<?php
	endif;

	if ( $post_layout == 'left' ) :
		?>
	 .single:not(.woocommerce) .site-wrapper {
		 flex-direction: row-reverse;
	 }
	 .archive .site-wrapper, .home.blog .site-wrapper, .blog .site-wrapper, .search .site-wrapper, .error404 .site-wrapper {
		flex-direction: row-reverse;
	}
	 
	<?php endif; ?>

</style>

	<?php
}
add_action( 'wp_head', 'prespa_customize_css' );
