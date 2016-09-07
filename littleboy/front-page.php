<!-- class="container" -->
<?php get_header(); ?>
<div class="row frontpage">
  <div id="cover"><!-- <h1><?php bloginfo('name'); ?></h1> --></div>
</div>
  <div class="container">
  <div class='row auto'>
  <span id="onvan"> جدیدترین محصولات</span>
<?php
$the_query = new WP_Query( ['posts_per_page' => 6] );
	while ($the_query->have_posts()) : $the_query-> the_post();
	if (has_post_thumbnail())
	{
	?>
	   <div class='span2'>
	    <a href="<?php the_permalink()?>"><?php the_post_thumbnail( 'thumbnail');?> <p> <?php the_title(); ?> </p></a>
	    </div> <?php
	}
	else{
		?>
	   <div class='span2'>
	    <a href="<?php the_permalink()?>"><div class="empty_thum"></div> <p> <?php the_title(); ?> </p></a>
	    </div> <?php
	}
?>
<?php endwhile;?>
 </div>
 </div>
   </div>
  <div id="cover2"></div>
</div>
<?php get_footer(); ?>