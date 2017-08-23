<?php get_header(); ?>


<?php if(have_posts()): ?>

	<h1><?php echo the_title();//titulo ?></h1>
	<p><?php echo the_content();//conteudo ?></p>
	<small>
		<?php echo the_tag(); ?>
		<?php echo the_post_thumbnail("img-single"); ?>
	</small>
	<small>
		Postado em <?php the_time('F, Y'); ?>
	</small>
<?php endif; ?>

 

<?php get_footer(); ?>