
<div class="wrapper"></div>
<div class="footer">
	<div class="copyrate">
		<p>Все права защищены</p>
		<p>Кафе ДереWня, <?php echo date("o"); ?> г.</p>
	</div>
	<div class="notear">
		<img src="<?php bloginfo('template_url')?>/images/notear.jpg" alt="" title="" />
		<p>Без возрастных ограничений</p>
	</div>
	<div class="soc-footer">
		<ul>
			<?php if(!dynamic_sidebar('kad_soc')): ?>
			<li><a class="soc1" href="#">Использвать текстовый виджет</a></li>
			<?php endif; ?>
		</ul>
	</div>
	<div class="map">
		<p><a href="#">Карта сайта</a></p>
	</div>
	<div class="rss">
		<p><a href="/feed/"><img src="<?php bloginfo('template_url')?>/images/rss.jpg"  alt="" />RSS</a></p>
	</div>
	<div class="ones">
		<p>"1С-Битрикс - Композитный сайт"</p>
	</div>
	<div class="aliens">
		<p>Создание сайта: ALIENS.PRO</p>
		<a href="#">Информация о поекте</a>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>