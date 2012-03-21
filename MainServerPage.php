<?php

# Copyright (c) 2012 Alexey Shumkin
# Licensed under the MIT license

require_once( config_get_global( 'class_path' ) . 'MantisPlugin.class.php' );

/**
 * Creates an extensible API for integrating source control applications
 * with the Mantis bug tracker software.
 */
class MainServerPagePlugin extends MantisPlugin {

	function register() {
		$this->name = plugin_lang_get( 'title' );
		$this->description = plugin_lang_get( 'description' );

		$this->version = '0.0.1';
		$this->requires = array(
			'MantisCore' => '1.2.0',
		);
		$this->author	= 'Alexey Shumkin';
		$this->contact	= 'Alex.Crezoff@gmail.com';
		$this->url		= 'https://github.com/ashumkin';
	}

	function config() {
		return array(
		);
	}

	function hooks() {
		return array(
			'EVENT_MENU_MAIN_FRONT' => 'menu_main_front',
		);
	}

	function menu_main_front() {
		$t_links = array();

		$t_page = '/';
		$t_lang = plugin_lang_get( 'MainServerPage', 'MainServerPage' );
		$t_links[] = "<a href=\"$t_page\">$t_lang</a>";

		return $t_links;
	}

}

