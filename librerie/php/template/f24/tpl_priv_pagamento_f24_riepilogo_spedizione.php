











	
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
	




	<script type="text/javascript">
	
		function confermaButton() {
			document.confermaForm.action='/sape/f24/confermaSpedizione.do';
			document.confermaForm.submit();
		}
	

		function indietroButton() {
			document.confermaForm.action='/sape/f24/forwardIndietroRiepilogoF24.do';
			document.confermaForm.submit();
		}

		function stampa() {
			parent['modelloDaInviareFrame'].focus();
			parent['modelloDaInviareFrame'].print();
		}
	</script>
</head>
<body  onLoad="visualizzaSegnalazione();" style="zoom:	1;">

<form name="riepilogoForm" method="post" action="/sape/f24/riepilogo.do"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="5907b2b3abfe8278bf2a9b5d083a1718">
	<div class="wrapper">

		<div class="container">

				</div>
	








	
	<input type="hidden" name="_control.reload" value="false" />

	  <script type="text/javascript">
	  	function visualizzaSegnalazione() {
	  	
	  	}
	  </script>

	
		<input type="hidden" name="tipoRiepilogo" value='riepilogo_f24_deleghe' />
	

	
		
		<input type="hidden" name="id_chiamata" value="1491294829544_x3GN7JjSyI5KnZIV" />
	
		<div class="main row">
			<div class="container">
				<div id="mainContent"	class="center	col-xs-12	col-sm-12	col-md-12	col-lg-12">
					<div class="riquadro clearfix">
						<div class="clearfix">
							<div class="flag pagamentoF24">&nbsp;</div>
							<h1>Riepilogo F24 - Spedizione</h1>
						</div>
						












						
							<div class="section clearfix">
								<h3 class="titleSection">
									Lista  deleghe da spedire
								</h3>
								<div class="bs-example">
									<div class="tablePanel clearfix">
										<div class="table-responsive">
											<table class="table table-striped"  role="grid">
												<tbody>
									        
										        <tr>
										          <td class="txt-center">9990013</td>
										          <td title="FABRIZIO DOMANIN">MAURO ROSSELLINI</td>
										          <td class="txt-center">MRRRSS09R0219E</td>
										          <td class="txt-center">
											        	
												      		28-04-2017
												    		
										    	 		</td>
										          <td class="oRight">0,01</td>
										          <td class="txt-center">04-04-2017</td>
										        </tr>
									        
												</tbody>
												<thead>
										     <tr>
										       <th>ID</th>
													 <th>Contribuente</th>
													 <th>Codice fiscale P.I</th>
													 <th>Scadenza</th>
													 <th>Saldo</th>
													 <th>Data inserimento</th>
												 </tr>
											 </thead>
											</table>
										</div><!--  table-responsive -->
									










								</div><!-- tablePanel clearfix -->
							</div><!-- bs-example -->
						</div><!--  section clearfix -->
						
						
					</form>

					







			<form name="confermaForm">
				<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value='5907b2b3abfe8278bf2a9b5d083a1718' />
				<input type="hidden" name="id_chiamata" value='1491294829544_x3GN7JjSyI5KnZIV' />
				<input type="hidden" name="frame" value="true" />
			</form>


				</div><!--riquadro clearfix-->
			</div><!--center	col-xs-12	col-sm-12	col-md-12	col-lg-12-->

	<div class="form-group btnWrapper form-footer">
		<div class="btn-align-left">
			<input type="button" class="btn btn-primary btn-default" value="Indietro" href="#"  onclick="location.href='tpl_priv_pagamento_f24_riepilogo.php'" />
		</div>
		<div class="btn-align-right">
			<input type="button" class="btn btn-primary" value="Stampa"  href="#" />	
			<input type="button" class="btn btn-primary execute" value="Conferma" href="#" onclick="location.href='tpl_priv_pagamento_f24_riepilogo.php'" />
		</div>
		<div class="clearfix"></div>
	</div>
		
			

			<div class="clearfix"></div>
		</div><!--container-->
	</div><!--main row-->
</div><!--wrapper-->

</body>
</html>



	