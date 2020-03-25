				<h1 id="id_label">Saldo</h1>
				<div class="fooform fooform_tit" id="id_aggiorna" style="display:none;"></div>
					<br class="clear">






































<!-- === it.weservice.WsAccountsListWB:WsAccountsListWB === { -->
<p>Sono visualizzati <strong>saldo contabile</strong> e <strong>saldo disponibile</strong> alla data odierna.
<br><br>
Il saldo <strong>disponibile</strong> tiene conto delle operazioni (addebiti  e accrediti) già effettuate, ma non ancora contabilizzate. Rappresenta dunque l’effettiva <strong>disponibilità di liquidità</strong>.
</p>







	<table cellspacing="0" cellpadding="0" border="0" class="dettRendiTable">
		
			
		<tbody><tr class="heading">
			<td class="first"><p>Conto : <strong>
					




<!-- === org.apache.jsp.banking.accountsListSelect_jsp === { -->
<strong>CC 01099 0000081500 EUR</strong><input name="selectedAccountId" type="hidden" value="01099 - 0000081500 - EUR">
<!-- } === org.apache.jsp.banking.accountsListSelect_jsp === -->

	
				   </strong><br>
				intestato a: <strong>ROBERTO FONSO</strong></p>
			</td>
		</tr>
				
	
		<tr>
			<td class="filpieno">
				<table cellspacing="0" cellpadding="0" border="0" class="rowsRendiTable">
					<tbody><tr>
						<td class="" colspan="2" width="150">
							<strong>Conto Corrente</strong>
						</td>
						<td class="vuoto">&nbsp;</td>
						<td class="vuoto">&nbsp;</td>
						<td width="150"><strong>Saldo contabile</strong></td>
						<td class="posi right" width="150"><strong>1.672,45 €</strong></td>
						<td class="filpunto" rowspan="2" width="20">		
					</td></tr>
					
					

							
					<tr>
						<td class="filpunto" colspan="2">
							01099 0000081500 EUR
							
						</td>
						<td class="vuoto">&nbsp;</td>
				
						<td class="lampatd">
							<span onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this)" onmouseout="removeUniqTooltip(event, this);" class="uniqTooltipText" id="liquiditaDep">
								<span class="uniqTooltipPos"><img src="/wscmn/img/ret/lampa_grigio.gif"></span>
								<span class="uniqTooltipInnerHTML">
Per “movimenti non contabilizzati” si intendono le operazioni in accredito (<strong>preavvisi</strong>) o in addebito (<strong>impegni</strong>) già effettuate sul conto, ma non ancora registrate.<br>
<strong>ESEMPIO</strong>: se fai oggi un pagamento di 50 € col bancomat, questa somma viene già scalata dal saldo disponibile.<br>
Una volta contabilizzata (solitamente entro pochi giorni) la somma sarà detratta anche dal saldo contabile.
								</span>
							</span>
						</td>						
						<td class="filpunto">Movimenti non contabilizzati</td>
						<td class="filpunto posi right"><strong>
					 		0,00 €</strong>
					 	</td>
						<td class="filpunto">&nbsp;</td>
						 	
					</tr>
					<tr>
						<td class="">
						
							<ul class="listafrec">
							<li>				
								
						 				&nbsp; <a target="_top" href="/webankpri/wbOnetoone/2l/do/wbOnetoone/sms/alertAttivi.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_myhome&amp;OBSKEY=nav_priv_wbx_sms_elenco_alert&amp;OBSKEY3=nav_priv_wbx_sms_elenco_alert">alert attivi</a>
								
							</li>
							</ul>
													
						</td>
						<td class="">
							<ul class="listafrec">
							<li>
								&nbsp;<a href="/webankpri/wbOnetoone/2l/do/banking/WsRiaMovements.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_movimenti&amp;OBSKEY3=nav_priv_wbx_movimenti&amp;movementSearchNavType=Ultimi10&amp;accountId=01099 - 0000081500 - EUR">ultimi movimenti</a>
							</li>
							</ul>
						</td>		
						<td class="vuoto">&nbsp;</td>
						<td class="vuoto">&nbsp;</td>
						
						<td><strong>Saldo disponibile<br> al 05/08/2016</strong></td>								
						<td class="posi right"><strong>1.672,45 €</strong></td>
						<td>
							<a href="WsAvailableBalanceMultiAction.do?CC=01099 - 0000081500 - EUR&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_saldo&amp;OBSKEY3=&amp;OBSCNT=&amp;cf=0.8627435471823538&amp;BV_UseBVCookie=Yes"><img title="Dettaglio saldo" alt="Dettaglio saldo" src="/img/ret/ico1gr_dettaglio.gif"></a>
						</td>
										
					</tr>		

				</tbody></table>	
			</td>	
		</tr>
			
		
		
	



	


	</tbody></table>
	


		<p>(*) Il saldo contabile e il saldo disponibile non tengono conto delle operazioni odierne in titoli.</p>




	<p class="bottdx"><a href="/webankpri/wbOnetoone/2l/do/banking/WsCoordinate.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_coordin_bancarie&amp;OBSKEY3=nav_priv_wbx_coordin_bancarie" target="_top"><img src="/img/ret/ban_stampacoord.jpg" alt="Stampa le tue condizioni bancarie in formato tascabile" border="0" align="right"></a></p>


<br>




<!-- CODICE BANNER CON LANCIO VIDEO -->
<!-- Overlay con Video -->
<div class="layeralert2" id="videoLay" style="display: none">
	<div class="head" ><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closePopOverLayer('videoLay'); "/></div>
	<div id="bodyPopUp" class="body">
		<div class="important">
			<!-- Corpo overlay -->
			<div id="videoApp" style="margin:0 0 0 20px">
				<embed src="https://media.webank.it/vod/video_saldo_sc.mov" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed>
			</div>
			<script defer="defer" type="text/javascript"> 
				var flashobject = new SWFObject("/swf/videoplayer.swf", "flash", "382", "241", "9", "#000000"); 
				flashobject.addParam("quality", "high"); 
				flashobject.addParam("wmode", "opaque"); 
				flashobject.addParam("allowfullscreen","false"); 
				flashobject.addParam("allowscriptaccess", "always"); 
				flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/video_saldo_sc.flv"); 
				flashobject.write("videoApp");
			</script> 
			<!-- Fine corpo overlay -->
			</div>
		</div>
	<div class="foot"></div>
</div>
<!-- Fine overlay con video -->
<a class="bottombanner" onclick="openPopOverLayer('#videoLay')" href="javascript:;"><img src="/img/ret/BPM_app_700x100.jpg" /></a>
<!-- FINE CODICE BANNER CON LANCIO VIDEO -->