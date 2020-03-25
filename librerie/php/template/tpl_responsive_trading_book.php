
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Trading Book</title>
 	
	<meta charset="utf-8">
		<title>Webank</title>
		<meta http-equiv="Page-Enter" content="blendTrans(Duration=0.1)">

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
		<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_generic.js"></script>
		<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_utilities.js"></script>
		<script type="text/javascript" src="/wscmn/fe/js/bootstrap-table.js"></script>
		
	
	<script type="text/javascript">
		// Inizializzazioni
		$(function(){

			// Sblocco dell'interfaccia
			setTimeout(function(){$("#formBook").removeClass("loading")},500);

			// Selettore rapporto 
			createSelectRapp('sceltaRapporto', 'sceltaRapportoVal');

			// Emulazione comportamento bottone "cerca altri titoli"
			$("#btnCerca").click(function(){
				$("#formTitolo").hide();
				$("#formCerca").show();
			});


			// Switch ordine
			$("#filtriAvanzatiSwitch").click(function(){
				var btn = $(this);
				if(!btn.hasClass("opened")) {
					$("#pannelloOpzioni").slideDown();
					$("html, body").delay(300).animate({
	                    scrollTop: btn.offset().top
	                	},500);
					btn.addClass("opened");
				}
				else
				{
					$("#pannelloOpzioni").slideUp();
					btn.removeClass("opened");
				}
			})			
	
			// Automazione (indicativa) spinner
			$.each($(".form-control.spinner"),function(i,v){
				// Spinner
				var inp = $(v);
				 setSpinner({
			        idInput: "#" + inp.attr("id"),
			        start: function() {
			            spinnerVal = inp.val();
			            //getspinnerVal();
			        }
			    });

			});


		});


	</script>


	<style>
	body.popup .modal.guida {width:100% !important;}
	body.popup .modal.guida .modal-dialog {width:100% !important;height:100% !important; max-height:100%;position:fixed;max-width:100% !important; margin-top:0;
		right:-100%;
		transition: opacity 0.3s linear, right 0.3s ease-out;
	}
	body.popup .modal.guida.in .modal-dialog {right:0;}

	body.popup .modal.guida .modal-dialog .modal-content {width:100% !important;height:100% !important; max-height:100% !important; padding:0;}
	body.popup .modal.guida .modal-dialog .modal-content .modal-header {background:#000; height:60px;overflow:hidden;}
	body.popup .modal.guida .modal-dialog .modal-content .modal-header .btn-icon {background: #fff;border-radius: 50%;}
	body.popup .modal.guida .modal-dialog .modal-content .modal-header .btn-icon i {text-shadow: none;}
	body.popup .modal.guida .modal-dialog .modal-content .modal-header h2 {color:#fff;}
 
	</style>


</head>
<body class="popup">
	<header>
		<div class="wrapper">
			<div class="logo"><img alt="" src="/fe/img/logo_bank.png" /></div>
			
			<div class="btn-console">
				<!-- Modale guida -->
				<div class="modal fade guida" id="layerGuida" tabindex="-1" role="dialog" aria-labelledby="layerGuidaLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
								<h2 class="modal-title" id="layerGuidaLabel">Guida</h2>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row">
										<div class="col-xs-12">
											<h3>Argomento</h3>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
												debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
												quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- Fine modale guida -->
				<a href="#1" class="no-underline btn-icon flLeft" title="Guida" data-toggle="modal" data-target="#layerGuida"><i class="icon icon-2x icon-help_filled"></i></a>
				<a class="no-underline btn-icon flLeft" title="Apri un nuovo book" onclick="openTradingBook(true)"><i class="icon icon-2x icon-book"></i></a>
			</div>
		</div>
	</header>
	<div id="contenuti" >
		<div class="wrapper">
			
			

			<form class="formGenerico loading" role="form" id="formBook">
				
				<!-- Deposito titoli -->
			 		<div class="borderFormRounded">
					
			           
			                <div class="row">
			                    <div class="col-xs-12 col-sm-5">
			                        <label class="control-label-output">Deposito titoli</label>
			                        <div id="sceltaRapporto" class="selectRapp">
			                        <input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
			                        <a href="javascript:;" class="inputOption inputSx form-control">
			                            <span class="inputDx">
			                                <span class="input">
			                                    xxx/aaaaaa
			                                </span>
			                            </span>
			                        </a>
			                        <div class="selector" style="display: none;">
			                            <span class="group">
			                                <a value="xxxaaaaaa" href="javascript:;" class="selectorOptions selected">
			                                <strong>xxx/aaaaaa</strong><br/>
			                                Nome Nome Cognome Cognome1</a>
			                            </span>
			                            <span class="group">
			                                <a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
			                                <strong>xxx/bbbbbb</strong><br/>
			                                Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
			                            </span>
			                            <span class="group">
			                                <a value="xxxcccccc" href="javascript:;" class="selectorOptions">
			                                <strong>xxx/cccccc</strong><br/>
			                                Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
			                                Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
			                                Nome Nome Cognome Cognome5</a>
			                            </span>
			                        </div>
			                    </div>

			                    </div>
			                    <div class="col-xs-12 col-sm-6">
			                        <label class="control-label-output">Totale liquidit&agrave;</label>
			                        <span class="output txthelp" data-toggle="tooltip">4.213,46 al gg/mm/aaaa</span>
			                        <div class="htmlTooltip">
			                            08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;&euro;</strong>
			                            <br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;&euro;</strong>
			                            <br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;&euro;</strong>
			                            <br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;&euro;</strong>
			                            <br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;&euro;</strong>
			                        </div>
			                    </div>
			                  
			                </div>
			     
			            <!-- Fine deposito titoli -->
		            
			        </div>


			    <!-- Titolo -->
			    <!--
				<div class="tithelp">
				    
				    <div class="flRight"><a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a>
				        <br class="clear">
				    </div>
				    <br class="clear">
				</div>
				-->
				<!-- Fine titolo -->



				<!-- Informazioni titolo e ricerca -->

					
					<div class="borderFormRounded" id="formTitolo">
						<div class="row">
							<div class="col-sm-10">
								<span class="output with-trend with-ico">
									<i class="icon icon-1x icon-trend icon-trend_down"></i>
									<span class="txthelp" data-toggle="tooltip" title="Fiat Chrisler Auto Group Lorem ipsum dolor sit amet.">FCA</span>
									<a class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled"  data-toggle="tooltip" title="<strong>PMC</strong>: 9.999.999,00<br><strong>Quantit&agrave;</strong>: 9.999.999,00<br><strong>Profit & Loss</strong>: 9.999.999,00"></i></a>
								</span>
							</div>
							<div class="col-sm-2">
								<div class="btn-align-right">
									<a type="button" class="btn btn-primary" id="btnCerca">Cerca altro titolo</a>
								</div>
							</div>
						</div>						
					</div>

					<!-- Blocco di ricerca -->
					<div class="borderFormRounded" id="formCerca" style="display:none">
						
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<label class="control-label txthelp" data-toggle="tooltip" data-title="Puoi effettuare la ricerca inserendo alternativamente la descrizione, il simbolo o il 
									codice ISIN del titolo.<br><br>
									<strong>Codice Isin</strong>: è il codice alfanumerico internazionale identificativo del titolo. 
									È formato da 12 caratteri, i primi due richiamano il Paese di emissione del titolo.<br><br>
									<strong>Descrizione</strong>: riporta per intero il nome dello strumento finanziario (es. BPM).<br><br>
									<strong>Simbolo</strong>: codice di identificazione di un titolo, il più delle volte composto 
									dall'abbreviazione del nome della società. Per esempio, &quot;AMZN&quot; è il simbolo di AMAZON.">Titolo</label>
									<div class="editable-input"><input type="text" name="titolo" class="form-control clear-x" placeholder=" ISIN, simbolo o descrizione" id="titolo"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<label class="control-label">Mercato</label>
									<select class="form-control">
										<optgroup label="Azioni"> 
											<option value="MI|EQCON|B">MTA</option><option value="MI|EQCON|BI">BIT GEM</option><option value="TLX|ELX|B">EuroTLX</option><option value="FR|EQXET|B">XETRA</option><option value="EUR|EQPA|B">SBF</option><option value="LON|EQLSE|B">FTSE100</option><option value="MA|EQIBE|B">IBEX35</option><option value="EUR|EQAMS|B">AEX25</option><option value="EUR|EQBRU|B">BEL20</option><option value="EUR|EQPSI|B">PSI20</option><option value="NY|EQNY|B">NYSE</option><option value="NQ|EQNQ|B">NASDAQ</option>
										</optgroup>	
										<optgroup label="ETF-ETC">
											<option value="MI|EQCON|E">ETFplus</option>
										</optgroup>	
										<optgroup label="CW E CERTIFICATES"> 
											<option value="MI|CW|C">SEDEX</option><option value="TLX|ELX|C">EuroTLX</option>
										</optgroup>	
										<optgroup label="DERIVATI">
											<option value="MI|DER|D">IDEM</option><option value="FR|EUREX|D">EUREX</option><option value="EUR|LIF|D">EURONEXT - LIFFE</option><option value="CME|CEQFU|D">CME</option><option value="CME|CBOFU|D">eCBOT</option><option value="CME|COMEX|D">COMEX</option><option value="CME|NYMEX|D">NYMEX</option>
										</optgroup>	
										<optgroup label="OBBLIGAZIONI" class="optiongroup">
											<option value="MI|MRT|O">MOT - EuroMOT</option><option value="TLX|ELX|O">EuroTLX</option><option value="MI|HIMTF|O">Hi-MTF</option><option value="AK|AKIS|O">Akros IS</option><option class="optionbest" value="OTC|OBOTC|O">Best execution</option>
										</optgroup>	
									</select>
								</div>
								<div class="col-sm-2 col-xs-12 no-label">
									<div class="btn-align-right">
										<a type="button" class="btn btn-primary" id="btnCerca">Cerca</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Fine blocco di ricerca -->


				<!-- Fine informazioni titolo e ricerca -->  
	   			
				<!-- Aggiornament0 -->
				<div class="row">
					<div class="col-xs-12">
						<p class="note flRight noFloatMobile">
							<span class="flLeft">Ultimo Aggiornamento: 02/08/2016 ore 10:44:24</span> 
							<a href="#1" class="no-underline btn-icon flLeft padding-l-m" id="testLoading"><i class="icon icon-2x icon-update"></i></a>
						</p>
					</div>
				</div>
				<!-- Fine aggiornamento -->

	   			<!-- Tabelle -->
				<div class="row">
					<div class="col-sm-8">
						<div class="headerContainerNoBootS">
        					<div class="tableContainerNoBootS">
								<table>
									<thead>
										<tr> 
											<th class="left">N.</th>
											<th class="right"><nobr>Vol. Denaro</nobr></th>
											<th class="right">Denaro</th>
											<th class="right">Lettera</th>
											<th class="right"><nobr>Vol. Lettera</nobr></th>
											<th class="right">N.</th>
										</tr>
									</thead>
									<tbody>
										<tr class="dispari"> 
											<td>n.d.</td>
											<td class="right">9.999.999</td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right">9.999.999</td>
											<td class="right">10</td>
										</tr>
											<tr class="pari"> 
											<td>100</td>
											<td class="right">9.999.999</td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right">9.999.999</td>
											<td class="right">20</td>
										</tr>
								
									<tr class="dispari"> 
											<td>200</td>
											<td class="right">9.999.999</td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right">9.999.999</td>
											<td class="right">30</td>
										</tr>
								
									<tr class="pari"> 
											<td>300</td>
											<td class="right">9.999.999</td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right">9.999.999</td>
											<td class="right">40</td>
										</tr>
								
										<tr class="dispari"> 
											<td>300</td>
											<td class="right">9.999.999</td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right"><a href="javascript:;">9.999,99</a></td>
											<td class="right">9.999.999</td>
											<td class="right">40</td>
										</tr>
								
								</tbody>
							</table>
						</div>
					</div>

				</div>
				<div class="col-sm-4 hidden-xs">
					<table>
						<tbody>
							<tr> 
								<th class="left">Ult. prz.</td>
								<td class="right">
									<strong>9.999,99<strong>
								</td>
							</tr>
							<tr>
								<th class="left">Ora</th>
								<td class="right">23:59:59</td>
							</tr>
							<tr>
								<th class="left">Var.</th>
								<td class="right nega">-0,14%</td>
							</tr>	
							<tr>
								<th class="left">Min</th>
								<td class="right">999,999</td>
							</tr>
							<tr>
								<th class="left">Max</th>
								<td class="right">999,999</td>
							</tr>
							<tr>
								<th class="left">V.tot</th>
								<td class="right">9.999.999,99</td>
							</tr>				
						</tbody>
					</table>
				</div>

			</div>
			
			<div class="row visible-xs">
				<div class="col-xs-12">
					<div class="headerContainerNoBootS">
        				<div class="tableContainerNoBootS">
						<table>
								<thead>
									<tr>
										<th>Ult. prz.</td>
										<th class="center">Ora</th>
										<th class="right">Var.</th>
										<th class="right">Min</th>
										<th class="right">Max</th>
										<th class="right">V.tot</th>
									</tr>
								</thead>
								<tbody>
									<tr> 
										<td class="right">
											<strong>9.999,99<strong>
										</td>
										<td class="center">23:59:59</td>
										<td class="right nega">-0,14%</td>
										<td class="right">999,999</td>
										<td class="right">999,999</td>
										<td class="right">9.999.999,99</td>
									</tr>				
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
				
				

			<!-- Pannello operativo -->
			
			<!-- switch pannello operativo -->
			<div class="btn-wrapper" id="filtriAvanzatiBtn">
				<div class="row">
					<div class="col-sm-4 hidden-xs"></div>
					<div class="col-sm-4">
						<a class="btn btn-primary" id="filtriAvanzatiSwitch"><span class="mostra">Apri</span><span class="nascondi">Chiudi</span> la sezione ordine <i class="icon icon-arrow_down mostra"></i><i class="icon icon-arrow_up nascondi"></i></a>
					</div>
					<div class="col-sm-4 hidden-xs"></div>
				</div>
			</div>
			<!-- Fine switch pannello operativo -->


			<div class="borderFormRounded with-expander" id="pannelloOpzioni" style="display:none">
	
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label">Quantit&agrave;*</label>
							<input id="quantita1" type="text" name="Quantita" value="9999999" class="form-control spinner">
						</div>
						<div class="col-sm-6 no-label">
							<select name="Parametro_Quantita" id="quantita2" class="form-control">
								<option value="" >Senza Condizioni </option>
				       			<option value="EOC" selected="selected">Esegui e cancella</option>
				      			<option value="TON" >Tutto o niente</option>
							</select>
							<span id="outputParQuantita"></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label">Prezzo*</label>
							<input id="prezzo" type="text" name="PrezzoLimite" class="form-control spinner" value="">
				       	</div>
						<div class="col-sm-6 no-label">
							<select name="TipoPrezzo" id="prezzo2" class="form-control">
								<option value="E" selected="selected">Eco/Continua</option>				 	  
								<option value="L" >Al limite</option>
		      					<option value="E" >Eco/Asta</option>
							</select> 
							<span id="outputParTipoPrezzo"></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label">Fase</label>
							<select class="form-control">
								<option>ape/cont/chiu</option>
							</select>
						</div>
						<div class="col-sm-6">
							<label class="control-label">Validit&agrave;</label>
							
								<select class="form-control">
									<option value="VSC" >a chiusura</option>
									<option value="01/03/2019" > 01/03/2019 </option>
									<option value="04/03/2019" > 04/03/2019 </option>
									<option value="05/03/2019" > 05/03/2019 </option>
									<option value="06/03/2019" > 06/03/2019 </option>
									<option value="07/03/2019" > 07/03/2019 </option>
									<option value="08/03/2019" > 08/03/2019 </option>
									<option value="11/03/2019" > 11/03/2019 </option>
									<option value="12/03/2019" > 12/03/2019 </option>
								</select>
						</div>
					</div>
				</div>
				
				<div class="panel-group" id="accordionInsOrdini" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="stopOrder">
				      <h4 class="panel-title">
				        <a class="collapsed" data-toggle="collapse" href="#collapseIns1" aria-expanded="false" aria-controls="collapseIns1">
				          Stop order<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
				        </a>
				      </h4>
				    </div>
			        <div id="collapseIns1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="stopOrder">
  						<div class="panel-body">
  						 	<div class="form-group">
								<div class="row">
									<div class="col-sm-6">
										<label class="control-label">Condizione</label>
										<select name="so_cond" id="so_cond" class="form-control">
										  	<option value=""  selected="selected"></option>
										 	<option value="L+" >Ultimo prezzo &gt;=</option>
										  	<option value="L-" >Ultimo prezzo &lt;=</option>
								  		</select>
									</div>
									<div class="col-sm-6">
										<label class="control-label">Prezzo soglia</label>
										<input type="text" class="form-control spinner" value="" name="stoporder_price" id="stoporder_price">
						       	 	</div>
								</div>
							</div>
  						</div>
  					</div>
				   </div>
				   <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="stopOrder2">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" href="#collapseIns2" aria-expanded="false" aria-controls="collapseIns1">
					          Stop loss/Take profit<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
					        </a>
					      </h4>
					    </div>
				        <div id="collapseIns2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="stopOrder2">
	  						<div class="panel-body">
	  						 	<div class="form-group" >
									<div class="row">
										<div class="col-sm-6">
											<label>Stop loss</label>
											<input type="text" value="" class="form-control spinner" id="stop_loss" name="stop_loss" />
							       	 	</div>
										<div class="col-sm-6">
											<label class="control-label">Scadenza</label>
											<select name="ScadenzaSLTP" id="ScadenzaSLTP" class="form-control">
												<option value="28/02/2019" selected="selected"> 28/02/2019 </option>
												<option value="01/03/2019" > 01/03/2019 </option>
												<option value="02/03/2019" > 02/03/2019 </option>
												<option value="03/03/2019" > 03/03/2019 </option>
												<option value="04/03/2019" > 04/03/2019 </option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label class="control-label">Take profit</label>
											<input type="text" value="" class="form-control spinner" id="take_profit" name="take_profit" />
							       	 	</div>
										<div class="col-sm-6">
											<label class="control-label">Fase</label>
											<select id="faseSLTP" name="faseSLTP" class="form-control">
												<option value="N">Solo continua</option>
												<option value="Y">Continua/tah</option>
											</select>
										</div>
									</div>
								</div>
	  						</div>
	  					</div>
				   </div>
				</div>

				<div class="inputFormCont topped" id="rowTipoOrdine" >
						
					<h4>Operativit&agrave;</h4>
					<div class="row">
						<div class="col-sm-4">
							<div class="radio">
		       					 <label class="textWrapper">
				         			<input type="radio" value="o" name="tipoOrdine" id="tipoOrdinaria" checked="checked">
				          			<span>Ordinaria</span>
				        		</label>
		     				</div>
		     			</div>
		     			
		     			<div class="col-sm-4">
							<div class="radio">
		       					 <label class="textWrapper">
				         			<input type="radio" value="m" name="tipoOrdine">
									<span>Marginata intraday</span>
				        		</label>
		     				</div>
		     			</div>
		     			<div class="col-sm-4">
							<div class="radio">
		       					 <label class="textWrapper">
				         			<input type="radio" value="s" name="tipoOrdine">
									<span>Marginata overnight</span>
				        		</label>
		     				</div>
		     			</div>
		     			
					</div>
					<p class="note"><strong>Attenzione</strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia delectus quia alias repellendus ullam, recusandae ab repudiandae suscipit. Saepe, labore!</p>
		</div>
					  

		<div class="form-group btnWrapper last-row">
		  	<div class="row">
			   	<div class="col-xs-12 col-sm-3 btn-align-left">
					<a type="button" class="btn btn-primary" href="#" title="compra">compra</a>
				</div>
				<div class="hidden-xs col-sm-6 btn-align-center" >
					<a class="link-alert"><i class="icon icon-alert_caution_fill icon-2x"></i>Avvertenze sull'operazione</a>
					
				</div>
				<div class="col-xs-12 col-sm-3 btn-align-right">
					<a type="button" href="#" class="btn btn-primary" title="vendi">vendi</a>
				</div>
			</div>
	</div>

</div>

			<!-- Fine pannello operativo -->

	        </form>

		</div>
	</div>
</body>
</html>






