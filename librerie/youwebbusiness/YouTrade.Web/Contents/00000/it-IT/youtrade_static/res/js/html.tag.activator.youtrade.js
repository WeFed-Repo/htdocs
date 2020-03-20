//function TagActivator() {
$(function () {

    $('.social a.social-ico').each(function(index, item) {
        var jObject = $(item);
        var confirmMessage = jObject.attr('data-confirm');
        if (confirmMessage) {
            var location = jObject.attr('href');
            var message = jObject.attr('data-confirm');

            jObject.attr('href', '#');
            jObject.click(function() { confirmOnALink(location, message); });
        }

    });

    function confirmOnALink(href, message) {
        if (confirm(message)) {
            document.location = href;
        }
    }

    defaultTextInit();
});

// ANIMAZIONE MENU DROPDOWN
function topNavBarDropdownAnimation(menuItem) {

    //Sonia e Laura: 24/02/2015 questi due eventi dovrebbero essere inutili...lasciati per compatibilità con la Banca
    $('li.mega-menu.dropdown', menuItem).mouseenter(function () { $(this).addClass('hover'); });
    $('li.mega-menu.dropdown', menuItem).mouseleave(function () { $(this).removeClass('hover'); });
        
    $('li.mega-menu.dropdown', menuItem).click(
        function(e) {
            var that = $(this);

            if (!$('.dropdown-menu', that).hasClass('open')) {

                //Laura e Sonia: 26/02/2015 contestualizzato al topNavBar (menuItem passato in input) e non al that=$(this) 
                //perche' devo considerare gli elementi che hanno gia' subito l'open e non solo il mio superiore
                //altrimenti non chiudo gli altri menù che restano tutti aperti
                if ($('.dropdown-menu.open', menuItem).length > 0)
                {
                    closeSubmenu($('.dropdown-menu.open', menuItem).parent());
                    openSubmenu(that, 200);
                }
                else
                {
                    openSubmenu(that);
                }
            }
            else
            {
                closeSubmenu(that);
            }
        });

    //evita che al click di un elemento del menù parte la chiamata all'href
    //itemFirstChildA.click(function (e) { e.preventDefault(); });
    $('li.mega-menu.dropdown > a', menuItem).click(function (e) { e.preventDefault(); });
        
    //$('ul.dropdown-menu', menuItem).mouseleave(
    //    function(e) {
    //        var that = $(this).parent();
    //        closeSubmenu(that);
    //    });

    function openSubmenu(context, timeout) {
        if (timeout == null)
            timeout = 0;

        $('.dropdown-menu', context).delay(timeout).show().animate(
            {
                top: ["78px", "easeInQuad"],
                opacity: 1
            },
            200,
            function() {
                $(this).addClass('open');
                context.addClass('sub-open');
            });
    }

    function closeSubmenu(context, callback) {
        context.removeClass('sub-open');
        $('.dropdown-menu', context).animate({
                top: ["50px", "easeInQuad"],
                opacity: 0
            },
            200,
            function() {
                $(this).removeClass('open');
                $(this).hide();
                context.removeClass('sub-open'); // action duplicated to avoid persistence of menu arrow when user quickly opens ad hovers a submenu triggering "close" action before "open" is complete
                if (callback) {
                    callback;
                }
            });
    }

}

// funzione che aggancia un contenuto html (passato come stringa) ad un altro html esistente
//var addHtmlStringToJElement = function (htmlString, jElement) {
//    if (htmlString && jElement) {
//        var newPanelAsString = htmlString;
//        var newPanel = $(newPanelAsString);
//
//        newPanel.appendTo(jElement);
//    }
//}

// IMPOSTAZIONE DEFAULT VALUE SU CAMPI DI TESTO
function defaultTextInit() {
    // Default textbox init
    $('input[data-default-text]').each(function (index, element) {
        var that = $(this);
        var defaultText = that.data('default-text');
        if (that.val() == '') {
            that.val(defaultText);
            $(this).addClass('default-text');
        }

        that.focusin(function (e) {
            if ($(this).val().toLowerCase() == $(this).data('default-text')) {
                $(this).val('');
                $(this).removeClass('default-text');
            }
        });

        that.focusout(function (e) {
            if ($(this).val() == '') {
                $(this).val($(this).data('default-text'));
                $(this).addClass('default-text');
            }
        });
    });

    $('textarea[data-default-text]').each(function (index, element) {
        var that = $(this);
        var defaultText = that.data('default-text');
        if (that.val() == '') {
            that.val(defaultText);
            $(this).addClass('default-text');
        }

        that.focusin(function (e) {
            if ($(this).val().toLowerCase() == $(this).data('default-text')) {
                $(this).val('');
                $(this).removeClass('default-text');
            }
        });

        that.focusout(function (e) {
            if ($(this).val() == '') {
                $(this).val($(this).data('default-text'));
                $(this).addClass('default-text');
            }
        });
    });
}