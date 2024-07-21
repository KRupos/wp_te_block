<?php
/**
 * Block54 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Block54
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function block54_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Block54, use a find and replace
		* to change 'block54' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'block54', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'block54' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'block54_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'block54_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function block54_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'block54_content_width', 640 );
}
add_action( 'after_setup_theme', 'block54_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function block54_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'block54' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'block54' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'block54_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function block54_scripts() {
	wp_enqueue_style( 'block54-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'block54-style', 'rtl', 'replace' );
    wp_enqueue_style('contact-form-7', plugins_url('contact-form-7/includes/css/styles.css'));
    wp_enqueue_style( 'block54-style-boostrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'block54-style-fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css');
    wp_enqueue_style( 'block54-style-normalize', get_template_directory_uri() . '/assets/css/normalize.min.css');
    wp_enqueue_style( 'block54-style-splide', get_template_directory_uri() . '/assets/css/splide.min.css');
    wp_enqueue_style( 'block54-style-styles', get_template_directory_uri() . '/assets/css/styles.css');

    wp_enqueue_script('swv', plugins_url('contact-form-7/includes/swv/js/index.js'), array(), '5.9.7', true);
    wp_localize_script('contact-form-7', 'wpcf7', array(
        'api' => array(
            'root' => esc_url_raw(rest_url()),
            'namespace' => 'contact-form-7/v1'
        )
    ));
    wp_enqueue_script('contact-form-7', plugins_url('contact-form-7/includes/js/index.js'), array(), '5.9.7', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), null, true);
    wp_enqueue_script('custom-select', get_template_directory_uri() . '/assets/js/custom-select.min.js', array(), null, true);
    wp_enqueue_script('splide', get_template_directory_uri() . '/assets/js/splide.min.js', array(), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', array(), null, true);
    wp_enqueue_script('imask', get_template_directory_uri() . '/assets/js/imask.min.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/scripts.js', array(), '2', true);

    wp_enqueue_style('slick-slider-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-slider-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_script('slick-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), '1.8.1', true);
    wp_enqueue_script('custom-slider-init', get_template_directory_uri() . '/assets/js/custom-slider-init.js', array('slick-slider-js'), '', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'block54_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

did_action( 'plugins_loaded' )
    ? Kama_Disable_Gutenberg::init()
    : add_action( 'plugins_loaded', [ Kama_Disable_Gutenberg::class, 'init' ] );

final class Kama_Disable_Gutenberg {

    public static function init() {
        add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

        // disable <style id='global-styles-inline-css'>body{--wp--preset--color--black: #000000; ...
        // see wp_enqueue_global_styles()
        remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
        remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );

        remove_theme_support( 'core-block-patterns' ); // WP 5.5

        // disable basic css styles for blocks
        // IMPORTANT! when widgets on blocks or something else will be released, this line will need to be commented out.
        remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

        // don't do noneeded operations
        remove_filter( 'the_content', 'do_blocks', 9 );
        remove_filter( 'widget_block_content', 'do_blocks', 9 );

        add_action( 'admin_init', [ __CLASS__, 'on_admin_init' ] );

        self::remove_gutenberg_hooks();
    }

    public static function on_admin_init(){
        // Move the Privacy Policy help notice back under the title field.
        remove_action( 'admin_notices', [ WP_Privacy_Policy_Content::class, 'notice' ] );
        add_action( 'edit_form_after_title', [ WP_Privacy_Policy_Content::class, 'notice' ] );
    }

    /**
     * Copy from Classic Editor plugin v1.6.3.
     * @see https://plugins.svn.wordpress.org/classic-editor/trunk/classic-editor.php
     */
    private static function remove_gutenberg_hooks( $remove = 'all' ) {
        remove_action( 'admin_menu', 'gutenberg_menu' );
        remove_action( 'admin_init', 'gutenberg_redirect_demo' );

        if ( $remove !== 'all' ) {
            return;
        }

        // Gutenberg 5.3+
        remove_action( 'wp_enqueue_scripts', 'gutenberg_register_scripts_and_styles' );
        remove_action( 'admin_enqueue_scripts', 'gutenberg_register_scripts_and_styles' );
        remove_action( 'admin_notices', 'gutenberg_wordpress_version_notice' );
        remove_action( 'rest_api_init', 'gutenberg_register_rest_widget_updater_routes' );
        remove_action( 'admin_print_styles', 'gutenberg_block_editor_admin_print_styles' );
        remove_action( 'admin_print_scripts', 'gutenberg_block_editor_admin_print_scripts' );
        remove_action( 'admin_print_footer_scripts', 'gutenberg_block_editor_admin_print_footer_scripts' );
        remove_action( 'admin_footer', 'gutenberg_block_editor_admin_footer' );
        remove_action( 'admin_enqueue_scripts', 'gutenberg_widgets_init' );
        remove_action( 'admin_notices', 'gutenberg_build_files_notice' );

        remove_filter( 'load_script_translation_file', 'gutenberg_override_translation_file' );
        remove_filter( 'block_editor_settings', 'gutenberg_extend_block_editor_styles' );
        remove_filter( 'default_content', 'gutenberg_default_demo_content' );
        remove_filter( 'default_title', 'gutenberg_default_demo_title' );
        remove_filter( 'block_editor_settings', 'gutenberg_legacy_widget_settings' );
        remove_filter( 'rest_request_after_callbacks', 'gutenberg_filter_oembed_result' );

        // Previously used, compat for older Gutenberg versions.
        remove_filter( 'wp_refresh_nonces', 'gutenberg_add_rest_nonce_to_heartbeat_response_headers' );
        remove_filter( 'get_edit_post_link', 'gutenberg_revisions_link_to_editor' );
        remove_filter( 'wp_prepare_revision_for_js', 'gutenberg_revisions_restore' );

        remove_action( 'rest_api_init', 'gutenberg_register_rest_routes' );
        remove_action( 'rest_api_init', 'gutenberg_add_taxonomy_visibility_field' );
        remove_filter( 'registered_post_type', 'gutenberg_register_post_prepare_functions' );

        remove_action( 'do_meta_boxes', 'gutenberg_meta_box_save' );
        remove_action( 'submitpost_box', 'gutenberg_intercept_meta_box_render' );
        remove_action( 'submitpage_box', 'gutenberg_intercept_meta_box_render' );
        remove_action( 'edit_page_form', 'gutenberg_intercept_meta_box_render' );
        remove_action( 'edit_form_advanced', 'gutenberg_intercept_meta_box_render' );
        remove_filter( 'redirect_post_location', 'gutenberg_meta_box_save_redirect' );
        remove_filter( 'filter_gutenberg_meta_boxes', 'gutenberg_filter_meta_boxes' );

        remove_filter( 'body_class', 'gutenberg_add_responsive_body_class' );
        remove_filter( 'admin_url', 'gutenberg_modify_add_new_button_url' ); // old
        remove_action( 'admin_enqueue_scripts', 'gutenberg_check_if_classic_needs_warning_about_blocks' );
        remove_filter( 'register_post_type_args', 'gutenberg_filter_post_type_labels' );

        // phpcs:disable Squiz.PHP.CommentedOutCode.Found
        // Keep
        // remove_filter( 'wp_kses_allowed_html', 'gutenberg_kses_allowedtags', 10, 2 ); // not needed in 5.0
        // remove_filter( 'bulk_actions-edit-wp_block', 'gutenberg_block_bulk_actions' );
        // remove_filter( 'wp_insert_post_data', 'gutenberg_remove_wpcom_markdown_support' );
        // remove_filter( 'the_content', 'do_blocks', 9 );
        // remove_action( 'init', 'gutenberg_register_post_types' );

        // Continue to manage wpautop for posts that were edited in Gutenberg.
        // remove_filter( 'wp_editor_settings', 'gutenberg_disable_editor_settings_wpautop' );
        // remove_filter( 'the_content', 'gutenberg_wpautop', 8 );
        // phpcs:enable Squiz.PHP.CommentedOutCode.Found

    }

}

