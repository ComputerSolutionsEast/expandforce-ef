<?php
/*
Template Name:  FAQ
*/
get_header();
?>
<!-- Start Inner Banner -->
<div id="InnerBanner" class="CommonBanner"> <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	<div class="d-flex align-items-center w-100 h-100 CommonBannerContent">
		<div class="container">
			<h1 class="text-white"><?php the_title(); ?></h1>
			<!-- <p class="lead text-white"><?php the_field('banner_content'); ?></p> -->
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
<section class="faq">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="bs-example">
          <div class="accordion" id="accordionExample">
						<?php if(have_rows('question_and_answe')){
							$i=0;
							while(have_rows('question_and_answe')): the_row('question_and_answe');
						?>
            <div class="card">
              <div class="card-header" id="heading<?php echo $i; ?>">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>"><i
                    class="fa fa-plus"></i> <?php the_sub_field('question'); ?></button>
              </div>
              <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
                <div class="card-body">
                  <?php the_sub_field('answer'); ?>
                </div>
              </div>
            </div>
						<?php $i++; endwhile; } ?>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="form">
					<?php echo do_shortcode('[contact-form-7 id="19030" title="Our technical advisers are just a click away. Fill out the form below to get started!"]'); ?>
      	</div>
      </div>
    </div>
  </div>
</section>
<!--Start pageNavigator-->
<div class="pageNavigator mt50 mb50">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<?php
				$backto = get_field('back_to_page');
				$goto = get_field('go_to_page');
				?>
				<div class="d-flex flex-wrap pageNavigatorWrapper"> <a href="<?php the_permalink($backto) ?>" class="btn btn-md btn-outline-primary rounded-pill"> <i class="fas fa-arrow-left mr-3"></i> Back to <?php echo get_the_title( $backto ); ?>
				 </a> <a href="<?php the_permalink($goto) ?>" class="btn btn-md btn-outline-primary rounded-pill ml-auto"> Go to <?php echo get_the_title( $goto ); ?> <i class="fas fa-arrow-right ml-3"></i> </a></div>
			</div>
		</div>
	</div>
</div>

<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
"@type": "Question",
"name": "Are my files and conversations in Microsoft Teams Secure?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Microsoft Teams is built on the Office 365 hyper-scale, enterprise-grade cloud, delivering the advanced security and compliance capabilities. Data is encrypted in transit and at rest."
}
},
{
"@type": "Question",
"name": "What is MS Teams?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Microsoft Teams is cloud-based team collaboration software that is part of the Office 365 suite of applications. The core capabilities in Microsoft Teams include business messaging, calling, video meetings and file sharing. Businesses of all sizes can use Teams."
}
},
{
"@type": "Question",
"name": "What can a Microsoft team owner do?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Team owners can add and remove members. They can edit or delete a team, and to change the team pictur, Set team members� permissions for channels, tabs, and connectors,Control @ [team name] mentions that will notify everyone on the team,Allow @ [channel name] mentions, which will notify members who�ve favorited the channel,Allow usage of GIFs, stickers, and memes."
}
},
{
"@type": "Question",
"name": "Which browsers Does MS Teams support?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Internet Explorer 11, Microsoft Edge, The Latest Version of chrome, The latest version of Firefox."
}
},
{
"@type": "Question",
"name": "What are Microsoft Teams meetings?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Team meetings are a quick and easy way for people in a channel to go from a conversation to an impromptu meeting."
}
},
{
"@type": "Question",
"name": "How is MS Teams Different?",
"acceptedAnswer": {
"@type": "Answer",
"text": "First and foremost, Microsoft Teams provides a modern conversation experience for today�s teams. Microsoft Teams supports not only persistent but also threaded chats to keep everyone engaged. Team conversations are, by default, visible to the entire team, but there is, of course, the ability for private discussions."
}
}

]
}
</script>

<?php get_footer();?>
