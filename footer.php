<footer class="footer">
    <div class="container footer__container">
        <div class="footer__wrapper-column">
            <ul class="footer__list list-logo">
                <li class="footer__item-one">
                    <a href="#" class="footer__logo">
                        <img class="logo footer__logo-svg" src="<?php 
                            $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
                            echo $custom_logo__url[0]; 
                        ?>" alt="logo">
                    </a>
                </li>
                <li class="footer__item-header">
                    <strong class="footer__header">
                        Реквизиты
                    </strong>
                </li>
                <li class="footer__item-one">
                    <p class="footer__address">
                        ООО «Ловфловер» 220031, Республика Беларусь, г. Минск, ул. Тимирязева д. 50
                    </p>
                </li>
            </ul>
            <nav class="footer__nav">
                <?php
                        wp_nav_menu( [
	                        'menu'            => 'Main',
	                        'container'       => false,
	                        'menu_class'      => 'header__nav-list',
	                        'echo'            => true,
	                        'fallback_cb'     => 'wp_page_menu',
	                        'items_wrap'      => '<ul class="footer__list">%3$s</ul>',
	                        'depth'           => 1,
                        ] );
                    ?>
            </nav>
            <ul class="footer__list">
                <li class="footer__item-mail">
                    <a href="<?php the_field('e-mail', 2); ?>" class="mail"><?php the_field('e-mail', 2); ?></a>
                    <p class="info"><?php the_field('delivery', 2); ?></p>
                </li>
                <li class="footer__item-address">
                    <p class="address"><?php the_field('address', 2); ?></p>
                    <p class="time-works"><?php the_field('time_of_work', 2); ?></p>
                </li>
                <li class="footer__item-phone">
                    <a href="<?php the_field('phone', 2); ?>6" class="phone-link"> <?php the_field('phone', 2); ?> </a>
                    <p class="time-works"> прием звонков круглосуточно </p>
                </li>
                <li class="footer__item-link">
                    <a href="" class="footer__icons-link">
                        <svg class="social-icon">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-inst">
                            </use>
                        </svg>
                    </a>
                    <a href="" class="footer__icons-link">
                        <svg class="social-icon">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-wa">
                            </use>
                        </svg>
                    </a>
                    <a href="" class="footer__icons-link">
                        <svg class="social-icon">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-viber">
                            </use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<?php 
    wp_footer();
?>