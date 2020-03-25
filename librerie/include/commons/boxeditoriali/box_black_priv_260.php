<?php if ($bank == "bpm") {?>
<a class="#" onclick="openPopOverLayer('#videoLay')" href="javascript:;"><img src="/img/ret/BPM_dailypay_700x100.jpg" /></a>
<?} ?>
<?php if ($bank == "webank") {?>
<div class="boxcondivisione">
	<div class="top"><img src="/img/ret/str_condivisionebox_top_dx.gif"/></div>
	<div class="middle">
		<div class="shareleft">
			
			<a class="#" onclick="openPopOverLayer('#videoLay')" href="javascript:;"><img src="/img/ret/gotovideo_carta.gif" /></a>

			<!-- nel template dei bolletini  ci va l'immagine che segue--><!--<a href="#"><img src="/img/ret/gotovideo_bollettino.gif" /></a>-->
		</div>
		<div class="shareright">
			<img src="/img/ret/tit_share.gif" alt="Webank ti piace?"/>
			<p><strong>Lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit lorem ipsum dolor sit</strong></p>
			<div class="btnshare">
				<img src="/img/ret/tit_condividivideo_small.gif"/><br class="clear" />
				<a class="first" title="condividi su facebook" href=""><img src="/img/ret/str_condividifb.gif"></a>
				<a title="condividi su twitter" href=""><img src="/img/ret/str_condividitw.gif"></a>
				<!--in quest aprima fase questo bottone non ci sarà --><a title="condividi via mail" href="javascript:;" onclick="openPopOverLayer ('layeralertfb','floating');"><img src="/img/ret/str_condividimail.gif"></a>
			</div>
		</div>
	</div>
	<div class="bottom"><img src="/img/ret/str_condivisionebox_bot_dx.gif"/></div>
</div>
<?} ?>
<!-- esempio di OVERLAYER -->
<div class="layeralert2" id ="layeralertfb" style="display:none">
	<div class="condivisione">
		<div class="head"><h2><strong>Webank mi piace</strong> perch&eacute;...</h2><img onclick="closePopOverLayer('layeralertfb')" alt="chiudi" src="/img/ret/layeralert_x.gif"/></div>
		<div class="body">
			<div class="contentForm">
				<form action="" class="top">
					<fieldset>
						<label>Mittente</label>
						<span class="output">lorem ipsum</span>
					</fieldset>
					<fieldset class="error">
						<label>Destinatari</label>
						<input type="text" class="large" value="Separa gli indirizzi di posta con una virgola" onblur="if (this.value == '') {this.value='Separa gli indirizzi di posta con una virgola'};" onfocus="if (this.value == 'Separa gli indirizzi di posta con una virgola') {this.value=''};">
					</fieldset>
					<fieldset>
						<label>Messaggio</label>
						<div class="textarea">
							<img src="img/ret/gotovideo_carta_medium.gif" /> <!--<img src="img/ret/gotovideo_bollettino_medium.gif" />-->
							<div class="right"><strong>Webank mi piace perch&eacute; la Banca ad
		alto tasso di felicit&agrave;!</strong><p>Conto Webank: in un unico prodotto hai
		la convenienza di un conto operativo
		a zero spese e rendimento di un deposito di risparmio. Zero costi di bancomat e prelievi. Zero canone per la carta di credito. Inoltre, il meglio del trading e degli investimenti</p>

							</div>
						</div>
					</fieldset>
				</form>
			
			</div>
			
			<span class="error">Verifica i campi evidenziati in rosso.</span>
			<a href="javascript:;"  onclick="closePopOverLayer('layeralertfb');openPopOverLayer('layeralertfbko','floating');" class="btnformright" title="Invia mail"><img src="/img/ret/btn_left_ar.gif" alt=""><span>Invia mail</span><img src="/img/ret/btn_right_ar.gif" alt=""></a>
		</div>
		<div class="foot"></div>
	</div>

</div>
<!-- /OVERLAYER -->

<!-- OVERLAYER DI CONFERMA -->
	<div class="layeralert2" id ="layeralertfbok" style="display:none">
		<div class="condivisione">	
			<div class="head"><h2><strong>Webank mi piace</strong> perch&eacute;...</h2><img onclick="closePopOverLayer('layeralertfbok')" alt="chiudi" src="/img/ret/layeralert_x.gif"/></div>
			<div class="body">
				<div class="condivisioneok"><img src="/img/ret/ico2inf_spunta.gif" /><span>L'email &egrave; stata inviata correttamente.</span></div>
				<form action=""><p>Grazie per aver raccontato la tua esperienza con Webank ai tuoi amici. <br />Continua a seguirci! </p>
				<a title="indietro" class="btnformleft" href="#1"><img alt="" src="/img/ret/btn_left_bi.gif"><span>indietro</span><img alt="" src="/img/ret/btn_right_bi.gif"></a>
				<a title="Torna a Webank" class="btnformright" href="javascript:;"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Torna a Webank</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
				</form>
				<br class="clear" />
			</div>
			<div class="foot"></div>
		</div>
	</div>
<!-- /OVERLAYER -->

<!-- OVERLAYER DI ERRORE -->
	<div class="layeralert2" id ="layeralertfbko" style="display:none">
		<div class="condivisione">	
			<div class="head"><h2><strong>Webank mi piace</strong> perch&eacute;...</h2><img onclick="closePopOverLayer('layeralertfbok')" alt="chiudi" src="/img/ret/layeralert_x.gif"/></div>
			<div class="body">
				<div class="condivisioneko"><img src="/wscmn/img/ret/img_or_warning_small.gif" /><span>lorem ipsum dolor sit</span></div>
				<form action=""><p>Grazie per aver raccontato la tua esperienza con Webank ai tuoi amici. <br />Continua a seguirci! </p>
				<a title="indietro" class="btnformleft" href="#1"><img alt="" src="/img/ret/btn_left_bi.gif"><span>indietro</span><img alt="" src="/img/ret/btn_right_bi.gif"></a>
				<a title="Torna a Webank" class="btnformright" href="javascript:;"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Torna a Webank</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
				</form>
				<br class="clear" />
			</div>
			<div class="foot"></div>
		</div>
	</div>
<!-- /OVERLAYER -->

<!-- OVERLAYER VIDEO -->
<div class="layeralert2" id="videoLay" style="display: none">
	<div class="head" ><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="javascript: closePopOverLayer('videoLay'); "/></div>
	<div id="bodyPopUp" class="body">
		<div class="important">
			<!-- Corpo overlay -->
			<div id="videoApp" style="margin:0 0 0 20px">
				<embed src="https://media.webank.it/vod/video_mobile.mov" width="382" height="241" autoplay="true" scale="tofit" controller="true" pluginspage="http://www.apple.com/quicktime/download/"></embed>
			</div>
			<script defer="defer" type="text/javascript"> 
				var flashobject = new SWFObject("/swf/videoplayer.swf", "flash", "382", "241", "9", "#000000"); 
				flashobject.addParam("quality", "high"); 
				flashobject.addParam("wmode", "opaque"); 
				flashobject.addParam("allowfullscreen","false"); 
				flashobject.addParam("allowscriptaccess", "always"); 
				flashobject.addParam("FlashVars","videoLink=https://media.webank.it/vod/video_mobile.flv"); 
				flashobject.write("videoApp");
			</script> 
			<!-- Fine corpo overlay -->
			</div>
		</div>
	<div class="foot"></div>
</div>
<!-- /OVERLAYER -->
