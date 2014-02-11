	<!-- archive -->
	<div id="archive" class="clearfix">
		<?php get_sidebar('footer'); ?>
	</div>
	<!-- app -->
	<div id="app">
		<section>
			<h1 class="title">App</h1>
			<p class="appTitle">feedleaf</p>
			<img src="<?php bloginfo('template_url'); ?>/img/hatena_feedleaf_icon_150.png">
		</section>
	</div>
	<!-- about -->
	<div id="about">
		<section class="clearfix">
			<h1 class="title">About</h1>
			<img src="<?php bloginfo('template_url'); ?>/img/profile_200.png">
			<p>ただのクズです。ただのクズです。ただのクズです。ただのクズです。ただのクズです。ただのクズです。ただのクズです。ただのクズです。</p>
		</section>
	</div>
	<!-- contact -->
	<div id="contact">
		<section class="centering">
			<h1 class="title">Contact</h1>
			<ul class="centering clearfix">
				<li><img src="<?php bloginfo('template_url'); ?>/img/twitter-icon.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/fb-icon.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/206.png"></li>
<!-- 				<li><img src="img/206.png"></li> -->
			</ul>
		</section>
	</div>
	<!-- footer -->
	<footer id="mainFooter">
		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</a></p>
	</footer>
</div>
<?php wp_footer(); ?> 
</body>
</html>