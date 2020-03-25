<h2>Simulazione prestito</h2>


<section>
	<div class="row">
		<div class="col-sm-12">
			<h3>Prestito webank small</h3>
		</div>
	</div>
		
	<div class="row">
		<div class="col-sm-2">
			<img src="/wscmn/fe/img/placeholder_1-1.png" class="img-responsive">
		</div>
		<div class="col-sm-10">
			<p>
				Compila i campi sottostanti per calcolare la rata ipotetica del prestito prescelto e visualizzare in dettaglio il piano di ammortamento.
			</p>

			<a href="#1" class="btn-icon" data-toggle="modal" data-target="#layerSchedaProdotti">Scheda prodotto</a>
		</div>
	</div>
	</section>


<section>
<form class="formGenerico borderFormRounded output" role="form" id="form04">
	
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<label class="control-label">Finalità</label>
				<span class="output">Tutte le esigenze di spesa</span>
			</div>
		</div>
	</div>


	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<label class="control-label">Tasso nominale annuo</label>
				<span class="output">
					7,000%. <br/>
					Tasso fisso per tutta la durata del finanziamento.
				</span>
			</div>
		</div>
	</div>


	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<label class="control-label">Caratteristiche</label>
				<span class="output">
					Tipo tasso: fisso<br/>
					Importo finanziabile: min 500,00 euro, max 10.000,00 euro<br/>
					Durata: min 6 mesi, max 60 mesi. <br/>
					Periodicità rate: mensile<br/>
				</span>
			</div>
		</div>
	</div>

</form>
</section>





<section>
	


<div class="tithelp">
	<h4>Inserisci i dati</h4>
	<div class="flRight">
		<a href="#1" class="btn-icon" data-toggle="modal" data-target="#layerInformation">
			<i class="icon icon-help_filled icon-2x"></i>
		</a><br class="clear">
	</div>
	<br class="clear">
</div>
<form class="formGenerico borderFormRounded" role="form" id="form10">
	<div class="form-group">	
		<div class="row">
			<div class="col-sm-6">
                <label class="control-label" id="importo">Importo del prestito*</label>
                <div class="form-inline">
                    <div class="requiredField">
                        <div class="input-group" id="italyCurrency">
                            <div class="editable-input"><input maxlength="10" id="importoField" value="" type="number" name="importo" class="form-control clear-x"><span class="editable-clear-x" style="display: block;"><i class="icon icon-close icon-1x"></i></span></div>
                            <div class="input-group-addon">EUR</div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-sm-5 requiredField">
				<label class="control-label">Durata del prestito*</label>
				<input id="testo1" type="text"  class="form-control clear-x">
			</div>
			<div class="col-sm-1 requiredField" style="margin-top:25px">
				<strong style="margin-left: -15px;">Mesi</strong>
			</div>
		</div>
	</div>		

</form>
</section>


<section>
	
<div class="form-group btnWrapper">
	<div class="stepBtn">Step <strong> 1 </strong> di 2</div>
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_finanziamenti_simulazione_prestito_small_2.php&responsive=y&liv0=5&liv1=1&liv2=0&liv3=0">Calcola</a>
	</div>
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_prestito_che_fa_per_te.php&responsive=y&liv0=5&liv1=1&liv2=0&liv3=0">Catalogo</a>
	</div>
	<br class="clear">
</div>

<p class="note">
	* I campi contraddistinti da asterisco sono obbligatori
</p>
</section>


<!-- Overlayer FORM -->
<div class="modal fade" id="layerInformation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Simulazione del prestito</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
						<p>
							In questa pagina sono riportate le caratteristiche sintetiche del prodotto da te selezionato. 
						</p>

						<p>Per effettuare la <strong>Simulazione del Prestito</strong> occorre:</p>
						<ul>
							<li>
								inserire l'Importo del prestito da simulare
							</li>
							<li>	
								inserire la  durata  dell'ipotetico rimborso
							</li>	
						</ul>
							Cliccando sul bottone "calcola" otterrai il numero e l'importo delle rate del prestito simulato.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Overlayer FORM -->



<!-- Overlayer Scheda prodotti -->
<div class="modal fade" id="layerSchedaProdotti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Simulazione del prestito</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
					
<!-- PAGINA-->
	<section>
	<div class="row">
		<div class="col-sm-12">
			<h3>Prestito webank small</h3>
		</div>
	</div>
		
	<div class="row">
		<div class="col-sm-2">
			<img src="/wscmn/fe/img/placeholder_1-1.png" class="img-responsive">
		</div>
		<div class="col-sm-10">
			<p>
				Per le tue esigenze di spesa, la soluzione è Prestito Webank small. Puoi chiedere sino a 10.000€ da spendere come vuoi!
			</p>
		</div>
	</div>
	</section>

	<section>
		<h4>Scheda prodotto</h4>
		<table>
		<tr class="dispari">
			<td>
				<strong>Clienti</strong>
			</td>
			<td>
				Persone fisiche, residenti in Italia da almeno 3 anni.<br/>
				Età dei richiedenti: per richiedere un prestito Webank è necessario essere maggiorenni.<br/>
				Il finanziamento deve concludersi prima che i richiedenti compiano il 70° anno di età.<br/>
			</td>
		</tr>
		<tr class="pari">
			<td>
				<strong>Finalit&agrave;</strong>
			</td>
			<td>
				Tutte le esigenze di spesa
			</td>
		</tr>
		<tr class="dispari">
			<td>
				<strong>Tasso</strong>
			</td>
			<td>
				<strong>7,000%.</strong> <br/><br/>

				Tasso fisso per tutta la durata del finanziamento. <br/>
				Riduzione del 10% sul tasso con accredito dello stipendio in conto corrente.<br/>
			</td>
		</tr>
		<tr class="pari">
			<td>
				<strong>Caratteristiche</strong>
			</td>
			<td>
				Tipo tasso: <strong>fisso</strong><br/>
				Importo finanziabile: <strong>min 500 euro, max 10.000 euro</strong> <br/>
				Durata: <strong>min 6 mesi , max 60 mesi.</strong> <br/>
				Periodicità rate: <strong>mensile</strong> <br/>
			</td>
		</tr>
		<tr class="dispari">
			<td>
				<strong>Requisiti di accesso</strong>	
			</td>
			<td>		
				Per richiedere Prestito Webank è necessario:<br/>
					<ul>
						<li>essere titolari di un Conto Webank attivo da almeno <strong>6 mesi;</strong></li>
						<li>disporre di un reddito continuativo certificato (da lavoro dipendente o altro)</li>
					</ul>
					Per i dipendenti a tempo indeterminato con accredito dello stipendio sul Conto Webank, è sufficiente essere titolare di un Conto Webank da almeno 3 mesi.
			</td>
		</tr>
		<tr class="pari">
			<td>
				<strong>Spese accessorie</strong>
			</td>
			<td>
					Spese di istruttoria pratica: <strong>gratuite</strong><br/> 
					Spese di addebito rata in conto corrente: <strong>gratuite</strong><br/> 
					Spese di estinzione anticipata: <strong>gratuite</strong><br/>
			</td>
		</tr>
		<tr class="dispari">
			<td>
				<strong>Documentazione richiesta</strong>
			</td>
			<td>
				Documentazione relativa al reddito dei richiedenti: copia del mod.730/CUD e della busta paga (per lavoratori dipendenti). In alternativa copia del mod. Unico. <br/>
				Documentazione relativa alla spesa da sostenere. <br/><br/>

				Ulteriore documentazione personale o relativa alla spesa potrà essere richiesta in funzione dello specifico caso.
			</td>
		</tr>
		</table>
	</section>



	<section>
		<p class="note">
			<strong>Messaggio pubblicitario con finalità promozionale.</strong><br/>
			Per le condizioni economiche e le principali condizioni contrattuali fare riferimento alle Informazioni europee di base sul credito ai consumatori. Richieste soggette a valutazione ed approvazione da parte della Banca. Offerta valida per le domande di prestito, correttamente sottoscritte e complete della documentazione, pervenute alla Banca entro il 28/02/2017.
		</p>
	</section>

<!-- END PAGINA-->


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END Overlayer Scheda prodotti -->