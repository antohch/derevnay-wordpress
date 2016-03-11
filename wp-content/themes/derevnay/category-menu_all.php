<?php get_header();?>
<div class="link-map">
	<p class="page-link"><a href="/">Главная</a><span> > </span> <span class="link-in">Меню</span></p>
</div>
<h1 class="menu-h">Меню</h1>
<div class="menu-all">
<?php
$parent_id = 5;
$menu_all = get_categories(array(
	'orderby' => 'ID',
	'child_of' => $parent_id,
	'hide_empty' => 0
));
if($menu_all):
	foreach($menu_all as $menu_one):
?>
	<div class="menu-one">
		<div class="menu-img"><img src="<?php echo str_replace(array("<p>", "</p>"), "", category_description($menu_one->cat_ID)); ?>" alt="" title="" /></div>
		<div class="menu-a"><a href="<?php echo get_category_link($menu_one->cat_ID)?>"><?php echo $menu_one->name; ?></a></div>
	</div>
	<?php endforeach; ?>
<?php endif; ?>

</div>
<?php get_footer();?>