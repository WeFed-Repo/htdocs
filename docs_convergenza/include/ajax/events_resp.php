<?php
$k = $_GET["k"];
if (empty($k)) $k = 20;
?>
<div class="panel-group" id="accordionEventi" role="tablist" aria-multiselectable="true">
<?php for ($i = 1; $i <= $k; $i++) { ?>
 	<div id="Evento<?php print($i) ?>" class="panel panel-default eventRow eventi withImg">
		<div class="panel-heading" role="tab" id="heading<?php print($i) ?>">
		     <h4 class="panel-title row">
		        <a  class="noMargin collapsed col-sm-8" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php print($i) ?>" aria-expanded="true" aria-controls="collapse<?php print($i) ?>" title="Ciclo: Le Tecniche di Tom deMark">
		         	 <span class="eventRowLeft">
		         	 	<span title="Streaming"><i class="icon icon-2x icon-test"></i></span>		
		         	 	<span class="text-event-small">Online</span>
		         	 	<span class="text-event-title">Tutto sul money management</span>
		         	 </span>
					 
			 		  <!--<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>-->
		        	</a>
		        	 <div class="eventRowRight col-sm-4"> 
					  	<!--previste 5 tipologie di eventi ---FARE LE ICONE: event_ico_cust.gif / event_ico_live.gif / event_ico_pro.gif / event_ico_srtliv.gif / event_ico_stream.gif -->
					  	<!--<span class="text-event-ico" title="evento dedicato soli ai  non clienti" >Solo per non clienti</span>-->
					  	<div class="form-group btnWrapper">
							<div>
					  			<a type="button" class="btn btn-primary btn-small" id="" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_iscrizione_eventi.php&responsive=y&liv0=8&liv1=0">iscriviti</a>
					  		</div>
					  	</div>
					</div>
		     </h4>
		 </div>		 		 
		 <div id="collapse<?php print($i) ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php print($i) ?>">
      		<div class="panel-body">
					<hr>
					<p>Relatore: Gianvito D'Angelo</p>
					<p><strong><span style="background-color: #ffffff; color: #8ab10b;"><em><span style="color: #8ab10b;" color="#8ab10b">Te lo sei&nbsp; perso? Rivedi&nbsp;l'evento dedicato al trading e al money management. Se sei cliente Webank, puoi trovare la registrazione dell'evento nella sezione privata, eventi e corsi, passati. </span></em></span></strong><span style="color: #000000;"><span style="background-color: #ffffff;"><span color="#8ab10b">Come gestire in modo efficiente il proprio patrimonio. Durante l'evento verranno illustrate quelle tecniche di "gestione del denaro" mirate alla massimizzazione de i profitti e alla riduzione potenziale delle perdite. Risk management e position sezing.</span></span></span><strong><span style="background-color: #ffffff; color: #8ab10b;"><em><span style="color: #8ab10b;" color="#8ab10b"><span style="widows: 1; text-transform: none; background-color: #ffffff; text-indent: 0px; letter-spacing: normal; display: inline !important; font: 10px Verdana, Arial, Helvetica, sans-serif; white-space: normal; float: none; color: #000000; word-spacing: 0px; -webkit-text-stroke-width: 0px;"><br><br></span></span></em></span></strong><strong>CORRELATORE: Alan Gendusa, </strong>Promotore finanziario Webank - Banca popolare di Milnao</p>
					<p>Iscriviti per vedere il video on demand che potrai<strong> visualizzare fino al 31 dicembre.</strong><br><br>TWITTER: <a href="https://twitter.com/search/realtime?q=%23tradingwebank&amp;src=typd" target="_blank">#tradingwebank</a></p>
					<hr>
					<div class="eventDetailConsole">
						<span class="eventDiff level2">
							<span>Difficolt&agrave;</span>
							<span class="diff">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</span>
						
				    <!-- Per il rilascio da novembre 2012 -->
				   				
					</div>
				</div>
		</div>
 	</div>
	<?php } ?>	 		 		 		 

</div>