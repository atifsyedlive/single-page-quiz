<?php
/*
Plugin Name: AtifPedia  Quiz
Description: A quiz plugin with single page functionality and pagination
Version: 1.5.6
Author: Atif Syed
*/

if (!defined('ABSPATH')) exit; // Exit if accessed directly

// Include necessary files
require_once(plugin_dir_path(__FILE__) . 'includes/custom-post-type.php');
require_once(plugin_dir_path(__FILE__) . 'includes/shortcode.php');
require_once(plugin_dir_path(__FILE__) . 'includes/enqueue-scripts.php');