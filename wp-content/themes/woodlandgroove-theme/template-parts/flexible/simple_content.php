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
        $link_url = $link['url'];
        $link_title = $link['title'];
        $cta_button = get_sub_field('cta_button'); //boolean
        ?>

            <div id="<?php echo $contents['content_id']; ?>" class="simple-content__item">

                <?php
                if($contents['content']) {
                    echo $contents['content'];
                }
                ?>

                <?php
                if($link_url && $link_title) : ?>
                    <div class="simple-content__cta">
                        <a class="btn btn--cta-donate" href="<?php echo $link_url;?>"><?php echo $link_title; ?></a>
                    </div>
                <?php endif; ?>
            </div>

        <?php endforeach; ?>
        </div>
    </div>
</section>