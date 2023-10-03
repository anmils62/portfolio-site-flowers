<?php 
/*
Template Name: Каталог
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <?php
        wp_head();
    ?>
</head>

<body>
    <?php
        get_header();
    ?>
    <main>
        <section class="main__catalog-section" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="main__catalog-container">
                <div class="main__catalog-heading-descr">
                    <h1 class="main__catalog-heading-1 header-section">
                        <?php the_field( 'title_catalog' ); ?>
                    </h1>
                    <p class="main__catalog-description"> <?php the_field( 'descr_catalog' ); ?> </p>
                    <ul class="main__catalog-list">
                        <?php
                            $posts = get_posts( array(
                                'numberposts'   => -1,
                                'category_name' => 'category_flowers',
                                'orderby'       => 'date',
                                'order'         => 'ASC',
                                'post_type'     => 'post',
                                'suppress_filters' => true,
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>

                        <li class="main__catalog-item">
                            <a href="" class="main__catalog-link">
                                <?php the_field( 'category_name_catalog' ); ?>
                            </a>
                        </li>
                        <?php
                            }

                            wp_reset_postdata(); //сброс
                        ?>
                    </ul>
                </div>
                <div class="main__catalog-icon-phone-btn">
                    <div class="main__catalog-icons">
                        <a href="<?php the_field('instagram_link', 2); ?>" class="main__catalog-icons-link">
                            <svg class="social-icon">
                                <use
                                    xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-inst">
                                </use>
                            </svg>
                        </a>
                        <a href="<?php the_field('whatsapp_link', 2); ?>" class="main__catalog-icons-link">
                            <svg class="social-icon">
                                <use
                                    xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-wa">
                                </use>
                            </svg>
                        </a>
                        <a href="<?php the_field('viber_link', 2); ?>" class="main__catalog-icons-link">
                            <svg class="social-icon">
                                <use
                                    xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-viber">
                                </use>
                            </svg>
                        </a>
                    </div>
                    <div class="main__catalog-phone phone-none">
                        <a href="tel:+375 (26) 125-96-96" class="phone-link"> <?php the_field('phone', 2); ?> </a>
                    </div>
                    <div class="main__catalog-btn">
                        <button class="main__catalog-button">
                            <svg class="main__catalog-icon-phone">
                                <use
                                    xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-main-phone">
                                </use>
                            </svg>
                            ЗАКАЗАТЬ ЗВОНОК
                        </button>
                    </div>
                    <a href="" class="main__catalog-icon-link">
                        <svg class="main__catalog-icon-basket">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-basket">
                            </use>
                        </svg>
                    </a>
                </div>
                <div class="main__catalog-flowers">
                    <div class="main__catalog-flowers-select">
                        <select name="flowers" class="main__catalog-select">
                            <option value="1" class="main__catalog-option">По популярности</option>
                            <option value="2" class="main__catalog-option">Новинки</option>
                        </select>
                    </div>
                    <ul class="main__catalog-flowers-list">
                        <?php
                            $posts = get_posts( array(
                                'numberposts'   => -1,
                                'category_name' => 'flowers',
                                'orderby'       => 'date',
                                'order'         => 'ASC',
                                'post_type'     => 'post',
                                'suppress_filters' => true,
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>

                        <li class="main__catalog-flowers-item">
                            <img src="<?php the_field('product_img'); ?>" alt="flower"
                                class="main__catalog-flowers-img">
                            <strong class="main__catalog-flowers-desc"> <?php the_field( 'product_descr' ); ?></strong>
                            <span class="main__catalog-flowers-price"> <?php the_field( 'product_price' ); ?></span>
                            <button class="main__catalog-flowers-btn"> В КОРЗИНУ </button>
                        </li>
                        <?php
                            }

                            wp_reset_postdata(); //сброс
                        ?>

                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php
        get_footer();
    ?>
</body>

</html>