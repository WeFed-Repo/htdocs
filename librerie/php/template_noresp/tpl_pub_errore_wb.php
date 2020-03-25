
<script type="text/javascript">
	function inviarichiesta() {
		var noerrors = true;
		var fieldinput = document.getElementById('inviaerroreinfo').getElementsByTagName('input');
		var verifica = document.getElementById('inviaerroreinfo').getElementsByTagName('span');
		
			for (i=0; i<fieldinput.length; i++) {
				
				if(fieldinput[i].value == ''){
				fieldinput[i].className = 'error';
				verifica[i].style.display="block";
				noerrors = false;
		
				}
	
				else {
				fieldinput[i].className = '';
				verifica[i].style.display="none";
				}
			}
		if (noerrors)
		{
			
			document.getElementById('sendemailLogin').getElementsByTagName('DIV')[1].innerHTML = '<h5>Ti ringraziamo per averci contattato</h5><p>Riceverai un\'email quando il servizio sar&agrave; nuovamente disponibile.<br\/><br\/>WeBank S.p.A.</p>';
			openPopOverLayer('sendemailLogin', 'fixed');
		}
	}

</script>

<div id="maincontent" class="maincontent_1col">
<!-- titolo -->
	<h2 class="title">ENTRA IN WEBANK</h2>
<!--fine  titolo -->
	<div class="errore_left">
		<img src="/img/str_avviso_errore.jpg" alt="Errore" />
	</div>
	<div class="errore_center">
<!-- testo -->
		<h2 class="titoletto">Stiamo per ripristinare l'accesso in Webank e al servizio clienti</h2>
		<p class="black">
			Gentile cliente, il servizio non &egrave; momentaneamente disponibile per cause tecniche.<br/><br/>
			In attesa del ripristino del servizio, puoi compilare i <strong>campi del modulo</strong> sottostanti per essere 
			avvertito tramite e-mail non appena il sito sar&agrave; nuovamente attivo.<br/><br/>
			Data di segnalazione <strong>01/01/2010</strong><br/><br/>
			Ci scusiamo per il disagio arrecato.<br/><br/>
			Grazie.
		</p>
<!--fine  testo -->
		<form id="inviaerroreinfo" action="#" method="post">		
			<div class="fieldcontributileft">
				<label>Nome e Cognome*</label>
				<span>Verifica</span>
				<input id="idnickname" value="" />
			</div>
			<div class="fieldcontributiright">
				<label>Indirizzo e-mail*</label>
				<span>Verifica</span>
				<input id="idmail" value="" />
			</div>
			<a class="greenbutton" href="javascript:;" onclick="javascript:  inviarichiesta();"><span>Invia</span></a>
		</form>
	</div>
	<div class="errore_info">
		<img src="/img/str_erroreinfo_tit.gif" alt="Serve aiuto" /><img src="/img/str_erroreinfo_top.gif" alt="Chiama il numero verde" />
		<div class="infomiddle">
			<a href="javascript:;" onclick="document.getElementById('sendemail').style.top=getScrollY()+35+'px';openPopOverLayer ('sendemail','fixed');" title="Scrivi a Webank" >Scrivi a Webank</a>
		</div>
		<div class="infobottom">
			<a href="#1" alt="Domande e risposte" title"Domande e risposte">Domande e risposte</a>
		</div>
		<img src="/img/str_erroreinfo_fine.gif" alt="" class="infofine" />
	</div>
	
	<div class="overlayer" id ="sendemailLogin">
		<div class="overlayertitle">
			<a href="javascript:;" onclick="closePopOverLayer('sendemailLogin');" class="chiudi">Chiudi</a>
		</div>
		<div class="overlayerbody">
		</div>
	</div>
<?php
	virtual('/librerie/include/commons/boxeditoriali/pub_wb_int_box_006.php');
?>
</div>