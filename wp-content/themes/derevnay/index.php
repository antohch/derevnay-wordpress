<?php get_header(); ?>
	<div class="slider">
		<div class="flexslider">
			<ul class="slides">
				<?php echo kad_slaider_show(); ?>
			</ul>
		</div>
	</div>
	<div class="slider-shadow"></div>
		<?php 
		$post_home = new WP_Query(array(
			'category_name' => 'for_home',
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'order' => 'ASC'
		));
		?>
		<?php if($post_home->have_posts()): ?>
			<div class="info-all">
			<?php while($post_home->have_posts()): ?>
				<?php $post_home->the_post(); ?>
				<div class="info">
					<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail(); ?>
					<span><?php the_title(); ?></span>
					</a>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; wp_reset_postdata();?>
	<?php 
		$post_home = new WP_Query(array(
			'p' => 30,
			'post_status' => 'publish',
			'posts_per_page' => 1,
		));
	?>
		<?php if($post_home->have_posts()): ?>
			<div class="about">
			<?php while($post_home->have_posts()): ?>
				<?php $post_home->the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<p><?php echo get_the_excerpt(); ?></p>
			<?php endwhile; ?>
			</div>
		<?php endif; wp_reset_postdata();?>
	
<?php get_footer(); ?>