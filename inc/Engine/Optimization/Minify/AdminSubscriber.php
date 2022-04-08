<?php

namespace WP_Rocket\Engine\Optimization\Minify;

use WP_Rocket\Event_Management\Subscriber_Interface;

/**
 * Minify Admin subscriber
 *
 * @since 3.5.4
 */
class AdminSubscriber implements Subscriber_Interface {
	/**
	 * Return an array of events that this subscriber wants to listen to.
	 *
	 * @return array
	 */
	public static function get_subscribed_events() {
		return [
			"switch_theme "     => [ 'clean_all_min_cache' ],
		];
	}

    /**
     * Delete all minified cache file
     *
     * @return void
     */
	public function clean_all_min_cache(): void {

        // Delete all minify cache files.
        rocket_clean_minify();
    }
}