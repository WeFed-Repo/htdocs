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
var defSim = {
	"simulatore": {
		"discriminanti": "durataFinanziamento",
		"prodottiElise": [{
			"classe": "CHAGE",
			"codice": "CVSLDEF0",
			"periodicita": {
				"options": [{
					"value": "1",
					"lbl": "Mensile"
				},
				{
					"value": "3",
					"lbl": "Trimestrale"
				}],
				"default": 3.0,
				"modificabile": true
			},
			"importo": {
				"min": 1000.0,
				"max": 30000.0,
				"default": 30000.0,
				"step": 1000.0,
				"modificabile": true
			},
			"valuta": "euro",
			"tipoRata": {
				"options": [{
					"value": "1",
					"lbl": "Francese"
				}],
				"default": 1.0,
				"modificabile": false
			},
			"durataFinanziamento": {
				"min": 27.0,
				"max": 42.0,
				"default": 42.0,
				"step": 1.0,
				"modificabile": true
			},
			"durataAmmortamento": {
				"min": 3.0,
				"max": 18.0,
				"default": 18.0,
				"step": 1.0,
				"modificabile": false
			},
			"durataPreammortamento": {
				"min": 24.0,
				"max": 39.0,
				"default": 24.0,
				"step": 1.0,
				"modificabile": false
			},
			"default": false
		},
		{
			"classe": "CHAGE",
			"codice": "CVSLDFF0",
			"periodicita": {
				"options": [{
					"value": "1",
					"lbl": "Mensile"
				},
				{
					"value": "3",
					"lbl": "Trimestrale"
				}],
				"default": 3.0,
				"modificabile": true
			},
			"importo": {
				"min": 1000.0,
				"max": 30000.0,
				"default": 30000.0,
				"step": 1000.0,
				"modificabile": true
			},
			"valuta": "euro",
			"tipoRata": {
				"options": [{
					"value": "1",
					"lbl": "Francese"
				}],
				"default": 1.0,
				"modificabile": false
			},
			"durataFinanziamento": {
				"min": 43.0,
				"max": 78.0,
				"default": 78.0,
				"step": 1.0,
				"modificabile": true
			},
			"durataAmmortamento": {
				"min": 6.0,
				"max": 54.0,
				"default": 54.0,
				"step": 1.0,
				"modificabile": false
			},
			"durataPreammortamento": {
				"min": 24.0,
				"max": 72.0,
				"default": 24.0,
				"step": 1.0,
				"modificabile": false
			},
			"default": false
		},
		{
			"classe": "CHAGE",
			"codice": "CVSLDGF0",
			"periodicita": {
				"options": [{
					"value": "1",
					"lbl": "Mensile"
				},
				{
					"value": "3",
					"lbl": "Trimestrale"
				}],
				"default": 3.0,
				"modificabile": true
			},
			"importo": {
				"min": 1000.0,
				"max": 30000.0,
				"default": 30000.0,
				"step": 1000.0,
				"modificabile": true
			},
			"valuta": "euro",
			"tipoRata": {
				"options": [{
					"value": "1",
					"lbl": "Francese"
				}],
				"default": 1.0,
				"modificabile": false
			},
			"durataFinanziamento": {
				"min": 79.0,
				"max": 102.0,
				"default": 102.0,
				"step": 1.0,
				"modificabile": true
			},
			"durataAmmortamento": {
				"min": 18.0,
				"max": 78.0,
				"default": 78.0,
				"step": 1.0,
				"modificabile": false
			},
			"durataPreammortamento": {
				"min": 24.0,
				"max": 84.0,
				"default": 24.0,
				"step": 1.0,
				"modificabile": false
			},
			"default": false
		},
		{
			"classe": "CHAGE",
			"codice": "CVSLDHF0",
			"periodicita": {
				"options": [{
					"value": "1",
					"lbl": "Mensile"
				},
				{
					"value": "3",
					"lbl": "Trimestrale"
				}],
				"default": 3.0,
				"modificabile": true
			},
			"importo": {
				"min": 1000.0,
				"max": 30000.0,
				"default": 30000.0,
				"step": 1000.0,
				"modificabile": true
			},
			"valuta": "euro",
			"tipoRata": {
				"options": [{
					"value": "1",
					"lbl": "Francese"
				}],
				"default": 1.0,
				"modificabile": false
			},
			"durataFinanziamento": {
				"min": 103.0,
				"max": 150.0,
				"default": 120.0,
				"step": 1.0,
				"modificabile": true
			},
			"durataAmmortamento": {
				"min": 18.0,
				"max": 126.0,
				"default": 126.0,
				"step": 1.0,
				"modificabile": false
			},
			"durataPreammortamento": {
				"min": 24.0,
				"max": 132.0,
				"default": 24.0,
				"step": 1.0,
				"modificabile": false
			},
			"default": true
		},
		{
			"classe": "CHAGE",
			"codice": "CVSLDIF0",
			"periodicita": {
				"options": [{
					"value": "1",
					"lbl": "Mensile"
				},
				{
					"value": "3",
					"lbl": "Trimestrale"
				}],
				"default": 3.0,
				"modificabile": true
			},
			"importo": {
				"min": 1000.0,
				"max": 30000.0,
				"default": 30000.0,
				"step": 1000.0,
				"modificabile": true
			},
			"valuta": "euro",
			"tipoRata": {
				"options": [{
					"value": "1",
					"lbl": "Francese"
				}],
				"default": 1.0,
				"modificabile": false
			},
			"durataFinanziamento": {
				"min": 151.0,
				"max": 180.0,
				"default": 180.0,
				"step": 1.0,
				"modificabile": true
			},
			"durataAmmortamento": {
				"min": 18.0,
				"max": 156.0,
				"default": 156.0,
				"step": 1.0,
				"modificabile": false
			},
			"durataPreammortamento": {
				"min": 24.0,
				"max": 162.0,
				"default": 24.0,
				"step": 1.0,
				"modificabile": false
			},
			"default": false
		}]
	},
	"importoMassimoCRM": 0.0
}
</script>

  <!-- Configuratore prestito -->
  <!-- /// SEPARARE -->
  <style>
    /* Oggetti generici */
    .loading {background-image: url("./fe/img/loading.gif");
    background-repeat:no-repeat;
    background-position:center center}

	
    
    .loading>* {visibility:hidden}
    .sml.loading {min-height:200px} 

    /* Bordature */
    .bordered-top {border-top: solid 1px #eee; padding-top:20px;}

    /* Inner bordered blocks */
    .flex-bordered {padding:0 30px 30px 30px}
    .bordered-between {display:flex;margin:0 -40px;}
    .bordered-between .flex-element {flex:1; padding:20px 40px; border-left: solid 1px #eee;margin-bottom:0;}
    .bordered-between .flex-element:first-child {border-left:0 none;}

    /* Oggetti dedicati */
    .configuratore .top-evidente {text-align:center}
    .slider-input {display:block;font-size:18px;width:120px;padding: 5px 0 5px 10px; border:solid 1px #ccc;border-radius:5px; position:relative;
    margin:0;float:none;clear:both; background:transparent; }
    .slider-output {font-size:18px; width:100px;padding: 6px 10px; position:relative; display:block; color:#2f9988;
    margin:10px auto 20px;float:none;clear:both;}

    /* Offerta */
    .cd-wrapper {width:340px; margin:0 auto; display:inline-block; vertical-align:top; 
	background:transparent url(./fe/img/scadenza_countdown.png) no-repeat left center; background-size: 58px;}
	.cd-wrapper span.cd-label {
		font-weight: bold;
		color:#1d2d53;
		font-size:16px;
		width: 100%;
		padding: 0; 
		margin-bottom:10px;
	}
	.countdown {width:210px;margin:0 auto}
	.countdown-inline {width:210px; display:inline-block;}
	.countdown-inline .cdblock {width:33.3331%;margin:0;padding:0;display:inline-block; text-align:center;}
	.countdown-inline .cdblock span {width:100%;clear:both;display:block; text-transform:uppercase; font-weight:bold;font-size:12px;}
	.countdown-inline .cdblock span.time-countdown {font-weight:bold; font-size:50px;line-height:50px;letter-spacing:-3px;font-weight:normal;width:100%;clear:both;}
    .countdown-inline div.cdblock.giorni span.time-countdown {font-weight:bold; color: #2F9988}
	
    /* Blocchi di input */
    .editable-field-wrapper { border: solid 1px #ddd; position:relative;width:150px; padding:0 40px 0 0; margin: 10px auto 20px; border-radius:4px; background:#fbfbfb}
    .editable-field-wrapper.importo::after { content: '\20AC';
    position: absolute;
    top: 5px;
    font-size: 18px;
    right: 10px;
    color: #2f9988;
    border-radius: 3px;}
    .editable-field-wrapper input {border: 0; color:#2f9988;}

    /* Risultati */
    .results {width:100%;display:flex;min-height:30px;justify-content:space-between}
    .results.disabled {opacity:0.6}
    .results .result-box {flex-grow:1;padding:8px 15px;border: solid 1px #ccc;flex-basis:20%;margin:0 0 15px 15px;text-align:center;
		background: transparent none no-repeat left bottom;background-size:auto 80%; position:relative;}
    .results .result-box:first-child {margin-left:0;}
    .results .result-box span.result-label {clear:both;display:inline-block;width:100%;text-transform:uppercase; font-size:16px;font-weight:bold;}
    .results .result-box span.result {clear:both;display:inline-block;width:100%;font-size:25px;line-height:25px;}
    .results .result-box.rata {color:#00987f;}

	.results .result-box .btn-icon-help {text-decoration:none; position:absolute; right:5px;top:5px;}
	.results.disabled .result-box .btn-icon-help {display:none}

	.results .result-box.spese {background-image: url(./fe/img/prev_spese.png)}
	.results .result-box.tan {background-image: url(./fe/img/prev_tan.png)}
	.results .result-box.taeg {background-image: url(./fe/img/prev_taeg.png)}
	.results .result-box.rate {background-image: url(./fe/img/prev_rate.png)}

	.sml .disclaimer {border-top: solid 1px #eee;padding: 20px 14px 10px; margin: 0 -14px;}

	@media (max-width:767px) {

		/* Fix no margin per bordered */
		.no-margin-section.bordered {width:auto; max-width:none;}

		.flex-bordered {padding:0}
		.bordered-between {flex-direction:column;margin: 0;}
		.bordered-between .flex-element{border: 0 none; border-top:solid 1px #eee;padding:25px 0 25px;}
		.bordered-between .flex-element:first-child {border-top:none;}

		.cd-wrapper {padding:0 0 0 60px; width:270px;}


		.results {flex-direction:column; padding-top:20px;}
		.results .result-box {margin:0 0 15px}
	}

  </style>
  <!-- /// FINE SEPARARE -->
  
  <script type="text/javascript">

	  // Esempio handler di blocco dell'interfaccia
	  var esempioHandlerBlocco = function(){
		$("#prestitoSubmit").attr("disabled",true);
	  }

	  // Esempio handler di calcolo (con sblocco finale dell'interfaccia)
      var esempioHandlerCalcola = function(dataToSend,callback) {
        var dataObject = {
          "spese": Math.round(Math.random()*3000*100)/100,
          "taeg": Math.round(Math.random()*10*100)/100,
          "tan": Math.round(Math.random()*10*100)/100,
          "rate":parseInt( Math.random()*11)+1,
          "rata":Math.round(Math.random()*1000*100)/100
        }
        // Esempio tracciatura dei dati ricevuti
        console.log(dataToSend);
        setTimeout(function(){
			// Lancio della callback
			callback(dataObject)
			// Sblocco dell'interfaccia di richiesta
			$("#prestitoSubmit").attr("disabled",false);
		}
		,1000);
      }
  </script>

  <script type="text/javascript" src="./fe/js/configuratore_lending.js"></script>
  <script type="text/javascript" >
    confLending({
      id: "#configuraPrestito",
      scadenza: 1617141600000,
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
