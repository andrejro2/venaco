<?php if ($teaser) { ?>
  <div class="box clearfix ">
    <div class="clearfix"><div class="box-heading "><a href="<?php print $node_url ?>"><?php print $title ?></a></div></div>
    <?php print render($content['field_image']) ?>

    <div class="description">
      <?php print render($content['body']) ?>
    </div>
    <div class="blog-button"><a class="button" href="<?php print $node_url ?>"><?php print t('Read More')?></a></div>
  </div>
<?php } ?>

<?php if ($page) { ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print node_class($node) ?>
  node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
  <?php print render($content['body']) ?>
  </div>
<?php } ?>
