<?php

/**
 * The template part for displaying a donate form.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package woodlandgroove
 */

?>

<?php

$mess = get_sub_field('form_text');
$form = get_sub_field('shortcode');

?>

<section class="donate-form">
    <div class="container">
        <div class="donate-form__inner">

            <?php if($mess): ?>

            <div class="donate-form__mess">
                <?php echo $mess; ?>
            </div>

            <?php endif; ?>

            <?php if($form): ?>

            <div class="donate-form__holder">
                <?php echo do_shortcode($form); ?>
            </div>

            <?php endif; ?>

        </div>
    </div>
</section>