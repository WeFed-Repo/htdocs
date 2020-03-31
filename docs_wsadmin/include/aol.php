
				<h3>Censimento Anagrafico</h3>
				<!-- NAVIGATORE TAB -->
				<div id="navtab">
					<a href="/wetools/admin/2l/do/admin/WsCensimentoNdgToDoAction.do?tabId=WeT_Pri_AOL&amp;obsKey=WeT_Pri_Aol_Cens&amp;obsKey3=WeT_Pri_AOL_Cens_Todo" class="selected">to do list</a>
					<a href="/wetools/admin/2l/do/admin/WsCensimentoNdgAction.do?tabId=WeT_Pri_AOL&amp;obsKey=WeT_Pri_Aol_Cens&amp;obsKey3=WeT_Pri_AOL_Cens_Ric">ricerca pratiche </a>
					<span class="limiter"></span>
				</div>
				<!-- FINE NAVIGATORE TAB -->
				<script src="/wscmn/js/ret/setiframe.js" type="text/javascript"></script>
				<script>
					var larghezza = 980;
					var frames = new Array();
					var principale = new Object();
					frames[0] = top;
					frames[1] = top;

					function getPrincipale() {
						return principale;
					}

					function setPrincipale(p) {
						principale = p;
						principale.document = p;
						frames[2] = principale;
					}
				</script>
				<p>


























































	

<script type="text/javascript">
	function invia() {  
		document.msgCensimento.submit();	  
	}
	
	function inviaPraticaAgenzia() {  
		document.inviaCensimento.submit();	  
	}
	
	function chiudiPratica() {  
		document.chiudiPratica.submit();	  
	}
</script>



	<!-- bottoniera top -->
	</p><table class="inputtable bonificict" cellpadding="0" cellspacing="0" id="bottonieraTop">	
		<tbody><tr>
			<td class="label inputtablert">
				<div class="multiLeft">
					<div class="multibuttonpanel">
						<a class="button" href="/wetools/admin/2l/do/admin/WsCensimentoNdgToDoAction.do?tabId=WeT_Pri_AOL&amp;obsKey=WeT_Pri_Aol_Cens&amp;obsKey3=WeT_Pri_AOL_Cens_Todo&amp;OBSCNT=&amp;cf=0.205277275811111"> TORNA ALLA RICERCA </a>
					</div>
				</div>
			</td>
		</tr>
	</tbody></table>
	<br>
	
	<form id="inviaCensimento" name="inviaCensimento" action="WsCensimentoNdgSendAction.do"></form>
	<form id="chiudiPratica" name="chiudiPratica" action="WsCensimentoNdgCloseAction.do"></form>
	
	<!-- div messaggi -->
	<div id="resultPanel">
		
	</div>
	
	<br class="clear">
	<form name="msgCensimento" action="WsCensimentoNdgDetailNotesAction.do">
		<input type="hidden" name="idCensimento" value="249">
		<input type="hidden" name="numeroIntestatari" value="2">
		

	
	<table class="inputtable" cellpadding="0" cellspacing="0">	
		<tbody><tr>
			<th colspan="3">STEP 1 - CENSIMENTO NDG</th>
			
			<th colspan="1">AOL</th>
		</tr>
		<tr>
			<td width="15%" class="label">
				Stato
			</td>
			<td class="value" width="30%">
				
				IN ATTESA NDG
			</td>
			<td width="15%" class="label">
				Id Pratica:
			</td>
			<td class="value" width="30%">
				1249578
			</td>
		</tr>
		
			<tr>
				<td width="15%" class="label">
					Cointestatari
				</td>
				<td class="value" width="30%">
					
							POPOLO GIOVANNA<br>
					
							POPOLO MARIO<br>
					
				</td>
					
				<td width="15%" class="label">	
					<fieldset>
						<label>NDG cointestazione</label>
						
					</fieldset>
				</td>
				<td class="value" width="30%">
					
						
							RICHIESTA CENSIMENTO IN ATTESA DI ESITO
						
					
					<br>
				</td>
			</tr>
		
	</tbody></table>
	
	<!-- tabelle intestatari -->
	
	<table class="inputtable" cellpadding="0" cellspacing="0">	
		<tbody><tr>	
			<td width="15%" class="">
				<h3>POPOLO GIOVANNA</h3>
				<fieldset>
					<label>Ruolo</label>
					intestatario
				</fieldset>
				<fieldset>
					<label>Codice fiscale</label>
					PPLGNN80T51G388J
				</fieldset>
			</td>
			<td class="value" width="30%" id="btnApriAnagrafica0">
				<div class="multiRight">				
					<div class="multibuttonpanel tolltipclick">					
						<span class="closed">
							<span class="uniqTooltipText nodotted over fixed">
								<span class="uniqTooltipPos">
									<a onclick="$('#dettaglioAnag0').show();$('#btnApriAnagrafica0').hide();$('#btnChiudiAnagrafica0').show()" title="vedi anagrafica">VEDI ANAGRAFICA</a>
								</span>
							</span>
						</span>
					</div>
				</div>
			</td>
			<td class="value" width="30%" id="btnChiudiAnagrafica0" style="display: none">
				<div class="multiRight">				
					<div class="multibuttonpanel tolltipclick">					
						<span class="closed">
							<span class="uniqTooltipText nodotted over fixed">
								<span class="uniqTooltipPos">
									<a onclick="$('#dettaglioAnag0').hide();$('#btnChiudiAnagrafica0').hide();$('#btnApriAnagrafica0').show()" title="vedi anagrafica">CHIUDI ANAGRAFICA</a>
								</span>
							</span>
						</span>
					</div>
				</div>
			</td>
			<td width="15%" class="label">	
				NDG
			</td>
			<td class="value" width="30%">
				
				<br>
				
				
					
							RICHIESTA CENSIMENTO IN ATTESA DI ESITO
					
						
					
				<br>
			</td>
		</tr>
		
		<tr>
			</tr></tbody></table>
			

			<table class="inputtable" cellpadding="0" cellspacing="0" id="dettaglioAnag0" style="display: none">	
			<!-- Dati generali -->
			
			
				<tbody>
				<tr>
					<td colspan="3" class="tableSection">
						<h3>Dati generali</h3> 
					</td>
				</tr>
				<tr>
					<td width="33%">
						<fieldset>
							<label>Id</label>
							1
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Ruolo</label>												
							intestatario
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Ciae</label>												
							055013
						</fieldset>
					</td>
     			</tr>					
				<tr>
					<td width="33%">
						<fieldset>
							<label>Sesso</label>
							F
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Data di nascita</label>
							11/12/1980
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Comune nascita</label>
							PAVIA
						</fieldset>
					</td>
				</tr>
				<tr>
					<td width="33%">
						<fieldset>
							<label>Provincia nascita</label>
							PV
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Stato nascita</label>
							ITALIA
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Cittadinanza</label>
							
						</fieldset>
						<fieldset>
							<label>Tin</label>
							
						</fieldset>
					</td>
				</tr>		
												
     		<!-- Documento riconoscimento -->
				<tr>
					<td colspan="3" class="tableBlank">
						&nbsp;
					</td>
				</tr>
     			<tr>
					<td colspan="3" class="tableSection">
						<h3>Documento riconoscimento</h3> 
					</td>
				</tr>
				<tr>
					<td width="33%">
						<fieldset>
							<label>Tipo</label>
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Numero</label>												
							XX1234552F
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Data emissione</label>												
							11/12/2008
						</fieldset>
					</td>
     			</tr>					
				<tr>
					<td width="33%">
						<fieldset>
							<label>Comune emissione</label>
							PAVIA
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Provincia emissione</label>
							PV
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Stato emissione</label>
							
						</fieldset>
					</td>
				</tr>							
     		
     		<!-- Indirizzo residenza -->	
     			<tr>
					<td colspan="3" class="tableBlank">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td colspan="3" class="tableSection">
						<h3>Indirizzo residenza</h3> 
					</td>
				</tr>
				<tr>
					<td width="33%">
						<fieldset>
							<label>Via</label>
							VIA MATTEOTTI 17
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Cap</label>												
							27051
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Comune</label>
							CAVA MANARA
						</fieldset>
					</td>
				</tr>
				<tr>
					<td width="33%">
						<fieldset>
							<label>Provincia</label>
							PV
						</fieldset>
					</td>
				</tr>			
     		
     		<!-- Indirizzo corrispondenza -->	
     			<tr>
					<td colspan="3" class="tableBlank">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td colspan="3" class="tableSection">
						<h3>Indirizzo corrispondenza</h3> 
					</td>
				</tr>
				<tr>
					<td width="33%">
						<fieldset>
							<label>Via</label>
							
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Presso</label>												

						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>&nbsp;</label>
							&nbsp;
						</fieldset>
					</td>
     			</tr>					
				<tr>
					<td width="33%">
						<fieldset>
							<label>Cap</label>												
							
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Comune</label>
							
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Provincia</label>
							
						</fieldset>
					</td>
				</tr>
     			
		<!-- Indirizzo CAI -->				
				<tr>
					<td colspan="3" class="tableBlank">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td colspan="3" class="tableSection">
						<h3>Indirizzo CAI</h3> 
					</td>
				</tr>
				<tr>
					<td width="33%">
						<fieldset>
							<label>Via</label>
							VIA MATTEOTTI 17
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Presso</label>

						</fieldset>
					</td>
				</tr>
				<tr> 
					<td width="33%">
						<fieldset>
							<label>Cap</label>
							27051
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Comune</label>
							CAVA MANARA
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Provincia</label>
							PV
						</fieldset>
					</td>
				</tr>
				
		<!-- Consensi privacy -->	
				<tr>
					<td colspan="3" class="tableBlank">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td colspan="3" class="tableSection">
						<h3>Consensi privacy</h3> 
					</td>
				</tr>
				<tr>
					<td width="33%">
						<fieldset>
							<label>Dati personali</label>
							SI
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Rilevazioni qualitative</label>
							SI
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Offerte del gruppo</label>
							SI
						</fieldset>
					</td>
				</tr>	
				<tr>
					<td width="33%">
						<fieldset>
							<label>Offerte di terzi</label>
							NO
						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Dati comunicati a terzi</label>
							NO
						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Dati sensibili
							</label>
							SI
						</fieldset>
					</td>
				</tr>
     			
		<!-- Recapiti-->				
				<tr>
					<td colspan="3" class="tableBlank">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td colspan="3" class="tableSection">
						<h3>Recapiti</h3> 
					</td>
				</tr>
				<tr>
					<td width="33%">
						<fieldset>
							<label>Tel casa</label>

						</fieldset>
					</td>
					<td width="34%">
						<fieldset>
							<label>Tel cellulare</label>

						</fieldset>
					</td>
					<td width="33%">
						<fieldset>
							<label>Email</label>

						</fieldset>
					</td>
				</tr>
			</tbody></table>
		
	
	
		
	<br class="clear">
	<br class="clear">
	
	
	<table class="inputtable" cellpadding="0" cellspacing="0">	
		<tbody><tr>	
			<td width="15%" class="">
				<h3>POPOLO MARIO</h3>
				<fieldset>
					<label>Ruolo</label>
					intestatario
				</fieldset>
				<fieldset>
					<label>Codice fiscale</label>
					PPLMRA80A01F205H
				</fieldset>
			</td>
			<td class="value" width="30%" id="btnApriAnagrafica1">
				<div class="multiRight">				
					<div class="multibuttonpanel tolltipclick">					
						<span class="closed">
							<span class="uniqTooltipText nodotted over fixed">
								<span class="uniqTooltipPos">
									<a onclick="$('#dettaglioAnag1').show();$('#btnApriAnagrafica1').hide();$('#btnChiudiAnagrafica1').show()" title="vedi anagrafica">VEDI ANAGRAFICA</a>
								</span>
							</span>
						</span>
					</div>
				</div>
			</td>
			<td class="value" width="30%" id="btnChiudiAnagrafica1" style="display: none">
				<div class="multiRight">				
					<div class="multibuttonpanel tolltipclick">					
						<span class="closed">
							<span class="uniqTooltipText nodotted over fixed">
								<span class="uniqTooltipPos">
									<a onclick="$('#dettaglioAnag1').hide();$('#btnChiudiAnagrafica1').hide();$('#btnApriAnagrafica1').show()" title="vedi anagrafica">CHIUDI ANAGRAFICA</a>
								</span>
							</span>
						</span>
					</div>
				</div>
			</td>
			<td width="15%" class="label">	
				NDG
			</td>
			<td class="value" width="30%">
				
				<br>
				
				
						RICHIESTA CENSIMENTO <img src="/img/ico2inf_off.gif"> <img src="/img/ico2inf_nosel.gif">
						<br>
						NDG IN STATO BLOCCATO <img src="/img/ico2inf_nosel.gif">
					
				<br>
			</td>
		</tr>
		
		<tr>
			</tr></tbody></table><table class="inputtable" cellpadding="0" cellspacing="0" id="dettaglioAnag1" style="display: none">	
			<!-- Dati generali -->
			
			
				<tbody><tr>
					<td width="16%" rowspan="3">
						<h3>Dati generali</h3> 
					</td>
					<td width="28%">
						<fieldset>
							<label>Id</label>
							2
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Ruolo</label>												
							intestatario
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Ciae</label>												
							055011
						</fieldset>
					</td>
     			</tr>					
				<tr>
					<td width="28%">
						<fieldset>
							<label>Sesso</label>
							M
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Data di nascita</label>
							01/01/1980
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Comune nascita</label>
							MILANO
						</fieldset>
					</td>
				</tr>
				<tr>
					<td width="28%">
						<fieldset>
							<label>Provincia nascita</label>
							MI
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Stato nascita</label>
							ITALIA
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Cittadinanza</label>
							
						</fieldset>
						<fieldset>
							<label>Tin</label>
							
						</fieldset>
					</td>
				</tr>		
												
     		<!-- Documento riconoscimento -->
     			<tr>
					<td width="16%" rowspan="2">
						<h3>Documento riconoscimento</h3> 
					</td>
					<td width="28%">
						<fieldset>
							<label>Tipo</label>
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Numero</label>												
							SS2232RFDS233
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Data emissione</label>												
							11/12/2008
						</fieldset>
					</td>
     			</tr>					
				<tr>
					<td width="28%">
						<fieldset>
							<label>Comune emissione</label>
							PAVIA
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Provincia emissione</label>
							PV
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Stato emissione</label>
							
						</fieldset>
					</td>
				</tr>							
     		
     		<!-- Indirizzo residenza -->	
     			<tr>
					<td width="16%" rowspan="2">
						<h3>Indirizzo residenza</h3> 
					</td>
					<td width="28%">
						<fieldset>
							<label>Via</label>
							VIA ALDO MORO 15
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Cap</label>												
							20121
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Comune</label>
							MILANO
						</fieldset>
					</td>
				</tr>
				<tr>
					<td width="28%">
						<fieldset>
							<label>Provincia</label>
							MI
						</fieldset>
					</td>
				</tr>			
     		
     		<!-- Indirizzo corrispondenza -->	
     			<tr>
					<td width="16%" rowspan="2">
						<h3>Indirizzo corrispondenza</h3> 
					</td>
					<td width="28%">
						<fieldset>
							<label>Via</label>
							
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Presso</label>												

						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>&nbsp;</label>
							&nbsp;
						</fieldset>
					</td>
     			</tr>					
				<tr>
					<td width="28%">
						<fieldset>
							<label>Cap</label>												
							
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Comune</label>
							
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Provincia</label>
							
						</fieldset>
					</td>
				</tr>
     			
		<!-- Indirizzo CAI -->				
				<tr>
					<td width="16%" rowspan="2">
						<h3>Indirizzo CAI</h3> 
					</td>
					<td width="28%">
						<fieldset>
							<label>Via</label>
							VIA GIOVANNI BATTISTA 1
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Presso</label>

						</fieldset>
					</td>
				</tr>
				<tr> 
					<td width="28%">
						<fieldset>
							<label>Cap</label>
							20121
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Comune</label>
							MILANO
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Provincia</label>
							MI
						</fieldset>
					</td>
				</tr>
				
		<!-- Consensi privacy -->	
				<tr>
					<td width="16%" rowspan="2">
						<h3>Consensi privacy</h3> 
					</td>
					<td width="28%">
						<fieldset>
							<label>Dati personali</label>
							SI
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Rilevazioni qualitative</label>
							SI
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Offerte del gruppo</label>
							SI
						</fieldset>
					</td>
				</tr>	
				<tr>
					<td width="28%">
						<fieldset>
							<label>Offerte di terzi</label>
							NO
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Dati comunicati a terzi</label>
							NO
						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Dati sensibili
							</label>
							SI
						</fieldset>
					</td>
				</tr>
     			
		<!-- Recapiti-->				
				<tr>
					<td width="16%" rowspan="1">
						<h3>Recapiti</h3> 
					</td>
					<td width="28%">
						<fieldset>
							<label>Tel casa</label>

						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Tel cellulare</label>

						</fieldset>
					</td>
					<td width="28%">
						<fieldset>
							<label>Email</label>

						</fieldset>
					</td>
				</tr>
			</tbody></table>
		
	
	
		
	<br class="clear">
	<br class="clear">
	
	
	
	
	<!-- Box storico pratica -->	
	<br class="clear">
		<div class="bollfrecsx2">
			<div class="cartimpronta_lista cartimpronta_lista2"><img alt="" class="carttit" src="/img/1px.gif">
				<div class="cartcont">
				<p onclick="javascript:ApriCartImpr(this);" onmouseover="javascript:this.style.cursor='pointer'" class="tit">
					<span><strong class="titolo">Storico Pratica</strong><br></span>
					<img alt="" class="bot" src="/img/cartimpr_off.gif">
				</p>
				<br class="clear">
					<div class="esteso">
						<br class="clear"><table class="inputtable commissioni" cellpadding="0" cellspacing="0">
							
							<tbody><tr>
								<td class="label">Operatore</td>
								<td class="value">
									Il sistema 
									ha rilevato la modifica il
									01/12/2017
									alle 
									11:06
								</td>
								<td class="label">Note</td>
								<td class="value"></td>
								<td class="label">Stato da</td>
								<td class="value">INIZIO</td>
								<td class="label">Stato a</td>
								<td class="value">DA_CENSIRE</td>
							</tr>
								
							
						</tbody></table>
					</div>
				</div>
			</div>		
		</div>	
	<br class="clear">	
	<br class="clear">
	<br class="clear">
	<br class="clear">
	

	<!-- se la pratica è in stato di censita, btn per reinviare la pratica all'agenzia di riferimento -->
	

	<!-- Se stato pratica CENSITI_DA_VERIFICARE, lavorare la pratica -->	
	
	
	<!-- Se stato pratica DA_CENSIRE, btn chiudi pratica -->
	

	</form>
				<p></p>
