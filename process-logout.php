<?php	// load the Wordpress core so this page can access WP functions during an ajax call	require_once( "../../../wp-load.php" );	session_start(); // TODO: added this on 4/2/2013 see notes - we must start the session to destroy it...		$user = null; // kill the facebook user	session_destroy(); // destroy the php user session	wp_logout(); // logout the wordpress user	header("Location: " . get_bloginfo("url"));?>