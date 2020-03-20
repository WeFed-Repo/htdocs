/*funzione per fare il clear nei campi text dei form */
var clearInputText = function() {
    var inputClearable = $('input.clear-x[type="text"], input.clear-x[type="number"], input.clear-x[type="email"]');
    inputClearable.wrap('<div class="editable-input">');
    $('.editable-input').append('<span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i ></span>');
    var btnClearField = $('.editable-clear-x');
    btnClearField.each(function() {
        $(this).click(function() {
            $(this).prev('input').val('').focus();
        });
    });
    inputClearable.each(function() {
        $(this).focusin(function() {
            $('.editable-clear-x').hide();
            $(this).siblings('.editable-clear-x').show();
        });
    });
    ttinputOuterTap();
};

function ttinputOuterTap() {
    $(document).on('click touchstart', function(e) {
        var inputFocused = $(e.target).closest(".editable-input");
        if (!inputFocused.length) {
            $('.editable-clear-x').hide();
        }
    });
}

$(function() {
    clearInputText();
})