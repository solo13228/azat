function scrollto_init(){
	var offset = $('header').height();
	$('a[href^="#"]:not([data-toggle], [data-slide], a[href^="#modal-"], a[href^="#modals-"])').click(function(){
		var speed = 1000;
		var href = $(this).attr('href');
		if(href == '#'){
			href = $('header + section');
			speed = 500;
		}
		$(document).scrollTo(href, speed, 0);
		return false;
	});
}
function scroll(){
	$(document).scroll(function(){
	    var scroll = $(document).scrollTop();
	    
		if (scroll > 300) {
			$('.scroll-to-top').addClass('d-block');
		} else {
			$('.scroll-to-top').removeClass('d-block');
		}
	});
}
function catalog_list(){
	$('i.icon.plus').click(function() {
		 $("li.active_ids").removeClass('active_ids');
		this_li = $(this).parent('li');
		lvl_data = this_li.attr('lvl_data');
		lvl_data = parseInt(lvl_data);
		lvl_data_plus = lvl_data + 1;
		lvl_data_minus = lvl_data - 1;

		$('.catalog_list a.lvl-01').removeClass('hover');
		$('.catalog_list li').removeClass('hover');
		this_li.addClass('hover');
		this_li.find('a.lvl-01').addClass('hover');

		$('.catalog_list ul[lvl_data='+lvl_data_plus+']').removeClass('active');
		$('.catalog_list li[lvl_data='+(lvl_data)+'] i.plus').removeClass('d-none');
		$('.catalog_list li[lvl_data='+(lvl_data)+'] i.minus').addClass('d-none');
		$('.catalog_list li[lvl_data='+(lvl_data)+'] ul').removeClass('active');

		this_li.children('i.minus').removeClass('d-none');
		$(this).addClass('d-none');
		this_li.children('ul[lvl_data="'+lvl_data_plus+'"]').addClass('active');
		this_li.children('ul').each(function() {
			$(this).attr('data_height',$(this).height());
			ul_height = $(this).attr('data_height');
			$(this).height('0px');
			$(this).height(ul_height);
					
			setTimeout(	 function ul_height_auto_in(){
				this_li.children('ul').height('auto');
			}, 1100);
		});
	});

	$('i.icon.minus').click(function() {
		this_li = $(this).parent('li');
		this_li.children('i.plus').removeClass('d-none');
		$(this).addClass('d-none');

		this_li.removeClass('hover');
		this_li.find('a.lvl-01').removeClass('hover');

		this_li.children('ul').each(function() {
			$(this).attr('data_height',$(this).height());
			ul_height = $(this).attr('data_height');
			$(this).height(ul_height);
			$(this).height('0px');
					
			setTimeout(	 function ul_height_auto_out(){
				this_li.children('ul').height('auto');
				this_li.children('ul').removeClass('active');
			}, 1100);
		
		});
	});
} 
function tab_services(){
	$('.tab-services .btn-box .item').click(function() {
		item_data = $(this).attr('item-data');
		$('.tab-services .btn-box .item').removeClass('active');
		$('.tab-services .info-block-box .item').removeClass('active').addClass('d-none');
		$(this).addClass('active');
		$('.tab-services .info-block-box .item[block-data="'+item_data+'"]').removeClass('d-none').addClass('active');
	});
}
/*function services_price(){
	$('.price-box .item-price').click(function() {
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(this).children('.price-desc').addClass('d-none');
		} else { 
			$(this).addClass('active');
			$(this).children('.price-desc').removeClass('d-none');
		}
	});
}*/
function accordion(){
	$('.accordion-head:not(.not-desc)').click(function() {
		
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		

			$(this).children('.accordion-body').removeClass('mt-3');
			$(this).children('.accordion-body').height('0px');
		
			body_h = $(this).children('.accordion-body').height();
			body_box = $(this).children('.accordion-body');
			setTimeout(function body_tick() {
			 	body_box.addClass('d-none');
				body_box.height('auto');
				body_box.addClass('mt-3');
			}, 2200);


			
			$(this).children('.body').children('.accordion-body-2').height('94px');
		
			body_2_h = $(this).children('.body').children('.accordion-body-2').height();

			body_2_box = $(this).children('.body').children('.accordion-body-2');
			setTimeout(function body_tick() {
				body_2_box.attr('style','');
				
			}, 1800);
			
			$(this).children('.body').children('.accordion-body-1').removeClass('d-none');
			$(this).children('.body').children('.accordion-body-2').addClass('d-none');

			
		} else { 
			$(this).addClass('active');


			$(this).children('.accordion-body').removeClass('mt-3');
			$(this).children('.accordion-body').removeClass('d-none');

			body_h = $(this).children('.accordion-body').height();
			
			$(this).children('.accordion-body').height('0px');
			$(this).children('.accordion-body').addClass('mt-3');
			$(this).children('.accordion-body').height(body_h);



			
			$(this).children('.body').children('.accordion-body-2').removeClass('d-none');

			body_2_h = $(this).children('.body').children('.accordion-body-2').height();
			$(this).children('.body').children('.accordion-body-2').height('94px');
			
			$(this).children('.body').children('.accordion-body-2').height(body_2_h);



			$(this).children('.body').children('.accordion-body-1').addClass('d-none');
			$(this).children('.body').children('.accordion-body-2').removeClass('d-none');

			
		}
	});
}


function rating_starts(){
	$('.stars i').hover( function(event){
		stars_lvl_hover = $(this).attr('lvl_data');
		stars_lvl_hover = parseInt(stars_lvl_hover)+1;

		for (var i = stars_lvl_hover; i < 6; i++) {
			$(this).parent('.stars').children('i[lvl_data="'+i+'"]').removeClass('hover');	
		}
		for (var i =1; i < stars_lvl_hover; i++) {
			$(this).parent('.stars').children('i[lvl_data="'+i+'"]').addClass('hover');	
		}
		
	},
	function(event){
		$(this).parent('.stars').children('i').removeClass('hover');	
	});
	$('.stars i').click(function() {
		stars_lvl = $(this).attr('lvl_data');
		stars_lvl = parseInt(stars_lvl)+1;

		for (var i =1; i < stars_lvl; i++) {
			$(this).parent('.stars').children('i[lvl_data="'+i+'"]').addClass('hover_star');	
		}

	});
	$('.stars i').click(function() {
		stars_lvl = $(this).attr('lvl_data');
		stars_lvl = parseInt(stars_lvl)+1;

		for (var i =1; i < stars_lvl; i++) {
			$(this).parent('.stars').children('i[lvl_data="'+i+'"]').addClass('hover_star');	
		}

	});
}
$('.note-terms label').addClass('checked');
function terms_init(){
	$('.note-terms [type="checkbox"]').on('change', function(e){
		var $this = $(this);
		var checked = $this.prop('checked');
		var $submit = $this.parents('form').find('[type="submit"]');
		var $confirm = $this.find('[name="confirm"]').val();
		if(checked){
			$this.parents('form').find('label').addClass('checked');
			$submit.prop('disabled', false);
			//return true;
		}
		/*if(!confirm($confirm)){
			$this.prop('checked', true);
			$this.parents('form').find('label').addClass('checked');
		}
		else{
			$this.parents('form').find('label').removeClass('checked');
			$submit.prop('disabled', true);
		}*/
	});
} 
terms_init();
scroll();
scrollto_init();
catalog_list();
tab_services();
//services_price();
accordion();
rating_starts();
(function($) {
	
	"use strict";
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}
	}


	//Submenu Dropdown Toggle
	if($('.main-header li.dropdown ul').length){
		$('.main-header li.dropdown').append('<div class="dropdown-btn"><span class="icon icon-chevron-down"></span></div>');
		
		//Dropdown Button
		$('.main-header li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
		
		//Disable dropdown parent link
		$('.main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}

	
	//Hidden Sidebar
	if ($('.hidden-bar').length) {
		var hiddenBar = $('.hidden-bar');
		var hiddenBarOpener = $('.nav-toggler');
		var hiddenBarCloser = $('.hidden-bar-closer');
		$('.hidden-bar-wrapper').mCustomScrollbar();
		
		//Show Sidebar
		hiddenBarOpener.on('click', function () {
			hiddenBar.addClass('visible-sidebar');
		});
		
		//Hide Sidebar
		hiddenBarCloser.on('click', function () {
			hiddenBar.removeClass('visible-sidebar');
		});
	}
	
	
	// Paroller
	if($('.paroller').length){
		$('.paroller').paroller();
	}
	
	
	//Contact Page / Locations Tabs List Text Toggle Script
	if($('.department-page-section .network-tabs .tab-btns .our-branches').length){
		$('.department-page-section .network-tabs .tab-btns .our-branches .tab-btn').on('click', function(e) {
			e.preventDefault();
			var targetText = $(this).attr('data-toggle-text');
			var targetTextBox = $('.department-page-section .network-tabs .tab-btns .our-branches .toggle-text');
			
			$(targetTextBox).text(targetText);
		});
	}
	
	//Contact Page / Locations Tabs List Text Toggle Script
	if($('.department-page-section .network-tabs .tab-btns .our-branches').length){
		$('.department-page-section .network-tabs .tab-btns .our-branches .tab-btn').on('click', function(e) {
			e.preventDefault();
			var targetText = $(this).attr('data-toggle-text-2');
			var targetTextBox = $('.department-page-section .network-tabs .tab-btns .our-branches .toggle-text-2');
			
			$(targetTextBox).text(targetText);
		});
	}
	
	
	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}
	
	
	//Hidden Bar Menu Config
	function hiddenBarMenuConfig() {
		var menuWrap = $('.hidden-bar .side-menu');
		// appending expander button
		menuWrap.find('.dropdown').children('a').append(function () {
			return '<button type="button" class="btn expander"><i class="icon  icon-chevron-right"></i></button>';
		});
		// hidding submenu
		menuWrap.find('.dropdown').children('ul').hide();
		// toggling child ul
		menuWrap.find('.btn.expander').each(function () {
			$(this).on('click', function () {
				$(this).parent() // return parent of .btn.expander (a)
					.parent() // return parent of a (li)
						.children('ul').slideToggle();

				// adding class to expander container
				$(this).parent().toggleClass('current');
				// toggling arrow of expander
				$(this).find('i').toggleClass('fa-angle-right fa-angle-down');

				return false;

			});
		});
	}

	hiddenBarMenuConfig();
	

	//Banner Carousel
	if ($('.banner-carousel').length) {
		$('.banner-carousel').owlCarousel({
			//animateOut: 'slideOutUp',
    		//animateIn: 'fadeDown',
			loop:true,
			margin:0,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: true,
			autoplay: true,
			autoplayTimeout:10000,
			navText: [ '<span class="icon icon-chevron-left"></span>', '<span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1024:{
					items:1
				},
			}
		});    		
	}
	
	
	
	//Banner Carousel Two
	if ($('.banner-carousel-two').length) {
		$('.banner-carousel-two').owlCarousel({

			loop:true,
			margin:0,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: false,
			autoplay: true,
			autoplayTimeout:10000,
			navText: [ '<span class="icon icon-chevron-left"></span> Prev', 'Next <span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1024:{
					items:1
				},
			}
		});    		
	}

	//Team Carousel
	if ($('.team-carousel').length) {
		$('.team-carousel').owlCarousel({

			loop:true,
			margin:0,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: false,
			autoplay: true,
			autoplayTimeout:10000,
			navText: [ '<span class="icon icon-chevron-left"></span>' ,  '<span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				},
				1200:{
					items:4
				}
			}
		});    		
	}
	if ($('.team-carousel-three').length) {
		$('.team-carousel-three').owlCarousel({

			loop:true,
			margin:0,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: false,
			autoplay: true,
			autoplayTimeout:10000,
			mouseDrag: false,
			touchDrag: false,
			navText: [ '<span class="icon icon-chevron-left"></span>' ,  '<span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}
	if ($('.team-carousel-one').length) {
		$('.team-carousel-one').owlCarousel({

			loop:true,
			margin:0,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: false,
			autoplay: true,
			autoplayTimeout:10000,
			mouseDrag: false,
			touchDrag: false,
			navText: [ '<span class="icon icon-chevron-left"></span>' ,  '<span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}
	
	
	//Team Carousel
	if ($('.sale-carousel').length) {
		$('.sale-carousel').owlCarousel({

			loop:true,
			margin:0,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: false,
			autoplay: false,
			autoplayTimeout:10000,
			navText: [ '<span class="icon icon-chevron-left"></span>' ,  '<span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				},
				1200:{
					items:3
				
				}
			}
		});    		
	}
	//Team Carousel
	if ($('.sale-one-carousel').length) {
		$('.sale-one-carousel').owlCarousel({

			loop:true,
			margin:0,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: false,
			autoplay: false,
			autoplayTimeout:10000,
			navText: [ '<span class="icon icon-chevron-left"></span>' ,  '<span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				},
				1200:{
					items:1
				
				}
			}
		});    		
	}

	//Team Carousel
	if ($('.team-carousel-services').length) {
		$('.team-carousel-services').owlCarousel({

			loop:true,
			margin:0,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: false,
			autoplay: true,
			autoplayTimeout:10000,
			navText: [ '<span class="icon icon-chevron-left"></span>' ,  '<span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				1024:{
					items:2
				},
				1100:{
					items:2
				},
				1200:{
					items:3
				}
			}
		});    		
	}

	// Calender Carousel
	if ($('.calender-carousel').length) {
		$('.calender-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			autoplayHoverPause:true,
			navText: [ '<span class="flaticon-back-7"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				}
			}
		});
	}
	
	
	// Single Item Carousel
	if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			autoplayHoverPause:false,
			navText: [ '<span class="flaticon-back-7"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1100:{
					items:1
				}
			}
		});    		
	}
	
	
	// Three Item Carousel
	if ($('.three-item-carousel').length) {
		$('.three-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back-7"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}
	
	
	
	// Three Item Carousel
	if ($('.team-carousel-two').length) {
		$('.team-carousel-two').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back-7"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1100:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}
	
	
	// News Carousel
	if ($('.news-carousel').length) {
		$('.news-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="icon icon-chevron-left"></span>' ,  '<span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:2
				},
				1100:{
					items:2
				}
			}
		});    		
	}
	
	
	
	// Product Carousel Slider
	if ($('.services-carousel .image-carousel').length && $('.services-carousel .thumbs-carousel').length) {

		var $sync1 = $(".services-carousel .image-carousel"),
			$sync2 = $(".services-carousel .thumbs-carousel"),
			flag = false,
			duration = 500;

			$sync1
				.owlCarousel({
					loop:true,
					items: 1,
					margin: 0,
					nav: true,
					navText: [ '<span class="icon icon-chevron-left"></span>', '<span class="icon icon-chevron-right"></span>' ],
					dots: false,
					autoplay: true,
					autoplayTimeout: 5000
				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = false;
						$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});

			$sync2
				.owlCarousel({
					loop:true,
					margin: 10,
					items: 1,
					nav: true,
					navText: [ '<span class="icon icon-chevron-left"></span>', '<span class="icon icon-chevron-right"></span>' ],
					dots: false,
					center: false,
					autoplay: true,
					autoplayTimeout: 5000,
					responsive: {
						0:{
				            items:1,
				            autoWidth: false
				        },
				        400:{
				            items:1,
				            autoWidth: false
				        },
				        600:{
				            items:1,
				            autoWidth: false
				        },
				        900:{
				            items:1,
				            autoWidth: false
				        },
				        1000:{
				            items:1,
				            autoWidth: false
				        }
				    },
				})
				
		.on('click', '.owl-item', function () {
			$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
		})
		.on('changed.owl.carousel', function (e) {
			if (!flag) {
				flag = true;		
				$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
				flag = false;
			}
		});
	}
	
	
	//
	//====================================================================//
	// Progress Bar
	//====================================================================//
	//
	if($('.progress-line').length){
		$('.progress-line').appear(function(){
			var el = $(this);
			var percent = el.data('width');
			$(el).css('width',percent+'%');
		},{accY: 0});
	}
	

	// Sponsors Carousel
	if ($('.sponsors-carousel').length) {
		$('.sponsors-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back-7"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				768:{
					items:3
				},
				1024:{
					items:5
				}
			}
		});
	}
	
	
	// Quote Carousel
	if ($('.quote-carousel').length) {
		$('.quote-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="flaticon-back-7"></span>', '<span class="flaticon-right-arrow"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:1
				},
				1024:{
					items:1
				}
			}
		});
	}

	
	// Testimonials Carousel
	if ($('.testimonials-carousel').length) {
		$('.testimonials-carousel').owlCarousel({

			loop:true,
			margin:5,
			nav:true,
			singleItem:true,
			smartSpeed: 500,
			autoHeight: false,
			autoplay: true,
			autoplayTimeout:10000,
			navText: [ '<span class="icon icon-chevron-left"></span>', '<span class="icon icon-chevron-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:2
				},
				1100:{
					items:2
				},
				1200:{
					items:2
				}
			}
		});
	}


	//Fact Counter + Text Count
	if($('.count-box').length){
		$('.count-box').appear(function(){
	
			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);
				
			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}
			
		},{accY: 0});
	}
	

	//Custom Seclect Box
	if($('.custom-select-box').length){
		$('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
	}

	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}

	//Sortable Masonary with Filters
	
	
	//Contact Form Validation
	
    function email_pattern(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    $(document).on('submit', '#xs-contact-form', function (event) {
        event.preventDefault();
        /* Act on the event */

        var xs_contact_name = $('#xs_contact_name'),
            xs_contact_email = $('#xs_contact_email'),

            x_contact_massage = $('#x_contact_massage'),
            xs_contact_submit = $('#xs_contact_submit'),
            xs_contact_error = false;

        $('.xpeedStudio_success_message').remove();

        if (xs_contact_name.val().trim() === '') {
            xs_contact_name.addClass('invaild');
            xs_contact_error = true;
            xs_contact_name.focus();
            return false;
        } else {
            xs_contact_name.removeClass('invaild');
        }
        if (xs_contact_email.val().trim() === '') {
            xs_contact_email.addClass('invaild');
            xs_contact_error = true;
            xs_contact_email.focus();
            return false;
        } else if (!email_pattern(xs_contact_email.val().toLowerCase())) {
            xs_contact_email.addClass('invaild');
            xs_contact_error = true;
            xs_contact_email.focus();
            return false;
        } else {
            xs_contact_email.removeClass('invaild');
        }

        if (x_contact_massage.val().trim() === '') {
            x_contact_massage.addClass('invaild');
            xs_contact_error = true;
            x_contact_massage.focus();
            return false;
        } else {
            x_contact_massage.removeClass('invaild');
        }

        if (xs_contact_error === false) {
            xs_contact_submit.before().hide().fadeIn();
            $.ajax({
                type: "POST",
                url: "php/contact-form.php",
                data: {
                    'xs_contact_name': xs_contact_name.val(),
                    'xs_contact_email': xs_contact_email.val(),

                    'x_contact_massage': x_contact_massage.val(),
                },
                success: function (result) {
                    xs_contact_submit.after('<p class="xpeedStudio_success_message text-white">' + result + '</p>').hide().fadeIn();

                    // setTimeout(function () {
                    //     $(".xpeedStudio_success_message").fadeOut(1000, function () {
                    //         $(this).remove();
                    //     });
                    // }, 5000)

                    $('#xs-contact-form')[0].reset();
                }
            });
        }
    });
	
	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1500);
	
		});
	}
	
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}

	//Gallery Filters
	 if($('.filter-list').length){
	 	 $('.filter-list').mixItUp({});
	 }



	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
	});


    /*=============================================================
                fixed header
        =========================================================================*/


    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
            $(".xs-sticky-header").removeClass("IsSticky animated fadeInDown");
        } else {
            $(".xs-sticky-header").addClass("IsSticky animated fadeInDown");
        }

        if ($(window).width() < 991) {
            $('.xs-sticky-header').removeClass('IsSticky animated fadeInDown');
        }
    });





    $( '.elementskit-navbar, .mobile-nav, .cta' ).find( 'a[href*="#"]:not([href="#"])' ).on('click', function () {
        if ( location.pathname.replace( /^\//, '' ) == this.pathname.replace( /^\//, '' ) && location.hostname == this.hostname ) {
            var target = $( this.hash );
            target = target.length ? target : $( '[name=' + this.hash.slice( 1 ) + ']' );
            if ( target.length ) {
                $( 'html,body' ).animate( {
                    scrollTop: ( target.offset().top - 100 )
                }, 1000 );
                if ( $( '.navbar-toggle' ).css( 'display' ) != 'none' ) {
                    $( this ).parents( '.container' ).find( ".navbar-toggle" ).trigger( "click" );
                }
                return false;
            }
        }
    } );






})(window.jQuery);
