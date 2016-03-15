<?php get_header();?>
<?php 
/*Так как шаблон для категорий один, пришлось ставить условия. Если есть родитель меню то выведу вот это*/
global $post;
$cat = get_the_category($post->ID);
if($cat[0]->category_parent == 5):
?>
<div class="link-map">
	<p class="page-link"><a href="/">Главная</a><span></span> > <span><a href="<?php echo get_category_link($cat[0]->category_parent); ?>">Меню</a></span> > <span class="link-in">Горячие блюда</span></p>
</div>
<h1 class="menu-h">Горячие блюда</h1>
<div class="bluda-all">
    <?php if (have_posts()): ?>
       <?php while(have_posts()): ?>
            <?php the_post(); ?>
			<div class="bluda-one">
				<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(null, array(236, 156), array('class' => 'bluda-img')); ?></a>
				<div class="bluda-text">
					<div class="name-bluda"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					<div class="mass"><?php echo get_post_meta(get_the_ID(), 'massa', true);?></div>
					<div class="bluda-rub"><?php echo get_post_meta(get_the_ID(), 'summ', true);?> <img src="<?php bloginfo('template_url'); ?>/images/rub.png"></div>
				</div>
			</div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php wp_corenavi(); ?>
<?php endif; //Конец для списка для потомка меню ?>
<?php get_footer();?>