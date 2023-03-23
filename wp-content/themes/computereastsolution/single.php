<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header();
global $post;
get_permalink( $post->ID );
?>
<section class="section-1">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-9 col-lg-9 col-sm-12">
				<div class="content">
					<h1 class="title"><?php the_title() ?></h1>
					<?php
					while(have_posts()) : the_post();
					the_content();
					endwhile; ?>
					<div class="date-line">
						<span><?php echo date('M',strtotime(get_the_date())); ?> <?php echo date('d',strtotime(get_the_date())); ?>, <?php echo date('Y',strtotime(get_the_date())); ?></span>
						<span class="pl-1 pr-1">|</span>
						<?php
						$category_detail=get_the_category();//$post->ID
						foreach($category_detail as $cd){
						echo ' <a target="_blank" href="'. get_category_link($cd->term_id) .'">' . $cd->cat_name . '</a> ';
						}
						?>
					</div>

					<div class="red-box">
						<h4>Share This Post</h4>
						<div class="social-media">
						   <a target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID );?>&title=<?php echo the_title();?>"><i class="fab fa-facebook-f dark-blue"></i></a>
                                                    <a data-toggle="tooltip" data-placement="top" title="Twitter"
                                                       href="http://twitter.com/intent/tweet?text=<?php echo the_title(); ?>&url=<?php echo get_permalink( $post->ID ); ?>"
                                                       target="_blank"><i class="fab fa-twitter light-blue"></i></a>

                                                    <a data-toggle="tooltip" data-placement="top" title="Linkedin"
                                                       href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink( $post->ID );?>&title=<?php echo the_title();?>&summary=<?php echo "Blog"; ?>&source=<?php bloginfo('url'); ?>"
                                                       target="_blank"><i class="fab fa-linkedin dark-blue"></i></a>

                                                    <a data-toggle="tooltip" data-placement="top" title="Email" href="mailto:?Subject=<?php echo the_title();?>&Body=<?php echo get_permalink( $post->ID );?>"
                                                       target="_self"><i class="far fa-envelope white"></i></a>
						</div>
					</div>

					<div class="grid-box">
						<div class="row">
							<?php
							 global $post;
							 $args = array( 'post_type'=> 'post','orderby' => 'rand' ,'order' => 'DESC' ,'posts_per_page'=>'3','date_query' => array(
									'after' => '2018-12-01'
								));
							 query_posts( $args );
							 while (have_posts()) : the_post();
							 $imgthumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
							?>
							<div class="col-md-4 col-sm-6 mb-3">
								<div class="card border-0">
									<?php if($imgthumb[0]){?>
									 <img class="card-img-top" src="<?php echo $imgthumb[0]; ?>" alt="<?php the_title(); ?>">
									<?php }else{ ?>
									 <img class="card-img-top" src="https://www.computersolutionseast.com/wp-content/uploads/2020/10/Cost-Efficiency-1-scaled-1.jpg" alt="<?php the_title(); ?>" height="300px">
									<?php } ?>
									<div class="card-body p-10">
										<a href="<?php the_permalink();?>">
											<h5 class="card-title"><?php the_title(); ?></h5>
										</a>
										<div class="date-comment">
											<span><?php echo date('M',strtotime(get_the_date())); ?> <?php echo date('d',strtotime(get_the_date())); ?>, <?php echo date('Y',strtotime(get_the_date())); ?></span>
										</div>
									</div>
								</div>
							</div>
							<?php endwhile; wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12">
				<div class="list">

					<ul class="list-group">
						<li class="list-group-item-1 active">Recent Posts</li>
						<?php
						 global $post;
						 $args = array( 'post_type'=> 'post','orderby' => 'date' ,'order' => 'DESC' ,'posts_per_page'=>'3','date_query','post__not_in' => array( $post->ID ));
						 query_posts( $args );
						 while (have_posts()) : the_post();
						?>
						<li class="list-group-item"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
						<?php endwhile; wp_reset_query(); ?>
					</ul>

					<ul class="list-group mt-3">
						<li class="list-group-item-1 active">Categories</li>
						<?php
						$categories = get_categories();
						foreach($categories as $category) {
						   echo '<li class="list-group-item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
						}
						 ?>
					</ul>

				</div>
				<div class="logo-1">
					<img src="<?php echo get_template_directory_uri()?>/assets/img/logo.svg" alt="">
				</div>
				<div class="contact">
					<p class="address">4400 N. Federal Highway, Suite 210 <br/>Boca Raton, FL 33431</p>
					<p class="address"> <i class="fa fa-phone"></i><a href="tel:9542715970">(954) 271-5970</a></p>
					<p class="address"> <i class="fa fa-envelope"></i><a href="mailto:info@expandforce.com">info@expandforce.com</a></p>
				</div>
			</div>

		</div>
	</div>
</div>
</section>
<?php
get_footer();
