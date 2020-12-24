<!--informazioni all'atterraggio nella pagina: nome cliente, numero certificato e il fatto che il servizio sia già stato prenotato.
Questa info sarà di fatto disponibile?
a seconda che lo sia o meno vi è la possibilità di inserire icone che variano in base allo stato. 
Qui si assume che lo sia
 -->
<?php
   $nameCliente= "Mario Rossi";
   $nCellulareCert = "33379320390";
?>
<form id="hiddenInput" class="formGenerico" action="">
  <?php print '<input type="hidden" name="nameCliente" value="' . $nameCliente . '"/>' ?>
  <?php print '<input type="hidden" name="nCellulareCert" value="' . $nCellulareCert . '"/>' ?>
  <input id="orarioSel" name="orarioSel" type="hidden" val=""></input>
</form>
<!-- ICONA CHE POI DEVE ESSERE PERSONALIZZATA; per webank andrà posizionata nell'header-->
<a data-toggle="modal" data-target="#modaleCallMeBack" class="icon icon icon-cmb" title="Servizio clienti">CMB</a>
<a style="display:none" data-toggle="modal" data-target="#modaleCallMeBack" class="icon icon icon-cmb-ok" title="Servizio clienti">CMB già prenotato</a>
<!-- Modale da mettere in pagina in cui includere la pagina html -->

<div id="modaleCallMeBack" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
	<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h1 class="modal-title align-center">Prenota una chiamata</h1>
      </div>
      <div class="modal-body">
      <script type="text/javascript">
        <!-- solo quando apro l'overlayer si fa la chiamata alla jsp -->
        var isModalOpened = false,
            timeNow ="",
            formatHourMin = function(i) {
              if (i < 10) {
                i = "0" + i;
              }
            return i;
        }
        $("#modaleCallMeBack").on('show.bs.modal',function(){
          var today = new Date(),
              thisModal = $(this),
              thisModalBody = thisModal.find( ".modal-body"),
              nameCliente = $('input[name="nameCliente"]').val(),
              nCellulareCert = $('input[name="nCellulareCert"]').val(),
              timeNow = formatHourMin(today.getHours()) + ":" + formatHourMin(today.getMinutes());
              
			        
              if(!isModalOpened)
              {
                thisModalBody.empty().addClass("loading");
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
           
           isModalOpened = false;
        })
        </script>
      </div>
     </div>
	</div>
</div>