<!-- TITOLO -->
<div class="row">
    <div class="col-xs-12">
        <h2>Identificazione</h2>
   	</div>
</div>
<!-- TITOLO -->
<div class="row">
	 <div class="col-xs-12 form-section-title">
		<h4>2. Identificazione tramite bonifico</h4>	
	 </div>
</div>

<!-- Intro -->
<div class="row">
	 <div class="col-xs-12">
		<p>per completare la richiesta di apertura conto dovrai identificarti effettuando un <strong>bonifico bancario da 100,00&euro;</strong> da un conto intestato o cointestato a tuo nome.<br>Accrediteremo l'importo sul tuo nuovo Conto Webank.</p>
	 </div>
</div>

<!-- Fine intro -->
<form id="aolStep4_siconto" action="" method="POST" class="validate">

	<!-- Raccolta IBAN -->
	<div class="row">
		<div class="col-xs-12 col-sm-6">
	        <label for="iban">IBAN*</label>
	        <input type="text" id="iban" name="iban" class="textinput form-control" placeholder="Inserisci il codice IBAN">
	    </div>
	</div>
	<!-- Fine raccolta IBAN -->
	<div class="spacer-no-border">&nbsp;</div>
	<div class="row">
		<div class="col-xs-12">
			<p class="note">(*) i campi contrassegnati con l'asterisco sono obbligatori</p>
		</div>
	</div>
	<hr>

	<!-- Pulsanti -->
    <div class="row">
        <div class="col-xs-12">
            <div class="btn-console">
                <a class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
                <button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
            </div>
        </div>
    </div>
    <!-- Fine pulsanti -->

</form>

<!-- SCRIPT -->
<script type="text/javascript" src="/wbresp/js/aol/step4_fdr_siconto.js"></script>
