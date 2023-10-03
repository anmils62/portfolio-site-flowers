<?php
    get_header();
?>
<main>
    <section class="main__section">
        <div class="container main__container">
            <div class="main__heading-description-link">
                <h1 class="heading-1 main__heading"> <?php the_field('title_h1'); ?> </h1>
                <p class="main__description">
                    <?php the_field('main_description'); ?>
                </p>
                <a href="<?php the_field('main_button_link'); ?>" class="btn main__link-catalog">
                    <?php the_field('main_button'); ?>
                </a>
            </div>
            <div class="main__icon-phone-btn">
                <div class="main__icons">
                    <a href="<?php the_field('instagram_link', 2); ?>" class="main__icons-link">
                        <svg class="social-icon">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-inst">
                            </use>
                        </svg>
                    </a>
                    <a href="<?php the_field('whatsapp_link', 2); ?>" class="main__icons-link">
                        <svg class="social-icon">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-wa">
                            </use>
                        </svg>
                    </a>
                    <a href="<?php the_field('viber_link', 2); ?>" class="main__icons-link">
                        <svg class="social-icon">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-viber">
                            </use>
                        </svg>
                    </a>
                </div>
                <div class="main__phone">
                    <a href="tel:+375 (26) 125-96-96" class="phone-link"> <?php the_field('phone', 2); ?> </a>
                </div>
                <div class="main__btn">
                    <button class="main__button">
                        <svg class="main__icon-phone">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-main-phone">
                            </use>
                        </svg>
                        ЗАКАЗАТЬ ЗВОНОК
                    </button>
                </div>


            </div>
        </div>
    </section>
    <section class="catalog__section">
        <div class="container catalog__container">
            <h2 class="heading-2 catalog__heading"> <?php the_field( 'catalog_title' ); ?></h2>
            <p class="catalog__description"> <?php the_field( 'catalog_description' ); ?></p>
            <div class="catalog__wrapper-card">
                <div class="catalog__card">
                    <h3 class="heading-3 catalog__heading-3"> <?php the_field( 'catalog_flower' ); ?> </h3>
                    <ul class="catalog__list">
                        <li class="catalog__item"> <?php the_field( 'catalog_flower_one' ); ?> </li>
                        <li class="catalog__item"> <?php the_field( 'catalog_flower_two' ); ?> </li>
                        <li class="catalog__item"> <?php the_field( 'catalog_flower_three' ); ?> </li>
                        <li class="catalog__item"> <?php the_field( 'catalog_flower_four' ); ?> </li>
                        <li class="catalog__item"> <?php the_field( 'catalog_flower_five' ); ?> </li>
                    </ul>
                    <a href="<?php the_field( 'catalog_link', 2 ); ?>" class="catalog-link">
                        <?php the_field( 'look_catalog' ); ?> </a>
                </div>
                <div class="catalog__card card-bouquet">
                    <h3 class="heading-3 catalog__heading-3"> <?php the_field( 'catalog_bouquet' ); ?> </h3>
                    <ul class="catalog__list">
                        <li class="catalog__item"> <?php the_field( 'catalog_bouquet_one' ); ?> </li>
                        <li class="catalog__item"> <?php the_field( 'catalog_bouquet_two' ); ?> </li>
                        <li class="catalog__item"> <?php the_field( 'catalog_bouquet_three' ); ?> </li>
                    </ul>
                    <a href="<?php the_field( 'catalog_link', 2 ); ?>" class="catalog-link">
                        <?php the_field( 'look_catalog' ); ?> </a>
                </div>
                <div class="catalog__card card-additionally">
                    <h3 class="heading-3 catalog__heading-3"> <?php the_field( 'catalog_other' ); ?></h3>
                    <ul class="catalog__list">
                        <li class="catalog__item"> <?php the_field( 'catalog_other_one' ); ?> </li>
                        <li class="catalog__item"> <?php the_field( 'catalog_other_two' ); ?> </li>
                        <li class="catalog__item"> <?php the_field( 'catalog_other_three' ); ?> </li>
                        <li class="catalog__item"> <?php the_field( 'catalog_other_four' ); ?> </li>
                    </ul>
                    <a href="<?php the_field( 'catalog_link', 2 ); ?>" class="catalog-link">
                        <?php the_field( 'look_catalog' ); ?> </a>
                </div>
            </div>
        </div>
    </section>
    <section class="flowers__section">
        <div class="container flowers__container">
            <h2 class="heading-2 flowers__heading-2">
                <?php the_field( 'about_title' ); ?>
            </h2>
            <p class="flowers__description"> <?php the_field( 'about_description' ); ?> </p>
            <ul class="flowers__list">
                <li class="flowers__item">
                    <div class="flowers__img-span">
                        <img src="<?php the_field( 'about_img_one' ); ?>" alt="flower" class="flowers__img">
                        <span class="flowers__new"> NEW </span>
                    </div>
                    <strong class="flowers__desc"> <?php the_field( 'about_word' ); ?> </strong>
                    <span class="flowers__price"> <?php the_field( 'about_price' ); ?> </span>
                    <button class="flowers__btn"> <?php the_field( 'about_button' ); ?> </button>
                    <a href="<?php the_field( 'catalog_link', 2 ); ?>" class="catalog-link flowers__catalog">
                        Смотреть весь каталог
                        <svg class="flowers__arrow">
                            <use
                                xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-arrow-pink">
                            </use>
                        </svg>
                    </a>
                </li>
                <li class="flowers__item item-none">
                    <img src="<?php the_field( 'about_img_two' ); ?>" alt="flower" class="flowers__img">
                    <strong class="flowers__desc"> <?php the_field( 'about_word_2' ); ?></strong>
                    <span class="flowers__price two-card"> <?php the_field( 'about_price_2' ); ?> </span>
                    <button class="flowers__btn"> <?php the_field( 'about_button' ); ?> </button>
                </li>
                <li class="flowers__item">
                    <div class="flowers__img-span">
                        <img src="<?php the_field( 'about_img_three' ); ?>" alt="flower" class="flowers__img">
                        <span class="flowers__sale"> SALE </span>
                    </div>
                    <strong class="flowers__desc"> <?php the_field( 'about_word_3' ); ?> </strong>
                    <span class="flowers__price"> <?php the_field( 'about_price_3' ); ?> </span>
                    <button class="flowers__btn"> <?php the_field( 'about_button' ); ?> </button>
                </li>
            </ul>
            <div class="flowers__image">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/lover-flower.png" alt="image">
            </div>
        </div>
    </section>
    <section class="order__section">
        <div class="container order__container">
            <h2 class="heading-2 order__heading-2"> <?php the_field( 'order_title' ); ?> </h2>
            <span class="order__line"></span>
            <div class="order__list-steps">
                <ul class="order__list list-one">
                    <li class="order__item">
                        <strong class="order__step"> <?php the_field( 'first_step' ); ?> </strong>
                        <p class="order__desc">
                            <?php the_field( 'first_step_descr' ); ?>
                        </p>
                    </li>
                    <li class="order__item">
                        <strong class="order__step"> <?php the_field( 'second_step' ); ?> </strong>
                        <p class="order__desc">
                            <?php the_field( 'second_step_descr' ); ?>
                        </p>
                    </li>
                    <li class="order__item">
                        <strong class="order__step"> <?php the_field( 'third_step' ); ?></strong>
                        <p class="order__desc">
                            <?php the_field( 'third_step_descr' ); ?>
                        </p>
                    </li>
                </ul>
                <ul class="order__list-step">
                    <li class="order__item">
                        <strong class="order__step"> <?php the_field( 'fourth_step' ); ?> </strong>
                        <p class="order__desc">
                            <?php the_field( 'fourth_step_descr' ); ?>
                        </p>
                    </li>
                    <li class="order__item">
                        <strong class="order__step"> <?php the_field( 'fifth_step' ); ?> </strong>
                        <p class="order__desc">
                            <?php the_field( 'fifth_step_descr' ); ?>
                        </p>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="special__section">
        <div class="container special__container">
            <div class="special__heading-span">
                <h2 class="heading-2 special__heading-2">
                    Особенный <br> <span class="special__text">повод?</span>
                </h2>
                <span class="special__line"></span>
            </div>
            <div class="special__list">
                <div class="special__description">
                    <p class="special__descr special__p">
                        <?php the_field( 'special_descr' ); ?>
                    </p>
                    <ul class="special__list-descr">
                        <li class="special__item-descr">
                            <?php the_field( 'special_li_one' ); ?>
                        </li>
                        <li class="special__item-descr">
                            <?php the_field( 'special_li_two' ); ?>
                        </li>
                        <li class="special__item-descr">
                            <?php the_field( 'special_li_three' ); ?>
                        </li>
                    </ul>
                    <svg class="special__arrow">
                        <use
                            xlink:href="<?php echo bloginfo('template_url'); ?>/assets/icons/symbol-defs.svg#icon-arrow-blue">
                        </use>
                    </svg>
                    <button class="btn special__btn"> <?php the_field( 'special_button_title' ); ?>
                    </button>
                </div>
                <ul class="special__list-images">
                    <li class="special__item-img">
                        <img src="<?php the_field( 'img_1' ); ?>" class="special__img">
                    </li>
                    <li class="special__item-img">
                        <img src="<?php the_field( 'img_2' ); ?>" class="special__img">
                    </li>
                    <li class="special__item-img">
                        <img src="<?php the_field( 'img_3' ); ?>" class="special__img">
                    </li>
                </ul>
                <ul class="special__list-img">
                    <li class="special__item-img-top">
                        <img src="<?php the_field( 'img_4' ); ?>" class="special__img">
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="question__section">
        <div class="container question__container">
            <div class="question__wrapper-h2">
                <div class="question__heading">
                    <h2 class="heading-2 question__heading-2">
                        <?php the_field( 'form_title' ); ?>
                    </h2>
                </div>
                <div class="question__descr">
                    <span class="question__line"></span>
                    <p class="question__description">
                        <?php the_field( 'form_descr' ); ?>
                    </p>
                </div>
            </div>
            <div class="question__wrapper-form">
                <div class="question__form">
                    <?php echo do_shortcode('[contact-form-7 id="151" title="Форма обратной связи"]') ?>
                </div>
                <p class="question__police">
                    <?php the_field( 'personal_information' ); ?>
                </p>
            </div>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/questions.png" alt="image"
                class="question__img">
        </div>
    </section>
    <!-- the window when you click order a call -->
    <div class="order__call-wrapper call-active">
        <div class="order__call">
            <button class="form__btn-close">
                <svg class="form__btn-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.4294 4.06152L13.9385 4.57056L4.57056 13.9378L4.06152 13.4291L13.4294 4.06152Z"
                        fill="#43FFD2" />
                    <path d="M4.57056 4.06152L13.9385 13.4287L13.4294 13.9381L4.06152 4.57092L4.57056 4.06152Z"
                        fill="#43FFD2" />
                </svg>
            </button>
            <h4 class="order__call-header">Заказать звонок</h4>
            <p class="order__call-description">
                Впишите свои данные, и мы свяжемся с Вами.
                Ваши данные ни при каких обстоятельствах не будут переданы третьим лицам.
            </p>
            <form action="#" class="form__call">
                <label class="form__label">
                    <input type="text" class="form__input" name="firstname" placeholder="Ваше имя">
                </label>
                <label class="form__label">
                    <input type="tel" class="form__input" name="phone" placeholder="Ваш телефон">
                </label>
                <button type="submit" class="form__button">Отправить</button>
            </form>
            <div class="order__cal-police">
                <p class="order__call-police-descr">
                    Нажимая на кнопку «Отправить», я даю свое согласие на обработку персональных данных,
                    в соответствии с Политикой конфиденциальности
                </p>
            </div>
        </div>
        <div class="overlay call-active"></div>
    </div>
</main>
<?php
        get_footer();
    ?>
</body>

</html>