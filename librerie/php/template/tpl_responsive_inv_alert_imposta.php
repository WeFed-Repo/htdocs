<script type="text/javascript" src="/wscmn/fe/js/priv_fes_resp.js"></script>
<h2>Alert</h2>
<ul>
	<li>In questa pagina puoi inserire alert sui fondi.<br>
		Si tratta di alert che ti avvisano quando si verifica una determinata condizione legata a un fondo.</li>
	<li>Riceverai questo alert via XYZ</li>
</ul>

<script type="text/javascript">
	
	// Percorsi di configurazione
	var alertAutocompleteUrl = "/librerie/include/commons/ajax/fes/fdaAutoCom.php",
	alertFundDataUrl = "/librerie/include/commons/ajax/fes_riepilogo_fondo_alert.php",
	alertInsertUrl = "/librerie/include/commons/ajax/fes/alertInsertOrUpdate.php";

	var cfundData;
	
	var cacheAC = {};

	// Parametrizzazione dell'autocomplete
	var alertAutocompleteStyle = 
	function (ul, item) {
	    var resultItem,
	        x = new RegExp('\\b' + $.ui.autocomplete.escapeRegex(this.term), 'ig');
	    	resultItem = item.label.replace(x, function(Match) {
	        return '<strong>' + Match + '</strong>';
	    });
    return $("<li></li>")
        .data("item.autocomplete", item)
        .append("<a class='autocomplete_link'>" + resultItem + "</a>")
        .appendTo(ul);
	}

	// attivazione riepilogo fondo e form con configurazione alert (ho previsto di caricare i dati tramite ISIN)
	var alertFundData = function(isin) {

		$("#alertFondoSelect").hide();
		$("#alertFondoRiepilogo").addClass("loading").show();

		$.ajax({
			url: alertFundDataUrl,
			data: {
				isin: isin
			},
			dataType: "json",
			success: function(data) {
				
				// Oggetto contenente i dati ricevuti per eventuali confronti
				cfundData = data;
				
				// Popola il contenitore coi dati ricevuti
				$.each($("#alertFondoRiepilogo span.output[data-fieldname]"),function(i,v) {
					if ($(v).attr("data-fieldname") == "ultimoprezzo") {
						$(v).html(data["ultimoprezzo"] + " " + data["valuta"]);
					}
					else
					{
						$(v).html(data[$(v).attr("data-fieldname")]);
					}
				});
				// Inserisce l'isin corrente
				$("#alertInsert input[name=isin]").val(data["isin"]);
				$("#alertInsert input[name=valuta]").val(data["valuta"]);
				$("#alertFondoRiepilogo").removeClass("loading")
				$("#alertInsert").show();

			},
			error: function() {
				alert("Errore nel reperimento dei dati. Riprovare piu' tardi.");
				changeFundData();
			}

		});

	}

	// Cambia il fondo (e reinizializza tutto)
	var changeFundData = function() {
		resetHasErrors("#alertFondoSelect");
		$("#alertFondoSelect").show();
		$("#alertFondoRiepilogo").hide();
		$("#alertAutocomplete").val("");
		$("#alertInsert").hide();

	}

	// Riformatta i numeri con la virgola
	var toStrNum = function(el) {
		return el.replace(/\,/,".");
	}


	// Inizializzazioni
	$(function(){

		// Autocomplete
        $("#alertAutocomplete").autoComplete([], {
            "minLength": 3,
            "filter": function(request, response) {
                var term = request.term;
                if (term in cacheAC) {
                    response(cacheAC[term]);
                    return;
                }
                $.getJSON(alertAutocompleteUrl, request, function(data) {
                    data = $.map(data.data, function(item) {
                        return { "label": "<strong>" + item.nome + "</strong><br>ISIN: "+item.isin, "value": item.isin };
                    });
                    cacheAC[term] = data;
                    response(data);
                });
            },
            "selectable": false,
            "select": function(e,ui) {
            	var isin = ui.item.value;
            	alertFundData(isin);            	
            },
            "clearable": true,
            "renderItem": alertAutocompleteStyle
        });

        // Blocca le azioni di default sui form
        $("#alertSearchForm, #alertInsertForm").on("submit", function(e){e.preventDefault();})

        // Pulsante cerca interattivo
        $("#alertFundCerca").click(function(){

        	// controlla se esiste un solo fondo per la dicitura o l'isin selezionato (controlla nome ecc... passa l'ISIN tramite svalue)
        	resetHasErrors("#alertFondoSelect");
        	$("#alertFondoSelect").addClass("loading");
        	$.ajax({
        		url: alertAutocompleteUrl,
        		data: {
        			"svalue": $("#alertAutocomplete").val()
        		},
        		dataType: "json",
        		success : function(data) {
        			$("#alertFondoSelect").removeClass("loading");
        			var errorMsg = "";
        			if (data.data.length>0) {

        				if (data.data.length == 1) {
        					alertFundData(data.data[0].isin)
        				}
        				else
        				{
        					errorMsg = "La ricerca ha restituito troppi risultati";
        				}
        			}
        			else
        			{
						errorMsg = "Non esiste alcun fondo corrispondente";
        			}
        			if (errorMsg.length>0) {
        				setHasError("#alertAutocomplete",errorMsg);
        			}

        		},
        		error: function(){
        			alert("Errore nel reperimento dei dati. Riprovare piu' tardi.");
					changeFundData();

        		}
        	});


        });

        // Cambia fondo
        $("#alertFondoChange").click(changeFundData);


        // Inizializzazione del datepicker
		 $("#alertScadenza").mask("99/99/9999");
		 $("#alertScadenza").datepicker({
		        minDate: 1,
		        maxDate: 30,
		    	showOtherMonths: true,
		        showOn: "button",
		        prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
		        nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
		        buttonImage: "/img/ret/pixel_trasp.gif",
		        buttonImageOnly: true,
		        beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
		        onClose: function() {
		            $('#datePickerWrapper').modal('hide');
		        }
		    })
		    appendDatePickerIcon('alertScadenza');
		    // Data di default (domani)
		    var dDate = new Date();
		    $("#alertScadenza").datepicker("setDate",dDate.addDays(1));


		   // Check e posting Alert
		   $("#alertInsertBtn").click(function(){

		   		

		   		// Resetta gli errori sul form

		   		var aif = $("#alertInsertForm");
		   		resetHasErrors(aif);
		   		var insertErrors = [];
		   		
		   		// Controlla gli errori lato FRONT-END (e' riportato un esempio, da integrare con i controlli necessari)
		   		// Prepara i controlli per il form
		   		var objForm = {
		   			isin: cfundData.isin,
					valuta: cfundData.valuta,
					checkSuperamentoSogliaFondi:  aif.find("input[name=checkSuperamentoSogliaFondi]").is(":checked").toString(),
					superamentoSogliaFondiMinValue:  aif.find("input[name=superamentoSogliaFondiMinValue]").val(),
					superamentoSogliaFondiMaxValue:  aif.find("input[name=superamentoSogliaFondiMaxValue]").val(),
					checkSuperamentoSogliaFondiGiornaliera:  aif.find("input[name=checkSuperamentoSogliaFondiGiornaliera]").is(":checked").toString(),
					superamentoSogliaFondiAnnualeMinValue:  aif.find("input[name=superamentoSogliaFondiAnnualeMinValue]").val(),
					superamentoSogliaFondiAnnualeMaxValue:  aif.find("input[name=superamentoSogliaFondiAnnualeMaxValue]").val(),
					checkSuperamentoSogliaFondiAnnuale:  aif.find("input[name=checkSuperamentoSogliaFondiAnnuale]").is(":checked").toString(),
					superamentoSogliaFondiAnnualeMinValue:  aif.find("input[name=superamentoSogliaFondiAnnualeMinValue]").val(),
					superamentoSogliaFondiAnnualeMaxValue:  aif.find("input[name=superamentoSogliaFondiAnnualeMaxValue]").val()
		   		}
		   		
		   		// cfundData e' un oggetto preinizializzato contenente i dati del fondo riportati a video
		   		if (objForm.checkSuperamentoSogliaFondi != "true" && objForm.checkSuperamentoSogliaFondiGiornaliera != "true" && objForm.checkSuperamentoSogliaFondiAnnuale != "true") {
		   			insertErrors.push({field:"input[name=checkSuperamentoSogliaFondi]",text: "Occorre inserire almeno un valore"});
		   			
		   		}
		   		else
		   		{
		   			// Esempio di controllo (da integrare con tutti gli altri campi)
		   			if(objForm.checkSuperamentoSogliaFondi == "true") {
		   				if (objForm.superamentoSogliaFondiMinValue == "" && objForm.superamentoSogliaFondiMaxValue == "" ) {
		   					insertErrors.push({field:"input[name=superamentoSogliaFondiMinValue]",text: "Occorre inserire almeno uno dei valori"});
		   					insertErrors.push({field:"input[name=superamentoSogliaFondiMaxValue]",text: "Occorre inserire almeno uno dei valori"});
		   				}
		   				else
		   				{
		   					// Controlla che il dato inserito sia un numero 
		   					if (objForm.superamentoSogliaFondiMinValue != "") {
			   					if (isNaN(toStrNum(objForm.superamentoSogliaFondiMinValue))) {
			   						insertErrors.push({field:"input[name=superamentoSogliaFondiMinValue]",text: "Occorre inserire un valore numerico"});
			   					}
			   					else
			   					{
			   						if(parseFloat(toStrNum(objForm.superamentoSogliaFondiMinValue)) >= parseFloat(toStrNum(cfundData.ultimoprezzo))) {
			   							insertErrors.push({field:"input[name=superamentoSogliaFondiMinValue]",text: "Il valore inserito &egrave; maggiore del prezzo attuale"});
			   						}
			   					}
		   					}

		   					if (objForm.superamentoSogliaFondiMaxValue != "") {
			   					if (isNaN(toStrNum(objForm.superamentoSogliaFondiMaxValue))) {
			   						insertErrors.push({field:"input[name=superamentoSogliaFondiMaxValue]",text: "Occorre inserire un valore numerico"});
			   					}
			   					else
			   					{
			   						if(parseFloat(toStrNum(objForm.superamentoSogliaFondiMaxValue)) <= parseFloat(toStrNum(cfundData.ultimoprezzo))) {
			   							insertErrors.push({field:"input[name=superamentoSogliaFondiMaxValue]",text: "Il valore inserito &egrave; inferiore al prezzo attuale"});
			   						}
			   					}
		   					}
		   				}
		   			}


		   		}
		   		// Mostra gli errori
		   		if (insertErrors.length>0) 
		   			{
		   				setHasErrors(insertErrors,aif);
		   			}
		   		// oppure passa al BE
		   		else 
			   		{
			   			$("#alertInsert").addClass("loading");
							// Effettua la chiamata
					   		$.ajax({
					   			url: alertInsertUrl,
					   			dataType: "json",
					   			type: "POST",
					   			data: objForm,

					   			success: function(data) {
					   				
					   				// Riporta errori lato backend :e' possibile utilizzare lo stesso meccanismo del front-end tramite identificazione dei campi, ad esempio)
					   				// ... oppure proporre un errore più generico (tramite inserimento di un nuovo BOX in pagina da mostrare)
					   				// Ricordarsi, nel caso di errore lao BE di eseguire, dopo aver raccolto gli errori, la funzione -> $("#alertInsert").removeClass("loading");

					   				// Se tutto ok (caso specifico), ridirige alla pagina di riepilogo dove l'alert e' ora presente (spalmato sulle varie righe) e viene mostrato anche un box di conferma inserimento
					   				if (data.esito == "ok") {
					   					location.href = "/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_alert.php&responsive=y&liv0=4&liv1=2&liv2=3&liv3=4&esito=ok";
					   				}

					   			},
					   			error: function () {
					   				
					   			}
					   		});
			   		}

		   });

			// Attivazione blocchi condizionali
			$("#alertInsertForm input[data-toggle]").click(function(){
				$($(this).attr("data-toggle")).toggle($(this).is(":checked"));
				$($(this).attr("data-toggle")).find("input").val("");
			});

	});

</script>


<section>
<h4>Selezione fondo</h4>

<form class="formGenerico borderFormRounded pad_bottom_0" role="form" id="alertSearchForm">

	<!-- Selettore -->
	<div id="alertFondoSelect">
		<div class="form-group">
			<div class="row">
			 	<div class="col-xs-12">
					<label class="control-label-output">Seleziona ISIN o nome fondo </label>
	                <div class="row">
	                	<div class="col-sm-8 col-xs-12">
							<input type="text" id="alertAutocomplete" class="form-control">
	                	</div>
	                	<div class="col-sm-4 col-xs-12">
	                		<a type="button" class="btn btn-primary" href="javascript:;" id ="alertFundCerca">cerca</a>
	                	</div>
	                </div>
				</div>
		    </div>
		</div>


	</div>
	
	<!-- Riepilogo del fondo -->
	<div id="alertFondoRiepilogo" style="display:none">
		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-8">
					<label class="control-label-output">Nome fondo</label>
					<span class="output" data-fieldname="nomefondo"></span>
				</div>
				<div class="col-sm-4">
					<label class="control-label-output">Ultimo prezzo</label>
					<span class="output"  data-fieldname="ultimoprezzo"></span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-4">
					<label class="control-label-output">Data</label>
					<span class="output"  data-fieldname="data"></span>
				</div>
			 	<div class="col-sm-4">
					<label class="control-label-output">Var % giorno precedente</label>
					<span class="output"  data-fieldname="variazionegiornoprec"></span>
				</div>
				<div class="col-sm-4">
					<label class="control-label-output">Var% YTD</label>
					<span class="output"  data-fieldname="variazioneanno"></span>
				</div>
			</div>
		</div>
		<div class="form-group">
			 <div class="row">
			 	<div class="col-xs-12">
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary" href="javascript:;" id="alertFondoChange">cambia fondo</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- fIne riepilogo -->

</form>

</section>




<section id ="alertInsert" style="display:none">

<h4>Configura Alert</h4>


<form class="formGenerico borderFormRounded "  role="form" id="alertInsertForm">
	<!-- campi hidden (se servono per il form)-->
	<input type="hidden" name="isin" val="">
	<input type="hidden" name="valuta" val="">
    <!-- Fine campi hidden -->
    <div class="form-group">
	    <div class="row">
	        <div class="col-sm-4 col-xs-12">
	            <label class="control-label" for="alertScadenza">Scadenza alert (max 30 giorni)</label>
	            <div class="form-inline">
	                <div class="input-group">
	                    <input type="text" id="alertScadenza"  readonly="readonly" placeholder="gg/mm/aaaa" value="" class="form-control clear-x"><a class="input-group-addon date btn-icon" href="#!"><i class="icon icon-calendar_filled"></i></a>
                    </div>
	            </div>
	        </div>
		</div>
	</div>
	
	
	    <div class="row">
	        <div class="col-sm-6">
				<div class="checkbox inline">
	        		<label class="textWrapper marginTopMicro"><input type="checkbox" value="true" name="checkSuperamentoSogliaFondi" data-toggle="#soglieSuperamentoSogliaFondi"><span class="text"><strong>Ultimo prezzo</strong></span></label>
				</div>
            </div>
		</div>
		<div class="pad_left_double pad_bottom_20" style="display:none" id="soglieSuperamentoSogliaFondi">
		    <div class="row">
		        <div class="col-sm-6">
		            <label class="control-label">Soglia minima &le;</label>
		            <input type="text" class="form-control clear-x" name="superamentoSogliaFondiMinValue">
	            </div>
	             <div class="col-sm-6">
		            <label class="control-label">Soglia massima &ge;</label>
		            <input type="text" class="form-control clear-x" name="superamentoSogliaFondiMaxValue">
	            </div>
			</div>
		</div>

	    <div class="row">
	        <div class="col-sm-6">
				<div class="checkbox inline">
	        		<label class="textWrapper marginTopMicro"><input type="checkbox" value="true" name="checkSuperamentoSogliaFondiGiornaliera"  data-toggle="#soglieSuperamentoSogliaFondiGiornaliera"><span class="text"><strong>Var % ultimo giorno</strong></span></label>
				</div>
            </div>
		</div>
		<div class="pad_left_double pad_bottom_20" style="display:none" id="soglieSuperamentoSogliaFondiGiornaliera">
		    <div class="row">
		        
		        <div class="col-sm-6">
		            <label class="control-label">Soglia minima &le;</label>
		            <input type="text" class="form-control clear-x" name="superamentoSogliaFondiAnnualeMinValue">
	            </div>
	             <div class="col-sm-6">
		            <label class="control-label">Soglia massima &ge;</label>
		            <input type="text" class="form-control clear-x" name="superamentoSogliaFondiAnnualeMaxValue">
	            </div>
			
			</div>
		</div>
	
	
	    <div class="row">
	        <div class="col-sm-6">
				<div class="checkbox inline">
	        		<label class="textWrapper marginTopMicro"><input type="checkbox" value="true" name="checkSuperamentoSogliaFondiAnnuale" data-toggle="#soglieSuperamentoSogliaFondiAnnuale"><span class="text"><strong>Var % YTD</strong></span></label>
				</div>
            </div>
		</div>
		<div class="pad_left_double pad_bottom_20"  style="display:none" id="soglieSuperamentoSogliaFondiAnnuale">
		    <div class="row">
		        <div class="col-sm-6">
		            <label class="control-label">Soglia minima &le;</label>
		            <input type="text" class="form-control clear-x" name="superamentoSogliaFondiAnnualeMinValue">
	            </div>
	             <div class="col-sm-6">
		            <label class="control-label">Soglia massima &ge;</label>
		            <input type="text" class="form-control clear-x" name="superamentoSogliaFondiAnnualeMaxValue">
	            </div>
			</div>
		</div>


</form>
<!-- Pulsantiera per aggiunte -->
<div class="form-group">
	 <div class="row">
	 	<div class="col-xs-12">
			<div class="btn-align-left">
				<a type="button" class="btn btn-default" href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_alert.php&responsive=y&liv0=4&liv1=2&liv2=3&liv3=4">annulla</a>
			</div>
	 		<div class="btn-align-right">
				<a type="button" class="btn btn-primary" id="alertInsertBtn">aggiungi alert</a>
			</div>
			<br class="clear">
		</div>
	</div>
</div> 
<!-- Fine pulsantiera -->
</section>
