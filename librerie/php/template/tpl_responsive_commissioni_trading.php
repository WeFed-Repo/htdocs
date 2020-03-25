
<script type="text/javascript">
	/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
	addEvent(window, 'load', function() {
		createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
	});

	function sceltaRapportoFunc (option) {
		// Testo selezione: option.text
		// Valore selezione: option.value
		// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
	}
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>

<h2>Commissioni trading</h2>
<section>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		<!--caso con selettore rapporto -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<label class="control-label-output">Deposito titoli</label>
					<div id="sceltaRapporto" class="selectRapp">
					<input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
					<a href="javascript:;" class="inputOption inputSx form-control">
						<span class="inputDx">
							<span class="input">
								xxx/aaaaaa
							</span>
						</span>
					</a>
					<div class="selector" style="display: none;">
						<span class="group">
							<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions selected">
							<strong>xxx/aaaaaa</strong><br/>
							Nome Nome Cognome Cognome1</a>
						</span>
						<span class="group">
							<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
						</span>
						<span class="group">
							<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
							Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
							Nome Nome Cognome Cognome5</a>
						</span>
					</div>
				</div>
  
				</div>
				<div class="col-xs-8 col-sm-4">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp" data-toggle="tooltip">4.213,46 al gg/mm/aaaa</span>
					<div class="htmlTooltip">
						08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
				</div>
				<div class="col-xs-2 col-sm-2 no-label">
					<a href="#1" class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
				</div>
			</div>
		</div>

	</form>
</section>
<section>
	 <h4>Tabella di confronto profili da usare anche nel trading</h4>
    <table cellspacing="0" cellpadding="0" border="0" class="table-sceltaprofilo hidden-xs wrapper-sel">
        <tbody>
        	<tr>
        		<td class="bgAtt ch-profilo" width="50%">
        			<div>
        				<span class="ico-fix"></span>
        				<span>Profilo fisso</span>
        			</div>
				</td>
				<td width="50%" class="ch-profilo">
        			<div>
        				<span class="ico-var"></span>
        				<span>Profilo variabile</span>
        			</div>
        		</td>
        	</tr>
        </tbody>
    </table>
    <div class="formGenerico visible-xs wrapper-sel">
        <select class="form-control selectProfilo" name="">
			<option value="">Profilo Fisso</option>
			<option value>Profilo Variabile</option>
        </select>
     </div>
	 <div class="headerContainerNoBootS">
        <div class="tableContainerNoBootS">
            <table id="ProfiloFis" cellspacing="0" cellpadding="0" border="0" class="table-tipoprofilo">
            	<thead>
	            	<tr>
						<th colspan="2" class="left">Commissioni mese precedente</th>
						<th>da 0<br>a 500 &euro;</th>
						<th>da 500<br>a 1000 &euro;</th>
						<th>da 1000<br>a 1500 &euro;</th>
						<th>da 1500<br>a 2000 &euro;</th>
						<th>oltre i 2000 &euro;</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2" rowspan="5" class="left"><strong>Livello</strong></td>
						<td class="bgCosti color1" rowspan="5"><span class="circle">1</span></td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="4" class="bgCosti color2"><span class="circle">2</span></td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="3" class="bgCosti color3"><span class="circle">3</span></td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="2" class="bgCosti color4"><span class="circle">4</span></td>
						<td class="empty">&nbsp;</td>
					</tr>
					<tr>
						<td class="bgCosti color5"><span class="circle">5</span></td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow1" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Azioni Italia, Azioni Europa*,
						Obbligazioni ETF e SEDEX</strong></td>
						<td class="bgCosti color1">12 &euro;</td>
						<td class="bgCosti color2">8 &euro;</td>
						<td class="bgCosti color3">6 &euro;</td>
						<td class="bgCosti color4">4 &euro;</td>
						<td class="bgCosti color5">2,75 &euro;</td>
					</tr>
					<tr id="collapserow1" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p>
							<strong>Azionario Italia</strong> (MTA - TAH, AIM, ETF, PLUS, azionario Euro TLX)<br>
							<strong>Azionario Europa*</strong> (Germania Xetra, Euronext Francia - Olanda - Belgio, Portogallo, Ibex Spagna)<br><strong>Obbligazionario</strong> (EUROTLX, MOT, ExtraMOT, Hi - MTF, Akros IS, Obbligazioni OTC)<br>
							<strong>Certificati e CW</strong> (Sedex)
						</p>
						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow2" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Azioni USA</strong></td>
						<td class="bgCosti color1">15,9 &#36;</td>
						<td class="bgCosti color2">12,9 &#36;</td>
						<td class="bgCosti color3">9,9 &#36;</td>
						<td class="bgCosti color4">6,9 &#36;</td>
						<td class="bgCosti color5">6,9 &#36;</td>
					</tr>
					<tr id="collapserow2" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p>Nasdaq, Nyse</p>
						</td>
					</tr>
					<tr>	
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow3" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Azioni Londra</strong></td>
						<td class="bgCosti color1">12,5 &pound;</td>
						<td class="bgCosti color2">12,5 &pound;</td>
						<td class="bgCosti color3">10 &pound;</td>
						<td class="bgCosti color4">10 &pound;</td>
						<td class="bgCosti color5">7,5 &pound;</td>
					</tr>
					<tr id="collapserow3" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p>London Stock Exchange</p>
						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow4" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Derivati A</strong></td>
						<td class="bgCosti color1">9 &euro;</td>
						<td class="bgCosti color2">5,9 &euro;</td>
						<td class="bgCosti color3">5,9 &euro;</td>
						<td class="bgCosti color4">3 &euro;</td>
						<td class="bgCosti color5">3 &euro;</td>
					</tr>
					<tr id="collapserow4" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Future)<br>
							<strong>EUREX</strong> (Dax Future, Bund, Bobl ,Schatz, Buxl, BTP Long - Short -<br>Mid Term Futures, OAT Futures)<br>
							<strong>CME</strong> (Nikkei 225 Dollar based, Energy Futures,<br>5/10/30 Year Treasury Futures, Agricultural Futures (1), Metal Futures)<br>
							<strong>eCBOT</strong> (Metal Futures)<br>
							<strong>LIFFE</strong> (FTSE 100 Index Futures, Long Gilt Futures)<br><br>
						 	(1) Per gli strumenti Agricultural Futures &egrave; prevista una commissione minima pari a 5,90 Euro per lotto eseguito.</p>
						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow5" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Derivati B</strong></td>
						<td class="bgCosti color1">5,9 &euro;</td>
						<td class="bgCosti color2">3,9 &euro;</td>
						<td class="bgCosti color3">3,9 &euro;</td>
						<td class="bgCosti color4">3 &euro;</td>
						<td class="bgCosti color5">3 &euro;</td>
					</tr>
					<tr id="collapserow5" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Options, Opzioni su Azioni)<br>
						<strong>EUREX</strong> (DJ Eurostoxx 50 Futures, DjStoxx50, DJSettoriali, DJTitan30, Option Dax -  Option Dj, EuroStoxx 50 - Bund - Bobl - Schatz)<br>
						<strong>CME</strong> ( Eurodollaro 3 mesi, Futures, E-mini nasdaq100 - E mini S&amp;P500 Futures, Mini Dow Jones Futures, E-MiniS&amp;P MID 400, E-MiniS&amp;P SMCAP 600, Euro/Dollaro FX � E-mini, Euro/Dollaro FX Futures-Futures su Cambi:British Pound, Canadian Dollar, Australian Dollar, Swiss Franc)<br>
						<strong>LIFFE</strong> (AC40 Futures, AEX Futures)</p>

						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow6" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Derivati C</strong></td>
						<td class="bgCosti color1">3,9 &euro;</td>
						<td class="bgCosti color2">1,9 &euro;</td>
						<td class="bgCosti color3">1,9 &euro;</td>
						<td class="bgCosti color4">1,9 &euro;</td>
						<td class="bgCosti color5">1,9 &euro;</td>
					</tr>
					<tr id="collapserow6" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p><strong>IDEM</strong> (MiniFTSE MIB Future, MiniFTSE 100 Future, Stock Future)</p></p></td>
					</tr>
				</tbody>
            </table>
            <table id="ProfiloVar" cellspacing="0" cellpadding="0" border="0" class="table-tipoprofilo" style="display:none">
            	<thead>
	            	<tr>
						<th colspan="2" class="left">Commissioni mese precedente</th>
						<th>da 0<br>a 500 &euro;</th>
						<th>da 500<br>a 1000 &euro;</th>
						<th>da 1000<br>a 1500 &euro;</th>
						<th>da 1500<br>a 2000 &euro;</th>
						<th>oltre i 2000 &euro;</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2" rowspan="5" class="left"><strong>Livello</strong></td>
						<td class="bgCosti color1" rowspan="5"><span class="circle">1</span></td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="4" class="bgCosti color2"><span class="circle">2</span></td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="3" class="bgCosti color3"><span class="circle">3</span></td>
						<td class="empty">&nbsp;</td>
						<td class="empty">&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="2" class="bgCosti color4"><span class="circle">4</span></td>
						<td class="empty">&nbsp;</td>
					</tr>
					<tr>
						<td class="bgCosti color5"><span class="circle">5</span></td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow1b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Azioni Italia, Azioni Europa*,
						Obbligazioni ETF e SEDEX</strong></td>
						<td class="bgCosti color1">0,19%<br><span class="fontMin">Min 2,75 €<br>Max 18,9 &euro;</td>
						<td class="bgCosti color2">8 &euro;</td>
						<td class="bgCosti color3">6 &euro;</td>
						<td class="bgCosti color4">4 &euro;</td>
						<td class="bgCosti color5">2,75 &euro;</td>
					</tr>
					<tr id="collapserow1b" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p>
							<strong>Azionario Italia</strong> (MTA - TAH, AIM, ETF, PLUS, azionario Euro TLX)<br>
							<strong>Azionario Europa*</strong> (Germania Xetra, Euronext Francia - Olanda - Belgio, Portogallo, Ibex Spagna)<br><strong>Obbligazionario</strong> (EUROTLX, MOT, ExtraMOT, Hi - MTF, Akros IS, Obbligazioni OTC)<br>
							<strong>Certificati e CW</strong> (Sedex)
						</p>
						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow2b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Azioni USA</strong></td>
						<td class="bgCosti color1">15,9 &#36;</td>
						<td class="bgCosti color2">12,9 &#36;</td>
						<td class="bgCosti color3">9,9 &#36;</td>
						<td class="bgCosti color4">6,9 &#36;</td>
						<td class="bgCosti color5">6,9 &#36;</td>
					</tr>
					<tr id="collapserow2b" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p>Nasdaq, Nyse</p>
						</td>
					</tr>
					<tr>	
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow3b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Azioni Londra</strong></td>
						<td class="bgCosti color1">12,5 &pound;</td>
						<td class="bgCosti color2">12,5 &pound;</td>
						<td class="bgCosti color3">10 &pound;</td>
						<td class="bgCosti color4">10 &pound;</td>
						<td class="bgCosti color5">7,5 &pound;</td>
					</tr>
					<tr id="collapserow3b" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p>London Stock Exchange</p>
						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow4b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Derivati A</strong></td>
						<td class="bgCosti color1">9 &euro;</td>
						<td class="bgCosti color2">5,9 &euro;</td>
						<td class="bgCosti color3">5,9 &euro;</td>
						<td class="bgCosti color4">3 &euro;</td>
						<td class="bgCosti color5">3 &euro;</td>
					</tr>
					<tr id="collapserow4b" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Future)<br>
							<strong>EUREX</strong> (Dax Future, Bund, Bobl ,Schatz, Buxl, BTP Long - Short -<br>Mid Term Futures, OAT Futures)<br>
							<strong>CME</strong> (Nikkei 225 Dollar based, Energy Futures,<br>5/10/30 Year Treasury Futures, Agricultural Futures (1), Metal Futures)<br>
							<strong>eCBOT</strong> (Metal Futures)<br>
							<strong>LIFFE</strong> (FTSE 100 Index Futures, Long Gilt Futures)<br><br>
							(1) Per gli strumenti Agricultural Futures &egrave; prevista una commissione minima pari a 5,90 Euro per lotto eseguito.</p>
						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow5b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Derivati B</strong></td>
						<td class="bgCosti color1">5,9 &euro;</td>
						<td class="bgCosti color2">3,9 &euro;</td>
						<td class="bgCosti color3">3,9 &euro;</td>
						<td class="bgCosti color4">3 &euro;</td>
						<td class="bgCosti color5">3 &euro;</td>
					</tr>
					<tr id="collapserow5b" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Options, Opzioni su Azioni)<br>
						<strong>EUREX</strong> (DJ Eurostoxx 50 Futures, DjStoxx50, DJSettoriali, DJTitan30, Option Dax -  Option Dj, EuroStoxx 50 - Bund - Bobl - Schatz)<br>
						<strong>CME</strong> ( Eurodollaro 3 mesi, Futures, E-mini nasdaq100 - E mini S&amp;P500 Futures, Mini Dow Jones Futures, E-MiniS&amp;P MID 400, E-MiniS&amp;P SMCAP 600, Euro/Dollaro FX � E-mini, Euro/Dollaro FX Futures-Futures su Cambi:British Pound, Canadian Dollar, Australian Dollar, Swiss Franc)<br>
						<strong>LIFFE</strong> (AC40 Futures, AEX Futures)</p>

						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserow6b" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Derivati C</strong></td>
						<td class="bgCosti color1">3,9 &euro;</td>
						<td class="bgCosti color2">1,9 &euro;</td>
						<td class="bgCosti color3">1,9 &euro;</td>
						<td class="bgCosti color4">1,9 &euro;</td>
						<td class="bgCosti color5">1,9 &euro;</td>
					</tr>
					<tr id="collapserow6b" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p><strong>IDEM</strong> (MiniFTSE MIB Future, MiniFTSE 100 Future, Stock Future)</p></p></td>
					</tr>
				</tbody>
            </table>
        </div>
     </div>
</section>
<section>
	<h4>Stato attuale - novembre 2016</h4>
	<table cellspacing="0" cellpadding="0" border="0" class="table-sceltaprofilo wrapper-sel">
        <tbody>
        	<tr>
        		<td colspan="3" class="bgAtt">
        			<div>
        				<span class="ico-fix"></span>
        				<span>Profilo fisso</span>
        			</div>
				</td>
			</tr>
			<tr class="hidden-xs">
        		<td class="bgAtt ch-profilo" data-col-off="1">Deroga fino al xx/xx/xxxx</td>
        		<td class="ch-profilo" data-col-off="2">Deroga2 fino al xx/xx/xxxx</td>
        		<td class="ch-profilo" data-col-off="3">Deroga3 fino al xx/xx/xxxx</td>
			</tr>
        </tbody>
    </table>
    <div class="formGenerico visible-xs wrapper-sel">
        <select class="form-control selectProfilo" name="">
			<option value="" data-col-off="1">Deroga fino al xx/xx/xxxx</option>
			<option value="" data-col-off="2">Deroga2 fino al xx/xx/xxxx</option>
			<option value="" data-col-off="3">Deroga3 fino al xx/xx/xxxx</option>
        </select>
     </div>
	<div class="headerContainerNoBootS">
        <div class="tableContainerNoBootS">
        	<table id="Profilo1" cellspacing="0" cellpadding="0" border="0" class="table-tipoprofilo">
            	<thead>
	            	<tr>
						<th colspan="2" class="left">Commissioni mese precedente</th>
						<th>da 0<br>a 500 &euro;</th>
						<th class="off">da 500<br>a 1000 &euro;</th>
						<th class="off">da 1000<br>a 1500 &euro;</th>
						<th class="off">da 1500<br>a 2000 &euro;</th>
						<th class="off">oltre i 2000 &euro;</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2" rowspan="5" class="left"><strong>Livello</strong></td>
						<td class="bgCosti color1" rowspan="5"><span class="circle">1</span></td>
						<td class="empty color2 off">&nbsp;</td>
						<td class="empty color3 off">&nbsp;</td>
						<td class="empty color4 off">&nbsp;</td>
						<td class="empty color5 off">&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="4" class="bgCosti color2 off"><span class="circle">2</span></td>
						<td class="empty color3 off">&nbsp;</td>
						<td class="empty color4 off">&nbsp;</td>
						<td class="empty color5 off">&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="3" class="bgCosti color3 off"><span class="circle">3</span></td>
						<td class="empty color4 off">&nbsp;</td>
						<td class="empty color5 off">&nbsp;</td>
					</tr>
					<tr>
						<td rowspan="2" class="bgCosti color4 off"><span class="circle">4</span></td>
						<td class="empty color5 off">&nbsp;</td>
					</tr>
					<tr>
						<td class="bgCosti color5 off"><span class="circle">5</span></td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserowP1" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Azioni Italia, Azioni Europa*,
						Obbligazioni ETF e SEDEX</strong></td>
						<td class="bgCosti color1">0,19%<br><span class="fontMin">Min 2,75 €<br>Max 18,9 &euro;</td>
						<td class="bgCosti color2 off">8 &euro;</td>
						<td class="bgCosti color3 off">6 &euro;</td>
						<td class="bgCosti color4 off">4 &euro;</td>
						<td class="bgCosti color5 off">2,75 &euro;</td>
					</tr>
					<tr id="collapserowP1" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p>
							<strong>Azionario Italia</strong> (MTA - TAH, AIM, ETF, PLUS, azionario Euro TLX)<br>
							<strong>Azionario Europa*</strong> (Germania Xetra, Euronext Francia - Olanda - Belgio, Portogallo, Ibex Spagna)<br><strong>Obbligazionario</strong> (EUROTLX, MOT, ExtraMOT, Hi - MTF, Akros IS, Obbligazioni OTC)<br>
							<strong>Certificati e CW</strong> (Sedex)
						</p>
						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserowP2" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Azioni USA</strong></td>
						<td class="bgCosti color1">15,9 &#36;</td>
						<td class="bgCosti color2 off">12,9 &#36;</td>
						<td class="bgCosti color3 off">9,9 &#36;</td>
						<td class="bgCosti color4 off">6,9 &#36;</td>
						<td class="bgCosti color5 off">6,9 &#36;</td>
					</tr>
					<tr id="collapserowP2" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p>Nasdaq, Nyse</p>
						</td>
					</tr>
					<tr>	
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserowP3" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Azioni Londra</strong></td>
						<td class="bgCosti color1">12,5 &pound;</td>
						<td class="bgCosti color2 off">12,5 &pound;</td>
						<td class="bgCosti color3 off">10 &pound;</td>
						<td class="bgCosti color4 off">10 &pound;</td>
						<td class="bgCosti color5 off">7,5 &pound;</td>
					</tr>
					<tr id="collapserowP3" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p>London Stock Exchange</p>
						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserowP4" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Derivati A</strong></td>
						<td class="bgCosti color1">9 &euro;</td>
						<td class="bgCosti color2 off">5,9 &euro;</td>
						<td class="bgCosti color3 off">5,9 &euro;</td>
						<td class="bgCosti color4 off">3 &euro;</td>
						<td class="bgCosti color5 off">3 &euro;</td>
					</tr>
					<tr id="collapserowP4" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Future)<br>
						<strong>EUREX</strong> (Dax Future, Bund, Bobl ,Schatz, Buxl, BTP Long - Short -<br>Mid Term Futures, OAT Futures)<br>
						<strong>CME</strong> (Nikkei 225 Dollar based, Energy Futures,<br>5/10/30 Year Treasury Futures, Agricultural Futures (1), Metal Futures)<br>
						<strong>eCBOT</strong> (Metal Futures)<br>
						<strong>LIFFE</strong> (FTSE 100 Index Futures, Long Gilt Futures)<br><br>
						(1) Per gli strumenti Agricultural Futures &egrave; prevista una commissione minima pari a 5,90 Euro per lotto eseguito.</p>
						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserowP5" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Derivati B</strong></td>
						<td class="bgCosti color1">5,9 &euro;</td>
						<td class="bgCosti color2 off">3,9 &euro;</td>
						<td class="bgCosti color3 off">3,9 &euro;</td>
						<td class="bgCosti color4 off">3 &euro;</td>
						<td class="bgCosti color5 off">3 &euro;</td>
					</tr>
					<tr id="collapserowP5" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p><strong>IDEM</strong> (FTSE MIB Options, Opzioni su Azioni)<br>
						<strong>EUREX</strong> (DJ Eurostoxx 50 Futures, DjStoxx50, DJSettoriali, DJTitan30, Option Dax -  Option Dj, EuroStoxx 50 - Bund - Bobl - Schatz)<br>
						<strong>CME</strong> ( Eurodollaro 3 mesi, Futures, E-mini nasdaq100 - E mini S&amp;P500 Futures, Mini Dow Jones Futures, E-MiniS&amp;P MID 400, E-MiniS&amp;P SMCAP 600, Euro/Dollaro FX � E-mini, Euro/Dollaro FX Futures-Futures su Cambi:British Pound, Canadian Dollar, Australian Dollar, Swiss Franc)<br>
						<strong>LIFFE</strong> (AC40 Futures, AEX Futures)</p>

						</td>
					</tr>
					<tr>
						<td class="td-accordion"><a data-toggle="collapse" href="#collapserowP6" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
						<td class="no-border-left"><strong>Derivati C</strong></td>
						<td class="bgCosti color1">3,9 &euro;</td>
						<td class="bgCosti color2 off">1,9 &euro;</td>
						<td class="bgCosti color3 off">1,9 &euro;</td>
						<td class="bgCosti color4 off">1,9 &euro;</td>
						<td class="bgCosti color5 off">1,9 &euro;</td>
					</tr>
					<tr id="collapserowP6" class="collapse" aria-expanded="true" style="">
						<td colspan="7"><p><strong>IDEM</strong> (MiniFTSE MIB Future, MiniFTSE 100 Future, Stock Future)</p></p></td>
					</tr>
					<tr>
						<td colspan="7"><p class="note">* Su ciascun ordine esguito sui mercati azionari europei sarà applicata una maggiorazione di 9 euro per spese e diritti fissi.</p></td>
					</tr>
				</tbody>
            </table>
        </div>
    </div>
</section>
<section>
	<div class="headerContainerNoBootS">
        <div class="tableContainerNoBootS">
        	<h4>Prossimo mese - novembre 2016</h4>
        	 <div class="row noMargin commissionFutureWrapper">
	        	<div class="col-xs-5 pad_0">
		        	 <table cellspacing="0" cellpadding="0" border="0" class="table-tipoprofilo commissionFuture">
		        	 	<thead>
			            	<tr>
								<th colspan="2">NOVEMBRE 2016</th>
							</tr>
							<tr>
								<th colspan="2">Profilo in uso</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="bg-color-heading">
									<table cellspacing="0" cellpadding="0" border="0">
										<tr>
											<td><strong>Commissioni mese precedente</strong></td>
											<td>da 0 <br>a 500&euro;</td>
										</tr>
										<tr>
											<td rowspan="5"><strong>Livello</strong></td>
											<td class="empty">&nbsp;</td>
										</tr>
										<tr>
											<td class="bgCosti color2"><span class="circle">2</span></td>
										</tr>
										<tr>
											<td class="empty bgCosti color2">&nbsp;</td>
										</tr>
										<tr>
											<td class="empty bgCosti color2">&nbsp;</td>
										</tr>
										<tr>
											<td class="empty bgCosti color2">&nbsp;</td>
										</tr>
										<tr>
											<td><strong>Azionario - ITALIA (MTA, TAH, ETFPlus, Azioni EuroTLX)</strong></td>
											<td class="bgCosti color2">0,190&#37;</td>
										</tr>
										<tr>
											<td><strong>Azionario - AMERICA</strong></td>
											<td class="bgCosti color2">15,90 &#36;</td>
										</tr>
										<tr>
											<td><strong>Azionario - EUROPA (*)</strong></td>
											<td class="bgCosti color2">0,190&#37;</td>
										</tr>
										<tr>
											<td><strong>Azionario - REGNO UNITO</strong></td>
											<td class="bgCosti color2">12,50&pound;</td>
										</tr>
										<tr>
											<td><strong>Derivati - Gruppo A</strong></td>
											<td class="bgCosti color2">9 &euro;</td>
										</tr>
										<tr>
											<td><strong>Derivati - Gruppo B</strong></td>
											<td class="bgCosti color2">5,90 &euro;</td>
										</tr>
										
									</table>
								</td>
							</tr>
							
						</tbody>
		        	 </table>
		        </div>
		        <div class="col-xs-1 pad_0">
		        </div>
		        <div class="col-xs-6 pad_0">
		        	 <table cellspacing="0" cellpadding="0" border="0" class="table-tipoprofilo commissionFuture"> 
		        	 	<thead>
			            	<tr>
								<th colspan="3">GENNAIO 2017</th>
							</tr>
							<tr>
								<th>Profilo fututo</th>
								<th>Profilo fisso</th>
								<th>Profilo variabile</th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td width="33%" class="bg-color-heading">
									<table width="100%" class="" cellspacing="0" cellpadding="0" border="0">
										<tbody>
											<tr>
												<td class="center">oltre<br>i 2000 &euro;</td>
											</tr>
											<tr><td class="empty">&nbsp;</td></tr>
											<tr><td class="empty">&nbsp;</td></tr>
											<tr><td class="empty">&nbsp;</td></tr>
											<tr><td class="empty">&nbsp;</td></tr>
											<tr>
												<td class="bgCosti color5"><span class="circle">5</span></td>
											</tr>	
											<tr>
												<td class="bgCosti color5">2,75 &euro;<br>&nbsp;</td>
											</tr>	
											<tr>
												<td class="bgCosti color5">6,9 $</td>
											</tr>	
											<tr>
												<td class="bgCosti color5">7,5 £</td>
											</tr>	
											<tr>
												<td class="bgCosti color5">3 €</td>
											</tr>	
											<tr>
												<td class="bgCosti color5">3 €</td>
											</tr>	
											<tr>
												<td class="bgCosti color5">1,9 €</td>
											</tr>
											<tr><td class="align-center">
												<div class="form-group btnWrapper noMarginBottom">
												<div><a type="button" class="btn btn-primary btn-small" id="">attiva</a></div></td>
											</tr>
										</tbody>
									</table>
								</td>
								<td width="34%" class="bg-color-heading">
									<table width="100%" class="" cellspacing="0" cellpadding="0" border="0">
										<tbody>
											<tr>
												<td class="center">da 2000 a 3000 &euro;</td>
											</tr>
											<tr><td class="empty">&nbsp;</td></tr>
											<tr><td class="empty">&nbsp;</td></tr>
											<tr><td class="bgCosti color3"><span class="circle">3</span></td></tr>
											<tr><td class="empty bgCosti color3">&nbsp;</td></tr>
											<tr><td class="empty bgCosti color3">&nbsp;</td></tr>		
											<tr>
												<td class="bgCosti color3">2,75 &euro;<br>&nbsp;</td>
											</tr>	
											<tr>
												<td class="bgCosti color3">7,5 £</td>
											</tr>	
											<tr>
												<td class="bgCosti color3">7,5 £</td>
											</tr>	
											<tr>
												<td class="bgCosti color3">3 €</td>
											</tr>	
											<tr>
												<td class="bgCosti color3">3 €</td>
											</tr>	
											<tr>
												<td class="bgCosti color3">1,9 €</td>
											</tr>
											<tr>
												<td class="align-center"><i class="icon icon-alert_ok icon-2x stato-ok"></i>attivato</td>
											</tr>
										</tbody>
									</table>
								</td>
								<td width="33%" class="bg-color-heading">
									<table width="100%" class="" cellspacing="0" cellpadding="0" border="0">
										<tbody>
											<tr>
												<td class="center">da 2000 a 3000 &euro;</td>
											</tr>
											<tr><td class="empty">&nbsp;</td></tr>
											<tr><td class="bgCosti color2"><span class="circle">2</span></td></tr>
											<tr><td class="empty bgCosti color2">&nbsp;</td></tr>
											<tr><td class="empty bgCosti color2">&nbsp;</td></tr>
											<tr><td class="empty bgCosti color2">&nbsp;</td></tr>		
											<tr>
												<td class="bgCosti color2">2,75 &euro;<br>&nbsp;</td>
											</tr>	
											<tr>
												<td class="bgCosti color2">7,5 £</td>
											</tr>	
											<tr>
												<td class="bgCosti color2">7,5 £</td>
											</tr>	
											<tr>
												<td class="bgCosti color2">3 €</td>
											</tr>	
											<tr>
												<td class="bgCosti color2">3 €</td>
											</tr>	
											<tr>
												<td class="bgCosti color2">1,9 €</td>
											</tr>
											<tr><td class="align-center">
												<div class="form-group btnWrapper noMarginBottom">
												<div><a type="button" class="btn btn-primary btn-small" id="">attiva</a></div></td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							
							
						</tbody>
		        	 </table>
		        </div>
	        </div>
        </div>
    </div>
</section>
<script>
/*gestione sia mobile che non della selezione tabelle*/
$('.selectProfilo').bind('change',function(event,index){
	activeteTable(this,event);
})
$('.ch-profilo').bind('click',function(event,index){
	activeteTable(this,event);
})
function activeteTable(el) {
	var parentTable = $(el).closest('.wrapper-sel').nextAll('.headerContainerNoBootS').eq(0).find('.table-tipoprofilo');
	if(parentTable.length>1)
		{
			parentTable.hide();
			if(el.nodeName=='TD')
			{
				$(el).closest('tr').find('.ch-profilo').removeClass('bgAtt');
				$(el).addClass('bgAtt');
				$(el).closest('table').next('.wrapper-sel').find('.selectProfilo').prop('selectedIndex', $(el).index());
				parentTable.eq($(el).index()).show();
			}
			else {
				$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').removeClass('bgAtt');
				$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').eq(el.selectedIndex).addClass('bgAtt');
				parentTable.eq(el.selectedIndex).show();
			}
		}
	else 
		{
			//assegnare la classe off alle colonne non selezionate nel caso di tabella con TAB DEROGA...a solo titolo esemplificativo:
			parentTable.find('td.bgCosti,th,td.empty').addClass('off');
			parentTable.find('th:first-child').removeClass('off');
			if(el.nodeName=='TD')
			{
				$(el).closest('tr').find('.ch-profilo').removeClass('bgAtt');
				$(el).addClass('bgAtt');
				parentTable.find('th').eq($(el).attr('data-col-off')).removeClass('off');
				parentTable.find('td.color' + $(el).attr('data-col-off')).removeClass('off');
				$(el).closest('table').next('.wrapper-sel').find('.selectProfilo').prop('selectedIndex', $(el).index());
			}
			else
			{
				$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').removeClass('bgAtt');
				$(el).closest('.wrapper-sel').prev('table').find('.ch-profilo').eq(el.selectedIndex).addClass('bgAtt');
				parentTable.find('th').eq($(el).find('option:selected').attr('data-col-off')).removeClass('off');
				parentTable.find('td.color' + $(el).find('option:selected').attr('data-col-off')).removeClass('off');
			}
		}
	}

</script>