	<!-- archive -->
	<div id="archive" class="clearfix">
		<?php get_sidebar('footer'); ?>
	</div>
	<!-- app -->
	<div id="app">
		<section>
			<h1 class="title">App</h1>
			<p class="appTitle">feedleaf</p>
			<a href="https://itunes.apple.com/us/app/feedleaf/id719049317"><img src="<?php bloginfo('template_url'); ?>/img/feedleaf_150.png"></a>
		</section>
	</div>
	<!-- about -->
	<div id="about">
		<section class="clearfix">
			<h1 class="title">About</h1>
			<img src="<?php bloginfo('template_url'); ?>/img/profile_200.png">
			<p>クズなりにコードを学んでいます。何かWEBサービスをつくろうと模索中。最終目標はアングラー兼エンジニアです。</p>
		</section>
	</div>
	<!-- contact -->
	<div id="contact">
		<section class="centering">
			<h1 class="title">Contact</h1>
			<ul class="centering clearfix">
				<li><a href="https://twitter.com/CHUCKER34"><img src="<?php bloginfo('template_url'); ?>/img/twitter_160.png"></a></li>
				<li><a href="https://www.facebook.com/chucker34"><img src="<?php bloginfo('template_url'); ?>/img/facebook_160.png"></a></li>
				<li><img src="<?php bloginfo('template_url'); ?>/img/mail_160.png"></li>
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