<?php get_header(); ?>
<div id="main " class="page row">
  <div id="content " class="row container contact">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <article>
       <h2><?php the_title(); ?></h2>
       <?php
        if ( has_post_thumbnail() )
        {
          echo "<a href='".get_permalink()."'>";
          the_post_thumbnail( 'medium');
          echo "</a>";
        the_excerpt();
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
<?php get_footer(); ?>