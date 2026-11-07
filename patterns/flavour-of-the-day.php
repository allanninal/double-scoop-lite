<?php
/**
 * Title: Today's flavour
 * Slug: double-scoop-lite/flavour-of-the-day
 * Categories: double-scoop-lite
 * Description: Today's special and this week's rotating items, with tags and prices.
 * Keywords: special, today, rotation, menu, cards
 * Viewport Width: 1400
 *
 * @package double-scoop-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"secondary-bg","className":"sc-section is-style-edge-scallop"} -->
<section class="wp-block-group has-secondary-bg-background-color has-background alignfull sc-section is-style-edge-scallop" id="flavour-of-the-day">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"secondary"} -->
<p class="has-secondary-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Limited Daily Batch', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textColor":"secondary-dark"} -->
<h2 class="wp-block-heading has-secondary-dark-color has-text-color"><?php echo esc_html__( 'Today\'s Flavour', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-fotd","backgroundColor":"secondary-pale"} -->
<div class="wp-block-group has-secondary-pale-background-color has-background sc-fotd">
<!-- wp:paragraph {"className":"is-style-eyebrow","textColor":"secondary"} -->
<p class="has-secondary-color has-text-color is-style-eyebrow"><?php echo esc_html__( 'Today Only', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"sc-fotd__name","textColor":"secondary-dark"} -->
<h3 class="wp-block-heading has-secondary-dark-color has-text-color sc-fotd__name"><?php echo esc_html__( 'Honey Lavender', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Central Texas wildflower honey swirled into lavender-steeped custard. Floral, golden, impossible to stop eating. Today only — we made one batch.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"sc-fotd__price","textColor":"secondary-dark"} -->
<p class="has-secondary-dark-color has-text-color sc-fotd__price"><?php echo esc_html__( '$5.50 / scoop', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"sc-btn-secondary"} -->
<div class="wp-block-button sc-btn-secondary"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|menu__"><?php echo esc_html__( 'Order pickup', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"sc-rotation-title","textColor":"secondary-dark"} -->
<h3 class="wp-block-heading has-secondary-dark-color has-text-color sc-rotation-title"><?php echo esc_html__( 'On the Rotation This Week', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"},"className":"sc-cards"} -->
<div class="wp-block-group sc-cards">
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Sicilian Pistachio', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Bronte-style pistachio paste, hint of rosewater, no colouring. Earthy, sweet, deeply nutty.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Gluten-free', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Strawberry Balsamic', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Local Fredericksburg strawberries macerated in aged balsamic. Jammy, bright, slightly tart.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Burnt Salted Caramel', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Deep copper caramel, flaky sea salt, housemade waffle cone crumble. Our #1 all-time seller.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Dark Chocolate Sea Salt', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( '72% dark chocolate ganache base, espresso undertone, finishing salt. For serious chocolate people.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Fresh Mint Chip', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Steeped with fresh mint leaves (not extract), folded with dark chocolate shards. Bright, clean, herbaceous.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Mango Chili-Lime Sorbet', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Ataulfo mango purée with a chili-lime rim finish. Sweet-heat perfection — made with no dairy in the recipe.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Vegan', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Dairy-free', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Gluten-free', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"sc-center"} -->
<div class="wp-block-buttons sc-center">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_menu__"><?php echo esc_html__( 'See the full menu', 'double-scoop-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo double_scoop_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
