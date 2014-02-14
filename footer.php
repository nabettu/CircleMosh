	<!-- archive -->
	<div id="archive" class="clearfix">
		<!-- widget -->
		<?php get_sidebar('footer'); ?>
	</div>
	<!-- app -->
	<div id="app">
		<section>
			<h1 class="title">App</h1>
			<p class="appTitle">your app</p>
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/img/profile_200.png"></a>
		</section>
	</div>
	<!-- about -->
	<div id="about">
		<section class="clearfix">
			<h1 class="title">About</h1>
			<img src="<?php bloginfo('template_url'); ?>/img/profile_200.png">
			<p>自己紹介をどうぞ。</p>
		</section>
	</div>
	<!-- contact -->
	<div id="contact">
		<section class="centering">
			<h1 class="title">Contact</h1>
			<ul class="centering clearfix">
				<li><a href="https://www.facebook.com/chucker34"><img src="<?php bloginfo('template_url'); ?>/img/twitter_160.png"></a></li>
				<li><a href="https://www.facebook.com/chucker34"><img src="<?php bloginfo('template_url'); ?>/img/facebook_160.png"></a></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/mail_160.png"></li>
			</ul>
		</section>
	</div>
	<!-- footer -->
	<footer id="mainFooter">
		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
	</footer>
</div>
<?php wp_footer(); ?> 
</body>
</html>