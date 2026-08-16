<?php
/**
 * Conformance fixture for the Airfleet coding standard.
 *
 * This file is not shipped or loaded anywhere. It exists so CI can prove the
 * ruleset both LOADS and PASSES, rather than only that `phpcs -i` registers it.
 * It deliberately exercises the sniffs most likely to break on an upgrade:
 * escaping, prepared SQL, i18n with the `airfleet` text domain, the global
 * prefix rule, and PHPCompatibility against `testVersion 8.2-`.
 *
 * @package Airfleet\WordPressDev
 */

declare( strict_types = 1 );

/**
 * Render a greeting for the current user.
 *
 * Exercises: i18n text domain, late escaping, sprintf placeholders.
 *
 * @param string $name Display name to greet.
 * @return string Escaped, translated greeting.
 */
function airfleet_fixture_greeting( string $name ): string {
	return sprintf(
		/* translators: %s: display name of the current user. */
		esc_html__( 'Hello, %s.', 'airfleet' ),
		esc_html( $name )
	);
}

/**
 * Look up post IDs by status.
 *
 * Exercises: $wpdb->prepare(), placeholder handling, caching comment sniffs.
 *
 * @param string $status Post status to match.
 * @return array<int, int> Matching post IDs.
 */
function airfleet_fixture_post_ids( string $status ): array {
	global $wpdb;

	$cache_key = 'airfleet_fixture_' . $status;
	$ids       = wp_cache_get( $cache_key );

	if ( false === $ids ) {
		// phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery -- Fixture demonstrating a prepared query.
		$ids = $wpdb->get_col(
			$wpdb->prepare(
				"SELECT ID FROM {$wpdb->posts} WHERE post_status = %s",
				$status
			)
		);

		wp_cache_set( $cache_key, $ids );
	}

	return array_map( 'intval', $ids );
}

/**
 * Handle a form submission.
 *
 * Exercises: nonce verification, input sanitization, the sniffs that most
 * often regress when WPCS changes.
 *
 * @return void
 */
function airfleet_fixture_handle_submit(): void {
	if ( ! isset( $_POST['airfleet_fixture_nonce'] ) ) {
		return;
	}

	$nonce = sanitize_text_field( wp_unslash( $_POST['airfleet_fixture_nonce'] ) );

	if ( ! wp_verify_nonce( $nonce, 'airfleet_fixture_submit' ) ) {
		return;
	}

	$email = isset( $_POST['airfleet_fixture_email'] )
		? sanitize_email( wp_unslash( $_POST['airfleet_fixture_email'] ) )
		: '';

	if ( ! is_email( $email ) ) {
		return;
	}

	update_option( 'airfleet_fixture_email', $email );
}
