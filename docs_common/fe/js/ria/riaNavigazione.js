/* jshint strict:false */
/* global $, createAJAXUrl, logMessage, isComunita200Mov, isMissingData, dashboardData:true, links, isMoving,
	riepilogoVincoli, caricaListaLineeVincolate, inizializzaTabLV, lineeVincolateConf, toggleTab, selectTab,
	andamenti:true, caricaListaSoglie, closePopOverLayerRIA, openPopOverLayerRIA, resetConferma */
/* exported nascondiRigheMov, hideLoadingRigheMov, showLoadingRigheMov, associaLinkMov, selectTabVincoli,
	selectSoglia, openLBapriPDF, openLBcoord, gotoLineeAttive */

/**
 * @author Andrea Colanicchia, Michele Schino - Thera
 */
var click = true;

var nascondiRigheMov = function () {
    $('.popUpMovimenti tr.bb').hide().removeClass('ok');
};

var hideLoadingRigheMov = function () {
    $('.popUpMovimenti tr.loading').hide();
};

var showLoadingRigheMov = function () {
    $('.popUpMovimenti tr.loading').show();
};

var associaLinkMov = function () {
    if (!isComunita200Mov) {
        if (!isMissingData(dashboardData.ct)) $('#linkMovimentiCT').attr('href', links.movimentiCT + '&idconto=' + dashboardData.ct);
        if (!isMissingData(dashboardData.cc)) $('#linkMovimentiCC').attr('href', links.movimentiCC + '&idconto=' + dashboardData.cc);
        if (!isMissingData(dashboardData.cd)) $('#linkMovimentiCD').attr('href', links.movimentiCD + '&idconto=' + dashboardData.cd);
        if (!isMissingData(dashboardData.cder)) {
            if (dashboardData.tipoRapporto < 5) $('#linkMovimentiCDER').attr('href', links.movimentiCDER + '&idconto=' + dashboardData.cder);
            else $('#linkMovimentiCDER').attr('href', links.movimentiCDER2 + '&idconto=' + dashboardData.cder);
        }
    } else {
        if (!isMissingData(dashboardData.ct)) $('#linkMovimentiCT').attr('href', links.movimenti200CT + '&accountId=' + dashboardData.ct);
        if (!isMissingData(dashboardData.cc)) {
            $('#linkMovimentiCC').attr('href', links.movimenti200CC + '&accountId=' + dashboardData.cc);
        }
        if (!isMissingData(dashboardData.cd)) $('#linkMovimentiCD').attr('href', links.movimenti200CC + '&accountId=' + dashboardData.cd);
        if (!isMissingData(dashboardData.cder)) {
            if (dashboardData.tipoRapporto < 5) $('#linkMovimentiCDER').attr('href', links.movimenti200CC + '&accountId=' + dashboardData.cder);
            else $('#linkMovimentiCDER').attr('href', links.movimenti200CT + '&accountId=' + dashboardData.cder);
        }
    }
};

var selectTabVincoli = function () {
    // logMessage(0, 'click: ' + click);
    if (!isMoving) {// Effect.Queues.get('effects').length === 0
        if (click) {
            click = false;

            if (!riepilogoVincoli.lista.length) {
                logMessage(0, 'caricaListaLineeVincolate');
                caricaListaLineeVincolate(true, false);
            } else {
                logMessage(0, 'toggleTab');
                inizializzaTabLV();
                toggleTab(window, 'Ria', 3, 'slide');

                lineeVincolateConf.indexTab = 1;
                selectTab('Vinc', 1);
            }
        }
    }
};

var selectSoglia = function (e) {
    e.preventDefault();
    if (!isMoving) {// Effect.Queues.get('effects').length === 0
        if (click) {
            click = false;

            var andamento = true;

            if (andamenti.contoCorrente.length && andamenti.contoDeposito.length) andamento = false;

            caricaListaSoglie(andamento, true);
        }
    }
    return false;
};

// lightbox per icone dashboard
var loadOpenLBapriPDF = function () {
    $('#lbConferma9 .head img:first, #annulla9, #linkStampaCoordinate').click(function () {
        removeOpenLBapriPDF();
        closePopOverLayerRIA('#lbConferma9');
    });
};

var removeOpenLBapriPDF = function () {
    $('#lbConferma9 .head img:first, #annulla9, #linkStampaCoordinate').unbind('click');
};

var openLBapriPDF = function () {
    $('#linkStampaCoordinate').attr('href', links.stampaCoordinate + '&contoNum=' + encodeURI($('#selectConti').val()));
    loadOpenLBapriPDF();
    openPopOverLayerRIA('#lbConferma9', 'fixed');
    return false;
};

var openLBcoord = function () {
    var url = createAJAXUrl('/getCoordBancarieSimple.jsp', '/wbOnetoone/wbblack/ajax/json');
    $('#homeInvioCoorBank').load(
        url, {
            divId: '#homeInvioCoorBank',
            idx: $('#selectConti').val()
        },
        function () {
            resetConferma('Email');
            openPopOverLayerRIA('#lbHomeInvioCoorBank');
        }
    );
};

var gotoLineeAttive = function () {
    if (arguments[0] && arguments[0].preventDefault) {
        arguments[0].preventDefault();
    }
    if (!isMoving) {// Effect.Queues.get('effects').length === 0
        var index = arguments[1];
        if (click) {
            click = false;

            if (!riepilogoVincoli.lista.length) {
                toggleTab(window, 'Ria', 3, 'slide');
                lineeVincolateConf.indexTab = index;
                selectTab('Vinc', index);

                caricaListaLineeVincolate(true, false);
            } else {
                inizializzaTabLV();

                toggleTab(window, 'Ria', 3, 'slide');
                lineeVincolateConf.indexTab = index;
                selectTab('Vinc', index);
            }
        }
    }
    return false;
};
