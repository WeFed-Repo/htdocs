<section>
   <!-- Titolo_001 -->
   <div class="titolo">
      <h1>
         <div class="row">
            <div class="col-sm-8">
               <span>NOLEGGIO A LUNGO TERMINE</span>
            </div>
         </div>
      </h1>
   </div>
</section>
<!-- box top noleggio a lungo termine -->
<section>
	 <div class="top-box-vetrina">
	 	<div class="row">
	 		<div class="col-xs-12 col-sm-8 col-lg-9">
	 			<p>Il noleggio a lungo termine &egrave; una valida <strong>alternativa per chi desidera un'auto nuova, evitando i pensieri legati alla burocrazia e alla manutenzione.</strong></p>
            <p>Attraverso un <strong>canone mensile fisso</strong> potrai goderti comodamente la tua auto e, inclusi nel presso, <strong>numerosi servizi</strong>: coperture assicurative, manutenzione e riparazione della vettura, gestione degli pneumatici, soccorso stradale, pagamento tasse automobilistiche, veicolo sostitutivo e molto altro ancora.</p>
            <p>Banco BPM grazie alla partnership con Alphabet mette a disposizione dei propri i clienti un <a href="#" target="_blank">ricco catalogo​</a> (comprese auto ibride e elettriche) a tariffe vantaggiose.</p>
            <p> <a href="#" target="_blank"><strong>Alphabet</strong></a> offre soluzioni per la mobilit&agrave; in oltre <strong>30 paesi in tutto il mondo</strong>.
            In Italia &egrave; presente su tutto il territorio con migliaia di centri di assistenza convenzionati.</p>
         </div>
         <!-- immagine non visibile in versione mobile -->
	 		<div class="col-sm-4 col-lg-3 hidden-xs">
	 			<img src="/common/fe/img/banner_alphabet.png" class="img-resp">
	 		</div>
	 	</div>
	 </div>
</section>
<!-- box icone noleggio a lungo termine non visibile in versione mobile -->
<section class="hidden-xs">
   <div class="row">
         <div class="col-sm-1 col-lg-2"></div>
         <div class="col-sm-10 col-sm-10 col-lg-8 align-center">
            <h3 class="title-box-offerta">Entra nel mondo del noleggio a lungo termine e guida l'auto dei tuoi sogni liberandoti da ogni obbligo di acquisto, gestione, manutenzione, rivendita</h3>
            <div class="wrapper-box-offerta">
               <div class="el-wrapper-box-offerta">
                  <span class="icon-wrapper icon-wrapper-box-offerta">
                     <i class="icon icon-5x  icon-anticipo_zero" title="icon-icon-anticipo_zero"></i>
                  </span>
                 <div class="text">Disponibile anche con anticipo ZERO</div>
               </div>
               <div class="el-wrapper-box-offerta">
                  <span class="icon-wrapper icon-wrapper-box-offerta">
                     <i class="icon icon-5x  icon-auto_per_neopatentati" title="icon-auto_per_neopatentati"></i>
                  </span>
                  <div class="text">Auto per neo patentati</div>
               </div>
               <div class="el-wrapper-box-offerta">
                  <span class="icon-wrapper icon-wrapper-box-offerta">
                     <i class="icon icon-5x  icon-auto_ibride_ed_elettriche" title="icon-auto_ibride_ed_elettriche"></i>
                  </span>
                  <div class="text">Auto ibride ed elettriche</div>
               </div>
               <div class="el-wrapper-box-offerta">
                  <span class="icon-wrapper icon-wrapper-box-offerta">
                     <i class="icon icon-5x  icon-app_mobilita" title="icon-app_mobilita"></i>
                  </span>
                  <div class="text">App per la mobilit&agrave;</div>
               </div>
               <div class="el-wrapper-box-offerta">
                  <span class="icon-wrapper icon-wrapper-box-offerta">
                     <i class="icon icon-5x  icon-offerte_dedicate" title="icon-offerte_dedicate"></i>
                  </span>
                  <div class="text">Offerte dedicate ai clienti Banco BPM</div>
               </div>
         </div>
         </div>
         <div class="col-sm-1 col-lg-2"></div>
   </div>
</section>


<!--emulazione casistiche più di un conto e documento scaduto -->
<?php
if (isset($_GET['documentoScaduto'])) {
   $documentoScaduto =  $_GET['documentoScaduto'];
}
if (isset($_GET['piuconti'])) {
   $piuconti =  $_GET['piuconti'];
}
?>
<section class="box-bck-highlight">
   <div class="row">
      <div class="col-sm-12">
         <section>
            <h3 class="title-box-highlight">Vuoi consultare le offerte a te dedicate ed eventualmente sottoscrivere un noleggio?</h3>
            <p>Cliccando su “Fai un preventivo” sarai indirizzato sul sito di Alphabet. Acconsenti, pertanto, a trasmettere ad Alphabet i tuoi dati personali e il tuo numero di conto corrente che verrà utilizzato per l'addebito del canone di noleggio qualora deciderai di sottoscrivere un'offerta.</p>
            <div class="form-group btnWrapper">
            <?php 
	         if ($documentoScaduto === "true") 
	            {
		         ?>
	            <a type="button" class="btn btn-primary" id="" onclick="apriModaleDocumentoScaduto()">fai un preventivo</a>
            <?php
            }?>
            <?php 
	         if ($piuconti === "true") 
	            {
		         ?>
	            <a type="button" class="btn btn-primary" id=""  onclick="apriModaleScegliConto()">fai un preventivo</a>
            <?php
            }?>
            
            <?php 
            if ($piuconti !== "true" && $documentoScaduto !== "true")
	            {
		         ?>
	            <a type="button" class="btn btn-primary" onclick="">fai un preventivo</a>
            <?php
            }?>
            
         </section>
         <section>
            <h3 class="title-box-highlight">Hai iniziato una configurazione e devi concluderla?</h3>
            <div class="form-group btnWrapper">
            <div>
               <a type="button" class="btn btn-primary" id="">completa la pratica</a>
               <br class="clear">
            </div>
         </section>
         <section>
            <h3 class="title-box-highlight">Preferisci recarti in filiale per fare il preventivo con un nostro consulente?</h3>
            <div class="form-group btnWrapper">
            <div>
               <a type="button" class="btn btn-primary" id="">prendi appuntamento</a>
               <br class="clear">
            </div>
         </section>
         <section>
            <h3 class="title-box-highlight">Hai bisogno di assistenza su una proposta di noleggio in corso?</h3>
            <p class="noMarginBottom">Chiama Alphabet al numero verde 800 123 123 oppure scrivi una mail a <a href="mailto:alphabet@alphabet.com">alphabet@alphabet.com</a></p>
         </section>
		</div>
   </div>
</section>

<script type="text/javascript">
   // Esempio handler modale con contenuto dinamico (previsti Tipo "cc" e "fg")
   var apriModaleDocumentoScaduto = function(){
       getAjaxModal({
           url: "parts/modale_doc_scaduto.php",
           method: "POST",
           title: "Documento scaduto",
           class: "modal-footer-fixed"
           
       });
   }
   var apriModaleScegliConto = function(){
       getAjaxModal({
           url: "parts/modale_scegli_conto.php",
           method: "POST",
           title: "Seleziona un conto",
           class: "modal-footer-fixed"
           
       });
   }
   
</script>