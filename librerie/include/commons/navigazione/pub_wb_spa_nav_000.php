<!-- MENU LATERALE -->
	<ul id="sidemenu">
	<?php 
	switch ($tpl) 
	{ 
		//MENU CONTI
		case "tpl_pub_caratteristiche_conto_wb.php": case "tpl_pub_guida_apertura_conto_wb.php":  
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_caratteristiche_conto_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_caratteristiche_conto_wb.php") print "selected";?>" title="Caratteristiche e condizioni conto"><span>Caratteristiche e condizioni conto</span></a>
		</li>
		<li><a href="#" title="Carte e ricaricabili"><span>Carte di credito e ricaricabili</span></a></li>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_guida_apertura_conto_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_guida_apertura_conto_wb.php") print "selected";?>" title="Guida all'apertura del conto"><span>Guida all'apertura del conto</span></a></li>
		<li><a href="#" title="Aprilo subito"><span>Aprilo subito</span></a>
		
		</li>
		
		<?php	
		break;
		
		//MENU TRADING 
		case "tpl_pub_strumenti_finanziari_wb.php" : 
			case "tpl_pub_best_execution_wb.php" :
		case "tpl_pub_piattaforme_wb.php":
			case "tpl_pub_t3_noframe_wb.php" :
			case "tpl_pub_t3_wb.php" :
			case "tpl_pub_eSignal_wb.php" :
			case "tpl_pub_visual_trader_wb.php":
		case "tpl_pub_costi_commissioni_wb.php":
		case "tpl_pub_tradingteam_wb.php":
			case "tpl_pub_corsi_wb.php":
			case "tpl_pub_tradingteam_promotori_wb.php":
			case "tpl_pub_tradingteam_promotori_esito_wb.php":
		case "tpl_pub_corsi_wb.php":
			case "tpl_pub_corsi_strategie_wb.php":
			case "tpl_pub_guide_manuali_wb.php":
		?>
		<li><a href="#" class="" title="Fare trading con Webank"><span>Fare trading con Webank</span></a></li>
		<!-- --->
		<li><a href="#" class="" title="Fare trading con Webank"><span>Il trading con Webank</span></a></li>
		<!-- --->
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_strumenti_finanziari_wb.php" <?php if($tpl=="tpl_pub_strumenti_finanziari_wb.php") {?>class="sidemenu_link selected"<?php }?> title="Mercati e strumenti finanziari"><span>Mercati e strumenti finanziari</span></a>
		<?php
			if ($tpl == "tpl_pub_strumenti_finanziari_wb.php" || $tpl == "tpl_pub_best_execution_wb.php")
			{
			?>
			<ul>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_best_execution_wb.php" <?php if ($tpl == "tpl_pub_best_execution_wb.php" ) {?>class="selected"<?php } ?>>Best execution</a></li>
				<li><a href="#">Schede dettaglio</a></li>
				<li><a href="#">Opzioni su indici</a></li>
				<li><a href="#">Opzioni su azioni</a></li>
			</ul>
			<?php
			}
		?>
		</li>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_piattaforme_wb.php"  title="Piattaforme" <?php if($tpl == "tpl_pub_piattaforme_wb.php") {?>class="sidemenu_link selected"<?php }?>><span>Piattaforme</span></a>
		<?php
			if ($tpl == "tpl_pub_piattaforme_wb.php" || $tpl == "tpl_pub_piattaforma_web_wb.php" || $tpl == "tpl_pub_t3_wb.php" || $tpl == "tpl_pub_t3_noframe_wb.php" || $tpl == "tpl_pub_eSignal_wb.php" || $tpl == "tpl_pub_visual_trader_wb.php")
			{
			?>
				
				<ul>
					<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_piattaforma_web_wb.php" <?php if ($tpl == "tpl_pub_piattaforma_web_wb.php") {?>class="selected"<?php } ?>>Piattaforma Web</a></li>
					<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_t3_wb.php" <?php if ($tpl == "tpl_pub_t3_wb.php") {?>class="selected"<?php } ?>>T3</a></li>
					<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_t3_noframe_wb.php" <?php if ($tpl == "tpl_pub_t3_noframe_wb.php") {?>class="selected"<?php } ?>>T3 - NoFrame</a></li>
					<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_eSignal_wb.php" <?php if ($tpl == "tpl_pub_eSignal_wb.php") {?>class="selected"<?php } ?>>eSignal</a></li>
					<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_visual_trader_wb.php" <?php if ($tpl == "tpl_pub_visual_trader_wb.php") {?>class="selected"<?php } ?>>Visual Trader</a></li>
				</ul>
			<?php
			}
		?></li>
		<li><a href="#" class="" title="Servizi evoluti"><span>Servizi evoluti</span></a></li>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_costi_commissioni_wb.php" title="Commissioni" <?php if($tpl == "tpl_pub_costi_commissioni_wb.php") {?>class="sidemenu_link selected"<?php }?>><span>Commissioni</span></a></li>				
		
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_tradingteam_wb.php" title="Trading team" <?php if($tpl == "tpl_pub_tradingteam_wb.php") {?>class="sidemenu_link selected"<?php }?>><span>Trading team</span></a>			
		<?php
			if($tpl == "tpl_pub_tradingteam_wb.php" || $tpl == "tpl_pub_tradingteam_promotori_wb.php" || $tpl == "tpl_pub_tradingteam_promotori_esito_wb.php")
			{
			?>
			<ul>
					<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_tradingteam_promotori_wb.php" <?php if ($tpl == "tpl_pub_tradingteam_promotori_wb.php" || $tpl == "tpl_pub_tradingteam_promotori_esito_wb.php") {?>class="selected"<?php } ?>>Contatta un promotore</a></li>
				</ul>
			
			<?php
			}
		?>
		</li>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_corsi_wb.php" title="Eventi e formazione" <?php if($tpl == "tpl_pub_corsi_wb.php") {?> class="sidemenu_link selected"<?php }?>><span>Eventi e formazione</span></a>
		<?php
			if($tpl == "tpl_pub_corsi_wb.php.php" || $tpl == "tpl_pub_corsi_strategie_wb.php" || $tpl == "tpl_pub_guide_manuali_wb.php")
			{
			?>
			
			<ul>
					<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_corsi_strategie_wb.php" <?php if ($tpl == "tpl_pub_corsi_strategie_wb.php") {?>class="selected"<?php } ?>>Costruire strategie vincenti in opzioni</a></li>
					<li><a href="#" <?php if ($tpl == "") {?>class="selected"<?php } ?>>Trading sui futures</a></li>
					<li><a href="#" <?php if ($tpl == "") {?>class="selected"<?php } ?>>IV Forum - XII Edizione - Investment &amp; Trading</a></li>
					<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_guide_manuali_wb.php" <?php if ($tpl == "tpl_pub_guide_manuali_wb.php") {?>class="selected"<?php } ?>>Guide e manuali</a></li>
			</ul>
			<?php
			}
		?></li>
		<li><a href="/connect.php?page=str_nomenu_pub_wb.php&tpl=tpl_pub_free_member_t3_wb.php" class="" title="Free member T3"><span>Free member T3</span></a></li>
		<?php	
		break;
		
		
		//MENU MUTUI
		case "tpl_pub_mutui_wb.php": case "tpl_pub_mutui_assicuraz_wb.php": 
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_mutui_wb.php" title="Mutuo Webank" class="sidemenu_link<?php if($tpl=="tpl_pub_mutui_wb.php") print " selected";?>"><span>Mutuo Webank</span></a>
		</li>
		<li><a href="#" title="Prestiti e fidi" class="sidemenu_link"><span>Prestiti e fidi</span></a></li>		
		
		<?php	
		break;
		
		//MENU SERVIZIO CLIENTI A 360°
		case "tpl_pub_assitenza_a_360_wb.php":
		?>
		<li><a href="#" class="sidemenu_link selected" title="Servizio clienti a 360°"><span>Servizio clienti a 360°</span></a></li>
		<?php	
		break;
		
		//FOOTER CHI SIAMO
		case "tpl_pub_chi_siamo_wb.php": case "tpl_pub_virtual_tour_wb.php"  
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_chi_siamo_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_chi_siamo_wb.php") print "selected";?>" title="Chi siamo"><span>Chi siamo</span></a>
			<ul>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_virtual_tour_wb.php" <?php if ($tpl == "tpl_pub_virtual_tour_wb.php") {?>class="selected"<?php } ?>>Virtual tour</a></li>		
				<li><a href="#" title="">Dati societari</a></li>
			</ul>
		</li>
		<?php	
		break;
		
		//FOOTER NEWSROOM
		//case "tpl_pub_social_media_newsroom_wb.php": case "tpl_pub_radio_wb.php": case "tpl_pub_radio_archivio_wb.php":   case "tpl_pub_iscriviti_ai_feed_rss_wb.php":  case "tpl_pub_contatti_stampa_wb.php": case "tpl_pub_archivio_wb.php": case "tpl_pub_dettaglio_comunicato_wb.php" : case "tpl_pub_radio_wb.php" : case "tpl_pub_eventilive_wb.php" : case "tpl_pub_social_lab_wb.php": 
		?>
		<!--<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_social_media_newsroom_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_social_media_newsroom_wb.php") print "selected";?>" title="Social media newsroom"><img src="/img/ico1bt_pro_wbn_newsroom.gif" alt="Social media newsroom"></a>
			<ul>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_contatti_stampa_wb.php" <?php if ($tpl == "tpl_pub_contatti_stampa_wb.php") {?>class="selected"<?php } ?>>Contatti stampa</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_iscriviti_ai_feed_rss_wb.php" <?php if ($tpl == "tpl_pub_iscriviti_ai_feed_rss_wb.php") {?>class="selected"<?php } ?>>Iscriviti ai feed RSS</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_archivio_wb.php" <?php if ($tpl == "tpl_pub_archivio_wb.php" || $tpl=="tpl_pub_dettaglio_comunicato_wb.php") {?>class="selected"<?php } ?>>Archivio media</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_eventilive_wb.php" <?php if ($tpl == "tpl_pub_eventilive_wb.php") {?>class="selected"<?php } ?>>Eventi live</a></li>
			</ul>
		</li>-->
		<?php	
		//break;
		
		//FOOTER NEWSROOM
		case "tpl_pub_social_media_newsroom_wb.php": case "tpl_pub_radio_wb.php": case "tpl_pub_radio_archivio_wb.php":   case "tpl_pub_iscriviti_ai_feed_rss_wb.php":  case "tpl_pub_archivio_wb.php": case "tpl_pub_dettaglio_comunicato_wb.php" : case "tpl_pub_radio_wb.php" : case "tpl_pub_eventilive_wb.php" : 
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_social_media_newsroom_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_social_media_newsroom_wb.php") print "selected";?>" title="Social media newsroom"><span>Social media newsroom</span></a>
			<ul>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_radio_wb.php" <?php if ($tpl == "tpl_pub_radio_wb.php" || $tpl == "tpl_pub_radio_archivio_wb.php") {?>class="selected"<?php } ?>>Radio Webank</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_archivio_wb.php" <?php if ($tpl == "tpl_pub_archivio_wb.php" || $tpl=="tpl_pub_dettaglio_comunicato_wb.php") {?>class="selected"<?php } ?>>Archivio media</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_eventilive_wb.php" <?php if ($tpl == "tpl_pub_eventilive_wb.php") {?>class="selected"<?php } ?>>Eventi e progetti</a></li>
			</ul>
		</li>
		<?php	
		break;
		
			//FOOTER PRESS ROOM
		case "tpl_pub_social_lab_wb.php":  case "tpl_pub_contatti_stampa_wb.php": case "tpl_pub_archivio_wb_pr.php":
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_social_lab_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_social_lab_wb.php") print "selected";?>" title="Press room"><span>Press Room</span></a>
			<ul>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_contatti_stampa_wb.php" <?php if ($tpl == "tpl_pub_contatti_stampa_wb.php") {?>class="selected"<?php } ?>>Contatti</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_archivio_wb_pr.php" <?php if ($tpl == "tpl_pub_archivio_wb.php" || $tpl=="tpl_pub_dettaglio_comunicato_wb.php") {?>class="selected"<?php } ?>>Archivio media</a></li>
				
			</ul>
		</li>
		<?php	
		break;
		
		
		//FOOTER TRASPARENZA
		case "tpl_pub_trasparenza_wb.php":  case "tpl_pub_fogli_informativi_wb.php":  
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_trasparenza_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_trasparenza_wb.php") print "selected";?>" title="Trasparenza"><span>Trasparenza</span></a>
			<ul>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_fogli_informativi_wb.php" <?php if ($tpl == "tpl_pub_fogli_informativi_wb.php") {?>class="selected"<?php } ?>>Fogli informativi</a></li>
				<li><a href="#" title="">Documentazione precontrattuale</a></li>
			</ul>
		</li>
		<?php	
		break;
		
		//FOOTER PRIVACY
		case "tpl_pub_privacy_wb.php":  case "tpl_pub_privacy_presup_trattam_wb.php":  case "tpl_pub_privacy_dati_trattati_wb.php":  case "tpl_pub_privacy_caratteristiche_trattamento_wb.php":  case "tpl_pub_privacy_gestione_trattamento_wb.php":  
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_privacy_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_privacy_wb.php") print "selected";?>" title="Privacy"><span>Privacy</span></a>
			<ul>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_privacy_presup_trattam_wb.php" <?php if ($tpl == "tpl_pub_privacy_presup_trattam_wb.php") {?>class="selected"<?php } ?>>Presupposti del trattamento</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_privacy_dati_trattati_wb.php" <?php if ($tpl == "tpl_pub_privacy_dati_trattati_wb.php") {?>class="selected"<?php } ?>>Tipi di dati trattati</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_privacy_caratteristiche_trattamento_wb.php" <?php if ($tpl == "tpl_pub_privacy_caratteristiche_trattamento_wb.php") {?>class="selected"<?php } ?>>Caratteristiche del trattamento</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_privacy_gestione_trattamento_wb.php" <?php if ($tpl == "tpl_pub_privacy_gestione_trattamento_wb.php") {?>class="selected"<?php } ?>>Gestione del trattamento</a></li>
			</ul>
		</li>
		<?php	
		break;
				
		//FOOTER SICUREZZA
		case "tpl_pub_sicurezza_wb.php": case "tpl_pub_sicurezza_come_puoi_proteggerti_wb.php":  
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_sicurezza_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_sicurezza_wb.php") print "selected";?>" title="Sicurezza"><span>Sicurezza</span></a>
			<ul>
				<li><a href="#" title="">Protezione del servizio</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_sicurezza_come_puoi_proteggerti_wb.php" <?php if ($tpl == "tpl_pub_sicurezza_come_puoi_proteggerti_wb.php") {?>class="selected"<?php } ?>>Come puoi proteggerti</a></li>
				<li><a href="#" title="">Le minacce del web</a></li>
				<li><a href="#" title="">Le situazioni sospette</a></li>
				<li><a href="#" title="">Aspetti operativi</a></li>
				<li><a href="#" title="">Requisiti tecnici</a></li>
			</ul>
		</li>
		<?php	
		break;
		
		//FOOTER REQUISITI TECNICI
		case "tpl_pub_reqtecnici_wb.php": /*case "tpl_pub_sicurezza_come_puoi_proteggerti_wb.php":  */
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_sicurezza_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_reqtecnici_wb.php") print "selected";?>" title="Requisiti tecnici"><span>requisiti tecnici</span></a>
			<!--ul>
				<li><a href="#" title="">Protezione del servizio</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_sicurezza_come_puoi_proteggerti_wb.php" <?php if ($tpl == "tpl_pub_sicurezza_come_puoi_proteggerti_wb.php") {?>class="selected"<?php } ?>>Come puoi proteggerti</a></li>
				<li><a href="#" title="">Le minacce del web</a></li>
				<li><a href="#" title="">Le situazioni sospette</a></li>
				<li><a href="#" title="">Aspetti operativi</a></li>
				<li><a href="#" title="">Requisiti tecnici</a></li>
			</ul-->
		</li>
		<?php	
		break;
		
		
		//I SERVIZI AL TUO SERVIZIO
		case "tpl_pub_i_servizi_al_tuo_servizio_wb.php": case "tpl_pub_risponde_webank_wb.php":  case "tpl_pub_programma_punti_wb.php": case "tpl_pub_supporto_gestione_conto_wb.php" :
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_i_servizi_al_tuo_servizio_wb.php" class="sidemenu_link <?php if($tpl=="tpl_pub_i_servizi_al_tuo_servizio_wb.php") print "selected";?>" title="Sicurezza e Requisiti tecnici"><img src="/img/ico1bt_sidemenu_servizi.gif" alt="I servizi al tuo servizio"></a>
			<ul>
				<li><a href="#" title="Trasloco Webank">Trasloco Webank</a></li>
				<li><a href="#" title="Assegni a casa tua">Assegni a casa tua</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_risponde_webank_wb.php" <?php if ($tpl == "tpl_pub_risponde_webank_wb.php") {?>class="selected"<?php } ?> title="Sportello telefonico">Sportello telefonico</a></li>
				<li><a href="#" title="Contabili online">Contabili online</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_supporto_gestione_conto_wb.php" <?php if ($tpl == "tpl_pub_supporto_gestione_conto_wb.php") {?>class="selected"<?php } ?> title="Supporto gestione conto">Supporto gestione conto</a></li>
				<li><a href="#" title="Webank mobile">Webank mobile</a></li>
				<li><a href="#" title="Programma punti">Programma punti</a></li>
			</ul>
		</li>
		<?php	
		break;
		
		//SERVE AIUTO
		case "tpl_pub_serve_aiuto_wb.php":  
		?>
		<li><a href="#" class="sidemenu_link selected" title="Serve aiuto?"><img src="/img/ico1bt_pro_wbn_serve_aiuto_on.gif" alt="Modulistica"></a></li>
		<?php	
		break;
		
		//LA BANCA CHE VORRESTI
		case "tpl_pub_partecipa_wb.php": case "tpl_pub_partecipa_inviato_wb.php": case "tpl_pub_partecipa_suggerimenti_valutazione_wb.php": case "tpl_pub_partecipa_suggerimenti_realizzati_wb.php":
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_partecipa_wb.php" class="sidemenu_link <?php if(($tpl=="tpl_pub_partecipa_wb.php") || ($tpl=="tpl_pub_partecipa_inviato_wb.php") || ($tpl=="tpl_pub_partecipa_suggerimenti_valutazione_wb.php") || ($tpl=="tpl_pub_partecipa_suggerimenti_realizzati_wb.php")) print "selected";?>" title="La Banca che vorresti"><span>La banca che vorrei</span></a>
			<ul>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_partecipa_suggerimenti_valutazione_wb.php" <?php if ($tpl == "tpl_pub_partecipa_suggerimenti_valutazione_wb.php") {?>class="selected"<?php } ?> title="Idee da realizzare">Idee da realizzare</a></li>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_partecipa_suggerimenti_realizzati_wb.php" <?php if ($tpl == "tpl_pub_partecipa_suggerimenti_realizzati_wb.php") {?>class="selected"<?php } ?> title="Idee realizzate">Idee realizzate</a></li>
			</ul>
		</li>
		<?php	
		break;
		
		//PARTNERSHIP
		case "tpl_pub_partnership_wb.php": case "tpl_pub_partnership_part1_wb.php":
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_partnership_wb.php" class="sidemenu_link <?php if(($tpl=="tpl_pub_partnership_wb.php")) print "selected";?>" title="Partnership"><span>I nostri partner</span></a>
			<ul>
				<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_partnership_part1_wb.php" <?php if ($tpl == "tpl_pub_partnership_part1_wb.php") {?>class="selected"<?php } ?> title="Partner 1">Partner 1</a></li>
				<li><a href="#1" <?php if ($tpl == "tpl_pub_partnership_part2_wb.php") {?>class="selected"<?php } ?> title="Partner 2">Partner 2</a></li>
			</ul>
		</li>
		<?php	
		break;
		
		//AREA EVENTI
		case "tpl_pub_area_eventi_aree_wb.php": case "tpl_pub_area_eventi_cicli_wb.php":
		?>
		<li><a href="/connect.php?page=str_interna_pub_wb.php&tpl_pub_area_eventi_wb.php" class="sidemenu_link <?php if(($tpl=="tpl_pub_area_eventi_wb.php")) print "selected";?>" title="Area evento 01"><span>Area evento 01</span></a>
			<ul>
				<li><a href="#1" title="Lorem ipsum">Lorem ipsum</a></li>
				<li><a href="#1" title="Lorem ipsum">Lorem ipsum</a></li>
				<li><a href="#1" title="Lorem ipsum">Lorem ipsum</a></li>
				<li><a href="#1" title="Lorem ipsum">Lorem ipsum</a></li>
				<li><a href="#1" title="Lorem ipsum">Lorem ipsum</a></li>
				<li><a href="#1" title="Lorem ipsum">Lorem ipsum</a></li>
			</ul>
		</li>
		<li><a href="#" class="" title="Area evento 02"><span>Area evento 02</span></a></li>
		<li><a href="#" class="" title="Area evento 02"><span>Area evento 03</span></a></li>
		<li><a href="#" class="" title="Area evento 02"><span>Area evento 04</span></a></li>
		<li><a href="#" class="" title="Area evento 02"><span>Area evento 05</span></a></li>
		<?php	
		break;
	}
	?>
</ul>
<?php
if ($tpl='tpl_pub_caratteristiche_conto_wb.php' || $tpl == "tpl_pub_piattaforme_wb.php" || $tpl == "tpl_pub_piattaforma_web_wb.php" || $tpl == "tpl_pub_t3_wb.php" || $tpl == "tpl_pub_t3_noframe_wb.php" || $tpl == "tpl_pub_eSignal_wb.php" || $tpl == "tpl_pub_visual_trader_wb.php" || $tpl == "tpl_pub_corsi_wb.php.php" || $tpl == "tpl_pub_corsi_strategie_wb.php" || $tpl == "tpl_pub_guide_manuali_wb.php" || $tpl == "tpl_pub_mutui_wb.php" || $tpl =="tpl_pub_mutui_assicuraz_wb.php")
{
?>
<?php virtual("/librerie/include/commons/navigazione/pub_wb_spa_nav_005.php");?>

<?php } ?>
<!-- MENU LATERALE -->