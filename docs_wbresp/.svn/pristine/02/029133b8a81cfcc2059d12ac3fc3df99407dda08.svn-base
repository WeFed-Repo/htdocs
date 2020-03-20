/* Funzioni comuni */
function setModalMobile() {
    $('.modal').on('shown.bs.modal', function() {
        $(this).appendTo('body');
        //$('.modal-backdrop').insertAfter('.modal')
        if (/iPhone|iPad|iPod|Android|IEMobile/i.test(navigator.userAgent)) {
            $('html,body').css({ 'overflow': 'hidden', 'position': 'relative', 'height': '100%' });
            $(this).find('.modal-backdrop').insertAfter($(this));
        }
    });
    $('.modal').on('hidden.bs.modal', function() {
        if (/iPhone|iPad|iPod|Android|IEMobile/i.test(navigator.userAgent)) {
            $('html,body').css({ 'overflow': 'auto', 'position': 'static', 'height': 'auto' });
        }
    });
}

/* Codice GTM */
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W2S5HS7');