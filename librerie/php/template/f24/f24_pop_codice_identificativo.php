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
					<div class="center col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<form name="ricercaTributiForm" method="post" action="f24_pop_codice_identificativo_risultato.php" class="form-horizontal"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="35cd35568252bad028eec08a25392a04">
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



	 <input type="hidden" name="tipoRicerca" value='ufficioErario' />

	 
	 	<input type="hidden" name="returnField" value='sezione(f24Semplificato2012).codiceUfficio' />
	 
	
		<div class="clearfix">
			<div class="flag pagamentoF24">&nbsp;</div>
			<h1>Ricerca codici ufficio sezione Erario</h1>
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
	              
	             		<option value="codice" >Codice ufficio</option>
	              
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
		
		
  
	
	






						</div><!--riquadro clearfix-->					   
							<div class="pull-right margin-bottom20">
								  <input type="button"  class="btn btn-default" value="Cerca" href="#" onclick="javascript: visualizzaCodici();">
							  	 
							    	<input type="button" class="btn btn-default" value="Chiudi" href="#" onclick="javascript: window.close();">
							    							
							</div>
							<div class="clearfix"></div>
							<script type="text/javascript">							
							  
								  
							  
							</script>
							</form>
						</div><!-- /-center col-xs-12 col-sm-12 col-md-12 col-lg-12-->
					</div><!-- /-container-->
				</div><!-- /-row-->

</body>
</html>