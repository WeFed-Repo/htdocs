<div class="d-flex flex-column align-items-start flex-sm-row align-items-sm-center w-100">
  <h1 class="flex-grow-1 mr-3 nowrap">
    Richiedi finanziamento
  </h1>
  <div class="align-item-end d-flex flex-row align-items-center mb-3">
    <span class="float-left mr-3 text-right">Alcuni rapporti potrebbero essere non disponibili</span>
    <button type="button" class="btn-icon-help float-right" data-modal-help></button>
  </div>
</div>

<!-- SELETTORE DOSSIER DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_dossier/oggetto.php'); ?>
<!-- END SELETTORE DOSSIER DI ESEMPIO -->

<!-- PROMO BOX -->
<?php virtual('/youwebbusiness/layout/oggetti/box/box_promo/oggetto.php');?>
<!-- FINE PROMO BOX -->

<h2>Calcola la rata del finanziamento</h2>

<script type="text/javascript">
var defSim = <?php print(file_get_contents("./layout/template/ogg_smart_lending/DefinizioneSimulatore.json")); ?>
</script>

  <!-- Configuratore prestito -->
 <link rel="stylesheet" href="./fe/css/configuratore_lending.css" />
  
  <script type="text/javascript">

	  // Esempio handler di blocco dell'interfaccia
	  var esempioHandlerBlocco = function(){
		$("#prestitoSubmit").attr("disabled",true);
	  }

	  // Esempio handler di calcolo (con sblocco finale dell'interfaccia)
      var esempioHandlerCalcola = function(dataToSend,callback) {

        console.log("- DATI INVIATI -");
        console.log(dataToSend);

        /*
        $.ajax({
          url: "./layout/template/ogg_smart_lending/RispostaSimulatore.json",
          dataType: "json",
          data: dataToSend,
          success: function(data){
              console.log("- DATI RICEVUTI -");
              console.log(data);
              callback(data);
              // Sblocco dell'interfaccia di richiesta
			        $("#prestitoSubmit").attr("disabled",false);
          }
        })
        */        
        
        setTimeout(function(){
          var dataObject = <?php include ("ogg_smart_lending/RispostaSimulatore.json"); ?>
          // Esempio tracciatura dei dati ricevuti
          console.log("- DATI RICEVUTI -");
          console.log(dataObject);
          callback(dataObject);
          // Sblocco dell'interfaccia di richiesta
          $("#prestitoSubmit").attr("disabled",false);

        },500);
        
        
      }
  </script>

  <script type="text/javascript" src="./fe/js/configuratore_lending.js"></script>
  <script type="text/javascript" >
    confLending({
      id: "#configuraPrestito",
      objConf: defSim,
      handlerCalcola: esempioHandlerCalcola,
	    handlerBloccoInterfaccia: esempioHandlerBlocco
    })
  </script>
  <!-- Blocco contentente il configuratore -->
  <section id="configuraPrestito" class="no-margin-section bordered sml loading"></section>
  <!-- Fine blocco contentente il configuratore -->
  
  <!-- Fine configuratore prestito -->

<!-- Pulsantiera -->
<div class="row justify-content-end">
	<div class="col-sm-6">
		<div class="form-row d-flex justify-content-end">
			<div class="form-group col-6">
				<button class="btn btn-secondary btn-block ">VISUALIZZA ALTRI PRODOTTI</button>
			</div>
			<div class="form-group col-6">
				<button class="btn btn-primary btn-block "  id="prestitoSubmit" disabled>RICHIEDI FINANZIAMENTO</button>
			</div>
		</div>
	</div>
</div>
<!-- Fine pulsantiera -->

<!-- END FORM DI RICHIESTA FINANZIAMENTO -->
