
<div class="wrapper"></div>
<div class="footer">
	<div class="copyrate">
		<p>Все права защищены</p>
		<p>Кафе ДереWня, 2016 г.</p>
	</div>
	<div class="notear">
		<img src="<?php bloginfo('template_url')?>/images/notear.jpg" alt="" title="" />
		<p>Без возрастных ограничений</p>
	</div>
	<div class="soc-footer">
		<ul>
			<li><a class="soc1" href="#"></a></li>
			<li><a class="soc2" href="#"></a></li>
			<li><a class="soc3" href="#"></a></li>
			<li><a class="soc4" href="#"></a></li>
			<li><a class="soc5" href="#"></a></li>
		</ul>
	</div>
	<div class="map">
		<p><a href="#">Карта сайта</a></p>
	</div>
	<div class="rss">
		<p><a href="#"><img src="<?php bloginfo('template_url')?>/images/rss.jpg"  alt="" />RSS</a></p>
	</div>
	<div class="ones">
		<p>"1С-Битрикс - Композитный сайт"</p>
	</div>
	<div class="aliens">
		<p>Создание сайта: ALIENS.PRO</p>
		<a href="#">Информация о поекте</a>
	</div>
</div>



<!-- jQuery -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript" >window.jQuery || document.write('<script src="<?php bloginfo('template_url')?>/js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script type="text/javascript" defer src="<?php bloginfo('template_url')?>/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
	  $( "#accordion" ).accordion();
	  $( "#tabs" ).tabs();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/shCore.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/shBrushXml.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="<?php bloginfo('template_url')?>/js/jquery.easing.js"></script>
  <script src="<?php bloginfo('template_url')?>/js/jquery.mousewheel.js"></script>
  <script type="text/javascript" defer src="<?php bloginfo('template_url')?>/js/demo.js"></script>
  <script type="text/javascript"  src="<?php bloginfo('template_url')?>/js/jquery-ui-1.9.2.custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>