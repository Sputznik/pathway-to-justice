<div class="categories">
  <?php
    $resource_category = getResourceTerms( get_the_ID(), 'resource-category' );
    $resource_tag = getResourceTerms( get_the_ID(), 'resource-tag' );
  ?>
  Categorized as <?php echo implode( ', ', $resource_category );?> | Tagged under <?php echo implode( ', ', $resource_tag );?>
</div>
