var cartBeanJson = '', carrelloJson = '', listFund = '', msgRiepilogoCart='', lstDeposit='',showAllSottoDeposito='', tempDepStr='',datiTabFondi=[];
var hrefPtf = '', pesoTotale = 0, idxFondoDel=-1; isinFondoDel='';

var colonneTabFondi = [
	{
		field   : 'nomeFondo',
		sortName: 'descrizioneFondo',
		title   : 'Fondo',
		sortable : true,
		'class'	: 'left'
	},
	{
		field   : 'categorieFondo',
		title   : 'Categorie',
		sortable : true, 
		'class'	: 'left'
	},
	{
		field   : 'pesoFondo',
		title   : 'Peso',
		'class'	: 'right perc'	//per aggiornaInvestimenti()
	},
	{
		field   : 'totaleInvFondo',
		title   : 'Tot. da investire <br>  <input id=\"importoFondiTotCart\" name=\"text\" class=\"importo\" value=\"0\" autocomplete=\"off\" type=\"number\" size=\"10\" maxlength="10"/>', //value="bean.getQuantita()
		titleTooltip: 'Importo Totale da investire nel tutti fondi selezionati',
		'class'	: 'right imp'	//per aggiornaInvestimenti()
	},
	{
		field   : 'importoMinFondo',
		title   : 'Importo min prima sott',
		titleTooltip: 'Importo minimo prima sottoscrizione',
		'class'	: 'right'
	},
	{
		field   : 'cancellaFondo',
		title   : '',
		'class'	: 'center status'	//per aggiornaInvestimenti()
	}
  ];



function iniziatizzaCarrello(){
	
	$.ajax({
		url : wrp_script_direct + "/investimenti/ViewCartJson.action" + "?cf=" + Math.random(),
		dataType : "json",
		data : {},
		success : function(dataOutJSON, status, jqXHR) {
			
			cartBeanJson = $.parseJSON(dataOutJSON.data.cartBeanJson);
			carrelloJson = $.parseJSON(dataOutJSON.data.carrelloJson);
			showAllSottoDeposito = $.parseJSON(dataOutJSON.data.showAllSottoDeposito);
				
			showError(false, null, null);
			$("#riepilogoCartOrdInseriti, #riepilogoCartOrdDaInserire, #elencoFondiCart, #sezioneBtnContainerCart, #buyComplete").hide();
			
			listFund = cartBeanJson.listaFondi;
			if(listFund==undefined || listFund==null|| listFund.length==0 || cartBeanJson.activeFundSize==0){
				msgRiepilogoCart = "HAI INSERITO GLI ORDINI PER TUTTI I FONDI PRESENTI NEL PORTAFOGLIO " + cartBeanJson.profilo.toUpperCase();
				$("#msgRiepilogoCart").text(msgRiepilogoCart);
				$("#riepilogoCartOrdInseriti, #buyComplete").show();
			}
			else{
				
				msgRiepilogoCart = "PORTAFOGLIO MODELLO: "+ cartBeanJson.profilo.toUpperCase();
				$("#msgRiepilogoCart2").text(msgRiepilogoCart);
				
				lstDeposit = cartBeanJson.listaDepositi;
				if (lstDeposit.length > 1) {
					$("#elencoDepositi").empty();
					$.each(lstDeposit,function(index, deposito) {
						if(showAllSottoDeposito){
							$("#elencoDepositi").append($('<option>').val(deposito).text(deposito));
						}
						else{
							tempDepStr = deposito.split("\/");
							if(undefined!=tempDepStr && null!=tempDepStr && tempDepStr.length==3 &&  tempDepStr[2] == "0"){
								$("#elencoDepositi").append($('<option>').val(deposito).text(deposito));
							}
						}
						
					});
					$('#deposito').val($('#elencoDepositi :selected').val());
					$('#deposito').text($('#elencoDepositi :selected').text());
					$('#elencoDepositi').show();
				}
				else{
					$.each(lstDeposit,function(index, deposito) {
						$('#deposito').val(deposito);
						$('#deposito').text(deposito);
					});
					$('#deposito').show();
				}
				
				hrefPtf = "javascript:document.location.href=";
				hrefPtf += "wrp_script";
				hrefPtf += "+'/wbOnetoone/2l/action/investimenti/PortafoglioInvestimenti.action";
				hrefPtf += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf'";
				
				$("#btnPortafoglio").attr("href", hrefPtf);
//				$("#linkPortafoglio").attr("href", hrefPtf);
				
				$("#riepilogoCartOrdDaInserire").show();
				
				for(var i=0; i<listFund.length; i++) {
					var fondoJson={};
					var fund = listFund[i];
					
					var hrefScedaFondo = "javascript:document.location.href=wrp_script";
//						hrefScedaFondo += "+'/wbOnetoone/2l/action/investimenti/RicercaFondi.action";
						hrefScedaFondo += "+'/wbOnetoone/2l/action/investywb/RicercaFondi.action";
						hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello";
						hrefScedaFondo += "&codiceIsin="+fund.isinFondo+"&fondo=true'";
					fondoJson.nomeFondo 		= "<a href=" + hrefScedaFondo +" >" + fund.nomeFondo + " </a>";
					fondoJson.descrizioneFondo	= fund.nomeFondo;
					fondoJson.categorieFondo	= fund.assetClass;
					fondoJson.pesoFondo			= fund.percentuale + " &#37;";
					fondoJson.totaleInvFondo	= "&euro; " + fund.importoInvestimento;
					fondoJson.importoMinFondo	= "&euro; " + fund.importoMinimo;
					
					fondoJson.cancellaFondo		= "acquistato";
					if("0" == fund.stato){
						var hrefCancellaFondo = "\"javascript:;\" onclick=\"chiamaDelFondo(this,"+i+",'" +fund.isinFondo+ "');\" "; // delFondo(this,'" + fund.isinFondo + "',"+i+");\" ";
						fondoJson.cancellaFondo	= "<a href=" + hrefCancellaFondo +" ><i class='icon icon-alert_error_fill' alt='' title='Se desideri, puoi annullare quest&#39;fondo dal carrello.'></i></a>";
					
						pesoTotale += isNaN(new Number(fund.percentuale.replace("%","")).valueOf())? 0: new Number(fund.percentuale.replace("%","")).valueOf() ;
					}
					fondoJson.id = i;
					fondoJson.isin = fund.isinFondo;
					
					datiTabFondi[i] = fondoJson;
				}
				
				//non funziona con browser IE
//				$.each(Object.values(colonneTabFondi),function(index, colObj) {
//					if(colObj.field == "totaleInvFondo"){
//						colObj.title = colObj.title.replace('value=\"0\"','value=\"'+cartBeanJson.quantita+'\"');
//					}
//				});
				
				for(var idx=0; idx < colonneTabFondi.length; idx++){
					var colObj = colonneTabFondi[idx];
					if(colObj.field == "totaleInvFondo"){
						colObj.title = colObj.title.replace('value=\"0\"','value=\"'+cartBeanJson.quantita+'\"');
						colonneTabFondi[idx] = colObj;
					}
				}
				
				$('#idListaFondi').bootstrapTable({
			        data			 : {}
			        ,sortOrder		 : "asc",
		            sortName		 : "descrizioneFondo",
			        rowStyle		 : function(row, index) {
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
				,columns			: colonneTabFondi
				,onPostBody : function(){
								if($('#idListaFondi').html().indexOf("tfoot") == -1){
									$('#idListaFondi').html($('#idListaFondi').html() + 
												'<tfoot id="idListaFondiFooter">' 
											  +	'	<tr class="totali">'
											  + '      	<td colspan="2" class="left">Categorie per cui non sono stati selezionati fondi: </td>'
											  + '		<td class="right totPerc" id="idListaFondiFooterPeso"></td>'
											  + '		<td class="right totImp" id="idListaFondiFooterImporto"></td>'
											  + '		<td colspan="2" class="center" id="idListaFondiFooterAddFund"> '
//											  + '     	   	<a type="button" class="btn btn-primary" id="btnAddToCart">Aggiungi Fondi</a>'
											  + '		</td>'
											  + '	</tr>'
											  + '</tfoot>');
								}
							}
				 });
				
				$('#idListaFondi').bootstrapTable('load', datiTabFondi);  
				$('#importoFondiTotCart').val(cartBeanJson.quantita);
				
				//<br><input id=\"importoFondiTotCart\" name=\"text\" class=\"importo\" value=\"0\" autocomplete=\"off\" type=\"number\"/>
				
				
				if(pesoTotale<100){
// 					$("#idListaFondiFooterPeso").text("" + (100-pesoTotale));
					aggiornaInvestimenti();
					$("#idListaFondiFooter").show();
				}
				else{
					$("#idListaFondiFooter").hide();
				}
				
				$("#elencoFondiCart").show();
				$("#sezioneBtnContainerCart").show();
				
				$('#importoFondiTotCart').bind('keydown', function(e) {
					verificaImporto(e);
				});
			

				$('#importoFondiTotCart').bind('keyup blur', function() {
					aggiornaInvestimenti();
				});
				
				$('#btnBuyFromCart').click(function() {
					$("#cart").val(JSON.stringify(carrelloJson));
					$("#rapporto").val($("#deposito").val());
//					var urlBuyFromCart = "BuyFromCartSelect.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
					var urlBuyFromCart = wrp_script + "/wbOnetoone/2l/action/investywb/AcquistoFondo.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new";
					$('#viewCartForm').attr('action', urlBuyFromCart);
					$("#viewCartForm").submit();
				});
				
				$('#btnCancellaCart').click(function () { 
					$('#modalEliminaCarrelloLAbel').text("Eliminazione carrello portafoglio modello: " + cartBeanJson.profilo.toUpperCase());   
					$('#modalEliminaCarrello').modalPlus(); 
				});
				
				$('#modalEliminaCarrelloSi').click(function () {
					delCarrello();
				});
				
			}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "l'operazione di visualizzare carrello non &egrave; possibile al momento";
			showError(true, "E", msg);	//errorBoxCart
//			$("#sezioneReipilogo,#sezioneDatiOrdine,#prosegui,#modifica")	.hide();
		},
		complete : function() {

//			$("#btnPortafoglio2").attr("href", hrefPtf);
			
//			$("#btnModificaCart").attr("href", "javascript:callJSP('/wbOnetoone/mffida/servlet/portafogli/index.action',null,'get=1&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello');");
//			$("#btnAddToCart").attr("href", "javascript:callJSP('/wbOnetoone/mffida/servlet/portafogli/index.action',null,'get=1&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello');");
			
			//mantiene stato di carrello passando paramtero showCart
			var hrefAddModCart = "javascript:callJSP('/wbOnetoone/mffida/servlet/portafogli/index.action',null,'get=1&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello&showCart=true');";
//			$("#btnAddToCart").attr("href", hrefAddModCart);
			$("#btnModificaCart").attr("href", hrefAddModCart);
			
		}
	});
}



//nasconde/visualizza sezione di errore/warning/successo
//show = true/false; tipo="E"(error)/"W"(warning)/"S"(success)
function showError(show, tipo, msg) {
	if (!show) {
		$('#errorBoxCart').hide();
	} else {
		var errorBorderClass = ''
		// , errorIconType = ''
		;
		if ("E" == tipo) {
			errorBorderClass = 'negativo';
			// errorIconType = 'icon icon-alert_error icon-2x';
		} else if ("W" == tipo) {
			errorBorderClass = 'attenzione';
			// errorIconType = 'icon icon-alert_caution icon-2x';
		}
		$("#errorBorder").addClass(errorBorderClass);
		// $("#errorType").attr('class',errorIconType);
		$("#messaggioErrorCart").html(msg);
		$('#errorBoxCart').show();
		window.scrollTo(0, 0);
	}
} 

function verificaImporto(e) {
	if (109 == e.keyCode || 189 == e.keyCode || // -
	107 == e.keyCode || 187 == e.keyCode || // +
	110 == e.keyCode || 190 == e.keyCode // .
	) {
		e.preventDefault();
	}
}

function chiamaDelFondo(el, id, isin){
	
	idxFondoDel = id;
	isinFondoDel = isin;
	delFondo(el, isin ); //carrello_investimenti.js
}

function updateCarrello(idx){
	if(idx!=undefined && idx != -1){
		datiTabFondi.splice(idx, 1);	//cart.js
		$('#idListaFondi').bootstrapTable('load', datiTabFondi);  
		idxFondoDel = -1;
		aggiornaInvestimenti();
		$('#modalEliminaCarrello').modalPlus('showMessage','Cancellazione con successo');	//Il fondo selezionato &#232; stato eliminato
	}
}
