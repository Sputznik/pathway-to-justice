<?php get_header();?>
<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
  <div class="row">
    <div class="col-sm-8"><div class="paper-box">
      <?php if (have_posts()) : while (have_posts()) : the_post();
        $external_link = get_post_meta( get_the_ID(), 'external-link', true );
        $media_link = get_post_meta( get_the_ID(), 'media-link', true );
      ?>
        <h1 class="title"><?php the_title();?></h1>
        <div class="decoration"></div>
        <p class="author-name">
          Added by <?php _e( ucwords( get_the_author_meta( 'display_name' ) ) ); ?> on <?php echo get_the_date('M jS Y');?>
        </p>
        <div class="categories">
          <?php
            $resource_category = getResourceTerms( get_the_ID(), 'resource-category' );
            $resource_tag = getResourceTerms( get_the_ID(), 'resource-tag' );
          ?>
          Categorized as <?php echo implode( ', ', $resource_category );?> | Tagged under <?php echo implode( ', ', $resource_tag );?>
        </div>
        <div class="content">
          <p><strong>Resource description:</strong></p>
          <?php the_content(); ?>
        </div>
        <div class="other-links">
        <?php if( !empty( $external_link ) ): ?>
          <a href="<?php _e( $external_link );?>" class="external">External Link</a>
        <?php endif;?>
        <?php if( !empty( $media_link ) ): ?>
          <a href="<?php _e( $media_link );?>" class="media">Download as PDF</a>
        <?php endif;?>
        </div>
        <!-- <div style="clear: both"></div> -->
      <?php endwhile; endif; ?>
    </div></div>
    <div class="col-sm-4">
      <?php if( is_active_sidebar( 'single-resource-sidebar' ) ){
        dynamic_sidebar( 'single-resource-sidebar' );
      }?>
    </div>
  </div>
</div>
<?php get_footer();?>
