<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Block54
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <style>
        #wpadminbar {
            display: none !important;
        }
    </style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header class="site-header">
        <div class="container">
            <div class="flex-row align-v-center align-h-space-between">
                <div class="site-header-column hidden visible-md">
                    <nav class="navigation navigation-main">
                        <ul id="primary-menu" class="menu main-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children "><a href="#">Услуги</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">О компании</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page "><a href="">Поддержка</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children"><a href="#">Новосибирск</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="site-header-column hidden visible-md">
                    <a href="" class="button button-view-1" target="_blank">Пополнить баланс</a>
                </div>

                <div class="site-header-column hidden visible-md">
                    <a href="tel:+73832583300" class="button button-view-2">+7 383 258-33-00</a>
                </div>
                <div class="site-header-column hidden visible-md">
                    <a data-fancybox="" data-src="#call-master" href="javascript:;" class="button button-view-2">Написать в WhatsApp</a>
                </div>
                <div class="site-header-column visible hidden-md">
                    <a href="javascript:;" class="toggle-menu">
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
