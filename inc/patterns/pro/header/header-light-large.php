<?php
/**
 * Default header
 */
return array(
	'title'      => __( 'Header Large', 'aino' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"className":"site-header pro-light-l content-gap"} -->
	<div class="wp-block-group site-header pro-light-l content-gap">
	<!-- wp:group {"className":"header-content","layout":{"inherit":false}} -->
	<div class="wp-block-group header-content">
	<!-- wp:ainoblocks/flexbox {"alignItemsDesktop":"align-items__center__d","alignItemsTablet":"align-items__center__t","alignItemsMobile":"align-items__center__m"} -->
<div class="wp-block-ainoblocks-flexbox direction__row__d direction__row__t direction__row__m nowrap__d nowrap_t nowrap_m justify__flexstart__d justify__flexstart__t justify__flexstart__m align-items__center__d align-items__center__t align-items__center__m align-cont__stretch__d align-cont__stretch__t align-cont__stretch__m shadow-none"><!-- wp:ainoblocks/flex-item {"paddingRight":3} -->
<div class="wp-block-ainoblocks-flex-item auto pr__3">
<!-- wp:navigation {showSubmenuIcon":false,"overlayMenu":"never","className":"mobile-hide tablet-show","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"1rem"}},"fontSize":"text-xxs"} /-->
</div>
<!-- /wp:ainoblocks/flex-item -->

<!-- wp:ainoblocks/flex-item {"paddingLeft":1} -->
<div class="wp-block-ainoblocks-flex-item auto pl__1"><!-- wp:ainoblocks/multiple-buttons -->
<div class="wp-block-ainoblocks-multiple-buttons"><!-- wp:ainoblocks/button {"size":"size__xs","label":"Search","className":"btn-icon icon-search is-style-naked"} -->
<div class="wp-block-ainoblocks-button btn-icon icon-search is-style-naked"><a class="wp-block-ainoblocks-button__link size__xs no-border-radius" href="/search/">Search</a></div>
<!-- /wp:ainoblocks/button --></div>
<!-- /wp:ainoblocks/multiple-buttons --></div>
<!-- /wp:ainoblocks/flex-item --></div>
<!-- /wp:ainoblocks/flexbox -->
	
	<!-- wp:navigation {"textColor":"font-secondary","overlayMenu":"never","__unstableLocation":"header-top","className":"mobile-hide","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"text-xxs"} /--></div>
	<!-- /wp:group -->
	
	<!-- wp:ainoblocks/grid-container {"paddingTop":8} -->
	<div class="wp-block-ainoblocks-grid-container alignwide pt__8"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","paddingBottom":8} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking pb__8"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"-4px"}},"fontSize":"text-7-xl"} /--></div>
	<!-- /wp:ainoblocks/grid-item -->
	
	<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","className":"mobile-hide","paddingTop":0,"paddingBottom":9} -->
	<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__start justify-self__stretch no-stacking mobile-hide pb__9"><!-- wp:navigation {"overlayMenu":"never","__unstableLocation":"primary","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"400"}},"fontSize":"text-xxl","fontFamily":"ibarra-real-nova"} /--></div>
	<!-- /wp:ainoblocks/grid-item --></div></div>
	<!-- /wp:ainoblocks/grid-container --></div>
	<!-- /wp:group -->',
);