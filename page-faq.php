<?php 
/*
Template Name: FAQ
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <?php
        wp_head();
    ?>
</head>

<body>
    <?php
        get_header();
    ?>

    <main>
        <section class="faq" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="faq__container">
                <h1 class="faq__header header-section">
                    <?php the_field( 'faq_header' ); ?>
                </h1>
                <ul class="faq__list">
                    <li class="faq__item">
                        <div class="faq__item-flex">
                            <h3 class="faq__item-heading">
                                <?php the_field( 'faq_question_1' ); ?>
                            </h3>
                            <span class="faq__item-icon">+</span>
                        </div>
                        <p class="faq__item-description item-active">
                            <?php the_field( 'faq_answer_1' ); ?>
                        </p>
                    </li>
                    <li class="faq__item">
                        <div class="faq__item-flex">
                            <h3 class="faq__item-heading">
                                <?php the_field( 'faq_question_2' ); ?>
                            </h3>
                            <span class="faq__item-icon">+</span>
                        </div>
                        <p class="faq__item-description item-active">
                            <?php the_field( 'faq_answer_2' ); ?>
                        </p>
                    </li>
                    <li class="faq__item">
                        <div class="faq__item-flex">
                            <h3 class="faq__item-heading">
                                <?php the_field( 'faq_question_3' ); ?>
                            </h3>
                            <span class="faq__item-icon">+</span>
                        </div>
                        <p class="faq__item-description item-active">
                            <?php the_field( 'faq_answer_3' ); ?>
                        </p>
                    </li>
                    <li class="faq__item">
                        <div class="faq__item-flex">
                            <h3 class="faq__item-heading">
                                <?php the_field( 'faq_question_4' ); ?>
                            </h3>
                            <span class="faq__item-icon">+</span>
                        </div>
                        <p class="faq__item-description item-active">
                            <?php the_field( 'faq_answer_4' ); ?>
                        </p>
                    </li>
                    <li class="faq__item">
                        <div class="faq__item-flex">
                            <h3 class="faq__item-heading">
                                <?php the_field( 'faq_question_5' ); ?>
                            </h3>
                            <span class="faq__item-icon">+</span>
                        </div>
                        <p class="faq__item-description item-active">
                            <?php the_field( 'faq_answer_5' ); ?>
                        </p>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <?php
        get_footer();
    ?>
</body>

</html>