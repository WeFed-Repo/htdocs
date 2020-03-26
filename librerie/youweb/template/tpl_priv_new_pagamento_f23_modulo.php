<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Modulo F23</title>
	












<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<script type="text/javascript" src='/sapef23/f23/javascript/jquery-1.9.0.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/scroll.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/jquery-migrate-1.0.0.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/bootstrap.min.js'></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src='/sapef23/f23/javascript/ie10-viewport-bug-workaround.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/jquery-ui.min.js'></script>
<script type="text/javascript" src="/sapef23/f23/javascript/totali.js"></script>
<script type="text/javascript" src="/sapef23/f23/javascript/digitation.js"></script>

<!--nostro-->
	<script type="text/javascript"  src='/sapef23/f23/javascript/jquery.ui.touch-punch.min.js'></script>
<!-- * -->
<script type="text/javascript" src='/sapef23/f23/javascript/swfobject.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/funzioniHT.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/funzioniHB.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/jquery.blockUI.js'></script>


<script type="text/javascript" src='/sapef23/f23/javascript/jquery.dataTables.min.js'></script>    
<script type="text/javascript" src='/sapef23/f23/javascript/help.js'></script>
	
<script type="text/javascript" src='/sapef23/f23/javascript/controlli.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/doubleClickPrevention.js'></script>

<script type="text/javascript" src='/sapef23/f23/javascript/contribuenti/rubricaContribuenti.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/moduloF23/pulsantiInserimento.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/moduloF23/sezioni.js'></script>

<link media="screen,print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/jquery-ui.css' />
<link media="screen,print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/bootstrap.min.css' />
<link media="screen,print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/essentials.css' />
<link media="screen,print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/header-default.css.jsp' />
<link media="print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/stylePrint.css' />





	
	<script type="text/javascript">
		function getPathImages() { return '/sapef23/f23/images/';}
	</script>
	<link media="screen" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/style.css.jsp' />
	




<script type="text/javascript">
	(function(){   
	  if (window.addEventListener)
	  {
		window.addEventListener("load", nascondi_loading_screen, false);
	  }else{
		window.attachEvent("onload", nascondi_loading_screen);
	  }
	})();
	function mostra_loading_screen()
	{
	  document.getElementById("loading_screen").style.display = 'block';
	}
	function nascondi_loading_screen()
	{
	  document.getElementById("loading_screen").style.display = 'none';
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
  	<script type="text/javascript" src='/sapef23/f23/javascript/respond.min.js'></script>
  	<script type="text/javascript" src='/sapef23/f23/javascript/html5.js'></script>
  <![endif]-->

  <script type="text/javascript" src='/sapef23/f23/javascript/alten.js'></script>
  
  
 

<style type="text/css">
	 #loading_screen{  
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;	
		opacity: 0.5;
		filter: alpha(opacity=50);
}

		#loading_screen{  
			background: url(/sapef23/f23/images/loading.gif) 50% no-repeat;
		}
	
</style>


</head>
<!-- setSaldoParziale(this); -->
<body onLoad="visualizzaSegnalazione();" onclick="deselezionaTutti();"  style="zoom: 1;">
<div id="loading_screen"></div>
<script type="text/javascript">
mostra_loading_screen();
</script>
	<div class="wrapper">
 



	<input type="hidden" name="DelegaUniqueToken" value='MTQ5ODQ2NjgxNzY0OA==' />
	<input type="hidden" name="_control.identificativoDelega" value='' />



	
	<input type="hidden" name="_control.reload" value="false" />

	  <script type="text/javascript">
	  	function visualizzaSegnalazione() {
	  	
	  	}
	  </script>
	
		<div class="container">
			<ol class="breadcrumb pull-right">
				<li>Pagamenti</li>
				<li>Modulo F23</li>
			</ol>
		</div>
	
		<div class="main row">
			<div class="container">
				<div id="mainContent" class="center col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="riquadro clearfix"> 
					
						<div class="pager clearfix pull-right">
							<div class="circle_line">&nbsp;</div>
							<div class="circle current_page">&nbsp;</div>
							<div class="circle">&nbsp;</div>
							<div class="circle">&nbsp;</div>
						</div>
													
					  	
					
						<div class="clearfix">
							<div class="flag pagamentoF23">&nbsp;</div>
							<h1>Modulo F23</h1>							
						</div>





					<form name="f23MainForm" method="post" action="/sapef23/f23/inserisciNuovoModello.do" class="form-horizontal"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="40fd3281fad6b8a8cc0ce5c0c5916d33">

						<input type="hidden" name="DelegaUniqueToken" value='MTQ5ODQ2NjgxNzY0OA==' />
						<input type="hidden" name="_control.tipo" value="BAS02" />
							
							
							
								










	


<!-- Conto Selezionato -->
<script type="text/javascript">

	
	
	function valorizzaContoCorrente(index) {
		
			if (index == 0) {
				document.f23MainForm.elements['contoCorrente.codicePaese'].value = 'IT';
				document.f23MainForm.elements['contoCorrente.codiceControllo'].value = '70';
				document.f23MainForm.elements['contoCorrente.cin'].value = 'R';
				document.f23MainForm.elements['contoCorrente.abi'].value = '05034';
				document.f23MainForm.elements['contoCorrente.cab'].value = '20301';
				document.f23MainForm.elements['contoCorrente.numeroConto'].value = '000000174456';
				document.f23MainForm.elements['contoCorrente.codiceFiscale'].value = 'TLLMLC70A30F205O';
			}
		
			if (index == 1) {
				document.f23MainForm.elements['contoCorrente.codicePaese'].value = 'IT';
				document.f23MainForm.elements['contoCorrente.codiceControllo'].value = '81';
				document.f23MainForm.elements['contoCorrente.cin'].value = 'S';
				document.f23MainForm.elements['contoCorrente.abi'].value = '05034';
				document.f23MainForm.elements['contoCorrente.cab'].value = '20301';
				document.f23MainForm.elements['contoCorrente.numeroConto'].value = '000000003610';
				document.f23MainForm.elements['contoCorrente.codiceFiscale'].value = 'TLLMLC70A30F205O';
			}
		
	}
	
	function setContoCorrente(param) {
		document.f23MainForm.elements['contoCorrente.codicePaese'].value = getText(param[8]);
		document.f23MainForm.elements['contoCorrente.codiceControllo'].value = getText(param[9]);
		document.f23MainForm.elements['contoCorrente.cin'].value = getText(param[10]);
		document.f23MainForm.elements['contoCorrente.abi'].value = getText(param[11]);
		document.f23MainForm.elements['contoCorrente.cab'].value = getText(param[12]);
		document.f23MainForm.elements['contoCorrente.numeroConto'].value = getText(param[2]);
		document.f23MainForm.elements['contoCorrente.codiceFiscale'].value = getText(param[13]);
		
	}

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
		
		
		
			Seleziona rapporto
		
		
		</h3>
		
	<div class="selezioneCC tabellaSelezioneCC">
		<div class="CCselezionato clearfix">
			<div class="col-xs-6">
			<span id="label-intestazione">Intestato a:</span>
				<span class="col-md-7 col-lg-7 col-sm-7 col-xs-7" id="intestazione">
						Tclulora  Lmoaau
				</span>
				<span class="col-md-4 col-lg-4 col-sm-4 col-xs-4" id="conto"  style="clear:both;">Conto corrente</span>
				<span class="col-md-6 col-lg-6 col-sm-6 col-xs-6 col-sm-6 col-xs-6" id="numero">000000174456</span>
				<span class="col-md-4 col-lg-4 col-sm-4 col-xs-4">Filiale</span>
				<span class="col-md-6 col-lg-6 col-sm-6 col-xs-6 col-sm-6 col-xs-6" id="agenzia">SEDE DI LODI - 2001</span>
			</div>		
			<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" id="numeri">
				<span id="disponibile">Saldo disponibile:
					
						<strong class="positivo">
							999.930.126,89
						</strong>
					
					
				</span>
				<span id="contabile">Saldo contabile: 
					
						<strong class="positivo">
							999.936.952,12
						</strong>
					
					
				</span>
				<span id="affidamento">Affidamento: 
					
						<strong class="positivo">
							10.000,00
						</strong>
					
					
				</span>
			</div>
			<a class="btnSelezioneCC" href="javascript:void(0);" onclick="parent.refreshIframeSize();">
					
						<img src="/sapef23/f23/images/ico-select.png">
					
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

							
								
								








<!-- Inizio testata -->

	<div class="section clearfix">
		<div class="bs-example">
			<div class="form-group">
				<div class="col-md-2 col-md-offset-7 col-lg-2 col-lg-offset-7 col-sm-2 col-sm-offset-7 col-xs-offset-6 col-xs-3"><b class="right">Numero di riferimento</b></div>
				<div class="form-field-input col-md-3 col-lg-3 col-sm-3 col-xs-3">
					<input type="text" name="numeroRiferimento" tabindex="1" size="20" maxlength="17" class="form-control" 
						
					/>
				</div>
			</div>
		</div>
	</div>

	
<!-- fine testata -->
								
							



















<script type="text/javascript">
	$(document).ready(function(){		
		$('.dataNascitaHtml').datepicker({ dateFormat: 'dd/mm/yy', yearRange: '-100:+0', buttonImage: getPathImages()+'calendar.png'});		
	});
</script>

<script type="text/javascript">

	function decodeHtml(s) {
		return s.replace( /\&quot;/g, '"' ).replace( /\&lt;/g, '<' ).replace( /\&gt;/g, '>' ).replace( /\&amp;/g, '&' ).replace( /\&#39;/g, '\'' );
	}
	
	
	
		
	
			function compila(indice, nCont) {
				if (indice == 0) {
					compilaContribuenteZeroJS(nCont);
				}
	
			
	
			}
		
	
</script>
<!-- Inizio sezione Contribuente -->
<div class="section clearfix">
	<h3 class="titleSection">Dati anagrafici</h3>
		<div class="bs-example">
			<input type="hidden" id="_indiceContoId" value="0" />
			<div class="form-group">
				
					<div class="form-field-input col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<label class="control-label"><b>Seleziona Contribuente</b></label>
						<div class="form-field">
							<div class="form-field-input col-lg-8 col-md-8 col-sm-8 col-xs-8">
								<select id="contr1" class="form-control" onchange="compila(this.value, 1)">
									<option value="0">Nuovo Contribuente</option>
									
										
									
								</select>
								<input type="hidden" name="nuovoContribuente" />
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2 nascosto">
						
							<label class="control-label"><br/>Vuoi salvare/aggiornare i dati?</label>
						
					</div>
					<div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 margin-top22 nascosto">
						<input type="hidden" name="flagUpdateContribuente1" id="flagUpdateContribuente1Id" />
						
							<div class='slider1' style="width:50px"></div>
							<div style="position:relative">
							  <div class="onText off" style="float: left; position: absolute; left: -5px; padding-top: 3px;">Off</div>
							  <div class="onText on" style="float: left; position: absolute; left: 40px; padding-top: 3px;">On</div>
							</div>
						
					</div>
				
			</div>
<!-- 			Inizio Anagrafica 1 -->
			<div class="form-group">
				<div class="form-field-input col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<label class="control-label">Cognome, denominazione o ragione sociale:</label>
					<div class="form-field">
						<div class="form-field-input col-lg-10 col-md-10 col-sm-10 col-xs-10">
							<input type="text" name="contribuente.cognome1" tabindex="2" size="30" maxlength="24" value="LAOLT" class="form-control" 
								
							/>
							<input type="hidden" name="backupCognome1" />
						</div>
					</div>
				</div>
				<div class="form-field-input col-lg-5 col-md-5 col-sm-5 col-xs-4">
					<label class="control-label">Nome:</label>
					<div class="form-field">
						<div class="form-field-input col-lg-10 col-md-10 col-sm-10 col-xs-10">
							<input type="text" name="contribuente.nome1" tabindex="3" size="30" maxlength="20" value="AORMAULCU" class="form-control" 
								
							/>
							<input type="hidden" name="backupNome1" value="" disabled="disabled" />
						</div>
					</div>
				</div>
				<div class="form-field-input col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<label class="control-label">Data di nascita:</label>
					<div class="form-field">						
						
							<input type="text" name="contribuente.dataNascita1Html" tabindex="4" size="13" maxlength="10" value="30/01/1970" style="width:120px" class="dataNascitaHtml datepicker form-control w-auto" 
								
							/>
						
						
						<input type="hidden" name="backupDataNascita1" />
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-field-input col-lg-1 col-md-1 col-sm-1 col-xs-2">
					<label class="control-label">Sesso:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-8 col-md-8 col-sm-8 col-xs-6">						
								
				
								
									<select name="contribuente.sesso1" tabindex="5" class="form-control" >
										<option value=" ">&nbsp;</option>
										<option value="M" selected="selected">M</option>
										<option value="F">F</option>
									</select>
								
								<input type="hidden" name="backupSesso1" />
							</div>
						</div>
					</div>			
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-5">
						<label class="control-label">Comune (o stato estero) di nascita / Sede sociale:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-9 col-md-9 col-sm-9 col-xs-9">	
								<input type="text" name="contribuente.comNas1" tabindex="6" maxlength="25" value="MILANO" class="form-control" 
									
								/>
								<input type="hidden" name="backupComuneNascita1" />
							</div>
						</div>
					</div>
					<div class="form-field-input col-lg-1 col-md-1 col-sm-1 col-xs-2">
						<label class="control-label">Prov.:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-9 col-md-9 col-sm-9 col-xs-8">
								
				
								
									<select name="contribuente.provNas1" tabindex="7" class="form-control" >
										
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
										
											<option value="LO">LO</option>
										
											<option value="LT">LT</option>
										
											<option value="LU">LU</option>
										
											<option value="MB">MB</option>
										
											<option value="MC">MC</option>
										
											<option value="ME">ME</option>
										
											<option value="MI" selected="selected">MI</option>
										
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
								
								<input type="hidden" name="backupProvinciaNascita1" />
							</div>
						</div>
					</div>
					<div class="form-field-input col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<label class="control-label">Cod. fiscale/ partita IVA:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="text" name="contribuente.codFis1" tabindex="8" size="30" maxlength="16" value="TLLMLC70A30F205O" class="form-control" 
									
									
								/>
							</div>
						</div>
					</div>
					
				</div> 	
				
    <!-- Fine Dati Anagrafici 1 -->
    <hr style="margin-bottom:5px">
    <!-- Inizio Dati Anagrafici 2 -->
    	<div class="form-group">
				
					<div class="form-field-input col-lg-5 col-md-5 col-sm-5 col-xs-5">
						<label class="control-label"><b>Seleziona Contribuente</b></label>
						<div class="form-field">
							<div class="form-field-input col-lg-8 col-md-8 col-sm-8 col-xs-8">
								<select id="contr2" class="form-control" onchange="compila(this.value, 2)">
									<option value="0">Nuovo Contribuente</option>
									
										
									
								</select>
								<input type="hidden" name="nuovoContribuente" />
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2 nascosto">
						
							<label class="control-label"><br/>Vuoi salvare/aggiornare i dati?</label>
						
					</div>
					<div class="col-md-5 col-lg-5 col-sm-5 col-xs-5 margin-top22 nascosto">
						<input type="hidden" name="flagUpdateContribuente2" id="flagUpdateContribuente2Id" />
						
							<div class='slider2' style="width:50px"></div>
							<div style="position:relative">
							  <div class="onText off" style="float: left; position: absolute; left: -5px; padding-top: 3px;">Off</div>
							  <div class="onText on" style="float: left; position: absolute; left: 40px; padding-top: 3px;">On</div>
							</div>
						
					</div>
				
			</div>
			<div class="form-group">
				<div class="form-field-input col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<label class="control-label">Cognome, denominazione o ragione sociale:</label>
					<div class="form-field">
						<div class="form-field-input col-lg-10 col-md-10 col-sm-10 col-xs-10">
							<input type="text" name="contribuente.cognome2" tabindex="9" size="30" maxlength="24" class="form-control" 
								
							/>
							<input type="hidden" name="backupCognome2" />
						</div>
					</div>
				</div>
				<div class="form-field-input col-lg-5 col-md-5 col-sm-5 col-xs-4">
					<label class="control-label">Nome:</label>
					<div class="form-field">
						<div class="form-field-input col-lg-10 col-md-10 col-sm-10 col-xs-10">
							<input type="text" name="contribuente.nome2" tabindex="10" size="30" maxlength="20" class="form-control" 
								
							/>
							<input type="hidden" name="backupNome2" value="" disabled="disabled" />
						</div>
					</div>
				</div>
				<div class="form-field-input col-lg-2 col-md-2 col-sm-2 col-xs-3">
					<label class="control-label">Data di nascita:</label>
					<div class="form-field">						
						
							<input type="text" name="contribuente.dataNascita2Html" tabindex="11" size="13" maxlength="10" value="" style="width:120px" class="datepicker dataNascitaHtml form-control w-auto" 
								
							/>
						
						
						<input type="hidden" name="backupDataNascita2" />
					</div>
				</div>
			</div>
    		<div class="form-group">
				<div class="form-field-input col-lg-1 col-md-1 col-sm-1 col-xs-2">
					<label class="control-label">Sesso:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-8 col-md-8 col-sm-8 col-xs-6">							
								
				
								
									<select name="contribuente.sesso2" tabindex="12" class="form-control" >
										<option value=" ">&nbsp;</option>
										<option value="M">M</option>
										<option value="F">F</option>
									</select>
								
								<input type="hidden" name="backupSesso2" />
							</div>
						</div>
					</div>
					<div class="form-field-input col-lg-4 col-md-4 col-sm-4 col-xs-5">
						<label class="control-label">Comune (o stato estero) di nascita / Sede sociale:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-9 col-md-9 col-sm-9 col-xs-9">	
								<input type="text" name="contribuente.comNas2" tabindex="13" maxlength="25" class="form-control" 
									
								/>
								<input type="hidden" name="backupComuneNascita2" />
							</div>
						</div>
					</div>
					<div class="form-field-input col-lg-1 col-md-1 col-sm-1 col-xs-2">
						<label class="control-label">Prov.:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-9 col-md-9 col-sm-9 col-xs-8">
								
				
								
									<select name="contribuente.provNas2" tabindex="14" class="form-control" >
										
											<option value="" selected="selected"></option>
										
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
										
											<option value="LO">LO</option>
										
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
								
								<input type="hidden" name="backupProvinciaNascita2" />
							</div>
						</div>
					</div>
					<div class="form-field-input col-lg-3 col-md-3 col-sm-3 col-xs-3">
						<label class="control-label">Cod. fiscale/ partita IVA:</label>
						<div class="form-field">
							<div class="form-field-input col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="text" name="contribuente.codFis2" tabindex="15" size="30" maxlength="16" class="form-control" 
									
									
								/>
							</div>
						</div>
					</div>				
			</div>			
		<!-- Fine Dati Anagrafici 2 -->
		<script type="text/javascript">

	$(document).ready(function(){

		
			$('#contr1').change();
			$('#contr2').change();
		
			
		
			$('#flagUpdateContribuente1Id').on("change", function(){
				setSlider1JS();
			});
			$('#flagUpdateContribuente2Id').on("change", function(){
				setSlider2JS();
			});

			impostazioniSlider1JS();
			impostazioniSlider2JS();

			setSlider1JS();
			setSlider2JS();
			
		
		
	});

</script>
		<!-- Fine sezione Contribuente -->
		</div>
</div>
							














<!-- Inizio sezione Dati del versamento -->

<div class="section clearfix">
	<h3 class="titleSection">
		Dati del versamento
	</h3>
	<div class="bs-example">
		<div class="form-group">
		
			<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">				 
				<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceUfficio');" class="action">Ufficio o Ente</a></label>				
				<div class="form-field">
					<input type="text" name="versamento.codiceUfficio" tabindex="16" size="4" maxlength="3" value="" style="width:50px;float:left;margin-right:10px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
					<input type="text" name="versamento.subCodice" tabindex="17" size="3" maxlength="2" value="" style="width:40px;" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
				</div>
			</div>
			<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
				<label class="control-label" style="white-space: nowrap;"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTerritoriale');" class="help">Cod. Territoriale</a></label>
				<div class="form-field">
					<div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
						<input type="text" name="versamento.codiceTerritoriale" tabindex="18" size="12" maxlength="4" value="" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
			</div>
			<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
				<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=contenzioso');" class="help">Contenzioso</a></label>
				<div class="form-field">
					<input type="text" name="versamento.contenzioso" tabindex="19" size="6" maxlength="1" value="" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
				</div>
			</div>
			<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
				<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=causale');" class="help">Causale</a></label>
				<div class="form-field">
					<input type="text" name="versamento.causale" tabindex="20" size="3" maxlength="2" value="" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
				</div>
			</div>
			<div class="form-field-input col-md-6 col-lg-6 col-sm-6 col-xs-6">
				<label class="control-label">Estremi dell'atto o del documento</label>
				<div class="form-field">
					<input type="text" name="versamento.annoDocumento" tabindex="21" size="5" maxlength="4" value="" style="width:18%;float:left;margin-right:10px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>           
					<input type="text" name="versamento.numeroDocumento" tabindex="22" size="23" maxlength="15" value="" style="width:70%;float:left;" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
						
					/>
				</div>
			</div>
		</div>
		
		
		
			<div class="form-group">				
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">						 
					<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTributo');" class="action">Codice Tributo</a></label>			   			
					<div class="form-field">
						<input type="text" name="versamento.tributi.codice[0]" tabindex="23" size="5" maxlength="4" value="" style="width:90px;" class="form-control" onblur="trimTributo(this); deselezionato(this)" onfocus="selezionato(this)" 
							
						/>					
					</div>
				</div>
				<div class="form-field-input col-md-6 col-lg-6 col-sm-6 col-xs-6">
					<label class="control-label" style="white-space: nowrap;">Descrizione</label>
					<div class="form-field">							
						
							<input type="text" name="versamento.tributi.descrizione[0]" value="" class="form-control" size="70" readonly>
						
												
					</div>
				</div>
						
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<label class="control-label">Importo</label>
					<div class="form-field"> 
						<input type="text" name="versamento.tributi.interiImporto[0]" tabindex="24" size="9" maxlength="13" value="" class="form-control numerico importoFieldClass puliziaImportiAZero" id="importoInt" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							class=&quot;right&quot; 
						/>
						,
						<input type="text" name="versamento.tributi.centImporto[0]" tabindex="25" size="1" maxlength="2" value="" class="form-control numerico importoDecClass puliziaImportiAZero" id="importoDec" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<label class="control-label"><a href="javascript:help('f23_pop_codice_destinatario.php')" class="help">Cod.Destinatario</a></label>
					<div class="form-field">
						<input type="text" name="versamento.tributi.codiceDestinatario[0]" tabindex="26" size="12" maxlength="4" value="" style="width:100px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>					
			</div>
		
		
		
			<div class="form-group">				
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">						 
					<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTributo');" class="action">Codice Tributo</a></label>			   			
					<div class="form-field">
						<input type="text" name="versamento.tributi.codice[1]" tabindex="27" size="5" maxlength="4" value="" style="width:90px;" class="form-control" onblur="trimTributo(this); deselezionato(this)" onfocus="selezionato(this)" 
							
						/>					
					</div>
				</div>
				<div class="form-field-input col-md-6 col-lg-6 col-sm-6 col-xs-6">
					<label class="control-label" style="white-space: nowrap;">Descrizione</label>
					<div class="form-field">							
						
							<input type="text" name="versamento.tributi.descrizione[1]" value="" class="form-control" size="70" readonly>
						
												
					</div>
				</div>
						
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<label class="control-label">Importo</label>
					<div class="form-field"> 
						<input type="text" name="versamento.tributi.interiImporto[1]" tabindex="28" size="9" maxlength="13" value="" class="form-control numerico importoFieldClass puliziaImportiAZero" id="importoInt" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							class=&quot;right&quot; 
						/>
						,
						<input type="text" name="versamento.tributi.centImporto[1]" tabindex="29" size="1" maxlength="2" value="" class="form-control numerico importoDecClass puliziaImportiAZero" id="importoDec" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<label class="control-label"><a href="javascript:help('f23_pop_codice_destinatario.php')" class="help">Cod.Destinatario</a></label>
					<div class="form-field">
						<input type="text" name="versamento.tributi.codiceDestinatario[1]" tabindex="30" size="12" maxlength="4" value="" style="width:100px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>					
			</div>
		
		
		
			<div class="form-group">				
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">						 
					<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTributo');" class="action">Codice Tributo</a></label>			   			
					<div class="form-field">
						<input type="text" name="versamento.tributi.codice[2]" tabindex="31" size="5" maxlength="4" value="" style="width:90px;" class="form-control" onblur="trimTributo(this); deselezionato(this)" onfocus="selezionato(this)" 
							
						/>					
					</div>
				</div>
				<div class="form-field-input col-md-6 col-lg-6 col-sm-6 col-xs-6">
					<label class="control-label" style="white-space: nowrap;">Descrizione</label>
					<div class="form-field">							
						
							<input type="text" name="versamento.tributi.descrizione[2]" value="" class="form-control" size="70" readonly>
						
												
					</div>
				</div>
						
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<label class="control-label">Importo</label>
					<div class="form-field"> 
						<input type="text" name="versamento.tributi.interiImporto[2]" tabindex="32" size="9" maxlength="13" value="" class="form-control numerico importoFieldClass puliziaImportiAZero" id="importoInt" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							class=&quot;right&quot; 
						/>
						,
						<input type="text" name="versamento.tributi.centImporto[2]" tabindex="33" size="1" maxlength="2" value="" class="form-control numerico importoDecClass puliziaImportiAZero" id="importoDec" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<label class="control-label"><a href="javascript:help('f23_pop_codice_destinatario.php')" class="help">Cod.Destinatario</a></label>
					<div class="form-field">
						<input type="text" name="versamento.tributi.codiceDestinatario[2]" tabindex="34" size="12" maxlength="4" value="" style="width:100px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>					
			</div>
		
		
		
			<div class="form-group">				
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">						 
					<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTributo');" class="action">Codice Tributo</a></label>			   			
					<div class="form-field">
						<input type="text" name="versamento.tributi.codice[3]" tabindex="35" size="5" maxlength="4" value="" style="width:90px;" class="form-control" onblur="trimTributo(this); deselezionato(this)" onfocus="selezionato(this)" 
							
						/>					
					</div>
				</div>
				<div class="form-field-input col-md-6 col-lg-6 col-sm-6 col-xs-6">
					<label class="control-label" style="white-space: nowrap;">Descrizione</label>
					<div class="form-field">							
						
							<input type="text" name="versamento.tributi.descrizione[3]" value="" class="form-control" size="70" readonly>
						
												
					</div>
				</div>
						
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<label class="control-label">Importo</label>
					<div class="form-field"> 
						<input type="text" name="versamento.tributi.interiImporto[3]" tabindex="36" size="9" maxlength="13" value="" class="form-control numerico importoFieldClass puliziaImportiAZero" id="importoInt" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							class=&quot;right&quot; 
						/>
						,
						<input type="text" name="versamento.tributi.centImporto[3]" tabindex="37" size="1" maxlength="2" value="" class="form-control numerico importoDecClass puliziaImportiAZero" id="importoDec" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<label class="control-label"><a href="javascript:help('f23_pop_codice_destinatario.php')" class="help">Cod.Destinatario</a></label>
					<div class="form-field">
						<input type="text" name="versamento.tributi.codiceDestinatario[3]" tabindex="38" size="12" maxlength="4" value="" style="width:100px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>					
			</div>
		
		
		
			<div class="form-group">				
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">						 
					<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTributo');" class="action">Codice Tributo</a></label>			   			
					<div class="form-field">
						<input type="text" name="versamento.tributi.codice[4]" tabindex="39" size="5" maxlength="4" value="" style="width:90px;" class="form-control" onblur="trimTributo(this); deselezionato(this)" onfocus="selezionato(this)" 
							
						/>					
					</div>
				</div>
				<div class="form-field-input col-md-6 col-lg-6 col-sm-6 col-xs-6">
					<label class="control-label" style="white-space: nowrap;">Descrizione</label>
					<div class="form-field">							
						
							<input type="text" name="versamento.tributi.descrizione[4]" value="" class="form-control" size="70" readonly>
						
												
					</div>
				</div>
						
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<label class="control-label">Importo</label>
					<div class="form-field"> 
						<input type="text" name="versamento.tributi.interiImporto[4]" tabindex="40" size="9" maxlength="13" value="" class="form-control numerico importoFieldClass puliziaImportiAZero" id="importoInt" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							class=&quot;right&quot; 
						/>
						,
						<input type="text" name="versamento.tributi.centImporto[4]" tabindex="41" size="1" maxlength="2" value="" class="form-control numerico importoDecClass puliziaImportiAZero" id="importoDec" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<label class="control-label"><a href="javascript:help('f23_pop_codice_destinatario.php')" class="help">Cod.Destinatario</a></label>
					<div class="form-field">
						<input type="text" name="versamento.tributi.codiceDestinatario[4]" tabindex="42" size="12" maxlength="4" value="" style="width:100px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>					
			</div>
		
		
		
			<div class="form-group">				
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">						 
					<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTributo');" class="action">Codice Tributo</a></label>			   			
					<div class="form-field">
						<input type="text" name="versamento.tributi.codice[5]" tabindex="43" size="5" maxlength="4" value="" style="width:90px;" class="form-control" onblur="trimTributo(this); deselezionato(this)" onfocus="selezionato(this)" 
							
						/>					
					</div>
				</div>
				<div class="form-field-input col-md-6 col-lg-6 col-sm-6 col-xs-6">
					<label class="control-label" style="white-space: nowrap;">Descrizione</label>
					<div class="form-field">							
						
							<input type="text" name="versamento.tributi.descrizione[5]" value="" class="form-control" size="70" readonly>
						
												
					</div>
				</div>
						
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<label class="control-label">Importo</label>
					<div class="form-field"> 
						<input type="text" name="versamento.tributi.interiImporto[5]" tabindex="44" size="9" maxlength="13" value="" class="form-control numerico importoFieldClass puliziaImportiAZero" id="importoInt" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							class=&quot;right&quot; 
						/>
						,
						<input type="text" name="versamento.tributi.centImporto[5]" tabindex="45" size="1" maxlength="2" value="" class="form-control numerico importoDecClass puliziaImportiAZero" id="importoDec" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<label class="control-label"><a href="javascript:help('f23_pop_codice_destinatario.php')" class="help">Cod.Destinatario</a></label>
					<div class="form-field">
						<input type="text" name="versamento.tributi.codiceDestinatario[5]" tabindex="46" size="12" maxlength="4" value="" style="width:100px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>					
			</div>
		
		
		
			<div class="form-group">				
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">						 
					<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTributo');" class="action">Codice Tributo</a></label>			   			
					<div class="form-field">
						<input type="text" name="versamento.tributi.codice[6]" tabindex="47" size="5" maxlength="4" value="" style="width:90px;" class="form-control" onblur="trimTributo(this); deselezionato(this)" onfocus="selezionato(this)" 
							
						/>					
					</div>
				</div>
				<div class="form-field-input col-md-6 col-lg-6 col-sm-6 col-xs-6">
					<label class="control-label" style="white-space: nowrap;">Descrizione</label>
					<div class="form-field">							
						
							<input type="text" name="versamento.tributi.descrizione[6]" value="" class="form-control" size="70" readonly>
						
												
					</div>
				</div>
						
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<label class="control-label">Importo</label>
					<div class="form-field"> 
						<input type="text" name="versamento.tributi.interiImporto[6]" tabindex="48" size="9" maxlength="13" value="" class="form-control numerico importoFieldClass puliziaImportiAZero" id="importoInt" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							class=&quot;right&quot; 
						/>
						,
						<input type="text" name="versamento.tributi.centImporto[6]" tabindex="49" size="1" maxlength="2" value="" class="form-control numerico importoDecClass puliziaImportiAZero" id="importoDec" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<label class="control-label"><a href="javascript:help('f23_pop_codice_destinatario.php')" class="help">Cod.Destinatario</a></label>
					<div class="form-field">
						<input type="text" name="versamento.tributi.codiceDestinatario[6]" tabindex="50" size="12" maxlength="4" value="" style="width:100px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>					
			</div>
		
		
		
			<div class="form-group">				
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">						 
					<label class="control-label"><a href="javascript:help('f24_pop_codice_tributo.php?tipoRicerca=codiceTributo');" class="action">Codice Tributo</a></label>			   			
					<div class="form-field">
						<input type="text" name="versamento.tributi.codice[7]" tabindex="51" size="5" maxlength="4" value="" style="width:90px;" class="form-control" onblur="trimTributo(this); deselezionato(this)" onfocus="selezionato(this)" 
							
						/>					
					</div>
				</div>
				<div class="form-field-input col-md-6 col-lg-6 col-sm-6 col-xs-6">
					<label class="control-label" style="white-space: nowrap;">Descrizione</label>
					<div class="form-field">							
						
							<input type="text" name="versamento.tributi.descrizione[7]" value="" class="form-control" size="70" readonly>
						
												
					</div>
				</div>
						
				<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
					<label class="control-label">Importo</label>
					<div class="form-field"> 
						<input type="text" name="versamento.tributi.interiImporto[7]" tabindex="52" size="9" maxlength="13" value="" class="form-control numerico importoFieldClass puliziaImportiAZero" id="importoInt" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							class=&quot;right&quot; 
						/>
						,
						<input type="text" name="versamento.tributi.centImporto[7]" tabindex="53" size="1" maxlength="2" value="" class="form-control numerico importoDecClass puliziaImportiAZero" id="importoDec" onblur="deselezionato(this); getTot(this);" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>
				<div class="form-field-input col-md-1 col-lg-1 col-sm-1 col-xs-1">
					<label class="control-label"><a href="javascript:help('f23_pop_codice_destinatario.php')" class="help">Cod.Destinatario</a></label>
					<div class="form-field">
						<input type="text" name="versamento.tributi.codiceDestinatario[7]" tabindex="54" size="12" maxlength="4" value="" style="width:100px" class="form-control" onblur="deselezionato(this)" onfocus="selezionato(this)" 
							
						/>
					</div>
				</div>					
			</div>
		
		

		<div class="form-group">				
			
			<div class="form-field-input col-md-offset-6 col-md-2 col-lg-offset-6 col-lg-2 col-sm-offset-6 col-sm-2 col-xs-offset-5 col-xs-3 margin-top22">
				
				<label class="control-label right"><strong>Importo complessivo di Euro</strong></label>
			</div>
			<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2 margin-top22">				   
				  <input id="interiSaldoVers" type="text" class="form-control numerico solaLettura puliziaImportiAZero" style="text-align: right" size="9" maxlength="13" readonly="true" onfocus="blur" value='0'>
				  ,
				  <input id="centSaldoVers" type="text" class="form-control numerico solaLettura puliziaImportiAZero" size="1" maxlength="2" readonly="true" onfocus="blur" value='00'>
			</div>
			<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2 margin-top22"></div>
		</div>
		<div class="form-group">
			<div class="form-field-input col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<label class="control-label"><strong>EURO (lettere)</strong></label>
			</div>
		</div>
		<div class="form-group">
			<div class="form-field-input col-md-12 col-lg-12 col-sm-12 col-xs-12">
				<input type="hidden" name="saldo" value="" /> 
				<input name="importoLettere" readonly="readonly" maxlength="4" style="width:94%;" class="form-control solaLettura puliziaImportiAZero" onblur="deselezionato(this)" onfocus="selezionato(this)" tabindex="-1" type="text">
			</div>
		</div>
		
	</div>
</div>
	  <script type="text/javascript">		
	  
	  	
		  	var interiSaldoObject = document.getElementById('interiSaldoVers');
		  	var centSaldoObject = document.getElementById('centSaldoVers');
		  
		  	if (!interiSaldoObject.value) {
		  		interiSaldoObject.value = '0';
		  	}
		  	if (!centSaldoObject.value) {
		  		centSaldoObject.value = '00';
		  	}
	  	
	  		  	
	  	function trimTributo(campo) {
	  	
	  		while (campo.value.indexOf(' ') == 0) {
	  			campo.value = campo.value.substring(1);
	  		}
	  		
	  		while ( (campo.value.length > 0) && (campo.value.lastIndexOf(' ') == (campo.value.length - 1)) ) {
		  		campo.value = campo.value.substring(0, campo.value.length - 1);
	  		}
	  	
	  	}
	  	
	  	function getTot(campo) {
	  	
	  		_doGetTot(campo);
	  	
	  	}
	  	
	  	function _doGetTot(campo) {
	  		tot(campo, 8);
			fillImportoLettere();
			blankImportoFields($('.importoFieldClass'), $('.importoDecClass'));
	  	}

	  	function blankImportoFields(campiImporto, decimaliImporto)  {
		  	var atListOneFull = false;
			$.each(campiImporto, function(i,n){
				if($(n).val() != "" && $(n).val() != "0")
					atListOneFull = true;
			})
			$.each(decimaliImporto, function(i,n){
				if($(n).val() != "" && $(n).val() != "00")
					atListOneFull = true;
			})
			if (atListOneFull != true) {
				$('.puliziaImportiAZero').val("");
			}
	  	}

	  	$( document ).ready(function() {
	  		_doGetTot($('#importoInt')[0]);
		});
	  	
	  </script>
	  
<!-- Fine sezione Versamento -->							
						 	
















<!-- Inizio sezione Estremi del Versamento -->

      
	<input type="hidden" name="abiProponente" />
	<input type="hidden" name="contoCorrente.codiceDivisa" value="E" />   
	<input type="hidden" name="contoCorrente.codicePaese" value="IT" />
	<input type="hidden" name="contoCorrente.codiceControllo" value="70" />
	<input type="hidden" name="contoCorrente.cin" value="R" />
	<input type="hidden" name="contoCorrente.abi" value="05034" />
	<input type="hidden" name="contoCorrente.cab" value="20301" />
	<input type="hidden" name="contoCorrente.numeroConto" value="000000174456" />
	<input type="hidden" name="contoCorrente.codiceFiscale" value="TLLMLC70A30F205O" />
	<script type="text/javascript">
		$(document).ready(function(){
				$('.dataIncassoHtml').datepicker({ dateFormat: 'dd/mm/yy', minDate: '-0D', maxDate: '+59D', buttonImage: getPathImages() +'calendar.png'});
		});
	</script>
	
<div class="section clearfix">
		<h3 class="titleSection">
			Estremi del versamento
		</h3>
		<div class="bs-example">
			<div class="form-group">
				
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-3">
					<label class="control-label">Data Pagamento</label>
					<div class="form-field">						
						
							<input type="text" name="dataIncassoHtml" tabindex="55" size="15" maxlength="10" class="datepicker dataIncassoHtml form-control data" 
							onfocus="javascript: this.style.backgroundColor = 0xFFFFFF;"
							
							/>						
						
	
						
					</div>
				</div>
		
				<div class="form-field-input col-md-3 col-lg-2 col-sm-3 col-xs-3">
					<label class="control-label">Saldo Finale</label>
					<div class="form-field">
						<input type="text" name="interiSaldo" maxlength="13" value="0" class="form-control numerico puliziaImportiAZero" id="interiSaldo" readonly="readonly" />
						,
						<input type="text" name="centSaldo" size="2" maxlength="2" value="00" class="form-control numerico puliziaImportiAZero" id="centSaldo" readonly="readonly" />
						<input type="hidden" name="saldoParziale" />
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
	


	<script type="text/javascript">

		if (!document.f23MainForm.interiSaldo.value) {
			document.f23MainForm.interiSaldo.value = '0';
		}
		if (!document.f23MainForm.centSaldo.value) {
			document.f23MainForm.centSaldo.value = '00';
		}

	</script>
	

<!-- fine sezione Estremi del Versamento -->

							
					</form>
					
				</div>
				












<SCRIPT type="text/javascript">

	  
		  
		  
		      function salva() {
		    	  moduloF23functionJS('/sapef23/f23/salvaModello.do');
		      }
		
		      /*function invia() {
		    	  moduloF23functionJS('tpl_priv_pagamento_f23_modulo_step2.php');
		      }*/
			  
			  function invia() {
			        if (!getSubmitted()) {
			           document.f23MainForm.action = 'tpl_priv_new_pagamento_f23_modulo_step2.php';
			           document.f23MainForm.target = 'frF24Center';
			           document.f23MainForm.submit();
			        }
			      }
	      
	      
	      function annulla() {
	      	annullaF23JS();
	      }
      
      
      function esci() {
    	  moduloF23functionJS('/sapef23/f23/inserisciNuovoModello.do');
      }
      
      function stampa() {
          window.print();
      }

</SCRIPT>



	<div class="pull-right margin-bottom20">
		
			<input type="button" class="btn btn-primary" value="Stampa"  onclick="javascript: stampa();" />
			
		

			
			  <input type="button" class="btn btn-primary" value="Salva Bozza" onclick="javascript: salva();" >
			

			

			<input type="button" class="btn btn-primary" value="Annulla"  onclick="javascript: annulla();">
			
			  <input type="button" class="btn btn-primary" value="Avanti" onclick="javascript: invia();">
			
		

		
</div>



				<div class="clearfix"></div>

			</div>
		</div>
	</div>
</div>

<iframe 
	name="footerFrame" id="footer"
	width="100%" height="337px"
	frameborder="0" scrolling="no"
	seamless="true"
	src="/template/tpl_priv_f24_footer.php"></iframe>	 
  

</body>
</html>