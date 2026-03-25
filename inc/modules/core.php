<?php
/**
 * WordPress Core specific functionality.
 *
 * @package no-slop-wp
 */

namespace NoSlopWP\Core;

/**
 * Link functions to hooks.
 *
 * @return void
 */
function bootstrap(): void {
	// Disable AI client prompt in all cases.
	add_filter( 'wp_ai_client_prevent_prompt', '__return_true' );
}
