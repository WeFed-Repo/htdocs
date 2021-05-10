<style type="text/css">
	#librerie ul.albero {margin:0;padding:0;}
	#librerie ul.albero li {padding:2px 0;border:0; float:left}
	#librerie ul.albero li a {border:0;padding:0;display:inline;} 
	#librerie ul.albero ul {padding:2px 0 0 20px;margin:0;}
	#librerie ul.albero ul li {list-style-type:disc;}
	#librerie ul.albero span {font-weight:bold}
</style>
<?php
	$pubpath = "/wbresp/";
	$dynpath = "/template/strutt_wbresp_int.php?tpl=";
?>

<ul class="albero">
	<li><span>AOL</span>	
		<ul>
			<li>
				<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step00.php&amp;subnav=aol&amp;promo=aol"><strong>Step 0</strong> - APERTURA CONTO</a>
				<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step00_prod.php&amp;subnav=aol&amp;promo=aol"><strong>Produzione Step 0</strong> - APERTURA CONTO</a>
			</li>
			<li><span><strong>Step 1</strong> - DATI PERSONALI</span>
				<ul>
					<li>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step01.php&amp;subnav=aol&amp;promo=aol&amp;mono=true">Monointestato</a>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step01_mono_prod.php&amp;subnav=aol&amp;promo=aol&amp;"><strong>Produzione Step 01</strong> Monointestato</a>
				     </li>
					<li>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step01.php&amp;subnav=aol&amp;promo=aol">Cointestato</a>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step01_coint_prod.php&amp;subnav=aol&amp;promo=aol&amp;"><strong>Produzione Step 01</strong> Cointestato</a>
				</li>
				</ul>
			</li>
			<li><span><strong>Step 2</strong> - VERIFICHE</span>
				<ul>
					<li>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step02.php&amp;subnav=aol&amp;promo=aol&amp;mono=true">Monointestato</a>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step02_mono_prod.php&amp;subnav=aol&amp;promo=aol&amp;mono=true"><strong>Produzione Verifiche</strong> Monointestato</a>
				    </li>
					<li>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step02.php&amp;subnav=aol&amp;promo=aol">Cointestato</a>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step02_coint_prod.php&amp;subnav=aol&amp;promo=aol&amp;mono=true"><strong>Produzione Verifiche</strong> Cointestato</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step03.php&amp;subnav=aol&amp;promo=aol"><strong>Step 3</strong> - PERSONALIZZAZIONE</a>
				<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step03_prod.php&amp;subnav=aol&amp;promo=aol"><strong>Produzione Step 3</strong> - PERSONALIZZAZIONE</a>
			</li>
			<li><span><strong>Step 4</strong> - IDENTIFICAZIONE</span>
				<ul>
					<li><span>Selezione modalit&agrave; identificazione</span>
						<ul>
							<li>
								<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04.php&amp;subnav=aol&amp;promo=aol">Monointestato</a>
								<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04_prod.php&amp;subnav=aol&amp;promo=aol"><strong>Produzione Step 4</strong> Monointestato</a>
							</li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04.php&amp;subnav=aol&amp;promo=aol&amp;aoltype=fuoriorario">Monointestato Fuori orario</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04.php&amp;subnav=aol&amp;promo=aol&amp;aoltype=fuoriorario&amp;aoldec=fomessage">Monointestato Fuori orario (con messaggio onload)</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04.php&amp;subnav=aol&amp;promo=aol&amp;aoltype=misti">Clienti misti (NO FDR)</a></li>
						</ul>
					</li>

					<li><span>Identificazione</span>
						<ul>
							<li><span>Bonifico</span>
								<ul>
									<li>
									<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04_bonifico.php&amp;subnav=aol&amp;promo=aol&amp;mono=true">Monointestato</a>
									<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04_bonifico_prod.php&amp;subnav=aol&amp;promo=aol&amp;mono=true"><strong>Produzione riconoscimento bonifico</strong> Monointestato</a>
								</li>
									<li>
										<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04_bonifico.php&amp;subnav=aol&amp;promo=aol">Cointestato</a>
										<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04_bonifico_coint_prod.php&amp;subnav=aol&amp;promo=aol"><strong>Produzione riconoscimento bonifico</strong> Cointestato</a>
									</li>
								</ul>
							</li>
							<li><span>FDR</span>
								<ul>
									<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04_fdr_siconto.php&amp;subnav=aol&amp;promo=aol">Con conto (bonifico)</a></li>
									<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04_fdr_noconto.php&amp;subnav=aol&amp;promo=aol">Senza conto (secondo doc identit&agrave;)</a></li>
								</ul>
							</li>
						</ul>
					</li>
					
					<li><span>Messaggi</span>
						<ul>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04.php&amp;subnav=aol&amp;promo=aol&amp;aoltype=mol">MOL</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04.php&amp;subnav=aol&amp;promo=aol&amp;aoltype=contomono">Conto monointestato</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step04.php&amp;subnav=aol&amp;promo=aol&amp;aoltype=contocointestato">Conto cointestato</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><span ><strong>Step 5</strong> - ADEMPIMENTI LEGALI Normativa antiriciclaggio</span>
				<ul>
					<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step05.php&amp;subnav=aol&amp;promo=aol&amp;mono=true">Monointestato</a>
					<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step05_prod.php&amp;subnav=aol&amp;promo=aol&amp;mono=true"><strong>Step 5 produzione</strong> Monointestato</a>
					    <ul>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step05_webcam.php&amp;subnav=aol&amp;promo=aol">Webcam</a></li>
						</ul>
					</li>
					<li>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step05.php&amp;subnav=aol&amp;promo=aol">Cointestato</a>
						<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step05_coint_prod.php&amp;subnav=aol&amp;promo=aol"> <strong>Step 5 produzione</strong> Cointestato</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step06.php&amp;subnav=aol&amp;promo=aol"><strong>Step 6</strong> - CONFERMA DATI</a>
				<a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step06_prod.php&amp;subnav=aol&amp;promo=aol"><strong>Step 6 Produzione</strong> - CONFERMA DATI</a>
			</li>
			<!--<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step07.php&amp;subnav=aol&amp;promo=aol"><strong>Step 7</strong> - INFORMATIVE</a></li>-->
			<li><span><strong>Step 7</strong> - INFORMATIVE</span>
				<ul>
					<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step07.php&amp;subnav=aol&amp;promo=aol">Sezione 1</a></li>
					<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step07_2.php&amp;subnav=aol&amp;promo=aol">Sezione 2</a></li>
					<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step07_3.php&amp;subnav=aol&amp;promo=aol">Sezione 3</a></li>
				</ul>
			</li>
			<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_step08.php&amp;subnav=aol&amp;promo=aol"><strong>Step 8</strong> - RIEPILOGO</a></li>
		</ul>
	</li>
	<li><span>Home</span>
		<ul>
			<li><a href="/template/strutt_wbresp.php?tpl=wbresp_home.php">Home</a></li>

		</ul>
	</li>
	<li><span>Stato apertura conto</span>
		<ul>
			<li><a href="<?php print $dynpath; ?>tpl_stato-apertura-conto.php">Stato apertura conto</a></li>
			<li><a href="<?php print $dynpath; ?>tpl_stato-apertura-conto2.php">Elenco delle pratiche (AS IS)</a></li>
			<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_big_tracking.php&subnav=tracking&promo=docaol">Elenco pratiche</a></li>
			<li><a href="<?php print $dynpath; ?>tpl_stato-apertura-conto-richiesta.php">Richiesta apertura conto</a></li>
			<li><a href="<?php print $dynpath; ?>tpl_stato-apertura-conto-bozza.php">Salvataggio bozza apertura conto</a></li>
		</ul>
	</li>
	<li><span>Prodotti</span>
		<ul>
			<li><span>Conto Webank</span>
				<ul>
					<li><a href="<?php print $dynpath; ?>tpl_conto_webank.php">Conto Webank</a></li>	
					<li><a href="<?php print $dynpath; ?>tpl_documenti-template.php">Documenti Conto</a></li>
				</ul>
			</li>
			<li><span>Carte</span>	
				<ul>	
					<li><a href="<?php print $dynpath; ?>tpl_carte-di-credito.php">Carte di credito</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_documenti-template.php">Documenti Carte</a></li>
				</ul>
			</li>
			<li><span>Trading</span>	
				<ul>
					<li><a href="<?php print $dynpath; ?>tpl_trading.php">Trading</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_trading-prova-piattaforma.php">ProvaPiattaformaT3</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_trading-prova-piattaforma-conferma.php">ProvaPiattaformaT3 Conferma</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_trading-commissioni.php">Dettaglio Commissioni</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_trading-mercati.php">Mercati di tutto il mondo</a></li>
					<!--<li><a href="<?php print $dynpath; ?>tpl_trading-team.php">Contatta il trading team</a></li>-->
					<!--li><a href="<?php print $dynpath; ?>tpl_trading-mercati-azioni.php">Mercati di tutto il mondo-Azioni</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_trading-mercati-obbligazioni.php">Mercati di tutto il mondo-Obbligazioni</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_trading-mercati-etf-cw-certificates.php">Mercati di tutto il mondo-ETF</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_trading-mercati-derivati.php">Mercati di tutto il mondo-Derivati</a></li-->
					<li><a href="<?php print $dynpath; ?>tpl_documenti-template.php">Documenti Trading</a></li>
				</ul>
			</li>
			<li><span>Investimenti</span>
				<ul>
					<li><a href="<?php print $dynpath; ?>tpl_investimenti.php">Investimenti</a></li>
					<li><strong>Robo Advisory</strong>
						<ul>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_big_roboadv_ingaggio.php">Ingaggio</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_roboadv_login.php">Modale registrazione e login</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_roboadv_full_step1.php">Questionario - step 01</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_roboadv_full_step2.php">Questionario - step 02</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_roboadv_full_step3.php">Questionario - step 03</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_roboadv_full_step4.php">Questionario - step 04</a></li>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_roboadv_big_profile.php">Profilo</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><span>Mutuo Webank</span>	
				<ul>
					<li><a href="<?php print $dynpath; ?>tpl_mutuo.php">Mutuo</a></li>
					
					<li><span>Calcolatore Mutuo</span>
						<ul>
							<li><a href="/template/strutt_wbresp.php?tpl=wbresp_placeholder.php&amp;tpl=wbresp_calcolatore_mutui.php"><i>Step 1</i></a></li>	
							<li>Step 2</li>	
							<li><a href="<?php print $dynpath; ?>tpl_mutuo_richiesta_step1.php"><i>Step 3</i></a></li>	
							<li><a href="<?php print $dynpath; ?>tpl_mutuo_richiesta_step2.php"><i>Step 4</i></a></li>	
							<li><a href="<?php print $dynpath; ?>tpl_mutuo_richiesta_step3.php"><i>Step 5</i></a></li>
							<li><a href="<?php print $dynpath; ?>tpl_mutuo_richiesta_step3_ko.php"><i>Step 5 KO</i></a></li>
						</ul>
					</li>
					<li><a href="<?php print $dynpath; ?>tpl_documenti-template.php">Documenti Mutuo</a></li>
				</ul>
			</li>
			<li><span>Prestiti e fidi</span>	
				<ul>	
					<li><a href="<?php print $dynpath; ?>tpl_prestiti-e-fidi.php">Prestiti e Fidi</a></li>
				</ul>
			</li>
			<li><span>Assicurazioni</span>
				<ul>	
					<li><a href="<?php print $dynpath; ?>tpl_assicurazioni.php">Assicurazioni</a></li>
				</ul>
			</li>
		</ul>	
	</li>

	<li><span>Eventi e corsi</span>
		<ul>
			<li><a href="<?php print $dynpath; ?>tpl_eventi-e-corsi.php">Eventi e Corsi</a></li>
			<li><a href="<?php print $dynpath; ?>tpl_eventi-e-corsi-dettaglio.php">Eventi e Corsi - dettaglio</a></li>
		</ul>
	</li>

	<li><span>Scopri la nostra app</span>
		<ul>
			<li><a href="<?php print $dynpath; ?>tpl_mobile-banking.php">MobileBanking</a></li>
			<li><a href="<?php print $dynpath; ?>tpl_mobile-trading.php">MobileTrading</a></li>
		</ul>
	</li>

	<li><span>Footer</span>
		<ul>
			<li><span>Chi siamo</span>
				<ul>
					<li><a href="<?php print $dynpath; ?>tpl_chi-siamo.php">Chi siamo</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_dati-societari.php">Dati Societari</a></li>
				</ul>
			</li>
			<li><span>Contatti</span>
				<ul>
					<li><a href="<?php print $dynpath; ?>tpl_contatti.php">Contatti</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_dialoga-con-webank.php">Dialoga</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_in-diretta-con-webank.php">InDiretta</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_numeri-utili.php">Numeri Utili</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_sales-team.php">Sales team</a></li>
				</ul>
			</li>
			<li><span>Privacy</span>	
				<ul>	
					<li><a href="<?php print $dynpath; ?>tpl_privacy.php">Privacy</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_informativa.php">Informativa</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_codice-deontologico.php">Codice_deontologico</a></li>
				</ul>
			<li><span>Trasparenza</span>
				<ul>		
					<li><a href="<?php print $dynpath; ?>tpl_trasparenza.php">Trasparenza</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_informazioni_trasparenza.php">Qui informazioni per la trasparenza</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_fogli-informativi.php">Fogli informativi</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_documenti-precontrattuali.php">Documenti precontrattuali</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_rilevazione-tassi-effettivi.php">Rilevazione tassi effettivi</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_indicatore-sintetico-di-costo.php">Indicatore sintetico di costo</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_aggiornamenti-psd.php">Aggiornamenti PSD</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_guide-pratiche.php">Guide pratiche</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_reclami-ricorsi-e-conciliazione.php">Reclami, ricordi e conciliazione</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_rapporti-dormienti.php">Rapporti dormienti</a></li>
				</ul>
			</li>
			<li><span>Sicurezza</span>	
				<ul>	
					<li><a href="<?php print $dynpath; ?>tpl_sicurezza.php">Sicurezza</a></li>
					<li><a href="<?php print $dynpath; ?>tpl_minacce-del-web.php">Minacce del web</a></li>
				</ul>
			</li>
			<li><span>Serve aiuto</span>	
				<ul>
					<li><a href="<?php print $dynpath; ?>tpl_serve-aiuto.php">Serve aiuto</a></li>
				</ul>
			</li>
			<li><span>Landing MGM</span>
			<ul>
				<li><a href="<?php print $dynpath; ?>tpl_mgm.php">MGM</a></li>
			</ul>
		</li>
		</ul>
	</li>
</ul>
<div class="elenco separati">
	<span class="title bglightcolor color">Altro</span>
		<a href="/template/strutt_wbresp.php?tpl=wbresp_full_widget.php">Catalogo widget</a>
		<a href="<?php print $dynpath; ?>tpl_pagelist.php">Indice pagine</a>
		<a href="<?php print $dynpath; ?>tpl_errore-login.php">Errore login</a>
		<a href="<?php print $dynpath; ?>tpl_servizio-non-disponibile.php">Servizio non disponibile</a>
		<a href="<?php print $dynpath; ?>tpl_lavori-in-corso.php">Lavori in corso</a>
		<a href="<?php print $dynpath; ?>tpl_cookie_policy.php">Cookie policy</a>
		<a href="<?php print $dynpath; ?>tpl_errore-404.php">Errore 404</a>
</div>

