<?php get_header(); ?>
	<div class="container main_category">
<div class="row ">
	<?php
		$count=0;
	 ?>
   	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   	<?php if (($count%6) == 0)
   	{
   		echo "</div> <div class='row news'>";
   	} ?>
   <div class="span2">
   <?php

if ( has_post_thumbnail() )
  	{
	    echo "<a href='".get_permalink()."'>";
	    the_post_thumbnail( 'thumbnail');
	    echo "</a>";
  	}
$count = $count+1;
?>
   <p><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></p>
   </div>
   <?php endwhile; else: ?>
   <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
</div>
<?php get_footer(); ?>





