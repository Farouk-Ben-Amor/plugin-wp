<?php
/*
Plugin Name: Cookie-Plugin
Description: This plugin aims  to allow/disallow cookies usage
version: 1.0.0
Author: <a href=# >Farouk Bn Amor</a>
*/
wp_enqueue_script('js-cookies', 'https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js');
wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.5/js.cookie.js');
wp_enqueue_style('bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
// add_shortcode( 'cookie-plugin-shortcode', 'functionExecutedByCookieShortcode' );
// function functionExecutedByCookieShortcode(){
//     $content =  "<div>Hello cookie-plugin</div>";
//     return $content;
// }


wp_enqueue_script('app', plugin_dir_url(__FILE__    ) . 'app.js');


?>