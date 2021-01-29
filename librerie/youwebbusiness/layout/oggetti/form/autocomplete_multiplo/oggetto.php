<script src="/youwebbusiness/layout/oggetti/form/autocomplete_multiplo/ListaBillers2.js"></script>
  <!--combo autocomplete -->
	<!--combo autocomplete --> 
	<div class="bordered mb-4">
	  <form class="form-grid needs-validation" novalidate>
		<div class="form-group col-sm-6 col-md-6">
			<label class="control-label">Autocomplete 1 a caricamenti successivi</label>
			<div class="input-group autocomplete">
			  <input id="autocomplete1" type="text" class="form-control ui-autocomplete-input" role="menu" autocomplete="off">
			  <button tabindex="-1" type="button" class="ui-button ui-combobox-button dropdown-arrow" role="button" title="">
				  <div class="input-group-append">
				  </div>
			  </button>
			</div>
		</div>
		<div class="form-group col-sm-6 col-md-6">
			<label class="control-label">Autocomplete 2 a caricamenti successivi</label>
			<div class="input-group autocomplete">
			  <input id="autocomplete2" type="text" class="form-control ui-autocomplete-input" role="menu" autocomplete="off">
			  <button tabindex="-1" type="button" class="ui-button ui-combobox-button dropdown-arrow" role="button" title="">
				  <div class="input-group-append">
				  </div>
			  </button>
			</div>
		</div>
	  </form>
	</div>
	<div class="modal fade" data-modal="default" id="modalAutoCompleteautocomplete1"> 
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Pagamento a favore di</h5>
					<a href="#.html.html.html.html" data-dismiss="modal" aria-label="Close" >
			  <img src="./fe/img/icon/close.svg">
			</a>
		  </div>
		  <div class="modal-body">
			 <p>testo ancora da verificare</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		 </div>
	  </div>
  </div>
	<div class="modal fade" data-modal="default" id="modalAutoCompleteautocomplete2"> 
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Pagamento a favore di</h5>
					<a href="#.html.html.html.html" data-dismiss="modal" aria-label="Close" >
			  <img src="./fe/img/icon/close.svg">
			</a>
		  </div>
		  <div class="modal-body">
			 <p>testo ancora da verificare</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  </div>
		 </div>
	  </div>
  </div>
  <script>
    /*
			oggettiDaFiltrare contenuti in /AutocompleteCBill/ListaBillers.js
		*/
		var oggettiDaPassare1=[];
		for(var i=0; i< oggettiDaFiltrare.length; i++){
			oggettiDaPassare1.push({
				key: oggettiDaFiltrare[i].Id,
				text: oggettiDaFiltrare[i].Description,
			})
    }
	
	
	var oggettiDaPassare2=[];
		for(var i=0; i< oggettiDaFiltrare2.length; i++){
			oggettiDaPassare2.push({
				key: oggettiDaFiltrare2[i].ABI,
				text: oggettiDaFiltrare2[i].Banca,
		})
		}
		
		
			
    var params1 = {
					//id input autocomplete
					inputId: "autocomplete1",
					//numero minimo caratteri per ricerca
					minLength:3,
					//oggetti da filtrare
					objectsToBeFiltered: oggettiDaPassare1,
					//funzione filtrante
					//srcResults = insieme oggetti da filtrare
					//request = caratteri digitati su input text
					//return elementi dove request è contenuto 
					filterFunction: function (srcResults, request) {
						
						var re = $.ui.autocomplete.escapeRegex(request.term);
						var matcher = new RegExp(re, "i");
						var arrayToReturn = [];
						srcResults.forEach(
							function (item) {

								var toRet = matcher.test(item.text);
								if (toRet) {
									arrayToReturn.push(item);
								}

							})

					   
						return arrayToReturn;
					},
					//funzione per gestione modale
					//param : oggetto autocomplete
					manageModal: function (inputAutocomplete) {
						
						$('#modalAutoComplete' + params1.inputId).modal('show');
						console.log('apertura modale' + params1.inputId);
						//gestione modale non trovi ...
						inputAutocomplete.val('');
							
					},
					//funzione per gestire selezione opzione dalla lista
					//param e== componente autoComplete
					//param ui== opzione selezionata
					manageSelect: function (e, ui) {
						
						$("#autocomplete1").val(ui.item.text);
						e.preventDefault();
						console.log( "Valore : "+ui.item.text);
						console.log( "Chiave : "+ui.item.key);
						//eseguo operazioni duranti selezione valori...
					},
					//funzione per gestire possibili operazioni pre filtraggio
					beforeFilter: function () {
						console.log('stai per filtrare i risultati');
					},
					//lingua (it-IT o En)
					language:'it-IT',
					//funzione che intercetta l'evento di onchange
					onChange: function () {
						console.log('stai modificando il box-input');
					}
		}
		
		var params2 = {
					//id input autocomplete
					inputId: "autocomplete2",
					//numero minimo caratteri per ricerca
					minLength:3,
					//oggetti da filtrare
					objectsToBeFiltered: oggettiDaPassare2,
					//funzione filtrante
					//srcResults = insieme oggetti da filtrare
					//request = caratteri digitati su input text
					//return elementi dove request è contenuto 
					filterFunction: function (srcResults, request) {
						
						var re = $.ui.autocomplete.escapeRegex(request.term);
						var matcher = new RegExp(re, "i");
						var arrayToReturn = [];
						srcResults.forEach(
							function (item) {

								var toRet = matcher.test(item.text);
								if (toRet) {
									arrayToReturn.push(item);
								}

							})

					   
						return arrayToReturn;
					},
					//funzione per gestione modale
					//param : oggetto autocomplete
					manageModal: function (inputAutocomplete) {
						
						$('#modalAutoComplete' + params2.inputId).modal('show');
						console.log('apertura modale' + params2.inputId);
						//gestione modale non trovi ...
						inputAutocomplete.val('');
							
					},
					//funzione per gestire selezione opzione dalla lista
					//param e== componente autoComplete
					//param ui== opzione selezionata
					manageSelect: function (e, ui) {
						
						$("#autocomplete2").val(ui.item.text);
						e.preventDefault();
						console.log( "Valore : "+ui.item.text);
						console.log( "Chiave : "+ui.item.key);
						//eseguo operazioni duranti selezione valori...
					},
					//funzione per gestire possibili operazioni pre filtraggio
					beforeFilter: function () {
						console.log('stai per filtrare i risultati');
					},
					//lingua (it-IT o En)
					language:'it-IT',
					//funzione che intercetta l'evento di onchange
					onChange: function () {
						console.log('stai modificando il box-input');
					}
		}
		
		/*
		 * Funzione per creazione componente jquery autocomplete
		 * 
		 *  params: Oggetto composto da property required/ not required
		 *  property di params:
		 *  
		 * PROPERTY REQUIRED DI PARAMS
		 *  
		 *  ==>>inputId : stringa avente id dell'input text relativo all'autocomplete
		 *  
		 *  ==>>manageSelect(param1,param2): funzione,
		 *      avente come primo parametro l'elemento grafico selezionato, e come secondo
		 *      l'oggetto selezionato con chiave e valore. Ha lo scopo di gestire l elemento selezionato.
		 *      Return void
		 *      
		 *  ==>>filterFunction(listaDati,caratteriDigitati): 
		 *      funzione per filtraggio dei dati rispetto ai caratteri digitati.
		 *      Contiene due parametri: il primo la lista dei dati da filtrare, il secondo i caratteri digitati.
		 *      Deve tornare un array di elementi filtrati.
		 *      Gli elementi devono essere oggetti composti da {key: '', text: ''}
		 *  
		 *  
			 *  ==>>objectsToBeFiltered: Array di oggetti {key: '', value: ''} che popoleranno la lista dell'autocomplete
		 *
		 *  ==>>language: stringa per la lingua dell'utente loggato. Utile per gestire le scritte del template 
		 *  
		 * PROPERTY NOT REQUIRED (OPTIONAL) DI PARAMS
		 *  
		 *  ==>>beforeFilter: funzione utilizzata per eseguire operazioni pre filtraggio. Nessun parametro. return void
		 *  
		 *  ==>>manageModal(inputAutocomplete): funzione per gestire il modale in caso di ricerca non esaustiva.
		 *  Ha come parametro passato l elemento jquery dell autocomplete. Return void
		 *   
		 *  ==>>minLength: numero minimo di caratteri per iniziare a filtrare le opzioni. deve essere un intero                            
		 *
		*/
		
		
		var _initAutocompleteMultiplo = function (params) {

//start verify required params
if (params.inputId == undefined || params.inputId == "") {
	throw 'Errore su autocomplete: Settare Id input autocomplete';
}
if (params.manageSelect == undefined || params.manageSelect == $.noop) {
	throw 'Errore su autocomplete: Settare gestione selezione di una opzione';
}
if (params.filterFunction == undefined || params.filterFunction == $.noop) {
	throw 'Errore su autocomplete: Settare funzione per filtraggio opzioni';
}
if (params.language == undefined || params.language == "") {
	throw 'Errore su autocomplete: Settare la lingua';
}
if (params.onChange == undefined || params.onChange == $.noop) {
	throw 'Errore su autocomplete: Settare funzione change';
}
//end verify required params

//options
var srcResults = params.objectsToBeFiltered;
//language
var language = params.language;

var inputAutocomplete = $("#" + params.inputId),
	btnAutocomplete = inputAutocomplete.next('button'),
	isOpenMenu = false,
	readyToClose = false;

//start DEFAULT UX
//EMULAZIONE BOTTONE FINTA SELECT
btnAutocomplete.on('click', function (event) {
	if (!isOpenMenu) {
		inputAutocomplete.trigger('keydown').focus();
		isOpenMenu = true;
	}
	else {
		inputAutocomplete.autocomplete("close");
		NmaxRis = 20;
		isOpenMenu = false;
	}
});
//GESTIONE CLASSI  PER DARE IL FOCUS/BLUR ANCHE AL BOTTONE
inputAutocomplete.on("focus", function () {
	$(this).closest(".input-group").addClass("focus");
	btnAutocomplete.addClass("btn-focus");
});

inputAutocomplete.on("blur", function () {
	$(this).closest(".input-group").removeClass("focus");
	btnAutocomplete.removeClass("btn-focus");

});
//end DEFAULT UX

inputAutocomplete.autocomplete({
	minLength: (params.minLength) ? params.minLength : 0, // numero di lettere dopo il quale si apre la tendina adeguare a valore opportuno
	source: function (request, response) {

		params.beforeFilter();

		$.ui.autocomplete.filter = params.filterFunction;

		var results = $.ui.autocomplete.filter(srcResults, request);
		//numero di risultati da caricare
		NmaxRis = typeof (NmaxRis) !== "undefined" ? NmaxRis : 20;
		//corrispondente testo da mostrare con il numero dei risultati
		textNmaxRis = NmaxRis.toString();
		//corrispondente testo iniziale, variabile in base al numero dei risultati
		textIn = (language.indexOf("it-IT") != -1) ? "Primi" : "First";
		//azione sul link nell'elenco
		var actionMostra = "actionMostra" + params.inputId;
		actionLink = (language.indexOf("it-IT") != -1) ? "<a href=\"javascript:;\"  id=\"" + actionMostra + "\" >Mostra di pi&ugrave;</a>" : "<a href=\"javascript:;\" id=\"" + actionMostra+"\" >Show more</a>";
		//se il numero dei risultati totali è inferiore al numero massimo da visualizzare o se si è già superata la soglia dei 40...carico tutti i risultati

		//id wrapper da appendere dinamico

		wrapperUlAutocomplete = 'wrapper-ul-autocomplete-' + params.inputId;
		wrapperUlAutocompleteId = '#wrapper-ul-autocomplete-' + params.inputId;

		if (results.length <= NmaxRis || NmaxRis > 40) {

			textIn = (language.indexOf("it-IT") != -1) ? "Tutti i" : "All";
			actionModale = "actionModale" + params.inputId;
			
			textNmaxRis = "",
				actionLink = (language.indexOf("it-IT") != -1) ? "<a  id=" + actionModale + " href=\"javascript:;\">Non trovi quello che cerchi?</a>" : "<a  id=" + actionModale + " href=\"javascript:;\">Not found what you are looking for?</a>";

		}
		//altrimenti ne carico solo il mnumero massimo consentito
		if (NmaxRis <= 40) {
			response(
				results.slice(0, NmaxRis)
			);
		}
		else {
			response(results);
		}

	},
	create: function (event, ui) {

		$(this).data('ui-autocomplete')._renderItem = function (ul, item) {
			//nel creare gli <li> stilizzo in grassetto le lettere ricercate
			return $("<li>")
				.append(item.text.replace($("#" + params.inputId).val().toUpperCase(), "<strong>" + $("#" + params.inputId).val().toUpperCase() + "</strong>"))
				.attr("role", "option")
				.addClass('ui-menu-item')
				.appendTo(ul);
		}
		var menuUl = $.ui.autocomplete.prototype._renderMenu;

		$(this).data('ui-autocomplete')._renderMenu = function (ul, items) {

			menuUl.apply(this, [ul, items]);
			//html bottom contentente il testo dinamico e il link (mostra o overlayer)
			var htmlToAppend = "<div class=\"menu-bottom-multiplo\">" + "<span class=\"text-search\"></span>" + " " + "<span class=\"input-value\"></span>" + "</span>" + "<span class=\"action-link\"></span></div>";
			//per poter posizionare l'html bottom wrappo l'ul con un contenitore
			if ($(wrapperUlAutocompleteId).length === 0) {
				ul.attr("role", "listbox").wrap("<div class=\"wrapper-ul-autocomplete\" id=" + wrapperUlAutocomplete + ">");
				$(wrapperUlAutocompleteId).append(htmlToAppend);
			}
			//costruisco l'html dinamico
			var contenenti = (language.indexOf("it-IT") != -1) ? "contenenti " : "containing ";
			var risultati = (language.indexOf("it-IT") != -1) ? " risultati " : " results ";
			$(wrapperUlAutocompleteId).find(".input-value").html(contenenti + "<strong>\"" + $("#" + params.inputId).val() + "\"</strong>");
			$(wrapperUlAutocompleteId).find(".text-search").html(textIn + " " + "<strong>" + textNmaxRis + "</strong>" + risultati);
			$(wrapperUlAutocompleteId).find(".action-link").html(actionLink);

			//creazione modale
			if (params.manageModal != undefined && params.manageModal != $.noop) {
				"actionModale" + params.inputId;
				$("#actionModale" + params.inputId).on('click', function () {
					params.manageModal(inputAutocomplete);
				});

			} else {
				$("#actionModale" + params.inputId).on('click', function () {
					$('#modalAutoComplete' + params.inputId).modal('show');
				});

			}

		}
	},
	open: function (event, ui) {

		//inizializzo la modale che eventualmente dovrà aprirsi
		initModali();
		//variabile che gestisce il semaforo per la chiusura del menu
		readyToClose = false;
		isOpenMenu = true;
		//posiziono il testo bottom rispetto alla tendina aperta
		var actionMostra = "actionMostra" + params.inputId;
		var actionModale = "actionModale" + params.inputId;
		$(wrapperUlAutocompleteId).find(".menu-bottom-multiplo").css({
			top: $(wrapperUlAutocompleteId).find("ul").position().top,
			left: $(wrapperUlAutocompleteId).find("ul").position().left,
			position: "relative",
			maxWidth: inputAutocomplete.closest(".autocomplete").innerWidth() + "px"
		})
		$(".ui-menu").css({
			maxWidth: inputAutocomplete.closest(".autocomplete").innerWidth() + "px"
		})

		//se ho aperto la tendina senza digitare alcun carattere non compare la parte di testo "contenenti..."
		$("#" + params.inputId).val() === "" ? $(wrapperUlAutocompleteId).find(".input-value").hide() : $(wrapperUlAutocompleteId).find(".input-value").show()

		//condiziono la chiusura automatica del menu al fatto di non cliccare sul link posizionato in bottom. Se clicco altrove si chiude come di default
		$(document).on("click", function (event) {
			if (!readyToClose && event.target.id !== actionMostra && event.target.id !== actionModale) {
				//se, a menu aperto, clicco altrove che non siano i link in bottom il comportamento è usuale, il menu si chiude e ripristino il numero di risultati da mostrare a 20
				readyToClose = true;
				inputAutocomplete.autocomplete("close"); //chiudo come da comportamento normale
				NmaxRis = 20;
			}
		})
		//mostro il testo bottom solo dopo l'apertura del menu
		$(wrapperUlAutocompleteId).find(".menu-bottom-multiplo").show();

		//azioni al click sul link "mostra"
		$("#" + actionMostra).on("click", function () {
			//incremento il numero di risultati da mostrare di venti unità
			NmaxRis += 20;
			readyToClose = true;
			inputAutocomplete.autocomplete("close"); //forzo la chiusura per  permettere di ricostruire l'elenco dei risultati
			inputAutocomplete.trigger('keydown').focus(); // rinizializza l'autocomplete
			isOpenMenu = true;

		})

	},
	close: function (event, ui) {
		$(wrapperUlAutocompleteId).find(".menu-bottom-multiplo").hide();
		isOpenMenu = false;
	},
	//gestione selezione di una opzione
	//gestione selezione di una opzione
	select: params.manageSelect,
	change: params.onChange
}).data("uiAutocomplete").close = function (e) {

	//chiusura del menu condizonata al fatto che sia acceso il semaforo verde (no click su link bottom)
	if (readyToClose) {
		this.menu.element.is(":visible") && (this.menu.element.hide(), this._trigger("close", e));
	}

	else
		return false;
};
}
	
	
	
	
	_initAutocompleteMultiplo(params1);
	_initAutocompleteMultiplo(params2);
  </script>	