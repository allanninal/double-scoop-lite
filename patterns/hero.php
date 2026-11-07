<?php
/**
 * Title: Hero
 * Slug: double-scoop-lite/hero
 * Categories: double-scoop-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package double-scoop-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"sc-section sc-hero"} -->
<section class="wp-block-group alignfull sc-section sc-hero" id="hero">
<!-- wp:columns {"verticalAlignment":"center","className":"sc-hero__grid"} -->
<div class="wp-block-columns are-vertically-aligned-center sc-hero__grid">
<!-- wp:column {"width":"56%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Artisan Gelato &amp; Ice Cream · Austin, TX', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"fontSize":"huge"} -->
<h1 class="wp-block-heading has-huge-font-size"><?php echo esc_html__( 'Scooped fresh every morning.', 'double-scoop-lite' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large","className":"sc-lede-left"} -->
<p class="has-large-font-size sc-lede-left"><?php echo esc_html__( 'Pistachio, strawberry, salted caramel — and whatever today\'s flavour of the day turns out to be.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sc-lede-left sc-muted"} -->
<p class="sc-lede-left sc-muted"><?php echo esc_html__( 'Three locations across Austin. Walk in, or order ahead for pickup.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-fotd-mini","backgroundColor":"secondary-bg"} -->
<div class="wp-block-group has-secondary-bg-background-color has-background sc-fotd-mini">
<!-- wp:paragraph {"className":"sc-fotd-mini__label"} -->
<p class="sc-fotd-mini__label"><?php echo esc_html__( 'Today\'s flavour', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sc-fotd-mini__name"} -->
<p class="sc-fotd-mini__name"><?php echo esc_html__( 'Honey Lavender', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"sc-btn-secondary"} -->
<div class="wp-block-button sc-btn-secondary"><a class="wp-block-button__link wp-element-button" href="#flavour-of-the-day"><?php echo esc_html__( 'See today\'s flavour', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'Browse the menu', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_locations__"><?php echo esc_html__( 'Find a location', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"44%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%">
<!-- wp:image {"id":"__ID_hero__","sizeSlug":"full","linkDestination":"none","className":"is-hero sc-hero__photo"} -->
<figure class="wp-block-image size-full is-hero sc-hero__photo"><img src="__SRC_hero__" alt="<?php echo esc_attr__( 'A waffle cone with scoops of small-batch gelato', 'double-scoop-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_hero__"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:group {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"10rem"},"className":"sc-stats"} -->
<div class="wp-block-group sc-stats">
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-stat","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background sc-stat">
<!-- wp:paragraph {"align":"center","className":"sc-stat__value"} -->
<p class="has-text-align-center sc-stat__value"><?php echo esc_html__( '28–36', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sc-stat__label"} -->
<p class="has-text-align-center sc-stat__label"><?php echo esc_html__( 'Flavours / week', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-stat","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background sc-stat">
<!-- wp:paragraph {"align":"center","className":"sc-stat__value"} -->
<p class="has-text-align-center sc-stat__value"><?php echo esc_html__( '3', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sc-stat__label"} -->
<p class="has-text-align-center sc-stat__label"><?php echo esc_html__( 'Austin locations', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-stat","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background sc-stat">
<!-- wp:paragraph {"align":"center","className":"sc-stat__value"} -->
<p class="has-text-align-center sc-stat__value"><?php echo esc_html__( '7', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sc-stat__label"} -->
<p class="has-text-align-center sc-stat__label"><?php echo esc_html__( 'Local farm partners', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-stat","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background sc-stat">
<!-- wp:paragraph {"align":"center","className":"sc-stat__value"} -->
<p class="has-text-align-center sc-stat__value"><?php echo esc_html__( 'Since \'18', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sc-stat__label"} -->
<p class="has-text-align-center sc-stat__label"><?php echo esc_html__( 'Fresh every morning', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo double_scoop_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
