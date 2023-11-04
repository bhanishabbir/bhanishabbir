<?php
/**
 * Title: Banner
 * Slug: intense/banner
 * Categories: intense, banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>","id":595,"dimRatio":40,"minHeight":800,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:800px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-595" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px"},"spacing":{"padding":{"top":"10px","right":"26px","bottom":"10px","left":"26px"}}},"backgroundColor":"primary","fontSize":"medium"} -->
<h4 class="wp-block-heading has-primary-background-color has-background has-medium-font-size" style="padding-top:10px;padding-right:26px;padding-bottom:10px;padding-left:26px;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Intense Fitness','intense'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"900","textTransform":"uppercase"}},"fontSize":"banner-title"} -->
<h2 class="wp-block-heading has-text-align-center has-banner-title-font-size" style="font-style:normal;font-weight:900;text-transform:uppercase"><?php esc_html_e('Focus on what you lift','intense'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"white","fontSize":"medium"} -->
<p class="has-text-align-center has-white-color has-text-color has-medium-font-size" style="line-height:1.6"><?php esc_html_e('Pellentesque ultrices, ligula sit amet dictum vehicula, odio erat venenatis odio, ac placerat nisi risus a nisi. In et mi et ex ornare malesuada. In tempor tellus turpis, et feugiat odio elementum ut.','intense'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"50px"}}}} -->
<div class="wp-block-buttons" style="margin-top:50px"><!-- wp:button {"style":{"border":{"radius":"0px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} -->
<div class="wp-block-button" style="font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase"><a class="wp-block-button__link wp-element-button" style="border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Join Now','intense'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->