<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header();?>
<main class="main">
	<div class="categoryHighLights mt-4">
		<div class="container-fluid">
			<div class="blog-features">
				<div class="row">
					<div class="col-sm-8">
						<div class="blog-post-listing">
							<h1><?php the_archive_title() ?></h1>
							<div class="row">
								<?php
								if ( have_posts() ) :
									?>
									<?php
									$i = 1;
									while ( have_posts() ) :
										the_post();
										?>
									<?php if($i == 1){ ?>
										<div class="col-sm-12">
											<div class="blog-card--featured" style="width:auto">
												<div class="blog-card blog-card--one-third" style="width:auto;margin:0 0 1rem 0">
													<figure style="padding-bottom:50%;">
														<a href="<?php the_permalink(); ?>">
															<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
														</a>
													</figure>
													<div class="blog-card__content">
														<h3 class="blog-card__content-title">
															<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
														</h3>
														<div class="blog-card__meta">
															<?php
															$category_detail=get_the_category(get_the_ID());//$post->ID
															foreach($category_detail as $cd){
																echo ' <a href="'. get_category_link($cd->term_id) .'" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
															}
															?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php }else { ?>
											<div class="col-sm-6">
												<div class="blog-card blog-card--one-third" style="width:auto">
													<figure>
														<a href="<?php the_permalink(); ?>">
															<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
														</a>
													</figure>
													<div class="blog-card__content">
														<h3 class="blog-card__content-title blog-extra-responsive">
															<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
														</h3>
														<div class="blog-card__meta">
															<?php
															$category_detail=get_the_category(get_the_ID());//$post->ID
															foreach($category_detail as $cd){
																echo ' <a href="'. get_category_link($cd->term_id) .'" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
															}
															?>
														</div>
													</div>
												</div>
											</div>
											<?php } ?>
									<?php $i++; endwhile;

									the_posts_pagination(
										array(
											'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
											'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
											'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
										)
									);
								else :
								endif;
								?>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<aside class="blog-features__sidebar" role="complimentary" style="width:auto">
							<section class="blog-features__list">
								<h3 class="blog-features__heading">Most Recent</h3>
								<?php
								 global $post;
								 $args = array( 'post_type'=> 'post','orderby' => 'date' ,'order' => 'DESC' ,'posts_per_page'=>'3','date_query','post__not_in' => array( $post->ID ));
								 query_posts( $args );
								 while (have_posts()) : the_post();
								?>
								<article class="blog-card blog-card--compact ">
									<div class="blog-card__content">
										<h3 class="blog-card__content-title">
											<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
										</h3>
										<div class="blog-card__meta">
										<?php
										$category_detail=get_the_category(get_the_ID());//$post->ID
										foreach($category_detail as $cd){
										echo ' <a target="_blank" href="'. get_category_link($cd->term_id) .'" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
										}
										?>
										</div>
									</div>
								</article>
								<?php endwhile; wp_reset_query(); ?>
							</section>
							<section class="blog-features__list">
								<h3 class="blog-features__heading">Editor's Picks</h3>
								<?php
								 global $post;
								 $args = array( 'post_type'=> 'post','category_name'  => 'cloudshore','orderby' => 'rand' ,'order' => 'DESC' ,'posts_per_page'=>'3','date_query');
								 query_posts( $args );
								 while (have_posts()) : the_post();
								?>
								<article class="blog-card blog-card--compact ">
									<div class="blog-card__content">
										<h3 class="blog-card__content-title">
											<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
										</h3>
										<div class="blog-card__meta">
											<?php
											$category_detail=get_the_category(get_the_ID());//$post->ID
											foreach($category_detail as $cd){
											echo ' <a target="_blank" href="'. get_category_link($cd->term_id) .'" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
											}
											?>
										</div>
									</div>
								</article>
								<?php endwhile; wp_reset_query(); ?>
							</section>
						</aside>
					</div>
				</div>
			</div>
			<div class="blog-logo">
				<img src="<?php echo get_field('last_section_image',17950) ?>" alt="<?php echo get_field('image_title',17950) ?>">
				<div class="blog-logo-title"><?php echo get_field('image_title',17950) ?></div>
			</div>
			<div class="blog-footer">
				<div class="row">
					<div class="col-lg-10">
						<div class="blog-footer-list">
							<h3 class="blog-footer-title">CATEGORIES</h3>
							<ul class="blog-footer-links">
								<div class="row">
										<?php
										$categories = get_categories();
										foreach($categories as $category) {
										   echo '<div class="col-lg-4"><li class="cat-item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li></div>';
										}
										 ?>
								</div>
							</ul>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="blog-footer-list">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
