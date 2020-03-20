/*****************************************************************************************************************************************************
 * AZIONI - Overlayer icona operativa *
 *
 * @author Andrea Colanicchia
 */
// Array che registra se un overlayer e' visualizzato/nascosto
var multiLinksFlag = {},
    multiLinksLayer = {};

// Visualizza/nasconde un overlayer
function multiLinks(nomeFile, dir, link, toggleArray, modaltitle) {
    var idLayerMenu = nomeFile.replace('.', '_'),
        linkId, container, readTooltip, tooltip, openMenuIcona;

    link = $(link).first();
    linkId = link.attr('id');

    // Div container con position relative
    container = link.closest('.linkTooltip');
    // Div del tooltip
    tooltip = $('#' + idLayerMenu).first();
    openMenuIcona = function () {
        // Nasconde gli altri overlayer eventualmente visualizzati
        $('.condiz2 .over').each(function (index, linkTooltip) {
            linkTooltip = $(linkTooltip);
            linkTooltip.removeClass('over');
            var item = linkTooltip.find('.sezioneLinks2:first'),
                linkVaiID = linkTooltip.find('.linkVai:first').attr('id');
            if (item.length) {
                var itemKey = item.attr('id');
                // Controlla se c'e' un tooltip, con un ID diverso da quello che stiamo aprendo,
                // che era rimasto aperto
                if ((itemKey !== idLayerMenu) && ((linkVaiID in multiLinksFlag) && (multiLinksFlag[linkVaiID] === 1))) {
                    multiLinksFlag[linkVaiID] = 0;
                    item.hide();
                }
            }
        });

        multiLinksFlag[linkId] = 1;
        container.addClass('over');

        var onLinks = tooltip.find('.linkOn'),
            offLinks = tooltip.find('.linkOff');
        onLinks.each(function (index) {
            var toggleItem = toggleArray[index];
            if (toggleItem === '*#*ND') {
                onLinks.eq(index).hide();
                offLinks.eq(index).hide();
            } else if (toggleItem === null) {
                onLinks.eq(index).hide();
                offLinks.eq(index).show();
            } else {
                var regexJS = /^javascript:/i;
                onLinks.eq(index).show();
                offLinks.eq(index).hide();
                if (toggleItem !== '') {
                    var linkEl = onLinks.eq(index).find('a:first'),
                        linkElHref = linkEl.attr('href');
                    if (!regexJS.test(toggleItem)) {
                        var regexQS = /\?/;
                        linkEl.attr('href', linkElHref + ((regexQS.test(linkElHref)) ? '&' : '?') + toggleItem);
                    } else { // Caso "javascript:"
                        linkEl.attr('href', toggleArray[index]);
                    }
                }
            }
        });
        // Immagine per aprire il tooltip
        var linkDimensions = { height: link.height(), width: link.width() };
        //AGGIUNTA PER GESTIRE ICONA OPERATIVA IN MODALE IN TPL RESPONSIVE
        if (container.attr('data-toggle') === 'modal') {
            if (typeof modaltitle == "undefined") modaltitle = "";
            tooltip.find(".modal-title").html(modaltitle);
            setOverlayerIconaOpertiva(tooltip)
        } else
        //COMPORTAMENTO AS IS
        {
            tooltip.css({
                left: linkDimensions.width - tooltip.width() + 'px',
                top: '0px',
                display: 'block'
            });
        }
        //FINE AGGIUNTA PER GESTIRE ICONA OPERATIVA IN MODALE
    };
    readTooltip = function (data) {
        container.append(data);
        tooltip = container.find('#' + idLayerMenu).first();
        openMenuIcona();
    };

    if (tooltip.length) {
        // Se ho cliccato sulla stessa icona col tooltip aperto, lo chiudo
        if (((linkId in multiLinksFlag) && (multiLinksFlag[linkId] === 1))) {
            multiLinksFlag[linkId] = 0;
            container.removeClass('over');
            tooltip.hide();
        } else {

            tooltip = tooltip.remove();
            container.append(tooltip);
            openMenuIcona();
        }
    } else {
        // onLine
        jqAJAXCall('get', 'html', cgi_script + '/FMP/html/' + nomeFile, readTooltip, null, {});
        // locale
        // jqAJAXCall('get', 'text', nomeFile, readTooltip, null, {});
    }
    return true;
}

// Mette lo stile di over sulle opzioni dell'overlayer
function azioneOver(el) {
    $(el).addClass('over');
}

// Toglie lo stile di over sulle opzioni dell'overlayer
function azioneOut(el) {
    $(el).removeClass('over');
}

/** * |FINE| AZIONI - Overlayer icona operativa ** */
