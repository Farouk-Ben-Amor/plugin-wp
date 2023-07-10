<?php
/*
Plugin Name: My Dark Mode Plugin
Description: Adds a dark mode functionality to your website.
Author: <a href=# >Farouk Ben Amor</a>
*/

// Enqueue the dark mode stylesheet
function enqueue_dark_mode_stylesheet() {
    wp_enqueue_style( 'dark-mode', plugin_dir_url( __FILE__ ) . 'dark-mode.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_dark_mode_stylesheet' );

// Add the dark mode toggle button
function add_dark_mode_toggle_button() {
    echo '<div id="dark-mode-toggle">
              <button id="dark-mode-btn">Toggle Dark Mode</button>
          </div>';
}
add_action( 'wp_footer', 'add_dark_mode_toggle_button' );

// Enqueue the dark mode JavaScript
function enqueue_dark_mode_script() {
    wp_enqueue_script( 'dark-mode-script', plugin_dir_url( __FILE__ ) . 'dark-mode.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_dark_mode_script' );