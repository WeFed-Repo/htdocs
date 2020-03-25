<h1>Attiva firma</h1>
<div class="row-fluid">
	<div class="span12">
	<p>Controlla i tuoi dati. Appena li avrai confermati potrai iniziare il processo di attivazione Firma digitale rilasciata da <strong>INFOCERT</strong></p>
	</div>
</div><br>

<div class="row-fluid">
	<div class="span12">
		<img src="/img/ret/step01_attivaz_firma.png" alt="">
	</div>	
</div>
<div class="row-fluid">
	<div class="span4"><strong class="colorBank">Controlla i tuoi dati</strong></div>
	<div class="span4 txtAlCenter txtStep">Attivazione firma - InfoCert</div>
	<div class="span4 txtAlRight txtStep">Il tuo contratto</div>	
</div><br><br>

<div class="borderFormRounded">
	<div class="formGeneric">
		
		<form>
			
			<div class="row-fluid">
				<div class="span6">
						<label class="nomefield">Nome e cognome</label>
						<span class="output">Pierfrancesco Rossini</span>
				</div>
				<div class="span6">
						<label class="nomefield">Sesso</label>
						<span class="output">Maschile</span>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
						<label class="nomefield">Data di nascita</label>
						<span class="output">02/11/1969</span>
				</div>
				<div class="span6">
						<label class="nomefield">Documento d'identit&agrave;</label>
						<span class="output">Carta d'identità N. AB12345<br>data di rilascio/ultimo rinnovo 28/05/2014</span>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6">
						<label class="nomefield">Codice fiscale</label>
						<span class="output">ABCDEF3123431289766</span>
				</div>
				<div class="span6">
						<label class="nomefield">Stato di nascita</label>
						<span class="output">Italia</span>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span6">
						<label class="nomefield">Comune di nascita</label>
						<span class="output">Milano</span>
				</div>
				<div class="span6">
						<label class="nomefield">Cittadinanza</label>
						<span class="output">Italiana</span>
				</div>
			</div>

			<div class="row-fluid" id="Residenza">
				<div class="span6">
						<label class="nomefield">Indirizzo di residenza</label>
						<span class="output">Corso Italia 1, 20121 MILANO (MI)</span>
				</div>
				<div class="span6">
						<span class="output"><a href="javascript:;" onclick="$('#ResidenzaMod').show();$('#Residenza').hide();">Modifica residenza</a></span>
				</div>
			</div>

			<div id="ResidenzaMod" style="display:none" class="AttivazModDati">
				<div class="row-fluid">
					<div class="span6">
							<label class="nomefield">Indirizzo di residenza attuale</label>
							<span class="output">Corso Italia 1, 20121 MILANO (MI)</span>
					</div>
					<div class="span6"></div>
				</div>
				<div class="row-fluid">
					<div class="span12"><h2 class="titGeneric03 txtTransformUpper colorBank">NUOVO INDIRIZZO DI RESIDENZA</h2>
					<p>Inserisci il nuovo indirizzo e la password di II livello e poi conferma i dati</p></div>
				</div>
				<div class="row-fluid">
					<div class="span6">
							<label class="nomefield">Indirizzo</label>
							<input type="text" name="">
					</div>
					<div class="span2">
							<label class="nomefield">CAP</label>
							<select>
								<option>00000</option>
								<option>00000</option>
							</select>
					</div>
					<div class="span4"></div>
				</div>
				<div class="row-fluid">
					<div class="span6">
							<label class="nomefield">Comune</label>
							<select>
								<option></option>
								<option></option>
							</select>
					</div>
					<div class="span2">
							<label class="nomefield">Provincia</label>
							<select>
								<option></option>
								<option></option>
							</select>
					</div>
					<div class="span4">
							<label class="nomefield">Localit&agrave;</label>
							<select>
								<option></option>
								<option></option>
							</select>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12"><p>Attenzione: la modifica dei dati ha valore per tutti i rapporti con la Banca Popolare di Milano e verr&agrave; trasmessa alla Certification Authority per l'attivazione della firma digitale</p></div>
				</div>

				<div>						
					<div class="pintxt">
						<p class="pin_testo2">Password II livello</p>
						<p class="pin_testo" id="Password di II livello">Inserisci la <strong class="negativo">SECONDA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">30</strong> della tua <strong>Carta Servizi Telematici</strong></p>
					</div>
					<div class="pincode">
						<img height="21" border="0" width="17" alt="" class="aster pinfirst" src="/img/ret/pin_aster.gif">
						<input type="password" class="pin pincenter" name="pwd1" id="pwd1" maxlength="1" pattern="[0-9]*" onchange="bkPwd1.value = value" onfocus="select()">
						<input type="password" class="pin pincenter" name="pwd2" id="pwd2" maxlength="1" onfocus="select()" pattern="[0-9]*">
						<img height="21" border="0" width="17" alt="" class="aster pinlast" src="/img/ret/pin_aster.gif">
						<br class="clear">
						<img height="12" border="0" width="104" alt="" class="posizione" src="/img/ret/pin_posiz.jpg"> 
					</div>						
				</div>

				<div class="row-fluid">
					<div class="aButtonconsLeft">
						<span class="btnc"><a class="aButtonClear" href="javascript:;" onclick="$('#Residenza').show();$('#ResidenzaMod').hide();"><span>annulla</span></a></span>
					</div>
					<div class="aButtonconsRight">
						<span class="btnc"><a class="aButton" href="javascript:;" onclick="$('#Residenza').show();$('#ResidenzaMod').hide();"><span>prosegui</span></a></span>
					</div>
				</div>
			</div>






			<div class="row-fluid noMargbottom">
				<div class="span6">
						<label class="nomefield">Recapiti</label>
				</div>
				<div class="span6"></div>
			</div>
			<div class="row-fluid noMargbottom" id="Telefono">
				<div class="span6 errore">
						<span class="output">Telefono cellulare:333***3477</span>
				</div>
				<div class="span6 erroreBdr">
						<span class="output"><a href="javascript:;" onclick="$('#TelefonoMod').show();$('#Telefono').hide();">Modifica telefono cellulare</a></span>
				</div>
			</div>


			<div id="TelefonoMod" style="display:none" class="AttivazModDati">
				
				<div class="row-fluid">
					<div class="span12"><h2 class="titGeneric03 colorBank">NUOVO NUMERO DI TELEFONO</h2>
					<p>Inserisci un nuovo numero di telefono e/o un nuovo operatore</p></div>
				</div>

				<div class="row-fluid">
					<div class="span6">
						<div class="row-fluid noMargbottom">	
							<div class="span12"><label class="nomefield">Modifica numero cellulare </label></div>
						</div>
						<div class="row-fluid noMargbottom">	
							<div class="span2"><input type="text" name=""></div>
							<div class="span8"><input type="text" name=""></div>
						</div>
					</div>
					<div class="span6">
							<label class="nomefield">Operatore</label>
							<select>
								<option>TIM</option>
								<option></option>
							</select>
					</div>					
				</div>
				<div class="row-fluid">
					<div class="span12"><p>Attenzione: la modifica dei dati ha valore per tutti i rapporti con la Banca Popolare di Milano e verr&agrave; trasmessa alla Certification Authority per l'attivazione della firma digitale</p></div>
				</div>

				<div>						
					<div class="pintxt">
						<p class="pin_testo2">Password II livello</p>
						<p class="pin_testo" id="Password di II livello">Inserisci la <strong class="negativo">SECONDA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">30</strong> della tua <strong>Carta Servizi Telematici</strong></p>
					</div>
					<div class="pincode">
						<img height="21" border="0" width="17" alt="" class="aster pinfirst" src="/img/ret/pin_aster.gif">
						<input type="password" class="pin pincenter" name="pwd1" id="pwd1" maxlength="1" pattern="[0-9]*" onchange="bkPwd1.value = value" onfocus="select()">
						<input type="password" class="pin pincenter" name="pwd2" id="pwd2" maxlength="1" onfocus="select()" pattern="[0-9]*">
						<img height="21" border="0" width="17" alt="" class="aster pinlast" src="/img/ret/pin_aster.gif">
						<br class="clear">
						<img height="12" border="0" width="104" alt="" class="posizione" src="/img/ret/pin_posiz.jpg"> 
					</div>						
				</div>

				<div class="row-fluid">
					<div class="aButtonconsLeft">
						<span class="btnc"><a class="aButtonClear" href="javascript:;" onclick="$('#Telefono').show();$('#TelefonoMod').hide();"><span>annulla</span></a></span>
					</div>
					<div class="aButtonconsRight">
						<span class="btnc"><a class="aButton" href="javascript:;" onclick="$('#Telefono').show();$('#TelefonoMod').hide();"><span>prosegui</span></a></span>
					</div>
				</div>
			</div>



			<div class="row-fluid" id="Mail">
				<div class="span6">
						<span class="output">Email:Pierfrancesco.rossini@gmail.com</span>
				</div>
				<div class="span6">
						<span class="output"><a href="javascript:;" onclick="$('#MailMod').show();$('#Mail').hide();">Modifica email</a></span>
				</div>
			</div>


			<div id="MailMod" style="display:none" class="AttivazModDati">
				
				<div class="row-fluid">
					<div class="span12"><h2 class="titGeneric03 colorBank">NUOVA EMAIL</h2>
					<p>Inserisci un nuovo indirizzo di posta elettronica</p></div>
				</div>

				<div class="row-fluid">
					<div class="span6">
						<label class="nomefield">Modifica email</label>
						<input type="text" name="">
					</div>										
				</div>
				<div class="row-fluid">
					<div class="span12"><p>Attenzione: la modifica dei dati ha valore per tutti i rapporti con la Banca Popolare di Milano e verr&agrave; trasmessa alla Certification Authority per l'attivazione della firma digitale</p></div>
				</div>

				<div>						
					<div class="pintxt">
						<p class="pin_testo2">Password II livello</p>
						<p class="pin_testo" id="Password di II livello">Inserisci la <strong class="negativo">SECONDA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">30</strong> della tua <strong>Carta Servizi Telematici</strong></p>
					</div>
					<div class="pincode">
						<img height="21" border="0" width="17" alt="" class="aster pinfirst" src="/img/ret/pin_aster.gif">
						<input type="password" class="pin pincenter" name="pwd1" id="pwd1" maxlength="1" pattern="[0-9]*" onchange="bkPwd1.value = value" onfocus="select()">
						<input type="password" class="pin pincenter" name="pwd2" id="pwd2" maxlength="1" onfocus="select()" pattern="[0-9]*">
						<img height="21" border="0" width="17" alt="" class="aster pinlast" src="/img/ret/pin_aster.gif">
						<br class="clear">
						<img height="12" border="0" width="104" alt="" class="posizione" src="/img/ret/pin_posiz.jpg"> 
					</div>						
				</div>

				<div class="row-fluid">
					<div class="aButtonconsLeft">
						<span class="btnc"><a class="aButtonClear" href="javascript:;" onclick="$('#Mail').show();$('#MailMod').hide();"><span>annulla</span></a></span>
					</div>
					<div class="aButtonconsRight">
						<span class="btnc"><a class="aButton" href="javascript:;" onclick="$('#Mail').show();$('#MailMod').hide();"><span>prosegui</span></a></span>
					</div>
				</div>
			</div>






			
			
		</form>
		<div class="btnc aButtoncons"><a href="connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_firma_digitale_attivazione_step2.php" class="aButton"><span>Conferma i dati</span></a></div>
	
 </div>
</div>