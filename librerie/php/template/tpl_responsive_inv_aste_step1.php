<script type="text/javascript">
/* Url della chiamata al glossario */
var disponibilitaUrl = "/librerie/include/commons/ajax/fes_disponibilita.php";


// FUNZIONI DELLA PAGINA

// Check della disponibilita' ed aggiornamento del form
var loadDeposito = function() {
	$("#formPrenotaWrapper").addClass("loading");
	$.ajax({
		url: disponibilitaUrl,
		method: "POST",
		dataType: "json",
		data: {
			deposito: $("#deposito").val()
		},
		success: function(data) {
			// Aggiorna il dato del deposito
			$("#depositoTot").html(data[0].disponibilita);
			// Rimuove il loading
			$("#formPrenotaWrapper").removeClass("loading");
		},
		error: function(){
			alert("Si sono verificati problemi nel recupero dei dati. Riprovare piu' tardi")
		}
	})
}

// Verifica degli errori
var checkFormError = function() {

}


$(function(){

	// Inizializzazioni
	$("#deposito").change(loadDeposito);
	loadDeposito();

	// Spinner quantita'
	setSpinner({
	    idInput: '#importo',
	    step: 1000,
	    min: 1000,
	    max: 1000000000
	});


	$("#formPrenotaProsegui").click(function(){

		// Inserire qui eventuale validazione

		location.href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_aste_step2.php&responsive=y&liv0=4&liv1=3&liv2=0&liv3=1";
	});

});

</script>
<h2>Aste titoli di stato</h2>
<!-- Testo introduttivo -->
<section>
<ul>
	<li>Seleziona il deposito con cui vuoi continuare l'ordine e inserisci la quantità che desideri prenotare.</li>
	<li>Ricorda che la quantità prenotabile deve essere necessariamente pari al lotto minimo o ad un suo multiplo.</li>
</ul>
<!-- fine testo introduttivo -->

<section id="formPrenotaWrapper" class="loading">
	<form class="formGenerico borderFormRounded" role="form" method= "POST" id="formPrenota">
		<input type="hidden" name="codicePaniere" value="0">
		<input type="hidden" name="codiceSottopaniere" value="123">
		<input type="hidden" name="codiceTitolo" value="5153970">
		<input type="hidden" name="tipoOperazione" value="sottoscrizione">
		<input type="hidden" name="divisa" value="EUR">
		<input type="hidden" name="descrizioneTitolo" value="BIPIEMME 2025 1.5%  ">
		<input type="hidden" name="mercato" value="MOT">
		<input type="hidden" name="scadenzaTitolo" value="02/12/2025">
		<input type="hidden" name="dataInizio" value="26/07/2018">
		<input type="hidden" name="dataFine" value="28/12/2018">	
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label" for="deposito">Deposito</label>
					<select class="form-control" name="deposito" id="deposito">
						<option selected value="1099/535379/0">1099/535379/0 C/C 01099 - 0000072608 - EUR</option>
						<option value="1099/535379/1">1099/535379/1 C/C 01099 - 0000072608 - EUR</option>
						<option value="1099/535379/2">1099/535379/2 C/C 01099 - 0000072608 - EUR</option>
						<option value="1099/570641/0">1099/570641/0 C/C 01099 - 0000078689 - EUR</option>
						<option value="1099/570641/1">1099/570641/1 C/C 01099 - 0000078689 - EUR</option>
						<option value="1099/570641/2">1099/570641/2 C/C 01099 - 0000078689 - EUR</option>
					</select>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Disponibilit&agrave;</label>
					<span class="output" id="depositoTot"></span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Titolo</label>
					<span class="output">BIPIEMME 2025 1.5% </span>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Divisa</label>
					<span class="output">EUR</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Mercato di trattazione</label>
					<span class="output">MOT</span>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Scadenza titolo</label>
					<span class="output">02/12/2025</span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Data inizio prenotazione</label>
					<span class="output">26/07/2018</span>
				</div>
				<div class="col-sm-6 col-xs-12">
					<label class="control-label">Data fine prenotazione</label>
					<span class="output">28/12/2018</span>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<label class="control-label txthelp" data-toggle="tooltip" title="Il lotto minimo &egrave; 1000. Il valore inserito deve essere un multiplo di 1000.">Quantit&agrave;</label>
					<input id="importo" type="text" name="importo" class="form-control spinner" readonly value="1000">
				</div>
			</div>
		</div>

	</form>


	<!-- Pulsanti -->
	<div class="form-group btnWrapper">
		<div class="stepBtn">Step <strong> 1 </strong> di 2</div>
		<div class="btn-align-left">
			<a type="button" class="btn btn-default">annulla</a>
		</div>
		<div class="btn-align-right">
			<a type="button" class="btn btn-primary" id="formPrenotaProsegui">prosegui</a>
		</div>
		<br class="clear">
	</div>
	<!-- Fine pulsanti -->


</section>

