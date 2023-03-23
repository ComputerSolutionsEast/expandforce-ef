<?php
/*
Template Name:  Blogs
*/
get_header();
?>
<!-- Start Inner Banner -->
<div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
		<div class="container">
			<h1 class="text-white"><?php the_title(); ?></h1>
		</div>
	</div>
</div>
<!--End Inner Banner-->
<!--Start Breadcrumb-->
<nav aria-label="breadcrumb" class="BreadCrumbWrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo get_home_url() ?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</div>
</nav>
<!--End Breadcrumb-->

<!--Start main Part-->
<main class="main">
	<div class="categoryHighLights mt-4">
		<div class="container-fluid">
			<div class="blog-features">
				<div class="blog-features__main">
					<?php
					 $args = array(
						 'post_type'=> 'post',
						 'orderby' => 'post_date',
						 'posts_per_page'=>'1',
						 'paged' => get_query_var('paged')
					 );
					 $i = 1;
					 global $more;
					 query_posts( $args );
					 while (have_posts()) : the_post();
					 $more = 0;
					 $postId =  get_the_ID();
					 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' );
					?>
					<div class="blog-card--featured">
						<figure>
								<a href="<?php the_permalink();?>">
										<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
								</a>
						</figure>
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
					</div>
					<?php $i++; endwhile; ?>
					<aside class="blog-features__sidebar" role="complimentary">
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
			<div class="blog-post-listing">
				<?php
				 $args = array(
					 'post_type'=> 'post',
					 'orderby' => 'rand',
					 'posts_per_page'=>'5',
					 'paged' => get_query_var('paged')
				 );
				 $i = 1;
				 global $more;
				 query_posts( $args );
				 while (have_posts()) : the_post();
				 $more = 0;
				 $postId =  get_the_ID();
				 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' );
				?>
						 <?php if($i == 1){ ?>
							<div class="blog-card blog-card--one-third">
								<figure>
									<a href="<?php the_permalink(); ?>">
										<?php if($image != ''){?>
										<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
										<?php }else{ ?>
										<img src="https://www.computersolutionseast.com/wp-content/uploads/2020/10/Untitled-design-69.jpg" alt="<?php the_title(); ?>">
										<?php } ?>
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
										echo ' <a target="_blank" href="'. get_category_link($cd->term_id) .'" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
										}
										?>
									</div>
								</div>
							</div>
							<?php }else if($i == 2){ ?>
							<div class="blog-card blog-card--one-third ">
								<figure>
									<a href="<?php the_permalink(); ?>">
										<?php if($image != ''){?>
										<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
										<?php }else{ ?>
										<img src="https://www.computersolutionseast.com/wp-content/uploads/2020/10/Untitled-design-69.jpg" alt="<?php the_title(); ?>">
										<?php } ?>
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
										echo ' <a target="_blank" href="'. get_category_link($cd->term_id) .'" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
										}
										?>
									</div>
								</div>
							</div>
							<div class="blog-card blog-card--one-third blog-subscribe-form">
								<div class="blog-form-centered">
									<div class="fusion-column-content">
										<div class="fusion-title title fusion-sep-none fusion-title-center fusion-title-size-three fusion-border-below-title">
											<h3 class="title-heading-center" >Subscribe to Our Blog</h3>
										</div>
										<div class="fusion-text">
											<p>Stay up to date with the latest marketing, sales, and service tips and news.</p>
										</div>
										<div class="fusion-widget-area fusion-widget-area-1 fusion-content-widget-area">
											<div class="">
												<div class="textwidget custom-html-widget">
													<div role="form" class="wpcf7" id="wpcf7-f16596-p6965-o1" lang="en-US" dir="ltr">
														<?php echo do_shortcode('[contact-form-7 id="18724" title="Blog Page Subscription"]') ?>
												 </div>
											 </div>
										 </div>
									 </div>
								 </div>
							 </div>
							</div>						

							<?php }else if($i == 3){ ?>
							<div class="blog-card blog-card--two-thirds no-margin">
								<figure>
									<a href="<?php the_permalink(); ?>">
										<?php if($image != ''){?>
										<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
										<?php }else{ ?>
										<img src="https://www.computersolutionseast.com/wp-content/uploads/2020/10/Untitled-design-69.jpg" alt="<?php the_title(); ?>">
										<?php } ?>
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
										echo ' <a target="_blank" href="'. get_category_link($cd->term_id) .'" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
										}
										?>
									</div>
								</div>
							</div>
							<?php }else if($i == 4){ ?>
							<div class="blog-card blog-card--two-thirds blog-card--custom-size">
								<figure>
									<a href="<?php the_permalink(); ?>">
										<?php if($image != ''){?>
										<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
										<?php }else{ ?>
										<img src="https://www.computersolutionseast.com/wp-content/uploads/2020/10/Untitled-design-69.jpg" alt="<?php the_title(); ?>">
										<?php } ?>
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
										echo ' <a target="_blank" href="'. get_category_link($cd->term_id) .'" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
										}
										?>
									</div>
								</div>
							</div>
							<?php }else if($i == 5){ ?>
							<div class="blog-card blog-card--one-third no-margin">
								<figure>
									<a href="<?php the_permalink(); ?>">
										<?php if($image != ''){?>
										<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
										<?php }else{ ?>
										<img src="https://www.computersolutionseast.com/wp-content/uploads/2020/10/Untitled-design-69.jpg" alt="<?php the_title(); ?>">
										<?php } ?>
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
										echo ' <a target="_blank" href="'. get_category_link($cd->term_id) .'" class="blog-card__blog-link">' . $cd->cat_name . '</a> ';
										}
										?>
									</div>
								</div>
							</div>
						<?php } ?>
						<?php $i++; endwhile; ?>
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
							<h3 class="blog-footer-title">ARCHIVES</h3>
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<style>
.widget-title {
	display: none;
}
</style>
<!--End main Part-->

<?php get_footer();?>
