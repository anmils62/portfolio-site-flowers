<?php 
/*
Template Name: Контакты
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <?php
        wp_head();
    ?>
</head>

<body>
    <?php
        get_header();
    ?>
    <main>
        <section class="contacts" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="contacts__container">
                <h1 class="contacts__header header-section">
                    <?php the_field( 'contact_header' ); ?>
                </h1>
                <ul class="contacts__work-list">
                    <li class="contacts__work-item">
                        <h3 class="contacts__work-heading">
                            <?php the_field( 'contact_time' ); ?>
                        </h3>
                        <p class="contacts__work-descr">
                            <?php the_field( 'contact_time_info' ); ?>
                        </p>
                    </li>
                    <li class="contacts__work-item">
                        <h3 class="contacts__work-heading">
                            <?php the_field( 'contact_address' ); ?>
                        </h3>
                        <p class="contacts__work-descr">
                            <?php the_field( 'contact_address_info' ); ?>
                        </p>
                    </li>
                    <li class="contacts__work-item">
                        <h3 class="contacts__work-heading">
                            <?php the_field( 'contact_phone' ); ?>
                        </h3>
                        <p class="contacts__work-descr">
                            <?php the_field( 'contact_phone_info' ); ?>
                        </p>
                    </li>
                    <li class="contacts__work-item">
                        <h3 class="contacts__work-heading">
                            <?php the_field( 'contact_mail' ); ?>
                        </h3>
                        <p class="contacts__work-descr">
                            <?php the_field( 'contact_mail_info' ); ?>
                        </p>
                    </li>
                </ul>
                <div class="contacts__wrapper-form">
                    <div class="contacts__line-descr">
                        <span class="question__line"></span>
                        <p class="contacts__form-descr">
                            <?php the_field( 'contact_other_two' ); ?>
                        </p>
                    </div>
                    <div class="contacts__form">
                        <div class="contacts__form-input">
                            <?php echo do_shortcode('[contact-form-7 id="151" title="Форма обратной связи"]') ?>
                        </div>
                        <p class="contacts__police">
                            <?php the_field( 'contact_police' ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        get_footer();
    ?>
</body>

</html>