<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Modulo F24 Enti</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<script type="text/javascript" src='/sape/f24/javascript/jquery-1.9.0.js'></script>
<script type="text/javascript" src='/sape/f24/javascript/scroll.js'></script>
<script type="text/javascript" src='/sape/f24/javascript/jquery-migrate-1.0.0.js'></script>
<script type="text/javascript" src='/sape/f24/javascript/bootstrap.min.js'></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src='/sape/f24/javascript/ie10-viewport-bug-workaround.js'></script>


<!--<script type="text/javascript" src='/sape/f24/javascript/jquery.tablesorter.js'></script>-->
<script type="text/javascript" src='/sape/f24/javascript/jquery-ui.min.js'></script>

<!--nostro-->
	<script type="text/javascript"  src='/sape/f24/javascript/jquery.ui.touch-punch.min.js'></script>
<!-- * -->
<script type="text/javascript" src='/sape/f24/javascript/swfobject.js'></script>
<script type="text/javascript" src='/sape/f24/javascript/funzioniHT.js'></script>
<script type="text/javascript" src='/sape/f24/javascript/funzioniHB.js'></script>
<script type="text/javascript" src='/sape/f24/javascript/jquery.blockUI.js'></script>

<script type="text/javascript" src='/sape/f24/javascript/jquery.dataTables.min.js'></script>    


<!--nostro-->

	<script type="text/javascript" src='/sape/f24/javascript/help.js'></script>
	

	
	
<script type="text/javascript">
	function getPathImages() { return '/sape/f24/images/';}
</script>
<script type="text/javascript" src='/sape/f24/javascript/controlli.js'></script>
<script type="text/javascript" src='/sape/f24/javascript/doubleClickPrevention.js'></script>


<link media="screen,print" rel="stylesheet" type="text/css" href='/sape/f24/styles/jquery-ui.css' />
<link media="screen,print" rel="stylesheet" type="text/css" href='/sape/f24/styles/bootstrap.min.css' />
<link media="screen,print" rel="stylesheet" type="text/css" href='/sape/f24/styles/essentials.css' />
<link media="screen,print" rel="stylesheet" type="text/css" href='/sape/f24/styles/header-default.css.jsp' />
<link media="screen" rel="stylesheet" type="text/css" href='/sape/f24/styles/style.css.jsp' />
<link media="print" rel="stylesheet" type="text/css" href='/sape/f24/styles/stylePrint.css' />

	
<script type="text/javascript">

	if (window.opera) {
		window.opera.setOverrideHistoryNavigationMode('compatible');
		
		if (history.navigationMode) {
			history.navigationMode = 'compatible';
		}
	}
	
</script>
	
	
 
  <!--[if lt IE 9]>
  	<script type="text/javascript" src='/sape/f24/javascript/respond.min.js'></script>
  	<script type="text/javascript" src='/sape/f24/javascript/html5.js'></script>
  <![endif]-->
  <script type="text/javascript" src='/sape/f24/javascript/alten.js'></script>
  
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
#loading_mobile{  
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: #fff url(/sape/f24/images/phone/loading.gif) 50% no-repeat;
	opacity: 0.5;
	filter: alpha(opacity=50);
}

</style>
	



  	<script type="text/javascript" src="/sape/f24/javascript/totaliEntiAccise.js"></script>

</head>
<body onLoad="setSaldoParziale(this); visualizzaSegnalazione();" onclick="deselezionaTutti();"  style="zoom: 1;">

	<div class="wrapper">
		








	<input type="hidden" name="DelegaUniqueToken" value='MTQ5MDc4ODMwNDExMQ==' />
	<input type="hidden" name="_control.identificativoDelega" value='' />



	
	<input type="hidden" name="_control.reload" value="false" />

	  <script type="text/javascript">
	  	function visualizzaSegnalazione() {
	  	
	  	}
	  </script>
		<div class="container">

		</div>
		
		<div class="main row">
			<div class="container">				
				<div id="mainContent" class="center col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="riquadro clearfix"> 
						

						
					  
						<div class="clearfix">
							
							<div class="flag pagamentoF24">&nbsp;</div>
							<h1>Modulo F24</h1>
							<div class="padtit">
								<img border="0" src='/sape/f24/images/img_pag_unificato_f24.gif' alt="pagamento unificato" title="pagamento unificato"/>
							</div>
						</div>


				  
					  <!--<div class="divForm">-->
						  


<script type="text/javascript">

	$( "body" ).data( 'paging', false );

</script>

<script type="text/javascript">

	function setContoCorrente(param) {
		document.f24MainForm.elements['contoCorrente.codicePaese'].value = getText(param[8]);
		document.f24MainForm.elements['contoCorrente.codiceControllo'].value = getText(param[9]);
		document.f24MainForm.elements['contoCorrente.cin'].value = getText(param[10]);
		document.f24MainForm.elements['contoCorrente.abi'].value = getText(param[11]);
		document.f24MainForm.elements['contoCorrente.cab'].value = getText(param[12]);
		document.f24MainForm.elements['contoCorrente.identificativo'].value = getText(param[2]);
		document.f24MainForm.elements['contoCorrente.codiceFiscale'].value = getText(param[13]);
	}

	
		
    
    
		$(document).on('change', '.btn-file :file', function() {
		  var input = $(this),
		      numFiles = input.get(0).files ? input.get(0).files.length : 1,
		      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		  input.trigger('fileselect', [numFiles, label]);
		});
		
		$(document).ready( function() {
		    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
		        
		        var input = $(this).parents('.input-group').find(':text'),
		            log = numFiles > 1 ? numFiles + ' files selected' : label;
		        
		        if( input.length ) {
		            input.val(log);
		        } else {
		            if( log ) alert(log);
		        }
		        
		    });
		});


</script>
			
<div class="messagePanel error" style="display: block;">
	<h3 class="titleSection">Attenzione: si sono verificati degli errori</h3>
	<p>
		<strong>
				Si sono verificati degli errori. <a href="#" onclick="mostraErroriDelega();">Clicca qui</a> per vedere la lista.
		</strong>
	</p>
</div>

<div class="messagePanel alert" style="display: block;">
	<h3 class="titleSection">Attenzione: si sono verificati degli errori</h3>
	<p>
		<strong>
				Si sono verificati degli errori. <a href="#" onclick="mostraErroriDelega();">Clicca qui</a> per vedere la lista.
		</strong>
	</p>
</div>
			
<div class="section clearfix">
	<h3 class="titleSection">
		
			Rapporto selezionato
		
		
	</h3>

	<div class="selezioneCC tabellaSelezioneCC">
		<div class="CCselezionato clearfix">
			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
				<span id="label-intestazione">Intestato a:</span>
				<span class="col-md-7 col-lg-7 col-sm-7 col-xs-7" id="intestazione" >
					Cognome Nome
				</span>
				<span class="col-md-4 col-lg-4 col-sm-4 col-xs-4" id="conto">Conto corrente:</span>
				<span class="col-md-6 col-lg-6 col-sm-6 col-xs-6" id="numero">000000000000</span>
				<span class="col-md-4 col-lg-4 col-sm-4 col-xs-4">Filiale:</span>
				<span class="col-md-6 col-lg-6 col-sm-6 col-xs-6" id="agenzia">MILANO - 0000</span>
			</div>		
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" id="numeri">
				<span id="disponibile">Saldo disponibile:
					
						<strong class="positivo">
							88.00
						</strong>
					
					
				</span>
				<span id="contabile">Saldo contabile: 
					
						<strong class="positivo">
							88.00
						</strong>
					
					
				</span>
				<span id="affidamento">Affidamento: 
					
						<strong class="positivo">
							0.00
						</strong>
					
					
				</span>
			</div>
			<a class="btnSelezioneCC" href="javascript:void(0);" onclick="parent.refreshIframeSize();">
					
						<img src="/sape/f24/images/ico-select.png">
					
			</a>
			

		</div>

				<div class="table-responsive tabSelezioneCC">
			
			<table class="table table-striped" role="grid">
				<tbody>
					
					<tr class="odd" role="row">
						<td class="hidden" style="text-align:center;" numeroConto="0">
							
								<input type="radio" style="border: none" onclick="javascript: valorizzaContoCorrente(0);" checked />
							
						</td>
						<td>
							Conto corrente
						</td>
						<td>000000174456</td>
						<td>SEDE DI LODI - 2001</td>
						<td>Tclulora  Lmoaau</td>
						
							<td class="hidden">
								10.000,00
							</td>
						
						
						
							<td class="hidden" >
								999.936.952,12
							</td>
						
						
						
							<td class="positivo">
								999.930.126,89
							</td>
						
						
						
						<td class="hidden" >
							IT
						</td>
					
						<td class="hidden" >
							70
						</td>
					
						<td class="hidden" >
							R
						</td>
						
						<td class="hidden" >
							05034
						</td>
						
						<td class="hidden" >
							20301
						</td>
						
						<td class="hidden" >
							TLLMLC70A30F205O
						</td>
						
					</tr>
					
					<tr class="odd" role="row">
						<td class="hidden" style="text-align:center;" numeroConto="1">
							
								<input type="radio" style="border: none" onclick="javascript: valorizzaContoCorrente(1);"  />
							
						</td>
						<td>
							Conto corrente
						</td>
						<td>000000003610</td>
						<td>SEDE DI LODI - 2001</td>
						<td>Ola Lumalcuo Tra</td>
						
							<td class="hidden">
								0,00
							</td>
						
						
						
							<td class="hidden" >
								1.000.000.207,00
							</td>
						
						
						
							<td class="positivo">
								999.995.252,22
							</td>
						
						
						
						<td class="hidden" >
							IT
						</td>
					
						<td class="hidden" >
							81
						</td>
					
						<td class="hidden" >
							S
						</td>
						
						<td class="hidden" >
							05034
						</td>
						
						<td class="hidden" >
							20301
						</td>
						
						<td class="hidden" >
							TLLMLC70A30F205O
						</td>
						
					</tr>
					
					</tbody>
					<thead>
						<tr role="row">
							<th class="hidden">&nbsp;</th>
							<th>Tipo rapporto</th>
							<th>Conto</th>
							<th>Filiale</th>
							<th>Intestazione</th>
							<th class="hidden">Affidamento</th>
							<th class="hidden">Saldo Contabile</th>
							<th>Saldo Disponibile</th>
							<th class="hidden">codicePaese</th>
							<th class="hidden">codiceControllo</th>
							<th class="hidden">cin</th>
							<th class="hidden">abi</th>
							<th class="hidden">cab</th>
							<th class="hidden">codiceFiscale</th>
						</tr>
					</thead>
				</table>





			</div>
		</div>
	</div>
	

	

	<form name="uploadFlussoForm" method="post" action="/sape/f24/uploadFile.do" enctype="multipart/form-data" target='frF24Center'><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="1e75afcf5d7694446aafd94a15252976">

	  	<input type="hidden" name="_control.tipo" value='E' />
	  	<input type="hidden" name="uploaded" value="false" />

		
			
			<input type="hidden" name="id_chiamata" value="1490787954803_RAt8KMILi9OVbSBv" />
		
		

	 </form>

	






					<!--	</div> -->
				  


					<form name="f24MainForm" method="post" action="/sape/f24/inserisciNuovoModello.do" class="form-horizontal"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="1e75afcf5d7694446aafd94a15252976">
					
						<input type="hidden" name="DelegaUniqueToken" value='MTQ5MDc4ODMwNDExMQ==' />
						<input type="hidden" name="_control.tipo" value="E" />
						

<script type="text/javascript">
	$(document).ready(function(){		
		$('.dataNascitaHtml').datepicker({ yearRange: '-100:+0', buttonImage: "/sape/f24/images/calendar.png"});
		
		
				selezionaPersonaFisica(true)
		
	});
</script>

<script type="text/javascript">

	function selezionaPersonaFisica(fromRubrica) {

	
		document.forms['f24MainForm'].elements['contribuente.codFis'][0].disabled = false;
		document.forms['f24MainForm'].elements['contribuente.codFis'][1].disabled = true;
		
		
		document.forms['f24MainForm'].elements['flagAnnoSolare'][0].disabled = false;
		document.forms['f24MainForm'].elements['flagAnnoSolare'][1].disabled = true;
		
		
		document.forms['f24MainForm'].elements['contribuente.cognome'].disabled = false;
		document.forms['f24MainForm'].elements['contribuente.cognome'].className = 'form-control';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['contribuente.cognome'].value = document.forms['f24MainForm'].elements['backupCognome'].value;
		}

		document.forms['f24MainForm'].elements['contribuente.nome'].disabled = false;
		document.forms['f24MainForm'].elements['contribuente.nome'].className = 'form-control';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['contribuente.nome'].value = document.forms['f24MainForm'].elements['backupNome'].value;
		}

		document.forms['f24MainForm'].elements['contribuente.sesso'].disabled = false;
		document.forms['f24MainForm'].elements['contribuente.sesso'].className = 'form-control';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['contribuente.sesso'].selectedIndex = document.forms['f24MainForm'].elements['backupSesso'].value;
		}
		document.forms['f24MainForm'].elements['contribuente.dataNascitaHtml'].disabled = false;
		document.forms['f24MainForm'].elements['contribuente.dataNascitaHtml'].className = 'dataNascitaHtml form-control w-auto';
		$('.dataNascitaHtml').datepicker('enable');
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['contribuente.dataNascitaHtml'].value = document.forms['f24MainForm'].elements['backupDataNascita'].value;
		}
	
		document.forms['f24MainForm'].elements['contribuente.comNas'].disabled = false;
		document.forms['f24MainForm'].elements['contribuente.comNas'].className = 'form-control';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['contribuente.comNas'].value = document.forms['f24MainForm'].elements['backupComuneNascita'].value;
		}

		document.forms['f24MainForm'].elements['contribuente.provNas'].disabled = false;
		document.forms['f24MainForm'].elements['contribuente.provNas'].className = 'form-control';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['contribuente.provNas'].value = document.forms['f24MainForm'].elements['backupProvinciaNascita'].value;
		}

		document.forms['f24MainForm'].elements['contribuente.ragSoc'].disabled = true;
		document.forms['f24MainForm'].elements['contribuente.ragSoc'].className = 'solaLettura';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['backupRagioneSociale'].value = document.forms['f24MainForm'].elements['contribuente.ragSoc'].value;
		}
		document.forms['f24MainForm'].elements['contribuente.ragSoc'].value = '';


		jQuery("#giuridica").removeClass("nonSelezionato");
		jQuery("#giuridica").addClass("selezionato");
		jQuery("#fisica").removeClass("selezionato");
		jQuery("#fisica").addClass("nonSelezionato");

		$('.schedaPersonaFisica').show();
		$('.schedaPersonaGiuridica').hide();

	}

	function selezionaPersonaGiuridica(fromRubrica) {

	
		document.forms['f24MainForm'].elements['contribuente.codFis'][0].disabled = true;
		document.forms['f24MainForm'].elements['contribuente.codFis'][1].disabled = false;

		
		document.forms['f24MainForm'].elements['flagAnnoSolare'][0].disabled = true;
		document.forms['f24MainForm'].elements['flagAnnoSolare'][1].disabled = false;
		
		
		document.forms['f24MainForm'].elements['contribuente.cognome'].disabled = true;
		document.forms['f24MainForm'].elements['contribuente.cognome'].className = 'solaLettura';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['backupCognome'].value = document.forms['f24MainForm'].elements['contribuente.cognome'].value;
		}
		document.forms['f24MainForm'].elements['contribuente.cognome'].value = '';

		document.forms['f24MainForm'].elements['contribuente.nome'].disabled = true;
		document.forms['f24MainForm'].elements['contribuente.nome'].className = 'solaLettura';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['backupNome'].value = document.forms['f24MainForm'].elements['contribuente.nome'].value;
		}
	

		document.forms['f24MainForm'].elements['contribuente.sesso'].disabled = true;
		document.forms['f24MainForm'].elements['contribuente.sesso'].className = 'solaLettura';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['backupSesso'].value = document.forms['f24MainForm'].elements['contribuente.sesso'].selectedIndex;
		}
		document.forms['f24MainForm'].elements['contribuente.sesso'].selectedIndex = 0;

		document.forms['f24MainForm'].elements['contribuente.dataNascitaHtml'].disabled = true;
		document.forms['f24MainForm'].elements['contribuente.dataNascitaHtml'].className = '';
		$('.dataNascitaHtml').datepicker('disable');
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['backupDataNascita'].value = document.forms['f24MainForm'].elements['contribuente.dataNascitaHtml'].value;
		}
		document.forms['f24MainForm'].elements['contribuente.dataNascitaHtml'].value = '';

		document.forms['f24MainForm'].elements['contribuente.comNas'].disabled = true;
		document.forms['f24MainForm'].elements['contribuente.comNas'].className = 'solaLettura';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['backupComuneNascita'].value = document.forms['f24MainForm'].elements['contribuente.comNas'].value;
		}

		document.forms['f24MainForm'].elements['contribuente.provNas'].disabled = true;
		document.forms['f24MainForm'].elements['contribuente.provNas'].className = 'solaLettura';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['backupProvinciaNascita'].value = document.forms['f24MainForm'].elements['contribuente.provNas'].value;
		}
		document.forms['f24MainForm'].elements['contribuente.provNas'].value = '';

		document.forms['f24MainForm'].elements['contribuente.ragSoc'].disabled = false;
		document.forms['f24MainForm'].elements['contribuente.ragSoc'].className = 'form-control';
		if (!fromRubrica) {
			document.forms['f24MainForm'].elements['contribuente.ragSoc'].value = document.forms['f24MainForm'].elements['backupRagioneSociale'].value;
		}

		jQuery("#fisica").removeClass("nonSelezionato");
		jQuery("#fisica").addClass("selezionato");
		jQuery("#giuridica").removeClass("selezionato");
		jQuery("#giuridica").addClass("nonSelezionato");

		$('.schedaPersonaFisica').hide();
		$('.schedaPersonaGiuridica').show();


	}

	

		function decodeHtml(s) {
			return s.replace( /\&quot;/g, '"' ).replace( /\&lt;/g, '<' ).replace( /\&gt;/g, '>' ).replace( /\&amp;/g, '&' ).replace( /\&#39;/g, '\'' );
		}

		function compila(indice) {

			if (indice == 0) {
				document.getElementsByName("contribuente.codFis")[0].value = '';
				document.getElementsByName("contribuente.codFis")[1].value = '';
				document.getElementsByName("contribuente.cognome")[0].value = '';
				document.getElementsByName("contribuente.nome")[0].value = '';
				document.getElementsByName("contribuente.ragSoc")[0].value = '';
				document.getElementsByName("contribuente.sesso")[0].value = '';
				document.forms['f24MainForm'].elements['contribuente.sesso'].selectedIndex = 0;
				document.getElementsByName("contribuente.dataNascitaHtml")[0].value = '';
				document.getElementsByName("contribuente.indirizzo")[0].value = '';
				document.getElementsByName("contribuente.comNas")[0].value = '';
				document.getElementsByName("contribuente.provNas")[0].value = '';
				document.getElementsByName("contribuente.comDom")[0].value = '';
				document.getElementsByName("contribuente.provDom")[0].value = '';
				document.getElementsByName("contribuente.capDom")[0].value = '';
				document.getElementsByName("contribuente.secCodFis")[0].value = '';
				document.getElementsByName("contribuente.codIde")[0].value = '';
				document.getElementsByName("nuovoContribuente")[0].value = '1';
			}

		
			if (indice == 1) {
				document.getElementsByName("contribuente.codFis")[0].value = 'WWWWWW00W00W000W';
				document.getElementsByName("contribuente.codFis")[1].value = 'WWWWWW00W00W000W';
				document.getElementsByName("contribuente.cognome")[0].value = decodeHtml('COGNOME');
				document.getElementsByName("contribuente.nome")[0].value = decodeHtml('NOME');
				document.getElementsByName("contribuente.ragSoc")[0].value = decodeHtml('');
				document.getElementsByName("contribuente.sesso")[0].value = 'M';
				
					document.getElementsByName("contribuente.dataNascitaHtml")[0].value = '00/00/0000';
				
				document.getElementsByName("contribuente.indirizzo")[0].value = decodeHtml('VIA DANTE ALIGHIERI 99');
				document.getElementsByName("contribuente.comNas")[0].value = decodeHtml('CASALPUSTERLENGO');
				document.getElementsByName("contribuente.provNas")[0].value = 'WW';
				document.getElementsByName("contribuente.comDom")[0].value = decodeHtml('CASALPUSTERLENGO');
				document.getElementsByName("contribuente.provDom")[0].value = 'WW';
				document.getElementsByName("contribuente.capDom")[0].value = '00000';
				document.getElementsByName("nuovoContribuente")[0].value = '0';
				if ('true' == 'true') {
					selezionaPersonaFisica(true);
				} else {
					selezionaPersonaGiuridica(true);
				}
			}
		

		}
	

</script>

<!-- Inizio sezione Contribuente -->
<div class="section clearfix">
	<h3 class="titleSection">Dati contribuente</h3>
		<div class="bs-example">
			<div class="form-group">
				
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<label class="control-label"><b>Seleziona Contribuente</b></label>
						<div class="form-field">
							<select class="form-control" onchange="compila(this.value)">
								<option value="0">Nuovo Contribuente</option>
								
									
										
											<option value="1"
											
												
												
													 selected
												
											
											>COGNOME NOME</option>
										
									
								
							</select>
							<input type="hidden" name="nuovoContribuente" value="0" />
						</div>
					</div>
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2 nascosto">
						<label class="control-label"><br/>Vuoi salvare/aggiornare i dati?</label>
					</div>
					<div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 margin-top22 nascosto">
						<input type="hidden" name="flagUpdateContribuente" value="0" id="flagUpdateContribuenteId" />
						<div id='slider' style="width:50px"></div>
						<div style="position:relative">
						  <div id="off" class="onText" style="float: left; position: absolute; left: -5px; padding-top: 3px;">Off</div>
						  <div id="on" class="onText" style="float: left; position: absolute; left: 40px; padding-top: 3px;">On</div>
						</div>
					</div>
				
			</div>
				
					<div class="form-group nascosto">
						<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">Tipo persona:</div>
						<div class="col-md-10 col-lg-10 col-sm-10 col-xs-10 pull-right">
							<input type="button" id="fisica" class="btn" value="Fisica"  onclick="selezionaPersonaFisica(false);" />
							<input type="button" id="giuridica" class="btn" value="Giuridica"  onclick="selezionaPersonaGiuridica(false);" />
						</div>
					</div>
				
				<div class="form-group schedaPersonaFisica" id="schedaPersonaFisica">
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<label class="control-label">Nome:</label>
						<div class="form-field">
							<input type="text" name="contribuente.nome" tabindex="1" size="30" maxlength="20" value="NOME" 
								
								
							/>
							<input type="hidden" name="backupNome" value="" disabled="disabled" />
						</div>
					</div>
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<label class="control-label">Cognome:</label>
						<div class="form-field">
							<input type="text" name="contribuente.cognome" tabindex="2" size="30" maxlength="24" value="COGNOME" 
								
								
							/>
							<input type="hidden" name="backupCognome" />
						</div>
					</div>
						
					
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<label class="control-label"><br/>Barrare in caso di anno d'imposta non coincidente con anno solare</label>
						</div>
						<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 margin-top22">
							<input type="checkbox" name="flagAnnoSolare" tabindex="3" class="checkbox" 
								value="1"
							
							/>
							
						</div>
					
					
				</div>
				<div class="form-group schedaPersonaFisica" id="schedaPersonaFisica" >
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<label class="control-label">Codice Fiscale:</label>
						<div class="form-field">
							<input type="text" name="contribuente.codFis" tabindex="4" size="30" maxlength="16" value="WWWWWW00W00W000W" class="form-control" 
								
								
							/>
						</div>
					</div>
					<div class="form-field-input col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<label class="control-label">Sesso:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-5 col-md-5 col-sm-5 col-xs-6">
								
				
								
									
										<select name="contribuente.sesso" tabindex="5" >
											<option value=" ">&nbsp;</option>
											<option value="M" selected="selected">M</option>
											<option value="F">F</option>
										</select>
								
								
								
								<input type="hidden" name="backupSesso" />
							</div>
						</div>
					</div>
				</div>
				<div class="form-group schedaPersonaFisica" id="schedaPersonaFisica" >
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<label class="control-label">Comune (o stato estero di nascita):</label>
						<div class="form-field">
							<input type="text" name="contribuente.comNas" tabindex="6" maxlength="25" value="MILANO" 
								
								
							/>
							<input type="hidden" name="backupComuneNascita" />
						</div>
					</div>
					<div class="form-field-input col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<label class="control-label">Provincia nascita:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-4 col-md-6 col-sm-6 col-xs-7">
								
				
								
									
											<select name="contribuente.provNas" tabindex="7" >
												
													<option value=""></option>
												
													<option value="AG">AG</option>
												
													<option value="AL">AL</option>
												
													<option value="AN">AN</option>
												
													<option value="AO">AO</option>
												
													<option value="AP">AP</option>
												
													<option value="AQ">AQ</option>
												
													<option value="AR">AR</option>
												
													<option value="AT">AT</option>
												
													<option value="AV">AV</option>
												
													<option value="BA">BA</option>
												
													<option value="BG">BG</option>
												
													<option value="BI">BI</option>
												
													<option value="BL">BL</option>
												
													<option value="BN">BN</option>
												
													<option value="BO">BO</option>
												
													<option value="BR">BR</option>
												
													<option value="BS">BS</option>
												
													<option value="BT">BT</option>
												
													<option value="BZ">BZ</option>
												
													<option value="CA">CA</option>
												
													<option value="CB">CB</option>
												
													<option value="CE">CE</option>
												
													<option value="CH">CH</option>
												
													<option value="CI">CI</option>
												
													<option value="CL">CL</option>
												
													<option value="CN">CN</option>
												
													<option value="CO">CO</option>
												
													<option value="CR">CR</option>
												
													<option value="CS">CS</option>
												
													<option value="CT">CT</option>
												
													<option value="CZ">CZ</option>
												
													<option value="EE">EE</option>
												
													<option value="EN">EN</option>
												
													<option value="FC">FC</option>
												
													<option value="FE">FE</option>
												
													<option value="FG">FG</option>
												
													<option value="FI">FI</option>
												
													<option value="FM">FM</option>
												
													<option value="FO">FO</option>
												
													<option value="FR">FR</option>
												
													<option value="FU">FU</option>
												
													<option value="GE">GE</option>
												
													<option value="GO">GO</option>
												
													<option value="GR">GR</option>
												
													<option value="IM">IM</option>
												
													<option value="IS">IS</option>
												
													<option value="KR">KR</option>
												
													<option value="LC">LC</option>
												
													<option value="LE">LE</option>
												
													<option value="LI">LI</option>
												
													<option value="LO" selected="selected">LO</option>
												
													<option value="LT">LT</option>
												
													<option value="LU">LU</option>
												
													<option value="MB">MB</option>
												
													<option value="MC">MC</option>
												
													<option value="ME">ME</option>
												
													<option value="MI">MI</option>
												
													<option value="MN">MN</option>
												
													<option value="MO">MO</option>
												
													<option value="MS">MS</option>
												
													<option value="MT">MT</option>
												
													<option value="NA">NA</option>
												
													<option value="NO">NO</option>
												
													<option value="NU">NU</option>
												
													<option value="OG">OG</option>
												
													<option value="OR">OR</option>
												
													<option value="OT">OT</option>
												
													<option value="PA">PA</option>
												
													<option value="PC">PC</option>
												
													<option value="PD">PD</option>
												
													<option value="PE">PE</option>
												
													<option value="PG">PG</option>
												
													<option value="PI">PI</option>
												
													<option value="PL">PL</option>
												
													<option value="PN">PN</option>
												
													<option value="PO">PO</option>
												
													<option value="PR">PR</option>
												
													<option value="PS">PS</option>
												
													<option value="PT">PT</option>
												
													<option value="PU">PU</option>
												
													<option value="PV">PV</option>
												
													<option value="PZ">PZ</option>
												
													<option value="RA">RA</option>
												
													<option value="RC">RC</option>
												
													<option value="RE">RE</option>
												
													<option value="RG">RG</option>
												
													<option value="RI">RI</option>
												
													<option value="RM">RM</option>
												
													<option value="RN">RN</option>
												
													<option value="RO">RO</option>
												
													<option value="SA">SA</option>
												
													<option value="SI">SI</option>
												
													<option value="SO">SO</option>
												
													<option value="SP">SP</option>
												
													<option value="SR">SR</option>
												
													<option value="SS">SS</option>
												
													<option value="SV">SV</option>
												
													<option value="TA">TA</option>
												
													<option value="TE">TE</option>
												
													<option value="TN">TN</option>
												
													<option value="TO">TO</option>
												
													<option value="TP">TP</option>
												
													<option value="TR">TR</option>
												
													<option value="TS">TS</option>
												
													<option value="TV">TV</option>
												
													<option value="UD">UD</option>
												
													<option value="VA">VA</option>
												
													<option value="VB">VB</option>
												
													<option value="VC">VC</option>
												
													<option value="VE">VE</option>
												
													<option value="VI">VI</option>
												
													<option value="VR">VR</option>
												
													<option value="VS">VS</option>
												
													<option value="VT">VT</option>
												
													<option value="VV">VV</option>
												
													<option value="ZA">ZA</option>
												
													<option value="ZR">ZR</option>
												
											</select>
									
									
								
								<input type="hidden" name="backupProvinciaNascita" />
								<input type="hidden" name="contribuente.capDom" value="20900" />
							</div>
						</div>
					</div>
					<div class="form-field-input col-lg-2 col-md-2 col-sm-2 col-xs-3">
						<label class="control-label">	Data nascita:</label>
						<div class="form-field">
							
							
								
									<input type="text" name="contribuente.dataNascitaHtml" tabindex="8" size="13" maxlength="10" value="00/0/0000" class="datepicker dataNascitaHtml" 
										
									/>
								
							
							
							<input type="hidden" name="backupDataNascita" />
						</div>
					</div>
				</div>
				<div class="form-group schedaPersonaGiuridica" id="schedaPersonaGiuridica" >
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<label class="control-label">Denominazione:</label>
						<div class="form-field">
							<input type="text" name="contribuente.ragSoc" tabindex="9" size="30" maxlength="44" class="form-control" 
								
							/>
							<input type="hidden" name="backupRagioneSociale" />
						</div>
					</div>
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<label class="control-label">Cod. fiscale/ partita IVA:</label>
						<div class="form-field">
							<input type="text" name="contribuente.codFis" tabindex="10" size="30" maxlength="16" value="WWWWWW00W00W000W" class="form-control" 
								
								
							/>
						</div>
					</div>
					
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<label class="control-label"><br/>Barrare in caso di anno d'imposta non coincidente con anno solare</label>
						</div>
						<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 margin-top22">
							<input type="checkbox" name="flagAnnoSolare" tabindex="11" class="checkbox" 
								value="1"
							
							/>
							
						</div>
					
					
				</div>
			
				<div class="form-group">
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<label class="control-label"><b>Domicilio Fiscale</b><br/>Indirizzo:</label>
						<div class="form-field">
							<input type="text" name="contribuente.indirizzo" tabindex="12" size="72" maxlength="34" value="VIA DANTE ALIGHIERI 99" class="form-control" 
								
							/>
						</div>
					</div>
				
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<label class="control-label"><br/>Comune:</label>
						<div class="form-field">
							<input type="text" name="contribuente.comDom" tabindex="13" size="30" maxlength="25" value="CASALPUSTERLENGO" class="form-control" 
								
							/>
						</div>
					</div>				
					<div class="form-field-input col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<label class="control-label"><br/>Provincia:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-6 col-md-6 col-sm-6 col-xs-7">
								
				
								
										<select name="contribuente.provDom" tabindex="14" class="form-control" >
										
											<option value=""></option>
											
											<option value="AG">AG</option>
											
											<option value="AL">AL</option>
											
											<option value="AN">AN</option>
											
											<option value="AO">AO</option>
											
											<option value="AP">AP</option>
											
											<option value="AQ">AQ</option>
											
											<option value="AR">AR</option>
											
											<option value="AT">AT</option>
											
											<option value="AV">AV</option>
											
											<option value="BA">BA</option>
											
											<option value="BG">BG</option>
											
											<option value="BI">BI</option>
											
											<option value="BL">BL</option>
											
											<option value="BN">BN</option>
											
											<option value="BO">BO</option>
											
											<option value="BR">BR</option>
											
											<option value="BS">BS</option>
											
											<option value="BT">BT</option>
											
											<option value="BZ">BZ</option>
											
											<option value="CA">CA</option>
											
											<option value="CB">CB</option>
											
											<option value="CE">CE</option>
											
											<option value="CH">CH</option>
											
											<option value="CI">CI</option>
											
											<option value="CL">CL</option>
											
											<option value="CN">CN</option>
											
											<option value="CO">CO</option>
											
											<option value="CR">CR</option>
											
											<option value="CS">CS</option>
											
											<option value="CT">CT</option>
											
											<option value="CZ">CZ</option>
											
											<option value="EE">EE</option>
											
											<option value="EN">EN</option>
											
											<option value="FC">FC</option>
											
											<option value="FE">FE</option>
											
											<option value="FG">FG</option>
											
											<option value="FI">FI</option>
											
											<option value="FM">FM</option>
											
											<option value="FO">FO</option>
											
											<option value="FR">FR</option>
											
											<option value="GE">GE</option>
											
											<option value="GO">GO</option>
											
											<option value="GR">GR</option>
											
											<option value="IM">IM</option>
											
											<option value="IS">IS</option>
											
											<option value="KR">KR</option>
											
											<option value="LC">LC</option>
											
											<option value="LE">LE</option>
											
											<option value="LI">LI</option>
											
											<option value="LO"" selected="selected">LO</option>
											
											<option value="LT">LT</option>
											
											<option value="LU">LU</option>
											
											<option value="MB>MB</option>
											
											<option value="MC">MC</option>
											
											<option value="ME">ME</option>
											
											<option value="MI">MI</option>
											
											<option value="MN">MN</option>
											
											<option value="MO">MO</option>
											
											<option value="MS">MS</option>
											
											<option value="MT">MT</option>
											
											<option value="NA">NA</option>
											
											<option value="NO">NO</option>
											
											<option value="NU">NU</option>
											
											<option value="OG">OG</option>
											
											<option value="OR">OR</option>
											
											<option value="OT">OT</option>
											
											<option value="PA">PA</option>
											
											<option value="PC">PC</option>
											
											<option value="PD">PD</option>
											
											<option value="PE">PE</option>
											
											<option value="PG">PG</option>
											
											<option value="PI">PI</option>
											
											<option value="PN">PN</option>
											
											<option value="PO">PO</option>
											
											<option value="PR">PR</option>
											
											<option value="PS">PS</option>
											
											<option value="PT">PT</option>
											
											<option value="PU">PU</option>
											
											<option value="PV">PV</option>
											
											<option value="PZ">PZ</option>
											
											<option value="RA">RA</option>
											
											<option value="RC">RC</option>
											
											<option value="RE">RE</option>
											
											<option value="RG">RG</option>
											
											<option value="RI">RI</option>
											
											<option value="RM">RM</option>
											
											<option value="RN">RN</option>
											
											<option value="RO">RO</option>
											
											<option value="SA">SA</option>
											
											<option value="SI">SI</option>
											
											<option value="SO">SO</option>
											
											<option value="SP">SP</option>
											
											<option value="SR">SR</option>
											
											<option value="SS">SS</option>
											
											<option value="SV">SV</option>
											
											<option value="TA">TA</option>
											
											<option value="TE">TE</option>
											
											<option value="TN">TN</option>
											
											<option value="TO">TO</option>
											
											<option value="TP">TP</option>
											
											<option value="TR">TR</option>
											
											<option value="TS">TS</option>
											
											<option value="TV">TV</option>
											
											<option value="UD">UD</option>
											
											<option value="VA">VA</option>
											
											<option value="VB">VB</option>
											
											<option value="VC">VC</option>
											
											<option value="VE">VE</option>
											
											<option value="VI">VI</option>
											
											<option value="VR">VR</option>
											
											<option value="VS">VS</option>
											
											<option value="VT">VT</option>
											
											<option value="VV">VV</option>
											
										</select>
								
							</div>
						</div>
					</div>
				</div>
				
					<div class="form-group">
						<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-6">
							<label class="control-label">Codice Fiscale del coobbligato, erede, genitore,<br/> tutore o curatore fallimentare</label>
							<div class="form-field">		
								<input type="text" name="contribuente.secCodFis" tabindex="15" maxlength="16" class="form-control" 
									
								/>
							</div>
						</div>
						<div class="form-field-input col-lg-3 col-md-4 col-sm-4 col-xs-4"><br/>
							 
  							<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceIdentificativoCoobbligato');" class="help">Codice Identificativo</a></label>
							
							
							<div class="form-field">								
								<input type="text" name="contribuente.codIde" tabindex="16" maxlength="2" class="form-control w-auto" 
									
								/>				
								
									 
										<a href="javascript: void(0);" class="action nascosto" title="Seleziona il codice Identificativo">
											<img border="0" src='/sape/f24/images/ico-filter.png' name="contribuente.codIde.image" onclick="ricercaTributo(this, 'codiceIdentificativoCoobbligato', 'f24_pop_codice_tributo.php');" alt="cerca codice" title="cerca codice"/>
										</a>
									
								
								
							</div>
						</div>
					</div>
	





	


<script type="text/javascript">

	$(document).ready(function(){

			$('#slider').slider({
				min: 0,
	      		max: 1,
	      		range: "min",
	      		slide:function(event,ui){
	       			if (ui.value==0){
		      			$('#flagUpdateContribuenteId').val('0');
						$('#off').css("font-weight", "bold");
						$('#on').css("font-weight", "");

				   	}else if (ui.value==1){
		      			$('#flagUpdateContribuenteId').val('1');
						$('#on').css("font-weight", "bold");
						$('#off').css("font-weight", "");

				    }
	      		}
			});


			if ($('#flagUpdateContribuenteId').val() == '0') {
				$('#slider').slider('value', 0 );
			} else if ($('#flagUpdateContribuenteId').val() == '1'){
				$('#slider').slider('value', 1 );
			}

			$('#off').css("font-weight", "bold");

			});


</script>

	<!-- Fine sezione Contribuente -->

</div>
</div>










							











	
<!-- Inizio sezione Erario -->


	<div class="section clearfix">
			<h3 class="titleSection">
				Erario
			</h3>
			
			<div class="bs-example">
				<div class="form-group">
					<div class="col-md-2 col-lg-3 col-sm-2 col-xs-3"><b>Imposte Dirette - IVA Ritenute alla Fonte<br />Altri Tributi ed Interessi</b></div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
						 
							<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=tributoErario');" class="action">Codice<br />Tributo</a></label>
			   			
						<div class="form-field">
							<input type="text" name="sezione(erario).riga[0].codiceTributo" tabindex="17" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
								
							/>
							
								<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
									
										<img  border="0"  src='/sape/f24/images/lampadina.jpg' name="sezione(erario).riga[0].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoErario', 'f24_pop_codice_tributo.php');" style="display : none;" />
									
								</a>
							
						</div>
					</div>
					<div class="form-field-input col-md-2 col-lg-1 col-sm-2 col-xs-2">
						<label class="control-label" style="white-space: nowrap;">Rateaz./Regione/<br />Prov./Mese rif.</label>
						<div class="form-field">
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
								<input type="text" name="sezione(erario).riga[0].rateazione" tabindex="18" size="4" maxlength="4" class="form-control" onfocus="selezionato(this)" 
									
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
						<label class="control-label"><br/>Anno di rif.</label>
						<div class="form-field">
							<input type="text" name="sezione(erario).riga[0].anno" tabindex="19" size="4" maxlength="4" class="form-control numerico" 
								
							/>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
						<label class="control-label">Importi a debito<br/> versati</label>
						<div class="form-field">
							<input type="text" name="sezione(erario).riga[0].interiImportoDebito" tabindex="20" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
								class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(erario).riga[0].centImportoDebito" tabindex="21" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
								
							/>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<label class="control-label">Importi a credito<br/>compensati</label>
						<div class="form-field">
							<input type="text" name="sezione(erario).riga[0].interiImportoCredito" tabindex="22" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
								class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(erario).riga[0].centImportoCredito" tabindex="23" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
								
							/>
						</div>
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="form-field-input col-md-1 col-md-offset-2 col-lg-1 col-lg-offset-3 col-sm-1 col-sm-offset-2 col-xs-1 col-xs-offset-3">
							<input type="text" name="sezione(erario).riga[1].codiceTributo" tabindex="24" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
							/>
							
								<a href="javascript: void(0);" title="Seleziona il codice tributo"  class="pull-right">
									
										<img  border="0"  src='/sape/f24/images/lampadina.jpg' name="sezione(erario).riga[1].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoErario', 'f24_pop_codice_tributo.php');" style="display : none;" />
									
								</a>
							

					</div>
					<div class="form-field-input col-md-2 col-lg-1 col-sm-2 col-xs-2">
						<div class="form-field">
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
								<input type="text" name="sezione(erario).riga[1].rateazione" tabindex="25" size="4" maxlength="4" class="form-control" onfocus="selezionato(this)" 
									
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
						<input type="text" name="sezione(erario).riga[1].anno" tabindex="26" size="4" maxlength="4" class="form-control numerico" 
							
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
							<input type="text" name="sezione(erario).riga[1].interiImportoDebito" tabindex="27" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
								class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(erario).riga[1].centImportoDebito" tabindex="28" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
								
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(erario).riga[1].interiImportoCredito" tabindex="29" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(erario).riga[1].centImportoCredito" tabindex="30" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
							
						/>
					</div>
				</div>
			

			
				<div class="form-group">
					<div class="form-field-input col-md-2 col-lg-3 col-sm-2 col-xs-3" >						
							<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=ufficioErario');" class="help">Ufficio</a></label>			   		
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1 ">
						<input type="text" name="sezione(erario).riga[2].codiceTributo" tabindex="31" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
						
							<a href="javascript: void(0);" title="Seleziona il codice tributo"  class="pull-right">
								
									<img  border="0"  src='/sape/f24/images/lampadina.jpg' name="sezione(erario).riga[2].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoErario', 'f24_pop_codice_tributo.php');" style="display : none;" />
																
							</a>
						
					</div>
					<div class="form-field-input col-md-2 col-lg-1 col-sm-2 col-xs-2">
						<div class="form-field">
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
								<input type="text" name="sezione(erario).riga[2].rateazione" tabindex="32" size="4" maxlength="4" class="form-control" onfocus="selezionato(this)" 
									
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
						<input type="text" name="sezione(erario).riga[2].anno" tabindex="33" size="4" maxlength="4" class="form-control numerico" 
							
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
							<input type="text" name="sezione(erario).riga[2].interiImportoDebito" tabindex="34" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
								class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(erario).riga[2].centImportoDebito" tabindex="35" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
								
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(erario).riga[2].interiImportoCredito" tabindex="36" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(erario).riga[2].centImportoCredito" tabindex="37" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
							
						/>
					</div>
				</div>
			
			
				<div class="form-group">
					<div class="form-field-input col-md-2 col-lg-3 col-sm-2 col-xs-3">
						<div class="form-field">
							<div class="form-field-input col-md-5 col-lg-5 col-sm-5 col-xs-5">
								<input type="text" name="sezione(erario).codiceUfficio" tabindex="38" size="11" maxlength="3" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
								
								/><a href="javascript: void(0);" title="Seleziona il codice Ufficio"  class="pull-right">
									
										<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(erario).codiceUfficio.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'ufficioErario', 'f24_pop_codice_tributo.php');" style="display : none;" />
									
									
								</a>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
						<input type="text" name="sezione(erario).riga[3].codiceTributo" tabindex="39" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/><a href="javascript: void(0);" title="Seleziona il codice tributo"  class="pull-right">
							
								<img  border="0"  src='/sape/f24/images/lampadina.jpg' name="sezione(erario).riga[3].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoErario', 'f24_pop_codice_tributo.php');" style="display : none;" />
							
							</a>
					</div>
					<div class="form-field-input col-md-2 col-lg-1 col-sm-2 col-xs-2">
						<div class="form-field">
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
								<input type="text" name="sezione(erario).riga[3].rateazione" tabindex="40" size="4" maxlength="4" class="form-control" onfocus="selezionato(this)" 
								
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
							<input type="text" name="sezione(erario).riga[3].anno" tabindex="41" size="4" maxlength="4" class="form-control numerico" 
							
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
							<input type="text" name="sezione(erario).riga[3].interiImportoDebito" tabindex="42" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
							class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(erario).riga[3].centImportoDebito" tabindex="43" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
							
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
							<input type="text" name="sezione(erario).riga[3].interiImportoCredito" tabindex="44" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
							class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(erario).riga[3].centImportoCredito" tabindex="45" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
							
							/>
					</div>
				</div>
				


			
				<div class="form-group">
					<div class="form-field-input col-md-2 col-lg-3 col-sm-2 col-xs-3">
						<label class="control-label">
							Atto
						</label>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
						<input type="text" name="sezione(erario).riga[4].codiceTributo" tabindex="46" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
						<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
							
								<img  border="0"  src='/sape/f24/images/lampadina.jpg' name="sezione(erario).riga[4].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoErario', 'f24_pop_codice_tributo.php');" style="display : none;" />
							
						</a>
					</div>
					<div class="form-field-input col-md-2 col-lg-1 col-sm-2 col-xs-2">
						<div class="form-field">
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
								<input type="text" name="sezione(erario).riga[4].rateazione" tabindex="47" size="4" maxlength="4" class="form-control" onfocus="selezionato(this)" 
									
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
						<input type="text" name="sezione(erario).riga[4].anno" tabindex="48" size="4" maxlength="4" class="form-control numerico" 
							
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
							<input type="text" name="sezione(erario).riga[4].interiImportoDebito" tabindex="49" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
								class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(erario).riga[4].centImportoDebito" tabindex="50" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
								
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(erario).riga[4].interiImportoCredito" tabindex="51" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(erario).riga[4].centImportoCredito" tabindex="52" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
							
						/>
					</div>
				</div>
			
			
				<div class="form-group">
					<div class="form-field-input col-md-2 col-lg-3 col-sm-2 col-xs-3">
						<div class="form-field">
							<div class="form-field-input col-md-10 col-lg-5 col-sm-10 col-xs-10">
								<input type="text" name="sezione(erario).codiceAtto" tabindex="53" size="11" maxlength="11" class="form-control numerico" 
									
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
						<input type="text" name="sezione(erario).riga[5].codiceTributo" tabindex="54" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
						<a href="javascript: void(0);" title="Seleziona il codice tributo"  class="pull-right">
							
								<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(erario).riga[5].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoErario', 'f24_pop_codice_tributo.php');" style="display : none;" />
							
							
						</a>
					</div>
					<div class="form-field-input col-md-2 col-lg-1 col-sm-2 col-xs-2">
						<div class="form-field">
							<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
								<input type="text" name="sezione(erario).riga[5].rateazione" tabindex="55" size="4" maxlength="4" class="form-control" onfocus="selezionato(this)" 
									
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
							<input type="text" name="sezione(erario).riga[5].anno" tabindex="56" size="4" maxlength="4" class="form-control numerico" 
							
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
							<input type="text" name="sezione(erario).riga[5].interiImportoDebito" tabindex="57" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
							class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(erario).riga[5].centImportoDebito" tabindex="58" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
							
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
							<input type="text" name="sezione(erario).riga[5].interiImportoCredito" tabindex="59" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'erario')" 
							class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(erario).riga[5].centImportoCredito" tabindex="60" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this, 'erario')" 
							
							/>
					</div>
				</div>
			

			
				<div class="form-group">
					<div class="col-md-1 col-md-offset-5 col-lg-1 col-lg-offset-5 col-sm-1 col-sm-offset-5 col-xs-2 col-xs-offset-6"><b class="oRight">Totale A</b></div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
						<input type="text" name="sezione(erario).interiTotaleDebito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
							
						/>&nbsp;,
						<input type="text" name="sezione(erario).centTotaleDebito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
							
						/>
							<b class="oRight">B</b>
					</div>

					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(erario).interiTotaleCredito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
							
						/>&nbsp;,
						<input type="text" name="sezione(erario).centTotaleCredito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
							
						/>
					</div>
				</div>
			
			
				<div class="form-group">
					<div class="col-md-1 col-md-offset-8 col-lg-1 col-lg-offset-7 col-sm-1 col-sm-offset-8 col-xs-2 col-xs-offset-8"><b class="oRight">Saldo A-B</b></div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(erario).interiSaldo" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
						/>&nbsp;,
						<input type="text" name="sezione(erario).centSaldo" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
						/>
					</div>
				</div>
			
		</div>
	</div>

	
<div class="rottura"></div>

<!-- Fine sezione Erario -->





							











<!-- Inizio sezione Inps -->

	
	<div class="section clearfix">
		<h3 class="titleSection">
			Inps
		</h3>
		<div class="bs-example">
			
			<div class="form-group">
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					 
						<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=sedeInps');" class="help">Codice<br />Sede</a></label>
		   			
					
					<div class="form-field">
						<input type="text" name="sezione(inps).riga[0].codiceSede" tabindex="61" size="3" maxlength="4" class="form-control numerico" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/><a href="javascript: void(0);" title="Seleziona il codice Sede" class="pull-right">							
							 							
								<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(inps).riga[0].codiceSede.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'sedeInps', 'f24_pop_codice_tributo.php');" style="display : none;" />
								
							</a>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					 
						<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=contributoInps');" class="help">Causale<br />Contrib.</a></label>
		   			
					
					<div class="form-field">
						<input type="text" name="sezione(inps).riga[0].causaleContributo" tabindex="62" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
						
							<a href="javascript: void(0);" title="Seleziona il codice Causale Contributo" class="pull-right">
								 	
									<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(inps).riga[0].causaleContributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'contributoInps', 'f24_pop_codice_tributo.php');" style="display : none;" />
								
							</a>
							
					</div>
				</div>
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
					<label class="control-label">Matricola INPS/<br />Cod. INPS/Filiale azienda</label>
					<div class="form-field">
						<input type="text" name="sezione(inps).riga[0].codiceInps" tabindex="63" size="19" maxlength="17" class="form-control" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
					<label class="control-label">Periodo di Riferimento<br />da (mmaaaa) a (mmaaaa)</label>
				 	<div class="form-field">		
			 			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
					 		<input type="text" name="sezione(inps).riga[0].inizioRiferimento" tabindex="64" size="6" maxlength="6" class="form-control numerico" 
								
							/>	
						</div>	
						<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
							<input type="text" name="sezione(inps).riga[0].fineRiferimento" tabindex="65" size="6" maxlength="6" class="form-control numerico" 
								
							/>
						</div>
					</div>				
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
				 	<label class="control-label">Importi a debito<br />versati</label>
				 	<div class="form-field">
				 		<input type="text" name="sezione(inps).riga[0].interiImportoDebito" tabindex="66" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inps')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(inps).riga[0].centImportoDebito" tabindex="67" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inps')" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
				 	<label class="control-label">Importi a credito<br />compensati</label>
					<div class="form-field">
						<input type="text" name="sezione(inps).riga[0].interiImportoCredito" tabindex="68" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inps')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(inps).riga[0].centImportoCredito" tabindex="69" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inps')" 
							
						/>
					</div>
				</div>
			</div>
			
			
				<div class="form-group">
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
						<input type="text" name="sezione(inps).riga[1].codiceSede" tabindex="70" size="3" maxlength="4" class="form-control numerico" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
						/>
						<a href="javascript: void(0);" title="Seleziona il codice Sede"  class="pull-right">
							 							
								<img border="0" src='/sape/f24/images/lampadina.jpg'name="sezione(inps).riga[1].codiceSede.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'sedeInps', 'f24_pop_codice_tributo.php');" style="display : none;" />
								
							
						</a>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
						<input type="text" name="sezione(inps).riga[1].causaleContributo" tabindex="71" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
						/>
						<a href="javascript: void(0);" title="Seleziona il codice Causale Contributo" class="pull-right">
							 							
								<img border="0" src='/sape/f24/images/lampadina.jpg'name="sezione(inps).riga[1].causaleContributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'contributoInps', 'f24_pop_codice_tributo.php');" style="display : none;" />
								
							
						</a>
					</div>
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
						<input type="text" name="sezione(inps).riga[1].codiceInps" tabindex="72" size="19" maxlength="17" class="form-control" onfocus="selezionato(this)" 
						
						/>
					</div>
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
						<div class="form-field">
							<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
								<input type="text" name="sezione(inps).riga[1].inizioRiferimento" tabindex="73" size="6" maxlength="6" class="form-control numerico" 
								
								/>
							</div>						
							<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
								<input type="text" name="sezione(inps).riga[1].fineRiferimento" tabindex="74" size="6" maxlength="6" class="form-control numerico" 
								
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
							<input type="text" name="sezione(inps).riga[1].interiImportoDebito" tabindex="75" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inps')" 
							class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(inps).riga[1].centImportoDebito" tabindex="76" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inps')" 
							
							/>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(inps).riga[1].interiImportoCredito" tabindex="77" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inps')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(inps).riga[1].centImportoCredito" tabindex="78" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inps')" 
							
						/>
					</div>
				</div>
				
				
				
					<div class="form-group">
						<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
							<input type="text" name="sezione(inps).riga[2].codiceSede" tabindex="79" size="3" maxlength="4" class="form-control numerico" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
							/>
							<a href="javascript: void(0);" title="Seleziona il codice Sede"  class="pull-right">
								 							
									<img border="0" src='/sape/f24/images/lampadina.jpg'name="sezione(inps).riga[2].codiceSede.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'sedeInps', 'f24_pop_codice_tributo.php');" style="display : none;" />
																
							</a>
						</div>
						<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
							<input type="text" name="sezione(inps).riga[2].causaleContributo" tabindex="80" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
							/>
							<a href="javascript: void(0);" title="Seleziona il codice Causale Contributo"  class="pull-right">
								 							
									<img border="0" src='/sape/f24/images/lampadina.jpg'name="sezione(inps).riga[2].causaleContributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'contributoInps', 'f24_pop_codice_tributo.php');" style="display : none;" />
																
							</a>
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
							<input type="text" name="sezione(inps).riga[2].codiceInps" tabindex="81" size="19" maxlength="17" class="form-control" onfocus="selezionato(this)" 
							
							/>
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
							<div class="form-field">
								<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
									<input type="text" name="sezione(inps).riga[2].inizioRiferimento" tabindex="82" size="6" maxlength="6" class="form-control numerico" 
									
									/>
								</div>
								<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
									<input type="text" name="sezione(inps).riga[2].fineRiferimento" tabindex="83" size="6" maxlength="6" class="form-control numerico" 
									
									/>
								</div>
							</div>
						</div>
						<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
								<input type="text" name="sezione(inps).riga[2].interiImportoDebito" tabindex="84" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inps')" 
								class="inputImporti"
								/>&nbsp;,
								<input type="text" name="sezione(inps).riga[2].centImportoDebito" tabindex="85" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inps')" 
								
								/>
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
							<input type="text" name="sezione(inps).riga[2].interiImportoCredito" tabindex="86" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inps')" 
								class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(inps).riga[2].centImportoCredito" tabindex="87" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inps')" 
								
							/>
						</div>
					</div>
				
				
				
					<div class="form-group">
						<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
							<input type="text" name="sezione(inps).riga[3].codiceSede" tabindex="88" size="3" maxlength="4" class="form-control numerico" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
							/>
							<a href="javascript: void(0);" title="Seleziona il codice Sede" class="pull-right">
								 							
									<img border="0" src='/sape/f24/images/lampadina.jpg'name="sezione(inps).riga[3].codiceSede.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'sedeInps', 'f24_pop_codice_tributo.php');" style="display : none;" />
								
							</a>
						</div>
						<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
							<input type="text" name="sezione(inps).riga[3].causaleContributo" tabindex="89" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
							/>
							<a href="javascript: void(0);" title="Seleziona il codice Causale Contributo" class="pull-right">
								 							
									<img border="0" src='/sape/f24/images/lampadina.jpg'name="sezione(inps).riga[3].causaleContributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'contributoInps', 'f24_pop_codice_tributo.php');" style="display : none;" />
																
							</a>
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
							<input type="text" name="sezione(inps).riga[3].codiceInps" tabindex="90" size="19" maxlength="17" class="form-control" onfocus="selezionato(this)" 
							
							/>
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
							<div class="form-field">
								<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
									<input type="text" name="sezione(inps).riga[3].inizioRiferimento" tabindex="91" size="6" maxlength="6" class="form-control numerico" 
									
									/>
								</div>
								<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
									<input type="text" name="sezione(inps).riga[3].fineRiferimento" tabindex="92" size="6" maxlength="6" class="form-control numerico" 
									
									/>
								</div>
							</div>
						</div>
						<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
								<input type="text" name="sezione(inps).riga[3].interiImportoDebito" tabindex="93" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inps')" 
								class="inputImporti"
								/>&nbsp;,
								<input type="text" name="sezione(inps).riga[3].centImportoDebito" tabindex="94" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inps')" 
								
								/>
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
							<input type="text" name="sezione(inps).riga[3].interiImportoCredito" tabindex="95" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inps')" 
								class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(inps).riga[3].centImportoCredito" tabindex="96" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inps')" 
								
							/>
						</div>
					</div>
				
	
				<div class="form-group">
					<div class="col-md-1 col-md-offset-5 col-lg-1 col-lg-offset-5 col-sm-1 col-sm-offset-5 col-xs-2 col-xs-offset-6"><b class="oRight">Totale C</b></div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
						<input type="text" name="sezione(inps).interiTotaleDebito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
						/>&nbsp;,
						<input type="text" name="sezione(inps).centTotaleDebito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
						/>
						<b class="oRight">D</b>
					</div>
					
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(inps).interiTotaleCredito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
						/>&nbsp;,
						<input type="text" name="sezione(inps).centTotaleCredito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
						/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-1 col-md-offset-8 col-lg-1 col-lg-offset-7 col-sm-1 col-sm-offset-8 col-xs-2 col-xs-offset-8"><b class="oRight">Saldo C-D</b></div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(inps).interiSaldo" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
						/>&nbsp;,
						<input type="text" name="sezione(inps).centSaldo" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
						/>
					</div>
				</div>
			</div>
		</div>
	

<!-- Fine sezione Inps -->




						  











<!-- Inizio sezione Regioni -->


	<div class="section clearfix">
		<h3 class="titleSection">
			Regioni
		</h3>
		<div class="bs-example">
			
			<div class="form-group">
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<label class="control-label">
						 
							<a href="javascript:helpTabella('f23_pop_codice_regione.php')"  class="help">Codice<br />Regione</a>
						
					</label>
					<div class="form-field">
						<input type="text" name="sezione(regioni).riga[0].codiceRegione" tabindex="97" size="2" maxlength="2" class="form-control numerico" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
						
							<a href="javascript: void(0);" title="Seleziona il codice Regione" class="pull-right">
								 							
									<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(regioni).riga[0].codiceRegione.image" onfocus="selezionato(this)" onclick="ricercaRegione(this, 'f23_pop_codice_regione.php');" style="display : none;" />
								
							</a>
						
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-3">
					<label class="control-label">
						 							
							<a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=tributoRegioni');" class="help">Codice<br />Tributo</a>
						
					</label>
					<div class="form-field">
						<input type="text" name="sezione(regioni).riga[0].codiceTributo" tabindex="98" size="3" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
						
							<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
								 							
									<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(regioni).riga[0].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoRegioni', 'f24_pop_codice_tributo.php');" style="display : none;" />
								
							</a>
						
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<label class="control-label">Rateazione/<br />mese rif.</label>
					<div class="form-field">
						<input type="text" name="sezione(regioni).riga[0].rateazione" tabindex="99" size="3" maxlength="4" class="form-control" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<label class="control-label">Anno di<br />riferimento</label>
					<div class="form-field">
						<input type="text" name="sezione(regioni).riga[0].anno" tabindex="100" size="4" maxlength="4" class="form-control numerico" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<label class="control-label">Importi a debito<br />versati</label>
					<div class="form-field">
						<input type="text" name="sezione(regioni).riga[0].interiImportoDebito" tabindex="101" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'regioni')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(regioni).riga[0].centImportoDebito" tabindex="102" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'regioni')" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<label class="control-label">Importi a credito<br /> compensati</label>
					<div class="form-field">
						<input type="text" name="sezione(regioni).riga[0].interiImportoCredito" tabindex="103" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'regioni')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(regioni).riga[0].centImportoCredito" tabindex="104" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'regioni')" 
							
						/>
					</div>
				</div>
			</div>
			
		
			
			<div class="form-group">
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<input type="text" name="sezione(regioni).riga[1].codiceRegione" tabindex="105" size="2" maxlength="2" class="form-control numerico" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					
						<a href="javascript: void(0);" title="Seleziona il codice Regione" class="pull-right">
							 							
								<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(regioni).riga[1].codiceRegione.image" onfocus="selezionato(this)" onclick="ricercaRegione(this, 'f23_pop_codice_regione.php');" style="display : none;" />
													
						</a>
					
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-3">
					<input type="text" name="sezione(regioni).riga[1].codiceTributo" tabindex="106" size="3" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					
						<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
							 							
								<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(regioni).riga[1].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoRegioni', 'f24_pop_codice_tributo.php');" style="display : none;" />
							
						</a>
					
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<input type="text" name="sezione(regioni).riga[1].rateazione" tabindex="107" size="3" maxlength="4" class="form-control" onfocus="selezionato(this)" 
						
					/>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<input type="text" name="sezione(regioni).riga[1].anno" tabindex="108" size="4" maxlength="4" class="form-control numerico" 
						
					/>			
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">		
					<input type="text" name="sezione(regioni).riga[1].interiImportoDebito" tabindex="109" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'regioni')" 
						class="inputImporti"
					/>&nbsp;,
					<input type="text" name="sezione(regioni).riga[1].centImportoDebito" tabindex="110" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'regioni')" 
						
					/>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">			
						<input type="text" name="sezione(regioni).riga[1].interiImportoCredito" tabindex="111" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'regioni')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(regioni).riga[1].centImportoCredito" tabindex="112" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'regioni')" 
							
						/>				
				</div>
			</div>
			
	
			
			<div class="form-group">
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<input type="text" name="sezione(regioni).riga[2].codiceRegione" tabindex="113" size="2" maxlength="2" class="form-control numerico" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					
						<a href="javascript: void(0);" title="Seleziona il codice Regione" class="pull-right">
							 							
								<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(regioni).riga[2].codiceRegione.image" onfocus="selezionato(this)" onclick="ricercaRegione(this, 'f23_pop_codice_regione.php');" style="display : none;" />
								
						</a>
					
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-3">
					<input type="text" name="sezione(regioni).riga[2].codiceTributo" tabindex="114" size="3" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					
						<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
						 							
							<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(regioni).riga[2].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoRegioni', 'f24_pop_codice_tributo.php');" style="display : none;" />
						
						</a>
					
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<input type="text" name="sezione(regioni).riga[2].rateazione" tabindex="115" size="3" maxlength="4" class="form-control" onfocus="selezionato(this)" 
						
					/>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<input type="text" name="sezione(regioni).riga[2].anno" tabindex="116" size="4" maxlength="4" class="form-control numerico" 
						
					/>			
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(regioni).riga[2].interiImportoDebito" tabindex="117" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'regioni')" 
						class="inputImporti"
					/>&nbsp;,
					<input type="text" name="sezione(regioni).riga[2].centImportoDebito" tabindex="118" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'regioni')" 
						
					/>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
						<input type="text" name="sezione(regioni).riga[2].interiImportoCredito" tabindex="119" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'regioni')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(regioni).riga[2].centImportoCredito" tabindex="120" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'regioni')" 
							
						/>				
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<input type="text" name="sezione(regioni).riga[3].codiceRegione" tabindex="121" size="2" maxlength="2" class="form-control numerico" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					
						<a href="javascript: void(0);" title="Seleziona il codice Regione" class="pull-right">
							 							
								<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(regioni).riga[3].codiceRegione.image" onfocus="selezionato(this)" onclick="ricercaRegione(this, 'f23_pop_codice_regione.php');" style="display : none;" />
								
						</a>
					
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-3">
					<input type="text" name="sezione(regioni).riga[3].codiceTributo" tabindex="122" size="3" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					
						<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
							 							
							<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(regioni).riga[3].codiceTributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'tributoRegioni', 'f24_pop_codice_tributo.php');" style="display : none;" />
						
						</a>
					
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<input type="text" name="sezione(regioni).riga[3].rateazione" tabindex="123" size="3" maxlength="4" class="form-control" onfocus="selezionato(this)" 
						
					/>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<input type="text" name="sezione(regioni).riga[3].anno" tabindex="124" size="4" maxlength="4" class="form-control numerico" 
						
					/>			
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">		
					<input type="text" name="sezione(regioni).riga[3].interiImportoDebito" tabindex="125" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'regioni')" 
						class="inputImporti"
					/>&nbsp;,
					<input type="text" name="sezione(regioni).riga[3].centImportoDebito" tabindex="126" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'regioni')" 
						
					/>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">			
						<input type="text" name="sezione(regioni).riga[3].interiImportoCredito" tabindex="127" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'regioni')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(regioni).riga[3].centImportoCredito" tabindex="128" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'regioni')" 
							
						/>				
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-md-1 col-md-offset-3 col-lg-1 col-lg-offset-3 col-sm-1 col-sm-offset-3 col-xs-1 col-xs-offset-7"><b class="oRight">Totale E</b></div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(regioni).interiTotaleDebito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
					/>&nbsp;,
					<input type="text" name="sezione(regioni).centTotaleDebito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
					/>
					<b class="oRight">F</b>
				</div>
				
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(regioni).interiTotaleCredito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
					/>&nbsp;,
					<input type="text" name="sezione(regioni).centTotaleCredito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
					/>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-1 col-md-offset-6 col-lg-1 col-lg-offset-5 col-sm-1 col-sm-offset-6 col-xs-2 col-xs-offset-8"><b class="oRight">Saldo E-F</b></div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(regioni).interiSaldo" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
					
					/>&nbsp;,
					<input type="text" name="sezione(regioni).centSaldo" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
					
					/>
				</div>
			</div>
		</div>
	</div>



<!-- Fine sezione Regioni -->




						  











<!-- Inizio sezione Ici ed altri tributi locali -->

	


	<div class="section clearfix">
		<h3 class="titleSection">
			
						
				Imu ed Altri Tributi Locali <a href="javascript:helpIMU('f24_pop_imu.php');"><img src="/sape/f24/images/i_help.png" title="aiuto per la compilazione" alt="Aiuto per la compilazione" class="imgSrv" /></a>
			
		</h3>
		
		
		
		<div class="bs-example">
			<div class="form-group">
				<br/>
				<div class="form-field-input col-md-4 col-lg-4 col-sm-4 col-xs-4">
					Identificativo Operazione							
					<input type="text" name="sezione(entiLocali).identificativoOperazione" tabindex="129" size="20" maxlength="18" class="form-control inRiga" 
						
					/>
				</div>		
			</div>
			<hr/>
			
			<div class="form-group">
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<label class="control-label">Cod.Ente/<br>Comune/Prov.</label>
					<div class="form-field">
						<input type="text" name="sezione(entiLocali).riga[0].codiceEnte" tabindex="130" size="4" maxlength="4" class="form-control" 
							
						/>
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<label class="control-label">&nbsp;<br />Ravv.</label>
						<div class="form-field">
							<input type="checkbox" name="sezione(entiLocali).riga[0].ravvedimento" tabindex="131" class="checkbox" 
								 value="1"
								 
							/>
							
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-4">
						<label class="control-label">Immob. variati</label>
						<div class="form-field">
							<input type="checkbox" name="sezione(entiLocali).riga[0].immobiliVariati" tabindex="132" class="checkbox" 
							value="1"
								
							/>
							
						</div>
					</div>
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
						<label class="control-label">&nbsp;<br />Acc.</label>
						<div class="form-field">
							<input type="checkbox" name="sezione(entiLocali).riga[0].acconto" tabindex="133" class="checkbox" 
							 value="1"
							 	
							/>
							
						</div>
					</div>
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
						<label class="control-label">&nbsp;<br />Saldo</label>
						<div class="form-field">
							<input type="checkbox" name="sezione(entiLocali).riga[0].flagSaldo" tabindex="134" class="checkbox" 
								value="1"
								
							/>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 col-lg-4 col-sm-3 col-xs-4">
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<label class="control-label">Num.<br />immob.</label>
						<div class="form-field">
							<input type="text" name="sezione(entiLocali).riga[0].numeroImmobili" tabindex="135" size="3" maxlength="3" class="form-control numerico" 
								
							/>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<label class="control-label">
							
							
								 							
									<a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTributoImu');" class="help">Codice<br />Tributo</a>
								
							
						</label>
						<div class="form-field-input form-field">
							<input type="text" name="sezione(entiLocali).riga[0].codiceTributo" tabindex="136" size="3" maxlength="4" class="form-control" onblur="deselezionato(this);" onfocus="selezionato(this)" 
								
							/>
							
							
								
									<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
										 							
											<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(entiLocali).riga[0].codiceTributo.image" onfocus="selezionato(this);" onclick="ricercaTributo(this, 'codiceTributoImu', 'f24_pop_codice_tributo.php');" style="display : none;" />
										
									</a>
								
							
						</div>
					</div>	
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<label class="control-label">Rateaz./<br />mese rif</label>
						<div class="form-field">
							<input type="text" name="sezione(entiLocali).riga[0].rateazione" tabindex="137" size="3" maxlength="4" class="form-control" onfocus="selezionato(this)" 
								
							/>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
						<label class="control-label">Anno di<br />riferim.</label>
						<div class="form-field">
							<input type="text" name="sezione(entiLocali).riga[0].anno" tabindex="138" size="4" maxlength="4" class="form-control numerico" 
								
							/>
						</div>
					</div>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<label class="control-label">Importi a debito<br />versati</label>
					<div class="form-field">
						<input type="text" name="sezione(entiLocali).riga[0].interiImportoDebito" tabindex="139" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'entiLocali')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(entiLocali).riga[0].centImportoDebito" tabindex="140" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'entiLocali')" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
					<label class="control-label">Importi a credito<br /> compensati</label>
					<div class="form-field">
						<input type="text" name="sezione(entiLocali).riga[0].interiImportoCredito" tabindex="141" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'entiLocali')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(entiLocali).riga[0].centImportoCredito" tabindex="142" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'entiLocali')" 
							
						/>
					</div>
				</div>
			</div>			
			
			
				<div class="form-group">
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
						<input type="text" name="sezione(entiLocali).riga[1].codiceEnte" tabindex="143" size="4" maxlength="4" class="form-control" 
						
						/>
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="checkbox" name="sezione(entiLocali).riga[1].ravvedimento" tabindex="144" class="checkbox" 
						 value="1"
						 
							/>
							
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-4">
							<input type="checkbox" name="sezione(entiLocali).riga[1].immobiliVariati" tabindex="145" class="checkbox" 
							value="1"
							
							/>
							
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
							<input type="checkbox" name="sezione(entiLocali).riga[1].acconto" tabindex="146" class="checkbox" 
							value="1"
							
							/>
							
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
							<input type="checkbox" name="sezione(entiLocali).riga[1].flagSaldo" tabindex="147" class="checkbox" 
							value="1"
							
							/>
							
						</div>
					</div>
					<div class="col-md-3 col-lg-4 col-sm-3 col-xs-4">
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[1].numeroImmobili" tabindex="148" size="3" maxlength="3" class="form-control numerico" 
							
							/>
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[1].codiceTributo" tabindex="149" size="3" maxlength="4" class="form-control" onblur="deselezionato(this);" onfocus="selezionato(this)" 
							
							/>
							
							
								
									<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
										 							
											<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(entiLocali).riga[1].codiceTributo.image" onfocus="selezionato(this);" onclick="ricercaTributo(this, 'codiceTributoImu', 'f24_pop_codice_tributo.php');" style="display : none;" />
										
									</a>
								
							
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[1].rateazione" tabindex="150" size="3" maxlength="4" class="form-control" onfocus="selezionato(this)" 
							
							/>
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[1].anno" tabindex="151" size="4" maxlength="4" class="form-control numerico" 
							
							/>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
						<input type="text" name="sezione(entiLocali).riga[1].interiImportoDebito" tabindex="152" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'entiLocali')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(entiLocali).riga[1].centImportoDebito" tabindex="153" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'entiLocali')" 
							
						/>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(entiLocali).riga[1].interiImportoCredito" tabindex="154" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'entiLocali')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(entiLocali).riga[1].centImportoCredito" tabindex="155" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'entiLocali')" 
							
						/>
					</div>
				</div>
			
	
			
				<div class="form-group">
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
						<input type="text" name="sezione(entiLocali).riga[2].codiceEnte" tabindex="156" size="4" maxlength="4" class="form-control" 
						
						/>
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="checkbox" name="sezione(entiLocali).riga[2].ravvedimento" tabindex="157" class="checkbox" 
						 value="1"
						 
							/>
							
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-4">
							<input type="checkbox" name="sezione(entiLocali).riga[2].immobiliVariati" tabindex="158" class="checkbox" 
							value="1"
							
							/>
							
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
							<input type="checkbox" name="sezione(entiLocali).riga[2].acconto" tabindex="159" class="checkbox" 
							value="1"
							
							/>
							
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
							<input type="checkbox" name="sezione(entiLocali).riga[2].flagSaldo" tabindex="160" class="checkbox" 
							value="1"
							
							/>
							
						</div>
					</div>
					<div class="col-md-3 col-lg-4 col-sm-3 col-xs-4">
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[2].numeroImmobili" tabindex="161" size="3" maxlength="3" class="form-control numerico" 
							
							/>
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[2].codiceTributo" tabindex="162" size="3" maxlength="4" class="form-control" onblur="deselezionato(this);" onfocus="selezionato(this)" 
							
							/>
							
							
								
									<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
										 							
											<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(entiLocali).riga[2].codiceTributo.image" onfocus="selezionato(this);" onclick="ricercaTributo(this, 'codiceTributoImu', 'f24_pop_codice_tributo.php');" style="display : none;" />
										
									</a>
								
							
						</div>
							<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[2].rateazione" tabindex="163" size="3" maxlength="4" class="form-control" onfocus="selezionato(this)" 
							
							/>
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[2].anno" tabindex="164" size="4" maxlength="4" class="form-control numerico" 
							
							/>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
						<input type="text" name="sezione(entiLocali).riga[2].interiImportoDebito" tabindex="165" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'entiLocali')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(entiLocali).riga[2].centImportoDebito" tabindex="166" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'entiLocali')" 
							
						/>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(entiLocali).riga[2].interiImportoCredito" tabindex="167" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'entiLocali')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(entiLocali).riga[2].centImportoCredito" tabindex="168" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'entiLocali')" 
							
						/>
					</div>
				</div>
				
				
						<div class="form-group">
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-2">
						<input type="text" name="sezione(entiLocali).riga[3].codiceEnte" tabindex="169" size="4" maxlength="4" class="form-control" 
						
						/>
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="checkbox" name="sezione(entiLocali).riga[3].ravvedimento" tabindex="170" class="checkbox" 
						 value="1"
						 
							/>
							
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-4">
							<input type="checkbox" name="sezione(entiLocali).riga[3].immobiliVariati" tabindex="171" class="checkbox" 
							value="1"
							
							/>
							
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
							<input type="checkbox" name="sezione(entiLocali).riga[3].acconto" tabindex="172" class="checkbox" 
							value="1"
							
							/>
							
						</div>
						<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
							<input type="checkbox" name="sezione(entiLocali).riga[3].flagSaldo" tabindex="173" class="checkbox" 
							value="1"
							
							/>
							
						</div>
					</div>
					<div class="col-md-3 col-lg-4 col-sm-3 col-xs-4">
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[3].numeroImmobili" tabindex="174" size="3" maxlength="3" class="form-control numerico" 
							
							/>
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[3].codiceTributo" tabindex="175" size="3" maxlength="4" class="form-control" onblur="deselezionato(this);" onfocus="selezionato(this)" 
							
							/>
							
							
								
									<a href="javascript: void(0);" title="Seleziona il codice tributo" class="pull-right">
										 							
											<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(entiLocali).riga[3].codiceTributo.image" onfocus="selezionato(this);" onclick="ricercaTributo(this, 'codiceTributoIci', 'f24_pop_codice_tributo.php');" style="display : none;" />
																			
									</a>
								
							
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[3].rateazione" tabindex="176" size="3" maxlength="4" class="form-control" onfocus="selezionato(this)" 
							
							/>
						</div>
						<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
							<input type="text" name="sezione(entiLocali).riga[3].anno" tabindex="177" size="4" maxlength="4" class="form-control numerico" 
								
							/>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
						<input type="text" name="sezione(entiLocali).riga[3].interiImportoDebito" tabindex="178" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this, 'entiLocali')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(entiLocali).riga[3].centImportoDebito" tabindex="179" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'entiLocali')" 
							
						/>
					</div>
					<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
						<input type="text" name="sezione(entiLocali).riga[3].interiImportoCredito" tabindex="180" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'entiLocali')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(entiLocali).riga[3].centImportoCredito" tabindex="181" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'entiLocali')" 
							
						/>
					</div>
				</div>		
			
			<div class="form-group">
				<div class="col-md-1 col-md-offset-5 col-lg-1 col-lg-offset-6 col-sm-1 col-sm-offset-5 col-xs-1 col-xs-offset-7"><b class="oRight">Totale G</b></div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(entiLocali).interiTotaleDebito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
					/>&nbsp;,
					<input type="text" name="sezione(entiLocali).centTotaleDebito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
					/>
					<b class="oRight">H</b>
				</div>
				
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(entiLocali).interiTotaleCredito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
					/>&nbsp;,
					<input type="text" name="sezione(entiLocali).centTotaleCredito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
					/>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-1 col-md-offset-8 col-lg-1 col-lg-offset-8 col-sm-1 col-sm-offset-8 col-xs-2 col-xs-offset-8"><b class="oRight">Saldo G-H</b></div>
				<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
					<input type="text" name="sezione(entiLocali).interiSaldo" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
					
					/>&nbsp;,
					<input type="text" name="sezione(entiLocali).centSaldo" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
					
					/>
				</div>
			</div>
			<div class="form-group">
				
				
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
						<label class="control-label">Detrazione</label>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-3">
						<div class="form-field">
							<input type="text" name="sezione(entiLocali).interiDetrazioneIci" tabindex="182" size="13" maxlength="13" class="form-control numerico" id="importoInt" onblur="fillWithZero(this)" 
								class="inputImporti"
							/>
				 			,
							<input type="text" name="sezione(entiLocali).centDetrazioneIci" tabindex="183" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="fillWithZero(this)" 
								
							/>
						</div>
					</div>
				
			</div>
		</div>
	</div>

	<div class="rottura"></div>
	

<!-- Fine sezione Ici ed altri tributi locali -->




							












<!-- Inizio sezione Altri enti previdenziali ed assicurativi -->


	<div class="section clearfix">
		<h3 class="titleSection">
			Altri Enti Previdenziali ed Assicurativi
		</h3>
		<div class="bs-example">
			
				<div class="form-group">
					<div class="form-field-input col-md-1 col-md-offset-1 col-lg-1 col-lg-offset-1 col-sm-1 col-sm-offset-1 col-xs-1 col-xs-offset-2">
						<label class="control-label">
							 
							<a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=sedeInail');" class="help">Codice <br />Sede</a>
				   			
						</label>							
						<div class="form-field">
							<input type="text" name="sezione(inail).riga[0].codiceSede" tabindex="184" size="5" maxlength="5" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
								
							/>
							
								<a href="javascript: void(0);" title="Seleziona il codice Sede" class="pull-right">
									 
										<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(inail).riga[0].codiceSede.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'sedeInail', 'f24_pop_codice_tributo.php');" style="display : none;" />
						   		
								</a>
							
						</div>
					</div>
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
						<label class="control-label">
						 
						 
							<br />Codice Ditta / c.c
						 
						</label>
						<div class="form-field">
							<input type="text" name="sezione(inail).riga[0].posAssNumero" tabindex="185" size="8" maxlength="8" class="form-control" style="width:45%; float:left;" onfocus="selezionato(this)" 
								
							/>&nbsp;
							<input type="text" name="sezione(inail).riga[0].posAssCodCtl" tabindex="186" size="2" maxlength="2" class="form-control" style="width:45%; float:right" 
								
							/>
							<input type="hidden" name="sezione(inail).riga[0].numeroPosizioneAssicurativa" 
								
							/>
						</div>
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2 col-xs-3">
						<div class="form-field-input col-md-8 col-lg-8 col-sm-8 col-xs-8">
							<label class="control-label">Numero di <br />riferimento</label>
							<div class="form-field">
								<input type="text" name="sezione(inail).riga[0].numRifer" tabindex="187" size="6" maxlength="6" class="form-control" 
									
								/>
							</div>
						</div>
						<div class="form-field-input col-md-4 col-lg-4 col-sm-4 col-xs-4">
							<label class="control-label"><br />Causale</label>
							<div class="form-field">
								<input type="text" name="sezione(inail).riga[0].causale" tabindex="188" size="1" maxlength="1" class="form-control" 
									
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<label class="control-label">Importi a debito<br /> versati</label>
					<div class="form-field">
						<input type="text" name="sezione(inail).riga[0].interiImportoDebito" tabindex="189" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inail')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(inail).riga[0].centImportoDebito" tabindex="190" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inail')" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<label class="control-label">Importi a credito<br /> compensati</label>
					<div class="form-field">
						<input type="text" name="sezione(inail).riga[0].interiImportoCredito" tabindex="191" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inail')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(inail).riga[0].centImportoCredito" tabindex="192" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inail')" 
							
						/>
					</div>
				</div>
			</div>
		
		
			<div class="form-group">
				<div class="col-md-1 col-lg-1 col-sm-1 col-xs-2">
					<b>Inail</b>
				</div>
				<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<input type="text" name="sezione(inail).riga[1].codiceSede" tabindex="193" size="5" maxlength="5" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					
						<a href="javascript: void(0);" title="Seleziona il codice Sede" class="pull-right">
							 
								<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(inail).riga[1].codiceSede.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'sedeInail', 'f24_pop_codice_tributo.php');" style="display : none;" />
				   		
						</a>
										
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<input type="text" name="sezione(inail).riga[1].posAssNumero" tabindex="194" size="8" maxlength="8" class="form-control" style="width:45%; float:left;" onfocus="selezionato(this)" 
						
					/>&nbsp;
					<input type="text" name="sezione(inail).riga[1].posAssCodCtl" tabindex="195" size="2" maxlength="2" class="form-control" style="width:45%; float:right" 
						
					/>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 col-xs-3">
					<div class="form-field-input col-md-8 col-lg-8 col-sm-8 col-xs-8">
						<input type="text" name="sezione(inail).riga[1].numRifer" tabindex="196" size="6" maxlength="6" class="form-control" 
							
						/>
					</div>
					<div class="form-field-input col-md-4 col-lg-4 col-sm-4 col-xs-4">
						<input type="text" name="sezione(inail).riga[1].causale" tabindex="197" size="1" maxlength="1" class="form-control" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(inail).riga[1].interiImportoDebito" tabindex="198" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inail')" 
						class="inputImporti"
					/>&nbsp;,
					<input type="text" name="sezione(inail).riga[1].centImportoDebito" tabindex="199" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inail')" 
						
					/>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(inail).riga[1].interiImportoCredito" tabindex="200" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inail')" 
						class="inputImporti"
					/>&nbsp;,
					<input type="text" name="sezione(inail).riga[1].centImportoCredito" tabindex="201" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inail')" 
						
					/>
				</div>
			</div>
			

			
			<div class="form-group">
				<div class="form-field-input col-md-1 col-md-offset-1 col-lg-1 col-lg-offset-1 col-sm-1 col-sm-offset-1 col-xs-1 col-xs-offset-2">
					<input type="text" name="sezione(inail).riga[2].codiceSede" tabindex="202" size="5" maxlength="5" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					
						<a href="javascript: void(0);" title="Seleziona il codice Sede" class="pull-right">
							 
								<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(inail).riga[2].codiceSede.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'sedeInail', 'f24_pop_codice_tributo.php');" style="display : none;" />
				   		
						</a>
					
				</div>
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<input type="text" name="sezione(inail).riga[2].posAssNumero" tabindex="203" size="8" maxlength="8" class="form-control" style="width:45%; float:left;" onfocus="selezionato(this)" 
						
					/>&nbsp;
					<input type="text" name="sezione(inail).riga[2].posAssCodCtl" tabindex="204" size="2" maxlength="2" class="form-control" style="width:45%; float:right" 
						
					/>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 col-xs-3">
					<div class="form-field-input col-md-8 col-lg-8 col-sm-8 col-xs-8">
						<input type="text" name="sezione(inail).riga[2].numRifer" tabindex="205" size="6" maxlength="6" class="form-control" 
							
						/>
					</div>
					<div class="form-field-input col-md-4 col-lg-4 col-sm-4 col-xs-4">
						<input type="text" name="sezione(inail).riga[2].causale" tabindex="206" size="1" maxlength="1" class="form-control" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(inail).riga[2].interiImportoDebito" tabindex="207" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inail')" 
						class="inputImporti"
					/>&nbsp;,
					<input type="text" name="sezione(inail).riga[2].centImportoDebito" tabindex="208" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inail')" 
						
					/>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(inail).riga[2].interiImportoCredito" tabindex="209" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'inail')" 
						class="inputImporti"
					/>&nbsp;,
					<input type="text" name="sezione(inail).riga[2].centImportoCredito" tabindex="210" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'inail')" 
						
					/>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-md-1 col-md-offset-5 col-lg-1 col-lg-offset-5 col-sm-1 col-sm-offset-5 col-xs-2 col-xs-offset-6"><b class="oRight">Totale I</b></div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(inail).interiTotaleDebito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
					/>&nbsp;,
					<input type="text" name="sezione(inail).centTotaleDebito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
					/>
					<b class="oRight">L</b>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(inail).interiTotaleCredito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
						
					/>&nbsp;,
					<input type="text" name="sezione(inail).centTotaleCredito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
						
					/>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-1 col-md-offset-8 col-lg-1 col-lg-offset-7 col-sm-1 col-sm-offset-8 col-xs-2 col-xs-offset-8"><b class="oRight">Saldo I-L</b></div>
				<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
					<input type="text" name="sezione(inail).interiSaldo" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
					
					/>&nbsp;,
					<input type="text" name="sezione(inail).centSaldo" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
					
					/>
				</div>
			</div>
		
		
			
				<div class="form-group">
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
						<label class="control-label">
							 
								<a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=enteAltriEnti');" class="help">Codice<br />Ente</a>
				   			
						</label>						
						<div class="form-field">
							<input type="text" name="sezione(altriEnti).codiceEnte" tabindex="211" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 								
							/>
							
								<a href="javascript: void(0);" title="Seleziona il codice Ente" class="pull-right">
									 
										<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(altriEnti).codiceEnte.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'enteAltriEnti', 'f24_pop_codice_tributo.php');" style="display : none;" />
						   		
								</a>
														
						</div>
					</div>
					<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
						<label class="control-label">
							 
								<a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=sedeAltriEnti');" class="help">Codice<br />Sede</a>
				   		
						</label>
						<div class="form-field">
						<input type="text" name="sezione(altriEnti).riga[0].codiceSede" tabindex="212" size="4" maxlength="5" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
						
							<a href="javascript: void(0);" title="Seleziona il codice Sede" class="pull-right">
								
									<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(altriEnti).riga[0].codiceSede.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'sedeAltriEnti', 'f24_pop_codice_tributo.php');" style="display : none;" />
					   		
							</a>
												
						</div>
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2 col-xs-3">
						<div class="form-field-input col-md-5 col-lg-5 col-sm-5 col-xs-5">
							<label class="control-label">
								 
									<a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=contributoAltriEnti');" class="help">Causale<br />Contributo</a>
					   		
							</label>							
							<div class="form-field">
								<input type="text" name="sezione(altriEnti).riga[0].causaleContributo" tabindex="213" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
									
								/>
								
									<a href="javascript: void(0);" title="Seleziona il codice Causale Contributo" class="pull-right">
										
											<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(altriEnti).riga[0].causaleContributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'contributoAltriEnti', 'f24_pop_codice_tributo.php');" style="display : none;" />
							   		
									</a>
								
							</div>
						</div>
						<div class="form-field-input col-md-7 col-lg-7 col-sm-7 col-xs-7">
							<label class="control-label">Codice<br />Posizione</label>
							<div class="form-field">
								<input type="text" name="sezione(altriEnti).riga[0].codicePosizione" tabindex="214" size="9" maxlength="9" class="form-control numerico" onfocus="selezionato(this)" 
									
								/>
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
						<label class="control-label">Periodo di riferimento<br />da (mmaaaa) a (mmaaaa)</label>
						<div class="form-field">
							<input type="text" name="sezione(altriEnti).riga[0].inizioRiferimento" tabindex="215" size="6" maxlength="6" class="form-control numerico" style="width:45%; float:left;" 
								
							/>
							<input type="text" name="sezione(altriEnti).riga[0].fineRiferimento" tabindex="216" size="6" maxlength="6" class="form-control numerico" style="width:45%; float:right;" 
								
							/>
						</div>
					</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<label class="control-label">Importi a debito<br /> versati</label>
					<div class="form-field">
						<input type="text" name="sezione(altriEnti).riga[0].interiImportoDebito" tabindex="217" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'altriEnti')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(altriEnti).riga[0].centImportoDebito" tabindex="218" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'altriEnti')" 
							
						/>
					</div>
				</div>
					<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
						<label class="control-label">Importi a credito<br /> compensati</label>
						<div class="form-field">
							<input type="text" name="sezione(altriEnti).riga[0].interiImportoCredito" tabindex="219" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'altriEnti')" 
								class="inputImporti"
							/>&nbsp;,
							<input type="text" name="sezione(altriEnti).riga[0].centImportoCredito" tabindex="220" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'altriEnti')" 
								
							/>
						</div>
					</div>
				</div>
		

		
			<div class="form-group">

				<div class="form-field-input col-md-1 col-md-offset-1 col-lg-1 col-lg-offset-1 col-sm-1 col-sm-offset-1 col-xs-1 col-xs-offset-1">
					<input type="text" name="sezione(altriEnti).riga[1].codiceSede" tabindex="221" size="4" maxlength="5" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					
						<a href="javascript: void(0);" title="Seleziona il codice Sede" class="pull-right">
							
									<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(altriEnti).riga[1].codiceSede.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'sedeAltriEnti', 'f24_pop_codice_tributo.php');" style="display : none;" />
					   		
						</a>
					
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 col-xs-3">
					<div class="form-field-input col-md-5 col-lg-5 col-sm-5 col-xs-5">
							<input type="text" name="sezione(altriEnti).riga[1].causaleContributo" tabindex="222" size="4" maxlength="4" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
								
							/>
							
								<a href="javascript: void(0);" title="Seleziona il codice Causale Contributo" class="pull-right">
									
											<img border="0" src='/sape/f24/images/lampadina.jpg' name="sezione(altriEnti).riga[1].causaleContributo.image" onfocus="selezionato(this)" onclick="ricercaTributo(this, 'contributoAltriEnti', 'f24_pop_codice_tributo.php');" style="display : none;" />
							   		
								</a>
							
					</div>
					<div class="form-field-input col-md-7 col-lg-7 col-sm-7 col-xs-7">
							<input type="text" name="sezione(altriEnti).riga[1].codicePosizione" tabindex="223" size="9" maxlength="9" class="form-control numerico" onfocus="selezionato(this)" 
								
							/>
					</div>
				</div>
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-3">
					<input type="text" name="sezione(altriEnti).riga[1].inizioRiferimento" tabindex="224" size="6" maxlength="6" class="form-control numerico" style="width:45%; float:left;" 
						
					/>
					<input type="text" name="sezione(altriEnti).riga[1].fineRiferimento" tabindex="225" size="6" maxlength="6" class="form-control numerico" style="width:45%; float:right;" 
						
					/>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
					<input type="text" name="sezione(altriEnti).riga[1].interiImportoDebito" tabindex="226" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'altriEnti')" 
						class="inputImporti"
					/>&nbsp;,
					<input type="text" name="sezione(altriEnti).riga[1].centImportoDebito" tabindex="227" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'altriEnti')" 
						
					/>
				</div>
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
						<input type="text" name="sezione(altriEnti).riga[1].interiImportoCredito" tabindex="228" size="9" maxlength="13" class="form-control numerico" id="importoInt" onblur="tot(this,'altriEnti')" 
							class="inputImporti"
						/>&nbsp;,
						<input type="text" name="sezione(altriEnti).riga[1].centImportoCredito" tabindex="229" size="2" maxlength="2" class="form-control numerico" id="importoDec" onblur="tot(this,'altriEnti')" 
							
						/>
				</div>
			</div>
		
		<div class="form-group">
			<div class="col-md-1 col-md-offset-5 col-lg-1 col-lg-offset-5 col-sm-1 col-sm-offset-5 col-xs-2 col-xs-offset-6"><b class="oRight">Totale M</b></div>
			<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
				<input type="text" name="sezione(altriEnti).interiTotaleDebito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
					
				/>&nbsp;,
				<input type="text" name="sezione(altriEnti).centTotaleDebito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
					
				/>
				<b class="oRight">N</b>
			</div>
			<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-2">
				<input type="text" name="sezione(altriEnti).interiTotaleCredito" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
					
				/>&nbsp;,
				<input type="text" name="sezione(altriEnti).centTotaleCredito" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
					
				/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-1 col-md-offset-8 col-lg-1 col-lg-offset-7 col-sm-1 col-sm-offset-8 col-xs-2 col-xs-offset-8"><b class="oRight">Saldo M-N</b></div>
			<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-2">
				<input type="text" name="sezione(altriEnti).interiSaldo" size="9" maxlength="13" class="form-control numerico" id="importoInt" readonly="readonly" onfocus="this.blur();" 
				
				/>&nbsp;,
				<input type="text" name="sezione(altriEnti).centSaldo" size="2" maxlength="2" class="form-control numerico" id="importoDec" readonly="readonly" onfocus="this.blur();" 
				
				/>
			</div>
		</div>
	</div>
</div>


<!-- Fine sezione Altri enti previdenziali ed assicurativi -->




						 	














<!-- Inizio sezione Firma ed altri dati -->

	<input type="hidden" name="abiProponente" />
	<input type="hidden" name="codiceDivisa" />
	<input type="hidden" name="contoCorrente.codicePaese" value="IT" />
	<input type="hidden" name="contoCorrente.codiceControllo" value="92" />
	<input type="hidden" name="contoCorrente.cin" value="N" />
	<input type="hidden" name="contoCorrente.abi" value="05034" />
	<input type="hidden" name="contoCorrente.cab" value="20400" />
	<input type="hidden" name="contoCorrente.identificativo" value="000000000000" />
	<input type="hidden" name="contoCorrente.codiceFiscale" value="WWWWWW00W00W000W" />
	<script type="text/javascript">
		$(document).ready(function(){
				$('.dataIncassoHtml').datepicker({ minDate: '-0D', maxDate: '+24D', buttonImage: "/sape/f24/images/calendar.png" });
		});
	</script>

	<div class="section clearfix">
		<h3 class="titleSection">
			Firma ed Altri Dati
		</h3>
		<div class="bs-example">
			<div class="form-group">			
				
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-3">
					<label class="control-label">Data Pagamento</label>
					<div class="form-field">						
						
								
									<input type="text" name="dataIncassoHtml" tabindex="230" size="15" maxlength="10" class="datepicker dataIncassoHtml form-control data" 
									onfocus="javascript: this.style.backgroundColor = 0xFFFFFF;"
									
									/>
										
							
						
	
						
					</div>
				</div>
		
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-3">
					<label class="control-label">Saldo Finale</label>
					<div class="form-field">				
						<input type="text" name="interiSaldo" maxlength="13" class="form-control" id="importoInt" readonly="readonly" />
						,
						<input type="text" name="centSaldo" size="2" maxlength="2" class="form-control" id="importoDec" readonly="readonly" />
						<input type="hidden" name="saldoParziale" />
						<input type="hidden" name="flagFirmatario" value="0" />
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
	


	<script language="javascript">

		if (!document.f24MainForm.interiSaldo.value) {
			document.f24MainForm.interiSaldo.value = '0';
		}
		if (!document.f24MainForm.centSaldo.value) {
			document.f24MainForm.centSaldo.value = '00';
		}

	</script>

<!-- fine sezione Firma e altri dati -->



					
					</form>
				</div>
				













<script type="text/javascript">

		  

			  

			  

			      function salva() {
					if (!getSubmitted()) {
			          document.f24MainForm.action = 'tpl_priv_pagamento_f24_modulo_step2_bozza.php';
			          document.f24MainForm.target= 'frF24Center';
			          document.f24MainForm.submit();
			        }
			      }

			      function invia() {
			        if (!getSubmitted()) {
			           document.f24MainForm.action = 'tpl_priv_pagamento_f24_modulo_step2.php';
			           document.f24MainForm.target = 'frF24Center';
			           document.f24MainForm.submit();
			        }
			      }



	      

	      function stampa() {
	         window.print();
	      }

	      function nuovoModello() {
		      if (!getSubmitted()) {
			          document.f24MainForm.action = 'tpl_priv_pagamento_f24_modulo.php';
			          document.f24MainForm.target= 'frF24Center';
			          document.f24MainForm.submit();
			  }
	      }

	      function annulla() {
	      	if (!isAlreadySubmitted()) {
		      	if (confirm('Sei sicuro?')) {
		      		nuovoModello();
		      	}
		    }
	      }

</script>


<section>
	<div class="form-group btnWrapper form-footer">
		<div class="stepBtn">Step 1 di 3</div>
		<div class="btn-align-left">
			<input type="button" class="btn btn-primary btn-default" value="Annulla"  onclick="javascript: annulla();">
		</div>
		<div class="btn-align-right">
			<input type="button" class="btn btn-primary" value="Stampa"  onclick="javascript: stampa();" />
			
			  <input type="button" class="btn btn-primary" value="Salva Bozza" onclick="javascript: salva();" >	
			
			  <input type="button" class="btn btn-primary" value="Avanti" onclick="javascript: invia();">
		</div>
		<div class="clearfix"></div>
	</div>
</section>



	

				<div class="clearfix"></div>

			</div>
		</div>
	</div>
</div>

 


</body>
</html>