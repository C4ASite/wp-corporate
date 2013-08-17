<?php get_template_part('templates/page', 'header'); ?>
<?php if (is_front_page()) { ?>
<div class="container fill">
	<?php 
 		echo do_shortcode('[image-carousel]'); 
 	?>
<?php } ?>
</div>
<?php get_template_part('templates/content', 'page'); ?>