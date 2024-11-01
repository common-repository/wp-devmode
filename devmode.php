<?php

/*
    Plugin Name: WP Devmode
    Plugin URI: http://mazzcris.com
    Description: Disable caching on css and js files during development.
    Version: 0.0.1
    Author: Cristiano Mazzarini
    Author URI: http://mazzcris.com
*/

/*  Copyright 2015  Cristiano Mazzarini

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function devmode_install () { 
    
}
register_activation_hook( __FILE__, 'devmode_install' );

function devmode_remove(){
    
}
register_deactivation_hook( __FILE__, 'devmode_remove' );


add_filter( 'script_loader_src', 'devmode_nocache' );
add_filter( 'style_loader_src', 'devmode_nocache' );

function devmode_nocache( $url ){
    return add_query_arg('ver',time(), $url);
}