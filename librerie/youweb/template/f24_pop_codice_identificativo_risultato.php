<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>F24 on line</title>













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
	



</head>

<body onload="window.focus();">

			<div class="row">
				<div class="container help">
					<div id="mainContent" class="center col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<form name="ricercaTributiForm" method="post" action="/sape/f24/ricercaCodiciAction.do" class="form-horizontal"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="InvalidToken">
			
						<div class="riquadro clearfix">
							








	<script type="text/javascript">
	  function visualizzaCodici() {
	    document.ricercaTributiForm.submit() ;
	  }

	  function selezione(ricerca) {
	  	if (ricerca[ricerca.selectedIndex].value == 'all') {
	  		document.getElementById('selezioneDescrizione').disabled = true;
	  		document.forms[0].valore.disabled = true;
	  	} else {
	 		document.getElementById('selezioneDescrizione').disabled = false;
	  		document.forms[0].valore.disabled = false;
	  	}
	  }

	  function checkTributo(tributo) {
	  	if (tributo.value.indexOf('\'') != -1) {
	  		tributo.value='';
	  	}
	  	if (tributo.value.indexOf('\\') != -1) {
	  		tributo.value='';
	  	}
	  	if (tributo.value.indexOf('%') != -1) {
	  		tributo.value='';
	  	}
	  }
	  
	</script>



	 <input type="hidden" name="tipoRicerca" value='codiceIdentificativoCoobbligato' />

	 
	 	<input type="hidden" name="returnField" value='contribuente.codIde' />
	 
	
		<div class="clearfix">
			<div class="flag pagamentoF24">&nbsp;</div>
			<h1>Ricerca codici identificativi</h1>
			<p style="padding-left:0.5em;display:inline-block">Per avviare la ricerca dei codici selezionare il modo di  ricerca e immettere nel campo descrizione una parola chiave.</p>
		</div>
		<div class="section clearfix">
			<h3 class="titleSection">
				
						Criteri di ricerca
						
			</h3>
			<div class="bs-example help">
				<div class="form-group">
					<div class="form-field-input col-xs-8 col-sm-8 col-md-8 col-lg-8" >
						<label class="control-label">Ricerca per</label>
        		<div class="form-field">
              <select name="parametro" onChange="selezione(this)" class="form-control">
	              
	             		<option value="all" SELECTED>Mostra tutti</option>
	              
	             		<option value="codice" >Codice identificativo</option>
	              
	             		<option value="descrizione" >Parola chiave</option>
	              
            	</select>
		    		</div>
		    	</div>
		    </div>
		    <div id="selezioneDescrizione" class="form-group">
					<div class="form-field-input col-xs-8 col-sm-8 col-md-8 col-lg-8 >
						<label class="control-label">Descrizione</label>
          	<div class="form-field">
		             <input type="text" name="valore" maxlength="38" size="35" onblur="javascript: checkTributo(this);" class="form-control"
	              disabled='disabled'
	              />
		    		</div>
		    	</div><div class="clearfix"></div>
		    	
		    </div>
			</div>
		</div><!--section clearfix-->
		
		
  
	
	






								<hr style="margin:0 0 5px 0">
								<div class="pull-right margin-right20">
								  <input type="button"  class="btn btn-default" value="Cerca" href="#" onclick="javascript: visualizzaCodici();">
							  	 
							    	<input type="button" class="btn btn-default" value="Chiudi" href="#" onclick="javascript: window.close();">
							    							
								</div>
							<div class="section clearfix">
								<h3 class="titleSection">
									Risultato Ricerca
								</h3>
								

									<p style="text-indent:0.5em;">Secondo la ricerca effettuata sono stati trovati <b>14</b> elementi:</p>
								
								<div class="bs-example help">
									<div class="tablePanel clearfix">
										<div class="table-responsive">
											<table class="table table-striped">
												<tbody>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '02'; window.close();">
											           		
											           
											           
											           
											           
											           02
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           GENITORE/TUTORE
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '03'; window.close();">
											           		
											           
											           
											           
											           
											           03
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           CURATORE FALLIMENTARE
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '07'; window.close();">
											           		
											           
											           
											           
											           
											           07
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           EREDE
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '08'; window.close();">
											           		
											           
											           
											           
											           
											           08
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           DEFUNTO
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '50'; window.close();">
											           		
											           
											           
											           
											           
											           50
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           OBBLIGATO SOLIDALE
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '51'; window.close();">
											           		
											           
											           
											           
											           
											           51
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           INTERVENTO SOSTITUTIVO
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '60'; window.close();">
											           		
											           
											           
											           
											           
											           60
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           GARANTE/TERZO DATORE
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '61'; window.close();">
											           		
											           
											           
											           
											           
											           61
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           SOGGETTO ADERENTE AL CONSOLIDATO
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '62'; window.close();">
											           		
											           
											           
											           
											           
											           62
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           SOGGETTO DIVERSO DAL FRUITORE DEL CREDITO
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '63'; window.close();">
											           		
											           
											           
											           
											           
											           63
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           CONTROPARTE
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '70'; window.close();">
											           		
											           
											           
											           
											           
											           70
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           <div class="aCapo">
											           
											        
											           
											           IMPRESA ASSICURATRICE ESTERA  FISCALMENTE RAPPRESENTATA
											        	 
											         </div>											           
											        		
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '71'; window.close();">
											           		
											           
											           
											           
											           
											           71
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           <div class="aCapo">
											           
											        
											           
											           SOGGETTO CHE HA PROPOSTO L'ATTO INTRODUTTIVO DEL GIUDIZIO
											        	 
											         </div>											           
											        		
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '72'; window.close();">
											           		
											           
											           
											           
											           
											           72
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           RAPPRESENTANTE FISCALE
											        	 
											           
											        </td>
														
													</tr>
												
											    <tr>
														
											        <td>
											           
											           			<a href="javascript: window.opener.document.getElementsByName('contribuente.codIde')[0].value = '73'; window.close();">
											           		
											           
											           
											           
											           
											           73
											        	 
											           
											           		</a>
											           
											        </td>
														
											        <td>
											           
											           
											           
											           
											           CONTRIBUENTE
											        	 
											           
											        </td>
														
													</tr>
												
												</tbody>
												<thead>
									        <tr>
													
												          <th>Codice Identificativo</th>
													
												          <th>Descrizione</th>
													
									        </tr>
												</thead>
											 </table>
											</div><!-- /table-responsive -->
										</div><!-- /tablePanel clearfix -->
									</div><!-- /bs-example -->
								</div><!-- /section clearfix -->


		

<script type="text/javascript">
	var valoreDaRiportare;
	var nameCampoModello
	function riportaCodice() {
		$('input[name="'+nameCampoModello+'"]', window.parent.document).val(valoreDaRiportare);
		window.parent.closeModalPopup();
	}
</script>

</div><!--riquadro clearfix-->


	<div class="clearfix"></div>
	</form>
	</div>	</div>	</div>
</body>
</html>