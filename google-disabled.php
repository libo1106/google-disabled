<?php
/*
Plugin Name: google-disabled
Plugin URI: https://github.com/qq286735628/google-disabled
Description: disabled Google fonts in China,
    关闭twentyfifteen主题中默认加载Google Fonts
Version: 1.0
Author: libo
Author URI: http://www.mxgw.info/
*/

/**
 * 通过反注册手段，过滤Google Fonts
 */
function remove_google_fonts() {
    wp_deregister_style( 'open-sans' );
    wp_deregister_style('twentyfifteen-fonts');
    wp_register_style( 'open-sans', false );
    wp_register_style( 'twentyfifteen-fonts', false);
    wp_enqueue_style('open-sans','');
    wp_enqueue_style('twentyfifteen-fonts', '');
}
add_action( 'init', 'remove_google_fonts' );