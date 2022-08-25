<?php

/**
 * The template part for displaying a Wall of Love content.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package woodlandgroove
 */

?>

<?php

$active = get_sub_field('active');
$content = get_sub_field('content');
$button = get_sub_field('button');
$wall_of_love = get_sub_field('wall_of_love');

?>

<section class="wall">
    <div class="container">
        <div class="row">

        <?php if($content) : ?>
            <div class="wall__content col-lg-12">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>

        <?php if($button) : ?>
            <div class="wall__button col-lg-12">
                <a class="btn btn--light-brown" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
            </div>
        <?php endif;?>

        <?php if($wall_of_love) : ?>
            <?php foreach($wall_of_love as $wall) : ?>

                <?php
                    $message = $wall['message'];
                    $name = $wall['name'];
                    $date = $wall['date'];
                ?>

                <div class="wall__wrap col-lg-4 col-md-6 col-sm-12">
                    <div class="wall__inner">
                        <p class="wall__message"><?php echo $message; ?></p>
                        <p class="wall__name"><?php echo $name; ?></p>
                        <p class="wall__date"><?php echo $date; ?></p>
                    </div>

                </div>

            <?php endforeach; ?>
        <?php endif; ?>

        </div>
    </div>
</section>