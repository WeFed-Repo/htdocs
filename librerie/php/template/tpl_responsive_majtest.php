<!DOCTYPE html>
<html lang="it">

















	
		<head>
      <meta charset="utf-8"> 
	<title>Webank</title> 
	<meta name="description" content="Webank"/> 
	
	<!-- MOBILE --> 
	
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"> 
	<!-- Allows fullscreen mode from the Homescreen --> 
	<meta name="apple-mobile-web-app-capable" content="yes"> 
	<!-- Sets the color of the text/battery, wireless icons etc --> 
	<meta name="apple-mobile-web-app-status-bar-style" content="black"> 
	<meta name="HandheldFriendly" content="true"/> 
	<meta name="MobileOptimized" content="320"/> 
	<meta name="format-detection" content="telephone=no"> 
	<!-- / MOBILE --> 
	
	<!-- CSS --> 
	<!-- Css strutturale --> 
	<link href="/wscmn/fe/css/priv_base_webank.css" rel="stylesheet" type="text/css" media="all"> 

	<!-- Css nuovi responsive--> 
	<link href="/wscmn/fe/css/priv_generic_webank.css" rel="stylesheet" type="text/css" media="all" > 
	<link href="/wscmn/fe/css/priv_print_webank.css" rel="stylesheet" type="text/css" media="print"> 
	<!-- / CSS --> 
	
	<script type="text/javascript"> 
	// Variabili per ambiente, riporta le chiavi del navigatore selezionate 
	var navIndex = ['0']; 
	
	var sectionTitle = "Webank"; 
	
	// Variabili per emulazione 
	var cgi_script = "/webankpri"; 
	var imgPath = '/img/ret/'; 
	var pDis = true; 
	var pCP = false; 
	var abilOroCap = true; 
	var isWebank = true; 
	var hasCarte = false; 
	var isComunita200Mov = true; 
	var rbfLinkObj = { 
	'bonifico': 'BON', 
	'giroconto': 'GIR', 
	'carta': 'PRJ' 
	}; 
	</script> 
	
	<!-- JS --> 
	<script type="text/javascript" src="/wscmn/fe/js/jquery.js"></script> 

	<script type="text/javascript" src="/wscmn/fe/js/bootstrap.min.js"></script> 

	<!-- FINE JS LIBRERIE --> 
	<script type="text/javascript" src="/wscmn/fe/js/priv_generic.js"></script> 

	<!--
	<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_generic.js"></script> 

	<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_utilities.js"></script> 
	-->
	<script type="text/javascript" src="/wscmn/fe/js/bootstrap-table.js"></script> 

	
	<!-- Css e JS di compatibilita' generica condizionato --> 
	<!--[if lte IE 8]> 
	<link href="/wscmn/fe/compat/js/css/priv_old.css" rel="stylesheet" type="text/css" media="all" > 
	<script type="text/javascript" src="/wscmn/fe/compat/js/priv_old.js"></script> 
	<![endif]--> 
	
	
	<!-- /JS --> 

   </head>
	
	
    <script type="text/javascript">
      function submit(value) {
        document.DATI.back.value=''
        importo=1540;
        if(value=='b') {
          document.DATI.action='WsSubscriptions0.do';
          document.DATI.back.value='yes';
          document.DATI.vendor.value='A0015';
          document.DATI.submit();
        }
        if(value=='a') {
          document.DATI.action='WsSubscriptions0.do';
          document.DATI.back.value='yes';
          document.DATI.vendor.value='A0015';
          document.DATI.submit();
        }
        if(value=='') {
          if(doValidations(validationImpl)){
        	document.DATI.vendor.value='A0015';
			document.DATI.submit();
          }
        }
        
      }

      function validationImpl() {        	  
    	  if(false){
    		  addValidationError('Carrello vuoto!');
          }
        }
      
	</script>
    
   
    <body class="webview myhome">
    <!-- CONTENT (dinamico a seconda del tipo di pagina da visualizzare - front page, pagina standard, pagina estesa) -->
      <div id="main">
         <div class="wrapper">
            <div class="container-fluid">
               <!-- WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
               <div class="row">
                  <!--- ############################ CONTENUTI ################################## -->
                  <!--  #### ATTENZIONE alla classe da utilizzare per cambiare la larghezza a seconda del tipo di pagina -->
                  <div id="contenuti" class="contenuti col-sm-12 col-md-12 resp">

						<form name="DATI" action="WsSubscriptions3.do" method="POST">
							


<input name="tabId"	type="hidden"	value="nav_priv_wbx_myhome" />
<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_riviste_monda" />

<input name="OBSKEY3"	type="hidden"	value="" />

<input name="OBSCNT"	type="hidden"	value="" />
<input name="cf"	type="hidden"	value="0.9456736670650168" />
<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
<input name="siglaAzione"	type="hidden"	value="" />


<input name="isResponsive"	type="hidden" value="true" />
 
							<input type="hidden" name="back" >
							<input type="hidden" name="keep" value="Yes" >
							<input type="hidden" name="vendor" >
					              
					
						<h3>Carrello acquisti</h3>
						
						
						
						<p>
							Sono <b>elencate</b> le riviste che hai inserito nel carrello.<br>
							Puoi decidere se <b>procedere</b> subito all'acquisto o continuare lo shopping.<br>
							<br>
							Se lo desideri, puoi anche <b>eliminare</b> le riviste che non intendi pi&ugrave; acquistare.
						</p>
						
						<br class="clear">
						
						<!-- sezione "Errori form" -->
						







<!-- === org.apache.jsp.banking.errorsSectionResponsive_jsp === { -->
	<div id="errorsSection" style="display: none;">
		<div class="boxesito negativo">
			<i class="icon icon-alert_error icon-2x"></i>
			<div class="text">
				<div class="row">
					<div class="col-sm-10">
						<p>
							
								
										<strong id='error_box'></strong>						
								
								
							
							<strong id='error_box'>Errata compilazione form</strong>
						</p>
						<ul id="errorMessages"></ul>
							
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var subtitle = 'Errata compilazione form';
	</script>
<!-- } === org.apache.jsp.banking.errorsSectionResponsive_jsp === -->
						
							
							<div class="tithelp">
								<h4>Elenco riviste nel carrello</h4>
							</div>
							<table border="0" cellpadding="0" cellspacing="0" data-toggle="table">
								<thead>
									<tr>
										<th class="left" data-field="descrizione">Rivista</th>
										<th class="right">Importo</th>
										<th class="center">Q.t&agrave;</th>
										<th class="center">Elimina</th>
									</tr>
								</thead>
								<tbody>
									
									
									
									<tr class="pari">
										<td class="left">
											Interni + Guida + 3 Annual<br>
											mensile / 10 numeri
										</td>
										<td class="right">55,00 EUR</td>
										<td class="center">28</td>
										<td class="center">
											<a class="btn-icon" href="WsSubscriptions6.do?isResponsive=true&deletionId=4">
												<i class="icon icon-2x icon-chiudi_table"></i>
											</a>
										</td>
									</tr>
									
								</tbody>
							</table>
						
							<div class="tithelp">
								<h4>Riepilogo ordine</h4>
							</div>
							<table cellpadding="0" cellspacing="0" border="0">
								<tbody>
									<tr class="total">
										<td class="left">Importo totale acquisti</td>
										<td class="right">1.540,00 EUR</td>
									</tr>
									<tr class="total">
										<td class="left">Spese di spedizione</td>
										<td class="right">Gratuite</td>
									</tr>
									<tr class="total">
										<td class="left">TOTALE</td>
										<td class="right">1.540,00 EUR</td>
									</tr>
								</tbody>							
							</table>
					
					
					
					
						













	
<!-- === org.apache.jsp.banking.webank.ButtonsResponsive_jsp === { -->
		
	<div class="form-group btnWrapper">		
			
						<div class="btn-align-right" id="buttRight1">
				 							
					
						
						<a  href="javascript:submit('')" class="btn btn-primary" title="vai alla cassa">
							vai alla cassa
						</a>
						
											
					
						
						<a  href="javascript:submit('b')" class="btn btn-primary" title="prosegui lo shopping">
							prosegui lo shopping
						</a>
						
				
			</div>	
	 		
	</div>
	 
	 	<br class="clear"/>
	 
	 
<!-- ################################################################################################# -->
<!-- ########## DA GESTIRE PER PARTE RESPONSIVE - ATTUALMENTE NON UTILIZZATO PER I BONIFICI ########## -->
<!-- ################################################################################################# -->
	 

<!-- } === org.apache.jsp.banking.webank.ButtonsResponsive_jsp === -->


					
						
						</form>
	
						







						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>