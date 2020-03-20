<script type="text/javascript">
/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
addEvent(window, 'load', function() {
    createSelectRapp('sceltaSottoRapporto', 'sceltaSottoRapportoVal', sceltaSottoRapportoFunc);
});

function sceltaSottoRapportoFunc(option) {
    // Testo selezione: option.text
    // Valore selezione: option.value
    // alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>
<h2>Servizio Tax Refund</h2>
<section>
	<h3>Cos'&egrave; il servizio di Tax Refund?</h3>
	<p>I dividendi e le cedole, distribuiti da societ&egrave; o enti non residenti sul territorio nazionale, sono soggetti a ritenute fiscali nel
	Paese di residenza ("ritenuta paese"). Sull'ammontare netto è poi applicata, nei casi previsti, la "ritenuta Italia".</p>
	<p>Il servizio <strong>Tax Refund</strong> permette il <strong>recupero</strong> della maggiore "ritenuta paese" sui dividendi o cedole esteri, applicata rispetto all'aliquota convenzionale prevista dai trattati internazionali contro le doppie imposizioni stipulate tra l'Italia e gli altri paesi.</p>
	<ul> 
		<li>Sui <strong>dividendi</strong> esteri l'<strong>aliquota</strong> prevista sulla ritenuta paese &egrave; pari al <strong>15</strong>%. Quindi, in caso di dividendi esteri soggetti, per esempio, a ritenuta paese del 25%, il rimborso spettante è pari al 10% del dividendo lordo.<br>Rimane inteso che per i dividendi esteri con aliquota inferiore o pari al 15% il rimborso spettante &egrave; <strong>zero</strong>.</li>
		<li>Per le <strong>cedole estere</strong>, invece, &egrave; possibile richiedere il <strong>recupero totale</strong> della "ritenuta paese".</li>
	</ul>
	<p>Il servizio di Tax Refund <strong>non</strong> è <strong>applicato</strong>
	per l'<strong>America</strong>.</p>
</section>
<section>
	<h3>Costi e condizioni</h3>
	Il costo del servizio, per ogni richiesta di rimborso, &egrave; di <strong>€ 130,00</strong> comprensivo dei costi banca.
	<ul>
		<li>La banca addebita le relative spese una volta ricevuta tutta la documentazione necessaria per l'inoltro della richiesta alla
		Depositaria Estera. <strong>Le spese vengono addebitate a prescindere
		dall'accoglimento della richiesta di rimborso.</strong></li>
		<li>Il servizio è valido sulle ritenute pagate dal <strong>1&deg; maggio 2012</strong>.
		E' possibile effettuare richieste di rimborso su ritenute pagate fino ai quattro anni precedenti.</li>
		<li>Se la richiesta di refund è effettuata entro 15 giorni dalla
		data di "stacco" è possibile accedere ad un processo di rimborso
		con tempistiche più rapide.</li>
	</ul>
	<p><strong>Ricorda:</strong> prima di inoltrare richiesta di rimborso, verifica che i
	<strong>costi amministrativi non siano superiori all'imposta netta recuperabile</strong>.</p>
</section>
<section>
	<h3>Come richiedere il servizio</h3>
	<p>Per richiedere il rimborso compila i campi che trovi di seguito.<br>
	Se sul titolo in tuo possesso hai diritto al rimborso, all'indirizzo di posta <i>ddmw06@yahoo.it</i>  ti spediremo l'elenco dei
		documenti necessari per inoltrare la richiesta.</p>
		<form class="formGenerico borderFormRounded output" role="form" id="form02">
			<div class="form-group">
				<div class="row">
					<div class="col-xs-6 col-sm-6">
		                <label class="control-label">Selettore rapporto (usato nel trading)</label>
		                <div id="sceltaSottoRapporto" class="selectRapp">
		                    <input id="sceltaSottoRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa" />
		                    <a href="javascript:;" class="inputOption inputSx form-control">
		                        <span class="inputDx">
									<span class="input">
										xxx/aaaaaa
									</span>
		                        </span>
		                    </a>
		                    <div class="selector" style="display: none;">
		                        <span class="group">
									<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
									<strong>xxx/aaaaaa</strong><br/>
									Nome Nome Cognome Cognome1</a>
								</span>
		                        <span class="group">
									<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
									<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
									Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
									<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">
									<strong>xxx/bbbbbb/0</strong><br/>
									Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
									<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
									<strong>xxx/bbbbbb/1</strong><br/>
									Nome Nome Cognome Cognome1</a>
									<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions">
									<strong>xxx/bbbbbb/2</strong><br/>
									Nome Nome Cognome Cognome2</a>
								</span>
		                        <span class="group">
									<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc</strong><br/>
										Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
										Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
										Nome Nome Cognome Cognome5</a>
									<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc/0</strong><br/>
										Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
										Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
										Nome Nome Cognome Cognome5</a>
									<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc/1</strong><br/>
										Nome Nome Cognome Cognome1</a>
									<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc/2</strong><br/>
										Nome Nome Cognome Cognome2</a>
									<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc/3</strong><br/>
										Nome Nome Cognome Cognome3</a>
									<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc/4</strong><br/>
										Nome Nome Cognome Cognome4</a>
									<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc/5</strong><br/>
										Nome Nome Cognome Cognome5</a>
								</span>
		                    </div>
		                </div>
	           	 	</div>
	        	</div>
			</div>
			<div class="form-group">
        		<div class="row">
            		<div class="col-sm-6">
                		<label class="control-label">Titolo</label>
                		<input type="text" class="clear-x form-control">
                	</div>
                	<div class="col-sm-6">
                		<label class="control-label">Tipo di accredito</label>
                		<select class="form-control">
                			<option>lorm ipsum</option>
                			<option>lorm ipsum</option>
                			<option>lorm ipsum</option>
                		</select>
                	</div>
                </div>
            </div>
            <div class="form-group">
        		<div class="row">
            		<div class="col-sm-6">
                		<label class="control-label">Data di accredito</label>
                		<input type="text" class="clear-x form-control" placeholder="gg/mm/aaaa">
                	</div>
                 </div>
            </div>
            <div class="form-group btnWrapper">
                <div class="btn-align-right">
                    <a type="button" class="btn btn-primary" id="">invia la richiesta</a>
                </div>
                <br class="clear">
            </div>
		</form>

</section>