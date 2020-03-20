/* jshint strict:false */
/* global $, loadContent, unloadContent, afterLoadContent, logMessage, logType, resetErrorDiv, resetTAB, click:true,
    stopObservingEventOnContent */
/* exported selectTab, toggleTab, changeItemAccordion, selectStep, slideBoxTransf */

/**
 * @author Andrea Colanicchia, Michele Schino - Thera
 */

// ********** Oggetti globali animazione **********
// Oggetto per gestire il cambiamento di tab
var toggleTabConf = {
    suffix: '',
    index: 0,
    num: 0,
    effectName: '',
    hasEffects: false,
    reset: function () {
        this.suffix = '';
        this.index = 0;
        this.num = 0;
        this.effectName = '';
        this.hasEffects = false;
    }
};

// Oggetto per gestire il cambiamento di item dell'accordion
var changeItemAccordionConf = {
    index: 0,
    num: 0,
    rapid: false,
    unloadComplete: false,
    loadComplete: false,
    reset: function () {
        this.index = 0;
        this.num = 0;
        this.rapid = false;
        this.unloadComplete = false;
        this.loadComplete = false;
    },
    test: function () {
        return (this.unloadComplete && this.loadComplete);
    }
};

var isMoving = false;

// ********** Navigazione **********
// ***** Metodi Navigazione a tab *****

var getContentClass = function (suffix) {
    return (suffix === 'Ria') ? 'tab-content-on' : 'in';
};

// // Nasconde tutte le tab
var hideTabs = function (suffix) {
    var prefix = 'tab' + suffix,
        prefixLen = prefix.length;
    // if (typeof console !== 'undefined') { console.log('hideTabs - suffix: ' + suffix); }
    $('#contenuti545 li[id^="' + prefix + '"]').each(function (index, tab) {
        var i;
        tab = $(tab);
        i = parseInt(tab.attr('id').substring(prefixLen), 10);

        if (!isNaN(i)) {
            var content = $('#content' + suffix + i),
                contentClass = getContentClass(suffix);
            // Chiude la tab
            if (content.length) {
                if (content.hasClass(contentClass)) {
                    tab.removeClass('on');
                    var inputTab = tab.find('input[type=radio]');
                    if (inputTab.length) {
                        inputTab.removeAttr('disabled');
                        inputTab.attr('checked', false);
                    }
                    content.removeClass(contentClass).removeAttr('style');
                } else {
                    content.removeAttr('style');
                }
            }
        }
    });
};

// Imposta una tab come visibile
var selectTab = function (suffix, index) {
    var tab = $('#tab' + suffix + index),
        content = $('#content' + suffix + index),
        contentClass = getContentClass(suffix);
    hideTabs(suffix);
    // Mostra la tab
    tab.addClass('on');

    var inputTab = tab.find('input[type=radio]');
    if (inputTab.length) {
        inputTab.attr('disabled', 'disabled');
        inputTab.attr('checked', true);
    }
    content.addClass(contentClass);
    loadContent(suffix, index);
};

// Cambia contenuto quando si clicca su una tab
var toggleTab = function () {
    var data, contentClass;
    if (arguments[0] && arguments[0].preventDefault) {
        arguments[0].preventDefault();
    }
    logMessage(logType.log, 'toggleTab');
    if (!isMoving) {// Effect.Queues.get('effects').length === 0
        isMoving = true;
        data = arguments;
        resetErrorDiv('errorDiv0', []);
        toggleTabConf.reset();
        toggleTabConf.suffix = data[1];
        toggleTabConf.num = data[2];
        toggleTabConf.effectName = data[3];
        toggleTabConf.hasEffects = (toggleTabConf.effectName !== '');
        contentClass = getContentClass(toggleTabConf.suffix);
        resetTAB();
        if (!toggleTabConf.hasEffects || !$('#content' + toggleTabConf.suffix + toggleTabConf.num).hasClass(contentClass)) {
            var prefix = 'content' + toggleTabConf.suffix,
                prefixLen = prefix.length,
                arrTabs = $('#contenuti545').find('div[id^="' + prefix + '"]');
            arrTabs.each(function (index, content) {
                content = $(content);
                var i = parseInt(content.attr('id').substring(prefixLen), 10);
                if (!isNaN(i) && content.hasClass(contentClass)) {
                    toggleTabConf.index = i;
                    // Gestisce la fine della transizione sulla tab dopo che sono stati caricati i dati
                    content.on('content:unloadComplete', toggleTabUnloadCallback);
                    click = true;
                }
            });
            unloadContent(toggleTabConf.suffix, toggleTabConf.index);
        } else {
            enableMoving();
        }
    }
    return false;
};

var toggleTabUnloadCallback = function (event) {
    event.stopPropagation();
    logMessage(logType.log, 'toggleTabUnloadCallback');
    var content1 = $('#content' + toggleTabConf.suffix + toggleTabConf.index).off('content:unloadComplete'),
        content2 = $('#content' + toggleTabConf.suffix + toggleTabConf.num),
        tab1 = $('#tab' + toggleTabConf.suffix + toggleTabConf.index),
        contentClass = getContentClass(toggleTabConf.suffix);
    if (tab1.length) {
        tab1.removeClass('on');
        var inputTab = tab1.find('input[type=radio]');
        if (inputTab.length) {
            inputTab.removeAttr('disabled');
            inputTab.attr('checked', false);
        }
    }

    // Nasconde la tab
    if (toggleTabConf.hasEffects) {
        if (toggleTabConf.effectName !== 'appear') {
            content1.slideUp(1000, function () {
                content1.removeClass(contentClass).css('display', '');
            });
        } else {
            content1.fadeOut(1000, function () {
                content1.removeClass(contentClass).css('display', '');
            });
        }
    } else {
        content1.removeClass(contentClass).css('display', '');
    }
    // Gestisce la fine della transizione sulla tab dopo che sono stati caricati i dati
    content2.on('content:loadComplete', toggleTabLoadCallback);
    loadContent(toggleTabConf.suffix, toggleTabConf.num);
};

var toggleTabLoadCallback = function (event) {
    event.stopPropagation();
    logMessage(logType.log, 'toggleTabLoadCallback');
    var tab2 = $('#tab' + toggleTabConf.suffix + toggleTabConf.num),
        content2 = $('#content' + toggleTabConf.suffix + toggleTabConf.num).off('content:loadComplete'),
        contentClass = getContentClass(toggleTabConf.suffix);
    if (tab2.length) {
        if (!tab2.hasClass('on')) {
            tab2.addClass('on');
            var inputTab = tab2.find('input[type=radio]');
            if (inputTab.length) {
                inputTab.attr('disabled', 'disabled');
                inputTab.attr('checked', true);
            }
        }
    }
    // Visualizza il contenuto della tab da aprire
    if (toggleTabConf.hasEffects) {
        if (toggleTabConf.effectName !== 'appear') {
            content2.addClass('loading');
            content2.hide().delay(1000).slideDown(1000, function () {
                content2.addClass(contentClass).removeClass('loading').css('display', '');
                afterLoadContent(toggleTabConf.suffix, toggleTabConf.num);
                enableMoving();
            });
        } else {
            content2.hide().delay(1000).fadeIn(1000, function () {
                content2.addClass(contentClass).css('display', '');
                afterLoadContent(toggleTabConf.suffix, toggleTabConf.num);
                enableMoving();
            });
        }
    } else {
        content2.addClass(contentClass).css('display', '');
        enableMoving();
    }
};

var enableMoving = function () {
    setTimeout(function () {
        isMoving = false;
    }, 250);
};

// ***** Metodi Accordion dashboard *****
// Cambia contenuto quando si clicca su una tab
var changeItemAccordion = function () {
    if (!isMoving) {// Effect.Queues.get('effects').length === 0
        isMoving = true;
        var data = arguments,
            content = null,
            doUnload = true,
            doLoad = true;

        changeItemAccordionConf.index = data[1];
        changeItemAccordionConf.num = data[1];

        if (data[2] !== 'unload') {
            changeItemAccordionConf.unloadComplete = true;
            doUnload = false;
        }

        if (data[2] !== 'load') {
            changeItemAccordionConf.loadComplete = true;
            doLoad = false;
        }

        if (doUnload) {
            content = getAccordionContent(changeItemAccordionConf.index);

            // Gestisce lo scaricamento dell'item dell'accordion
            $(content).on('content:unloadComplete', function (e) {
                contentProgressAccordionCallBack(e, 'unload');
            });

            unloadContent('Accordion', changeItemAccordionConf.index);
        }

        if (doLoad) {
            content = getAccordionContent(changeItemAccordionConf.num);

            content.find('.panel-body').addClass('loading');

            // Gestisce il caricamento dell'item dell'accordion
            $(content).on('content:loadComplete', function (e) {
                contentProgressAccordionCallBack(e, 'load');
            });

            loadContent('Accordion', changeItemAccordionConf.num);
        }
    }
};

// Controlla che tutte le parti della dashboard siano caricate
var contentProgressAccordionCallBack = function (event) {
    event.stopPropagation();
    var prefix = arguments[1];
    var contentInd = (prefix === 'load') ? changeItemAccordionConf.num : changeItemAccordionConf.index;
    var content = getAccordionContent(contentInd);

    changeItemAccordionConf[prefix + 'Complete'] = true;

    stopObservingEventOnContent(prefix, 'Accordion', contentInd);

    if (changeItemAccordionConf.test()) {
        content.find('.panel-body').removeClass('loading');
        enableMoving();
        // changeItemAccordionAnimation();
    }
};

// noinspection JSUnusedGlobalSymbols
var slideBoxTransf = function (elementToSlide, positionToStart, positionToEnd) {
    elementToSlide = $(elementToSlide);
    elementToSlide.css('margin-top', positionToStart);
    elementToSlide.fadeIn(300);
    elementToSlide.animate({
        marginTop: positionToEnd + 'px'
    }, 300);
};