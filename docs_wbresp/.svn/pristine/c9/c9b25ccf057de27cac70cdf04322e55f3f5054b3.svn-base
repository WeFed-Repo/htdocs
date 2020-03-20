/* globals $:false, escape:false, unescape:false, loadWidgets:false */
/* exported wStore, moveToElement, loadWidget, loadModal */
"use strict";

function isAnchor(href) {
    return (typeof href === "string" && href !== '' && (/#!?([a-z][a-z0-9\-\_\.\:]*)?$/i).test(href));
}
function moveToAnchor(href,limite) {
    var targetEl, target = getAnchorTarget(href);
	 if (target !== '') {
        targetEl = $('#' + target);
        if (targetEl.length) {
            $('html, body').stop().animate({
                'scrollTop': targetEl.offset().top - limite 
            }, 400, 'swing', function() {
                window.location.hash = '#!' + target;
            });
        }
    }
}

function getAnchorTarget(href) {
    var res = href.match(/#!?([a-z][a-z0-9\-\_\.\:]*)?$/i);
    return res ? res[1] : '';
}
function fixAnchor(href) {
    var res = href.match(/(.*)#!?([a-z][a-z0-9\-\_\.\:]*)?$/i);
    return res[1] + '#!' + res[2];
}
var viewport = function() {
    var e = window,
        a = 'inner';
    if (!('innerWidth' in window)) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width: e[a + 'Width'], height: e[a + 'Height'] };
};
function setHeightColSin() {
	var leftCol = $('.left-column'),
		rightCol= $('.right-column');			
	
	if(leftCol.height()<rightCol.height() && viewport().width>=1200)
	{
		leftCol.css('height',rightCol.outerHeight())
	}
	else {
		leftCol.css('height','auto')
	}
}
function closeMenuMobile() {
   if (viewport().width > 1024 && $('.navbar-toggle').hasClass('opened')) {
            $('.navbar-toggle').trigger('click');
   }
}
//controlla se supporta le transizioni
$.support.transition = (function() {
    var thisBody = document.body || document.documentElement,
        thisStyle = thisBody.style,
        support = thisStyle.transition !== undefined || thisStyle.WebkitTransition !== undefined || thisStyle.MozTransition !== undefined || thisStyle.MsTransition !== undefined || thisStyle.OTransition !== undefined;
    return support;
})();


$(function() {
	//setHeightColSin();
	var isMobile = (/Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Windows Phone/i.test(navigator.userAgent)) ? true : false;
    $('.navbar-toggle').on('click', function() {
        if ($.support.transition) {
            $(this).toggleClass('opened');
        } else {
            $(this).toggleClass('openedFix');
        }
        if ($(this).hasClass('opened') || $(this).hasClass('openedFix')) {
            $('html,body').css({ 'overflow': 'hidden', 'position': 'relative', 'height': '1px', 'background-color': '#000' });

        } else {
            $('html,body').css({ 'overflow': 'visible', 'position': 'static', 'height': 'auto', 'background-color': '#fff' });
        }
    });
	// modifica i link alle ancore da "#id" a "#!id"
    // per prevenire il comportamento predefinito del browser
    var linkArr = $('a');
    linkArr.each(function() {
        var el = $(this),
            href = el.attr('href'),
            target = ''
			
        if (isAnchor(href)) {
            target = getAnchorTarget(href);
			// Controlla che sia un'ancora e non un link
            if (target !== '' && $('#' + target).length) {
                el.attr('href', fixAnchor(href));
                el.click(function(e) {
                   if(el.closest('ul').hasClass('navbar-nav'))
					{
						$('.navbar-toggle').trigger('click');
						
					}
					moveToAnchor(href,limite);
                });
            }
        }
    });

    // gestisce l'ancora nelle pagine con il navigator che scrolla
    var locationAnchor = window.location.hash,
        locationTarget,
		limite = 200;
    if (isAnchor(window.location.hash)) {
        locationTarget = getAnchorTarget(locationAnchor);
        if (locationTarget !== '' && $('#' + locationTarget).length) {
            window.location.hash = fixAnchor(locationAnchor);
            if($('.submenu').length=-1)
			{
				limite = 100	
			}
		    moveToAnchor(locationAnchor,limite);
            $('.submenu a,.sezione-menu.active a').each(function() {
                var el = $(this),
                    href = el.attr("href");
                
				if (isAnchor(href) && getAnchorTarget(href) === locationTarget) {
                    el.focus();
                    return false;
                }
            });
        }
    }
	window.onresize = function() {
        //setHeightColSin();
		closeMenuMobile();
    };

    if ($(window).width() > 992 && $(".submenu,.menu-landing").offset()) {
       var animationSpeed = 200,
            $sidebar = $(".submenu,.menu-landing"),
			topPadding = $sidebar.hasClass('submenu') ? 220 : 64,
            $window = $(window),
            offset = $sidebar.offset(),
            diffOffset = offset.top - topPadding;
        $window.scroll(function() {
            var winScrollTop = $window.scrollTop(),
                docHeight = $(document).height();
			
            if ($(window).width() < 992) {
                if ((winScrollTop + 1100) < docHeight) {
                    $sidebar.stop().animate({
                        marginTop: 0
                    }, animationSpeed);
                }
                return;
            }
            if($sidebar.hasClass('submenu')) {
				if (winScrollTop > diffOffset && (winScrollTop + 1100) < docHeight) {
					$sidebar.stop().animate({
						marginTop: winScrollTop - diffOffset
					}, animationSpeed);
				} else if ((winScrollTop + 1100) < docHeight) {
					$sidebar.stop().animate({
						marginTop: 0
					}, animationSpeed);
				}
			}
			else {
				if (winScrollTop > diffOffset && (winScrollTop + $sidebar.height()) < $('.right-column').height()) {
					$sidebar.stop().animate({
						marginTop: winScrollTop - diffOffset
					}, animationSpeed);
				}
				else  if ((winScrollTop + $sidebar.height()) < $('.right-column').height()) {
					$sidebar.stop().animate({
						marginTop: 0
					}, animationSpeed);
				}				
			}
        });
    }
 

	
   
});


