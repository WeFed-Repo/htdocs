//inizializzazione dell'autocomplete nell'archivio
initloadEventi = function(data) {
	var testDataKo = data===null || data.esito.toLowerCase() =='ko',
		arrayEventiNome = [],
		arrayEventiRelatore = [];
	if (testDataKo) { //controllo correttezza json
		loadDataFailure();
		alert('messaggio di errore');
	} else {
		if (data.listaEventi.length) { 
			$.each(data.listaEventi, function (index) {
				arrayEventiNome.push(data.listaEventi[index].nome);
				arrayEventiRelatore.push(data.listaEventi[index].relatore);
			});
			$("#nomeEventoAutocomplete").autoComplete(arrayEventiNome, {
				selectable: false,
				clearable: true,
				numResults: 5,
				filter: 'beginning'
			});
			$("#relatoreEventoAutocomplete").autoComplete(arrayEventiRelatore, {
				selectable: false,
				clearable: true,
				numResults: 5,
				filter: 'beginning'
			});
			$("#nomeEventoAutocomplete").autocomplete().data("ui-autocomplete")._renderItem = stylingResults;
			$("#relatoreEventoAutocomplete").autocomplete().data("ui-autocomplete")._renderItem = stylingResults;
		}
	}
}
loadDataFailure = function () {
	//printLog('*** loadDataFailure: status: ' + textStatus + "\nError: " + errorThrown + "\nstatusCode: " + jqXHR.statusCode());
};

loadEventi = function () {
	var url = '/eventi.do',
		pathLibrerie = '/librerie/include/commons/ajax',
		AjaxUrl = (!isLib)? pathSviluppo + url : pathLibrerie + url.replace(/\.do(\?)?/i, '.php$1'),
		parameters = {};
	jqAJAXCall('post', 'json', AjaxUrl, initloadEventi, loadDataFailure, parameters);
};


// Inizializza un'intera pagina con tab degli eventi
initEventPage = function (params) {
		
		allWraps = $(".eventList [data-url]");
		allButs = $("*[data-wrapper]");
		
		//Inizializzazione dei pulsanti
		allButs.click(function(){
			// Nasconde tutti i contenitori
			var but = $(this);
			// Cerca tutti i tab "fratelli"
			var tabs = $(this).parents("tr,ul").find("*[data-wrapper]");
			tabs.parent("td, li").removeClass("on").addClass("off");
			// Crea l'array dei contenitori pilotati
			var wraps = new Array();
			$.each(tabs,function(i,v){
				wraps.push("#" + $(v).attr("data-wrapper"));
			});
			$(wraps.join(",")).hide();
			
			var wrap = $("#" + but.attr("data-wrapper"));
			wrap.show();
			but.parent("td, li").removeClass("off").addClass("on");
			// Se il tab non ha il data-url, si sposta sul primo wrap disponibile e ne carica i contenuti
			if(!wrap.attr("data-url")) {
				// Se non ci sono tab con il display block sceglie il primo
				wrap = (wrap.find("*[data-url]:visible").length>0) ? wrap.find("*[data-url]:visible").eq(0) : wrap.find("*[data-url]").eq(0).show();
			}; 
			
			// Svuota tutti i contenitori
			allWraps.empty();
			// Blocca l'interfaccia
			$("#contenuti").addClass('loading');
			// Carica i dati dall'esterno e riempie il tab
				$.ajax({
					url: wrap.attr("data-url"),
					dataType: "html",
					success: function(data){
						wrap.html(data);
						initEventList(null,wrap);
						// Appende il div paginatore, se gli eventi sono piu' di 5   
						if (wrap.find(".eventRow").length > 5)
							{
							var paginatore = $("<div>").addClass("paginator");
							wrap.append(paginatore);
							// Attiva la paginazione 
							paginator({
								container: paginatore,
								items: wrap.find('.eventRow'),
								pageCount: 5,
								pageSizes: [5, 10, 20]
							});
						}
						$("#contenuti").removeClass('loading');						
					},
					failure: function() {
						alert("Errore di caricamento dati.");
						$("#contenuti").removeClass('loading');	
					}
					
				});
				// Inizializza il paginatore
				wrap.attr("data-init","ok");
		});
		
		// Carica i primi contenuti
		allButs.eq(0).trigger("click");
	}