<?php get_header(); ?>
	<div class="slider">
		<div class="flexslider">
			<ul class="slides">
				<!--<li>
					<div class="slide-content">
						<p><a href="#"><img src="/images/slide-btn.png" alt="" /></a></p>
					</div>
					<img src="<?php bloginfo('template_url')?>/images/slide1.jpg" alt=""  />
				</li>-->
				<?php echo kad_slaider_show(); ?>

			</ul>
		</div>
	</div>
	<div class="slider-shadow"></div>
	<div class="info-all">
		<div class="info">
			<a href="#">
			<img src="<?php bloginfo('template_url')?>/images/content1.jpg" title="" alt="" />
			<span>Трансляции футбольных матчей</span>
			</a>
		</div>
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
		</div>
	</div>
	<div class="about">
		<h2>О кафе</h2>
		<p>Text text text text text text text text text text text text text text </p>
		<p>text text text text text text text text text text text text text text text text text text text text text text  text text text text text </p>
		<p>text text text text text text text text text text text text text text text text </p>
	</div>
</div>
<?php get_footer(); ?>