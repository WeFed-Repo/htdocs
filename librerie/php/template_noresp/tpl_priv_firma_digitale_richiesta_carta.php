<h1>Info e gestione carta</h1>
<div class="divtabellalist">		 			
	<table border="0" class="tabellalist">
		<tr>
			<td id="box5tab1" class="off first">						
				<a title="scheda prodotto" href="#">scheda prodotto</a>
			</td>
			<td id="box5tab2" class="on ">						
				<a title="Richiesta emissione" href="#">richiesta emissione</a>
			</td>
			<td id="box5tab3" class="off ">						
				<a title="Ricarica la carta" href="#">ricarica</a>
			</td>
			<td id="box5tab4" class="off ">						
				<a title="saldo e movimenti" href="#">saldo e movimenti</a>
			</td>
			<td id="box5tab5" class="off ">						
				<a title="attivazione" href="#">attivazione</a>
			</td>
			<td class="end">&nbsp;</td>						
		</tr>
	</table>
</div>

<div class="boxesito attenzione">
	<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
		<p><strong>Completa subito la richiesta di Carta Je@ns, la riceverai a casa in pochi giorni.</strong><br>Ti ricordiamo che al termine della richiesta dovrai <strong>firmare il contratto con la tua Firma Digitale.</strong>

	</p>
		</div>
	</div>
	<div class="bottom"><span class="angololeft"></span><span class="angoloright"></span></div>
</div>

<div class="tithelp">  
	<div class="helpleft">Intestatario carta</div> 
	<br class="clear">
</div>
<table class="form01 out">  
	<tbody><tr> 
		<td width="105" class="uno">Intestatario carta</td> 
		<td width="550" colspan="2">
			<strong> </strong>
			<span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa1');" onmouseover="nascondi('lampa1');"><img class="lampa" id="lampa1" src="/img/ret/lampa_off.gif"><span><span><span>Il nominativo del richiedente e del titolare della carta deve essere identico.</span></span></span></a></span>
		</td> 
	</tr>
</tbody></table>
<div class="tithelp">  
	<div class="helpleft">Consegna</div> 
	<br class="clear">
</div>
<table class="form01 out">  
	<tbody><tr> 
		<td class="uno">Scegli la <strong>modalità</strong> di consegna che preferisci tra le opzioni proposte.</td> 
	</tr>
</tbody></table>
<table class="form01 out">  
	<tbody><tr>
		<td width="250"><input type="radio" checked="checked" onclick="javascript:showConti(0)" value="POSTA" name="spedizione"> <strong>POSTA PRIORITARIA</strong></td><td align="left" colspan="3"><strong>Spedizione Gratuita</strong></td>
	</tr>
	<tr><td width="550" colspan="4">&emsp;consegna in 6/7 giorni lavorativi</td></tr>
</tbody></table>
<table class="form01 out">  
	<tbody><tr>
		<td width="250"><input type="radio" onclick="javascript:showConti(1)" value="CORRIERE" name="spedizione"> <strong>CORRIERE ESPRESSO</strong></td><td align="left"><strong>Costo spedizione: 7,50 €</strong></td>
		
		<td>
		<input type="hidden" value="00599 - 0000081500 - EUR" name="conto">
		</td>
		
	</tr>
	<tr><td width="550" colspan="4">&emsp;consegna in 2/3 giorni lavorativi</td></tr>	
</tbody></table>
<div class="tithelp">  
	<div class="helpleft">Indirizzo di spedizione</div>
	<br class="clear">
</div>
<div id="testoOut">
	<p>
		La carta ti sarà inviata <strong>all'indirizzo sotto indicato</strong>. Verifica bene l'indirizzo, prima di procedere.<br>
		Se desideri l'invio a un <strong>indirizzo diverso</strong>, clicca sul pulsante "scegli altro indirizzo".
	</p>
	<br>
	<p class="note">
		La modifica dell'indirizzo di corrispondenza è valida soltanto per la richiesta di Carta Je@ns, ma non comporta il cambio dell'indirizzo presente in anagrafe Webank.
	</p>
</div>
<div style="display: none;" id="testoIn">
	<p>Inserisci l'indirizzo al quale desideri siano inviati carta e Pin.</p>
</div>
<br>
<table class="form01 out">

	<tbody id="corrispondenzaOut">  
		<tr> 
			<td width="105" class="uno">Presso</td> 
			<td width="550" colspan="3"><strong> </strong></td> 
			
		</tr> 
		<tr> 
			<td width="105" class="uno">Indirizzo</td> 
			<td width="550" colspan="3"><strong>PIAZZA FILIPPO MEDA 4</strong></td> 
			
		</tr>
		<tr> 
			<td width="105" class="uno">Provincia</td> 
			<td width="220"><strong>MI</strong></td> 
			<td width="105" class="uno">Comune</td> 
			<td width="225"><strong>MILANO</strong></td> 
		</tr>
		<tr> 
			<td width="105" class="uno">Località</td> 
			<td width="220"><strong>MILANO</strong></td>
			<td width="105" class="uno">CAP</td> 
			<td width="225"><strong>20121</strong></td>		
		</tr>
		<tr style="display: none" id="telefonoOut"> 
			<td width="105" class="uno">Recapito telefonico</td> 
			<td width="550" colspan="3"><strong>1111111111</strong> 
			<span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa2');" onmouseover="nascondi('lampa2');"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"><span><span><span>Il recapito telefonico potrebbe servire al corriere per contattarti in caso di contrattempi nella consegna.</span></span></span></a></span>
			</td>
		</tr>
	</tbody>
	
	<tbody style="display: none;" id="corrispondenzaIn">	
		<tr> 
			<td width="105" class="uno">Presso</td> 
			<td width="550" colspan="3"><input type="text" class="extra" value=" " name="presso"></td> 	
		</tr>
		<tr> 
			<td width="105" id="indirizzo" class="uno">Indirizzo*</td> 
			<td width="550" colspan="3"><input type="text" class="extra" value="PIAZZA FILIPPO MEDA 4" name="indirizzo"></td> 	
		</tr>
		<tr> 
			<td width="105" class="uno">Provincia</td> 
			<td width="220">
				<select class="grande" onchange="javascript:updateComuni('divComune', this, 'comune', 'idComune', 'no', 1, 'cartaJeansFormBean');" name="provincia"><option value="">- seleziona -</option>
					
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
					
					<option selected="selected" value="MI">MI</option>
					
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
					
					<option value="VV">VV</option></select>
			</td> 
			<td width="105" class="uno">Comune</td> 
			<td width="225">
				<div id="divComune">
					<select id="idComune" name="comune"><option selected="selected" value="MILANO">- seleziona -</option></select>
				</div>
			</td> 
		</tr>
		<tr> 
			<td width="105" id="localita" class="uno">Località*</td> 
			<td width="220"><input type="text" class="grande" value="MILANO" name="localita"></td>
			<td width="105" id="cap" class="uno">CAP*</td> 
			<td width="225"><input type="text" class="cap" value="20121" maxlength="5" name="cap"></td> 
		</tr>
		<tr style="display: none" id="telefonoIn"> 
			<td width="105" class="uno">Telefono</td> 
			<td width="225"><input type="text" class="grande" value="1111111111" name="telefono">
			<span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa3');" onmouseover="nascondi('lampa3');"><img class="lampa" id="lampa3" src="/img/ret/lampa_off.gif"><span><span><span>Il recapito può servire al corriere per contattarti in caso di contrattempi nella consegna</span></span></span></a></span>
			</td> 	
		</tr>
	</tbody>

	<tbody><tr> 
		<td width="105" valign="top" class="uno">Note</td> 
		<td colspan="3">
			<textarea name="note"></textarea>
		</td> 
	</tr>
</tbody></table>
<div class="fooform">	
	<div class="fooformrightb">
		<div><a class="btnformright" href="javascript:openCloseCorrispondenza();" id="color"><img alt="" src="/img/ret/btn_left_ar.gif" id="colorLeft"><span id="bottone">scegli altro indirizzo</span><img alt="" src="/img/ret/btn_right_ar.gif" id="colorRigth"></a></div>
		<br class="clear">
	</div>	
	<br class="clear">
</div>
<div class="tithelp">  
	<div class="helpleft">Presa Visione*</div>
	<br class="clear">
</div>
<table class="form01"> 
	<tbody><tr>
		<td colspan="4">
		<div class="nobor3">
			<span id="errorFlagAccettazione"><input type="checkbox" class="nobor3" id="flagAccettazione" value="Y" name="flagAccettazione"></span>
			Dopo aver ricevuto la busta contenente la carta e il Pin, accetti di attivare la carta attraverso la funzione online di "<strong>attivazione</strong>".
		</div>
		</td>
	</tr>
</tbody></table>
<div id="adever"><br>

<h3 class="verde">AUTODICHIARAZIONE IN MATERIA DI ANTIRICICLAGGIO</h3>
<p>
	Ai sensi della vigente normativa antiriciclaggio (D.Lgs. 231/07) il Cliente è obbligato a fornire alla Banca alcune dichiarazioni e 
	informazioni.<br>
	Ti ricordiamo che il rilascio di false informazioni od omissioni <strong>comporta conseguenze anche di natura penale</strong>. 
	Prima di procedere ti invitiamo a prendere visione dell'<a target="_blank" href="/doc/nsf/InformativaTrattamentoDatiPersonali.pdf">Informativa sul trattamento dei dati personali</a> della Banca. 
	I dati forniti di seguito devono ritenersi integrati (sempre per le finalità di cui alla normativa antiriciclaggio) con i dati 
	forniti alla Banca in relazione ai rapporti bancari, finanziari e di investimento.
</p>

<table class="form01 out">
	<tbody>
	<tr> 
		<td width="100" id="lbusoConto">Natura e scopo prevalente del rapporto*</td>
		<td width="600">
			<select name="usoConto" id="usoConto">
				<option value="-" selected="">-- seleziona --</option>
									<option value="1|per esigenze familiari">per esigenze familiari</option>
									<option value="5|per esigenze professionali">per esigenze professionali</option>
							</select>
		</td>
	</tr>	
	<tr> 
		<td id="lbprofessioneAv_ric">Professione*</td>
		<td>
			<select name="professioneAv_ric" id="professioneAv_ric">
				<option value="-" selected="">-- seleziona --</option>
									<option value="4|dirigente / manager">dirigente / manager</option>
									<option value="4|impiegato">impiegato</option>
									<option value="4|imp. direttivo/quadro">imp. direttivo/quadro</option>
									<option value="4|operaio">operaio</option>
									<option value="4|operaio / apprendista">operaio / apprendista</option>
									<option value="2|medico">medico</option>
									<option value="2|medico / paramedico">medico / paramedico</option>
									<option value="1|artigiano / commerciante">artigiano / commerciante</option>
									<option value="6|studente">studente</option>
									<option value="3|libero professionista">libero professionista</option>
									<option value="2|lavoratore in proprio">lavoratore in proprio</option>
									<option value="3|venditore / rappresentante">venditore / rappresentante</option>
									<option value="4|insegnante">insegnante</option>
									<option value="5|pensionato">pensionato</option>
									<option value="6|casalinga">casalinga</option>
									<option value="6|in cerca di occupazione">in cerca di occupazione</option>
							</select>
		</td>
	</tr>
	<tr> 
		<td id="lbsettoreAv_ric">Settore*</td>
		<td>
			<select onchange="AdeVer.populateSelect('CARTA_JEANS', 'TAE', 'settoreAv_ric', 'dettaglioSettoreAv_ric');" name="settoreAv_ric" id="settoreAv_ric">
				<option value="-" selected="">-- seleziona --</option>
									<option value="0|agricoltura">agricoltura</option>
									<option value="1|artigianato">artigianato</option>
									<option value="2|commercio">commercio</option>
									<option value="3|credito / finanza">credito / finanza</option>
									<option value="4|edilizia">edilizia</option>
									<option value="5|industria">industria</option>
									<option value="6|difesa / pubblica amministrazione">difesa / pubblica amministrazione</option>
									<option value="7|pubblica istruzione">pubblica istruzione</option>
									<option value="8|sanità">sanità</option>
									<option value="9|servizi">servizi</option>
									<option value="10|turismo">turismo</option>
									<option value="11|altro / nessuno">altro / nessuno</option>
							</select>
		</td>
	</tr>
	<tr id="trdettaglioSettoreAv_ric"> 
		<td id="lbdettaglioSettoreAv_ric">Dettaglio settore*</td>
		<td>
			<select disabled="true" name="dettaglioSettoreAv_ric" id="dettaglioSettoreAv_ric" class="extra">
				<option value="-" selected="">-- seleziona --</option>
							</select>
		</td>
	</tr>
	<tr> 
		<td id="lbstatoAttivitaAv_ric">Paese svolgimento attività*</td>
		<td>
			<select onchange="AdeVer.populateSelect('CARTA_JEANS', 'COUNTRY', 'statoAttivitaAv_ric', 'provinciaAttivitaAv_ric');" name="statoAttivitaAv_ric" id="statoAttivitaAv_ric">
				<option value="-" selected="">-- seleziona --</option>
									<option value="238|ABU DHABI">ABU DHABI</option>
									<option value="2|AFGHANISTAN">AFGHANISTAN</option>
									<option value="239|AJMAN (EMIRATI ARABI UNITI)">AJMAN (EMIRATI ARABI UNITI)</option>
									<option value="87|ALBANIA">ALBANIA</option>
									<option value="3|ALGERIA">ALGERIA</option>
									<option value="252|AMERICANE DEL PACIFICO - ISOLE">AMERICANE DEL PACIFICO - ISOLE</option>
									<option value="4|ANDORRA">ANDORRA</option>
									<option value="133|ANGOLA">ANGOLA</option>
									<option value="209|ANGUILLA">ANGUILLA</option>
									<option value="197|ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
									<option value="251|ANTILLE OLANDESI">ANTILLE OLANDESI</option>
									<option value="5|ARABIA SAUDITA">ARABIA SAUDITA</option>
									<option value="6|ARGENTINA">ARGENTINA</option>
									<option value="266|ARMENIA">ARMENIA</option>
									<option value="212|ARUBA">ARUBA</option>
									<option value="227|ASCENSIONE - ISOLE">ASCENSIONE - ISOLE</option>
									<option value="7|AUSTRALIA">AUSTRALIA</option>
									<option value="8|AUSTRIA">AUSTRIA</option>
									<option value="268|AZERBAIGIAN">AZERBAIGIAN</option>
									<option value="234|AZZORRE - ISOLE">AZZORRE - ISOLE</option>
									<option value="160|BAHAMAS - ISOLE">BAHAMAS - ISOLE</option>
									<option value="169|BAHREIN - ISOLE">BAHREIN - ISOLE</option>
									<option value="130|BANGLADESH">BANGLADESH</option>
									<option value="118|BARBADOS - ISOLE">BARBADOS - ISOLE</option>
									<option value="9|BELGIO">BELGIO</option>
									<option value="198|BELIZE">BELIZE</option>
									<option value="158|BENIN">BENIN</option>
									<option value="207|BERMUDA - ISOLE">BERMUDA - ISOLE</option>
									<option value="97|BHUTAN">BHUTAN</option>
									<option value="264|BIELORUSSIA">BIELORUSSIA</option>
									<option value="10|BOLIVIA">BOLIVIA</option>
									<option value="274|BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
									<option value="98|BOTSWANA">BOTSWANA</option>
									<option value="280|BOUVET ISLANDS">BOUVET ISLANDS</option>
									<option value="11|BRASILE">BRASILE</option>
									<option value="12|BULGARIA">BULGARIA</option>
									<option value="142|BURKINA FASO (EX ALTO VOLTA)">BURKINA FASO (EX ALTO VOLTA)</option>
									<option value="25|BURUNDI">BURUNDI</option>
									<option value="135|CAMBOGIA">CAMBOGIA</option>
									<option value="119|CAMERUN">CAMERUN</option>
									<option value="139|CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
									<option value="13|CANADA">CANADA</option>
									<option value="100|CANARIE - ISOLE">CANARIE - ISOLE</option>
									<option value="188|CAPO VERDE - ISOLE">CAPO VERDE - ISOLE</option>
									<option value="256|CAROLINE - ISOLE">CAROLINE - ISOLE</option>
									<option value="211|CAYMAN - ISOLE">CAYMAN - ISOLE</option>
									<option value="143|CENTRAFRICANA REPUBBLICA">CENTRAFRICANA REPUBBLICA</option>
									<option value="246|CEUTA (DIP. SPAGN. D'AFRICA)">CEUTA (DIP. SPAGN. D'AFRICA)</option>
									<option value="230|CHAFARINAS - ISOLE">CHAFARINAS - ISOLE</option>
									<option value="255|CHAGOS - ISOLE">CHAGOS - ISOLE</option>
									<option value="282|CHRISTMAS ISLANDS">CHRISTMAS ISLANDS</option>
									<option value="144|CIAD">CIAD</option>
									<option value="15|CILE">CILE</option>
									<option value="16|CINA REPUBBLICA POPOLARE">CINA REPUBBLICA POPOLARE</option>
									<option value="101|CIPRO REPUBBLICA">CIPRO REPUBBLICA</option>
									<option value="93|CITTA' DEL VATICANO">CITTA' DEL VATICANO</option>
									<option value="223|CLIPPERTON">CLIPPERTON</option>
									<option value="281|COCOS (KEELING) ISLANDS">COCOS (KEELING) ISLANDS</option>
									<option value="17|COLOMBIA">COLOMBIA</option>
									<option value="176|COMORE - ISOLE">COMORE - ISOLE</option>
									<option value="145|CONGO REPUBBLICA POPOLARE">CONGO REPUBBLICA POPOLARE</option>
									<option value="237|COOK - ISOLE">COOK - ISOLE</option>
									<option value="84|COREA REPUBBLICA">COREA REPUBBLICA</option>
									<option value="74|COREA REPUBBLICA DEMOCRATICA P">COREA REPUBBLICA DEMOCRATICA P</option>
									<option value="146|COSTA D'AVORIO">COSTA D'AVORIO</option>
									<option value="19|COSTA RICA">COSTA RICA</option>
									<option value="261|CROAZIA">CROAZIA</option>
									<option value="20|CUBA">CUBA</option>
									<option value="21|DANIMARCA">DANIMARCA</option>
									<option value="175|DIP.BRIT. D'OCEANIA (PITCAIRN)">DIP.BRIT. D'OCEANIA (PITCAIRN)</option>
									<option value="192|DOMINICA">DOMINICA</option>
									<option value="63|DOMINICANA REPUBBLICA">DOMINICANA REPUBBLICA</option>
									<option value="240|DUBAY">DUBAY</option>
									<option value="287|EAST TIMOR">EAST TIMOR</option>
									<option value="24|ECUADOR">ECUADOR</option>
									<option value="23|EGITTO">EGITTO</option>
									<option value="64|EL SALVADOR REPUBBLICA">EL SALVADOR REPUBBLICA</option>
									<option value="277|ERITREA">ERITREA</option>
									<option value="257|ESTONIA">ESTONIA</option>
									<option value="26|ETIOPIA">ETIOPIA</option>
									<option value="204|FAER OER - FAEROERNE FOROYAR">FAER OER - FAEROERNE FOROYAR</option>
									<option value="190|FALKLAND O MALVINE - ISOLE">FALKLAND O MALVINE - ISOLE</option>
									<option value="161|FIGI">FIGI</option>
									<option value="27|FILIPPINE - ISOLE">FILIPPINE - ISOLE</option>
									<option value="28|FINLANDIA">FINLANDIA</option>
									<option value="29|FRANCIA">FRANCIA</option>
									<option value="241|FUJAYRAH">FUJAYRAH</option>
									<option value="157|GABON">GABON</option>
									<option value="164|GAMBIA REPUBBLICA">GAMBIA REPUBBLICA</option>
									<option value="267|GEORGIA">GEORGIA</option>
									<option value="94|GERMANIA REPUBBLICA FEDERALE">GERMANIA REPUBBLICA FEDERALE</option>
									<option value="112|GHANA">GHANA</option>
									<option value="82|GIAMAICA">GIAMAICA</option>
									<option value="88|GIAPPONE">GIAPPONE</option>
									<option value="102|GIBILTERRA">GIBILTERRA</option>
									<option value="113|GIBUTI REPUBBLICA">GIBUTI REPUBBLICA</option>
									<option value="122|GIORDANIA">GIORDANIA</option>
									<option value="228|GOUGH (SANT ELENA)">GOUGH (SANT ELENA)</option>
									<option value="32|GRECIA">GRECIA</option>
									<option value="156|GRENADA">GRENADA</option>
									<option value="200|GROENLANDIA">GROENLANDIA</option>
									<option value="214|GUADALUPA INDIPENDENTE">GUADALUPA INDIPENDENTE</option>
									<option value="154|GUAM">GUAM</option>
									<option value="33|GUATEMALA">GUATEMALA</option>
									<option value="123|GUAYANA FRANCESE">GUAYANA FRANCESE</option>
									<option value="201|GUERNSEY - ISOLA">GUERNSEY - ISOLA</option>
									<option value="185|GUINEA BISSAU REPUBBLICA">GUINEA BISSAU REPUBBLICA</option>
									<option value="167|GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
									<option value="137|GUINEA REPUBBLICA POPOLARE">GUINEA REPUBBLICA POPOLARE</option>
									<option value="159|GUYANA">GUYANA</option>
									<option value="34|HAITI">HAITI</option>
									<option value="284|HEARD E MCDONALD ISLANDS">HEARD E MCDONALD ISLANDS</option>
									<option value="35|HONDURAS">HONDURAS</option>
									<option value="103|HONG KONG">HONG KONG</option>
									<option value="114|INDIA">INDIA</option>
									<option value="129|INDONESIA">INDONESIA</option>
									<option value="39|IRAN">IRAN</option>
									<option value="38|IRAQ">IRAQ</option>
									<option value="40|IRLANDA REPUBBLICA DEMOCRATICA">IRLANDA REPUBBLICA DEMOCRATICA</option>
									<option value="41|ISLANDA">ISLANDA</option>
									<option value="182|ISRAELE">ISRAELE</option>
									<option value="999|ITALIA">ITALIA</option>
									<option value="202|JERSEY - ISOLA">JERSEY - ISOLA</option>
									<option value="43|JUGOSLAVIA">JUGOSLAVIA</option>
									<option value="269|KAZAKISTAN">KAZAKISTAN</option>
									<option value="116|KENYA">KENYA</option>
									<option value="270|KIRGHIZISTAN">KIRGHIZISTAN</option>
									<option value="194|KIRIBATI REPUBBLICA">KIRIBATI REPUBBLICA</option>
									<option value="291|KOSOVO">KOSOVO</option>
									<option value="126|KUWAIT">KUWAIT</option>
									<option value="136|LAOS">LAOS</option>
									<option value="89|LESOTHO">LESOTHO</option>
									<option value="258|LETTONIA">LETTONIA</option>
									<option value="95|LIBANO">LIBANO</option>
									<option value="44|LIBERIA">LIBERIA</option>
									<option value="45|LIBIA">LIBIA</option>
									<option value="90|LIECHTENSTEIN">LIECHTENSTEIN</option>
									<option value="259|LITUANIA">LITUANIA</option>
									<option value="92|LUSSEMBURGO">LUSSEMBURGO</option>
									<option value="59|MACAO">MACAO</option>
									<option value="278|MACEDONIA">MACEDONIA</option>
									<option value="104|MADAGASCAR REPUBBLICA">MADAGASCAR REPUBBLICA</option>
									<option value="235|MADEIRA">MADEIRA</option>
									<option value="56|MALAWI REPUBBLICA">MALAWI REPUBBLICA</option>
									<option value="106|MALAYSIA">MALAYSIA</option>
									<option value="127|MALDIVE - ISOLE">MALDIVE - ISOLE</option>
									<option value="149|MALI REPUBBLICA">MALI REPUBBLICA</option>
									<option value="105|MALTA">MALTA</option>
									<option value="203|MAN-ISOLA">MAN-ISOLA</option>
									<option value="219|MARIANNE - ISOLE">MARIANNE - ISOLE</option>
									<option value="107|MAROCCO">MAROCCO</option>
									<option value="217|MARSHALL - ISOLE">MARSHALL - ISOLE</option>
									<option value="213|MARTINICA - ISOLA">MARTINICA - ISOLA</option>
									<option value="141|MAURITANIA">MAURITANIA</option>
									<option value="128|MAURIZIO - ISOLE">MAURIZIO - ISOLE</option>
									<option value="226|MAYOTTE - ISOLE">MAYOTTE - ISOLE</option>
									<option value="231|MELILLA (DIP. SPAGN. D'AFRICA)">MELILLA (DIP. SPAGN. D'AFRICA)</option>
									<option value="46|MESSICO">MESSICO</option>
									<option value="177|MIDWAY - ISOLE">MIDWAY - ISOLE</option>
									<option value="265|MOLDAVIA">MOLDAVIA</option>
									<option value="110|MONGOLIA">MONGOLIA</option>
									<option value="290|MONTENEGRO">MONTENEGRO</option>
									<option value="208|MONTSERRAT">MONTSERRAT</option>
									<option value="134|MOZAMBICO">MOZAMBICO</option>
									<option value="206|NAMIBIA-AFRICA DEL SUD OVEST">NAMIBIA-AFRICA DEL SUD OVEST</option>
									<option value="109|NAURU">NAURU</option>
									<option value="125|NEGARA BRUNEI DARUSSALAM">NEGARA BRUNEI DARUSSALAM</option>
									<option value="115|NEPAL">NEPAL</option>
									<option value="47|NICARAGUA">NICARAGUA</option>
									<option value="150|NIGER">NIGER</option>
									<option value="117|NIGERIA REPUBBLICA">NIGERIA REPUBBLICA</option>
									<option value="205|NIUE O SAVAGE">NIUE O SAVAGE</option>
									<option value="285|NORFOLK ISLANDS">NORFOLK ISLANDS</option>
									<option value="48|NORVEGIA">NORVEGIA</option>
									<option value="253|NUOVA CALEDONIA">NUOVA CALEDONIA</option>
									<option value="49|NUOVA ZELANDA">NUOVA ZELANDA</option>
									<option value="50|PAESI BASSI - OLANDA">PAESI BASSI - OLANDA</option>
									<option value="36|PAKISTAN">PAKISTAN</option>
									<option value="216|PALAU REPUBBLICA">PALAU REPUBBLICA</option>
									<option value="279|PALESTINA">PALESTINA</option>
									<option value="51|PANAMA">PANAMA</option>
									<option value="186|PAPUA NUOVA GUINEA">PAPUA NUOVA GUINEA</option>
									<option value="52|PARAGUAY">PARAGUAY</option>
									<option value="232|PENON DE ALHUCEMAS - ISOLE (DI">PENON DE ALHUCEMAS - ISOLE (DI</option>
									<option value="233|PENON DE VELEZ DE LA GOMERA (D">PENON DE VELEZ DE LA GOMERA (D</option>
									<option value="53|PERU'">PERU'</option>
									<option value="225|POLINESIA FRANCESE">POLINESIA FRANCESE</option>
									<option value="54|POLONIA">POLONIA</option>
									<option value="55|PORTOGALLO">PORTOGALLO</option>
									<option value="91|PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
									<option value="220|PUERTO RICO">PUERTO RICO</option>
									<option value="168|QATAR">QATAR</option>
									<option value="242|RAS AL KHAIMAH">RAS AL KHAIMAH</option>
									<option value="31|REGNO UNITO DI GRAN BRETAGNA I">REGNO UNITO DI GRAN BRETAGNA I</option>
									<option value="275|REPUBBLICA CECA">REPUBBLICA CECA</option>
									<option value="276|REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
									<option value="78|REPUBBLICA SUDAFRICANA">REPUBBLICA SUDAFRICANA</option>
									<option value="247|RIUNIONE - ISOLA(DIP. FRANC. D">RIUNIONE - ISOLA(DIP. FRANC. D</option>
									<option value="61|ROMANIA">ROMANIA</option>
									<option value="151|RUANDA">RUANDA</option>
									<option value="262|RUSSIA">RUSSIA</option>
									<option value="166|SAHARA OCCIDENTALE">SAHARA OCCIDENTALE</option>
									<option value="195|SAINT CHRISTOPHER-NEVIS">SAINT CHRISTOPHER-NEVIS</option>
									<option value="199|SAINT LUCIA">SAINT LUCIA</option>
									<option value="222|SAINT MARTIN">SAINT MARTIN</option>
									<option value="248|SAINT PIERRE E MIQUELON">SAINT PIERRE E MIQUELON</option>
									<option value="196|SAINT VINCENT E GRENADINE">SAINT VINCENT E GRENADINE</option>
									<option value="191|SALOMONE - ISOLE">SALOMONE - ISOLE</option>
									<option value="148|SAMOA AMERICANE">SAMOA AMERICANE</option>
									<option value="131|SAMOA OCCIDENTALI">SAMOA OCCIDENTALI</option>
									<option value="37|SAN MARINO">SAN MARINO</option>
									<option value="254|SANT'ELENA">SANT'ELENA</option>
									<option value="187|SAO TOME' E PRINCIPE">SAO TOME' E PRINCIPE</option>
									<option value="189|SEICELLE - ISOLE">SEICELLE - ISOLE</option>
									<option value="152|SENEGAL">SENEGAL</option>
									<option value="289|SERBIA">SERBIA</option>
									<option value="288|SERBIA E MONTENEGRO">SERBIA E MONTENEGRO</option>
									<option value="243|SHARJAH">SHARJAH</option>
									<option value="153|SIERRA LEONE">SIERRA LEONE</option>
									<option value="147|SINGAPORE">SINGAPORE</option>
									<option value="65|SIRIA">SIRIA</option>
									<option value="260|SLOVENIA">SLOVENIA</option>
									<option value="66|SOMALIA">SOMALIA</option>
									<option value="283|SOUTH GEORGIA E SOUTH SANDWICH">SOUTH GEORGIA E SOUTH SANDWICH</option>
									<option value="67|SPAGNA">SPAGNA</option>
									<option value="85|SRI LANKA/CEYLON">SRI LANKA/CEYLON</option>
									<option value="215|STATI FEDERATI DI MICRONESIA">STATI FEDERATI DI MICRONESIA</option>
									<option value="69|STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
									<option value="70|SUDAN REPUBBLICA DEMOCRATICA">SUDAN REPUBBLICA DEMOCRATICA</option>
									<option value="163|SULTANATO DI OMAN">SULTANATO DI OMAN</option>
									<option value="124|SURINAME">SURINAME</option>
									<option value="286|SVALBARD E JAN MAYEN ISLANDS">SVALBARD E JAN MAYEN ISLANDS</option>
									<option value="68|SVEZIA">SVEZIA</option>
									<option value="71|SVIZZERA">SVIZZERA</option>
									<option value="138|SWAZILAND">SWAZILAND</option>
									<option value="272|TAGIKISTAN">TAGIKISTAN</option>
									<option value="22|TAIWAN">TAIWAN</option>
									<option value="57|TANZANIA">TANZANIA</option>
									<option value="180|TERR ANTARTICO BRITANNICO">TERR ANTARTICO BRITANNICO</option>
									<option value="183|TERR ANTARTICO FRANCESE">TERR ANTARTICO FRANCESE</option>
									<option value="245|TERRIT.BRITAN.OCEANO IND.">TERRIT.BRITAN.OCEANO IND.</option>
									<option value="72|THAILANDIA">THAILANDIA</option>
									<option value="155|TOGO REPUBBLICA">TOGO REPUBBLICA</option>
									<option value="162|TONGA">TONGA</option>
									<option value="120|TRINIDAD E TOBAGO REPUBBLICA">TRINIDAD E TOBAGO REPUBBLICA</option>
									<option value="229|TRISTAN DA CUNHA">TRISTAN DA CUNHA</option>
									<option value="75|TUNISIA">TUNISIA</option>
									<option value="76|TURCHIA">TURCHIA</option>
									<option value="273|TURKMENISTAN">TURKMENISTAN</option>
									<option value="210|TURKS E CAICOS">TURKS E CAICOS</option>
									<option value="193|TUVALU - ISOLE">TUVALU - ISOLE</option>
									<option value="263|UCRAINA">UCRAINA</option>
									<option value="132|UGANDA">UGANDA</option>
									<option value="244|UMM AL QAIWAIN">UMM AL QAIWAIN</option>
									<option value="77|UNGHERIA">UNGHERIA</option>
									<option value="83|UNION OF MYANMAR (EX BIRMANIA)">UNION OF MYANMAR (EX BIRMANIA)</option>
									<option value="236|UNIONE TOKELAU - ISOLE">UNIONE TOKELAU - ISOLE</option>
									<option value="80|URUGUAY">URUGUAY</option>
									<option value="271|UZBEKISTAN">UZBEKISTAN</option>
									<option value="121|VANUATU">VANUATU</option>
									<option value="81|VENEZUELA">VENEZUELA</option>
									<option value="221|VERGINI - ISOLE AMERICANE">VERGINI - ISOLE AMERICANE</option>
									<option value="249|VERGINI - ISOLE BRITANNICHE">VERGINI - ISOLE BRITANNICHE</option>
									<option value="62|VIET NAM REPUBBLICA SOCIALISTA">VIET NAM REPUBBLICA SOCIALISTA</option>
									<option value="178|WAKE - ISOLA">WAKE - ISOLA</option>
									<option value="218|WALLIS E FUTUNA- ISOLE">WALLIS E FUTUNA- ISOLE</option>
									<option value="42|YEMEN REPUBBLICA ARABA">YEMEN REPUBBLICA ARABA</option>
									<option value="108|YEMEN REPUBBLICA DEMOCRATICA P">YEMEN REPUBBLICA DEMOCRATICA P</option>
									<option value="18|ZAIRE REPUBBLICA">ZAIRE REPUBBLICA</option>
									<option value="58|ZAMBIA">ZAMBIA</option>
									<option value="73|ZIMBABWE">ZIMBABWE</option>
									<option value="250|ZONA DEL CANALE DI PANAMA">ZONA DEL CANALE DI PANAMA</option>
							</select>
		</td>
	</tr>
	<tr id="trprovinciaAttivitaAv_ric">
		<td id="lbprovinciaAttivitaAv_ric">Provincia svolgimento attività*</td>
		<td>
			<select disabled="true" name="provinciaAttivitaAv_ric" id="provinciaAttivitaAv_ric">
				<option value="-" selected="">-- seleziona --</option>
							</select>
		</td>
	</tr>
		<tr>
		<td id="lbredditoAnnuoAv_ric">Reddito annuo netto*</td>
		<td>
			<select name="redditoAnnuoAv_ric" id="redditoAnnuoAv_ric">
				<option value="-" selected="">-- seleziona --</option>
									<option value="Da 0 a 15.000 euro|Da 0 a 15.000 euro">Da 0 a 15.000 euro</option>
									<option value="Da 15.001 euro a 30.000 euro|Da 15.001 euro a 30.000 euro">Da 15.001 euro a 30.000 euro</option>
									<option value="Da 30.001 euro a 45.000 euro|Da 30.001 euro a 45.000 euro">Da 30.001 euro a 45.000 euro</option>
									<option value="Da 45.001 euro a 65.000 euro|Da 45.001 euro a 65.000 euro">Da 45.001 euro a 65.000 euro</option>
									<option value="Da 65.001 euro a 80.000 euro|Da 65.001 euro a 80.000 euro">Da 65.001 euro a 80.000 euro</option>
									<option value="Oltre 80.000 euro|Oltre 80.000 euro">Oltre 80.000 euro</option>
							</select>
		</td>
	</tr>
	<tr>
		<td id="lboriginePatrimonioAv_ric">Origine del patrimonio*</td>
		<td>
						<div class="nobor3"><input type="checkbox" onclick="AdeVer.assignValue(this, 'originePatrimonioAv_ric', true)" value="Reddito da lavoro|Reddito da lavoro" id="0|Reddito da lavoro|Reddito da lavoro" class="nobor3"> Reddito da lavoro</div> 
						<div class="nobor3"><input type="checkbox" onclick="AdeVer.assignValue(this, 'originePatrimonioAv_ric', true)" value="Rendite da Investimenti|Rendite da Investimenti" id="0|Rendite da Investimenti|Rendite da Investimenti" class="nobor3"> Rendite da Investimenti</div> 
						<div class="nobor3"><input type="checkbox" onclick="AdeVer.assignValue(this, 'originePatrimonioAv_ric', true)" value="Vendita beni immobili|Vendita beni immobili" id="0|Vendita beni immobili|Vendita beni immobili" class="nobor3"> Vendita beni immobili</div> 
						<div class="nobor3"><input type="checkbox" onclick="AdeVer.assignValue(this, 'originePatrimonioAv_ric', true)" value="Eredità/donazione|Eredità/donazione" id="0|Eredità/donazione|Eredità/donazione" class="nobor3"> Eredità/donazione</div> 
						<div class="nobor3"><input type="checkbox" onclick="AdeVer.assignValue(this, 'originePatrimonioAv_ric', true)" value="Altro|Altro" id="0|Altro|Altro" class="nobor3"> Altro</div> 
					</td>
		<input type="hidden" value="" name="originePatrimonioAv_ric" id="originePatrimonioAv_ric">
	</tr>
	</tbody>
</table>
</div>
<br /><br />
<div class="fooform">	
	<div class="fooformtop">Step <strong>1</strong> di 3</div>
	<div class="fooformleft">
		<div class="text">I campi contrassegnati da un asterisco (*) sono obbligatori.</div>	
	</div>
	<div class="fooformright">
		<div id="bottoneAbilitato"><a title="prosegui" class="btnformright" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_firma_digitale_riepilogo_carta.php"><img alt="" src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
		<br class="clear">
	</div>	
	<br class="clear">
</div>

