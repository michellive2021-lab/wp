<?php
// إضافة دعم القائمة الأساسية
function smartlock_register_menus() {
    register_nav_menu('primary', 'القائمة الرئيسية');
}
add_action('init', 'smartlock_register_menus');

// إضافة دعم ترجمة القالب
function smartlock_theme_setup() {
    load_theme_textdomain('smartlock', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'smartlock_theme_setup');

// إضافة دعم الصور البارزة
add_theme_support('post-thumbnails');

// إضافة ملفات CSS للقالب
function smartlock_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'smartlock_enqueue_styles');
