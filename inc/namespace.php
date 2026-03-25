<?php
/**
 * Namespace functions for the plugin.
 *
 * @package no-slop-wp
 */

namespace NoSlopWP;

require_once __DIR__ . '/inc/namespace.php';
require_once __DIR__ . '/inc/modules/core.php';

/**
 * Link functions to hooks.
 *
 * @return void
 */
function bootstrap(): void {
	Core\bootstrap();
}
