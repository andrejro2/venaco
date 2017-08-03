<div id="<?php print $block_html_id; ?>" class="col-sm-3 <?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if ($block->subject): ?><h4 <?php print $title_attributes; ?>><?php print $block->subject; ?></h4>
    <div class="strip-line"></div>
  <?php endif;?>
  <?php print render($title_suffix); ?>
  <div class="block-content" <?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
</div>
