<?php
			virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_050c.php");
//			$date = date_create();
//			echo date_timestamp_get($date);
			?>

<div class="tabber">
	<div class="tablistcellc">
		<a href="javascript:;" onclick="opentab(this)" class="active">I miei conti</a>
		<a href="javascript:;" onclick="opentab(this)">Le mie carte</a>
		<a href="javascript:;"  onclick="opentab(this)">Il mio portafoglio</a>
		<a href="javascript:;"  onclick="opentab(this)">I miei finanziamenti</a>
	</div>
	<div class="boxcontainer">
		<div class="riacontainer">
			<?php
			virtual("/librerie/include/commons/ria/ria_new.php");
			?>
		</div>
		<div id="conto2">
			<div id="idSezCarte0">
		<!-- OVERLAY EUROPA -->
			<div id="overGb" class="overdett gbdett" style="display:none;"> 
				<div class="top">
					<p>
						Bancomat internazionale Webank n. <span>**022</span><br>
						Profilo internazionale: <span>Europa</span>
					</p>
					<span class="cardstate"><img alt="" src="/wscmn/img/ico2inf_ok.gif" alt="Non attiva"/> Carta attiva</span>
					<a onclick="$('overGb').hide();" href="#1"><img class="chiudi" title="Chiudi" alt="Chiudi" src="/img/ret/btn_popup_chiudi.gif"/></a> 
				</div>
				<div class="dett">
					<span class="title">Ecco l'elenco dei Paesi dove puoi utilizzare il tuo bancomat:</span>
					<p>
						Albania, Andorra, Antartide, Armenia,<br>
						Austria, Azerbaijan, Bielorussia, Belgio,<br>
						Bosnia Erzegovina, Bulgaria, Cipro, Croazia,<br> 
						Danimarca, Estonia, Finlandia, Francia,<br>
						Georgia, Germania, Gibilterra, Gran Bretagna,<br>
						Grecia, Groenlandia, Guadalupe, Irlanda,<br>
						Islanda, Israele, Italia, Kazakistan, Kyrgyzstan,<br>
						Lettonia, Liechtenstein, Lituania, Lussemburgo,<br>
						Macedonia, Malta, Martinica, Moldavia,<br>
						Principato di Monaco, Olanda, Norvegia, Polonia,<br>
						Portogallo, Rep. Ceca, Romania, Russia,<br>
						San Marino, Serbia - Montenegro - Kosovo,<br>
						Slovacchia, Slovenia, Spagna, Svezia, Svizzera,<br>
						Stato della Città del Vaticano, Tajikistan,<br>
						Turchia, Turkmenistan, Ucraina, Ungheria.
					</p>
					<p>	
						Se devi recarti in un paese diverso da quelli elencati, <a href="#">modifica il tuo profilo</a>.
					</p>
				</div>
			</div>
			<!-- FINE OVERLAY EUROPA -->
	
			
		<table class="tab50 tab50b" width="645" cellpadding="0" cellspacing="0">
		<tr>
			<th class="tit sx" colspan="8" width="645">BANCOMAT</th>
		</tr>
		<tr class="br">
			<th class="sx first" width="81">Carta</th>
			<th class="sx" width="30">Stato</th>
			<th class="sx" width="44">Numero</th>
			<th class="sx" width="158">Conto corrente</th>
			<th class="sx" width="111">Maxi prelievo</th>
			<th class="sx" width="111">Utilizzo all'estero</th>
			<th class="center" width="56">Massimali</th>
			<th class="center last" width="40">Movim. su c/c</th>
		</tr>
		<!-- ES. RIGA EVIDENTE -->
		<tr class="evident">
			<td class="feature" colspan = "8">
				<a href="#">Lorem ipsum dolor sit amet consectetur >></a>
			</td>
		</tr>
		</tr>
		<!-- FINE ES. RIGA EVIDENTE -->
		
		<tr class="b">
			<td class="sx first" width="70">Bancomat Internazionale Webank</td>
			<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivalo"></td>
			<td class="sx">***00XX</td>
			<td class="sx nowr">00599-00000XXXXX-EUR</td>
			<td class="sx"><span class="noTooltip"><img title="Attivalo" alt="Attivalo" src="/wscmn/img/ico2inf_attivalo.gif"/></span>
			<span class="imgTooltip"><a href="">Attivalo</a></span></td>
			<td class="dx"><a href="javascript:;" title="Mondo" onclick="showDettTable(this,'overDett','idSezCarte0')"><img title="Mondo" alt="Mondo" src="/img/ret/ico1gr_modifica.gif"/>Mondo</a></td>
			<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
			<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>				
		</tr>
		
		<tr class="b">
			<td class="sx first" width="70">Bancomat Internazionale Webank</td>
			<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
			<td class="sx">***00XX</td>
			<td class="sx  nowr">00599-00000XXXXX-EUR</td>
			<td class="sx"><span id="liquiditaDep2" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
					<span class="uniqTooltipPos"><img title="Attiva" alt="Attiva" src="/wscmn/img/ico2inf_corso.gif"/></span>
					<span class="uniqTooltipInnerHTML">lorem ipsum</span>
				</span>
			<span class="imgTooltip">Attivazione<br />in corso</span></td>
			<td class="dx"><a href="javascript:;" onclick="showDettTable(this,'overGb','idSezCarte0')" title="Europa"><img title="Lorem" alt="Lorem" src="/img/ret/ico1gr_modifica.gif"/>Europa</a></td>
			<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
			<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
		</tr>
		<tr class="b">
			<td class="sx first" width="70">Bancomat Internazionale Webank</td>
			<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
			<td class="sx">***00XX</td>
			<td class="sx nowr">00599-00000XXXXX-EUR</td>
			<td class="sx"><span id="liquiditaDep2" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
					<span class="uniqTooltipPos"><img title="In corso" alt="In corso" src="/wscmn/img/ico2inf_ok.gif"/></span>
					<span class="uniqTooltipInnerHTML">lorem ipsum</span>
				</span>
			<span class="imgTooltip">Attivo</span></td>
			<td class="dx"><a href="javascript:;" onclick="showDettTable(this,'overGb','idSezCarte0')" title="Europa"><img title="Lorem" alt="Lorem" src="/img/ret/ico1gr_modifica.gif"/>Europa</a></td>
			<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
			<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
		</tr>
		<tr class="b">
			<td class="sx first" width="70">Bancomat Internazionale Webank</td>
			<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
			<td class="sx">***00XX</td>
			<td class="sx nowr">00599-00000XXXXX-EUR</td>
			<td class="sx"><span class="noTooltip"><img title="Gi&agrave; utilizzato" alt="Gi&agrave; utilizzato" src="/wscmn/img/ico2inf_utilizzo.gif"/></span>
			<span class="imgTooltip">Gi&agrave;<br />utilizzato</span></td>
			<td class="dx"><a href="#" title="Non disponibile"><img title="Modifica in corso" alt="Modifica in corso" src="/img/ret/ico2inf_nondisp.gif"/>Modifica in corso</a></td>
			<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
			<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
		</tr>
		<tr class="b">
			<td class="sx first" width="70">Bancomat Internazionale Webank</td>
			<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
			<td class="sx">***00XX</td>
			<td class="sx nowr">00599-00000XXXXX-EUR</td>
			<td class="sx"><span class="noTooltip"><img title="Attivalo" alt="Attivalo" src="/wscmn/img/ico2inf_attivalo.gif"/></span>
			<span class="imgTooltip"><a href="">Attivalo</a></span></td>
			<td class="dx"><a href="javascript:;" onclick="showDettTable(this,'overGb','idSezCarte0')" title="Europa"><img title="Lorem" alt="Lorem" src="/img/ret/ico1gr_modifica.gif"/>Europa</a></td>
			<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
			<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
		</tr>
		<tr class="b">
		
			<td class="sx first lastrow" width="70">Bancomat Internazionale Webank (geoblock dis)</td>
			<td class="center lastrow"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
			<td class="sx lastrow">***00XX</td>
			<td class="sx lastrow nowr">00599-00000XXXXX-EUR</td>
			<td class="sx lastrow"><span class="noTooltip"><img title="Attivalo" alt="Attivalo" src="/wscmn/img/ico2inf_attivalo.gif"/></span>
			<span class="imgTooltip"><a href="">Attivalo</a></span></td>
			<td class="dx lastrow"><a href="javascript:;" title="Mondo" onclick="showDettTable(this,'overDett','idSezCarte0')"><img title="Lorem" alt="Lorem" src="/wscmn/img/ico1gr_modifica.gif"/>Mondo</a>
			<!-- OVERLAY MONDO -->
			<div id="overDett" class="overdett" style="display:none;"> 
				<div class="cardstatus">
					<p>Bancomat internazionale n° <b>123456</b></p>
					<span class="cardstate"><img alt="" src="/wscmn/img/ico2inf_ok.gif" alt="Non attiva" />  Carta attiva</span>
				</div>
				<a onclick="$('overDett').hide();" href="#1"><img class="chiudi" title="Chiudi" alt="Chiudi" src="/img/ret/btn_popup_chiudi.gif"/></a> 
				<h3>Profilo mondo</h3>
				<p>Con questo profilo puoi utilizzare il tuo bancomat <strong>ovunque</strong>.<p>
				<table class="form01 out">
					<tr>
						<td class="uno" width="105">Data attivazione</td>
						<td><strong>gg/mm/aaaa</strong></td>
						<td class="uno" width="105">Data scadenza</td>
						<td><strong>gg/mm/aaaa</strong></td>
					</tr>
				</table>
				<p><strong>RICORDA</strong>: in alcuni paesi gli standar di sicurezza sono <strong>meno restrittivi</strong> che in altri. Ti consigliamo di <strong>mantenere il profilo Europa</strong> a meno che non prevedi di recarti in un paese non incluso in tale profilo.</p>
				<div class="fooformright">
					<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
				<br class="clear">
				</div>
				
			</div>
		<!-- FINE OVERLAY MONDO -->
			
			
			</td>
			<td class="center lastrow"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
			<td class="center last lastrow"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
		</tr>
		</table>
	</div>
		</div>
		<div id="conto3">
				<?php if ($bank == "bpm") {?>
				<!-- contenuto bpm Conto Profamily-->
				<div id="selezb">
					<table cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td>Conto corrente</td>
							<td><select name="select"><option>CC 00599 - 0000004215</option><option>CC 00599 - 0000004216 </option></select>
							<a class="preferito" title="Lorem ipsum" href="#"><img alt="Lorem ipsum" src="/img/ico1gr_preferito.gif"></a>
							</td>
						</tr>
					</table>
				</div>
				<table cellspacing="0" cellpadding="0" class="tab17 tab17nob tab17bottomspaced">
					<tr> 
						<th style="width: 410px;">Finanziamento</th>
						<th class="nopad" style="width: 158px;">Data attivazione</th>            
						<th style="width: 100px;">Importo EUR</th>
						<th style="width: 38px;">Ammort.</th>
						<th class="ultimo" style="width: 38px;">Dett.</th>
					</tr>
					<tr class="b bb"> 
						<td class="sx">12345-1234567890123 - EUR / PRESTITI PERSONALI</td>
						<td>00/00/0000</td>
						<td class="dx"><b>10.000,00</b></td>              
						<td><a href="javascript:;" class="iconaDettaglio" title="piano di ammortamento" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_profamily_popup.php&amp;flg=WT&amp;sid=priv');"><img alt="Piano di ammortamento" src="/img/ret/ico1gr_documento.gif"></a></td>
						<td class="ultimo"><a title="Dettagli finanziamento" href="#1"><img alt="Dettagli finanziamento" src="/img/ret/ico1gr_dettaglio.gif"></a></td>
					</tr>
					<tr class="c bb"> 
						<td class="sx">12345-1234567890123 - EUR / PRESTITI PERSONALI</td>
						<td>00/00/0000</td>
						<td class="dx"><b>10.000,00</b></td>              
						<td><a title="Piano di ammortamento" href="#1"><img alt="Piano di ammortamento" src="/img/ret/ico1gr_documento.gif"></a></td>
						<td class="ultimo"><a title="Dettagli finanziamento" href="#1"><img alt="Dettagli finanziamento" src="/img/ret/ico1gr_dettaglio.gif"></a></td>
					</tr>
				
				</table>
				<?php 
				}
				else
				{
				?>
				
				<!-- PORTAFOGLIO -->
				
				<div class="tabContainertab2liv">
					<div class="tabOn2liv">
						<div class="tab2livLeft"></div>
						<div onclick="javascript: if (document.getElementById('contenttab1').style.display == 'none'){document.getElementById('contenttab1').style.display = 'block'; document.getElementById('contenttab2').style.display = 'none'; document.getElementById('tab1livCont').parentNode.className = 'tabOn2liv'; document.getElementById('tab2livCont').parentNode.className = 'tabOff2liv';  }" id="tab1livCont" class="tab2livCont">Portafoglio trading</div>	
						<div class="tab2livRight"></div>
					</div>
					<div class="tabOff2liv">
						<div class="tab2livLeft"></div>
						<div onclick="javascript: if (document.getElementById('contenttab2').style.display == 'none'){document.getElementById('contenttab2').style.display = 'block'; document.getElementById('contenttab1').style.display = 'none'; document.getElementById('tab2livCont').parentNode.className = 'tabOn2liv'; document.getElementById('tab1livCont').parentNode.className = 'tabOff2liv';  }" id="tab2livCont" class="tab2livCont">Portafoglio investimenti</div>	
						<div class="tab2livRight"></div>
					</div>
					<div class="clear"></div>			
				</div>
				<div class="line"> </div>
				
				<!-- TAB1 -->
				<div id="contenttab1" class="contenttabOn">
					
					<script type="text/javascript">
					/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
					addEvent(window, 'load', function() {
						createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
						createSelectRapp('sceltaSottoRapporto', 'sceltaSottoRapportoVal', sceltaSottoRapportoFunc);
					});

					function sceltaRapportoFunc (option) {
						// Testo selezione: option.text
						// Valore selezione: option.value
						// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
					}

					function sceltaSottoRapportoFunc (option) {
						// Testo selezione: option.text
						// Valore selezione: option.value
						// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
					}
					/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
					</script>

					<table class="form01 nopadd">
					<tr>

						<td class="depwt">Deposito titoli</td>
						<td class="rappWt">
							<div id="sceltaRapporto" class="selectRapp">
								<input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
								<a href="javascript:;" class="inputOption inputSx">
									<span class="inputDx">
										<span class="input">
											xxx/aaaaaa
										</span>

									</span>
								</a>
								<div class="selectorSpacer" style="display: none;"></div>
								<div class="selector" style="display: none;">
									<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
										<strong>xxx/aaaaaa</strong><br/>
										Nome Nome Cognome Cognome1</a>
									<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">

										<strong>xxx/bbbbbb</strong><br/>
										Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
									<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc</strong><br/>
										Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
										Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
										Nome Nome Cognome Cognome5</a>
								</div>
							</div>

							<div class="depRightBlock">
								<div class="importoDeposito">
									<span id="liquiditaDep" class="uniqTooltipText" onmouseout="removeUniqTooltip(event,this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
										<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>
										<span class="uniqTooltipInnerHTML">
											31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />

											01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
											02/01/2010: <strong>x,xx &euro;</strong>
										</span>
									</span>
								</div>
								<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&amp;flg=WT&amp;sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
							</div>

							<div class="totLiquidita">Totale liquidit&agrave;</div>
						</td>
					</tr>
					</table>

					<table cellspacing="0" cellpadding="0" width="" class="tab17 tab17nob tab17nobot">
						<tr> 
							<th>Tipologia</th>
							<th class="uno nocap">Controvalore EUR<br>attuale</th>
							<th class="uno nocap">Controvalore EUR<br>investito</th>            
							<th>Var assol.</th>
							<th>Var %</th>
							<th class="ultimo">Dett.</th>
						</tr>
						<tr class="b bb"> 
							<td class="sx nocap">Azioni Italia</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Azioni Italia"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Azioni Italia"></a></td>
						</tr>
						<tr class="c bb"> 
							<td class="sx nocap">Azioni Estero</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx r">-xx,xx</td> 
							<td class="dx r">-xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Azioni Estero"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Azioni Estero"></a></td>
						</tr>
						<tr class="b bb"> 
							<td class="sx nocap">Obbligazioni</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Obbligazioni"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Obbligazioni"></a></td>
						</tr>
						<tr class="c bb"> 
							<td class="sx nocap">Derivati</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx r">-xx,xx</td> 
							<td class="dx r">-xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Derivati"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Derivati"></a></td>
						</tr>
						<tr class="b bb"> 
							<td class="sx nocap">Coverred Warrant/Certificates</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Coverred Warrant/Certificates"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Coverred Warrant/Certificates"></a></td>
						</tr>
						<tr class="c bb"> 
							<td class="sx nocap">ETF</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli ETF"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli ETF"></a></td>
						</tr>
						<tr class="b bb"> 
							<td class="sx nocap">Marginazione</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Marginazione"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Marginazione"></a></td>
						</tr>
						<tr class="b"> 
							<td class="sx lastrow lastrowdb"><b>TOTALE</b></td>
							<td class="lastrow lastrownobot"><b>xxx,xx</b></td>
							<td class="dx lastrow lastrowdb"><b>xxx,xx</b></td> 
							<td class="dx vb lastrow lastrowdb">xx,xx</td> 
							<td class="dx vb lastrow lastrowdb">xx,xx</td> 
							<td class="dx ultimo lastrow lastrowdb">&nbsp;</td>
						</tr>
					</table>
					
					<div id="graficoControvalore">
						<div id="flashcontainerwt"><embed width="206" height="156" flashvars="dataURL=/swf/chart/graficoWetrade.xml&amp;chartWidth=206&amp;chartHeight=156" wmode="transparent" quality="high" bgcolor="#FFFFFF" name="home_test" id="home_test" style="undefined" src="/swf/chart/MultiLevelPie.swf" type="application/x-shockwave-flash"></div>
						<div id="legendaControvalore">
							<div class="ie6DoubleMarginFix" id="titoloControvalore">Grafico relativo al controvalore EUR attuale / alla scadenza</div>
							<div class="labelControvalore ie6DoubleMarginFix" id="label1Controvalore">Legenda:</div>
							<div class="labelControvalore" id="label2Controvalore">
								<span class="boxControvalore" id="box1Controvalore">Azioni Italia</span>
							</div>
							<div class="labelControvalore" id="label3Controvalore">
								<span class="boxControvalore" id="box2Controvalore">Azioni Estere</span>
							</div>
							<div class="labelControvalore" id="label4Controvalore">
								<span class="boxControvalore" id="box1Controvalore">Obbligazioni</span>
							</div>
							<div class="labelControvalore" id="label5Controvalore">
								<span class="boxControvalore" id="box1Controvalore">Derivati</span>
							</div>
							<div class="labelControvalore" id="label6Controvalore">
								<span class="boxControvalore" id="box2Controvalore">Coverred warrant/Certificates</span>
							</div>
							<div class="labelControvalore" id="label7Controvalore">
								<span class="boxControvalore" id="box1Controvalore">ETF</span>
							</div>
							<div class="labelControvalore" id="label8Controvalore">
								<span class="boxControvalore" id="box1Controvalore">Marginazione</span>
							</div>
							
						
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="fooform">
						<div class="fooformright">
							<div><a href="#1" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>portafoglio</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
						<br class="clear">
						</div>	
						<br class="clear">
					</div>
					
				</div>
				<!-- FINE TAB1 -->
				
				<div style="display:none" id="contenttab2" class="contenttabOn">
					<script type="text/javascript">
					/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
					addEvent(window, 'load', function() {
						createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
						createSelectRapp('sceltaSottoRapporto', 'sceltaSottoRapportoVal', sceltaSottoRapportoFunc);
					});

					function sceltaRapportoFunc (option) {
						// Testo selezione: option.text
						// Valore selezione: option.value
						// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
					}

					function sceltaSottoRapportoFunc (option) {
						// Testo selezione: option.text
						// Valore selezione: option.value
						// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
					}
					/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
					</script>

					<table class="form01 nopadd">
						<tbody>
							<tr>

								<td class="depwt">Deposito titoli</td>
								<td class="rappWt">
									<div id="sceltaRapporto" class="selectRapp">
										<input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
										<a href="javascript:;" class="inputOption inputSx">
											<span class="inputDx">
												<span class="input">
													xxx/aaaaaa
												</span>

											</span>
										</a>
										<div class="selectorSpacer" style="display: none;"></div>
										<div class="selector" style="display: none;">
											<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
												<strong>xxx/aaaaaa</strong><br/>
												Nome Nome Cognome Cognome1</a>
											<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">

												<strong>xxx/bbbbbb</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
											<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
												Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
												Nome Nome Cognome Cognome5</a>
										</div>
									</div>

									<div class="depRightBlock">
										<div class="importoDeposito">
											<span id="liquiditaDep" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
												<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>
												<span class="uniqTooltipInnerHTML">
													31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />

													01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
													02/01/2010: <strong>x,xx &euro;</strong>
												</span>
											</span>
										</div>
										<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&amp;flg=WT&amp;sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
									</div>

									<div class="totLiquidita">Totale liquidit&agrave;</div>
								</td>
							</tr>
							<tr>
								<td class="depwt">Deposito titoli</td>
								<td class="rappWt">
									<div id="sceltaSottoRapporto" class="selectRapp">
										<input id="sceltaSottoRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>

										<a href="javascript:;" class="inputOption inputSx">
											<span class="inputDx">
												<span class="input">
													xxx/aaaaaa
												</span>
											</span>
										</a>
										<div class="selectorSpacer" style="display: none;"></div>
										<div class="selector" style="display: none;">

											<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions between first selected">
												<strong>xxx/aaaaaa</strong><br/>
												Nome Nome Cognome Cognome1</a>
											<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
												<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
											<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">

												<strong>xxx/bbbbbb/0</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
											<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
												<strong>xxx/bbbbbb/1</strong><br/>
												Nome Nome Cognome Cognome1</a>
											<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions between">
												<strong>xxx/bbbbbb/2</strong><br/>

												Nome Nome Cognome Cognome2</a>
											<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
												Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
												Nome Nome Cognome Cognome5</a>
											<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/0</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
												Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
												Nome Nome Cognome Cognome5</a>

											<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/1</strong><br/>
												Nome Nome Cognome Cognome1</a>
											<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/2</strong><br/>
												Nome Nome Cognome Cognome2</a>
											<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">

												<strong>xxx/cccccc/3</strong><br/>
												Nome Nome Cognome Cognome3</a>
											<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/4</strong><br/>
												Nome Nome Cognome Cognome4</a>
											<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/5</strong><br/>

												Nome Nome Cognome Cognome5</a>
										</div>
									</div>
									<div class="depRightBlock">
										<div class="importoDeposito">
											<span id="liquiditaSottoDep" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
												<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>

												<span class="uniqTooltipInnerHTML">
													31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />
													01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
													02/01/2010: <strong>x,xx &euro;</strong>
												</span>
											</span>

										</div>
										<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&amp;flg=WT&amp;sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
									</div>
									<div class="totLiquidita">Totale liquidit&agrave;</div>
								</td>
							</tr>
						</tbody>
					</table><table cellspacing="0" cellpadding="0" width="" class="tab17 tab17nob tab17nobot">
					<tr> 
						<th>Tipologia</th>

						<th class="uno">Controvalore<br/>attuale/alla scadenza</th>
						<th>Controvalore<br/>investito</th>            
						<th class="nocap">Var assol.</th>
						<th class="nocap">Var %</th>
						<th class="ultimo">Dett.</th>
					</tr>

					<tr class="b bb"> 
						<td class="sx">Fondi e Sicav</td>
						<td class="dx">xxx,xx</td>
						<td class="dx">xxx,xx</td> 
						<td class="dx v">xx,xx</td> 
						<td class="dx v">xx,xx</td>
						<td  class="ultimo"><a title="Dettagli Fondi e Sicav" href="#1"><img alt="Dettagli Fondi e Sicav" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
					</tr>
					<tr class="c bb"> 
						<td class="sx nocap">PCT<br/><span class="note"><span class="grigio">(per i PCT il controvalore è calcolato alla scadenza)</span></span></td>

						<td class="dx">xxx,xx</td>
						<td class="dx">xxx,xx</td> 
						<td class="dx v">xx,xx</td> 
						<td class="dx v">xx,xx</td>
						<td  class="ultimo"><a title="Dettagli PCT" href="#1"><img alt="Dettagli PCT" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
					</tr>
					<tr class="b"> 
						<td class="sx lastrow lastrowdb"><b>TOTALE</b></td>
						<td class="lastrow lastrownobot"><b>xxx,xx</b></td>

						<td class="dx lastrow lastrowdb"><b>xxx,xx</b></td> 
						<td class="dx vb lastrow lastrowdb">xx,xx</td> 
						<td class="dx vb lastrow lastrowdb">xx,xx</td> 
						<td class="dx ultimo lastrow lastrowdb">&nbsp;</td>
					</tr>
					</table>

					<div id="graficoControvalore">
						<div id="flashcontainerwt"><embed width="206" height="156" flashvars="dataURL=/swf/chart/graficoWetrade.xml&amp;chartWidth=206&amp;chartHeight=156" wmode="transparent" quality="high" bgcolor="#FFFFFF" name="home_test" id="home_test" style="undefined" src="/swf/chart/MultiLevelPie.swf" type="application/x-shockwave-flash"></div>
						<div id="legendaControvalore">
							<div id="titoloControvalore" class="ie6DoubleMarginFix">Grafico relativo al controvalore EUR attuale / alla scadenza</div>
							<div id="label1Controvalore" class="labelControvalore ie6DoubleMarginFix">Legenda:</div>
							<div id="label2Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">Azioni Italia</span>
							</div>
							<div id="label3Controvalore" class="labelControvalore">
								<span id="box2Controvalore" class="boxControvalore">Azioni Estere</span>
							</div>
							<div id="label4Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">Obbligazioni</span>
							</div>
							<div id="label5Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">Derivati</span>
							</div>
							<div id="label6Controvalore" class="labelControvalore">
								<span id="box2Controvalore" class="boxControvalore">Coverred warrant/Certificates</span>
							</div>
							<div id="label7Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">ETF</span>
							</div>
							<div id="label8Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">Marginazione</span>
							</div>
							
						
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="fooform">
						<div class="fooformright">
							<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>portafoglio operativo</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
						<br class="clear">
						</div>	

					<br class="clear">
					</div>
					<br class="clear" /><br/>
				</div>
				
				<!-- FINE PORTAFOGLIO -->
				<?php
				}
				?>
				<br class="clear">
			</div>
			
			<div id="conto4">
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
		
		</div>	
	<br class="clear">
</div>
<script type="text/javascript">
	var srvTs = '<?php print time() * 1000; ?>';
</script>

<script type="text/javascript" src="/js/ext_banner_myhome.js" ></script>


