[
	
	{
		"title": "Home"
	},
	{
		"title": "Configura",
		"voices": [
			{
				"title": "Anagrafiche",
				"voices": [
					{
						"title" :"Importa anagrafiche",
						"tpl": "configura/anagrafiche_importa.php",
						"cantiere": "vr2",
						"voices": [
							{
								"title" :"Importa tracciato",
								"tpl": "configura/anagrafiche_importa_tracciato.php",
								"cantiere": "vr2"
							},
							{
								"title" :"Esito importazione",
								"tpl": "configura/anagrafiche_importa_risultato.php",
								"cantiere": "vr2"
							}
						]
					}
				
				]
			},
			{
				"title": "Configura doc online container",
				"tpl": "configura/doc_online_container.php",
				"cantiere": "tm",
				"voices": [
							{
								"title" :"Visualizza",
								"tpl": "configura/doc_online_container_visualizza.php",
								"cantiere": "vr2"
							},
							{
								"title" :"Elenco",
								"tpl": "configura/doc_online_container_elenco.php",
								"cantiere": "vr2"
							},
							{
								"title" :"Conferma",
								"tpl": "configura/doc_online_container_conferma.php",
								"cantiere": "vr2"
							}
						]	
			},
			{
				"title":"Profilatura utenti",
				"voices": [
					{
						"title":"Gestione Gruppi",
						"tpl":"configura/gestione_gruppi.php",
						"cantiere": "p1",
						"voices": [
							{
								"title":"Elimina gruppo",
								"tpl": "configura/gestione_gruppi_overlay.php",
								"cantiere": "p1"
							},
							{
								"title":"Aggiungi gruppo",
								"tpl": "configura/gestione_gruppi_aggiungi.php",
								"cantiere": "p1"
							},
							{
								"title":"Dettagli gruppo",
								"tpl": "configura/gestione_gruppi_dettaglio.php",
								"cantiere": "p1"
							}
						

						]
					}	
					
				]
			}
		]
	},
	{
		"title": "Conti",
		"voices": [
			{
				"title": "Saldo e movimenti CC",
				"voices": [
					{
						"title":"Estratto conto periodico",
						"tpl": "conti/estratto_conto.php",
						"cantiere": "a1",
						"voices": [
							{
								"title":"Elenco",
								"tpl": "conti/estratto_conto_elenco.php",
								"cantiere": "a1"
							},
							{
								"title":"Dettaglio",
								"tpl": "conti/estratto_conto_dettagli.php",
								"cantiere": "a1"
							},
							{
								"title":"Dettaglio con overlay",
								"tpl": "conti/estratto_conto_dettagli_overlay.php",
								"cantiere": "a1"
							}
						]
					}
				]
			},
			{
				"title": "Conti anticipi",
				"tpl": "conti/conti_anticipi.php",
				"cantiere": "a1",
				"voices": [
					{
						"title": "Risultato ricerca",
						"tpl": "conti/conti_anticipi_risultato.php",
						"cantiere": "a1"
					}	
				]
			}
		]
	},
	{
		"title": "Pagamenti",
		"voices": [
			{
				"title":"Bonifici container",
				"voices": [
					{
						"title": "Bonifici SEPA",
						"tpl": "pagamenti/bonifici_sepa.php",
						"cantiere": "a2",
						"voices": [
							{
								"title": "Esito",
								"tpl": "pagamenti/bonifici_sepa_esito.php",
								"cantiere": "a2"
							}
						]
					},
					{
						"title": "Bonifico fiscale",
						"tpl": "pagamenti/bonifici_fiscale.php",
						"cantiere": "a2"
					},
					{
						"title": "Bonifico estero",
						"tpl": "pagamenti/bonifici_estero.php",
						"cantiere": "vr2",
						"voices": [
							{
								"title": "Esito",
								"tpl": "pagamenti/bonifici_estero_esito.php",
								"cantiere": "vr2"
							}
						]
					}
				
				]
			},
			{
				"title": "Deleghe F23/F24",
				"voices": [
					{
						"title": "Modulo F23 (pagina di login)",
						"tpl": "01.f23/intro_moduloF23.php",
						"cantiere": "sdkext",
						"voices": [
							{
								"title": "Step 1",
								"tpl": "01.f23/moduloF23.php",
								"cantiere": "sdkext"
							},
							{
								"title": "Riepilogo Step 1",
								"tpl": "01.f23/02-01.Riepilogo_F23.php",
								"cantiere": "sdkext"
							},
							{
								"title": "Riepilogo KO",
								"tpl": "01.f23/02-02.Riepilogo_F23_risultato_KO.php",
								"cantiere": "sdkext"
							},
							{
								"title": "Riepilogo OK",
								"tpl": "01.f23/02-03.Riepilogo_F23_risultato_OK.php",
								"cantiere": "sdkext"
							},
							{
								"title": "Riepilogo dettaglio",
								"tpl": "01.f23/02-04.Riepilogo_F23_risultato_dettaglio.php",
								"cantiere": "sdkext"
							}
						]
					},
					{
						"title": "Deleghe F24",
						"tpl": "pagamenti/delega_f24.php",
						"cantiere": "vr2"
					},
					{
						"title": "F24 Elementi identificativi",
						"tpl": "pagamenti/delega_f24_elementi.php",
						"cantiere": "vr2"
					}
				]
			},
			{
				"title": "CBILL",
				"tpl": "pagamenti/cbill.php",
				"cantiere": "p1"
			},
			{
				"title": "Bollettini",
				"voices": [
					{
						"title": "Bollettini Mav/Rav",
						"tpl": "pagamenti/bollettini_mav.php",
						"cantiere": "tm"
					}
				]
			},
			{
			"title": "Esiti pagamenti",
				"tpl": "15.EsitiPagamenti/01.index.php",
				"cantiere": "a2",
				"voices": [
					{
						"title": "Esiti Bonifici",
						"tpl": "15.EsitiPagamenti/02.Bonifici.php",
						"cantiere": "a1"
					},
					{
						"title": "Esiti Bonifici KO",
						"tpl": "15.EsitiPagamenti/02-01.Bonifici_risultato_KO.php",
						"cantiere": "a1"
					},
					{
						"title": "Stipendi Italia",
						"tpl": "15.EsitiPagamenti/03.Stipendi_Italia.php",
						"cantiere": "a1"
					},
					{
						"title": "Stipendi Italia ko",
						"tpl": "15.EsitiPagamenti/03-01.Stipendi_Italia_risultato_KO.php",
						"cantiere": "a1"
					},
					{
						"title": "Deleghe F24",
						"tpl": "15.EsitiPagamenti/04.Deleghe_F24.php",
						"cantiere": "vr2"
					},
					{
						"title": "Deleghe F24 ok",
						"tpl": "15.EsitiPagamenti/04-01.Deleghe_F24_risultato_OK.php",
						"cantiere": "vr2"
					},
					{
						"title": "Deleghe F24 Revoca",
						"tpl": "15.EsitiPagamenti/04-03.Deleghe_F24_revoca.php",
						"cantiere": "vr2"
					}

			
				]},
			{
				"title": "Richiedi assegni di quietanza",
				"tpl": "05.RichiediAssegni/richiedi_assegni_quietanza.php",
				"cantiere": "vr2"
			},
			{
				"title": "Esiti pagamenti",
				"tpl": "15.EsitiPagamenti/esiti_pagamenti.php",
				"cantiere": "tm"
			}
			
		]
	},
	{
		"title": "Incassi",
		"voices": [
			{
				"title": "RiBa",
				"tpl": "riba/tpl_riba_step01.php",
				"cantiere": "a2",
				"voices": [
					{
						"title": "RiBa conferma",
						"tpl": "riba/tpl_riba_step02.php",
						"cantiere": "a2"
					},
					{
						"title": "RiBa crea distinta",
						"tpl": "riba/tpl_riba_step03_distinta.php",
						"cantiere": "a2"
					},
					{
						"title": "RiBa crea distinta 02",
						"tpl": "riba/tpl_riba_step04_distinta.php",
						"cantiere": "a2"
					},
					{
						"title": "RiBa crea distinta 03",
						"tpl": "riba/tpl_riba_step05_distinta.php",
						"cantiere": "a2"
					},
					{
						"title": "RiBa crea distinta 04",
						"tpl": "riba/tpl_riba_step06_distinta.php",
						"cantiere": "a2"
					}
				]
			},
			
			{
				"title": "SEDA - Richiesta dettaglio rendiconto",
				"tpl": "06.RichiestaDett.Seda/01.richiesta_dettaglio_rendiconto_seda.php",				
				"cantiere": "a2"
			},
			{
				"title": "SEDA - Allineamento Seda",
				"tpl": "06.RichiestaDett.Seda/02.allineamento_seda.php",
				"cantiere": "a2"
			},
			{
				"title": "SEDA - Rendiconto",
				"tpl": "06.RichiestaDett.Seda/03.rendiconto_seda.php",
				"cantiere": "a2"
			},
			{
				"title": "Esiti incassi",
				"tpl": "13.EsitiIncassi/01.index.php",
				"cantiere": "vr2",
				"voices": [
					{
						"title": "Esiti RiBa",
						"tpl": "13.EsitiIncassi/02.Esiti_Riba.php",
						"cantiere": "a2",
						"voices": [
							{
								"title": "Esito RiBa ricerca",
								"tpl": "13.EsitiIncassi/02.Esiti_Riba_ricerca.php",
								"cantiere": "a2"
							}
						]
					},
					{
						"title": "Esiti SDD",
						"tpl": "13.EsitiIncassi/03.SDD.php",
						"cantiere": "a2",
						"voices": [
							{
								"title": "Risultato ricerca",
								"tpl": "13.EsitiIncassi/03-01.SDD_risultato_OK.php",
								"cantiere": "a2"
							},
							{
								"title": "Dettaglio",
								"tpl": "13.EsitiIncassi/03-02.SDD_dettaglio.php",
								"cantiere": "a2"
							}
						]
					},
					{
						"title": "Esiti SEDA",
						"tpl": "13.EsitiIncassi/06.Allineamento_SEDA.php",
						"cantiere": "a2",
						"voices": [
							{
								"title": "Risultato ricerca",
								"tpl": "13.EsitiIncassi/06-01.Allineamento_SEDA_risultato_OK.php",
								"cantiere": "a2"
							},
							{
								"title": "Dettaglio",
								"tpl": "13.EsitiIncassi/06-02.Allineamento_SEDA_dettaglio.php",
								"cantiere": "a2"
							}
						]
					},
					{
						"title": "Esiti incassi bollettino bancario",
						"tpl": "13.EsitiIncassi/04.Bollettini_Bancari.php",
						"cantiere": "a1",
						"voices": [
							{
								"title": "Risultato ricerca",
								"tpl": "13.EsitiIncassi/04-01.Bollettini_Bancari_risultato_KO.php",
								"cantiere": "a1"
							}
						]
					},
					{
						"title": "Esiti Allineamento Archivi",
						"tpl": "13.EsitiIncassi/05.Allineamento_RID.php",
						"cantiere": "a1",
						"voices": [
							{
								"title": "Risultato ricerca",
								"tpl": "13.EsitiIncassi/05.Allineamento_RID_risultato_KO.php",
								"cantiere": "a1"
							}
						]
					}
					
					
				]
			}
			
		]
	},
	{
		"title": "Estero",
		"voices": [
			{
				"title": "YouWorld/YouLounge",
				"tpl": "03.YouWorld/index.php",
				"cantiere": "sdkext",
				"voices": [
					{
						"title": "YouWorld",
						"tpl": "03.YouWorld/youworld.php",
						"cantiere": "tm"	
					}
				]
			}
		]
	},
	{
		"title": "Carte Business",
		"voices": [
			{
				"title": "Gestione carte",
				"tpl": "02.GestioneCarte/tpl_gestione_carte.php",
				"cantiere": "tm"	
			}
		]
	},
	{
		"title": "Documenti e fatture",
		"voices": [
			{
				"title": "Fatturazione elettronica",
				"tpl": "07.FatturazioneElettronica/01.accesso.php",
				"cantiere" : "sdk",
				"voices": [
					{
						"title": "Attivazione",
						"tpl": "07.FatturazioneElettronica/01.accesso.php",
						"cantiere" : "sdk"	
					},
					{
						"title": "Disclaimer",
						"tpl": "07.FatturazioneElettronica/02.disclaimer.php",
						"cantiere" : "sdk"	
					},
					{
						"title": "Esito",
						"tpl": "07.FatturazioneElettronica/03.esito.php",
						"cantiere" : "sdk"	
					}
					
				]
			},
			{
				"title": "Modulistica CBI",
				"tpl": "08.ModulisticaCBI/01index.php",
				"cantiere" : "p1"
			},
			{
				"title": "Contratti e proposte",
				"tpl": "14.Contratti/01.index.php",
				"cantiere" : "p1"
			},
			{
				"title": "Quietanze F24",
				"tpl": "11.QuietanzeF24/01.QuietanzaF24.php",
				"cantiere": "vr2",
				"voices": [
					{
					"title": "Risultato ricerca",
					"tpl": "11.QuietanzeF24/02.QuietanzaF24_risultato.php",
					"cantiere": "vr2"
					},
					{
					"title": "In arrivo",
					"tpl": "11.QuietanzeF24/QuietanzaF24_in_arrivo.php",
					"cantiere": "tm",
					"voices": [
							{
							"title": "In arrivo - risultato",
							"tpl": "11.QuietanzeF24/QuietanzaF24_in_arrivo_risultato.php",
							"cantiere": "tm"
						}
						]
					},
					{
					"title": "Archivio storico",
					"tpl": "11.QuietanzeF24/QuietanzaF24_archivio.php",
					"cantiere": "tm",
					"voices": [
							{
							"title": "Archivio storico - risultato",
							"tpl": "11.QuietanzeF24/QuietanzaF24_archivio_risultato.php",
							"cantiere": "tm"
						}
						]
					}
				]
			}
			
		]
	},
	{
		"title": "Finanziamenti"
	},
	{
		"title": "Dati e disposizioni",
		"voices": [
			{
				"title": "Ultime disposizioni",
				"tpl": "09.UltimeDispos/01index.php",
				"cantiere" : "tm"
			},
			{
				"title": "Elenco distinte",
				"tpl": "10.ElencoDistinte/01.Elenco_distinte.php",
				"cantiere": "a1",
				"voices": [
					{
						"title": "Dettaglio",
						"tpl": "10.ElencoDistinte/01.Elenco_distinte_dettaglio.php",
						"cantiere" : "a1"
					},
					{
						"title": "Risultato",
						"tpl": "10.ElencoDistinte/01.Elenco_distinte_risultato.php",
						"cantiere" : "a1"
					}
				]
			},
			{
				"title": "Creazione distinte",
				"tpl": "16.CreazioneDistinte/01.Creazione_Distinte.php",
				"cantiere":"a1",
				"voices": [
					{
						"title": "Dettaglio operazione",
						"tpl": "16.CreazioneDistinte/01-02.Creazione_Distinte_Bonifici.php",
						"cantiere" : "a1"
					},
					{
						"title": "Risultato",
						"tpl": "16.CreazioneDistinte/01-01.Creazione_Distinte_risultato_OK.php",
						"cantiere" : "a1"
					}
				]
			},
			{
				"title": "Autorizza distinte",
				"tpl": "datiedisposizioni/autorizza_distinte.php",
				"cantiere": "a1",
				"voices": [
					{
						"title": "Risultato",
						"tpl": "datiedisposizioni/autorizza_distinte_risultato.php",
						"cantiere": "a1"
					},
					{
						"title": "Sintetico",
						"tpl": "datiedisposizioni/autorizza_distinte_sintetico.php",
						"cantiere": "a1"
					},
					{
						"title": "Dettaglio",
						"tpl": "datiedisposizioni/autorizza_distinte_dettaglio.php",
						"cantiere": "a1"
					}
				]
			},
			{
				"title": "Importa distinte",
				"voices": [
					{
						"title": "Importa",
						"voices": [
							{
								"title": "Importa distinte",
								"tpl": "datiedisposizioni/importa_distinte.php",
								"cantiere" : "a1"
							},
							{
								"title": "Importa allineamento archivi",
								"tpl": "datiedisposizioni/importa_allineamento_archivi.php",
								"cantiere" : "vr2"
							},
							{
								"title": "Importa allineamento IBAN",
								"tpl": "datiedisposizioni/importa_allineamento_iban.php",
								"cantiere" : "vr2",
								"voices": [
									{
										"title": "Esito",
										"tpl": "datiedisposizioni/importa_allineamento_iban_esito.php",
										"cantiere" : "vr2"
									}
								]
							},
							{
								"title": "Importa incassi estero",
								"tpl": "datiedisposizioni/importa_incassi_estero.php",
								"cantiere" : "vr2",
								"voices": [
									{
										"title": "Esito",
										"tpl": "datiedisposizioni/importa_incassi_estero_esito.php",
										"cantiere" : "vr2"
									}
								]
							},
							{
								"title": "Importa strutture libere",
								"tpl": "datiedisposizioni/importa_strutture_libere.php",
								"cantiere" : "vr2",
								"voices": [
									{
										"title": "Esito",
										"tpl": "datiedisposizioni/importa_strutture_libere_esito.php",
										"cantiere" : "vr2"
									}
								]
								
							}
						]
					},
					{
						"title": "Importa/Assegna conto",
						"tpl": "datiedisposizioni/importa_assegna_conto.php",
						"cantiere": "a1",
						"voices": [
									{
										"title": "Importazione in corso",
										"tpl": "datiedisposizioni/importa_assegna_conto_importazione.php",
										"cantiere" : "a1"
									},
									{
										"title": "Esito",
										"tpl": "datiedisposizioni/importa_assegna_conto_esito.php",
										"cantiere" : "a1"
									}
								]
					},
					{
						"title": "Log importazioni",
						"tpl": "datiedisposizioni/importa_log_importazioni.php",
						"cantiere": "a1",
						"voices": [
							{
								"title": "Esito",
								"tpl": "datiedisposizioni/importa_log_importazioni_risultato.php",
								"cantiere" : "a1"
							}
						]
					}
				]
			},
			{
				"title": "Estrai dati",
				"voices": [
					{
						"title": "Estrai dati informativi",
						"voices": [
							{
								"title": "Informative",
								"tpl": "datiedisposizioni/estrazione_informative.php",
								"cantiere": "a2",
								"voices": [
									{
										"title": "Warning overlay",
										"tpl": "datiedisposizioni/estrazione_informative_warning.php",
										"cantiere": "a2"
									},
									{
										"title": "Risultato",
										"tpl": "datiedisposizioni/estrazione_informative_risultato.php",
										"cantiere": "a2"
									}
								]
							},

							{
								"title": "Estrazione esiti allineamento archivi",
								"tpl": "datiedisposizioni/estrazione_esiti_allineamento_archivi.php",
								"cantiere": "a1",
								"voices": [
									{
										"title": "Risultato",
										"tpl": "datiedisposizioni/estrazione_esiti_allineamento_archivi_risultato.php",
										"cantiere": "a1"
									}
								]
							}
						]
					},
					{
						"title": "Estrai disposizioni",
						"tpl": "datiedisposizioni/estrazione_disposizioni.php",
						"cantiere": "a2",
						"voices": [
							{
								"title": "Risultato",
								"tpl": "datiedisposizioni/estrazione_disposizioni_risultato.php",
								"cantiere": "a2"
							}
						]
					}
				]
			}

		]
	}
] 
