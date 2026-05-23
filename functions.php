<?php
// إضافة دعم القائمة الأساسية
function smartlock_register_menus() {
    register_nav_menu('primary', 'القائمة الرئيسية');
}
add_action('init', 'smartlock_register_menus');
// إعدادات القالب الأساسية
function smartlock_theme_setup() {
    load_theme_textdomain('smartlock', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'smartlock_theme_setup');
add_theme_support('post-thumbnails');
function smartlock_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'smartlock_enqueue_styles');
// معالجة نموذج التواصل
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['client_name'])) {
    $name = sanitize_text_field($_POST['client_name']);
    $phone = sanitize_text_field($_POST['client_phone']);
    $msg = sanitize_textarea_field($_POST['client_message']);
    $body = "الاسم: $name\nالجوال: $phone\nالرسالة: $msg";
    wp_mail(get_option('admin_email'), 'طلب جديد من الموقع', $body);
    add_action('wp_footer', function(){
        echo "<script>alert('تم إرسال الطلب بنجاح! سيتم التواصل معك قريبًا.');</script>";
    });
}
