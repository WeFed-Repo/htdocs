<!--informazioni all'atterraggio nella pagina: nome cliente, numero certificato e il fatto che il servizio sia già stato prenotato.
Questa info sarà di fatto disponibile?
a seconda che lo sia o meno vi è la possibilità di inserire icone che variano in base allo stato. 
Qui si assume che lo sia
 -->
<?php
   $nameCliente= "Mario Rossi";
   $nCellulareCert = "333333333";
   $disservizio =  "false";
   $fuoriOrario =  $_GET['fuoriOrario'];
   $nCellNonCertificato = $_GET['ncertificato'];
   $orarioNonDispo = $_GET['orarioNonDispo'];
   if (isset($_GET['disservizio'])) {
       $disservizio =  $_GET['disservizio'];
   } 
   if (isset($_GET['fuoriOrario'])) {
    $fuoriOrario =  $_GET['fuoriOrario'];
   } 
   if (isset($_GET['ncertificato'])) {
    $nCellulareCert =  $_GET['ncertificato'];
   } 
   if(isset($_GET['orarioNonDispo'])) {
    $orarioNonDispo =  $_GET['orarioNonDispo'];
   } 
?>

<!--classe aggiuntiva e testo per integrare nella struttura di youweb --->
<?php
    $classToAdd = "";
    $txtToAdd ="";
    if ($site==="youweb") {
       $classToAdd = 'tool-btn prenota-chiamata';
       $txtToAdd = '<span class="tool-btn-text">Prenota una chiamata</span>';
    }
?>

<form id="hiddenInput" class="formGenerico" action="">
  <?php print '<input type="hidden" name="nameCliente" value="' . $nameCliente . '"/>' ?>
  <?php print '<input type="hidden" name="nCellulareCert" value="' . $nCellulareCert . '"/>' ?>

   <!--QUESTE INFORMAZIONI: GIA' PRENOTATO; ORARIO SEZIONATO, DISSERVIZIO TECNICO; FUORI ORARIO SI HANNO FIN DA SUBITO? -->
  <?php print '<input type="hidden" name="isAlreadyBooked" value=""/>' ?>
  <?php print '<input type="hidden" name="orarioSel" value=""/>' ?>
  <?php print '<input type="hidden" name="disservizioFlag" value="'.$disservizio.'"/>' ?>
  <?php print '<input type="hidden" name="fuoriOrario" value="'.$fuoriOrario.'"/>' ?> 
  <?php print '<input type="hidden" name="orarioNonDispo" value="'.$orarioNonDispo.'"/>' ?> 
  <?php print '<input type="hidden" name="argomento" value="'.$argomento.'"/>' ?> 

</form>
<!-- ICONA CHE POI DEVE ESSERE PERSONALIZZATA; per webank andrà posizionata nell'header-->


<span class="icona-call-me-back-wrapper stato-attivo">
  <a data-toggle="modal" data-target="#modaleCallMeBack" class="icon-stato icon icon icon-cmb  <?php print $classToAdd ?>" title="Prenota una chiamata">
     <i class="icon icon-ico_cmb_outline" title="Prenota una chiamata"></i> <?php print $txtToAdd ?>
  </a>
  <a data-toggle="modal" data-target="#modaleCallMeBack" class="icon-stato icon icon icon-cmb-ok <?php print $classToAdd ?>" title="Prenota una chiamata-già prenotato">
      <span class="glyph glyph-ico_cmb_badge" title="Prenota una chiamata-già prenotato"></span> <?php print $txtToAdd ?>
  </a>
  <a data-toggle="modal" data-target="#modaleCallMeBack" class="icon-stato icon icon icon-cmb-ko <?php print $classToAdd ?>" title="Prenota una chiamata disservizio"> 
    <span class="glyph glyph-ico_cmb_alert" title="Prenota una chiamata disservizio"></span> <?php print $txtToAdd ?>
  </a>
</span>

<!-- Modale da mettere in pagina in cui includere la pagina html -->

<div id="modaleCallMeBack" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
	<div class="modal-content modal-call-me-back">
      <div class="modal-header clearfix">
	        <button type="submit" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h3 class="modal-title">Prenota una chiamata</h3>
	    </div>
      <div class="modal-body">
      <script type="text/javascript">
       
        /*solo quando apro l'overlayer si fa la chiamata alla jsp*/
        
        var isModalOpened = false,
            timeNow ="",
            formatHourMin = function(i) {
              if (i < 10) {
                i = "0" + i;
              }
            return i;
        }
        
        //madalInHeader = $("#modaleCallMeBack").html();
        
       $("#modaleCallMeBack").appendTo("body");
       $("#modaleCallMeBack").on('shown.bs.modal',function(){
          
          var today = new Date(),
              thisModal = $(this),
              thisModalBody = thisModal.find( ".modal-body"),
              nameCliente = $('input[name="nameCliente"]').val(),
              nCellulareCert = $('input[name="nCellulareCert"]').val(),
              isAlreadyBooked = $('input[name="isAlreadyBooked"]').val(),
              orarioSel = $('input[name="orarioSel"]').val(),
              timeNow = formatHourMin(today.getHours()) + ":" + formatHourMin(today.getMinutes());
              if(!isModalOpened)
              {
                
                thisModalBody.addClass("loading");
                var getCallBackTpl = $.post( "/template/call_me_back.php", {nameCliente:nameCliente,nCellulareCert:nCellulareCert, timeNow:timeNow}, function( data ) {
                   thisModalBody.removeClass("loading").html(data); isModalOpened = true;
                });
              }
              //se è già aperto non faccio la chiamata per evitare che al resize faccia continue chiamate
              else {
                return false;
              }
              
        })
        $("#modaleCallMeBack").on('hidden.bs.modal',function(){
           $(this).find(".modal-body").empty();
           isModalOpened = false;
        })
         /*definisce quale stato/icona debba essere presente */
         var setStatoPrenotazione = function() {
           
             var isAlreadyBookedVal = $('input[name="isAlreadyBooked"]').val(),
                    orarioSelVal =  $('input[name="orarioSel"]').val(),
                    disservizioFlagVal =  $('input[name="disservizioFlag"]').val(),
                    fuoriOrario = $('input[name="fuoriOrario"]').val();
                    nCellulareCert = $('input[name="nCellulareCert"]').val(),
                    iconaCallMeBackWrapper =  $(".icona-call-me-back-wrapper");
                
                if(isAlreadyBookedVal === "true") {
                  iconaCallMeBackWrapper.removeClass('stato-attivo').addClass('stato-prenotato');
                }
                else if(disservizioFlagVal === "true" && isAlreadyBookedVal !== "true") {
                   iconaCallMeBackWrapper.removeClass('stato-attivo').addClass('stato-disservizio');
                }
               
                else {
                  iconaCallMeBackWrapper.removeClass('stato-prenotato').addClass('stato-attivo');
                }
              }
          setStatoPrenotazione();
       </script>
      </div>
     </div>
	</div>
</div>