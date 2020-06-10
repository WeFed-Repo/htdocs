<html><head>
	<title>Riepilogo F24</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">













<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript" src="/sapef24/f24/javascript/jquery-1.9.0.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/scroll.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/jquery-migrate-1.0.0.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="/sapef24/f24/javascript/ie10-viewport-bug-workaround.js"></script>


<!--<script type="text/javascript" src='/sapef24/f24/javascript/jquery.tablesorter.js'></script>-->
<script type="text/javascript" src="/sapef24/f24/javascript/jquery-ui.min.js"></script>

<!--nostro-->
	<script type="text/javascript" src="/sapef24/f24/javascript/jquery.ui.touch-punch.min.js"></script>
<!-- * -->
<script type="text/javascript" src="/sapef24/f24/javascript/swfobject.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/funzioniHT.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/funzioniHB.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/jquery.blockUI.js"></script>

<script type="text/javascript" src="/sapef24/f24/javascript/jquery.dataTables.min.js"></script>


<!--nostro-->

	<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/blue.css">
	<script type="text/javascript" src="/sapef24/f24/javascript/icheck.min.js?t=1583315348896"></script>
	<script type="text/javascript" src="/sapef24/f24/javascript/helpModal.js"></script>






<script type="text/javascript">

		function getPathImages() { return '/sapef24/f24/images/';}

</script>
<script type="text/javascript" src="/sapef24/f24/javascript/controlli.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/doubleClickPrevention.js"></script>

<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/jquery-ui.css">
<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/bootstrap.min.css">
<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/essentials.css">

		<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/header-default.css">
		<link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/styleNew.css">

		<!--NUOVA GRAFICA-->

	<link media="print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/stylePrint.css">

		<link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/stylePhone.css">
		<?php if($_REQUEST['bank'] == 'HT') { $stileSito = 'styleYouweb'; }
					else if($_REQUEST['bank'] == 'WB') { $stileSito = 'styleWebank'; }
					else if($_REQUEST['bank'] == 'AL') { $stileSito = 'styleAletti'; }
					if( $stileSito ) { ?>
						<link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/phone/<?php echo $stileSito ?>.css">
		<?php } ?>


		<script src="/sapef24/f24/javascript/jquery.jspanel.min.js?t=1583315348896"></script>
		<script src="/sapef24/f24/javascript/mobile.js?t=1583315348896"></script>
		<script src="/sapef24/f24/javascript/mobile-detect.js?t=1583315348896"></script>
		<script src="/sapef24/f24/javascript/jquery.tablesorter.js?t=1583315348896"></script>
		<script src="/sapef24/f24/javascript/jquery.tablesorter.pager.js?t=1583315348896"></script>

		<link type="text/css" href="/sapef24/f24/styles/jquery.tablesorter.pager.css?t=1583315348896" rel="stylesheet">

		<script type="text/javascript">
		(function(){
		  if (window.addEventListener)
		  {
			window.addEventListener("load", nascondi_loading_mobile, false);
		  }else{
			window.attachEvent("onload", nascondi_loading_mobile);
		  }
		})();
		function mostra_loading_mobile()
		{
		  document.getElementById("loading_mobile").style.display = 'block';
		}
		function nascondi_loading_mobile()
		{
		  document.getElementById("loading_mobile").style.display = 'none';
		}
		</script>




















	<script type="text/javascript">

		function noBack(){
			window.history.forward();
		}

		noBack();

		window.onload = noBack;
		window.onpageshow = function(evt) {
			if (evt.persisted) {
				noBack();
			}
		}

		window.onunload = function() {
			void(0);
		}

	</script>



<script type="text/javascript">

	if (window.opera) {
		window.opera.setOverrideHistoryNavigationMode('compatible');

		if (history.navigationMode) {
			history.navigationMode = 'compatible';
		}
	}

</script>



  <!--[if lt IE 9]>
  	<script type="text/javascript" src='/sapef24/f24/javascript/respond.min.js'></script>
  	<script type="text/javascript" src='/sapef24/f24/javascript/html5.js'></script>
  <![endif]-->
  <script type="text/javascript" src="/sapef24/f24/javascript/alten.js"></script>

  <style id="style-1-cropbar-clipper">
	/* Copyright 2014 Evernote Corporation. All rights reserved. */

	.en-markup-crop-options {
		top: 18px !important;
		left: 50% !important;
		margin-left: -100px !important;
		width: 200px !important;
		border: 2px rgba(255,255,255,.38) solid !important;
		border-radius: 4px !important;
	}
	.en-markup-crop-options div div:first-of-type {
		margin-left: 0px !important;
	}
</style>


<style type="text/css">
	#loading_mobile, #loading_screen{
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: #fff url(/sapef24/f24/images/phone/loading.gif) 50% no-repeat;
		opacity: 0.5;
		filter: alpha(opacity=50);
	}

		#loading_screen{
			background: url(/sapef24/f24/images/loading.gif) 50% no-repeat;
		}

</style>






</head>

<body marginwidth="0" marginheight="0" style="zoom: 1;">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
						<div class="flag pagamentoF24">&nbsp;</div>
						<h1>F24</h1>
						<form name="f24MainForm" method="post" action="/sapef24/f24/spedisciModello.do" class="form-horizontal"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="c15ebc332d71ca023284478f6a603916">




















<script type="text/javascript">

    function cercaModelli() {
		mostra_loading_mobile();

		if (!getSubmitted()) {
	           document.f24MainForm.action = '/sapef24/f24/findDeleghePhone.do';
               document.f24MainForm.submit();

             if (document.getElementById('erroreRiepilogo')) {
			   	   document.getElementById('erroreRiepilogo').style.display = 'none';
              }
        }

      }

      function nuovoModello() {
      		mostra_loading_mobile();
      if (!getSubmitted()) {
   	      document.f24MainForm.action = '/sapef24/f24/inserisciNuovoModelloPhone.do?_control.tipo=S';
          document.f24MainForm.submit();
        }
    }


	function duplica() {
	  mostra_loading_mobile();
      document.f24MainForm.action = '/sapef24/f24/inserisciNuovoModelloPhone.do?_control.duplica=yes';
      document.f24MainForm.submit();
	 }



	$( document ).ready(function() {



			var appo = null;





		if(appo != null){
			$("#dialog-message").css("display", "block");
		  	$( function() {
			    $( "#dialog-message" ).dialog({
			    	position: { my: "center center" },
					dialogClass: "pop",
			    	draggable: false ,
			      	modal: true,

			      	buttons: {
			        	Ok: function() {
			         	 $( this ).dialog( "close" );
			        	}
		     		}
		    	});
		  	});
 		}
	});

</script>
<div id="dialog-message" style="display:none;" title="REVOCA ACCETTATA">
  <p>
    null
  </p>
</div>

<div id="dialog-confirm" style="display:none;" title="Conferma">
  <p>Confermi la revoca della delega?</p>
</div>

<div id="loading_mobile" style="display: none;"></div>
 	<div class="section clearfix">
		<h3 class="titleSection" style="font-weight:bold;">
			F24 inseriti
		</h3>
		<h3 class="titleSectionOff">
			<a href="javascript:nuovoModello();">Nuovo</a>
		</h3>

		<input type="hidden" name="id_chiamata" value="1583330814117_01IHF24_7JrQK2RJ09449ABL">

			<div class="form-group">
				<label class="col-xs-2 control-label">Mostra</label>
				<div class="col-xs-10">
          	<select name="giorniDiRicerca" onchange="javascript: cercaModelli();" class="form-control"><option value="30">Ultimi 30 gg</option>
            	<option value="90">Ultimi 3 mesi</option>
					<option value="180" selected="selected">Ultimi 6 mesi</option></select>
				</div>

			</div><!--form-group-->


	  <input type="hidden" name="selectedRevoca">
	  <input type="checkbox" name="checkedItems" style="display: none">























				<div class="riquadro clearfix">
					<div class="clearfix pull-right">

					</div>


						<div class="esitoOpe"><img src="/sapef24/f24/images/phone/ico_esitoOpeLavorazione.png" class="flex" title="delega in lavorazione" alt="delega in lavorazione"></div>




						<h4>ALESSANDRO VENTURELLI</h4>
						<div class="table-responsive phone">
						<div class="col-xs-12">
								<div class="col-xs-5">
									Conto di addebito:
								</div>
								<div class="col-xs-7">
									<strong>000000581427</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Data pagamento:
								</div>
								<div class="col-xs-7">
									<strong>
								  	04-12-2019
								  </strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Importo:
								</div>
								<div class="col-xs-7">
									<strong>3,00</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Contribuente:
								</div>
								<div class="col-xs-7">
									<strong>ALESSANDRO VENTURELLI</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
										Codice fiscale:
								</div>
								<div class="col-xs-7">
									<strong>VNTLSN85R03E349S</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Stato:
								</div>
								<div class="col-xs-7">
										<strong>Trasmessa a Banca
</strong>
								</div>
							</div>
						</div>





						<div class="table-responsive phone" id="idDatiSezione0"></div></div><!-- /riquadro clearfix-->


				<div class="riquadro clearfix">
					<div class="clearfix pull-right">

					</div>


						<div class="esitoOpe"><img src="/sapef24/f24/images/phone/ico_esitoOpeLavorazione.png" class="flex" title="delega in lavorazione" alt="delega in lavorazione"></div>




						<h4>ALESSANDRO VENTURELLI</h4>
						<div class="table-responsive phone">
						<div class="col-xs-12">
								<div class="col-xs-5">
									Conto di addebito:
								</div>
								<div class="col-xs-7">
									<strong>000000581427</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Data pagamento:
								</div>
								<div class="col-xs-7">
									<strong>
								  	04-12-2019
								  </strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Importo:
								</div>
								<div class="col-xs-7">
									<strong>2,00</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Contribuente:
								</div>
								<div class="col-xs-7">
									<strong>ALESSANDRO VENTURELLI</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
										Codice fiscale:
								</div>
								<div class="col-xs-7">
									<strong>VNTLSN85R03E349S</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Stato:
								</div>
								<div class="col-xs-7">
										<strong>Trasmessa a Banca
</strong>
								</div>
							</div>
						</div>





						<div class="table-responsive phone" id="idDatiSezione1"></div></div><!-- /riquadro clearfix-->


				<div class="riquadro clearfix">
					<div class="clearfix pull-right">

					</div>


						<div class="esitoOpe"><img src="/sapef24/f24/images/phone/ico_esitoOpeLavorazione.png" class="flex" title="delega in lavorazione" alt="delega in lavorazione"></div>




						<h4>ALESSANDRO VENTURELLI</h4>
						<div class="table-responsive phone">
						<div class="col-xs-12">
								<div class="col-xs-5">
									Conto di addebito:
								</div>
								<div class="col-xs-7">
									<strong>000000581427</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Data pagamento:
								</div>
								<div class="col-xs-7">
									<strong>
								  	05-12-2019
								  </strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Importo:
								</div>
								<div class="col-xs-7">
									<strong>6,00</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Contribuente:
								</div>
								<div class="col-xs-7">
									<strong>ALESSANDRO VENTURELLI</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
										Codice fiscale:
								</div>
								<div class="col-xs-7">
									<strong>VNTLSN85R03E349S</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Stato:
								</div>
								<div class="col-xs-7">
										<strong>Trasmessa a Banca
</strong>
								</div>
							</div>
						</div>





						<div class="table-responsive phone" id="idDatiSezione2"></div></div><!-- /riquadro clearfix-->


				<div class="riquadro clearfix">
					<div class="clearfix pull-right">

					</div>


						<div class="esitoOpe"><img src="/sapef24/f24/images/phone/ico_esitoOpeLavorazione.png" class="flex" title="delega in lavorazione" alt="delega in lavorazione"></div>




						<h4>ALESSANDRO VENTURELLI</h4>
						<div class="table-responsive phone">
						<div class="col-xs-12">
								<div class="col-xs-5">
									Conto di addebito:
								</div>
								<div class="col-xs-7">
									<strong>000000581427</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Data pagamento:
								</div>
								<div class="col-xs-7">
									<strong>
								  	05-12-2019
								  </strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Importo:
								</div>
								<div class="col-xs-7">
									<strong>5,00</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Contribuente:
								</div>
								<div class="col-xs-7">
									<strong>ALESSANDRO VENTURELLI</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
										Codice fiscale:
								</div>
								<div class="col-xs-7">
									<strong>VNTLSN85R03E349S</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Stato:
								</div>
								<div class="col-xs-7">
										<strong>Trasmessa a Banca
</strong>
								</div>
							</div>
						</div>





						<div class="table-responsive phone" id="idDatiSezione3"></div></div><!-- /riquadro clearfix-->


				<div class="riquadro clearfix">
					<div class="clearfix pull-right">

					</div>


						<div class="esitoOpe"><img src="/sapef24/f24/images/phone/ico_esitoOpeLavorazione.png" class="flex" title="delega in lavorazione" alt="delega in lavorazione"></div>




						<h4>ALESSANDRO VENTURELLI</h4>
						<div class="table-responsive phone">
						<div class="col-xs-12">
								<div class="col-xs-5">
									Conto di addebito:
								</div>
								<div class="col-xs-7">
									<strong>000000581427</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Data pagamento:
								</div>
								<div class="col-xs-7">
									<strong>
								  	05-12-2019
								  </strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Importo:
								</div>
								<div class="col-xs-7">
									<strong>4,00</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Contribuente:
								</div>
								<div class="col-xs-7">
									<strong>ALESSANDRO VENTURELLI</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
										Codice fiscale:
								</div>
								<div class="col-xs-7">
									<strong>VNTLSN85R03E349S</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Stato:
								</div>
								<div class="col-xs-7">
										<strong>Trasmessa a Banca
</strong>
								</div>
							</div>
						</div>





						<div class="table-responsive phone" id="idDatiSezione4"></div></div><!-- /riquadro clearfix-->


				<div class="riquadro clearfix">
					<div class="clearfix pull-right">

					</div>


						<div class="esitoOpe"><img src="/sapef24/f24/images/phone/ico_esitoOpeLavorazione.png" class="flex" title="delega in lavorazione" alt="delega in lavorazione"></div>




						<h4>ALESSANDRO VENTURELLI</h4>
						<div class="table-responsive phone">
						<div class="col-xs-12">
								<div class="col-xs-5">
									Conto di addebito:
								</div>
								<div class="col-xs-7">
									<strong>000000581427</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Data pagamento:
								</div>
								<div class="col-xs-7">
									<strong>
								  	04-12-2019
								  </strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Importo:
								</div>
								<div class="col-xs-7">
									<strong>1,00</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Contribuente:
								</div>
								<div class="col-xs-7">
									<strong>ALESSANDRO VENTURELLI</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
										Codice fiscale:
								</div>
								<div class="col-xs-7">
									<strong>VNTLSN85R03E349S</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Stato:
								</div>
								<div class="col-xs-7">
										<strong>Trasmessa a Banca
</strong>
								</div>
							</div>
						</div>





						<div class="table-responsive phone" id="idDatiSezione5"></div></div><!-- /riquadro clearfix-->


				<div class="riquadro clearfix">
					<div class="clearfix pull-right">

					</div>


						<div class="esitoOpe"><img src="/sapef24/f24/images/phone/ico_esitoOpeLavorazione.png" class="flex" title="delega in lavorazione" alt="delega in lavorazione"></div>




						<h4>ALESSANDRO VENTURELLI</h4>
						<div class="table-responsive phone">
						<div class="col-xs-12">
								<div class="col-xs-5">
									Conto di addebito:
								</div>
								<div class="col-xs-7">
									<strong>000000581427</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Data pagamento:
								</div>
								<div class="col-xs-7">
									<strong>
								  	27-11-2019
								  </strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Importo:
								</div>
								<div class="col-xs-7">
									<strong>15,00</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Contribuente:
								</div>
								<div class="col-xs-7">
									<strong>ALESSANDRO VENTURELLI</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
										Codice fiscale:
								</div>
								<div class="col-xs-7">
									<strong>VNTLSN85R03E349S</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Stato:
								</div>
								<div class="col-xs-7">
										<strong>Trasmessa a Banca
</strong>
								</div>
							</div>
						</div>





						<div class="table-responsive phone" id="idDatiSezione6"></div></div><!-- /riquadro clearfix-->


				<div class="riquadro clearfix">
					<div class="clearfix pull-right">

					</div>


						<div class="esitoOpe"><img src="/sapef24/f24/images/phone/ico_esitoOpeLavorazione.png" class="flex" title="delega in lavorazione" alt="delega in lavorazione"></div>




						<h4>ALESSANDRO VENTURELLI</h4>
						<div class="table-responsive phone">
						<div class="col-xs-12">
								<div class="col-xs-5">
									Conto di addebito:
								</div>
								<div class="col-xs-7">
									<strong>000000581427</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Data pagamento:
								</div>
								<div class="col-xs-7">
									<strong>
								  	19-09-2019
								  </strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Importo:
								</div>
								<div class="col-xs-7">
									<strong>10,00</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Contribuente:
								</div>
								<div class="col-xs-7">
									<strong>ALESSANDRO VENTURELLI</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
										Codice fiscale:
								</div>
								<div class="col-xs-7">
									<strong>VNTLSN85R03E349S</strong>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="col-xs-5">
									Stato:
								</div>
								<div class="col-xs-7">
										<strong>Delega da inviare
</strong>
								</div>
							</div>
						</div>





						<div class="table-responsive phone" id="idDatiSezione7"></div></div><!-- /riquadro clearfix-->









	</div><!--section clearfix-->


<script type="text/javascript">

		var selectedDelegaArray = document.f24MainForm.checkedItems;


	function mostraErroriDelega(idx) {
		window.open('/sapef24/f24/impostaAzienda.do?id_chiamata=1583330814117_01IHF24_7JrQK2RJ09449ABL&popup=true&show=errors&idx=' + idx, 'erroriDelega' , 'width=700, height=200, resizable, scrollbars, toolbar=no , menubar=no, top=180, left=240');
	}
	function selezionaRevoca(idx) {
		document.f24MainForm.selectedRevoca.value = 'X';
	}

	function isAlmenoUnaDelegaSelezionata() {

			for (var i=0; i<selectedDelegaArray.length; i++) {
				if (selectedDelegaArray[i].checked) {
					return true;
				}
			}

		return false;
	}
	function caricaDettaglio(indice, statoDelega) {
		mostra_loading_mobile();
		$.get("/sapef24/getDatiDettaglioDelega?idx="+indice+"&statoDelega="+statoDelega, function(result){
			$("#idDatiSezione"+indice).html(result);
			nascondi_loading_mobile();
		});
		$("#espandi"+indice).hide();
		$("#contrai"+indice).show();

	}

	function nascondiDettaglio(indice) {
		$("#idDatiSezione"+indice).html("");
		$("#espandi"+indice).show();
		$("#contrai"+indice).hide();
	}






































	</script>






						</form>
				</div><!-- /col-sm-12-->
			</div><!-- /row-->
		</div><!-- /container-->







</body></html>
