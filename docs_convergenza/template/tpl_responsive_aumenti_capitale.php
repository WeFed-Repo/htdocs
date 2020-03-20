	<script language="javascript" type="text/javascript">
			var currentTab = 'nav_priv_wbx_trading_wt';
			var tabId = 'nav_priv_wbx_trading_wt';
			var obsKey = 'nav_priv_wbx_operaz_sul_cap_wt';
	
			var imgPath = '/img/ret/';
			var sitoOrdinal = '3';
			var area = '1';
			var cgi_protocol = 'https://';
			var cgi_host = 'webanksvi8web.webank.local';
			var cgi_script = '/webankpri';
			var cgi_serverurl = 'https://webanksvi8web.webank.local';
			var tibco_code = '373c386d7674366480989279829c976d678b64a579a9707b9b484634486567693a493b3b624045766562663b6c';
			var sole_24h = 'null';
			var bpm_mailurl = 'http://domino5.weservice.new/';
			var bpm_mailurl_ssl = 'http://domino5.weservice.new/';
			var ftCode = 'B516W533P561E5';
			var cryp_adb = 'M19M19C9T26P22F';
			var green_number = '800 060 070';
			var international_number = '+39 02 43371293';
			var dataUltimaModifica = '16/03/2016';
			var dbgLvl = 2;
			var sitocarte = 'to be defined';
			var carteBanca = 'to be defined';
	
			var tasso = '0,00';
			var tassoMeExtraFido = '7,00';
			var tassoMeInf = '0,00';
			var tassoMeSup = '0,00';
			var tassoMeTraderExtraFido = '7,00';
			var tassoMeTraderInf = '0,25';
			var tassoMeTraderSup = '0,00';
			var tassoMyBusinessExtraFido = '7,00';
			var tassoMyBusinessInf = '0,00';
			var tassoMyBusinessSup = '0,00';
			
			var tasso_conv = tasso.replace(/\,/g, ".");
			var tan = 4.5 + parseFloat(tasso_conv);
			var utilizzo = (10 * tan) / 12;		
			var isc = tan * 1.0227;
	
			//nuovi valori formattati a 3 deciamli
			var tassoFidoMe_3d = '4,500';
			var deltaFidoMe_3d = '4,500';
			var taegFormat_3d = '4,922';
	
			var deltaFidoMe = '4,50';
			var dataModificaFido = '16/03/2016';
			var tassoFido = '4,50';
			var costoUtilizzoFidoMe = '16,88';
			var giorniUtilizzoFidoMe = '90';
			var tassoIscMe = '4,60';
			var deltaIsc = '1,02';
			var importoUtilizzo = '1.500,00';
			
			var costoAttivazione = '15';
	
			var costoSpedCorriere = '7,50' + ' &euro;';
			var costoSpedRaccomandata = '5,00' + ' &euro;';
			var msprefix = '/4tk21g96bx';
			
			var fine_mese_succes = '31/12/2017';
			
			var fine_2mesi_suc = '31/01/2018';
	
			var _waitHtml = '<div class=\"message\">&nbsp;&nbsp;<p>Richiesta in corso...</p>&nbsp;&nbsp;<img src=\"/img/ret/loading.gif\" /></div>';
			
			var isRidOnlySddGest = true;
			var dataTermineSDD = '1&deg; maggio 2014';
			var isDip = false;
			var isSocio = false;
			var homePage = 'nav_priv_wbx_trading_wt' ;

			function getRidOnlySddGest(){ return isRidOnlySddGest; }
			
			function getDataTermineSDD(){ return dataTermineSDD; }
	
			function getSito() { return sitoOrdinal; }
	
			function getArea() { return area; }
	
			function getTaeg_3d() { document.write(taegFormat_3d); }
	
			function getDeltaFidoMe_3d() { document.write(deltaFidoMe_3d); }
	
			function getTassoFidoMe_3d() { document.write(tassoFidoMe_3d); }
	
			function getTasso() { document.write(tasso); }
	
			function getTassoMeExtraFido() { document.write(tassoMeExtraFido); }
	
			function getTassoMeInf() { document.write(tassoMeInf); }
	
			function getTassoMeSup() { document.write(tassoMeSup); }
	
			function getTassoMeTraderExtraFido() { document.write(tassoMeTraderExtraFido); }
	
			function getTassoMeTraderInf() { document.write(tassoMeTraderInf); }
	
			function getTassoMeTraderSup() { document.write(tassoMeTraderSup); }
	
			function getTassoMyBusinessExtraFido() { document.write(tassoMyBusinessExtraFido); }
	
			function getTassoMyBusinessInf() { document.write(tassoMyBusinessInf); }
	
			function getTassoMyBusinessSup() { document.write(tassoMyBusinessSup); }
	
			function getOwnerBank() { document.write('Webank'); }
	
			function getShortBank() { document.write('Webank'); }
	
			function getExtendedBankName() { document.write('Webank'); }
	
			function getDataUltimaModifica() { document.write(dataUltimaModifica); }
	
			function getTassoTan() { document.write(Math.round(tan * 100) / 100); }
	
			function getTassoIsc() { document.write(Math.round(isc * 100) / 100); }
	
			function getUtilizzo() { document.write(Math.round(utilizzo * 100) / 100); }
	
			function getGreenNumber() { document.write(green_number); }
	
			function getInternationalNumber() { document.write(international_number); }
	
			function getSitoCarte() { document.write(sitocarte); }
	
			function getCarteBanca() { document.write(carteBanca); }
	
			function getUrlCarteBanca() {
				url = "<a href=http://" + sitocarte + " target='blank'>" + sitocarte + "</a>"; 
				document.write(url);
			}
	
			function getDeltaFidoMe() { document.write(deltaFidoMe); }
	
			function getDataModificaFido() { document.write(dataModificaFido); }
	
			function getTassoFido() { document.write(tassoFido); }
	
			function getCostoUtilizzoFidoMe() { document.write(costoUtilizzoFidoMe); }
	
			function getGiorniUtilizzoFidoMe(){ document.write(giorniUtilizzoFidoMe); }
	
			function getTassoIscMe() { document.write(tassoIscMe); }
	
			function getDeltaIsc() { document.write(deltaIsc); }
	
			function getImportoUtilizzo() { document.write(importoUtilizzo); }
	
			function getCostoSpedCorriere() { document.write(costoSpedCorriere); }
	
			function getCostoSpedRaccomandata() { document.write(costoSpedRaccomandata); }
	
			function getDateProxMonth() { document.write(fine_mese_succes); }
	
			function getDateProx2Months() { document.write(fine_2mesi_suc); }
			
			function getScontoEuropAss() {
				var sconto = 10;
				if ((isDip)||(isSocio)){
					sconto = 15;
				}
				document.write(sconto);
			}
			
			function getCostoAttivazione(){ document.write(costoAttivazione); }
			
		</script>

		<!-- START OF SmartSource Data Collector TAG v10.4.23 -->
		<!-- Copyright (c) 2016 Webtrends Inc.  All rights reserved. -->
		<script>
			window.webtrendsAsyncInit=function(){
				var dcs=new Webtrends.dcs().init({
					dcsid:"dcs2226sx2dkih124quzg2g0v_1b7g",
					domain:"statse.webtrendslive.com",
					timezone:1,
					i18n:true,
					offsite:true,
					download:true,
					downloadtypes:"xls,doc,pdf,txt,csv,zip,docx,xlsx,rar,gzip",
					anchor:true,
					javascript: true,
					onsitedoms:"webank.local",
					fpcdom:".webank.local",
					plugins:{
						hm:{src:"//s.webtrends.com/js/webtrends.hm.js"},
						facebook:{src:"//s.webtrends.com/js/webtrends.fb.js"},
						yt:{src:"//s.webtrends.com/js/webtrends.yt.js"}
					}
				}).track();
			};
			(function(){
				var s=document.createElement("script"); s.async=true; s.src="/common/fe/js/webtrends.js";
				var s2=document.getElementsByTagName("script")[0]; s2.parentNode.insertBefore(s,s2);
			}());
		</script>
		<script src="/common/fe/js/priv_calcolatore_aucap.js"></script>

<h2>Operazioni sul capitale</h2>
<div class="navContFirstLev outerTab">
		<div class="innerTab">
			<ul class="tabmedium">
				<li class="off" id="box5tab1"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_responsive_opa.php&liv1=trading&liv2=compravendita&liv3=inserimento_ordini&liv4=operazioni_sul_capitale" title="OPA">OPA</a></li>
				<li class="on" id="box5tab2"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_responsive_aumenti_capitale.php&liv1=trading&liv2=compravendita&liv3=inserimento_ordini&liv4=operazioni_sul_capitale">aumenti di capitale</a></li>
				<li class="off" id="box5tab3"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_responsive_opv.php&liv1=trading&liv2=compravendita&liv3=inserimento_ordini&liv4=operazioni_sul_capitale" title="OPS, OPV, OPVS">OPS, OPV, OPVS</a></li>
			</ul>
		</div>
		<div class="separator"></div>
</div>
<div class="panel-nofill">
	<section>
		<p>
			In questa pagina puoi aderire agli <strong class="txthelp closeable" data-toggle="tooltip" data-title="<strong>AUMENTO DI CAPITALE (Aucap)</strong>: Aumento del capitale sociale effettuato da una societ&agrave; mediante l'emissione di nuove azioni o un incremento del valore nominale di quelle già esistenti. L'aumento di capitale pu&ograve; essere <strong>gratuito</strong> (se gli azionisti ricevono gratuitamente nuove azioni) o a <strong>pagamento</strong> (se agli azionisti &egrave; richiesto il pagamento di un corrispettivo)">aumenti di capitale</strong> a pagamento.<br>
			Utilizza il <strong>calcolatore</strong> per <strong>simulare</strong> l'adesione all'aumento di capitale e verificare il costo di adesione.
		</p>
	</section>
	<div id="aucap_00005284030" class="aucap_wrap">
	<section>
		<div class="navfrontPage navcommPage outerTab">
			<div class="tab-content-group">
				<div class="innerTab single-tab">
					<ul class="newLabel">
						<li  class="on newTab"><a href="#tab1">AUCAP a pagamento - IL SOLE 24 ORE</a><span class="new"></span></li>
					</ul>
				</div>
				<div class="separator"></div>
				<div class="panel-fill innerContFirstLev">
					<div class="tab-content" id="tab1" style="display:block">
						<form class="formGenerico output noPaddingBottom" role="form" id="form02">
							<div class="form-group">
						<!-- UNICA RIGA CON CAMPO-->
								 <div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Descrizione</label>
										<span class="output">DIR AUC IL SOLE 24 O (cod. D IT0005284036 S)</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Mercato trattazione diritti</label>
										<span class="output">MTA</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
								 	<div class="col-sm-6">
										<label class="control-label-output">Rapporto sottoscrizione</label>
										<span class="output">1 azioni/4 diritti</span>
									</div>
									<div class="col-sm-6">
										<label class="control-label-output">Prezzo sottoscrizione</label>
										<span class="output">10 &euro;</span>
									</div>
								</div>
							</div>
							<div class="form-group">
							 	<div class="row">
							 	<div class="col-sm-6">
									<label class="control-label-output">Data Stacco diritti</label>
									<span class="output">02/10/17</span>
								</div>
								<div class="col-sm-6">
									<label class="control-label-output">Termine ultimo di adesione</label>
									<span class="output">27/12/17 17:30</span>
								</div>
								</div>
							</div>
							<div class="form-group">
							 	<div class="row">
							 	<div class="col-sm-6">
									<label class="control-label-output">Periodo trattazione diritti</label>
									<span class="output">dal 02/10/17 al 28/12/18</span>
								</div>
								<div class="col-sm-6">
									<label class="control-label-output">Data valuta</label>
									<span class="output">28/12/17</span>
								</div>
								</div>
							</div>
							<div class="collapse" id="collapserow1">
							<hr>
							<p><strong>IL SOLE 24 ORE N (cod. D IT0005283111 S)</strong></p>
								<div class="form-group">
										<div class="row">
										 	<div class="col-sm-6">
												<label class="control-label-output">Periodo trattazione diritti</label>
												<span class="output">dal 02/10/17 al 28/12/18</span>
											</div>
											<div class="col-sm-6">
												<label class="control-label-output">Data valuta</label>
												<span class="output">28/12/17</span>
											</div>
										</div>
								</div>
							</div>
						<a data-toggle="collapse" href="#collapserow1" aria-expanded="false" aria-controls="collapse" id="dettagli">Mostra dettagli</a>
						</form>

						
						<script>
							$(function(){
								$('#collapserow1').on('show.bs.collapse', function () {
									$("#dettagli").html('Nascondi dettagli');
								})
								$('#collapserow1').on('hide.bs.collapse', function () {
									$("#dettagli").html('Mostra dettagli');
								})
							})
							
						</script>
						<div class="form-group btnWrapper">
							<div class="btn-align-right">
								<a type="button" class="btn btn-primary" id="" href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_responsive_aumenti_capitale2.php&liv1=trading&liv2=compravendita&liv3=inserimento_ordini&liv4=operazioni_sul_capitale">aderisci</a>
							</div>
							<div class="btn-align-right">
								<a type="button" class="btn btn-primary" href="javascript:calcolatoriAucap[&#39;00005284030&#39;].openAucap(true)">calcolatore</a>
							</div>
							<br class="clear">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
<!--OVERLAYER SEPA -->
<div class="modal fade" id="layeralertAucap_00005284030" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Calcolatore AUCAP <span id="overlay_title_00005284030">IL SOLE 24 ORE</span></h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
       	        <p>Con il calcolatore puoi simulare l'adesione all'aumento di capitale e determinare il costo di adesione.<br>Puoi effettuare la simulazione inserendo i diritti da esercitare e/o i titoli rivenienti e cliccando su calcola.</p>
					<form autocomplete="off" class="formGenerico">
						<input id="aucap_paese_00005284030" type="hidden" value="">
						<input id="aucap_piazza_00005284030" type="hidden" value="">
						<input id="aucap_isin_00005284030" type="hidden" value="D IT0005284036 S">
						<input id="aucap_stock_code_00005284030" type="hidden" value="">
						<input id="aucap_simbolo_00005284030" type="hidden" value="">
						<input id="aucap_borsa_00005284030" type="hidden" value="">
						<input id="aucap_mercato_00005284030" type="hidden" value="">
						<input id="aucap_codiceDiritto_00005284030" type="hidden" value="00005284030">
						<input id="aucap_tab_00005284030" type="hidden" value="">
						<input id="depCV_00005284030" type="hidden" value="1099/1007661/0">
						<input id="aucap_tipDir_00005284030" type="hidden" value="azionario">
						
						<h4 id="aucap_title_00005284030">>DIR AUC IL SOLE 24 O D IT0005284036 S</h4>
						<div id="dataFromServer_00005284030" class="borderFormRounded">
							<div class="row">
							 	<div class="col-sm-4">
									<label class="control-label-output">Rapporto di sottoscrizione</label>
									<span class="output" id="aucap_rappSott_00005284030">5 azioni / 5 diritti</span>
								</div>
								<div class="col-sm-4">
									<label class="control-label-output">N° minimo di diritti da esercitare</label>
									<span class="output" id="aucap_minDir_00005284030">5 diritti</span>
								</div>
								<div class="col-sm-4">
									<label class="control-label-output">Prezzo di sottoscrizione</label>
									<span class="output" id="aucap_prezzoSott_00005284030">10,00 &euro;</span>
								</div>
							</div>
						</div>	
						<h4>Seleziona il deposito titoli e calcola il costo</h4>
						<div class="borderFormRounded">
							<div class="row">
								<div class="col-sm-6">
									<label class="control-label">Deposito titoli:</label>
									<input id="aucap_deposito_00005284030" type="hidden" value="010990000100766100000">
									<select class="form-control" name="select_00005284030" id="selectDep_00005284030" onchange="calcolatoriAucap[&#39;00005284030&#39;].auc_deposito.val(this.value); calcolatoriAucap[&#39;00005284030&#39;].getCalcolatoreValues(); initDeposito_00005284030();">
											<option value="010990000100766100000" selected="">1099/1007661/0</option>
											<option value="010990000100766100001" selected="">1099/1007661/1</option>
											<option value="010990000100766100002" selected="">1099/1007661/2</option>
									</select>
								</div>
								<div class="col-sm-6">
									<label class="control-label">Diritti posseduti:</label>
									<input id="aucap_deposito_00005284030" type="hidden" value="010990000100766100000">
									<span id="aucap_dirPoss_00005284030" class="output">1000000</span>
								</div>
							</div>
						</div>
						<div id="aucap_aggiornabile_00005284030">
							<!-- Diritto azionario -->
								<!-- Dati parte superiore -->
								<h4>Calcola il costo di adesione</h4>
								<div class="borderFormRounded">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-4">
													<label class="control-label">Diritti da esercitare</label>
													<div class="form-inline spinner plusMinConsole">
									       	 			<div class="input-group">
															<div class="input-group-addon"><a href="#1" class="no-underline btn-icon" onclick="calcolatoriAucap[&#39;00005284030&#39;].plusMin(&#39;diritti&#39;, &#39;minus&#39;);"><i class="icon icon-spinner_less"></i ></a></div>
															<input class="form-control" id="aucap_dirEserc_00005284030" maxlength="9" onkeyup="calcolatoriAucap[&#39;00005284030&#39;].checkCampoPlusMin(this); calcolatoriAucap[&#39;00005284030&#39;].aucapResetFields(this);" onclick="calcolatoriAucap[&#39;00005284030&#39;].aucapResetFields(this)" placeholder="inserisci un valore" style="" data-toggle="" data-title="">
									       	 				<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"  onclick="calcolatoriAucap[&#39;00005284030&#39;].plusMin(&#39;diritti&#39;, &#39;plus&#39;);"><i class="icon icon-spinner_more"></i ></a></div>
														</div>
		       	 									</div>
												</div>
												<div class="col-sm-4">
													<label class="control-label closeable txthelp" data-toggle="tooltip" data-title="Le azioni rivenienti sono le nuove azioni emesse da Banca Popolare di Milano che ti verranno caricate in portafoglio alla chiusura dell&#39;operazione di aumento di capitale">Titoli rivenienti</label>
													<div class="form-inline spinner plusMinConsole">
									       	 			<div class="input-group">
															<div class="input-group-addon"><a href="#1" class="no-underline btn-icon" onclick="calcolatoriAucap[&#39;00005284030&#39;].plusMin(&#39;titoli&#39;, &#39;minus&#39;);"><i class="icon icon-spinner_less"></i ></a></div>
															<input class="form-control" id="aucap_titRive_00005284030" maxlength="9" onkeyup="checkCampoPlusMin(this);aucapResetFields(this)" onclick="calcolatoriAucap[&#39;00005284030&#39;].aucapResetFields(this)" placeholder="inserisci un valore" style="">
									       	 				<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"   onclick="calcolatoriAucap[&#39;00005284030&#39;].plusMin(&#39;titoli&#39;, &#39;plus&#39;);"><i class="icon icon-spinner_more"></i></a></div>
														</div>
		       	 									</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group btnWrapper">
										                <div class="btn-align-left marginTopNano">
										                    <a class="btn btn-primary" href="javascript:;" id="calcolaButton_00005284030" onclick="calcolatoriAucap[&#39;00005284030&#39;].aucapCalcola()" title="Calcola aucap">calcola</a>
										                    <br class="clear">
										                </div>
								            		</div>
								            	</div>
											</div>
										</div>
										
							            <hr>
							            <div class="form-group">
							            	<div class="row">
							            		<div class="col-sm-4">
													<label class="control-label">Diritti da acquistare</label>
													<span class="output" id="aucap_dirAcq_00005284030">0</span>
												</div>
												<div class="col-sm-4" style="display:none">
													<label class="control-label">Diritti da vendere</label>
													<span class="output" id="aucap_dirVend_00005284030">999.995</span>
												</div>
												<div class="col-sm-4">
													<label class="control-label">Controvalore diritti*</label>
													<span class="output" id="aucap_controDir_00005284030">0 &euro;</span>
												</div>
												<div class="col-sm-4 no-label">
													<div class="fooform">
														    <a disabled class="btn btn-disabled" href="javascript:;" id="aucapAcquistaDis_00005284030" title="Il periodo di trattazione dei diritti è terminato" data-toogle="tooltip" style="display:none">acquista diritti</a>
																<div class="fooformrightb" id="aucapAcquista_00005284030">
																<div><a title="Acquista diritti" class="btn btn-primary" href="javascript:document.location.href=cgi_script +&#39;/wbOnetoone/2l/action/pktrading/insertOrderFinanceWT.action?method=ricDir&amp;OBSCNT=FNZ_NAV&amp;tabId=nav_priv_wbx_trading_wt&amp;OBSKEY=nav_priv_wbx_inseri_ordini_wt&amp;extcall=extcall&amp;titolo=&#39;+$(&#39;aucap_stock_code_00005284030&#39;).value  +&#39;&amp;mercato=&#39;+$(&#39;aucap_borsa_00005284030&#39;).value+&#39;|&#39;+$(&#39;aucap_mercato_00005284030&#39;).value +&#39;|XXX&#39; + &#39;&amp;sottodepositi=&#39; + $(&#39;aucap_deposito_00005284030&#39;).value"><span>acquista diritti</span></a></div>
																<br class="clear">
															</div>	
															<br class="clear">
														</div>
												</div>
							            	</div>
										</div>
										 <div class="form-group">
										 	<div class="row">
							            		<div class="col-sm-4">
													<label class="control-label">Controvalore AUCAP</label>
													<span class="output" id="aucap_controAucap_00005284030">50,00 &euro;</span>
												</div>
												<div class="col-sm-4">
												</div>
												<div class="col-sm-4 no-label">
													<a id="btnAderisciCalc_00005284030" style="display:block" title="aderisci all&#39;AUCAP" class="btn btn-primary" href="https://webanksvi8web.webank.local/webankpri/wbOnetoone/2l/do/FMP/ViewAucap.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_trading_wt&amp;OBSKEY=nav_priv_wbx_operaz_sul_cap_wt&amp;OBSKEY3=nav_priv_wbx_aumenti_di_capitale_wt&amp;codice=00005284030&amp;adesione=A"><span>aderisci all'AUCAP</span></a>
												</div>
											</div>
										 </div>
								</div>
						
							<p class="note">* al netto delle commissioni d'acquisto</p>
		<!-- / Notine -->
			</div>
</form>



































				</div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
function addCondizioni_00005284030(link, txt, newtxt, id) {
    links = $(id);
    if (!links.is(':visible')) {
        links.show();
        $('#' + link).html(newtxt);
    } else {
        links.hide();
        $('#' + link).html(txt);
    }
}

function changeButton_00005284030() {
    if ($('#presa_visione_00005284030').is(':checked')) {
        $('#attiva_00005284030').html('<div><a href=\"javascript:;\" onclick=\"inviaFlag_00005284030();\" class=\"btnformright\" title=\"prospetto informativo (pdf)\"><span>prospetto informativo (pdf)</span></a></div>');
    } else {
        $('#attiva_00005284030').html('<div class="bottdis"><img src="/img/ret/btndis_left.gif" alt=""><span title="Per scaricare il pdf &egrave; necessario  prendere visione del disclaimer">prospetto informativo (pdf)</span><img src="/img/ret/btndis_right.gif" alt=""></div>');
    }
}

function inviaFlag_00005284030() {
    var url = cgi_script + '/wbOnetoone/webank/ajax/json/getDisclaimerPdf.jsp',
        parameters = { tipologia: "AUCAP" },
        successFunc = function(data) {
            unobscurateAll(1);
            $('#layeralert1_00005284030').hide();
            open('$linkPdf5');
            void(0);
        },
        failureFunc = function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        };
    jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
}

</script>
<script type="text/javascript">
function initDeposito_00005284030 () {
	var aucapDeposito = $("#aucap_deposito_00005284030");
    if (3 > 1) {
        aucapDeposito.val($("#selectDep_00005284030").val());
    }
    if (aucapDeposito.val()) {
    	var aucapDepositoVal = aucapDeposito.val();
        var agenzia = new Number(aucapDepositoVal.substring(0, 5));
        var deposito = new Number(aucapDepositoVal.substring(5, 16));
        var sottoDep = new Number(aucapDepositoVal.substring(16, 21));
        depositoCompleto = agenzia + "/" + deposito + "/" + sottoDep;
        $("#depCV_00005284030").val(depositoCompleto);
    }
}
$(window).load(initDeposito_00005284030);
</script>
