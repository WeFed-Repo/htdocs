var isVisibleEsempio = true;
function EsempioVisible() {
    if (isVisibleEsempio) {
        $('.esempio').hide(); 
        $('#esempiovisible').html(' apri');
        $('#dettaglio-close').removeClass('chiudi');
    }
    else {
        $('.esempio').show();
        $('#esempiovisible').html(' chiudi');
        $('#dettaglio-close').addClass('chiudi');
        top.calcHeightIframe();
        //location.href = '#stm';
    }
    isVisibleEsempio = !isVisibleEsempio;
}

var Periods = ["1anno", "3anni", "5anni"];
//var idPer = 1;

function nextPeriod(aa, t) {
    var idPer = aPeriod[aa];
    if (idPer < 2) {
    /*
        $("#tb" + Periods[idPer]+aa).fadeOut(function() {
            delayedFadeInNext("tb",aa,idPer);
        });
        $("#ch" + Periods[idPer]+aa).fadeOut(function() {
            delayedFadeInNext("ch",aa,idPer);
            $("#sc" + Periods[idPer] + aa).hide();
            idPer++;
            //aPeriod[aa] = idPer++;
            $("#sc" + Periods[idPer]+aa).show();
            load_chart_perf(aa,t,idPer);
        });
        */        
        $("#sc" + Periods[idPer] + aa).hide();
        $("#tb" + Periods[idPer] + aa).hide();
        $("#ch" + Periods[idPer] + aa).hide();
        idPer++;
        aPeriod[aa] = idPer;
        load_chart_perf(aa, t, idPer);
        $("#sc" + Periods[idPer] + aa).show();
        $("#tb" + Periods[idPer] + aa).show();
        $("#ch" + Periods[idPer] + aa).show();
    }
}
function prevPeriod(aa, t) {
    var idPer = aPeriod[aa];
    if (idPer > 0) {
        /*
        $("#tb" + Periods[idPer]+aa).fadeOut(function() {
            delayedFadeInPrev("tb",aa,idPer);
        });
        $("#ch" + Periods[idPer]+aa).fadeOut(function() {
            delayedFadeInPrev("ch",aa,idPer);
            $("#sc" + Periods[idPer]+aa).hide();
            idPer--;
            //aPeriod[aa] = idPer--; 
            $("#sc" + Periods[idPer]+aa).show();
            load_chart_perf(aa,t,idPer);
        });
        */
        $("#tb" + Periods[idPer] + aa).hide();
        $("#sc" + Periods[idPer] + aa).hide();
        $("#ch" + Periods[idPer] + aa).hide();
        idPer--;
        aPeriod[aa] = idPer;
        load_chart_perf(aa, t, idPer);
        $("#sc" + Periods[idPer] + aa).show();
        $("#tb" + Periods[idPer] + aa).show();
        $("#ch" + Periods[idPer] + aa).show();        
    }
}
function delayedFadeInNext(id,aa,idPer) {
    $("#" + id + Periods[idPer + 1]+aa).fadeIn();
}
function delayedFadeInPrev(id,aa,idPer) {
    $("#" + id + Periods[idPer - 1]+aa).fadeIn();
}
var selected_tab = '#tabs-1';
function chvistab(id) {
    $(selected_tab).hide();
    $(id).show();
    $(selected_tab + 'sx').addClass('unselectedTabsx');
    $(selected_tab + 'ct').addClass('unselectedTabct');
    $(selected_tab + 'rx').addClass('unselectedTabrx');
    $(selected_tab + 'sx').removeClass('selectedTabsx');
    $(selected_tab + 'ct').removeClass('selectedTabct');
    $(selected_tab + 'rx').removeClass('selectedTabrx');
    selected_tab = id;
    $(id + 'sx').removeClass('unselectedTabsx');
    $(id + 'ct').removeClass('unselectedTabct');
    $(id + 'rx').removeClass('unselectedTabrx');
    $(id + 'sx').addClass('selectedTabsx');
    $(id + 'ct').addClass('selectedTabct');
    $(id + 'rx').addClass('selectedTabrx');
}
function fopenhelp(url, nome) {
var s_width=screen.width;
var s_height=screen.height;
var sizeL=530;
if (s_width>=1024 && s_height>=768)
 {
 sizeL=760;
 }
 window.open(url,'nome','width=250,height=410,top=130,left='+sizeL+',status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');
}
function showToolTipUniq(event, obj) {
    var x1 = parseInt($(obj).offset().left);
    var y1 = parseInt($(obj).offset().top) + 22;
    $('#funiqTooltip').css({ "left": +x1 + "px", "top": y1 + "px" });
    $('.funiqTooltipArrow').css({ "left": x1 -100 + "px" });
    $('#funiqTooltip').show();
}
function hideToolTipUniq(obj) {
    $('#funiqTooltip').hide();
}
/*
function loadtp(obj, id, nome) {
    var coords = $(obj).attr('coords');
    var aVal = coords.split(',');
    var x1 = aVal[0] - 8;
    var y1 = aVal[1] - 10;
    $('#circle').css({ "left": x1 + "px", "top": y1 + "px" });
    //$('#circle').show();
    var coords = $(obj).attr('coords');
    var aVal = coords.split(',');
    var x1 = parseInt(aVal[0]);
    var y1 = aVal[1] - 10;
    $('#tooltip-toppicks-sel').html(nome);
    if (x1 < 280) { x1 = x1 + 10; }
    else {
        x1 = x1 - parseInt($('#tooltip-toppicks-sel').css('width')) - 15;
    }
    $('#tooltip-toppicks-sel').css({ "left": x1 + "px", "top": y1 + "px" });
    //$('#tooltip-toppicks-sel').show();
    $('#dettaglio-cont').html('')
    $.ajax({
        url: '../TopPicks/Details/' + id,
        cache: false,
        success: function(data) {
            $('#dettaglio-cont').html(data);
            $('#tp-descrizione').html($('#tp-desc-' + id).html());
            top.calcHeightIframe();
            location.href='#desca';
        }
    });
    $('#dettaglio').show();
}*/
function unloadtp() {
    $('#circle').hide();
    $('#dettaglio').hide();
}
var lRowTS = 0;
function loadts(row,id) {
    $('#tsr' + lRowTS + ' .text').css("font-weight", "normal");
    $('#tsr' + lRowTS + ' .bulls').removeClass("bulls").addClass("bull");
    $('#tsr' + lRowTS + ' .text').removeClass("texts");
    
    $('#tsr' + row + ' .text').css("font-weight", "bold");
    $('#tsr' + row + ' .bull').removeClass("bull").addClass("bulls");
    $('#tsr' + row + ' .text').addClass("texts");
    
    lRowTS = row;
    $('#dettaglio-cont').html('')
    $.ajax({
        url: "../TopPicks/Details/" + id,
        cache: false,
        success: function(data) {
            $('#dettaglio-cont').html(data);
            $('#tp-descrizione').html($('#tp-desc-' + id).html());
            document.location.href = '#nt' + row;
            if (calcH == false) { top.calcHeightIframe(); calcH = true; }
        }
    });
    $('#dettaglio').show();    
}
function displayToolTip(obj, nome) {
    $(obj).attr('coords');
    var coords = $(obj).attr('coords');
    var aVal = coords.split(',');
    var x1 = parseInt(aVal[0]);
    var y1 = aVal[1] - 10;
    $('#tooltip-toppicks').html(nome);
    if (x1 < 280) { x1 = x1 + 10; }
    else {
        x1 = x1 - parseInt($('#tooltip-toppicks').css('width')) - 15;
    }
    $('#tooltip-toppicks').css({ "left": x1 + "px", "top": y1 + "px" });
    $('#tooltip-toppicks').show();
}
function removeToolTip() {
    $('#tooltip-toppicks').html('');
    $('#tooltip-toppicks').hide();
}
function showtooltipProfili(obj, idProfilo) {
    var x1 = parseInt($(obj).offset().left) + 50;
    var y1 = parseInt($(obj).offset().top) + 45;
    $('#msg_tooltip_' + idProfilo).css({ "left": x1 + "px", "top": y1 + "px" });
    $('#msg_tooltip_' + idProfilo).show();
}
function hideToolTipProfili(obj, idProfilo) {
    $('#msg_tooltip_' + idProfilo).hide();
}
function showToolTip(obj) {
    var x1 = parseInt($(obj).offset().left) + 15;
    var y1 = parseInt($(obj).offset().top) - 20;
    $('#msg_tooltip_minvalue').css({ "left": x1 + "px", "top": y1 + "px" });
    $('#msg_tooltip_minvalue').show();
}
function hideToolTip(obj) {
    $('#msg_tooltip_minvalue').hide();
}
function numFormatMigliaia(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? ',' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}
function calcolaPerc(valori, importo) { 
    var newValue;
    $.each(valori,function(index, value) {
        if ($('#totinv' + value.idaa).val() != '') {
            newValue = (importo * (value.value / 100));
            $("#val" + value.idaa + "-" + value.idac).html(numFormatMigliaia(parseInt(newValue).toString()));
            $("#hval" + value.idaa + "-" + value.idac).val(parseInt(newValue));
            if ($("#val" + value.idaa + "-" + value.idac).html() != '' && $('#hmin' + value.idaa + "-" + value.idac).val() != '' && parseFloat($('#hmin' + value.idaa + "-" + value.idac).val()) > parseFloat(newValue)) {
                $("#val" + value.idaa + "-" + value.idac).html('<img id="img_tooltip_minvalue" style="vertical-align:middle" src="../content/images/warning_16.png" alt="" onmouseout="hideToolTip(this)" onmouseover="showToolTip(this)" /> ' + numFormatMigliaia(parseInt(newValue).toString()))
            }
        }
        else {
            $("#val" + value.idaa + "-" + value.idac).html('0')
            $("#hval" + value.idaa + "-" + value.idac).val('');
        }
    });
}
function closeAlert() {
    $.modal.close();
}
function openAlert(id, idaa, idac) {
    var importo = $('#hval' + idaa + '-' + idac).val();
    var isin = $('#hisin' + idaa + '-' + idac).val();
    $.ajax({
        url: './Suggeriti?p=' + id + '&aa=' + idaa + '&ac=' + idac + '&t=' + isin + '&i=' + importo,
        cache: false,
        success: function(data) {
            $('#lef-cont').html(data);
        },
        error: function(data) {
            $('#lef-cont').html("Errore nel caricamento della lista dei suggeriti.<br> Riprovare in seguito.")
        }
    });
    $('#layerElencoFondi').modal({ overlayClose: false, escClose: false, modal: true, position: [50, 120] });
}
var paginator_suggeriti_pag = 1;
var tot_paginator_page = 1;
var paginator_pageSize=10;
function Only3Visible() {
    if (only3vis) {
        $(".sg-a3").hide();
        $("#txtvedialtri").html("Vedi altri fondi");
        $("#txtsegnoaltri").html("+");
        $('#paginator_cnt').hide(); 
        $('#paginator_cnt #page' + paginator_suggeriti_pag).removeClass('sel');
        paginator_suggeriti_pag = 1;
        $(".sg-p3").show();
        }
    else {
        $(".sg-a3").show(); $("#txtvedialtri").html("Nascondi"); $("#txtsegnoaltri").html("-");
        $('#paginator_cnt').show();
        change_page_suggeriti(paginator_suggeriti_pag);        
    }
    only3vis = !only3vis;
}
function change_page_suggeriti(page) {
    $('#paginator_cnt #page' + paginator_suggeriti_pag).removeClass('sel');
    paginator_suggeriti_pag = page;
    $('#paginator_cnt #page' + paginator_suggeriti_pag).addClass('sel');
    $('#sugg_table tbody tr').each(function(index) {

    if ((index < (((page - 1) * paginator_pageSize) + paginator_pageSize)) && ((index) >= ((page - 1) * paginator_pageSize))) {
            $(this).show();
        }
        else {
            $(this).hide();
        }

    });
}
function enableCart(aa, forceUpd) {
    if (forceUpd == false) {
        var vis = false;
        $.each($('.pf-isin-' + aa), function(i, val) {
            if ($(val).val() != '') { vis = (vis || true); }
        });
        if (vis) {
            if ($('#updcar' + aa).is(":hidden")) {
                $('#addcar' + aa).show();
            }
        }
        else { $('#addcar' + aa).hide(); $('#updcar' + aa).hide(); }
    } else { $('#addcar' + aa).hide(); $('#updcar' + aa).show(); }
}
function fondo(isin, perc) {
    this.isin = isin;
    this.percentuale = perc;
}
function printCart(carr) {
    var i, idac;
    var idaa = carr.profilo;
    $("#totinv" + idaa).val(carr.quantita);
    for (i = 0; i < carr.fondiObj.length; i++) {
        idac = carr.fondiObj[i].assetClass;
        setValueInRow(idaa, idac, carr.fondiObj[i].descFund, carr.fondiObj[i].isin, carr.fondiObj[i].impMinimo);
        //$("#hisin" + idaa + "-" + idac).val(carr.fondiObj[i].isin);
        //$("#hmin" + idaa + "-" + idac).val(carr.fondiObj[i].impMinimo);
        //$("#txt" + idaa + "-" + idac).html(carr.fondiObj[i].descFund);
    }
    calcolaPerc(aValori['valori' + idaa], carr.quantita);
    enableCart(idaa, true);
    chvistab('#tabs-'+idaa);
}
function getCart() {
    top.getCarrello(callbackGet);
}
function addToCart(postfix) {
    postfixvalue = postfix;
    var carr = makeCart();
    if (carr.quantita <= 0) {
        //$('.pf-label').html("Inserire il totale da investire. " + carr.quantita);
        //return false;
    }
    $('.pf-label').html("Attendere prego...");
    callbackprocess = true;
    top.setCarrello(carr, callbackSet);
    callbacktimeout = window.setTimeout(waitForCallback, 30000);
}
function waitForCallback() {
    callbackprocess = false;
    $('.pf-label').html("Timeout durante la richiesta di inserimento.");
}
function makeCart() {
    var quant = $('#totinv' + postfixvalue).val();
    if (quant == '') quant = 0;
    var cart = {
        "profilo": $('.pf-profilo-' + postfixvalue).val(),
        "numFondi": 0,
        "quantita": quant,
        "fondi": null
    };
    var numfondi = 0;
    var arrIsin = $.makeArray($('.pf-isin-' + postfixvalue));
    var arrPerc = $.makeArray($('.pf-perc-' + postfixvalue));
    $.each(arrIsin, function(i, val) {
        if ((val.value != '')) {
            //alert("i " + i + " val " + val.value);
            numfondi++;
        }
    });
    cart.numFondi = numfondi;
    cart.fondi = new Array(numfondi);
    numfondi = 0;
    $.each(arrIsin, function(i, val) {
        if ((val.value != '')) {
            cart.fondi[numfondi] = new fondo(val.value.replace(",", "."), arrPerc[i].value);
            numfondi++;
        }
    });
    return cart;
}
function toggleTutorialEsteso(id) {
    if ($('#bot' + id).attr('src') == '../content/images/cartimpr_off.gif') {
        $('#bot' + id).attr('src', '../content/images/cartimpr_on.gif');
        $('#cnt_' + id).show();
    }
    else {
        $('#bot' + id).attr('src', '../content/images/cartimpr_off.gif');
        $('#cnt_' + id).hide();
    }
    top.calcHeightIframe();
    location.href = '#an' + id;
}
function apriPdfInfo_old(socGest) {
    var _sg = "";
    switch (socGest) {
		case 3769: _sg = "190"; break;
		case 1768: _sg = "151"; break;
		case 1453: _sg = "178"; break;
		case 7591: _sg = "144"; break;
		case 3: _sg = "1"; break;
		case 2015: _sg = "110"; break;
		case 1489: _sg = "125"; break;
		case 1512: _sg = "126"; break;
		case 1503: _sg = "114"; break;
		case 136: _sg = "127"; break;
		case 339: _sg = "3"; break;
		case 1455: _sg = "6"; break;
		case 98: _sg = "4"; break;
		case 3206: _sg = "155"; break;
		case 198: _sg = "109"; break;
		case 1937: _sg = "133"; break;
		case 1856: _sg = "113"; break;
		case 2046: _sg = "108"; break;
		case 1743: _sg = "108"; break;
		case 302: _sg = "112"; break;
		case 936: _sg = "111"; break;
		case 1736: _sg = "117"; break;
		case 8981: _sg = "165"; break;
		case 1766: _sg = "165"; break;
		case 7712: _sg = "170"; break;
		case 2360: _sg = "140"; break;
		case 7596: _sg = "140"; break;
		case 4351: _sg = "140"; break;
		case 2229: _sg = "140"; break;
		case 3136: _sg = "140"; break;
		case 4305: _sg = "140"; break;
		case 2359: _sg = "140"; break;
		case 1897: _sg = "140"; break;
		case 1896: _sg = "140"; break;
		case 4350: _sg = "140"; break;
		case 2778: _sg = "140"; break;
		case 2735: _sg = "140"; break;
		case 170: _sg = "161"; break;
		case 7780: _sg = "161"; break;
		case 1765: _sg = "180"; break;
		case 176: _sg = "118"; break;
		case 1654: _sg = "150"; break;
		case 1682: _sg = "150"; break;
		case 261: _sg = "195"; break;
		case 2427: _sg = "101"; break;
		case 190: _sg = "101"; break;
    }
    top.getFogliInfo(_sg);
}
function apriPdfInfo(isin, tipo) {
    top.getFogliInfo(isin, tipo);
}
function apriPdfFondo(codiceFida) {
    top.apriSchedaFondoFida(codiceFida);
}
function goToAlert(dove) {
    top.callAlertPortafogliModello(dove);
}
function goToPFM() {
    top.callPortafogliModello();
}
function goToCart() {
    top.callCarrello();
}
function goToProfili() {
    top.callProfili();
}
function fOpenPieHist(url) {
    var s_width = screen.width;
    //var s_height = screen.height;
    var sizeL = (s_width/2)-300;
    //if (s_width >= 1024 && s_height >= 768) { sizeL = 760; }
    window.open(url, 'piehist', 'width=600,height=350,top=130,left=' + sizeL + ',status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');
}
function goToTopSel() {
    top.callTopS();
}