<h1>RECAPITI E ALERT</h1>
<br>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form>
			<div class="row-fluid noMargbottom">
				<div class="span6">
					<label class="nomefield">I miei recapiti</label>
				</div>
				<div class="span6"></div>
			</div>
			<div class="row-fluid" id="Telefono">
				<div class="span5">
					<span class="output">N&deg; cellulare: <strong>333***3477</strong></span>
				</div>
				<div class="span4">
					<div class="tolltipclick operatoreVirt">
						<span class="output">Operatore:
							<span class="closed">
								<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2">
									<span class="uniqTooltipPos"> <a href="javascript:;"><strong>Lorem ipsum</strong></a></span>
									<span class="uniqTooltipInnerHTML">
										<p>dimensione in larghezza 300px</p>
									</span>
								</span>
							</span>
						</span>
					</div>
		<a href=""></a></span>
				</div>
				<div class="span3">
					<span class="output"><a href="javascript:;" onclick="$('#TelefonoMod').show();$('#Telefono').hide();">Modifica telefono cellulare</a></span>
				</div>
			</div>
			
<!--Modifica recapito telefonico-->
			<div id="TelefonoMod" style="display:none" class="AttivazModDati">
				<div class="row-fluid margBottomLarge">
					<div class="span5">
					<span class="output">N&deg; cellulare: <strong>333***3477</strong></span>
					</div>
					<div class="span4">
						<span class="output">Operatore: <strong>Lorem ipsum</strong></span>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span12">
						<h2 class="titGeneric03 colorBank">NUOVO NUMERO DI TELEFONO</h2>
						<p>Inserisci un nuovo numero di telefono e/o un nuovo operatore</p>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span6">
						<div class="row-fluid noMargbottom">	
							<div class="span12">
								<label class="nomefield">Modifica numero cellulare </label>
							</div>
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
					<div class="span12"><p>Attenzione: la modifica dei dati ha valore per tutti i rapporti con la Banca Popolare di Milano</p></div>
				</div>

				<div class="row-fluid">
					<div class="aButtonconsLeft">
						<a href="javascript:;" class="uniformBtn smallBtn greyBtn" onclick="$('#Telefono').show();$('#TelefonoMod').hide();"><i class="icon-angle-left icon-before"></i>annulla</a>
					</div>
					<div class="aButtonconsRight">
						<a href="javascript:;" class="uniformBtn smallBtn" onclick="$('#Telefono').show();$('#TelefonoMod').hide();">prosegui<i class="icon-angle-right icon-after"></i></a>
					</div>
				</div>
			</div>
<!--Fine Modifica recapito telefonico-->


			<div class="row-fluid" id="Mail">
				<div class="span9">
					<span class="output">Indirizzo email: <strong>Pierfrancesco.rossini@gmail.com</strong></span>
				</div>
				<div class="span3">
					<span class="output"><a href="javascript:;" onclick="$('#MailMod').show();$('#Mail').hide();">Modifica email</a></span>
				</div>
			</div>

<!--Modifica recapito email step1-->
			<div id="MailMod" style="display:none" class="AttivazModDati">
				<div class="row-fluid margBottomLarge">
					<div class="span112">
						<span class="output">Indirizzo email: <strong>Pierfrancesco.rossini@gmail.com</strong></span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<h2 class="titGeneric03 colorBank">NUOVA EMAIL</h2>
						<p>Inserisci un nuovo indirizzo di posta elettronica</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
						<label class="nomefield">Nuovo indirizzo email*</label>
						<input type="text" name="">
					</div>										
				</div>
				
				<div class="row-fluid margBottomLarge">
					<div class="span12">
						<span class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</span><br>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span12">
						<p><strong>ATTENZIONE TIENI SOTTO CONTROLLO LA TUA POSTA.</strong><br>
						Una volta inserito il nuovo indirizzo e cliccato il pulsante "modifica", ti invieremo una email al vecchio indirizzo e una al nuovo, entrambe contenenti un codice di controllo. Dovrai inserire i due codici, sempre in questa pagina, per completare l'operazione. 
						
						<!--Attenzione: la modifica dei dati ha valore per tutti i rapporti con la Banca Popolare di Milano--></p>
					</div>
				</div>

				<div class="row-fluid">
					<div class="fooformtop">Step <strong>1</strong> di 2</div>
					<div class="filettoGenericoOrizzontale02"></div>
					<div class="aButtonconsLeft">
						<a href="javascript:;" class="uniformBtn smallBtn greyBtn" onclick="$('#Mail').show();$('#MailMod').hide();"><i class="icon-angle-left icon-before"></i>annulla</a>
					</div>
					<div class="aButtonconsRight">
						<a href="javascript:;" class="uniformBtn smallBtn" onclick="$('#MailMod2').show();$('#MailMod').hide();">prosegui<i class="icon-angle-right icon-after"></i></a>
					</div>
					
					
					<!--div class="aButtonconsLeft">
						<span class="btnc"><a class="aButtonClear" href="javascript:;" onclick="$('#Mail').show();$('#MailMod').hide();"><span>annulla</span></a></span>
					</div>
					<div class="aButtonconsRight">
						<span class="btnc"><a class="aButton" href="javascript:;" onclick="$('#MailMod2').show();$('#MailMod').hide();"><span>prosegui</span></a></span>
					</div-->
				</div>
			</div>
<!--Fine Modifica recapito email step1-->


<!--Modifica recapito email step2-->
			<div id="MailMod2" style="display:none" class="AttivazModDati">
				<div class="row-fluid">
					<div class="span12">
						<span class="output">Indirizzo email: <strong>Pierfrancesco.rossini@gmail.com</strong></span>
					</div>
				</div>
				<div class="row-fluid margBottomLarge">
					<div class="span12">
						<span class="output">Nuovo indirizzo email: <strong>Pierfrancesco.rossini@lamiaazienda.com</strong></span>
					</div>										
				</div>
				
				
				<div class="row-fluid">
					<div class="span12">
						<h2 class="titGeneric03 colorBank">NUOVA EMAIL</h2>
						<p>Per confermare inserisci i codici di controllo che hai ricevuto via email agli indirizzi: mario.rossi@gmail.com e simona.milella@guest.bpm.it</p>
					</div>
				</div>
				
				<div class="row-fluid noMargbottom">
					<div class="span2">&nbsp;</div>
					<div class="span5">
						<p>Codice di controllo vecchio indirizzo email</p>
					</div>
					<div class="span5">
						<p>Codice di controllo nuovo indirizzo email</p>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span2">
						<label class="nomefield">Modifica email*</label>
					</div>
					<div class="span5">
						<input type="text" name="">
					</div>
					<div class="span5">
						<input type="text" name="">
					</div>
					</div>
				
				<div class="row-fluid margBottomLarge">
					<div class="span12">
						<span class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</span><br>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="fooformtop">Step <strong>2</strong> di 2</div>
					<div class="filettoGenericoOrizzontale02"></div>
					<div class="aButtonconsLeft">
						<a href="javascript:;" class="uniformBtn smallBtn greyBtn" onclick="$('#Mail').show();$('#MailMod2').hide();"><i class="icon-angle-left icon-before"></i>annulla</a>
					</div>
					<div class="aButtonconsRight">
						<a href="javascript:;" class="uniformBtn smallBtn" onclick="$('#Mail').show();$('#MailMod2').hide();">prosegui<i class="icon-angle-right icon-after"></i></a>
					</div>
					
					<!--div class="aButtonconsLeft">
						<span class="btnc"><a class="aButtonClear" href="javascript:;" onclick="$('#MailMod').show();$('#MailMod2').hide();"><span>annulla</span></a></span>
					</div>
					<div class="aButtonconsRight">
						<span class="btnc"><a class="aButton" href="javascript:;" onclick="$('#Mail').show();$('#MailMod2').hide();"><span>prosegui</span></a></span>
					</div-->
				</div>
			</div>
<!--Fine Modifica recapito email step2-->

		</form>
	</div>
</div>
<br class="clear"><br>
<h3 class="verde">Definisci i dettagli degli alert</h3>
<p>Per impostare la ricezione degli alert &egrave; necessario inserire i propri recapiti.<br>
In caso contrario gli alert saranno disabilitati.
</p>
<div class="borderFormRounded searchFilter">
	<div class="formGeneric">
		<form>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Carte</label>
					<select>
						<option>lorem</option>
						<option>lorem</option>
						<option>lorem</option>
					</select>
				</div>
			</div>

		</form>
	</div>
</div>
<br class="clear"><br>
<table class="form04">
<tr class="titolo"> 
		<td colspan="2" class="txtl">PAGAMENTI E PRELIEVI</td>
		<td class="left2" width="20%">Sms</td>
		<td class="left2" width="20%">E-mail <span class="verde">(gratis)</span></td>
	</tr>
	<tr> 
		<td class="txtl">Lorem ipsum</td>
		<td><input name="text" class="importo" type="text"> , 00 &euro;</td>
		<td class="left"><input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"> <span class="bk">0.26 &euro;</span><br class="clear"></td>
		<td class="center"><input value="" type="checkbox"></td>
	</tr>
	<tr class="bianco"> 
		<td class="txtl">Lorem ipsum</td>
		<td><input name="text" class="importo" type="text"> , 00 &euro;</td>
		<td class="left"><input type="checkbox" class="nobor3" value="radiobutton" name="radiobutton"> <span class="bk">0.26 &euro;</span><br class="clear"></td>
		<td class="center"><input value="" type="checkbox"></td>
	</tr>
</table>
<br/>
<div class="fooform2">
	<div class="fooformright">
		<div>
			<a href="javascript:;" class="uniformBtn smallBtn" title="Lorem ipsum">Lorem ipsum<i class="icon-angle-right icon-after"></i></a>
		</div>
	<br class="clear" />
	</div>	
<br class="clear" />
</div>

















