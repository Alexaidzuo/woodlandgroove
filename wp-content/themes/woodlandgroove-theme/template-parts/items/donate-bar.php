<?php
/**
 * The template part for displaying a donate bar.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package woodlandgroove
 */

?>

<?php

$text = get_field('donate_bar_text','options');
$amounts = get_field('amounts','options');
?>

<div class="donate-bar">
    <div class="container">
        <div class="donate-bar__inner">
            <div class="donate-bar__items">

                <?php if($text): ?>

                <p class="donate-bar__mess"><?php echo $text; ?></p>

                <?php endif; ?>

                <form class="donate-bar__form">
                    <input name="amount" type="number">
                
                    <?php
                    if($amounts)
                    {
                        foreach($amounts as $amount)
                        {
                            ?>

                            <span data-amount = "<?php echo $amount['amount'];  ?>" class="donate-bar__amount"><?php echo "$".$amount['amount']; ?></span>

                            <?php
                        }
                    }
                    ?>
                    
                     <input type="submit" value="<?php esc_html_e('Donate','woodlandgroove'); ?>">
                </form>
            </div>
        </div>
    </div>
</div>