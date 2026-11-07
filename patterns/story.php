<?php
/**
 * Title: Our story
 * Slug: double-scoop-lite/story
 * Categories: double-scoop-lite
 * Description: The story behind the business, with a few key numbers.
 * Keywords: about, story, history, numbers
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
<section class="wp-block-group alignfull sc-section" id="story">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"52%"} -->
<div class="wp-block-column" style="flex-basis:52%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'The People Behind the Scoop', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Churned from Scratch, Every Morning', 'double-scoop-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Maya spent two years in Bologna learning the craft of artigianale gelato before opening Scooped\'s first window in South Congress in 2018 — a 90-square-foot walk-up with a hand-painted sign and a three-flavour menu.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The philosophy has never changed: local dairy, seasonal fruit, zero shortcuts. Every batch is churned fresh in the morning, and when it\'s gone, it\'s gone.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Austin embraced it. Within six months there were queues around the block. Today there are three locations — but the recipes, the portions, and the obsession are identical to that first summer.', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-founder","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background sc-founder">
<!-- wp:paragraph {"className":"sc-founder__name"} -->
<p class="sc-founder__name"><?php echo esc_html__( 'Maya Solano', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"sc-founder__title"} -->
<p class="sc-founder__title"><?php echo esc_html__( 'Founder &amp; Head Gelato Maker', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"48%"} -->
<div class="wp-block-column" style="flex-basis:48%">
<!-- wp:group {"layout":{"type":"grid","columnCount":2},"className":"sc-story-stats"} -->
<div class="wp-block-group sc-story-stats">
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-stat","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background sc-stat">
<!-- wp:paragraph {"align":"center","className":"sc-stat__value"} -->
<p class="has-text-align-center sc-stat__value"><?php echo esc_html__( '2018', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sc-stat__label"} -->
<p class="has-text-align-center sc-stat__label"><?php echo esc_html__( 'Opened', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-stat","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background sc-stat">
<!-- wp:paragraph {"align":"center","className":"sc-stat__value"} -->
<p class="has-text-align-center sc-stat__value"><?php echo esc_html__( '28–36', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sc-stat__label"} -->
<p class="has-text-align-center sc-stat__label"><?php echo esc_html__( 'Flavours per week', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-stat","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background sc-stat">
<!-- wp:paragraph {"align":"center","className":"sc-stat__value"} -->
<p class="has-text-align-center sc-stat__value"><?php echo esc_html__( '7', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sc-stat__label"} -->
<p class="has-text-align-center sc-stat__label"><?php echo esc_html__( 'Farms we source from', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-stat","backgroundColor":"surface-2"} -->
<div class="wp-block-group has-surface-2-background-color has-background sc-stat">
<!-- wp:paragraph {"align":"center","className":"sc-stat__value"} -->
<p class="has-text-align-center sc-stat__value"><?php echo esc_html__( '3', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"sc-stat__label"} -->
<p class="has-text-align-center sc-stat__label"><?php echo esc_html__( 'Locations', 'double-scoop-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"constrained"},"className":"sc-card"} -->
<div class="wp-block-group sc-card">
<!-- wp:heading {"level":3,"className":"sc-how__title"} -->
<h3 class="wp-block-heading sc-how__title"><?php echo esc_html__( 'How we make it', 'double-scoop-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:list {"className":"sc-checks"} -->
<ul class="wp-block-list sc-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Local dairy from Texas Hill Country farms', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal fruit — never frozen concentrate', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'No artificial colours or stabilisers', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Every batch labelled with its churn date', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'If it\'s not perfect, we don\'t serve it', 'double-scoop-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo double_scoop_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
