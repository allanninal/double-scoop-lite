<?php
/**
 * Title: Full menu
 * Slug: double-scoop-lite/menu-full
 * Categories: double-scoop-lite
 * Description: The whole menu by category, with descriptions and prices.
 * Keywords: menu, prices, products, categories
 * Viewport Width: 1400
 *
 * @package double-scoop-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"align":"full","className":"sc-section"} -->
<div class="wp-block-group alignfull sc-section" id="menu">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Full Menu', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Every Scoop, Listed', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-lede-left sc-muted"} -->
<p class="sc-lede-left sc-muted"><?php echo esc_html__( 'All flavours are churned fresh each morning. Availability varies by location — call ahead or check the window board on arrival.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"sc-menu-section"} -->
<section class="wp-block-group sc-menu-section">
<!-- wp:heading {"level":2,"className":"sc-menu-cat"} -->
<h2 class="wp-block-heading sc-menu-cat"><?php echo esc_html__( 'Gelato', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-menu-intro"} -->
<p class="sc-menu-intro"><?php echo esc_html__( 'Slow-churned at lower air — denser, creamier, more intense flavour. The Italian way.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
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
<p class="sc-card__desc"><?php echo esc_html__( 'Bronte pistachio paste, hint of rosewater. No artificial colour.', 'double-scoop-lite' ); ?></p>
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Stracciatella', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Pure cream gelato, fine chocolate shards drizzled in during churning. Simple and perfect.', 'double-scoop-lite' ); ?></p>
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Tiramisù', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$5.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Mascarpone base, espresso ribbon, lady finger crumble. The real deal.', 'double-scoop-lite' ); ?></p>
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Hazelnut Praline', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$5.25', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Roasted Piedmont hazelnuts, dark caramel swirl. A grown-up take on chocolate and hazelnut.', 'double-scoop-lite' ); ?></p>
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Lemon Ricotta', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Fresh ricotta whipped with Meyer lemon zest. Soft, delicate, dairy-forward.', 'double-scoop-lite' ); ?></p>
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Burnt Caramel', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Deep amber caramel, fleur de sel finish, served on brioche if you ask nicely.', 'double-scoop-lite' ); ?></p>
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
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"sc-menu-section"} -->
<section class="wp-block-group sc-menu-section">
<!-- wp:heading {"level":2,"className":"sc-menu-cat"} -->
<h2 class="wp-block-heading sc-menu-cat"><?php echo esc_html__( 'Ice Cream', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-menu-intro"} -->
<p class="sc-menu-intro"><?php echo esc_html__( 'Churned with extra cream for that classic American scoop — nostalgic, generous, unapologetic.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"},"className":"sc-cards"} -->
<div class="wp-block-group sc-cards">
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
<p class="sc-card__desc"><?php echo esc_html__( 'Copper caramel, flaky sea salt, waffle cone crumble. Our #1 all-time.', 'double-scoop-lite' ); ?></p>
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
<p class="sc-card__desc"><?php echo esc_html__( '72% dark chocolate, espresso undertone, flaky sea-salt finish. Richly bittersweet.', 'double-scoop-lite' ); ?></p>
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
<p class="sc-card__desc"><?php echo esc_html__( 'Steeped mint leaf base, dark chocolate shards. Herbaceous and bright.', 'double-scoop-lite' ); ?></p>
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Strawberry Balsamic', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Fredericksburg strawberries, aged balsamic, vanilla. Best-in-season.', 'double-scoop-lite' ); ?></p>
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Cookies &amp; Cream', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'House-baked chocolate cookie crumble folded into pure vanilla cream. No shortcuts.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Birthday Cake', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'White cake batter base, rainbow sprinkles swirled in. Every day is someone\'s birthday.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"sc-menu-section"} -->
<section class="wp-block-group sc-menu-section">
<!-- wp:heading {"level":2,"className":"sc-menu-cat"} -->
<h2 class="wp-block-heading sc-menu-cat"><?php echo esc_html__( 'Sorbet &amp; Dairy-Free', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-menu-intro"} -->
<p class="sc-menu-intro"><?php echo esc_html__( 'Plant-based recipes, and just as satisfying. All made with real fruit, no fillers.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"},"className":"sc-cards"} -->
<div class="wp-block-group sc-cards">
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Mango Chili-Lime', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Ataulfo mango purée, chili-lime rim finish. Sweet-heat that lingers.', 'double-scoop-lite' ); ?></p>
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
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Raspberry Lemon', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Pressed raspberry, Meyer lemon, cane sugar. Sharp and electric.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
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
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Dark Chocolate (Vegan)', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Oat milk base, 72% cacao. Same richness as the dairy version.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Vegan', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item {"className":"is-diet"} -->
<li class="is-diet"><?php echo esc_html__( 'Dairy-free', 'double-scoop-lite' ); ?></li>
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Passion Fruit', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Pure Maracuyá purée, just a touch of lime. Intensely tropical.', 'double-scoop-lite' ); ?></p>
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
</section>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"tagName":"section","className":"sc-menu-section"} -->
<section class="wp-block-group sc-menu-section">
<!-- wp:heading {"level":2,"className":"sc-menu-cat"} -->
<h2 class="wp-block-heading sc-menu-cat"><?php echo esc_html__( 'Sundaes &amp; Specials', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-menu-intro"} -->
<p class="sc-menu-intro"><?php echo esc_html__( 'Go big or go home. Our loaded sundaes use housemade sauces and fresh-baked toppings.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"15rem"},"className":"sc-cards"} -->
<div class="wp-block-group sc-cards">
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"sc-card__head"} -->
<div class="wp-block-group sc-card__head">
<!-- wp:heading {"level":3,"className":"sc-card__name"} -->
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Classic Sundae', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$8.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( '2 scoops of your choice, hot fudge, whipped cream, cherry. The OG.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Banana Split', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$12.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'House-split banana, 3 scoops, strawberry / caramel / hot fudge, toasted walnuts.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Affogato', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$7.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'A double shot of espresso poured over housemade vanilla gelato. Italian simplicity.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
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
<h3 class="wp-block-heading sc-card__name"><?php echo esc_html__( 'Ice Cream Float', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"sc-card__price","textColor":"accent"} -->
<p class="has-accent-color has-text-color sc-card__price"><?php echo esc_html__( '$7.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-card__desc"} -->
<p class="sc-card__desc"><?php echo esc_html__( 'Your scoop + a local sparkling soda. Choose root beer, grapefruit, or orange.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips sc-card__tags"} -->
<ul class="wp-block-list is-style-chips sc-card__tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-lede-left sc-muted sc-allergens"} -->
<p class="sc-lede-left sc-muted sc-allergens"><?php echo esc_html__( 'Our kitchen handles milk, eggs, wheat, oats and tree nuts (pistachio, hazelnut and walnut), so we cannot promise any item is free of them, even those marked vegan, dairy-free or GF. Please ask about allergens before you order.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php
echo double_scoop_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
