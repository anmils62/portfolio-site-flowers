<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@300;400&display=swap" rel="stylesheet">
    <?php
        wp_head();
    ?>
</head>
<header class="header">
    <div class="container header__container">
        <!-- Mobile  -->
        <div class="header__menu menu-mobile-active">
            <div class="header__wrapper-mobile ">
                <button class="header__burger">
                    <svg class="header__burger-icon" width="20" height="11" viewBox="0 0 20 11" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.5" x2="20" y2="0.5" stroke="#43FFD2" />
                        <line y1="5.5" x2="20" y2="5.5" stroke="#43FFD2" />
                        <line y1="10.5" x2="20" y2="10.5" stroke="#43FFD2" />
                    </svg>
                </button>
                <div class="header__name-company">
                    <p class="header__name">
                        Lover Flower
                    </p>
                </div>
                <button class="header__basket">
                    <svg class="header__basket-icon" width="18" height="16" viewBox="0 0 18 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.9938 14.8896L16.7984 4.22258C16.7712 3.97789 16.6538 3.75177 16.4688 3.58759C16.2837 3.42341 16.0441 3.33274 15.7957 3.33297H12.6828C12.599 2.42211 12.1747 1.57522 11.4933 0.958557C10.8119 0.341893 9.92263 0 9 0C8.07737 0 7.18806 0.341893 6.50666 0.958557C5.82526 1.57522 5.401 2.42211 5.31716 3.33297H2.20427C1.95595 3.33274 1.71628 3.42341 1.53125 3.58759C1.34621 3.75177 1.22884 3.97789 1.20164 4.22258L0.00616829 14.8896C-0.00949614 15.0293 0.00475591 15.1708 0.0479936 15.3048C0.0912312 15.4387 0.162482 15.5621 0.257094 15.6669C0.351706 15.7717 0.467551 15.8555 0.597065 15.9129C0.726578 15.9703 0.866848 16 1.00871 16H16.9912C17.1331 16 17.2734 15.9703 17.4029 15.913C17.5324 15.8556 17.6483 15.7717 17.7429 15.6669C17.8375 15.5621 17.9088 15.4387 17.952 15.3048C17.9952 15.1708 18.0095 15.0293 17.9938 14.8896ZM9 0.666228C9.74408 0.66721 10.4618 0.939546 11.0163 1.43134C11.5709 1.92313 11.9236 2.6 12.0071 3.33297H5.99286C6.07642 2.6 6.42908 1.92313 6.98365 1.43134C7.53822 0.939546 8.25592 0.66721 9 0.666228ZM17.2418 15.2223C17.2104 15.2574 17.1719 15.2855 17.1286 15.3047C17.0854 15.3238 17.0386 15.3336 16.9913 15.3333H1.00871C0.961426 15.3333 0.91467 15.3234 0.871499 15.3043C0.82833 15.2851 0.789717 15.2572 0.758182 15.2223C0.726647 15.1873 0.7029 15.1462 0.688491 15.1015C0.674082 15.0569 0.669335 15.0097 0.674561 14.9631L1.87012 4.29616C1.87919 4.21462 1.91831 4.13926 1.97997 4.08454C2.04164 4.02982 2.12151 3.99959 2.20427 3.99966H5.30119V6.33306C5.30119 6.42146 5.33661 6.50625 5.39967 6.56877C5.46273 6.63128 5.54826 6.6664 5.63744 6.6664C5.72662 6.6664 5.81215 6.63128 5.87521 6.56877C5.93827 6.50625 5.9737 6.42146 5.9737 6.33306V3.99966H12.0263V6.33306C12.0263 6.42146 12.0617 6.50625 12.1248 6.56877C12.1878 6.63128 12.2734 6.6664 12.3626 6.6664C12.4517 6.6664 12.5373 6.63128 12.6003 6.56877C12.6634 6.50625 12.6988 6.42146 12.6988 6.33306V3.99966H15.7957C15.8785 3.99959 15.9584 4.02982 16.02 4.08454C16.0817 4.13926 16.1208 4.21462 16.1299 4.29616L17.3254 14.9631C17.3309 15.0098 17.3263 15.057 17.3119 15.1017C17.2974 15.1464 17.2736 15.1875 17.2418 15.2223Z"
                            fill="white" />
                    </svg>
                </button>
            </div>
            <!-- When menu is open -->
            <div class="header__menu-open menu-active">
                <button class="header__menu-close">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.4294 4.06152L13.9385 4.57056L4.57056 13.9378L4.06152 13.4291L13.4294 4.06152Z"
                            fill="#43FFD2" />
                        <path d="M4.57056 4.06152L13.9385 13.4287L13.4294 13.9381L4.06152 4.57092L4.57056 4.06152Z"
                            fill="#43FFD2" />
                    </svg>
                </button>
                <div class="header__logo">
                    <a href="<?php echo get_home_url(); ?>" class="header__logo-link">
                        <img class="logo header__logo-svg" src="<?php 
                            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                            echo $custom_logo__url[0]; 
                        ?>" alt="logo">
                    </a>
                </div>
                <nav class="header__nav-mobile">
                    <?php
                        wp_nav_menu( [
	                        'menu'            => 'Main',
	                        'container'       => false,
	                        'menu_class'      => 'header__nav-list',
	                        'echo'            => true,
	                        'fallback_cb'     => 'wp_page_menu',
	                        'items_wrap'      => '<ul class="header__nav-list">%3$s</ul>',
	                        'depth'           => 1,
                        ] );
                    ?>
                </nav>
                <div class="header__phone">
                    <a href="tel:+375 (26) 125-96-96" class="phone-link"> <?php the_field('phone', 2); ?> </a>
                </div>
                <div class="header__contacts">
                    <div class="header__contacts-mail">
                        <a href="<?php the_field('e-mail', 2); ?>" class="mail"> <?php the_field('e-mail', 2); ?>
                        </a>
                        <p class="info"><?php the_field('delivery', 2); ?></p>
                    </div>
                    <div class="header__contacts-address">
                        <p class="address"><?php the_field('address', 2); ?></p>
                        <p class="time-works"><?php the_field('time_of_work', 2); ?></p>
                    </div>
                </div>
                <div class="header__icons">
                    <a href="<?php the_field('instagram_link', 2); ?>" class="header__icons-link">
                        <svg class="social-icon">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-inst">
                            </use>
                        </svg>
                    </a>
                    <a href="<?php the_field('whatsapp_link', 2); ?>" class="header__icons-link">
                        <svg class="social-icon">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-wa">
                            </use>
                        </svg>
                    </a>
                    <a href="<?php the_field('viber_link', 2); ?>" class="header__icons-link">
                        <svg class="social-icon">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-viber">
                            </use>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- Desctop -->
        <div class="header__nav-contacts">
            <div class="header__logo">
                <a href="<?php echo get_home_url(); ?>" class="header__logo-link">
                    <img class="logo header__logo-svg" src="<?php 
                        $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                        echo $custom_logo__url[0]; 
                    ?>" alt="logo">
                </a>
            </div>
            <nav class="header__nav">
                <?php
                    wp_nav_menu( [
	                    'menu'            => 'Main',
	                    'container'       => false,
	                    'menu_class'      => 'header__nav-list',
	                    'echo'            => true,
	                    'fallback_cb'     => 'wp_page_menu',
	                    'items_wrap'      => '<ul class="header__nav-list">%3$s</ul>',
	                    'depth'           => 1,
                    ] );
                ?>
            </nav>
            <div class="header__contacts">
                <div class="header__contacts-mail">
                    <a href="<?php the_field('e-mail', 2); ?>" class="mail"> <?php the_field('e-mail', 2); ?> </a>
                    <p class="info"><?php the_field('delivery', 2); ?></p>
                </div>
                <div class="header__contacts-address">
                    <p class="address"><?php the_field('address', 2); ?></p>
                    <p class="time-works"><?php the_field('time_of_work', 2); ?></p>
                </div>
            </div>
        </div>
    </div>
</header>