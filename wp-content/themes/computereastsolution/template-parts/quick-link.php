<?php

/*
Template Name:  Quick Links
*/

get_header(); ?>

<section class="number" style="margin-top:20px">
	<div class="container-fluid">
		<h1><?php the_title()?></h1>
		<div class="row">
						<?php
						$alphabets = array(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z);
						foreach($alphabets as $first_char){
							//display posts
							global $wpdb;
							$posts_result = $wpdb->get_results("SELECT ID,post_title FROM `cse_posts` where SUBSTR(post_title,1,1) = '$first_char' and (post_type = 'post' OR post_type = 'page') and post_status = 'publish'");
							?>
								<?php if ($posts_result) {?>
								<div class="col-md-12 sitemap_heading"> <h2 class="uppercase" style="text-transform:capitalize"><?php echo $first_char; ?></h2></div>
								 <p id="<?php echo $first_char; ?>"> </p>
										<?php foreach($posts_result as $post){ ?>
											<div class="col-md-6 sitemap_list">
												<i class="fa fa-arrow-right fa-fw" aria-hidden="true"></i><a href="<?php echo get_permalink($post->ID); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a>
											</div>
								<?php } ?>
						<?php }?>
							<!-- <li>
								<div class="list-content">
									<h4><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<?php the_excerpt(); ?>
								</div>
							</li> -->
						<?php }?>
		</div>
	</div>
</section>
<?php
get_footer();
?>
