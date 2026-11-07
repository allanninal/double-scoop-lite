<?php
/**
 * Title: Menu board
 * Slug: double-scoop-lite/menu-board
 * Categories: double-scoop-lite
 * Viewport Width: 1400
 *
 * @package double-scoop-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"44rem"},"tagName":"section","align":"full","className":"is-style-menu-board sc-section"} -->
<section class="wp-block-group alignfull is-style-menu-board sc-section">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Full Menu', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Every Scoop, Listed', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Gelato', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Sicilian Pistachio', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Stracciatella', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Tiramisù', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Hazelnut Praline', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.25', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Lemon Ricotta', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Burnt Caramel', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Ice Cream', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Burnt Salted Caramel', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Dark Chocolate Sea Salt', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Fresh Mint Chip', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'classic', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Strawberry Balsamic', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'seasonal', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Cookies &amp; Cream', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Birthday Cake', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Sorbet &amp; Dairy-Free', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Mango Chili-Lime', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Raspberry Lemon', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Dark Chocolate (Vegan)', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Passion Fruit', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.75', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Sundaes &amp; Specials', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Classic Sundae', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$8.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Banana Split', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$12.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Affogato', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$7.50', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
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
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Ice Cream Float', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$7.00', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'fan fave', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"sc-lede-left sc-muted sc-allergens"} -->
<p class="sc-lede-left sc-muted sc-allergens"><?php echo esc_html__( 'Our kitchen handles milk, eggs, wheat, oats and tree nuts (pistachio, hazelnut and walnut), so we cannot promise any item is free of them, even those marked vegan, dairy-free or GF. Please ask about allergens before you order.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo double_scoop_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
