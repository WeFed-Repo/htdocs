/*globals $, jQuery, menuData, navIndex, getNextHighestZindex, isTouch, vaOpen,
    getBank, wStore, param, cgi_script, firebugEnabled, cmbLoad, appuLoad,
    chatBtnEnabled:true, chatBtnDisabled:true, egain_setTimerCheckVisibility:true, ResizeSensor */
/*exported brow, setHasErrors, fixDate, fixCols, getCodeOf, resizeTab, appendDatePickerIcon,
    proseguiStep, modificaStep, renderPickDateMobile, setOverlayerIconaOpertiva, getModal, obscurateElement,
    unObscurateElement, fixQuant, fixDescrizioni, setSpinner, setEffectTable, logText, refreshIframeSize */
/* jshint strict:false */
/* "use strict"; */
var eGain = {},
    vivChatWr,
    toolInitPos = {},
    tooldefaultpos;
/* Raccoglie varie informazioni del browser nell'apposito oggetto */
var brow = (function() {
    var device = function() {
        var dev = "md";
        var dWidth = $(window).width();
        if (dWidth < 1024) dev = "sm";
        if (dWidth < 768) dev = "xs";
        return dev;
    };
    return { device: device };
})();
var getAmbiente = function() {
    var amb = "produzione";
    var fpUrl = location.href;
    if (fpUrl.indexOf("librerie") > 0 && fpUrl.indexOf(".webank.local") > 0) {
        amb = "librerie";
    } else {
        if (fpUrl.indexOf("web.webank.local") > 0) {
            if (fpUrl.indexOf("fix") > 0) {
                amb = "fix";
            } else {
                amb = "sviluppo";
            }
        }
    }
    return amb;
};
/* Comportamenti automatici */
var structure = (function() {
    /* Variabili strutturali */
    var animationDuration = 200,
        menuDesktop = function() {
            var lev1 = [];
            var lev2 = [];
            var menuHtmlNode = function(title, href, id, selected, submenu, isnew, responsive, ishidden, navlevel) {
                ishidden = (typeof ishidden == "undefined") ? false : ishidden;
                var displayprop = (ishidden) ? "style=\"display:none\"" : "";
                var classes = [];
                var subMenu = (submenu) ? submenu : "";
                if (id == selected) {
                    classes.push("selected");
                }
                var newCode = "";
                if (isnew) {
                    newCode = "<span class=\"new\">New</span>";
                    classes.push("new");
                }
                var responsiveattr = "";
                if (!responsive && href) responsiveattr = "data-responsive=\"n\"";
                if (!href) {
                    href = "#!";
                } else {
                    var fDeb = (location.href.indexOf("fdeb=true") > 0) ? "&fdeb=true" : "";
                    href = href + fDeb;
                }
                var nvattr = "";
                if (navlevel) {
                    nvattr = "aria-expanded=\"false\" aria-haspopup=\"true\" id=\"level" + navlevel + "_" + id + "\"";
                    if (navlevel == 2) {
                        nvattr = nvattr + " aria-owns=\"level" + navlevel + "_" + id + "_sub\" aria-hidden=\"false\" aria-controls=\"level" + navlevel + "_" + id + "_sub\"";
                    }
                }
                return "<li " + displayprop + " class = \"" + classes.join(" ") + "\" ><a href=\"" + href + "\" " + responsiveattr + nvattr + " ><span class=\"voice\">" + title + "</span></a>" + newCode + subMenu + "</li>";
            };
            if (typeof menuData != "undefined") {
                $.each(menuData, function(i, v) {
                    var isSelected = false;
                    isSelected = (v.id == navIndex[0]);
                    lev1.push(menuHtmlNode(v.title, v.link, v.id, navIndex[0], null, v["new"], v.responsive, v.hidden));
                    if (isSelected) {
                        $.each(v.voices, function(x, val) {
                            // Prepara il terzo livello
                            var lev3html = "";
                            if (val.voices) {
                                lev3html = lev3html + "<div class=\"tlWrap\"><ul id=\"level2_" + x + "_sub\" aria-labelledby=\"level2_" + x + "\">";
                                $.each(val.voices, function(indice, valore) {
                                    lev3html = lev3html + menuHtmlNode(valore.title, valore.link, valore.id, navIndex[2], null, valore["new"], valore.responsive);
                                });
                                lev3html = lev3html + "</ul></div>";
                            }
                            lev2.push(menuHtmlNode(val.title, val.link, val.id, navIndex[1], lev3html, val["new"], val.responsive, val.hidden, 2));
                        });
                    }
                });
            }
            return { lev1: lev1.join(""), lev2: lev2.join("") };
        }(),
        // FUNZIONI PER MENU MOBILE
        toggleMenu = function() {
            var level1;
            if (typeof structure.mobileMenu == "undefined") {
                // Crea il menu mobile "al volo"
                structure.mobileTree = function(chiave) {
                    var extloaded = !($(this).attr("data-menukey"));
                    var key = !extloaded ? parseFloat($(this).attr("data-menukey")) : chiave;
                    // var key = parseFloat($(this).attr("data-menukey"));
                    // Assembla il navigatore secondo e terzo livello del primo selezionato
                    // Pulsante "back"
                    var backTo = $("<a>").attr("href", "#!").addClass("back").append($("<i>").addClass("icon icon-arrow_left"), $("<span>").html("Menu / " + menuData[key].title)).click(function() {
                        structure.mobileMenu.detailTree.empty().toggleClass("opened", animationDuration);
                    });
                    var voiceList = $("<ul>").attr({ "role": "menu" });
                    $.each(menuData[key].voices, function(ind, val) {
                        var liv2voice = $("<li>");
                        if (val.voices) {
                            liv2voice.append($("<span>").html(val.title));
                            var liv3voices = $("<ul>");
                            $.each(val.voices, function(indice, valore) {
                                var liv3voiceSelected = (navIndex[2] == indice && navIndex[0] == key && navIndex[1] == val.id) ? true : false;
                                var liv3voiceLink = (liv3voiceSelected) ? "#!" : valore.link;
                                var liv3voice = $("<li>").append($("<a>").html(valore.title).attr({ "role": "menuitem", "data-responsive": (valore.responsive) ? "y" : "n", "href": liv3voiceLink }));
                                if (valore.link == "#!" || !valore.link) liv3voice.addClass("disabilitato");
                                if (liv3voiceSelected) liv3voice.addClass("selected");
                                liv3voices.append(liv3voice);
                            });
                            liv2voice.append(liv3voices);
                        } else {
                            liv2voice.empty().append($("<a>").html(val.title).attr({ "data-responsive": (val.responsive) ? "y" : "n", "href": val.link }));
                        }
                        voiceList.append(liv2voice);
                    });
                    var vistaGenResp = (menuData[key].responsive) ? "y" : "n";
                    var vistaGen = $("<a>").addClass("fplink").attr("data-responsive", vistaGenResp).html("Vista generale " + menuData[key].title).attr("href", menuData[key].link);
                    if (key) vistaGen.addClass("hidden-xs");
                    structure.mobileMenu.detailTree.append(backTo, vistaGen, voiceList);
                    if (extloaded) {
                        structure.mobileMenu.detailTree.show().toggleClass("opened");
                    } else {
                        structure.mobileMenu.detailTree.show().toggleClass("opened", animationDuration);
                    }
                    // Applica a tutte le nuove voci generate la funzione per il check responsive
                    structure.mobileMenu.detailTree.find("a[data-responsive=n]").click(function() { noRespOverlay(this, event); });
                };
                structure.mobileMenu = $("<div>").attr("id", "mobileMenu");
                // Genera il menu' mobile con i primi livelli (associando le varie icone)
                level1 = $("<ul>");
                $.each(menuData, function(i, v) {
                    // Assembla la voce per il touch
                    var menuIcon = $("<i>").addClass("icon icon-" + v.title.replace(/\s/g, "").toLowerCase());
                    var menuVoice = $("<a>").append(menuIcon, $("<span>").html(v.title));
                    if (v["new"]) menuVoice.append($("<span>").addClass("new").html("new"));
                    var level1Voice = $("<li>").attr({ "data-id": v.id, "data-responsive": (v.responsive) ? "y" : "n", "data-menukey": i }).append(menuVoice);
                    if (navIndex[0] == v.id) level1Voice.addClass("selected");
                    level1Voice.click(structure.mobileTree);
                    level1.append(level1Voice);
                });
                structure.mobileMenu.append(level1);
                // Genera la base per i secondi e terzi livelli
                structure.mobileMenu.detailTree = $("<div>").attr({ "id": "mobileDetailTree" });
                structure.mobileMenu.prepend(structure.mobileMenu.detailTree);
                $("body").prepend(structure.mobileMenu);
            }
            var otherButton = $("header .headbtn.usermenuopen");
            if (otherButton.hasClass("opened")) otherButton.trigger("click");
            $(this).toggleClass("opened", animationDuration);
            if (!((navIndex[0] == "0") && navIndex.length == 1)) {
                if (level1) structure.mobileTree(level1.find("li.selected").attr("data-menukey"));
            }
            structure.mobileMenu.toggleClass("opened", animationDuration);
        },
        // Menu' utente
        toggleUserMenu = function() {
            // Assembla il mobilemenu se non esiste
            if (typeof structure.mobileUserMenu == "undefined") {
                structure.mobileUserMenu = $("<div>").attr({ "id": "userMenu" });
                structure.mobileUserMenu.append($("#userMenuMobile"));
                $("body").prepend(structure.mobileUserMenu);
            }
            // Chiude l'eventuale "concorrente aperto"
            var otherButton = $("header .headbtn.menuopen");
            if (otherButton.hasClass("opened")) otherButton.trigger("click");
            $(this).toggleClass("opened", animationDuration);
            structure.mobileUserMenu.toggleClass("opened", animationDuration);
        };
    $(function() {
        var menuTouch;
        $(".level2>li").on("mouseenter focusin click", function() {
            //aggiunta per non mostrare menu quando è vuoto
            var isActivable = $(this).find('.tlWrap ul li').length > 0 ? true : false;
            if (isActivable) {
                $(this).addClass("active");
                var nZindex = getNextHighestZindex();
                $(this).find('ul').css('z-index', nZindex).attr({ "aria-expanded": "true" });
                $(this).find('a:first-child').css('z-index', nZindex + 1).attr({ "aria-expanded": "true" });
            }
            if (isTouch) {
                if (typeof menuTouch != "undefined") {
                    clearTimeout(menuTouch);
                }
                menuTouch = setTimeout(function() { $(".level2>li.active").delay(5000).removeClass("active"); }, 5000);
            }
        });
        $(".level2>li").on("mouseleave", function() {
            $(this).removeClass("active");
            $(this).find('ul').css('z-index', 9).attr("aria-expanded", "false");
            $(this).find('a:first-child').css('z-index', 10).attr("aria-expanded", "false");
        });
        /* inizializzazione selettore terzi e quarti livelli + restituzione oggetto*/
        // Appende le "opzioni" al livello selezionato 
        structure.thirdLevelMenu = $("<ul>").attr("id", "thirdLevelMenu");
        $.each($("#leftmenu>ul>li"), function(i, v) {
            v = $(v);
            var mvoice = $("<li>");
            if (v.hasClass("selected")) {
                mvoice.addClass("selected").append($("<span>").append(v.find("a").html()));
            } else {
                mvoice = v.clone();
            }
            structure.thirdLevelMenu.append(mvoice);
        });
        var lmVoice = $("#leftmenu .selected");
        lmVoice.append($("<i>").addClass("icon icon-ellipsis-v"), structure.thirdLevelMenu).click(function() { $(this).toggleClass("opened"); });
        /* Inizializzazioni  */
        /* Inizializzazione interattivita' oggetti */
        /* Primo livello */
        $("a.headbtn.menuopen").click(structure.toggleMenu);
        // Menu utente
        $("a.headbtn.usermenuopen").click(structure.toggleUserMenu);
        // Controllo flag e overlay responsive
        $("a[data-responsive=n]").click(function(event) {
            noRespOverlay(this, event);
        });
        // In librerie disabilita i link dei terzi livelli non navigabili
        $(".tlWrap li a[href='#!']").addClass("disabilitato");
    });
    return {
        toggleMenu: toggleMenu,
        toggleUserMenu: toggleUserMenu,
        menuDesktop: menuDesktop
    };
}());

/* TOOLBOX */
$(function() {
    var tbStatus = (wStore.read("tbStatus") == "compact") ? "compact" : "";
    // Funzioni di pilotaggio della toolbox
    var toolbox = $('#toolbox').addClass(tbStatus),
        toolbtnArr = $('#toolbtns .toolbtn'),
        toolObjArr = $(".toolobj");
    $('#toolhandle').click(function() {
        if (toolbox.hasClass('compact')) {
            toolbox.removeClass('compact expanded');
            toolbtnArr.removeClass('selected');
            toolObjArr.hide();
            wStore.write("tbStatus", "");
        } else {
            toolbox.addClass('compact');
            wStore.write("tbStatus", "compact");
        }
    });
    toolbtnArr.click(function() {
        var toolbtn = $(this);
        // Chiude tutti i tool aperti
        if (toolbox.hasClass('expanded')) {
            if (toolbtn.hasClass('selected')) {
                toolbox.removeClass('expanded');
                toolbtnArr.removeClass('selected');
            } else {
                toolbtnArr.removeClass('selected');
                toolbtn.addClass('selected');
            }
        } else {
            toolbtnArr.removeClass('selected');
            toolbtn.addClass('selected');
            toolbox.addClass('expanded');
        }
        // Apre il tool idicato dal bottone, nascondendo tutti gli altri
        $(".toolobj").hide();
        var toolId = toolbtn.find("a").attr("data-tool");
        var toolObj = $(toolId);
        // Determina la posizione di default del tool (partendo dal pulsante)
        tooldefaultpos = [toolbtn.offset().left - toolObj.width() + 17, 112];
        if (toolbtn.hasClass("selected")) {
            // Esegue funzioni specifiche per l'inizializzazione del tool
            toolObj.css("z-index", getNextHighestZindex());
            switch (toolId) {
                case "#toolCmb":
                    toolObj.css({ "left": tooldefaultpos[0] + "px", "top": tooldefaultpos[1] + "px" }).show();
                    toolObj.show();
                    cmbLoad();
                    break;
                case "#virtAss":
                    vaOpen();
                    break;
                case "#toolAppuntamento":
                    toolObj.show();
                    toolObj.css({ "left": tooldefaultpos[0] + "px", "top": tooldefaultpos[1] + "px" }).show();
                    appuLoad();
                    break;
            }
        } else {
            toolObj.hide();
        }
    });
    // Rende tutti i tool draggabili
    $(".toolobj").draggable({ handle: ".tooltop .titolo", containment: "window" });
    // Funzione pulsante "chiudi"
    $(".toolobj .chiudi").click(function() {
        $(".toolbtn a[data-tool='#" + $(this).parents(".toolobj").attr("id") + "']").trigger("click");
    });
});

/* TOOLBOX NORESP FIXED*/
var toolboxInit = function() {
    // Se e' presente la toolbox...
    if ($("#toolbtns").length) {
        if (!$("#toolbox").hasClass("resp")) {
            // INIZIALIZZAZIONE DEI BOTTONI RELATIVI AI VARI TOOL
            var toolInitOffset = $("#toolbtns").offset();
            toolInitPos = { "left": toolInitOffset.left + 53 + "px", "top": toolInitOffset.top + 108 + "px" };
            // Al click sui vari pulsanti con data-toolid impostato...
            $("#toolbtns *[data-toolid]").click(function() {
                var tbnt = $(this);
                var tId = tbnt.attr("data-toolid");
                // Chiudi tutti i tool aperti e rimuove la selezione dalla toolbar
                $(".tool, #virtAss").hide();
                $("#toolbtns .toolbtn a").removeClass("selected");
                tbnt.addClass("selected");
                var tool = $("#" + tId);
                // A seconda del tool si comporta in un modo diverso
                if (tId == "virtAss") {
                    vaOpen();
                } else {
                    if (tId == "tool2") $("#cmbData").trigger("change");
                    $("body").prepend(tool);
                    tool.draggable({ "handle": ".handle" }).css(toolInitPos).show();
                }
                tool.find(".close,.vaChiudi").click(function() {
                    $("#toolbtns .toolbtn a").removeClass("selected");
                });
            });
        }
    }
};
/* Wrapper per il document.write */
function getCodeOf(el) {
    /* jshint evil:true */
    if (typeof el === "undefined") el = "";
    document.write(el);
}

/* FRAMEWORK GESTIONE ERRORI */
/* Setta gli errori in un wrapper, una volta fornita una matrice */
/* Formato della matrice:
    field: "id" o oggetto direttamente
    text: "testo HTML dell'errore "
*/
function setHasErrors(errorMatrix, wrapper, classToAppend) {
    wrapper = $(wrapper);
    resetHasErrors(wrapper);
    if (errorMatrix.length) {
        $.each(errorMatrix, function(index, error) {
            setHasError(error.field, error.text, wrapper, classToAppend);
        });
    }
}
/* resetta tutti gli errori in un wrapper */
function resetHasErrors(wrapper) {
    wrapper = $(wrapper);
    wrapper.find(".requiredField, div[class*=\"col-\"]").removeClass('has-error');
    wrapper.find(".requiredField, div[class*=\"col-\"]").removeClass('has-alert');
    wrapper.find(".help-block.with-errors").remove();
}
/* Setta l'errore su di un singolo oggetto (campo o altro, risalendo al suo fieldset)*/
function setHasError(field, errortext, wrapper,classToAppend) {
    field = $(field);
    // Trova il primo parent contenente un etichetta
    var errorWrapper = $(field).closest(".requiredField", wrapper);
    var classToAppended = (typeof classToAppend == "undefined") ? 'has-error' : classToAppend;
   
    if (!errorWrapper.length) errorWrapper = $(field).closest("div:not(#contenuti)[class*=\"col-\"]", wrapper);
    
    errorWrapper.addClass(classToAppended);

    if (field.closest('.' + classToAppended).find('.with-errors').length === 0) { field.closest('.' + classToAppended).append('<span class="help-block with-errors">' + errortext + '</span>'); }

    $("html, body").addClass('scrollableElement');
    if ($('.' + classToAppended).length > 0) {
        if ($('.webview').length > 0 || $('.porting').length > 0) {
            $('.' + classToAppended).eq(0).find('input').eq(0).trigger('focus');
        } else {
            $("html, body").stop().animate({ scrollTop: $('.' + classToAppended).eq(0).offset().top - $('.headerMobile').height() + 'px' }, "300", function() { $('.' + classToAppended).eq(0).find('input').eq(0).trigger('focus'); });
        }
    }
}
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
//funzione per la gestione degli accordion tra i preferiti
function selectPreferred() {
    var accClosed = $('a[data-toggle = collapse].collapsed'),
        checkMenu = $('.panel-body input[type=checkbox]'),
        wrapperCheckbox = $('.panel-body');
    $('#openAll').click(function() {
        accClosed.trigger('click');
    });
    $('#closeAll').click(function() {
        $('a[data-toggle = collapse]').not('.collapsed').trigger('click');
    });
    $('#openSel').click(function() {
        wrapperCheckbox.each(function() {
            if ($(this).find(checkMenu).is(":checked")) {
                $(this).closest('.panel').find('.collapsed').trigger('click');
            } else {
                $(this).closest('.panel').find('a[data-toggle = collapse]').not('.collapsed').trigger('click');
            }
        });
    });
    $('#clearSel').click(function() {
        checkMenu.attr('checked', false);
    });
}
/*funzione svuota campi pin 32*/
/*funzione svuota campi pin 32*/
var AnnullaPin = function() {
    var AnnullaSing = $('.clearPin'),
        inputPin = $('.bgPin32 input[type="password"],.bgPin32 input[type="number"]');
    AnnullaSing.each(function() {
        $(this).click(function() {
            inputPin.val('');
            inputPin.attr('type', 'number');
            $('.pincode').find('input').eq(0).focus();
        });
    });
    inputPin.on('focus', function() {
        if (!$(this).val().length) { $(this).attr('type', 'number'); }
    });
    inputPin.on('keyup', function() {
        if ($(this).val().length >= 1) {
            $(this).attr('type', 'password');
            $(this).nextAll('input').focus();
        }
    });
};
/*funzione per determinare il viewport */
/* Verifica se schermo minore di... */
var viewdim = function() {
    var e = window,
        a = 'inner';
    if (!('innerWidth' in window)) {
        a = 'client';
        e = document.documentElement || document.body;
    }
    return { width: e[a + 'Width'], height: e[a + 'Height'] };
};
var isSmallDevice;
var findSmartDevice = function() {
    isSmallDevice = viewdim().width < 768 ? true : false;
};
/* VARIABILI E CONTROLLI PER DISPOSITIVI */
function resizeModalDevice(modalEl) {
    //if(isSmallDevice) {
    modalEl.find('.modal-content').css({
        'max-height': viewdim().height * 0.9,
        'overflow-y': 'auto',
        'overflow-x': 'visible'
    });
    modalEl.css('width', viewdim().width);
    modalEl.find('.modal-dialog').css('width', viewdim().width - 40);
    //modalEl.css('overflow','hidden');
    //}
}
/* assegna il maggior z-index al modal */
function setZindexModal() {
    var nZindex = getNextHighestZindex();
    $('.modal').on('show.bs.modal', function() {
        $(this).css('z-index', nZindex + 1);
        resizeModalDevice($(this));
    });
    $('.modal').on('shown.bs.modal', function() {
        $('.modal-backdrop').css('z-index', nZindex);
    });
    $('.modal').on('show.bs.modal', function() {
        $(this).appendTo('body');
    });
    $('.modal').on('hide.bs.modal', function() {
        $('body').removeClass('modal-open');
    });
}
function setModalLeft(elModal) {
    elModal = $(elModal);
    var isOpenedModal = false;
    elModal.on('shown.bs.modal', function() {
        isOpenedModal = true;
        var buttonCloseLeft = $('.close-left'),
            buttonCloseRight = $('.close-right'),
            buttonCloseTop = $('.close-top'),
            positionModalClosed = -($('.modal.in').find('.modal-dialog').innerWidth()) + 'px'; //definisco posizione per chiusura modale a sinistra/destra
        var arrowBack = '';
        // var modalisOpened = $('.modal').hasClass('in');
        /* definisco posizione di partenza delle modali left e right*/
        $('.slide-right').addClass('right').find('.modal-dialog').css('right', -$(this).innerWidth());
        $('.slide-left').addClass('left').find('.modal-dialog').css('left', -$(this).innerWidth());
        //aggiungo classe left a primo overlayer
        elModal.addClass('left');
        buttonCloseLeft.click(function() {
            $('.modal.in.right').removeClass('right').addClass('left');
            $('.modal.left.in').find('.modal-dialog').css('left', positionModalClosed); //animazione verso sinistra
            $('.modal-backdrop').remove(); //tolgo sfondo per preparare animazione successiva
            $('body').addClass('modal-open');
        });
        buttonCloseRight.click(function() {
            $('.modal.in.slide-right.left .modal-dialog').css('left', 'none');
            $('.modal.in.slide-right.left').removeClass('left').addClass('right');
            $('.modal-backdrop').remove();
            $('.modal').animate({ scrollTop: 0 });
        });
        buttonCloseTop.click(function() {
            $('.modal.in.fade.right .modal-dialog').css('right', 'none');
            $('.modal.in.fade.right').removeClass('right');
            $('.modal.fade.left .modal-dialog').css('left', 'none');
            $('.modal.slide-right .modal-dialog').css('left', 'none');
            $('.modal.fade.left').removeClass('left');
        });
        //posizione freccia indietro finestra modale
        $('.slide-right.right').on('show.bs.modal', function() {
            arrowBack = $(this).find('.close.close-right');
            setTimeout(function() { arrowBack.css('opacity', 1); }, 500);
        });
        $('.slide-right.right').on('shown.bs.modal', function() {
            $('body').addClass('modal-open');
            isOpenedModal = true;
            arrowBack.css({
                top: arrowBack.closest('.modal-content').innerHeight() / 2 + 'px'
            });
        });
        $('.left').on('shown.bs.modal', function() {
            $('body').addClass('modal-open');
        });
    });
    elModal.on('hidden.bs.modal', function() {
        isOpenedModal = false;
    });
    //tap su div di oscuramento, il modale si chiude con effetto di default
    $(document).on('click', function(e) {
        var modalOpened = $(e.target).closest(".modal-content"),
            iconOpBtn = $(e.target).closest(".linkVai");
        if (!modalOpened.length && isOpenedModal && !iconOpBtn.length) {
            $('.modal.fade.right .modal-dialog').css('right', 0);
            $('.modal.fade.right').removeClass('right');
            $('.modal.fade.left .modal-dialog').css('left', 0);
            $('.modal.fade.left').removeClass('left');
            $('.modal.slide-right .modal-dialog').css('left', 'none');
        }
    });
}
/* funzione che prende il contenuto icona operativa e lo appende in modale orizzontale*/
function setOverlayerIconaOpertiva(contIconaOper) { /* Tolto parametro modalTitle perché non usato */
    //resizeModalDevice(contIconaOper);
    setZindexModal();
    contIconaOper.css("z-index", getNextHighestZindex());
    contIconaOper.modal("show");
    //prepara l'overlayer per diventare uno slider orizzontale
    setModalLeft(contIconaOper);
    contIconaOper.on('hidden.bs.modal', function() {
        $('.linkTooltip.over a').trigger('click');
    });
}
// Crea e carica una modale
/* 
    es: getModal({
        id:"idmodale",
        titolo:"Titolo modale",
        body: $(contmodale)
        });
*/
var getModal = function(obj) {
    var modalOl,
        modId = (obj.id) ? obj.id : "modal" + Math.random();
    if ($("#" + modId).length <= 0) {
        modalOl = $("<div>").addClass("modal fade").attr({ "id": modId, "tabindex": -1, "role": "dialog", "aria-labelledby": modId + "Label" });
        var modalHeader = $("<div>").addClass("modal-header").append($("<a>").addClass("close btn-icon").attr({ "data-dismiss": "modal", "aria-label": "close" }).append($("<i>").addClass("icon icon-alert_error_fill icon-2x")), $("<h2>").addClass("modal-title").attr("id", modId + "Label").html(obj.titolo));
        var modalBodyCont = (typeof obj.body === "object") ? obj.body : "";
        var modalBody = $("<div>").addClass("modal-body").append($("<div>").addClass("container-fluid").append($("<div>").addClass("row").append($("<div>").addClass("col-xs-12").append(modalBodyCont))));
        $("body").prepend(modalOl.append($("<div>").addClass("modal-dialog").append($("<div>").addClass("modal-content").append(modalHeader, modalBody))));
    } else {
        modalOl = $("#" + modId);
    }
    return (modalOl);
};
/* appende il calendario ad una finestra modale su mobile */
var renderPickDateMobile = function(input, inst) {
    $('.ui-datepicker-title').hide();
    if (isSmallDevice || $('body').hasClass('webview')) {
        var modalWrapperPicker = '<div class="modal" id="datePickerWrapper" tabindex="-1" role="dialog"><div class="modal-dialog modal-sm" role="document"><div class="modal-content"><div class="modal-body"></div></div></div></div>';
        if ($('#datePickerWrapper').length === 0) { $(modalWrapperPicker).appendTo('#main'); }
        setZindexModal();
        inst.dpDiv.appendTo('#datePickerWrapper .modal-body');
        $('#datePickerWrapper').modal('show');
        $('body').addClass('modal-open');
        setTimeout(function() {
            inst.dpDiv.css({
                left: 0,
                top: 0,
                position: 'relative'
            });
        }, 0);
        $(document).on('click touchstart', function(e) {
            var calendarOpenedTarget = $(e.target);
            if (calendarOpenedTarget.hasClass('modal-backdrop')) {
                $('.modal').modal('hide');
            }
        });
    }
};

// Sistema le modali che fanno scrollare la pagina in alto
$(function () {
    var scrollPos,
        html,
        body = $('body'),
        htmlBody;
    
    if (body.hasClass('webview')) {
        html = $('html');
        htmlBody = $('html, body');
        html.css('height', '100%');
        scrollPos = 0;
        body.on('show.bs.modal', '.modal', function() {
            scrollPos = Math.max(html.scrollTop(), body.scrollTop(), htmlBody.scrollTop());
            body.css({
                top: -scrollPos
            });
        }).on('hide.bs.modal', '.modal', function() {
            body.css({
                top: 'auto'
            });
            htmlBody.scrollTop(scrollPos);
        });
    }
});

//TOOLTIP BOOTSTRAP
//inizializza tooltip
//recupera il title per comporre il tooltip e aggiunge la x di chiusura se dimensione schermo grande
var initTooltip = function() {
    $("[data-toggle='tooltip']").not(".inited").tooltipPlus().addClass("inited");
    // html complesso per i tooltip con ID indicato
    $.each($("[data-htmlid]"), function(i, v) {
        var ttHtml = $($(v).attr("data-htmlid")).addClass("inited");
        $(v).attr("data-title", ttHtml.html());
    });
    // Se l'id del tooltip non e' specificato...
    $.each($(".htmlTooltip").not(".inited"), function(i, v) {
        var ttHtml = $(v).addClass("inited");
        ttHtml.prev("[data-toggle='tooltip']").attr('data-title', ttHtml.html());
    });
    $("[data-toggle='tooltip']").on('shown.bs.tooltip', function() {
        $('.tooltip').css('z-index', getNextHighestZindex());
    });
    // Click fuori dal tooltip per chiuderlo
    var bodyEl = $('body');
    if (!bodyEl.hasClass('ttInited')) {
        bodyEl.addClass('ttInited').on('click touchstart', function(e) {
            var target = $(e.target),
                tooltipOpened = $(".tooltip.in"),
                isNotTooltip = target.attr('data-toggle') !== "tooltip",
                clickedOnCloseable = target.closest(".closeTooltip").length,
                clickedOutsideNotCloseable = !tooltipOpened.find('.closeTooltip').length && !target.closest(".tooltip.in").length;
            if (isNotTooltip && (clickedOnCloseable || clickedOutsideNotCloseable)) {
                tooltipOpened.tooltip('hide');
            }
        });
    }
};

function closeSelettoreRapportoOuterTap() {
    $(document).on('click touchstart', function(e) {
        var selettorOpened = $(e.target).closest(".selectRapp.highZ");
        if (!selettorOpened.length) {
            $('.selectRapp .selector').hide();
            $('.selectRapp.highZ').removeClass('highZ').addClass('lowZ');
        }
    });
}
var appendDatePickerIcon = function(idElement) {
    var icoDate = $("#" + idElement).datepicker().next('.ui-datepicker-trigger'),
        AddOnDate = $("#" + idElement).datepicker().closest('.editable-input').siblings('.input-group-addon.date');
    icoDate.appendTo(AddOnDate);
    //la maschera alle date si applica solo se compatibile
    //se non è android
    if (!/android/i.test(navigator.userAgent)) {
        $("#" + idElement).mask("99/99/9999");
    }
    //se è android
    else {
        var inputDate = $("#" + idElement);
        inputDate.unmask();
        inputDate.attr('maxlength', 10);
        inputDate.on('keyup', function(event) {
            var valueInputDate,
                keyCode = event.keyCode;
                valueInputDate = inputDate.val();
            if (valueInputDate.length == 2 && keyCode != 8) {
                inputDate.val(valueInputDate + '/');
            } else if (valueInputDate.length == 5 && keyCode != 8) {
                inputDate.val(valueInputDate + '/');
            }
        });
    }
    // Gestione tastiera x datepicher ipad 
    /*if ($("body").hasClass("webview") && (navigator.userAgent.match(/iPad/i) ) ) 
    {
        $(".ui-datepicker-trigger").click(function(event) {
          
            var inputDate = $(this).closest('.input-group').find('input[type=text]');
            if( inputDate.attr('readonly') != 'readonly' ){
                inputDate.attr('readonly',true).addClass('temp-readonly'); 
                inputDate.blur();
                $('.modal').on('hidden.bs.modal', function() {  
                    $('.temp-readonly').attr('readonly',false).removeClass('temp-readonly');
                    inputDate.focus();
                });
            }
        })
    }*/
    //END Gestione tastiera x datepicher ipad 
    //////////////////////////////////////////
    //Gestione tastiera x datepicher Android
    // END Gestione tastiera x datepicher Android
};
//FINE FUNZIONE PER TRASFORMARE I TAB IN ACCORDION
//inizializzazione dei tab-accordion
//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
//possono coesistere più gruppo di tab/accordion in pagina
//parametri: id contenitore e incice tab ch edeve essere aperto al load
var resizeTab = function(idTab, indexTabOpened) {
    //definizioni di variabili
    var tabContainer = $('#' + idTab);
    indexTabOpened = (typeof indexTabOpened === "undefined") ? 0 : indexTabOpened;
    tabContainer.each(function() {
        var el = $(this),
            tabLi = el.find('.tabWrapper:first li'),
            aAccordion = el.find('.panel-group:first > .panel > .panel-heading .panel-title a[data-toggle="collapse"]'),
            panelAccordion = el.find('.panel-group:first > .panel > .panel-collapse');
        //inizializza il tab che deve essere aperto
        tabLi.eq(indexTabOpened).addClass('on');
        tabLi.eq(indexTabOpened).prev().addClass('borderNoTab');
        aAccordion.eq(indexTabOpened).attr('aria-expanded', 'true').removeClass('collapsed');
        panelAccordion.eq(indexTabOpened).addClass('in').css('height', 'auto');
        tabLi.each(function(index) {
            $(this).click(function(e) {
                e.preventDefault();
                $(this).siblings('li').removeClass('borderNoTab');
                $(this).addClass('on').removeClass('borderNoTab').prev().addClass('borderNoTab');
                $(this).siblings('li').removeClass('on');
                aAccordion.attr('aria-expanded', 'false').addClass('collapsed');
                panelAccordion.removeClass('in');
                aAccordion.eq(index).attr('aria-expanded', 'true').removeClass('collapsed');
                panelAccordion.eq(index).addClass('in').css('height', 'auto');
                return false;
            });
        });
        aAccordion.each(function(index) {
            $(this).click(function() {
                tabLi.removeClass('on');
                tabLi.eq(index).addClass('on');
            });
        });
    });
};
//fuzione per stilizzare bordi tab necessarie causa stile table dei tab
var addBorderTab = function() {
    //vengono appese le classi per gestire i bordi dei tab in display table
    $('.navContFirstLev,.navfrontPage .innerTab').each(function() {
        $(this).find('li.on').prev().addClass('borderNoTab');
        $(this).find('li').click(function() {
            $(this).siblings('li').removeClass('borderNoTab');
            $(this).removeClass('borderNoTab').prev().addClass('borderNoTab');
        });
    });
};
var addEffectHoverTab = function() {
    $('.navfrontPage').each(function() {
        var liNoOn = $(this).find('li:not(".on")');
        liNoOn.mouseover(function() {
            if (!$(this).next().hasClass('on')) { $(this).addClass('hover'); }
            if ($(this).closest('.navcommPage').length) { $(this).prev().addClass('hoverPrev'); }
        });
        liNoOn.mouseout(function() {
            $(this).removeClass('hover');
            $(this).prev().removeClass('hoverPrev');
        });
    });
};
//funzioni per la richiesta carte
var parentPanel, nextPanel, nextPanelTitle;

function initVariabiliStep(el) {
    parentPanel = el.closest('.panel-step');
    nextPanel = parentPanel.next('.panel-step');
    nextPanelTitle = nextPanel.find('.panel-title a').eq(0);
}

function proseguiStep(el) {
    initVariabiliStep(el);
    if (parentPanel.find('.editButton').length > 0) {
        parentPanel.removeClass('unclosable').addClass('editable');
        parentPanel.find('input, textarea, select').prop("disabled", true);
    } else {
        parentPanel.removeClass('unclosable').addClass('done');
    }
    if (parentPanel.find('.stepToggle').length > 0) {
        parentPanel.find('.stepToggle').removeClass('in');
    }
    parentPanel.prev('.panel-step').removeClass('editable').removeClass('unclosable').addClass('done');
    //simula apertura accordion ma poi lo rende di nuovo bloccato
    nextPanel.removeClass('disabled').addClass('unclosable');
    nextPanelTitle.attr('data-toggle', 'collapse');
    nextPanelTitle.trigger('click');
    nextPanelTitle.attr('data-toggle', '');
}

function modificaStep(el) {
    initVariabiliStep(el);
    if (parentPanel.find('.stepToggle').length > 0) {
        parentPanel.find('.panel-title a').eq(0).attr('data-toggle', 'collapse');
        parentPanel.find('.panel-title a').trigger('click');
    }
    parentPanel.removeClass('editable').addClass('unclosable');
    parentPanel.find('input, textarea,select').prop("disabled", false);
    nextPanel.removeClass('unclosable').addClass('disabled');
    nextPanelTitle.attr('data-toggle', 'collapse');
    nextPanelTitle.trigger('click');
    nextPanelTitle.attr('data-toggle', '');
}
//ridimensionamento subTabelle su mobile
/*function setMaxWidthSubTable() {
    $('table .collapse').on('show.bs.collapse', function () {
        $(this).find('.fixed-table-body').css('width',$(this).closest('.panel-body .fixed-table-container').eq(0).innerWidth())
    });
}*/
$(function() {
    //setMaxWidthSubTable();
    findSmartDevice();
    setZindexModal();
    clearInputText();
    selectPreferred();
    AnnullaPin();
    initTooltip();
    /*$("[data-toggle='tooltip']").on('shown.bs.tooltip', function() {
        $('.tooltip').css('z-index', getNextHighestZindex());
    });*/
    //FINESTRA MODALE BOOTSTRAP
    //METODI: 
    //.modal(options);  -- ACCETTA TUTTE LE OPZIONI DI CONFIGURAZIONE DEL MODAL
    //.modal('toggle'); modal('show'); modal('hide');
    //.modal('handleUpdate') -- RIPOSIZIONA IL MODAL SE QUESTO CAMBIA DIMENSIONI
    //EVENTI:
    //show.bs.modal  -- prima della transizione
    //shown.bs.modal -- dopo la transizione
    //hide.bs.modal -- prima della transizione
    //hidden.bs.modal -- dopo la transizione
    //FINE finestra modale bootstrap
});
$(window).resize(function() {
    if ($("[data-toggle='tooltip']").length > 0) {
        $("[data-toggle='tooltip']").tooltip('hide');
    }
    findSmartDevice();
    resizeModalDevice($('.modal'));
});
/*  Ritorna una struttura per gli overlay */
/*
    Parametri: 
    {
        id: id dell'overlay
        body: oggetti da appendere al body
        footer: oggetti da appendere al footer
    }
*/
var getOverlay = function(params) {
    var olobj = $("<div>").addClass("modal fade").attr({ "tabindex": "-1", "role": "dialog", "id": params.id }).append($("<div>").addClass("modal-dialog modal-md").attr({ "role": "document" }).append($("<div>").addClass("modal-content").append($("<div>").addClass("modal-header").append($("<a>").addClass("close btn-icon").attr({ "data-dismiss": "modal", "aria-label": "close" }).append($("<i>").addClass("icon icon-alert_error_fill icon-2x"))).append('<h2 class="modal-title">').append(params.titleOverlay), $("<div>").addClass("modal-body").append(params.body), $("<div>").addClass("modal-footer").append(params.footer))));
    return olobj.hide();
};
/* Avviso overlayer responsive */
var noRespOverlay = function(obj, event) {
    // Se ci sono i presupposti per proporre l'overlayer... (inserire qui l'eventuale controllo sul flag dell'accettazione )
    //var dW = brow.device(); //commentato per non fare apparire l'overlayer
    var dW = 'md',
        noRespMsg, noRespConferma, noRespOl;
    if (dW != "md") {
        event.preventDefault();
        var voice = $(obj);
        var linkgoto = voice.attr("href");
        // Se l'overlay non esiste, lo crea
        if (typeof noRespOl == "undefined") {
            // Messaggio
            noRespMsg = "La funzione richiesta non &egrave; disponibile in modalit&agrave; responsive, pertanto potrebbe essere visualizzata in modo anomalo.<br>Desideri comunque continuare a navigare?";
            noRespConferma = $("<button>").attr({ "type": "button" }).addClass("btn btn-primary").html("Si, voglio continuare");
            noRespOl = getOverlay({
                id: "noRespOvelay",
                body: noRespMsg,
                footer: $("<div>").addClass("row").append($("<div>").addClass("col-xs-12").append($("<div>").addClass("btn-align-left").append($("<button>").attr({ "type": "button", "data-dismiss": "modal" }).addClass("btn btn-default").html("annulla")), $("<div>").addClass("btn-align-right").append(noRespConferma)))
            });
        }
        noRespConferma.click(function() {
            parent.location.href = linkgoto;
        });
        noRespOl.css("z-index", getNextHighestZindex());
        noRespOl.modal("show");
    }
};

function activateTab() {
    $('.navContFirstLev,.navfrontPage').not('.disableJs').each(function() {
        var navContFirstLev = $(this),
            tabContentGroup = navContFirstLev.children('.tab-content-group'),
            innerTab = navContFirstLev.find('.innerTab'),
            focusLeftTab = innerTab.find('li.on').offset().left - 35,
            tabArr,
            tabContentArr;
        // Controllo se ai tab sono associati dei contenuti da mostrare,
        // altrimenti sono soltanto dei link e non li gestisco
        $(this).find('.innerTab').scrollLeft(focusLeftTab);
        innerTab.find('li.on').prev().addClass('borderNoTab');
        navContFirstLev.children('.separator').css('min-width', innerTab.children('ul').innerWidth());
        if (tabContentGroup.length) {
            addBorderTab();
            tabArr = innerTab.find('li');
            tabContentArr = tabContentGroup.find('.tab-content');
            tabArr.click(function() {
                var tab = $(this),
                    href = tab.find('a').attr('href');
                if (!tab.hasClass('on') && href.charAt(0) === '#') {
                    tabArr.removeClass('on');
                    tab.addClass('on');
                    tabContentArr.hide().filter(href).show();
                }
                return false;
            });
        }
    });
}

function highlightCollapse() {
    /* jshint validthis:true */
    $(this).closest('.panel').addClass('panel-selected');
}

function resetCollapse() {
    /* jshint validthis:true */
    $(this).closest('.panel').removeClass('panel-selected');
}

function scrollInputFocus() {
    if (/Android 4\.[0-3]/.test(navigator.appVersion)) {
        window.addEventListener("resize", function() {
            if (document.activeElement.tagName == "INPUT") {
                window.setTimeout(function() {
                    document.activeElement.scrollIntoViewIfNeeded();
                }, 0);
            }
        });
    }
}

function scrollConfrontaFocus() {
    if ($('.scrollFocus').length > 0) {
        var menuScroll = $('.scrollFocus label input');
        menuScroll.each(function() {
            $(this).click(function() {
                $(this).toggleClass('selected');
                $('.fixed-table-body').scrollLeft(0);
                if ($(this).hasClass('selected')) {
                    var el = $(this);
                    var elTitle = $(el).attr('data-column');
                    var dataField = $('.comparazioneFocus th');
                    dataField.each(function() {
                        if ($(this).attr('data-field') == elTitle) {
                            // var scrollLeft = $(this).offset().left - $('.fixed-table-header-columns').width() - 30;
                            // var scrollLeft = $(this).offset().left - $('.fixed-table-header-columns').width();
                        }
                    });
                } else {
                    $('.fixed-table-body').scrollLeft(0);
                }
            });
        });
    }
}
var divh, pTot, pTotLong;

function initAccordionText() {
    if ($('.textAccordion').length > 0) {
        pTot = [];
        pTotLong = [];
        $('.textAccordion').each(function(index) {
            var pTotEl = $(this).find('a.specificheProdotti span');
            pTot.push(pTotEl);
            pTotLong[index] = pTot[index].clone().addClass('longText');
            divh = 40;
            var element = this;
            setAccordionText(element, index);
            //accordion al click
            $(element).find('.specificheProdotti').on('click', function() {
                $(this).toggleClass('on');
                if ($(this).hasClass('on')) {
                    pTotLong[index].insertAfter($(this).find('span'));
                    pTot[index].hide();
                } else {
                    pTotLong[index].remove();
                    pTot[index].show();
                }
            });
            var resizeTimer;
            $(window).on('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    pTotEl.html(pTotLong[index].html());
                    setAccordionText(element, index);
                }, 250);
            });
        });
    }
}

function setAccordionText(element, index) {
    if (isSmallDevice) {
        if (pTot[index].outerHeight() > divh) {
            var text_arr = pTot[index].html().split(' ');
            pTot[index].html('');
            for (var j = text_arr.length - 1; j > 0; j--) {
                delete text_arr[j];
                pTot[index].html(text_arr.join(' '));
                if (divh >= pTot[index].outerHeight()) {
                    var nHtml = pTot[index].html().replace(/\W*\s(\S)*$/, '');
                    nHtml = nHtml.replace(/\W*\s(\S)*$/, '...');
                    pTot[index].html(nHtml);
                    break;
                }
            }
        }
    } else {
        pTot[index].html(pTotLong[index].html());
        $(element).find('.longText').unwrap('span').removeClass('longText');
    }
}

function initAccordionIcon() {
    var panelGroupIconArr = $('.panel-group-icon'),
        setOpened = function($panel) {
            var $afterPanel = $panel.nextAll('.panel').first();
            $panel.addClass('opened');
            if ($afterPanel.length) {
                $afterPanel.addClass('after-opened');
            } else {
                $panel.closest('.panel-group').addClass('last-opened');
            }
        },
        unsetOpened = function($panel) {
            var $afterPanel = $panel.nextAll('.panel').first();
            $panel.removeClass('opened');
            if ($afterPanel.length) {
                $afterPanel.removeClass('after-opened');
            } else {
                $panel.closest('.panel-group').removeClass('last-opened');
            }
        };
    panelGroupIconArr.find('.panel-collapse').on('show.bs.collapse', function() {
        setOpened($(this).closest('.panel'));
    }).on('hide.bs.collapse', function() {
        unsetOpened($(this).closest('.panel'));
    });
    panelGroupIconArr.find('.panel-collapse.in').each(function() {
        setOpened($(this).closest('.panel'));
    });
}

function initDisabledAccordion() {
    $('.panel-collapse').on('show.bs.collapse', function(e) {
        var panelCollapse = $(e.target),
            panelDefault = panelCollapse.closest('.panel-default'),
            isDisabled = (!panelDefault || !panelDefault.hasClass('disabled'));
        if (isDisabled) {
            panelCollapse.collapse('hide');
        }
        return isDisabled;
    });
}
/* gestione accordion tabelle responsive*/
function fixCols() {
    $('.detail-icon').on('click', function() {
        $(this).closest('tr').next('.detail-view').find('td').attr('colspan', $(this).closest('table').find('th:visible').length);
    });
}
//stilizzazione tabelle sortable
function styleSortTable() {
    var sortableTable = $('table.sortableTable');
    $.each(sortableTable, function() {
        $(this).on('post-body.bs.table', function() {
            $(this).find('.sortable').closest('th').addClass('sortableTh');
            $(this).find('.sortable.both').closest('th').removeClass('sortedTh');
            $(this).find('.sortable.desc,.sortable.asc').closest('th').addClass('sortedTh');
            initTooltip();
        });
    });
}
/* funzione per oscurare un elemento passandogli id*/
function obscurateElement(elementToCover) {
    var objElementToCover = $(elementToCover);
    if (objElementToCover.length > 0) {
        // Crea il layer che oscura l'oggetto
        var objLayer = $('<div class="element-obscurate" id="obscureElement">');
        objElementToCover.wrap('<div class="wrapper-obscurate">');
        objLayer.insertAfter(objElementToCover);
        // Imposta le dimensioni del layer a quelle dell'oggetto da oscurare
        var setStyleObscure = function() {
            var dimensions = { height: objElementToCover.height(), width: objElementToCover.width() },
                zIndexOsc = objElementToCover.css('zIndex') != 'auto' ? parseInt(objElementToCover.css('z-index')) + 1 : 1;
            objLayer.css({
                width: dimensions.width + 'px',
                height: dimensions.height + 'px',
                zIndex: zIndexOsc
            });
        };
        setStyleObscure();
        $(window).resize(function() {
            setStyleObscure();
        });
    }
}

function unObscurateElement(elementCovered) {
    var objElementCovered = $(elementCovered);
    if (objElementCovered.length > 0) {
        objElementCovered.next('#obscureElement').eq(0).remove();
        objElementCovered.unwrap('.wrapper-obscurate');
    }
}
/* gestione ordinamento date tabelle responsive*/
var fixDate = function(a, b) {
    var day, month, year, ora, minuti, secondi, valueA, valueB;
    day = parseInt(a.substr(0, 2), 10);
    month = parseInt(a.substr(3, 2), 10);
    year = parseInt(a.substr(6, 4), 10);
    ora = parseInt(a.substr(14, 12), 10);
    minuti = parseInt(a.substr(17, 14), 10);
    secondi = parseInt(a.substr(20, 17), 10);
    //valueA = (year * 10000 + (month + 1) * 100 + day);
    if (a.length > 10) {
        valueA = (year * 10000000000 + (month + 1) * 100000000 + day * 1000000 + ora * 10000 + minuti * 100 + secondi);
    } else {
        valueA = (year * 10000 + (month + 1) * 100 + day);
    }
    day = parseInt(b.substr(0, 2), 10);
    month = parseInt(b.substr(3, 2), 10);
    year = parseInt(b.substr(6, 4), 10);
    ora = parseInt(b.substr(14, 12), 10);
    minuti = parseInt(b.substr(17, 14), 10);
    secondi = parseInt(b.substr(20, 17), 10);
    if (a.length > 10) {
        valueB = (year * 10000000000 + (month + 1) * 100000000 + day * 1000000 + ora * 10000 + minuti * 100 + secondi);
    } else {
        valueB = (year * 10000 + (month + 1) * 100 + day);
    }
    return (valueA < valueB) ? -1 : (valueA > valueB) ? 1 : 0;
};
/* gestione ordinamento quantità tabelle responsive*/
function fixQuant(a, b) {
    if (a == 'n.d.') { a = '0'; }
    if (b == 'n.d.') { b = '0'; }
    a = +a.split(' ')[0].replace(/\./g, '').replace(',', '.').replace('%', '');
    b = +b.split(' ')[0].replace(/\./g, '').replace(',', '.').replace('%', '');
    if (a > b) return 1;
    if (a < b) return -1;
    return 0;
}

function fixDescrizioni(a, b) {
    a = a.split(' ');
    $.each(a, function(indice, valore) {
        if (valore.indexOf('data-value') != -1) {
            a = valore;
            return a;
        }
    });
    b = b.split(' ');
    $.each(b, function(indice, valore) {
        if (valore.indexOf('data-value') != -1) {
            b = valore;
            return b;
        }
    });
    if (a > b) return 1;
    if (a < b) return -1;
    return 0;
}
/* GESTIONE SPINNER
    options.idInput = elemento da spinnare
    options.step =  quanto deve aumentare e diminuire
    options.min =  limite minimo
    options.max =  limite massimo
    options.culture = paese di riferimento,
    options.numberFormat = formato numerico,
    options.spin = funzione che parte allo spin
 */
function setSpinner(options) {
    options.idInput = $(options.idInput);
    options.idInput.spinner({
        icons: {
            down: "icon icon-spinner_less",
            up: "icon icon-spinner_more"
        },
        min: options.min,
        max: options.max,
        step: options.step,
        culture: options.culture,
        numberFormat: options.numberFormat,
        spin: options.spin,
        stepUp: options.stepUp,
        stepDown: options.stepDown,
        start: options.start,
        stop: options.stop,
        change: options.change
    });
}
/*colonne*/
/* Assistente virtuale RESPONSIVE */
/*
var getVa = {
    start: function() {
        $.getScript("/wscmn/fe/js/tool_va.js");
    },

    welcome : function(msg) {
        vaCallback = function() {
            vaMessBenvenuto = msg;
            vaOpen();
        }
        getVa.start();
    },
    onpage : function(posX,posY,question) {
        vaCallback = function() {
            vaOpenOnStart(posX,posY,question);
        }
        getVa.start();
    },
    open : function() {
        vaCallback = function(){
            vaOpen();
        }
        getVa.start();
    }
}
*/
/* GESTIONE SPINNER
    options.idInput = elemento da spinnare
    options.step =  quanto deve aumentare e diminuire
    options.min =  limite minimo
    options.max =  limite massimo
    options.culture = paese di riferimento,
    options.numberFormat = formato numerico,
    options.spin = funzione che parte allo spin
 */
function setSpinner(options) {
    options.idInput = $(options.idInput);
    options.idInput.spinner({
        icons: {
            down: "icon icon-spinner_less",
            up: "icon icon-spinner_more"
        },
        min: options.min,
        max: options.max,
        step: options.step,
        culture: options.culture,
        numberFormat: options.numberFormat,
        spin: options.spin,
        stepUp: options.stepUp,
        stepDown: options.stepDown,
        start: options.start,
        stop: options.stop,
        change: options.change
    });
}
/* ICONE MULTILIVELLO */
function iconMultilayer() {
    $.each($(".glyph").not(".layered"), function(ind, val) {
        var el = $(val),
            i;
        for (i = 1; i <= 13; i++) { el.append($("<span>").addClass("path" + i)); }
        el.addClass("layered");
    });
}
/* Gestione ed inizializzazione selector box */
var selectorBoxInit = function() {
    /* Inizializza tutto partendo dal valore del campo */
    $.each($(".selector-wrap"), function(k, v) {
        var sw = $(v);
        var impVal = sw.find("input[name=" + sw.attr("data-input-name") + "]").val();
        if (impVal.length > 0) {
            $.each(impVal.split(","), function(ind, val) {
                sw.find(".selector-box[data-value=" + val + "]").addClass("selected");
            });
        }
    });
    /* Comportamenti con emulazione sul click */
    $(".selector-wrap .selector-box").click(function() {
        var el = $(this);
        if (!el.hasClass("disabled")) {
            var elPar = el.parents(".selector-wrap");
            if (elPar.attr("data-input-type") == "radio") {
                // Replica il comportamento esclusivo dei radio button
                elPar.find(".selector-box").not(".disabled").removeClass("selected");
                el.addClass("selected");
            } else {
                // Replica il comportamento di un checkbox (attiva o disattiva )
                el.toggleClass("selected");
            }
            var impField = elPar.find("input[name=" + elPar.attr("data-input-name") + "]");
            var impVal = [];
            $.each(elPar.find(".selector-box.selected"), function() {
                impVal.push($(this).attr("data-value"));
            });
            impField.val(impVal);
        }
    });
};
$(selectorBoxInit);
/* Inizializzazione multi-selector */
/* UTILIZZO 
    $(el).multiselector() = inizializza un multiselettore.

    I parametri sono specificati nel wrapper del multiselettore stesso e sono:
    class="multi-selector"  <-- discriminante per l'auto-inizializzazione
    data-input="id" <-- id dell'input interno al multiselettore
    data-overlay-input="id-overlay-input" <-- id dell'input hidden contenuto nella modale e relativo al multi-selettore

    $(el).multiselector("value","XYZ") <-- Setta il valore per il multiselettore (e campo di input associato),

        reperisce i dati dalla modale associata.
        In alternativa e' possibile utilizzare un parametro con la matrice per il reperimento dei dati es:
        $(el).multiselector({"value":"XYZ","valuearray" : obj)
        laddove
        obj = [
            "01" : "Uno", "02" : "Due", "03" : "Tre"
        ] 
*/
$.fn.multiselector = function(action, params) {
    var multiselector = $(this);
    var defaultLabel = "Seleziona...";
    var msReset;
    if (!action) {
        if (multiselector.length) {
            /* Appende i controlli */
            // Funzione open associata ad una modale e ad un campo pilota (le azioni sono specificate per la modale stessa)
            var msOpen = $("<a>").addClass("open").html(defaultLabel).click(function() {
                var ms = $(this).parents(".multi-selector");
                var layerInput = $("input[name=" + ms.attr("data-overlay-input") + "]");
                var layer = layerInput.parents(".modal");
                // Carica i dati ed attiva le selezioni nella modale
                layerInput.parents(".selector-wrap").find(".selector-box").removeClass("selected");
                var selections = ms.find("input[name=" + ms.attr("data-input") + "]").val();
                $.each(selections.split(","), function(i, v) {
                    layer.find(".selector-box[data-value=" + v + "]").addClass("selected");
                });
                layerInput.val(selections);
                layer.modal("show");
            });
            // Funzione reset con semplice svuotamento del campo
            var msResetFunc = function() {
                var ms = $(this).parents(".multi-selector");
                ms.find(".open").html(defaultLabel);
                ms.find("input[name=" + ms.attr("data-input") + "]").val("");
                $(this).hide();
            };
            msReset = $("<a>").addClass("reset").hide().append($("<i>").addClass("icon icon-alert_error_fill")).click(msResetFunc);
            multiselector.append(msOpen, msReset);
            multiselector.multiselector("value", multiselector.find("input[name=" + multiselector.attr("data-input") + "]").val());
        }
    } else {
        // Richiesta di un azione specifica sull'oggetto
        switch (action) {
            // Setta un valore per la multiselezione
            case "value":
                // Valori associati
                var msField = multiselector.find("input[name=" + multiselector.attr("data-input") + "]");
                var mOlField = $("input[name=" + multiselector.attr("data-overlay-input") + "]");
                var mOlData = {};
                msReset = multiselector.find(".reset").hide();
                if (mOlField.length) {
                    // Considera il campo come base di partenza
                    $.each(mOlField.parents(".selector-wrap").find(".selector-box"), function(i, v) {
                        v = $(v);
                        mOlData[v.attr("data-value").toString()] = v.attr("data-name");
                    });
                }
                var msFv = "";
                if (typeof params == "string") {
                    msFv = params;
                } else {
                    // Verifica l'esistenza di un oggetto associato da sfogliare dove
                    // Il primo valore e' la chiave ed il secondo e' l'etichetta
                    if (param.valuearray) {
                        msFv = params.value;
                        mOlData = param.valuearray;
                    }
                }
                msField.val(msFv);
                var textEti = defaultLabel;
                // Seleziona l'etichetta da apporre al campo
                if (msFv.length > 0) {
                    var valcount = msFv.split(",").length;
                    if (valcount == 1) {
                        // Ricopia il nome dal data-name
                        textEti = mOlData[msFv];
                    }
                    if (valcount > 1) {
                        textEti = valcount + " elementi selezionati";
                    }
                    msReset.fadeIn(500);
                }
                multiselector.find(".open").html(textEti);
                break;
        }
    }
};
$(function() { $(".multi-selector").multiselector(); });
/* Inizializza gli switch onload */
/* Oggetto: btn_080_switcher */
var initSwt = function() {
    $.each($(".swtWrapper").not(".inited"), function() {
        var swt = $(this).addClass("inited");
        swt.find(".swtBtn").click(function() {
            var swtBtn = $(this);
            var swtW = swtBtn.parents(".swtWrapper");
            if (!swtW.hasClass("disabled")) {
                swtW.find(".swtBtn").removeClass("swtActive");
                swtBtn.addClass("swtActive");
                swtW.find("input[type=hidden]").val(swtBtn.attr("data-value"));
            }
        });
        swt.find(".swtBtn[data-value=" + swt.find("input").val() + "]").addClass("swtActive");
    });
};
$(initSwt);
/* callback token */
var eGainGetToken = function(callback) {
    $.ajax({
        url: cgi_script + "/wbOnetoone/startChatEgain.jsp",
        cache: false,
        dataType: "json",
        success: callback,
        error: function() {}
    });
};
/* INIZIALIZZA LA CHAT */
function eGainStartChat() {
    // Inizializza la variabile necessaria ad identificare il nuovo layout delle parti private (per i bottoni)
    // Detect del wrapper e della banca 
    vivChatWr = $("#vvcButton");
    var toolChatUrl = "";
    /* Determina l'url dello script da invocare*/
    if (wStore.read("testChatEgain") == "1" || getBank() == "Webank") {
        // Chat 15.5
        toolChatUrl = (getAmbiente() == "sviluppo" || getAmbiente() == "fix") ? "https://ccenterecoll.bpmgrp.global/system/templates/chatLib/tool_chat_155.js" : "/wscmn/fe/js/tool_chat_155.js";
    } else {
        // Chat "normale"
        toolChatUrl = (getAmbiente() == "sviluppo" || getAmbiente() == "fix") ? "https://ccenterecoll.bpmgrp.global/system/templates/chatLib/tool_chat.js" : "/wscmn/fe/js/tool_chat.js";
    }
    eGainGetToken(function(data) {
        var bank = getBank();
        /* Parametri comuni */
        eGain = data;
        if (bank == "Webank") {
            eGain.serviceId = "WB_PRIV";
            eGain.template = "WebankPriv";
            eGain.availPath = "/webankpri/common/";
        } else {
            eGain.serviceId = "BPM_PRIV";
            eGain.template = "BPMPriv";
            eGain.availPath = "/pri/common/";
        }
        // controllo per debug
        $.getScript(toolChatUrl, function() {
            chatBtnEnabled = "<li class=\"toolbtn\"><a class=\"icon icon-chat\" href=\"javascript:;\" onclick=\"egain_openDiv();\" id=\"toggledBtn\" title=\"Chat\"></a></li>";
            chatBtnDisabled = "<li class=\"toolbtn disabled\"><span class=\"icon icon-chat \" href=\"javascript:;\" id=\"toggledBtn\" title=\"Chat\"></span></li>";
            egain_setTimerCheckVisibility('vvcButton', 1, 10000, eGain);
        });
    });
}
/* COMBOBOX PLUS => FORM_014 */
(function($) {
    $.fn.comboboxPlus = function(option, option2) {
        var that = this,
            $this = $(this),
            data,
            ops = ['isSelected', 'getSelection', 'getQuery', 'clear', 'onChange', 'getValue'],
            oldIsSelected, oldQuery, changeHandler,
            createChangeHandler = function (changeFunc) {
                oldIsSelected = null;
                oldQuery = null;
                return function () {
                    var func = function () {
                        var isSelected = data.selected,
                            query = data.query;

                        if (typeof isSelected == 'undefined' || isSelected != oldIsSelected || query != oldQuery) {
                            changeFunc.call(that);
                            oldIsSelected = isSelected;
                            oldQuery = query;
                        }
                    };
                    setTimeout(func, 10);
                };
            },
            getQuery = function () {
                return typeof data.query !== 'undefined' ? data.query : '';
            };
        if (typeof option == 'string' && ~ops.indexOf(option)) {
            $this = $this.eq(0);
            data = $this.data('combobox');
            if (data) {
                if (option == 'isSelected') {
                    return data.selected;
                } else if (option == 'getSelection') {
                    return data.$source.val();
                } else if (option == 'getQuery') {
                    return getQuery();
                } else if (option == 'getValue') {
                    return data.selected ? data.$source.val() : getQuery();
                } else if (option == 'clear') {
                    data.clearTarget();
                    data.triggerChange();
                    data.clearElement();
                    data.query = data.$element.val();
                    return $this;
                } else if (option == 'onChange') {
                    if (typeof option2 == "function") {
                        changeHandler = createChangeHandler(option2);
                        data.$element.on('keyup focus blur', changeHandler);
                        changeHandler();
                        return $this;
                    } else if (!option2 && (typeof option2 == 'undefined' || typeof option2 == 'object')) {
                        if (changeHandler) {
                            data.$element.off('keyup focus blur', changeHandler);
                            changeHandler = null;
                        }
                        return $this;
                    }
                }
            }
        }
        return $this.combobox(option);
    };
}(jQuery));
/* FINE | COMBOBOX PLUS => FORM_014 */
/* SLIDER PLUS => FORM_190-1-2 */
(function($) {
    $.fn.sliderPlus = function(options) {
        var prevenSlider = this,
            prevenSliderAlt = prevenSlider.nextAll('.slider-alt'),
            sliderText = prevenSlider.find('.sliderText'),
            sliderTicks = prevenSlider.find('.sliderTicks'),
            sliderTick, totTicks, tickInterval, prevenSliderWrap, prevenSliderSpinnerMore,
            settings = {
                min: 1,
                max: 10,
                step: 1,
                value: 1
            },
            n,
            i,
            highlightTick,
            setText;
        settings.hasText = sliderText.length;
        settings.tick = options.tick ? options.tick : options.step;
        settings.value = options.value ? options.value : options.min;
        settings.milestone = options.milestone ? options.milestone : 0;
        settings.range = 0;
        settings.hasTicks = sliderTicks.length;
        settings.hasMidTicks = !prevenSlider.hasClass('sliderNoMidTicks');
        settings.hasHighlight = sliderTicks.hasClass('sliderTicksHighlight');
        settings.custom = options.custom ? options.custom : false;
        if( settings.custom ) {
          settings.min = 0;
          settings.max = settings.custom.length-1;
          settings.step = 1;
        } else {
          settings.min = options.min ? options.min : 0;
          settings.max = options.max ? options.max : 10;
          settings.step = options.step ? options.step : 1;
        }
        highlightTick = function(value) {
            var current = (settings.custom) ? value : (Math.round((value - settings.min) / settings.milestone));
            if (settings.hasHighlight) {
                prevenSlider.find('.sliderTicks .sliderTickMilestone').removeClass('sliderTickOn');
                if (value === settings.min) {
                    prevenSlider.find('.sliderTicks .sliderTickMilestone').first().addClass('sliderTickOn');
                } else if (value === settings.max) {
                    prevenSlider.find('.sliderTicks .sliderTickMilestone').last().addClass('sliderTickOn');
                } else {
                    prevenSlider.find('.sliderTicks .sliderTickMilestone').eq(current).addClass('sliderTickOn');
                }
            }
        };
        setText = function(value) {
            if (settings.hasText) {
              var v = value;
              if(settings.custom &&  (! isNaN( settings.custom[v].value )) ) {
                v = settings.custom[v].value;
              }
              sliderText.html(v);
            }
        };
        settings.slide = function(event, ui) {
            highlightTick(ui.value);
            setText(ui.value);
            if ($.isFunction(options.slide)) {
                options.slide(event, ui);
            }
        };
        settings.change = function(event, ui) {
            highlightTick(ui.value);
            setText(ui.value);
            prevenSliderAlt.val(ui.value);
            if ($.isFunction(options.change)) {
                options.change(event, ui);
            }
        };
        settings.start = function(event, ui) {
            $(ui.handle).addClass("start");
            if ($.isFunction(options.start)) {
                options.start(event, ui);
            }
        };
        settings.stop = function(event, ui) {
            $(ui.handle).removeClass("start");
            if ($.isFunction(options.stop)) {
                options.stop(event, ui);
            }
        };
        settings.create = function(event, ui) {
            if ($.isFunction(options.create)) {s
                options.create(event, ui);
            }
        };
        settings.numberFormat = function(val) {
            var res = val;
            if ($.isFunction(options.numberFormat)) {
                res = options.numberFormat(val);
            }
            return res;
        };
        // Inizializzazione spinners (se l'opzione e' presente ed e' true)
        if (options.spinners) {
            // Wrappa lo slider e la select
            prevenSliderWrap = $("<div>").addClass("slider-spinners");
            prevenSlider.wrap(prevenSliderWrap);
            var prevenSliderSpinner = $("<a>").addClass("slider-spin").click(function() {
                // La funzione e' scritta per reperire sempre i valori dello slider aggiornati in totale autonomia
                var spn = $(this),
                    spnk = (spn.hasClass("slider-spin-more")) ? 1 : -1,
                    slid = spn.parent().find(".slider-box").slider(),
                    slidval = slid.slider("value"),
                    slidmin = slid.slider().min,
                    slidmax = slid.slider("option", "max"),
                    slidstep = slid.slider("option", "step"),
                    newval = slidval + (slidstep * spnk);
                if (!(newval < slidmin || newval > slidmax)) {
                    slidval = slid.slider("value", newval).change();
                }
            });
            prevenSliderSpinnerMore = prevenSliderSpinner.clone(true, true).addClass("slider-spin-more");
            prevenSlider.after(prevenSliderSpinner.append($("<i>").addClass("icon icon-spinner_less")), prevenSliderSpinnerMore.append($("<i>").addClass("icon icon-spinner_more")));
        }
        // Slider versione tablet e desktop
        // Se le options sono un comando di qualche tipo, lo filtra, altrimenti
        prevenSlider.slider(settings);
        // Slider versione smartphone
        prevenSliderAlt.empty();

        if( settings.custom ) {
          for (var i = 0; i < settings.custom.length; i++) {
              var cur = settings.custom[i];
              var value = (cur.value) ? cur.value : i+1;
              prevenSliderAlt.append($('<option>').text(cur.name).val(settings.numberFormat(value)));
          }
        } else {
          for (i = settings.min; i <= settings.max; i += settings.step) {
              prevenSliderAlt.append($('<option>').text(settings.numberFormat(i)).val(i));
          }
        }

        prevenSliderAlt.val(settings.value);
        prevenSliderAlt.change(function() {
            prevenSlider.slider("option", "value", 1 * prevenSliderAlt.val());
        });
        // Aggiungo le tacche verticali allo slider
        totTicks = Math.floor((settings.max - settings.min) / settings.tick) + 1;
        if (settings.hasTicks) {
            sliderTicks.empty();
            i = 0;
            if( settings.custom ) {
              tickInterval = 100 / (settings.custom.length - 1);
              for (var n = 0; n < settings.custom.length; n++) {
                  var cur = settings.custom[n];
                  sliderTick = $('<div>').addClass('sliderTick').css('left', tickInterval * i + '%');
                  sliderTicks.append(sliderTick);
                  sliderTick.addClass("sliderTickHigh").append($("<span>").addClass("sliderTickMilestone").html(cur.name));
                  ++i;
              }
            } else {
              tickInterval = 100 / (totTicks - 1);
              for (n = settings.min; n <= settings.max; n += settings.tick) {
                  if (settings.hasMidTicks || n === settings.min || n === settings.max) {
                      sliderTick = $('<div>').addClass('sliderTick').css('left', tickInterval * i + '%');
                      sliderTicks.append(sliderTick);
                      if ((settings.milestone && (n % settings.milestone) === 0) || (n === settings.min || n === settings.max)) {
                          sliderTick.addClass("sliderTickHigh").append($("<span>").addClass("sliderTickMilestone").html(settings.numberFormat(n)));
                      }
                  }
                  ++i;
              }
            }
            highlightTick(settings.value);
        }
        setText(settings.value);
        return this;
    };
}(jQuery));
/* FINE | SLIDER PLUS => FORM_190-1-2 */

/*  BUTTON GROUP => FORM_200 */
(function($) {
    $.fn.buttonGroup = function(arg1, arg2) {
        var $buttonGroup = this,
            $btnArr = $buttonGroup.find('.btn'),
            $select = $buttonGroup.nextAll('.btn-group-select'),
            getValue, setValue, setBtnGroupValue, setSelectValue,
            hasOptions = $.isPlainObject(arg1);
        getValue = function() {
            return $select.val();
        };
        setBtnGroupValue = function(value) {
            var $btn = $buttonGroup.find('[data-value=' + value + ']');
            if ($btn.length && !$btn.hasClass('btn-selected')) {
                $btnArr.removeClass('btn-selected');
                $btn.addClass('btn-selected');
            }
        };
        setSelectValue = function(value) {
            var firstOption;
            if (value !== '') {
                firstOption = $select.find('option:first');
                if (firstOption.attr('value') === '') {
                    firstOption.remove();
                }
            }
            if ($select.val() !== value) {
                $select.val(value);
            }
        };
        setValue = function(value) {
            setBtnGroupValue(value);
            setSelectValue(value);
            $buttonGroup.trigger('change.bs.buttongroup', getValue());
        };
        if (typeof arg1 === 'undefined' || hasOptions) {
            if (hasOptions) {
                if ($.isFunction(arg1.change)) {
                    $buttonGroup.on('change.bs.buttongroup', arg1.change);
                }
            }
            // Popolo la select per il mobile
            $select.append($('<option value="" selected>Seleziona</option>'));
            $btnArr.each(function() {
                var $btn = $(this),
                    $option = $('<option>');
                $option.val($btn.attr('data-value'));
                $option.html($btn.html());
                $select.append($option);
            });
            $buttonGroup.after($select);
            // Gestisco la selezione dai bottoni
            $btnArr.click(function(e) {
                e.preventDefault();
                setValue($(this).attr('data-value'));
            });
            // Gestisco la selezione dalla select
            $select.change(function() {
                setValue($select.val());
            });
        } else if (typeof arg1 === "string") {
            if (arg1 === "getValue") {
                return getValue();
            } else if (arg1 === "setValue") {
                if (typeof arg2 === 'string') {
                    setValue(arg2);
                }
            }
        }
        return this;
    };
}(jQuery));
/* FINE | BUTTON GROUP => FORM_200 */
/* MODAL PLUS => OVERLAY_050_MODALPLUS */
(function($) {
    $.fn.modalPlus = function(arg1, arg2) {
        var $modal = this,
            settings = {
                backdrop: 'static',
                keyboard: false,
                show: true
            },
            hasOptions = $.isPlainObject(arg1),
            hideAll, showLoading, removeLoading,
            showContent, showMessage, showError;
        // Funzioni private
        hideAll = function() {
            removeLoading();
            $modal.find('.confermaContent').removeClass('loading').hide();
            $modal.find('.confermaResponse, .boxesito').hide();
        };
        // Funzioni pubbliche
        showLoading = function() {
            $modal.find('.confermaContent').addClass('loading');
        };
        removeLoading = function() {
            $modal.find('.confermaContent').removeClass('loading');
        };
        showContent = function() {
            hideAll();
            $modal.find('.confermaContent').show();
        };
        showMessage = function(message) {
            hideAll();
            $modal.find('.boxesito.positivo .messageResponse').html(message);
            $modal.find('.confermaResponse, .boxesito.positivo').show();
        };
        showError = function(error) {
            hideAll();
            $modal.find('.boxesito.negativo .messageResponse').html(error);
            $modal.find('.confermaResponse, .boxesito.negativo').show();
        };
        if (typeof arg1 === 'undefined' || hasOptions) {
            $.extend(settings, arg1);
            $modal.modal(settings);
        } else if (typeof arg1 === "string" && (typeof arg2 === "undefined" || typeof arg2 === "string")) {
            switch (arg1) {
                case "toggle":
                case "show":
                case "hide":
                case "handleUpdate":
                    this.modal(arg1);
                    break;
                case "showLoading":
                    showLoading();
                    break;
                case "removeLoading":
                    removeLoading();
                    break;
                case "showContent":
                    showContent();
                    break;
                case "showMessage":
                    showMessage(arg2);
                    break;
                case "showError":
                    showError(arg2);
                    break;
            }
        }
        return this;
    };
}(jQuery));
var initModalPlus = function() {
    $('.modalPlus').each(function() {
        var $modal = $(this);
        $modal.on('show.bs.modal', function() {
            $modal.modalPlus('showContent');
        });
        $modal.find('.modalPlusAnnulla').click(function() {
            $modal.modalPlus('hide');
        });
        $modal.find('.modalPlusConferma').click(function() {
            $modal.modalPlus('showLoading');
        });
    });
};
/* FINE | MODAL PLUS => OVERLAY_050_MODALPLUS */
/* CAROUSEL PLUS => WIDGET_030_CAROUSELPLUS */
(function($) {
    $.fn.carouselPlus = function(arg1, arg2) {
        return this.each(function() {
            var $carouselPlus = $(this),
                $pagesBox = $carouselPlus.find('.carouselPlusPages'),
                $pagesArr = $carouselPlus.find('.carouselPlusPage'),
                $carouselPlusNav = $carouselPlus.find('.carouselPlusNav'),
                $btnsArr = $carouselPlus.find('.carouselPlusBtn'),
                $btnTop = $carouselPlus.find('.carouselPlusBtnTop'),
                settings = {
                    loop: false,
                    interval: 3000,
                    currentPage: 0,
                    stopOnOver: true,
                    variableHeight: false,
                    vertical: false
                },
                animationDuration = 500,
                setDimensions, setPage, movePageAndButton,
                initData, setData, getData,
                startLoop, stopLoop, refresh, isSet;
            initData = function(key, type) {
                var val = getData(key, type);
                if (typeof val !== 'undefined') {
                    setData(key, val);
                } else {
                    setData(key, settings[key]);
                }
            };
            setData = function(key, val) {
                if (typeof val !== 'undefined') {
                    $carouselPlus.attr('data-' + key, val);
                } else {
                    $carouselPlus.removeAttr('data-' + key);
                }
            };
            getData = function(key, type) {
                var res = $carouselPlus.attr('data-' + key);
                if (typeof res !== 'undefined') {
                    switch (type) {
                        case 'numeric':
                            res = 1 * res;
                            break;
                        case 'boolean':
                            res = (res === 'true');
                            break;
                    }
                }
                return res;
            };
            setDimensions = function() {
                var width = $carouselPlus.width(),
                    height = 100,
                    variableHeight = getData('variableHeight', 'boolean'),
                    vertical = getData('vertical', 'boolean'),
                    currentPage = getData('currentPage', 'numeric');
                if (variableHeight && !vertical) {
                    height = $pagesArr.eq(currentPage).outerHeight();
                } else {
                    $pagesArr.each(function() {
                        var pageHeight = $(this).outerHeight();
                        if (height < pageHeight) {
                            height = pageHeight;
                        }
                    });
                }
                $pagesArr.width(width);
                if (vertical) {
                    $pagesArr.outerHeight(height);
                    $pagesBox.width(width).outerHeight($pagesArr.length * (height + 30));
                    $carouselPlus.addClass('vertical').outerHeight(height + $carouselPlusNav.outerHeight());
                } else {
                    $pagesBox.width($pagesArr.length * (width + 30)).outerHeight(height);
                }
                movePageAndButton();
            };
            setPage = function(index) {
                var loop = getData('loop', 'boolean');
                if (loop) {
                    stopLoop();
                }
                setData('currentPage', index);
                setDimensions();
                if (loop) {
                    startLoop();
                }
            };
            movePageAndButton = function() {
                var width = $carouselPlus.width(),
                    height = $carouselPlus.outerHeight(),
                    variableHeight = getData('variableHeight', 'boolean'),
                    currentPage = getData('currentPage', 'numeric'),
                    vertical = getData('vertical', 'boolean'),
                    $setBtn,
                    delay = 0;
                /* Navigazione */
                if ($carouselPlusNav.length) {
                    $setBtn = $btnsArr.eq(currentPage);
                    $btnsArr.not(currentPage).removeClass('on');
                    $setBtn.addClass('on');
                }
                /* Slide */
                $pagesArr.not(currentPage).css('opacity', 0).removeClass('on');
                $pagesArr.eq(currentPage).css('opacity', 1).addClass('on');
                if (variableHeight && !vertical) {
                    $pagesBox.outerHeight($pagesArr.eq(currentPage).outerHeight());
                    delay = animationDuration;
                } else if (vertical) {
                    height = $pagesArr.eq(currentPage).outerHeight();
                }
                setTimeout(function() {
                    if ($btnTop.length) {
                        $btnTop.css({
                            'left': $setBtn.position().left,
                            'width': $setBtn.width()
                        });
                    }
                    if (vertical) {
                        $pagesBox.css({
                            'margin-top': -currentPage * height + -(currentPage + 1) * 30 + 'px'
                        });
                    } else {
                        $pagesBox.css({
                            'margin-left': -currentPage * width + -(currentPage + 1) * 30 + 'px'
                        });
                    }
                }, delay);
            };
            startLoop = function() {
                var loopId;
                stopLoop();
                loopId = setInterval(function() {
                    var currentPage = getData('currentPage', 'numeric');
                    currentPage = ++currentPage % $pagesArr.length;
                    setPage(currentPage);
                }, getData('interval', 'numeric'));
                setData('loopId', loopId);
            };
            stopLoop = function() {
                var loopId = getData('loopId', 'numeric');
                if (typeof loopId !== 'undefined') {
                    loopId = clearInterval(loopId);
                    setData('loopId', loopId);
                }
            };
            refresh = function () {
                setDimensions();
                setPage(getData('currentPage', 'numeric'));
            };
            isSet = getData('isSet', 'boolean');
            if ($btnTop.length) {
                $btnTop.css('transition', '0s');
            }
            $pagesBox.css('transition', '0s');
            if (!isSet) {
                initData('currentPage', 'numeric');
                initData('interval', 'numeric');
                initData('loop', 'boolean');
                initData('stopOnOver', 'boolean');
                initData('variableHeight', 'boolean');
                initData('vertical', 'boolean');
                setData('isSet', true);
                if (settings.loop) {
                    startLoop();
                }
                $pagesBox.mouseover(function() {
                    var stopOnOver = getData('stopOnOver', 'boolean'),
                        loop = getData('loop', 'boolean');
                    if (stopOnOver && loop) {
                        stopLoop();
                    }
                }).mouseout(function() {
                    var stopOnOver = getData('stopOnOver', 'boolean'),
                        loop = getData('loop', 'boolean');
                    if (stopOnOver && loop) {
                        startLoop();
                    }
                }).on('cp-page-resized', '.carouselPlusPage.on', function() {
                    setDimensions();
                });
                $pagesArr.each(function(index, page) {
                    if (typeof ResizeSensor !== 'undefined') {
                        new ResizeSensor(page, function() {
                            var isSet = getData('isSet', 'boolean');
                            if (isSet) {
                                $(page).trigger('cp-page-resized');
                            }
                        });
                    }
                });
                $btnsArr.each(function(index, btn) {
                    $(btn).click(function() {
                        setPage(index);
                    });
                });
                $(window).resize(function() {
                    refresh();
                }).resize();
                $('.slider-in-page li').click(function() { setDimensions(); });
                $pagesBox.css('visibility', 'visible');
            } else if (typeof arg1 === 'string') {
                if (typeof arg2 !== 'undefined') {
                    switch (arg1) {
                        case 'currentPage':
                            setPage(arg2);
                            break;
                        case 'interval':
                            setData('interval', arg2);
                            break;
                        case 'stopOnOver':
                            setData('stopOnOver', arg2);
                            break;
                    }
                } else {
                    switch (arg1) {
                        case 'startLoop':
                            setData('loop', true);
                            startLoop();
                            break;
                        case 'stopLoop':
                            setData('loop', false);
                            stopLoop();
                            break;
                    }
                }
            } else {
                refresh();
            }
            if ($btnTop.length) {
                $btnTop.css('transition', (animationDuration / 1000) + 's');
            }
            $pagesBox.css('transition', (animationDuration / 1000) + 's');
        });
    };
}(jQuery));
var initCarouselPlus = function() {
    $('.carouselPlus').carouselPlus();
};
/* FINE | CAROUSEL PLUS => WIDGET_030_CAROUSELPLUS */
var animateScrollTable = function() {
    /* $('table').on('post-body.bs.table', function() {
      var el = this;
      console.log('passa');
      setTimeout(function(){
           if($(el).innerWidth()>$(el).closest('.fixed-table-body').innerWidth())
               {
                  $(el).closest('.fixed-table-body').animate({ scrollLeft: 20 }, 400).animate({ scrollLeft: 0 }, 400);
               }
       },1000)
       })*/
    $('.modal').on('shown.bs.modal', function() {
        var tableInModal = $(this).find('.bootstrap-table table');
        tableInModal.each(function() {
            var el = this;
            setTimeout(function() {
                if ($(el).innerWidth() > $(el).closest('.fixed-table-body').innerWidth()) {
                    $(el).closest('.fixed-table-body').animate({ scrollLeft: 100 }, 1500).animate({ scrollLeft: 0 }, 1500);
                }
            }, 200);
        });
    });
};
/* TOOLTIP PLUS => TEXT_010, TEXT_011, TEXT_012 */
(function($) {
    $.fn.tooltipPlus = function(arg1, arg2) {
        // Viene eseguito su ogni elemento catturato dal selettore jQuery
        this.each(function() {
            var $tooltipPlus = $(this),
                hasOptions = $.isPlainObject(arg1),
                // Icona di chiusura
                isCloseable = $tooltipPlus.hasClass('closeable'),
                ajaxUrl, settings,
                addIcon, setTitle, updateText, setOpenHandlers, setCloseHandlers;
            updateText = function(newTitle) {
                if (newTitle) {
                    $tooltipPlus.attr('data-original-title', addIcon(newTitle));
                    $tooltipPlus.attr('data-title', addIcon(newTitle));
                }
                $tooltipPlus.tooltip('show');
            };
            setTitle = function() {
                return addIcon($(this).attr('data-title'));
            };
            addIcon = function(title) {
                var closeIcoTooltip = !(isCloseable) ? ' ' : '<a href="#!" class="closeTooltip"><i class="icon icon-close_inverted_fill icon-2x"></i ></a>';
                return title + closeIcoTooltip;
            };
            setOpenHandlers = function() {
                $tooltipPlus.on('click focusin', function() {
                    // Chiude gli altri tooltip aperti
                    $(".tooltip.in").tooltip('hide');
                    //hack per i tooltip contenenti immagini
                    $tooltipPlus.tooltip('show');
                    if ($tooltipPlus.closest('.modal').length > 0) {
                        $('.tooltip.in').css('left', 0);
                        $('.tooltip.in').find('.tooltip-arrow').css('left', '30%');
                        $('.webview').find('.tooltip.in').closest('.fixed-table-body').removeClass('fixed-table-body').addClass('fixed-table-body-static');
                    }
                    // Testo caricato da AJAX
                    ajaxUrl = $tooltipPlus.attr('data-url') || null;
                    if (ajaxUrl) {
                        $tooltipPlus.removeAttr('data-url');
                        $.ajax({
                            url: ajaxUrl,
                            dataType: 'html',
                            method: 'GET'
                        }).done(function(data) {
                            updateText(data);
                        }).fail(function() {
                            updateText('Errore caricamento dati');
                        });
                    }
                });
            };
            setCloseHandlers = function() {
                if (isCloseable) {
                    $tooltipPlus.find(".closeTooltip").on('click', function() {
                        if ($(this).closest('.modal').length > 0) {
                            $('.webview').find('.tooltip.in').closest('.fixed-table-body-static').removeClass('fixed-table-body-static').addClass('fixed-table-body');
                        }
                        $tooltipPlus.tooltip('hide');
                    });
                }
                $tooltipPlus.on('focusout', function() {
                    $tooltipPlus.tooltip('hide');
                });
            };
            if (hasOptions || !arg1) {
                // Inizializzazione tooltip
                settings = $.extend({
                    html: true,
                    title: setTitle,
                    trigger: 'manual',
                    animation: false,
                    placement: function(tip, element) {
                        if ($(element).closest('.modal').length > 0) {
                            return 'auto';
                        } else {
                            return 'auto';
                        }
                    }
                }, hasOptions ? arg1 : {});
                $tooltipPlus.tooltip(settings);
                setOpenHandlers();
                setCloseHandlers();
            } else if (arg1 !== 'update') {
                $tooltipPlus.tooltip(arg1);
            } else if (arg1 === 'update') {
                updateText(arg2);
            }
        });
        return this;
    };
}(jQuery));
/* FINE | TOOLTIP PLUS => TEXT_010, TEXT_011, TEXT_012 */
function setEffectTable() {}
/* IFRAME F24 */
var iFramePage;
var setIframeSize = function() {
    var f24Doc = (iFramePage[0].contentWindow.frames.frCenter) ? iFramePage[0].contentWindow.frames.frCenter.document : iFramePage[0].contentWindow.document,
        wrapper = f24Doc.getElementsByClassName('wrapper')[0],
        footer = f24Doc.getElementById('footer'),
        iFrameHeight;
    if (footer) {
        f24Doc.body.removeChild(footer);
    }
    wrapper.style.minHeight = 0;
    wrapper.getElementsByClassName('main')[0].style = 'margin-top: 0; padding-top: 30px';
    iFrameHeight = wrapper.scrollHeight;
    if (!iFrameHeight && iFrameHeight < 900) {
        iFrameHeight = 1000;
    } else {
        iFrameHeight += 100;
    }
    iFramePage.css("height", iFrameHeight + "px");
};
var refreshIframeSize = function() {
    setIframeSize();
    setTimeout(setIframeSize, 500);
};
var initIframeF24 = function() {
    iFramePage = $("#f24if");
    if (iFramePage.length) {
        iFramePage.on("load", refreshIframeSize);
    }
};
/* |FINE| IFRAME F24 */



/* Radio input */
var initRadioInput = function () {
    $('.radioInput').each(function () {
        var radioInput = $(this),
            inputArr = radioInput.find('input[type="text"]');

        radioInput.find('input[type="radio"]').click(function () {
            var radio = $(this),
                input;
            // Disabilito tutto gli input associati a radio button
            input = radio.closest('.radio.inline').find('input[type="text"]');
            // Controllo se c'è un input associato a questo radio button
            if (input.length) {
                // Disabilito gli altri input
                inputArr.not(input).val('').prop('disabled', true);
                // Abilito l'input di questo radio button
                input.prop('disabled', false);
            } else {
                inputArr.val('').prop('disabled', true);
            }
        });
    });
};

/* Text accordion */
var textAccordionInit = function() {
    $(".text-accordion .text-term").not("[data-inited=true]").attr("data-inited","true").click( function(){ 
    $(this).parents(".text-accordion").toggleClass("opened")
    })
}

/* Layer glossario */
var layerGlossarioBody, layerGlossario,
getVoceGlossario = function() {
    var gVoce = $(this).attr("data-glossario");
    // Se non esiste la popup la crea
    if ($("#glossarioLayer").length<=0) 
        {
            layerGlossarioBody = $("<div>");
            layerGlossario = getModal({
            id:"glossarioLayer",
            titolo:"Glossario",
            body: layerGlossarioBody
        });
    }
    layerGlossarioBody.empty().addClass("loading");
    layerGlossario.modal("show");
    $.ajax({
        url: glossarioUrl,
        method: "POST",
        data: {
            voce: gVoce
        },
        dataType: "html",
        error: function() {
            layerGlossarioBody.html("<p>Si &egrave; verificato un errore in fase di recupero dei dati</p>").removeClass("loading");
        },
        success: function(data) {
            layerGlossarioBody.append($("<h3>").html(gVoce),data).removeClass("loading");
        }
    });
}



// Funzioni da attivare al loading del documento
$(function() {
    addEffectHoverTab();
    activateTab();
    scrollConfrontaFocus();
    scrollInputFocus();
    initAccordionText();
    initAccordionIcon();
    initDisabledAccordion();
    toolboxInit();
    iconMultilayer();
    initModalPlus();
    initCarouselPlus();
    initIframeF24();
    initRadioInput();
    textAccordionInit();
    $("a[data-glossario]").click(getVoceGlossario);
    // Transizione per avvio webview
    if ($("body").hasClass("webview") && !$("body").hasClass("webapp")) {
        $("body").removeClass("loading").fadeIn(300);
    }
    closeSelettoreRapportoOuterTap();
    $('.panel-collapse').not('.collapse-top').on('show.bs.collapse', highlightCollapse).on('hide.bs.collapse', resetCollapse);
    // Attivazione chat (se non siamo in webview)
    // if (!$("body").hasClass("webview") && getAmbiente() != "librerie") eGainStartChat();
    // Fine attivazione chat
    styleSortTable();
    animateScrollTable();
    /* ATTIVO I PULSANTI BACK */
    $('.back-btn').on('click', function(e) {
        e.preventDefault();
        window.history.go(-1);
        return false;
    });
    $('.modal').on('blur', 'input', function() {
        var func = function() {
                //alert('scrollTop');
                //modal.css('scrollTop', 0);
                window.scrollTo(window.scrollX, window.scrollY);
            };
        setTimeout(func, 1000);
    });
    /* ATTIVA IL DEBUG NELLA WEBAPP */
    var firebugEnabledOK = (typeof firebugEnabled !== 'undefined' && firebugEnabled);
    if (firebugEnabledOK && getAmbiente() == "sviluppo" && $("body").hasClass("webview")) {
        (function(F, i, r, e, b, u, g, L, I, T, E) {
            if (F.getElementById(b)) return;
            E = F[i + 'NS'] && F.documentElement.namespaceURI;
            E = E ? F[i + 'NS'](E, 'script') : F[i]('script');
            E[r]('id', b);
            E[r]('src', I + g + T);
            E[r](b, u);
            (F[e]('head')[0] || F[e]('body')[0]).appendChild(E);
            E = new Image();
            E[r]('src', I + L);
        })(document, 'createElement', 'setAttribute', 'getElementsByTagName', 'FirebugLite', '4', 'firebug-lite.js', '../skin/xp/sprite.png', '/wscmn/fe/assets/firebug/script/', '#startOpened=true');
    }
    /* FINE DEBUG SVILUPPO */
});
/* SLIDER RANGE */
$.fn.sliderRange = function(params) {
    var sliderEl = this;
    var sliderWrap = this.parent(".sliderRange");
    // Parametri di default
    params.range = true;
    // Inizializza lo slider (passandogli tutti i Parametri)
    sliderEl.slider(params);
    // Appende il container delle milestones
    if (params.milestones) {
        var divMilestones = $("<div>").addClass("slider-milestones"),
            tickwidth = 100 / (params.milestones - 1),
            tickprogress = 0,
            tickVal = 0,
            x,
            tickunit = (params.unit) ? params.unit : "";
        if (params.min && params.max) {
            // Calcola la base per inserire i numeri
            tickprogress = (params.max - params.min) / (params.milestones - 1);
            tickVal = params.min;
        }
        for (x = 0; x < params.milestones; x++) {
            divMilestones.append($("<div>").addClass("milestone").css("left", (x * tickwidth) + "%").append($("<div>").addClass("thick"), $("<div>").addClass("number").html(Math.round(tickVal * 100) / 100 + tickunit)));
            tickVal += tickprogress;
        }
        sliderWrap.append(divMilestones);
    }
    return this;
};


/* PROVA GTM */
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T8CFR27');

/* Funzione apertura book (indicativa) */
var openTradingBook  = function(newbook) {
    var bWidth = 768,
        bHeight = 680,
        bTop = 0,
        bLeft = 0,
        bWName = "";
        
    if (newbook && newbook == true) {
        console.log(window.screen.availLeft);
        bWName = " " + Math.random();
    }

    var newBook = window.open("/connect.php?page=/template/tpl_responsive_trading_book.php","Webank - Book" + bWName, "width="+ bWidth + ",height=" + bHeight + ",top="+ bTop + ",left="+ bLeft + ",menubar=no,status=no") 
   
}


/* funzione per estrarre il codice delle tabelle in console */
var reTable = function() {

    var reTableCode = "";

    $.each($("#contenuti table"),function(i,v){

        var tb = $(v);
        var tbCode = "\n\n\n<table>";        

        /* Inserisce l'eventuale titolo della tabella */
        var tbTit = tb.prev().text();
        if (tbTit) tbCode = "\n<h4>"+tbTit+"</h4>" + tbCode;
        /* cerca ed estrae l'eventuale header */
        tbCode +="\n   <thead>";
        $.each(tb.find("tr.heading").not(".light"),function(ind, val) {
            var tbHead  = "\n      <tr>";
                $.each($(val).find("td"),function(index,value){
                    var cell = $(value);
                    /* Appende la cella */
                    var tbCellClass = "right";
                    if (cell.hasClass("left") ) tbCellClass = "";
                    if (cell.hasClass("center") ) tbCellClass = "center";

                    tbHead += "\n         <th" + ((tbCellClass!="")? " class=\""+tbCellClass+"\"" : "") +">" + cell.html()+ "</th>";

                });
            tbHead  += "\n      </tr>";
            tbCode += tbHead;
        });
        tbCode += "\n   </thead>";

        tbCode +="\n   <tbody>";
        $.each(tb.find("tr.heading.light"),function(ind, val) {
            var tbHead  = "\n      <tr>";
                $.each($(val).find("td"),function(index,value){
                    var cell = $(value);
                    /* Appende la cella */
                    var tbCellClass = "right";
                    if (cell.hasClass("left") ) tbCellClass = "";
                    if (cell.hasClass("center") ) tbCellClass = "center";

                    tbHead += "\n         <td" + ((tbCellClass!="")? " class=\""+tbCellClass+"\"" : "") +">" + cell.html()+ "</td>";

                });
            tbHead  += "\n      </tr>";
            tbCode += tbHead;
        });
        tbCode += "\n   </tbody>";


        tbCode +="\n</table>";
        reTableCode += tbCode;



    });
     console.log(reTableCode);
}