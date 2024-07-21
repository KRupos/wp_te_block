<?php

namespace BlockCompany;


class App
{
    public static function hello()
    {
        return 'Hello World!';
    }
    public static function init() {
        #Enqueue::init();

        wp_enqueue_script('swv', plugins_url('contact-form-7/includes/swv/js/index.js'), array(), '5.9.7', true);
        wp_localize_script('contact-form-7', 'wpcf7', array(
            'api' => array(
                'root' => esc_url_raw(rest_url()),
                'namespace' => 'contact-form-7/v1'
            )
        ));
        wp_enqueue_script('contact-form-7', plugins_url('contact-form-7/includes/js/index.js'), array(), '5.9.7', true);

        // Скрипты темы
        wp_enqueue_script('custom-select', get_template_directory_uri() . '/js/custom-select.min.js', array(), null, true);
        wp_enqueue_script('splide', get_template_directory_uri() . '/js/splide.min.js', array(), null, true);
        wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/fancybox.min.js', array(), null, true);
        wp_enqueue_script('imask', get_template_directory_uri() . '/js/imask.min.js', array(), null, true);
        wp_enqueue_script('main', get_template_directory_uri() . '/js/scripts.js', array(), '2', true);

        // Стили Contact Form 7
        wp_enqueue_style('contact-form-7', plugins_url('contact-form-7/includes/css/styles.css'));

        // Стили темы
        wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.min.css');
        wp_enqueue_style('splide', get_template_directory_uri() . '/css/splide.min.css');
        wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/fancybox.min.css');
        wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
        wp_enqueue_style('main', get_template_directory_uri() . '/css/styles.css');
        wp_enqueue_style('block-style', get_template_directory_uri() . '/style.css');
    }
}