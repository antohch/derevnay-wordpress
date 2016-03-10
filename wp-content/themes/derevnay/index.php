<?php get_header(); ?>
	<div class="slider">
		<div class="flexslider">
			<ul class="slides">
				<?php echo kad_slaider_show(); ?>
			</ul>
		</div>
	</div>
	<div class="slider-shadow"></div>
	
		<!--<
		<div class="info">
			<a href="#">
			<img src="<?php bloginfo('template_url')?>/images/content2.jpg" title="" alt="" />
			<span><br />Рецепты от шеф-повара</span>
			</a>
		</div>
		<div class="info">
			<a href="#">
			<img src="<?php bloginfo('template_url')?>/images/content3.jpg" title="" alt="" />
			<span><br />События</span>
			</a>
		-->
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
	
	<div class="about">
		<h2>О кафе</h2>
		<p>Text text text text text text text text text text text text text text </p>
		<p>text text text text text text text text text text text text text text text text text text text text text text  text text text text text </p>
		<p>text text text text text text text text text text text text text text text text </p>
	</div>
</div>
<?php get_footer(); ?>