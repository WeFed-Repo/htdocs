<h1>Cartimpronta one</h1>

<form name="Movements" >
	<input type="hidden" id="requestIdInPage" name="requestIdInPage" value="1329476625294">

	<!-- CODICE HTML LIBRERIE -->
	<style type="text/css">
		@import url(/wscmn/css/priv_datepicker.css);
	</style>
	<script src="/wscmn/js/priv_datepicker.js" type="text/javascript"></script>
	<script type="text/javascript" >
	var librerie = true,
		pathLibrerie = '/librerie/include/commons/ajax',
		pathMovimenti = '/movimenti',
		cgi_script = '/webankpri',
		today = new Date(),
		sixMonthsAgo = new Date().addMonths(-6),
		dpFilter = sixMonthsAgo.format('yyyymmdd')+'|'+today.format('yyyymmdd'),
		initPeriodo = '',
		initCategory = '';
	
	function clearMov() {
		var url = '/WsClearMovements.do',
			AjaxUrl = (!librerie)? cgi_script + '/banking' + url : pathLibrerie + pathMovimenti + url.replace(/\.do(\?)?/i, '.php$1'),
			parameters = {};
		jqAJAXCall('POST', 'json', AjaxUrl, null, null, parameters)
	}

	// Cancella i movimenti in sessione quando si esce dalla pagina
	$(window).on('unload', clearMov);
	</script>
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
	
	<div class="borderFormRounded margBottomLarge noPadd" id="datiBox">
			<div class="formGeneric" id="formGeneric">
					   <div class="row-fluid noMargbottom">
								   <div id="carte" class="span4 paddMedium heightMin">
											   <label class="nomefield">Numero carta</label>
											   <span class="output">*** *** *** *XXX</span>
								   </div> 
								   <div id="intestazione" class="span4 paddMedium heightMin">
											   <label class="nomefield">Intestatario</label>
											   <span class="output">NOME COGNOME</span>
								   </div>
								   <div id="conto" class="span4 paddMedium heightMin">
											   <label class="nomefield">Conto di addebito</label>
											   <span class="output">XXXXX - XXXXXXXXXX - EUR</span>
								   </div>
					   </div>
					   <div class="row-fluid noMargbottom">
								   <div id="limiteSpesa" class="span4 paddMedium heightMin">
											   <label class="nomefield">Limite di spesa</label>
											   <span class="output txtIco">XXX &euro;</span>
											   
								   </div>
								   <div id="totaleSpese" class="span4 paddMedium heightMin fontTotSpese">
											   <label class="nomefield">Totale spese</label>
											   <span class="output">X,XX &euro;</span>
								   </div>
								   <div id="residuo" class="span4 paddMedium heightMin fontTotSpese">
											   <label class="nomefield">Disponibilit&agrave; residua</label>
											   <span class="output colorver">XXX,XX &euro;</span>
								   </div>
					   </div>
								   
			</div>
      </div>

	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>	
	
	<div class="movimentiCont">
		<!-- Box nessun risultato -->
		<div id="resultsKO" style="display:none">
			<table cellpadding="0" cellspacing="0" border="0" class="TableF24">
				<tr>
					<td class="TopF24"><img src="/img/ret/f24_top.gif" border="0" hspace="0" alt="" /></td>
				</tr>
				<tr>
					<td class="BoxF24"><img src="/wscmn/img/ret/img_or_ricerca_ko.gif"  border="0" align="left" class="icoF24" alt="" />
						<span id="resultsKOmsg">La ricerca non ha prodotto alcun risultato. Modifica i parametri di ricerca.<span></td>
				</tr>
				<tr>
					<td class="BottomF24"><img src="/img/ret/f24_bottom.gif" border="0" alt="" /></td>
				</tr>
			</table>
		</div>
		
		<!-- Risultati-->
		<div id="resultsOK">
			<!-- Box bottoni interazione con i risultati -->
			<div class="tithelp">
				<div class="helpleft helpleftb">Periodo movimenti</div> <div class="inpDiv"> <input type="radio" id="" /> <span>lorem ipsum</span></div><div class="inpDiv"> <input type="radio" id="" /> <span>lorem ipsum</span></div>
				<div class="resPagflex">
					<div class="resPagRightfixbg"></div>
					<div class="resPagRight flex">
						<div class="pulsantiera">
							<a class="zoommovb" href="#" title="Apri tutti"></a><span class="separator"></span>				
							<a class="excelmovlast" href="#" target="_blank" title="Esporta tutti i movimenti che hai cercato"></a>
						</div>
					</div>
					<a href="" class="helpContestuale"></a>
				</div>
				<div class="clear"/></div>
			</div>
			<div class="clear"/></div>
		
			<!-- Tabella risultati -->
			<table id="data-grid-movimenti" cellspacing="0" cellpadding="0" border="0" class="dettTable">
				<thead>
					<tr>
						<th class="sort left" id="th-dataC" width="78"><span></span>DATA<BR/>CONTABILE</th>
						<th class="sort left" id="th-VTa" width="73"><span></span>DATA<BR/>VALUTA</th>
						<th class="sort left" id="th-descB" width="189"><span class="top"></span>DESCRIZIONE</th>
						<th class="sort" id="th-ent" width="106"><span class="top"></span>ENTRATE</th>
						<th class="sort" id="th-usc" width="106"><span class="top"></span>USCITE</th>
						<th id="th-fee" class="nobordlr">PDF</th>
						<th id="th-fee" class="nobordlr"><input id="selTutti" type="checkbox" name="selTutti"/></th>
					</tr>
				</thead>
				<tbody>
				</tbody>
				<tfoot>
					<tr class="cashflow">
						<td class="right" colspan="3">Totale spese</td>
						<td id="totMovEnt" class="right">0,00</td>
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr class="cashflow2">
						<td class="right" colspan="3">Totale entrate e uscite</td>
						<td id="totMovEnt" class="right posi">0,00</td>
						<td id="totMovUsc" class="right nega">-0,00</td>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr class="totali totalinobold">
						<td class="right" colspan="3">Data addebito spese</td>
						<td id="" class="right">00/00/0000</td>
						<td><a onclick="javascript:window.open('/connect.php?page=tpl_priv_popup_table_cartimpronta.php','main2','width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')" href="javascript:void(0)"><img src="/img/ret/ico1gr_info.gif" /></a></td>
						<td colspan="2">&nbsp;</td>
					</tr>
				</tfoot>
			</table>
	
			<!-- Box bottoni interazione con i risultati -->
			<div>
				<div class="TxtRisultatiMsg">				
					<div class="numRisultatiMsg">Stai visualizzando 50 movimenti di 70</div>
					<div class="TxtRisultatiMsg">
						<div><a title="lorem ipsum" class="btnformleft btnformleftMov" href="#1"><img alt="" src="/wscmn/img/str_sceltarapportobordosx.png"><img alt="" src="/wscmn/img/str_sceltarappborsxmovico.gif"><span class="btnSceltaNumMov">AGGIUNGI alla ricerca altri 15 movimenti precedenti</span><img alt="" src="/wscmn/img/str_sceltarapportobordodxnofrec.png"></a></div>
					</div>					
					<div class="clear"></div>
				</div>
			</div>
			<div class="resPagflex">
				<div class="resPagRightfixbg ie"></div>
				<div class="resPagRight flex bottom">
					<div class="pulsantiera">
						<a class="zoommovb" href="#" title="Apri tutti"></a><span class="separator"></span>				
						<a class="excelmovlast" href="#" target="_blank" title="Esporta tutti i movimenti che hai cercato"></a>
					</div>
				</div>
			</div>
			
			<br class="clear" />		
				
		</div>
		
		<!-- Box di errore compilazione form di ricerca -->
		<div id="errorsSection2" style="display:none;">
			<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" border="0" alt=""></div>
			<div class="boxtxt">
				<p class="box_mess">
					<img src="/img/ret/img_or_form.gif" border="0" alt="" class="dx"/>
					<img src="/img/ret/box_attenzione.jpg" border="0" alt=""/>
					<strong id="error_box"><font color="white"> </font></strong>				
					<br/>
				</p>
				<br/>
				<ul class="alert" id="errorMessages2">
					<li>La data inserita non &egrave; corretta.</li>
					<li>La data iniziale della ricerca non pu&ograve; essere successiva a quella finale.</li>
					<li>Errore caricamento dati</li>
				</ul>
		
				<br class="clear"/>
			</div>
			<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" border="0" alt=""></div>
			<br class="clear"/>
		</div>
		
		<!-- Form di ricerca -->
			
		
		<br/>
		<table class="condiz2Mov">
			<tbody>
				<tr>
					<td><a id="btnStampaPaginaMov" class="print" href="javascript:;" title="Stampa pagina">Stampa pagina</a></td>
				</tr>
			</tbody>
		</table>
	</div>
	<br /><br />
	<div class="paddBottomLarge">
	<div>
		<div class="flLeft"><img src="/img/ret/ico2or_estratto_cont.gif" alt=""></div>
		<div class="paddLeftBoxIcoExtraLarge">
			<h2 class="titGeneric03 margBottomSmall txtSize13 lineHeight12 txtTransformUpper colorBank">lorem ipsum</h2>
			<p class="paddBottomSmall">Lorem ipsum <strong>dolor sit</strong> amease nsectetur adipisicing eliteasdi eiusmod tempor incididunsadt labore et dolore magna alass Ut enim ad minim veniamasai nostrud exercitation ullamdsi.</p>
		</div>
	</div>
	</div>
	
	<div class="paddBottomLarge">
	<div>
		<div class="flLeft"><img src="/img/ret/ico2or_non_spesa.gif" alt=""></div>
		<div class="paddLeftBoxIcoExtraLarge">
			<h2 class="titGeneric03 margBottomSmall txtSize13 lineHeight12 txtTransformUpper colorBank">lorem ipsum</h2>
			<p class="paddBottomSmall">Lorem ipsum <strong>dolor sit</strong> amease nsectetur adipisicing eliteasdi eiusmod tempor incididunsadt labore et dolore magna alass Ut enim ad minim veniamasai nostrud exercitation ullamdsi.</p>
		</div>
	</div>
	</div>
	
	<!-- |FINE| CODICE HTML LIBRERIE -->
</form>

<br />



<script src="/wscmn/js/movimenti.js?a=1" type="text/javascript"></script>