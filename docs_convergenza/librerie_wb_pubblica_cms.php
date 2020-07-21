<style type="text/css">
	#librerie ul.albero {margin:0;padding:0;}
	#librerie ul.albero li {padding:2px 0;border:0; float:left}
	#librerie ul.albero li a {border:0;padding:0;display:inline;}
	#librerie ul.albero ul {padding:2px 0 0 20px;margin:0;}
	#librerie ul.albero ul li {list-style-type:disc;}
	#librerie ul.albero span {font-weight:bold}
</style>
<?php
	$pubpath = "/template/strutt_wbresp.php?tpl=";
?>

		<ul class="albero">
		<li><span>Home</span>
			<ul>
				<li><a href="/template/strutt_wbresp.php?tpl=wbresp_home_cms.php">Home</a></li>

			</ul>
		</li>
		
		<li><span>Stato apertura conto</span>
			<ul>
				<li><a href="/template/strutt_wbresp.php?tpl=wbresp_full_cms_stato_apertura_conto.php">Stato apertura conto</a></li>
				<li><a href="/template/strutt_wbresp.php?tpl=wbresp_full_cms_stato_apertura_conto2.php">Elenco delle pratiche (AS IS)</a></li>
				<li><a href="/template/strutt_wbresp.php?tpl=wbresp_aol_big_tracking.php&amp;subnav=tracking&amp;promo=docaol">Elenco pratiche</a></li>
				<li><a href="/template/strutt_wbresp.php?tpl=wbresp_full_cms_stato_apertura_conto_richiesta.php">Richiesta apertura conto</a></li>
				<li><a href="/template/strutt_wbresp.php?tpl=wbresp_full_cms_stato_apertura_conto_bozza.php">Salvataggio bozza apertura conto</a></li>
			</ul>
		</li>
		

		<li><span>Prodotti</span>
			<ul>
				<li><span>Conto Webank</span>
					<ul>
						<li><a href="<?php print $pubpath; ?>wbresp_cms_conto.php&subnav=&promo=">Conto Webank</a></li>	
					</ul>
				</li>
				<li><span>Carte</span>	
					<ul>	
						<li><a href="<?php print $pubpath; ?>wbresp_cms_carte.php&subnav=&promo=">Carte di credito</a></li>	
					</ul>
				</li>
				<li><span>Trading</span>	
					<ul>
						<li><a href="<?php print $pubpath; ?>wbresp_cms_trading.php&subnav=&promo=">Trading</a></li>	
					</ul>
				</li>
				<li><span>Investimenti</span>
					<ul>
						<li><a href="<?php print $pubpath; ?>wbresp_cms_investimenti.php&subnav=&promo=">Investimenti</a></li>
					</ul>
				</li>
				<li><span>Mutuo Webank</span>	
					<ul>
						<li><a href="<?php print $pubpath; ?>wbresp_cms_mutui.php&subnav=&promo=">Mutui</a></li>	
						
						<li><span>Calcolatore Mutuo</span>
							<ul>
								<li><a href="/template/strutt_wbresp.php?tpl=wbresp_placeholder.php&amp;tpl=wbresp_calcolatore_mutui.php"><i>Step 1</i></a></li>	
								<li>Step 2</li>	
								<li><a href="<?php print $pubpath; ?>mutuo_richiesta_step1.html"><i>Step 3</i></a></li>	
								<li><a href="<?php print $pubpath; ?>mutuo_richiesta_step2.html"><i>Step 4</i></a></li>	
								<li><a href="<?php print $pubpath; ?>mutuo_richiesta_step3.html"><i>Step 5</i></a></li>
								<li><a href="<?php print $pubpath; ?>mutuo_richiesta_step3_ko.html"><i>Step 5 KO</i></a></li>
							</ul>
						</li>
						<li><a href="<?php print $pubpath; ?>documenti-template.html">Documenti Mutuo</a></li>
					</ul>
				</li>
				<li><span>Prestiti e fidi</span>	
					<ul>	
						<li><a href="<?php print $pubpath; ?>wbresp_cms_prestiti_e_fidi.php&subnav=&promo=">Prestiti e Fidi</a></li>
					</ul>
				</li>
				<li><span>Assicurazioni</span>
					<ul>	
						<li><a href="<?php print $pubpath; ?>assicurazioni.html">Assicurazioni</a></li>
					</ul>
				</li>
			</ul>	
		</li>

		<li><span>Eventi e corsi</span>
			<ul>
				<li><a href="<?php print $pubpath; ?>eventi-e-corsi.html">Eventi e Corsi</a></li>
				<li><a href="<?php print $pubpath; ?>eventi-e-corsi-dettaglio.html">Eventi e Corsi - dettaglio</a></li>
			</ul>
		</li>

		<li><span>Scopri la nostra app</span>
			<ul>
				<li><a href="<?php print $pubpath; ?>mobile-banking.html">MobileBanking</a></li>
				<li><a href="<?php print $pubpath; ?>mobile-trading.html">MobileTrading</a></li>
			</ul>
		</li>
		
		<li><span>Landing MGM</span>
			<ul>
				<li><a href="/template/strutt_wbresp.php?tpl=wbresp_big_cms_mgm.php">MGM</a></li>
			</ul>
		</li>

		<li><span>Footer</span>
			<ul>
				<li><span>Chi siamo</span>
					<ul>
						<li><a href="<?php print $pubpath; ?>chi-siamo.html">Chi siamo</a></li>
						<li><a href="<?php print $pubpath; ?>dati-societari.html">Dati Societari</a></li>
					</ul>
				</li>
				<li><span>Contatti</span>
					<ul>
						<li><a href="<?php print $pubpath; ?>contatti.html">Contatti</a></li>
						<li><a href="<?php print $pubpath; ?>dialoga-con-webank.html">Dialoga</a></li>
						<li><a href="<?php print $pubpath; ?>in-diretta-con-webank.html">InDiretta</a></li>
						<li><a href="<?php print $pubpath; ?>numeri-utili.html">Numeri Utili</a></li>
						<li><a href="<?php print $pubpath; ?>sales-team.html">Sales team</a></li>
					</ul>
				</li>
				<li><span>Privacy</span>	
					<ul>	
						<li><a href="<?php print $pubpath; ?>privacy.html">Privacy</a></li>
						<li><a href="<?php print $pubpath; ?>informativa.html">Informativa</a></li>
						<li><a href="<?php print $pubpath; ?>codice-deontologico.html">Codice_deontologico</a></li>
					</ul>
				<li><span>Trasparenza</span>
					<ul>		
						<li><a href="<?php print $pubpath; ?>trasparenza.html">Trasparenza</a></li>						
						<li><a href="<?php print $pubpath; ?>fogli-informativi.html">Fogli informativi</a></li>
						<li><a href="<?php print $pubpath; ?>documenti-precontrattuali.html">Documenti precontrattuali</a></li>
						<li><a href="<?php print $pubpath; ?>rilevazione-tassi-effettivi.html">Rilevazione tassi effettivi</a></li>
						<li><a href="<?php print $pubpath; ?>indicatore-sintetico-di-costo.html">Indicatore sintetico di costo</a></li>
						<li><a href="<?php print $pubpath; ?>aggiornamenti-psd.html">Aggiornamenti PSD</a></li>
						<li><a href="<?php print $pubpath; ?>guide-pratiche.html">Guide pratiche</a></li>
						<li><a href="<?php print $pubpath; ?>reclami-ricorsi-e-conciliazione.html">Reclami, ricordi e conciliazione</a></li>
						<li><a href="<?php print $pubpath; ?>rapporti-dormienti.html">Rapporti dormienti</a></li>
					</ul>
				</li>
				<li><span>Sicurezza</span>	
					<ul>	
						<li><a href="<?php print $pubpath; ?>sicurezza.html">Sicurezza</a></li>
						<li><a href="<?php print $pubpath; ?>minacce-del-web.html">Minacce del web</a></li>
					</ul>
				</li>
				<li><span>Serve aiuto</span>	
					<ul>
						<li><a href="<?php print $pubpath; ?>serve-aiuto.html">Serve aiuto</a></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>


