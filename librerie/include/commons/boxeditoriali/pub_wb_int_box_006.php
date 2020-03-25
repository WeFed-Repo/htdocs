<div class="overlayer" id="<?php print ($overlayertipo); ?>">
	<div class="overlayertitle" style="background-image: url(/img/tit_<?php print ($overlayertipo."_"); ?>overlayer.gif);"><a href="javascript:;" onclick="closePopOverLayer('<?php print ($overlayertipo); ?>');" class="chiudi">Chiudi</a></div>
	<div class="overlayerbody">
		<?php
/* OVERLAYER ALL'INTERNO DEI MUTUI PER ATTIVARE LA FUNZIONE DEL CALL ME BACK */
		if($overlayertipo == "callmeback")
			{
		?>
		<p class="sx">Cerchi ulteriori <strong>informazioni</strong> o intendi <strong>richiedere</strong> subito un mutuo?<br/>Lasciaci i tuoi dati. Un nostro consulente ti contatter&agrave; nell'orario che preferisci.</p>
		<form action="#" method="post" id="formtocheck">			
			
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
			
		
			<div class="fieldblock pd13">
				<label>Tipo telefono*</label>
				<span>Verifica</span>
				<select>
					<option value="xxx">xxx</option>
					<option value="yyy">yyy</option>
				</select>
			</div>
		
			<div class="fieldblock onright">
				<label>Numero telefono*</label>
				<span>Verifica</span><br class="clear" />
				<input type="text" class="preftel" maxlength="3"><input type="text" class="numtel">
			</div>
		
		
			<!--div class="fieldblock onright">
				<label>Tipo di richiesta*</label>
				<span>Verifica</span>
				<select onchange="changeSuggerimenti(this);">
					<option selected value=""></option>
					<option value="xxx">xxx</option>
					<option value="yyy">yyy</option>
				</select>
			</div-->
			
			<!--div class="suggerimenti" style="display:none;" id="suggerimenticorto">
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
			</div-->
			
			
			<div class="fieldblock">
				<label>Orario preferito di contatto*</label>
				<span>Verifica</span>
				<select onchange="changeSuggerimenti(this);">
					<option selected value=""></option>
					<option value="xxx">xxx</option>
					<option value="yyy">yyy</option>
				</select>
			</div>
			
			<div class="fieldblock onright">
				<label>Prodotto d'interesse*</label>
				<span>Verifica</span>
				<select onchange="changeSuggerimenti(this);">
					<option selected value=""></option>
					<option value="xxx">xxx</option>
					<option value="yyy">yyy</option>
				</select>
			</div>
			
			<div class="fieldblock">
				<label>Codice di controllo</label><a href="#" class="rightlink">Crea nuovo codice</a>
				<img src="/img/bg_captcha.gif">
			</div>
			
			<div class="fieldblock onright">
				<label>Gi&agrave; correntista Webank o Bipiemme*</label><br class="clear" />
				<div class="fieldradio">
					<input type="radio" name="banca" class="radio" checked="checked">Si<input type="radio" name="banca" class="radio second">No
				</div>
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
<?php
	}
/* FINE OVERLAYER ALL'INTERNO DEI MUTUI PER ATTIVARE LA FUNZIONE DEL CALL ME BACK */

/* OVERLAYER ALL'INTERNO DEL PARTECIPA CHE FA VOTARE UN SUGGERIMENTO*/
elseif ($overlayertipo == "piaceanche")
	{
?>
<p class="sx">Cerchi ulteriori <strong>informazioni</strong> o intendi <strong>richiedere</strong> subito un mutuo?<br/>Lasciaci i tuoi dati. Un nostro consulente ti contatter&agrave; nell'orario che preferisci.</p>
		<form action="#" method="post" id="formtocheck">			
			
			<div class="fieldblock">
				<label>Nickname*</label>
				<span>Verifica</span>
				<input type="text">
			</div>
			
			<div class="fieldblock onright">
				<label>E-mail*</label>
				<span>Verifica</span>
				<input type="text">
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
			<a class="greenbutton" onclick="javascript: sendmail();" href="javascript:;"><span>Vota</span></a>
		</div>
<?php
		}
/* FINE OVERLAYER ALL'INTERNO DEL PARTECIPA CHE FA VOTARE UN SUGGERIMENTO*/		
?>
	</div>
</div>
<!-- /OVERLAYER -->