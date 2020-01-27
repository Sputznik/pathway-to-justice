<ul id="<?php _e( $atts['id'] );?>" data-target="<?php _e('li.orbit-article');?>" data-url="<?php _e( $atts['url'] );?>" class="list-unstyled list-articles">
  <?php while( $this->query->have_posts() ) : $this->query->the_post();?>
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
    </div>
  </li>
  <?php endwhile;?>
</ul>
