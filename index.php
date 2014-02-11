	<?php get_header(); ?>
	<!-- blog -->
	<div id="blog">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article>
					<header>
						<h1 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?></a></h1>
					</header>
					<div class="entrySummary centering">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<?php endif;?>
						<p><?php the_content(); ?></p>
						<ul class="summaryMeta clearfix">
							<li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">続きを読む</a></li>
							<li>カテゴリー： <?php the_category(', ') ?></li>
							<li>タグ： <?php the_tags('', ', '); ?></li>
						</ul>
					</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h2 class="title">記事が見つかりませんでした。</h2>
			<p>検索で見つかるかもしれません。</p><br />
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
	<!-- page -->
	<div class='wp-pagenavi'>
		（ページ送りスペース）
	</div>
	<?php get_footer(); ?>