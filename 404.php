<?php 
/**
 * The template for displaying 404 pages (not found)
 * Template Name: 404
 * 
 *
 * @package WordPress
 * @subpackage Flowers
 * @since Flowers 1.0
 */
    get_header();
?>

<main>
    <section class="error">
        <div class="error__container">
            <div class="error__wrapper">
                <p class="error__descr"><?php _e( 'Упс...Такой страницы нет', 'flowers' ); ?></p>
                <p class="error__text">
                    <a href="<?php echo get_home_url(); ?>"
                        class="error__link"><?php _e( 'На главную', 'flowers' ); ?></a>
                </p>
            </div>
        </div>
    </section>
</main>

<?php
    get_footer();
?>