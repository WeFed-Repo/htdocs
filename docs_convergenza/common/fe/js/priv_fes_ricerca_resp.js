is4s = (typeof is4s == "undefined") ? false : is4s;

var fesSearchDataUrl = "", fesConfUrl = "", fesTableCount = 0;

if (is4s && location.href.indexOf("bpmbanking.it")) {
	bpmDispatcher = cgi_script4s + "&codiceinterno=00010510800"; 
	/*  cgi_script = "https://wetoolscoll.bpmgrp.global:6032/wetools"; */
}

// Variabili di configurazione globali
if (!is4s)
{
	fesSearchDataUrl = (!isLib) ? wrp_script_direct + "/investimenti/FesTabellaJson.action?cf=" + Math.random()   : "/include/ajax/fes/fes_tabella.php";
//	fesConfUrl = (!isLib) ? cgi_script + "/FMP/compareFunds.do"  : "/librerie/include/commons/ajax/fes_confronta_resp.php";	//modifica 1 : TODO OBSKEY
	fesConfUrl = (!isLib) ? wrp_script_direct + "/investimenti/ConfrontaFondi.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita&cf=" + Math.random()  : "/include/ajax/fes_confronta_resp.php";
}
else
{
	fesSearchDataUrl = (!isLib) ? bpmDispatcher : "/include/ajax/fes/fes_tabella.php";
	fesConfUrl = (!isLib) ? bpmDispatcher + "compareFunds4s"  : "/librerie/include/commons/ajax/fes_confronta_resp.php";
}

// Puntamento a scheda fondo
//var fesSchedaFondoUrl = (!isLib) ? "##########LINK#############" : "/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_scheda_fondo.php&responsive=y&liv0=4&liv1=2&liv2=6&liv3=";
var fesSchedaFondoUrl = (!isLib) ? wrp_script_direct + "/wbOnetoone/2l/action/investimenti/SchedaFondo.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita&cf=" + Math.random()  : "/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_scheda_fondo.php&responsive=y&liv0=4&liv1=2&liv2=6&liv3=";

// Oggetto contenente i dati per il confronto
fesConfSelected = new Array();

// Massimo numero di fondi confrontabili
var fesConfMax = 2;
// Numero di record mostrati dalla chiamata per l'integrazione della tabella di ricerca
var fesTableAmount = 20;

// Colonne della tabella (nome, variabile, classe) - escluse le "appese"
fesTableCols = {
	"fesNome" : {"nome": "Nome", "classe":"permanent"},
	// Sintesi
	"fesRating": {"nome": "Rating", "classe":"sintesi"},
	"fesCategoria": {"nome": "Cat. Assogestioni", "classe":"sintesi"},
	"fesRendimento": {"nome": "Rend. 1A%", "classe":"sintesi"},
	"fesNav": {"nome": "NAV", "classe":"sintesi nosmall"},
	"fesVal": {"nome": "VAL", "classe":"sintesi nosmall"},
	// Rendimenti
	"fesRatingRend": {"nome": "Rating", "classe":"rendimenti nosmall"},
	"fesPercYtd": {"nome": "%YTD", "classe":"rendimenti","gruppo": "Rendimento"},
	"fesPerc6m": {"nome": "%6M", "classe":"rendimenti","gruppo": "Rendimento"},
	"fesPerc1a": {"nome": "%1A", "classe":"rendimenti","gruppo": "Rendimento"},
	"fesPerc3a": {"nome": "%3A", "classe":"rendimenti","gruppo": "Rendimento"},
	"fesPerc5a": {"nome": "%5A", "classe":"rendimenti","gruppo": "Rendimento"},
	// Rischio
	"fesRatingRischio": {"nome": "Rating", "classe":"rischio"},
	"fesVol1a": {"nome": "%1A", "classe":"rischio","gruppo":"Volatilit&agrave;"},
	"fesVol3a": {"nome": "%3A", "classe":"rischio","gruppo":"Volatilit&agrave;"},
	"fesVol5a": {"nome": "%5A", "classe":"rischio","gruppo":"Volatilit&agrave;"},
	"fesSharpe": {"nome": "Sharpe", "classe":"rischio nosmall"},
	"fesBeta": {"nome": "Beta", "classe":"rischio nosmall"},
	// Composizione
	"fesCompoCat": {"nome": "Cat. Assogestioni", "classe":"composizione"},
	"fesPercAx": {"nome": "%AZ", "classe":"composizione"},
	"fesPercObb": {"nome": "%OBB", "classe":"composizione"},
	"fesPercLiquidita": {"nome": "%LIQ", "classe":"composizione"},
	"fesPercAltro": {"nome": "%ALTRO", "classe":"composizione"},
	// Costi
	"fesCostiInvIniz": {"nome": "Iniziale", "classe":"costi","gruppo":"<span class='hidden-xs'>Investimento minimo</span><span class='visible-xs'>Inv. min.</span>"},
	"fesCostiInvSucc": {"nome": "Succ<span class='hidden-xs'>essivo</span>", "classe":"costi","gruppo":"<span class='hidden-xs'>Investimento minimo</span><span class='visible-xs'>Inv. min.</span>"},
	"fesCommissione": {"nome": "<span class='hidden-xs'>% ingresso</span><span class='visible-xs'>Ingresso</span>", "classe":"costi","gruppo":"<span class='hidden-xs'>Commissioni</span><span class='visible-xs'>Comm. %</span>"},
	"fesGestione": {"nome": "<span class='hidden-xs'>% gestione ann.</span><span class='visible-xs'>Gest. ann.</span>", "classe":"costi","gruppo":"<span class='hidden-xs'>Commissioni</span><span class='visible-xs'>Comm. %</span>"}
}

fesTablePersCols = {
	"fesRating": {"nome": "Rating",datacol:"rating"},
	"fesCategoria": {"nome": "Cat. Assogestioni",datacol:"assogestioni"},
	"fesRendimento": {"nome": "Rend. 1A%",datacol:"rendimento1a"},
	"fesNav": {"nome": "NAV",datacol:"nav"},
	"fesVal": {"nome": "VAL",datacol:"val"},
	"fesPercYtd": {"nome": "Rend. %YTD",datacol:"percytd"},
	"fesPerc6m": {"nome": "Rend. %6M",datacol:"perc6m"},
	"fesPerc1a": {"nome": "Rend. %1A",datacol:"perc1a"},
	"fesPerc3a": {"nome": "Rend. %3A",datacol:"perc3a"},
	"fesPerc5a": {"nome": "Rend. %5A",datacol:"perc5a"},
	"fesVol1a": {"nome": "Volatilit&agrave; %1A",datacol:"volat1"},
	"fesVol3a": {"nome": "Volatilit&agrave; %3A",datacol:"volat3"},
	"fesVol5a": {"nome": "Volatilit&agrave; %5A",datacol:"volat5"},
	"fesSharpe": {"nome": "Indice di Sharpe",datacol:"indicesharpe"},
	"fesBeta": {"nome": "Beta",datacol:"beta"},
	"fesPercAx": {"nome": "Composizione %AZ",datacol:"percaz"},
	"fesPercObb": {"nome": "Composizione %OBB",datacol:"percobb"},
	"fesPercLiquidita": {"nome": "%LIQ;",datacol:"percliq"},
	"fesPercAltro": {"nome": "%ALTRO",datacol:"percaltro"},
	"fesCostiInvIniz": {"nome": "Investimento minimo iniziale",datacol:"invminimoiniz"},
	"fesCostiInvSucc": {"nome": "Investimento minimo successivo",datacol:"invminimosucc"},
	"fesCommissione": {"nome": "Commissione % ingresso",datacol:"commwb"},
	"fesGestione": {"nome": "Commissione % gestione ann.",datacol:"commgest"}
	}


// Materiale aggiuntivo per mappature
var codSettoreIcon = {
	"2" : {"icon":"cat_beni"},
	"12" : {"icon":"cat_energia"},
	"14" : {"icon":"cat_finanza"},
	"16" : {"icon":"cat_tecnologia"},
	"17" : {"icon":"cat_industria"},
	"23" : {"icon":"cat_sanita"},
	"39" : {"icon":"cat_telecomunicazioni"},
	"41" : {"icon":"cat_altro"},
	"307" : {"icon":"cat_consumi"},
	"666" : {"icon":"cat_materie"},
	"-1" : {"icon":"cat_np"}
}

// Colonne overlay di personalizzazione
fesTablePersOlCols = [
	 	[
			{"nome": "Rating","datacol": "fesRating"},
			{"nome": "Cat. assogestioni", "datacol": "fesCategoria"},
			{"nome": "NAV/Prezzo", "datacol": "fesNav"},
			{"nome": "Valuta", "datacol": "fesVal"},
			{"nome": "Investimento min. iniziale", "datacol": "fesCostiInvIniz"},
			{"nome": "Investimento min. successivo", "datacol": "fesCostiInvSucc"},
			{"nome": "Commissione % d'ingresso", "datacol": "fesCommissione"},
			{"nome": "Commissione % annuale", "datacol": "fesGestione"}
		],
		[
			{"nome": "Rend. %YTD","datacol": "fesPercYtd"},
			{"nome": "Rend. %6M", "datacol": "fesPerc6m"},
			{"nome": "Rend. %1A", "datacol": "fesPerc1a"},
			{"nome": "Rend. %3A", "datacol": "fesPerc3a"},
			{"nome": "Rend. %5A", "datacol": "fesPerc5a"},
			{"nome": "Volatilit&agrave; %1A", "datacol": "fesVol1a"},
			{"nome": "Volatilit&agrave; %3A", "datacol": "fesVol3a"},
			{"nome": "Volatilit&agrave; %5A", "datacol": "fesVol5a"}
		],
		[
			{"nome": "Indice di Sharpe","datacol": "fesSharpe"},
			{"nome": "Beta", "datacol": "fesBeta"},
			{"nome": "Composizione % azionario", "datacol": "fesPercAx"},
			{"nome": "Composizione % obbligazionario", "datacol": "fesPercObb"},
			{"nome": "Composizione % liquidit&agrave;", "datacol": "fesPercLiquidita"},
			{"nome": "Composizione % altro", "datacol": "fesPercAltro"}
		]
	]

// Vista personalizzata	(precarica eventuali variabili)
var tablePersCols = [];
if (typeof localStorage["fesPC"] != "undefined") 
{tablePersCols = localStorage["fesPC"].split("|")}
else {tablePersCols = new Array()}


// Funzione "vai a scheda fondo"
var goToSchedafondo = function(params) {
	// costruisce un form temporaneo con i parametri in campi hidden
	// {"codicesocieta":v.codicesocieta, "codicecomparto": v.codicecomparto, "divisa": v.divisa, "fondosicav": v.fondosicav,"codicefida":v.codicefida}
	var fakeForm = $("<form>").hide().attr({"action":fesSchedaFondoUrl,"method":"POST","id":"fakeForm"});
	// Appende quanto pervenuto al form come campo hidden
	$.each(params,function(k,v){
		fakeForm.append($("<input>").attr({"type":"hidden","name":k,"value":v}));
	});

	$("#fesFondoWrap").addClass("loading");
	$("body").append(fakeForm);
	fakeForm.submit();
}

// Get data per tabella
function fesGetData(firstpage)
{
	// Campo da passare con controllo di paginaizione 
	$("#firstpage").val(firstpage);
	$("#fesRicWrap").addClass("loading");
	if (firstpage) {
		// Refresh dell'intestazione
		fesTableHeaderRefresh();
		$("#fesSearchResults").hide();
		}
	ttHide();

	// Sbianca il campo descrizione qualora vi fosse un valore "anomalo" sui browser vecchi
	if ($("#descrizione").val() == "Digita un termine di ricerca") $("#descrizione").val("");

	$.ajax({
			url: fesSearchDataUrl,
			dataType: "json",
			method: "POST",
			data: $("#fesSearchForm").serialize() + "&bpmpage=fesTabella4s",
			success: function(data)
				{
				
					// Se la pagina non e' specificata...
					if (firstpage)
					{
						// Aggiorna le statistiche quantitative
						fesSearchData = data.statistiche;
						// Svuota la tabella elimina tutti i tr dell'elemento al di fuori dell'intestazione
						fesTable.find("tr:not(.festTableHead)").remove();
						fesTableCount = 0;
					}
					
					// Aggiorna le intestazioni
					fesTotFilt.html(data.filtered);
					fesTotale.html(data.total);
					
					if (data.data!=undefined && data.data.length>0)
					{
					// Carica i nuovi elementi, riga per riga
					$.each(data.data,function(k,v)
					{
						var fesTr = $("<tr>");

						// CheckBox confronto
						var fesCb = $("<input>").attr({"type":"checkbox","name":"fesCheckConfronta","value":v.codicefida});

						if (fesConfSelected.length >= fesConfMax) fesCb.attr({"disabled":true});
						if ($.inArray(v.codicefida.toString(),fesConfSelected)>=0) fesCb.attr({"checked":true,"disabled":false});
						fesCb.click(function(e){
						

							// $("input[name=fesCheckConfronta]").tooltip("destroy");

							// Rileva tutti i campi checked nella tabella (max 2) ed aggiorna il "confronta"
							fesConfButton.hide();
							fesCbSelected = fesTable.find("input[name=fesCheckConfronta]:checked");
							if ($(this).is(":checked"))
							{
								$.each(fesCbSelected, function(i,v)
								{
									if ($.inArray(v.value,fesConfSelected)<0)
									{
										fesConfSelected.push(v.value);
									}
								});	
							}
							else
							{
								fesConfSelected.splice($.inArray(this.value,fesConfSelected),1);
							}
							
							// Se i fondi hanno raggiunto il massimo, disabilita tutti i campi non checkati
							if (fesConfSelected.length >= fesConfMax)
							{
								fesTable.find("input[name=fesCheckConfronta]").attr("disabled",true);
								fesTable.find("input[name=fesCheckConfronta]:checked").attr("disabled",false);
							}
							else
							{
								fesTable.find("input[name=fesCheckConfronta]").attr("disabled",false);
							}
							
							setConfButtonText();

							if (fesConfSelected.length>0) fesConfButton.show();
							
							// Determina il testo del tooltip da inserire
							var ttext = "";
							if($(this).is(":checked"))
							{
								if(fesConfSelected.length>=fesConfMax)
								{
									ttext = "<strong>Fondo aggiunto al confronto.</strong><br>&Egrave; possibile confrontare al massimo 2 fondi alla volta.<br><br><a href=\"javascript:;\" onclick=\"fesTabConf.trigger('click')\">Vai alla pagina \"confronta\"</a>";
								}
								else
								{
									ttext = "<strong>Fondo aggiunto al confronto.</strong><br>Lo trovi alla pagina \"confronta\".";
								}
							}
							else
							{
								ttext = "Hai rimosso un elemento dal confronto";
							}

							// Chiude eventuali tooltip aperti
							$(".tooltip:visible").hide();
							$(this).attr("data-toggle","tooltip").attr("data-viewport","#fesSearchResults");
							$(this).tooltip({trigger: "manual", html: true})
								.attr('data-original-title', ttext)
								.tooltip('show');
						});
						
						// Icona operativa

						// Icona + parametri da passare a be come attributi
						var fesTrOpeIcoA = $("<a>").addClass("linkVai").attr({
							"title":"scegli l'operazione da effettuare",
							"href":"javascript:;",
							"codicesocieta": v.codicesocieta,
							"codicecomparto":v.codicecomparto,
							"divisa":v.divisa,
							"fondosicav":v.fondosicav,
							"data-fundname":v.nome
							}).click(fesIcoOpeOverlay).append($("<i>").addClass("icon icon-2x icon-ico_azioni02A"));
						/* Inserisce l'icona operativa */
						fesTr.append($("<td>").addClass("center icopad permanent").append(fesTrOpeIcoA));
						
						// Checkbox "confronta"
						fesTr.append($("<td>").append(fesCb).addClass("permanent center"));
						
						/*
						var fesFondoNome = $("<a>").html(v.nome).attr({"href":"javascript:;"});
						fesFondoNome.click(function() {
							fesFondoShow()
						});*/

						var labelPir = "";
						if (v.pir) {
							if (v.pir == "S") labelPir = "<span class=\"labelpir\">PIR</span>"
						}

						var fesFondoNome = $("<a>").html(labelPir + "<span>" + v.nome + "</span>").attr({"href":"javascript:;"}).click(function(){
//                        	goToSchedafondo({"codicesocieta":v.codicesocieta, "codicecomparto": v.codicecomparto, "divisa": v.divisa, "fondosicav": v.fondosicav,"codicefida":v.codicefida});
							fesFondoShow({"codicesocieta":v.codicesocieta, "codicecomparto": v.codicecomparto, "divisa": v.divisa, "fondosicav": v.fondosicav,"codicefida":v.codicefida});
                        });

						fesTr.append($("<td>").addClass("permanent").append(fesFondoNome));
						
						// Sintesi
						// Rating Fida (formulato in corone)

						var ratingdesktop = $("<div>").addClass("rating large").empty();
						// Rating
						for (x=1;x<=5;x++) ratingdesktop.append("<i class=\"icon icon-corona"+ (( x <= v.rating ) ? " icon-corona-on" : "") +"\"></i>");
						var ratingsmall = $("<div>").addClass("rating small rate"+v.rating).empty().append($("<div>").addClass("bg"),$("<span>").html(v.rating ));



						fesTr.append($("<td>").addClass("sintesi center").append(ratingdesktop.clone(),ratingsmall.clone()));                       
						fesTr.append($("<td>").html(v.assogestioni).addClass("sintesi"));
						fesTr.append($("<td>").html(formatNumber(v.rendimento1a)).addClass("sintesi right"));
						fesTr.append($("<td>").html(formatNumber(v.nav)).addClass("sintesi right nosmall"));
						fesTr.append($("<td>").html(formatNumber(v.val)).addClass("sintesi right nosmall"));
						// Rendimenti
						fesTr.append($("<td>").addClass("rendimenti center nosmall").append(ratingdesktop.clone(),ratingsmall.clone()));
						fesTr.append($("<td>").html(formatNumber(v.percytd)).addClass("rendimenti right"));
						fesTr.append($("<td>").html(formatNumber(v.perc6m)).addClass("rendimenti right"));
						fesTr.append($("<td>").html(formatNumber(v.perc1a)).addClass("rendimenti right"));
						fesTr.append($("<td>").html(formatNumber(v.perc3a)).addClass("rendimenti right"));
						fesTr.append($("<td>").html(formatNumber(v.perc5a)).addClass("rendimenti right"));
						// Rischio
						fesTr.append($("<td>").addClass("rischio center").append(ratingdesktop.clone(),ratingsmall.clone()));
						fesTr.append($("<td>").html(formatNumber(v.volat1)).addClass("rischio right"));
						fesTr.append($("<td>").html(formatNumber(v.volat3)).addClass("rischio right"));
						fesTr.append($("<td>").html(formatNumber(v.volat5)).addClass("rischio right"));
						fesTr.append($("<td>").html(formatNumber(v.indicesharpe)).addClass("rischio right nosmall"));
						fesTr.append($("<td>").html(formatNumber(v.beta)).addClass("rischio right nosmall"));
						// Composizione
						fesTr.append($("<td>").html(v.assogestioni).addClass("composizione"));
						fesTr.append($("<td>").html(formatNumber(v.percaz)).addClass("composizione right"));
						fesTr.append($("<td>").html(formatNumber(v.percobb)).addClass("composizione right"));
						fesTr.append($("<td>").html(formatNumber(v.percliq)).addClass("composizione right"));
						fesTr.append($("<td>").html(formatNumber(v.percaltro)).addClass("composizione right"));
						// Costi
						fesTr.append($("<td>").html(formatNumber(v.invminimoiniz)).addClass("costi right"));
						fesTr.append($("<td>").html(formatNumber(v.invminimosucc)).addClass("costi right"));
						fesTr.append($("<td>").html(v.commwb).addClass("costi right"));
						fesTr.append($("<td>").html(formatNumber(v.commgest)).addClass("costi right"));
						
						// Vista personalizzata
						if (tablePersCols.length>0)
						{
							// Colonne personalizzate
							if(tablePersCols[0]!="") {
								$.each(tablePersCols, function(i,val){
									fesTr.append($("<td>").html(formatNumber(v[fesTablePersCols[val].datacol])).addClass("perso"));
								});
							}
							else
							{
								fesTr.append($("<td>").html("&nbsp;").addClass("perso"));
							}
						}
						else
						{
							// Vista non ancora personalizzata
							fesTr.append($("<td>").html("&nbsp;").addClass("perso"));
						}
						
						// Conteggio righe
						fesTableCount +=1;
						fesTr.addClass((fesTableCount %2 == 1) ? "pari" : "dispari");

						fesTable.append(fesTr);

					});
					}
					else
					{
						fesTable.append("<tr><td colspan='30' class='permanent center'><i>La ricerca non ha prodotto risultati</i></td></tr>");
					}
					
					// Mostra o nasconde il pulsante per scaricare altri dati dalla tabella
					var fesFindRest = (data.filtered - (fesTable.find("tr").length - 2));
					if(fesFindRest > 0) 
					{
						fesSmoreWrap.show();
						fesSmore.find("span").html((fesFindRest>fesTableAmount)? fesTableAmount : fesFindRest);
						fesManc.find("span").html(fesFindRest);
					}
					else
					{
						fesSmoreWrap.hide();
					}
					
					// Mostra solo i dati selezionati nella select
					$("#fesSearchTable tr>:not(.permanent)").hide();
					$("#fesSearchTable ." + $("#fesSearchTableSelect").val()).show();
					
					$("#fesRicWrap").removeClass("loading");
					$("#fesSearchResults").show();
					
				},
				error: function()
				{
					alert("Errore nel ricevimento dei dati - Tabella");
				}
				
		});
}

// Attiva e popola il pannello di selezione, ritornando i risultati
function fesSelect(btnSel)
{

	// Individua l'elemento che determina la revisione
	fesCurrentButton = btnSel;
	fesCurrentSelection = fesCurrentButton.find("input[type=hidden]").val().split(",");
	fesCurrentField = fesCurrentButton.find("input[type=hidden]").attr("name");
	
	// apre l'overlayer coi dati ricevuti via ajax
	fesSelectTitle = (btnSel.find("input").attr("label"))? (btnSel.find("input").attr("label")): btnSel.parent(".col-sm-4, .fesAdvFiltro").find("label.control-label").html();
	fesSelTitle.html(fesSelectTitle);
	
	// Popola il contenitore coi dati aggiornati
	fesSelContForm = $("<form>").attr("autocomplete","off");
	fesSelCont.empty();
	fesSelCont.attr("id","selCont"+fesCurrentField.charAt(0).toUpperCase() + fesCurrentField.slice(1));
	fesSelCont.append(fesSelContForm);
	
	// Determina come popolare il contenitore declinandolo a seconda del campo, a partire dallo standard
	// Se si tratta di campi "standard"...
	if (!(fesCurrentField == "fesVolatilita" || fesCurrentField == "fesRendimento")) {
		$.each(fesConf[fesCurrentField], function(key,v){
			// Determina il totale
			fesSelElTotal = (fesSearchData[fesCurrentField][key]) ? fesSearchData[fesCurrentField][key] : 0;
			// Costruisce i campetti con le opzioni
			var InpType = "checkbox";
			if (fesCurrentField == "invMinimo" || fesCurrentField == "commissione") InpType = "radio";
			var disabled = (fesSelElTotal == 0) ? true : false;
			fesSelElInput = $("<input>").attr({"type":InpType, "name":"fesSelected","value":key,"disabled": disabled});
			fesSelElInput.on("change",function(){
					if($(this).is(":checked"))
					{
						$(this).parents(".selEl").addClass("selected");
					}
					else
					{
						$(this).parents(".selEl").removeClass("selected");
					}
				});
			fesSelElQta = $("<span>").html(" (" + fesSelElTotal + ")").addClass("selElTotal");
			fesSelElName = $("<span>").html(v.nome).addClass("selElName");
			fesSelElLabel = $("<span>").addClass("selElLabel").append(fesSelElName, fesSelElQta);
			fesSelEl = $("<label>").addClass("selEl").attr("id","id" + key.toString()).append(fesSelElInput,fesSelElLabel);
			// Declinazioni "speciali"
			if (fesCurrentField == "codSocieta") {fesSelEl.css({"background-image": "url(" + (v.img.indexOf("common")<0?"/common":"") + v.img + ")"})}
			if (fesCurrentField == "codRating") {
				// Assembla il rating
				// <div class="rating"><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i><i class="icon icon-corona icon-corona-on"></i></div>
				var elrating = $("<div>").addClass("rating");
				for (x=1;x<=5;x++) elrating.append($("<i>").addClass("icon icon-corona" + ((x<=key)? " icon-corona-on" : "")));

				fesSelEl.prepend(elrating);
				
			}
			if (fesCurrentField == "codSettore") {
				if (codSettoreIcon[key]) {
				fesSelEl.prepend($("<i>").addClass("icon icon-" + codSettoreIcon[key.toString()]["icon"] ))
				}
			}
			if (fesCurrentField == "fesCategoria") fesSelEl.attr({"codcategoria":fesConf[fesCurrentField][key].codCategoria,"tipoCategoria":key.toString().split("|")[0]});
			if (disabled) fesSelElLabel.addClass("disabled");
			fesSelElWrapper = $("<div>").addClass("selElWrapper").append(fesSelEl);
			fesSelContForm.append(fesSelEl);
			if ($.inArray(key,fesCurrentSelection)>=0) 
				{
					fesSelElInput.attr("checked","checked");
					fesSelElInput.trigger("change");
				}
		});
	}
	else
	{
		
		// Se si tratta di volatilita o rendimento per l'inizializzazione del campo
		// Allestisce gli oggetti
		var fesSliderConsole = $("<div>").addClass("sliderConsole");
		fesSliderSelect = $("<select>").addClass("form-control");
		// Popola la select
		fesSliderSelect.append($("<option>").attr({"value":""}).html("-- seleziona l'arco temporale --"));
		$.each(fesConf[fesCurrentField], function(key,v){
				fesSliderSelect.append($("<option>").attr({"value":key.toString()}).html(v.periodo));
		});
		fesSliderSelect.on("change",function()
			{
				sliderOpt = fesConf[fesCurrentField][$(this).find("option:selected").val().split("|").splice(0,5).join("|")];
				if (sliderOpt)
				{
					// Inizializza i campetti con i valori per lo slider
					var valMin = (Number(sliderOpt.defaultmin)<Number(sliderOpt.min)) ? sliderOpt.defaultmin :sliderOpt.min;
					var valMax = (Number(sliderOpt.defaultmax)>Number(sliderOpt.max)) ? sliderOpt.defaultmax :sliderOpt.max;
					fesSliderDal.val(Number(sliderOpt.defaultmin));	
					fesSliderAl.val(Number(sliderOpt.defaultmax));
					
					
					// Inizializza/ricrea lo slider	
					fesSlider.slider("option",
					{
						range: true,
						min: Number(valMin),
						max: Number(valMax),
						step: 0.01,
						values: [sliderOpt.defaultmin, sliderOpt.defaultmax]
					});
					
					// Aggiorna tutte le milestones 
					var mileStep = (Number(valMax) - Number(valMin))/6;
					$.each($(".slider-milestones .number"),function(i,v)
						{
							$(v).html( Math.round((Number(valMin) + (i * mileStep)) * 100)/100 + "%");
						}
					);

					fesSliderCont.show();
					fesSliderForm.show();
				}
				else
				{
					fesSliderForm.hide();
					fesSliderCont.hide();
				}
			});
		
		fesInputFixnum = function()
		{
			var fieldVal = $(this).val().split("");
			cleanedVal = $.grep (fieldVal, function(n, i){
				var testText = "0123456789.-";
				return (testText.indexOf(n)>=0);
			});
			$(this).val(cleanedVal.join("").split(".",2).join("."));
		}
		
		fesSliderDal=  $("<input>").addClass("form-control").attr({"type":"text","maxlength":6}).on("keyup",fesInputFixnum);
		fesSliderAl = $("<input>").addClass("form-control").attr({"type":"text","maxlength":6}).on("keyup",fesInputFixnum);
		fesSliderRefresh = $("<a>").addClass("refresh icon icon-update");
		fesSliderRefresh.click(function(){
			// Controlli incrociati
			if (Number(fesSliderDal.val()) > Number(sliderOpt.max)) fesSliderDal.val(sliderOpt.max);
			if (Number(fesSliderDal.val()) < Number(sliderOpt.min)) fesSliderDal.val(sliderOpt.min);
			if (Number(fesSliderAl.val()) > Number(sliderOpt.max)) fesSliderAl.val(sliderOpt.max);
			if (Number(fesSliderAl.val()) < Number(sliderOpt.min)) fesSliderAl.val(sliderOpt.min);
			if (Number(fesSliderDal.val()) > Number(fesSliderAl.val())) fesSliderDal.val(fesSliderAl.val());
			if (Number(fesSliderAl.val()) < Number(fesSliderDal.val())) fesSliderAl.val(fesSliderDal.val());
			fesSliderDal.val(Math.round(Number(fesSliderDal.val())*100)/100);
			fesSliderAl.val(Math.round(Number(fesSliderAl.val())*100)/100);

			// Refresh dei dati sullo slider
			fesSlider.slider("option",
					{
						values: [ Number(fesSliderDal.val()),  Number(fesSliderAl.val())]
					});
		});
		var fesSliderForm = $("<div>").addClass("sliderForm form-group").hide().append(
				
				$("<div>").addClass("row").append(

					$("<div>").addClass("col-xs-12").append(
						$("<label>").addClass("control-label").html(fesSelectTitle),
						$("<div>").addClass("row").append(
							$("<div>").addClass("col-sm-5 col-xs-12").append(
								$("<div>").addClass("form-inline").append(
									$("<div>").addClass("input-group").append(
										 $("<div>").addClass("input-group-addon first").html("Dal"),
					     				 fesSliderDal.addClass("form-control"),
					     				 $("<div>").addClass("input-group-addon").html("%")
									)
								)
							),
							$("<div>").addClass("col-sm-5 col-xs-10").append(
								$("<div>").addClass("form-inline").append(
									$("<div>").addClass("input-group").append(
										 $("<div>").addClass("input-group-addon first").html("Al"),
					     				 fesSliderAl.addClass("form-control"),
					     				 $("<div>").addClass("input-group-addon").html("%")
										)
									)
								),
							$("<div>").addClass("col-xs-2").append(fesSliderRefresh)
						)
					)
				)
			
		);
		fesSliderConsole.append(
			$("<div>").addClass("form-group").append($("<div>").addClass("row").append($("<div>").addClass("col-xs-12").append($("<label>").addClass("control-label").html("Arco temporale"),
			fesSliderSelect))),
			fesSliderForm
		);
		var fesSlider = $("<div>");
		/*
		var fesSliderMilestones = $("<div>").addClass("fesSliderMilestones");
		for (x=0;x<7;x++)
		{
			fesSliderMilestones.append($("<span>").addClass("mile").append($("<span>").addClass("stone"),$("<span>").addClass("number")))
		}
		
		*/

		var fesSliderCont = $("<div>").addClass("fesSliderCont").hide().append($("<div>").addClass("sliderRange").append(fesSlider));
		fesSelContForm.addClass("formGenerico").append(fesSliderConsole,fesSliderCont);
		fesSlider.sliderRange({milestones:7,
			slide: function( event, ui ) {
				fesSliderDal.val(ui.values[0]);
				fesSliderAl.val(ui.values[1]);
				}
			});
		
		// Eventualmente precarica i dati se il campo &egrave; inizializzato
		var fesFieldVal = $("#" + fesCurrentField).val();
		if (fesFieldVal.length)
		{
			// Inizializza la select
			fesSliderSelect.val(fesFieldVal.split("|").splice(0,5).join("|"));
			fesSliderSelect.trigger("change");
			var valArray = fesFieldVal.split("|");
			fesSliderDal.val([3]);
			fesSliderAl.val(fesFieldVal.split("|")[4]);
			fesSliderRefresh.trigger("click");
		}	


	}
	
	// Costruisce i vari selettori per le categorie, sempre mettendoli nel contenitore
	if (fesCurrentField == "fesCategoria")
	{
		// Nasconde i dati del form, che ci interessano
		fesSelContForm.find("label").hide();
		
		// Select con codici categoria
		var fesCatSelect = $("<div>").addClass("fesSelect").hide();
		// Select
		var fesCatSelectInput = $("<select>").addClass("form-control");
		fesCatSelect.on("change",function(){
			fesSelContForm.find("label").removeClass("white").hide();
			var fesCatSelected = $(this).find("option:selected").val();
			
			// Attribuisce una posizione alle righette per farle andare a capo correttamente
			$.each(fesSelContForm.find("label[codcategoria='"+ fesCatSelected +"'][tipoCategoria='"+ fesCatRadioVal +"']"), function(i,v){
				v = $(v).removeClass("al-left,al-right");
				// Se si ha un numero pari di "riga"
				if ((i+1) % 2 == 1) {
					v.addClass("al-left");
				}
				else
				{
					v.addClass("al-right");
				}
				v.show();
				
			});

		});
		// Console di selezione/deselezione
		fesCatSelectConsole  = $("<div>").addClass("btnConsole btnWrapper");
		fesCatSelectBtnSel  = $("<a>").addClass("btn btn-primary  btn-small").attr("id","btnSeleziona").html("seleziona tutti");
		fesCatSelectBtnDes  = $("<a>").addClass("btn  btn-small").attr("id","btnDeseleziona").html("annulla selezione");
		fesCatSelectBtnFunction = function()
		{
			// Tutti i checkbox visibili
			var allSelect = fesSelContForm.find("input[type=checkbox]:visible");
			if($(this).attr("id") == "btnSeleziona")
			{
				allSelect.attr("checked", true);
			}
			else
			{
				allSelect.attr("checked", false);
			}
		}
		fesCatSelectBtnSel.click(fesCatSelectBtnFunction);
		fesCatSelectBtnDes.click(fesCatSelectBtnFunction);
		fesCatSelectConsole.append(
			$("<div>").addClass("btn-align-right").append(fesCatSelectBtnSel),
			$("<div>").addClass("btn-align-left").append(fesCatSelectBtnDes)
		);
		fesCatSelect.append($("<div>").addClass("row").append(
			$("<div>").addClass("col-xs-12").append(fesCatSelectInput),
			$("<div>").addClass("col-xs-12").append(fesCatSelectConsole)
			)
		);
		fesSelCont.prepend(fesCatSelect);
		
		// Radio button tipo categoria
		var fesCategoriaRadio = $("<div>").addClass("fesRadio");
		$.each(fesConf["tipoCategoria"],function(k,v)
			{
				fesCatRadioEl = $("<label>");
				fesCatRadioEl.append($("<input>").attr({"type":"radio","name":"fesCatRadio","value":k.toString()}));
				fesCatRadioEl.append(v.nome);
				fesCategoriaRadio.append(fesCatRadioEl);
				fesCatRadioEl.find("input").on("change",function(){
					fesSelContForm.find("label").hide();
					fesCatRadioVal = $(this).val();
					fesCatSelectInput.empty();
					fesCatSelectInput.append($("<option>").attr("value","  ").html("--- seleziona una categoria ---"));
					// Crea un'array con le categorie filtrate in base al "radio"
					$.each(fesConf["fesCategoria"], function(k,v){
						if(k.toString().split("|")[0] == fesCatRadioVal) 
							{
								if (!fesCatSelectInput.find("option[value='"+v.codCategoria+"']").length)
								fesCatSelectInput.append($("<option>").html(v.codCategoria).attr("value",v.codCategoria));
							}
						});
					fesCatSelect.show();
				});
			}
		);
		fesSelCont.prepend(fesCategoriaRadio);
	}
	
	// Pulsante di conferma 
	fesSelConfirm[0].innerHTML = (!(fesCurrentField == "fesVolatilita" || fesCurrentField == "fesRendimento")) ? "Filtra<span class=\"hidden-xs\"> per gli elementi selezionati</span>" : "Filtra";
	fesSelOl.modal("show");
}

fesTabInited = false;
// Inizializza i Tab di ricerca 
function fesTabInit()
{
		if (!fesTabInited)
		{
		fesTabRic = $("#tabRicerca");
		fesTabRic.click(function(){
			$("#fesRicWrap .navfrontPage ul li").removeClass("on");
			// Se esiste il contenitore del confronto lo nasconde
			if($("#fesConfrontaCont").length) $("#fesConfrontaCont").hide();
			$(this).addClass("on");
			$("#fesRicercaCont").show();
			$("#fesLeftSel").show();
			fesRicShow();
			if (fesTable.length)
				{
					if (fesConfSelected.length >= fesConfMax)
					{
						fesTable.find("input[name=fesCheckConfronta]").attr("disabled",true);
						fesTable.find("input[name=fesCheckConfronta]:checked").attr("disabled",false);
					}
				}
			});
		fesTabConf = $("#tabConfronta .leftelement");
		fesTabConf.click(function(){
			$("#fesRicWrap .navfrontPage ul li").removeClass("on");
			$("#tabConfronta").addClass("on");
			ttHide();
			$("#fesLeftSel").hide();
			fesConfShow();
		});
		
		//Pulsanti per confronto
		fesConfButton = $("#fesConfButt");
		fesConfButtonText = fesConfButton.find("span");
		fesConfButtonClose = fesConfButton.find(".smallClose");
		fesConfButtonClose.click(function()
		{
			// Riabilita tutti i campi e li dechecka
			fesConfSelected = new Array();
			wBest = false;
			fesConfButton.hide();
			// Se e' in "confronta" fa il refresh del contenuto
			if ($("#tabConfronta").hasClass("on"))
			{
				fesConfShow();
			}
			if (typeof fesTable != "undefined")
			{
				fesTable.find("input[name=fesCheckConfronta]").attr({"disabled":false, "checked": false});
			}
			setConfButtonText();
		});
		setConfButtonText = function(){
			var confText = (fesConfSelected.length>1)? fesConfSelected.length + " fondi" : "1 fondo";
			fesConfButtonText.html(confText);
			if (fesConfSelected.length==0) {
					fesConfButton.hide()
				}
			else
				{
					fesConfButton.show()
				}
		}
		setConfButtonText();
		fesTabInited = true;
	}
}

// Inizializza gli oggetti per la ricerca
function fesRicShow()
{
	/* Nasconde il carrellino */
	$("#faseStart").hide();

	// Resetta la pagina di provenienza
	$("#fromPage").val("");
	
	// Mostra il contenitore della pagina di ricerca
	$("#fesRicWrap").show();
	$("#fesLeftSel").show();
	// Se esiste, nasconde l'eventuale contenitore del confronta
	if($("#fesConfrontaCont").length) $("#fesConfrontaCont").hide();
	
	// Se l'oggetto non &egrave; ancora inizializzato...
	if(!fesRicStarted)
		{
		fesTabInit();

		// Appende i filtri avanzati (creato come HTML nel contenitore) nella spalla sinistra, subito sotto il menu', modificandone il margine superiore
		$("#menusxc,#leftmenu").append($("#fesLeftSel").show());
		
		// CREAZIONE DELLA MODALE 
		// Overlay per il selettore (modale)
		fesSelConfirm = $("<a>").addClass("btn btn-primary").attr("href","javascript:;");
		fesSelConfirm.click(function(){
			if (!(fesCurrentField == "fesVolatilita" || fesCurrentField == "fesRendimento"))
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
					if (fValueArr.length>0)
						if (fValueArr.length>1) 
						{ 	
							if(!fesCurrentButton.find("input[type=hidden]").attr("label")) {
								fesSpanText = fValueArr.length + " elementi selezionati" 
							}
							else
							{
								fesSpanText = fesCurrentButton.find("input[type=hidden]").attr("label") + " (" + fValueArr.length +")"
							}
							
						}
						else
						{
							fesSpanText = fesConf[fesCurrentButton.find("input[type=hidden]").attr("name")][fValueArr[0]].nome;	
						} 
					else
					{
						fesSpanText = (fesCurrentButton.find("input[type=hidden]").attr("label"))? fesCurrentButton.find("input[type=hidden]").attr("label") : "Seleziona...";
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
						fesCurrentButton.find("span").html(fesConf[fesCurrentField][fesSliderSelect.find("option:selected").val()].periodo + " ("+  fesSliderDal.val() + "% - "+ fesSliderAl.val() +"%)");
						fesCurrentButton.parent(".fesAdvFiltro").addClass("active");
						fesCurrentButton.find(".reset").show();
					}
				}
			fesGetData(true);


			$("#fesSelector").modal("hide");
			
		});

		fesSelCont = $("<div>").addClass("fesSelCont");
		fesSelBlock = $("<div>").addClass("btn-align-center").append(fesSelConfirm);
		fesSelOl = getModal({
        id:"fesSelector",
        titolo:"",
        body: [fesSelCont, fesSelBlock]
        });
        fesSelTitle = $("#fesSelector .modal-title");
		// FINE MODALE 

		$("body").prepend(fesSelOl.hide());
		fesTotFilt = $("#fesTotFiltered");
		fesTotale = $("#fesTot");
		
		// Inizializza gli oggetti nei filtri avanzati
		$("#fesSearchLeftSwitch").toggle(
			function(){
					$(this).addClass("opened");
					$(".fesSearchLeftMenu").show();
			},
			function(){
					$(this).removeClass("opened");
					$(".fesSearchLeftMenu").hide();
			}
		);
	
		$("#descrizione").magicSearch(fesAutocompleteUrl, function() {fesGetData(true)});
		
		// Bottoni 
		$.each($(".btnMultiSel"), function(i,v)
		{
			var fDiv = $(v);
			var fesInitStatusText = (fDiv.parent().find("input").attr("label")) ? fDiv.parent().find("input").attr("label") : "Seleziona...";
			fDiv.append($("<span>").html(fesInitStatusText));
			var fDivReset = $("<a>").addClass("icon icon-close_inverted_fill reset").html("&nbsp;").attr({"href":"javascript:;","title":"Resetta criterio di ricerca"}).hide();
			fDivReset.click(function()
				{
					fDiv = $(this).parent(".btnMultiSel");
					fDiv.find("input").val("");
					fDiv.find("span").html(fesInitStatusText);
					fDiv.find("a").hide();
					// Resetta il filtro se in spalla sinistra
					if(fDiv.parent(".fesAdvFiltro").length) fDiv.parent(".fesAdvFiltro").removeClass("active");
					// Ripete la ricerca
					fesGetData(true);
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
		
		// Prepara la tabella
		
		// Crea la tabella con i risultati
		fesTable = $("<table>").attr({"id":"fesSearchTable"}).addClass("noBootstrap");
		fesTheadRow1 = $("<tr>").addClass("festTableHead");
		fesTheadRow2 = $("<tr>").addClass("festTableHead");
		
		
		// Refresh degli heading
		fesTableHeaderRefresh = function(){
			
			// Svuota gli header
			fesTheadRow1.empty();
			fesTheadRow2.empty();
			// prepara l'header
			$.each(fesTableCols, function(k,col){
				fesThLink = $("<a>").addClass("sortDir").attr({"href":"javascript:;","fieldname":k.toString()}).html(col.nome);
				// Controllo dell'ordinamento
				fesThClick = function(){
					// Classe dell'elemento cliccato
					fesThOrd = $(this).parent();
					// Cambia il campo di ordinamento
					$("#orderby").val($(this).attr("fieldname"));
					// Rileva l'ordinamento se vuoto o nullo diviene ascendente, altrimenti discendente
					if(!fesThOrd.hasClass("asc"))
					{
						$("#orderdir").val("asc");
					}
					else
					{
						$("#orderdir").val("desc");
					}
					
					// Refresh della tabella con i dati ed il nuovo ordinamento
					fesGetData(true);
				};
				
				fesThLink.click(fesThClick);
				
				fesThToAppend = $("<th>").addClass("sort " + col.classe).append(fesThLink);
				if (k.toString() == "fesNome") fesThToAppend.css("width","160");
				if (k.toString() == "fesRating" || k.toString() == "fesRatingRend" || k.toString() == "fesRatingRischio" ) fesThToAppend.css("width","80");
				
				// Se la colonna ha il gruppo...
				if (col.gruppo)
				{
					// Controlla se il gruppo esiste ed eventualmente lo appende
					var curGroup = fesTheadRow1.find("th[groupname='"+col.gruppo+"']");
					if (curGroup.length){
						curGroup.attr("colspan",Number(curGroup[0].getAttribute("colspan")) + 1);
					}
					else
					{
						fesTheadRow1.append($("<th>").attr({"groupname":col.gruppo,colspan: "1"}).addClass(col.classe).html(col.gruppo));
					}
					
					fesTheadRow2.append(fesThToAppend);
				}
				else
				{
					fesTheadRow1.append(fesThToAppend.attr("rowspan",2));
				}
				
			});
			
			
			// Aggiunge la colonna vuota per il checkbox
			fesTheadRow1.prepend($("<th>").html("&nbsp;").addClass("permanent center").attr("rowspan",2));
			// Aggiunge la colonna vuota per l'icona operativa
			if (!is4s)
			{
				fesTheadRow1.prepend($("<th>").html("&nbsp;").addClass("permanent center").attr("rowspan",2));
			}
			
			// Aggiunge le colonne della vista personalizzata
			// Vista non ancora personalizzata
			if (tablePersCols.length>0)
			{
				if (tablePersCols[0]!="") {
					$.each(tablePersCols,function(i,v){
						var persoLink = $("<a>").addClass("sortDir").attr({"href":"javascript:;","fieldname":v}).html(fesTablePersCols[v].nome);
						persoLink.click(fesThClick);
						fesTheadRow1.append($("<th>").addClass("sort perso").attr("rowspan",2).append(persoLink));

					});
				}
				else
				{
					fesTheadRow1.append($("<th>").html("&nbsp;").addClass("sort perso").css("width","62%").attr("rowspan",2));
				}
			}
			else
			{
				fesTheadRow1.append($("<th>").html("&nbsp;").addClass("sort perso").css("width","62%").attr("rowspan",2));
			}
		
		

			//Setta l'ordinamento 
			var orderby =  $("#orderby").val();
			if(orderby !="")
			{
				$("a[fieldname='"+orderby+"']").parent().addClass($("#orderdir").val());
			}
			
		};
		$("#fesSearchResults").append($("<div>").addClass("noBootstrap-scroller").append(fesTable.append(fesTheadRow1,fesTheadRow2)));
		
		// Tuning dell'altezza di riposizionamento dei filtri sulla sinistra
		// Trova l'ultimo elemento nel men� laterale
		var sideel = $("#menusxc,#leftmenu>ul")
		if (sideel.length>0) $("#fesLeftSel").css("margin-top", $("#fesSearchResults").offset().top - (sideel.offset().top + sideel.height() - $("#fesLeftSel").height()) + "px");
	
		// Assegna i vari componenti che controllano direttamente la tabella
		$("#fesSearchTableSelect").on("change", function(){
		
			$("#fesSearchTable tr>:not(.permanent)").hide();
			$("#fesSearchTable ." + $(this).val()).show();
			
			if ($(this).val() == "perso"){
			
				// Inizializzazione dell'overlay (se non ancora fatta)
				tPo = $("#tablePersOverlay");
				tPoCount = $("#tablePersCont b").eq(0);
				tPo.find("a.close").click(function(){
					if(tablePersCols.length<1) {
						$("#fesSearchTableSelect").val("sintesi").trigger("change");
					}
					closePopOverLayer("#tablePersOverlay");
				});
				tPoF = tPo.find("form");
				
				tPoF.empty();

				

				// Popola la lista delle colonne disponibili (suddivise in gruppi)
				$.each(fesTablePersOlCols,function(k,v)
				{
					// Inserisce la colonna
					var colWrap = $("<div>").addClass("persGroup");

					$.each(v,function(key,colonna){
						
						tPcol = $("<label>");
						tPcolInput = $("<input>").attr({"type":"checkbox","name":"persCol","value":colonna.datacol});
						tPcolInput.on("change",function(e){
							// Cambia il valore del conteggio ed eventualmente "limita" il tutto con un messaggio di errore
							var valCount = tPoF.find("input:checked").length;
							var check = $(this);
							// $("#tperror").remove();
							$("#tablePersOverlayError").hide();
							if (valCount>5|| valCount<1) 
							{
								
								if (valCount>5) {
									check.attr({"checked":false});
									$("#tablePersOverlayError").show().find(".errortext").html("Hai gi&agrave; inserito un numero massimo di parametri (5).")
									valCount = 5;
								}
								else
								{
									check.attr({"checked":true});
									$("#tablePersOverlayError").show().find(".errortext").html("Occorre inserire almeno 1 parametro.")
									valCount = 1;
								}
								ttShow(e,check);
							}
							tPoCount.html(valCount);
							
						});
						if($.inArray(colonna.datacol,tablePersCols)>=0) tPcolInput.attr("checked","checked");
						tPcol.append(tPcolInput,$("<span>").addClass("selElLabel").html(colonna.nome));
						colWrap.append(tPcol);

					});

					tPoF.append(colWrap);
				});


				
				
				

				// Click sul bottone "Salva"
				tPo.find("a.btn-primary").click(function()
					{
						
						// Nasconde l'errore
						$("#tablePersOverlayError").hide();

						// Assegna i flaggati ad una variabile che raccoglie le colonne personalizzate
						tablePersCols = new Array(); 
						$.each(tPo.find("input[name=persCol]:checked"),function(i,v){
							tablePersCols.push($(v).val());
						});
						if (tablePersCols.length>0){
							localStorage["fesPC"] = tablePersCols.join("|");
							$("#tablePersOverlay").modal("hide");
							fesGetData(true);
						}
						else
						{
							// Setta e mostra l'errore
							$("#tablePersOverlayError").show().find(".errortext").html("Occorre selezionare almeno 1 valore.")
						}
					}
				);
				
				$("#tablePersOverlay").modal("show");

			}

			tPoCount.html(tPoF.find("input:checked").length);
			
		});
		
		// Pulsante che mostra altri risultati
		fesSmoreWrap = $("<div>").addClass("row").attr("id","fesSearchMoreWrap").hide();
		fesSmore = $("<div>").addClass("fesSearchMore btn btn-primary").html("Mostra i prossimi <span></span>&nbsp;risultati");
		fesManc = $("<span>").attr("id","fesMancanti").html("<span></span>&nbsp;risultati rimanenti");
		fesSmoreWrap.append(
			$("<div>").addClass("col-sm-6 col-xs-12").append(fesManc),
			$("<div>").addClass("col-sm-6 col-xs-12").append(fesSmore)
		);
		$("#fesSearchResults").append(fesSmoreWrap);
		fesSmore.click(function(){fesGetData(false)});
		
		// Riceve i primi dati globali
		fesGetData(true);
		fesRicStarted = true;
	}
}

/* CARICAMENTO DATI DEL CONFRONTA */
function fesConfShow(getData)
{
	// Resetta la pagina di provenienza
	$("#fromPage").val("");
	
	fesTabInit();
	
	$("#fesRicWrap").show();
	
	// Nasconde la ricerca
	$("#fesRicercaCont").hide();
	
	// Prepara il contenitore del tab,se necessario
	if(!$("#fesConfrontaCont").length)
	{
		fesConfCont = $("<div>").attr({"id":"fesConfrontaCont"}).addClass("loading");
		$("#fesRicWrap").append(fesConfCont);
	}
	else
	{
		fesConfCont.empty().addClass("loading");
	}
	fesConfCont.show();

	// Imposta i contenuti tramite chiamata o altro
	// Se i fondi da selezionare sono presenti fa la chiamata per avere i dati, altrimenti mostra un messaggio standard
	if (fesConfSelected.length>0)
	{
		// Carica la pagina di confronto via AJAX (qualora vi fossero dati i dati)
		$.ajax({
			url:fesConfUrl ,
			dataType: "html",
			data:{"codFida": fesConfSelected.join("|"),withBest:wBest},
			success: function(data)
			{
				
				fesConfCont.empty().removeClass("loading");
				$("#fesRicWrap").removeClass("loading")
				fesConfCont.html(data);

				// Inizializza i tooltip
				ttSet("#fesConfrontaCont");
				
				// Inizializza le icone
				$(".linkVai").not(".inited").click(fesIcoOpeOverlay);


				// Inizializza i grafici, se esistono i dati
				if (typeof dati_confronta != "undefined")
				{
					// Grafico confronto 
					var gCont = $("#grafico_confronta").addClass("borderFormRounded formGenerico");
					gCont.empty();
					
					// Crea gli elementi del grafico e li popola
					gSpace = $("<div>").attr({"id":"grafico_confronta_space"});
					
					// Select
					var gSelect = $("<select>").addClass("form-control");
					$.each(dati_confronta, function(k,v){
						var opt = $("<option>").attr({"value": k.toString()}).html(k.toString());
						if(k.toString() == "1 anno") opt.attr({"selected": true});
						gSelect.append(opt);
					});
					gSelect.on("change",function(){
						gSpacePlot(dati_confronta[$(this).val()]);
					});
					gSelectBlock = $("<div>").addClass("fesGraphSelector form-group");
					gSelectBlock.append($("<label>").addClass("control-label").html("Seleziona un periodo:"),gSelect);
					gCont.append($("<div>").addClass("row").append($("<div>").addClass("col-sm-6").append(gSelectBlock)),gSpace);
					
					// Funzione che riempie il grafico
					gSpacePlot = function(dataToPlot)
					{
						gSpace.empty();
						fesPlotGraph (
							{
								gType: "serial",
								gData: dataToPlot,
								gCategory: "chiave",
								gIdDest: "grafico_confronta_space",
								dataFormat: "",
								gLines: [
									{
										title: nomeValore1,
										lineColor: "#548d4b",
										valueField: "valore1"
									},
									{
										title: nomeValore2,
										lineColor: "#86b572",
										valueField: "valore2"
									}
								]
							}
						);
					}
					gSelect.trigger("change");	
					
					// Asset allocation
					fesPlotGraph ({
							gType: "bar",
							gData: data_asset1,
							gCategory: "chiave",
							gIdDest: "grafico_asset1",
							colorfield: "color",
							dataFormat: "%",
							title: "Percentuale composizione",
							valueField: "valore"
						});
					fesPlotGraph ({
							gType: "bar",
							gData: data_asset2,
							gCategory: "chiave",
							gIdDest: "grafico_asset2",
							colorfield: "color",
							dataFormat: "%",
							title: "Percentuale composizione", 
							valueField: "valore"
						});
					}
					initTooltip();
			},
			error: function()
			{
				alert("Errore caricamento dati confronta");
			}
		});
		
	}
	else
	{
		fesConfCont.removeClass("loading").empty().append("<section><div class='row'><div class='col-sm-7 col-xs-12'><p><strong>Non hai selezionato alcun fondo o sicav per il confronto!</strong></p><p>In questa pagina puoi <strong>confrontare due fondi</strong> o <strong>sicav</strong> tra loro. Seleziona i fondi che vuoi confrontare dalla pagina di &quot;<a href=\"javascript:;\" id=\"switchFondo\">ricerca</a>&quot; </strong></p><p>Puoi anche selezionare un singolo fondo e confrontarlo con il <strong>migliore</strong> della sua <strong>categoria</strong>.</p></div><div class='col-sm-5 col-xs-12'><img src='/fe/img/fes_confronta_mockup_table.png' class='img100'/></div></div></section>");
		$('#switchFondo').click(function(){$('#tabConfronta').removeClass('active');$('#tabRicerca').addClass('active');$("#fesRicercaCont").show();$('#fesConfrontaCont').hide()});
	}
	
}

// Inizializzazione con tab confronta
wBest = false;
function fesConfStart(getData,withBest)
{
	$(window).on("load",function(){
		fesNewConf(getData,withBest)
	});
}

/* Avvia nuovo confronta */
function fesNewConf(getData,withBest)
{
	wBest = withBest;
	fesConfSelected = getData.split("|");
	$("#fesRicWrap .navfrontPage li").removeClass("on");
	$("#tabConfronta").addClass("on");
	fesConfShow(getData);
	setConfButtonText();
}


fesRicStarted = false;
/* INIZIALIZZAZIONE OGGETTI RICERCA */
function fesRicStart()
{
	fesRicShow();
}