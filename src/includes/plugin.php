<?php
/**
 * Plugin.
 *
 * @author @jaswsinc
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpSnippets\Pro;

use WebSharks\WpSharks\WpSnippets\Pro\Classes\App;

if (!defined('WPINC')) {
    exit('Do NOT access this file directly.');
}
add_action('plugins_loaded', function () {
    require __DIR__.'/wp-sharks-core-rv.php';

    if (require(dirname(__FILE__, 2).'/vendor/websharks/wp-sharks-core-rv/src/includes/check.php')) {
        require_once __DIR__.'/stub.php';
        new App(); // Plugin instance.
    } else {
        wp_sharks_core_rv_notice('WP Snippets Pro');
    }
});
