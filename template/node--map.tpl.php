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
  <section class="global_title">
    <div class="toptitle_abs text-center">
      <?php print render($content['body']) ?>
    </div>
    <div class="global-img">
      <img src="<?php print file_create_url($node->field_map['und'][0]['uri']); ?>" alt="" class="img-responsive" id="vg" usemap="#Map">
      <map name="Map" class="flats_map">
      <?php
      $node_wrapper = entity_metadata_wrapper('node', $node);
      foreach ($node_wrapper->field_mapelement as $field_collection_wrapper) {
        $field_collection = $field_collection_wrapper->value();
        print '<area title="" href="#" shape="rect"
                          coords="'.$field_collection->field_coordinates['und'][0]['value'].'" alt="'.$field_collection->item_id.'"
                          role="" 
                          id="area_'.$field_collection->item_id.'"
                          data-nid="'.$field_collection->item_id.'" data-tooltip="<div>'.$field_collection->field_m_title['und'][0]['value'].'</div><div>'.$field_collection->field_text['und'][0]['value'].'</div>"/>';
      }
      ?>
      </map>
    </div>

  </div>
<?php } ?>
