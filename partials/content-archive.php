<li class="orbit-article">
  <?php if( has_post_thumbnail() ):?>
  <div class='orbit-post-image'>
    <a href="<?php the_permalink();?>">
      <?php the_post_thumbnail();?>
    </a>
  </div>
  <?php else:?>
  <div class='orbit-post-image v-center'>
    <a href="<?php the_permalink();?>">
      <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/default-image.png';?>" alt="<?php the_title(); ?>" />
    </a>
  </div>
  <?php endif;?>
  <div class='orbit-post-desc'>
    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
    <?php get_template_part( "partials/content", "categories" );?>
    <p><?php echo excerpt(24);?> <a href="<?php the_permalink();?>"><strong>View Resource</strong></a></p>
  </div>
</li>
