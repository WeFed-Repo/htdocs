<h2>Confronta carte</h2>
<section>
	<form>
		<div class="form-group scrollFocus" id="confrCarteC">
			<div class="row">
				<div class="col-xs-4 align-center">
					<label class="confronta-carte">
						<span class="cartaOne"></span>
						<input type="checkbox" data-column="banc" value="nav_priv_wbx_compara_carte_bancomat">
						<p class="note">CARTA DI DEBITO</p>
					</label>
				</div>
				<div class="col-xs-4 align-center">
					<label class="confronta-carte">
						<span class="cartaGold"></span>
						<input type="checkbox" data-column="cnexi" value="nav_priv_wbx_compara_carte_cartinexi">
						<p class="note">CARTA NEXI</p>
					</label>
				</div>
				<div class="col-xs-4 align-center">
					<label class="confronta-carte">
						<span class="cartaJeans"></span>
						<input type="checkbox" data-column="cprep" value="nav_priv_wbx_compara_carte_cartaKjeans">
						<p class="note">CARTA PREPAGATA</p>
					</label>
				</div>
			</div>
		</div>
	</form>
</section>
<section>
	<div id="tabellaComparazione" class="comparazioneFocus">
		<div class="headerContainerNoBootS">
        	<div class="tableContainerNoBootS">
				<table cellspacing="0" cellpadding="0" border="0" id="confrontaTableC">
					<thead>
						<tr data-type="titolo">
								<th data-field="primaColonna" width="20%">&nbsp;</th>
								<th id="cartaOneTitle" data-field="cartaOneTitle" width="20%">Cartimpronta ONE</th>
								<th data-field="bancomatTitle" width="20%">&nbsp;</th>
								<th data-field="cartaNexiTitle" width="20%">&nbsp;</th>
								<th data-field="cartaJeansTitle" width="20%">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<tr class="titoloCaption visible-xs">
							<td>Caratteristiche principali</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="titoloCaption hidden-xs">
							<td colspan="5">Caratteristiche principali</td>
						</tr>
						<tr data-type="tipologia">
							<td>Tipologia</td>
							<td>Carta di credito</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="titoloCaption visible-xs">
							<td>Condizioni economiche</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="titoloCaption hidden-xs">
							<td colspan="5">Condizioni economiche</td>
						</tr>
						<tr data-type="canone">
							<td>Canone annuo</td>
							<td><strong>Gratuito</strong></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr data-type="costoPrelievo">
							<td>Costo prelievo ATM</td>
							<td>--</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr data-type="costoAnticipoCont" >
							<td>Costo anticipo contante</td>
							<td>3% del valore con un minimo di € 3 in tutto il mondo (prelievo all'ATM); 3% del valore con un minimo di € 4 (prelievo allo sportello)</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr data-type="commPag">
						<td>Commissione sui pagamenti</td>
						<td>Maggiorazione dell'1.5% sul tasso di cambio per gli acquisti in valuta diversa dall'Euro</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr data-type="platfond">
							<td>Plafond</td>
							<td>Min. € 500 / Max € 7.800</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						
						<tr class="titoloCaption visible-xs">
							<td>Servizi e Benefici</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="titoloCaption hidden-xs">
							<td colspan="5">Servizi e Benefici</td>
						</tr>
						<tr data-type="utilizzoOnline">
							<td>Utilizzo online</td>
							<td class="align-center"><i class="icon icon-alert_ok icon-2x stato-ok"></i></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
						</tr>
						<tr data-type="cartaAgg">
							<td>carta aggiuntiva</td>
							<td class="align-center"><i class="icon icon-alert_ok icon-2x stato-ok"></i></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
						</tr>
						<tr data-type="promozioni">
							<td>Promozioni e Programmi fedelt&agrave;</td>
							<td class="align-center"><i class="icon icon-alert_ok icon-2x stato-ok"></i></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
						</tr>
						<tr data-type="btnRow">
							<td class="align-center"></td>
							<td class="align-center">
								<div class="form-group btnWrapper"><div><a type="button" class="btn btn-primary btn-small" href="javascript:void(0);" onclick="callJSP('/wbOnetoone/3l/action/nsf/RichiestaCartimprontaOneFdr.action',null,'OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartimpr_one_rich&amp;OBSKEY3=nav_priv_wbx_rich_emiss_cartimpr_one&amp;OBS_REF=Card_confr_btn_imprntone_richiesta');">richiedi ora</a>
								</div>
							</div>
								<a href="javascript:void(0);" onclick="callJSP('/wbOnetoone/3l/action/wbOnetoone/schedaProdotto.action',null,'COL=carte&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartimpr_one_rich&amp;OBSKEY3=nav_priv_wbx_scheda_prod_cartimpr_one&amp;OBS_REF=Card_confr_link_imprntone_scheda');">leggi di più</a>
							</td>	
							<td class="align-center"></td>
							<td class="align-center"></td>
							<td class="align-center"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>



<script>
 $(function () {
 	var $table = $('#confrontaTableC'),
		chekBox = $('#confrCarteC').find('.confronta-carte input[type=checkbox]'),
		
		htmlTable =  {
		"banc" : {
			titolo : 'Carta di debito',
			tipologia : 'Carta di debito',
			canone : '<strong>Gratuito</strong>',
			costoPrel : '€ 0 in tutti gli sportelli ATM dell\'area EURO; 2% del controvalore (con importo minimo di € 3,62) con 1% di maggiorazione per il tasso di cambio nei Paesi Extra Euro',
			costoAntCont: '---',
			commPag : '€ 0 per i pagamenti in area EURO; 2% del controvalore nei Paesi Extra Euro; maggiorazione tasso di cambio 1%',
		    platfond : 'Max € 7.750',
		    utilizzoOnline: '<i class="icon icon-alert_error icon-2x stato-ko"></i>',
		    cartaAgg : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    promozioni : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    btn : '<div class="form-group btnWrapper"><div><a type="button" class="btn btn-primary btn-small" href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/nsf/RichiestaCartimprontaOneFdr.action\',null,\'OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartimpr_one_rich&amp;OBSKEY3=nav_priv_wbx_rich_emiss_cartimpr_one&amp;OBS_REF=Card_confr_btn_imprntone_richiesta\');">richiedi ora</a></div></div><a href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/wbOnetoone/schedaProdotto.action\',null,\'COL=carte&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartimpr_one_rich&amp;OBSKEY3=nav_priv_wbx_scheda_prod_cartimpr_one&amp;OBS_REF=Card_confr_link_imprntone_scheda\');">leggi di più</a>'
										
		},
		"cnexi" : {
			titolo : 'Carta Nexi',
			tipologia : 'Carta di credito',
			canone : '<strong>Gratuita se richiesta entro il 31/01/2021 <br>&euro; 50,00 Carta principale<br>&euro; 35,00 Carta familiare*<br>&euro;25,82 Carta aggiuntiva*<br>(carta intestata allo stesso titolare della principale, di circuito complementare)<br>*La carta può essere richiesta come carta principale oppure in versione aggiuntiva o familiare in presenza di una carta principale.</strong>',
			costoPrel: '4 % <br>Min. 0,52 &euro; per operazioni effettuare in euro<br>Min. 5,16 &euro; per operazioni effettuate in valute diverse dall’euro',
			costoAntCont: '25,00 &euro; in Italia e all’estero',
		    commPag : '0 per pagamenti in area euro. <br>Maggiorazione tasso di cambio per operazioni in valuta diversa dall’euro<br>Tasso applicato dai circuiti internazionali determinato all’atto della conversione, maggiorato di una commissione per il servizio non superiore al 2%.',
		    platfond : 'Max &euro; 3.000',
		    utilizzoOnline: '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    cartaAgg : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    promozioni : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
		    btn: '<div class="form-group btnWrapper"><div><a type="button" class="btn btn-primary btn-small" href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/do/wbOnetoone/schedaProdotto.do\',null,\'OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_carta_nexi_rich&amp;OBSKEY3=nav_priv_wbx_rich_emiss_carta_nexi&amp;OBS_REF=Card_confr_btn_cartanexi_richiesta\');">richiedi ora</a></div></div><a href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/wbOnetoone/schedaProdotto.action\',null,\'OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartanexi_rich&amp;OBSKEY3=nav_priv_wbx_scheda_prod_cartanexi&amp;OBS_REF=Card_confr_link_cartanexi_scheda\');">leggi di più</a>'
		},
		"cprep" :  {
			titolo : 'Carta Kje@ns',
			tipologia : 'Carta prepagata',
			canone : '<strong>Gratuito</strong>',
			costoPrel : 'Gratis su ATM del Gruppo Banco BPM; € 2 su ATM di altre banche in area Euro; € 3 nei Paesi extra-Euro',
			costoAntCont: '---',
			commPag : 'Maggiorazione dell\'2% sul tasso di cambio per gli acquisti in valuta diversa dall\'Euro',
			platfond : 'Max € 3.000',
			utilizzoOnline: '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
			cartaAgg : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
			promozioni : '<i class="icon icon-alert_ok icon-2x stato-ok"></i>',
			btn: '<div class="form-group btnWrapper"><div><a type="button" class="btn btn-primary btn-small" href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/nsf/RichiestaCartaKjeans.action\',null,\'page=first&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartaKjeans_rich&amp;OBSKEY3=nav_priv_wbx_rich_emiss_cartaKjeans&amp;OBS_REF=Card_confr_btn_Kjeans_richiesta\');">richiedi ora</a></div></div><a href="javascript:void(0);" onclick="callJSP(\'/wbOnetoone/3l/action/wbOnetoone/schedaProdotto.action\',null,\'OBSCNT=TAB&amp;tabId=nav_priv_wbx_carte&amp;OBSKEY=nav_priv_wbx_cartaKjeans_rich&amp;OBSKEY3=nav_priv_wbx_scheda_prod_cartaKjeans&amp;OBS_REF=Card_confr_link_Kjeans_scheda\');">leggi di più</a>'
		}
	}
	
	//resetta l'html delle celle
	var trAttr = $table.find('tr[data-type]');
	var resetHtmlTd = function () {
		trAttr.each(function(){
			for(i=2; i<=4;i++) {
				$(this).find('td,th').eq(i).html('');
			}
		})
		
	}

	$('.confronta-carte input[type=checkbox]').click(function () {
   			var attribArr = [];
   			var el = $(this);
   			if (el.prop('checked')) {
   				el.closest('.confronta-carte').addClass('selected');
   			} else {
   				el.closest('.confronta-carte').removeClass('selected');
   			}
   			//console.log(htmlTable);
			
			chekBox.each(function (index,checkBox){
				if($(this).is(":checked")) {
					var attrib = $(this).attr('data-column');
					attribArr.push(attrib);
				}
				
			});
			resetHtmlTd();
			
   			$.each(attribArr,function(i,v){
   					var v;
					switch (v) {
					  case "banc":
					  		trTitolo = htmlTable.banc.titolo,
					  		trTipologia = htmlTable.banc.tipologia,
					    	trCanone = htmlTable.banc.canone,
					    	trCostoPrel = htmlTable.banc.costoPrel,
					    	trCostoAntCont = htmlTable.banc.costoAntCont,
					    	trCommPag = htmlTable.banc.commPag,
					    	trPlatfond= htmlTable.banc.platfond,
					    	trUtilizzoOnline= htmlTable.banc.utilizzoOnline,
					    	trCartaAgg= htmlTable.banc.cartaAgg,
					    	trPromozioni = htmlTable.banc.promozioni,
					    	trBtn = htmlTable.banc.btn

					  break;
					  case "cnexi":
					  		trTitolo = htmlTable.cnexi.titolo,
					  		trTipologia = htmlTable.cnexi.tipologia,
					    	trCanone = htmlTable.cnexi.canone,
					    	trCostoPrel = htmlTable.cnexi.costoPrel,
					    	trCostoAntCont = htmlTable.cnexi.costoAntCont,
					    	trCommPag = htmlTable.cnexi.commPag,
					    	trPlatfond= htmlTable.cnexi.platfond,
					    	trUtilizzoOnline= htmlTable.cnexi.utilizzoOnline,
					    	trCartaAgg= htmlTable.cnexi.cartaAgg,
					    	trPromozioni = htmlTable.cnexi.promozioni,
					    	trBtn = htmlTable.cnexi.btn
					  break;
					  case "cprep":
					  		trTitolo = htmlTable.cprep.titolo,
					  		trTipologia = htmlTable.cprep.tipologia,
					    	trCanone = htmlTable.cprep.canone,
					    	trCostoPrel = htmlTable.cprep.costoPrel,
					    	trCostoAntCont = htmlTable.cprep.costoAntCont,
					    	trCommPag = htmlTable.cprep.commPag,
					    	trPlatfond= htmlTable.cprep.platfond,
					    	trUtilizzoOnline= htmlTable.cprep.utilizzoOnline,
					    	trCartaAgg= htmlTable.cprep.cartaAgg,
					    	trPromozioni = htmlTable.cprep.promozioni,
					    	trBtn = htmlTable.cprep.btn
					  break;
					  default:
				}
				$table.find("tr[data-type=titolo]").find('th').eq(i+2).html(trTitolo);
				$table.find("tr[data-type=tipologia]").find('td').eq(i+2).html(trTipologia);
				$table.find("tr[data-type=canone]").find('td').eq(i+2).html(trCanone);
				$table.find("tr[data-type=costoPrelievo]").find('td').eq(i+2).html(trCostoPrel);
				$table.find("tr[data-type=costoAnticipoCont]").find('td').eq(i+2).html(trCostoAntCont);
				$table.find("tr[data-type=commPag]").find('td').eq(i+2).html(trCommPag);
				$table.find("tr[data-type=platfond]").find('td').eq(i+2).html(trPlatfond);
				$table.find("tr[data-type=utilizzoOnline]").find('td').eq(i+2).html(trUtilizzoOnline);
				$table.find("tr[data-type=cartaAgg]").find('td').eq(i+2).html(trCartaAgg);
				$table.find("tr[data-type=promozioni]").find('td').eq(i+2).html(trPromozioni);
				$table.find("tr[data-type=btnRow]").find('td').eq(i+2).html(trBtn);
				
				
			})
   			



   		});

	});

</script>



