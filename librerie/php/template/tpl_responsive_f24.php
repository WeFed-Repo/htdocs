<link rel="stylesheet" href="/wscmn/fe/css/delega.css" type="text/css">

<h2>Pagamento</h2>

<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">F24</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_f23.php&responsive=y&liv0=1&liv1=1&liv2=7&liv3=0">F23</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">

	<table>
		<tr>
			<td class="nota">I campi marcati con '*' sono obbligatori - <img src="/wscmn/img//campovis.gif"/> Campi di sola visualizzazione - <img src="/wscmn/img//campoerr.gif" alt=""/> Campi in errore</td>
		</tr>
	</table>
			
	<div id="Table1">
	<!-- HEADER DEL MODULO ( grafica profilata per tipo modulo )  -->
		<table>
			<tr>	
					
						<td class="contornoTabellaCompleta"><img src="/wscmn/img/immagineTitolo.jpg" alt="" align="middle"/></td>	
												
			</tr>
		</table>

	<!-- CORPO DEL MODULO ( include delle sezioni specifiche per ogni tipo di delega )  -->
		<form method="post" name="f24MainForm" action="">
			
	<!-- Sezione dati di personalizzazione -->
	  <input id="hdModPag" type="hidden" name="hdModPag" > 
	  <input id="hdBanca" type="hidden" name="hdBanca"> 
	  <input id="hdProf" type="hidden" name="hdProf"> 
	  <input id="hdAccise" type="hidden" name="hdAccise"> 
	  <input id="hdUltimaPagDiRiepilogo" type="hidden" name="hdUltimaPagDiRiepilogo">
	  
	  
	<!-- Sezione dati delega --> 
	  <input type="hidden" id="hdChiave" name="hdChiave" value=""/>
	  <input type="hidden" id="hdStato" name="hdStato" value=""/>

	  <input type="hidden" id="toDetails" name="toDetails" value=""/>
	  <input type="hidden" id="whatBack" name="whatBack" value=""/>

	  <!-- Sezione paginazione ricerca --> 
	  <input type="hidden" name="paginaDestinazione" id="paginaDestinazione" value=""/>
	  <input type="hidden" name="hdOrder" id="hdOrder" value=""/>
	  <input type="hidden" id="from" name="from" value=""/>
			








	<input name="tabId"	type="hidden"	value="nav_priv_wbx_sportello" />
	<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_pagamento_f23_24" />

	<input name="OBSKEY3"	type="hidden"	value="nav_priv_wbx_f24" />

	<input name="OBSCNT"	type="hidden"	value="" />
	<input name="cf"	type="hidden"	value="0.912464752508474" />
	<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
	<input name="siglaAzione"	type="hidden"	value="" />

	 

			
			<input type="hidden" name="id_transazione" id="id_transazione" value="1"/>
			













	<table>
		<tbody>
			<tr>
				<th>CONTRIBUENTE</th>
			</tr>
		</tbody>	
	</table>
	<table class="contribuente">
		<tbody>
		<tr>
			<td class="co01"><span>CODICE FISCALE</span></td>
			<td class="co02"><input id="f1-0-7" tabindex="1" type="text" maxlength="16" onblur="javascript:setFormOnChange_CF_PIVA(false);" onfocus="normalizeColor(this);" value="FNSRRT58C24F205M" name="contribuente.codFis" /></td>
			<td class="co03">Barrare in caso di anno d'imposta non coincidente con anno solare</td>	
			
				
				
					<td class="co04" align="center"><input class="ckb" type="checkbox" name="flagAnnoSolare" tabindex="2" onfocus="this.style.backgroundColor=0xFFFFFF;" value="1" /></td>
				
				
			
		</tr>
		<tr>
			<td><span>DATI ANAGRAFICI</span></td>
			<td id="labelC_R">cognome, denominazione o ragione sociale</td>
			<td colspan="2" valign="bottom">nome</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td id="contribuente.cognomeTD" style="display: none;"><input id="cognome" onfocus="normalizeColor(this);" tabindex="3" type="text" maxlength="24" value="FONSO" name="contribuente.cognome" onkeypress="javascript:return noNumbers(event);" /></td>
			<td id="contribuente.ragSocTD"><input id="ragSoc" onfocus="normalizeColor(this);" tabindex="3" type="text" maxlength="55" value="" name="contribuente.ragSoc" /></td>
			<td colspan="2"><input id="nome" onfocus="normalizeColor(this);" tabindex="4" type="text" maxlength="20" value="ROBERTO" name="contribuente.nome" onkeypress="javascript: return noNumbers(event);" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<table class="datses"><tbody>
					<tr>					
						<td>data di nascita (ggmmaaaa)<br /><input id="dataNasc" tabindex="5" onfocus="javascript: normalizeColor(this);" type="text" maxlength="8" value="24031958" name="contribuente.dataNascitaHtml" onkeypress="javascript: return onlyNumbers(event);" /></td>
						
						<td>sesso<br /><select class="selectcls" id="sesso" onclick="normalizeColor(this);" tabindex="6" name="contribuente.sesso">
							<option value=""></option>
						  	<option  value="F" > F</option>

						  	<option  value="M" selected="selected"> M</option>

					  		</select></td>
			 		</tr>
			 		</tbody>
			 	</table>
			 </td> 
			<td>comune (o Stato estero) di nascita<br /><input id="comNasc" onfocus="normalizeColor(this);" tabindex="7" type="text" maxlength="25" value="MILANO" name="contribuente.comuneNascita" onkeypress="javascript: return noNumbers(event);" /></td>
			<td>			
				<span class="txthelp"><strong data-title="Per i nati all'estero dal campo provincia va selezionato il valore EE" data-toggle="tooltip" data-original-title="" title="">provincia</strong></span><br>	
				
				<select class="selectcls" id="prov" onclick="normalizeColor(this);" tabindex="8" name="contribuente.provinciaNascita" style="margin-top:2px">
					<option value=""></option>
							
								<option value="AG" >AG</option>
							
								<option value="AL" >AL</option>
							
								<option value="AN" >AN</option>
							
								<option value="AO" >AO</option>
							
								<option value="AP" >AP</option>
							
								<option value="AQ" >AQ</option>
							
								<option value="AR" >AR</option>
							
								<option value="AT" >AT</option>
							
								<option value="AV" >AV</option>
							
								<option value="BA" >BA</option>
							
								<option value="BG" >BG</option>
							
								<option value="BI" >BI</option>
							
								<option value="BL" >BL</option>
							
								<option value="BN" >BN</option>
							
								<option value="BO" >BO</option>
							
								<option value="BR" >BR</option>
							
								<option value="BS" >BS</option>
							
								<option value="BT" >BT</option>
							
								<option value="BZ" >BZ</option>
							
								<option value="CA" >CA</option>
							
								<option value="CB" >CB</option>
							
								<option value="CE" >CE</option>
							
								<option value="CH" >CH</option>
							
								<option value="CI" >CI</option>
							
								<option value="CL" >CL</option>
							
								<option value="CN" >CN</option>
							
								<option value="CO" >CO</option>
							
								<option value="CR" >CR</option>
							
								<option value="CS" >CS</option>
							
								<option value="CT" >CT</option>
							
								<option value="CZ" >CZ</option>
							
								<option value="EE" >EE</option>
							
								<option value="EN" >EN</option>
							
								<option value="FC" >FC</option>
							
								<option value="FE" >FE</option>
							
								<option value="FG" >FG</option>
							
								<option value="FI" >FI</option>
							
								<option value="FM" >FM</option>
							
								<option value="FO" >FO</option>
							
								<option value="FR" >FR</option>
							
								<option value="GE" >GE</option>
							
								<option value="GO" >GO</option>
							
								<option value="GR" >GR</option>
							
								<option value="IM" >IM</option>
							
								<option value="IS" >IS</option>
							
								<option value="KR" >KR</option>
							
								<option value="LC" >LC</option>
							
								<option value="LE" >LE</option>
							
								<option value="LI" >LI</option>
							
								<option value="LO" >LO</option>
							
								<option value="LT" >LT</option>
							
								<option value="LU" >LU</option>
							
								<option value="MB" >MB</option>
							
								<option value="MC" >MC</option>
							
								<option value="ME" >ME</option>
							
								<option value="MI" selected>MI</option>
							
								<option value="MN" >MN</option>
							
								<option value="MO" >MO</option>
							
								<option value="MS" >MS</option>
							
								<option value="MT" >MT</option>
							
								<option value="NA" >NA</option>
							
								<option value="NO" >NO</option>
							
								<option value="NU" >NU</option>
							
								<option value="OG" >OG</option>
							
								<option value="OR" >OR</option>
							
								<option value="OT" >OT</option>
							
								<option value="PA" >PA</option>
							
								<option value="PC" >PC</option>
							
								<option value="PD" >PD</option>
							
								<option value="PE" >PE</option>
							
								<option value="PG" >PG</option>
							
								<option value="PI" >PI</option>
							
								<option value="PN" >PN</option>
							
								<option value="PO" >PO</option>
							
								<option value="PR" >PR</option>
							
								<option value="PS" >PS</option>
							
								<option value="PT" >PT</option>
							
								<option value="PU" >PU</option>
							
								<option value="PV" >PV</option>
							
								<option value="PZ" >PZ</option>
							
								<option value="RA" >RA</option>
							
								<option value="RC" >RC</option>
							
								<option value="RE" >RE</option>
							
								<option value="RG" >RG</option>
							
								<option value="RI" >RI</option>
							
								<option value="RM" >RM</option>
							
								<option value="RN" >RN</option>
							
								<option value="RO" >RO</option>
							
								<option value="SA" >SA</option>
							
								<option value="SI" >SI</option>
							
								<option value="SO" >SO</option>
							
								<option value="SP" >SP</option>
							
								<option value="SR" >SR</option>
							
								<option value="SS" >SS</option>
							
								<option value="SV" >SV</option>
							
								<option value="TA" >TA</option>
							
								<option value="TE" >TE</option>
							
								<option value="TN" >TN</option>
							
								<option value="TO" >TO</option>
							
								<option value="TP" >TP</option>
							
								<option value="TR" >TR</option>
							
								<option value="TS" >TS</option>
							
								<option value="TV" >TV</option>
							
								<option value="UD" >UD</option>
							
								<option value="VA" >VA</option>
							
								<option value="VB" >VB</option>
							
								<option value="VC" >VC</option>
							
								<option value="VE" >VE</option>
							
								<option value="VI" >VI</option>
							
								<option value="VR" >VR</option>
							
								<option value="VS" >VS</option>
							
								<option value="VT" >VT</option>
							
								<option value="VV" >VV</option>
					
			  	</select></td>
		</tr>				
		<tr>
			<td><span>DOMICILIO FISCALE</span></td>
			<td>Comune*<br /><input id="comDomic" onfocus="normalizeColor(this);" value="MONZA" tabindex="9" type="text" maxlength="25" name="contribuente.comuneDomicilio" onkeypress="javascript: return noNumbers(event);" /></td>
			<td colspan="2">
			<table class="provia">
				<tr>					
					<td>
					
					<span class="txthelp"><strong data-title="Se sei domiciliato all'estero, seleziona la voce 'EE'" data-toggle="tooltip" data-original-title="" title="">prov*</strong></span><br>	
					
					<select class="selectcls" id="provDomic" onclick="normalizeColor(this);" tabindex="10" name="contribuente.provinciaDomicilio" style="margin-top:2px">
					<option value=""></option>
								
							<option value="AG" >AG</option>
								
							<option value="AL" >AL</option>
								
							<option value="AN" >AN</option>
								
							<option value="AO" >AO</option>
								
							<option value="AP" >AP</option>
								
							<option value="AQ" >AQ</option>
								
							<option value="AR" >AR</option>
								
							<option value="AT" >AT</option>
								
							<option value="AV" >AV</option>
								
							<option value="BA" >BA</option>
								
							<option value="BG" >BG</option>
								
							<option value="BI" >BI</option>
								
							<option value="BL" >BL</option>
								
							<option value="BN" >BN</option>
								
							<option value="BO" >BO</option>
								
							<option value="BR" >BR</option>
								
							<option value="BS" >BS</option>
								
							<option value="BT" >BT</option>
								
							<option value="BZ" >BZ</option>
								
							<option value="CA" >CA</option>
								
							<option value="CB" >CB</option>
								
							<option value="CE" >CE</option>
								
							<option value="CH" >CH</option>
								
							<option value="CI" >CI</option>
								
							<option value="CL" >CL</option>
								
							<option value="CN" >CN</option>
								
							<option value="CO" >CO</option>
								
							<option value="CR" >CR</option>
								
							<option value="CS" >CS</option>
								
							<option value="CT" >CT</option>
								
							<option value="CZ" >CZ</option>
								
							<option value="EE" >EE</option>
								
							<option value="EN" >EN</option>
								
							<option value="FC" >FC</option>
								
							<option value="FE" >FE</option>
								
							<option value="FG" >FG</option>
								
							<option value="FI" >FI</option>
								
							<option value="FM" >FM</option>
								
							<option value="FO" >FO</option>
								
							<option value="FR" >FR</option>
								
							<option value="GE" >GE</option>
								
							<option value="GO" >GO</option>
								
							<option value="GR" >GR</option>
								
							<option value="IM" >IM</option>
								
							<option value="IS" >IS</option>
								
							<option value="KR" >KR</option>
								
							<option value="LC" >LC</option>
								
							<option value="LE" >LE</option>
								
							<option value="LI" >LI</option>
								
							<option value="LO" >LO</option>
								
							<option value="LT" >LT</option>
								
							<option value="LU" >LU</option>
								
							<option value="MB" selected>MB</option>
								
							<option value="MC" >MC</option>
								
							<option value="ME" >ME</option>
								
							<option value="MI" >MI</option>
								
							<option value="MN" >MN</option>
								
							<option value="MO" >MO</option>
								
							<option value="MS" >MS</option>
								
							<option value="MT" >MT</option>
								
							<option value="NA" >NA</option>
								
							<option value="NO" >NO</option>
								
							<option value="NU" >NU</option>
								
							<option value="OG" >OG</option>
								
							<option value="OR" >OR</option>
								
							<option value="OT" >OT</option>
								
							<option value="PA" >PA</option>
								
							<option value="PC" >PC</option>
								
							<option value="PD" >PD</option>
								
							<option value="PE" >PE</option>
								
							<option value="PG" >PG</option>
								
							<option value="PI" >PI</option>
								
							<option value="PN" >PN</option>
								
							<option value="PO" >PO</option>
								
							<option value="PR" >PR</option>
								
							<option value="PS" >PS</option>
								
							<option value="PT" >PT</option>
								
							<option value="PU" >PU</option>
								
							<option value="PV" >PV</option>
								
							<option value="PZ" >PZ</option>
								
							<option value="RA" >RA</option>
								
							<option value="RC" >RC</option>
								
							<option value="RE" >RE</option>
								
							<option value="RG" >RG</option>
								
							<option value="RI" >RI</option>
								
							<option value="RM" >RM</option>
								
							<option value="RN" >RN</option>
								
							<option value="RO" >RO</option>
								
							<option value="SA" >SA</option>
								
							<option value="SI" >SI</option>
								
							<option value="SO" >SO</option>
								
							<option value="SP" >SP</option>
								
							<option value="SR" >SR</option>
								
							<option value="SS" >SS</option>
								
							<option value="SV" >SV</option>
								
							<option value="TA" >TA</option>
								
							<option value="TE" >TE</option>
								
							<option value="TN" >TN</option>
								
							<option value="TO" >TO</option>
								
							<option value="TP" >TP</option>
								
							<option value="TR" >TR</option>
								
							<option value="TS" >TS</option>
								
							<option value="TV" >TV</option>
								
							<option value="UD" >UD</option>
								
							<option value="VA" >VA</option>
								
							<option value="VB" >VB</option>
								
							<option value="VC" >VC</option>
								
							<option value="VE" >VE</option>
								
							<option value="VI" >VI</option>
								
							<option value="VR" >VR</option>
								
							<option value="VS" >VS</option>
								
							<option value="VT" >VT</option>
								
							<option value="VV" >VV</option>
											
			  	</select></td>
			<td>via e numero civico*<br /><input id="indirizzo" onfocus="normalizeColor(this);" tabindex="11" type="text" maxlength="25" value="VIA MONTELUNGO 30" name="contribuente.indirizzo" /></td>
			</tr></table>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<table>					
					<tr>
						<td><span>CODICE FISCALE del coobbligato, erede, genitore, tutore o curatore fallimentare</span></td>
						<td><input id="f1-0-14" onfocus="normalizeColorCF_ID(this);" onblur="checkCF(this, true); /*checkIsSameCF();*/" tabindex="12" type="text" maxlength="16" name="contribuente.codiceFiscale2" value="" /></td>
						<td>codice identificativo</td>
						<td><input id="f1-0-15" onfocus="normalizeColorCF_ID(this);" tabindex="13" type="text" maxlength="2" name="contribuente.codiceIdentif" value="" /></td>
					</tr>				
				</table>
			</td>
		</tr>	
		</tbody>						
	</table>

			









	<table>		
		<tr>
			<th>DATI TITOLARE CONTO</th>
		</tr>
	</table>
	<table>
		<tr>
			<td colspan="4">codice fiscale*<br /><input id="Text10" readonly="readonly" type="text" maxlength="16" value="FNSRRT58C24F205M" name="contoCorrente.codiceFiscale" /></td>
		</tr>
		<tr>
			<td>comune*<br /><input readonly="readonly" id="Text11" type="text" value="MONZA" maxlength="25" name="mittente.comune" /></td>
			<td>prov<br /><input readonly="readonly"  id="Text12" type="text" value="MB" maxlength="2" name="mittente.provincia" /></td>
			<td>via e numero civico*<br /><input readonly="readonly" id="Text13" type="text" value="VIA MONTELUNGO 30" maxlength="34" name="mittente.indirizzo" /></td>
			<td>cap*<br /><input readonly="readonly"  id="Text14" type="text" value="20900" maxlength="5" name="mittente.cap" /></td>
		</tr>
	</table>

		
		
				









	<table>		
		<tr>
			<th>SEZIONE ERARIO:<span> Imposte Dirette - IVA  - Ritenute alla Fonte -  Altri Tributi ed Interessi</span></th>
		</tr>
	</table>
	<table id="erario_hidden" style="display: none;" >		
		<tr >
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table id="TableErario" class="erario">
		<tr>
			<td class="er01">codice tributo</td>
			<td class="er01b">rateazione<br />regione/prov.</td></td>
			<td class="er01">anno<br />(aaaa)</td>
			<td class="er02">importi a debito<br />versati</td>
			<td class="er03">importi a credito<br>compensati</td>
			<td class="er04" rowspan="7">&nbsp;</td>
		</tr>
		<tr>
			<td><input id="f2-1-1" class="dim33" tabindex="19" type="text" maxlength="4" name="sezione(erario).riga[0].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-1-2" class="dim33" tabindex="20" type="text" maxlength="4" name="sezione(erario).riga[0].rateazione" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-1-3" class="dim33" tabindex="21" type="text" maxlength="4" name="sezione(erario).riga[0].anno" value=""  onkeypress="javascript: return onlyNumbers(event);" onchange="isAnno(this);" onfocus="normalizeColor(this);"  /></td>	
			<td><input id="f2-1-4" class="dim80rg" tabindex="22" type="text" maxlength="11"  onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[0].interiImportoDebito" value="0"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-1-4-bis" tabindex="23" type="text" maxlength="2" size="2"  onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[0].centImportoDebito" value=""  onfocus="normalizeColor(this);" onchange="blockOther(this);" />
			</td>
			<td><input id="f2-1-5" class="dim80rg" tabindex="24" type="text" maxlength="11"  onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[0].interiImportoCredito" value="0"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-1-5-bis" tabindex="25" type="text" maxlength="2"  onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[0].centImportoCredito" value=""  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-2-1" class="dim33" tabindex="26" type="text" maxlength="4" name="sezione(erario).riga[1].codiceTributo" value=""  value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-2-2" class="dim33" tabindex="27" type="text" maxlength="4" name="sezione(erario).riga[1].rateazione" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-2-3" class="dim33" tabindex="28" type="text" maxlength="4" name="sezione(erario).riga[1].anno" value=""  onkeypress="javascript: return onlyNumbers(event);"  onchange="isAnno(this);" onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-2-4" class="dim80rg" tabindex="29" type="text" maxlength="11"  onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[1].interiImportoDebito" value="0"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-2-4.bis" tabindex="30" type="text" maxlength="2"  onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[1].centImportoDebito" value=""  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
			<td><input id="f2-2-5" class="dim80rg" tabindex="31" type="text" maxlength="11"  onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[1].interiImportoCredito" value="0"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-2-5-bis" tabindex="32" type="text" maxlength="2"  onkeypress="javascript: return onlyNumbers(event);" name="sezione(erario).riga[1].centImportoCredito" value=""  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-3-1" class="dim33" tabindex="33" type="text" maxlength="4" name="sezione(erario).riga[2].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-3-2" class="dim33" tabindex="34" type="text" maxlength="4" name="sezione(erario).riga[2].rateazione" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-3-3" class="dim33" tabindex="35" type="text" maxlength="4" name="sezione(erario).riga[2].anno" value=""  onkeypress="javascript: return onlyNumbers(event);"  onchange="isAnno(this);" onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-3-4" class="dim80rg" tabindex="36" type="text" maxlength="11" name="sezione(erario).riga[2].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-3-4-bis" tabindex="37" type="text" maxlength="2" name="sezione(erario).riga[2].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
			<td><input id="f2-3-5" class="dim80rg" tabindex="38" type="text" maxlength="8" name="sezione(erario).riga[2].interiImportoCredito" value="0"  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-3-5-bis" tabindex="39" type="text" maxlength="2" name="sezione(erario).riga[2].centImportoCredito" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-4-1" class="dim33" tabindex="40" type="text" maxlength="4" name="sezione(erario).riga[3].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-4-2" class="dim33" tabindex="41" type="text" maxlength="4" name="sezione(erario).riga[3].rateazione" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-4-3" class="dim33" tabindex="42" type="text" maxlength="4" name="sezione(erario).riga[3].anno" value=""  onkeypress="javascript: return onlyNumbers(event);"  onchange="isAnno(this);" onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-4-4" class="dim80rg" tabindex="43" type="text" maxlength="11" name="sezione(erario).riga[3].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-4-4-bis" tabindex="44" type="text" maxlength="2" size="2" name="sezione(erario).riga[3].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
			<td><input id="f2-4-5" class="dim80rg" tabindex="45" type="text" maxlength="11" name="sezione(erario).riga[3].interiImportoCredito" value="0"  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-4-5-bis" tabindex="46" type="text" maxlength="2" name="sezione(erario).riga[3].centImportoCredito" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-5-1" class="dim33" tabindex="47" type="text" maxlength="4" name="sezione(erario).riga[4].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-5-2" class="dim33" tabindex="48" type="text" maxlength="4" name="sezione(erario).riga[4].rateazione" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-5-3" class="dim33" tabindex="49" type="text" maxlength="4" name="sezione(erario).riga[4].anno" value=""  onkeypress="javascript: return onlyNumbers(event);"  onchange="isAnno(this);" onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-5-4" class="dim80rg" tabindex="50" type="text" maxlength="11" name="sezione(erario).riga[4].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-5-4-bis" tabindex="51" type="text" maxlength="2" name="sezione(erario).riga[4].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
			<td><input id="f2-5-5" class="dim80rg" tabindex="52" type="text" maxlength="11" name="sezione(erario).riga[4].interiImportoCredito" value="0"  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-5-5-bis" tabindex="53" type="text" maxlength="2" name="sezione(erario).riga[4].centImportoCredito" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-6-1" class="dim33" tabindex="54" type="text" maxlength="4" name="sezione(erario).riga[5].codiceTributo" value=""    onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-6-2" class="dim33" tabindex="55" type="text" maxlength="4" name="sezione(erario).riga[5].rateazione" value=""    onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-6-3" class="dim33" tabindex="56" type="text" maxlength="4" name="sezione(erario).riga[5].anno" value=""  onkeypress="javascript: return onlyNumbers(event);"  onchange="isAnno(this);" onfocus="normalizeColor(this);" /></td>
			<td><input id="f2-6-4" class="dim80rg" tabindex="57" type="text" maxlength="11" name="sezione(erario).riga[5].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-6-4-bis" tabindex="58" type="text" maxlength="2" size="2" name="sezione(erario).riga[5].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
			<td><input id="f2-6-5" class="dim80rg" tabindex="59" type="text" maxlength="11" name="sezione(erario).riga[5].interiImportoCredito" value="0"  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-6-5.bis" tabindex="60" type="text" maxlength="2" name="sezione(erario).riga[5].centImportoCredito" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td class="alright" colspan="3"><br />Totale</td>
			<td><div class="lettera">A</div><input class="dim80rg" id="f2-0-1" readonly="readonly" onfocus="this.blur();" name="sezione(erario).interiTotaleDebito" value="0" type="text" maxlength="13" size="7" /><div class="virgola" style="display: inline">,</div><input id="f2.0.1.bis" name="sezione(erario).centTotaleDebito" value="00"  type="text" maxlength="2" size="2" readonly="readonly" onfocus="this.blur();" /></td>
			<td><div class="lettera">B</div><input class="dim80rg" id="f2-0-2" name="sezione(erario).interiTotaleCredito" value="0" type="text"  maxlength="13" readonly="readonly" onfocus="this.blur();" /><div class="virgola" style="display: inline">,</div><input id="f2-0-2-bis" name="sezione(erario).centTotaleCredito" value="00"  type="text" maxlength="2" readonly="readonly" onfocus="this.blur();" /></td>
			
			<td class="saldo"><span class="lettera">Saldo A-B</span><br><input class="dim80rg" id="f2-0-99" name="sezione(erario).interiSaldo" value="0" type="text" maxlength="13"  readonly="readonly" onfocus="this.blur();" /><div class="virgola" style="display: inline">,</div><input id="f2-0-99-bis" type="text" maxlength="2" size="2" name="sezione(erario).centSaldo" value="00"  readonly="readonly" onfocus="this.blur();" /></td>				
			
		</tr>				
		<tr>
			<td class="alleft">codice ufficio<br /><input name="sezione(erario).codiceUfficio" value="" id="f2-0-3"  tabindex="61" type="text" maxlength="3" onfocus="normalizeColor(this);" onkeyup="checkCodAttoUfficio('erario', this);"/></td>  
			<td class="alleft" colspan="5">codice atto<br /><input name="sezione(erario).codiceAtto" value="" onchange="isReale(this); checkCodAttoUfficio('erario', this);" onfocus="normalizeColor(this);" onkeyup="javascript: return onlyNumbers(event);" id="f2-0-4" tabindex="62" type="text" maxlength="11" /></td>
		
		</tr>
	</table>


				









	<table>		
		<tr>
			<th>SEZIONE INPS</th>
		</tr>
	</table>
	<table id="inps_hidden" style="display: none;" >		
		<tr >
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table class="inps" id="TableInps">
		<tr>
			<td class="in01" rowspan="2">codice sede</td>
			<td class="in02" rowspan="2">causale contributo</td>
			<td class="in03" rowspan="2">matricola INPS/ codice INPS/ filiale azienda</td>
			<td colspan="2">periodo di riferim.:</td>
			<td class="er02" rowspan="2">importi a debito<br />versati</td>
			<td class="er03" rowspan="2">importi a credito<br />compensati</td>
			<td class="er04" rowspan="6">&nbsp;</td>
		</tr>
		<tr>
			<td>da<br />(mmaaaa)</td>
			<td>a<br />(mmaaaa)</td>
		</tr>
		<tr>
			<td><input id="f3-1-1" class="dim33" name="sezione(inps).riga[0].codiceSede" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);"  tabindex="63" type="text" maxlength="4" /></td>
			<td><input id="f3-1-2" class="dim38" name="sezione(inps).riga[0].causaleContributo" value="" value="" onfocus="normalizeColor(this);"   tabindex="64" type="text" maxlength="5" /></td>
			<td><input id="f3-1-3" class="dim64" name="sezione(inps).riga[0].codiceInps" value=""  tabindex="65" type="text" maxlength="17" onfocus="normalizeColor(this);" /></td>
			<td><input id="f3-1-4" class="dim44" name="sezione(inps).riga[0].inizioRiferimento" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);"  tabindex="66" type="text" maxlength="6" /></td>
			<td><input id="f3-1-5" class="dim44" name="sezione(inps).riga[0].fineRiferimento" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);"  tabindex="67" type="text" maxlength="6" /></td>
			<td><input id="f3-1-6" class="dim80rg" tabindex="68" type="text" maxlength="11" name="sezione(inps).riga[0].interiImportoDebito" value="0" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f3-1-6-bis" tabindex="69" type="text" maxlength="2" name="sezione(inps).riga[0].centImportoDebito" value="" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
			<td><input id="f3-1-7" class="dim80rg" tabindex="70" type="text" maxlength="11" name="sezione(inps).riga[0].interiImportoCredito" value="0" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f3-1-7-bis" tabindex="71" type="text" maxlength="2" name="sezione(inps).riga[0].centImportoCredito" value="" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f3-2-1" class="dim33" name="sezione(inps).riga[1].codiceSede" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);"  tabindex="72" type="text" maxlength="4" /></td>
			<td><input id="f3-2-2" class="dim38" tabindex="73" type="text" maxlength="5" name="sezione(inps).riga[1].causaleContributo" value=""  onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-2-3" class="dim64" tabindex="74" type="text" maxlength="17" name="sezione(inps).riga[1].codiceInps" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input id="f3-2-4" class="dim44" tabindex="75" type="text" maxlength="6" name="sezione(inps).riga[1].inizioRiferimento" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-2-5" class="dim44" tabindex="76" type="text" maxlength="6" name="sezione(inps).riga[1].fineRiferimento" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-2-6" class="dim80rg" tabindex="77" type="text" maxlength="11" size="7" name="sezione(inps).riga[1].interiImportoDebito" value="0" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f3-2-6-bis" tabindex="78" type="text" maxlength="2" size="2" name="sezione(inps).riga[1].centImportoDebito" value="" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
			<td><input id="f3-2-7" class="dim80rg" tabindex="79" type="text" maxlength="11" name="sezione(inps).riga[1].interiImportoCredito" value="0" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f3-2-7-bis" tabindex="80" type="text" maxlength="2" name="sezione(inps).riga[1].centImportoCredito" value="" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f3-3-1" class="dim33" tabindex="81" type="text" maxlength="4" name="sezione(inps).riga[2].codiceSede" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-3-2" class="dim38" tabindex="82" type="text" maxlength="5" name="sezione(inps).riga[2].causaleContributo" value="" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-3-3" class="dim64" tabindex="83" type="text" maxlength="17" name="sezione(inps).riga[2].codiceInps" value=""  onfocus="normalizeColor(this);" /></td>
			<td><input id="f3-3-4" class="dim44" tabindex="84" type="text" maxlength="6" name="sezione(inps).riga[2].inizioRiferimento" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-3-5" class="dim44" tabindex="85" type="text" maxlength="6" size="5" name="sezione(inps).riga[2].fineRiferimento" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-3-6" class="dim80rg" tabindex="86" type="text" maxlength="11" name="sezione(inps).riga[2].interiImportoDebito" value="0" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f3-3-6-bis" tabindex="87" type="text" maxlength="2" name="sezione(inps).riga[2].centImportoDebito" value="" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
			<td><input id="f3-3-7" class="dim80rg" tabindex="88" type="text" maxlength="11" name="sezione(inps).riga[2].interiImportoCredito" value="0" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f3-3-7-bis" tabindex="89" type="text" maxlength="2" name="sezione(inps).riga[2].centImportoCredito" value="" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f3-4-1" class="dim33" tabindex="90" type="text" maxlength="4" name="sezione(inps).riga[3].codiceSede" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isReale(this);" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-4-2" class="dim38" tabindex="91" type="text" maxlength="5" name="sezione(inps).riga[3].causaleContributo" value="" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-4-3" class="dim64" tabindex="92" type="text" maxlength="17" name="sezione(inps).riga[3].codiceInps" value=""  onfocus="normalizeColor(this);" /></td>
			<td><input id="f3-4-4" class="dim44" tabindex="93" type="text" maxlength="6" name="sezione(inps).riga[3].inizioRiferimento" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-4-5" class="dim44" tabindex="94" type="text" maxlength="6" name="sezione(inps).riga[3].fineRiferimento" value="" onkeypress="javascript: return onlyNumbers(event);" onchange="isPeriodo(this);" onfocus="normalizeColor(this);"  /></td>
			<td><input id="f3-4-6" class="dim80rg" tabindex="95" type="text" maxlength="11" name="sezione(inps).riga[3].interiImportoDebito" value="0" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f3-4-6-bis" tabindex="96" type="text" maxlength="2" size="2" name="sezione(inps).riga[3].centImportoDebito" value="" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
			<td><input id="f3-4-7" class="dim80rg" tabindex="97" type="text" maxlength="11" name="sezione(inps).riga[3].interiImportoCredito" value="0" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f3-4-7-bis" tabindex="98" type="text" maxlength="2" name="sezione(inps).riga[3].centImportoCredito" value="" onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" onchange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td class="alright" colspan="5"><br />Totale</td>
			<td><div class="lettera">C</div><input class="dim80rg" id="f3-0-1" name="sezione(inps).interiTotaleDebito" value="0" type="text" maxlength="13" size="7" readonly="readonly" onfocus="this.blur();" /><div class="virgola" style="display: inline">,</div><input id="f3-0-1-bis" name="sezione(inps).centTotaleDebito" value="00" type="text" maxlength="2" readonly="readonly" onfocus="this.blur();" /></td>
			<td><div class="lettera">D</div><input class="dim80rg" id="f3-0-2" name="sezione(inps).interiTotaleCredito" value="0" type="text" maxlength="13" size="7" readonly="readonly" onfocus="this.blur();" /><div class="virgola" style="display: inline">,</div><input id="f3-0-2-bis" name="sezione(inps).centTotaleCredito" value="00" type="text" maxlength="2" readonly="readonly" onfocus="this.blur();" />
			</td>
			<td class="saldo"><span class="lettera">Saldo C-D</span><br><input class="dim80rg" id="f3-0-99" name="sezione(inps).interiSaldo" value="0" type="text" maxlength="13" size="6" readonly="readonly" onfocus="this.blur();" /><div class="virgola" style="display: inline">,</div><input id="f2-0-99-bis" name="sezione(inps).centSaldo" value="00" type="text" maxlength="2" readonly="readonly" onfocus="this.blur();" />
			</td>
		</tr>
	</table>


				









	<table>		
		<tr>
			<th>SEZIONE REGIONI</th>
		</tr>
	</table>
	<table id="regioni_hidden" style="display: none;" >		
		<tr >
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table class="regioni" id="TableRegioni">
		<tr>
			<td class="re01">codice<br />regione</td>
			<td class="re02">codice tributo</td>
			<td class="re01">rateazione</td>
			<td class="re03">anno<br />(aaaa)</td>
			<td class="er02">importi a debito<br />versati</td>
			<td class="er03">importi a credito<br />compensati</td>
			<td class="er04" rowspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td><input id="f4-1-1" class="dim33" tabindex="99" type="text" maxlength="2" name="sezione(regioni).riga[0].codiceRegione" value="" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);"  /></td>
			<td><input id="f4-1-2" class="dim33" tabindex="100" type="text" maxlength="4" name="sezione(regioni).riga[0].codiceTributo" value="" value=""  onFocus="normalizeColor(this);" onblur="" /></td>
			<td><input id="f4-1-3" class="dim33" tabindex="101" type="text" maxlength="4" name="sezione(regioni).riga[0].rateazione" value=""  onFocus="normalizeColor(this);" onblur="" /></td>
			<td><input id="f4-1-4" class="dim33" tabindex="102" type="text" maxlength="4" name="sezione(regioni).riga[0].anno" value="" onKeyPress="javascript: return onlyNumbers(event);" onChange="isAnno(this);" onFocus="normalizeColor(this);"  /></td>
			<td><input id="f4-1-5" class="dim80rg" tabindex="103" type="text" maxlength="11" name="sezione(regioni).riga[0].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-1-5-bis" tabindex="104" type="text" maxlength="2" name="sezione(regioni).riga[0].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
			<td><input id="f4-1-6" class="dim80rg" tabindex="105" type="text" maxlength="11" name="sezione(regioni).riga[0].interiImportoCredito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-1-6-bis" tabindex="106" type="text" maxlength="2" size="2" name="sezione(regioni).riga[0].centImportoCredito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f4-2-1" class="dim33" tabindex="107" type="text" maxlength="2" name="sezione(regioni).riga[1].codiceRegione" value="" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);"  /></td>
			<td><input id="f4-2-2" class="dim33" tabindex="108" type="text" maxlength="4" name="sezione(regioni).riga[1].codiceTributo" value=""  onFocus="normalizeColor(this);" onBlur="" /></td>
			<td><input id="f4-2-3" class="dim33" tabindex="109" type="text" maxlength="4" name="sezione(regioni).riga[1].rateazione" value=""  onFocus="normalizeColor(this);" onBlur="" /></td>
			<td><input id="f4-2-4" class="dim33" tabindex="110" type="text" maxlength="4" name="sezione(regioni).riga[1].anno" value="" onKeyPress="javascript: return onlyNumbers(event);" onChange="isAnno(this);" onFocus="normalizeColor(this);"  /></td>
			<td><input id="f4-2-5" class="dim80rg" tabindex="111" type="text" maxlength="11" name="sezione(regioni).riga[1].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-2-5-bis" tabindex="112" type="text" maxlength="2" name="sezione(regioni).riga[1].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
			<td><input id="f4-2-6" class="dim80rg" tabindex="113" type="text" maxlength="11" name="sezione(regioni).riga[1].interiImportoCredito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-2-6-bis" tabindex="114" type="text" maxlength="2" name="sezione(regioni).riga[1].centImportoCredito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f4-3-1" class="dim33" tabindex="115" type="text" maxlength="2" name="sezione(regioni).riga[2].codiceRegione" value="" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);"  /></td>
			<td><input id="f4-3-2" class="dim33" tabindex="116" type="text" maxlength="4" name="sezione(regioni).riga[2].codiceTributo" value=""  onFocus="normalizeColor(this);" onBlur="" /></td>
			<td><input id="f4-3-3" class="dim33" tabindex="117" type="text" maxlength="4" name="sezione(regioni).riga[2].rateazione" value=""  onFocus="normalizeColor(this);" onBlur="" /></td>
			<td><input id="f4-3-4" class="dim33" tabindex="118" type="text" maxlength="4" name="sezione(regioni).riga[2].anno" value="" onKeyPress="javascript: return onlyNumbers(event);" onChange="isAnno(this);" onFocus="normalizeColor(this);"  /></td>
			<td><input id="f4-3-5" class="dim80rg" tabindex="119" type="text" maxlength="11" name="sezione(regioni).riga[2].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-3-5-bis" tabindex="120" type="text" maxlength="2" name="sezione(regioni).riga[2].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
			<td><input id="f4-3-6" class="dim80rg" tabindex="121" type="text" maxlength="11" name="sezione(regioni).riga[2].interiImportoCredito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-3-6-bis" tabindex="122" type="text" maxlength="2" name="sezione(regioni).riga[2].centImportoCredito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input id="f4-4-1" class="dim33" tabindex="123" type="text" maxlength="2" name="sezione(regioni).riga[3].codiceRegione" value="" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);"  /></td>
			<td><input id="f4-4-2" class="dim33" tabindex="124" type="text" maxlength="4" name="sezione(regioni).riga[3].codiceTributo" value=""  onFocus="normalizeColor(this);" onBlur="" /></td>
			<td><input id="f4-4-3" class="dim33" tabindex="125" type="text" maxlength="4" name="sezione(regioni).riga[3].rateazione" value=""  onFocus="normalizeColor(this);" onBlur="" /></td>
			<td><input id="f4-4-4" class="dim33" tabindex="126" type="text" maxlength="4" name="sezione(regioni).riga[3].anno" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="isAnno(this);" onFocus="normalizeColor(this);" /></td>
			<td><input id="f4-4-5" class="dim80rg" tabindex="127" type="text" maxlength="11" name="sezione(regioni).riga[3].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-4-5-bis" tabindex="128" type="text" maxlength="2" name="sezione(regioni).riga[3].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
			<td><input id="f4-4-6" class="dim80rg" tabindex="129" type="text" maxlength="11" name="sezione(regioni).riga[3].interiImportoCredito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-4-6-bis" tabindex="130" type="text" maxlength="2" name="sezione(regioni).riga[3].centImportoCredito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td class="alright" colspan="4"><br />Totale</td>
			<td><div class="lettera">E</div><input class="dim80rg" id="f4-0-1" name="sezione(regioni).interiTotaleDebito" value="0" type="text"  maxlength="13" readonly="readonly" onFocus="this.blur();" /><div class="virgola" style="display: inline">,</div><input id="f4-0-1-bis" name="sezione(regioni).centTotaleDebito" value="00" type="text"  maxlength="2" size="2" readonly="readonly" onFocus="this.blur();" /></td>
			<td><div class="lettera">F</div><input class="dim80rg" id="f4-0-2" name="sezione(regioni).interiTotaleCredito" value="0" type="text"  maxlength="13"  readonly="readonly" onFocus="this.blur();" /><div class="virgola" style="display: inline">,</div><input id="f4-0-2-bis" name="sezione(regioni).centTotaleCredito" value="00" type="text"  maxlength="2" readonly="readonly" onFocus="this.blur();" /></td>
			<td class="saldo"><span class="lettera">Saldo E-F</span><br><input class="dim80rg" id="f4-0-98" name="sezione(regioni).interiSaldo" value="0" type="text"  maxlength="13" readonly="readonly" onFocus="this.blur();" /><div class="virgola" style="display: inline">,</div><input id="f4-0-98-bis" name="sezione(regioni).centSaldo" value="00" type="text"  maxlength="2" readonly="readonly" onFocus="this.blur();" /></td>
		</tr>
	</table>

				













	<table>	
		<tbody>
			<tr>
				<th class="imu">SEZIONE IMU ED ALTRI TRIBUTI LOCALI</th>	
				<th class="alright"><span>IDENTIFICATIVO OPERAZIONE</span>
					<input id="f4-0-6" class="dim150" name="sezione(entiLocali).identificativoTares" onFocus="normalizeColor(this);" value="" type="text" maxlength="18" />
				</th>
			</tr>
		</tbody>	
	</table>
	<table id="ici_hidden" style="display: none;">		
		<tr>
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table class="ici" id="TableICI">
		<tr>
			<td class="ic01">cod.ente/<br />comune</td>
			<td class="ic02"><span style="font:8px Arial,sans-serif;">Ravv.</span></td>
			<td class="ic03"><span style="font:8px Arial,sans-serif;">immob.<br />variati</span></td>
			<td class="ic04"><span style="font:8px Arial,sans-serif;">Acc.</span></td>
			<td class="ic05"><span style="font:8px Arial,sans-serif;">Saldo</span></td>
			<td class="ic06">num.<br />immob.</td>
			<td class="ic07">codice<br />Tributo</td>
			<td class="ic08">rateaz.</td>
			<td class="ic09">anno<br />(aaaa)</td>
			<td class="er02">importi a debito<br />versati</td>
			<td class="er03">importi a credito<br />compensati</td>
			<td class="er04" rowspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td><input class="dim30"  id="f4-1-11" tabindex="131" type="text" maxlength="4" name="sezione(entiLocali).riga[0].codiceEnte" value=""  onfocus="normalizeColor(this);" /></td>
						
				<td><input class="dim0" id="f4-1-17" type="checkbox" name="sezione(entiLocali).riga[0].ravvedimento" tabindex="132" value="1" /></td>
			
			
			
				<td><input class="dim0" id="f4-1-18" type="checkbox" name="sezione(entiLocali).riga[0].immobiliVariati" tabindex="133" value="1" /></td>
				
			
			
				<td><input class="dim0" id="f4-1-19" type="checkbox" name="sezione(entiLocali).riga[0].acconto" tabindex="137" value="1" /></td>
			 	
			
			
				<td><input class="dim0" id="f4-1-20" type="checkbox" name="sezione(entiLocali).riga[0].flagSaldo" tabindex="139" value="1" /></td>
			 			
			<td><input class="dim30" id="f4-1-21"  tabindex="140" type="text" maxlength="3" name="sezione(entiLocali).riga[0].numeroImmobili" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
			<td><input class="dim30" id="f4-1-12" tabindex="141" type="text" maxlength="4" name="sezione(entiLocali).riga[0].codiceTributo" value="" onFocus="normalizeColor(this);" /></td>
			<td><input class="dim30" id="f4-1-13" tabindex="142" type="text" maxlength="4" name="sezione(entiLocali).riga[0].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);" onFocus="normalizeColor(this);" /></td>
			<td><input class="dim30" id="f4-1-14" tabindex="143" type="text" maxlength="4" size="3" name="sezione(entiLocali).riga[0].anno" onKeyPress="javascript: return onlyNumbers(event);" onChange="isAnno(this);" onFocus="normalizeColor(this);" value="" /></td>
			<td><input class="dim80rg" id="f4-1-15" tabindex="144" type="text" maxlength="11" size="6" name="sezione(entiLocali).riga[0].interiImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);"  /><div class="virgola" style="display: inline">,</div><input id="f4-1-15.bis" tabindex="145" type="text" maxlength="2" name="sezione(entiLocali).riga[0].centImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
			<td><input class="dim80rg" id="f4-1-16" tabindex="146" type="text" maxlength="11" size="6" name="sezione(entiLocali).riga[0].interiImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-1-16-bis" tabindex="147" type="text" maxlength="2" name="sezione(entiLocali).riga[0].centImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input class="dim30" id="f4-2-11" tabindex="148" type="text" maxlength="4" name="sezione(entiLocali).riga[1].codiceEnte" value="" onfocus="normalizeColor(this);" /></td>
			
				<td><input class="dim0" id="f4-2-17" type="checkbox" name="sezione(entiLocali).riga[1].ravvedimento" tabindex="150" value="1" /></td>
			
			
				<td><input class="dim0" id="f4-2-18" type="checkbox" name="sezione(entiLocali).riga[1].immobiliVariati" tabindex="152" value="1" /></td>
			
			
				<td><input class="dim0" id="f4-2-19" type="checkbox" name="sezione(entiLocali).riga[1].acconto" tabindex="154" value="1" /></td>
			
			
				<td><input class="dim0" id="f4-2-20" type="checkbox" name="sezione(entiLocali).riga[1].flagSaldo" tabindex="156" value="1" /></td>
			
			<td><input class="dim30" id="f4-2-21" tabindex="157" type="text" maxlength="3" name="sezione(entiLocali).riga[1].numeroImmobili" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
			<td><input class="dim30" id="f4-2-12" tabindex="158" type="text" maxlength="4" name="sezione(entiLocali).riga[1].codiceTributo" value="" onFocus="normalizeColor(this);" /></td>
			<td><input class="dim30" id="f4-2-13" tabindex="159" type="text" maxlength="4" name="sezione(entiLocali).riga[1].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);" onFocus="normalizeColor(this);" /></td>
			<td><input class="dim30" id="f4-2-14" tabindex="160" type="text" maxlength="4" name="sezione(entiLocali).riga[1].anno" onKeyPress="javascript: return onlyNumbers(event);" onChange="isAnno(this);" onFocus="normalizeColor(this);" value="" /></td>
			<td><input class="dim80rg" id="f4-2-15" tabindex="161" type="text" maxlength="11" name="sezione(entiLocali).riga[1].interiImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="Text158" tabindex="162" type="text" maxlength="2" size="2" name="sezione(entiLocali).riga[1].centImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
			<td><input class="dim80rg" id="f4-2-16" tabindex="163" type="text" maxlength="11" name="sezione(entiLocali).riga[1].interiImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="Text160" tabindex="164" type="text" maxlength="2" name="sezione(entiLocali).riga[1].centImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input class="dim30" id="f4-3-11" tabindex="165" type="text" maxlength="4" size="3" name="sezione(entiLocali).riga[2].codiceEnte" value="" onfocus="normalizeColor(this);" /></td>
			
				<td><input class="dim0" id="f4-3-17" type="checkbox" name="sezione(entiLocali).riga[2].ravvedimento" tabindex="167" value="1" /></td>
			
			
				<td><input class="dim0" id="f4-3-18" type="checkbox" name="sezione(entiLocali).riga[2].immobiliVariati" tabindex="169" value="1" /></td>
			
			
				<td><input class="dim0" id="f4-3-19" type="checkbox" name="sezione(entiLocali).riga[2].acconto" tabindex="171" value="1" /></td>
			
			
				<td><input class="dim0" id="f4-3-20" type="checkbox" name="sezione(entiLocali).riga[2].flagSaldo" tabindex="173" value="1" /></td>
			
			<td><input class="dim30" id="f4-3-21" tabindex="174" type="text" maxlength="3" name="sezione(entiLocali).riga[2].numeroImmobili" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
			<td><input class="dim30" id="f4-3-12" tabindex="175" type="text" maxlength="4" name="sezione(entiLocali).riga[2].codiceTributo" value="" onFocus="normalizeColor(this);" /></td>
			<td><input class="dim30" id="f4-3-13" tabindex="176" type="text" maxlength="4" name="sezione(entiLocali).riga[2].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);" onFocus="normalizeColor(this);" /></td>
			<td><input class="dim30" id="f4-3-14" tabindex="177" type="text" maxlength="4" name="sezione(entiLocali).riga[2].anno" onKeyPress="javascript: return onlyNumbers(event);" onChange="isAnno(this);" onFocus="normalizeColor(this);" value="" /></td>
			<td><input class="dim80rg" id="f4-3-15" tabindex="178" type="text" maxlength="11" name="sezione(entiLocali).riga[2].interiImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-3-15-bis" tabindex="179" type="text" maxlength="2" name="sezione(entiLocali).riga[2].centImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
			<td><input class="dim80rg" id="f4-3-16" tabindex="180" type="text" maxlength="11" name="sezione(entiLocali).riga[2].interiImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-3-16-bis" tabindex="181" type="text" maxlength="2" name="sezione(entiLocali).riga[2].centImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td><input class="dim30" id="f4-4-11" tabindex="182" type="text" maxlength="4" name="sezione(entiLocali).riga[3].codiceEnte" value="" onfocus="normalizeColor(this);" /></td>
			
				<td><input class="dim0" id="f4-4-17" type="checkbox" name="sezione(entiLocali).riga[3].ravvedimento" tabindex="184" value="1" /></td>
			
			
				<td><input class="dim0" id="f4-4-18" type="checkbox" name="sezione(entiLocali).riga[3].immobiliVariati" tabindex="186" value="1" /></td>
			
			
				<td><input class="dim0" id="f4-4-19" type="checkbox" name="sezione(entiLocali).riga[3].acconto" tabindex="188" value="1" /></td>
			
			
				<td><input class="dim0" id="f4-4-20" type="checkbox" name="sezione(entiLocali).riga[3].flagSaldo" tabindex="190" value="1" /></td>
			
			<td><input class="dim30" id="f4-4-21" tabindex="191" type="text" maxlength="3" name="sezione(entiLocali).riga[3].numeroImmobili" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
			<td><input class="dim30" id="f4-4-12" tabindex="192" type="text" maxlength="4" name="sezione(entiLocali).riga[3].codiceTributo" value="" onFocus="normalizeColor(this);" /></td>
			<td><input class="dim30" id="f4-4-13" tabindex="193" type="text" maxlength="4" name="sezione(entiLocali).riga[3].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);" onFocus="normalizeColor(this);" /></td>
			<td><input class="dim30" id="f4-4-14" tabindex="194" type="text" maxlength="4" name="sezione(entiLocali).riga[3].anno" onKeyPress="javascript: return onlyNumbers(event);" onChange="isAnno(this);" onFocus="normalizeColor(this);" value="" /></td>
			<td><input class="dim80rg" id="f4-4-15" tabindex="195" type="text" maxlength="11" name="sezione(entiLocali).riga[3].interiImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-4-15-bis" tabindex="196" type="text" maxlength="2" name="sezione(entiLocali).riga[3].centImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
			<td><input class="dim80rg" id="f4-4-16" tabindex="197" type="text" maxlength="11" name="sezione(entiLocali).riga[3].interiImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline">,</div><input id="f4-4-16-bis" tabindex="198" type="text" maxlength="2" name="sezione(entiLocali).riga[3].centImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		</tr>
		<tr>
			<td class="alright" colspan="9"><br />Totale</td>
			<td><div class="lettera">G</div><input class="dim80rg" id="f4-0-3" name="sezione(entiLocali).interiTotaleDebito" value="0" readonly="readonly" onFocus="this.blur();" type="text" maxlength="13" /><div class="virgola" style="display: inline">,</div><input id="f4-0-3-bis" name="sezione(entiLocali).centTotaleDebito" value="00" readonly="readonly" onFocus="this.blur();" type="text" maxlength="2" /></td>
			<td><div class="lettera">H</div><input class="dim80rg" id="f4-0-4" name="sezione(entiLocali).interiTotaleCredito" value="0" readonly="readonly" onFocus="this.blur();" type="text" maxlength="13" size="5" /><div class="virgola" style="display: inline">,</div><input id="f4-0-4-bis" name="sezione(entiLocali).centTotaleCredito" value="00" readonly="readonly" onFocus="this.blur();" type="text" maxlength="2" size="2" /></td>
			<td class="saldo"><span class="lettera">Saldo G-H</span><br><input class="dim80rg" id="f4-0-99" name="sezione(entiLocali).interiSaldo" value="0" readonly="readonly" onFocus="this.blur();" type="text" maxlength="13" /><div class="virgola" style="display: inline">,</div><input id="f4-0-99-bis" name="sezione(entiLocali).centSaldo" value="00" readonly="readonly" onFocus="this.blur();" type="text" maxlength="2" /></td>
		</tr>
		<tr>
			<td class="alleft" colspan="12">Detrazione<br /><input id="f4-0-5" name="sezione(entiLocali).interiDetrazioneIci" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" onBlur="makeDetrazioneIci();" value="0" tabindex="199" type="text" maxlength="13" /><div class="virgola" style="display: inline">,</div><input id="f4-0-5-bis" name="sezione(entiLocali).centDetrazioneIci" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" onBlur="makeDetrazioneIci();" value="00" tabindex="200" type="text" maxlength="2" /></td>
		</tr>
	</table>

				
		
					









	<table>	
		<tr>
			<th>SEZIONE ALTRI ENTI PREVIDENZIALI ED ASSICURATIVI</th>
		</tr>
	</table>

	<table id="altriEnti_hidden" style="display: none;" >		
		<tr >
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table class="enti" id="TableINAIL">
	<tr>
		<td class="en01" rowspan="4">INAIL</td>
		<td class="en02">codice<br />sede</td>
		<td class="en03">codice ditta<br />numero c.c.</td>
		<td class="en04">numero di<br />riferimento</td>
		<td class="en05">causale</td>
		<td class="er02">importi a debito<br />versati</td>
		<td class="er03">importi a credito<br />compensati</td>
		<td class="er04" rowspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td><input class="dim38" id="f5-1-1" tabindex="201" type="text" maxlength="5" name="sezione(inail).riga[0].codiceSede" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim49" id="f5-1-2" tabindex="202" type="text" maxlength="8" name="sezione(inail).riga[0].posAssNumero" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" />&nbsp;<input id="f5-1-2-bis" tabindex="203" type="text" maxlength="2" size="2" name="sezione(inail).riga[0].posAssCodCtl" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim49" id="f5-1-3" tabindex="207" type="text" maxlength="6" name="sezione(inail).riga[0].numRifer" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input id="f5-1-4" tabindex="208" type="text" maxlength="1" size="2" name="sezione(inail).riga[0].causale" value="" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f5-1-5" tabindex="209" type="text" maxlength="11" name="sezione(inail).riga[0].interiImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /><div class="virgola" style="display: inline">,</div><input id="f5-1-5-bis" tabindex="210" type="text" maxlength="2" size="2" name="sezione(inail).riga[0].centImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f5-1-6" tabindex="211" type="text" maxlength="11" name="sezione(inail).riga[0].interiImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /><div class="virgola" style="display: inline">,</div><input id="f5-1-6-bis" tabindex="212" type="text" maxlength="2" size="2" name="sezione(inail).riga[0].centImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim38" id="f5-2-1" tabindex="213" type="text" maxlength="5" size="3" name="sezione(inail).riga[1].codiceSede" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim49" id="f5-2-2" tabindex="214" type="text" maxlength="8" size="6" name="sezione(inail).riga[1].posAssNumero" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" />&nbsp;<input id="Text198" tabindex="215" type="text" maxlength="2" name="sezione(inail).riga[1].posAssCodCtl" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim49" id="f5-2-3" tabindex="216" type="text" maxlength="6"  name="sezione(inail).riga[1].numRifer" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input id="f5-2-4" tabindex="217" type="text" maxlength="1" size="2" name="sezione(inail).riga[1].causale" value="" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f5-2-5" tabindex="218" type="text" maxlength="11" name="sezione(inail).riga[1].interiImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /><div class="virgola" style="display: inline">,</div><input id="f5-2-5-bis" tabindex="219" type="text" maxlength="2" name="sezione(inail).riga[1].centImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f5-2-6" tabindex="220" type="text" maxlength="11" name="sezione(inail).riga[1].interiImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /><div class="virgola" style="display: inline">,</div><input id="f5-2-6-bis" tabindex="221" type="text" maxlength="2" name="sezione(inail).riga[1].centImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim38" id="f5-3-1" tabindex="222" type="text" maxlength="5" name="sezione(inail).riga[2].codiceSede" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim49" id="f5-3-2" tabindex="223" type="text" maxlength="8" name="sezione(inail).riga[2].posAssNumero" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" />&nbsp;<input id="Text207" tabindex="224" type="text" maxlength="2"  name="sezione(inail).riga[2].posAssCodCtl" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim49" id="f5-3-3" tabindex="225" type="text" maxlength="6" name="sezione(inail).riga[2].numRifer" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input id="f5-3-4" tabindex="226" type="text" maxlength="1" name="sezione(inail).riga[2].causale" value="" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f5-3-5" tabindex="227" type="text" maxlength="11" name="sezione(inail).riga[2].interiImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /><div class="virgola" style="display: inline">,</div><input id="f5-3-5-bis" tabindex="228" type="text" maxlength="2" name="sezione(inail).riga[2].centImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f5-3-6" tabindex="229" type="text" maxlength="11" name="sezione(inail).riga[2].interiImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /><div class="virgola" style="display: inline">,</div><input id="f5-3-6.bis" tabindex="230" type="text" maxlength="2" size="2" name="sezione(inail).riga[2].centImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="" onChange="updateTotali('inail'); blockOther(this);" onFocus="normalizeColor(this);" /></td>
	</tr>
	<tr>
		<td class="alright" colspan="5"><br /><b>Totale</td>
		<td><div class="lettera">I</div><input class="dim80rg" id="f5-0-1" name="sezione(inail).interiTotaleDebito" value="0" type="text" maxlength="13" readonly="readonly" onFocus="this.blur();" /><div class="virgola" style="display: inline">,</div><input id="f5.0.1.bis" name="sezione(inail).centTotaleDebito" value="00" type="text" maxlength="2" size="2" readonly="readonly" onFocus="this.blur();" /></td>
		<td><div class="lettera">L</div><input class="dim80rg" name="sezione(inail).interiTotaleCredito" value="0" readonly="readonly" onFocus="this.blur();" id="f5-0-2"  type="text" maxlength="13" /><div class="virgola" style="display: inline">,</div><input name="sezione(inail).centTotaleCredito" value="00" readonly="readonly" onFocus="this.blur();" id="f5-0-2-bis" type="text" maxlength="2" /></td>
		<td class="saldo"><span class="lettera">Saldo I-L</span><br><input class="dim80rg" name="sezione(inail).interiSaldo" value="0" readonly="readonly" onFocus="this.blur();" id="f5-0-98" type="text" maxlength="13" /><div class="virgola" style="display: inline">,</div><input name="sezione(inail).centSaldo" value="00" readonly="readonly" onFocus="this.blur();" id="f5-0-98-bis" type="text" maxlength="2" /></td>
	</tr>		
	</table>
	<table class="enti2" id="TableAltriEnti">
	<tr>
		<td class="en201" rowspan="2">codice<br />ente</td>
		<td class="en202" rowspan="2">codice<br />codice<br/>sede</td>
		<td class="en203" rowspan="2">causale<br/>contributo</td>
		<td class="en204" rowspan="2">codice<br />posizione</td>
		<td colspan="2">da<br />(mmaaaa)</td>			
		<td class="er02" rowspan="2">importi a debito<br />versati</td>
		<td class="er03" rowspan="2">importi a credito<br />compensati</td>
		<td class="er04" rowspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td>da<br />(mmaaaa)</td>
		<td>a<br />(mmaaaa)</td>
	</tr>		
	<tr>
		<td><input class="dim33" id="f5-0-5" name="sezione(altriEnti).codiceEnte" value="" onFocus="normalizeColor(this);" tabindex="236" type="text" maxlength="4" /></td>
		<td><input class="dim38" id="f5-1-10" name="sezione(altriEnti).riga[0].codiceSede" value="" tabindex="237" type="text" maxlength="5" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim33" id="f5-1-11" tabindex="238" type="text" maxlength="4" name="sezione(altriEnti).riga[0].causaleContributo" value="" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f5-1-12" tabindex="239" type="text" maxlength="9" name="sezione(altriEnti).riga[0].codicePosizione" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim44" id="f5-1-13" tabindex="240" type="text" maxlength="6" name="sezione(altriEnti).riga[0].inizioRiferimento" onKeyPress="javascript: return onlyNumbers(event);" onChange="isPeriodo(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim44" id="f5-1-14" tabindex="241" type="text" maxlength="6" size="5" name="sezione(altriEnti).riga[0].fineRiferimento" onKeyPress="javascript: return onlyNumbers(event);" onChange="isPeriodo(this);" onFocus="normalizeColor(this);" value="" /></td>				
		<td><input class="dim80rg" id="f5-1-15" tabindex="242" type="text" maxlength="11" name="sezione(altriEnti).riga[0].interiImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline"><div class="virgola" style="display: inline">,</div></div><input id="f5-1-15-bis" tabindex="243" type="text" maxlength="2" name="sezione(altriEnti).riga[0].centImportoDebito" onKeyPress="javascript: return onlyNumbers(event);"  value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		<td><input class="dim80rg" id="f5-1-16" tabindex="244" type="text" maxlength="11" name="sezione(altriEnti).riga[0].interiImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline"><div class="virgola" style="display: inline">,</div></div><input id="f5-1-16-bis" tabindex="245" type="text" maxlength="2" size="2" name="sezione(altriEnti).riga[0].centImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input class="dim38" id="f5-2-10" tabindex="246" type="text" maxlength="5" name="sezione(altriEnti).riga[1].codiceSede" value="" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim33" id="f5-2-11" tabindex="247" type="text" maxlength="4" name="sezione(altriEnti).riga[1].causaleContributo" value="" onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f5-2-12" tabindex="248" type="text" maxlength="9" size="6" name="sezione(altriEnti).riga[1].codicePosizione" onKeyPress="javascript: return onlyNumbers(event);" onChange="isReale(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim44" id="f5-2-13" tabindex="249" type="text" maxlength="6" name="sezione(altriEnti).riga[1].inizioRiferimento" onKeyPress="javascript: return onlyNumbers(event);" onChange="isPeriodo(this);" onFocus="normalizeColor(this);" value="" /></td>
		<td><input class="dim44" id="f5-2-14" tabindex="250" type="text" maxlength="6" name="sezione(altriEnti).riga[1].fineRiferimento" onKeyPress="javascript: return onlyNumbers(event);" onChange="isPeriodo(this);" onFocus="normalizeColor(this);" value="" /></td>			
		<td><input class="dim80rg" id="f5-2-15" tabindex="251" type="text" maxlength="11" name="sezione(altriEnti).riga[1].interiImportoDebito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline"><div class="virgola" style="display: inline">,</div></div><input id="f5-2-15-bis" tabindex="252" type="text" maxlength="2" name="sezione(altriEnti).riga[1].centImportoDebito" onKeyPress="javascript: return onlyNumbers(event);"  value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
		<td><input class="dim80rg" id="f5-2-16" tabindex="253" type="text" maxlength="11" name="sezione(altriEnti).riga[1].interiImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="0" onFocus="normalizeColor(this);" onChange="blockOther(this);" /><div class="virgola" style="display: inline"><div class="virgola" style="display: inline">,</div></div><input id="f5-2-16-bis" tabindex="254" type="text" maxlength="2" name="sezione(altriEnti).riga[1].centImportoCredito" onKeyPress="javascript: return onlyNumbers(event);" value="" onFocus="normalizeColor(this);" onChange="blockOther(this);" /></td>
	</tr>
	<tr>
		<td class="alright" colspan="6"><br />Totale</td>
		<td><div class="lettera">M</div><input class="dim80rg" name="sezione(altriEnti).interiTotaleDebito" readonly="readonly" onFocus="this.blur();" value="0" id="f5-0-3" type="text" maxlength="13" /><div class="virgola" style="display: inline"><div class="virgola" style="display: inline">,</div></div><input name="sezione(altriEnti).centTotaleDebito" value="00" readonly="readonly" onfocus="this.blur();" id="f5-0-3-bis" type="text" maxlength="2" /></td>
		<td><div class="lettera">N</div><input class="dim80rg" name="sezione(altriEnti).interiTotaleCredito" value="0" readonly="readonly" onFocus="this.blur();" id="f5-0-4" type="text" maxlength="13" /><div class="virgola" style="display: inline"><div class="virgola" style="display: inline">,</div></div><input name="sezione(altriEnti).centTotaleCredito" value="00" id="f5-0-4-bis" type="text" maxlength="2" readonly="readonly" onFocus="this.blur();" /></td>
		<td class="saldo"><span class="lettera">Saldo M-N</span><br><input class="dim80rg" name="sezione(altriEnti).interiSaldo" value="0" readonly="readonly" onFocus="this.blur();" id="f5-0-99" type="text" maxlength="13" /><div class="virgola" style="display: inline"><div class="virgola" style="display: inline">,</div></div><input name="sezione(altriEnti).centSaldo" value="00" readonly="readonly" onFocus="this.blur();" id="f5-0-99-bis" type="text" maxlength="2" /></td>
	</tr>		
	</table>


		
			

<table>
	<tbody>
		<tr>
			<th class="imu">MOTIVO DEL PAGAMENTO</th>
			<th class="alright">
				<span>IDENTIFICATIVO OPERAZIONE</span>
				<input class="dim150" id="f-0-23" type="text" maxlength="18" name="sezione(semplificato).ideOperazione" onfocus="normalizeColor(this);" 
					   value="">
			</th>
		</tr>
	</tbody>
</table>
<table id="semplificato_hidden" style="display: none;" >		
	<tr >
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table id="TableSemplificato" class="ici">

	
		<tr>
			<td class="">Sezione</td>
			<td class="">codice<br>Tributo</td>
			<td class="">cod.ente</td>
			<td class=""><span style="font: 8px Arial,sans-serif;">Ravv.</span></td>
			<td class=""><span style="font: 8px Arial,sans-serif;">immob.<br>variati</span></td>
			<td class=""><span style="font: 8px Arial,sans-serif;">Acc.</span></td>
			<td class=""><span style="font: 8px Arial,sans-serif;">Saldo</span></td>
			<td class="">num.<br>immob.</td>
			<td class="">rateaz.</td>
			<td class="">anno<br>(aaaa)</td>
			<td class="">detrazione</td>
			<td class="">importi a debito<br>versati</td>
			<td class="">importi a credito<br>compensati</td>
		</tr>
		
		
				
		<tr id="row1">
			<td>
				<input id="f-1-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[0].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-1-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[0].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-1-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[0].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-1-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[0].ravv" value="1">
			</td>
			<td>
				<input id="f-1-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[0].immvar" value="1">
			</td>
			<td>
				<input id="f-1-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[0].acc" value="1">		
			</td>
			<td>			
				<input id="f-1-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[0].saldo" value="1">
			</td>
			<td>
				<input id="f-1-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[0].numimm" value="">
			</td>
			<td>
				<input id="f-1-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[0].rateaz" value="">
			</td>	
			<td>
				<input id="f-1-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[0].anno" value="" >
			</td>
			<td>
				<input id="f-1-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[0].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-1-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[0].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-1-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[0].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-1-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[0].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-1-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[0].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-1-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[0].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
				
		<tr id="row2">
			<td>
				<input id="f-2-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[1].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-2-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[1].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-2-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[1].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-2-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[1].ravv" value="1">
			</td>
			<td>
				<input id="f-2-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[1].immvar" value="1">
			</td>
			<td>
				<input id="f-2-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[1].acc" value="1">		
			</td>
			<td>			
				<input id="f-2-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[1].saldo" value="1">
			</td>
			<td>
				<input id="f-2-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[1].numimm" value="">
			</td>
			<td>
				<input id="f-2-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[1].rateaz" value="">
			</td>	
			<td>
				<input id="f-2-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[1].anno" value="" >
			</td>
			<td>
				<input id="f-2-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[1].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-2-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[1].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-2-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[1].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-2-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[1].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-2-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[1].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-2-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[1].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
				
		<tr id="row3">
			<td>
				<input id="f-3-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[2].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-3-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[2].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-3-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[2].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-3-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[2].ravv" value="1">
			</td>
			<td>
				<input id="f-3-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[2].immvar" value="1">
			</td>
			<td>
				<input id="f-3-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[2].acc" value="1">		
			</td>
			<td>			
				<input id="f-3-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[2].saldo" value="1">
			</td>
			<td>
				<input id="f-3-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[2].numimm" value="">
			</td>
			<td>
				<input id="f-3-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[2].rateaz" value="">
			</td>	
			<td>
				<input id="f-3-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[2].anno" value="" >
			</td>
			<td>
				<input id="f-3-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[2].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-3-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[2].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-3-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[2].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-3-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[2].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-3-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[2].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-3-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[2].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
				
		<tr id="row4">
			<td>
				<input id="f-4-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[3].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-4-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[3].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-4-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[3].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-4-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[3].ravv" value="1">
			</td>
			<td>
				<input id="f-4-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[3].immvar" value="1">
			</td>
			<td>
				<input id="f-4-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[3].acc" value="1">		
			</td>
			<td>			
				<input id="f-4-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[3].saldo" value="1">
			</td>
			<td>
				<input id="f-4-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[3].numimm" value="">
			</td>
			<td>
				<input id="f-4-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[3].rateaz" value="">
			</td>	
			<td>
				<input id="f-4-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[3].anno" value="" >
			</td>
			<td>
				<input id="f-4-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[3].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-4-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[3].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-4-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[3].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-4-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[3].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-4-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[3].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-4-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[3].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
				
		<tr id="row5">
			<td>
				<input id="f-5-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[4].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-5-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[4].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-5-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[4].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-5-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[4].ravv" value="1">
			</td>
			<td>
				<input id="f-5-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[4].immvar" value="1">
			</td>
			<td>
				<input id="f-5-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[4].acc" value="1">		
			</td>
			<td>			
				<input id="f-5-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[4].saldo" value="1">
			</td>
			<td>
				<input id="f-5-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[4].numimm" value="">
			</td>
			<td>
				<input id="f-5-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[4].rateaz" value="">
			</td>	
			<td>
				<input id="f-5-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[4].anno" value="" >
			</td>
			<td>
				<input id="f-5-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[4].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-5-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[4].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-5-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[4].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-5-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[4].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-5-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[4].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-5-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[4].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
				
		<tr id="row6">
			<td>
				<input id="f-6-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[5].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-6-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[5].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-6-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[5].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-6-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[5].ravv" value="1">
			</td>
			<td>
				<input id="f-6-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[5].immvar" value="1">
			</td>
			<td>
				<input id="f-6-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[5].acc" value="1">		
			</td>
			<td>			
				<input id="f-6-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[5].saldo" value="1">
			</td>
			<td>
				<input id="f-6-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[5].numimm" value="">
			</td>
			<td>
				<input id="f-6-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[5].rateaz" value="">
			</td>	
			<td>
				<input id="f-6-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[5].anno" value="" >
			</td>
			<td>
				<input id="f-6-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[5].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-6-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[5].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-6-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[5].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-6-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[5].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-6-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[5].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-6-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[5].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
				
		<tr id="row7">
			<td>
				<input id="f-7-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[6].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-7-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[6].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-7-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[6].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-7-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[6].ravv" value="1">
			</td>
			<td>
				<input id="f-7-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[6].immvar" value="1">
			</td>
			<td>
				<input id="f-7-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[6].acc" value="1">		
			</td>
			<td>			
				<input id="f-7-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[6].saldo" value="1">
			</td>
			<td>
				<input id="f-7-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[6].numimm" value="">
			</td>
			<td>
				<input id="f-7-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[6].rateaz" value="">
			</td>	
			<td>
				<input id="f-7-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[6].anno" value="" >
			</td>
			<td>
				<input id="f-7-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[6].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-7-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[6].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-7-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[6].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-7-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[6].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-7-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[6].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-7-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[6].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
				
		<tr id="row8">
			<td>
				<input id="f-8-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[7].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-8-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[7].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-8-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[7].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-8-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[7].ravv" value="1">
			</td>
			<td>
				<input id="f-8-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[7].immvar" value="1">
			</td>
			<td>
				<input id="f-8-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[7].acc" value="1">		
			</td>
			<td>			
				<input id="f-8-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[7].saldo" value="1">
			</td>
			<td>
				<input id="f-8-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[7].numimm" value="">
			</td>
			<td>
				<input id="f-8-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[7].rateaz" value="">
			</td>	
			<td>
				<input id="f-8-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[7].anno" value="" >
			</td>
			<td>
				<input id="f-8-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[7].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-8-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[7].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-8-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[7].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-8-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[7].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-8-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[7].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-8-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[7].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
				
		<tr id="row9">
			<td>
				<input id="f-9-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[8].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-9-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[8].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-9-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[8].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-9-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[8].ravv" value="1">
			</td>
			<td>
				<input id="f-9-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[8].immvar" value="1">
			</td>
			<td>
				<input id="f-9-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[8].acc" value="1">		
			</td>
			<td>			
				<input id="f-9-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[8].saldo" value="1">
			</td>
			<td>
				<input id="f-9-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[8].numimm" value="">
			</td>
			<td>
				<input id="f-9-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[8].rateaz" value="">
			</td>	
			<td>
				<input id="f-9-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[8].anno" value="" >
			</td>
			<td>
				<input id="f-9-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[8].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-9-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[8].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-9-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[8].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-9-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[8].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-9-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[8].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-9-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[8].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
				
		<tr id="row10">
			<td>
				<input id="f-10-0" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[9].codsezione" 
				maxlength="2" tabindex="" value="">
			</td>
			<td>
				<input id="f-10-1" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[9].tributo" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-10-8" class="dim30" type="text" onfocus="normalizeColor(this);" name="sezione(semplificato).riga[9].ente" 
				maxlength="4" tabindex="" value="">
			</td>
			<td>
				<input id="f-10-17" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[9].ravv" value="1">
			</td>
			<td>
				<input id="f-10-18" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[9].immvar" value="1">
			</td>
			<td>
				<input id="f-10-19" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[9].acc" value="1">		
			</td>
			<td>			
				<input id="f-10-20" class="dim0" type="checkbox"  tabindex="" name="sezione(semplificato).riga[9].saldo" value="1">
			</td>
			<td>
				<input id="f-10-11" class="dim26rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="3" tabindex="" 
				name="sezione(semplificato).riga[9].numimm" value="">
			</td>
			<td>
				<input id="f-10-2" class="dim30" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);"  maxlength="4" tabindex="" 
				name="sezione(semplificato).riga[9].rateaz" value="">
			</td>	
			<td>
				<input id="f-10-3" class="dim30" type="text" onfocus="normalizeColor(this);" onchange="isAnno(this);" onkeypress="javascript: return onlyNumbers(event);" maxlength="4" tabindex=""  
				name="sezione(semplificato).riga[9].anno" value="" >
			</td>
			<td>
				<input id="f-10-22" class="dim54rg" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[9].intDetrazione" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-10-22-bis" type="text" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[9].centDetrazione" maxlength="2" tabindex="" 
				style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-10-4" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[9].interiImportoDebito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-10-4-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[9].centImportoDebito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>
			<td>
				<input id="f-10-5" class="dim80rg" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[9].interiImportoCredito" 
				size="6" maxlength="11" tabindex="" style="background-color: rgb(255, 255, 255);" value="0">
					<div class="virgola" style="display: inline;">,</div>
				<input id="f-10-5-bis" type="text" onchange="blockOther(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" name="sezione(semplificato).riga[9].centImportoCredito" 
				maxlength="2" tabindex="" style="background-color: rgb(255, 255, 255);" value="">
			</td>		
		</tr>
	
		
			
		<tr>
			<td class="alleft" colspan="2">codice ufficio<br>
				<input id="f-0-6" class="dim34" type="text" onfocus="normalizeColor(this);" maxlength="3" tabindex="61" name="sezione(semplificato).codiceUfficio" value="">
			</td>
			<td class="alleft" colspan="11">codice atto<br>
				<input id="f-0-7" class="dim86" type="text" maxlength="11" tabindex="62" onkeypress="javascript: return onlyNumbers(event);" onfocus="normalizeColor(this);" name="sezione(semplificato).codiceAtto" value="">
			</td>
		</tr>			

</table>




<table>	
	<tr>
		<th>SEZIONE ACCISE/MONOPOLI ED ALTRI VERSAMENTI NON AMMESSI IN COMPENSAZIONE</th>
	</tr>
</table>
<table id="accise_hidden" style="display: none;" >		
	<tr >
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table class="accise" id="TableAccise">
	<tr>
		<td class="ac01">ente</td>
		<td class="ac02">prov.</td>
		<td class="ac03">codice<br />tributo</td>
		<td class="ac04">codice<br />identificativo</td>
		<td class="ac05">rateazione</td>
		<td class="ac05">periodo<br />di riferimento<br />(mmaaaa)</td>
		<td class="er02">importi a debito<br />versati</td>
		<td class="er03" rowspan="8">&nbsp;</td>
		<td class="er04" rowspan="8">&nbsp;</td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-1-1" tabindex="255" type="text" maxlength="2" name="sezione(accise).riga[0].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-1-2" tabindex="256" type="text" maxlength="2" name="sezione(accise).riga[0].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-1-3" tabindex="257" type="text" maxlength="4" name="sezione(accise).riga[0].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-1-4" tabindex="258" type="text" maxlength="14" name="sezione(accise).riga[0].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-1-9" tabindex="259" type="text" maxlength="4"  name="sezione(accise).riga[0].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-1-5" tabindex="259" type="text" maxlength="6"  name="sezione(accise).riga[0].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-1-7" tabindex="260" type="text" maxlength="11" name="sezione(accise).riga[0].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-1-7-bis" tabindex="261" type="text" maxlength="2" name="sezione(accise).riga[0].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-2-1" tabindex="262" type="text" maxlength="2" size="3" name="sezione(accise).riga[1].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-2-2" tabindex="263" type="text" maxlength="2" name="sezione(accise).riga[1].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-2-3" tabindex="264" type="text" maxlength="4" name="sezione(accise).riga[1].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-2-4" tabindex="265" type="text" maxlength="14" name="sezione(accise).riga[1].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-2-9" tabindex="266" type="text" maxlength="4"  name="sezione(accise).riga[1].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-2-5" tabindex="266" type="text" maxlength="6" name="sezione(accise).riga[1].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-2-7" tabindex="267" type="text" maxlength="11" name="sezione(accise).riga[1].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-2-7-bis" tabindex="268" type="text" maxlength="2" name="sezione(accise).riga[1].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-3-1" tabindex="268" type="text" maxlength="2" name="sezione(accise).riga[2].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-3-2" tabindex="269" type="text" maxlength="2" name="sezione(accise).riga[2].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-3-3" tabindex="270" type="text" maxlength="4" name="sezione(accise).riga[2].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-3-4" tabindex="271" type="text" maxlength="14" name="sezione(accise).riga[2].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-3-9" tabindex="272" type="text" maxlength="4"  name="sezione(accise).riga[2].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-3-5" tabindex="272" type="text" maxlength="6" name="sezione(accise).riga[2].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-3-7" tabindex="273" type="text" maxlength="11" name="sezione(accise).riga[2].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-3-7-bis" tabindex="274" type="text" maxlength="2" size="2" name="sezione(accise).riga[2].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-4-1" tabindex="275" type="text" maxlength="2" name="sezione(accise).riga[3].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-4-2" tabindex="276" type="text" maxlength="2" name="sezione(accise).riga[3].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-4-3" tabindex="277" type="text" maxlength="4" name="sezione(accise).riga[3].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-4-4" tabindex="278" type="text" maxlength="14" name="sezione(accise).riga[3].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-4-9" tabindex="279" type="text" maxlength="4"  name="sezione(accise).riga[3].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-4-5" tabindex="279" type="text" maxlength="6" name="sezione(accise).riga[3].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-4-7" tabindex="280" type="text" maxlength="11" name="sezione(accise).riga[3].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-4-7-bis" tabindex="281" type="text" maxlength="2" name="sezione(accise).riga[3].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-5-1" tabindex="282" type="text" maxlength="2" name="sezione(accise).riga[4].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-5-2" tabindex="283" type="text" maxlength="2" name="sezione(accise).riga[4].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-5-3" tabindex="284" type="text" maxlength="4" name="sezione(accise).riga[4].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-5-4" tabindex="285" type="text" maxlength="14" name="sezione(accise).riga[4].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-5-9" tabindex="286" type="text" maxlength="4"  name="sezione(accise).riga[4].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-5-5" tabindex="286" type="text" maxlength="6" name="sezione(accise).riga[4].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-5-7" tabindex="287" type="text" maxlength="11" name="sezione(accise).riga[4].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-5-7-bis" tabindex="288" type="text" maxlength="2" size="2" name="sezione(accise).riga[4].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-6-1" tabindex="289" type="text" maxlength="2" name="sezione(accise).riga[5].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-6-2" tabindex="290" type="text" maxlength="2" name="sezione(accise).riga[5].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-6-3" tabindex="291" type="text" maxlength="4" name="sezione(accise).riga[5].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-6-4" tabindex="292" type="text" maxlength="14" name="sezione(accise).riga[5].codiceIdentificativo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-6-9" tabindex="293" type="text" maxlength="4"  name="sezione(accise).riga[5].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-6-5" tabindex="293" type="text" maxlength="6" name="sezione(accise).riga[5].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-6-7" tabindex="294" type="text" maxlength="11" name="sezione(accise).riga[5].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-6-7-bis" tabindex="295" type="text" maxlength="2" name="sezione(accise).riga[5].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>
		<td><input class="dim24" id="f6-7-1" tabindex="296" type="text" maxlength="2" name="sezione(accise).riga[6].codiceEnte" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-7-2" tabindex="297" type="text" maxlength="2" name="sezione(accise).riga[6].provincia" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim24" id="f6-7-3" tabindex="298" type="text" maxlength="4" name="sezione(accise).riga[6].codiceTributo" value=""  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim49" id="f6-7-4" tabindex="299" type="text" maxlength="14" name="sezione(accise).riga[6].codiceIdentificativo" value=""   onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-7-9" tabindex="300" type="text" maxlength="4"  name="sezione(accise).riga[6].rateazione" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim34" id="f6-7-5" tabindex="300" type="text" maxlength="6" name="sezione(accise).riga[6].periodoRiferimento" value="" onKeyPress="javascript: return onlyNumbers(event);"  onFocus="normalizeColor(this);" /></td>
		<td><input class="dim80rg" id="f6-7-7" tabindex="301" type="text" maxlength="11" name="sezione(accise).riga[6].interiImportoDebito" value="0" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f6-7-7-bis" tabindex="302" type="text" maxlength="2" name="sezione(accise).riga[6].centImportoDebito" value="" onKeyPress="javascript: return onlyNumbers(event);"  onChange="updateTotaliDebito('accise'); BlockOtherElAcc(this);" /></td>
	</tr>
	<tr>		
		<td class="alright" colspan="6"><br />Totale</td>
		<td><div class="lettera">O</div><input class="dim80rg" name="sezione(accise).interiTotaleDebito" value="0" readonly="readonly" onFocus="this.blur();" id="f6-0-1" type="text" maxlength="13" /><div class="virgola" style="display: inline">,</div><input name="sezione(accise).centTotaleDebito" value="00" readonly="readonly" onFocus="this.blur();" id="f6-0-1-bis"  type="text" maxlength="2" /></td>
		<td>&nbsp;</td>
		<td class="saldo"><span class="lettera">Saldo O</span><br><input class="dim80rg" name="sezione(accise).interiSaldo" value="0" readonly="readonly" onFocus="this.blur();" id="f6-0-99" type="text" maxlength="13" /><div class="virgola" style="display: inline">,</div><input name="sezione(accise).centSaldo" value="00" readonly="readonly" onFocus="this.blur();" id="f6-0-99-bis" type="text" maxlength="2" /></td>
	</tr>
<!-- Campi codice atto e ufficio specifici per accise, NB: devono assolutamente essere alternativi all'utilizzo di quelli dell'erario -->	
	<tr>
		<td class="alleft" colspan="2">codice ufficio<br><input name="sezione(accise).codiceUfficio" value="" id="f2-0-3" tabindex="61" maxlength="3" onfocus="normalizeColor(this);" onkeyup="checkCodAttoUfficio('accise', this);" type="text"></td>
		<td class="alleft" colspan="7">codice atto<br><input name="sezione(accise).codiceAtto" value="" onchange="isReale(this); checkCodAttoUfficio('accise', this);" onfocus="normalizeColor(this);" onkeyup="javascript: return onlyNumbers(event);" id="f2-0-4" tabindex="62" maxlength="11" type="text"></td>
	</tr>
</table>



<table>	
	<tr>
		<th>SEZIONE ERARIO ED ALTRO</th>
	</tr>
</table>
<table id="TableErarioMotori" class="erimm">
		<tr>
			<td class="alleft">codice ufficio<br /><input name="sezione(erario).codiceUfficio" value="" id="f2-0-3"  tabindex="61" type="text" maxlength="3" onfocus="normalizeColor(this);" /></td>
			<td class="alleft" colspan="5">codice atto<br /><input name="sezione(erario).codiceAtto" value="" onchange="isReale(this);" onfocus="normalizeColor(this);" onkeypress="javascript: return onlyNumbers(event);" id="f2-0-4" tabindex="62" type="text" maxlength="11" /></td>
		</tr>
		<tr>
			<td class="erimm01">tipo</td>
			<td class="erimm02">elementi identificativi</td>
			<td class="erimm03">codice tributo</td>
			<td class="erimm04">anno di riferimento</td>
			<td class="erimm05">importi a debito<br>versati</td>
		</tr>
		<tr>
			<td><input id="f2-1-1-m" tabindex="63" type="text" maxlength="1" name="sezione(immatricolazioni).riga[0].tipoVeicolo" value=""  value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-1-2-m" tabindex="64" type="text" maxlength="17" name="sezione(immatricolazioni).riga[0].telaio" value=""   onfocus="normalizeColor(this);" onkeypress="javascript: return noSpecialKeys(event);" /></td>
			<td><input class="dim24" id="f2-1-3-m" tabindex="65" type="text" maxlength="4" name="sezione(immatricolazioni).riga[0].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-1-4-m" tabindex="66" type="text" maxlength="4" name="sezione(immatricolazioni).riga[0].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>																				   	 
			<td><input class="dim80rg" id="f2-1-5-m" tabindex="67" type="text" maxlength="11" name="sezione(immatricolazioni).riga[0].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-1-5-m-bis" tabindex="68" type="text" maxlength="2" name="sezione(immatricolazioni).riga[0].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-2-1-m" tabindex="69" type="text" maxlength="1" name="sezione(immatricolazioni).riga[1].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-2-2-m" tabindex="70" type="text" maxlength="17" name="sezione(immatricolazioni).riga[1].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-2-3-m" tabindex="71" type="text" maxlength="4" name="sezione(immatricolazioni).riga[1].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-2-4-m" tabindex="72" type="text" maxlength="4" name="sezione(immatricolazioni).riga[1].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-2-5-m" tabindex="73" type="text" maxlength="11" name="sezione(immatricolazioni).riga[1].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-2-5-m-bis" tabindex="74" type="text" maxlength="2" name="sezione(immatricolazioni).riga[1].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-3-1-m" tabindex="75" type="text" maxlength="1" name="sezione(immatricolazioni).riga[2].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-3-2-m" tabindex="76" type="text" maxlength="17" name="sezione(immatricolazioni).riga[2].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-3-3-m" tabindex="77" type="text" maxlength="4" name="sezione(immatricolazioni).riga[2].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-3-4-m" tabindex="78" type="text" maxlength="4" name="sezione(immatricolazioni).riga[2].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-3-5-m" tabindex="79" type="text" maxlength="11" name="sezione(immatricolazioni).riga[2].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-3-5-m-bis" tabindex="80" type="text" maxlength="2" name="sezione(immatricolazioni).riga[2].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-4-1-m" tabindex="81" type="text" maxlength="1" name="sezione(immatricolazioni).riga[3].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-4-2-m" tabindex="82" type="text" maxlength="17" name="sezione(immatricolazioni).riga[3].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-4-3-m" tabindex="83" type="text" maxlength="4" name="sezione(immatricolazioni).riga[3].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-4-4-m" tabindex="84" type="text" maxlength="4" name="sezione(immatricolazioni).riga[3].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-4-5-m" tabindex="85" type="text" maxlength="11" name="sezione(immatricolazioni).riga[3].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-4-5-m-bis" tabindex="86" type="text" maxlength="2" name="sezione(immatricolazioni).riga[3].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-5-1-m" tabindex="87" type="text" maxlength="1" name="sezione(immatricolazioni).riga[4].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-5-2-m" tabindex="88" type="text" maxlength="17" name="sezione(immatricolazioni).riga[4].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-5-3-m" tabindex="89" type="text" maxlength="4" name="sezione(immatricolazioni).riga[4].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-5-4-m" tabindex="90" type="text" maxlength="4" name="sezione(immatricolazioni).riga[4].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" />
			</td>				
			<td><input class="dim80rg" id="f2-5-5-m" tabindex="91" type="text" maxlength="11" name="sezione(immatricolazioni).riga[4].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input class="CBXnuovo" id="f2-5-5-m-bis" tabindex="92" type="text" maxlength="2" name="sezione(immatricolazioni).riga[4].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-6-1-m" tabindex="93" type="text" maxlength="1" name="sezione(immatricolazioni).riga[5].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-6-2-m" tabindex="94" type="text" maxlength="17" name="sezione(immatricolazioni).riga[5].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-6-3-m" tabindex="95" type="text" maxlength="4" name="sezione(immatricolazioni).riga[5].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-6-4-m" tabindex="96" type="text" maxlength="4" name="sezione(immatricolazioni).riga[5].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-6-5-m" tabindex="97" type="text" maxlength="11" name="sezione(immatricolazioni).riga[5].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-6-5-m-bis" tabindex="98" type="text" maxlength="2" name="sezione(immatricolazioni).riga[5].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-7-1-m" tabindex="99" type="text" maxlength="1" name="sezione(immatricolazioni).riga[6].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-7-2-m" tabindex="100" type="text" maxlength="17" name="sezione(immatricolazioni).riga[6].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-7-3-m" tabindex="101" type="text" maxlength="4" name="sezione(immatricolazioni).riga[6].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-7-4-m" tabindex="102" type="text" maxlength="4" name="sezione(immatricolazioni).riga[6].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-7-5-m" tabindex="103" type="text" maxlength="11" name="sezione(immatricolazioni).riga[6].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-7-5-m-bis" tabindex="104" type="text" maxlength="2" name="sezione(immatricolazioni).riga[6].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-8-1-m" tabindex="105" type="text" maxlength="1" name="sezione(immatricolazioni).riga[7].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-8-2-m" tabindex="106" type="text" maxlength="17" name="sezione(immatricolazioni).riga[7].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-8-3-m" tabindex="107" type="text" maxlength="4" name="sezione(immatricolazioni).riga[7].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-8-4-m" tabindex="108" type="text" maxlength="4" name="sezione(immatricolazioni).riga[7].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-8-5-m" tabindex="109" type="text" maxlength="11" name="sezione(immatricolazioni).riga[7].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-8-5-m-bis" tabindex="109" type="text" maxlength="2" name="sezione(immatricolazioni).riga[7].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-9-1-m" tabindex="110" type="text" maxlength="1" name="sezione(immatricolazioni).riga[8].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-9-2-m" tabindex="111" type="text" maxlength="17" name="sezione(immatricolazioni).riga[8].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-9-3-m" tabindex="112" type="text" maxlength="4" name="sezione(immatricolazioni).riga[8].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-9-4-m" tabindex="113" type="text" maxlength="4" name="sezione(immatricolazioni).riga[8].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-9-5-m" tabindex="114" type="text" maxlength="11" name="sezione(immatricolazioni).riga[8].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-9-5-m-bis" tabindex="114" type="text" maxlength="2" name="sezione(immatricolazioni).riga[8].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-10-1-m" tabindex="115" type="text" maxlength="1" name="sezione(immatricolazioni).riga[9].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-10-2-m" tabindex="116" type="text" maxlength="17" name="sezione(immatricolazioni).riga[9].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-10-3-m" tabindex="117" type="text" maxlength="4" name="sezione(immatricolazioni).riga[9].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-10-4-m" tabindex="118" type="text" maxlength="4" name="sezione(immatricolazioni).riga[9].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-10-5-m" tabindex="119" type="text" maxlength="11" name="sezione(immatricolazioni).riga[9].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-10-5-m-bis" tabindex="120" type="text" maxlength="2"  name="sezione(immatricolazioni).riga[9].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-11-1-m" tabindex="121" type="text" maxlength="1" name="sezione(immatricolazioni).riga[10].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-11-2-m" tabindex="122" type="text" maxlength="17" name="sezione(immatricolazioni).riga[10].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-11-3-m" tabindex="123" type="text" maxlength="4" name="sezione(immatricolazioni).riga[10].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-11-4-m" tabindex="124" type="text" maxlength="4" name="sezione(immatricolazioni).riga[10].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-11-5-m" tabindex="125" type="text" maxlength="11" name="sezione(immatricolazioni).riga[10].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-11-5-m-bis" tabindex="126" type="text" maxlength="2" name="sezione(immatricolazioni).riga[10].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-12-1-m" tabindex="127" type="text" maxlength="1" name="sezione(immatricolazioni).riga[11].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-12-2-m" tabindex="128" type="text" maxlength="17" name="sezione(immatricolazioni).riga[11].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-12-3-m" tabindex="129" type="text" maxlength="4" name="sezione(immatricolazioni).riga[11].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-12-4-m" tabindex="130" type="text" maxlength="4" name="sezione(immatricolazioni).riga[11].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-12-5-m" tabindex="131" type="text" maxlength="11" name="sezione(immatricolazioni).riga[11].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-12-5-m-bis" tabindex="132" type="text" maxlength="2" name="sezione(immatricolazioni).riga[11].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-13-1-m" tabindex="133" type="text" maxlength="1" name="sezione(immatricolazioni).riga[12].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-13-2-m" tabindex="134" type="text" maxlength="17" name="sezione(immatricolazioni).riga[12].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-13-3-m" tabindex="135" type="text" maxlength="4" name="sezione(immatricolazioni).riga[12].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-13-4-m" tabindex="136" type="text" maxlength="4" name="sezione(immatricolazioni).riga[12].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-13-5-m" tabindex="137" type="text" maxlength="11" name="sezione(immatricolazioni).riga[12].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-13-5-m-bis" tabindex="138" type="text" maxlength="2" name="sezione(immatricolazioni).riga[12].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-14-1-m" tabindex="139" type="text" maxlength="1" name="sezione(immatricolazioni).riga[13].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-14-2-m" tabindex="140" type="text" maxlength="17" name="sezione(immatricolazioni).riga[13].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-14-3-m" tabindex="141" type="text" maxlength="4" name="sezione(immatricolazioni).riga[13].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-14-4-m" tabindex="142" type="text" maxlength="4" name="sezione(immatricolazioni).riga[13].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-14-5-m" tabindex="143" type="text" maxlength="11" name="sezione(immatricolazioni).riga[13].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-14-5-m-bis" tabindex="143" type="text" maxlength="2" name="sezione(immatricolazioni).riga[13].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-15-1-m" tabindex="144" type="text" maxlength="1" name="sezione(immatricolazioni).riga[14].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-15-2-m" tabindex="145" type="text" maxlength="17" name="sezione(immatricolazioni).riga[14].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-15-3-m" tabindex="146" type="text" maxlength="4" name="sezione(immatricolazioni).riga[14].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-15-4-m" tabindex="147" type="text" maxlength="4" name="sezione(immatricolazioni).riga[14].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-15-5-m" tabindex="148" type="text" maxlength="11" name="sezione(immatricolazioni).riga[14].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-15-5-m-bis" tabindex="149" type="text" maxlength="2" name="sezione(immatricolazioni).riga[14].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-16-1-m" tabindex="150" type="text" maxlength="1" name="sezione(immatricolazioni).riga[15].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-16-2-m" tabindex="151" type="text" maxlength="17" name="sezione(immatricolazioni).riga[15].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-16-3-m" tabindex="152" type="text" maxlength="4" name="sezione(immatricolazioni).riga[15].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-16-4-m" tabindex="153" type="text" maxlength="4" name="sezione(immatricolazioni).riga[15].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-16-5-m" tabindex="154" type="text" maxlength="11" name="sezione(immatricolazioni).riga[15].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-16-5-m-bis" tabindex="155" type="text" maxlength="2" name="sezione(immatricolazioni).riga[15].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-17-1-m" tabindex="156" type="text" maxlength="1" name="sezione(immatricolazioni).riga[16].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-17-2-m" tabindex="157" type="text" maxlength="17" name="sezione(immatricolazioni).riga[16].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-17-3-m" tabindex="158" type="text" maxlength="4" name="sezione(immatricolazioni).riga[16].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-17-4-m" tabindex="159" type="text" maxlength="4" name="sezione(immatricolazioni).riga[16].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-17-5-m" tabindex="160" type="text" maxlength="11" name="sezione(immatricolazioni).riga[16].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-17-5-m-bis" tabindex="161" type="text" maxlength="2" name="sezione(immatricolazioni).riga[16].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-18-1-m" tabindex="162" type="text" maxlength="1" name="sezione(immatricolazioni).riga[17].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-18-2-m" tabindex="163" type="text" maxlength="17" name="sezione(immatricolazioni).riga[17].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-18-3-m" tabindex="164" type="text" maxlength="4" name="sezione(immatricolazioni).riga[17].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-18-4-m" tabindex="165" type="text" maxlength="4" name="sezione(immatricolazioni).riga[17].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-18-5-m" tabindex="166" type="text" maxlength="11" name="sezione(immatricolazioni).riga[17].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-18-5-m-bis" tabindex="167" type="text" maxlength="2" name="sezione(immatricolazioni).riga[17].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-19-1-m" tabindex="168" type="text" maxlength="1" name="sezione(immatricolazioni).riga[18].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-19-2-m" tabindex="169" type="text" maxlength="17" name="sezione(immatricolazioni).riga[18].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-19-3-m" tabindex="170" type="text" maxlength="4" name="sezione(immatricolazioni).riga[18].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-19-4-m" tabindex="171" type="text" maxlength="4" name="sezione(immatricolazioni).riga[18].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-19-5-m" tabindex="172" type="text" maxlength="11" name="sezione(immatricolazioni).riga[18].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-19-5-m-bis" tabindex="173" type="text" maxlength="2" name="sezione(immatricolazioni).riga[18].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-20-1-m" tabindex="174" type="text" maxlength="1" name="sezione(immatricolazioni).riga[19].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-20-2-m" tabindex="175" type="text" maxlength="17" name="sezione(immatricolazioni).riga[19].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-20-3-m" tabindex="176" type="text" maxlength="4" name="sezione(immatricolazioni).riga[19].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-20-4-m" tabindex="177" type="text" maxlength="4" name="sezione(immatricolazioni).riga[19].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-20-5-m" tabindex="178" type="text" maxlength="11" name="sezione(immatricolazioni).riga[19].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-20-5-m-bis" tabindex="179" type="text" maxlength="2" name="sezione(immatricolazioni).riga[19].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>
		<tr>
			<td><input id="f2-21-1-m" tabindex="180" type="text" maxlength="1" name="sezione(immatricolazioni).riga[20].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-21-2-m" tabindex="181" type="text" maxlength="17" name="sezione(immatricolazioni).riga[20].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-21-3-m" tabindex="182" type="text" maxlength="4" name="sezione(immatricolazioni).riga[20].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-21-4-m" tabindex="183" type="text" maxlength="4" name="sezione(immatricolazioni).riga[20].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-21-5-m" tabindex="184" type="text" maxlength="11" name="sezione(immatricolazioni).riga[20].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-21-5-m-bis" tabindex="185" type="text" maxlength="2" name="sezione(immatricolazioni).riga[20].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-22-1-m" tabindex="186" type="text" maxlength="1" name="sezione(immatricolazioni).riga[21].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-22-2-m" tabindex="187" type="text" maxlength="17" name="sezione(immatricolazioni).riga[21].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-22-3-m" tabindex="188" type="text" maxlength="4" name="sezione(immatricolazioni).riga[21].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-22-4-m" tabindex="189" type="text" maxlength="4" name="sezione(immatricolazioni).riga[21].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-22-5-m" tabindex="190" type="text" maxlength="11" name="sezione(immatricolazioni).riga[21].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-22-5-m-bis" tabindex="191" type="text" maxlength="2" name="sezione(immatricolazioni).riga[21].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-23-1-m" tabindex="192" type="text" maxlength="1" name="sezione(immatricolazioni).riga[22].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-23-2-m" tabindex="193" type="text" maxlength="17" name="sezione(immatricolazioni).riga[22].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-23-3-m" tabindex="194" type="text" maxlength="4" name="sezione(immatricolazioni).riga[22].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-23-4-m" tabindex="195" type="text" maxlength="4" name="sezione(immatricolazioni).riga[22].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-23-5-m" tabindex="196" type="text" maxlength="11" name="sezione(immatricolazioni).riga[22].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-23-5-m-bis" tabindex="197" type="text" maxlength="2" name="sezione(immatricolazioni).riga[22].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-24-1-m" tabindex="198" type="text" maxlength="1" name="sezione(immatricolazioni).riga[23].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-24-2-m" tabindex="199" type="text" maxlength="17" name="sezione(immatricolazioni).riga[23].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-24-3-m" tabindex="200" type="text" maxlength="4" name="sezione(immatricolazioni).riga[23].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-24-4-m" tabindex="201" type="text" maxlength="4" name="sezione(immatricolazioni).riga[23].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-24-5-m" tabindex="202" type="text" maxlength="11" name="sezione(immatricolazioni).riga[23].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-24-5-m-bis" tabindex="203" type="text" maxlength="2" name="sezione(immatricolazioni).riga[23].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-25-1-m" tabindex="204" type="text" maxlength="1" name="sezione(immatricolazioni).riga[24].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-25-2-m" tabindex="205" type="text" maxlength="17" name="sezione(immatricolazioni).riga[24].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-25-3-m" tabindex="206" type="text" maxlength="4" name="sezione(immatricolazioni).riga[24].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-25-4-m" tabindex="207" type="text" maxlength="4" name="sezione(immatricolazioni).riga[24].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-25-5-m" tabindex="208" type="text" maxlength="11" name="sezione(immatricolazioni).riga[24].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-25-5-m-bis" tabindex="208" type="text" maxlength="2" name="sezione(immatricolazioni).riga[24].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-26-1-m" tabindex="209" type="text" maxlength="1" name="sezione(immatricolazioni).riga[25].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-26-2-m" tabindex="210" type="text" maxlength="17" name="sezione(immatricolazioni).riga[25].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-26-3-m" tabindex="211" type="text" maxlength="4" name="sezione(immatricolazioni).riga[25].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-26-4-m" tabindex="212" type="text" maxlength="4" name="sezione(immatricolazioni).riga[25].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-26-5-m" tabindex="213" type="text" maxlength="11" name="sezione(immatricolazioni).riga[25].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-26-5-m-bis" tabindex="214" type="text" maxlength="2" name="sezione(immatricolazioni).riga[25].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-27-1-m" tabindex="215" type="text" maxlength="1" name="sezione(immatricolazioni).riga[26].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-27-2-m" tabindex="216" type="text" maxlength="17" name="sezione(immatricolazioni).riga[26].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-27-3-m" tabindex="217" type="text" maxlength="4" name="sezione(immatricolazioni).riga[26].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-27-4-m" tabindex="218" type="text" maxlength="4" name="sezione(immatricolazioni).riga[26].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-27-5-m" tabindex="219" type="text" maxlength="11" name="sezione(immatricolazioni).riga[26].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-27-5-m-bis" tabindex="220" type="text" maxlength="2" name="sezione(immatricolazioni).riga[26].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>
			<td><input id="f2-28-1-m" tabindex="221" type="text" maxlength="1" name="sezione(immatricolazioni).riga[27].tipoVeicolo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim150" id="f2-28-2-m" tabindex="222" type="text" maxlength="17" name="sezione(immatricolazioni).riga[27].telaio" value=""  onkeypress="javascript: return noSpecialKeys(event);"  onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-28-3-m" tabindex="223" type="text" maxlength="4" name="sezione(immatricolazioni).riga[27].codiceTributo" value=""   onfocus="normalizeColor(this);" /></td>
			<td><input class="dim24" id="f2-28-4-m" tabindex="224" type="text" maxlength="4" name="sezione(immatricolazioni).riga[27].annoRiferimento" value=""  onkeypress="javascript: return onlyNumbers(event);"  onfocus="normalizeColor(this);" /></td>				
			<td><input class="dim80rg" id="f2-28-5-m" tabindex="225" type="text" maxlength="11" name="sezione(immatricolazioni).riga[27].interiImportoDebito" value="0"  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /><div class="virgola" style="display: inline">,</div><input id="f2-28.-5-m-bis" tabindex="226" type="text" maxlength="2" name="sezione(immatricolazioni).riga[27].centImportoDebito" value=""  onkeypress="javascript: return onlyNumbers(event);"   onfocus="normalizeColor(this);" onchange="updateTotaliDebito('immatricolazioni'); BlockOtherElAcc(this);" /></td>
		</tr>			
		<tr>	
			<td colspan="5">	
				<input name="sezione(immatricolazioni).interiTotaleDebito"  type="hidden" />
				<input name="sezione(immatricolazioni).centTotaleDebito"  type="hidden" />			
				<input name="sezione(immatricolazioni).interiSaldo"  type="hidden" />
				<input name="sezione(immatricolazioni).centSaldo"  type="hidden" />			
			</td>
		</tr>
		<tr>
		<!-- 	<td colspan="5" class="erileft">&nbsp;(*) tipo veicolo: A autoveicolo, M motoveicolo, R rimorchio</td> -->
		</tr>			
	</table>















	<table>
		<tr>
			<th>ESTREMI DEL VERSAMENTO</th>
		</tr>
	</table>
	<table class="f23 f24">
		<tr>
			<td colspan="5">
				<table class="f23sub f24sub">
					<tr>
						<td class="alright">Saldo parziale<br />
							<input readonly="readonly" id="Text297" type="text" maxlength="13" name="saldoParzialeInteri" value="" />
							<div class="virgola" style="display: inline">,</div>
							<input readonly="readonly" id="Text298" type="text" maxlength="2" size="2" name="saldoParzialeCent" value="" />
						</td>
						<td class="alright">Saldo finale*<br />
							<input id="f1-0-8" tabindex="304" type="text" maxlength="13" onFocus=" normalizeColor(this); select();" onBlur="makeCorrectSaldoByInt();" name="interiSaldo" value="" onKeyPress="javascript: return onlyNumbers(event);" />
							<div class="virgola" style="display: inline">,</div>
							<input id="f1-0-8-bis" tabindex="305" type="text" maxlength="2" size="2" name="centSaldo"  value="" onFocus=" normalizeColor(this); select();" onblur="makeCorrectSaldoByCent();" onKeyPress="javascript: return onlyNumbers(event);" />
						</td>
					</tr>	
				</table>		
			</td>					
		</tr>
		<tr>
			<td>
				Numero conto*<br/>
				<input class="f_medium" readonly="readonly" id="Text305" type="text" maxlength="16" name="contoCorrente.identificativo" value="0000081500"/>
			</td>
			<td>
				Abi*<br/>
				<input class="f_5num" readonly="readonly" id="f1-0-5" type="text" maxlength="5" name="contoCorrente.abi" value="05584"/>
			</td>
			<td>
				Cab*<br/>
				<input class="f_5num" readonly="readonly" id="f1-0-6" type="text" maxlength="5" name="contoCorrente.cab" value="01799" />
			</td>	
			<td>
				Cin<br />
				<input readonly="readonly" type="text" maxlength="1" name="contoCorrente.cin" value="N" />
			</td>						
		
			<td>Data pagamento (ggmmaaaa)<br/>
				<div style="width:100px; position:relative"><input id="f1-0-1" name="dataIncassoHtml" size="15" maxlength="8" class="f_8num flLeftf23" type="text" value=""/>
				<img src="/img/btn_pickdate_priv.gif" alt="..." title="..."></div>

				<!--div class="input-group-addon date"><i class="icon icon-calendar"></i ></div-->
			</td>		
		</tr>
		<tr>
			<td colspan="5">Autorizzo addebito su conto corrente codice IBAN IT43N0558401799000000081500</td>
		</tr>
	</table>


			
			
		
				
			<br class="clear" /><br/>
			












	<script type="text/javascript">

		function chcekDateOnSave(){
			
			elementsError = new Array;
		    form = document.forms["f24MainForm"];
		    errMsg = "";
		 
		    //Data delega non vuota
		    if (form["dataIncassoHtml"].value.length != 0) {
			    //Data delega corretta nel formato
			    if (form["dataIncassoHtml"].value.length != 0 && checkDateFormat(form["dataIncassoHtml"].value)) {
			        errMsg += "\nLa data di pagamento inserita non e' nel formato corretto (ggmmaaaa)";
			        elementsError[elementsError.length] = form["dataIncassoHtml"];
			    }
			       //Data delega possibile
			    if (form["dataIncassoHtml"].value.length != 0 && checkDate(form["dataIncassoHtml"].value)) {
			        errMsg += "\nLa data di pagamento inserita non e' possibile";
			        elementsError[elementsError.length] = form["dataIncassoHtml"];
			    }
		    }
		    if (form["contribuente.dataNascitaHtml"].value.length != 0) {
			     //Data nascita corretta nel formato
			    if (form["contribuente.dataNascitaHtml"].value.length != 0 && checkDateFormat(form["contribuente.dataNascitaHtml"].value)) {
			        errMsg += "\nLa data di nascita inserita non e' nel formato corretto (ggmmaaaa)";
			        elementsError[elementsError.length] = form["contribuente.dataNascitaHtml"];
			    }
			     //Data nascita possibile
			    if (form["contribuente.dataNascitaHtml"].value.length != 0 && checkDate(form["contribuente.dataNascitaHtml"].value)) {
			        errMsg += "\nLa data di nascita inserita non e' possibile";
			        elementsError[elementsError.length] = form["contribuente.dataNascitaHtml"];
			    }
		    }
		
		    if (elementsError.length == 0) {
		        return true;
		    } else {
		        for (var i = 0; i < elementsError.length; i++) {
		            elementsError[i].style.backgroundColor = colorErr;
		        }
		    }
		    alert(errMsg);
		    els = document.getElementsByTagName("a");
		    return false;
		}
		
		
	//	controllo solo per delega accise: evita la valorizzazione simultanea dei codici atto e ufficio per le sezioni erario e accise.
	//	Questo può accadere con IE8 e superiori, navigando con i tasti back e forward del browser
		function checkAlternativeCod()	{
		    form = document.forms["f24MainForm"];
		    errMsg = "";
		
			
			
			return true;
		}

	//	funzione prosegui allo step successivo da modPag = ins
		function goNext(){
			if(checkModulo()){
				if(checkCodFiscale()){
					block_a();
					document.getElementById('hdModPag').value = 'ins2'; 
					document.getElementById('hdChiave').value = decodeTag('');
					document.f24MainForm.action = '/webankpri/wbOnetoone/3l/do/banking/F24WEB/proseguiStep2.do';
					document.f24MainForm.submit();
				}
			}
		}
		// modpagina ins
	</script>


	<section>
	    <div class="form-group btnWrapper">
	        <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
	        <div class="btn-align-right">
	            <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_f24_output.php&responsive=y&liv0=1&liv1=1&liv2=7&liv3=0">prosegui</a>
	        </div>
	        <div class="clear"></div>
	    </div>

	</section>





			





















	<script type="text/javascript">	
		var showOverlay = false;

		function openOverlay(){
			if(showOverlay){
				openPopOverLayer('contoTerziOverlay','floated', 1);
			} 
		}
	</script>

	<div class="layeralert3" id="contoTerziOverlay" style="display: none;">
		<div class="roundedCornersSmall paddMedium">
			<div class="boxesito attenzione">
				<div class="middle">
					<span class="imgCont"></span>
					<div class="text">
						
							<!-- WEBANK TESTI CAMBIATI-->
							<div class="row-fluid">
								<div class="span12">
									Ai sensi del provvedimento di Banca d'Italia entrato in vigore il 1/1/2014, 
									in caso di <strong>operazioni</strong> di importo <strong>pari o superiore a 5.000 &euro;</strong>
									effettuate per conto di una persona diversa dal titolare effettivo 
									del conto corrente sei  tenuto a fornirci tutte le informazioni necessarie 
									all'<strong>identificazione</strong> della persona per la quale stai disponendo l'operazione.
								</div>
							</div>				
							
								<div class="row-fluid">
									<div class="span12">
										Una volta inserita la disposizione ti sar&agrave; chiesto di scaricare e 
										<strong>compilare</strong> il modulo <strong>"Identificazione del titolare effettivo occasionale"</strong> 
										che dovrai poi spedirci via email o fax.<br><br>
										Se <strong>non</strong> dovessimo <strong>ricevere il modulo, l'operazione</strong> s'intender&agrave; effettuata <strong>a tuo nome</strong>. 
									</div>
								</div>
							
										
						<br>
						<div class="row-fluid">
							<div class="span12">
								<div class="aButtonconsLeft">
									<span class="btnc"><a href="#" class="aButtonClear"><span>indietro</span></a></span>
								</div>
								<div class="aButtonconsRight">
									<span class="btnc"><a id="demoSetErrorBtn" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_f24_output.php&responsive=y&liv0=1&liv1=1&liv2=7&liv3=0" class="aButton"><span>prosegui</span></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br class="clear">
	</div>

	<script type="text/javascript">
	$(document).ready(function() {
		openOverlay();
	});
	</script>
		
		</form>
	</div>


				


		<script type="text/javascript"> 
			setFormOnChange_CF_PIVA(true); 
		</script>	


		
	<script type="text/javascript">
		
		var modPag = 'ins'; 
		var banca = 'WEB';
		var prof = 'ute';
		var accise = 'no';
		var ultimaPR = '';
		var immatricolazioni = 'false';
		
		
		
		document.getElementById('hdModPag').value = modPag;
		document.getElementById('hdBanca').value = banca;
		document.getElementById('hdProf').value = prof;
		document.getElementById('hdAccise').value = accise;	
		document.getElementById('hdUltimaPagDiRiepilogo').value = ultimaPR;		 

		<!-- Dichiarare tutte le variabili di modello per poter utilizzare gli script common di calcoliF24.js	 -->
		var sempli = 'false';
		
		if (document.getElementById('hdModPag').value == 'ins2' || 
			document.getElementById('hdModPag').value == 'vis' || 
			document.getElementById('hdModPag').value == 'pre'|| 
			document.getElementById('hdModPag').value == 'pag')		{ 	

			disabilitaTutto();
	//	nascondi calendario
			$("#f1-0-1").datepicker({buttonImage: "none"});
		}else{
			start();	// controlla i campi importo: mette spazio se importo = 0,00
		}

		//	controlli da eseguire onload su visualizzazione modulo (se delega per modulo accise)
		
				

			
		//	versione onload del "makeRedField" specifico per campo cod. fiscale se incoerente con dati anagrafici del contribuente
		//	NB: il test per rilevare la casistica è strettamente legato al messaggio d'errore gestito dalla classe: CoreMakeDelegaBodyAction
			
			

	</script>


		</div>

	</div><!--fine div contenuti -->
								
						</div>
						<!-- FINE WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
					</div>
				</div>
			</div>
			<!-- /CONTENT -->
</div>
</div>			


<script type="text/javascript">
$("#f1-0-1").datepicker({
	dateFormat: "ddmmyy",
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    
    onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    });
 </script> 