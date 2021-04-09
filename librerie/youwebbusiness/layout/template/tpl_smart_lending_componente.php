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
var defSim = <?php print(file_get_contents("./layout/template/ogg_smart_lending/objConf.json")); ?>
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
        
        setTimeout(function(){
          var dataObject = <?php include ("ogg_smart_lending/response.json"); ?>
          // Esempio tracciatura dei dati ricevuti
          console.log("- DATI RICEVUTI -");
          console.log(dataObject);
          callback(dataObject);
          // Sblocco dell'interfaccia di richiesta
          $("#prestitoSubmit").attr("disabled",false);

        },500);
        
        
      }
    
  </script>
  <!-- ESEMPIO DI CONTROLLO DELLE MODALI -->
  <script type="text/javascript">

      // Attenzione: funzioni fake da rimuovere
      _openSpese = _openPianoAmmortamento = function(data) {
        alert("apertura modale");
      }

    // Esempio oggetto di controllo "locale" delle modali
      var esempioModalObj = {

            // Modale delle spese
            "spese": function(modaldata) {
                _openSpese(modaldata);

                /*
                // Dati ricevuti per la modale
                console.log("- DATI MODALE SPESE");
                console.log(modaldata);
                // Esempio compilazione delle spese
                $("#esempio_modale_spese").find(".modal-body").empty().append(
                        $("<p>").html("Spese Istruttoria: "+ modaldata.SpeseIstruttoria +" &euro;<br>" +
                        "Commissione Erogazione: "+ modaldata.SpeseErogazione +" &euro;<br>"+
                        "Spese Incasso Rata: "+ modaldata.SpeseRata +" &euro;<br>"+
                        "Spese Avvisatura: "+modaldata.SpeseInvio +" &euro;*<br>"),
                        $("<p>").addClass("note").html("*applicate solo nel caso in cui la rata non venga pagata mediante addebito su un conto corrente accesso presso l’istituto erogato.")
                )
                $("#esempio_modale_spese").modal();
                */
            },

            // Modale con il piano di ammortamento
            "rata": function(modaldata) {
              _openPianoAmmortamento(modaldata);

              /*  
              console.log("- DATI MODALE PIANO DI AMMORTAMENTO");
                console.log(modaldata);
                
                // Alterazione runtime del corpo della modale, prima dell'innesco della stessa (es: costruzione tabella, ecc...)
                $("#esempio_corpo_modale_rata").empty().append($("<p>").append("Rate da mostrare = " + modaldata.NumeroRate));

                // Innesco della modale a valle del tutto
                $("#esempio_modale_rata").modal();
              */
            }

      }
  </script>
  <!-- Esempio modale rata 
  <div class="modal fade" data-modal="default" id="esempio_modale_rata">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content"><div class="modal-header"><h5 class="modal-title">Titolo della modale rata</h5><a data-dismiss="modal" arial-label="close"><img src="./fe/img/icon/close.svg"></a></div>
      <div class="modal-body" id="esempio_corpo_modale_rata"></div></div>
    </div>
  </div>
  Fine modale rata -->
  <!-- Esempio modale spese
  <div class="modal fade" data-modal="default" id="esempio_modale_spese">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content"><div class="modal-header"><h5 class="modal-title">Titolo della modale spese</h5><a data-dismiss="modal" arial-label="close"><img src="./fe/img/icon/close.svg"></a></div>
      <div class="modal-body">
      </div></div>
    </div>
  </div>
 Fine modale spese -->
  <!-- FINE ESEMPIO DI CONTROLLO DELLE MODALI -->


  <script type="text/javascript" src="./fe/js/configuratore_lending.js"></script>
  <script type="text/javascript" >
    confLending({
      id: "#configuraPrestito",

      // Se objConf e' assente il preventivatore non e' abilitato
      objConf: defSim,
      configuration: { countDownVisible: true },
      
      handlerCalcola: esempioHandlerCalcola,
	    handlerBloccoInterfaccia: esempioHandlerBlocco,
      
      // Handler delle modali
      handlerModal: esempioModalObj
    
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
