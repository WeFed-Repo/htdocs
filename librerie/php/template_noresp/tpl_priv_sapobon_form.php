<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
<script type="text/javascript">
	$(function () {
				$("#datepicker,#datepicker2").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
					
				});
				
			});
	
</script>
<div class="tithelp"><div class="helpleft">Dati bonifico</div></div>
<br class="clear">
<div class="borderFormRounded margBottomLarge margTopSmall">
	<div class="formGeneric">
		<div class="row-fluid">
			<div class="span6 no-desktop">
				<div class="row-fluid noMargbottom">
					<div class="span10">
						<label class="nomefield">Conto di addebito</label>
						<span class="output">
							<select class="withIco">
								<option>lorem ipsum</option>
								<option>lorem ipsum</option>
							</select>
							<a class="flRight" href="#"><img src="/img/ico1gr_preferito.gif"></a>
						</span>
					</div>
				</div>	
			</div>			
			<div class="span6 no-desktop">
				<div class="row-fluid noMargbottom">
					<div class="span10">
						<label class="nomefield">IBAN ordinante</label>
						<span class="output"><strong id=""><strong>IT94W0558420401000000008610</strong></strong></span>
					</div>
				</div>
			</div>
		</div>
	   <div class="row-fluid">
			<div class="span6 no-desktop">
				<div class="row-fluid noMargbottom">
					<div class="span10">
						<label id="Importo" class="nomefield">Importo*</label>
						<input type="text" name="amount" size="10" value="" class="withIco" maxlength="8"> <strong class="flRight">EUR</strong>
					</div>
				</div>
			</div>
			<div class="span6 no-desktop">
				<div class="row-fluid noMargbottom">
					<div class="span8">
						<label id="" class="nomefield ico">Frequenza*</label>
						<!--NUOVO TOOLTIP-->
							<div class="tolltipclick">
								<span class="closed">
									<span id="documenti3" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
										<span class="uniqTooltipPos">
											<a href="javascript:;"><img src="/img/ret/lampa_off.gif" id="lampa1" class="lampa"></a>
										</span>
										<span class="uniqTooltipInnerHTML">
								<p>La “frequenza” è riferita alla <strong>data esecuzione del primo bonifico</strong> che imposti.  
								Se, per esempio, indichi come “data esecuzione primo bonifico” mercoledì 20 febbraio e selezioni la frequenza “settimanale”, il successivo bonifico sarà eseguito <strong>mercoledì 27 febbraio</strong>.</p>
										</span>
									</span>
								</span>
							</div>
					<!--fine NUOVO TOOLTIP-->
						<select size="1" name="">
							<option value="" selected="selected">--seleziona--</option>
								<option>Lorem ipsum</option>
								<option>Lorem ipsum</option>
						</select>
					</div>
				 </div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6 no-desktop">
				<label id="" class="nomefield ico">Data esecuzione primo bonifico*</label>
				<span class="iconahelp"><a href="#"><img class="lampa" src="/img/ret/ico2or_lampaoff.gif"></a></span>
				<div class="row-fluid">
					<div class="span4 no-desktop">
						<input type="text" class="withIco" id="datepicker">
					</div>
				</div>
			</div>
			<div class="span6 no-desktop">
				<label id="" class="nomefield">Scadenza ordine</label>
				<div class="row-fluid noMargbottom">
					<div class="span4 no-desktop">
						<label>
						<input type="radio" name="" value="">su richiesta
						</label>
					 </div>
					<div class="span4 no-desktop">
						<label>
						<input type="radio" name="">fino al giorno
						</label>             
					</div>
					<div class="span4" id="dataPre">
				   <input type="text" class="withIco" id="datepicker2">
				 </div>
				</div>
			</div>
		</div>		
		<div class="row-fluid">
			<label id="" class="nomefield">Causale*</label>
			<input type="text" name="" maxlength="" size="" value="">
		</div>

	</div>
</div>

<div class="tithelp flLeft"><div class="helpleft">Dati beneficiario</div></div>
<br class="clear">
<div class="borderFormRounded">
	<div class="formGeneric">
		<div class="row-fluid">
			<div class="span6">
				<label id="" class="nomefield">Nome beneficiario*</label>
				<input type="text">
			</div>
			<div class="span6"></div>
		</div>	
		<div class="row-fluid">	
			<div class="span6">
				<div class="row-fluid noMargbottom">
						<div class="span8">
							<label id="" class="nomefield">Iban Beneficiario</label>
							<input type="text">
					    </div>
						<div class="span4">
							<label id="" class="nomefield">&nbsp;</label>
							<a href="#" class="flRight linkInForm">Non hai l'iban</a>
					    </div>
				</div>
			</div>
			<div class="span6">
				<div class="row-fluid noMargbottom">
					<div class="span5">
						<label id="" class="nomefield">Numero c/c</label>
						<input type="text">
					</div>
					<div class="span1"><label class="nomefield">CIN</label><input type="text"></div>
					<div class="span3"><label class="nomefield ico">ABI*</label><a href="#"><img src="/img/ret/ico2or_dettagliosmall.gif"/></a><input type="text"></div>
					<div class="span3"><label class="nomefield ico">CAB*</label><a href="#"><img src="/img/ret/ico2or_dettagliosmall.gif"/></a><input type="text"></div>
				</div>
			</div>
		</div>
		<div class="row-fluid">	
			<div class="span6">
				<label id="" class="nomefield">Indirizzo</label>
				<input type="text">
			</div>
			<div class="span6">
				<label id="" class="nomefield">Localit&agrave;</label>
				<input type="text">
			</div>
		</div>
		<div class="row-fluid">	
			<div class="span6">
				<div class="row-fluid noMargbottom">	
					<div class="span3"><label class="nomefield">CAP*</label><input type="text"></div>
					<div class="span3"><label class="nomefield">Provincia*</label><select><option>SO</option>
					<option>PV</option>
					</select>
					
					</div>
					
					<div class="span3"><label class="nomefield">Nazione*</label><select><option>IT</option><option></option></select>
					</div>
					<div class="span3"></div>
				</div>
			</div>
		</div>
		</div>
	</div>


