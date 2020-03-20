// Raccolta dati fondi per deposito
var swLoadDatiDeposito = function () {
	$("#tooltipNoteComm").hide();
	swFundData.hide();
	swFund.hide();
	swFundOutput.hide();
	swFundDataSelector.hide();
	swFundOperation.hide();
	swFundToWrap.hide();
	$("#form01").addClass("loading");
	// Reset degli elementi in pagina
	$.ajax({
		url: swFondiUrl,
		data: {
			deposito: swDeposito.val(),
			type: "SWITCH"
		},
		dataType: "json",
		success: function(data){

			if(data.esito =="OK" && data.messaggioesito != "noFund")
			{
				isalFund = data.fondi;
				// Svuota e popola la select coi dati ricevuti
				swFund.find("option").remove();
				swFundCount = 0;
				$.each(isalFund,function(i,v){
					var opt = $("<option>").attr("value",i).html(v.nomefondo);
					if (i==0) opt.attr("selected",true);
					swFundOutput.html(v.nomefondo); 
					swFund.append(opt);
					swFundCount++;
				});
				
				if (swFundCount>1)
				{
					swFund.show();
					swFundOutput.hide();
				}
				else
				{
					swFund.hide();
					swFundOutput.show();
				}
				
				swFund.trigger("change");
				// Sblocca l'interfaccia 
				$("#form01").removeClass("loading");
			}
			else
			{
				// Messaggio errore
				$("#form01").removeClass("loading");
				if(typeof errorOl == "undefined"){
					// Crea l'overlay 
					errorOl = $("<div>").addClass("layeralert2").attr("id","errorOverlay").append(
						$("<div>").addClass("head handle").append(
							$("<img>").attr("src","/img/ret/layeralert_x.gif").click(function(){closePopOverLayer("errorOverlay")})
							),
						$("<div>").addClass("body"),
						$("<div>").addClass("foot")
						);
					$("body").prepend(errorOl.hide());
					}
				var errorMessage = [
					$("<h3>").addClass("verde").html("Attenzione!"),
					$("<p>").html("Non sono presenti fondi/sicav associati al deposito selezionato.<br>Selezionare un altro deposito.")
				]
				errorOl.find(".body").empty().append(errorMessage);
				openPopOverLayer("errorOverlay");

			}	
		}
	});

}


// Dettagli del fondo 
var swFundDetail = function() {
	swFundToWrap.hide();
	if($(this).val()=="") {

		swDeposito.trigger("change");
	}
	else
	{	

	// Rimostra il selettore e resetta tutto
	swQuotes.val(0).trigger("change");
	$("#switchQuoteSelInput").show();
	$("#switchQuoteSelOutput").hide();
	swSearchResults.hide();
	// swSearchButtonWrap.show();
	swSwitchRecap.hide();

	fundData = isalFund[$(this).val()];
	// Compila i campi nascosti per la spedizione
	swForm[0]["codice"].value = fundData.codicefondo;
	swForm[0]["divisa"].value = fundData.tipodivisa;
	swForm[0]["codAzione"].value = fundData.codazionefondo;
	swForm[0]["codSocieta"].value = fundData.codicesocietagestione;
	// Codice del messaggio 
	setTTCommMsg(fundData);
	
	swDivisa.html("EUR");

		
	if (typeof swFundDescOutput == "undefined") {
			swFundDescOutput = function(label,valore,defclass) {

				defclass =  (defclass) ? defclass : "col-sm-6 col-xs-12";
				var field = $("<div>").addClass(defclass);
				field.append(
						$("<label>").addClass("nomefield").html(label),
						$("<span>").addClass("output").html(valore)
					);
				return field;
			}
	}

	swFundDataFields = swFundData.find("span.output");
	// Nav
	swFundDataFields.eq(0).html(formattaNumeriOutput(fundData.nav) + " " + fundData.tipodivisa);
	swFundData.find("span.datanav").html(dateFormat(fundData.datanav,"dd/mm/yyyy"));

	// Strumento
	swFundDataFields.eq(1).html((fundData.strumento=="F")? "Fondo" : "Sicav");
	
	// Link scheda fondo
	var schedaFondoLink = cgi_script + "/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch&codicesocieta="+ fundData.codicesocietagestione +"&codicecomparto="+ fundData.codicefondo +"&fondosicav="+ fundData.strumento +"&divisa=" + fundData.tipodivisa + "&codicefida="+ fundData.codicefida +"&fondo=true&codiceIsin=" + fundData.isin;
	swFundDataFields.eq(2).empty().append($("<a>").html("Mostra scheda ").addClass("btn btn-primary").attr({"href":schedaFondoLink,"target":"_self"}));
	

	if (fundData.dettagli.length > 1)
	{
		// Multiselettore
		swMultiSel = $("<div>").addClass("borderFormRounded");
		
		$.each(fundData.dettagli,function(i,v){

			var selectorWrap = $("<div>").addClass("borderFormRounded margBottomSmall");
			// Selettore con titolatura
			var swRadioLabel = (v.tipo == "PAC") ? "quote provenienti da " + v.tipo + " n. " + v.contratto : v.tipo;
			var swRadio = $("<div>").addClass("col-xs-12 paddBottomSmall evident").append($("<label>").addClass("nomefield").append(
					$("<input>").attr({"type":"radio","value":i,"name":"radioFundSelector"}).click(function(){
						// Rimuove il selettore
						swFundDataSelector.hide();
						var index = $(this).val();
						fundData.selectedDetail = $(this).val();
						swFundRecap({
							"tipo" : fundData.dettagli[index].tipo,
							"contratto": fundData.dettagli[index].contratto,
							"importorata": fundData.dettagli[index].importorata + " " + fundData.tipodivisa,
							"rateresidue": fundData.dettagli[index].rateresidue,
							"quote":fundData.dettagli[index].quote,
							"controvalore":fundData.dettagli[index].controvalore + " " + fundData.tipodivisa
						});
					}),
					swRadioLabel
				));

			selectorWrap.append($("<div>").addClass("row").append(
				swRadio,
				swFundDescOutput("N. quote/azioni nel portafoglio selezionato",v.quote),
				swFundDescOutput("Controvalore",v.controvalore + " " +  fundData.tipodivisa)
			));

			// SOLO PAC
			selectorWrap.append($("<div>").addClass("row").append(
				swFundDescOutput("Importo rata",v.importorata + " " +  fundData.tipodivisa),
				swFundDescOutput("Rate residue",v.rateresidue)
			));

			swMultiSel.append(selectorWrap);

		})
		swSwitchRecap.hide();
		swFundOperation.hide();
		swSearchButton.addClass("btn-disabled");

		swFundDataSelector.empty().show().append($("<div>").addClass("row").append($("<div>").addClass("col-xs-12").append($("<label>").addClass("nomefield").html("Seleziona un elemento"),swMultiSel)));
	}
	else
	{
		fundData.selectedDetail = 0;
		swFundRecap({
			"tipo" : fundData.dettagli[0].tipo,
			"contratto": fundData.dettagli[0].contratto,
			"importorata": fundData.dettagli[0].importorata + " " + fundData.tipodivisa,
			"rateresidue": fundData.dettagli[0].rateresidue,
			"quote":fundData.dettagli[0].quote,
			"controvalore":fundData.dettagli[0].controvalore + " " + fundData.tipodivisa
		})

	}
	swFundData.show();
	}
}


var swFundRecap = function(data){

	// Aggiorna i dati del contratto
	swForm[0]["tipocontratto"].value = data.tipo;
	
	// Popola il recap con i dati e lo mostra con la parte operativa
	var outputFields = swFundOperation.find("span.output");
	swFundDataSelector.hide();
	
	if (data.tipo == "PAC"){
		outputFields.eq(0).html(data.contratto);
		outputFields.eq(1).html(data.importorata);
		outputFields.eq(2).html(data.rateresidue);
		swFundOperation.find(".pac").show();
	}
	else
	{
		swFundOperation.find(".pac").hide();
	}
	var visquote = data.quote.toString().replace(".",",");
	outputFields.eq(3).html(visquote);
	// Valuta nel controvalore
	if (fundData.tipodivisa != "EUR") data.controvalore =data.controvalore + "<br><span class='note'>corrispondenti a <strong>"+ (fundData.dettagli[0].controvaloredivisa) + " EUR</strong><br> al cambio del "+ fundData.datacambio + "</span>";

	outputFields.eq(4).html(data.controvalore);

	// Assegna il corretto numero di decimali a seconda di quelli presenti nelle quote
	var quotedecimali = 3;
	/*
	if (visquote.split(",")[1]) quotedecimali = visquote.split(",")[1].length;
	*/
	swQuoteDec.attr("maxlength",quotedecimali);


	// Sblocca il pulsante 
	swSearchButton.removeClass("btn-disabled");
	swFundOperation.show();

}

var swQuotesChange = function(){

	if(typeof fundData != "undefined")
	{
		fundData.valQuotexImporto =0;
		fundData.valImportoxQuote =0;
	}

	//	Nasconde tutti
	$(".swQuotesSel").hide();

	// Resetta tutto
	$("#switchQuoteSelInput input[type=text]").val("");
	$("#switchQuoteSelInput input[type=radio]").attr("checked",false);
	$("#switchQuoteImporto, #switchImportoQuote").parents(".output").hide();

	switch($(this).val()) {
    case "1":
    		// CASO PAC
      	 	if(swForm[0]["tipocontratto"].value == "PAC") {
	       	 	// CASO PAC
				$("#switchQuotes1").show();
			}
			swSearchButtonWrap.show();
        break;
    case "2":
    	$("#switchQuotes2").show();
    	$("#switchQuotes2 .output").hide();
    	swSearchButtonWrap.show();

      	break;

    case "3":
    	$("#switchQuotes3").show();
		$("#switchQuotes3 .output").hide();
		swSearchButtonWrap.show();

    	break;

    default:
        	swSearchButtonWrap.hide();
        break;
	}
	


}


// Carica la tabella e attiva la ricerca
var swGetTable = function(){

	// Se il bottone non e' disabilitato
	if(!$(this).hasClass("btn-disabled")){

		// Set controlli prima dello switch


		resetErrors(swForm);

		var errors = [];
		if (swQuotes.val()=="0")
		{
			errors.push({ field: swQuotes, text: "Seleziona quante quote vuoi vendere"});
		}
		else
		{
			// Casistiche con select valorizzata
			switch(swQuotes.val()) {
		    case "1":
		    		if(fundData.dettagli[fundData.selectedDetail].tipo == "PAC") {
			       	 
		    			// Indicazione non fornita
		    			if (swForm.find("[name=ChiusuraPiano]:checked").length<=0) {
		    				errors.push({ field: swForm.find("[name=ChiusuraPiano]").parent(), text: "Per proseguire bisogna selezionare se si vuole anche estinguere il PAC" });
		    			}
		    		}
		        break;
		    case "2":
		    	// Importo
		    	$("#switchQuotes2").show();

		    		if((swImporto.val() == "" || swImporto.val() == "0") && (swImportoDec.val() == "" || swImportoDec.val() == "0"))
		    		{
		    			errors.push({ field: swImporto.parents(".swQuotesSel"), text: "Specificare un importo valido"});
		    		}
		    		else
		    		{
		    				
		    			if(parseFloat(swImporto.val()+"."+ swImportoDec.val())>parseFloat(fundData.dettagli[fundData.selectedDetail].controvaloredivisa.replace(".","").replace(",",".")))
		    			errors.push({ field: swImporto.parents(".swQuotesSel"), text: "L'importo deve essere pari o minore del controvalore"});
		    		}
	
		      	break;

		    case "3":
		    	// Quote
				$("#switchQuotes3").show();

					if((swQuote.val() == "" || swQuote.val() == "0") && (swQuoteDec.val() == "" || swQuoteDec.val() == "0"))
		    		{
		    			errors.push({ field: swImporto.parent(), text: "Specificare le quote"});
		    		}
		    		else
		    		{
		    				
		    			if(parseFloat(swQuote.val()+"."+ swQuoteDec.val())>parseFloat(fundData.dettagli[fundData.selectedDetail].quote))
		    			errors.push({ field: swQuote.parent(), text: "Le quote devono essere pari o minore a quelle possedute"});
		    		}

		    	break;

		    default:
		        	
		    	/* TODO RESET TUTTI I CAMPI */
		        break;
			}


		}	


		if (errors.length>0){
			setHasErrors(errors, '#form01');
			}
		else
		{

			// Trasforma il selettore quote in un campo di output
			$("#switchQuoteSelInput").hide();
			
			// Output quote
			swQuotesMsg = "";
			switch(swQuotes.val()) {
		    case "1":
		    		swQuotesMsg= swQuotesMsg + "Tutte le quote nel deposito selezionato.";
		    		if ($("#form01 input[name=ChiusuraPiano]:checked") && fundData.dettagli[fundData.selectedDetail].tipo == "PAC")
		    		{

		    			swQuotesMsg = swQuotesMsg + " Chiusura PAC: <strong>" + $("#form01 input[name=ChiusuraPiano]:checked").val().toUpperCase() +"</strong>";
		    		}
		        break;

		    case "2":
		    		var impoVend = parseFloat(swImporto.val() + "." + swImportoDec.val());
			    	swQuotesMsg= swQuotesMsg + formattaNumero(impoVend) + " EUR";
					swQuotesMsg= swQuotesMsg + "<br><span class='note'>corrispondenti a " + swImportoQuote.html().replace(".",",") + " quote<br>" ;
					// swQuotesMsg= swQuotesMsg + "e <strong>"+ (impoVend * fundData.cambio).toFixed(2) + " " + fundData.tipodivisa + " </strong> al cambio del "+fundData.datacambio+"</span>";
		
		    	break;

		    case "3":

			    	// Importo da quote
			    	swQuotesMsg= swQuotesMsg + (parseFloat(swQuote.val() + "." + swQuoteDec.val())).toFixed(3) + " ";
					swQuotesMsg= swQuotesMsg + "<br><span class='note'>corrispondenti a " + swQuoteImporto.html().replace(".",",") + " EUR <br>";
					// swQuotesMsg= swQuotesMsg + "e " + (fundData.valImportoxQuote*fundData.cambio).toFixed(2) + " "+ fundData.tipodivisa + " al cambio del " + fundData.datacambio;
				
		    	break;


			}
			$("#switchQuoteSelOutput").show();
			swQuoteSelOutput.html(swQuotesMsg);


			// Blocca la console
			$("#form01").addClass("loading");


			// Allestisce l'array di dati da postare
			var dataToPost = {
					codice:swForm[0]["codice"].value,
					valutaRif:swForm[0]["divisa"].value,
					codAzione:swForm[0]["codAzione"].value,
					codSocieta:swForm[0]["codSocieta"].value,
					descrizione: $("#descrizione").val(),
					macroCat: $("#macroCat").val(),
					codRating: $("#codRating").val(),
					fesRendimento: $("#fesRendimento").val(),
					dividendi: $("#dividendi").val()
					}


			$.ajax({
				url: swFondiSwitch,
				dataType: "json",
				type: "POST",
				data: dataToPost,
				success: function(data)
				{
					// Rimuove il bottone di ricerca
					swSearchButtonWrap.hide();

					// Carica i dati dei comparti
					swDataSwitch = data.data;
					fesSearchData = data.statistiche;


					// Appende ai dati il pulsantino per la selezione
					if (typeof swDataSwitch != "undefined") {
						$.each(swDataSwitch,function(i,v){

							// Assembla il nome completo
							var labelPir = "";
							if (v.pir) {
								if (v.pir == "S") labelPir = "<span class=\"labelpir\">PIR</span>"
							}
							v.labelnome = labelPir + "<span>"+v.nome+"</span>";

							v.selezione = "<a href=\"javascript:;\" onclick=\"swGetFundToSwitch("+i+")\">seleziona</a>";
							v.rendimento1a=v.rendimento1a.replace(".",",");
							v.nav=v.nav.replace(".",",");
							v.fesRating = "<div class=\"rating\">";
							// Rating
							for (x=1;x<=5;x++) v.fesRating += "<i class=\"icon icon-corona"+ ((x<=v.rating)? " icon-corona-on" : "") +"\"></i>";
							v.fesRating += "</div>";

						});
					}

					// Crea e riempie la tabella dei risultati nell'apposito wrapper
					var swTable = $("<table>").addClass("sortableTable").attr("id","tabellaswitch");
					swTable.append($("<thead>").append($("<tr>").append(
						$("<th>").attr({"data-field":"labelnome","data-sortable":"true","data-sort-name":"nome"}).addClass("left").html("Nome"),
						$("<th>").attr({"data-field":"fesRating","data-sortable":"true"}).html("Rating").addClass("center"),
						$("<th>").attr({"data-field":"assogestioni","data-sortable":"true"}).html("Cat. Assogestioni").addClass("left"),
						$("<th>").attr({"data-field":"rendimento1a","data-sortable":"true"}).html("Rend. 1A%").addClass("center"),
						$("<th>").attr({"data-field":"nav","data-sortable":"true"}).html("NAV").addClass("center"),
						$("<th>").attr({"data-field":"divisa","data-sortable":"true"}).html("VAL").addClass("left"),
						$("<th>").attr({"data-field":"selezione","data-sortable":"false"}).html("").addClass("left")
					)));

					swSearchTableWrapper.empty().append(swTable);
					styleSortTable();

					swTable.bootstrapTable({
			            data: swDataSwitch,
			            sortable: true,
			            sortOrder: "asc",
			            sortName: "labelnome",
			            pagination : "true",
			            pageSize: 15,
			            pageList: [15, 30, 60, 'tutti'],
						rowStyle: function(row, index) {
							if(index % 2 == 0)
							{
								return {
									classes: 'dispari'
								}
							}
							else {
								return {
									classes: 'pari'
								}
							}
						   }
			        });
			       	
					/*
					var switchTb = new TableOrderer('switch', {
							data: swDataSwitch,
							cellsClasses: ["first", "center", "center", "center"],
							paginate: true
						});
					switchTb.orderTable('fesRating', 'desc');
					*/			
					// var switchTb = swTable;		
					$("#form01").removeClass("loading");
					
					swSearchResults.show();

				}

			});
			swFundToWrap.show();
		}
	}
}


var swGetFundToSwitch = function(index){

	// raccoglie il dato dall'indice
	fundData.switchFund = swDataSwitch[index];

	// Rielabora eventuali dati per proporli
	if (typeof swRevFundToSwitch !="undefined") swRevFundToSwitch(fundData.switchFund);

	// Valorizza i dati
	$.each(swSwitchRecap.find("span.output"),function(i,v){
		v = $(v);
		
		// Inserire valuta
		var htmlcode = fundData.switchFund[v.attr("data-field")];
		if (v.attr("data-field") == "isotmin" || v.attr("data-field") == "isotsuc") htmlcode = htmlcode + " EUR";
			if (v.attr("data-field") == "nav") htmlcode = htmlcode + " " + fundData.tipodivisa;

		v.html(htmlcode);

	});

	// Nasconde la tabella e mostra i dati per lo switch effettivo
	swSearchResults.hide();
	// Sistema il recap prima di mostrarlo
	$("#switchProcediButton").show();
	$("#switchConferma").hide();
	swSwitchRecap.show();

}



// Funzioni di filtro sui vari campi
numberFilter = function(){
	var field = $(this);
	var fVal = field.val();
	var filteredVal = "";

	fundData.valQuotexImporto = fundData.valImportoxQuote = 0;

	$.each(fVal.split(""),function(i,v){
		if (("0123456789").indexOf(v)>=0)
			filteredVal = filteredVal + v;
	});	
	
	field.val(filteredVal);

	var corrispondenza = "";

	// A seconda dell'id del campo fa un refresh o l'altro
	if(field.attr("id").indexOf("Importo")>=0)
	{
		if ((swImporto.val()=="" || swImporto.val()=="0") && (swImportoDec.val()=="" || swImportoDec.val()=="0"))	
		{	
			$("#switchQuotes2 .output").hide();
		}	
		else
		{	

			// Aggiorna quote
			var quote = parseFloat(swImporto.val() +"." + swImportoDec.val());
			fundData.valImportoxQuote = quote;
			
			// Determina quanti decimali
			var numDecimali = 3;
			/*
			if(fundData.codicesocietagestione=="101" ||fundData.codicesocietagestione=="110") numDecimali = 2;
            */
			if (fundData.tipodivisa == "EUR")
			{
				
				fundData.valQuotexImporto = (quote/fundData.nav).toFixed(numDecimali);
				
			}
			else
			{
				
				fundData.valQuotexImporto = (quote /(fundData.nav / fundData.cambio)).toFixed(numDecimali);

			}

			
			swImportoQuote.html(fundData.valQuotexImporto.toString().replace(".",","));

			corrispondenza = "corrispondenti a " +  fundData.valQuotexImporto + " quote";
			fundData.dettagli[fundData.selectedDetail].controvalorevaluta = (parseFloat(fundData.valQuotexImporto * fundData.nav)).toFixed(2);
			if (fundData.tipodivisa != "EUR") corrispondenza = corrispondenza + "<br>e " + fundData.dettagli[fundData.selectedDetail].controvalorevaluta + " " + fundData.tipodivisa +" al cambio del " + fundData.datacambio
			
			
			$("#switchQuotes2 .output").html(corrispondenza).show();

		}
	}
	else
	{
		if ((swQuote.val()=="" || swQuote.val()=="0") && (swQuoteDec.val()=="" || swQuoteDec.val()=="0"))	
		{	
			$("#switchQuotes3 .output").hide();
		}	
		else
		{	
			// Aggiorna quote 
			var importo = parseFloat(swQuote.val()+"." + swQuoteDec.val());
			fundData.valQuotexImporto = importo;

			// Determina quanti decimali
			var numDecimali = 3;
			// if(fundData.codicesocietagestione=="101" ||fundData.codicesocietagestione=="110") numDecimali = 3;

			if (fundData.tipodivisa == "EUR")
			{
				fundData.valImportoxQuote = (importo*fundData.nav).toFixed(numDecimali);
			}
			else
			{
				fundData.valImportoxQuote = (importo*(fundData.nav / fundData.cambio)).toFixed(numDecimali)
			}
			swQuoteImporto.html(fundData.valImportoxQuote.toString().replace(".",","));

			corrispondenza = "corrispondenti a " +  fundData.valImportoxQuote.toString().replace(".",",") + " EUR";
			fundData.dettagli[fundData.selectedDetail].controvalorevaluta = (parseFloat(fundData.valQuotexImporto * fundData.nav)).toFixed(2);
			if (fundData.tipodivisa != "EUR") corrispondenza = corrispondenza + "<br>e "+ fundData.dettagli[fundData.selectedDetail].controvalorevaluta + " " + fundData.tipodivisa +" al cambio del " + fundData.datacambio;

			$("#switchQuotes3 .output").html(corrispondenza).show();
		}
	}
}


// Inizializzazioni campi e parti funzionali
$(function(){

	swDeposito  = $("#switchDeposito").on("change",swLoadDatiDeposito);

	swFund = $("#switchFund").change(swFundDetail);
	swFundOutput = $("#switchFundOutput").hide();

	swFundData = $("#switchFundData");
	swFundDataSelector = $("#switchFundDataSelector");
	swFundOperation = $("#switchFundOperation"); 
	swSearchButtonWrap = $("#switchSearchButton").hide();
	swSearchButton = swSearchButtonWrap.find("a.btn").click(swGetTable);
	swSearchResults = $("#switchSearchResults");
	swSwitchRecap = $("#switchSwitchRecap");
	swQuotes = $("#switchQuotes").on("change",swQuotesChange);
	swSearchTableWrapper = $("#switchSearchTableWrapper");
	swDivisa = $(".viewdivisa")
	swQuoteSelOutput = $("#switchQuoteSelOutput .output")
	swFundToWrap = $("#switchToFundWrapper");

	$("#switchQuoteSelOutput a").click(function(click){

		swFundToWrap.hide();		
		// Rimostra il selettore
		$("#switchQuoteSelInput").show();

		// Nasconde l'output
		$("#switchQuoteSelOutput").hide();

		// Nasconde la tabella
		swSearchResults.hide();
		swSwitchRecap.hide();

		// Mostra il pulsante 
		swSearchButtonWrap.show();

	});


	$("#switchChangeFund").click(function(){
		// Nasconde la tabella
		swSearchResults.show();
		swSwitchRecap.hide();
	});



	// Attiva i meccanismi di ricalcolo
	swImporto = $("#switchImporto").on("keyup",numberFilter);
	swImportoDec= $("#switchImportoDec").on("keyup",numberFilter);
	swImportoQuote = $("#switchImportoQuote");

	swQuote = $("#switchQuote").on("keyup",numberFilter);
	swQuoteDec = $("#switchQuoteDec").on("keyup",numberFilter);
	swQuoteImporto = $("#switchQuoteImporto");


	// Campi del form nascosti per la spedizione
	swForm = $("#form01");	
	if (swFund.val() != "") {
		swFund.trigger("change");
	}
	else
	{
		swLoadDatiDeposito();
	}	


	/* FUNZIONI EREDITATE DALLA RICERCA */
	
	// Autocomplete googlestyle
	// Ricerca nome o ISIN
	$.fn.magicSearch = function(callBack)
	{
		var msfield = $(this);
		msfield.wrap($("<div>").addClass("magicSearch"));
		// Appende il pulsante per la ricerca, di fianco al campo stesso
		var msButton = $("<a>").addClass("msButton icon icon-r-dettaglio").attr({"href":"javascript:;","title":"ricerca"});
		msButton.click(function()
			{
				// Se deve fare il reset, lo fa, altrimenti parte con la ricerca.
				if($(this).hasClass("reset"))
				{
					$(this).removeClass("reset icon-delete_table");
					$(this).addClass("icon-r-dettaglio");
					msfield.val("");
					if(callBack) callBack();
				}
				else
				{
					msOptList.hide();
					if(callBack) callBack();
					$(this).removeClass("icon-r-dettaglio");
					$(this).addClass("reset icon-delete_table");
				}
			}
		)
		
		var msOptList = $("<ul>").addClass("msList").hide();
		msfield.parent().append(msButton,msOptList);	
		msfield.on("keyup",function(e){
			msButton.removeClass("reset");
			e.preventDefault();
			if (msfield.val().length >= 2)
			{
				if(e.keyCode == 13) {
					msButton.click();
				}
				else
				{
					//Svuota l'elemento
					msOptList.empty();
					if(typeof swDataSwitch !="undefined")
					{	
						$.each(swDataSwitch,function (i,v)
						{
							// Se il criterio di ricerca corrisponde, riduce o allunga la lista
							if(v.nome.toLowerCase().indexOf(msfield.val().toLowerCase()) >=0 ){
								var elem = $("<li>").append("<strong>"+ v.nome + "</strong><br>ISIN:" + v.isin).attr("href","javascript:;");
								elem.click(function() {
									var mSB = $(this).parents(".magicSearch");
									mSB.find("input").val(v.nome);
									mSB.find("ul").hide();
									$(mSB.find(".msbutton")).trigger("click");
									}
								);
								msOptList.append(elem);
							}

						});
					}
					msOptList.show();
				}
			}
			else
			{
				msOptList.hide();
			}
		}); 
		
		msfield.on("blur",function(){setTimeout(function(){msOptList.hide()},300)});
	
	}
	$("#descrizione").magicSearch(swGetTable);


	// Bottoni 
	$.each($(".btnMultiSel"), function(i,v)
	{
		var fDiv = $(v);
		var fesInitStatusText = (fDiv.parents("#fesSearchLeftForm")[0]) ? fDiv.parent().find("label.nomefield").html() : "Seleziona...";
		fDiv.append($("<span>").html(fesInitStatusText));
		var fDivReset = $("<a>").addClass("icon icon-close_inverted_fill reset").attr({"href":"javascript:;","title":"Resetta criterio di ricerca"}).hide();
		fDivReset.click(function()
			{
				fDiv = $(this).parent(".btnMultiSel");
				fDiv.find("input").val("");
				fDiv.find("span").html(fesInitStatusText);
				fDiv.find("a").hide();
				swGetTable();
			}
		)
		if (fDiv.parents("#fesSearchLeftForm")[0])
			{
				fDiv.prepend(fDivReset)
			}
		else
			{
				fDiv.append(fDivReset)
			}
		fDiv.find("span").click(function()
			{
				// Apre il pannello di selezione, raccogliendo i dati
				fesSelect($(this).parent(".btnMultiSel"));
			}
		);
		// Se il bottone ha un valore nel "value", lo precompila ed inizializza
		if (fDiv.find("input").val()!="")
		{
			var vArr = fDiv.find("input").val().split(",");
			var vtw = (vArr.length > 1) ? vArr.length + " elementi selezionati" : fesConf[fDiv.find("input").attr("name")][fDiv.find("input").val()].nome;
			fDiv.find("span").html(vtw);
			// Mostra il reset
			fDivReset.show();
		}
		
	});

	

	// Overlay per il selettore (modale)
	fesSelConfirm = $("<a>").addClass("btn btn-primary").attr("href","javascript:;");
	fesSelConfirm.click(function(){
		if (!(fesCurrentField == "fesRendimento"))
			{
				// Aggiorna lo stato del campo coi dati selezionati
				var fValueArr = new Array();
				$.each(fesSelContForm.find("input[name=fesSelected]:checked"), function(i,v)
					{
						fValueArr.push($(v).val());
					}
				);
				fesCurrentButton.find("input[type=hidden]").val(fValueArr.join(","));
				var fesSpanText = "";
					if (fValueArr.length>0){
							if (fValueArr.length>1) 
							{ 	
								fesSpanText = fValueArr.length + " elementi selezionati" 
							}
							else
							{
								fesSpanText = fesConf[fesCurrentButton.find("input[type=hidden]").attr("name")][fValueArr[0]].nome;	
							} 
						}
					else
					{
						fesSpanText = "Seleziona..."
					}
				fesCurrentButton.find(".reset").show();
				fesCurrentButton.find("span").html(fesSpanText);
				// Mostra l'etichetta top se in spalla sinistra
				if(fesCurrentButton.parent(".fesAdvFiltro").length) fesCurrentButton.parent(".fesAdvFiltro").addClass("active");
			}
		else
			{
				if (fesSliderSelect.find("option:selected").val() != "")
				{
					// Aggiorna lo stato del campo coi dati selezionati
					fesCurrentButton.find("input[type=hidden]").val(fesSliderSelect.find("option:selected").val() + "|" + fesSliderDal.val() + "|" + fesSliderAl.val());
					fesCurrentButton.find("span").html(fesConf[fesCurrentField][fesSliderSelect.find("option:selected").val()].periodo + "<br><span>("+  fesSliderDal.val() + "% - "+ fesSliderAl.val() +"%)</span>");
					fesCurrentButton.parent(".fesAdvFiltro").addClass("active");
					fesCurrentButton.find(".reset").show();
				}
			}
		fesSelOl.modal("hide");	
		swGetTable();
	});
	fesSelCont = $("<div>").addClass("fesSelCont");
	fesSelBlock = $("<div>").addClass("btn-align-center").append(fesSelConfirm);

	fesSelOl = getModal({
        id:"fesSelector",
        titolo:"",
        body: [fesSelCont, fesSelBlock]
        });
	/* FINE FUNZIONI EREDITATE DALLA RICERCA */
	fesSelTitle = fesSelOl.find("h2.modal-title");

});