
<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<div id="maincontent">
	<div class="maincontenttopper"></div>

	<!-- titolo -->
	<?php virtual("/librerie/include/commons/titoli/pub_wb_int_tit_003.php"); ?>
	<!--fine  titolo -->
	<span class="detev">COSTRUIRE STRATEGIE VINCENTI IN OPZIONI<br/>19 novembre 2010, Milano - TOUR T3<br />Sala Parini, Milan Marriott Hotel<br />Via Washington 66 <br />Milano</span>
		
	<p>Lorem ipsum dolor sit amet, consectetur  ea commodo consequat. Duis aute irure dolor in</p>	
	
	<form id="sendmail" class="registrazione" method="post" action="#">		
				
			<div class="fieldblock error">
				<label>Nome*</label>
				<input type="text" />
				<br class="clear" />
				<span>Verifica</span>
			</div>
			
			<div class="fieldblock onright error">
				<label>Cognome*</label>
				<input type="text" />
				<br class="clear" />
				<span>Verifica</span>
			</div>
			<br class="clear" />
			<div class="fieldblock error">
				<label>Sesso*</label>
				<br class="clear">
				<input type="radio" class="rad" name="" value=""><label class="fieldrad">Maschio</label>
				<input type="radio" class="rad" name="" value=""><label class="fieldrad">Femmina</label>
				<br class="clear" />
				
			</div>
			<br class="clear" />
			<div class="fieldblock error">
				<label>Luogo di nascita*</label>
				<input type="text" />
				<br class="clear" />
				<span>Verifica</span>
			</div>
			<div class="fieldblock onright error">
				<label>Data di nascita*</label>
				<br class="clear" />
				<input type="text" value="gg" class="gg" onfocus="if (this.value == 'gg') {this.value='';}" onblur="if (this.value == '') {this.value='gg';};">
				<span class="divisorio">/</span>
				<input type="text" value="mm" class="gg" onfocus="if (this.value == 'mm') {this.value='';}" onblur="if (this.value == '') {this.value='mm';};">
				<span class="divisorio">/</span>
				<input type="text" value="anno" class="anno" onfocus="if (this.value == 'anno') {this.value='';}" onblur="if (this.value == '') {this.value='anno';};">
				<br class="clear" />
				<span>Verifica</span>
			</div>
			<br class="clear" />
			<div class="fieldblock">
				<label>Via/Piazza</label>
				<label class="civico">Civico</label>
				<br class="clear">
				<input type="text" class="tel2ab" value="" name="indirizzo" id="indirizzo" style="width: 152px; clear:left;">
				<input type="text" maxlength="5" class="telab" value="" name="civico" id="civico" style="width: 30px; clear:none; margin-left: 5px">
				<br class="clear">
				<span>Verifica</span>				
			</div>
			
			<div class="fieldblock onright">
				<label>CAP</label>
				<input type="text" />
			</div>
			
			<br class="clear" />
			<div class="fieldblock">
				<label>Città</label>
				<input type="text" />
			</div>
			
			<div class="fieldblock onright">
				<label>Provincia</label>
				<input type="text" />
			</div>
			<br class="clear" />
			<div class="fieldblock">
				<label>Codice fiscale*</label><a onmouseover="showTooltip(this,event);" onmouseout="hideTooltip(this);" class="linkTooltip">
				<span class="tooltip">
								<span class="toollarge">
									lorem ipsum dolor sit lorem ipsum dolor sit  lorem ipsum dolor sit  lorem ipsum dolor sit 
								</span>
							</span>
				<img alt="" src="/img/img_or_tooltip_off.gif" class="icoTooltip">
				
				</a>
				<input type="text" />
				<br class="clear" />
				<span>Verifica</span>
			</div>
			
			<div class="fieldblock onright error">
				<label>Email*</label>
				<input type="text" />
				<br class="clear" />
				<span>Verifica</span>
			</div>
			<br class="clear" />
			<div class="fieldblock error">
				<label>Telefono 1*</label>
				<input type="text" maxlength="3" style="width: 30px; clear:left;" /><input type="text" maxlength="7" style="width: 154px; clear:none; margin-left: 5px"/>
				<br class="clear" />
				<span>Verifica</span>
			</div>
			
			<div class="fieldblock onright error">
				<label>Telefono 2*</label>
				<input type="text" maxlength="3" style="width: 30px; clear:left;" /><input type="text" maxlength="7" style="width: 154px; clear:none; margin-left: 5px"/>
				<br class="clear" />
				<span>Verifica</span>
			</div>
			<br class="clear" />
			<div class="fieldblock error">
				<label>Fai Trading on line*</label>				
				
				<br class="clear">				
					<input type="radio" value="" name="" class="rad" />
					<label class="fieldrad">Si</label>
					<input type="radio" value="" name="" class="rad" />
					<label class="fieldrad">No</label>
					<br class="clear" />
							
			</div>
			
			<div class="fieldblock onright error">
				<label>Se si, quale broker utilizzi?*</label>
				
				<select onchange="changeSuggerimenti(this);" style="visibility: visible;">
					<option value="Seleziona" selected="">Seleziona</option>
					<option value="Webank">Webank</option>
					<option value="IWBank">IWBank</option>
					<option value="Fineco">Fineco</option>
					<option value="Sella">Sella</option>
					<option value="Directa">Directa</option>
					<option value="Nuovi investimenti sim">Nuovi investimenti sim</option>
					<option value="Millnium Sim">Millnium Sim</option>
					<option value="Altro">Altro</option>
				</select>
				<br class="clear" />
				<span>Verifica</span>
			</div>
			<br class="clear" />
			<div class="fieldblock error">
				<label>Utilizzi più di un broker*</label>				
				<br class="clear" />
				<input type="radio" value="" name="" class="rad" />
				<label class="fieldrad">Si</label>
				<input type="radio" value="" name="" class="rad" />
				<label class="fieldrad">No</label>
				
			</div>
			
			<div class="fieldblock onright error">
				<label>Se si, quale broker utilizzi?*</label>
				
				<select onchange="changeSuggerimenti(this);" style="visibility: visible;">
					<option value="Seleziona" selected="">Seleziona</option>
					<option value="Webank">Webank</option>
					<option value="IWBank">IWBank</option>
					<option value="Fineco">Fineco</option>
					<option value="Sella">Sella</option>
					<option value="Directa">Directa</option>
					<option value="Nuovi investimenti sim">Nuovi investimenti sim</option>
					<option value="Millnium Sim">Millnium Sim</option>
					<option value="Altro">Altro</option>
				</select>
				<br class="clear" />
				<span>Verifica</span>
			</div>
			<br class="clear" />
			<div class="fieldblock fieldblockmax error">
				<label>Quali programmi professionali di analisi tecnica utilizzi?*</label>
				
				<select style="visibility: visible;">					
					<option value="Seleziona">Seleziona</option>
					<option value="Metastock">Metastock</option>
					<option value="Tradestation">Tradestation</option>
					<option value="Prorealtime">Prorealtime</option>
					<option value="esignal">esignal</option>
					<option value="Visualtrader">Visualtrader</option>
					<option value=" Altro"> Altro</option>
				</select>
				<br class="clear" />
				<span>Verifica</span>
			</div>
			
			<div class="fieldblock onright fieldblockmax error">
				<label>Quante operazioni fai al mese?*</label><br class="clear" /><br/>
				
				<select onchange="changeSuggerimenti(this);" style="visibility: visible;">
					<option value="Seleziona" selected="">Seleziona</option>
					<option value="0-10">0-10</option>
					<option value="11 -20">11 -20</option>
					<option value="11 -20">21 -50</option>
					<option value="51 -100">51 -100</option>
					<option value="101 -500">101 -500</option>
					<option value="oltre 500">oltre 500</option>

				</select>
			<br class="clear" />
				<span>Verifica</span>
			</div>
			<br class="clear" />
			<div class="fieldblock error">
				<label>Utilizzi servizi informativi o applicativi di information provider?*</label>				
				
				<br class="clear">
				<input type="radio" value="" name="" class="rad" />
				<label class="fieldrad">Si</label>
				<input type="radio" value="" name="" class="rad" />
				<label class="fieldrad">No</label>
				<br class="clear" />
				
			
			</div>
			
			<div class="fieldblock onright error">
				<label>Se si, quali?*</label>
				
				<select onchange="changeSuggerimenti(this);" style="visibility: visible;">
					<option value="" selected="Seleziona">Seleziona</option>
					<option value="Bloomberg">Bloomberg</option>
					<option value="Borsa Italiana">Borsa Italiana</option>
					<option value="Milano Finanza">Milano Finanza</option>
					<option value="Reuters">Reuters</option>
					<option value="Il sole 24 ore">Il sole 24 ore</option>
					<option value="Telekurs">Telekurs</option>
					<option value=" Altro"> Altro</option>
				</select>
				<br class="clear" />
				<span>Verifica</span>
			</div>
			<br class="clear" />
			
			
			<div class="fieldblock error">
				<label>Su quali strumenti finanziari operi?*</label>				
				
					<select onchange="changeSuggerimenti(this);" style="visibility: visible;">
					<option value="" selected="Seleziona">Seleziona</option>
					<option value="Azioni ">Azioni </option>
					<option value="Obbligazioni">Obbligazioni</option>
					<option value="Futures">Futures</option>
					<option value="Opzioni">Opzioni</option>
					<option value="Valute">Valute</option>
					<option value="Commodities">Commodities</option>
					<option value="cdf">cdf</option>
					<option value=" Altro"> Altro</option>
				</select>
				<br class="clear" />
				<span>Verifica</span>
			</div>
			
			<div class="fieldblock onright error">
				<label>Utilizzi trading sistem?*</label>
				
				<br class="clear"><br />
				<input type="radio" value="" name="" class="rad" />
				<label class="fieldrad">Si</label>
				<input type="radio" value="" name="" class="rad" />
				<label class="fieldrad">No</label>
				<br class="clear" />
				
				
			</div>
			<br class="clear" />
			<div class="fieldblock error">
				<label>A quale sessione vuoi partecipare?*</label>				
				
					<select onchange="changeSuggerimenti(this);" style="visibility: visible;">
					<option value="" selected="Seleziona">Seleziona</option>
					<option value="tutte ">tutte </option>
					<option value="Mattina">Mattina</option>
					<option value="Pomeriggio">Pomeriggio</option>
					<option value=" Sera"> Sera</option>
					<option value="Mattina e Pomeriggio">Mattina e Pomeriggio</option>
					<option value="Pomeriggio e  SeraPomeriggio e  Sera"></option>
					
				</select>
			<br class="clear" />
				<span>Verifica</span>
			</div>
			
			<div class="fieldblock onright"></div>
			<br class="clear" />
			
			<div class="fieldblock fieldblockb">
				<label>Codice di controllo</label><a class="rightlink" href="#">Crea nuovo codice</a>
				<img src="/img/bg_captcha2.gif" />
			</div>
			
			<div class="fieldblock onright fieldblockc error">
				<label>Digita il codice di controllo*</label>
				
				<input type="text" />
				<br class="clear" />
				<span>Verifica</span>
				<!--<input type="checkbox" value="" name="" class="cons">
				<label class="conslab">Ho preso visione e accetto l'<a href="#1">Informativa</a> sul trattamento dei dati personali</label>-->
			</div>
			<div class="fieldblockesteso error">
					<div class="filetto"></div>
					<a href="#" class="pdf">Informativa sul trattamento dei dati persona</a>
					
					<p class="note">Ai sensi dell'art. 23 e presa visione dell'informativa ex art. 13, del D. Lgs. 196/2003</p>
					<input type="radio" value="" name="" class="rad"><label class="fieldrad">autorizzo</label>
					<input type="radio" value="" name="" class="rad"><label class="fieldrad">non autorizzo</label>
					<br class="clear" />
					
					<p class="note">il trattamento dei miei dati personali per l'invio, da parte della Banca, di comunicazioni  concernenti l'offerta di prodotti o servizi del Gruppo BPM e per elaborazioni di studi e di ricerche di mercato.</p>
					<input type="radio" value="" name="" class="rad"><label class="fieldrad">autorizzo</label>
					<input type="radio" value="" name="" class="rad"><label class="fieldrad">non autorizzo</label>
					<br class="clear" />
					
					<p class="note">il trattamento dei miei dati personali per l'invio, da parte della Banca, di comunicazioni  concernenti l'offerta di prodotti o servizi di soggetti terzi.</p>
					<div class="filetto"></div>
			</div>
			<br class="clear" />
			<div class="fieldconsensoright">
					<a href="/connect.php?page=str_interna_pub_wb.php&tpl=tpl_pub_registrazione_newsletter_esito_wb.php"> <img title="Invia" src="/img/ico1gr_shortinvia.gif" class="imgnobd"></a>
			</div>
			
		<br class="clear"><br />
		</form>
		
	

	</div>
			<script type="text/javascript">
	//funzioni da reimplementare in SVILUPPO con standard corretti
	// - queste servono solo a testare le funzionalità visuali
	
	

</script>

<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
