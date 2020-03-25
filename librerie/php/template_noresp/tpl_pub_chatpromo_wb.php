<?php
	// Tipi di servizio (ev. aggiungere qui un nuovo tipo)
	$services = Array("box 1","box 2","box 3","box 5","box 6");
	
	$service = $_GET["service"];
	if(!isset($service)) $service = "box 1";
?>
<script type="text/javascript">
var firstChat = true;
function loadFakeChat() 
{
	
	 if (firstChat)
	 {
	 var vvcSpan = $("#vvc_placeholder_514b10ff06dc590109000016").html('<div class="btn"><a id="chatPromoChat" class="btnImg"> </a></div>');
     
	 switch(vvcSpan.attr("class"))
      {
          // Pagina standard e promo TT
        case "chatPromoInt standard": case "chatPromoInt promoTT":
			vvcSpan.before('<span class="introText">Contattaci<br> con un click</span>');
			vvcSpan.after('<p>per informazioni commerciali</p><div class="separator"></div>');
          break;
          
          // Pagina promotori
          case "chatPromoInt promo":
              vvcSpan.wrap('<div id="chatPromo"><div class="block content"></div></div>')
              vvcSpan.before('<span class="introText">Contattaci con un click</span>');
              vvcSpan.after('<p>per informazioni commerciali</p>');
			  $("#chatPromo").prepend('<div class="block top"></div>');
              $("#chatPromo").append('<div class="block bottom"></div>');
          break;
          
          // Caso "cross"
          case "chatPromoInt cross":
             vvcSpan.after('<p>oppure</p>');
          break;
		  
		   // Caso "landing 2014"
          case "chatPromoInt landPromo14":
				vvcSpan.wrap('<div class="assistenza"></div>');
				vvcSpan.before('<h5>Chatta con un operatore</h5>');
          break;
      }
	  firstChat = false;
	  }
	  else
	  {
		alert("Basta!");
	  }
}
</script>
<div id="left">
	<!-- Menu' laterale -->
	<ul id="sidemenu">
		<li><a class="sidemenu_link selected" title="Lorem ipsum" href="#"><span>Lorem Webank</span></a>
			<ul>
				<li><a class="" title="Lorem ipsum" href="#" >Lorem ipsum</a></li>
				<li><a class="" title="Lorem ipsum" href="#" >Dolor sit amet</a></li>
				<li><a class="" title="Lorem ipsum" href="#" >Consectetur adipiscing</a></li>
			</ul>
		</li>
		<li><a class="sidemenu_link" title="Lorem ipsum" href="#"><span>Dolor sit</span></a></li>
	</ul>
	<!-- Fine menu' laterale -->
	
	<!-- SPAN IN PRODUZIONE CHAT -- 
	
		<span id="vvc_placeholder_514c286003b89dfe1c0000fc"></span>
		
		-- FINE CODICE SPAN IN PRODUZIONE -->
	
	<!-- TEMPLATE CHAT PROMOTORI -->
	<?php 
	if ($service == "box 3")
	{
	?>
		<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt promo"></span>
	<?php
	}
	else
	{
	?>
	<div id="chatPromo">
		<div class="block top"></div>
		<div class="block content">
			<?php 
				switch ($service) {
				/* CASO STANDARD */
				case "box 1":
					?>
					<!-- CASO STANDARD -->
						<!-- ## BLOCCO CHAT ## -->
						<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt standard"></span>
						<!-- ## FINE BLOCCO CHAT ## -->
						<!-- BLOCCO ASSISTENZA -->
						<!--
						<div class="btn"><a id="chatPromoCall" class="btnImg" href="/webankpub/wb/chatPromotore.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&KEY4=pro_wbn_chat_promotori" title="Lascia i tuoi dati">&nbsp;</a></div>
						<p>per essere ricontattato</p>
						<div class="separator"></div> -->
						<!-- FINE BLOCCO ASSISTENZA -->
						<!-- BLOCCO ASSISTENZA -->
						<span class="introText">Siamo sempre al tuo fianco</span>
						<div class="btn" id="chatPromoServ"><a id="chatPromoServ" class="btnImg" href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&OBS_REF=hp_ServClienti" title="Scopri">&nbsp;</a></div>
						<!-- FINE BLOCCO ASSISTENZA -->
					<!-- FINE CASO STANDARD -->
					<?php
					break;
					
				
				/* CASO PROMOTORI TT */
				case "box 2":
					?>
					<!-- CASO PROMOTORI TT -->
						<!-- BLOCCO CHAT -->
						
						<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt promoTT"></span>
						<!-- BLOCCO CHAT -->
						<!-- BLOCCO ASSISTENZA -->
						<div class="btn"><a id="chatPromoCall" class="btnImg" href="/webankpub/wb/chatPromotore.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&KEY4=pro_wbn_chat_promotori" title="Lascia i tuoi dati">&nbsp;</a></div>
						<p>per parlare con il Trading Team</p>
						<div class="separator"></div>
						<!-- FINE BLOCCO ASSISTENZA -->
						<!-- BLOCCO ASSISTENZA -->
						<span class="introText">
							Siamo sempre al tuo fianco
						</span>
						<div class="btn" id="chatPromoServ"><a id="chatPromoServ" class="btnImg" href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&OBS_REF=hp_ServClienti" title="Scopri">&nbsp;</a></div>
						<!-- FINE BLOCCO ASSISTENZA -->
					<!-- FINE CASO PROMOTORI TT -->
					<?php
					break;
					
				/* CASO CROSS */
				case "box 4":
					?>
					<!-- CASO CROSS -->
						<!-- BLOCCO CHAT -->
						<span class="introText">
							Hai bisogno di assistenza?
						</span>
						<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt cross"></span>
						<!-- BLOCCO CHAT -->
						<!-- BLOCCO ASSISTENZA -->
						<div class="btn" id="chatPromoServ"><a id="chatPromoServ" class="btnImg" href="/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_servizioclienti_nw&OBS_KEY=pro_wbn_servizio_clienti&OBS_REF=hp_ServClienti" title="Vai al Servizio Clienti">&nbsp;</a></div>
						<!-- FINE BLOCCO ASSISTENZA -->
					<!-- FINE CASO CROSS -->
					<?php
					break;
				
				/* CASO PAGINA CONTATTI */
				case "box 5":
					?>
					<!-- CASO PAGINA CONTATTI -->
						<!-- BLOCCO SUPPORTO -->
						<span class="introText">
							Info commerciali e apertura conto
						</span>
						<img src="/img/chatpromo_nverde_supporto.gif" class="nverde"/>
						<p>
							Luned&igrave; - venerd&igrave; 8:30 - 21:00<br>
							Sabato 9:00 - 17:00<br>
						</p>
						
						<!-- BLOCCO CHAT -->
						<span id="vvc_placeholder_514b10ff06dc590109000016" class="chatPromoInt contatti"></span>
						<!-- FINE BLOCCO CHAT -->
						<div class="separator"></div>
						
						<!-- BLOCCO SUPPORTO -->
						<span class="introText">
							Servizio clienti
						</span><br class="clear">
						<img src="/img/chatpromo_nverde_info.gif"  class="nverde"/>
						<p>
							Luned&igrave; - venerd&igrave; 8:00 - 22:00<br>
							Sabato 9:00 - 17:00
						</p>
						<p class="small">
							Risponditore automatico sempre attivo
						</p>
						<div class="separator"></div>
						
						<div class="btn"><a id="chatPromoSend" class="btnImg" onclick="openPopOverLayer ('sendemail');" title="Scrivi a Webank">&nbsp;</a></div>
					<!-- FINE CASO PAGINA CONTATTI -->
					<?php
					break;
					
				case "box 6": //caso promolanding2014
				?>
					<span class="chatPromoInt landPromo14" id="vvc_placeholder_514b10ff06dc590109000016"></span>
				<?php
					break;
				}
			?>
		</div>
		<div class="block bottom"></div>
	</div>
	<?php
		}
		?>
	<!-- FINE TEMPLATE CHAT PROMOTORI -->
	
</div>
<div id="maincontent">
	<div class="maincontenttopper"></div>
	<h2 class="title">CHAT PROMOTORI SPALLA SINISTRA<br>
	SERVIZIO: <font style="color:#6f8f0a"><?php print ($service)?></font></h2>
	<p>Seleziona la casistica del servizio per vedere l'elemento nella spalla cambiare.</p>
	<ol>
		<?php 
			for($x=0;$x<count($services);$x++)
			{
		?>
			<li>Servizio <a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_chatpromo_wb.php&service=<?php print($services[$x]); ?>"><?php print($services[$x]); ?></a></li>
		<?php
			}
		?>
	</ol>
	<p>Premi <a href="javascript:;" onclick="loadFakeChat();">QUI</a> per attivare la finta chat</p>
	<p>Premi <a href="javascript:;" onclick="$('#vvc_placeholder_514b10ff06dc590109000016 .btn').addClass('disabled')">QUI</a> per visualizzare il pulsante disabilitato</p>
	</div>
<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
<!-- COLLEGAMENTO CHAT -->
<script src="//cloudando.vivocha.com/a/webank/api/vivocha.js"></script>
<!-- FINE COLLEGAMENTO CHAT -->