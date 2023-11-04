z<?php
/**
 * Title: Latest News
 * Slug: intense/latest-news
 * Categories: intense, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-section-bg-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","className":"section_head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide section_head"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"5px","bottom":"5px","right":"20px","left":"20px"}}},"backgroundColor":"primary","textColor":"white","className":"section_sub_title","fontSize":"body-text","fontFamily":"catamaran"} -->
<h4 class="wp-block-heading has-text-align-center section_sub_title has-white-color has-primary-background-color has-text-color has-background has-catamaran-font-family has-body-text-font-size" style="padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px;font-style:normal;font-weight:500"><?php esc_html_e('From Athlete Community','intense'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"section_title","fontSize":"section-title"} -->
<h2 class="wp-block-heading has-text-align-center section_title has-section-title-font-size" style="margin-top:0px;font-style:normal;font-weight:700"><?php esc_html_e('Recent Blog','intense'); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"m-0 list-none"} -->
<!-- wp:group {"className":"news-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group news-box"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"className":"news-thumb","layout":{"type":"constrained"}} -->
<div class="wp-block-group news-thumb" style="margin-top:0px;margin-bottom:0px"><!-- wp:post-featured-image {"className":"news-thumb-wrap"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"border":{"color":"#d8d8d8","width":"1px"}},"backgroundColor":"white","className":"news-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group news-content has-border-color has-white-background-color has-background" style="border-color:#d8d8d8;border-width:1px;margin-top:0px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:20px"><!-- wp:post-terms {"term":"category","fontSize":"small"} /-->

<!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2","textTransform":"uppercase"},"spacing":{"margin":{"top":"0px","bottom":"10px"}}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false} /-->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:read-more {"content":"Read More","style":{"spacing":{"padding":{"right":"5px","bottom":"5px","left":"5px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"2px"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('There is no post found','intense'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->