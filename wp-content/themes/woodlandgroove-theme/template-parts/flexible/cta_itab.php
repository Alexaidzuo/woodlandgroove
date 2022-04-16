<?php

$active = get_sub_field('active');


?>

<?php
if ($active == 1) : ?>

    <section class="itab">
        <div class="container">
            <div class="row justify-content-center">

                <?php
                while (have_rows('itab')) : the_row(); ?>
                    <?php

                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('subtitle');
                    $button = get_sub_field('button');

                    ?>

                    <div class="itab__item-inner col-lg-r">
                        <div class="itab__item">
                            <?php if ($image) { ?>
                                <div class="itab__item-image">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </div>
                            <?php } ?>

                            <?php
                            if ($title) : ?>
                                <h3 class="itab__item-title"><?php echo $title; ?></h3>
                            <?php endif; ?>

                            <?php
                            if ($subtitle) : ?>
                                <p class="itab__item-subtitle"><?php echo $subtitle; ?></p>
                            <?php endif; ?>

                            <?php if ($button) : ?>
                                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </section>

<?php endif; ?>