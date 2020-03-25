<h1>Saldo e lista movimenti</h1>
<form name="DATI" id="datiForm">
    <input type="hidden" name="keep" value="Yes">
	<input type="hidden" name="conto" value="361-2-EUR">
	<input type="hidden" name="codAnagrafica" value="030000007338">

	








<input name="tabId" type="hidden" value="nav_priv_iln_carte">
<input name="OBS_KEY" type="hidden" value="nav_priv_iln_saldo_lista_mov">

<input name="OBS_KEY3" type="hidden" value="nav_priv_iln_saldo_lista_mov">

<input name="OBSCNT" type="hidden" value="">
<input name="cf" type="hidden" value="0.17112536049486393">
<input name="BV_UseBVCookie" type="hidden" value="Yes">
<input name="siglaAzione" type="hidden" value="">

 
 
 	
	<script type="text/javascript" src="./prepaid_files/table_orderer.js"></script>
	<script type="text/javascript">

	function erroriJson(res)	{
		
		var esito = res.esito;
		var errMsg = res.messaggio;
		do_preValidations();
		
		if((esito == 'ko_alert' || esito == 'ko_warn' ) && errMsg != null) {
			addValidationError('noLabel', errMsg, true);	
		}
		else {
			for(var i = 0; i < res.errors.length; i++) {
				addValidationError(res.errors[i].fieldLabelID, res.errors[i].message, true);
			}
		}

		$('#errorsSection').show();
		setElementonView($('#errorsSection'));
	}
	
	function goToRecharge() {
	       document.DATI.action = '/imprpri/wbOnetoone/2l/do/banking/WsBusinessPrepaidRechargeInput.do'; 
	       document.DATI.submit();
	}

	var contf = [];
	var anagr = [];
	var saldi = [];
	var intest = [];
	var scade = [];
	var tabED = null;

	contf[0] = '361-2-EUR';
	saldi[0] = '2,00';
	intest[0] = "ARIANNA TORTORELLA";
	anagr[0] = "030000007338";
	scade[0] = "29/02/2020";

	contf[1] = '361-3-EUR';
	saldi[1] = '100,00';
	intest[1] = "CESARE CIFALI";
	anagr[1] = "030000007339";
	scade[1] = "29/02/2020";

	contf[2] = '361-1-EUR';
	saldi[2] = '500,00';
	intest[2] = "ARIANNA TORTORELLA";
	anagr[2] = "030000007340";
	scade[2] = "29/02/2020";


	function aggiorna() {
		
			var j = $("#idCarta").val();
			$("#idSaldo").text(saldi[j]);
			//$("#idTito").text(intest[j]);
			$("#idScade").text(scade[j]);
			document.DATI.conto.value = contf[j];
			document.DATI.codAnagrafica.value = anagr[j];
		
		$('#errorsSection').hide();
	}
	
	$(function () {

		$("#idPer1").datepicker({
			showOn: "button",
			buttonImage: "/img/btn_pickdate_priv.gif",
			buttonImageOnly: true,
			dateFormat: "dd/mm/yy",
			showOtherMonths: true
			
		});
		$("#idPer1").mask("99/99/9999");

		$("#idPer2").datepicker({
			showOn: "button",
			buttonImage: "/img/btn_pickdate_priv.gif",
			buttonImageOnly: true,
			dateFormat: "dd/mm/yy",
			showOtherMonths: true
			
		});
		$("#idPer2").mask("99/99/9999");
	});

</script>
		







<!-- === org.apache.jsp.banking.errorsSection_jsp === { -->
	<div id="errorsSection" style="display: none;">
		<div class="boxtop"><img src="./prepaid_files/box_msgtop.jpg" border="0" alt=""></div>
		<div class="boxtxt">
			<p class="box_mess">
				<img src="./prepaid_files/ico2inf_errorform.gif" border="0" alt="" class="dx">
				<img src="./prepaid_files/box_attenzione.jpg" border="0" alt="">

	
	
			<strong id="error_box"></strong>						
	


			</p>
			<br>
			<ul class="alert" id="errorMessages">
			</ul>

	
			<br class="clear">
		</div>
		<div class="boxbottom"><img src="./prepaid_files/box_msgbottom.jpg" border="0" alt=""></div>
	 <br class="clear">
	</div>
	<script type="text/javascript">
		var subtitle = 'Errata compilazione form';
	</script>
<!-- } === org.apache.jsp.banking.errorsSection_jsp === -->

	<div class="tithelp margTopLarge">
		<div class="helpleft">Dati carta</div>
		<br class="clear">
	</div>

<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<div class="row-fluid">
				<div class="span6">
						<label class="nomefield">Numero carta e titolare</label>

					<select id="idCarta" name="ncarta" onchange="javascript:aggiorna();">
						
						<option selected="selected" value="0">*363 - ARIANNA TORTORELLA</option>
						
						<option value="1">*371 - CESARE CIFALI</option>
						
						<option value="2">*389 - ARIANNA TORTORELLA</option>
	
					</select>

				</div>
				
				<div class="span3">
						<label class="nomefield">Saldo carta</label>
						<span id="idSaldo" class="output">2,00</span>
				</div>
				<div class="span3">
						<label class="nomefield">Scadenza</label>
						<span id="idScad" class="output">29/02/2020</span>
				</div>
		</div>
		<div class="row-fluid">
			<div class="span12">
				<div class="aButtonconsRight">
					<span class="btnc">
						<a class="aButton" href="javascript:goToRecharge();"><span>Ricarica</span></a>
					</span>
					<span class="btnc">
						<a class="aButton" href="javascript:goRimborso();"><span>Rimborsa</span></a>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<br class="clear">
<div class="borderFormRounded searchFilter margBottomLarge">
	<div class="formGeneric">

			<div class="row-fluid">
				
			
				<div class="span6" id="dPeriodo">
				<input type="radio" name="scelta" value="periodo" class="margTopSmall" checked="checked">
				<label class="nomefield">Periodo</label>
				<div class="row-fluid">	
						<div class="span1">
							<label id="dataDal">dal</label>
						</div>
						<div class="span4">
							 <input type="text" id="idPer1" name="dataDa" class="withIco" placeholder="gg/mm/aaaa" maxlength="10" size="15">
						</div>
						<div class="span2">&nbsp;</div>
						<div class="span1">
							<label id="dataAl">al</label>
						</div>
						<div class="span4">	
							<input type="text" id="idPer2" name="dataA" class="withIco" placeholder="gg/mm/aaaa" maxlength="10" size="15">
						</div>	
					</div>
				</div>
				<div class="span5" id="dNumero">
					<input type="radio" name="scelta"  value="numero" class="margTopSmall">
					<label class="nomefield">Numero</label>
					<select id="idNumero" name="numero">
					
						<option value="10">10</option>
					
						<option selected="selected" value="20">20</option>
					
						<option value="30">30</option>
					
						<option value="40">40</option>
					
						<option value="50">50</option>
					
						<option value="60">60</option>
					
						<option value="70">70</option>
					
						<option value="80">80</option>
					
						<option value="90">90</option>
					
						<option value="100">100</option>
					
						<option value="110">110</option>
					
						<option value="120">120</option>
					
						<option value="130">130</option>
					
						<option value="140">140</option>
					
						<option value="150">150</option>
					
						<option value="160">160</option>
					
						<option value="170">170</option>
					
						<option value="180">180</option>
					
					</select>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span6" id="dTipo">
					<label class="nomefield">Tipologia</label>
					<select id="idTipo" name="categoria">
						<option value="TUTTI">Tutti</option>
						<option value="ACQUISTI">Pagamenti</option>
						<option value="PRELIEVI">Prelievi ATM</option>
						<option value="RICARICHE">Ricariche</option>
					</select>
				</div>
				<div class="span6">
					<label class="nomefield">Importo</label>
					<div class="row-fluid">	
						<div class="span1">
							<label id="importoDa">da</label>
						</div>
						<div class="span3">
							 <input type="text" name="importoDa" value="">
						</div>
						<div class="span2">EUR</div>
						<div class="span1">
							<label id="importoA">a</label>
						</div>
						<div class="span3">	
							<input type="text" name="importoA" maxlength="10" size="15" value="">
						</div>
						<div class="span2">EUR</div>
					</div>
				</div>
			</div>
			

		<div class="btnc aButtoncons"><a class="aButton" href="javascript:getTabella();"><span>Cerca</span></a></div>
	</div>
</div>

</form>

<table id="tb-esitodisp" cellspacing="0" cellpadding="0" border="0" class="dettTable sortable">
	<thead>
		<tr>
			<th rowspan="2" class="sort" id="th-data" sort="custom" format="operativita"><a class="sortDir" href="#">Data</a></th>
			<th rowspan="2" class="sort" id="th-tipo" sort="custom" format="operativita"><a class="sortDir" href="#">Tipologia di movimenti</a></th>
			<th rowspan="2" class="sort" id="th-importo" sort="number" format="operativita"><a class="sortDir" href="#">Importo</a></th>
			<th rowspan="2" class="sort on asc" id="th-desc" sort="default" format="operativita"><a class="sortDir" href="#">Dettaglio movimenti</a></th>
		</tr>
	</thead>
	<tbody><tr class="data line0 dispari" id="tr-esitodisp-0">
	<td class="col-data center">05/09/2016</td>
	<td class="col-tipo first">Ricariche</td>
	<td class="col-importo first">40,00 &euro;</td>
	<td class="col-desc first">RICARICA DA WEB</td>

</tr><tr class="data line1 pari" id="tr-esitodisp-1">
	<td class="col-data center">06/09/2016</td>
	<td class="col-tipo first">Ricariche</td>
	<td class="col-importo first">20,00 &euro;</td>
	<td class="col-desc first">RICARICA DA WEB</td>

</tr><tr class="data line0 dispari" id="tr-esitodisp-2">
	<td class="col-data center">05/09/2016</td>
	<td class="col-tipo first">Ricariche</td>
	<td class="col-importo first">10,00 &euro;</td>
	<td class="col-desc first">RICARICA DA WEB</td>

</tr><tr class="data line1 pari" id="tr-esitodisp-3">
	<td class="col-data center">06/09/2016</td>
	<td class="col-tipo first">Ricariche</td>
	<td class="col-importo first">3,00 &euro;</td>
	<td class="col-desc first">RICARICA DA WEB</td>

</tr><tr class="data line0 dispari" id="tr-esitodisp-4">
	<td class="col-data center">06/09/2016</td>
	<td class="col-tipo first">Altro</td>
	<td class="col-importo first">-1,00 &euro;</td>
	<td class="col-desc first">RIMBORSO DA WEB</td>

</tr><tr class="data line1 pari" id="tr-esitodisp-5">
	<td class="col-data center">06/09/2016</td>
	<td class="col-tipo first">Altro</td>
	<td class="col-importo first">-5,00 &euro;</td>
	<td class="col-desc first">RIMBORSO DA WEB</td>

</tr><tr class="data line0 dispari" id="tr-esitodisp-6">
	<td class="col-data center">06/09/2016</td>
	<td class="col-tipo first">Altro</td>
	<td class="col-importo first">-5,00 &euro;</td>
	<td class="col-desc first">RIMBORSO DA WEB</td>

</tr><tr class="data line1 pari" id="tr-esitodisp-7">
	<td class="col-data center">08/09/2016</td>
	<td class="col-tipo first">Altro</td>
	<td class="col-importo first">-60,00 &euro;</td>
	<td class="col-desc first">RIMBORSO DA WEB</td>

</tr></tbody>
</table>
<div class="row-fluid">
	<div class="span12">
		<div class="aButtonconsRight">
			<span class="btnc">
				<a class="aButton" href="#"><span>esporta in excel</span></a>
			</span>
		</div>
	</div>
</div>