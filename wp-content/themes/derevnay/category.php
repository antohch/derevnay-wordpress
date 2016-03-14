<?php get_header();?>
<div class="link-map">
	<p class="page-link"><a href="/">Главная</a><span></span> > <span><a href="#">Меню</a></span> > <span class="link-in">Горячие блюда</span></p>
</div>
<h1 class="menu-h">Горячие блюда</h1>
<div class="bluda-all">
    <?php if (have_posts()): ?>
       <?php while(have_posts()): ?>
            <?php the_post(); ?>
			<div class="bluda-one">
				<!--<img class="bluda-img" src="<?php echo get_the_post_thumbnail(); ?>" alt="" title="" />-->
				<?php echo get_the_post_thumbnail(null, 'full', array('class' => 'bluda-img')); ?>
				<div class="bluda-text">
					<div class="name-bluda"><?php the_title(); ?></div>
					<div class="mass"><?php echo get_post_meta(get_the_ID(), 'massa', true);?></div>
					<div class="bluda-rub"><?php echo get_post_meta(get_the_ID(), 'summ', true);?> <img src="<?php bloginfo('template_url'); ?>/images/rub.png"></div>
				</div>
			</div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer();?>