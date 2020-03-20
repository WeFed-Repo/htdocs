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