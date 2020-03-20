<div class="sectionTitle">
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h1>Calcola la rata</h1>
        </div>
        <div class="col-md-6">
        	<!--a href="#" class="btn-white btn-arrow">Lorem ipsum</a-->
        </div>
      </div>
 		</div> <!-- /container -->
</div>

<div class="mainContent">
	<div class="mutuo container">
			<div class="row rowArea1">

				<!-- colonna sinistra -->
				<div class="col-lg-2 col-md-12 col-sm-12">
					<ul class="stepper">
						<li class="completed">Scegli il tuo mutuo</li>
						<li class="active">Inserisci i tuoi dati</li>
						<li>Invia la richiesta</li>
					</ul>
				</div>
				<!-- /colonna sinistra -->

				<!-- colonna centrale -->
				<div class="col-lg-7 col-md-12 col-sm-12">
					<div class="basic-content">
						<h2>Compila il form per inviare una richiesta non impegnativa</h2>
						<p>Un nostro esperto ti contatter&agrave; per una consulenza preliminare</p>
						<hr>
						<h4>RIEPILOGO</h4>						
						<div class="row">						
							<div class="col-md-12 tabular">
								<div class="row singLn">
									<div class="col-sm-3 nopadding">Tipo di mutuo <span>Mutuo fisso prefissato</span></div>
									<div class="col-sm-2 nopadding"><div class="padLe">Rata </div><span><div class="padLe">653,54 &euro;</div></span></div>
									<div class="col-sm-2 nopadding">Durata <span>20 anni</span></div>
									<div class="col-sm-2 nopadding">Importo <span>120.000 &euro;</span></div>
									<div class="col-sm-3 nopadding">Valore immobile <span>200.000 &euro;</span></div>
								</div>
								<div class="row">
									<div class="col-sm-12">Indice: IRS per durata 1,607% <span class="bulCl">&#8226;</span>Spread: 1,500% <span class="bulCl">&#8226;</span>Tasso: 2,800% <span class="bulCl">&#8226;</span>TAEG: 3,171%</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-4">
										<a href="#" class="ico-pdf" target="_blank">Scheda mutuo</a>
									</div>
									<div class="col-md-8">
										<a href="#" class="ico-pdf ico-pdf2r" target="_blank">Prospetto informativo e piano di ammortamento</a>
									</div>	
								</div>								
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<a href="#" class="btn-grlit btn-grlit-arrow fleft uppercase inlineB">MODIFICA PREVENTIVO</a>
								</div>
						</div>
						<div class="spacer-no-border">&nbsp;</div>
						<div class="row">
							<div class="col-md-12">
								<form action = "/webankpub/wb/richiestaMol1.do?cf=0.07131146891127826" id="mol" name="mol" method="post" role="form" class="autocompleteoff">
									<input type="hidden" name="allWrongFields" id="allWrongFields" value="convenzioneWeb|codPresentatore|codPromotore|statoRicerca" />
									<div class="row">
										<div class="col-md-4 col-sm-12">
												<h4 class="no-margin">RICHIESTA</h4>
										</div>
										<div class="col-md-8 col-sm-12">
											<div class="radio radio-inline" style="margin-right:8px;">
												<input type="radio" name="tipoRichiesta" id="tipoAcquisto" value="Acquisto" checked />
												<label for="tipoAcquisto">Acquisto</label>
											</div>
											<div class="radio radio-inline" style="margin-right:8px;">
												<input type="radio" name="tipoRichiesta" id="tipoRistrutturazione" value="Ristrutturazione"/>
												<label for="tipoRistrutturazione">Ristrutturazione della casa di propriet&agrave;</label>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-sm-12 form-section-title">
											Informazioni sull'immobile
										</div>
									</div>
									<div class="spacer-no-border hidden-xs">&nbsp;</div>
									<div class="row">
										<div class="col-md-5 form-group">
											<label for="statoRicerca">Stato della ricerca dell'immobile*</label>
											<select name="statoRicerca" id="statoRicerca" class="form-control combobox required">
												<option value="" selected="selected">Seleziona</option>
												<option value="Alla ricerca dell'immobile">Alla ricerca dell'immobile</option>
												<option value="Individuato immobile">Individuato immobile</option>
												<option value="Fatta proposta d'acquisto">Fatta proposta d'acquisto</option>
												<option value="Fatta proposta d'acquisto">Fatta proposta d'acquisto</option>
												<option value="Immobile gi&agrave; di propriet&agrave;">Immobile gi&agrave; di propriet&agrave;</option>
											</select>
											
										</div>
										<div class="col-md-3">
											<label for="dataRogito">Data di attivazione*</label>
											<table cellspacing="0" cellpadding="0" border="0">
												<tr>
													<td width="35%" class="form-group"><input type="hidden" name="ggRogito" id="ggRogito" value="01" /><input maxlength ="2" type="text" placeholder ="mm" name="mmRogito" id="mmRogito" value="" class="textinput form-control"></td>
													<td align="center" width="3%">/</td>
													<td width="62%" class="form-group"><input maxlength="4" type="text" placeholder ="aaaa" name="annoRogito" id="annoRogito" value="" class="textinput form-control"></td>
												</tr>
											</table>
										</div>
										<div class="col-md-4 form-group">
											<label for="provImmobile">Provincia dell'immobile*</label>
											<select name="provImmobile" id="provImmobile" class="form-control combobox required">
												<option value="" selected="selected">Seleziona</option>
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
												<option value="EN">EN</option>
												<option value="FC">FC</option>
												<option value="FE">FE</option>
												<option value="FG">FG</option>
												<option value="FI">FI</option>
												<option value="FM">FM</option>
												<option value="FR">FR</option>
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
												<option value="PN">PN</option>
												<option value="PO">PO</option>
												<option value="PR">PR</option>
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
											</select>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-sm-12 form-section-title">
											Dati di contatto dell'intestatario principale
										</div>
									</div>
									<div class="spacer-no-border hidden-xs">&nbsp;</div>
									<div class="row">
										<div class="col-md-6">
											<label for="prefcell">Numero cellulare*<span class="hidden-xs"><br>&nbsp;</span></label>
											<table cellspacing="0" cellpadding="0" border="0" width="100%">
												<tr>
													<td width="20%" class="form-group"><input type="text" maxlength= "3" name="prefCellulare" id="prefCellulare" value="" class="textinput form-control"></td>
													<td align="center" width="1%"></td>
													<td width="38%" class="form-group"><input type="text" maxlength= "7" name="cellulare" id="cellulare" value="" class="textinput form-control"></td>
													<td align="center" width="1%"></td>
													<td width="40%" class="form-group">
														<select name="operatore" id="operatore" class="form-control combobox required">
															<option value="" selected="selected">Oper.</option>
															<option value="Wind">Wind</option>
															<option value="Vodafone">Vodafone</option>
															<option value="Tim">Tim</option>
															<option value="Altro">Altro</option>
														</select>
													</td>
												</tr>
											</table>
										</div>
										<div class="col-md-3">
												<label for="prefTelefono">Telefono abitazione</label>
												<table cellspacing="0" cellpadding="0" border="0" width="100%">
													<tr>
														<td width="40%" class="form-group"><input type="text" name="prefTelefono" id="prefTelefono" value="" class="textinput form-control" maxlength="4"></td>
														<td align="center" width="2%"></td>
														<td width="58%" class="form-group"><input type="text" name="telefono" id="telefono" value="" class="textinput form-control"></td>
													</tr>
												</table>
										</div>
										<div class="col-md-3">
												<label for="prefUfficio">Telefono ufficio<span class="hidden-xs"><br>&nbsp;</span></label>
												<table cellspacing="0" cellpadding="0" border="0" width="100%">
													
													<tr>
														<td width="40%" class="form-group"><input type="text" name="prefUfficio" id="prefUfficio" value="" class="textinput form-control" maxlength="4"></td>
														<td align="center" width="2%"></td>
														<td width="58%" class="form-group"><input type="text" name="ufficio" id="ufficio" value="" class="textinput form-control"></td>
													</tr>
												</table>
										</div>

									</div>
									<div class="spacer-no-border hidden-xs">&nbsp;</div>
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="orarioContatto">Fascia oraria di contatto</label>
											<select name="orarioContatto" id="orarioContatto" class="form-control combobox required">
												<option value="qualsiasi orario">qualsiasi orario</option>
												<option value="9.00-13.00">9.00-13.00</option>
												<option value="14.00-18.00">14.00-18.00</option>
												<option value="dopo le 18.00">dopo le 18.00</option>
											</select>
										</div>
										<div class="col-md-6 form-group">
											<label for="email">Indirizzo email*</label>
											<input type="email" name="email" id="email" value="" class="textinput form-control">
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col-sm-12 form-section-title">
											Dati dell'intestatario principale
										</div>
									</div>
									<div class="spacer-no-border hidden-xs">&nbsp;</div>
									<div class="row">
										<div class="col-md-6 form-group">
											<label for="nome">Nome*</label>
											<input type="text" name="nome" id="nome" value="" class="textinput form-control">
										</div>
										<div class="col-md-6 form-group">
											<label for="cognome">Cognome*</label>
											<input type="text" name="cognome" id="cognome" value="" class="textinput form-control">
										</div>
									</div>
									<div class="spacer-no-border hidden-xs"></div>
									<div class="row">
										<div class="col-md-5">
											<label for="ggNascita">Data nascita*</label>
											<table cellspacing="0" cellpadding="0" border="0">
												<tbody><tr>
													<td width="22%" class="form-group"><input type="text" placeholder="gg" maxlength="2" name="ggNascita" id="ggNascita" value="" class="textinput form-control"></td>
													<td align="center" width="3%">/</td>
													<td width="22%" class="form-group"><input type="text" placeholder="mm" maxlength="2" name="mmNascita" id="mmNascita" value="" class="textinput form-control"></td>
													<td align="center" width="3%">/</td>
													<td width="50%" class="form-group"><input type="text" placeholder="aaaa" maxlength="4" name="annoNascita" id="annoNascita" value="" class="textinput form-control"></td>
												</tr>
											</tbody></table>
										</div>
										<div class="col-md-3 form-group">
											<label for="sesso">Sesso*</label><br>
											<div class="radio radio-inline">
												<input type="radio" name="sesso" value="Maschio">
												<label for="sxm">M</label>
											</div>
											<div class="radio radio-inline">
												<input type="radio" name="sesso" value="Femmina">
												<label for="sxf">F</label>
											</div>
										</div>
										<div class="col-md-4 form-group">
											<label for="cfisc">Codice fiscale*</label>
											<input type="text" maxlength="16" name="cfisc" id="cfisc" value="" class="textinput form-control">
										</div>
									</div>
									<div class="spacer-no-border hidden-xs"></div>
									<div class="row">
										<div class="col-md-3 form-group">
											<label for="estero">Nato all'estero*</label>
											<div class="radio radio-inline">
												<input type="radio" name="estero" value="Si">
												<label for="sxm">Si</label>
											</div>
											<div class="radio radio-inline">
												<input type="radio" name="estero" value="No">
												<label for="sxf">No</label>
											</div>
										</div>
										<div class="col-md-4 form-group" id="natoItalia">
											<label for="provNascita">Provincia di nascita*</label>
											<select name="provNascita" id="provNascita" class="form-control combobox required">
												<option value="" selected="selected">Seleziona</option>
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
												<option value="EN">EN</option>
												<option value="FC">FC</option>
												<option value="FE">FE</option>
												<option value="FG">FG</option>
												<option value="FI">FI</option>
												<option value="FM">FM</option>
												<option value="FR">FR</option>
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
												<option value="PN">PN</option>
												<option value="PO">PO</option>
												<option value="PR">PR</option>
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
											</select>
										</div>
										<div class="col-md-4 form-group" id="natoEstero" style="display: none;">
										<label for="nazionalita">Stato*</label>		
										<select name="nazionalita" id="nazionalita" class="form-control combobox required">
											<option value="">Seleziona</option>
											<option value="ABU DHABI">ABU DHABI</option>
											<option value="AFGHANISTAN">AFGHANISTAN</option>
											<option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
											<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
											<option value="AJMAN">AJMAN</option>
											<option value="ALBANIA">ALBANIA</option>
											<option value="ALGERIA">ALGERIA</option>
											<option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
											<option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
											<option value="ANDORRA">ANDORRA</option>
											<option value="ANGOLA">ANGOLA</option>
											<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
											<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
											<option value="APOLIDE">APOLIDE</option>
											<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
											<option value="ARGENTINA">ARGENTINA</option>
											<option value="ARMENIA">ARMENIA</option>
											<option value="ARUBA">ARUBA</option>
											<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
											<option value="AUSTRALIA">AUSTRALIA</option>
											<option value="AUSTRIA">AUSTRIA</option>
											<option value="AZERBAIGIAN">AZERBAIGIAN</option>
											<option value="BAHAMA">BAHAMA</option>
											<option value="BAHREIN">BAHREIN</option>
											<option value="BANGLADESH">BANGLADESH</option>
											<option value="BARBADOS">BARBADOS</option>
											<option value="BELGIO">BELGIO</option>
											<option value="BELIZE">BELIZE</option>
											<option value="BENIN">BENIN</option>
											<option value="BERMUDA">BERMUDA</option>
											<option value="BHUTAN">BHUTAN</option>
											<option value="BIELORUSSIA">BIELORUSSIA</option>
											<option value="BOLIVIA">BOLIVIA</option>
											<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
											<option value="BOTSWANA">BOTSWANA</option>
											<option value="BRASILE">BRASILE</option>
											<option value="BRUNEI">BRUNEI</option>
											<option value="BULGARIA">BULGARIA</option>
											<option value="BURKINA FASO">BURKINA FASO</option>
											<option value="BURUNDI">BURUNDI</option>
											<option value="CAMERUN">CAMERUN</option>
											<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
											<option value="CANADA">CANADA</option>
											<option value="CAPO VERDE">CAPO VERDE</option>
											<option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
											<option value="CENTROAFRICANA REP.">CENTROAFRICANA REP.</option>
											<option value="CIAD">CIAD</option>
											<option value="CILE">CILE</option>
											<option value="CINA REP.POP.">CINA REP.POP.</option>
											<option value="CIPRO">CIPRO</option>
											<option value="COLOMBIA">COLOMBIA</option>
											<option value="CONGO">CONGO</option>
											<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
											<option value="COREA DEL NORD">COREA DEL NORD</option>
											<option value="COREA DEL SUD">COREA DEL SUD</option>
											<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
											<option value="COSTARICA">COSTARICA</option>
											<option value="CROAZIA">CROAZIA</option>
											<option value="CUBA">CUBA</option>
											<option value="DANIMARCA">DANIMARCA</option>
											<option value="DOMINICA">DOMINICA</option>
											<option value="DOMINICANA REP.">DOMINICANA REP.</option>
											<option value="DUBAI">DUBAI</option>
											<option value="ECUADOR">ECUADOR</option>
											<option value="EGITTO">EGITTO</option>
											<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
											<option value="ERITREA">ERITREA</option>
											<option value="ESTONIA">ESTONIA</option>
											<option value="ETIOPIA">ETIOPIA</option>
											<option value="FILIPPINE">FILIPPINE</option>
											<option value="FINLANDIA">FINLANDIA</option>
											<option value="FRANCIA">FRANCIA</option>
											<option value="FUIJAYRAH">FUIJAYRAH</option>
											<option value="GABON">GABON</option>
											<option value="GAMBIA">GAMBIA</option>
											<option value="GEORGIA">GEORGIA</option>
											<option value="GERMANIA">GERMANIA</option>
											<option value="GHANA">GHANA</option>
											<option value="GIAMAICA">GIAMAICA</option>
											<option value="GIAPPONE">GIAPPONE</option>
											<option value="GIBILTERRA">GIBILTERRA</option>
											<option value="GIBUTI">GIBUTI</option>
											<option value="GIORDANIA">GIORDANIA</option>
											<option value="GRECIA">GRECIA</option>
											<option value="GRENADA">GRENADA</option>
											<option value="GROENLANDIA">GROENLANDIA</option>
											<option value="GUADALUPA">GUADALUPA</option>
											<option value="GUATEMALA">GUATEMALA</option>
											<option value="GUERNSEY">GUERNSEY</option>
											<option value="GUINEA">GUINEA</option>
											<option value="GUINEA BISSAU">GUINEA BISSAU</option>
											<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
											<option value="GUYANA">GUYANA</option>
											<option value="HAITI">HAITI</option>
											<option value="HONDURAS">HONDURAS</option>
											<option value="HONG KONG">HONG KONG</option>
											<option value="INDIA">INDIA</option>
											<option value="INDONESIA">INDONESIA</option>
											<option value="IRAN">IRAN</option>
											<option value="IRAQ">IRAQ</option>
											<option value="IRLANDA">IRLANDA</option>
											<option value="ISLANDA">ISLANDA</option>
											<option value="ISOLA DELLA RIUNIONE">ISOLA DELLA RIUNIONE</option>
											<option value="ISOLA MAN">ISOLA MAN</option>
											<option value="ISOLA MAURIZIO">ISOLA MAURIZIO</option>
											<option value="ISOLE COMORE">ISOLE COMORE</option>
											<option value="ISOLE FAR OER">ISOLE FAR OER</option>
											<option value="ISOLE FIJI">ISOLE FIJI</option>
											<option value="ISOLE SALOMONE">ISOLE SALOMONE</option>
											<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
											<option value="ISOLE VERGINI U.S.A.">ISOLE VERGINI U.S.A.</option>
											<option value="ISRAELE">ISRAELE</option>
											<option value="JERSEY">JERSEY</option>
											<option value="JUGOSLAVIA">JUGOSLAVIA</option>
											<option value="KAMPUCHEA">KAMPUCHEA</option>
											<option value="KAZAKISTAN">KAZAKISTAN</option>
											<option value="KENYA">KENYA</option>
											<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
											<option value="KIRIBATI">KIRIBATI</option>
											<option value="KOSSOVO">KOSSOVO</option>
											<option value="KUWAIT">KUWAIT</option>
											<option value="LAOS">LAOS</option>
											<option value="LESOTHO">LESOTHO</option>
											<option value="LETTONIA">LETTONIA</option>
											<option value="LIBANO">LIBANO</option>
											<option value="LIBERIA">LIBERIA</option>
											<option value="LIBIA">LIBIA</option>
											<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
											<option value="LITUANIA">LITUANIA</option>
											<option value="LUSSEMBURGO">LUSSEMBURGO</option>
											<option value="MACEDONIA">MACEDONIA</option>
											<option value="MADAGASCAR">MADAGASCAR</option>
											<option value="MALAWI">MALAWI</option>
											<option value="MALAYSIA">MALAYSIA</option>
											<option value="MALDIVE">MALDIVE</option>
											<option value="MALI">MALI</option>
											<option value="MALTA">MALTA</option>
											<option value="MAROCCO">MAROCCO</option>
											<option value="MARSHALL">MARSHALL</option>
											<option value="MARTINICA">MARTINICA</option>
											<option value="MAURITANIA">MAURITANIA</option>
											<option value="MESSICO">MESSICO</option>
											<option value="MOLDAVIA">MOLDAVIA</option>
											<option value="MONGOLIA">MONGOLIA</option>
											<option value="MONTENEGRO">MONTENEGRO</option>
											<option value="MOZAMBICO">MOZAMBICO</option>
											<option value="MYANMAR">MYANMAR</option>
											<option value="N.C.">N.C.</option>
											<option value="NAMIBIA">NAMIBIA</option>
											<option value="NAURU">NAURU</option>
											<option value="NEPAL">NEPAL</option>
											<option value="NICARAGUA">NICARAGUA</option>
											<option value="NIGER">NIGER</option>
											<option value="NIGERIA">NIGERIA</option>
											<option value="NORVEGIA">NORVEGIA</option>
											<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
											<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
											<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>
											<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
											<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
											<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
											<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
											<option value="OLANDA">OLANDA</option>
											<option value="OMAN">OMAN</option>
											<option value="PAKISTAN">PAKISTAN</option>
											<option value="PANAMA">PANAMA</option>
											<option value="PAPUA - NUOVA  GUINEA">PAPUA - NUOVA  GUINEA</option>
											<option value="PARAGUAY">PARAGUAY</option>
											<option value="PERU'">PERU'</option>
											<option value="POLONIA">POLONIA</option>
											<option value="PORTOGALLO">PORTOGALLO</option>
											<option value="PORTORICO">PORTORICO</option>
											<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
											<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
											<option value="QATAR">QATAR</option>
											<option value="RAS EL KHAIMAH">RAS EL KHAIMAH</option>
											<option value="REGNO UNITO">REGNO UNITO</option>
											<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
											<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
											<option value="ROMANIA">ROMANIA</option>
											<option value="RUSSIA">RUSSIA</option>
											<option value="RWANDA">RWANDA</option>
											<option value="SAINT LUCIA">SAINT LUCIA</option>
											<option value="SALVADOR">SALVADOR</option>
											<option value="SAMOA">SAMOA</option>
											<option value="SAN MARINO">SAN MARINO</option>
											<option value="SANT'ELENA">SANT'ELENA</option>
											<option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
											<option value="SENEGAL">SENEGAL</option>
											<option value="SERBIA">SERBIA</option>
											<option value="SERBIA AND MONTENEGRO">SERBIA AND MONTENEGRO</option>
											<option value="SEYCHELLES">SEYCHELLES</option>
											<option value="SHARJAH">SHARJAH</option>
											<option value="SIERRA LEONE">SIERRA LEONE</option>
											<option value="SINGAPORE">SINGAPORE</option>
											<option value="SIRIA">SIRIA</option>
											<option value="SLOVENIA">SLOVENIA</option>
											<option value="SOMALIA">SOMALIA</option>
											<option value="SPAGNA">SPAGNA</option>
											<option value="SRI LANKA">SRI LANKA</option>
											<option value="ST. VINCENT E GRENADINE">ST. VINCENT E GRENADINE</option>
											<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
											<option value="SUDAFRICANA REP.">SUDAFRICANA REP.</option>
											<option value="SUDAN">SUDAN</option>
											<option value="SURINAME">SURINAME</option>
											<option value="SVEZIA">SVEZIA</option>
											<option value="SVIZZERA">SVIZZERA</option>
											<option value="SWAZILAND">SWAZILAND</option>
											<option value="TAGIKISTAN">TAGIKISTAN</option>
											<option value="TAIWAN">TAIWAN</option>
											<option value="TANZANIA">TANZANIA</option>
											<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
											<option value="TERRITORIO BRITANNICO OCEANO I">TERRITORIO BRITANNICO OCEANO I</option>
											<option value="THAILANDIA">THAILANDIA</option>
											<option value="TOGO">TOGO</option>
											<option value="TONGA">TONGA</option>
											<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
											<option value="TUNISIA">TUNISIA</option>
											<option value="TURCHIA">TURCHIA</option>
											<option value="TURKMENISTAN">TURKMENISTAN</option>
											<option value="TURKS E CAICOS">TURKS E CAICOS</option>
											<option value="TUVALU'">TUVALU'</option>
											<option value="UCRAINA">UCRAINA</option>
											<option value="UGANDA">UGANDA</option>
											<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
											<option value="UNGHERIA">UNGHERIA</option>
											<option value="URUGUAY">URUGUAY</option>
											<option value="UZBEKISTAN">UZBEKISTAN</option>
											<option value="VANUATU">VANUATU</option>
											<option value="VENEZUELA">VENEZUELA</option>
											<option value="VIETNAM">VIETNAM</option>
											<option value="YEMEN">YEMEN</option>
											<option value="ZAMBIA">ZAMBIA</option>
											<option value="ZIMBABWE">ZIMBABWE</option>

										</select>	
										</div>
										
										<div class="col-md-5 form-group" id="cittadinanzaDiv" style="display: none;">
											<label for="cittadinanza">Cittadinanza*</label>		
											<select name="cittadinanza" id="cittadinanza" class="form-control combobox required">
											<option value="">Seleziona</option>
											<option value="ABU DHABI">ABU DHABI</option>
											<option value="AFGHANISTAN">AFGHANISTAN</option>
											<option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
											<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
											<option value="AJMAN">AJMAN</option>
											<option value="ALBANIA">ALBANIA</option>
											<option value="ALGERIA">ALGERIA</option>
											<option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
											<option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
											<option value="ANDORRA">ANDORRA</option>
											<option value="ANGOLA">ANGOLA</option>
											<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
											<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
											<option value="APOLIDE">APOLIDE</option>
											<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
											<option value="ARGENTINA">ARGENTINA</option>
											<option value="ARMENIA">ARMENIA</option>
											<option value="ARUBA">ARUBA</option>
											<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
											<option value="AUSTRALIA">AUSTRALIA</option>
											<option value="AUSTRIA">AUSTRIA</option>
											<option value="AZERBAIGIAN">AZERBAIGIAN</option>
											<option value="BAHAMA">BAHAMA</option>
											<option value="BAHREIN">BAHREIN</option>
											<option value="BANGLADESH">BANGLADESH</option>
											<option value="BARBADOS">BARBADOS</option>
											<option value="BELGIO">BELGIO</option>
											<option value="BELIZE">BELIZE</option>
											<option value="BENIN">BENIN</option>
											<option value="BERMUDA">BERMUDA</option>
											<option value="BHUTAN">BHUTAN</option>
											<option value="BIELORUSSIA">BIELORUSSIA</option>
											<option value="BOLIVIA">BOLIVIA</option>
											<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
											<option value="BOTSWANA">BOTSWANA</option>
											<option value="BRASILE">BRASILE</option>
											<option value="BRUNEI">BRUNEI</option>
											<option value="BULGARIA">BULGARIA</option>
											<option value="BURKINA FASO">BURKINA FASO</option>
											<option value="BURUNDI">BURUNDI</option>
											<option value="CAMERUN">CAMERUN</option>
											<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
											<option value="CANADA">CANADA</option>
											<option value="CAPO VERDE">CAPO VERDE</option>
											<option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
											<option value="CENTROAFRICANA REP.">CENTROAFRICANA REP.</option>
											<option value="CIAD">CIAD</option>
											<option value="CILE">CILE</option>
											<option value="CINA REP.POP.">CINA REP.POP.</option>
											<option value="CIPRO">CIPRO</option>
											<option value="COLOMBIA">COLOMBIA</option>
											<option value="CONGO">CONGO</option>
											<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
											<option value="COREA DEL NORD">COREA DEL NORD</option>
											<option value="COREA DEL SUD">COREA DEL SUD</option>
											<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
											<option value="COSTARICA">COSTARICA</option>
											<option value="CROAZIA">CROAZIA</option>
											<option value="CUBA">CUBA</option>
											<option value="DANIMARCA">DANIMARCA</option>
											<option value="DOMINICA">DOMINICA</option>
											<option value="DOMINICANA REP.">DOMINICANA REP.</option>
											<option value="DUBAI">DUBAI</option>
											<option value="ECUADOR">ECUADOR</option>
											<option value="EGITTO">EGITTO</option>
											<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
											<option value="ERITREA">ERITREA</option>
											<option value="ESTONIA">ESTONIA</option>
											<option value="ETIOPIA">ETIOPIA</option>
											<option value="FILIPPINE">FILIPPINE</option>
											<option value="FINLANDIA">FINLANDIA</option>
											<option value="FRANCIA">FRANCIA</option>
											<option value="FUIJAYRAH">FUIJAYRAH</option>
											<option value="GABON">GABON</option>
											<option value="GAMBIA">GAMBIA</option>
											<option value="GEORGIA">GEORGIA</option>
											<option value="GERMANIA">GERMANIA</option>
											<option value="GHANA">GHANA</option>
											<option value="GIAMAICA">GIAMAICA</option>
											<option value="GIAPPONE">GIAPPONE</option>
											<option value="GIBILTERRA">GIBILTERRA</option>
											<option value="GIBUTI">GIBUTI</option>
											<option value="GIORDANIA">GIORDANIA</option>
											<option value="GRECIA">GRECIA</option>
											<option value="GRENADA">GRENADA</option>
											<option value="GROENLANDIA">GROENLANDIA</option>
											<option value="GUADALUPA">GUADALUPA</option>
											<option value="GUATEMALA">GUATEMALA</option>
											<option value="GUERNSEY">GUERNSEY</option>
											<option value="GUINEA">GUINEA</option>
											<option value="GUINEA BISSAU">GUINEA BISSAU</option>
											<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
											<option value="GUYANA">GUYANA</option>
											<option value="HAITI">HAITI</option>
											<option value="HONDURAS">HONDURAS</option>
											<option value="HONG KONG">HONG KONG</option>
											<option value="INDIA">INDIA</option>
											<option value="INDONESIA">INDONESIA</option>
											<option value="IRAN">IRAN</option>
											<option value="IRAQ">IRAQ</option>
											<option value="IRLANDA">IRLANDA</option>
											<option value="ISLANDA">ISLANDA</option>
											<option value="ISOLA DELLA RIUNIONE">ISOLA DELLA RIUNIONE</option>
											<option value="ISOLA MAN">ISOLA MAN</option>
											<option value="ISOLA MAURIZIO">ISOLA MAURIZIO</option>
											<option value="ISOLE COMORE">ISOLE COMORE</option>
											<option value="ISOLE FAR OER">ISOLE FAR OER</option>
											<option value="ISOLE FIJI">ISOLE FIJI</option>
											<option value="ISOLE SALOMONE">ISOLE SALOMONE</option>
											<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
											<option value="ISOLE VERGINI U.S.A.">ISOLE VERGINI U.S.A.</option>
											<option value="ISRAELE">ISRAELE</option>
											<option value="ITALIA">ITALIA</option>
											<option value="JERSEY">JERSEY</option>
											<option value="JUGOSLAVIA">JUGOSLAVIA</option>
											<option value="KAMPUCHEA">KAMPUCHEA</option>
											<option value="KAZAKISTAN">KAZAKISTAN</option>
											<option value="KENYA">KENYA</option>
											<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
											<option value="KIRIBATI">KIRIBATI</option>
											<option value="KOSSOVO">KOSSOVO</option>
											<option value="KUWAIT">KUWAIT</option>
											<option value="LAOS">LAOS</option>
											<option value="LESOTHO">LESOTHO</option>
											<option value="LETTONIA">LETTONIA</option>
											<option value="LIBANO">LIBANO</option>
											<option value="LIBERIA">LIBERIA</option>
											<option value="LIBIA">LIBIA</option>
											<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
											<option value="LITUANIA">LITUANIA</option>
											<option value="LUSSEMBURGO">LUSSEMBURGO</option>
											<option value="MACEDONIA">MACEDONIA</option>
											<option value="MADAGASCAR">MADAGASCAR</option>
											<option value="MALAWI">MALAWI</option>
											<option value="MALAYSIA">MALAYSIA</option>
											<option value="MALDIVE">MALDIVE</option>
											<option value="MALI">MALI</option>
											<option value="MALTA">MALTA</option>
											<option value="MAROCCO">MAROCCO</option>
											<option value="MARSHALL">MARSHALL</option>
											<option value="MARTINICA">MARTINICA</option>
											<option value="MAURITANIA">MAURITANIA</option>
											<option value="MESSICO">MESSICO</option>
											<option value="MOLDAVIA">MOLDAVIA</option>
											<option value="MONGOLIA">MONGOLIA</option>
											<option value="MONTENEGRO">MONTENEGRO</option>
											<option value="MOZAMBICO">MOZAMBICO</option>
											<option value="MYANMAR">MYANMAR</option>
											<option value="N.C.">N.C.</option>
											<option value="NAMIBIA">NAMIBIA</option>
											<option value="NAURU">NAURU</option>
											<option value="NEPAL">NEPAL</option>
											<option value="NICARAGUA">NICARAGUA</option>
											<option value="NIGER">NIGER</option>
											<option value="NIGERIA">NIGERIA</option>
											<option value="NORVEGIA">NORVEGIA</option>
											<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
											<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
											<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>
											<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
											<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
											<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
											<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
											<option value="OLANDA">OLANDA</option>
											<option value="OMAN">OMAN</option>
											<option value="PAKISTAN">PAKISTAN</option>
											<option value="PANAMA">PANAMA</option>
											<option value="PAPUA - NUOVA  GUINEA">PAPUA - NUOVA  GUINEA</option>
											<option value="PARAGUAY">PARAGUAY</option>
											<option value="PERU'">PERU'</option>
											<option value="POLONIA">POLONIA</option>
											<option value="PORTOGALLO">PORTOGALLO</option>
											<option value="PORTORICO">PORTORICO</option>
											<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
											<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
											<option value="QATAR">QATAR</option>
											<option value="RAS EL KHAIMAH">RAS EL KHAIMAH</option>
											<option value="REGNO UNITO">REGNO UNITO</option>
											<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
											<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
											<option value="ROMANIA">ROMANIA</option>
											<option value="RUSSIA">RUSSIA</option>
											<option value="RWANDA">RWANDA</option>
											<option value="SAINT LUCIA">SAINT LUCIA</option>
											<option value="SALVADOR">SALVADOR</option>
											<option value="SAMOA">SAMOA</option>
											<option value="SAN MARINO">SAN MARINO</option>
											<option value="SANT'ELENA">SANT'ELENA</option>
											<option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
											<option value="SENEGAL">SENEGAL</option>
											<option value="SERBIA">SERBIA</option>
											<option value="SERBIA AND MONTENEGRO">SERBIA AND MONTENEGRO</option>
											<option value="SEYCHELLES">SEYCHELLES</option>
											<option value="SHARJAH">SHARJAH</option>
											<option value="SIERRA LEONE">SIERRA LEONE</option>
											<option value="SINGAPORE">SINGAPORE</option>
											<option value="SIRIA">SIRIA</option>
											<option value="SLOVENIA">SLOVENIA</option>
											<option value="SOMALIA">SOMALIA</option>
											<option value="SPAGNA">SPAGNA</option>
											<option value="SRI LANKA">SRI LANKA</option>
											<option value="ST. VINCENT E GRENADINE">ST. VINCENT E GRENADINE</option>
											<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
											<option value="SUDAFRICANA REP.">SUDAFRICANA REP.</option>
											<option value="SUDAN">SUDAN</option>
											<option value="SURINAME">SURINAME</option>
											<option value="SVEZIA">SVEZIA</option>
											<option value="SVIZZERA">SVIZZERA</option>
											<option value="SWAZILAND">SWAZILAND</option>
											<option value="TAGIKISTAN">TAGIKISTAN</option>
											<option value="TAIWAN">TAIWAN</option>
											<option value="TANZANIA">TANZANIA</option>
											<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
											<option value="TERRITORIO BRITANNICO OCEANO I">TERRITORIO BRITANNICO OCEANO I</option>
											<option value="THAILANDIA">THAILANDIA</option>
											<option value="TOGO">TOGO</option>
											<option value="TONGA">TONGA</option>
											<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
											<option value="TUNISIA">TUNISIA</option>
											<option value="TURCHIA">TURCHIA</option>
											<option value="TURKMENISTAN">TURKMENISTAN</option>
											<option value="TURKS E CAICOS">TURKS E CAICOS</option>
											<option value="TUVALU'">TUVALU'</option>
											<option value="UCRAINA">UCRAINA</option>
											<option value="UGANDA">UGANDA</option>
											<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
											<option value="UNGHERIA">UNGHERIA</option>
											<option value="URUGUAY">URUGUAY</option>
											<option value="UZBEKISTAN">UZBEKISTAN</option>
											<option value="VANUATU">VANUATU</option>
											<option value="VENEZUELA">VENEZUELA</option>
											<option value="VIETNAM">VIETNAM</option>
											<option value="YEMEN">YEMEN</option>
											<option value="ZAMBIA">ZAMBIA</option>
											<option value="ZIMBABWE">ZIMBABWE</option>
										</select>
										</div>
										
										
										<div class="col-md-5 form-group" id="comuneNascitaDiv">
											<label for="comuneNascita">Comune di nascita*</label>
											<select name="comuneNascita" id="comuneNascita" class="form-control combobox required" disabled>
												<option value="">Seleziona</option>
											</select>
										</div>
									</div>
									<div class="spacer-no-border hidden-xs"></div>
									<div class="row">
											<div class="col-md-12">
												<table cellspacing="0" cellpadding="0" border="0">
													<tr>
															<td width="79%" class="form-group"><label for="indirizzo">Indirizzo di domicilio*</label></td>
															<td align="center" width="1%"></td>
															<td width="20%" class="form-group"><label for="civico">Numero*</label></td>
													</tr>
													<tr>
															<td width="79%" class="form-group"><input type="text" name="indirizzo" id="indirizzo" value="" class="textinput form-control"></td>
															<td align="center" width="1%"></td>
															<td width="20%" class="form-group"><input type="text" name="civico" id="civico" value="" class="textinput form-control"></td>
													</tr>
												</table>
											</div>
									</div>
									<div class="spacer-no-border hidden-xs"></div>
									<div class="row">
										<div class="col-md-4 form-group">
											<label for="provincia">Provincia di domicilio*</label>
											<select name="provincia" id="provincia" class="form-control combobox required">
												<option value="" selected="selected">Seleziona</option>
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
												<option value="EN">EN</option>
												<option value="FC">FC</option>
												<option value="FE">FE</option>
												<option value="FG">FG</option>
												<option value="FI">FI</option>
												<option value="FM">FM</option>
												<option value="FR">FR</option>
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
												<option value="PN">PN</option>
												<option value="PO">PO</option>
												<option value="PR">PR</option>
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
											</select>
										</div>
										<!--<div class="col-md-5 form-group">
											<label for="comune">Comune di domicilio*</label>
											<select name="comune" id="comune" class="form-control combobox required" disabled>
												<option value="">Seleziona</option>
											</select>
										</div>-->
										<div class="col-md-3 form-group">
											<label for="cap">CAP*</label>
											<input type="text" name="cap" id="cap" value="" class="textinput form-control">											
										</div>
									</div>
									<div class="spacer-no-border hidden-xs"></div>
									<div class="row">
										<div class="col-md-4 form-group">
											<label for="catProfessionale">Categoria professionale*</label>
											<select name="catProfessionale" id="catProfessionale" class="form-control combobox required">
												<option value="">Seleziona</option>
												<option value="Lavoratori autonomi" >Lavoratori autonomi</option>
												<option value="Lavoratori dipendenti" >Lavoratori dipendenti</option>
												<option value="Non occupati">Non occupati</option>
											</select>
										</div>
										<div class="col-md-4 form-group">
											<label for="professione">Professione*</label>
											<select name="professione" id="professione" class="form-control combobox required" disabled>
												<option value="">Seleziona</option>
												<option value="">&nbsp;</option>
											</select>
										</div>
										<div class="col-md-4 form-group">
											<label for="settore">Settore di attivit&agrave;*</label>
											<select name="settore" id="settore" class="form-control combobox required">
												<option value="">Seleziona</option>
												<option value="Nessuno" >Nessuno</option>
												<option value="Commercio" >Commercio</option>
												<option value="Industria privata" >Industria privata</option>
												<option value="Servizi privati" >Servizi privati</option>
												<option value="Agricoltura" >Agricoltura</option>
												<option value="Aziende pubbliche e Stato" >Aziende pubbliche e Stato</option>
												<option value="Enti locali" >Enti locali (Regione, Comune)</option>
											</select>
										</div>
									</div>
									<div class="spacer-no-border"></div>
									<div class="row">
									<div class="addElement col-md-12">
										<h5><span class="espandi">Aggiungi secondo intestatario</span> <span class="comprimi" style="display:none">Rimuovi secondo intestatario</span>
										<span class="textTitle">C'&egrave; un secondo intestatario? Comincia ad inserire qui i suoi dati. Potrai inserire altri intestatari e garanti quando ti chiamer&agrave; il nostro consulente</span>
										</h5>
										<div style="display:none">
											<div class="spacer-no-border hidden-xs">&nbsp;</div>
											<div class="row">
												<div class="col-sm-12 form-section-title">
													Dati del secondo intestatario
												</div>
											</div>
											<div class="spacer-no-border hidden-xs">&nbsp;</div>
											<div class="row">
												<div class="col-md-6 form-group">
													<label for="nome_int1">Nome*</label>
													<input type="text" name="nome_int1" id="nome_int1" value="" class="textinput form-control">
												</div>
												<div class="col-md-6 form-group">
													<label for="cognome_int1">Cognome*</label>
													<input type="text" name="cognome_int1" id="cognome_int1" value="" class="textinput form-control">
												</div>
											</div>
											<div class="spacer-no-border hidden-xs"></div>
											<div class="row">
												<div class="col-md-5">
													<label for="ggNascita_int1">Data nascita*</label>
													<table cellspacing="0" cellpadding="0" border="0">
														<tbody><tr>
															<td width="22%" class="form-group"><input type="text" placeholder="gg" maxlength="2" name="ggNascita_int1" id="ggNascita_int1" value="" class="textinput form-control"></td>
															<td align="center" width="3%">/</td>
															<td width="22%" class="form-group"><input type="text" placeholder="mm" maxlength="2" name="mmNascita_int1" id="mmNascita_int1" value="" class="textinput form-control"></td>
															<td align="center" width="3%">/</td>
															<td width="50%" class="form-group"><input type="text" placeholder="aaaa" maxlength="4" name="annoNascita_int1" id="annoNascita_int1" value="" class="textinput form-control"></td>
														</tr>
													</tbody></table>
												</div>
												<div class="col-md-3 form-group">
													<label for="sesso_int1">Sesso*</label><br>
													<div class="radio radio-inline">
														<input type="radio" name="sesso_int1" value="Maschio">
														<label for="sxm">M</label>
													</div>
													<div class="radio radio-inline">
														<input type="radio" name="sesso_int1" value="Femmina">
														<label for="sxf">F</label>
													</div>
												</div>
												<div class="col-md-4 form-group">
													<label for="cfisc_int">Codice fiscale*</label>
													<input type="text" name="cfisc_int1" id="cfisc_int1" value="" class="textinput form-control">
												</div>
											</div>
											<div class="spacer-no-border hidden-xs"></div>
											<div class="row">
												<div class="col-md-3 form-group">
													<label for="estero_int1">Nato all'estero*</label>
													<div class="radio radio-inline">
														<input type="radio" name="estero_int1" value="Si">
														<label for="sxm">Si</label>
													</div>
													<div class="radio radio-inline">
														<input type="radio" name="estero_int1" value="No">
														<label for="sxf">No</label>
													</div>
												</div>
												<div class="col-md-4 form-group" id="natoItalia_int1">
												<label for="provNascita_int1">Provincia di nascita*</label>
												<select name="provNascita_int1" id="provNascita_int1" class="form-control combobox required">
												<option value="" selected="selected">Seleziona</option>
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
												<option value="EN">EN</option>
												<option value="FC">FC</option>
												<option value="FE">FE</option>
												<option value="FG">FG</option>
												<option value="FI">FI</option>
												<option value="FM">FM</option>
												<option value="FR">FR</option>
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
												<option value="PN">PN</option>
												<option value="PO">PO</option>
												<option value="PR">PR</option>
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
											</select>
												
												</div>
												<div class="col-md-4 form-group" id="natoEstero_int1" style="display: none;">
													<label for="nazionalita_int1">Stato*</label>		
													<select name="nazionalita_int1" id="nazionalita_int1" class="form-control combobox required">
														<option value="">Seleziona</option>
														<option value="ABU DHABI">ABU DHABI</option>
														<option value="AFGHANISTAN">AFGHANISTAN</option>
														<option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
														<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
														<option value="AJMAN">AJMAN</option>
														<option value="ALBANIA">ALBANIA</option>
														<option value="ALGERIA">ALGERIA</option>
														<option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
														<option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
														<option value="ANDORRA">ANDORRA</option>
														<option value="ANGOLA">ANGOLA</option>
														<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
														<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
														<option value="APOLIDE">APOLIDE</option>
														<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
														<option value="ARGENTINA">ARGENTINA</option>
														<option value="ARMENIA">ARMENIA</option>
														<option value="ARUBA">ARUBA</option>
														<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
														<option value="AUSTRALIA">AUSTRALIA</option>
														<option value="AUSTRIA">AUSTRIA</option>
														<option value="AZERBAIGIAN">AZERBAIGIAN</option>
														<option value="BAHAMA">BAHAMA</option>
														<option value="BAHREIN">BAHREIN</option>
														<option value="BANGLADESH">BANGLADESH</option>
														<option value="BARBADOS">BARBADOS</option>
														<option value="BELGIO">BELGIO</option>
														<option value="BELIZE">BELIZE</option>
														<option value="BENIN">BENIN</option>
														<option value="BERMUDA">BERMUDA</option>
														<option value="BHUTAN">BHUTAN</option>
														<option value="BIELORUSSIA">BIELORUSSIA</option>
														<option value="BOLIVIA">BOLIVIA</option>
														<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
														<option value="BOTSWANA">BOTSWANA</option>
														<option value="BRASILE">BRASILE</option>
														<option value="BRUNEI">BRUNEI</option>
														<option value="BULGARIA">BULGARIA</option>
														<option value="BURKINA FASO">BURKINA FASO</option>
														<option value="BURUNDI">BURUNDI</option>
														<option value="CAMERUN">CAMERUN</option>
														<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
														<option value="CANADA">CANADA</option>
														<option value="CAPO VERDE">CAPO VERDE</option>
														<option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
														<option value="CENTROAFRICANA REP.">CENTROAFRICANA REP.</option>
														<option value="CIAD">CIAD</option>
														<option value="CILE">CILE</option>
														<option value="CINA REP.POP.">CINA REP.POP.</option>
														<option value="CIPRO">CIPRO</option>
														<option value="COLOMBIA">COLOMBIA</option>
														<option value="CONGO">CONGO</option>
														<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
														<option value="COREA DEL NORD">COREA DEL NORD</option>
														<option value="COREA DEL SUD">COREA DEL SUD</option>
														<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
														<option value="COSTARICA">COSTARICA</option>
														<option value="CROAZIA">CROAZIA</option>
														<option value="CUBA">CUBA</option>
														<option value="DANIMARCA">DANIMARCA</option>
														<option value="DOMINICA">DOMINICA</option>
														<option value="DOMINICANA REP.">DOMINICANA REP.</option>
														<option value="DUBAI">DUBAI</option>
														<option value="ECUADOR">ECUADOR</option>
														<option value="EGITTO">EGITTO</option>
														<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
														<option value="ERITREA">ERITREA</option>
														<option value="ESTONIA">ESTONIA</option>
														<option value="ETIOPIA">ETIOPIA</option>
														<option value="FILIPPINE">FILIPPINE</option>
														<option value="FINLANDIA">FINLANDIA</option>
														<option value="FRANCIA">FRANCIA</option>
														<option value="FUIJAYRAH">FUIJAYRAH</option>
														<option value="GABON">GABON</option>
														<option value="GAMBIA">GAMBIA</option>
														<option value="GEORGIA">GEORGIA</option>
														<option value="GERMANIA">GERMANIA</option>
														<option value="GHANA">GHANA</option>
														<option value="GIAMAICA">GIAMAICA</option>
														<option value="GIAPPONE">GIAPPONE</option>
														<option value="GIBILTERRA">GIBILTERRA</option>
														<option value="GIBUTI">GIBUTI</option>
														<option value="GIORDANIA">GIORDANIA</option>
														<option value="GRECIA">GRECIA</option>
														<option value="GRENADA">GRENADA</option>
														<option value="GROENLANDIA">GROENLANDIA</option>
														<option value="GUADALUPA">GUADALUPA</option>
														<option value="GUATEMALA">GUATEMALA</option>
														<option value="GUERNSEY">GUERNSEY</option>
														<option value="GUINEA">GUINEA</option>
														<option value="GUINEA BISSAU">GUINEA BISSAU</option>
														<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
														<option value="GUYANA">GUYANA</option>
														<option value="HAITI">HAITI</option>
														<option value="HONDURAS">HONDURAS</option>
														<option value="HONG KONG">HONG KONG</option>
														<option value="INDIA">INDIA</option>
														<option value="INDONESIA">INDONESIA</option>
														<option value="IRAN">IRAN</option>
														<option value="IRAQ">IRAQ</option>
														<option value="IRLANDA">IRLANDA</option>
														<option value="ISLANDA">ISLANDA</option>
														<option value="ISOLA DELLA RIUNIONE">ISOLA DELLA RIUNIONE</option>
														<option value="ISOLA MAN">ISOLA MAN</option>
														<option value="ISOLA MAURIZIO">ISOLA MAURIZIO</option>
														<option value="ISOLE COMORE">ISOLE COMORE</option>
														<option value="ISOLE FAR OER">ISOLE FAR OER</option>
														<option value="ISOLE FIJI">ISOLE FIJI</option>
														<option value="ISOLE SALOMONE">ISOLE SALOMONE</option>
														<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
														<option value="ISOLE VERGINI U.S.A.">ISOLE VERGINI U.S.A.</option>
														<option value="ISRAELE">ISRAELE</option>
														<option value="JERSEY">JERSEY</option>
														<option value="JUGOSLAVIA">JUGOSLAVIA</option>
														<option value="KAMPUCHEA">KAMPUCHEA</option>
														<option value="KAZAKISTAN">KAZAKISTAN</option>
														<option value="KENYA">KENYA</option>
														<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
														<option value="KIRIBATI">KIRIBATI</option>
														<option value="KOSSOVO">KOSSOVO</option>
														<option value="KUWAIT">KUWAIT</option>
														<option value="LAOS">LAOS</option>
														<option value="LESOTHO">LESOTHO</option>
														<option value="LETTONIA">LETTONIA</option>
														<option value="LIBANO">LIBANO</option>
														<option value="LIBERIA">LIBERIA</option>
														<option value="LIBIA">LIBIA</option>
														<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
														<option value="LITUANIA">LITUANIA</option>
														<option value="LUSSEMBURGO">LUSSEMBURGO</option>
														<option value="MACEDONIA">MACEDONIA</option>
														<option value="MADAGASCAR">MADAGASCAR</option>
														<option value="MALAWI">MALAWI</option>
														<option value="MALAYSIA">MALAYSIA</option>
														<option value="MALDIVE">MALDIVE</option>
														<option value="MALI">MALI</option>
														<option value="MALTA">MALTA</option>
														<option value="MAROCCO">MAROCCO</option>
														<option value="MARSHALL">MARSHALL</option>
														<option value="MARTINICA">MARTINICA</option>
														<option value="MAURITANIA">MAURITANIA</option>
														<option value="MESSICO">MESSICO</option>
														<option value="MOLDAVIA">MOLDAVIA</option>
														<option value="MONGOLIA">MONGOLIA</option>
														<option value="MONTENEGRO">MONTENEGRO</option>
														<option value="MOZAMBICO">MOZAMBICO</option>
														<option value="MYANMAR">MYANMAR</option>
														<option value="N.C.">N.C.</option>
														<option value="NAMIBIA">NAMIBIA</option>
														<option value="NAURU">NAURU</option>
														<option value="NEPAL">NEPAL</option>
														<option value="NICARAGUA">NICARAGUA</option>
														<option value="NIGER">NIGER</option>
														<option value="NIGERIA">NIGERIA</option>
														<option value="NORVEGIA">NORVEGIA</option>
														<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
														<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
														<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>
														<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
														<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
														<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
														<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
														<option value="OLANDA">OLANDA</option>
														<option value="OMAN">OMAN</option>
														<option value="PAKISTAN">PAKISTAN</option>
														<option value="PANAMA">PANAMA</option>
														<option value="PAPUA - NUOVA  GUINEA">PAPUA - NUOVA  GUINEA</option>
														<option value="PARAGUAY">PARAGUAY</option>
														<option value="PERU'">PERU'</option>
														<option value="POLONIA">POLONIA</option>
														<option value="PORTOGALLO">PORTOGALLO</option>
														<option value="PORTORICO">PORTORICO</option>
														<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
														<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
														<option value="QATAR">QATAR</option>
														<option value="RAS EL KHAIMAH">RAS EL KHAIMAH</option>
														<option value="REGNO UNITO">REGNO UNITO</option>
														<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
														<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
														<option value="ROMANIA">ROMANIA</option>
														<option value="RUSSIA">RUSSIA</option>
														<option value="RWANDA">RWANDA</option>
														<option value="SAINT LUCIA">SAINT LUCIA</option>
														<option value="SALVADOR">SALVADOR</option>
														<option value="SAMOA">SAMOA</option>
														<option value="SAN MARINO">SAN MARINO</option>
														<option value="SANT'ELENA">SANT'ELENA</option>
														<option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
														<option value="SENEGAL">SENEGAL</option>
														<option value="SERBIA">SERBIA</option>
														<option value="SERBIA AND MONTENEGRO">SERBIA AND MONTENEGRO</option>
														<option value="SEYCHELLES">SEYCHELLES</option>
														<option value="SHARJAH">SHARJAH</option>
														<option value="SIERRA LEONE">SIERRA LEONE</option>
														<option value="SINGAPORE">SINGAPORE</option>
														<option value="SIRIA">SIRIA</option>
														<option value="SLOVENIA">SLOVENIA</option>
														<option value="SOMALIA">SOMALIA</option>
														<option value="SPAGNA">SPAGNA</option>
														<option value="SRI LANKA">SRI LANKA</option>
														<option value="ST. VINCENT E GRENADINE">ST. VINCENT E GRENADINE</option>
														<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
														<option value="SUDAFRICANA REP.">SUDAFRICANA REP.</option>
														<option value="SUDAN">SUDAN</option>
														<option value="SURINAME">SURINAME</option>
														<option value="SVEZIA">SVEZIA</option>
														<option value="SVIZZERA">SVIZZERA</option>
														<option value="SWAZILAND">SWAZILAND</option>
														<option value="TAGIKISTAN">TAGIKISTAN</option>
														<option value="TAIWAN">TAIWAN</option>
														<option value="TANZANIA">TANZANIA</option>
														<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
														<option value="TERRITORIO BRITANNICO OCEANO I">TERRITORIO BRITANNICO OCEANO I</option>
														<option value="THAILANDIA">THAILANDIA</option>
														<option value="TOGO">TOGO</option>
														<option value="TONGA">TONGA</option>
														<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
														<option value="TUNISIA">TUNISIA</option>
														<option value="TURCHIA">TURCHIA</option>
														<option value="TURKMENISTAN">TURKMENISTAN</option>
														<option value="TURKS E CAICOS">TURKS E CAICOS</option>
														<option value="TUVALU'">TUVALU'</option>
														<option value="UCRAINA">UCRAINA</option>
														<option value="UGANDA">UGANDA</option>
														<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
														<option value="UNGHERIA">UNGHERIA</option>
														<option value="URUGUAY">URUGUAY</option>
														<option value="UZBEKISTAN">UZBEKISTAN</option>
														<option value="VANUATU">VANUATU</option>
														<option value="VENEZUELA">VENEZUELA</option>
														<option value="VIETNAM">VIETNAM</option>
														<option value="YEMEN">YEMEN</option>
														<option value="ZAMBIA">ZAMBIA</option>
														<option value="ZIMBABWE">ZIMBABWE</option>

										</select>	
												</div>
										<div class="col-md-5 form-group" id="cittadinanzaDiv_int1" style="display: none;">
											<label for="cittadinanza_int1">Cittadinanza*</label>		
											<select name="cittadinanza_int1" id="cittadinanza_int1" class="form-control combobox required">
											<option value="">Seleziona</option>
											<option value="ABU DHABI">ABU DHABI</option>
											<option value="AFGHANISTAN">AFGHANISTAN</option>
											<option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
											<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
											<option value="AJMAN">AJMAN</option>
											<option value="ALBANIA">ALBANIA</option>
											<option value="ALGERIA">ALGERIA</option>
											<option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
											<option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
											<option value="ANDORRA">ANDORRA</option>
											<option value="ANGOLA">ANGOLA</option>
											<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
											<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
											<option value="APOLIDE">APOLIDE</option>
											<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
											<option value="ARGENTINA">ARGENTINA</option>
											<option value="ARMENIA">ARMENIA</option>
											<option value="ARUBA">ARUBA</option>
											<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
											<option value="AUSTRALIA">AUSTRALIA</option>
											<option value="AUSTRIA">AUSTRIA</option>
											<option value="AZERBAIGIAN">AZERBAIGIAN</option>
											<option value="BAHAMA">BAHAMA</option>
											<option value="BAHREIN">BAHREIN</option>
											<option value="BANGLADESH">BANGLADESH</option>
											<option value="BARBADOS">BARBADOS</option>
											<option value="BELGIO">BELGIO</option>
											<option value="BELIZE">BELIZE</option>
											<option value="BENIN">BENIN</option>
											<option value="BERMUDA">BERMUDA</option>
											<option value="BHUTAN">BHUTAN</option>
											<option value="BIELORUSSIA">BIELORUSSIA</option>
											<option value="BOLIVIA">BOLIVIA</option>
											<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
											<option value="BOTSWANA">BOTSWANA</option>
											<option value="BRASILE">BRASILE</option>
											<option value="BRUNEI">BRUNEI</option>
											<option value="BULGARIA">BULGARIA</option>
											<option value="BURKINA FASO">BURKINA FASO</option>
											<option value="BURUNDI">BURUNDI</option>
											<option value="CAMERUN">CAMERUN</option>
											<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
											<option value="CANADA">CANADA</option>
											<option value="CAPO VERDE">CAPO VERDE</option>
											<option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
											<option value="CENTROAFRICANA REP.">CENTROAFRICANA REP.</option>
											<option value="CIAD">CIAD</option>
											<option value="CILE">CILE</option>
											<option value="CINA REP.POP.">CINA REP.POP.</option>
											<option value="CIPRO">CIPRO</option>
											<option value="COLOMBIA">COLOMBIA</option>
											<option value="CONGO">CONGO</option>
											<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
											<option value="COREA DEL NORD">COREA DEL NORD</option>
											<option value="COREA DEL SUD">COREA DEL SUD</option>
											<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
											<option value="COSTARICA">COSTARICA</option>
											<option value="CROAZIA">CROAZIA</option>
											<option value="CUBA">CUBA</option>
											<option value="DANIMARCA">DANIMARCA</option>
											<option value="DOMINICA">DOMINICA</option>
											<option value="DOMINICANA REP.">DOMINICANA REP.</option>
											<option value="DUBAI">DUBAI</option>
											<option value="ECUADOR">ECUADOR</option>
											<option value="EGITTO">EGITTO</option>
											<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
											<option value="ERITREA">ERITREA</option>
											<option value="ESTONIA">ESTONIA</option>
											<option value="ETIOPIA">ETIOPIA</option>
											<option value="FILIPPINE">FILIPPINE</option>
											<option value="FINLANDIA">FINLANDIA</option>
											<option value="FRANCIA">FRANCIA</option>
											<option value="FUIJAYRAH">FUIJAYRAH</option>
											<option value="GABON">GABON</option>
											<option value="GAMBIA">GAMBIA</option>
											<option value="GEORGIA">GEORGIA</option>
											<option value="GERMANIA">GERMANIA</option>
											<option value="GHANA">GHANA</option>
											<option value="GIAMAICA">GIAMAICA</option>
											<option value="GIAPPONE">GIAPPONE</option>
											<option value="GIBILTERRA">GIBILTERRA</option>
											<option value="GIBUTI">GIBUTI</option>
											<option value="GIORDANIA">GIORDANIA</option>
											<option value="GRECIA">GRECIA</option>
											<option value="GRENADA">GRENADA</option>
											<option value="GROENLANDIA">GROENLANDIA</option>
											<option value="GUADALUPA">GUADALUPA</option>
											<option value="GUATEMALA">GUATEMALA</option>
											<option value="GUERNSEY">GUERNSEY</option>
											<option value="GUINEA">GUINEA</option>
											<option value="GUINEA BISSAU">GUINEA BISSAU</option>
											<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
											<option value="GUYANA">GUYANA</option>
											<option value="HAITI">HAITI</option>
											<option value="HONDURAS">HONDURAS</option>
											<option value="HONG KONG">HONG KONG</option>
											<option value="INDIA">INDIA</option>
											<option value="INDONESIA">INDONESIA</option>
											<option value="IRAN">IRAN</option>
											<option value="IRAQ">IRAQ</option>
											<option value="IRLANDA">IRLANDA</option>
											<option value="ISLANDA">ISLANDA</option>
											<option value="ISOLA DELLA RIUNIONE">ISOLA DELLA RIUNIONE</option>
											<option value="ISOLA MAN">ISOLA MAN</option>
											<option value="ISOLA MAURIZIO">ISOLA MAURIZIO</option>
											<option value="ISOLE COMORE">ISOLE COMORE</option>
											<option value="ISOLE FAR OER">ISOLE FAR OER</option>
											<option value="ISOLE FIJI">ISOLE FIJI</option>
											<option value="ISOLE SALOMONE">ISOLE SALOMONE</option>
											<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
											<option value="ISOLE VERGINI U.S.A.">ISOLE VERGINI U.S.A.</option>
											<option value="ISRAELE">ISRAELE</option>
											<option value="ITALIA">ITALIA</option>
											<option value="JERSEY">JERSEY</option>
											<option value="JUGOSLAVIA">JUGOSLAVIA</option>
											<option value="KAMPUCHEA">KAMPUCHEA</option>
											<option value="KAZAKISTAN">KAZAKISTAN</option>
											<option value="KENYA">KENYA</option>
											<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
											<option value="KIRIBATI">KIRIBATI</option>
											<option value="KOSSOVO">KOSSOVO</option>
											<option value="KUWAIT">KUWAIT</option>
											<option value="LAOS">LAOS</option>
											<option value="LESOTHO">LESOTHO</option>
											<option value="LETTONIA">LETTONIA</option>
											<option value="LIBANO">LIBANO</option>
											<option value="LIBERIA">LIBERIA</option>
											<option value="LIBIA">LIBIA</option>
											<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
											<option value="LITUANIA">LITUANIA</option>
											<option value="LUSSEMBURGO">LUSSEMBURGO</option>
											<option value="MACEDONIA">MACEDONIA</option>
											<option value="MADAGASCAR">MADAGASCAR</option>
											<option value="MALAWI">MALAWI</option>
											<option value="MALAYSIA">MALAYSIA</option>
											<option value="MALDIVE">MALDIVE</option>
											<option value="MALI">MALI</option>
											<option value="MALTA">MALTA</option>
											<option value="MAROCCO">MAROCCO</option>
											<option value="MARSHALL">MARSHALL</option>
											<option value="MARTINICA">MARTINICA</option>
											<option value="MAURITANIA">MAURITANIA</option>
											<option value="MESSICO">MESSICO</option>
											<option value="MOLDAVIA">MOLDAVIA</option>
											<option value="MONGOLIA">MONGOLIA</option>
											<option value="MONTENEGRO">MONTENEGRO</option>
											<option value="MOZAMBICO">MOZAMBICO</option>
											<option value="MYANMAR">MYANMAR</option>
											<option value="N.C.">N.C.</option>
											<option value="NAMIBIA">NAMIBIA</option>
											<option value="NAURU">NAURU</option>
											<option value="NEPAL">NEPAL</option>
											<option value="NICARAGUA">NICARAGUA</option>
											<option value="NIGER">NIGER</option>
											<option value="NIGERIA">NIGERIA</option>
											<option value="NORVEGIA">NORVEGIA</option>
											<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
											<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
											<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>
											<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
											<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
											<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
											<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
											<option value="OLANDA">OLANDA</option>
											<option value="OMAN">OMAN</option>
											<option value="PAKISTAN">PAKISTAN</option>
											<option value="PANAMA">PANAMA</option>
											<option value="PAPUA - NUOVA  GUINEA">PAPUA - NUOVA  GUINEA</option>
											<option value="PARAGUAY">PARAGUAY</option>
											<option value="PERU'">PERU'</option>
											<option value="POLONIA">POLONIA</option>
											<option value="PORTOGALLO">PORTOGALLO</option>
											<option value="PORTORICO">PORTORICO</option>
											<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
											<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
											<option value="QATAR">QATAR</option>
											<option value="RAS EL KHAIMAH">RAS EL KHAIMAH</option>
											<option value="REGNO UNITO">REGNO UNITO</option>
											<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
											<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
											<option value="ROMANIA">ROMANIA</option>
											<option value="RUSSIA">RUSSIA</option>
											<option value="RWANDA">RWANDA</option>
											<option value="SAINT LUCIA">SAINT LUCIA</option>
											<option value="SALVADOR">SALVADOR</option>
											<option value="SAMOA">SAMOA</option>
											<option value="SAN MARINO">SAN MARINO</option>
											<option value="SANT'ELENA">SANT'ELENA</option>
											<option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
											<option value="SENEGAL">SENEGAL</option>
											<option value="SERBIA">SERBIA</option>
											<option value="SERBIA AND MONTENEGRO">SERBIA AND MONTENEGRO</option>
											<option value="SEYCHELLES">SEYCHELLES</option>
											<option value="SHARJAH">SHARJAH</option>
											<option value="SIERRA LEONE">SIERRA LEONE</option>
											<option value="SINGAPORE">SINGAPORE</option>
											<option value="SIRIA">SIRIA</option>
											<option value="SLOVENIA">SLOVENIA</option>
											<option value="SOMALIA">SOMALIA</option>
											<option value="SPAGNA">SPAGNA</option>
											<option value="SRI LANKA">SRI LANKA</option>
											<option value="ST. VINCENT E GRENADINE">ST. VINCENT E GRENADINE</option>
											<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
											<option value="SUDAFRICANA REP.">SUDAFRICANA REP.</option>
											<option value="SUDAN">SUDAN</option>
											<option value="SURINAME">SURINAME</option>
											<option value="SVEZIA">SVEZIA</option>
											<option value="SVIZZERA">SVIZZERA</option>
											<option value="SWAZILAND">SWAZILAND</option>
											<option value="TAGIKISTAN">TAGIKISTAN</option>
											<option value="TAIWAN">TAIWAN</option>
											<option value="TANZANIA">TANZANIA</option>
											<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
											<option value="TERRITORIO BRITANNICO OCEANO I">TERRITORIO BRITANNICO OCEANO I</option>
											<option value="THAILANDIA">THAILANDIA</option>
											<option value="TOGO">TOGO</option>
											<option value="TONGA">TONGA</option>
											<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
											<option value="TUNISIA">TUNISIA</option>
											<option value="TURCHIA">TURCHIA</option>
											<option value="TURKMENISTAN">TURKMENISTAN</option>
											<option value="TURKS E CAICOS">TURKS E CAICOS</option>
											<option value="TUVALU'">TUVALU'</option>
											<option value="UCRAINA">UCRAINA</option>
											<option value="UGANDA">UGANDA</option>
											<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
											<option value="UNGHERIA">UNGHERIA</option>
											<option value="URUGUAY">URUGUAY</option>
											<option value="UZBEKISTAN">UZBEKISTAN</option>
											<option value="VANUATU">VANUATU</option>
											<option value="VENEZUELA">VENEZUELA</option>
											<option value="VIETNAM">VIETNAM</option>
											<option value="YEMEN">YEMEN</option>
											<option value="ZAMBIA">ZAMBIA</option>
											<option value="ZIMBABWE">ZIMBABWE</option>
										</select>
										</div>
											
											<!--
												<div class="col-md-5 form-group" id="comuneNascitaDiv_int1">
													<label for="comuneNascita_int1">Comune di nascita*</label>
													<select name="comuneNascita_int1" id="comuneNascita_int1" class="form-control combobox required" disabled>
														<option value="">Seleziona</option>
													</select>
												</div>-->
											</div>
											<div class="spacer-no-border hidden-xs"></div>
											
											<div class="row">
												<div class="col-md-12">
													<table cellspacing="0" cellpadding="0" border="0">
														<tr>
																<td width="79%"><label for="indirizzo_int1">Indirizzo di domicilio*</label></td>
																<td align="center" width="1%"></td>
																<td width="20%" class="form-group"><label for="civico_int1">Numero*</label></td>
														</tr>
														<tr>
																<td width="79%" class="form-group"><input type="text" name="indirizzo_int1" id="indirizzo_int1" value="" class="textinput form-control"></td>
																<td align="center" width="1%"></td>
																<td width="20%" class="form-group"><input type="text" name="civico_int1" id="civico_int1" value="" class="textinput form-control"></td>
														</tr>
													</table>
												</div>
											</div>
											<div class="spacer-no-border hidden-xs"></div>
											<div class="row">
												<div class="col-md-4 form-group">
													<label for="provincia_int1">Provincia di domicilio*</label>
													<select name="provincia_int1" id="provincia_int1" class="form-control combobox required">
														<option value="" selected="selected">Seleziona</option>
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
														<option value="EN">EN</option>
														<option value="FC">FC</option>
														<option value="FE">FE</option>
														<option value="FG">FG</option>
														<option value="FI">FI</option>
														<option value="FM">FM</option>
														<option value="FR">FR</option>
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
														<option value="PN">PN</option>
														<option value="PO">PO</option>
														<option value="PR">PR</option>
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
													</select>
												</div>
												<!--
												<div class="col-md-5 form-group">
													<label for="comune_int1">Comune di domicilio*</label>
													<select name="comune_int1" id="comune_int1" class="form-control combobox required" disabled>
														<option value="">Seleziona</option>
													</select>
												</div>-->
												<div class="col-md-3 form-group">
													<label for="cap_int1">CAP*</label>
													<input type="text" name="cap_int1" id="cap_int1" value="" class="textinput form-control">											
												</div>
											</div>
											<div class="spacer-no-border hidden-xs"></div>
											<div class="row">
												<div class="col-md-4 form-group">
													<label for="catProfessionale_int1">Categoria professionale*</label>
													<select name="catProfessionale_int1" id="catProfessionale_int1" class="form-control combobox required">
														<option value="">Seleziona</option>
														<option value="Lavoratori autonomi" >Lavoratori autonomi</option>
														<option value="Lavoratori dipendenti" >Lavoratori dipendenti</option>
														<option value="Non occupati">Non occupati</option>
													</select>
												</div>
												<div class="col-md-4 form-group">
													<label for="professione_int1">Professione*</label>
													<select name="professione_int1" id="professione_int1" class="form-control combobox required" disabled>
														<option value="">Seleziona</option>
														<option value="">&nbsp;</option>
													</select>
												</div>
												<div class="col-md-4 form-group">
													<label for="settore_int1">Settore di attivit&agrave;*</label>
													<select name="settore_int1" id="settore_int1" class="form-control combobox required">
														<option value="">Seleziona</option>
														<option value="Nessuno" >Nessuno</option>
														<option value="Commercio" >Commercio</option>
														<option value="Industria privata" >Industria privata</option>
														<option value="Servizi privati" >Servizi privati</option>
														<option value="Agricoltura" >Agricoltura</option>
														<option value="Aziende pubbliche e Stato" >Aziende pubbliche e Stato</option>
														<option value="Enti locali" >Enti locali (Regione, Comune)</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									</div>
									<div class="spacer-no-border"></div>
									<div class="row">
										<div class="col-sm-12 form-section-title">
											Codici per convenzioni e promozioni
										</div>
									</div>
									<div class="spacer-no-border hidden-xs">&nbsp;</div>
									<div class="row">
										<div class="col-md-4 form-group">
											<label for="convenzioneWeb">Codice convenzione</label>
											<input type="text" name="convenzioneWeb" id="convenzioneWeb" value="" class="textinput form-control">
										</div>
										<div class="col-md-4 form-group">
											<label for="codPresentatore">Codice presentatore</label>
											<input type="text" name="codPresentatore" id="codPresentatore" value="" class="textinput form-control" maxlength="18">
										</div>
										<div class="col-md-4 form-group">
											<label for="codPromotore">Codice promotore</label>
											<input type="text" name="codPromotore" id="codPromotore" value="" class="textinput form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<button type ="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">PROSEGUI</a>
										</div>
									</div>
								
								</form>
							</div>
						</div>
					
				</div>
				
				</div>
				<!-- /colonna centrale -->

				<!-- colonna destra -->
				<div class="col-lg-3 col-md-12 col-sm-12 widget-container"><div class="spacerdark"></div>
					<div class="widget widget06">
						<a href="#"><img src="/wbresp/img/widgets/trading_widget06.jpg" alt="Il mutuo senza asterischi"></a>
					</div>
					
					<div class="widget widget05">
						<p class="intro">
						<b>Chiedi all'assistente virtuale</b><br>
						oppure chiama il numero verde<br>
						<a class="numb" href="tel://800148149">800 148 149</a><br>
						Luned&igrave; - venerd&igrave;: 8.30 - 20.30<br>
						sabato: 9.00 - 17.00<br>
						</p>
					</div>

					<div class="widget widget04">
	<h3>Trasparenza</h3>
	<ul class="listaDocs">
		<li>
			<a href="#">Guida pratica al mutuo</a><br />
			Aggiornato il 2/7/2015
		</li>
		<li>
			<a href="#">Codice di condotta europeo</a><br />
			Aggiornato il 2/7/2015
		</li>
		<li>
			<a href="#">Informativa precontrattuale sui servizi a distanza</a><br />
			Aggiornato il 2/7/2015
		</li>
	</ul>
	<a href="#" class="btn-whlit btn-whlit-arrow">Tutti i documenti</a>
</div>



				</div>
				<!-- /colonna destra -->


			</div>
	</div> <!-- /container -->
</div>