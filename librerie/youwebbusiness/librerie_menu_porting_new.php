[
	{
		"title": "Home"
	},
	{
		"title": "Configura",
		"voices": [
			{
				"title": "Schedulatore",
				"status": "inlav",
				"voices": [
					{
						"title": "Configura"
					},
					{
						"title": "Riaccoda Dati"
					},
					{
						"title": "Sospendi/Riavvia"
					},
					{
						"title": "Associa Utente"
					},
					{
						"title": "Installa/Aggiorna"
					}
				]
			},
			{
				"title": "Anagrafiche",
				"voices": [
					{
						"title": "Importa Anagrafiche",
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
				"title": "Profilatura Utenti",
				"voices": [
					{
						"title": "Gestione Gruppi",
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
			},
			{
				"title": "Configura doc online container",
				"voices": [
					{
						"title": "Configurazione documenti online",
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
					}
				]
			}
		]
	},
	{
		"title": "Notifiche/Alert",
		"voices": [
			{
				"title": "Documenti online",
				"voices": [
					{
						"title": "In Arrivo",
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
						"title": "In Arrivo"
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
					},
					{
						"title": "Archivio storico"
					}					
				]
			}
		]
	},
	{
		"title": "Main menu1",
		"voices": [
			{
				"title": "Conti",
				"voices": [
					{
						"title": "Saldo e movimenti C/c",
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
				"title": "Dati e disposizioni",
				"voices": [
					{
						"title": "Elenco Disposizioni",
						"tpl": "",
						"voices": [
							{
								"title": "Ultime disposizioni",
								"tpl": "09.UltimeDispos/01index.php",
								"cantiere" : "tm"
							},
							{
								"title": "Elenco Distinte",
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
								"title": "Gestione Distinte (Anticipo Fatture on line)"
							},
							{
								"title": "Riepilogo F23"
							}
						]
					},
					{
						"title": "Esiti Disposizioni",
						"tpl": "",
						"voices": [
							{
								"title": "Esiti Pagamenti",
								"tpl": "",
								"voices": [
									{
										"title": "Esiti Bonifici - Assegni",
										"tpl": "15.EsitiPagamenti/02.Bonifici.php",
										"cantiere": "a1",
										"voices": [
											{
												"title": "Esiti Bonifici KO",
												"tpl": "15.EsitiPagamenti/02-01.Bonifici_risultato_KO.php",
												"cantiere": "a1"
											}
										]
									},
									{
										"title": "Esiti Stipendi",
										"tpl": "15.EsitiPagamenti/03.Stipendi_Italia.php",
										"cantiere": "a1",
										"voices": [
											{
												"title": "Stipendi Italia KO",
												"tpl": "15.EsitiPagamenti/03-01.Stipendi_Italia_risultato_KO.php",
												"cantiere": "a1"
											}
										]
									},
									{
										"title": "Esiti Deleghe F24",
										"tpl": "15.EsitiPagamenti/04.Deleghe_F24.php",
										"cantiere": "vr2",
										"voices": [
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
										]
									},
									{
										"title": "Esisti pagamenti (Bonifici SEPA,Stipendi SEPA, Bonifici Estero,Ritiro Effetti,Bollettino Bancario)",
										"tpl": "15.EsitiPagamenti/esiti_pagamenti.php",
										"cantiere": "tm"
									}
								]
							},
							{
								"title": "Esiti Incassi",
								"voices": [
									{
										"title": "Esiti Ri.Ba - R.I.D - M.Av"
									},
									{
										"title": "Esiti Incassi Direct Debit",
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
										"title": "Esiti Incassi Bollettino Bancario",
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
									},
									{
										"title": "Esiti Allineamento SEDA",
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
										"title": "Esiti Allineamento Archivi IBAN",
										"tpl": "13.EsitiIncassi/07.IBAN.php",
										"cantiere": "a1",
										"voices": [
											{
												"title": "Risultato ricerca KO",
												"tpl": "13.EsitiIncassi/07.IBAN_risultato_KO.php",
												"cantiere": "a1"
											}
										]
									},
									{
										"title": "Esiti al Benficiario",
										"tpl": "13.EsitiIncassi/08.Beneficiari.php",
										"cantiere": "a2",
										"voices": [
											{
												"title": "Risultato ricerca KO",
												"tpl": "13.EsitiIncassi/08.Beneficiari_risultato_KO.php",
												"cantiere": "a2"
											}
										]
									}
									
								]
							}
						]
					
					},
					{
						"title": "Creazione Distinte",
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
						"title": "Autorizza Distinte",
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
										"title": "Importa Allineamento Archivi",
										"tpl": "datiedisposizioni/importa_allineamento_archivi.php",
										"cantiere" : "vr2"
									},
									{
										"title": "Importa Allineamento IBAN",
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
										"title": "Importa Incassi Estero",
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
										"title": "Importa Strutture Libere",
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
								"title": "Importa/Assegna Conto",
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
								"title": "Log Importazioni",
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
								"title": "Estrai Dati Informativi",
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
									},
									{
										"title": "Estrazione esiti allineamento archivi IBAN"
									}
								]
							},
							{
								"title": "Estrai Disposizioni",
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
					
					},
					{
						"title": "Strutture Libere"
					},
					{
						"title": "Monitoraggio Flussi CBI"
					}
				]
			},
			{
				"title": "Pagamenti",
				"voices": [
					{
						"title": "Bonifici container",
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
								"title": "Bonifici Estero",
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
						"title": "Stipendi"
					},
					{
						"title": "MT101"
					},
					{
						"title": "Pagamento riba parent",
						"voices": [
							{
								"title": "Pagamento Riba"
							},
							{
								"title": "Pagamento Riba Manuale"
							}
						]
					},
					{
						"title": "Deleghe F24 e F23",
						"voices": [
							{
								"title": "Deleghe F24"
							},
							{
								"title": "F24 Elementi Identificativi"
							},
							{
								"title": "Modulo F23",
								"cantiere": "sdkext",
								"voices": [
									{
										"title": "pagina di login",
										"tpl": "01.f23/intro_moduloF23.php",
										"cantiere": "sdkext"
									},
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
							}
						]
					},
					{
						"title": "CBILL"
					},
					{
						"title": "Richiedi assegni",
						"voices": [
							{
								"title": "Richiedi Assegni Circolari"
							},
							{
								"title": "Richiedi Assegni di Quietanza",
								"tpl": "05.RichiediAssegni/richiedi_assegni_quietanza.php",
								"cantiere": "vr2"
							}
						]
					},
					{
						"title": "Bollettini",
						"voices": [
							{
								"title": "Bollettini Bancari"
							},
							{
								"title": "Mav/Rav"
							},
							{
								"title": "Utenze"
							}
						]
					},
					{
						"title": "Bollo Auto"
					}
				]
			},
			{
				"title": "Incassi",
				"voices": [
					{
						"title": "Riba",
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
						"title": "Mav"
					},
					{
						"title": "Sdd"
					},
					{
						"title": "Rid"
					},
					{
						"title": "Varia Coordinate Rid"
					},
					{
						"title": "Seda",
						"voices": [
							{
								"title": "Allineamento",
								"tpl": "06.RichiestaDett.Seda/02.allineamento_seda.php",
								"cantiere": "a2"
							},
							{
								"title": "Rendiconto",
								"tpl": "06.RichiestaDett.Seda/03.rendiconto_seda.php",
								"cantiere": "a2"
							},
							{
								"title": "Richiesta Dettaglio Rendiconto",
								"tpl": "06.RichiestaDett.Seda/01.richiesta_dettaglio_rendiconto_seda.php",				
								"cantiere": "a2"
							}
						]
					},
					{
						"title": "Allineamento Rid"
					},
					{
						"title": "Allineamento Iban"
					}
				]
			},
			{
				"title": "Documenti e fatture",
				"voices": [
					{
						"title": "Documenti e Quietanze F24",
						"voices": [
							{
								"title": "Quietanze F24",
								"tpl": "11.QuietanzeF24/01.QuietanzaF24.php",
								"cantiere": "vr2",
								"voices": [
									{
										"title": "In Arrivo",
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
										"title": "In Arrivo"
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
									},
									{
									"title": "Archivio Storico"
									}
								]
							},
							{
								"title": "Documenti online"
							}
						]
					},
					{
						"title": "Contratti e Proposte",
						"tpl": "14.Contratti/01.index.php",
						"cantiere" : "p1"
					},
					{
						"title": "Modulistica",
						"tpl": "08.ModulisticaCBI/01index.php",
						"cantiere" : "p1"
					},
					{
						"title": "Fatture YouWeb Biz"
					},
					{
						"title": "Confidi"
					},
					{
						"title": "LaWeb"
					},
					{
						"title": "You Invoice",
						"voices": [
							{
								"title": "You Invoice Accesso",
								"tpl": "07.FatturazioneElettronica/01.accesso.php",
								"cantiere" : "sdk"
							},
							{
								"title": "You Invoice Attivazione",
								"tpl": "07.FatturazioneElettronica/01.accesso.php",
								"cantiere" : "sdk",
								"voices": [
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
							}
						]
					}
				]
			},
			{
				"title": "Carte Business",
				"voices": [
					{
						"title": "Gestione Carte",
						"tpl": "02.GestioneCarte/tpl_gestione_carte.php",
						"cantiere": "tm"	
					},
					{
						"title": "Gestione Intestatari"
					},
					{
						"title": "Gestione Posizione"
					},
					{
						"title": "Apertura Posizione"
					}
				]
			},
			{
				"title": "Estero",
				"voices": [
					{
						"title": "Euroincassi"
					},
					{
						"title": "Elcos/Ribes"
					},
					{
						"title": "You Trade"
					},
					{
						"title": "YouWorld/YouLounge",
						"tpl": "03.YouWorld/index.php",
						"cantiere": "sdkext",
						"voices": [
							{
								"title": "YouWorld",
								"tpl": "03.YouWorld/youworld.php",
								"cantiere": "tm"	
							},
							{
								"title": "YouLounge"
							}
						]
					}
				]
			},
			{
				"title": "Finanziamenti",
				"voices": [
					{
						"title": "Finanziamenti rateali"
					},
					{
						"title": "Anticipo Fatture Italia",
						"voices": [
							{
								"title": "Richiedi Anticipo"
							},
							{
								"title": "Esiti Richieste"
							}
						]
					}
				]
			}
			
		]
	}
] 