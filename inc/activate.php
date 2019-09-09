<?php 
if( !function_exists( 'aady_plugin_activate' ) ){
	/**
	 * Check WordPress Version
	 */
	function aady_plugin_activate(){
		
		if (  version_compare( get_bloginfo( 'version' ), '5.2', '<' ) ) {
			/* translators: %s: WordPress version */
			$message = sprintf( esc_html__( 'Requires higher WordPress version. Because you are using an earlier version, the plugin is currently NOT RUNNING.', 'rise-blocks' ), '4.7' );

			wp_die( sprintf(  $message) );
		}
		// die();

		global $wpdb;
		$charset_collate = $wpdb->get_charset_collate();
		$sql = "CREATE TABLE `{$wpdb->base_prefix}movie_ratings`(
		  id bigint(25) NOT NULL,
		  movie_id bigint(25) NOT NULL,
		  movie_rating int(20) NOT NULL,
		  user_ip varchar(32) NOT NULL,
		  PRIMARY KEY  (id)
		) $charset_collate;";

		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
}

















