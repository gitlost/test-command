<?php namespace AlainSchlesser\TestCommand;

class TestCommand {

	/**
	 * Generate a version string to test against.
	 *
	 * @command test-command
	 * @when before_wp_load
	 */
	public function __invoke() {
		\WP_CLI::success( 'Version E.' );
	}
}
