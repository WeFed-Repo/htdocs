<?php
//Visualizzatore stringhe (inizializzazione)
$avviso = "";
//Messaggi di errore
	$todevelop = "<div style=\"display:block; width:698px; border: dashed 1px #FC0; height: 300px;background-color: #ffc; color: #666; font-size:14px; text-align: center; padding:100px 0;\">Template da sviluppare</div>";
	$asis = "<div style=\"display:block; border: dashed 1px #6ab10b; width:698px; height: 300px;background-color: #ededed; color: #666; font-size:14px; text-align: center; padding:100px 0;\"><b>AS IS</b><br>Template da lasciare così com'è ora in WeBank, con la pagina attualmente in produzione.</div>";
	$fase2 = "<div style=\"display:block; border: dashed 1px #6ab10b; width:698px; height: 300px;background-color: #ededed; color: #666; font-size:14px; text-align: center; padding:100px 0;\"><b>FASE 2</b><br>Template non presente in FASE 1</div>";

//autoattribuzione livello 4 al primo presente
if (strLen($tr4)<=0) 
{
	$tr4 = 0;
}

$tradpage = "";
switch($tr2)
	{
		case 0:
			switch($tr3)
			{
				case 0: 
					
					switch ($tr4)
					{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_portafoglio_titoli.php";
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_stato_prestito_titoli.php";
						break;
						
						case "2": 
							$tradpage = "tpl_priv_lib_wt_pagina_cortesia_titoli_prestito.php";
						break;
						
						case "3": 
							$tradpage = "tpl_priv_lib_wt_profitti_perdite.php";
						break;
						
						case "4": 
							$tradpage = "tpl_priv_lib_wt_avvisi_perdite.php";
						break;
						
						case "5": 
							$avviso = $fase2;
						break;
					}
					
				break;				
				
				case 1: 
					
					switch ($tr4)
					{
						case "0": 
							$avviso = $fase2;
						break;
						
						case "1": 
							$avviso = $fase2;
						break;
						
					
					}
					
				break;			
				
				
				case 2: 
					
					switch ($tr4)
					{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_saldo_liquidita.php";
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_trasf_conto_derivati.php";
						break;
					
						case "2": 
							$tradpage = "tpl_priv_lib_wt_pagina_cortesia_trasf_derivati.php";
						break;
						
						
						
					
					}
					
				break;				
			
				
			
			
			}
			
			break;
			
		case 1:
			switch($tr3)
				{
				case 0: 
					switch ($tr4)
						{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_ricerca_evoluta_azioni.php";
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_ricerca_evoluta_obbligazioni.php";
						break;
						
						case "2": 
							$tradpage = "tpl_priv_lib_wt_ricerca_evoluta_derivati_futures.php";
						break;
						
						case "3": 
							$tradpage = "tpl_priv_lib_wt_ricerca_evoluta_cw.php";
						break;
						
						case "4": 
							$tradpage = "tpl_priv_lib_wt_ricerca_evoluta_etf.php";
						break;
						
						}
						
				
				
				break;	
				
				
				case 1: 
					switch ($tr4)
						{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_inserim_ordini.php";
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_inserim_ordini_cond.php";
						break;
						
						case "2": 
							$tradpage = "tpl_priv_lib_wt_operaz_capitale_aucap.php";
						break;
						
						case "3": 
							$tradpage = "tpl_prv_lib_wt_operaz_capitale_aucap_insuff.php";
						break;
						
						case "4": 
							$tradpage = "tpl_priv_lib_wt_operaz_capitale_aucap_vendita_auto.php";
						break;
						
						case "5": 
							$tradpage = "tpl_priv_lib_wt_marginazione.php";
						break;
						
						case "6": 
							$tradpage = "tpl_priv_lib_wt_shortovernight.php";
						break;
						
						case "7": 
							$tradpage = "tpl_priv_lib_wt_derivati_conflittointeressi.php";
						break;
						}
				break;	

				case 2: 
					switch ($tr4)
						{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_situazione_ordini.php";
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_stato_ordini_no_ordini.php";
						break;
						
						case "2": 
							$tradpage = "tpl_priv_lib_wt_storico_ordini.php";
						break;
						
						case "3": 
							$tradpage = "tpl_priv_lib_wt_ordini_condizionati.php";
						break;
						
						case "4": 
							$tradpage = "tpl_priv_lib_wt_storico_ordini_condizionati.php";
						break;
						
						case "5": 
							$tradpage = "tpl_priv_lib_wt_operazioni_sul_capitale.php";
						break;
						
						case "6": 
							$tradpage = "tpl_priv_lib_wt_archivio_ordini.php";
						break;
						
						}
						
						
				break;	
				}
			break;
		
		case 2:
			switch($tr3)
				{
				case 0: 
					switch ($tr4)
						{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_overview_indici.php";
						break;
						
						case "1":
							$tradpage = "tpl_priv_lib_wt_overview_indici_azioni.php";
						break;

						}
				break;	
				
				case 1:
					switch ($tr4)
					{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_panoramica_quotazioni_mercati.php";
						break;
						
						case "1":
							$tradpage = "tpl_priv_lib_wt_quotazioni_mercato_azionario_italia.php";
						break;
						
						case "2":
							$tradpage = "tpl_priv_lib_wt_quotazioni_mercato_azionario_europa_germania.php";
						break;
					
						case "3":
							$tradpage = "tpl_priv_lib_wt_quotazioni_mercato_azionario_americano.php";
						break;
					
					}
				break;
				
				case 2:
					switch ($tr4)
						{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_obbligazioni.php";
						break;
						
						case "1": 
							$avviso = $fase2;
						break;
						
						case "2": 
							$avviso = $fase2;
						break;
						
						case "3": 
							$avviso = $fase2;
						break;
						
						}
					break;

				case 3: 
					switch ($tr4)
						{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_derivati.php";
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_derivati_idem.php";
						break;
						
						case "2": 
							$tradpage = "tpl_priv_lib_wt_derivati_eurex.php";
						break;
						
						case "3": 
							$tradpage = "tpl_priv_lib_wt_derivati_cme.php";
						break;
						
						case "4": 
							$tradpage = "tpl_priv_lib_wt_derivati_ecbot.php";
						break;
						
						case "5": 
							$tradpage = "tpl_priv_lib_wt_derivati_liffe.php";
						break;
						
						case "6": 
							$tradpage = "tpl_priv_lib_wt_derivati_opzioni.php";
						break;
						}
					break;
					
				case 4:
					{
						switch ($tr4)
						{
							case "0": 
								$tradpage = "tpl_priv_lib_wt_cw_migliori.php";
							break;
							
							case "1": 
								$tradpage = "tpl_priv_lib_wt_mercato_sedex_cw.php";
							break;
							
							case "2": 
								$tradpage = "tpl_priv_lib_wt_mercato_sedex_elementi_costitutivi_cw.php";
							break;
							
							case "3": 
								$tradpage = "tpl_priv_lib_wt_cw_utilizzo.php";
							break;
							
							case "4": 
								$tradpage = "tpl_priv_lib_wt_valore_cw.php";
							break;
							
							case "5": 
								$tradpage = "tpl_priv_lib_wt_prodotti_cw.php";
							break;
							
							case "6": 
								$tradpage = "tpl_priv_lib_wt_orari_cw.php";
							break;
						
						}
					}
					break;
				
				case 5:
					{
						switch($tr4)
						{
							case "0":
								$tradpage = "tpl_priv_lib_wt_certificates_ricerca_interattiva.php";
							break;
							
							case "1":
								$tradpage = "tpl_priv_lib_wt_certificates_migliori.php";
							break;
							
							case "2":
								$tradpage = "tpl_priv_lib_wt_sedex_certificates.php";
							break;
							
							case "3":
								$tradpage = "tpl_priv_lib_wt_scala_certificates.php";
							break;
							
							case "4":
								$tradpage = "tpl_priv_lib_wt_certificates_scegli.php";
							break;
							
							case "5":
								$tradpage = "tpl_priv_lib_wt_certificates_orari.php";
							break;
							
							
						}
					}
					break;
				
				case 6:
					switch ($tr4)
						{
						
						case "0": 
							$avviso = $fase2;
						break;
						
						case "1": 
							$avviso = $asis;
						break;	
						}
					break;		
				
				case 7: 
					switch ($tr4)
						{
						case "0": 
							$tradpage = "tpl_priv_lib_wt_watchlist.php";
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_crea_watchlist.php";
						break;
					}
					break;		
				}
			break;
		
		case 3:
			switch($tr3)
				{
				case 0: 
					switch ($tr4)
						{
						case "0": 
							$avviso = $asis;
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_tradermade.php";
						break;
						
						case "2": 
							$tradpage = "tpl_priv_lib_wt_grafici_interattivi.php";
						break;
						
						case "3": 
							$tradpage = "tpl_priv_lib_wt_news.php";
						break;							

						
						
					}
					
				break;
				
				case 1: 
					
					switch ($tr4)
					{
						
						
						case "0": 
							$tradpage = "tpl_priv_lib_wt_ricercaboto.php";
						break;	

						case "1": 
							$avviso = $fase2;
						break;	
						
					}
					
				break;
				
				case 2: 
					
					switch ($tr4)
					{
						
						case "0": 
							$tradpage = "tpl_priv_lib_wt_scegli_alert.php";
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_segnalimercato.php";
						break;	
						
						case "2": 
							$tradpage = "tpl_priv_lib_wt_notifiche.php";
						break;

						/*case "3": 
							$tradpage = "tpl_priv_lib_wt_scegli_alert_nuova.php";
						break;
						
						case "4": 
							$tradpage = "tpl_priv_lib_wt_segnalimercato_nuova.php";
						break;*/
						
						case "3": 
							$tradpage = "tpl_priv_lib_wt_alert_notifiche_attive.php";
						break;
						
						case "4": 
							$tradpage = "tpl_priv_lib_wt_imposta_alert.php";
						break;
						
					}
					
				break;
				
				case 3: 
					
					switch ($tr4)
					{
						
						case "0": 
							$tradpage = "tpl_priv_lib_wt_guide_operative.php";
						break;
						
						case "1": 
							$tradpage = "tpl_priv_lib_wt_video_tutorial.php";
						break;
						
						case "2": 
							$tradpage = "tpl_priv_lib_wt_eventi_corsi_calendario.php";
						break;
						
						case "3": 
							$tradpage = "tpl_priv_lib_wt_eventi_corsi_tour_scad.php";
						break;
					}
					
				break;
			
			}
			
			break;	
	
		case 4:
				
				switch($tr3)
					{
						case 0: 
							switch ($tr4)
							{
								case "0":
									$tradpage = "tpl_priv_lib_wt_deposito_titoli_scopri.php";
								break;
								
								case "1":
									$tradpage = "tpl_priv_lib_wt_deposito_titoli_apri_nessun_conto.php";
								break;
								
								case "2":
									$tradpage = "tpl_priv_lib_wt_deposito_titoli_apri_errore.php";
								break;
								
								case "3":
									$tradpage = "tpl_priv_lib_wt_commissioni_di_trading.php";
								break;
								
								case "4":
									$tradpage = "tpl_priv_lib_wt_costi_informativa.php";
								break;
								
								case "5": 
									$tradpage = "tpl_priv_lib_wt_costi_piattaforma.php";
								break;
								
								case "6": 
									$tradpage = "tpl_priv_lib_wt_attivazione_servizi_spec.php";
								break;
								
								case "7": 
									$tradpage = "tpl_priv_lib_wt_attivazione_servizi_spec_info.php";
								break;
								
								case "8": 
									$tradpage = "tpl_priv_lib_wt_attivazione_servizi_spec_imp.php";
								break;
							}
						break;
							
						case 1:
							
							switch ($tr4)
							{
								case "0":
									$tradpage = "tpl_priv_lib_wt_stockoptions_3m_step1.php";
								break;	
																
							}
							
						break;
						
					}
				
			break;		
		
		case 5:
		switch($tr3)
					{
					case 0: 
							switch ($tr4)
							{
								case "0":
										$tradpage = "tpl_priv_lib_wt_piattaforme_overview.php";
								break;
								
								case "1":
										$tradpage = "tpl_priv_lib_wt_piattaformat3.php";
								break;
								
								case "2":
										$tradpage = "tpl_priv_lib_wt_piattaformat3_noattiva.php";
								break;
								
								case "3":
										$tradpage = "tpl_priv_lib_wt_piattaformat3_noframe.php";
								break;
								
								case "4":
										$tradpage = "tpl_priv_lib_wt_piattaformat3_open.php";
								break;
							}
						break;
						
						case 1: 
							switch ($tr4)
							{
								case "0":
										$tradpage = "tpl_priv_lib_wt_esignal.php";
								break;
								
								case "1":
										$tradpage = "tpl_priv_lib_wt_WTpro.php";
								break;
							}
						break;
					}
					
	}

if ($tradpage == "")	
	{
		if ($avviso != "")
		{
			print ($avviso);
		}
		else
		{
			print ($todevelop);
		}

	}
else
	{
		virtual("/librerie/php/wetrade/".$tradpage);
	}
?>