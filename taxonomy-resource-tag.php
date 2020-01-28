<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2 style="margin-top:0;">Browse All Resources</h2>
      <ul id="resource-tag" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled list-articles">
        <?php while( have_posts() ) : the_post();?>
          <?php get_template_part( "partials/content", "archive" );?>
        <?php endwhile;?>
      </ul>
      <div class='orbit-btn-load-parent text-center'>
        <button data-behaviour='oq-ajax-loading' data-list="#resource-tag" class="load-more" type="button">
          <?php _e( 'Load More', 'orbit-bundle' );?>
        </button>
      </div>
    </div>
    <div class="col-sm-4">
      <?php if( is_active_sidebar( 'single-resource-sidebar' ) ){
        dynamic_sidebar( 'single-resource-sidebar' );
      }?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
