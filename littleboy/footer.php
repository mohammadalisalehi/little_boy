<footer class=" row">
<!-- xzfzxv -->
<div class=" category_footer row">
	<div class="container">
	<div class="row">
	<div class="span4"> <h3> نوشیدنی</h3>
		<?php
$the_query = new WP_Query( ['category_name' => 'drink' , 'posts_per_page' => 5] ) ;

if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query-> the_post();?>
  <a href=" <?php the_permalink() ?>"><?php the_title(); ?> </a> <?php

  endwhile; else: ?><p><?php _e('متاسفانه صفحه مورد نظر شما یافت نشد.'); ?></p><?php endif; ?>
	</div>
	<div class="span4"><h3> لباس</h3>
		<?php
$the_query = new WP_Query( ['category_name' => 'cloth', 'posts_per_page' => 5] );

if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query-> the_post();?>
  <a href=" <?php the_permalink() ?>"><?php the_title(); ?> </a> <?php

  endwhile; else: ?><p><?php _e('متاسفانه صفحه مورد نظر شما یافت نشد.'); ?></p><?php endif; ?>
	</div>
	<div class="span4"><h3> خوراکی</h3>
		<?php
$the_query = new WP_Query( ['category_name' => 'food', 'posts_per_page' => 5] );

if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query-> the_post();?>
  <a href=" <?php the_permalink() ?>"><?php the_title(); ?> </a> <?php

  endwhile; else: ?><p><?php _e('متاسفانه صفحه مورد نظر شما یافت نشد.'); ?></p><?php endif; ?>
	</div>
	</div>
	</div>
</div>


<!--                             Copyright -->
	<div id="copyright"><a href="https://github.com/mohammadalisalehi" title="با افتخار قدرت گرفته از وردپرس، توسعه توسط محمدعلی صالحی">طراحی شده</a> در <a href="http://ermile.com/fa" title="Ermile | ارمایل">ارمایل</a> &copy; 2016
<?php
$currentYear = date('Y');
if (2016 < $currentYear)
	{
	echo '-' . $currentYear;
	}
?>
	</div>
</footer>
</body>
</html>


