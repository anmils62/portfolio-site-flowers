<?php 
/*
Template Name: О нас
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <?php
        wp_head();
    ?>
</head>

<body>
    <?php
        get_header();
    ?>
    <main>
        <section class="about" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class=" about__container">
                <h1 class="about__header header-section">
                    <?php the_field( 'company_header' ); ?>
                </h1>
                <div class="about__company">
                    <h2 class="about__company-title about-title">
                        <?php the_field( 'company_descr_heading' ); ?>
                    </h2>
                    <p class="about__company-descr about-descr">
                        <?php the_field( 'company_descr_info' ); ?>
                    </p>
                </div>
                <div class="about__guarantee">
                    <h2 class="about_guarantee-title about-title">
                        <?php the_field( 'company_guarantee' ); ?>
                    </h2>
                    <p class="about__guarantee-info about-descr">
                        <?php the_field( 'company_guarantee_info' ); ?>
                    </p>
                </div>
                <div class="about__advantages">
                    <h2 class="about__advantages-title about-title">
                        <?php the_field( 'company_other_one' ); ?>
                    </h2>
                    <p class="about__advantages-desc about-descr">
                        <?php the_field( 'company_other_two' ); ?>
                    </p>
                </div>
                <p class="about__other-one">
                    <?php the_field( 'company_other_three' ); ?>
                </p>
                <p class="about__other-two about-descr">
                    <?php the_field( 'company_other_four' ); ?>
                </p>
            </div>
        </section>
    </main>
    <?php
        get_footer();
    ?>
</body>

</html>