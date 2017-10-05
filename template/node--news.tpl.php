<?php if ($teaser) { ?>
    <h2><a href="<?php print $node_url ?>"><?php print $title ?></a></h2>
    <div class="blog_dateinfo">
        <?php print format_date($created, 'long') ?>
        <?php print render($content['field_place']) ?>
    </div>
    <?php print render($content['field_image']) ?>
    <?php print render($content['body']) ?>
    <a href="<?php print $node_url ?>" class="blog_bottom_link"></a>
<?php } ?>

<?php if ($page) { ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print node_class($node) ?>
  node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
  <?php print render($content['field_image']) ?>
  <div class="blog_dateinfo">
      <?php print format_date($created, 'long')?>
    <?php print render($content['field_place']) ?>
  </div>
  <?php print render($content['body']) ?>
  </div>
<?php } ?>
