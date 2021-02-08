 "use strict";
/*-----------------------------------
 Quick Mobile Detection
 -----------------------------------*/

 var isMobile = {
    Android: function() {
     
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
    
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
     
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
     
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
     
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
     
      return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};


	
 	//=================================== Sticky nav ===================================//
	$(".nav-wrapper").sticky({topSpacing:0});

    //=================================== Hover Efects =====================================//
	$('.item-service, .feature-element li').hover(function() {
		$(this).toggleClass('animated pulse');
	});
	



 /*-----------------------------------
 REVOLUTION Slider + Shop tabs +
 -----------------------------------*/
 
 
 

	$(document).ready(function() {
	

	
	

            $('.revolution-slider').revolution(
            {
                dottedOverlay:"none",
                delay:6000,
                startwidth:1170,
                //startheight:windowsHeight,
				startheight:740,
                onHoverStop:"on",
                hideThumbs:0,
                fullWidth:"on",
				fullScreen: 'off',
                forceFullWidth:"off",
                // navigationType:"bullet",
                // navigationArrows:"solo",
                // navigationStyle:"round",
        
                // navigationHAlign:"center",
                // navigationVAlign:"bottom",
                // navigationHOffset:30,
                // navigationVOffset:30,
                navigation: {
 
                    keyboardNavigation: 'on',
                    keyboard_direction: 'horizontal',
                    mouseScrollNavigation: 'on',
                    mouseScrollReverse: 'reverse',
                    onHoverStop: 'on',
     
                    arrows: {
     
                        enable: true,
                        style: 'hesperiden',
                        rtl: false,
                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 0,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
     
                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 0
                        },
     
                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 0
                        }
     
                    },
     
                    bullets: {
     
                        enable: true,
                        style: 'hesperiden',
                        direction: 'horizontal',
                        rtl: false,
     
                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 20,
                        space: 5,
     
                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 9999
     
                    },
     
                    touch: {
     
                        touchenabled: 'on',
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: true
     
                    }
     
                },
                /* END NAVIGATION */

                shadow:0,
                spinner:"spinner4",
                hideTimerBar:"on",
				
            });
			
			
			$('.view-switcher ul li').on('click',function(e) {
				if ($(this).hasClass('listview')) {
					$('.listing-main').removeClass('gridview').addClass('listview');
				}
				else if($(this).hasClass('gridview')) {
					$('.listing-main').removeClass('listview').addClass('gridview');
				}
			});
			$('.view-switcher ul li').on('click',function(e) {
					if ($(this).hasClass('listview')) {
					$('.view-switcher ul li.gridview').removeClass('active');
					$('.view-switcher ul li.listview').addClass('active');
				}
				else if($(this).hasClass('gridview')) {
					$('.view-switcher ul li.listview').removeClass('active');
					$('.view-switcher ul li.gridview').addClass('active');
				}
			});
			
			
new WOW().init();
			
    });

	$(window).scroll( function() {
		var st = $(this).scrollTop();
		$('.no-touch #inner-page-header .header-content').css({ 'opacity' : (1 - st/350) , 'transform':'translateY('+st/3+'px)'});
	});
	

$(".detail-view").click(function(){
alert("hello");
    $(this).parents().eq(4).find(".detail").toggleClass("show");
});



			

