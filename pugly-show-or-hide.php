<?php
/**
 * Plugin Name: Pugly Easy Show or Hide
 * Plugin URI: 
 * Description: Easily show or hide any content from logged in or logged out users simply by assigning a class!
 * Version: 1.0.0
 * Author: Pugly Team
 * Author URI:
 */

function puglyhideshow_css() {
   if ( is_user_logged_in() ) { ?>
	<style>
		.pugly-hide-for-logged-in {
			display: none;
		}
	</style>
	<?php } else { ?>
	<style>
		.pugly-hide-for-logged-out {
			display: none;
		}
	</style>
	<?php
   }
}
add_action('wp_head', 'puglyhideshow_css');