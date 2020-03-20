/*globals $, subMenu:true, menuData, navIndex, getNextHighestZindex, isTouch, vaOpen,
	vvcMessage:true, vivochaUrl:true, getBank, respFixedTb:true */
/*exported brow, setHasErrors, fixDate, fixCols, getCodeOf, resizeTab, appendDatePickerIcon,
	proseguiStep, modificaStep, renderPickDateMobile */
/* "use strict"; */

/* Raccoglie varie informazioni del browser nell'apposito oggetto */
var brow = (function() {

	var device = function() {

		var dev = "md";
		var dWidth = $(window).width();
		if (dWidth < 1024) dev ="sm";
		if (dWidth < 768) dev = "xs";

		return dev;

	};

	return{device:device};

})();

var getAmbiente = function() {
	var amb = "produzione";
	var fpUrl = location.href;

	if (fpUrl.indexOf("librerie")>0 && fpUrl.indexOf("resources.bpmgrp.global")>0) 
		{ 
			amb = "librerie";
		}
	else
	{
		if (fpUrl.indexOf("svi")>0 && fpUrl.indexOf("web.webank.local")>0) amb = "sviluppo";
	}
	return amb;

}


/* Comportamenti automatici */
var structure = (function(){
	/* Variabili strutturali */
	var animationDuration = 200,
	menuDesktop = function(){
		
		var lev1 = [];
		var lev2 = [];
		var menuHtmlNode = function(title,href,id,selected,submenu,isnew,responsive,ishidden) {
			var ishidden = (typeof ishidden == "undefined")? "false" : ishidden;
			var displayprop = (ishidden==true)? "style=\"display:none\"" : "";

			var subMenu = (submenu)? submenu : "";
			var classes = [];
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
				href ="javascript:;";
			}
			return  "<li "+ displayprop +" class = \""+ classes.join(" ") +"\"><a href=\""+href+"\" "+ responsiveattr +"><span class=\"voice\">" + title +"</span></a>" + newCode + subMenu +"</li>";
		};
		
		if (typeof menuData != "undefined")
		{
			$.each(menuData,function(i,v){
				isSelected = false;
				isSelected = (v.id == navIndex[0]);
				lev1.push(menuHtmlNode(v.title,v.link,v.id,navIndex[0],null,v["new"],v.responsive,v["hidden"]));
				if (isSelected) {
					$.each(v.voices,function(x,val){
						// Prepara il terzo livello
						var lev3html = "";
						
						if (val.voices){
							lev3html = lev3html + "<div class=\"tlWrap\"><ul>";
							$.each(val.voices, function(indice,valore) {
								lev3html = lev3html + menuHtmlNode(valore.title,valore.link,valore.id,navIndex[2],null,valore["new"],valore.responsive);
							});
							lev3html = lev3html + "</ul></div>";
						}
						lev2.push(menuHtmlNode(val.title,val.link,val.id,navIndex[1],lev3html,val["new"],val.responsive,val["hidden"]));
					});
				}
			});
		}
		
		return {lev1: lev1.join(""),lev2: lev2.join("")};
	}(),

	// FUNZIONI PER MENU MOBILE
	toggleMenu = function(){
		if (typeof structure.mobileMenu == "undefined") {
			// Crea il menu mobile "al volo"
			structure.mobileTree = function (chiave) {

				var extloaded = !($(this).attr("data-menukey"));
				var key = !extloaded ? parseFloat($(this).attr("data-menukey")) : chiave;

				// var key = parseFloat($(this).attr("data-menukey"));
				// Assembla il navigatore secondo e terzo livello del primo selezionato

				// Pulsante "back"
				var backTo = $("<a>").attr("href","javascript:;").addClass("back").append(
						$("<i>").addClass("icon icon-arrow_left"),
						$("<span>").html("Menu / " + menuData[key].title)
					).click(function(){
						structure.mobileMenu.detailTree.empty().toggleClass("opened",animationDuration);
					});
				var voiceList = $("<ul>");
				$.each(menuData[key].voices,function(ind,val){
					var liv2voice = $("<li>");
					if (val.voices) {
						liv2voice.append($("<span>").html(val.title));
						var liv3voices = $("<ul>");
						$.each(val.voices, function(indice,valore){
							var liv3voiceSelected = (navIndex[2]== indice && navIndex[0]==key && navIndex[1]==val.id) ? true : false;
							var liv3voiceLink = (liv3voiceSelected) ? "javascript:;" : valore.link;
							var liv3voice = $("<li>").append($("<a>").html(valore.title).attr({"data-responsive":(valore.responsive)?"y":"n","href":liv3voiceLink}));
							if (valore.link =="javascript:;" || !valore.link) liv3voice.addClass("disabilitato");
							if (liv3voiceSelected) liv3voice.addClass("selected");
							liv3voices.append(liv3voice);
						});
						liv2voice.append(liv3voices);
					}
					else
					{
						liv2voice.empty().append($("<a>").html(val.title).attr({"data-responsive":(val.responsive)?"y":"n","href":val.link}));
					}
					
					voiceList.append(liv2voice);
				});
				var vistaGenResp = (menuData[key].responsive)?"y":"n";
				var vistaGen = $("<a>").addClass("fplink").attr("data-responsive", vistaGenResp).html("Vista generale " + menuData[key].title).attr("href", menuData[key].link);
				if (key != 0) vistaGen.addClass("hidden-xs");

				structure.mobileMenu.detailTree.append(backTo,vistaGen,voiceList);
				if (extloaded) {
					structure.mobileMenu.detailTree.show().toggleClass("opened");
				}
				else
				{
					structure.mobileMenu.detailTree.show().toggleClass("opened",animationDuration);
				}
				
				// Applica a tutte le nuove voci generate la funzione per il check responsive
				structure.mobileMenu.detailTree.find("a[data-responsive=n]").click(function(){noRespOverlay(this,event);});

			};
			structure.mobileMenu = $("<div>").attr("id","mobileMenu");

			// Genera il menu' mobile con i primi livelli (associando le varie icone)
			var level1 = $("<ul>");
			$.each(menuData,function(i,v){
				// Assembla la voce per il touch
				var menuIcon = $("<i>").addClass("icon icon-"+v.title.replace(/\s/g,"").toLowerCase());

				var menuVoice = $("<a>").append(menuIcon, $("<span>").html(v.title));
				if (v["new"]) menuVoice.append($("<span>").addClass("new").html("new"));

				var level1Voice = $("<li>").attr({"data-id":v.id,"data-responsive": (v.responsive)?"y":"n","data-menukey":i}).append(menuVoice);
				if (navIndex[0] == v.id) level1Voice.addClass("selected");
				level1Voice.click(structure.mobileTree);
				level1.append(level1Voice);
			});
			structure.mobileMenu.append(level1);

			// Genera la base per i secondi e terzi livelli
			structure.mobileMenu.detailTree = $("<div>").attr({"id":"mobileDetailTree"});
			structure.mobileMenu.prepend(structure.mobileMenu.detailTree);
			$("body").prepend(structure.mobileMenu);

		}

		var otherButton = $("header .headbtn.usermenuopen");
		if(otherButton.hasClass("opened")) otherButton.trigger("click");

		$(this).toggleClass("opened",animationDuration);
		if (!((navIndex[0] == "0") && navIndex.length == 1))
		{
			if (level1) structure.mobileTree(level1.find("li.selected").attr("data-menukey"));
		}		
		structure.mobileMenu.toggleClass("opened",animationDuration);
	},

	// Menu' utente
	toggleUserMenu = function() {
		// Assembla il mobilemenu se non esiste
		if (typeof structure.mobileUserMenu == "undefined") {
			structure.mobileUserMenu = $("<div>").attr({"id": "userMenu"});
			
			structure.mobileUserMenu.append($("#userMenuMobile"));
			$("body").prepend(structure.mobileUserMenu);
		}
		// Chiude l'eventuale "concorrente aperto"
		var otherButton = $("header .headbtn.menuopen");
		if(otherButton.hasClass("opened")) otherButton.trigger("click");

		$(this).toggleClass("opened",animationDuration);
		structure.mobileUserMenu.toggleClass("opened",animationDuration);
	},

	menuActivate = $(function(){
		$(".level2>li").on("mouseenter",function(){
			//aggiunta per non mostrare menu quando è vuoto
			var isActivable = $(this).find('.tlWrap ul li').length>0 ? true : false;
			if(isActivable)
				{
					$(this).addClass("active");
					var nZindex = getNextHighestZindex();
					$(this).find('ul').css('z-index', nZindex);
					$(this).find('a:first-child').css('z-index', nZindex+1);
				}
			if (isTouch) {
				if (typeof menuTouch != "undefined")
				{
					clearTimeout(menuTouch);
				}	
				menuTouch = setTimeout(function(){ $(".level2>li.active").delay(5000).removeClass("active");},5000);
			 }
		});
		$(".level2 li").on("mouseleave",function(){
			$(this).removeClass("active");
			$(this).find('ul').css('z-index', 9);
			$(this).find('a:first-child').css('z-index', 10);
		});

	}),
	
	/* inizializzazione selettore terzi e quarti livelli + restituzione oggetto*/
	menuSelector = $(function(){

		// Appende le "opzioni" al livello selezionato 
		structure.thirdLevelMenu = $("<ul>").attr("id","thirdLevelMenu");
		$.each($("#leftmenu>ul>li"),function(i,v){
			v = $(v);
			var mvoice = $("<li>");
			if (v.hasClass("selected")){
				mvoice.addClass("selected").append($("<span>").append(v.find("a").html()));
			}	
			else
			{ 
				mvoice = v.clone();
			}
			
			structure.thirdLevelMenu.append(mvoice);
		});
		var lmVoice = $("#leftmenu .selected");
		lmVoice.append($("<i>").addClass("icon icon-ellipsis-v"),structure.thirdLevelMenu).click(function(){ $(this).toggleClass("opened");} );
		
	});


	/* Inizializzazioni  */
	init = $(function(){
				/* Inizializzazione interattivita' oggetti */
				
				/* Primo livello */
				$("a.headbtn.menuopen").click(structure.toggleMenu);

				// Menu utente
				$("a.headbtn.usermenuopen").click(structure.toggleUserMenu);

				// Controllo flag e overlay responsive
				$("a[data-responsive=n]").click(function(event){
					noRespOverlay(this, event);
				});
			
				// In librerie disabilita i link dei terzi livelli non navigabili
				$(".tlWrap li a[href='javascript:;']").addClass("disabilitato");

			});

	return {
				init:init,
				toggleMenu:toggleMenu,
				toggleUserMenu: toggleUserMenu,
				menuDesktop:menuDesktop
			};

}());


/* TOOLBOX */
/*
$(function () {
	var tbStatus = (wStore.read("tbStatus")=="compact") ? "compact" : "";
	// Funzioni di pilotaggio della toolbox
	var toolbox = $('#toolbox').addClass(tbStatus),
		toolbtnArr = $('#toolbtns .toolbtn'),
		toolObjArr = $(".toolobj");
	$('#toolhandle').click(function () {
		if (toolbox.hasClass('compact')) {
			toolbox.removeClass('compact expanded');
			toolbtnArr.removeClass('selected');
			toolObjArr.hide();
			wStore.write("tbStatus","");
		} else {
			toolbox.addClass('compact');
			wStore.write("tbStatus","compact");
		}
	});

	toolbtnArr.click(function () {
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
		var toolId = toolbtn.find(".icon").attr("data-tool");
		var toolObj = $(toolId);
		if (toolbtn.hasClass("selected"))
			{
				toolObj.css("z-index",getNextHighestZindex()).show();
				// Esegue funzioni specifiche per l'inizializzazione del tool

				switch (toolId) {
					case "#toolCmb":
						cmbLoad();
					break;

					case "#toolAss":
						vaOpen();
					break;

					case "#toolAppuntamento":
						appuLoad();
					break;

				}
			}
		else
			{
				toolObj.hide();
			}
	});
	
	// Rende tutti i tool draggabili
	$(".toolobj").draggable({handle: "span.titolo"});
	// Funzione pulsante "chiudi"
	$(".toolobj .chiudi").click(function(){
		$(".toolbtn a[data-tool='#"+ $(this).parents(".toolobj").attr("id") +"']").trigger("click");
	}); 
});
*/


/* TOOLBOX NORESP FIXED*/
var toolboxInit = function() {

	// Se e' presente la toolbox...
	if ($("#toolbtns").length) {
		// INIZIALIZZAZIONE DEI BOTTONI RELATIVI AI VARI TOOL
		toolInitOffset = $("#toolbtns").offset();
		toolInitPos = {"left" : toolInitOffset.left + 53 +"px", "top" : toolInitOffset.top + 108 + "px"}
        
		// Al click sui vari pulsanti con data-toolid impostato...
		$("#toolbtns *[data-toolid]").click(function(){
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
			}
			else
			{
				$("body").prepend(tool);
				tool.draggable({"handle":".handle"}).css(toolInitPos).show();
			}

			// Inizializzazioni personalizzate
			if (tId == "tool2") $("#cmbData").trigger("change");

			tool.find(".close,.vaChiudi").click(function(){
				$("#toolbtns .toolbtn a").removeClass("selected");
			});

		});
	}
};

/* Wrapper per il document.write */
function getCodeOf(el) {
	if (el === "undefined") el = "";
	document.write(el);
}

/* FRAMEWORK GESTIONE ERRORI */
/* Setta gli errori in un wrapper, una volta fornita una matrice */
/* Formato della matrice:
	field: "id" o oggetto direttamente
	text: "testo HTML dell'errore "
*/
function setHasErrors (errorMatrix, wrapper)
{
	wrapper = $(wrapper);
	resetHasErrors(wrapper);
	if (errorMatrix.length) {
		$.each(errorMatrix, function(index, error) {
			setHasError(error.field,error.text,wrapper);
		});
	}
}
/* resetta tutti gli errori in un wrapper */
function resetHasErrors(wrapper)
{
	wrapper = $(wrapper);
	wrapper.find(".requiredField, div[class*=\"col-\"]").removeClass("has-error");
    wrapper.find(".help-block.with-errors").remove();
    
}
/* Setta l'errore su di un singolo oggetto (campo o altro, risalendo al suo fieldset)*/
function setHasError(field,errortext,wrapper)
{
	field = $(field);
	// Trova il primo parent contenente un etichetta
	var errorWrapper = $(field).closest(".requiredField", wrapper);
	if (!errorWrapper.length) errorWrapper = $(field).closest("div[class*=\"col-\"]",wrapper);
	errorWrapper.addClass("has-error");
	
	if(field.closest('.has-error').find('.with-errors').length===0) {field.closest('.has-error').append('<span class="help-block with-errors">' + errortext + '</span>');}
	$("html, body").addClass('scrollableElement');
	$("html, body").animate({scrollTop: $('.has-error').eq(0).offset().top - $('.headerMobile').height() +'px'}, "300", function(){$('.has-error').eq(0).find('input').eq(0).trigger('focus')});
}
/*funzione per fare il clear nei campi text dei form */

var clearInputText = function() {
    
    var inputClearable = $('input.clear-x[type="text"], input.clear-x[type="number"], input.clear-x[type="email"]');
    inputClearable.wrap('<div class="editable-input">');
    $('.editable-input').append('<span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i ></span>');
	inputClearable.each(function( index ) {
		$(this).keyup(function(){
			if ($(this).val() !== '') {
				$(this).siblings('.editable-clear-x').show();
			} else {
				$(this).siblings('.editable-clear-x').hide();
			}
		});
		
	});
	/*$('.autoSelButt').click(function(){
			$(this).closest('div').find('.editable-clear-x').toggle();
		})*/
	var btnClearField = $('.editable-clear-x');
	btnClearField.each(function( index ) {
		$(this).click(function(){
			$(this).prev('input').val('');
			$(this).hide();
		});
	});
};
//funzione per la gestione degli accordion tra i preferiti
function selectPreferred() {
	var accClosed = $('a[data-toggle = collapse].collapsed'),
		checkMenu = $('.panel-body input[type=checkbox]'),
		wrapperCheckbox = $('.panel-body');
	$('#openAll').click(function(){
	  	accClosed.trigger('click');
	})
	$('#closeAll').click(function(){
	  	$('a[data-toggle = collapse]').not('.collapsed').trigger('click');
	})
	$('#openSel').click(function() {
		wrapperCheckbox.each(function(){
		if($(this).find(checkMenu).is(":checked")) {
			$(this).closest('.panel').find('.collapsed').trigger('click')
		}
		else {
			$(this).closest('.panel').find('a[data-toggle = collapse]').not('.collapsed').trigger('click');
		}
	})
	})
	$('#clearSel').click(function() {
		checkMenu.attr('checked', false)
	})
}

 /*funzione svuota campi pin 32*/
var AnnullaPin = function() {
	var AnnullaSing = $('.clearPin'),
	    inputPin = $('.bgPin32 input[type="password"],.bgPin32 input[type="number"]');
	AnnullaSing.each(function( index ) {
		$(this).click(function(){
			inputPin.val('');
			inputPin.attr('type','number');;
			$('.pincode').find('input').eq(0).focus();
		});
	});
	inputPin.bind('focus', function(){
		if($(this).val().length ==0)
		{$(this).attr('type','number');}
	})
	inputPin.bind('keyup', function(){
		if($(this).val().length >=1) {
			$(this).attr('type','password');
			$(this).nextAll('input').focus()
		}

	})
};

/*funzione per determinare il viewport */
/* Verifica se schermo minore di... */
var viewdim = function () {
		var e = window, a = 'inner';
		if (!('innerWidth' in window )) {
			a = 'client';
			e = document.documentElement || document.body;
		}
		return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
	};

var findSmartDevice = function() {
	isSmallDevice = viewdim().width < 768 ? true : false;
};

/* VARIABILI E CONTROLLI PER DISPOSITIVI */

/* assegna il maggior z-index al modal */
function setZindexModal() {
	$('.modal').on('show.bs.modal', function (e) {
		var nZindex = getNextHighestZindex();
		$('.modal-backdrop').css('z-index', nZindex);
		$(this).css('z-index', nZindex + 1);
	});
	$('.modal').on('show.bs.modal', function (e) {
		 $(this).appendTo('body');
	});
	$('.modal').on('hide.bs.modal', function (e) {
		$('body').removeClass('modal-open');
	});
}
/* renderizza un modale con sfondo di oscuramento bianco */
function renderModalPage() {
	$('.modal').on('shown.bs.modal', function (e) {
		
		if($(this).hasClass('render-page'))
			{
				$(this).next('.modal-backdrop').addClass('color-white');
			}
	});
}
 /* appende il calendario ad una finestra modale su mobile */
var renderPickDateMobile = function (input, inst) {
	$('.ui-datepicker-title').hide();
	if (isSmallDevice)	{
		
		var  modalWrapperPicker ='<div class="modal fade" id="datePickerWrapper" tabindex="-1" role="dialog"><div class="modal-dialog modal-sm" role="document"><div class="modal-content"><div class="modal-body"></div></div></div></div>';
		if ($('#datePickerWrapper').length===0) { $(modalWrapperPicker).appendTo('#main'); }
		setZindexModal();
		inst.dpDiv.appendTo('#datePickerWrapper .modal-body');
		$('#datePickerWrapper').modal('show');
		$('body').addClass('modal-open');
		setTimeout(function () {
			inst.dpDiv.css({
			left: 0,
			top:0,
			position:'relative'
		});
		}, 0);
		
	}
};
  
//TOOLTIP BOOTSTRAP
	//inizializza tooltip
	//recupera il title per comporre il tooltip e aggiunge la x di chiusura se dimensione schermo grande
	var initTooltip = function () {
	if($("[data-toggle='tooltip']").length>0) {

		$("[data-toggle='tooltip']").tooltip(
		{
			html: true,
			title: addIconCloseTooltip,
			trigger: 'manual',
			animation: false,
			placement: 'auto'
		});
		
		// html complesso per i tooltip con ID indicato
		$.each($("[data-htmlid]"), function(i,v) {
			var ttHtml = $($(v).attr("data-htmlid")).addClass("inited");
			$(v).attr("data-title",ttHtml.html());
		});
		// Se l'id del tooltip non e' specificato...
		$.each($(".htmlTooltip").not(".inited"),function(i,v) {
			var ttHtml = $(v).addClass("inited");
			ttHtml.prev("[data-toggle='tooltip']").attr('data-title',ttHtml.html())
		});

		

	}
	
	openTooltip();
	
	$("[data-toggle='tooltip']").on('shown.bs.tooltip', function(){
		initCloseTooltip();
		if(!$(this).hasClass('closeable'))
		{
			isClosable = false;
			ttClosTooltipOuterTap();
		}
	});
};
var openTooltip =  function() {
    $("[data-toggle='tooltip']").bind('click focusin',function(){
		
		var el = $(this),
			dataTitle = el.attr('data-title');
			
		isClosable = false;
		if(el.hasClass('closeable'))
		{
			isClosable = true;
		}
		$(".tooltip.in").tooltip('hide');
		
		//hack per i tooltip contenenti immagini
		el.tooltip('show')
		
		
	});
};
var addIconCloseTooltip =  function() {
    var closeIcoTooltip = !(isClosable) ? ' ' : '<a href="javascript:;" class="closeTooltip"><i class="icon icon-close_inverted_fill icon-2x"></i ></a>' ;
    var titleClose = $(this).attr('data-title') + closeIcoTooltip;
	return titleClose;
};
var initCloseTooltip =  function() {
	$(".closeTooltip").bind('click', function(){
		$(this).closest('.tooltip').tooltip('hide');
	});
    $("[data-toggle='tooltip']").bind('focusout',function(){
		$(this).tooltip('hide');
    });
};
function ttClosTooltipOuterTap() {
	$(document).on('click touchstart', function (e) {
	var tooltipOpened = $(e.target).closest(".tooltip.in");
	if (tooltipOpened.length == 0 && !$(e.target).attr('data-toggle') && !isClosable) {
		$('.tooltip').tooltip('hide');
	}
});
};
var appendDatePickerIcon = function(idElement) {
	var icoDate = $("#" + idElement).datepicker().next('.ui-datepicker-trigger'),
		AddOnDate = $("#" + idElement).datepicker().closest('.editable-input').siblings('.input-group-addon.date');
		icoDate.appendTo(AddOnDate);
	//la maschera alle date si applica solo se compatibile
	if (!navigator.userAgent.match(/(Android (1.0|1.1|1.5|1.6|2.0|2.1|4.2.2))|(Windows Phone (OS  7|8.0))|(XBLWP)|(ZuneWP)|(w(eb)?OSBrowser)|(webOS)|(Kindle\/(1.0|2.0|2.5|3.0))/)) {
       $("#" + idElement).mask("99/99/9999");
      }
};


//FINE FUNZIONE PER TRASFORMARE I TAB IN ACCORDION
//inizializzazione dei tab-accordion
//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
//possono coesistere più gruppo di tab/accordion in pagina
//parametri: id contenitore e incice tab ch edeve essere aperto al load
var resizeTab = function(idTab, indexTabOpened) {
		//definizioni di variabili
	var tabWrapper =  $('#' + idTab );
	indexTabOpened = (typeof indexTabOpened === "undefined") ?  0 : indexTabOpened;
	
	tabWrapper.each(function(index) {
		var tabUl = $(this).find('.tabWrapper ul'),
			tabLi = $(this).find('.tabWrapper li'),
			aAccordion = $(this).find('a[data-toggle="collapse"]'),
			panelAccordion = $(this).find('.panel-collapse');
			//inizializza il tab che deve essere aperto
			tabLi.eq(indexTabOpened).addClass('on');
			tabLi.eq(indexTabOpened).prev().addClass('borderNoTab');
			aAccordion.eq(indexTabOpened).attr('aria-expanded','true').removeClass('collapsed');
			panelAccordion.eq(indexTabOpened).addClass('in').css('height','auto');		
		
		tabLi.each(function(index) {
			$(this).click(function(){
				$(this).siblings('li').removeClass('borderNoTab');
				$(this).addClass('on').removeClass('borderNoTab').prev().addClass('borderNoTab');
				$(this).siblings('li').removeClass('on');
				aAccordion.attr('aria-expanded','false').addClass('collapsed');
				panelAccordion.removeClass('in');
				aAccordion.eq(index).attr('aria-expanded','true').removeClass('collapsed');
				panelAccordion.eq(index).addClass('in').css('height','auto');
			});
		});
		aAccordion.each(function(index) {
			$(this).click(function(){
				tabLi.removeClass('on');
				tabLi.eq(index).addClass('on');
			});
		});
	});
};
//fuzione per stilizzare bordi tab necessarie causa stile table dei tab
var addBorderTab = function (){
	//vengono appese le classi per gestire i bordi dei tab in display table
	$('.navContFirstLev,.navfrontPage .innerTab').each(function () {
		$(this).find('li.on').prev().addClass('borderNoTab');
		$(this).find('li').click(function () {
			$(this).siblings('li').removeClass('borderNoTab');
			$(this).removeClass('borderNoTab').prev().addClass('borderNoTab');
		})
	})
}
var addEffectHoverTab = function() {
	$('.navfrontPage').each(function () {
		var liNoOn = $(this).find('li:not(".on")');
		liNoOn.mouseover(function () {
			if(!$(this).next().hasClass('on')) {$(this).addClass('hover')}
			if(!$(this).closest('.navcommPage').length>0){$(this).prev().addClass('hoverPrev')}
		})
		liNoOn.mouseout(function () {
			$(this).removeClass('hover');
			$(this).prev().removeClass('hoverPrev')
		})
	})
}


//funzioni per la richiesta carte
function initVariabiliStep(el) {
	    parentPanel = el.closest('.panel-step');
		nextPanel = parentPanel.next('.panel-step');
		nextPanelTitle = nextPanel.find('.panel-title a').eq(0);
}
function proseguiStep(el) {
		initVariabiliStep(el);
	    if(parentPanel.find('.editButton').length>0)
	    {
	    parentPanel.removeClass('unclosable').addClass('editable');
	    parentPanel.find('input, textarea, select').prop("disabled", true);
	    }
	    else {
	      parentPanel.removeClass('unclosable').addClass('done');
	    }
	    parentPanel.prev('.panel-step').removeClass('editable').removeClass('unclosable').addClass('done');
	    //simula apertura accordion ma poi lo rende di nuovo bloccato
	    nextPanel.removeClass('disabled').addClass('unclosable');
	    nextPanelTitle.attr('data-toggle','collapse');
	    nextPanelTitle .trigger('click');
	    nextPanelTitle.attr('data-toggle','');

}
function modificaStep(el) { 
	initVariabiliStep(el);
	parentPanel.removeClass('editable').addClass('unclosable');
	parentPanel.find('input, textarea,select').prop("disabled", false);
	nextPanel.removeClass('unclosable').addClass('disabled');
	nextPanelTitle.attr('data-toggle','collapse');
	nextPanelTitle .trigger('click');
	nextPanelTitle.attr('data-toggle','');
}

$(function() {
	findSmartDevice();
	setZindexModal();
	renderModalPage();
	clearInputText();
	selectPreferred();
	AnnullaPin();
	initTooltip();
	$("[data-toggle='tooltip']").on('shown.bs.tooltip', function(){
		$('.tooltip').css('z-index',getNextHighestZindex());
	});
	
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
  if($("[data-toggle='tooltip']").length>0) {
  $("[data-toggle='tooltip']").tooltip('hide');
  }
  findSmartDevice();
 });

/*	Ritorna una struttura per gli overlay */
/*
	Parametri: 
	{
		id: id dell'overlay
		body: oggetti da appendere al body
		footer: oggetti da appendere al footer
	}
*/
var getOverlay = function(params)
{
	var olobj =  $("<div>").addClass("modal fade").attr({"tabindex":"-1","role":"dialog","id":params.id}).append(
			$("<div>").addClass("modal-dialog modal-md").attr({"role":"document"}).append(
				$("<div>").addClass("modal-content").append(
						$("<div>").addClass("modal-header").append(
							$("<a>").addClass("close").attr({"data-dismiss":"modal","aria-label":"close"}).append($("<i>").addClass("icon icon-close"))
						),
						$("<div>").addClass("modal-body").append(params.body),
						$("<div>").addClass("modal-footer").append(params.footer)
					)
			)
		);
	return olobj.hide();
};


/* Avviso overlayer responsive */
var noRespOverlay = function(obj, event){

	// Se ci sono i presupposti per proporre l'overlayer... (inserire qui l'eventuale controllo sul flag dell'accettazione )
	//var dW = brow.device(); //commentato per non fare apparire l'overlayer
	if (dW != "md") {

		event.preventDefault();
		var voice = $(obj);
		var linkgoto = voice.attr("href");
		
		// Se l'overlay non esiste, lo crea
		if (typeof noRespOl == "undefined"){
				// Messaggio
			noRespMsg = "La funzione richiesta non &egrave; disponibile in modalit&agrave; responsive, pertanto potrebbe essere visualizzata in modo anomalo.<br>Desideri comunque continuare a navigare?";
			noRespConferma = $("<button>").attr({"type":"button"}).addClass("btn btn-primary").html("Si, voglio continuare");
			
			noRespOl = getOverlay({
				id: "noRespOvelay",
				body:noRespMsg,
				footer: $("<div>").addClass("row").append($("<div>").addClass("col-xs-12").append(
					$("<div>").addClass("btn-align-left").append($("<button>").attr({"type":"button","data-dismiss":"modal"}).addClass("btn btn-default").html("annulla")),
					$("<div>").addClass("btn-align-right").append(noRespConferma)
					))
			});
		}
		noRespConferma.click(function(){
				parent.location.href=linkgoto;
		});
		noRespOl.css("z-index",getNextHighestZindex());
		noRespOl.modal("show");
	}
};

function activateTab () {
	$('.navContFirstLev,.navfrontPage').not('.disableJs').each(function () {
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
		navContFirstLev.children('.separator').css('min-width', innerTab.children('ul').innerWidth() );
		if (tabContentGroup.length) {
			
			addBorderTab();
			tabArr = innerTab.find('li');
			tabContentArr = tabContentGroup.find('.tab-content');
			tabArr.click(function () {
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

function highlightCollapse () {
	$(this).closest('.panel').addClass('panel-selected');
}

function resetCollapse () {
	$(this).closest('.panel').removeClass('panel-selected');
}

function scrollInputFocus() {
	if(/Android 4\.[0-3]/.test(navigator.appVersion)){
	   window.addEventListener("resize", function(){
	      if(document.activeElement.tagName=="INPUT"){
	         window.setTimeout(function(){
	            document.activeElement.scrollIntoViewIfNeeded();
	         },0);
	      }
	   })
	}
}

function scrollConfrontaFocus() {
	if ($('.scrollFocus').length>0) {
	var menuScroll = $('.scrollFocus label');
	menuScroll.each(function(index){
		$(this).click(function(){
			$(this).toggleClass('selected');
			$('.fixed-table-body').scrollLeft(0);
			if($(this).hasClass('selected'))
			{
				el = $(this);
				var elTitle = $(el).attr('href');
				var dataField = $('.comparazioneFocus th');
				dataField.each(function(el) {
					if($(this).attr('data-field') == elTitle)
					{
						scrollLeft = $(this).offset().left - $('.fixed-table-header-columns').width() -30;
						$('.fixed-table-body').animate({scrollLeft: scrollLeft+20}, 400).animate({scrollLeft: scrollLeft}, 400);

					}
				})
			}
			else 
			{
				$('.fixed-table-body').scrollLeft(0);
			}
		})
	})
	}
}
function initAccordionText() {
	if( $('.textAccordion').length>0) {
		pTot = [];
		pTotLong =  [];
		$('.textAccordion').each(function(index){
			pTotEl = $(this).find('a.specificheProdotti span');
			pTot.push(pTotEl);
			pTotLong[index] = pTot[index].clone().addClass('longText');
			divh = 40;
			element = this;
			setAccordionText(element,index);
			//accordion al click
		    $(element).find('.specificheProdotti').bind('click',function(){
		    	$(this).toggleClass('on');
		    	if($(this).hasClass('on'))
		    	{
		    		pTotLong[index].insertAfter($(this).find('span'));
		    		pTot[index].hide();
		    	}
		    	else {
		    		pTotLong[index].remove();
		    		pTot[index].show();
		    	}
		    })
			var resizeTimer;
			$(window).on('resize', function(e) {
			  clearTimeout(resizeTimer);
			  resizeTimer = setTimeout(function() {
				pTotEl.html(pTotLong[index].html());
				setAccordionText(element,index);
			   }, 250);
			});
		});
		
	}
}

function setAccordionText(element,index) {
	if(isSmallDevice) {
	if (pTot[index].outerHeight() > divh) {
		var text_arr = pTot[index].html().split(' ');
		pTot[index].html('');
		for (var j = text_arr.length - 1; j>0 ; j--) {
    			delete text_arr[j];
    			pTot[index].html(text_arr.join(' '));
    			if (divh >= pTot[index].outerHeight()){
    			 var nHtml = pTot[index].html().replace(/\W*\s(\S)*$/, '');
    			 nHtml = nHtml.replace(/\W*\s(\S)*$/, '...');
    			 pTot[index].html(nHtml);
    			 break;
    			}
			}
    }
  }
 else{
 	
 	pTot[index].html(pTotLong[index].html());
	$(element).find('.longText').unwrap('span').removeClass('longText')
 }
}
/* gestione accordion tabelle responsive*/
function fixCols(){
$('.detail-icon').bind('click', function() 
	
	{
		
		$(this).closest('tr').next('.detail-view').find('td').attr('colspan',$(this).closest('table').find('th:visible').length);
	})
}
/* gestione ordianmento date tabelle responsive*/
var fixDate = function(a,b) {
     	day = parseInt(a.substr(0, 2), 10),
		month = parseInt(a.substr(3, 2), 10),
		year = parseInt(a.substr(6, 4), 10);
		valueA = (year * 10000 + (month + 1) * 100 + day);
		day = parseInt(b.substr(0, 2), 10)		
		month = parseInt(b.substr(3, 2), 10),
		year = parseInt(b.substr(6, 4), 10);
		valueB = (year * 10000 + (month + 1) * 100 + day);
		return (valueA < valueB) ? -1 : (valueA > valueB) ? 1 : 0;
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

/* INIZIALIZZA LA CHAT */
function startChat() {

	// Inizializza la variabile necessaria ad identificare il nuovo layout delle parti private (per i bottoni)
	
	// Detect del wrapper e della banca 
	var vivChatWr = $("#vvcButton"), spanId ="";
	respFixedTb = true;
		
	if (vivChatWr.length>0) {
		switch (getBank()) {
	      // Caso WEBANK
		  case "Webank":
		    spanId = (getAmbiente() != "produzione")? "vvc_placeholder_50e3fe4871f684ee06000110" : "vvc_placeholder_50eede6071f684ea060002dd";

		    /*	
		    var EmuVivCont = "<div class='vivocha_widget_container'><div class='vivocha_widget_buttonContainer vivocha_widget_openmedia_chat'><div class='vivocha_widget_button'><div id='wbbutton'></div></div></div></div>";
		    var EmuButtCont = "<li class='toolbtn'><a class='icon icon-chat disabled' href='javascript:;' title='Chat'></a></li>";
		    setTimeout( function(){
		    	$("#" + spanId).append(EmuVivCont);
		    	$("#wbbutton").append(EmuButtCont)
		    },1000);
			*/

		    break;
		    
		  //Caso BPM
		  case "BPM Banking":
		  	spanId = (getAmbiente() != "produzione")? "vvc_placeholder_54bcbf7d701fd07f078b4578" : "vvc_placeholder_5406cf187ad4c1d404000000";
			
			// Definisce il comportamento per il "fuori orario"
			vvcMessage = function(msgType)
			{
				var chatBut = $("<a>").attr("title","chat").addClass("icon icon-chat");
				vivChatWr.empty().append($("<li>").addClass("toolbtn").append(chatBut));
				// Prepara l'overlay con il tooltip
				/* MESSAGGI PER I VARI STATI */
				vvcMessageHtml = {
					"FO" : "La chat &egrave; attiva da luned&igrave; a venerd&igrave; <b>dalle 9 alle 18</b>.<br>In alternativa chiamaci al numero verde <b>800 88 00 88</b>",
					"NDPRIV" : "Il servizio chat non &egrave; al momento disponibile.<br>In alternativa chiamaci al numero verde <b>800 88 00 88</b>"
				};
				vvcMessageObj = $("<div>").attr("id","vvcTT").append($("<div>").addClass("twrap").append($("<p>").html(vvcMessageHtml[msgType]))).hide();
				chatBut.on("mouseover", function(){
					vvcMessageObj.css("z-index",getNextHighestZindex()).show();
				});
				chatBut.on("mouseout",function(){
					vvcMessageObj.fadeOut();
				})
				$("#vvcButton").append(vvcMessageObj);
			}

		    break;
		}
		vivChatWr.append($("<span>").attr("id",spanId));
	}


	// Carica il JS in tutta la parte privata (in modo da attivare anche le eventuali proattive)
	vivochaUrl = '//cloudando.vivocha.com/a/webank/api/vivocha.js';
	var vvc = document.createElement('script'); 
	vvc.type = 'text/javascript'; 
	vvc.async = true; 
	vvc.src = vivochaUrl;
	var s = document.getElementsByTagName('script')[0]; 
	if(s) s.parentNode.insertBefore(vvc, s); 
	else document.getElementsByTagName('head')[0].appendChild(vvc);

}


// Funzioni da attivare al loading del documento
$(function () {

	addEffectHoverTab();
	activateTab();
	scrollConfrontaFocus();
	scrollInputFocus();
	initAccordionText();
	toolboxInit();
	$('.panel-collapse').not('.collapse-top')
		.on('show.bs.collapse', highlightCollapse)
		.on('hide.bs.collapse', resetCollapse);
	
	/* Inizializza la chat */
	startChat();

	//hack per prevenire autocomplete su chrome
	//$('.formGenerico.borderFormRounded input[type="text"],.formGenerico.borderFormRounded input[type="password"').attr('autocomplete','off');

});
