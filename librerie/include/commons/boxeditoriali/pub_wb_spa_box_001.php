<!-- BOX NUMERI VERDI -->
	<div class="numeriverdi">
		<div class="numeriverditop">
			<div class="detailcontainer" id="numeriverdidetails">
				<p>Attivo dal lunedì al venerdì, 8.30 - 20.30 e il sabato, 9.00 - 17.30. Fornisce: Informazioni sull'offerta Webank e aiuto alla compilazione della richiesta online di apertura conto.</p>
				<a  href="javascript:;" onclick="javascript: closeVerdi()">Chiudi</a>
			</div>
			<a href="javascript:;" onclick="javascript: openVerdi()" id="openverdi" title="Orari e modalit&agrave;">Orari e modalit&agrave;</a>
		</div>
		<!--div id="c2mToolbar" class="boxchatsx"><a href="#"><img src="/img/str_bg_chatsx_disabled.gif" alt="chat" /></a></div>
		<div id="c2mToolbar" class="boxchatsx"><a href="#"><img src="/img/str_bg_chatsx.gif" alt="chat" /></a></div-->
		<!--div id="c2mToolbar" class="boxchatsx"></div-->
		<span id="vvc_placeholder_50e3fe4871f684ee06000110" class="boxchatsx"></span>
		
		<div class="numeriverdimiddle">
			<a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_assitenza_a_360_wb.php" title="Servizio clienti a 360&deg;">Servizio clienti a 360&deg;</a>
		</div>
		<div class="numeriverdibottom">
			<a href="javascript:;" onclick="document.getElementById('sendemail').style.top=getScrollY()+35+'px';openPopOverLayer ('sendemail','fixed');" title="Scrivi a Webank">Scrivi a Webank</a>
		</div>
	</div>
<!-- / BOX NUMERI VERDI -->
<script type="text/javascript">
	//funzioni da reimplementare in SVILUPPO con standard corretti
	// - queste servono solo a testare le funzionalità visuali
	function changeSuggerimenti(field)
	{
		document.getElementById('suggerimenticorto').style.display = 'none';
		document.getElementById('suggerimentilungo').style.display = 'none';
		if (field.selectedIndex==1) document.getElementById('suggerimenticorto').style.display = 'block';
		if (field.selectedIndex==2) document.getElementById('suggerimentilungo').style.display = 'block';
		closePopOverLayer('sendemail','fixed');
		openPopOverLayer('sendemail','fixed');
	}

	function sendmail ()
	{
		thereisanerror = false;
		baseclassname = "";
		//setta la classe di default a tutti i campi
		for (i=0; i<document.getElementById('sendemail').getElementsByTagName('INPUT').length; i++)
		{
			if (document.getElementById('sendemail').getElementsByTagName('input')[i].parentNode.className.indexOf('onright')>0)
			{
				baseclassname= "fieldblock onright";
			}
			else
			{
				baseclassname= "fieldblock";
			}
			if (document.getElementById('sendemail').getElementsByTagName('INPUT')[i].value == '')
			{
				document.getElementById('sendemail').getElementsByTagName('INPUT')[i].parentNode.className = baseclassname + " error";
				thereisanerror = true;
			}
			else
			{
				document.getElementById('sendemail').getElementsByTagName('INPUT')[i].parentNode.className = baseclassname;	
			}
		
		}
		if (!thereisanerror)
		{
			closePopOverLayer('sendemail','fixed');
			document.getElementById('sendemail').getElementsByTagName('DIV')[1].innerHTML = '<h5>Il messaggio &egrave; stato inviato</h5><p>Ringraziandoti per averci contattato ti comunichiamo che sar&agrave; nostra premura risponderti al pi&ugrave; presto</p>';
			openPopOverLayer('sendemail', 'fixed');
		}
	}

</script>
<!-- OVERLAYER -->
<div class="overlayer" id ="sendemail">
	<div class="overlayertitle" style="background-image: url(/img/tit_scrivi_webank_overlayer.gif)"><a href="javascript:;" onclick="closePopOverLayer('sendemail');" class="chiudi">Chiudi</a></div>
	<div class="overlayerbody">
		<form action="#" method="post" id="formtocheck">
		
			<div class="fieldblock">
				<label>Sei un utente*</label>
				<span>Verifica</span>
				<select>
					
					<option value="xxx">xxx</option>
					<option value="yyy">yyy</option>
				</select>
			</div>
		
			<div class="fieldblock onright">
				<label>Tipo di richiesta*</label>
				<span>Verifica</span>
				<select onchange="changeSuggerimenti(this);">
					<option selected value=""></option>
					<option value="xxx">xxx</option>
					<option value="yyy">yyy</option>
				</select>
			</div>
			
			<div class="suggerimenti" style="display:none;" id="suggerimenticorto">
				<div class="suggerimentitop"></div>
				<div class="suggerimentibody">
					<h5 class="black">Suggerimenti</h5>
					<p class="nospace">Lorem ipsum dolor sit amet, consectetur adipisicing elit, lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<ul class="flaglist">
						<li><a href="">Lorem ipsum</a> Lorem ipsum Lorem ipsum Lorem ipsum</li>
						<li>Lorem ipsum Lorem ipsum Lorem ipsum</li>
						<li><a href="">Lorem ipsum</a> ipsum Lorem ipsum Lorem ipsum</li>
						<li>Lorem ipsum Lorem ipsum Lorem ipsum</li>
					</ul>
				</div>
				<div class="suggerimentibottom"></div>
			</div>
			
			<div class="suggerimenti" style="display:none;" id="suggerimentilungo">
				<div class="suggerimentitop"></div>
				<div class="suggerimentibody">
					<h5 class="black">Suggerimenti</h5>
					<p class="nospace">Lorem ipsum dolor sit amet, consectetur adipisicing elit, lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit, lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<ul class="flaglist">
						<li><a href="">Lorem ipsum</a> Lorem ipsum Lorem ipsum Lorem ipsum</li>
						<li>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </li>
					</ul>
				</div>
				<div class="suggerimentibottom"></div>
			</div>
			
			
						
			<div class="fieldblock">
				<label>Nome*</label>
				<span>Verifica</span>
				<input type="text">
			</div>
			
			<div class="fieldblock onright">
				<label>Cognome*</label>
				<span>Verifica</span>
				<input type="text">
			</div>
			
			<div class="fieldblock">
				<label>E-mail*</label>
				<span>Verifica</span>
				<input type="text">
			</div>
			
			<div class="fieldblock onright">
				<label>Messaggio*</label>
				<span>Verifica</span>
				<textarea></textarea>
			</div>
			
			
			
			
			<div class="fieldblock">
				<label>Codice di controllo</label><a href="#" class="rightlink">Crea nuovo codice</a>
				<img src="/img/bg_captcha.gif">
			</div>
			
		<div class="fieldblock onright">
				<label>Digita il codice di controllo*</label>
				<span>Verifica</span>
				<input type="text">
			</div>
		
		</form>
		
		<div class="buttoncontainer">
			<a class="greenbutton" onclick="javascript: sendmail();" href="javascript:;"><span>Invia il tuo messaggio a Webank</span></a>
		</div>
	</div>
</div>
<!-- /OVERLAYER -->
