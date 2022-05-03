<?php

/**
 * The template part for displaying a simple content.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package woodlandgroove
 */

?>

<?php
$simple_contents = get_sub_field('simple_contents');
?>

<section class="simple-content">
    <div class="container">
        <div class="simple-content__inner">
        <?php
        foreach ($simple_contents as $contents)  : ?>

        <?php
        $link = $contents['cta_link_button'];
        $cta_button = get_sub_field('cta_button'); //boolean
        ?>

            <div id="<?php echo $contents['content_id']; ?>" class="simple-content__item">

                <?php
                if($contents['content']) {
                    echo $contents['content'];
                }
                ?>

                <?php
                if($link) : ?>
                    <div class="simple-content__cta">
                        <a class="btn btn--cta-donate" href="<?php echo $link['url'];?>"><?php echo $link['title']; ?></a>
                    </div>
                <?php endif; ?>
            </div>

        <?php endforeach; ?>
        </div>
    </div>
</section>