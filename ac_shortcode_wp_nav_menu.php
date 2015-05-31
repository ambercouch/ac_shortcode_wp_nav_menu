<?php
/*
  Plugin Name: Custom menu shortcode
  Plugin URI: https://github.com/ambercouch/ac_shortcode_wp_nav_menu
  Description: Shortcode for adding custom menus to content.
  Version: 1
  Author: Richie Arnold
  Author URI: http://ambercouch.co.uk
  Author Email: richard@ambercouch.co.uk
  Text Domain: ac_shortcode_wp_nav_menu
  Domain Path: /lang/

  License:

  Copyright 2015 AmberCouch

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
defined( 'ABSPATH' ) or die( 'You do not have the required permissions' );

function ac_shortcode_wp_nav_menu($atts, $content = null) {
    extract(shortcode_atts(array('name' => null,), $atts));
    return wp_nav_menu(array('menu' => $name, 'echo' => false));
}

add_shortcode('ac_menu', 'ac_shortcode_wp_nav_menu');