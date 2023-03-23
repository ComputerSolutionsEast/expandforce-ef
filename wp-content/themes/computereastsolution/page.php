<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<section class="section-1">
	<div class="container-fluid">
		<div class="content">
					<h1 class="title"><?php the_title() ?></h1>
					<?php
					while(have_posts()) : the_post();
					the_content();
					endwhile; ?>					
			</div>
	</div>
</div>
</section>

<?php
get_footer();
