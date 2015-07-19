	<?php get_header(); ?>
	<!-- blog -->
	<div id="blog">
		<?php if(is_category()): ?>
		<h1><?php single_cat_title(); ?>の記事一覧</h1>
		<?php endif; ?>

		<?php if (have_posts()) : ?>
			<div class="entrySummary centering">
			<?php while (have_posts()) : the_post(); ?>
				<article>
					<a class="post-link" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('thumbnail200') ?>
						<?php else :?>
							<img src="<?php bloginfo('template_url'); ?>/img/nothumb.png" >
						<?php endif;?>
						<div class="post-date">
							<?php the_time('m/d'); ?>
						</div>
						<div class="post-caption">
							<h2><?php the_title_attribute(); ?></h2><br>
							<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
						</div>
					</a>
				</article>
			<?php endwhile; ?>
			</div>
			<!-- page -->
			<div id="paginationBox" class="clearfix">
				<?php if (function_exists("pagination")) {
					pagination($wp_query->max_num_pages);
				} ?>
			</div>
		<?php else : ?>
			<h2 class="title">記事が見つかりませんでした。</h2>
			<p>検索で見つかるかもしれません。</p><br />
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
	<?php get_footer(); ?>