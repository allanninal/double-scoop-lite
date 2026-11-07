<?php
/**
 * Title: Order ahead
 * Slug: double-scoop-lite/order-ahead
 * Categories: double-scoop-lite
 * Description: Order ahead for pickup: one card per location on a dark band.
 * Keywords: order, pickup, locations, call to action
 * Viewport Width: 1400
 *
 * @package double-scoop-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"dark-bg","textColor":"dark-text","className":"sc-section sc-dark"} -->
<section class="wp-block-group has-dark-text-color has-text-color has-dark-bg-background-color has-background alignfull sc-section sc-dark" id="order">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","textColor":"accent-light"} -->
<p class="has-text-align-center has-accent-light-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Skip the Queue', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center","textColor":"dark-text"} -->
<h2 class="wp-block-heading has-text-align-center has-dark-text-color has-text-color"><?php echo esc_html__( 'Order Ahead for Pickup', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"sc-lede","textColor":"dark-muted"} -->
<p class="has-text-align-center has-dark-muted-color has-text-color sc-lede"><?php echo esc_html__( 'Pre-order your scoops — ready in 15 minutes at your chosen location. Closes at 8:30 PM daily, or when we sell out (whichever comes first).', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"13rem"},"className":"sc-orders"} -->
<div class="wp-block-group sc-orders">
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-order","backgroundColor":"dark-surface"} -->
<div class="wp-block-group has-dark-surface-background-color has-background sc-order">
<!-- wp:paragraph {"align":"center","className":"sc-order__name","textColor":"dark-text"} -->
<p class="has-text-align-center has-dark-text-color has-text-color sc-order__name"><?php echo esc_html__( 'South Congress', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","textColor":"dark-muted","fontSize":"small"} -->
<p class="has-text-align-center has-dark-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'SoCo location', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"sc-center"} -->
<div class="wp-block-buttons sc-center">
<!-- wp:button {"className":"is-style-outline sc-on-dark"} -->
<div class="wp-block-button is-style-outline sc-on-dark"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|menu__"><?php echo esc_html__( 'Order pickup', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-order","backgroundColor":"dark-surface"} -->
<div class="wp-block-group has-dark-surface-background-color has-background sc-order">
<!-- wp:paragraph {"align":"center","className":"sc-order__name","textColor":"dark-text"} -->
<p class="has-text-align-center has-dark-text-color has-text-color sc-order__name"><?php echo esc_html__( 'East Sixth', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","textColor":"dark-muted","fontSize":"small"} -->
<p class="has-text-align-center has-dark-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'East Austin location', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"sc-center"} -->
<div class="wp-block-buttons sc-center">
<!-- wp:button {"className":"is-style-outline sc-on-dark"} -->
<div class="wp-block-button is-style-outline sc-on-dark"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|menu__"><?php echo esc_html__( 'Order pickup', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-order","backgroundColor":"dark-surface"} -->
<div class="wp-block-group has-dark-surface-background-color has-background sc-order">
<!-- wp:paragraph {"align":"center","className":"sc-order__name","textColor":"dark-text"} -->
<p class="has-text-align-center has-dark-text-color has-text-color sc-order__name"><?php echo esc_html__( 'The Domain', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","textColor":"dark-muted","fontSize":"small"} -->
<p class="has-text-align-center has-dark-muted-color has-text-color has-small-font-size"><?php echo esc_html__( 'Domain Northside location', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"className":"sc-center"} -->
<div class="wp-block-buttons sc-center">
<!-- wp:button {"className":"is-style-outline sc-on-dark"} -->
<div class="wp-block-button is-style-outline sc-on-dark"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|menu__"><?php echo esc_html__( 'Order pickup', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","textColor":"dark-muted","fontSize":"small"} -->
<p class="has-text-align-center has-dark-muted-color has-text-color has-small-font-size"><?php echo wp_kses_post( __( 'Walk-ins always welcome · Contact us: <a href="mailto:hello@scooped.example">hello@scooped.example</a>', 'double-scoop-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo double_scoop_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
