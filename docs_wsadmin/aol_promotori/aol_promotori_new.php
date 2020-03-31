<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">	
<head>
	<title>Webank - Apri conto Webank</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta http-equiv="Content-Language" content="it" />
	<meta name="author" content="We@service S.p.a" />
	<meta name="description" content="Webank - La banca online dal 1999" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="/img/favicon.ico" />
	<link rel="stylesheet" href="/css/aol_promotori_new.css"></link>
	<script src="/wscmn/js/jquery.js" type="text/javascript"></script>
	<script type="text/javascript" src="/js/aol_promotori_new.js"></script>
</head>
<body>
<div id="pagecontainer">
	<div id="header">
		<h1><a href="/webankpub/wb/home.do?tabId=nav_pub_wb_home_nw&amp;OBS_KEY=nav_pub_wb_home_nw"><span>Webank</span></a></h1>
	</div>
	<div id="menu">
		<h2><img src="/img/tt_aperturaconto_small.gif" alt="Richiesta apertura conto"></h2>
	</div>
	<div id="content">
		<div id="aolcontainer">
			<div id="aolleft">
				<form autocomplete="off" name="form">
					<div class="aolFormContent">
						<fieldset>
							<legend>Intestatari</legend>
							<div class="row-fluid spaceBottom">
								<div class="span6">
									<div class="row-fluid">
										<div class="span12 fieldBlock">
											<label>A quante persone vuoi intestare il conto?</label>
											<select id="num_intestatari">
												<option value="" selected="">solo a me</option>
												<option value="">a me ed a un'altra persona</option>
												<option value="">a me e ad altre due persone</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<!--codice promo -->
						<!--fine codice promo -->
						</fieldset>	
						<fieldset class="noPaddBott">
								<div class="expandable">
									<legend>
										<span class="expander">
											<a class="btn" onclick="switchExp(this)" href="javascript:;"></a>
											Hai un codice promozionale?
										</span>
									</legend>
									<div class="expandableCont">
										<div class="row-fluid">
											<div class="span4">
												<label>Codice convenzione</label>
												<input type="text">
											</div>
											<div class="span4">
												<label>Codice convenzione</label>
												<input type="text">
											</div>
											<div class="span4">
												<label>Codice convenzione</label>
												<input type="text">
											</div>
											</div>
									</div>
								</div>
						</fieldset>
						<div class="lineSeparator"></div>
						<div class="aolAcc expanded noPaddTop">			
								<div class="aolAccTop" style="display:none">
									<a class="aolAccTitle" id="intestatario1" onclick="switchExp(this,true);" href="javascript:;" title="Espandi">
										<span class="titoloAcc">Intestatario 1 - Lorem ipsum dolor sit amet</span>
										<span href="javascript:;" class="accButt" ></span>
										<span class="errortext"></span>
									</a>
								</div>
								<div class="aolAccContent">
									<fieldset>
										<legend>Dati anagrafici intestatario</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label class="withIco">Nome</label><a href="javascript:;" data-tooltip="Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
														<input type="text" id="nome_int1" value="" name="nome_int1" class="">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
											<div class="span6">
													<div class="row-fluid">
														<div class="span12 fieldBlock">
															<label class="withIco">Cognome</label><a href="javascript:;" data-tooltip="Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
															<input type="text" id="cognome_int1" value="" name="cognome_int1">
															<span class="errortext">Compila</span>
														</div>
													</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
												<div class="span6">
													<div class="row-fluid">
														<div class="span3 fieldBlock">
															<label>Sesso</label>
															<select id="sesso_int1"><option>--</option><option>F</option><option>M</option></select>
															<span class="errortext">Seleziona</span>
														</div>
														<div class="span9 fieldBlock" id="tuttaLaData">
															<label>Data di nascita</label>
															<div class="row-fluid">
																<div class="span3 fieldBlock">
																	<input type="text"id="gg_nascita_int1" maxlength="2" name="gg_nascita_int1" placeholder="gg">
																	<span class="errortext">Compila</span>
																</div>
																<div class="span1">
																	<span class="separator">/</span>
																</div>	
																<div class="span3 fieldBlock">
																	<input type="text" id="mm_nascita_int1" maxlength="2" name="mm_nascita_int1" placeholder="mm">
																	<span class="errortext">Compila</span>
																</div>
																<div class="span1">
																	<span class="separator">/</span>
																</div>	
																<div class="span4 fieldBlock">
																	<input type="text" id="aa_nascita_int1" maxlength="4" name="aa_nascita_int1"  placeholder="aaaa">
																	<span class="errortext">Compila</span>
																</div>
															</div>
															<span class="errortext"></span>
														</div>
													</div>
												</div>
												<div class="span6">
													<div class="row-fluid">
														<div class="span12 fieldBlock">
															<label>Codice fiscale</label>
															<input type="text" maxlength="16" id="codicefiscale_int1" value=""/>
															<script type="text/javascript" defer="defer">setCounterOnField("codicefiscale_int1",16);</script>
															<span class="errortext">Compila</span>
														</div>
													</div>
												</div>
										</div>
										<div class="row-fluid spaceBottom">
												<div class="span6 fieldBlock">
													<label>E mail</label>
													<input type="text">
													<span class="errortext">Seleziona</span>
												</div>
												<div class="span6">
													<div class="row-fluid">
														<div class="span6 fieldBlock">
															<label>Numero di cellulare</label>
															<input type="text">
															<span class="errortext">Compila</span>
														</div>
														<div class="span6 fieldBlock">
															<label>Operatore</label>
															<select name="" id="">
																<option value="">Seleziona</option>
																<option value="Wind">Wind</option>
																<option value="">lorem ipsum</option>
																<option value=""></option>
																<option value=""></option>
																<option value=""></option>
																<option value="ALTRO">Altro...</option>
															</select>
															<span class="errortext">Seleziona</span>
														</div>
													</div>
												</div>
										</div>
									
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>
										<legend>Informazioni personali</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<label>Provincia di nascita</label>
												<div class="row-fluid">
													<div class="span7 fieldBlock">
														<input type="text" id="provincia_nascita_int1">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock ">
														<label>Comune di nascita</label>
														<input type="text" id="comune_nascita_int1">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label>Stato di nascita</label>
														<select name="stato_nascita_int1" value="" id="stato_nascita_int1">
															<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
														</select>
														<span class="errortext">Seleziona</span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label>Cittadinanza</label>
														<select name="cittadinanza_int1" value="" id="cittadinanza_int1">
															<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
														</select>
														<span class="errortext">Seleziona</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<label>Ttitolo di studio</label>
												<select>
													<option value="" selected="">--seleziona--</option>
													<option value="2">lorem</option>
													<option value="3"></option>
												</select>
											</div>
											<div class="span6">
												<label>Abitazione</label>
												<select>
													<option value="" selected="">--seleziona--</option>
													<option value="2">lorem</option>
													<option value="3"></option>
												</select>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>
										<legend>Documento d'identit&agrave;</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span6 fieldBlock">
														<label>Tipo di documento</label>
														<select id="tipo_doc_int1">
															<option selected="" value="1">Carta d'identità</option>
															<option value="2">Patente</option>
															<option value="3">Passaporto</option>
														</select>
														<span class="errortext">Scegli</span>
													</div>
													<div class="span6 fieldBlock">
														<label>Numero</label>
														<input type="text" id="numero_doc_int1">
														<span id="" class=""></span>
														<span class="errortext">Scegli</span>
													</div>
												</div>
											</div>
											<div class="span6 fieldBlock">
												<label>Stato di rilascio</label>
												<select><option>seleziona</option></select>
												<span class="errortext">Scegli</span>
											</div>
										</div>
							
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span6 fieldBlock">
														<label>Provincia di rilascio</label>
														<input type="text">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
											<div class="span6 fieldBlock">
												<label>Comune di rilascio</label>
												<input type="text">
												<span class="errortext">Compila</span>
											</div>
										</div>
							
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div  class="span6 fieldBlock" id="divDataEmissione1">
													<label>Data di rilascio</label>
														<div class="row-fluid">
															<div class="span3 fieldBlock">
																<input type="text" id="gg_emissione_int1" maxlength="2" name="gg_emissione_int1" placeholder="gg">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span3 fieldBlock">
																<input type="text" id="mm_emissione_int1" maxlength="2" name="mm_emissione_int1" placeholder="mm">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span4 fieldBlock">
																<input type="text" id="aa_emissione_int1" maxlength="4" name="aa_emissione_int1" placeholder="aaaa">
																<span class="errortext">Compila</span>
															</div>
														</div>
														<span class="errortext"></span>
												</div>
											</div>
											<div class="span6">
												<div  class="span6 fieldBlock" id="divDataScadenza1">
													<label>Data di scadenza</label>
														<div class="row-fluid">
															<div class="span3 fieldBlock">
																<input type="text" id="gg_scadenza_int1" maxlength="2" name="gg_scadenza_int1" placeholder="gg">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span3 fieldBlock">
																<input type="text" id="mm_scadenza_int1" maxlength="2" name="mm_scadenza_int1" placeholder="mm">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span4 fieldBlock">
																<input type="text" id="aa_scadenza_int1" maxlength="4" name="aa_scadenza_int1" placeholder="aaaa">
																<span class="errortext">Compila</span>
															</div>
														</div>
														<span class="errortext"></span>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>
										<legend>Indirizzo</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<label>Indirizzo di residenza</label>
												<div class="row-fluid">
													<div class="span4 fieldBlock">	
														<select name="qualif_int1" id="qualif_int1">
															<option>Via</option>
															<option>Contrada</option>
														</select>
														<span class="errortext"></span>
													</div>
													<div class="span8 fieldBlock">	
														<input type="text" name="via_int1" value="" id="via_int1">
														<span class="errortext"></span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span2 fieldBlock">	
														<label>Num.</label>
														<input type="text" name="civico_int1" value="" id="civico_int1">
														<span class="errortext"></span>
													</div>
													<div class="span10">	
														<label>Presso (facoltativo)</label>
														<input type="text" placeholder="nome o cognome o nome azienda" name="presso_int1" value="" id="presso_int1">
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span4 fieldBlock">	
														<label>Provincia</label>
														<input type="text" name="provincia_int1" id="provincia_int1">
														<span class="errortext"></span>
													</div>
													<div class="span8 fieldBlock">	
														<label>Comune</label>
														<input type="text" name="comune_int1" value="" id="comune_int1">
														<span class="errortext"></span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span4 fieldBlock">	
														<label>CAP</label>
														<input type="text" name="cap_int1" value="" id="cap_int1">
														<span class="errortext"></span>
													</div>
												</div>
											</div>
										</div>
										<div id="divIndirizzoCorrispondenza1" class="row-fluid expandable">
											<div class="expander">
												<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
												<span>Indirizzo di corrispondenza (se diverso da residenza). A questo indirizzo verrà inviata la documentazione contrattuale per tutti gli intestatari.</span>
											</div>
											<div class="expandableCont">
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<label>Indirizzo di residenza</label>
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<select name="" id="">
																	<option>Via</option>
																	<option>Contrada</option>
																</select>
																<span class="errortext"></span>
															</div>
															<div class="span8 fieldBlock">	
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
													<div class="span6">
														<div class="row-fluid">
															<div class="span2 fieldBlock">	
																<label>Num.</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
															<div class="span10 fieldBlock">	
																<label>Presso(facoltativo)</label>
																<input type="text" placeholder="nome o cognome o nome azienda" name="presso_int1" value="" id="presso_int1">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<label>Provincia</label>
																<input type="text" name="" id="">
																<span class="errortext"></span>
															</div>
															<div class="span8 fieldBlock">	
																<label>Comune</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
													<div class="span6">
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<label>CAP</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="divIndirizzoCorrispondenza2" class="row-fluid expandable">
											<div class="expander">
												<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
												<span>Indirizzo per la centrale di allarme interbancaria (se diverso da residenza)</span>
											</div>
											<div class="expandableCont">
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<label>Indirizzo di residenza</label>
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<select name="" id="">
																	<option>Via</option>
																	<option>Contrada</option>
																</select>
																<span class="errortext"></span>
															</div>
															<div class="span8 fieldBlock">	
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
													<div class="span6">
														<div class="row-fluid">
															<div class="span2 fieldBlock">	
																<label>Num.</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
															<div class="span10 fieldBlock">	
																<label>Presso(facoltativo)</label>
																<input type="text" placeholder="nome o cognome o nome azienda" name="presso_int1" value="" id="presso_int1">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<div class="row-fluid">
																	<div class="span4 fieldBlock">	
																		<label>Provincia</label>
																		<input type="text" name="" id="">
																		<span class="errortext"></span>
																	</div>
																	<div class="span8 fieldBlock">	
																		<label>Comune</label>
																		<input type="text" name="" value="" id="">
																		<span class="errortext"></span>
																	</div>
														</div>
													</div>
													<div class="span6">
																<div class="row-fluid">
																	<div class="span4 fieldBlock">	
																		<label>CAP</label>
																		<input type="text" name="" value="" id="">
																		<span class="errortext"></span>
																	</div>
																	
																</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset class="noPaddBott">
										<div id="" class="row-fluid expandable">
											<div class="expander">
												<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
												<span><strong>Altri recapiti telefonici (facoltativi)</strong></span>
											</div>
											<div class="expandableCont">
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<label>Telefono casa</label>
														<div class="row-fluid">
															<div class="span12">	
																<input type="text">
															</div>
														</div>
													</div>
													<div class="span6">
														<label>Telefono ufficio</label>
														<div class="row-fluid">
															<div class="span12">	
																<input type="text">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>	
										<div class="expandable">
											<div class="row-fluid spaceTop">
												<div class="span6">
													<div class="row-fluid">
														<div class="span12 fieldBlock expander">
															<label><input type="checkbox" name="" value="" onclick="switchExp(this)">Sei gi&agrave; un cliente Webank?</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row-fluid expandableCont" id="agenziaContent_int3">
												<div class="span6">
													<div class="row-fluid">
														<div class="span6 fieldBlock">
															<label>Agenzia</label>
															<select>
																<option>-seleziona -</option>
															</select>
															<span class="errortext">Seleziona</span>
														</div>
														<div class="span6 fieldBlock">
															<label>Numero conto</label>
															<input type="text">
															<span class="errortext">Compila</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>	
								</div>
						</div>
						<div style="display:none" class="aolAcc">			
								<div class="aolAccTop">
									<a class="aolAccTitle" id="intestatario2" onclick="switchExp(this,true);" href="javascript:;" title="Espandi">
										<span class="titoloAcc">Intestatario 2 - Lorem ipsum dolor sit amet</span>
										<span href="javascript:;" class="accButt" ></span>
										<span class="errortext"></span>
									</a>
								</div>
								<div class="aolAccContent">
									<fieldset>
										<legend>Dati anagrafici intestatario</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label class="withIco">Nome</label><a href="javascript:;" data-tooltip="Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
														<input type="text" id="nome_int2" value="" name="nome_int1" class="">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
											<div class="span6">
													<div class="row-fluid">
														<div class="span12 fieldBlock">
															<label class="withIco">Cognome</label><a href="javascript:;" data-tooltip="Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
															<input type="text" id="cognome_int2" value="" name="cognome_int1">
															<span class="errortext">Compila</span>
														</div>
													</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
												<div class="span6">
													<div class="row-fluid">
														<div class="span3 fieldBlock">
															<label>Sesso</label>
															<select id="sesso_int2"><option>--</option><option>F</option><option>M</option></select>
															<span class="errortext">Seleziona</span>
														</div>
														<div class="span9 fieldBlock" id="tuttaLaData">
															<label>Data di nascita</label>
															<div class="row-fluid">
																<div class="span3 fieldBlock">
																	<input type="text"id="gg_nascita_int2" maxlength="2" name="gg_nascita_int2" placeholder="gg">
																	<span class="errortext">Compila</span>
																</div>
																<div class="span1">
																	<span class="separator">/</span>
																</div>	
																<div class="span3 fieldBlock">
																	<input type="text" id="mm_nascita_int2" maxlength="2" name="mm_nascita_int2" placeholder="mm">
																	<span class="errortext">Compila</span>
																</div>
																<div class="span1">
																	<span class="separator">/</span>
																</div>	
																<div class="span4 fieldBlock">
																	<input type="text" id="aa_nascita_int2" maxlength="4" name="aa_nascita_int2"  placeholder="aaaa">
																	<span class="errortext">Compila</span>
																</div>
															</div>
															<span class="errortext"></span>
														</div>
													</div>
												</div>
												<div class="span6">
													<div class="row-fluid">
														<div class="span12 fieldBlock">
															<label>Codice fiscale</label>
															<input type="text" maxlength="16" id="codicefiscale_int2" value=""/>
															<script type="text/javascript" defer="defer">setCounterOnField("codicefiscale_int2",16);</script>
															<span class="errortext">Compila</span>
														</div>
													</div>
												</div>
										</div>
										<div class="row-fluid spaceBottom">
												<div class="span6 fieldBlock">
													<label>E mail</label>
													<input type="text">
													<span class="errortext">Seleziona</span>
												</div>
												<div class="span6">
													<div class="row-fluid">
														<div class="span6 fieldBlock">
															<label>Numero di cellulare</label>
															<input type="text">
															<span class="errortext">Compila</span>
														</div>
														<div class="span6 fieldBlock">
															<label>Operatore</label>
															<select name="" id="">
																<option value="">Seleziona</option>
																<option value="Wind">Wind</option>
																<option value="">lorem ipsum</option>
																<option value=""></option>
																<option value=""></option>
																<option value=""></option>
																<option value="ALTRO">Altro...</option>
															</select>
															<span class="errortext">Seleziona</span>
														</div>
													</div>
												</div>
										</div>
									
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>
										<legend>Informazioni personali</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<label>Provincia di nascita</label>
												<div class="row-fluid">
													<div class="span7 fieldBlock">
														<input type="text" id="provincia_nascita_int2">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock ">
														<label>Comune di nascita</label>
														<input type="text" id="comune_nascita_int2">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label>Stato di nascita</label>
														<select name="stato_nascita_int2" value="" id="stato_nascita_int2">
															<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
														</select>
														<span class="errortext">Seleziona</span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label>Cittadinanza</label>
														<select name="cittadinanza_int2" value="" id="cittadinanza_int2">
															<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
														</select>
														<span class="errortext">Seleziona</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<label>Ttitolo di studio</label>
												<select>
													<option value="" selected="">--seleziona--</option>
													<option value="2">lorem</option>
													<option value="3"></option>
												</select>
											</div>
											<div class="span6">
												<label>Abitazione</label>
												<select>
													<option value="" selected="">--seleziona--</option>
													<option value="2">lorem</option>
													<option value="3"></option>
												</select>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>
										<legend>Documento d'identit&agrave;</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span6 fieldBlock">
														<label>Tipo di documento</label>
														<select id="tipo_doc_int2">
															<option selected="" value="1">Carta d'identit&agrave;</option>
															<option value="2">Patente</option>
															<option value="3">Passaporto</option>
														</select>
														<span class="errortext">Scegli</span>
													</div>
													<div class="span6 fieldBlock">
														<label>Numero</label>
														<input type="text" id="numero_doc_int2">
														<span id="" class=""></span>
														<span class="errortext">Scegli</span>
													</div>
												</div>
											</div>
											<div class="span6 fieldBlock">
												<label>Stato di rilascio</label>
												<select><option>seleziona</option></select>
												<span class="errortext">Scegli</span>
											</div>
										</div>
							
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span6 fieldBlock">
														<label>Provincia di rilascio</label>
														<input type="text">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
											<div class="span6 fieldBlock">
												<label>Comune di rilascio</label>
												<input type="text">
												<span class="errortext">Compila</span>
											</div>
										</div>
							
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div  class="span6 fieldBlock" id="divDataEmissione2">
													<label>Data di rilascio</label>
														<div class="row-fluid">
															<div class="span3 fieldBlock">
																<input type="text" id="gg_emissione_int2" maxlength="2" name="gg_emissione_int2" placeholder="gg">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span3 fieldBlock">
																<input type="text" id="mm_emissione_int2" maxlength="2" name="mm_emissione_int2" placeholder="mm">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span4 fieldBlock">
																<input type="text" id="aa_emissione_int2" maxlength="4" name="aa_emissione_int2" placeholder="aaaa">
																<span class="errortext">Compila</span>
															</div>
														</div>
														<span class="errortext"></span>
												</div>
											</div>
											<div class="span6">
												<div  class="span6 fieldBlock" id="divDataScadenza2">
													<label>Data di scadenza</label>
														<div class="row-fluid">
															<div class="span3 fieldBlock">
																<input type="text" id="gg_scadenza_int2" maxlength="2" name="gg_scadenza_int2" placeholder="gg">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span3 fieldBlock">
																<input type="text" id="mm_scadenza_int2" maxlength="2" name="mm_scadenza_int2" placeholder="mm">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span4 fieldBlock">
																<input type="text" id="aa_scadenza_int2" maxlength="4" name="aa_scadenza_int2" placeholder="aaaa">
																<span class="errortext">Compila</span>
															</div>
														</div>
														<span class="errortext"></span>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>
										<legend>Indirizzo</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<label>Indirizzo di residenza</label>
												<div class="row-fluid">
													<div class="span4 fieldBlock">	
														<select name="qualif_int2" id="qualif_int2">
															<option>Via</option>
															<option>Contrada</option>
														</select>
														<span class="errortext"></span>
													</div>
													<div class="span8 fieldBlock">	
														<input type="text" name="via_int2" value="" id="via_int2">
														<span class="errortext"></span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span2 fieldBlock">	
														<label>Num.</label>
														<input type="text" name="civico_int2" value="" id="civico_int2">
														<span class="errortext"></span>
													</div>
													<div class="span10">	
														<label>Presso (facoltativo)</label>
														<input type="text" placeholder="nome o cognome o nome azienda" name="presso_int2" value="" id="presso_int2">
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span4 fieldBlock">	
														<label>Provincia</label>
														<input type="text" name="provincia_int2" id="provincia_int2">
														<span class="errortext"></span>
													</div>
													<div class="span8 fieldBlock">	
														<label>Comune</label>
														<input type="text" name="comune_int2" value="" id="comune_int2">
														<span class="errortext"></span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span4 fieldBlock">	
														<label>CAP</label>
														<input type="text" name="cap_int2" value="" id="cap_int2">
														<span class="errortext"></span>
													</div>
												</div>
											</div>
										</div>
										<div id="divIndirizzoCorrispondenza1" class="row-fluid expandable">
											<div class="expander">
												<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
												<span>Indirizzo di corrispondenza (se diverso da residenza). A questo indirizzo verrà inviata la documentazione contrattuale per tutti gli intestatari.</span>
											</div>
											<div class="expandableCont">
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<label>Indirizzo di residenza</label>
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<select name="" id="">
																	<option>Via</option>
																	<option>Contrada</option>
																</select>
																<span class="errortext"></span>
															</div>
															<div class="span8 fieldBlock">	
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
													<div class="span6">
														<div class="row-fluid">
															<div class="span2 fieldBlock">	
																<label>Num.</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
															<div class="span10 fieldBlock">	
																<label>Presso(facoltativo)</label>
																<input type="text" placeholder="nome o cognome o nome azienda" name="presso_int2" value="" id="presso_int1">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<label>Provincia</label>
																<input type="text" name="" id="">
																<span class="errortext"></span>
															</div>
															<div class="span8 fieldBlock">	
																<label>Comune</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
													<div class="span6">
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<label>CAP</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="divIndirizzoCorrispondenza2" class="row-fluid expandable">
											<div class="expander">
												<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
												<span>Indirizzo per la centrale di allarme interbancaria (se diverso da residenza)</span>
											</div>
											<div class="expandableCont">
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<label>Indirizzo di residenza</label>
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<select name="" id="">
																	<option>Via</option>
																	<option>Contrada</option>
																</select>
																<span class="errortext"></span>
															</div>
															<div class="span8 fieldBlock">	
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
													<div class="span6">
														<div class="row-fluid">
															<div class="span2 fieldBlock">	
																<label>Num.</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
															<div class="span10 fieldBlock">	
																<label>Presso(facoltativo)</label>
															    <input type="text" placeholder="nome o cognome o nome azienda" name="presso_int1" value="" id="presso_int2">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<div class="row-fluid">
																	<div class="span4 fieldBlock">	
																		<label>Provincia</label>
																		<input type="text" name="" id="">
																		<span class="errortext"></span>
																	</div>
																	<div class="span8 fieldBlock">	
																		<label>Comune</label>
																		<input type="text" name="" value="" id="">
																		<span class="errortext"></span>
																	</div>
														</div>
													</div>
													<div class="span6">
																<div class="row-fluid">
																	<div class="span4 fieldBlock">	
																		<label>CAP</label>
																		<input type="text" name="" value="" id="">
																		<span class="errortext"></span>
																	</div>
																	
																</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset class="noPaddBott">
										<div id="" class="row-fluid expandable">
											<div class="expander">
												<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
												<span><strong>Altri recapiti telefonici (facoltativi)</strong></span>
											</div>
											<div class="expandableCont">
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<label>Telefono casa</label>
														<div class="row-fluid">
															<div class="span12">	
																<input type="text">
															</div>
														</div>
													</div>
													<div class="span6">
														<label>Telefono ufficio</label>
														<div class="row-fluid">
															<div class="span12">	
																<input type="text">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>	
										<div class="expandable">
											<div class="row-fluid spaceTop">
												<div class="span6">
													<div class="row-fluid">
														<div class="span12 fieldBlock expander">
															<label><input type="checkbox" name="" value="" onclick="switchExp(this)">Sei gi&agrave; un cliente Webank?</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row-fluid expandableCont" id="agenziaContent_int3">
												<div class="span6">
													<div class="row-fluid">
														<div class="span6 fieldBlock">
															<label>Agenzia</label>
															<select>
																<option>-seleziona -</option>
															</select>
															<span class="errortext">Seleziona</span>
														</div>
														<div class="span6 fieldBlock">
															<label>Numero conto</label>
															<input type="text">
															<span class="errortext">Compila</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>	
								</div>
						</div>
						
						
						<!--terzo intestatario -->
						<div style="display:none" class="aolAcc">			
								<div class="aolAccTop">
									<a class="aolAccTitle" id="intestatario3" onclick="switchExp(this,true);" href="javascript:;" title="Espandi">
										<span class="titoloAcc">Intestatario 3 - Lorem ipsum dolor sit amet</span>
										<span href="javascript:;" class="accButt" ></span>
										<span class="errortext"></span>
									</a>
								</div>
								<div class="aolAccContent">
									<fieldset>
										<legend>Dati anagrafici intestatario</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label class="withIco">Nome</label><a href="javascript:;" data-tooltip="Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
														<input type="text" id="nome_int3" value="" name="nome_int3" class="">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
											<div class="span6">
													<div class="row-fluid">
														<div class="span12 fieldBlock">
															<label class="withIco">Cognome</label><a href="javascript:;" data-tooltip="Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
															<input type="text" id="cognome_int3" value="" name="cognome_int3">
															<span class="errortext">Compila</span>
														</div>
													</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
												<div class="span6">
													<div class="row-fluid">
														<div class="span3 fieldBlock">
															<label>Sesso</label>
															<select id="sesso_int3"><option>--</option><option>F</option><option>M</option></select>
															<span class="errortext">Seleziona</span>
														</div>
														<div class="span9 fieldBlock" id="tuttaLaData">
															<label>Data di nascita</label>
															<div class="row-fluid">
																<div class="span3 fieldBlock">
																	<input type="text"id="gg_nascita_int3" maxlength="2" name="gg_nascita_int3" placeholder="gg">
																	<span class="errortext">Compila</span>
																</div>
																<div class="span1">
																	<span class="separator">/</span>
																</div>	
																<div class="span3 fieldBlock">
																	<input type="text" id="mm_nascita_int3" maxlength="2" name="mm_nascita_int3" placeholder="mm">
																	<span class="errortext">Compila</span>
																</div>
																<div class="span1">
																	<span class="separator">/</span>
																</div>	
																<div class="span4 fieldBlock">
																	<input type="text" id="aa_nascita_int3" maxlength="4" name="aa_nascita_int3"  placeholder="aaaa">
																	<span class="errortext">Compila</span>
																</div>
															</div>
															<span class="errortext"></span>
														</div>
													</div>
												</div>
												<div class="span6">
													<div class="row-fluid">
														<div class="span12 fieldBlock">
															<label>Codice fiscale</label>
															<input type="text" maxlength="16" id="codicefiscale_int3" value=""/>
															<script type="text/javascript" defer="defer">setCounterOnField("codicefiscale_int3",16);</script>
															<span class="errortext">Compila</span>
														</div>
													</div>
												</div>
										</div>
										<div class="row-fluid spaceBottom">
												<div class="span6 fieldBlock">
													<label>E mail</label>
													<input type="text">
													<span class="errortext">Seleziona</span>
												</div>
												<div class="span6">
													<div class="row-fluid">
														<div class="span6 fieldBlock">
															<label>Numero di cellulare</label>
															<input type="text">
															<span class="errortext">Compila</span>
														</div>
														<div class="span6 fieldBlock">
															<label>Operatore</label>
															<select name="" id="">
																<option value="">Seleziona</option>
																<option value="Wind">Wind</option>
																<option value="">lorem ipsum</option>
																<option value=""></option>
																<option value=""></option>
																<option value=""></option>
																<option value="ALTRO">Altro...</option>
															</select>
															<span class="errortext">Seleziona</span>
														</div>
													</div>
												</div>
										</div>
									
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>
										<legend>Informazioni personali</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<label>Provincia di nascita</label>
												<div class="row-fluid">
													<div class="span7 fieldBlock">
														<input type="text" id="provincia_nascita_int3">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock ">
														<label>Comune di nascita</label>
														<input type="text" id="comune_nascita_int3">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label>Stato di nascita</label>
														<select name="stato_nascita_int3" value="" id="stato_nascita_int3">
															<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
														</select>
														<span class="errortext">Seleziona</span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label>Cittadinanza</label>
														<select name="cittadinanza_int3" value="" id="cittadinanza_int3">
															<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
														</select>
														<span class="errortext">Seleziona</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<label>Ttitolo di studio</label>
												<select>
													<option value="" selected="">--seleziona--</option>
													<option value="2">lorem</option>
													<option value="3"></option>
												</select>
											</div>
											<div class="span6">
												<label>Abitazione</label>
												<select>
													<option value="" selected="">--seleziona--</option>
													<option value="2">lorem</option>
													<option value="3"></option>
												</select>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>
										<legend>Documento d'identit&agrave;</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span6 fieldBlock">
														<label>Tipo di documento</label>
														<select id="tipo_doc_int3">
															<option selected="" value="1">Carta d'identit&agrave;</option>
															<option value="2">Patente</option>
															<option value="3">Passaporto</option>
														</select>
														<span class="errortext">Scegli</span>
													</div>
													<div class="span6 fieldBlock">
														<label>Numero</label>
														<input type="text" id="numero_doc_int3">
														<span id="" class=""></span>
														<span class="errortext">Scegli</span>
													</div>
												</div>
											</div>
											<div class="span6 fieldBlock">
												<label>Stato di rilascio</label>
												<select><option>seleziona</option></select>
												<span class="errortext">Scegli</span>
											</div>
										</div>
							
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span6 fieldBlock">
														<label>Provincia di rilascio</label>
														<input type="text">
														<span class="errortext">Compila</span>
													</div>
												</div>
											</div>
											<div class="span6 fieldBlock">
												<label>Comune di rilascio</label>
												<input type="text">
												<span class="errortext">Compila</span>
											</div>
										</div>
							
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div  class="span6 fieldBlock" id="divDataEmissione3">
													<label>Data di rilascio</label>
														<div class="row-fluid">
															<div class="span3 fieldBlock">
																<input type="text" id="gg_emissione_int3" maxlength="2" name="gg_emissione_int3" placeholder="gg">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span3 fieldBlock">
																<input type="text" id="mm_emissione_int3" maxlength="2" name="mm_emissione_int3" placeholder="mm">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span4 fieldBlock">
																<input type="text" id="aa_emissione_int3" maxlength="4" name="aa_emissione_int3" placeholder="aaaa">
																<span class="errortext">Compila</span>
															</div>
														</div>
														<span class="errortext"></span>
												</div>
											</div>
											<div class="span6">
												<div  class="span6 fieldBlock" id="divDataScadenza3">
													<label>Data di scadenza</label>
														<div class="row-fluid">
															<div class="span3 fieldBlock">
																<input type="text" id="gg_scadenza_int3" maxlength="2" name="gg_scadenza_int3" placeholder="gg">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span3 fieldBlock">
																<input type="text" id="mm_scadenza_int3" maxlength="2" name="mm_scadenza_int3" placeholder="mm">
																<span class="errortext">Compila</span>
															</div>
															<div class="span1">
																<span class="separator">/</span>
															</div>	
															<div class="span4 fieldBlock">
																<input type="text" id="aa_scadenza_int3" maxlength="4" name="aa_scadenza_int3" placeholder="aaaa">
																<span class="errortext">Compila</span>
															</div>
														</div>
														<span class="errortext"></span>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>
										<legend>Indirizzo</legend>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<label>Indirizzo di residenza</label>
												<div class="row-fluid">
													<div class="span4 fieldBlock">	
														<select name="qualif_int3" id="qualif_int3">
															<option>Via</option>
															<option>Contrada</option>
														</select>
														<span class="errortext"></span>
													</div>
													<div class="span8 fieldBlock">	
														<input type="text" name="via_int3" value="" id="via_int3">
														<span class="errortext"></span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span2 fieldBlock">	
														<label>Num.</label>
														<input type="text" name="civico_int3" value="" id="civico_int3">
														<span class="errortext"></span>
													</div>
													<div class="span10">	
														<label>Presso (facoltativo)</label>
														<input type="text" placeholder="nome o cognome o nome azienda" name="presso_int3" value="" id="presso_int3">
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid spaceBottom">
											<div class="span6">
												<div class="row-fluid">
													<div class="span4 fieldBlock">	
														<label>Provincia</label>
														<input type="text" name="provincia_int3" id="provincia_int3">
														<span class="errortext"></span>
													</div>
													<div class="span8 fieldBlock">	
														<label>Comune</label>
														<input type="text" name="comune_int3" value="" id="comune_int3">
														<span class="errortext"></span>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="row-fluid">
													<div class="span4 fieldBlock">	
														<label>CAP</label>
														<input type="text" name="cap_int3" value="" id="cap_int3">
														<span class="errortext"></span>
													</div>
												</div>
											</div>
										</div>
										<div id="divIndirizzoCorrispondenza3" class="row-fluid expandable">
											<div class="expander">
												<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
												<span>Indirizzo di corrispondenza (se diverso da residenza). A questo indirizzo verrà inviata la documentazione contrattuale per tutti gli intestatari.</span>
											</div>
											<div class="expandableCont">
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<label>Indirizzo di residenza</label>
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<select name="" id="">
																	<option>Via</option>
																	<option>Contrada</option>
																</select>
																<span class="errortext"></span>
															</div>
															<div class="span8 fieldBlock">	
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
													<div class="span6">
														<div class="row-fluid">
															<div class="span2 fieldBlock">	
																<label>Num.</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
															<div class="span10 fieldBlock">	
																<label>Presso(facoltativo)</label>
																<input type="text" placeholder="nome o cognome o nome azienda" name="presso_int3" value="" id="presso_int3">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<label>Provincia</label>
																<input type="text" name="" id="">
																<span class="errortext"></span>
															</div>
															<div class="span8 fieldBlock">	
																<label>Comune</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
													<div class="span6">
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<label>CAP</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="divIndirizzoCorrispondenza2" class="row-fluid expandable">
											<div class="expander">
												<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
												<span>Indirizzo per la centrale di allarme interbancaria (se diverso da residenza)</span>
											</div>
											<div class="expandableCont">
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<label>Indirizzo di residenza</label>
														<div class="row-fluid">
															<div class="span4 fieldBlock">	
																<select name="" id="">
																	<option>Via</option>
																	<option>Contrada</option>
																</select>
																<span class="errortext"></span>
															</div>
															<div class="span8 fieldBlock">	
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
													<div class="span6">
														<div class="row-fluid">
															<div class="span2 fieldBlock">	
																<label>Num.</label>
																<input type="text" name="" value="" id="">
																<span class="errortext"></span>
															</div>
															<div class="span10 fieldBlock">	
																<label>Presso(facoltativo)</label>
															    <input type="text" placeholder="nome o cognome o nome azienda" name="presso_int1" value="" id="presso_int2">
																<span class="errortext"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<div class="row-fluid">
																	<div class="span4 fieldBlock">	
																		<label>Provincia</label>
																		<input type="text" name="" id="">
																		<span class="errortext"></span>
																	</div>
																	<div class="span8 fieldBlock">	
																		<label>Comune</label>
																		<input type="text" name="" value="" id="">
																		<span class="errortext"></span>
																	</div>
														</div>
													</div>
													<div class="span6">
																<div class="row-fluid">
																	<div class="span4 fieldBlock">	
																		<label>CAP</label>
																		<input type="text" name="" value="" id="">
																		<span class="errortext"></span>
																	</div>
																	
																</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset class="noPaddBott">
										<div id="" class="row-fluid expandable">
											<div class="expander">
												<a href="javascript:;" onclick="switchExp(this)" class="btn"> </a>
												<span><strong>Altri recapiti telefonici (facoltativi)</strong></span>
											</div>
											<div class="expandableCont">
												<div class="row-fluid spaceBottom">
													<div class="span6">
														<label>Telefono casa</label>
														<div class="row-fluid">
															<div class="span12">	
																<input type="text">
															</div>
														</div>
													</div>
													<div class="span6">
														<label>Telefono ufficio</label>
														<div class="row-fluid">
															<div class="span12">	
																<input type="text">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<div class="lineSeparator"></div>
									<fieldset>	
										<div class="expandable">
											<div class="row-fluid spaceTop">
												<div class="span6">
													<div class="row-fluid">
														<div class="span12 fieldBlock expander">
															<label><input type="checkbox" name="" value="" onclick="switchExp(this)">Sei gi&agrave; un cliente Webank?</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row-fluid expandableCont" id="agenziaContent_int3">
												<div class="span6">
													<div class="row-fluid">
														<div class="span6 fieldBlock">
															<label>Agenzia</label>
															<select>
																<option>-seleziona -</option>
															</select>
															<span class="errortext">Seleziona</span>
														</div>
														<div class="span6 fieldBlock">
															<label>Numero conto</label>
															<input type="text">
															<span class="errortext">Compila</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</fieldset>	
								</div>
						</div>

						
						
						
					</div>
				</form>
				<div id="aolButtonLine" class="aolButton">
					<a href="#" class="aButton flRight"><span>Conferma</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>