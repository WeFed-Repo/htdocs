
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
	<div class="box-generico-border pad_bottom_20 pad_top_0">
		<h3>Nuova offerta pricing</h3>
		<div class="box-generico-text">
			<p>Dal <strong>08/09/2015</strong> &egrave; in arrivo la nuova offerta pricing! Scopri quale potrà essere il tuo <strong>nuovo profilo commissionale</strong> e i costi cliccando sul bottone a destra.</p>
		</div>
	</div>
	<p>In questa pagina &egrave; evidenziato il tuo <strong>attuale profilo commissionale</strong>. Per cambiare profilo, seleziona quello di tuo interesse.</p>
	<div class="headerContainerNoBootS">
        <div class="tableContainerNoBootS">
           <table cellspacing="0" cellpadding="0" border="0" id="" class="fixed no-border-topLeft" style="min-width:600px">
            	<tbody>
					<tr class="sceltaProfiloWrapper">
						<td width="25%" colspan="2" class="no-border-topLeft"></td>
						<td width="25%" colspan="2" class="selected center"><strong>Attuale profilo</strong></td>
						<td width="25%" colspan="2" class="no-border-topLeft"></td>
						<td width="25%"colspan="2" class="no-border-topLeft"></td>
					</tr>

					<tr class="heading">
						<td class="left" width="25%" colspan="2">Commissioni di negoziazione</td>
						<td class="left selected" width="25%" colspan="2">Special - Option B</td>
						<td class="indent pad_right_0"><input type="radio" name="sceltaProfilo" id="sceltaProfiloA"></td>
						<td class="left noBorderLeft" width="20%">
							 <label class="text" for="sceltaProfiloA">Profilo Fisso Repricing</label>
	          			</td>
	          			<td class="indent pad_right_0"><input type="radio" name="sceltaProfilo" id="sceltaProfiloB"></td>
						<td class="left noBorderLeft" width="20%"><label class="text" for="sceltaProfiloB">Profilo Variabile Repricing</label></td>
					</tr>
					<tr class="dispari">
						<td colspan="2" width="25%">ITALIA - Azionario Italia (EUR)<br>
							<p class="note">Commissioni generate nel mese</p>
						</td>
						<td class="selected indent"></td>
						<td class="selected noBorderLeft" width="20%"></td>
						<td class="indent"></td>
						<td class="noBorderLeft" width="20%"></td>
						<td class="indent"></td>
						<td class="noBorderLeft" width="20%"></td>
					</tr>
					<tr clalss="pari">
						<td class="indent"></td>
						<td class="noBorderLeft">0 - 500 &euro;</td>
						<td class="selected indent"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">500 - 1000 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">1000 - 1500 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">1500 - 2000 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">oltre 2000 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>
					



					<tr class="dispari">
						<td colspan="2" width="25%">ITALIA - EuroTLX, Hi-MTF  <br>
							<p class="note">Commissioni generate nel mese</p>
						</td>
						<td class="selected indent"></td>
						<td class="selected noBorderLeft" width="20%"></td>
						<td class="indent"></td>
						<td class="noBorderLeft" width="20%"></td>
						<td class="indent"></td>
						<td class="noBorderLeft" width="20%"></td>
					</tr>
					<tr clalss="pari">
						<td class="indent"></td>
						<td class="noBorderLeft">0 - 500 &euro;</td>
						<td class="selected indent"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">500 - 1000 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">1000 - 1500 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">1500 - 2000 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">oltre 2000 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">5 &euro;</td>
					</tr>

					


					<tr class="dispari">
						<td colspan="2" width="25%">ITALIA - Obbligazionario Akros IS<br>
							<p class="note">Commissioni generate nel mese</p>
						</td>
						<td class="selected indent"></td>
						<td class="selected noBorderLeft" width="20%"></td>
						<td class="indent"></td>
						<td class="noBorderLeft" width="20%"></td>
						<td class="indent"></td>
						<td class="noBorderLeft" width="20%"></td>
					</tr>
					<tr clalss="pari">
						<td class="indent"></td>
						<td class="noBorderLeft">0 - 500 &euro;</td>
						<td class="selected indent"></td>
						<td class="selected noBorderLeft">12 &euro;</td>
						<td class="indent"></td>
						<td class="noBorderLeft">12 &euro;</td>
						<td class="indent"></td>
						<td class="noBorderLeft">12 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">500 - 1000 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">8 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">8 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">8 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">1000 - 1500 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">6 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">6 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">6 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">1500 - 2000 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">4 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">4 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">4 &euro;</td>
					</tr>
					<tr clalss="pari">
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">oltre 2000 &euro;</td>
						<td class="selected indent noBorderTop"></td>
						<td class="selected noBorderLeft">3 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">3 &euro;</td>
						<td class="indent noBorderTop"></td>
						<td class="noBorderLeft">3 &euro;</td>
					</tr>

					

					


				</tbody>
            </table>
        </div>
    </div>
	<div class="formGenerico borderFormRounded">
		<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Attiva il profilo</label>
				<span class="output">Dal primo del prossimo mese</span>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="btn-align-left marginTopSmall">
					<a type="button" class="btn btn-primary" id="">conferma modifica</a>
				</div>
			</div>
		</div>
	</div>
	
	</div>
	<p class="note">(1)	Costo/Indennizzo di 50 EUR per ogni esercizio, qualora il conto risulti incapiente di titoli e/o liquidità, salvo il caso in cui l'inadempimento non comporti ulteriori penali o spese di terzi che verranno addebitate al Cliente.</p>
	<p class="note">(2)	Per gli ordini di acquisto su azionario Regno Unito verrà applicata la Tassa di Borsa del 5 per mille sul controvalore dell'operazione.</p>

</section>
