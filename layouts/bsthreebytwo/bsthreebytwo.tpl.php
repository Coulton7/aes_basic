<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a three column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['middle']: Content in the middle column.
 *   - $content['right']: Content in the right column.
 */
?>

<div class="panel-display  widget-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>


<div class="row">
  <div class="col-md-4 widget col-sm-6 ">
    <div class="inside"><?php print $content['one']; ?></div>
  </div>

  <div class="col-md-4 widget col-sm-6">
    <div class="inside"><?php print $content['two']; ?></div>
  </div>

  <div class="col-md-4 widget col-sm-6 ">
    <div class="inside"><?php print $content['three']; ?></div>
  </div>

  <div class="col-md-4 widget col-sm-6 ">
    <div class="inside"><?php print $content['four']; ?></div>
  </div>

  <div class="col-md-4 widget col-sm-6">
    <div class="inside"><?php print $content['five']; ?></div>
  </div>

  <div class="col-md-4 widget col-sm-6 ">
    <div class="inside"><?php print $content['six']; ?></div>
  </div>
</div>

</div>
