<?php 
/*
Template Name: Доставка и оплата
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доставка и оплата</title>
    <?php
        wp_head();
    ?>
</head>

<body>
    <?php
        get_header();
    ?>
    <main>
        <section class="pay" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="pay__container">
                <h1 class="pay__heading-1 header-section">
                    <?php the_field( 'delivery_title' ); ?>
                </h1>
                <div class="pay__payment">
                    <h3 class="pay__descr">
                        <?php the_field( 'delivery_payment' ); ?>
                    </h3>
                    <ul class="pay__payment-list">
                        <li class="pay__payment-item">
                            <span class="pay__payment-icon"></span>
                            <p class="pay__payment-item-descr">
                                <?php the_field( 'delivery_payment_1' ); ?>
                            </p>
                        </li>
                        <li class="pay__payment-item">
                            <span class="pay__payment-icon"></span>
                            <p class="pay__payment-item-descr">
                                <?php the_field( 'delivery_payment_2' ); ?>
                            </p>
                        </li>
                        <li class="pay__payment-item">
                            <span class="pay__payment-icon"></span>
                            <p class="pay__payment-item-descr">
                                <?php the_field( 'delivery_payment_3' ); ?>
                            </p>
                        </li>
                        <li class="pay__payment-item">
                            <span class="pay__payment-icon"></span>
                            <p class="pay__payment-item-descr">
                                <?php the_field( 'delivery_payment_4' ); ?>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="pay__delivery">
                    <h3 class="pay__descr">
                        <?php the_field( 'delivery_pay' ); ?>
                    </h3>
                    <ul class="pay__delivery-list">
                        <li class="pay__delivery-item">
                            <p class="pay__delivery-descr">
                                <?php the_field( 'delivery_pay_1' ); ?>
                            </p>
                        </li>
                        <li class="pay__delivery-item">
                            <p class="pay__delivery-descr">
                                <?php the_field( 'delivery_pay_2' ); ?>
                            </p>
                        </li>
                        <li class="pay__delivery-item">
                            <p class="pay__delivery-descr">
                                <?php the_field( 'delivery_pay_3' ); ?>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="pay__delivery-terms">
                    <h3 class="pay__descr">
                        <?php the_field( 'delivery_terms' ); ?>
                    </h3>
                    <ul class="pay__delivery-terms-list">
                        <li class="pay__delivery-terms-item">
                            <p class="pay__delivery-terms-descr">
                                <?php the_field( 'delivery_terms_1' ); ?>
                            </p>
                        </li>
                        <li class="pay__delivery-terms-item">
                            <p class="pay__delivery-terms-descr">
                                <?php the_field( 'delivery_terms_2' ); ?>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="pay__add-refund">
                    <div class="pay__additionally">
                        <h3 class="pay__descr">
                            <?php the_field( 'delivery_add' ); ?>
                        </h3>
                        <p class="pay__additionally-info">
                            <?php the_field( 'delivery_add_info' ); ?>
                        </p>
                    </div>
                    <div class="pay__refund">
                        <h3 class="pay__descr">
                            <?php the_field( 'delivery_refund' ); ?>
                        </h3>
                        <p class="pay__refund-info">
                            <?php the_field( 'delivery_refund_info' ); ?>
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