$(function() {

	// Preloader

	function loadData() {
	  return new Promise((resolve, reject) => {
	    // setTimeout не является частью решения
	    // Код ниже должен быть заменен на логику подходящую для решения вашей задачи
	    setTimeout(resolve, 2000);
	  })
	}

	loadData()
	  .then(() => {
	    let preloaderEl = document.getElementById('preloader');
	    preloaderEl.classList.add('hidden');
	    preloaderEl.classList.remove('visible');
	  });

	$('#nav-icon3').click(function(){
        $(this).toggleClass('open');
        $('body').toggleClass('overflow-hidden');
        if ($('nav').hasClass("grey-bg") && !$('nav').hasClass("scrolled")) {
        	$('nav').removeClass("grey-bg");
        }
        else {
        	$('nav').addClass("grey-bg");
        }
    });

    $(window).scroll(function() {
		if ($(this).scrollTop() > 1) {
			$('nav').addClass("grey-bg").addClass("scrolled");
		}
		else {
			$('nav').removeClass("grey-bg").removeClass("scrolled");
		}
    });


    // Fixed navigation

  //   $(window).scroll(function() {
		// if ($(this).scrollTop() > 550) {
		// 	$('nav').addClass("sticky");
		// }
		// else {
		// 	$('nav').removeClass("sticky");
		// }
  //   });

    // Burger

	// $('.menu-open').click(function() {
	// 	$(this).toggleClass('open');
	// 	$('.menu-collapse').toggleClass('d-none').css('order', '1');
	// 	$('.menu').toggleClass('menu-opened');
	// 	$('nav').toggleClass("grey-bg");
 //    });
    

    // Modal

    $('.call-btn_header, .call-btn_footer').click( function(e) {
    	e.preventDefault();
    	 $('#exampleModal').arcticmodal();
    })

    // Accounts Slider

    $('.sidebar-accounts__slider').slick({
    	dots: true,
    	prevArrow: '<button type="button" class="slick-prev slick-prev_accounts"><i class="fa-solid fa-chevron-left"></i></button>',
    	nextArrow: '<button type="button" class="slick-next slick-next_accounts"><i class="fa-solid fa-chevron-right"></i></button>',
    	slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 4000
    });

    // Partners Slider

    $('.partners-slider').slick({
		  dots: true,
		  prevArrow: '<button type="button" class="slick-prev slick-prev_partners"><i class="fa-solid fa-chevron-left"></i></button>',
    	nextArrow: '<button type="button" class="slick-next slick-next_partners"><i class="fa-solid fa-chevron-right"></i></button>',
			slidesToShow: 3,
			slidesToScroll: 1,
		  autoplay: true,
  		autoplaySpeed: 3000,
  		responsive: [
		    {
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});
   
});