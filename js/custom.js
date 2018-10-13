$(document).ready(function() {

	$('.header-mobile-toggle').click(function(e){
			var modal = UIkit.modal("#menu");

			if ( modal.isActive() ) {
			    modal.hide();
				$(this).removeClass('active');
				$('header .header-wrap').removeClass('active');
			} else {
			    modal.show();
				$(this).addClass('active');
				$('header .header-wrap').addClass('active');
			}
			//e.preventDefault();
			return false;
	});

	//autosize($('textarea'));

	/*$('.products_hover .product').hover(function(){
		$(this).siblings('.product').removeClass('hover');
		$(this).addClass('hover');

	})*/
	//$(window).trigger('resize');

	//window.dispatchEvent(new Event('resize'));






	/* PHONE */
	$(function(){
		var $phone = $('input.input_phone'); //, input[name=form_text_39], input[name=form_text_6]

		var $form = $('form');
		$phone.each(function() {
			$(this)	.inputmask("+7 (999) 999-99-99",{autoclear: false, showMaskOnHover: false})
					.removeAttr('required')
					//.wrap("<div class='form-phone_wrap'></div>")
					.parent('.uk-form-row').addClass('form-phone_wrap')
					.append( "<p class='form-phone_error'></p>" );
		});
		var errorTextNoPhone = "Укажите номер телефона",
			errorText = "Введите номер телефона";
		$phone.on('input',function(){
			var $this = $(this);
			if ( $this.val().substr($this.val().length - 1) !== "_" && $this.val().substr($this.val().length - 1) !== "" && $this.val().substr($this.val().length - 1) !== " ")
				$this.addClass('succes');
			else
				$this.removeClass('succes');
		});
		$phone.focusout(function() {
			if( $(this).val().length > 0 && !$(this).hasClass('succes') ){
				$(this)	.addClass('error-border')
						.siblings('.form-phone_error')
						.text(errorText);
				$(this).parent().addClass('error');
			}
		});
		$phone.keyup(function(e) {
			$(this).siblings('.form-phone_error').text(' ');
			$(this).removeClass('error-border')
			.parent().removeClass('error');
		});
		$phone.keyup(function(event){
		    if(event.keyCode == 13){
				$(this)	.addClass('error-border')
						.siblings('.form-phone_error')
						.text(errorText);

		    }
		});
		$form.submit(function(){
			if( !$(this).find($phone).hasClass('succes')){
				if( $(this).find($phone).val().length == 0 )
					$(this).find($phone).addClass('error-border').siblings('.form-phone_error').text(errorTextNoPhone);
				else
					$(this).find($phone).addClass('error-border').siblings('.form-phone_error').text(errorText);
				return false;
			}
		});

	});


	$('[data-uk-switcher]').on('show.uk.switcher', function(event, area){
	    //console.log("Switcher switched to ", area);
		//console.log($(area).attr('id'));
	});


	/*$('.content-readmore').readmore({
	   speed: 1000,
	   collapsedHeight: 300,
	   heightMargin: 16,
	   moreLink: '<div class="article-readmore uk-text-center"><a class="link-readmore">Развернуть статью</a></div>',
	   lessLink: '',
	   embedCSS: true,
		blockCSS: 'display: block; width: 100%;',
		startOpen: false,
	   beforeToggle: function(trigger, element, expanded){
	   	$('.content-readmore').readmore('destroy');
	   	//$(this).removeClass('expanded');
	   	element.addClass('expanded');
	   	$.UIkit.Utils.checkDisplay('.block-article')
	   },
	   afterToggle: function(trigger, element, expanded){

	   }
   });*/

   if ($('.content-readmore').height() > 300) {
   	$('.content-readmore').addClass("uk-position-absolute");
   	$('.content-readmore').readmore({
   	   speed: 1000,
   	   collapsedHeight: 280,
   	   heightMargin: 16,
   	   moreLink: '<div class="article-readmore uk-text-center"><a class="link-readmore">Развернуть статью</a></div>',
   	   lessLink: '',
   	   embedCSS: true,
   		blockCSS: 'display: block; width: 100%;',
   		startOpen: false,
   	   beforeToggle: function(trigger, element, expanded){
   		$('.content-readmore').readmore('destroy');
   		//$(this).removeClass('expanded');
   		element.addClass('expanded');
   		$.UIkit.Utils.checkDisplay('.block-article');
   		$('.content-readmore').removeClass("uk-position-absolute");
   	   },
   	   afterToggle: function(trigger, element, expanded){
   		/*if(expanded) { 
   			element.addClass('expanded');
   		}*/
   		$('.content-readmore').removeClass("uk-position-absolute");
   	   }
      });
   }



	if ($('.lazyframe').length > 0) {
		let elements = $('.lazyframe');
		lazyframe(elements); // youtube vids lazyload
	}


	$('.certificate-toggle').on('click', function(e) {
		$(document).find('.certificates-list').find('li.uk-hidden').removeClass('uk-hidden');
		$(this).addClass('uk-hidden');
		e.preventDefault();

	});
	$('.news-toggle').on('click', function(e) {
		$(document).find('.news-list').find('div.uk-hidden').removeClass('uk-hidden');
		$(this).addClass('uk-hidden');
		e.preventDefault();

	});
	$('.action-toggle').on('click', function(e) {
		$(document).find('.action-list').find('div.uk-hidden').removeClass('uk-hidden');
		$(this).addClass('uk-hidden');
		e.preventDefault();

	});
	$('.reviews-toggle').on('click', function(e) {
		$(document).find('.reviews-list').find('div.uk-hidden').removeClass('uk-hidden');
		$(this).addClass('uk-hidden');
		e.preventDefault();

	});



      $('select:not(.ignore)').niceSelect();
      jQuery('.nice-select .list').addClass('scrollbar-inner').scrollbar();

      //$('.nice-select .list').each(element, new SimpleBar);
      // baron('.nice-select .list');


      /*$(".nice-select .list").niceScroll({
      	autohidemode:"scroll",
      });*/

		// выделение активного тега в слайдере
		/*$('.slider-text a').click(function(event) {
			$(this).siblings('a').removeClass('uk-active');
			$(this).addClass('uk-active');
		});*/


    //Slider autoplay let the javascript 'click' that link every 3000 milliseconds.
    var autoplayer = $('#header-slideshow-switch'),
        interval = setInterval(function() {
            autoplayer.trigger('click');
        }, 3000);
    //stop the autoplay when user starts to interact with switcher
    $('#header-slideshow, .header-nav-services, .header-desktop, .block-map').on('mouseenter', function () {
        clearInterval(interval);
    });
    //restarts the autoplay when user stops interaction with switcher
    $('#header-slideshow, .header-nav-services, .header-desktop, .block-map').on('mouseleave', function () {
    		clearInterval(interval);
        interval = setInterval(function(event) {
            autoplayer.trigger('click');

        }, 3000);
    });
 
 		// go to link on second click
    $('.header-nav-services > li > a').on('click', function(event) {
    	if ($(this).parent().hasClass('uk-active')) {
    		location.href = $(this).attr('href');
    	}
    	//
    	
    });


    $('.uk-modal').on({

        'show.uk.modal': function(){
            console.log("Modal is visible.");
            clearInterval(interval);
        },

        'hide.uk.modal': function(){
            console.log("Element is not visible.");
            clearInterval(interval);
            interval = setInterval(function(event) {
                autoplayer.trigger('click');

            }, 3000);
        }
    });

		/*schedule */

  	$(".schedule-table").each(function() {
  		function e() {
  			s.find(".schedule-slide:last-child").hasClass("schedule_last-slide") ? n.addClass("schedule-navigation-item_disabled") : n.removeClass("schedule-navigation-item_disabled"), s.find(".schedule-slide:first-child").hasClass("schedule_active_slide") ? o.addClass("schedule-navigation-item_disabled") : o.removeClass("schedule-navigation-item_disabled")
  		}

  		function t() {
  			var e = s.find(".schedule_active_slide").attr("data-month");
  			return s.parent().hasClass("anithing-class") ? (s.parents(".doctors-list").find(".page-title_doctors-list").text(e), !1) : void s.find(".schedule-title").text(e)
  		}

  		function a() {
  			var e = "+";
  			s.find(".schedule_last-slide").removeClass("schedule_last-slide"), s.find(".schedule_visible-slide").removeClass("schedule_visible-slide"), s.find(".schedule_active_slide").addClass("schedule_visible-slide").next().next().next().next().next().next().addClass("schedule_last-slide");
  			for(var t = 0; 6 > t; t++) s.find(".schedule_active_slide" + e + "tr").addClass("schedule_visible-slide"), e += "+"
  		}
	  	function headerdate() {
	  		var datestart = s.find(".schedule_active_slide .schedule-table-td_top").attr("data-date").split('.');
	  		var dateend = s.find(".schedule_last-slide .schedule-table-td_top").attr("data-date").split('.'); 

	  		var datestart2 = new Date(datestart[2], datestart[1] - 1, datestart[0]); 
	  		var dateend2 = new Date(dateend[2], dateend[1] - 1, dateend[0]); 
	  		var options = { month: 'long', day: 'numeric' };


	  		/console.log(datestart2.toLocaleDateString("ru-RU")); // 9/17/2016
	  		//console.log(datestart2.toLocaleDateString("ru-RU", options)); 

	  		s.find('.schedule-start-date').text(datestart2.toLocaleDateString("ru-RU", options));
	  		s.find('.schedule-end-date').text(dateend2.toLocaleDateString("ru-RU", options));

	  			

	  	
	  	}
  		var i = $(this),
  			s = $(this).parents(".schedule-wrapper"),
  			o = s.find(".schedule-navigation__prev"),
  			n = s.find(".schedule-navigation__next");
  		i.addClass("schedule-slider"), i.find("tbody tr").addClass("schedule-slide").first().addClass("schedule_active_slide schedule_visible-slide"), a(), e(), n.on("click", function(event) {
  			console.log("next");
  			$(this).hasClass("schedule-navigation-item_disabled") || (s.find(".schedule_active_slide").removeClass("schedule_active_slide").next().next().next().next().next().next().next().addClass("schedule_active_slide"), a(), e(), t(),headerdate());
  			event.preventDefault();
  		}), o.on("click", function(event) {
  			console.log("prev");

  			$(this).hasClass("schedule-navigation-item_disabled") || (s.find(".schedule_active_slide").removeClass("schedule_active_slide").prev().prev().prev().prev().prev().prev().prev().addClass("schedule_active_slide"), a(), e(), t(),headerdate());
  			event.preventDefault();
  		});

  	});


  	$('#popup-cookies .uk-button').click(function(event) {
  		$('#popup-cookies').addClass('uk-hidden');
  		event.preventDefault();

  	})

  	$(function() {
  	    if (!Cookies.get('hideModal')) {
	  			$('#popup-cookies').removeClass('uk-hidden');
  	    }
  	    Cookies.set('hideModal', true, {
	  		expires: 365,
	  		path: '/'
	  	  });
  	});

  	

  	$(function() {
  		var modalnotify = UIkit.modal("#modal-notify");
	    if (!Cookies.get('hideModalnotify')) {
  			modalnotify.show();
	    }
	    Cookies.set('hideModalnotify', true, {
  		expires: 7,
  		path: '/'
  	  });
  	});


  	// $('.uk-accordion-title').click(function(event) {
  	// 	console.log($(this).height());
  	// });

  	if ($('body').innerWidth() < 960) {
  	    $('.branches-list').addClass('branches-list_small');

  	};



  	/*var anchorHeight = $('#specs>li:first').height();

  	$('#specs>li').each(function() {
  	        if ($(this).height() >= anchorHeight) {
  	                anchorHeight = $(this).height();
  	                $('#specs>li').height(anchorHeight);
  	        }
  	});*/

  	$('#specs').each(function() {
         $(this).children('li').matchHeight({byRow: false});
     });
});
