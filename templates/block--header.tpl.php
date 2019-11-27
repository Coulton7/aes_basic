<?php

/**
 * @file
 * Custom theme implementation to display a single carousel item.
 *For top-bar
 */

?>
<div id="<?php print $block_html_id ?>" class="<?php print $classes ?>"<?php print $attributes ?>>

  <?php print render($title_prefix) ?>
    <?php if ($block->subject): ?>
      <h1<?php print $title_attributes ?>><?php print $block->subject ?></h1>
    <?php endif ?>

          <?php print (render($content)) ?>


</div>
