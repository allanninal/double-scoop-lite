<?php
/**
 * Title: Locations
 * Slug: double-scoop-lite/locations
 * Categories: double-scoop-lite
 * Description: Every location with its address, phone, opening hours and directions.
 * Keywords: locations, hours, opening times, address, contact, map
 * Viewport Width: 1400
 *
 * @package double-scoop-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"accent-bg","className":"sc-section"} -->
<section class="wp-block-group has-accent-bg-background-color has-background alignfull sc-section" id="locations">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Find Us', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Three Scoops, Three Spots', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-lede-left sc-muted"} -->
<p class="sc-lede-left sc-muted"><?php echo esc_html__( 'Every location churns the same recipes with the same obsession. The only difference is the neighbourhood.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"sc-cards"} -->
<div class="wp-block-group sc-cards">
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card sc-loc"} -->
<div class="wp-block-group sc-card sc-loc">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'SoCo', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"sc-loc__name"} -->
<h3 class="wp-block-heading sc-loc__name"><?php echo esc_html__( 'South Congress', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo wp_kses_post( __( '811 S Congress Ave, Austin, TX 78704<br><a href="tel:+15125550137">+1 (512) 555-0137</a>', 'double-scoop-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"sc-hours"} -->
<figure class="wp-block-table sc-hours"><table class="has-fixed-layout"><tbody><tr><td>Mon–Thu</td><td>12:00 PM – 9:00 PM</td></tr><tr><td>Friday</td><td>12:00 PM – 10:30 PM · Late-night scoops on the patio</td></tr><tr><td>Saturday</td><td>11:00 AM – 10:30 PM · Weekend line forms by noon</td></tr><tr><td>Sunday</td><td>11:00 AM – 9:00 PM</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status"} -->
<p class="is-style-open-status"></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com/?q=811+S+Congress+Ave+Austin+TX"><?php echo esc_html__( 'Get directions', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card sc-loc"} -->
<div class="wp-block-group sc-card sc-loc">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'East Austin', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"sc-loc__name"} -->
<h3 class="wp-block-heading sc-loc__name"><?php echo esc_html__( 'East Sixth', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo wp_kses_post( __( '2204 E 6th St, Austin, TX 78702<br><a href="tel:+15125550192">+1 (512) 555-0192</a>', 'double-scoop-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"sc-hours"} -->
<figure class="wp-block-table sc-hours"><table class="has-fixed-layout"><tbody><tr><td>Mon–Thu</td><td>1:00 PM – 9:30 PM</td></tr><tr><td>Friday</td><td>1:00 PM – 11:00 PM · Bar district hours</td></tr><tr><td>Saturday</td><td>12:00 PM – 11:00 PM</td></tr><tr><td>Sunday</td><td>12:00 PM – 9:30 PM · Brunch walk-ins welcome</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status"} -->
<p class="is-style-open-status"></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com/?q=2204+E+6th+St+Austin+TX"><?php echo esc_html__( 'Get directions', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card sc-loc"} -->
<div class="wp-block-group sc-card sc-loc">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Domain Northside', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"sc-loc__name"} -->
<h3 class="wp-block-heading sc-loc__name"><?php echo esc_html__( 'The Domain', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo wp_kses_post( __( '3401 Esperanza Crossing, Austin, TX 78758<br><a href="tel:+15125550218">+1 (512) 555-0218</a>', 'double-scoop-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:table {"className":"sc-hours"} -->
<figure class="wp-block-table sc-hours"><table class="has-fixed-layout"><tbody><tr><td>Mon–Thu</td><td>11:00 AM – 9:00 PM</td></tr><tr><td>Friday</td><td>11:00 AM – 10:00 PM</td></tr><tr><td>Saturday</td><td>10:00 AM – 10:00 PM · First scoop of the day at 10 AM</td></tr><tr><td>Sunday</td><td>10:00 AM – 8:00 PM</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status"} -->
<p class="is-style-open-status"></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com/?q=3401+Esperanza+Crossing+Austin+TX"><?php echo esc_html__( 'Get directions', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo double_scoop_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
