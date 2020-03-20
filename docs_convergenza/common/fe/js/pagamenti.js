var checkFocusOutToAble = function (nameForm, funcToAct) {
    var formWrapper = $('#' + nameForm);
    var inputToActivate = formWrapper.find('.input-required');
    var inputActivated = [],
        isChecked,
        isNotEmpty,
        isSelected,
        isFilledHidden = true,
        btnHidden,
        isTabWrapped = false;
    /* btnTab = formWrapper.find('.tab-data-btn a') */
    inputToActivate.each(function () {
        var el = $(this);
        //nascondere contenuto tab al focus sul campo o al change
        if (formWrapper.find('.tabber-wrapper').length > 0) {
            el.on('focusin', function(){
                hideTabBonifico(formWrapper);
            })
        }

        if ($(this).val() !== '') {
            inputActivated.push($(this).attr('name'));
        }
    });

    //se c'è la classe da wrappare parte la funzione specifica
    if (formWrapper.find('.overlayer-tab-toWrapper').length > 0 && formWrapper.find('.overlayer-layer').length === 0) {
       setLayerObject(formWrapper);
    }
    if (formWrapper.find('.overlayer-tab-toWrapper').length > 0) {
        isTabWrapped = true;
    }

    /*btnTab.on('click', function () {
        formWrapper.find('.to-able').attr('disabled', false).removeClass('disabled');
    });*/

    formWrapper.find('.hidden-wrapper').each(function () {
        btnHidden = $(this).find('.input-toggle-hidden,.btn-show,.btn-hide');
        btnHidden.off().on('click', function () {
            var countHiddenInputFilled = [];
            var bonificoInputVal;

            formWrapper.find('.overlayer-layer').length > 0 ? isTabWrapped = true : isTabWrapped = false;
            var hiddenDiv = $(this).closest('.hidden-wrapper').find('.input-hidden'),
                hiddenInput = hiddenDiv.find('input');

            if ($(this).hasClass('btn-hide')) {
                hiddenDiv.hide()
            } else if ($(this).hasClass('btn-show')) {
                hiddenDiv.show();
            } else {
                hiddenDiv.toggle();
                bonificoInputVal = $('#autocompletamentoBonificoInput').val();
                hiddenInput.val(bonificoInputVal.substring(0, Math.min(bonificoInputVal.length, 20)));
            }

            if (hiddenDiv.is(':visible') && (hiddenDiv.find('.prefilled').val() === '' || hiddenDiv.find('.prefilled').length === 0)) {
                isFilledHidden = false;
                formWrapper.find('.to-able').attr('disabled', true).addClass('disabled');
            } else {
                isFilledHidden = true;

                if (inputActivated.length === inputToActivate.length) {
                    formWrapper.find('.to-able').attr('disabled', false).removeClass('disabled');
                    //se c'è il div da wrappare ed è chiuso...
                    if (formWrapper.find('.tabber-wrapper').length > 0 && !formWrapper.find('.tabber-wrapper').hasClass('active')) {
                        formWrapper.find('.to-able').attr('disabled', true).addClass('disabled');
                    }
                }

                hiddenInput.not('.prefilled').val('');
            }

            hiddenInput.on('keyup', function () {
                var pos = countHiddenInputFilled.indexOf($(this).context.name);

                if ($(this).val() !== '') {
                    pos === -1 && countHiddenInputFilled.push($(this).context.name);
                } else {
                    pos > -1 && countHiddenInputFilled.splice(pos, 1);
                }

                if (countHiddenInputFilled.length === hiddenInput.length) {
                    isFilledHidden = true;

                    if (inputActivated.length >= inputToActivate.length && !isTabWrapped) {
                        formWrapper.find('.to-able').attr('disabled', false).removeClass('disabled');
                        if (formWrapper.find('.tabber-wrapper').length > 0 && !formWrapper.find('.tabber-wrapper').hasClass('active')) {
                            formWrapper.find('.to-able').attr('disabled', true).addClass('disabled');
                        }
                    }
                } else {
                    isFilledHidden = false;
                    formWrapper.find('.to-able').attr('disabled', true).addClass('disabled');

                }
            })
        })
    });

    $.each(inputToActivate, function (index, value) {
        var field = '#' + $(value).attr('name'),
            fieldType = $(field).attr('type');

        if ($(this).context.nodeName === 'INPUT' && fieldType === 'text' || $(this).context.nodeName === 'TEXTAREA') {
            $(this).on('keyup focus', function () {
                var pos = inputActivated.indexOf($(this).context.name);

                if ($(this).val() !== '') {
                    pos === -1 && inputActivated.push($(this).context.name);
                } else if ($(this).val() === '') {
                    pos > -1 && inputActivated.splice(pos, 1);
                } else {
                    return;
                }
                inputActivated.length === inputToActivate.length ? isNotEmpty = true : isNotEmpty = false;
                //console.log(inputActivated.length);
                //console.log(inputToActivate.length);
                funcToAct(isNotEmpty, isFilledHidden, isTabWrapped, formWrapper);
            })
        }
        if ($(this).context.nodeName === 'SELECT') {
            $(this).on('change', function () {
                var pos = inputActivated.indexOf($(this).context.name);
                if ($(this).context.selectedIndex !== 0) {
                    pos === -1 && inputActivated.push($(this).context.name);
                } else {
                    pos > -1 && inputActivated.splice(pos, 1);
                }
                inputActivated.length === inputToActivate.length ? isSelected = true : isSelected = false;
                funcToAct(isSelected, isFilledHidden, isTabWrapped, formWrapper);
            })
        }
        if ($(this).context.nodeName === 'INPUT' && fieldType === 'checkbox') {
            $(this).on('click', function () {
                var pos = inputActivated.indexOf($(this).context.name);
                if ($(this).is(':checked')) {
                    pos === -1 && inputActivated.push($(this).context.name);
                } else {
                    pos > -1 && inputActivated.splice(pos, 1);
                }

                inputActivated.length === inputToActivate.length ? isChecked = true : isChecked = false;
                funcToAct(isChecked, isFilledHidden, isTabWrapped, formWrapper);
            })
        }
    });
};

var ableButton = function (isFilledVisible, isFilledHidden, isTabWrapped, elWrapper) {
    $(elWrapper).find('.overlayer-layer').length > 0 ? isTabWrapped = true : isTabWrapped = false;

    if (isFilledVisible && isFilledHidden) {
        if (!isTabWrapped) {
            if (!$(elWrapper).find('.tabber-wrapper').length) {
                $(elWrapper).find('.to-able').attr('disabled', false).removeClass('disabled');
            }
            
        } else {
            unsetLayerObject(elWrapper);

        }
    } else {
        $(elWrapper).find('.to-able').attr('disabled', true).addClass('disabled');
        if ($('.overlayer-tab-toWrapper').length > 0 && elWrapper.find('.overlayer-layer').length === 0) {
            if ($(elWrapper).find('.overlayer-layer').length === 0) {
                setLayerObject(elWrapper);
                $(elWrapper).find('.tab-data-btn').removeClass('selected');
                $(elWrapper).find('.tabber-wrapper').removeClass('active');
                $(elWrapper).find('.btn-icon').removeClass('icoActive');
                $(elWrapper).find('.tab-data-content').hide();
            }
        }
        else if($(elWrapper).find('.warning-tab-toWrapper').length > 0 && $(elWrapper).find('.tab-data-btn.selected').length > 0) {
          $(elWrapper).find('.tab-data-btn').removeClass('selected');
          $(elWrapper).find('.tabber-wrapper').removeClass('active');
          $(elWrapper).find('.btn-icon').removeClass('icoActive');
          $(elWrapper).find('.tab-data-content').hide();
        }
    }
};

var setLayerObject = function (el) {
    var elToWrap = $(el).find('.overlayer-tab-toWrapper');
    elToWrap.wrap('<div class="overlayer-obj-Wrapper">');
    $('<div class="overlayer-layer">').insertAfter(elToWrap);
};

var unsetLayerObject = function (el) {
    var elToUnWrap = el.find('.overlayer-tab-toWrapper');
    elToUnWrap.unwrap('<div class="overlayer-obj-Wrapper">');
    el.find('.overlayer-layer').remove();
};
var tabber = function () {

    var tabberWrapper = $('.tabber-wrapper');

    tabberWrapper.each(function () {
        var btnTab = tabberWrapper.find('.tab-data-btn a');
        btnTab.each(function () {
            $(this).click(function () {
                var wrapperForm = $(this).closest('form');
                        var inputToFullfill = wrapperForm.find('.input-required');
                        var inputFullFilled= [];
                        
                        inputToFullfill.each(function(index){
                           inputFullFilled.push($(this).val())
                        })
                        function isNotEmpty(value) {
                            if(value != '') return value;
                        }
                        var fieldNotEmpty = inputFullFilled.filter(isNotEmpty); 
                          if(inputToFullfill.length>fieldNotEmpty.length) {
                              errorFields(wrapperForm);
                          }

                          else {
                            removeErrorFields(wrapperForm);
                            if ($(this).attr("id") === "hoFretta") {
                                     verificaBonificoIstantaneoUrgente()
                                 } else if ($(this).attr("id") === "scegliData") {
                                      verificaBonificoOrdinarioEstero();
                                }
                          }
                
            });
        });
    });

};
var errorFields = function(wrapperForm){
      if($('.error-box-fields').length===0){
         $('#error-box-fields').html('<div class="error-box-fields"><strong>ATTENZIONE</strong><br> Verifica che tutti i campi siano compilati prima di selezionare il tipo di bonifico.</div>')
         $("html, body").animate({scrollTop: $('#error-box-fields').offset().top -30},500)  
 }
  }
var removeErrorFields = function(wrapperForm) {
       $('#error-box-fields').html('');
 }

  var hideTabBonifico = function(formWrapper) {
     formWrapper.find('.tab-data-btn').removeClass('selected');
     formWrapper.find('.tabber-wrapper').removeClass('active');
     formWrapper.find('.btn-icon.info-standard').removeClass('icoActive');
     formWrapper.find('.btn-icon.info-veloce').removeClass('icoActive');
     formWrapper.find('.tab-data-content').hide();
}
$(function () {
     tabber();
 })