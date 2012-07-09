<?php
/*
Plugin Name: Quicktag Extender
Plugin URI: http://benjaminsterling.com/wordpress-plugins/wordpress-quicktag-extender/
Description: This plugin adds more buttons to the non-visual editor view for creating/editing posts/pages
Version: 0.1.2
Author: Benjamin Sterling
Author URI: http://kenzomedia.com
License: 

	Copyright 2011  Benjamin Sterling  (email : benjamin.sterling@kenzomedia.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

function gte_admin_print_scripts( $arg ){
	global $pagenow;
	if (is_admin() && ( $pagenow == 'post-new.php' || $pagenow == 'post.php' ) ) {
		$js = plugins_url('/quicktag-extender.js', __FILE__ );
		wp_enqueue_script("qtescript", $js, array('quicktags') );
	}
}

add_action( 'admin_print_scripts', 'gte_admin_print_scripts' );
?>