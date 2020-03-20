<!--pagina da includere nel body per menu -->
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.middle.clearTimeOut();" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.middle.clearTimeOut();" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div>

<table class="larghezzaEsterna old-container" cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
	<tbody><tr>
		<td valign="top">


<form name="frmEdit" method="post">
    

<div class="container"><div class="old-pageContent new-riquadro">
<table height="100%" class="larghezzaEsterna" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr valign="top">
<td>
<table class="larghezzaInput" cellspacing="0" cellpadding="0" border="0" align="center" style="width: 95%;">
<tbody><tr>
<td width="100%" colspan="3" class="right">
	<table width="100%" cellspacing="0" cellpadding="0" border="0" align="right">
		<tbody><tr><td>&nbsp;</td></tr>
		<!--errori-->
		
		<!--fine errori-->

		
	</tbody></table>
</td>
</tr>
<tr>
<td width="100%">
<table class="sfondoTabelle" cellspacing="0" cellpadding="1" border="0">
<tbody><tr>
<td>
    <input name="IDTransaction" type="hidden" id="IDTransaction" value="-1">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
	<tbody cellpadding="0" cellspacing="0"><tr class="titoloTabella">
		<td height="20" class="old-pageTitle page-title"><div class="new-flag"></div><h1>MT101<a href="#" onclick="javascript:NewWindow('height=240,width=440,toolbar=no,scrollbars=yes,status=no,menubar=no,personalbar=no,titlebar=no','../common/CheckSessionPopUp.aspx?urlRedirect=/TMIBBWEB_Help/05034/it-IT/tmestero/mt101/mt101.aspx','help',820,400)" class="old-pageHelp"><img src="/resources/YouBiz/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--sezione ordinante-->
	<tr height="20" class="sottoTitoloTabella">
		<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Ordinante</h3></td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr>
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="170" class="left">
						Ordinante
						<span id="f_50l_InstructingParty_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1" class="right"><span id="f_50l_InstructingParty_imgstatus"><img border="0" src="/resources/05034/it-IT/TMEstero/img/notRequestedField.gif"></span></td>
					<td width="285">
						<select name="f_50l_InstructingParty" id="f_50l_InstructingParty" style="width:270px" onchange="javascript:ordinante_rapporto.selectedIndex=0;ReloadMT101();" class="new-form-control">
	<option selected="selected" value="*"></option>
	<option value="265302">CONDOMINIO ACLI</option>
	<option value="265303">CONDOMINIO BRAMBILLA</option>
	<option value="265304">CONDOMINIO"LA TORRE" C/O STUDI</option>
	<option value="265305">CONDOMINIO"DELLA COSTA II"</option>
	<option value="265306">CONDOMINIO VIA MARCONI 20 RAPP</option>
	<option value="265307">CONDOMINIO ELIANA C RAPPRESENT</option>
	<option value="265308">CONDOMINIO ELIANA D RAPPRESENT</option>
	<option value="265310">CONDOMINIO RESIDENZA DEI TIGLI</option>
	<option value="265312">CONDOMINIO DON ATTILIO CRESPI </option>
	<option value="265313">CONDOMINIO I GIARDINI RAPPRESE</option>
	<option value="265314">RESIDENCE EMILIA RAPPRESENTATO</option>
	<option value="265315">CONDOMINIO LA MONTAGNETTA C/O </option>
	<option value="265316">CONDOMINIO VILLA PALENI RAPPRE</option>
	<option value="268164">CONDOMINIO C.A. CRESPI RAPP.TO</option>
	<option value="274222">CONDOMINIO MADONNINA</option>
	<option value="274223">CONDOMINIO LE BETULLE</option>
	<option value="274224">CONDOMINIO NIGRITELLA</option>
	<option value="274225">CONDOMINIO PIROVANO</option>
	<option value="274226">CONDOMINIO S.MARCO</option>
	<option value="274227">CONDOMINIO S.ALESSANDRO</option>
	<option value="274228">CONDOMINIO C.A. CRESPI RAPP.TO</option>
	<option value="275905">CONDOMINIO DELLA COSTA PRIMO</option>
	<option value="276835">CONDOMINIO SAN GIOVANNI</option>
	<option value="276838">CONDOMINIO CASA A1</option>
	<option value="276839">CONDOMINIO EDILCOOP DUE CASA A</option>
	<option value="276840">CONDOMINIO"PALAZZO MORO"</option>
	<option value="276841">CONDOMINIO ROCCA 11</option>
	<option value="276842">SUPERCONDOMINIO AMENDOLA 2/4</option>
	<option value="276843">CONDOMINIO AMENDOLA 2</option>
	<option value="276844">CONDOMINIO VIA BIFFI 1/3</option>
	<option value="300872">CONDOMINIO IL GELSO</option>
	<option value="457876">STUDIO SCARPELLINI SNC DI SCAR</option>
</select>
					</td>
					<td width="60" class="right">
						Sia
						
					</td>
					<td>
					    <input name="ordinante_sia" type="text" id="ordinante_sia" size="6" readonly="" style="BACKGROUND-COLOR:#D4D4D4" class="new-form-control">
					</td>
				</tr>
				<tr class="rigaScura">
					<td width="170" class="left">
						Rapporto
						<span id="ordinante_rapporto_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1" class="right"><span id="ordinante_rapporto_imgstatus"><img border="0" src="/resources/05034/it-IT/TMEstero/img/notRequestedField.gif"></span></td>
					<td width="285">
						<select name="ordinante_rapporto" id="ordinante_rapporto" style="width:270px" onchange="javascript:ReloadMT101();" class="new-form-control">
	<option value=""></option>
</select>
						<script language="javascript">lastIndexRapporto=document.frmEdit.ordinante_rapporto.selectedIndex;</script>
					</td>
					<td class="right">
						Banca
						
					</td>
					<td width="160">
					    <input name="ordinante_banca" type="text" id="ordinante_banca" readonly="" style="width:150px;BACKGROUND-COLOR:#D4D4D4" class="new-form-control">
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	
	<!--sezione dati messaggio-->
	<tr height="20" class="sottoTitoloTabella">
		<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Dati Messaggio</h3></td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr>
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="160" class="left">
						Data esecuzione richiesta
						<span id="f_30_RequestedExecutionDate_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
					<td width="220">
					    <input name="f_30_RequestedExecutionDate" type="text" id="f_30_RequestedExecutionDate" style="width:85px" readonly="" class="datepicker f_30_RequestedExecutionDateYBW new-form-control hasDatepicker">
                        <a class="icon-replace icon-calendar active" onclick="$('.datepicker.f_30_RequestedExecutionDateYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar f_30_RequestedExecutionDateYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1569846082572"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".f_30_RequestedExecutionDateYBW").datepicker();});
                                        </script> 
                                      
                        
					</td>
					<td width="120" class="right">
						BIC Destinatario
						<span id="f_20_senderReference_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
				    <td width="150"><input name="f_20_senderReference" type="text" id="f_20_senderReference" readonly="" style="width:150px;BACKGROUND-COLOR:#D4D4D4" class="new-form-control"></td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Riferim. mittente
						
					</td>
					<td width="1"></td>
					<td width="220">
					    <input name="f_21r_CustomerSpecReference" type="text" id="f_21r_CustomerSpecReference" style="width:130px" class="new-form-control"> 
					</td>
					<td width="120" class="right">
						Autorizzazione
						
					</td>
					<td width="1"></td>
					<td width="150">
					    <input name="f_25_Authorization" type="text" id="f_25_Authorization" style="width:150px" class="new-form-control">
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--conto di addebito-->
	<tr height="20" class="sottoTitoloTabella">
		<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Conto di Addebito (E' necessario selezionare un'anagrafica dall'archivio)</h3></td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr>
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="160" class="left">
						Ragione Sociale
						<span id="f_50h_OrderingCustomerName_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
					<td width="300">
					    <input name="f_50h_OrderingCustomerName" type="text" id="f_50h_OrderingCustomerName" readonly="" style="width:270px;BACKGROUND-COLOR:#D4D4D4" class="new-form-control">
						<a href="#"><img class="old-fieldSearch" width="20" src="/resources/YouBiz/images/ico-filter.png" height="20" border="0" alt="Cerca Codice Debitore" onclick="javascript:isBeneficiario=false;lookUpFornitoreEstero(document.frmEdit.f_50l_InstructingParty.value)"></a>
					</td>
					<td width="60" class="right">
						Codice
						
					</td>
					<td width="1">&nbsp;</td>
					<td>
					    <input name="conto_addebito_codice" type="text" id="conto_addebito_codice" readonly="" style="width:80px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control">
						<a href="#"><img width="20" class="old-fieldSearch" src="/resources/YouBiz/images/ico-filter.png" height="20" border="0" alt="Cerca Codice Debitore" onclick="javascript:isBeneficiario=false;lookUpFornitoreEstero(document.frmEdit.f_50l_InstructingParty.value)"></a>
					</td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Indirizzo
						
					</td>
					<td width="1"></td>
					<td width="300"><input name="f_50h_OrderingCustomerAddress" type="text" id="f_50h_OrderingCustomerAddress" readonly="" style="width:270px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control"></td>
					<td colspan="3" class="right">&nbsp;</td>
					<!--
					<td align="right">
						Stato
						
					</td>
					<td width="1"></td>
					<td><input name="f_50h_OrderingCustomerUicCountry" type="text" id="f_50h_OrderingCustomerUicCountry" readonly="" style="width:80px;BACKGROUND-COLOR: #D4D4D4" /></td>
					-->
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Località
						
					</td>
					<td width="1"></td>
				    <td width="300"><input name="f_50h_OrderingCustomerPlace" type="text" id="f_50h_OrderingCustomerPlace" readonly="" style="width:270px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control"></td>
					<td colspan="3" class="left">&nbsp;</td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Rapporto
						<span id="f_50h_OrderingCustomerAccount_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
					<td width="300">
					    <input name="f_50h_OrderingCustomerAccount" type="text" id="f_50h_OrderingCustomerAccount" readonly="" style="width:270px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control">
					</td>
					<td class="right">
						BIC
						
					</td>
					<td width="1"></td>
					<td>
					    <input name="f_52a_AccountServiceInstitution" type="text" id="f_52a_AccountServiceInstitution" readonly="" style="width:110px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control">
					</td>
						
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--beneficiario-->
	<tr height="20" class="sottoTitoloTabella">
		<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Beneficiario (E' necessario selezionare un'anagrafica dall'archivio)</h3></td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr>
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="160" class="left">
						Ragione Sociale
						<span id="f_59_BeneficiaryName_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
					<td width="300">
					    <input name="f_59_BeneficiaryName" type="text" id="f_59_BeneficiaryName" readonly="" style="width:270px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control">
						<a href="#"><img width="20" class="old-fieldSearch" src="/resources/YouBiz/images/ico-filter.png" height="20" border="0" alt="Cerca Codice Beneficiario" onclick="javascript:isBeneficiario=true;lookUpFornitoreEstero(document.frmEdit.f_50l_InstructingParty.value)"></a>
					</td>
					<td width="60" class="right">
						Codice
						
					</td>
					<td width="1">&nbsp;</td>
					<td>
					    <input name="beneficiario_codice" type="text" id="beneficiario_codice" readonly="" style="width:80px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control">
						<a href="#"><img width="20" class="old-fieldSearch" src="/resources/YouBiz/images/ico-filter.png" height="20" border="0" alt="Cerca Codice Beneficiario" onclick="javascript:isBeneficiario=true;lookUpFornitoreEstero(document.frmEdit.f_50l_InstructingParty.value)"></a>
					</td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Indirizzo
						<span id="f_59_BeneficiaryAddress_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
				    <td width="300"><input name="f_59_BeneficiaryAddress" type="text" id="f_59_BeneficiaryAddress" readonly="" style="width:270px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control"></td>
					<td colspan="3" class="right">&nbsp;</td>
					<!--
					<td align="right" width="60">
						Stato
						<span id="f_59_BeneficiaryUicCountry_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
					<td><input name="f_59_BeneficiaryUicCountry" type="text" id="f_59_BeneficiaryUicCountry" readonly="" style="width:80px;BACKGROUND-COLOR: #D4D4D4" /></td>
					-->
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Località
						<span id="f_59_BeneficiaryPlace_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
				    <td width="300"><input name="f_59_BeneficiaryPlace" type="text" id="f_59_BeneficiaryPlace" readonly="" style="width:270px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control"></td>
					<td colspan="3" class="left"></td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Rapporto
						<span id="f_59_BeneficiaryAccount_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
				    <td width="300"><input name="f_59_BeneficiaryAccount" type="text" id="f_59_BeneficiaryAccount" readonly="" style="width:270px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control"></td>
					<td width="60" class="right">
						BIC
						
					</td>
					<td width="1"></td>
					<td>
					    <input name="f_57a_BeneficiaryInstitution" type="text" id="f_57a_BeneficiaryInstitution" readonly="" style="width:110px;BACKGROUND-COLOR: #D4D4D4" class="new-form-control">
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
	<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--importi e riferimenti-->
	<tr height="20" class="sottoTitoloTabella">
		<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Importi e riferimenti</h3></td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr>
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="160" class="left">
						Importo
						<span id="f_32b_Ammount_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
				    <td width="285"><input name="f_32b_Ammount" type="text" id="f_32b_Ammount" style="width:95%" value="0,000" class="new-form-control"></td>
					<td class="right">
						Divisa
						<span id="f_32b_Currency_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
					<td>
					    <input name="f_32b_Currency" type="text" id="f_32b_Currency" size="5" maxlength="3" readonly="" style="BACKGROUND-COLOR: #D4D4D4" class="new-form-control">
						<a href="#"><img width="20" class="old-fieldSearch" src="/resources/YouBiz/images/ico-filter.png" height="20" border="0" alt="Cerca Divisa" onclick="javascript:isDivisaOriginaria=false;lookUpDivisa()"></a>
					</td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Banca intermediaria
						
					</td>
					<td width="1"></td>
				    <td><input name="f_56a_IntermediaryInstitution" type="text" id="f_56a_IntermediaryInstitution" style="width:95%" class="new-form-control"></td>
					<td class="right">
						Tasso di cambio
						
					</td>
					<td width="1"></td>
				    <td><input name="f_36_ExchangeRate" type="text" id="f_36_ExchangeRate" style="width:100%" class="new-form-control"></td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Identificativo pagamento
						<span id="f_21_TransactionReference_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
				    <td><input name="f_21_TransactionReference" type="text" id="f_21_TransactionReference" style="width:95%" class="new-form-control"></td>
					<td colspan="3" class="left"></td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Riferimento operazione F/X
						
					</td>
					<td width="1"></td>
				    <td><input name="F_21F_ForExReference" type="text" id="F_21F_ForExReference" style="width:95%" class="new-form-control"></td>
					<td colspan="3" class="left"></td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Descrizione pagamento per beneficiario
						
					</td>
					<td width="1"></td>
					<td colspan="4"><textarea name="f_70_RemittanceInformation" id="f_70_RemittanceInformation" style="width:95%" rows="2" class="new-form-control"></textarea></td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Dati per segnalazioni
						
					</td>
					<td width="1"></td>
					<td colspan="4"><textarea name="f_77b_RegulatoryReporting" id="f_77b_RegulatoryReporting" style="width:95%" rows="2" class="new-form-control"></textarea></td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Addebito spese
						<span id="f_71a_DetailsCharge_imgMandatory" class="testoRedSmallBold">*</span>
					</td>
					<td width="1"></td>
					<td class="left"><select name="f_71a_DetailsCharge" id="f_71a_DetailsCharge" style="width:95%;" class="new-form-control">
	<option selected="selected" value=""></option>
	<option value="OUR">OUR</option>
	<option value="SHA">SHA</option>
	<option value="BEN">BEN</option>
</select></td>
					<td colspan="3" class="left"></td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Conto addebito spese
						
					</td>
					<td width="1"></td>
				    <td class="left"><input name="f_25a_DetailsAccount" type="text" id="f_25a_DetailsAccount" readonly="" style="width:95%;BACKGROUND-COLOR: #D4D4D4" class="new-form-control"></td>
					<td colspan="3" class="left"></td>
				</tr>
				<tr class="rigaScura">
					<td width="160" class="left">
						Importo originario
						
					</td>
					<td width="1"></td>
				    <td><input name="f_33b_OriginalAmmount" type="text" id="f_33b_OriginalAmmount" style="width:95%" class="new-form-control"></td>
					<td class="right">
						Divisa originaria
						
					</td>
					<td width="1"></td>
					<td>
					    <input name="f_33b_OriginalCurrency" type="text" id="f_33b_OriginalCurrency" size="5" maxlength="3" readonly="" style="BACKGROUND-COLOR: #D4D4D4" class="new-form-control">
						<a href="#"><img width="20" class="old-fieldSearch" src="/resources/YouBiz/images/ico-filter.png" height="20" border="0" alt="Cerca Divisa" onclick="javascript:isDivisaOriginaria=true;lookUpDivisa()"></a>
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>

	<!--istruzioni codificate 1-->
	<tr height="20" class="sottoTitoloTabella">
		<td>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tbody cellpadding="0" cellspacing="0"><tr class="sottoTitoloTabella">
					<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Istruzione Codificata 1</h3></td>
					<td class="right" style="padding-right: 5px;"><a style="cursor:hand" onclick="collaps(1)"><img src="/resources/YouBiz/images/ico-collapse.png" name="img1" id="img1" border="0"></a></td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr id="1" style="visibility: visible;">
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="170" class="left">Codice Istruzione</td>
					<td class="left"><select name="f_23E_CodiceIstruzione1" id="f_23E_CodiceIstruzione1" style="width:100%" class="new-form-control">
	<option value=""></option>
	<option value="CHQB">CHQB</option>
	<option value="CMSW">CMSW</option>
	<option value="CMTO">CMTO</option>
	<option value="CMZB">CMZB</option>
	<option value="CORT">CORT</option>
	<option value="INTC">INTC</option>
	<option value="NETS">NETS</option>
	<option value="OTHR">OTHR</option>
	<option value="PHON">PHON</option>
	<option value="REPA">REPA</option>
	<option value="RTGS">RTGS</option>
	<option value="URGP">URGP</option>
</select></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>
				<tr class="rigaScura">
					<td width="170" class="left">Ulteriori dettagli</td>
				    <td class="left"><input name="f_23E_DescrizioneIstruzione1" type="text" id="f_23E_DescrizioneIstruzione1" style="width:100%" class="new-form-control"></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>				
			</tbody></table>
		</td>
	</tr>
	<tr>
	<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--istruzioni codificate 2-->
	<tr height="20" class="sottoTitoloTabella">
		<td>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tbody cellpadding="0" cellspacing="0"><tr class="sottoTitoloTabella ">
					<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Istruzione Codificata 2</h3></td>
					<td class="right" style="padding-right: 5px;"><a style="cursor:hand" onclick="collaps(2)"><img src="/resources/YouBiz/images/ico-collapse.png" name="img2" id="img2"></a></td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr id="2" style="visibility: visible;">
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="170" class="left">Codice Istruzione</td>
					<td class="left"><select name="f_23E_CodiceIstruzione2" id="f_23E_CodiceIstruzione2" style="width:100%" class="new-form-control">
	<option value=""></option>
	<option value="CHQB">CHQB</option>
	<option value="CMSW">CMSW</option>
	<option value="CMTO">CMTO</option>
	<option value="CMZB">CMZB</option>
	<option value="CORT">CORT</option>
	<option value="INTC">INTC</option>
	<option value="NETS">NETS</option>
	<option value="OTHR">OTHR</option>
	<option value="PHON">PHON</option>
	<option value="REPA">REPA</option>
	<option value="RTGS">RTGS</option>
	<option value="URGP">URGP</option>
</select></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>
				<tr class="rigaScura">
					<td width="170" class="left">Ulteriori dettagli</td>
				    <td class="left"><input name="f_23E_DescrizioneIstruzione2" type="text" id="f_23E_DescrizioneIstruzione2" style="width:100%" class="new-form-control"></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>				
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--istruzioni codificate 3-->
	<tr height="20" class="sottoTitoloTabella">
		<td>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tbody cellpadding="0" cellspacing="0"><tr class="sottoTitoloTabella">
					<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Istruzione Codificata 3</h3></td>
					<td class="right" style="padding-right: 5px;"><a style="cursor:hand" onclick="collaps(3)"><img src="/resources/YouBiz/images/ico-collapse.png" name="img3" id="img3"></a></td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr id="3" style="visibility: visible;">
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="170" class="left">Codice Istruzione</td>
					<td class="left"><select name="f_23E_CodiceIstruzione3" id="f_23E_CodiceIstruzione3" style="width:100%" class="new-form-control">
	<option value=""></option>
	<option value="CHQB">CHQB</option>
	<option value="CMSW">CMSW</option>
	<option value="CMTO">CMTO</option>
	<option value="CMZB">CMZB</option>
	<option value="CORT">CORT</option>
	<option value="INTC">INTC</option>
	<option value="NETS">NETS</option>
	<option value="OTHR">OTHR</option>
	<option value="PHON">PHON</option>
	<option value="REPA">REPA</option>
	<option value="RTGS">RTGS</option>
	<option value="URGP">URGP</option>
</select></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>
				<tr class="rigaScura">
					<td width="170" class="left">Ulteriori dettagli</td>
				    <td class="left"><input name="f_23E_DescrizioneIstruzione3" type="text" id="f_23E_DescrizioneIstruzione3" style="width:100%" class="new-form-control"></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>				
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--istruzioni codificate 4-->
	<tr height="20" class="sottoTitoloTabella">
		<td>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tbody cellpadding="0" cellspacing="0"><tr class="sottoTitoloTabella">
					<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Istruzione Codificata 4</h3></td>
					<td class="right" style="padding-right: 5px;"><a style="cursor:hand" onclick="collaps(4)"><img src="/resources/YouBiz/images/ico-collapse.png" name="img4" id="img4"></a></td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr id="4" style="visibility: visible;">
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="170" class="left">Codice Istruzione</td>
					<td class="left"><select name="f_23E_CodiceIstruzione4" id="f_23E_CodiceIstruzione4" style="width:100%" class="new-form-control">
	<option value=""></option>
	<option value="CHQB">CHQB</option>
	<option value="CMSW">CMSW</option>
	<option value="CMTO">CMTO</option>
	<option value="CMZB">CMZB</option>
	<option value="CORT">CORT</option>
	<option value="INTC">INTC</option>
	<option value="NETS">NETS</option>
	<option value="OTHR">OTHR</option>
	<option value="PHON">PHON</option>
	<option value="REPA">REPA</option>
	<option value="RTGS">RTGS</option>
	<option value="URGP">URGP</option>
</select></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>
				<tr class="rigaScura">
					<td width="170" class="left">Ulteriori dettagli</td>
				    <td class="left"><input name="f_23E_DescrizioneIstruzione4" type="text" id="f_23E_DescrizioneIstruzione4" style="width:100%" class="new-form-control"></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>				
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--istruzioni codificate 5-->
	<tr height="20" class="sottoTitoloTabella">
		<td>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tbody cellpadding="0" cellspacing="0"><tr class="sottoTitoloTabella">
					<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Istruzione Codificata 5</h3></td>
					<td class="right" style="padding-right: 5px;"><a style="cursor:hand" onclick="collaps(5)"><img src="/resources/YouBiz/images/ico-collapse.png" name="img5" id="img5"></a></td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr id="5" style="visibility: visible;">
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="170" class="left">Codice Istruzione</td>
					<td class="left"><select name="f_23E_CodiceIstruzione5" id="f_23E_CodiceIstruzione5" style="width:100%" class="new-form-control">
	<option value=""></option>
	<option value="CHQB">CHQB</option>
	<option value="CMSW">CMSW</option>
	<option value="CMTO">CMTO</option>
	<option value="CMZB">CMZB</option>
	<option value="CORT">CORT</option>
	<option value="INTC">INTC</option>
	<option value="NETS">NETS</option>
	<option value="OTHR">OTHR</option>
	<option value="PHON">PHON</option>
	<option value="REPA">REPA</option>
	<option value="RTGS">RTGS</option>
	<option value="URGP">URGP</option>
</select></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>
				<tr class="rigaScura">
					<td width="170" class="left">Ulteriori dettagli</td>
				    <td class="left"><input name="f_23E_DescrizioneIstruzione5" type="text" id="f_23E_DescrizioneIstruzione5" style="width:100%" class="new-form-control"></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>				
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--istruzioni codificate 6-->
	<tr height="20" class="sottoTitoloTabella">
		<td>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tbody cellpadding="0" cellspacing="0"><tr class="sottoTitoloTabella">
					<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Istruzione Codificata 6</h3></td>
					<td class="right" style="padding-right: 5px;"><a style="cursor:hand" onclick="collaps(6)"><img src="/resources/YouBiz/images/ico-collapse.png" name="img6" id="img6"></a></td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr id="6" style="visibility: visible;">
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="170" class="left">Codice Istruzione</td>
					<td class="left"><select name="f_23E_CodiceIstruzione6" id="f_23E_CodiceIstruzione6" style="width:100%" class="new-form-control">
	<option value=""></option>
	<option value="CHQB">CHQB</option>
	<option value="CMSW">CMSW</option>
	<option value="CMTO">CMTO</option>
	<option value="CMZB">CMZB</option>
	<option value="CORT">CORT</option>
	<option value="INTC">INTC</option>
	<option value="NETS">NETS</option>
	<option value="OTHR">OTHR</option>
	<option value="PHON">PHON</option>
	<option value="REPA">REPA</option>
	<option value="RTGS">RTGS</option>
	<option value="URGP">URGP</option>
</select></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>
				<tr class="rigaScura">
					<td width="170" class="left">Ulteriori dettagli</td>
				    <td class="left"><input name="f_23E_DescrizioneIstruzione6" type="text" id="f_23E_DescrizioneIstruzione6" style="width:100%" class="new-form-control"></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>				
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	
	<!--istruzioni codificate 7-->
	<tr height="20" class="sottoTitoloTabella">
		<td>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tbody cellpadding="0" cellspacing="0"><tr class="sottoTitoloTabella">
					<td class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Istruzione Codificata 7</h3></td>
					<td class="right" style="padding-right: 5px;"><a style="cursor:hand" onclick="collaps(7)"><img src="/resources/YouBiz/images/ico-collapse.png" name="img7" id="img7"></a></td>
				</tr>
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>
	<tr id="7" style="visibility: visible;">
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td width="170" class="left">Codice Istruzione</td>
					<td class="left"><select name="f_23E_CodiceIstruzione7" id="f_23E_CodiceIstruzione7" style="width:100%" class="new-form-control">
	<option value=""></option>
	<option value="CHQB">CHQB</option>
	<option value="CMSW">CMSW</option>
	<option value="CMTO">CMTO</option>
	<option value="CMZB">CMZB</option>
	<option value="CORT">CORT</option>
	<option value="INTC">INTC</option>
	<option value="NETS">NETS</option>
	<option value="OTHR">OTHR</option>
	<option value="PHON">PHON</option>
	<option value="REPA">REPA</option>
	<option value="RTGS">RTGS</option>
	<option value="URGP">URGP</option>
</select></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>
				<tr class="rigaScura">
					<td width="170" class="left">Ulteriori dettagli</td>
				    <td class="left"><input name="f_23E_DescrizioneIstruzione7" type="text" id="f_23E_DescrizioneIstruzione7" style="width:100%" class="new-form-control"></td>
					<td width="100" class="left"></td>
					<td width="100"></td>
				</tr>				
			</tbody></table>
		</td>
	</tr>
	<tr>
		<td height="1" class="rigachiara" style="height: 5px; padding-left: 5px; padding-right: 5px;"></td>
	</tr>

	<!--fine tabella-->
	<tr>
		<td class="rigachiara" style="padding-left: 5px; padding-right: 5px;">
			<table width="100%" cellspacing="0" cellpadding="3" border="0">
				<tbody><tr class="rigaScura">
					<td>
						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tbody><tr valign="bottom">
								<td height="30" class="old-buttons txt_center">
								    
								    &nbsp;
								    &nbsp;
									<br><br>
								</td>
							</tr>
							<tr>
								<td class="testoRedSmallBold left">
									* campi obbligatori&nbsp;&nbsp;&nbsp;
									<img border="0" src="/resources/05034/it-IT/TMEstero/img/notRequestedField.gif">&nbsp;campi non considerati per l'ordinante selezionato&nbsp;
								</td>
							</tr>
						</tbody></table>
					</td>
				</tr>
			</tbody></table>
		</td>
	</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</div><div class="new-buttons"><input name="azione" type="hidden" id="azione" class="btn1"><input value="Inserisci" type="button" onclick="javascript:salva()" name="cmdSalva" class="btn1" style="cursor:Hand"><input value="Annulla" type="button" onclick="javascript:annulla()" name="cmdAnnulla" class="btn1" style="cursor:Hand"></div></div>
</form>


<script language="javascript">
	
		collaps(1);
		
		collaps(2);
		
		collaps(3);
		
		collaps(4);
		
		collaps(5);
		
		collaps(6);
		
		collaps(7);
		

</script>
<form name="frmChekSession" method="post" action="./mt101.aspx">
</form>

<form name="frmAnnulla" method="post">
	
	<input type="hidden" name="azione" value="mt101annulla">
	<input type="hidden" name="f_50l_InstructingParty" value="">
	<input type="hidden" name="IDTransaction" value="">
</form>



    </td>
   </tr>
   <tr>
			<td valign="bottom">
				<div class="divFooter">
		            <div class="row footer">
			            <div class="container">
				            <div class="col-xs-4">
					            <div class="assistenza clearfix">
						            <h4>Assistenza Clienti</h4>
						            <div class="clearfix">
							            <a class="ico-assistenza" href="#">&nbsp;</a>
							            <div>
								            Numero verde:&nbsp;<strong>800.607.227</strong><br>
								            Dall'estero:&nbsp;<strong>+39 02.43371097</strong>
							            </div>
						            </div>
						            <div class="clearfix">
							            <a class="ico-gestore" href="#">&nbsp;</a>
							            <div>Per qualsiasi altra esigenza è a tua disposizione<br>
							            il <strong>Gestore</strong> presso la tua filiale di riferimento</div>
						            </div>
					            </div>
				            </div>
				            <div class="col-xs-4">					            
				            </div>
				            <div class="col-xs-4">
					            <div class="footer-logo"> <span>Banco Popolare</span> </div>
				            </div>
				            <div class="col-xs-12 margin-top10 txt_center disclaimer">
					            © 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright
				            </div>
			            </div>
		            </div>
	            </div>
			</td>
		</tr>

  </tbody></table>





    <script type="text/javascript">
        $(function () {
            $(".larghezzaInput").css("width", "95%");
            $(".rigachiara").css("padding-left", "5px").css("padding-right", "5px");
            $(".sottoTitoloTabella > .old-sectionTitle + td ").css("padding-right", "5px");
        });
    </script>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>