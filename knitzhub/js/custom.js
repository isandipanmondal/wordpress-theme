jQuery(document).ready(function() {
	
		jQuery("#client-speak").owlCarousel({
			navigation: false, // Show next and prev buttons
			slideSpeed: 800,
			autoHeight: true,
			paginationSpeed: 400,
			autoPlay: 5000,
			singleItem: true,
			touchDrag : false,
			mouseDrag : false,
			pagination: false,
			transitionStyle : "fade"
		});		 

		jQuery(".abtslider").owlCarousel({
			navigation: false, // Show next and prev buttons
			slideSpeed: 800,
			autoHeight: true,
			paginationSpeed: 400,
			autoPlay: 5000,
			singleItem: true,
			touchDrag : false,
			mouseDrag : false,
			pagination: false,
			transitionStyle : "fade"
		}); 
			jQuery(".serviceslider").owlCarousel({
			navigation: false, // Show next and prev buttons
			slideSpeed: 800,
			autoHeight: true,
			paginationSpeed: 400,
			autoPlay: 5000,
			singleItem: true,
			touchDrag : false,
			mouseDrag : false,
			pagination: false,
			transitionStyle : "fade"
		});
			jQuery(".eventslider").owlCarousel({
			navigation: false, // Show next and prev buttons
			slideSpeed: 800,
			autoHeight: true,
			paginationSpeed: 400,
			autoPlay: 5000,
			singleItem: true,
			touchDrag : false,
			mouseDrag : false,
			pagination: false,
			transitionStyle : "fade"
		});
		jQuery(".tvslider").owlCarousel({
			navigation: false, // Show next and prev buttons
			slideSpeed: 800,
			autoHeight: true,
			paginationSpeed: 400,
			autoPlay: 3000,
			singleItem: true,
			touchDrag : false,
			mouseDrag : false,
			pagination: false,
			transitionStyle : "fade"
		});
	jQuery("#brand_logo").owlCarousel({
 
      navigation : false, // показывать кнопки next и prev 
 	slideSpeed : 300,
      paginationSpeed : 400,
 	  autoPlay: 5000,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      pagination: false

 
  });

jQuery("#mission_img").owlCarousel({
 navigation : false, // показывать кнопки next и prev 
 	slideSpeed : 300,
      paginationSpeed : 400,
 	  autoPlay: 3000,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      pagination: false

 
  });

jQuery(function () {
    jQuery("article.photo_gallery").slice(0, 4).show();
    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault();
        jQuery("article.photo_gallery:hidden").slice(0, 4).slideDown();
        if (jQuery("article.photo_gallery:hidden").length == 0) {
            jQuery("#load").fadeOut('slow');
        }
        jQuery('html,body').animate({
            scrollTop: jQuery(this).offset().top
        }, 1500);
    });
});

 
jQuery(".digital-tv-vdo-right a").click(function(event){
	event.preventDefault();
var img_url = jQuery(this).find('img').attr('src');
var desc = jQuery(this).find('p').html();
jQuery('.digital-tv-vdo-left > img').attr('src',img_url);
jQuery('.digital-tv-vdo-left .digital-vdo-box-des-left > p').html(desc);
//console.log(img_url);
//console.log(desc);
});
	
	if (jQuery('#client-speaks').length) {  
		jQuery("#client-speaks").owlCarousel({
			navigation: false, // Show next and prev buttons
			slideSpeed: 800,
			autoHeight: true,
			pagination : true,
			paginationSpeed: 400,
			autoPlay: 5000,
			singleItem: true,
			touchDrag : false,
			mouseDrag : false,
			transitionStyle : "fade"
		});		  
	}
  
	if (jQuery('#clients-carousel').length) {  
		jQuery("#clients-carousel").owlCarousel({
			autoPlay: 5000,
			items : 5,
			navigation : true,
			pagination : false,
			// itemsDesktop : [1199,3],
			// itemsDesktopSmall : [979,3],
			navigationText: ["",""],
		});		  
	}
   
 //    jQuery(".various").fancybox({
	// 	maxWidth	: 800,
	// 	maxHeight	: 600,
	// 	fitToView	: false,
	// 	width		: '70%',
	// 	height		: '70%',
	// 	autoSize	: false,
	// 	closeClick	: false,
	// 	openEffect	: 'none',
	// 	closeEffect	: 'none'
	// });
	// if (jQuery('.box').length) { 
	// 	jQuery('.box').matchHeight();	
	// }
  
});

	jQuery(document).ready(function(){
	var percent = 0,
	interval = 50,//it takes about 6s, interval=20 takes about 4s
	$bar = jQuery('.transition-timer-carousel-progress-bar'),
	$crsl = jQuery('#myCarousel');
	jQuery('.carousel-indicators li, .carousel-control').click(function (){$bar.css({width:0.5+'%'});});
	/*line above just for showing when controls are clicked the bar goes to 0.5% to make more friendly, 
	if you want when clicked set bar empty, change on width:0.5 to width:0*/
	$crsl.carousel({//initialize
		interval: false,
		pause: true
	}).on('slide.bs.carousel', function (){percent = 0;});//This event fires immediately when the bootstrap slide instance method is invoked.
	function progressBarCarousel() {
		$bar.css({width:percent+'%'});
		percent = percent +0.5;
		if (percent>=100) {
			percent=0;
			$crsl.carousel('next');
		}
	}
	var barInterval = setInterval(progressBarCarousel, interval);//set interval to progressBarCarousel function
	if (!(/Mobi/.test(navigator.userAgent))) {//tests if it isn't mobile
		$crsl.hover(function(){
					clearInterval(barInterval);
				},
				function(){
					barInterval = setInterval(progressBarCarousel, interval);
				}
		);
	}
});
  jQuery(document).ready(function($){
         
          $(".filter-button").click(function(){
              var value = $(this).attr('data-filter');
              
              if(value == "all")
              {
                  //$('.filter').removeClass('hidden');
                  $('.filter').show('1000');
              }
              else
              {
         //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
         //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                  $(".filter").not('.'+value).hide('3000');
                  $('.filter').filter('.'+value).show('3000');
                  
              }
          });
          
          if ($(".filter-button").removeClass("active")) {
         $(this).removeClass("active");
         }
         $(this).addClass("active");
         
         });


  jQuery("#lightbox").on("click", "a.add", function(jQuery){
    var new_caption = prompt("Enter a new caption");
    if(new_caption){
       var parent_id = $(this).data("id"),
           img_title = $(parent_id).data("title"),
           new_caption_tag = "<span class='caption'>" + new_caption + "</span>";
        
       $(parent_id).attr("data-title", img_title.replace(/<span class='caption'>.*<\/span>/, new_caption_tag));
       $(this).next().next().text(new_caption);
       
    }
});
jQuery(document).ready(function(jQuery) {
  jQuery(document).on("submit",'form#mc-subscribe-form',function(e) {
    e.preventDefault();

    var successMSG = "You've been added to our subscribers list.";
    var errorMSG = "There was an error. Please try again.";
    var invalidEmailMSG = "That does not look like a valid email.";
    var alreadySubscribedMSG = "You have already subscribed to our subscribers list.";

    jQuery('.ajax-loader', this).show();
    var curr = jQuery(this).attr('current');
    jQuery(this).ajaxSubmit({
      success : function (responseText) {
        if (responseText === 'added') {
          //jQuery('#subscribe_tab_'+curr+' form#mc-subscribe-form').fadeOut('slow');
          jQuery('#subscribe_tab_'+curr+' .respon_msg p').text(successMSG).fadeIn('slow');
        } else if (responseText === 'already subscribed') {
          //jQuery('#subscribe_tab_'+curr+' form#mc-subscribe-form').fadeOut('slow');
          jQuery('#subscribe_tab_'+curr+' .respon_msg p').text(alreadySubscribedMSG).fadeIn('slow');
        } else if (responseText === 'invalid email') {
          jQuery('#subscribe_tab_'+curr+' .respon_msg p').text(invalidEmailMSG).fadeIn('slow');
        } else {
          jQuery('#subscribe_tab_'+curr+' .respon_msg p').text(errorMSG).fadeIn('slow');
        }
        jQuery('#subscribe_tab_'+curr+' .ajax-loader').hide();
      },
      url   : ajaxVars.ajaxurl,
      data  : { ajax_nonce : ajaxVars.ajax_nonce, action : 'add_to_newsletter_list' },
      type  : 'POST',
      timeout : 50000,
    });
  });
});

jQuery(document).ready(function() {
jQuery('select').on('change', function() {
  //alert( this.value );
  jQuery(".event_price").html(this.value);
  jQuery("#variation_id").val(jQuery(this).find(':selected').attr('data-variation'));
});
});


jQuery(document).ready(function() {
jQuery('#qty_data').bind("keyup change", function() {
		if (this.value) {
			var qn = this.value;
		} else {
			var qn = 1;
		}
	  	jQuery("#quny").val(qn);
	});
});
