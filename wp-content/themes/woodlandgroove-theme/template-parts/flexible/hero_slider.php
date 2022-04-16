<?php

/**
 * The template part for displaying a hero slider.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package woodlandgroove
 */

?>

<?php
$slider = get_sub_field('slider');
?>

<section class="hero-slider">
    <div class="hero-slider__inner">

        <?php if ($slider) : ?>

            <div class="hero-slider__items slick">

                <?php
                foreach ($slider as $slide) {
                ?>

                    <div class="hero-slider__item" <?php if ($slide['image']) echo "style='background-image:url(" . wp_get_attachment_image_url($slide['image'], 'large') . ")'" ?>>
                        <div class="hero-slider__item-content">

                            <?php if ($slide['title']) : ?>

                                <h1 class="heading-primary"><?php echo $slide['title']; ?></h1>

                            <?php endif; ?>

                            <?php if ($slide['subtitle']) : ?>

                                <h3 class="heading-third"><?php echo $slide['subtitle']; ?></h3>

                            <?php endif; ?>

                            <?php if ($slide['button_1'] || $slide['button_2']) : ?>

                                <div class="hero-slider__buttons">

                                    <?php if ($slide['button_1']) : ?>

                                        <a class="btn btn--solid" href="<?php echo $slide['button_1']['url'];  ?>"><?php echo $slide['button_1']['title']; ?></a>

                                    <?php endif; ?>

                                    <?php if ($slide['button_2']) : ?>

                                        <a class="btn btn--solid" href="<?php echo $slide['button_2']['url'];  ?>"><?php echo $slide['button_2']['title']; ?></a>

                                    <?php endif; ?>

                                </div>

                            <?php endif; ?>

                        </div>
                    </div>

                <?php
                }

                ?>

            </div>

        <?php endif; ?>

    </div>
</section>