<h1>Cellulare</h1>
<p>L'inserimento del numero di cellulare è <strong>obbligatorio</strong> e ti permette automaticamente di aderire <strong>all'iniziativa gratuita</strong> <a href="#">Programma Sicurezza</a> per ricevere gli Alert SMS sulle <a href="#">disposizioni on line tipo 1</a>.<br>
<br>
In questa pagina puoi modificare il numero di cellulare e il gestore telefonico che hai inserito in precedenza.</p>
<strong>COME PROCEDERE</strong><br>
<p>Il tuo numero di cellulare certificato attuale è: <strong>348 **** 456</strong></p>
<ul>
	<li> Se cambi soltanto il gestore telefonico, ti sarà richiesta la password di II livello.</li>
	<li>Se invece devi inserire un nuovo numero telefonico, occorre certificarlo inserendo i codici che riceverai via SMS:
		<ol>
			<li>un <strong>codice di autenticazione</strong> al numero di cellulare che è attualmente certificato.</li>
			<li>un <strong>codice di controllo</strong> al tuo nuovo numero di cellulare.</li>
		</ol>
	</li>
</ul>
<p><strong>Devi inserirli entrambi per certificare il nuovo numero</strong>: tieni dunque sotto controllo e accesi tutti e due i cellulari</p>
<!-- BOX CON ERRORI -->
<div id="ErroriValidazione">
	<div class="boxtxt">
		<p class="box_mess"><img border="0" src="/wscmn/img/ico2inf_errorform.gif" alt="" class="dx"><img border="0" src="/img/ret/box_attenzione.jpg" alt=""><br>
		Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. 
		</p>
		<ul class="alert">
			<li>Lorem ipsum dolor sit amet</li>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Lorem ipsum dolor sit amet</li>
			<li>Lorem ipsum dolor sit amet</li>
		</ul>
		
	</div>
</div>
<!-- FINE BOX CON ERRORI -->
<!-- FORM TELEFONO -->
<div class="formGeneric">
	<form autocomplete="off">
		<fieldset>
			<label class="nomefield">Numero di cellulare:</label>
			<span class="uniqTooltipText over static grey noAutoClosed" id="staticTooltip3">
			<span class="uniqTooltipPos"><input id="telNumber" type="tel" name="telNumber" id="telNumber" placeholder="0039" pattern="[0-9]*" onfocus="createUniqTooltip(event, this, 'large');" onblur="removeUniqTooltip(event,this);" onkeypress="removeUniqTooltip(event,this);"/></span>
			<span class="uniqTooltipInnerHTML">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit amet consectetur adipiscing elit</span>
			</span>
		</fieldset>
		<fieldset class="errore">
			<label class="nomefield">Operatore:</label>
			<select id="telOperatore">
				<option value="-">-- Seleziona operatore --</option>
			</select>
		</fieldset>
		<div id="smsCode" style="display:none">
			<fieldset>
				<label class="nomefield">Autenticazione (inviato sul vecchio numero):</label>
				<input type="text" placeholder="Codice inviato sul vecchio numero" maxlength="16">
			</fieldset>
			<fieldset>
				<label class="nomefield">Codice di controllo (inviato sul nuovo numero):</label>
				<input type="text" placeholder="Scrivi qui il codice che ti abbiamo inviato" maxlength="16">
			</fieldset>
			<!-- BOX PIN 32 -->
			 <br class="clear" />
			<div class="pintxt">
			  <p class="pin_testo2">Lorem ipsum</p>
			  <p class="pin_testo">Inserisci la <strong class="negativo">TERZA</strong> 
				e <strong class="negativo">QUARTA</strong> cifra del codice <strong class="negativo">12</strong> 
				della tua <strong>Carta Servizi Telematici</strong></p>
			</div>
			<div class="pincode">
			  <input type="password" maxlength="1" name="" class="pin pinfirst" />
			  <img src="/img/ret/pin_aster.gif" width="17" height="21" border="0" class="aster pincenter" alt="" /><img src="/img/ret/pin_aster.gif" width="17" height="21" border="0" class="aster pincenter" alt="" />
			  <input type="password" maxlength="1" name="" class="pin pinlast" />
			   <br class="clear" />
			  <img src="/img/ret/pin_posiz.jpg" width="104" height="12" border="0" class="posizione" alt="" /> 	  
			</div>
			<br class="clear" />
			<!-- FINE BOX PIN 32 -->
		</div>
	</form>
</div>
<br class="clear" />
<div class="aButtoncons">
	<a class="aButton" onclick="$('#telNumber').attr('disabled',true);$('#telOperatore').attr('disabled',true);$('#smsCode').show();$('#smsCert').css('display','');$(this).hide()"><span>Conferma</span></a>
	<a class="aButton" id="smsCert" style="display:none"><span>Certifica</span></a>
</div>
<br class="clear" />
<!-- / FORM TELEFONO -->
<p class="note">Il numero non sarà utilizzato a scopi promozionali, ma soltanto per il Programma Sicurezza.<br>
I dati inseriti saranno immessi nella banca dati elettronica dell'azienda nel rispetto del D. Lgs 30 giugno 2003 n.196 "Codice in materia di protezione dei dati personali"</p>