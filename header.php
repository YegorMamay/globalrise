<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

    <!-- OpenGraph -->
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:locale:alternate" content="ru_RU"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php if (is_front_page()) {
        echo bloginfo('name');
    } else {
        echo single_post_title();
    } ?>"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:url" content="<?php echo esc_url(site_url()); ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:image" content="<?php echo esc_url(the_post_thumbnail_url()); ?>"/>
    <meta property="og:image:secure_url" content="<?php echo esc_url(the_post_thumbnail_url()); ?>"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="628"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>"/>
    <meta name="twitter:image" content="<?php echo esc_url(the_post_thumbnail_url()); ?>"/>
    <!-- OpenGraph end-->

    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
<div class="menu-overlay js-overlay"></div>
<?php wp_body_open(); ?>
<div class="wrapper js-container"><!--Do not delete!-->
    <div class="mobile-nav">
        <div class="mobile-nav__logo">
            <div class="logo">
                <?php get_default_logo_link([
                    'name' => 'logo.svg',
                    'options' => [
                        'class' => 'logo-img',
                        'width' => 150,
                        'height' => 35,
                    ],
                ])
                ?>
            </div>
        </div>
        <div class="mobile-nav__group">
            <button type="button" class="mobile-nav__button js-request <?php the_lang_class('js-call-back'); ?>">
                <svg class="mobile-nav__icon">
                    <use xlink:href="#icon_phone"></use>
                </svg>
            </button>
            <button type="button" class="mobile-nav__button js-menu-btn">
                <svg class="mobile-nav__icon">
                    <use xlink:href="#icon_menu"></use>
                </svg>
            </button>
        </div>
    </div>
    <header class="header js-menu">
        <div class="container">
            <div class="header__container">
                <div class="header__column">
                    <div class="logo">
                        <?php get_default_logo_link([
                            'name' => 'logo.svg',
                            'options' => [
                                'class' => 'logo-img',
                                'width' => 150,
                                'height' => 30,
                            ],
                        ])
                        ?>
                    </div>
                    <?php if (has_nav_menu('main-nav')) { ?>
                        <nav class="nav">
                            <button type="button" tabindex="0"
                                    class="menu-item-close menu-close js-menu-close"></button>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'main-nav',
                                'container' => false,
                                'menu_class' => 'menu-container',
                                'menu_id' => '',
                                'fallback_cb' => 'wp_page_menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 3
                            )); ?>
                        </nav>
                    <?php } ?>
                </div>
                <div class="header__column header--right">
                    <?php echo do_shortcode('[bw-phone]'); ?>
                    <button type="button" class="header__button js-request <?php the_lang_class('js-call-back'); ?>">
                        <svg class="header__icon">
                            <use xlink:href="#icon_phone"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>