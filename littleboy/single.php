<?php get_header(); ?>
<div id="main_single" class="row auto" >
<div id="content " class="row container auto">
<div class="span3 auto">
<?php dynamic_sidebar( 'widget-sidebar' ); ?>
</div>
<div class="span9">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <article>
     <h2><?php the_title(); ?></h2>
     <?php
     if (is_home())
     {
      if ( has_post_thumbnail() )
      {
        echo "<a href='".get_permalink()."'>";
        the_post_thumbnail( 'medium');
        echo "</a>";
      the_excerpt();
      }
      }
      else
      {
        the_content();
      }
    ?>
   </article>
   <?php endwhile; else: ?>
   <p><?php _e('متاسفانه صفحه مورد نظر شما یافت نشد.'); ?></p><?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>