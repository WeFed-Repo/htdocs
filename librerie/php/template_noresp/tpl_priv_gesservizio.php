<script language="javascript" type="text/javascript">	
function getCellCode() {
			openPopOverLayer ('overlayProsegui');
	}
getCellCode();	
</script>

<!-- INIZIO OVERLAY -->
<div id="overlayProsegui" class="boxoverlay" style="display: block;z-index:300000">
	<form id="formModifica" method="post">
		<div class="helpright2">
			<a onclick="closePopOverLayer('overlayProsegui')" href="javascript:;">chiudi</a>
			<a onclick="closePopOverLayer('overlayProsegui')" href="javascript:;"><img alt="" src="/img/ret/x2.gif" /></a>
			<br class="clear" />
		</div>
		<br /><br />
		<p>l codici sono stati inviati  al tuo cellulare e al tuo indirizzo di posta elettronica.</p>
		<br />
<!-- BOX ERRORI -->
		<div id="ErroriValidazione2" style="display: none">
			<div class="boxtop">
				<img border="0" src="/img/ret/box_msgtop.jpg" alt="" />
			</div>
			<div class="boxtxt">
				<p class="box_mess">
					<img src="/img/ret/img_or_form.gif" border="0" alt="" class="dx" />
					<img src="/img/ret/box_attenzione.jpg" border="0" alt="" />
					<br /><strong>Errata compilazione.</strong>
				</p>

				<ul class="alert" id="errorMessages2" />
			</div>
			<br class="clear" />
			<div class="boxbottom">
				<img border="0" src="/img/ret/box_msgbottom.jpg" alt="" />
			</div>
		</div>
<!-- --- ------ -->						

		<br class="clear" />
		<table class="form01">
		<tr>
			<td width="125" class="uno">Codice di controllo<br/>(inviato via SMS)</td>
			<td width="140"><input type="text" class="medio" name="cod_controllo_cell" id="cod_controllo_cell" size="40"/>&nbsp;&nbsp;<span id="mostraCodice" /></td>
			<td width="125" class="uno">Codice di autenticazione<br/>(inviato via E-mail)</td>
			<td width="140"><input type="text" class="medio" name="cod_controllo_mail" id="cod_controllo_mail" size="40" />&nbsp;&nbsp;<span id="mostraCodiceMail" /></td>
		</tr>
		</table>
		<br class="clear"/>
		<div class="pintxt">
			<p class="pin_testo2">Password II livello</p>
			<p class="pin_testo" id="Password di II livello">Inserisci la <strong class="negativo">PRIMA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">6</strong> della tua <strong>Carta Servizi Telematici</strong></p>
		</div>
		<div class="pincode" style="padding:0">
			<img border="0" alt="" class="aster pinfirst" src="/img/ret/pin_aster.gif"/>
			<input type="password" class="pin pincenter" name="pwd1" id="pwd1" maxlength="1" onkeyup="spostaFocus(pwd1,bkPwd1,pwd2,1)" onchange="bkPwd1.value = value" onfocus="select()" />
			<img border="0" alt="" class="aster pincenter" src="/img/ret/pin_aster.gif"/>
			<input type="password" class="pin pinlast" name="pwd2" id="pwd2" maxlength="1" onfocus="select()" />
			<br class="clear"/>
			<img border="0" alt="" class="posizione" src="/img/ret/pin_posiz.jpg"/>
		</div>
		<input class="text" type="hidden" name="bkPwd1"/>
		<br class="clear"/>
		<div class="fooform">
			<div class="fooformright" id="formModificaLoading">
				<div id="formModificaDisplay">
					<a title="prosegui" class="btnformright" href="#" onclick="javascript:prosegui()">
					<img alt="" src="/img/ret/btn_left_ar.gif" />
					<span>prosegui</span>
					<img alt="" src="/img/ret/btn_right_ar.gif" />
					</a></div>
			</div>
		</div>
		<br class="clear" />
	</form>
</div>
<!-- FINE OVERLAY -->



<!-- INIZIO CODICE--> 
<h1>TITOLO PAGINA</h1><br />
<div class="box5">
				L'inserimento del numero di cellulare &egrave; <b>obbligatorio</b> e ti permette automaticamente di aderire all'iniziativa <b>gratuita</b><br />
				<b><span class="tooltip"><a href="#1">Alert SMS sulle disposizioni on line tipo 1<span><span><span>Nelle disposizioni online sono comprese:<br/>- bonifici<br/>- ricarica carte prepagate<br/>- ricariche cellulari</span></span></span></a></span></b>.
				<br /><br />				
			<p>	In questa pagina puoi <b>modificare</b> il numero di cellulare che hai inserito in precedenza.<br />
				Il numero non sar&agrave; utilizzato a scopi promozionali, ma soltanto per il <a href="javascript:top.pop_up_int('/webankpri/common/ExternalHelp.jsp?cf=0.6230092976148348&key=PRGSIC0801');">Programma Sicurezza</a>.<br />
				
				Il nuovo numero di cellulare che stai per indicarci deve  essere certificato.<br/><br/>

				<strong> COME PROCEDERE</strong><br>
				Dopo aver inserito in basso il nuovo numero di cellulare e cliccato il bottone "prosegui", riceverai:<br>
				<ul>
				<li>un <b>codice di autenticazione</b> al tuo indirizzo email</li>
 				<li>un <b>codice di controllo</b> via SMS al tuo nuovo numero di cellulare.</li>
				</ul>

				<strong>Devi inserirli entrambi  nella successiva pagina del sito. 
				Tieni dunque sotto controllo la tua posta elettronica e acceso il cellulare!</strong>
				
				<br/><br/>
			</p>
			
			
			<div id="ErroriValidazione1" style="display: none">
				<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" border="0"></div>
				<div class="boxtxt">
					<p class="box_mess">
						<img src="/img/ret/img_or_form.gif" border="0" alt="" class="dx" />
						<img src="/img/ret/box_attenzione.jpg" border="0" alt="" />
						<br/><strong id='error_box'>Errata compilazione</strong>
						<br/><span id="Errortext"/>
					</p>
					<ul class="alert" id="errorMessages1" />
					<br class="clear"/>
				</div>
				<div class="boxbottom">
					<img src="/img/ret/box_msgbottom.jpg" border="0" alt="" />
				</div>
			</div>
			
	 
			<div class="tithelp">
				<div class="helpleft">Modifica i dati</div>
				<br clear="all" />
			</div>
			
			<form id="formCodControllo" method="post">
				<input type="hidden" name="promozione" value="si" />
				<input type="hidden" id="virtuale" name="virtuale" value="no">
												
				<table class="form01">
				<tr> 
					<td id="testo_cellulare"  class="uno">Numero cellulare</td>
					<td>
						<input id="prefisso_cell" class="piccolo" name="prefisso_cell" size="3" maxlength="3" value="111" /> &nbsp;
						<input id="numero_cell" name="numero_cell" class="medio" size="7" maxlength="7" value="1111111" /> &nbsp; &nbsp; 
						<select id="operatore_cell" name="operatore" onchange="checkVirtualOperator()">
							<option value='TIM' selected>Tim</option>
<option value='TRE'>Tre</option>
<option value='WIND'>Wind</option>
<option value='VODAF'>Vodafone</option>
<option value='COOP'>Coop Voce</option>
<option value='CONAD'>Conad Insim</option>
<option value='BT'>BT Mobile</option>
<option value='POSTE'>Poste Mobile</option>
<option value='UNO'>Uno Mobile</option>
<option value='MTV'>Mtv Mobile</option>
<option value='FASTWEB'>Fastweb Mobile</option>
<option value='DAILY'>Daily Telecom Mobile</option>
<option value='TELEPASS'>Telepass Mobile</option>
<option value='AMOBILE'>A-Mobile</option>
<option value='ALTRO'>Altro...</option>

						</select>
					</td>
				</tr>
				<tr>
					<td class="uno" >E-mail: </td>
					<td><strong>condes@condes.it</strong></td>
				</tr>
				<tr>
					<td colspan="2" id="formCodControlloLoading">
					<div class="fooform">
					<div class="fooformright" id="formCodControlloDisplay">
					<a href="#" class="btnformright" onclick="getCellCode()" title="Richiedi codici di controllo">
						<img src="/img/ret/btn_left_ar.gif" alt="">
							<span>prosegui</span>
						<img src="/img/ret/btn_right_ar.gif" alt="">	
					</a></div></div></td>
				</tr>
				</table>
			</form>

<iframe style="visibility: hidden;z-index:1999;" id="ifr" src="/img/ret/pixel_trasp.gif" frameborder="3" height="10" scrolling="no" width="10"></iframe> 	
