	<!-- archive -->
	<div id="archive" class="clearfix">
		<!-- widget -->
		<?php get_sidebar('footer'); ?>
	</div>
	<!-- Category -->
	<div id="Category">
		<section>
			<h1 class="title">Category</h1>
			<p class="appTitle">カテゴリ一覧を出す</p>
		</section>
	</div>
	<!-- Author -->
	<div id="Author">
		<section class="clearfix">
			<h1 class="title">Author</h1>
			<h2><nobr>渡邊 タツアキ</nobr> <nobr>Watanabe Tatsuaki</nobr></h2>

			<img class="profile" src="http://www.gravatar.com/avatar/17d7df2ee1ecb4ddf6a0ac1261e14bf4.jpg?s=256&r=g">
			<br>
			<p>1988年仙台生まれ。</p>
			<p>仕事はFujitsuでPC開発を、</p>
			<p>趣味でWebサービスを作っています。</p>
			<p>2014年4月より育児休暇取得中です。</p>
			<br>
			<ul>
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