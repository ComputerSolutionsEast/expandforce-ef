//============= owl slider =============

$(document).ready(function () {
	$('.customer-logos').owlCarousel({
		loop: true,
		margin: 30,
		nav: true,
		dots: false,
		autoplay: true,
		slideSpeed: 6000,
		autoplayTimeout: 5000,
		autoplaySpeed: 6000,
		autoplayHoverPause: true,
		navText: [
			'<span aria-label="' + 'Previous' + '"><i class="far fa-chevron-left"></i></span>',
			'<span aria-label="' + 'Next' + '"><i class="far fa-chevron-right"></i></span>'
		],
		responsive: {
			0: {
				items: 2
			},
			480: {
				items: 2
			},
			690: {
				items: 3
			},
			768: {
				items: 3
			},
			960: {
				items: 4
			},
			1025: {
				items: 5
			}
		}
	});

	$('.awardThumbnailCarousel').owlCarousel({
		loop: true,
		center:true,
		margin: 15,
		nav: true,
		dots: false,
		autoplay: true,
		slideSpeed: 6000,
		autoplayTimeout: 5000,
		autoplaySpeed: 6000,
		autoplayHoverPause: true,
		navText: [
			'<span aria-label="' + 'Previous' + '"><i class="far fa-chevron-left"></i></span>',
			'<span aria-label="' + 'Next' + '"><i class="far fa-chevron-right"></i></span>'
		],
		responsive: {
			0: {
				items: 2
			},
			480: {
				items: 2
			},
			690: {
				items: 3
			},
			768: {
				items: 4
			},
			960: {
				items: 4
			},
			1025: {
				items: 6
			}
		}
	});

	$('.owl-two').owlCarousel({
		loop: false,
		margin: 0,
		nav: true,
		dots: false,
		autoplay: false,
		slideSpeed: 6000,
		autoplayTimeout: 5000,
		autoplaySpeed: 6000,
		autoplayHoverPause: true,
		navText: [
			'<span aria-label="' + 'Previous' + '"><i class="fal fa-chevron-square-left"></i></span>',
			'<span aria-label="' + 'Next' + '"><i class="fal fa-chevron-square-right"></i></span>'
		],
		responsive: {
			0: {
				items: 2
			},
			480: {
				items: 2
			},
			690: {
				items: 3
			},
			768: {
				items: 4
			},
			960: {
				items: 5
			},
			1025: {
				items: 6
			}
		}
	});

	$('.owl-three').owlCarousel({
		loop: false,
		margin: 0,
		nav: true,
		dots: false,
		autoplay: false,
		slideSpeed: 6000,
		autoplayTimeout: 5000,
		autoplaySpeed: 6000,
		autoplayHoverPause: true,
		navText: [
			'<span aria-label="' + 'Previous' + '"><i class="fal fa-chevron-square-left"></i></span>',
			'<span aria-label="' + 'Next' + '"><i class="fal fa-chevron-square-right"></i></span>'
		],
		responsive: {
			0: {
				items: 2
			},
			480: {
				items: 2
			},
			690: {
				items: 2
			},
			768: {
				items: 3
			},
			960: {
				items: 4
			},
			1025: {
				items: 5
			}
		}
	});

	$('#Testimoniallider').owlCarousel({
		loop: false,
		items: 1,
		margin: 0,
		nav: true,
		dots: false,
		autoplay: true,
		slideSpeed: 4000,
		autoplayTimeout: 7000,
		autoplaySpeed: 4000,
		autoplayHoverPause: true,
		navText: [
			'<span aria-label="' + 'Previous' + '"><i class="fal fa-chevron-square-left"></i></span>',
			'<span aria-label="' + 'Next' + '"><i class="fal fa-chevron-square-right"></i></span>'
		],
	});

	$('#nonloop').owlCarousel({
    items:4,
    margin:30,
		nav: true,
		dots: false,
		autoplay: false,
		slideSpeed: 6000,
		autoplayTimeout: 5000,
		autoplaySpeed: 6000,
		autoplayHoverPause: true,
		navText: [
			'<span aria-label="' + 'Previous' + '"><i class="fal fa-arrow-circle-left"></i></span>',
			'<span aria-label="' + 'Next' + '"><i class="fal fa-arrow-circle-right"></i></span>'
		],
    responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			690: {
				items: 3
			},
			768: {
				items: 2
			},
			960: {
				items: 3
			},
			1025: {
				items: 4
			}
		}
});



	$('.blog-slider').owlCarousel({
	    items:4,
	    margin:30,
		nav: true,
		dots: false,
		autoplay: false,
		slideSpeed: 6000,
		autoplayTimeout: 5000,
		autoplaySpeed: 6000,
		autoplayHoverPause: true,
		navText: [
			'<span aria-label="' + 'Previous' + '"><i class="fas fa-chevron-left"></i></span>',
			'<span aria-label="' + 'Next' + '"><i class="fas fa-chevron-right"></i></span>'
		],
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			690: {
				items: 2
			},
			768: {
				items: 3
			},
			960: {
				items: 4
			},
			1025: {
				items: 5
			}
		}
	});


	$('.testimonial-slider').owlCarousel({
		loop: true,
		thumbs: true,
		items: 1,
		margin: 45,
		responsiveClass: true,
		autoplayHoverPause: true,
		autoplay: true,
		slideSpeed: 1000,
		paginationSpeed: 900,
		thumbsPrerendered: true,
		autoplayTimeout: 3000,
		responsive: {
		  0: {
		    items: 1,
		    nav: false,
		  },
		  360: {
		    items: 1,
		    nav: false
		  },
		  768: {
		    items: 1,
		    nav: false,
		  },
		  1000: {
		    items: 1,
		    nav: false,
		    loop: true
		  }
		}
	});



});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/*Microsoft team*/
$(document).ready(function() {
  // Hide all panels
  let panels = $("#services__accordion > .accordion > .accordion__body").hide()

  // Hide all accordion images
      images = $("#accordion__img > img").hide();

  // Show first panel at start
  /*panels.first().show();*/

  // Show first accordion image at start
  images.first().show();

  // On click of a panel title

  $("#services__accordion .accordion  h3").click(function() {
    // The panel is not the H3, but its parent.
    let panel = $(this).parent(),
      // The panel has an attribute that will tell me which image
      //  I want to manipulate. This is because I've given the
      //  images ID's to match. Kind of brittle, but it will work.
      tabName = panel.attr("tab-name"),
      image = $("#" + tabName + "-img");

    // Slide Up all other panels
    /*panels.slideUp();*/
    images.hide();

    // Slide Down target panel, and target image.
    /*panel.find(".accordion__body").slideDown();*/
    image.show();

    return false;
  });
});

$(function() {
    $('.accordion .accordion__body').hide();
    $('.accordion h3:first').addClass('active').next().slideDown('slow');
    $('.accordion h3').click(function() {
        if($(this).next().is(':hidden')) {
            $('.accordion h3').removeClass('active').next().slideUp('slow');
            $(this).toggleClass('active').next().slideDown('slow');
        }
    });
});

$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
    	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
    	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
    	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});

$(document).ready(function(){
	$('.video-slider').owlCarousel({
	    loop:true,
	    margin:10,
	    dots:false,
	    nav:false,
	    navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
        items:1
	})
});
$(document).ready(function(){
	$('.ebook-slider').owlCarousel({
	    loop:true,
	    margin:10,
	    dots:false,
	    nav:true,
	    navText: ["<span class='fa fa-angle-left'></span>", "<span class='fa fa-angle-right'></span>"],
        items:1
	})
});

$(document).ready(function(){
	$('#demo-form').click(function(){
		$('.demo-form').show();
	})
});
