/*
Manipulate DOM element using the css according with: alten-anchise.*.css and youbiz-anchise.custom.css
*/
var FormatYouBizDom = function FormatYouBizDom(baseElement, usePopup) {

    var imagePath = globalRestylingImagePath;
    var hasClassFiltro = false;
    var hasClassFillForm = false;

    // Checks
    if (!imagePath) {
        alert('missing image path');
        return;
    }
    if (!baseElement) {
        baseElement = ':root';
    }

    // Perform Manipulation
    if (usePopup) {
        executePopupManipulation(baseElement);
    } else {
        executeDomManiputation(baseElement);
    }

    // Main 
    function executePopupManipulation(baseElement) {

        rebuiltPopupPdf(baseElement);

        formatFormFields(baseElement);

        rebuildSectionTitles(baseElement)

        formatTables(baseElement);

        formatPopupMandatoryLabel(baseElement);
    }

    function executeDomManiputation(baseElement) {

        rebuildPageContainer(baseElement);

        rebuildPageTitle(baseElement);

        rebuildSectionTitles(baseElement);

        formatFormFields(baseElement);

        placePageButtons(baseElement);

        formatTables(baseElement);

        formatMandatoryLabel(baseElement);

        formatMonoConto(baseElement);

    }

    // Functions
    function rebuildPageContainer(baseElement) {

        var that = baseElement.children().first();

        if (that.is('form')) {
            that = that.children().first();
        }

        if (that.hasClass('Empty')) {
            that = that.next();
        }

        that.addClass('new-riquadro').removeAttr('style').removeAttr('width');

        hasClassFiltro = that.hasClass('filtro');
        if (hasClassFiltro) {
            that.removeClass('filtro');
        }
        hasClassFillForm = that.hasClass('FillForm');
        if (that.hasClass('FillForm')) {
            that.removeClass('FillForm');
        }

        that.wrap($('<div class="container"></div>'));

    }

    function rebuiltPopupPdf(baseElement) {
        var that = baseElement.children().first();

        hasClassFiltro = that.hasClass('filtro');

        if (that.hasClass('PDF')) {
            that.removeClass('filtro');

            // Title
            that.find('td').first().addClass('old-tableHeader');

            // Stampa button
            that.find('.Comandi').addClass('txt_center');
        }
    }

    function rebuildPageTitle(baseElement) {
        var newRiquadro = $('.new-riquadro', baseElement);

        // Wraps h1 around titoloTabella text
        if (!newRiquadro.hasClass('search') && !newRiquadro.hasClass('confirmed')) {

            $('.new-riquadro td:first', baseElement).each(function (index, element) {
                var that = $(this);
                var txt = that.text();

                $('.titoloFiltri img').remove();

                titleNewPage(that, txt);
            });
        }

        // Move help link button from table.search to page-title
        newRiquadro.filter('.search').find('.toolbar, .itemtoolbar').find('.helplink').appendTo('.page-title h1');

        var btnHelp = $('#helpButton', baseElement);
        btnHelp.text('')
               .html('<img src="' + imagePath + 'i_help.png" class="imgSrv" alt="Help On Line">');
    }

    function rebuildSectionTitles(baseElement) {
        var divGridTable = $('.divgrid', baseElement).find('table');

        var sectionTitles = divGridTable.filter('.table').find('.head-title');
        sectionTitles.each(function () { $(this).remove(); });

        var summaryTables = divGridTable.filter('.summary');
        var summaryTitles = summaryTables.find('.head-title');
        summaryTitles.each(function () { $(this).remove(); });

        summaryTables.each(function () {
            var ragSocTitles = $('tr.bg-green-light', this);

            ragSocTitles.each(function () {
                var that = $(this).find('td').first();
                var txt = that.text();
                titleNewSection(that, txt);
            });
        });

        var sectionTitles = divGridTable.filter('.dettagliodispo').find('.head-title');
        sectionTitles.each(replaceTitle);

        var gridTitles = $('table.grid', baseElement).find('.head-title');
        if (gridTitles.length > 1) {
            gridTitles.each(replaceTitle);
        } else {
            gridTitles.each(function () { $(this).remove(); });
        }

        var mainTitles = $('table.main', baseElement).find('.subtitle, .subtitleBottom, .title');
        mainTitles.each(function () {
            var that = $(this);
            if (that.find('input[type="image"]').length == 0) {
                var txt = that.text();
                if (that.hasClass('title')) {
                    titleNewPage(that, txt);
                } else {
                    titleNewSection(that, txt);
                }
            }
        });

        // replace open/close icons
        $('input[src*="desc.gif"]', baseElement).attr('src', imagePath + 'ico-expand.png');

        // Fix for Anagrafica Azienda
        var btnHelp = $('#helpButton', baseElement);
        if (btnHelp.closest('.Empty') != null) {
            btnHelp.appendTo($('.new-riquadro .page-title h1', baseElement));
        }
    }

    function formatFormFields(baseElement) {

        $('td[height="1"]', baseElement).height(5);
        $('td[align="right"]', baseElement).removeAttr('align').addClass('right');
        $('td[align="left"]', baseElement).removeAttr('align').addClass('left');

        $('td[align="center"]', baseElement).each(function (index, element) {
            if ((!$(this).hasClass('page-title')) && (!$(this).hasClass('old-sectionTitle'))) {
                $(this).removeAttr('align').addClass('txt_center');
            }
        });

        $('hr', baseElement).remove();

        $('input[type="text"]', baseElement).addClass('new-form-control');
        $('input[type="password"]', baseElement).addClass('new-form-control');
        $('input[type="button"]', baseElement).addClass('btn');
        $('input[type="submit"]', baseElement).addClass('btn');
        $('input[type="file"]', baseElement).addClass('btn-file');

        $('textarea', baseElement).addClass('new-form-control');

        $('select', baseElement).addClass('new-form-control');
        $('select', $('.old-tabContent', baseElement)).css('height', 'auto');
        $('select[size]', baseElement).css('height', 'auto');

        $('img[src$="dummy.gif"]', baseElement).remove();

        $('img[src*="calendar.gif"]', baseElement).each(function (index, element) {
            replaceIcon($(this), 'calendar');
        });

        $('img[src*="help.gif"]', baseElement).each(function (index, element) {
            replaceIcon($(this), 'i_help');
        });

        $('.ank-icon-filter-apply', baseElement).each(function (index, element) {
            var that = $(this);
            var pic = 'i_quick-filter';

            if (that.hasClass('disabled'))
                pic += '-disabled';

            replaceIcon(that, pic);
        });

        $('.ank-icon-filter-go', baseElement).each(function (index, element) {
            replaceIcon($(this), 'i_filter');
        });

        $('.ank-icon-filter-reset', baseElement).each(function (index, element) {
            replaceIcon($(this), 'i_remove-filter');
        });

        $('.ank-icon-export-Pdf', baseElement).each(function (index, element) {
            replaceIcon($(this), 'i_pdf');
        });

        $('.new-riquadro .btn', baseElement).addClass('small');
    }

    function placePageButtons(baseElement) {

        var buttons = $('.Comandi input', baseElement).addClass('btn').removeClass('small');

        var btnContainer = $('<div />', baseElement).addClass('new-buttons');
        btnContainer.append(buttons).insertAfter($('.new-riquadro').first());
    }

    function formatTables(baseElement) {
        var domTables = $('table', baseElement);
        domTables.attr('cellpadding', '0').attr('cellspacing', '0');

        // format table that has input field
        domTables.filter(':not(:has(table))')
                 .filter(':has(input), :has(select)')
                 .each(function () {
                     $(this).addClass('old-inputForm');
                     //has class Fillform
                     if (hasClassFiltro || hasClassFillForm) {
                         $(this).closest('tr').addClass('section');
                     }
                 });
        domTables.find('tr[id^="FiltriAvanzati"]')
                 .each(function () {
                     $(this).addClass('section');
                 });
        $('.radiobuttonrange', baseElement).closest('tr').addClass('section');

        // format sorting arrow
        var divGrid = $('div.divgrid', baseElement);
        divGrid.find('.grid-head-cell').find('td').each(function () {
            $(this).removeAttr('style');
        });

        // format pagination
        var pager = $('.pager');
        pager.find('td').each(function () {
            $(this).removeAttr('style');
        });

        // format row
        domTables.find('.grid').each(function (index, element) {
            var that = $(this);
            that.addClass('table').removeClass('grid');
            that.attr('cellpadding', '0').attr('cellspacing', '0');

            $('.sottoTitoloTabella', that).removeClass('sottoTitoloTabella');

            $('td.rigaChiara', that).removeClass('rigaChiara').parent().addClass('odd');
            $('td.rigaScura', that).removeClass('rigaScura').parent().addClass('even');

            $('.rigaChiara', that).removeClass('rigaChiara').addClass('odd');
            $('.rigaScura', that).removeClass('rigaScura').addClass('even');

        });

        domTables.find('.pl_header_table').attr('cellpadding', '0').attr('cellspacing', '0');

        // replace table header td with th
        var tabHead = $('td.pl_header', baseElement).parent();
        $('td', tabHead).each(function (index, element) {
            var that = $(this);
            var colspan = that.attr('colspan') != null ? that.attr('colspan') : '1';
            var content = that.html();

            that.replaceWith('<th colspan="' + colspan + '">' + content + '</th>');
        });

        $('td', domTables.find('.pl_header')).each(function (index, element) {
            var that = $(this);

            var colspan = that.attr('colspan');
            var content = that.html();

            that.replaceWith('<th colspan="' + colspan + '">' + content + '</th>');
        });

        $('td[background]', baseElement).removeAttr('background');

        // No white border for standard input table
        domTables.find('.subTable').removeClass('borderwhite');
    }

    function formatMandatoryLabel(baseElement) {

        var mandatoryLabel = $('.LabelRed', $('.new-riquadro', baseElement));

        if (mandatoryLabel.length > 0) {
            mandatoryLabel.removeClass('LabelRed')
                          .addClass('testoRedSmallBold');
        }
    }

    function formatPopupMandatoryLabel(baseElement) {

        var mandatoryLabel = $('.LabelRed', baseElement);

        if (mandatoryLabel.length > 0) {
            mandatoryLabel.removeClass('LabelRed')
                          .addClass('testoRedSmallBold');
        }
    }

    function formatMonoConto(baseElement) {
        var gridMonoConto = $('span.line, span.noline', baseElement);

        gridMonoConto.find('.tdright').addClass('tdright-force-left')
    }

    // Helpers
    function replaceIcon(element, filename) {

        if (element.is('a')) {
            if ($('img', element).length > 0)
                $('img', element).attr('src', imagePath + filename + '.png').attr('border', 0).attr('height', 20).attr('width', 20);
            else
                element.html('<img src="' + imagePath + filename + '.png' + '" border="0" width="20" height="20" />');
        } else
            element.attr('src', imagePath + filename + '.png').attr('border', 0).attr('height', 20).attr('width', 20);

        element.removeClass('ui-icon').removeClass('ank-icon');
    }

    function replaceTitle(index, element) {

        var newTitleSection = $(this).find('td').first();
        var oldTableHeader = $(this).find('th').first();

        if (newTitleSection.length > 0) {
            var txt = newTitleSection.text();

            titleNewSection(newTitleSection, txt);
        }

        if (oldTableHeader.length > 0) {
            oldTableHeader.addClass('old-tableHeader');
        }
    }

    function titleNewSection(element, text) {
        element.html('<h3 class="new-titleSection">' + text + '</h3>')
               .css('padding-left', 0)
               .parentsUntil('table')
               .parent()
               .attr('cellpadding', 0)
               .attr('cellspacing', 0);
    }

    function titleNewPage(element, text) {
        element.addClass('page-title').removeClass('vnt-filter-title');

        element.html('<div class="search-flag"></div><h1>' + text + '</h1>');
    }

};