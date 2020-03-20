<!-- TITOLO -->
<div class="row">
    <div class="col-xs-12">
        <h2>Informative</h2>
   	</div>
</div>
<!-- TITOLO -->

<!-- Intro -->
<div class="row">
	 <div class="col-xs-12">
		<p>Leggi e firma tutte  le informative contrattuali.
			Per procedere occorre aprire il documento e conferma la tua volont&agrave; di sottoscrivere il contratto.
			Utilizza la firma digitale per firmare i documenti.
		</p>
	 </div>
</div>
<!-- Fine intro -->
<hr>
<form id="aolStep7" action="/connect.php?page=strutt_wbresp.php&amp;tpl=wbresp_aol_step07_2.php&amp;subnav=aol&amp;promo=aol" method="POST" class="validate" novalidate="novalidate">
	<!-- presa visione informative obbligatorie step1 -->
	<div class="row">
		<div class="col-sm-12 form-section-title">
			<h4>Documentazione precontrattuale<span class="fright">Sezione 1 di 3</span></h4>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<label for="doc_contrattule">Documentazione informativa precontrattuale Conto corrente*</label>
			<p>(Modulo richiesta, Condizioni generali Banking, DDS)</p>
		</div>
	</div>
	<div class="pdfEmbedded">
		<div class="row">
			<div class="col-sm-12">
				<p><a class="embed" target="_blank" href="javascript:;">Leggi</a>
				<a href="javascript:;" class="fright closePdfEmbedd" style="display:none">Chiudi</a></p>
			</div>
			
			<div class="col-sm-12 pdfToOpen" style="display:none">
				
					<div id="pdf1" class="pdfObject"></div>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="checkbox check-inline">
					<input type="checkbox" name="presa_visione_PRECONT"" id="presa_visione_PRECONT"" class="hidden-input ignore infoOk">
					<input type="checkbox" name="informativa1KO" id="informativa1KO" class="hidden-input error infoKo" aria-required="true">
					<input type="checkbox" name="informativa1Dis" id="informativa1Dis" disabled="true" class="infoDis">
					<label for="presa_visione_PRECONT">Dichiaro di aver preso visione della documentazione/informativa precontrattuale che la Banca Popolare di Milano ha messo a mia disposizione.</label>
				</div>
			</div>
		</div>
	</div>
	<!-- FINE presa visione informative obbligatorie step1 -->
	<hr>
	<!-- presa visione informative facoltative step1 -->
	<div class="row">
    <div class="col-sm-12">
        <strong>Documentazione di informativa precontrattuale Conto corrente facoltativa</strong>
		<p>(Foglio informativo, Informativa precontrattuale servizi a distanza, Guida pratica al conto, Guida pratica e modulo per ricorrere all'arbitrio)</p>
    </div>
</div>
	<div class="pdfEmbedded">
	<div class="row">
		<div class="col-sm-12">
			<p><a class="embed" target="_blank" href="javascript:;">Leggi</a>
			<a href="javascript:;" class="fright closePdfEmbedd" style="display:none">Chiudi</a></p>
		</div>
		<div class="col-sm-12 pdfToOpen" style="display:none">
			<div id="pdf2" class="pdfObject"></div>
		</div>
	</div>
	
</div>
	<!-- FINE presa visione informative facoltative step1 -->

<hr>

<!-- Pulsanti -->
    <div class="row">
        <div class="col-xs-12">
            <p class="note">(*)I campi contrassegnati con l'asterisco sono obbligatori</p>
			<div class="btn-console">
                <a class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
				 <button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB"  id="submitBtn7">SALVA E PROSEGUI</button>
            </div>
        </div>
    </div>
<!-- Fine pulsanti -->
</form>
<script type="text/javascript" src="/wscmn/js/ret/pdfobject.js"></script>
<script type="text/javascript" src="/wbresp/js/aol/step7.js"></script>
<script>
var docArray1 = ['/wscmn/doc/doc_conto_corrente.pdf','/wscmn/doc/Numeri_utili.pdf'];
var ancoreArray1 = ['29'];
embedPdf(docArray1,ancoreArray1);

</script>

