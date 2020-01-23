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
          Categorized as <?php the_category(', ')?> | Tagged under <?php the_tags( '', ', ', '' ); ?>
        </div>
        <div class="content">
          <p><strong>Resource description:</strong></p>
          <?php the_content(); ?>
        </div>
        <div class="other-links">
        <a href="<?php _e( $external_link );?>" class="external">External Link</a>
        <a href="<?php _e( $media_link );?>" class="media">Download as PDF</a>
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
