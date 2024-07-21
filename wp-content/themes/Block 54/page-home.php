<?php
/**
 * The template for displaying all pages
 * Template name: Главная страница
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Block54
 */

get_header();
?>

    <main class="site-main-content">
        <section class="section-info section-security">
            <div class="container">
                <div class="border-box border-box--primary block-info">
                    <div class="block-info-row">
                        <div class="aioseo-breadcrumbs">
                            <span class="aioseo-breadcrumb">Главная</span>
                            <span class="aioseo-breadcrumb-separator">/</span>
                            <span class="aioseo-breadcrumb">Безопасность бизнеса</span>
                            <span class="aioseo-breadcrumb-separator active">/</span>
                            <span class="aioseo-breadcrumb active">Обеспечение порядка в местах проведения массовых мероприятий
							</span>
                        </div>
                        <div class="block-info__body">
                            <span class="block-info__title"><h1>Обеспечение порядка в <br> местах проведения <br> массовых мероприятий</h1><span class="font-weight-400"></span></span>
                        </div>
                        <div class="block-info__image">
                            <picture>
                                <source media="(min-width: 1030px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/stadium.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stadiumSmall.png" alt="">
                            </picture>
                        </div>
                        <div class="block-info__button">
                            <a data-fancybox="" data-src="#security-feedback-modal" href="" class="button button-primary button-primary-v2">Заказать услугу</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="section-cards-list section-cards-list-11">
            <div class="container">
                <div class="cards-list cards-list--md-2">
                    <div class="cards-list__item card-item no-border-radius">
                        <div class="card-item__inner m-0 p-0 ">
                            <span class="card-item__title font-weight-700">Риски</span>
                            <div class="card-item__content">
                                <p>В современный период времени проведение больших массовых мероприятий имеет особенно высокий риск опасности. Творческие встречи, концерты, праздники, спортивные соревнования, все это требует внимательного и тщательного контроля.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cards-list__item card-item no-border-radius">
                        <div class="card-item__inner m-0 p-0">
                            <span class="card-item__title font-weight-700">Охрана</span>
                            <div class="card-item__content">
                                <p>В случае обнаружения какой-либо опасности, каждому участнику встречи должна быть оказана незамедлительная помощь со стороны охранных структур. Равным образом и для предотвращения внешних угроз различного характера организация охраны массовых мероприятий является обязательным условием.   </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php if( have_rows('company_logos') ): ?>
            <div class="splide__track">
                <?php while( have_rows('company_logos') ): the_row(); ?>
                    <?php
                    $logo = get_sub_field('logo');
                    if( $logo ): ?>
                        <div class="splide__slide carousel-item">
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <section class="section-our-partners">
            <div class="container">
                <span class="section-title"><h2>Наши клиенты</h2></span>
                <div class="splide carousel-default carousel-our-partners">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev">
                            <i class="icon-chevron"></i>
                        </button>
                        <button class="splide__arrow splide__arrow--next">
                            <i class="icon-chevron"></i>
                        </button>
                    </div>
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide carousel-item">
                                <div class="carousel-partner-card">
                                    hrllo
                                    <img src="" alt="" class="white">
                                </div>
                            </div>
                            <div class="splide__slide carousel-item">
                                <div class="carousel-partner-card">
                                    hrllo3
                                    <img src="" alt="" class="white">
                                </div>
                            </div>
                            <div class="splide__slide carousel-item">
                                <div class="carousel-partner-card">
                                    432hrllo
                                    <img src="" alt="" class="white">
                                </div>
                            </div>
                            <div class="splide__slide carousel-item">
                                <div class="carousel-partner-card">
                                    24r2hrllo
                                    <img src="" alt="" class="white">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-info">
            <div class="container">
                <div class="border-box border-box--primary block-info block-info-view-2">
                    <div class="block-info-row">
                        <div class="block-info__body">
                            <span class="block-info__title">
                                <h2>Подпишитесь на рассылку</h2>
                            </span>
                            <div class="block-info__text">
                                <p>Чтобы узнавать о новых предложениях</p>
                            </div>
                            <div class="subscribe">
                                <div class="form-subscribe">
                                    <div class="wpcf7 no-js" id="wpcf7-f95-o1" lang="ru-RU" dir="ltr">
                                        <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                        <form action="/o-kompanii/#wpcf7-f95-o1" method="post" class="wpcf7-form init" aria-label="Контактная форма" novalidate="novalidate" data-status="init">
                                            <div class="form-field form-field--with-button">
                                                <p><label><span class="wpcf7-form-control-wrap" data-name="your-email">
                                                            <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="E-mail" value="" type="email" name="your-email"></span></label><br>
                                                    <span class="wpcf7-form-control-wrap page-title" data-name="page-title">
                                                        <input type="hidden" name="page-title" id="" class="wpcf7-form-control wpcf7-hidden wpcf7dtx wpcf7dtx-hidden" aria-invalid="false" value="О компании"></span><br>
                                                    <input class="wpcf7-form-control wpcf7-submit has-spinner button button-view-4" type="submit" value="Отправить">
                                                </p>
                                            </div><div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-info__image">
                            <source media="(min-width: 1030px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/lock.png">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lockSmall.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
