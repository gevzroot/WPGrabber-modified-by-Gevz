<?php
/**
@package WPGrabber
Plugin Name: WPGrabber by gIT
Plugin URI: https://github.com/gevzroot/WPGrabber-modified-by-Gevz.git
Description: WordPess Grabber plugin
Version: 3.1.4 #018
Author: Gevz
Author URI:
*/
  if (defined('WPGRABBER_VERSION')) {
    die('На сайте активирован плагин WPGrabber версии '.WPGRABBER_VERSION.'. Пожалуйста, деактивируйте его перед активацией данного плагина.');
  }
  define('WPGRABBER_VERSION', '3.1.4');

  define('WPGRABBER_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
  define('WPGRABBER_PLUGIN_URL', plugin_dir_url( __FILE__ ));
  define('WPGRABBER_PLUGIN_FILE', __FILE__);

  require WPGRABBER_PLUGIN_DIR.'init.php';
?>