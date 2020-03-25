<!-- BOTTOM -->
<div class="bottom">
	<div class="social">
		<div class="socbox first">
			<h5>Dai voce alle tue idee</h5>
			<div class="cons">
				<a href="#" title="La banca che vorrei"><img src="/img/land14_bcv.png"></a>
			</div>
		</div>
		<div class="socbox">
			<h5>Leggi i documenti per aderire</h5>
			<div class="docs">
				<ul>
					<li><a href="#">Regolamento</a></li>
					<li><a href="#">Fogli informativi</a></li>
					<li><a href="#">Informativa precontrattuale</a></li>
				</ul>
			</div>
		</div>
		<div class="socbox">
			<h5>Seguici su</h5>
			<div class="cons">
				<a href="#" title="Facebook"><img src="/img/land14_fb.gif"></a>
				<a href="#" title="Twitter"><img src="/img/land14_twitter.gif"></a>
				<a href="#" title="Google +"><img src="/img/land14_gplus.gif"></a>
			</div>
		</div>
		
	</div>
	
	<h4><span>Hai bisogno di assistenza?</span></h4>
	<div class="bottombloc">
		<div class="assist">
			<div class="assistenza first" id="assPaolo">
				<h5>Chiedi all'assistente virtuale</h5>
				<a href="javascript:;" onclick="vaOpen(sLeft,sTop)" class="boxServiziAss">
					<img src="/img/land14_link_chiedi_paolo.png"  alt="Fai una domanda all'assistente virtuale"/>
				</a>
			</div>
			<?php if ($_GET["chat"] != "off") {?>
			<!-- BLOCCO CHAT da inserire nell'html di produzione-->
				<span id="vvc_placeholder_514c286003b89dfe1c0000fc" class="chatPromoInt landPromo14"></span>
			<!-- FINE BLOCCO CHAT -->
			<!-- BLOCCO CHAT da inserire nell'html di fix-testing-->
				<!--<span class="chatPromoInt landPromo14" id="vvc_placeholder_514b10ff06dc590109000016"></span>-->
			<!-- FINE BLOCCO CHAT -->
			<?php }?>
			<div class="assistenza">
				<h5>Chiama il numero verde</h5>
				<img src="/img/land14_nverde.gif">
			</div>
		</div>
	</div>
	<div class="bottombloc last">
		<div class="assistenza allrow">
				<h5>Twitta con il nostro Social Customer Care</h5>
				<div class="twacc">
					<img src="/img/land14_tw_daniela.gif" >
					<span>Daniela</span>
					<a href="#">@Webank_Daniela</a>
				</div>
				<div class="twacc">
					<img src="/img/land14_tw_giampaol.gif">
					<span>Gianpaolo</span>
					<a href="#">@Webank_Gianpaol</a>
				</div>
				<div class="twacc">
					<img src="/img/land14_tw_valeria.gif" >
					<span>Valeria</span>
					<a href="#">@Webank_Valeria</a>
				</div>
		</div>
	</div>
	
	<!-- ASSISTENTE VIRTUALE 3D -->
						<div id="virtAss" style="display:none">
							<div id="vaExtended" style="display:none">
								<div class="vaExtTop">
									<a href="javascript:;" id="vaLinguetta" title="Espandi"></a>
								</div>
								<div id="vaExtConsole" style="display:none">
								</div>
								<div class="vaExtBody"></div>
							</div>
							<div class="vaContainer">
								<div class="vaTop">
									<span id="vaTitle">Paolo, l'assistente virtuale</span>
									<a href="javascript:;" class="vaChiudi" title="Chiudi">&nbsp;</a>
									<a href="javascript:;" class="vaWindow" title="Espandi/Riduci">&nbsp;</a>
								</div>
								<div class="vaFiletto" style="display:none"></div>
								<div class="vaBody">
									<div id="vaSpace"></div>
									<div class="vaConsole">
										<a href="javascript:;" class="vaAudio" title="Mute on/off"></a>
										<div id="vaSlider">
											<a href="javascript:;" id="vaSliderCursor" title="Volume"> </a>
										</div>
										<a id="vaTextControl" href="javascript:;"></a> 
									</div>
									<div id="vaDialog">
									</div>
									<form autocomplete="off" id="vaFormTag" onsubmit="vaAsking(vaDomanda.val())" action="javascript:;" method="post">
									<div id="vaForm">
										<input type="text" id="vaDom" maxlength="200" name="campo" class="waiting" value="fammi una domanda..."/>
										<a title="Lorem ipsum" class="btnformright" href="javascript:;" id="vaAsking"><img alt="Chiedi" src="/img/ret/btn_left_ar.gif"/><span>chiedi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a>
									</div>
									</form>
									<br class="clear"/>
								</div>
								<div class="vaBottom"></div>
							</div>
						</div>
	<script type="text/javascript" src="/wscmn/js/ret/priv_va.js"></script>
	<script type="text/javascript">
		sLeft = $('#assPaolo').offset().left + $('#assPaolo').innerWidth();
		sTop = $('#assPaolo').position().top;
			//sLeft = 300
			//sTop = 100
	</script>
		<!-- NOTE -->
	<p class="note"><strong>Messaggio pubblicitario con finalit&agrave; promozionale:</strong><br><br>
	condizioni valide per i nuovi clienti del Gruppo Bipiemme che effettuano la richiesta di apertura del conto dal 14 marzo al31 marzo 2014. Sono esclusi dall'iniziativa coloro che hanno gi&agrave; in essere un rapporto presso una banca del Gruppo Bipiemme o che lo abbiano chiuso dopo il 01 luglio 2013.<br><br>
	<u>Promozione &quot;2,50% 12 mesi&quot;</u>: tasso annuo lordo del 2,50% valido sulle somme vincolate per 12 mesi, attivate entro il 30 aprile 2014. L'importo massimo vincolabile per conto &egrave; pari a 1.000.000 Euro. Interessi liquidati entro due giorni successivi dalla scadenza del vincolo. In caso di svincolo anticipato, anche parziale, la remunerazione per l'importo svincolato sar&agrave; pari al tasso del deposito di risparmio libero calcolato dalla data di costituzione del vincolo.
	</p>
	<p class="note">
	Sulle somme non vincolate in conto corrente &egrave; dovuta l'imposta di bollo fissa, sulle linee vincolate in conto corrente &egrave; dovuta l'imposta di bollo proporzionale come da normativa tempo per tempo in vigore. Alla remunerazione delle giacenze &egrave; applicata la ritenuta fiscale come da normativa tempo per tempo in vigore .
	</p>
	<p class="note">
	L'accoglimento della richiesta di apertura dei rapporti bancari e d'investimento è soggetta a valutazione discrezionale della Banca.<br>	
	Per ulteriori dettagli e condizioni leggi, prima di aderire all'iniziativa, prendere visione del il Regolamento, i Fogli Informativi, la documentazione precontrattuale e contrattuale 
	</p>
	<!-- FINE NOTE -->
</div>
<!-- FINE BOTTOM -->