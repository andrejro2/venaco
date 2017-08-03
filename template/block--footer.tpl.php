<div id="<?php print $block_html_id; ?>"
     class="<?php print $classes; ?> col-sm-4 col-xs-12 _equal-block anifade"<?php print $attributes; ?>>
    <div class="block">
        <?php print render($title_prefix); ?>
        <?php if ($block->subject): ?>
            <div class="block_title" <?php print $title_attributes; ?>><?php print $block->subject; ?></div>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <div class="block_content" <?php print $content_attributes; ?>>
            <?php print $content ?>
        </div>
    </div>
</div> <!-- /.block -->
