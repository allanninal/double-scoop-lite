<?php
/**
 * Title: Gallery
 * Slug: double-scoop-lite/gallery
 * Categories: double-scoop-lite
 * Description: A grid of captioned photos.
 * Keywords: gallery, photos, images
 * Viewport Width: 1400
 *
 * @package double-scoop-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"surface-2","className":"sc-section"} -->
<section class="wp-block-group has-surface-2-background-color has-background alignfull sc-section" id="gallery">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Instagram', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Scoops Worth Staring At', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-muted"} -->
<p class="sc-muted"><?php echo wp_kses_post( __( 'Follow <a href="https://instagram.com/scoopedatx">@scoopedatx</a> for daily flavour drops.', 'double-scoop-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"sc-gallery"} -->
<div class="wp-block-group sc-gallery">
<!-- wp:image {"id":"__ID_honey-lavender__","sizeSlug":"large","linkDestination":"none","className":"sc-photo"} -->
<figure class="wp-block-image size-large sc-photo"><img src="__SRC_honey-lavender__" alt="<?php echo esc_attr__( 'A purple soft-serve cone held against a blurred field of lavender flowers', 'double-scoop-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_honey-lavender__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Honey Lavender', 'double-scoop-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_triple-scoop__","sizeSlug":"large","linkDestination":"none","className":"sc-photo"} -->
<figure class="wp-block-image size-large sc-photo"><img src="__SRC_triple-scoop__" alt="<?php echo esc_attr__( 'Two scoops of gelato stacked in a waffle cone, held against a pink wall', 'double-scoop-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_triple-scoop__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Two scoops', 'double-scoop-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_case__","sizeSlug":"large","linkDestination":"none","className":"sc-photo"} -->
<figure class="wp-block-image size-large sc-photo"><img src="__SRC_case__" alt="<?php echo esc_attr__( 'A row of gelato pans in pistachio green, strawberry red, and vanilla cream inside the gelateria case', 'double-scoop-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_case__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'The gelato case', 'double-scoop-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_banana-split__","sizeSlug":"large","linkDestination":"none","className":"sc-photo"} -->
<figure class="wp-block-image size-large sc-photo"><img src="__SRC_banana-split__" alt="<?php echo esc_attr__( 'A banana split sundae with three scoops, hot fudge, and toasted walnuts served in a long white dish', 'double-scoop-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_banana-split__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Banana split', 'double-scoop-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_friends__","sizeSlug":"large","linkDestination":"none","className":"sc-photo"} -->
<figure class="wp-block-image size-large sc-photo"><img src="__SRC_friends__" alt="<?php echo esc_attr__( 'Two friends eating gelato cones on a stone wall on a sunny afternoon', 'double-scoop-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_friends__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'SoCo summers', 'double-scoop-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_exterior__","sizeSlug":"large","linkDestination":"none","className":"sc-photo"} -->
<figure class="wp-block-image size-large sc-photo"><img src="__SRC_exterior__" alt="<?php echo esc_attr__( 'A serving window set into a white wall, with two stools outside', 'double-scoop-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_exterior__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'The window', 'double-scoop-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo double_scoop_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
