/* globals $:false, widCont:false */
"use strict";
var loadWidgets;
$(function() {
    // Innesca l'inseguimento on-scroll dell'oggettino
    var wCon = $("#widgetContainer"),
        widContBaseScroll, widContMaxScroll;
    var wCPosInit = function() {
        widContBaseScroll = wCon.offset().top;
        widContMaxScroll = $(".mainContent .container").height() - wCon.height();
    };
    $(window).on("resize", wCPosInit);
    wCPosInit();
    $(window).on("scroll resize", function() {
        var mTop = 0;
        if ($(window).width() > 1184) {
            // Se siamo su un desktop
            mTop = $(window).scrollTop();
            if (mTop >= widContMaxScroll) mTop = widContMaxScroll;
        }
        if (typeof widCont !== 'undefined') {
            widCont.css("padding-top", mTop + "px");
        }
    });
    var loadTrackingWidget = function(urlparameters) {
        wCon.empty();
        var wTCont = $("<div>").addClass("widgetCont loading");
        wCon.append(wTCont);
        $.ajax({
            url: "/webankpub/aol/privati/webank/included/colRightStatoPratica.jsp?" + urlparameters,
            dataType: "html",
            success: function(data) {
                wTCont.append(data).removeClass("loading");
            },
            error: function() {
                wTCont.append("<!-- WIDGET NON TROVATO: '" + urlparameters + "' -->").removeClass("loading");
            }
        });
    };
    // Cambia i documenti richiesti tramite un codice contenuto nel campo
    $(".accordion-group .panel-title a").click(function() {
        var isOpened = !($(this).hasClass("collapsed"));
        var td = (!isOpened) ? $(this).attr("data-tracking-docs") : "";
        loadTrackingWidget(td);
    });
    $('#accordion').on('shown.bs.collapse hidden.bs.collapse', function() {
        wCPosInit();
    });
    loadWidgets = ["wdg_doc_aol_tracking_default.html"];
});
