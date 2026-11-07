<?php
/**
 * Double Scoop Lite — theme bootstrap.
 *
 * The free edition of Double Scoop, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package double-scoop-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'DOUBLE_SCOOP_LITE_VERSION', '1.0.0' );
define( 'DOUBLE_SCOOP_LITE_DIR', get_template_directory() );
define( 'DOUBLE_SCOOP_LITE_URI', get_template_directory_uri() );

require DOUBLE_SCOOP_LITE_DIR . '/inc/setup.php';
require DOUBLE_SCOOP_LITE_DIR . '/inc/media.php';
require DOUBLE_SCOOP_LITE_DIR . '/inc/food.php';
require DOUBLE_SCOOP_LITE_DIR . '/inc/lite.php';
require DOUBLE_SCOOP_LITE_DIR . '/inc/updater.php';
