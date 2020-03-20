/* globals $, prevAssConf, prevAssSlider, librerie, pathLibrerie, pathSito */
"use strict";
var sliderMax,
    fumatoreBtnGroup;
$(window).on("load", function() {
    var prevAssSlider2 = $('#prevAssSlider2'),
        prevAssSlider2Box = prevAssSlider2.closest('.form-group'),
        sliderError = $('#sliderError'),
        prevAssLinguettaContent = $('#prevAssLinguettaContent');
    sliderMax = 250000;
    if (prevAssSlider.senior) {
        $('.preventivatore').addClass('slider2');
        // Valori di inizializzazione diversi
        sliderMax = 200000;
    }
    prevAssSlider.obj = $("#prevAssSlider").sliderPlus({
        min: 50000,
        max: prevAssConf.capitaleMax,
        step: 50000,
        milestone: 50000,
        value: 50000,
        change: function() {
            hidePrevAssData();
            checkDurata();
            checkForm();
        },
        numberFormat: function(val) {
            return (val / 1000) + '.000';
        }
    });
    if (prevAssConf.durataMax > 5) {
        prevAssSlider.obj2 = prevAssSlider2.sliderPlus({
            min: 5,
            max: prevAssConf.durataMax,
            range: 0,
            step: 1,
            value: prevAssConf.durataMax,
            slide: function(event, ui) {
                setTimeout(function () {
                    moveTooltip(ui.value);
                }, 1);
            },
            change: function() {
                hidePrevAssData();
                checkDurata();
                checkForm();
            }
        });
        prevAssSlider.tooltip = prevAssSlider2.find('.ui-slider-handle').tooltip({
            html: true,
            title: function() {
                var closeIcoTooltip = '<a href="#!" class="closeTooltip"><i class="icon icon-close_inverted_fill icon-2x"></i ></a>';
                var titleClose = $(this).attr('data-title') + closeIcoTooltip;
                return titleClose;
            },
            trigger: 'manual',
            animation: false,
            placement: 'auto',
            container: prevAssSlider2Box
        });
        prevAssSlider2Box.on('click', '.closeTooltip', function(e) {
            e.preventDefault();
            hideTooltip();
        });
    } else {
        $("#prevAssSlider2, #prevAssSliderAlt2, #filettoCapitale").hide();
        $("#capitaleWrap, #durataWrap").addClass('splitRow');
    }
    prevAssSlider.durataMaxPerCapitale = prevAssConf.durataMax;
    fumatoreBtnGroup = $('#btnGroup').buttonGroup({
        change: function() {
            hidePrevAssData();
            checkForm(true);
        }
    });
    $('#calcola').click(function() {
        var el = $(this);
        if (!el.hasClass('btn-disabled')) {
            el.addClass('btn-disabled');
            prevAssLinguettaContent.addClass("loading");
            showPrevAssData();
            /* Caricamento dati */
            loadPrevAssData().done(function(data) {
                setPrevAssData(data);
            }).fail(function() {

            }).always(function() {
                prevAssLinguettaContent.removeClass("loading");
            });
        }
    });
    checkDurata();
    $(window).resize(function() {
        moveTooltip(prevAssSlider.obj2.slider('option', 'value'));
    });

    function isMobile() {
        return ($(window).width() < 768);
    }

    function hideTooltip() {
        if (isMobile()) {
            sliderError.modal('hide');
        } else {
            prevAssSlider.tooltip.tooltip('hide');
        }
    }

    function showTooltip() {
        if (isMobile()) {
            sliderError.modal('show');
        } else {
            prevAssSlider.tooltip.tooltip('show');
        }
    }

    function moveTooltip(value) {
        $('#layerInfoFumi99').modal('hide');
        if (isMobile()) {
            prevAssSlider.tooltip.tooltip('hide');
        } else {
            sliderError.modal('hide');
        }
        if (prevAssConf.durataMax > 5) {
            if (value === prevAssConf.durataMax || value < prevAssSlider.durataMaxPerCapitale) {
                hideTooltip();
            } else {
                showTooltip();
            }
        }
    }

    function checkDurata() {
        var durata;
        prevAssSlider.capitale = prevAssSlider.obj.slider("option", "value");
        prevAssSlider.durataMaxPerCapitale = prevAssConf.durataMaxPerCapitale[prevAssSlider.capitale];
        if (prevAssConf.durataMax > 5) {
            durata = prevAssSlider.obj2.slider("option", "value");
            if (durata > prevAssSlider.durataMaxPerCapitale) {
                durata = prevAssSlider.durataMaxPerCapitale;
                $('#prevAssVal2').text(durata + ' anni');
                prevAssSlider.obj2.slider("option", "value", durata);
                moveTooltip(durata);
            }
        } else {
            durata = 5;
        }
        prevAssSlider.durata = durata;
    }

    function checkFumatore(clicked) {
        var fumatore = fumatoreBtnGroup.buttonGroup('getValue'),
            isOK = false;
        if (fumatore === '0' || fumatore === '20') {
            isOK = true;
        } else {
            if (typeof clicked != 'undefined' && fumatore === '99') {
                hideTooltip();
                $('#layerInfoFumi99').modal();
            }
        }
        return isOK;
    }

    function checkForm (clicked) {
        if (checkFumatore(clicked)) {
            $('#calcola').removeClass('btn-disabled');
        } else {
            $('#calcola').addClass('btn-disabled');
        }
    }

    function loadPrevAssData() {
        var defaultRoot = "/webankpri";
        var defaultPath = "/wbOnetoone/wbblack/jsp/assicurazioni/json";
        var fileName = (librerie) ? "/alicoJson.php" : "/alicoJson.jsp";
        var AjaxUrl = "";
        var AjaxPath;
        if (librerie) {
            AjaxPath = pathLibrerie;
        } else {
            // Path online 
            if (typeof pathSito === "undefined") {
                AjaxPath = defaultRoot + defaultPath;
            } else {
                AjaxPath = pathSito + defaultPath;
            }
        }
        AjaxUrl = AjaxPath + fileName;
        // Test in libreria
        // var AjaxUrl = "/xml/alico.json";
        var parameters = {
            "fumatore": fumatoreBtnGroup.buttonGroup('getValue'),
            "capitale": prevAssSlider.capitale,
            "durata": prevAssSlider.durata,
            "cf": Math.random()
        };
        return $.ajax(AjaxUrl, {
            type: "post",
            dataType: "json",
            data: parameters
        });
    }

    function setPrevAssData(data) {
        var rataAnno, rataMese,
            prevAssSceltaAnno = $('#prevAssSceltaAnno'),
            prevAssSceltaMese = $('#prevAssSceltaMese'),
            prevAssSceltaSep = $('.prevAssSceltaSep');
        if (data.mese) {
            rataMese = formatVal(data.mese);
            prevAssSceltaMese.show().find('.prevAssSceltaVal').html(rataMese.val);
            prevAssSceltaMese.show().find('.prevAssSceltaValDec').html(rataMese.dec);
            prevAssSceltaSep.show();
        } else {
            prevAssSceltaMese.hide();
            prevAssSceltaSep.hide();
        }
        rataAnno = formatVal(data.anno);
        prevAssSceltaAnno.find('.prevAssSceltaVal').html(rataAnno.val);
        prevAssSceltaAnno.find('.prevAssSceltaValDec').html(rataAnno.dec);
        //Ripassa i dati via oggetto prevAssSlider
        prevAssSlider.data = data;
    }

    function showPrevAssData() {
        prevAssLinguettaContent.slideDown(700);
    }

    function hidePrevAssData() {
        prevAssLinguettaContent.slideUp(700);
    }

    function formatVal (rata) {
        var arr = rata.toString().split('.'),
            valTmp = arr[0],
            val = '',
            dec = arr[1];
        while (valTmp.length > 3) {
            val = '.' + valTmp.substr(-3) + val;
            valTmp = valTmp.slice(0, -3);
        }
        val = valTmp + val;
        if (!dec) {
            dec = '00';
        } else if (dec.length < 2) {
            dec = dec + '0';
        }
        return {
            "val": val,
            "dec": dec
        };
    }
});
