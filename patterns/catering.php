<?php
/**
 * Title: Catering
 * Slug: double-scoop-lite/catering
 * Categories: double-scoop-lite
 * Description: Private events and catering: what is included and a quote button.
 * Keywords: catering, events, weddings, contact
 * Viewport Width: 1400
 *
 * @package double-scoop-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"sc-section"} -->
<section class="wp-block-group alignfull sc-section" id="catering">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Events &amp; Catering', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Private Events &amp; Catering', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-lede-left"} -->
<p class="sc-lede-left"><?php echo esc_html__( 'Bring Scooped to your wedding, corporate event, or birthday party. We set up a staffed gelato station with 8–12 flavours, cones, cups, and all the toppings. Austin-wide delivery and setup included.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"sc-bullets"} -->
<ul class="wp-block-list sc-bullets">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Minimum 50 guests · 3-hour service', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Custom flavour selection 2 weeks before event', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Staffed by our team — you relax', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Served weddings, festivals, corporate retreats', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"sc-btn-secondary"} -->
<div class="wp-block-button sc-btn-secondary"><a class="wp-block-button__link wp-element-button" href="mailto:catering@scooped.example?subject=Catering%20Enquiry"><?php echo esc_html__( 'Get a catering quote', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"sc-muted","fontSize":"small"} -->
<p class="has-small-font-size sc-muted"><?php echo esc_html__( 'We\'ll reply within one business day.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo double_scoop_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
