<?php get_header(); ?>
	<!-- Entry -->
	<div id="entryContent">
		<article class="centering">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<header>
						<div id="entryTitle"><?php the_title(); ?></div>
						<ul id="entryMeta" class="clearfix">
							<li><?php the_time('Y年m月j日') ?></li>
							<li>カテゴリー： <?php the_category(', ') ?></li>
						</ul>
					</header>
					<div id="entryBody">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>	
		</article>
			<?php else : ?>
				<h2 class="title">記事が見つかりませんでした。</h2>
				<p>検索で見つかるかもしれません。</p><br />
				<?php get_search_form(); ?>
			<?php endif; ?>
	</div>
	<?php get_footer(); ?>