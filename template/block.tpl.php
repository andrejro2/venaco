<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
    <div class="block_title" <?php print $title_attributes; ?>><?php print $block->subject; ?></div>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="block-content" <?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
  
</section> <!-- /.block -->
