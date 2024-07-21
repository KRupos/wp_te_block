<?php



if (!defined('ABSPATH')) {
    die();
}
add_action('after_setup_theme', 'block54_theme_setup', );

if (!function_exists('block54_theme_setup')):
    function block54_theme_setup() {

        #require_once get_template_directory() . '/vendor/autoload.php';
        require_once get_template_directory() . '/app/App.php';
        \BlockCompany\App::init();
        #App::init();
        register_nav_menus(array(
            'header-menu' => __('Главное меню', 'block54'),
            'footer-menu' => __('Подвальное меню', 'block54')
        ));


    }
endif;
