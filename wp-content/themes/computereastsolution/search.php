<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="number" style="margin-top:20px">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12">
				<?php if (have_posts()) : ?>
					<h1 class="page-title">
						<?php
						/* translators: Search query. */
						printf(__('Search Results for: %s', 'twentyseventeen'), '<span>' . get_search_query() . '</span>');
						?>
					</h1>
				<?php else : ?>
					<h1 class="page-title"><?php _e('Nothing Found', 'twentyseventeen'); ?></h1>
				<?php endif; ?>
				<div class="sub-number">
					<ul>
						<?php
						if (have_posts()) :
							while (have_posts()) :
								the_post();
						?>
								<li>
									<div class="list-content">
										<h4><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
									</div>
								</li>
							<?php endwhile; // End the loop.

							the_posts_pagination(
								array(
									'prev_text'          => twentyseventeen_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'twentyseventeen') . '</span>',
									'next_text'          => '<span class="screen-reader-text">' . __('Next page', 'twentyseventeen') . '</span>' . twentyseventeen_get_svg(array('icon' => 'arrow-right')),
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentyseventeen') . ' </span>',
								)
							);
						else :
							?>
							<p><?php _e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen'); ?></p>
						<?php
						endif;
						?>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<aside class="blog-features__sidebar" role="complimentary" style="width:auto">
					<section class="blog-features__list">
						<h3 class="blog-features__heading">Most Recent</h3>
						<?php
						global $post;
						$args = array('post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '3', 'date_query', 'post__not_in' => array($post->ID));
						query_posts($args);
						while (have_posts()) : the_post();
						?>
							<article class="blog-card blog-card--compact ">
								<div class="blog-card__content">
									<h3 class="blog-card__content-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="blog-card__meta">
										<?php
										$category_detail = get_the_category(get_the_ID()); //$post->ID
										foreach ($category_detail as $cd) {
											echo ' <a target="_blank" href="' . get_category_link($cd->term_id) . '" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
										}
										?>
									</div>
								</div>
							</article>
						<?php endwhile;
						wp_reset_query(); ?>
					</section>
					<section class="blog-features__list">
						<h3 class="blog-features__heading">Editor's Picks</h3>
						<?php
						global $post;
						$args = array('post_type' => 'post', 'category_name'  => 'editor-choice', 'orderby' => 'rand', 'order' => 'DESC', 'posts_per_page' => '3', 'date_query');
						query_posts($args);
						while (have_posts()) : the_post();
						?>
							<article class="blog-card blog-card--compact ">
								<div class="blog-card__content">
									<h3 class="blog-card__content-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="blog-card__meta">
										<?php
										$category_detail = get_the_category(get_the_ID()); //$post->ID
										foreach ($category_detail as $cd) {
											echo ' <a target="_blank" href="' . get_category_link($cd->term_id) . '" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
										}
										?>
									</div>
								</div>
							</article>
						<?php endwhile;
						wp_reset_query(); ?>
					</section>
				</aside>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
