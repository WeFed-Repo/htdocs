<!-- ICONA CHE POI DEVE ESSERE PERSONALIZZATA; per webank andrà posizionata nell'header-->
<a data-toggle="modal" data-target="#modaleCallMeBack" class="icon icon icon-recall_V2" title="Servizio clienti"></a>

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
        <!-- solo quando apro l'overlayer si fa la chiimata alla jsp -->
       
        $("#modaleCallMeBack").on('show.bs.modal',function(){
          var today = new Date(),
              thisModal = $(this),
              thisModalBody = thisModal.find( ".modal-body"),
              now = today.getHours().toString() + ":" + today.getMinutes().toString();
              thisModalBody.empty().addClass("loading");
              var getCallBackTpl = $.post( "/template/call_me_back.php", { time: now }, function( data ) {
                thisModalBody.removeClass("loading").html(data);
              });
        })
        </script>
      </div>
     </div>
	</div>
</div>