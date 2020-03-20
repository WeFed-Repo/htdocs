<?php

/* LASCIA IL FILE IN CACHE AD OGNI NUOVA SESSIONE */
/*
header("Content-type: text/javascript");
$offset = 3600 * 24; 
$expire = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
header($expire);
*/
/* RICARICA IL FILE */

$bank = $_GET["bank"];

?>var menuData = [
    {
	"title":"My home",
	"link":"tpl_priv_fp_my_ria.php",
	"responsive":true,
	"voices":[
		{
		"title":"Dati e impostazioni personali",
		"voices":[
			{
			"title":"Modifica recapiti",
			"responsive":true,
			"voices":[
				{
				"title":"Residenza",
				"link":"tpl_responsive_modifica_residenza.php",
				"responsive":true
				},
				{
				"title":"Residenza - 1 recapito (NEW)",
				"link":"tpl_responsive_modifica_residenza_1_new.php",
				"responsive":true
				},
				{
				"title":"Residenza - pi&ugrave; recapiti (NEW)",
				"link":"tpl_responsive_modifica_residenza_molti_new.php",
				"responsive":true
				},
				{
				"title":"Email",
				"link":"tpl_responsive_modifica_mail.php",
				"responsive":true
				},
				{
				"title":"Cellulare",
				"link":"tpl_responsive_modifica_cellulare.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Codici di accesso",
			"responsive":true,
			"voices":[
				{
				"title":"I tuoi codici",
				"link":"tpl_responsive_i_tuoi_codici.php",
				"responsive":true
				},
				{
				"title":"Gestisci i codici",
				"link":"tpl_responsive_gestisci_codici.php",
				"responsive":true
				},
				{
				"title":"Profili di accesso",
				"link":"tpl_responsive_profili_accesso.php",
				"responsive":true
				},
				{
				"title":"Postazione autorizzata",
				"link":"tpl_responsive_postazione_autorizzata.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Impostazioni preferenze",
			"responsive":true,
			"voices":[
				{
				"title":"Nickname e conto preferito",
				"link":"tpl_responsive_nick_conto_preferito.php",
				"responsive":true
				},
				{
				"title":"My menu",
				"link":"tpl_responsive_mymenu.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Mifid",
			"responsive":true,
			"voices":[
				{
					"title":"Gestione quest. MIFID",
					"link":"tpl_responsive_mifid.php",
					"responsive":true
				},
				{
					"title":"Questionario MIFID",
					"link":"tpl_responsive_questionario_mifid.php",
					"responsive":true
				},
				{
				"title":"Tabelle MIFID",
				"link":"tpl_responsive_tabelle_mifid.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Sicurezza dei dati",
			"responsive":true,
			"voices":[
				{
				"title":"Info generali",
				"link":"tpl_responsive_info_generali.php",
				"responsive":true
				},
				{
				"title":"Le tue credenziali",
				"link":"tpl_responsive_credenziali.php",
				"responsive":true
				},
				{
				"title":"Misure di sicurezza",
				"link":"tpl_responsive_misure_sicurezza.php",
				"responsive":true
				},
				{
				"title":"Programma Sicurezza",
				"link":"tpl_responsive_programma_sicurezza.php",
				"responsive":true
				},
				{
				"title":"Il phishing",
				"link":"tpl_responsive_phishing.php",
				"responsive":true
				},
				{
				"title":"Il Crimeware",
				"link":"tpl_responsive_crimeware.php",
				"responsive":true
				},
				{
				"title":"Gli aspetti tecnici",
				"link":"tpl_responsive_aspetti_tecnici.php",
				"responsive":true
				},
				{
				"title":"Sospensione OTP",
				"link":"tpl_responsive_sospensione_otp.php",
				"responsive":true
				},
				{
				"title":"Strumenti di sicurezza",
				"link":"tpl_responsive_strumenti_sicurezza.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Alert",
		"voices":[
			{
			"title":"Alert  sms-email",
			"responsive":true,
			"voices":[
				{
				"title":"Alert attivi",
				"link":"tpl_responsive_alert_attivi.php",
				"responsive":true
				},
				{
				"title":"Imposta alert",
				"link":"tpl_responsive_imposta_alert.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Sms a richiesta",
			"link":"tpl_responsive_sms_richiesta.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Archivio documenti",
		"voices":[
			{
			"title":"Documenti",
			"link":"tpl_responsive_archivio_documenti_anagrafica.php",
			"responsive":true,
			"voices":[
				{
				"title":"Anagrafica",
				"link":"tpl_responsive_archivio_documenti_anagrafica.php",
				"responsive":true
				},
				{
				"title":"Firma elettronica",
				"link":"tpl_responsive_archivio_documenti_firma_elettronica.php",
				"responsive":true
				},
				{
				"title":"Firma digitale",
				"link":"tpl_responsive_archivio_documenti_firma_digitale.php",
				"responsive":true
				},
				{
				"title":"Conti",
				"link":"tpl_responsive_archivio_documenti_conti.php",
				"responsive":true
				},
				{
				"title":"Multicanalit\u00e0",
				"link":"tpl_responsive_archivio_documenti_multicanalita.php",
				"responsive":true
				},
				{
				"title":"Carte",
				"link":"tpl_responsive_archivio_documenti_carte.php",
				"responsive":true
				},
				{
				"title":"Consulenza finanziaria",
				"link":"tpl_responsive_archivio_documenti_consulenza_finanziaria.php",
				"responsive":true
				},
				{
				"title":"Investimenti",
				"link":"tpl_responsive_archivio_documenti_investimenti.php",
				"responsive":true
				},
				{
				"title":"Assicurazioni",
				"link":"tpl_responsive_archivio_documenti_assicurazioni.php",
				"responsive":true
				},
				{
				"title":"Finanziamenti",
				"link":"tpl_responsive_archivio_documenti_finanziamenti.php",
				"responsive":true
				},
				{
				"title":"Altro",
				"link":"tpl_responsive_archivio_documenti_altro.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Firma digitale",
		"voices":[
			{
			"title":"Cos'\u00E8 la firma digitale",
			"link":"tpl_responsive_firma_digitale.php",
			"responsive":true,
			"voices":[
				{
					"title":"Cos'\u00E8 la firma digitale",
					"link":"tpl_responsive_firma_digitale.php",
					"responsive":true
				},
				{
					"title":"Richiesta firma digitale",
					"link":"tpl_responsive_firma_digitale_richiesta.php",
					"responsive":true
				},
				{
					"title":"FAQ",
					"link":"tpl_responsive_firma_digitale_faq.php",
					"responsive":true
				}
			]
			}
			
		]
		},
		{
		"title":"Comunicazioni",
		"voices":[
			{
			"title":"Novit\u00e0",
			"link":"",
			"responsive":false
			},
			{
			"title":"Comunicazioni di servizio\n",
			"responsive":true,
			"voices":[
				{
				"title":"Comunicazioni Help Center",
				"link":"tpl_responsive_comunicazioni_servizio.php",
				"responsive":true
				},
				{
				"title":"Notizie",
				"link":"",
				"responsive":true
				}
			]
			},
			{
			"title":"Nuovo conto Webank",
			"link":"",
			"responsive":false
			}
		<?php if ($bank=="bpm") { ?>
			,
			{
			"title":"Esempio popup video",
			"link":"tpl_responsive_popup_video.php",
			"responsive":false
			}
		<?php } ?>
		]
		},
		{
		"title":"Mobile",
		"voices":[
			{
			"title":"La tua banca a portata di mano",                        
			"responsive":true,
			"voices":[
				{
				"title":"Webank Mobile",
				"link":"tpl_responsive_mobile.php",
				"responsive":true
				},
				{
				"title":"T3",
				"link":"tpl_responsive_t3.php",
				"responsive":true
				},
				{
				"title":"Gestione app",
				"link":"tpl_responsive_gestioneapp.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Premi e concorsi",
		"voices":[
			{
			"title":"Porta un amico",
			"responsive":true,
			"voices":[
				{
				"title":"Il tuo codice presentatore (NO PROMO)",
				"link":"tpl_responsive_codice_presentatore_nopromo.php",
				"responsive":true
				},
				{
				"title":"Il tuo codice presentatore (PROMO)",
				"link":"tpl_responsive_codice_presentatore_promo.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Acquisti online",
		"voices":[
			{
			"title":"Libri, riviste e multimedia",
			"responsive":true,
			"voices":[
				{
				"title":"Riviste Mondadori",
				"link":"tpl_responsive_mondadori.php",
				"responsive":true
				}
			]
			}
		]
		}
	]
    },
    {
	"title":"Sportello",
	"link":"tpl_priv_full_sportello.php",
	"id":"nav_priv_wbx_sportello",
	"new":true,
	"responsive":true,
	"voices":[
		{
		"title":"Il mio conto",
		"voices":[
			{
			"title":"Rendicontazione",
			"responsive":true,
			"voices": [
				{
				"title":"Saldo",
				"link":"tpl_responsive_saldo.php",
				"responsive":true
				},
				{
				"title":"Movimenti",
				"link":"tpl_priv_movimenti.php",
				"responsive":true
				},
				{
				"title":"Esito disposizioni",
				"link":"tpl_priv_esito_disposizioni.php",
				"responsive":true
				},
				{
				"title":"Estratto conto e contabili [servizio non attivo]",
				"link":"tpl_responsive_contabili_non_attivo.php",
				"responsive":true
				},
				{
				"title":"Estratto conto e contabili [servizio attivo]",
				"link":"tpl_priv_contabili.php",
				"responsive":true
				},
				{
				"title":"Contratti",
				"link":"",
				"responsive":true
				}
			]
			},
			{
			"title":"Coordinate bancarie",
			"link":"tpl_responsive_coordinate_bancarie.php",
			"responsive":true
			},
			{
			"title":"Condizioni",
			"link":"tpl_responsive_condizioni_conto.php",
			"responsive":true,
			"voices": [
				{
				"title":"Condizioni conto",
				"link":"tpl_responsive_condizioni_conto.php",
				"responsive":true
				},
				{
				"title":"Commissioni trading",
				"link":"tpl_responsive_commissioni_trading.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Trasloco in Webank",
			"link":"tpl_responsive_trasloco.php",
			"responsive":true
			},
			{
			"title":"Modulistica",
			"link":"tpl_responsive_modulistica.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Bonifici e altri pagamenti",
		"new": true,
		"voices":[
			{
			"title":"Bonifici",
			"link":"tpl_responsive_bonifico.php",
			"responsive":true,
			"voices":[
				{
				"title":"Ordinario",
				"link":"tpl_responsive_bonifico.php",
				"responsive":true
				},
				{
				"title":"Periodico",
				"link":"tpl_responsive_bonifico_periodico.php",
				"responsive":true
				},
				{
				"title":"Ristrutturazione edilizia",
				"link":"tpl_responsive_ristrutturazione_edilizia.php",
				"responsive":true
				},
				{
				"title":"Risparmio energetico",
				"link":"tpl_responsive_risparmio_energetico.php",
				"responsive":true
				},
				{
				"title":"Bonus arredo ed elettrodomestici",
				"link":"tpl_responsive_bonus_arredo.php",
				"responsive":true
				},
				{
				"title":"Solidale",
				"link":"tpl_responsive_solidale.php",
				"responsive":true
				},
				{
				"title":"Modifica importo massimo",
				"link":"tpl_responsive_mod_importo_max.php",
				"responsive":true
				}
			]
			},
			{
			"title":"DailyPay by Jiffy",
			"link":"tpl_responsive_dailypay_attivazione.php",
			"responsive":true,
			"voices":[                         
				{
				"title":"Info e attivazione",
				"link":"tpl_responsive_dailypay_attivazione.php",
				"responsive":true
				},
				{
				"title":"Gestione servizio",
				"link":"tpl_responsive_gestione_servizio_jiffy.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Bollettini postali e bancari",
			"link":"tpl_responsive_bollettini_postali.php",
			"responsive":true,
			"voices":[                         
				{
				"title":"Bollettini postali",
				"link":"tpl_responsive_bollettini_postali.php",
				"responsive":true
				},
				{
				"title":"Bollettini freccia",
				"link":"tpl_responsive_bollettini_freccia.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Bollo auto",
			"link":"tpl_responsive_bollo_auto.php",
			"responsive":true
			},
			{
			"title":"Ricariche e abbonamenti",
			"link":"tpl_responsive_ricariche_abbonamenti.php",
			"responsive":true,
			"voices":[                         
				{
				"title":"Ricariche cellulari",
				"link":"tpl_responsive_ricariche_abbonamenti.php",
				"responsive":true
				},
				{
				"title":"Ricarica digitale terrestre",
				"link":"tpl_responsive_ricariche_digitale.php",
				"responsive":true
				},
				{
				"title":"Abbonamento ATM Milano",
				"link":"tpl_responsive_atm.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Ricarica Postepay",
			"link":"tpl_responsive_ricariche_postepay.php",
			"responsive":true
			},
			{
			"title":"Riba -Mav -Rav",
			"link":"tpl_priv_mav_rav.php?type=mav",
			"responsive":true,
			"voices":[                         
				{
				"title":"Mav",
				"link":"tpl_priv_mav_rav.php?type=mav",
				"responsive":true

				},
				{
				"title":"Rav",
				"link":"tpl_responsive_priv_rav.php?type=rav",
				"responsive":true
				}
			]
			},
			{
			"title":"Pagamento tributi - F24\/F23",
			"link":"tpl_responsive_intro_f24.php",
			"responsive":true,
			"voices":[
				{
				"title":"Guida",
				"link":"tpl_priv_f24_guida.php",
				"responsive":true
				},
				{
				"title":"Pagamenti F24",
				"link":"tpl_priv_f24_iframe.php",
				"responsive":true
				},
				{
				"title":"Pagamenti F23",
				"link":"tpl_priv_f23_iframe.php",
				"responsive":true
				},
				{
				"title":"Rubrica contribuenti",
				"link":"tpl_responsive_rubrica_contribuenti.php",
				"responsive":true
				}
			/*	{
				"title":"Pagamento",
				"link":"tpl_responsive_intro_f24.php",
				"responsive":true
				},
				{
				"title":"Ricerca quietanza f24",
				"link":"tpl_responsive_ricerca_quietanza.php",
				"responsive":true
				},
				{
				"title":"Riepilogo dati",
				"link":"tpl_responsive_riepilogo_dati.php",
				"responsive":true
				}*/
			]
			},
			{
			"title":"Giroconti",
			"link":"tpl_responsive_giroconto.php",
			"responsive":true
			},
			{
			"title":"Assegni",
			"link":"tpl_responsive_assegni.php",
			"responsive":true,
			"voices":[
				{
				"title":"Libretto assegni",
				"link":"tpl_responsive_assegni.php",
				"responsive":true
				},
				{
				"title":"Assegni circolari",
				"link":"tpl_responsive_assegni_circolari.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Domiciliazioni",
			"link":"tpl_responsive_cosa_e_una_domiciliazione.php",
			"responsive":true,
			"voices":[
				{
				"title":"Cos'\u00E8 una domiciliazione",
				"link":"tpl_responsive_cosa_e_una_domiciliazione.php",
				"responsive":true
				},
				{
				"title":"Sepa Direct Debit",
				"link":"tpl_responsive_sdd.php",
				"responsive":true
				},
				{
				"title":"Rid(esiste ancora in produzione??)",
				"link":"tpl_responsive_rid.php",
				"responsive":true
				},
				{
				"title":"Telepass Family",
				"link":"tpl_responsive_telepass_family.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Rubrica",
			"link":"tpl_responsive_rubrica.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Versamenti e prelievi",
		"voices":[
			{
			"title":"Accredita in conto",
			"link":"tpl_responsive_accredito_stipendio.php",
			"responsive":true,
			"voices": [
				{
				"title":"Accredito stipendio",
				"link":"tpl_responsive_accredito_stipendio.php",
				"responsive":true
				},
				{
				"title":"Accredito pensione inps",
				"link":"tpl_responsive_accredito_pensione_inps.php",
				"responsive":true
				},
				{
				"title":"Prestazioni a sostegno del reddito",
				"link":"tpl_responsive_prestazioni_sostegno_reddito.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Versa contante e assegni",
			"link":"tpl_responsive_versa_presso_la_rete_del_gruppo_bipiemme.php",
			"responsive":true,
			"voices": [
				/*{
				"title":"Versa in ogni sportello",
				"link":"tpl_responsive_versa_in_ogni_sportello.php",
				"responsive":true
				},*/
				{
				"title":"Versa presso la rete del Gruppo Bipiemme",
				"link":"tpl_responsive_versa_presso_la_rete_del_gruppo_bipiemme.php",
				"responsive":true
				},
				{
				"title":"Versa presso bancomat BPM",
				"link":"tpl_responsive_versa_presso_bancomat_bpm.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Preleva da conto",
			"link":"tpl_responsive_prenotazione_contante.php",
			"responsive":true,
			"voices": [
				{
				"title":"Prenotazione contante",
				"link":"tpl_responsive_prenotazione_contante.php",
				"responsive":true
				},
				{
				"title":"Valute estere",
				"link":"tpl_responsive_valute_estere.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Prelievo Cardless",
			"responsive":true,
			"voices": [
				{
				"title":"Info e richiesta Prelievo Cardless",
				"link":"tpl_responsive_info_richiesta_prel_cardless.php",
				"responsive":true
				},
				{
				"title":"Gestione Prelievo Cardless",
				"link":"tpl_responsive_gestione_prel_cardless_richiesta.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Gestione Deposito",
		"voices":[
			{
			"title":"Trasferimenti",
			"link":"tpl_responsive_trasferimento_singolo.php",
			"responsive":true,
			"voices": [
				{
				"title":"Singolo",
				"link":"tpl_responsive_trasferimento_singolo.php",
				"responsive":true
				},
				{
				"title":"Periodico",
				"link":"tpl_responsive_trasferimento_periodico.php",
				"responsive":true
				},
				{
				"title":"A soglia",
				"link":"tpl_responsive_trasferimento_soglia.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Linee vincolate",
			"link":"tpl_responsive_trasferimento_singolo.php",
			"responsive":true,
			"voices": [
				{
				"title":"Apertura nuova linea",
				"link":"tpl_responsive_apertura_nuova_linea.php",
				"responsive":true
				},
				{
				"title":"Linee attive",
				"link":"tpl_responsive_linee_attive.php",
				"responsive":true
				}
			]
			}
		]
		},
	]
    },
    {
	"title":"Carte",
	"link": "<?php print (($bank=="webank") ? "tpl_priv_full_carte" : "tpl_priv_fp_carte"); ?>.php",
	"id":"nav_priv_wbx_carte",
	"responsive":true,
	"voices":[
		/*{
		"title":"Le mie carte",
		"link":"tpl_priv_carte.php",
		"responsive":true
		},*/
	<?php if ($bank=="webank") { ?>
		{
		"title":"Bancomat",
		"voices":[
			{
			"title":"Info e richiesta bancomat",
			"link":"tpl_responsive_info_richiesta_bancomat.php",
			"responsive":true,
			"voices": [
				{
				"title":"Bancomat internazionale",
				"link":"tpl_responsive_info_richiesta_bancomat.php",
				"responsive":true
				},
				{
				"title":"Confronta carte",
				"link":"tpl_responsive_confronta_carte.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Gestione Bancomat",
			"link":"tpl_responsive_banco_saldo_mov.php",
			"responsive":true,
			"voices": [
				{
				"title":"Bancomat internazionale",
				"link":"tpl_responsive_banco_saldo_mov.php",
				"responsive":true

				}/*,
				{
				"title":"Extraprelievo e massimali",
				"link":"tpl_responsive_banco_extra_max.php",
				"responsive":true

				}*/
			]
			}
		]
		},
		{
		"title":"Carte di credito",
		"voices":[
			{
			"title":"Info e richiesta carte di credito",
			"link":"",
			"responsive":false,
			"voices":[
				{
				"title":"Cartimpronta ONE",
				"link":"tpl_responsive_info_richiesta_ci_one.php",
				"responsive":true
				},
				{
				"title":"Cartimpronta Gold Plus",
				"link":"tpl_responsive_info_richiesta_ci_gold_plus.php",
				"responsive":true
				},
				{
				"title":"Confronta carte",
				"link":"tpl_responsive_confronta_carte.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Gestione carte di credito",
			"link":"",
			"responsive":true,
			"voices":[
				{
				"title":"Cartimpronta ONE",
				"link":"tpl_responsive_gestione_carte_credito_one.php",
				"responsive":true
				},
				{
				"title":"Cartimpronta Classic",
				"link":"tpl_responsive_gestione_carte_credito_classic.php",
				"responsive":true
				},
				{
				"title":"Cartimpronta Gold Plus",
				"link":"tpl_responsive_gestione_carte_credito_goldPlus.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Carte prepagate",
		"voices":[
			{
			"title":"Info e richiesta Carta Kjeans",
			"link":"tpl_responsive_richiesta_carta_kjeans.php",
			"responsive":true,
			"voices": [
				{
				"title":"Carta Kjeans",
				"link":"tpl_responsive_richiesta_carta_kjeans.php",
				"responsive":true
				},
				{
				"title":"Confronta carte",
				"link":"tpl_responsive_confronta_carte.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Gestione carte prepagate",
			"link":"",
			"responsive":true,
			"voices": [
				{
				"title":"Carta Kjeans",
				"link":"tpl_responsive_ricariche_kjeans.php",
				"responsive":true
				},
				{
				"title":"Carta Je@ns",
				"link":"tpl_responsive_ricariche_jeans.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Ricarica Postepay",
			"link":"tpl_responsive_ricariche_postepay.php",
			"responsive":true
			}
		]
		},
	<?php } ?>

	<?php if ($bank=="bpm") { ?>
		{
		"title":"Carte di debito",
		"voices":[
			{
			"title":"Carta di Debito Internazionale con FASTpay ",
			"link":"tpl_responsive_carta_debito_internazionale_fastpay_bpm.php",
			"responsive":true
			},
			{
			"title":"Carta di Debito Internazionale",
			"link":"tpl_responsive_carta_debito_internazionale_bpm.php",
			"responsive":true
			},
			{
			"title":"Carta di Debito Europea",
			"link":"tpl_responsive_carta_debito_europea_bpm.php",
			"responsive":true
			}, 
			{
			"title":"Cartimpronta Debit MasterCard",
			"link":"tpl_responsive_cartimpronta_debit_mastercard_bpm.php",
			"responsive":true						
			}
		]
		}/*,*/
	<?php }?>

		/*{
		"title":"BPM MasterPass",
		"link":"tpl_responsive_bpm_masterpass.php",
		"responsive":true
		}*/
	]
	},
	{
	"title":"Trading",
	"link":"tpl_priv_fp_trading.php",
	"id":"nav_priv_wbx_trading_wt",
	"responsive":true,
	<?php
	if ($bank=="webank") {
	?>
	"voices":[
		{
		"title":"Portafoglio",
		"voices":[
			{
			"title":"Titoli",
			"link":"tpl_responsive_titoli_portafoglio_senzaDT.php",
			"responsive":false,
			"voices":[
				{
				"title":"Titoli in portafoglio [senza DT]",
				"link":"tpl_responsive_titoli_portafoglio_senzaDT.php",
				"responsive":false
				},
				{
				"title":"Titoli in portafoglio [con DT]",
				"link":"tpl_responsive_titoli_portafoglio.php",
				"responsive":true
				},
				{
				"title":"Portafoglio virtuale",
				"link":"tpl_responsive_titoli_portafoglio_virtuale.php",
				"responsive":true
				},
				{
				"title":"Portafoglio Extra (attiva servizio)",
				"link":"tpl_responsive_portafoglio_extra_attiva.php",
				"responsive":true
				},
				{
				"title":"Portafoglio Extra (attivato)",
				"link":"tpl_responsive_portafoglio_extra.php",
				"responsive":true
				},
				{
				"title":"Profit & loss",
				"link":"tpl_responsive_profit_loss.php",
				"responsive":true
				},
				{
				"title":"Posizione fiscale",
				"link":"tpl_responsive_posizione_fiscale.php",
				"responsive":true
				},
				{
				"title":"Comunicazioni perdite superiori al 50%",
				"link":"tpl_responsive_comunicazioni_perdite_superiori.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Gestione liquidit\u00e0",
			"responsive":true,
			"voices":[
				{
				"title":"Saldo",
				"link":"tpl_responsive_saldo.php",
				"responsive":true
				},
				{
				"title":"Trasferimenti liquidit\u00e0 derivati [non attivo]",
				"link":"tpl_responsive_trasferimenti_liquidita_derivati.php",
				"responsive":true
				},
				{
				"title":"Trasferimenti liquidit\u00e0 derivati [attivo]",
				"link":"tpl_responsive_trasferimenti_liquidita_derivati.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Trasferimento titoli",
			"link":"tpl_responsive_trasferimento_titoli.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Compravendita",
		"voices":[
			{
			"title":"Ricerca titoli evoluta",
			"link":"tpl_responsive_ricerca_titoli_evoluta.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Azioni",
				"link":"tpl_responsive_ricerca_titoli_evoluta.php",
				"responsive":true
				},
				{
				"title":"Obbligazioni",
				"link":"tpl_responsive_ricerca_titoli_evoluta_obbligazioni.php",
				"responsive":true
				},
				{
				"title":"Derivati",
				"link":"tpl_responsive_ricerca_titoli_evoluta_derivati.php",
				"responsive":true
				},
				{
				"title":"CW e Certificates",
				"link":"tpl_responsive_ricerca_titoli_evoluta_cw.php",
				"responsive":true
				},
				{
				"title":"ETF Plus",
				"link":"tpl_responsive_ricerca_titoli_evoluta_etf.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Inserimento ordini",
			"link":"tpl_responsive_inserimento_ordini.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Inserimento ordine",
				"link":"tpl_responsive_inserimento_ordini.php",
				"responsive":true
				},
				{
				"title":"Inserimento ordine condizionato",
				"link":"tpl_responsive_ins_ordini_cond.php",
				"responsive":true
				},
				{
				"title":"Operazioni sul capitale",
				"link":"tpl_responsive_opa.php",
				"responsive":true
				},
				{
				"title":"Marginazione intraday",
				"link":"tpl_responsive_marginazione_intraday.php",
				"responsive":true
				},
				{
				"title":"Marginazione overnight",
				"link":"tpl_responsive_marginazione_overnight.php",
				"responsive":true
				},
				{
				"title":"Conflitto di interesse",
				"link":"tpl_responsive_conflitto_interesse.php",
				"responsive":true
				},
				{
				"title":"Bail-in",
				"link":"tpl_responsive_bail_in.php",
				"responsive":true
				}
			]   
			},
			{
			"title":"Situazione ordini",
			"link":"tpl_responsive_stato_ordini.php",
			"responsive":true,
			"voices":[
				{
				"title":"Stato ordini",
				"link":"tpl_responsive_stato_ordini.php",
				"responsive":true
				},
				{
				"title":"Storico ordini",
				"link":"tpl_responsive_storico_ordini.php",
				"responsive":true
				},
				{
				"title":"Stato ordini condizionati",
				"link":"tpl_responsive_stato_ordini _cond.php",
				"responsive":true
				},
				{
				"title":"Storico ordini condizionati",
				"link":"tpl_responsive_storico_ordini_cond.php",
				"responsive":true
				},
				{
				"title":"Operazioni sul capitale",
				"link":"tpl_responsive_operazioni_capitale.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Mercati e quotazioni",
		"voices":[
			{
			"title":"Azioni",
			"link":"tpl_responsive_overview.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Overview sui mercati",
				"link":"tpl_responsive_overview.php",
				"responsive":true
				},
				{
				"title":"Italia",
				"link":"tpl_responsive_overview_italia.php",
				"responsive":true
				},
				{
				"title":"Europa",
				"link":"tpl_responsive_overview_europa.php",
				"responsive":true
				},
				{
				"title":"America",
				"link":"tpl_responsive_overview_america.php",
				"responsive":true
				},
				{
				"title":"News",
				"link":"",
				"responsive":true
				}
			]
			},
			{
			"title":"Obbligazioni",
			"link":"tpl_responsive_obbligazioni.php",
			"responsive":true
			},
			{
			"title":"Derivati",
			"link":"tpl_responsive_derivati.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Overview sui derivati",
				"link":"tpl_responsive_derivati.php",
				"responsive":true
				},
				{
				"title":"Italia",
				"link":"tpl_responsive_derivati_italia.php",
				"responsive":true
				},
				{
				"title":"Europa",
				"link":"tpl_responsive_derivati_europa.php",
				"responsive":true
				},
				{
				"title":"America",
				"link":"tpl_responsive_derivati_america.php",
				"responsive":true
				},
				{
				"title":"Opzioni",
				"link":"tpl_responsive_derivati_opzioni.php",
				"responsive":true
				},
				{
				"title":"News",
				"link":"",
				"responsive":true
				}
			]
			},
			{
			"title":"Covered Warrants",
			"link":"tpl_responsive_cw.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Migliori e peggiori CW",
				"link":"tpl_responsive_cw.php",
				"responsive":true
				},
				{
				"title":"Mercato SEDEX e tipi di CW",
				"link":"tpl_responsive_sedex.php",
				"responsive":true
				},
				{
				"title":"CW: cosa sono e come funzionano",
				"link":"tpl_responsive_cw_cosa_sono.php",
				"responsive":true
				},
				{
				"title":"Quando utilizzare i CW",
				"link":"tpl_responsive_cw_quando.php",
				"responsive":true
				},
				{
				"title":"Determinare il valore dei CW",
				"link":"tpl_responsive_cw_valore.php",
				"responsive":true
				},
				{
				"title":"Prodotti e attivit&agrave; sottostanti",
				"link":"tpl_responsive_cw_prodotti.php",
				"responsive":true
				},
				{
				"title":"Orari di negoziazione e regolamento",
				"link":"tpl_responsive_cw_orari.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Certificates",
			"link":"tpl_responsive_certificates.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Ricerca interattiva",
				"link":"tpl_responsive_certificates.php",
				"responsive":true
				},
				{
				"title":"Migliori e peggiori certificates",
				"link":"tpl_responsive_certificates_migliori_pegg.php",
				"responsive":true
				},
				{
				"title":"Mercato SEDEX",
				"link":"tpl_responsive_certificates_sedex.php",
				"responsive":true
				},
				{
				"title":"Scala dei certificates",
				"link":"tpl_responsive_certificates_scala.php",
				"responsive":true
				},
				{
				"title":"Scegliere i certificates",
				"link":"tpl_responsive_certificates_scegliere.php",
				"responsive":true
				},
				{
				"title":"Orari di negoziazione e regolamento",
				"link":"tpl_responsive_certificates_orari.php",
				"responsive":true
				}
			]
			},
			{
			"title":"ETF Plus",
			"link":"",
			"responsive":true
			},
			{
			"title":"Watchlist",
			"link":"tpl_responsive_watchlist.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Tutte le watchlist",
				"link":"tpl_responsive_watchlist.php",
				"responsive":true
				},
				{
				"title":"Nuova watchlist",
				"link":"tpl_responsive_watchlist3.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Analisi, guide e alert",
		"voices":[
			{
			"title":"Strumenti di analisi",
			"link":"tpl_responsive_analisi_traderMade.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Analisi TraderMade",
				"link":"tpl_responsive_analisi_traderMade.php",
				"responsive":true
				},
				{
				"title":"Analisi ADB",
				"link":"tpl_responsive_analisi_adb.php",
				"responsive":true
				},
				{
				"title":"Grafici interattivi",
				"link":"tpl_responsive_grafici_interattivi.php",
				"responsive":true
				},
				{
				"title":"News",
				"link":"",
				"responsive":true
				}
			]
			},
			{
			"title":"Alert di mercato",
			"link":"tpl_responsive_alert_mercato.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Alert di mercato attivi",
				"link":"tpl_responsive_alert_mercato.php",
				"responsive":true
				},
				{
				"title":"Imposta alert di mercato",
				"link":"tpl_responsive_imposta_alert_mercato.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Guide e tutorial",
			"link":"tpl_responsive_guide_tutorial.php",
			"responsive":true,
			"voices":[                          
				{
				"title":"Guide",
				"link":"tpl_responsive_guide_tutorial.php",
				"responsive":true
				},
				{
				"title":"Video tutorial T3",
				"link":"",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Costi e attivazioni",
		"voices":[
			{
			"title":"Servizi, strumenti e piattaforme",
			"voices":[
				{
				"title":"Deposito titoli",
				"link":"../template_noresp/tpl_priv_apri_deposito.php",
				"responsive":false,
				"porting": true
				},
				{
				"title":"Deposito titoli responsive",
				"link":"tpl_responsive_priv_apri_deposito.php",
				"responsive":true
				},
				{
				"title":"Deposito titoli scopri",
				"link":"tpl_responsive_priv_scopri_deposito.php",
				"responsive":true
				},
				{
				"title":"Deposito titoli scopri (senza immagine)",
				"link":"tpl_responsive_priv_scopri_deposito2.php",
				"responsive":true
				},
				{
				"title":"Commissioni",
				"link":"tpl_responsive_commissioni_trading.php",
				"responsive":true
				},
				{
				"title":"Informativa e analisi",
				"link":"tpl_responsive_informativa_e_analisi.php",
				"responsive":true
				},
				{
				"title":"Piattaforme e altri strumenti",
				"link":"tpl_responsive_piattaforme_altri_strumenti.php",
				"responsive":true
				},
				{
				"title":"Attivazione altri servizi",
				"link":"tpl_responsive_attivazione_altri_servizi.php",
				"responsive":true
				},
				{
				"title":"Servizio Tax Refund",
				"link":"tpl_responsive_tax_refund.php",
				"responsive":true
				}
			]  
			},
			{
			"title":"Modulistica",
			"responsive":true,
			"voices":[
				{
				"title":"Moduli operativi",
				"link":"tpl_responsive_modulistica_trading.php",
				"responsive":true,
				},
				{
				"title":"Documenti informativi",
				"link":"",
				"responsive":true
				}
			] 
			}
		]
		},
		{
		"title":"Piattaforme evolute",
		"voices":[
			{
			"title":"Scopri le piattaforme",
			"voices":[
				{
				"title":"Overview sulle piattaforme",
				"link":"tpl_responsive_overview_sulle_piattaforme.php",
				"responsive":true
				},
				/*{
				"title":"Piattaforma T3",
				"link":"tpl_responsive_piattaforma_t3.php",
				"responsive":true
				},*/
				{
				"title":"Piattaforma T3 No Frame",
				"link":"",
				"responsive":true
				},
				{
				"title":"Piattaforma T3 open",
				"link":"tpl_responsive_piattaforma_t3_open.php",
				"responsive":true
				}
			]  
			}
		]
		}
	]
	<?php
	}else{
	?>
	"voices":[
		{
		"title":"Il mio trading",
		"voices":[
			{
			"title":"Portafoglio",
			"link":"tpl_responsive_titoli_portafoglio.php",
			"responsive":true,
			"voices":[
				{
				"title":"Titoli in portafoglio",
				"link":"tpl_responsive_titoli_portafoglio.php",
				"responsive":true
				},
				{
				"title":"Posizione fiscale",
				"link":"tpl_responsive_posizione_fiscale.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Condizioni",
			"link":"tpl_responsive_condizioni.php",
			"responsive":true,
			"voices":[
				{
				"title":"Commissioni di trading",
				"link":"tpl_responsive_commissioni_bpm.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Inserimento e gestione ordini",
		"voices":[
			{
			"title":"Compravendita",
			"link":"tpl_responsive_compravendita_bpm.php",
			"responsive":true
			},
			{
			"title":"Situazione ordini",
			"link":"tpl_responsive_stato_ordini.php",
			"responsive":true,
			"voices":[                         
				{
				"title":"Stato ordini",
				"link":"tpl_responsive_stato_ordini.php",
				"responsive":true
				}
			]
			}
		]
		}
	]
<?php
	}
?>
	},
	{
	"title":"Investimenti",
	"link":"tpl_priv_fp_investimenti.php",
	"id":"nav_priv_wbx_investimenti",
	"responsive": true,
	"voices":[
		{
		"title":"I miei investimenti",
		"voices":[
			{
			"title":"Portafoglio",
			"link":"tpl_responsive_investimenti_portafoglio.php",
			"responsive":true,
			"voices": [
				{
				"title":"Strumenti in portafoglio",
				"link":"tpl_responsive_investimenti_portafoglio.php",
				"responsive":true
				}
				,
				{
				"title":"Posizione fiscale",
				"link":"tpl_responsive_posizione_fiscale.php",
				"responsive": true
				}
			]
			},
			{
			"title":"Situazioni ordini",
			"link":"tpl_responsive_investimenti_situazione_ordini.php",
			"responsive":true
			},
			{
			"title":"Estratto conto e contabili	[servizio attivo]",
			"link":"tpl_priv_contabili.php",
			"responsive":true
			},
			{
			"title":"Attivazioni",
			"responsive":true,
			"voices":[
				{
				"title":"Deposito titoli",
				"link":"tpl_responsive_investimenti_deposito_titoli.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Modulistica",
			"link":"tpl_responsive_moduli_operativi.php",
			"responsive":true,
			"voices":[
				
				{
				"title":"Moduli operativi",
				"link":"tpl_responsive_moduli_operativi.php",
				"responsive":true
				},
				
				{
				"title":"Documenti informativi",
				"link":"tpl_responsive_documenti_informativi.php",
				"responsive":true
				}

			]
			},
			{
			"title":"Trasferimento fondi",
			"link":"../template_old/tpl_priv_inv_trasferimento_fondi.php",
			"responsive":false
			}
		]
		},
		{
		"title":"Gestione Deposito",
		"voices":[
			{
			"title":"Trasferimenti",
			"link":"tpl_responsive_trasferimento_singolo.php",
			"responsive":true,
			"voices": [
				{
				"title":"Singolo",
				"link":"tpl_responsive_trasferimento_singolo.php",
				"responsive":true
				},
				{
				"title":"Periodico",
				"link":"tpl_responsive_trasferimento_periodico.php",
				"responsive":true
				},
				{
				"title":"A soglia",
				"link":"tpl_responsive_trasferimento_soglia.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Linee vincolate",
			"link":"tpl_responsive_trasferimento_singolo.php",
			"responsive":true,
			"voices": [
				{
				"title":"Apertura nuova linea",
				"link":"tpl_responsive_apertura_nuova_linea.php",
				"responsive":true
				},
				{
				"title":"Linee attive",
				"link":"tpl_responsive_linee_attive.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Fondi e Sicav",
		"voices":[
			{
			"title":"Perch&egrave; investire in fondi",
			"link":"tpl_responsive_cosa_sono_fondi.php",
			"responsive":true
			},
			{
			"title":"Le case di gestione",
			"link":"tpl_responsive_nostra_offerta.php",
			"responsive":true,
			"voices":[
				{
				"title":"La nostra offerta",
				"link":"tpl_responsive_nostra_offerta.php",
				"responsive":true
				},
				{
				"title":"Tempi e costi",
				"link":"tpl_responsive_fes_tempi_costi.php",
				"responsive":true
				},
				{
				"title":"Glossario",
				"link":"tpl_priv_fes_glossario.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Soluzioni guidate",
			"link":"tpl_priv_fes_soluzioni_guidate.php",
			"responsive":true,
			"voices": [
				{
				"title":"Soluzioni Guidate overview",
				"link":"tpl_priv_fes_guidate_overview.php",
				"responsive":true
				},
				{
				"title":"Top Selection [iframe fornitore esterno]",
				"link":"",
				"responsive":false
				},
				{
				"title":"Portafogli modello [iframe fornitore esterno]",
				"link":"",
				"responsive":false
				}
			]
			},
			{
			"title":"Soluzioni self",
			"link":"tpl_priv_fes_self_overview.php",
			"responsive":true,
			"voices": [
				{
				"title":"Soluzioni Self overview",
				"link":"tpl_priv_fes_self_overview.php",
				"responsive":true
				},
				{
				"title":"Migliori e peggiori",
				"link":"",
				"responsive":true
				},
				{
				"title":"Ricerca e confronta",
				"link":"tpl_responsive_fes_faidate_ricerca.php",
				"responsive":true
				},
				{
				"title":"Watchlist",
				"link":"tpl_responsive_inv_watchlist.php",
				"responsive":true
				},
				{
				"title":"Alert",
				"link":"tpl_responsive_inv_alert.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Piani di accumulo (PAC)",
			"link":"tpl_priv_fes_pac_overview.php",
			"responsive":true,
			"voices": [
				{
				"title":"Overview",
				"link":"tpl_priv_fes_pac_overview.php",
				"responsive":true
				},
				{
				"title":"Simulatore PAC",
				"link":"tpl_priv_fes_pac_ricerca.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Fondi PIR",
			"link":"tpl_priv_fes_pir.php",
			"responsive":true,
			"voices": [
				{
				"title":"Investire in PIR con i fondi",
				"link":"tpl_priv_fes_pir.php",
				"responsive":true
				},
				{
				"title":"Domande frequenti",
				"link":"tpl_priv_fes_pir_domande.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Compravendita",
			"link":"",
			"responsive":true,
			"voices":[
				{
				"title":"Ricerca",
				"link":"tpl_responsive_inv_ricerca.php",
				"responsive":true
				},
				{
				"title":"Scheda fondo",
				"link":"tpl_responsive_inv_scheda_fondo.php",
				"responsive":true
				},
				{
				"title":"Acquisto",
				"link":"tpl_responsive_inv_acquisto.php",
				"responsive":true
				},
				{
				"title":"Vendita",
				"link":"tpl_responsive_inv_vendita.php",
				"responsive":true
				},
				{
				"title":"Switch",
				"link":"tpl_responsive_inv_switch.php",
				"responsive":true
				},
				{
				"title":"Versamenti aggiuntivi Pac",
				"link":"tpl_responsive_inv_vers_agg_pac.php",
				"responsive":true
				},
				{
				"title":"Situazione ordini",
				"link":"tpl_responsive_stato_ordini.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Acquisto",
			"link":"../template_noresp/tpl_priv_investimenti_acquisto.php",
			"responsive":false,
			"porting": true
			},
			{
			"title":"Vendita",
			"link":"../template_noresp/tpl_priv_investimenti_vendita.php",
			"responsive":false,
			"porting": true
			},
			{
			"title":"Switch",
			"link":"../template_noresp/tpl_priv_investimenti_switch.php",
			"responsive":false,
			"porting": true
			},
			{
			"title":"Dettaglio",
			"link":"../template_noresp/tpl_priv_investimenti_dettaglio.php",
			"responsive":true
			},
			{
			"title":"Ricerca e confronta",
			"link":"../template_noresp/tpl_priv_fes_faidate_ricerca.php",
			"responsive":false,
			"porting": true
			},
			{
			"title":"Scheda fondo",
			"link":"../template_noresp/tpl_priv_fes_faidate_ricerca.php&fondo=9812938",
			"responsive":false,
			"porting": true
			},
			{
			"title":"Situazione ordini",
			"link":"../template_noresp/tpl_priv_fes_situazione_ordini.php",
			"responsive":false,
			"porting": true
			}
		]
		},
		{
		"title":"Collocamenti",
		"voices":[
			{
			"title":"Obbligazioni",
			"link":"../template_old/tpl_priv_inv_aste.php",
			"responsive":false,
			"voices":[
				{
				"title":"Aste titoli di Stato",
				"link":"../template_old/tpl_priv_inv_aste.php",
				"responsive":false
				},
				{
				"title":"Aste titoli di Stato",
				"link":"tpl_responsive_inv_aste.php",
				"responsive":true
				},
				{
				"title":"Prestiti obbligazionari",
				"link":"../template_old/tpl_priv_inv_presiti_obbligazionari.php",
				"responsive":false
				}
			]
			}
		]
		}
	]
	},
  <?php
    if ($bank=="bpm") {
  ?>
    {
	"title":"Risparmio Ben fatto",
	"link":"prova.php",
	"id":"nav_priv_wbx_ben_fatto",
	"responsive":false,
	"voices":[
	]
    },
  <?php
	}
  ?>
	{
	"title":"Finanziamenti",
	"link":"tpl_priv_fp_finanz.php&amp;liv1=FI",
	"responsive":true,
	"id":"nav_priv_wbx_finanziamenti",
	<?php
	if ($bank=="bpm") {
	?>
	"voices":[
		{
		"title":"Mutui",
		"responsive":true,
		"link": "tpl_responsive_mutuo_webank.php",
		"voices":[
			{
			"title":"L'offerta",
			"responsive":true,
			"voices":[
				{
				"title":"Il mutuo che fa per te",
				"link":"tpl_responsive_il_mutuo_che_fa_per_te.php",
				"responsive":true
				},
				{
				"title":"Confronta i mutui",
				"link":"tpl_priv_mutui_preventivatore.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Prestiti",
		"responsive":true,
		"voices":[
			{
			"title":"Catalogo e preventivo",
			"link":"tpl_responsive_catalogo_preventivo_bpm.php",
			"responsive":true
			},
			{
			"title":"Guida e consulenza",
			"responsive":true,
			"voices":[
				{
				"title":"Abc dei prestiti",
				"link":"tpl_responsive_abc_dei_prestiti_bpm.php",
				"responsive":true
				},
				{
				"title":"Autovalutazione",
				"link":"tpl_responsive_autovalutazione_bpm.php",
				"responsive":true
				},
				{
				"title":"Consigli dell'esperto",
				"link":"tpl_responsive_consigli_esperto_bpm.php",
				"responsive":true
				},
				{
				"title":"Servizi aggiuntivi facoltativi",
				"link":"tpl_responsive_servizi_aggiuntivi_facoltativi_bpm.php",
				"responsive":true
				}
			]
			}
		]
		}
	]

	<?php
	}else{
	?>
	"voices":[
		{
		"title":"Mutui",
		"responsive":true,
		"link": "tpl_responsive_mutuo_webank.php",
		"voices":[
			{
			"title":"Offerta",
			"responsive":true,
			"voices":[
				{
				"title":"Mutuo Webank",
				"link":"tpl_responsive_mutuo_webank.php",
				"responsive":true
				},
				/*{
				"title":"Assicurazioni sul mutuo",
				"link":"tpl_responsive_assicurazioni_mutuo.php",
				"responsive":true
				},*/
				{
				"title":"Documenti sulla trasparenza",
				"link":"tpl_responsive_documenti_trasparenza_mutuo.php",
				"responsive":true
				},
			]
			},
			{
			"title":"Preventivo e richiesta",
			"responsive":true,
			"voices":[
				{
				"title":"Fai il preventivo",
				"link":"tpl_responsive_calcolatore_mutui.php",
				"responsive":true
				},
				{
				"title":"Documenti sulla trasparenza",
				"link":"tpl_responsive_documenti_sulla_trasparenza.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Prestiti",
		"voices":[
			{
			"title":"Catalogo e simulazione",
			"voices":[
				{
				"title":"Il prestito che fa per te",
				"link":"tpl_responsive_prestito_che_fa_per_te.php",
				"responsive":true
				},
				{
				"title":"Stato pratica",
				"link":"tpl_responsive_finanziamenti_stato_pratica.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Autovalutazione",
			"link":"tpl_responsive_autovalutazione.php",
			"responsive":true
			},
			{
			"title":"Guida ai prestiti",
			"voices":[
				{
				"title":"Abc dei prestiti",
				"link":"tpl_responsive_abc_dei_prestiti.php",
				"responsive":true
				},
				{
				"title":"Requisiti per i prestiti",
				"link":"tpl_responsive_requisiti_per_i_prestiti.php",
				"responsive":true
				},
				/*{
				"title":"Come richiedere il prestito",
				"link":"tpl_responsive_come_richiedere_il_prestito.php",
				"responsive":true
				},
				{
				"title":"Faq",
				"link":"tpl_responsive_faq_mutui.php",
				"responsive":true
				},*/
				{
				"title":"Glossario",
				"link":"tpl_responsive_glossario_finanziamenti.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Fidi",
		"voices":[
			{
			"title":"Informazioni",
			"link":"",
			"responsive":false,
			"voices":[
				{
				"title":"Il tuo fido",
				"link":"tpl_responsive_il_tuo_fido.php",
				"responsive":true
				},
				{
				"title":"Come funziona",
				"link":"tpl_responsive_come_funziona_fido.php",
				"responsive":true
				},
				{
				"title":"Come richiedere il fido",
				"link":"tpl_responsive_come_richiedere_fido.php",
				"responsive":true
				},
				{
				"title":"Condizioni",
				"link":"tpl_responsive_condizioni_fido.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Richiedi fido",
			"link":"tpl_responsive_richiedi_fido.php",
			"responsive":true
			}
		]
		}
	]
	<?php
	}
	?>
	},
	{
	"title":"Assicurazioni",
	"link":"tpl_priv_fp_assic.php",
	"responsive":true,
	"id":"nav_priv_wbx_assicurazioniWB",
	"voices":[
		{
		"title":"Auto e moto",
		"voices":[
			{
			"title":"Polizza auto Zurich Connect",
			"link":"",
			"responsive":true,
			"voices":[
				{
				"title":"Dettagli polizza",
				"link":"tpl_responsive_dettagli_polizza.php",
				"responsive":true
				},
				{
				"title":"Preventivo online",
				"link":"tpl_responsive_richiesta_preventivo_online.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Polizza moto Zurich Connect",
			"link":"",
			"responsive":true,
			"voices":[
				{
				"title":"Dettagli polizza",
				"link":"tpl_responsive_dettagli_polizza_moto.php",
				"responsive":true
				},
				{
				"title":"Preventivo online",
				"link":"tpl_responsive_richiesta_preventivo_online_moto.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Casa",
		"voices":[
			{
			"title":"Polizza casa Zurich Connect",
			"link":"",
			"responsive":false,
			"voices":[
				{
				"title":"Dettagli polizza",
				"link":"",
				"responsive":true
				},
				{
				"title":"Preventivo online",
				"link":"",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Viaggi e vacanze",
		"voices":[
			{
			"title":"Polizze viaggi Allianz Global Assistance",
			"link":"",
			"responsive":false,
			"voices":[
				{
				"title":"Dettagli polizza",
				"link":"",
				"responsive":true
				},
				{
				"title":"Promozione in corso",
				"link":"",
				"responsive":true
				},
				{
				"title":"Preventivo online",
				"link":"",
				"responsive":true
				}
			]
			}
		]
		},
	<?php if ($bank=="bpm") { ?>
		{
		"title":"Scheda Prodotto",
		"voices":[
			{
			"title":"Template scheda prodotto",
			"link":"tpl_responsive_scheda_prodotto_bpm.php",
			"responsive":true
			},
			{
			"title":"Mutuo con spread",
			"link":"tpl_responsive_scheda_prodotto_spread_bpm.php",
			"responsive":true
			},
			{
			"title":"Mutuo chibencomincia",
			"link":"tpl_responsive_scheda_prodotto_mutuo_chi_ben_comincia_bpm.php",
			"responsive":true
			},
		]
		},	
		{
		"title":"Societ\u00e0 Partner",
		"voices":[
			{
			"title":"Bipiemme Assicurazioni",
			"link":"tpl_responsive_scheda_prodotto_bpm_2.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Veicoli",
		"voices":[
			{
			"title":"Scadenza Polizze",
			"link":"tpl_responsive_scheda_prodotto_bpm_3.php",
			"responsive":true
			}
		]
		},
<?php } ?>
<?php if ($bank=="webank") { ?>
		{
		"title":"Vita e salute",
		"voices":[
			{
			"title":"Wecare Vita+",
			"link":"tpl_responsive_wecare_vita_dettagli_polizza.php",
			"responsive": true,
			"voices":[
				{
				"title":"Dettagli polizza",
				"link":"tpl_responsive_wecare_vita_dettagli_polizza.php",
				"responsive":true
				},
				{
				"title":"Preventivo e acquisto online",
				"link":"tpl_responsive_wecare_vita_preventivatore.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Wecare Protezione",
			"link":"",
			"responsive":true,
			"voices":[
				{
				"title":"Dettagli polizza",
				"link":"tpl_responsive_dettagli_polizza.php",
				"responsive":true
				},
				{
				"title":"Preventivo e acquisto online",
				"link":"tpl_responsive_preventivo_acquisto_online.php",
				"responsive":true
				}
			]
			},
			{
			"title":"Wecare Salute",
			"link":"",
			"responsive":false,
			"voices":[
				{
				"title":"Dettagli polizza",
				"link":"",
				"responsive":true
				},
				{
				"title":"Preventivo online",
				"link":"",
				"responsive":true
				}
			]
			}
		]
		}
<?php } ?>
	]
	},
	{
	"title":"Pagine non alberate",
	"hidden":true,
	"voices":[
		{
		"title":"Concorso derby Milan - Inter",
		"link":"",
		"responsive":true,
		"voices":[
			{
			"title":"Concorso derby Milan - Inter",
			"link":"tpl_responsive_concorso_derby_milan_inter.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Servizio clienti",
		"link":"tpl_priv_full_responsive_servizio_clienti.php",
		"responsive":true
		},
		{
		"title":"Pagina non abilitata",
		"link":"tpl_priv_nonabilitato.php",
		"responsive":true
		},
		{
		"title":"F24",
		"responsive":true,
		"voices" : [
			{
			"title":"Pagamento tributi F24/F23",
			"responsive":true,
			"voices": [
				{
				"title":"Guida all'F24",
				"link":"tpl_priv_f24_guida.php&responsive=y&liv0=7&liv1=2&liv2=0&liv3=0&fdeb=true",
				"responsive":true
				},
				{
				"title":"Pagamenti F24",
				"link":"tpl_priv_f24_iframe.php&responsive=y&liv0=7&liv1=2&liv2=0&liv3=1&fdeb=true",
				"responsive":true
				},
				{
				"title":"Guida all'F23",
				"link":"",
				"responsive":true
				},
				{
				"title":"Pagamenti F23",
				"link":"tpl_priv_f23_iframe.php&responsive=y&liv0=7&liv1=2&liv2=0&liv3=3&fdeb=true",
				"responsive":true
				},
				{
				"title":"Rubrica contribuenti",
				"link":"tpl_responsive_rubrica_contribuenti.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Contatti e numeri utili",
		"link":"tpl_priv_full_responsive_servizio_clienti.php",
		"responsive":true,
		"voices":[
			{
			"title":"Dialoga con Webank",
			"link":"tpl_responsive_dialoga_webank.php",
			"responsive":true
			},
			{
			"title":"In diretta con Webank",
			"link":"tpl_responsive_diretta_webank.php",
			"responsive":true
			},
			{
			"title":"Numeri utili",
			"link":"tpl_responsive_numeri utili.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Strumenti",
		"link":"tpl_responsive_strumenti.php",
		"responsive":true,
		"voices":[
			{
			"title":"Trova l'agenzia",
			"link":"tpl_responsive_trova_agenzia.php",
			"responsive":true
			},
			{
			"title":"Requisiti tecnici",
			"link":"tpl_responsive_requisiti_tecnici.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Tools standalone",
		"link":"",
		"responsive":true,
		"voices":[
			{
			"title":"Appuntamento in agenzia",
			"link":"tpl_responsive_appuntamento_in_agenzia.php",
			"responsive":true
			},
			{
			"title":"Scrivici",
			"link":"tpl_responsive_scrivici.php",
			"responsive":true
			},
			{
			"title":"Reclami",
			"link":"tpl_responsive_reclami.php",
			"responsive":true
			},
			{
			"title":"<?php print(($bank =="webank")? "Webank" : "Help Center"); ?> ti richiama",
			"link":"tpl_responsive_richiama.php",
			"responsive":true
			}
		]
		}
	]
	},
	{
	"title":"Footer",
	"hidden":true,
	"voices":[
		{
		"title":"Qui informazioni sulla Trasparenza",
		"voices":[
			{
			"title":"Webank e la trasparenza",
			"link":"tpl_responsive_webank_trasparenza.php",
			"responsive":true
			},
			{
			"title":"Informativa contrattuale",
			"link":"tpl_responsive_informativa_contrattuale.php",
			"responsive":true
			},
			{
			"title":"Rilevazione tassi effettivi",
			"link":"tpl_responsive_rilevazione_tassi_effettivi.php",
			"responsive":true
			},
			{
			"title":"Indicatore sintetico di costo",
			"link":"tpl_responsive_indicatore_sintetico_costo.php",
			"responsive":true
			},
			{
			"title":"Aggiornamento PSD",
			"link":"tpl_responsive_aggiornamento_psd.php",
			"responsive":true
			},
			{
			"title":"Guide Pratiche",
			"link":"tpl_responsive_guide_pratiche.php",
			"responsive":true
			},
			{
			"title":"Reclami, ricorsi e conciliazione",
			"link":"tpl_responsive_reclami_ricorsi_conciliazione.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Eventi e corsi",
		"link":"tpl_responsive_eventi.php",
		"responsive":true,
		"voices":[
			{
			"title":"Eventi",
			"link":"tpl_responsive_eventi.php",
			"responsive":true
			},
			{
			"title":"My Trade Upgrade",
			"link":"",
			"responsive":true,
			"voices":[
				{
				"title":"Tour",
				"link":"",
				"responsive":true,
				"voices":[
					{
					"title":"In programma",
					"link":"tpl_responsive_iscrizione_eventi.php",
					"responsive":true
					},
					{
					"title":"Archivio",
					"link":"tpl_responsive_archivio_eventi.php",
					"responsive":true
					}
				]
				},
				{
				"title":"T3 Focus",
				"link":"",
				"responsive":true,
				"voices":[
					{
					"title":"In programma",
					"link":"tpl_responsive_iscrizione_eventi.php",
					"responsive":true
					},
					{
					"title":"Archivio",
					"link":"tpl_responsive_archivio_eventi.php",
					"responsive":true
					}
				]
				}
			]
			},
			{
			"title":"Investor Academy",
			"link":"",
			"responsive":true,
			"voices":[
				{
				"title":"Voce 1",
				"link":"",
				"responsive":true,
				"voices":[
					{
					"title":"In programma",
					"link":"tpl_responsive_iscrizione_eventi.php",
					"responsive":true
					},
					{
					"title":"Archivio",
					"link":"tpl_responsive_archivio_eventi.php",
					"responsive":true
					}
				]
				},
				{
				"title":"Voce 2",
				"link":"",
				"responsive":true,
				"voices":[
					{
					"title":"In programma",
					"link":"tpl_responsive_iscrizione_eventi.php",
					"responsive":true
					},
					{
					"title":"Archivio",
					"link":"tpl_responsive_archivio_eventi.php",
					"responsive":true
					}
				]
				}
			]
			},
			{
			"title":"Special events",
			"voices":[
				{
				"title":"Voce 1",
				"link":"",
				"responsive":true,
				"voices":[
					{
					"title":"In programma",
					"link":"tpl_responsive_iscrizione_eventi.php",
					"responsive":true
					},
					{
					"title":"Archivio",
					"link":"tpl_responsive_archivio_eventi.php",
					"responsive":true
					}
				]
				},
				{
				"title":"Voce 2",
				"link":"",
				"responsive":true,
				"voices":[
					{
					"title":"In programma",
					"link":"tpl_responsive_iscrizione_eventi.php",
					"responsive":true
					},
					{
					"title":"Archivio",
					"link":"tpl_responsive_archivio_eventi.php",
					"responsive":true
					}
				]
				},
				{
				"title":"Archivio",
				"link":"tpl_responsive_special_events_archivio.php",
				"responsive":true
				}
			]
			}
		]
		},
		{
		"title":"Fogli informativi",
		"link":"tpl_responsive_fogli_informativi.php",
		"responsive":true
		},
		{
		"title":"Privacy",
		"voices":[
			{
			"title":"Privacy policy",
			"link":"tpl_responsive_privacy.php",
			"responsive":true
			},
			{
			"title":"Informativa e consensi",
			"link":"tpl_responsive_informativa_consensi.php",
			"responsive":true
			},
			{
			"title":"Codice deontologico",
			"link":"tpl_responsive_codice_deontologico.php",
			"responsive":true
			}
		]
		},
		{
		"title":"Reclami",
		"link":"tpl_responsive_reclami.php",
		"responsive":true
		},
		{
		"title":"Solidariet&agrave;",
		"link":"tpl_responsive_bonifico.php",
		"responsive":true
		},
		{
		"title":"Dati societari",
		"link":"tpl_responsive_dati_societari.php",
		"responsive":true
		},
	]
	}
]