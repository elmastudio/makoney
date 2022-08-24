<?php
/**
 * Title: Five column posts with Heading
 * Slug: makoney/five-col-posts
 * Categories: queries
 */
?>

<!-- wp:separator {"backgroundColor":"border-primary","className":"alignfull is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-border-primary-background-color has-background has-border-primary-color has-border-primary-background-color alignfull is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"tagName":"section","align":"wide","paddingTop":1,"paddingBottom":14} -->
<section class="wp-block-group alignwide pt__1 pb__14"><!-- wp:heading {"align":"wide","fontSize":"text-xxl","paddingTop":3,"paddingBottom":10} -->
<h2 class="alignwide has-text-xxl-font-size pt__3 pb__10" id="related-posts">Related Posts</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":5,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"tagName":"section","displayLayout":{"type":"flex","columns":5},"align":"wide","className":"gap-m","layout":{"inherit":false}} -->
<section class="wp-block-query alignwide gap-m"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-terms {"term":"category","className":"uppercase","fontSize":"text-xxxs"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.4"}},"fontSize":"text-s","fontFamily":"libre-franklin"} /-->

<!-- wp:post-author {"showAvatar":false,"byline":"by ","fontSize":"text-xxs"} /-->
<!-- /wp:post-template --></section>
<!-- /wp:query --></section>
<!-- /wp:group -->