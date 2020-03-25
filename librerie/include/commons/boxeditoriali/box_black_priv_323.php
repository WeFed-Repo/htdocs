<form id="formrichiestaError">
	<div class="row-fluid">
		<div class="span6 no-desktop">
			<label class="nomefield">Intestatario</label>
			<span class="output">Lorem ipsum</span>
		</div>
		<div class="span6 no-desktop">
			<label class="nomefield">Conto di addebito</label>
			<span class="output">CC 00599 0000013336 EUR</span>
		</div>
	</div>
	
	<div class="row-fluid tolltipclick">
			<div class="radiocont tolltipclick span6">
				<span class="nomefield">Circuito</span>
				<div class="row-fluid">
					<label class="span6 no-desktop"><input type="radio" name="carta" value="Mastercard">Mastercard<br/> 
						<span class="closed">
							<span id="consigliato" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
							<span class="uniqTooltipPos"><a href="javascript:;" class="underline textbottom">(Consigliato da Webank)</a>
								<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
							</span>
							</span>
						</span>
					</label>
					<label class="span6 no-desktop"><input type="radio"  name="carta" value="Visa">Visa</label>
				</div>
			</div>
			<div class="span6 no-desktop">
				<label class="nomefield">Limiti di spese</label>
				<span class="output">1.200 &euro; (Salvo valutazione di Webank)</span>
			</div>
	</div>
	
	
	<div class="row-fluid">
		<label class="nomefield">Indirizzo di spedizione</label>
		<span class="output">Via tal dei tali N&deg;5<br/>
		Lorem ipsum lorem ipsum <strong>lorem ipsum</strong> lorem ipsum</span>
	</div>
	<div class="row-fluid">
		<label class="left nomefield">Note</label>
		<input type="text" name="" placeholder="facoltativo">
	</div>
	
	
	<div class="disabledField">
		<span class="nomefield">Privacy</span>
		<span class="text">Consenso al trattamento dei miei dati previsto previsto dall' <a href="javascript:;"  onclick="ableinput(this)" target="_blank">informativa sui sistemi di informazione creditizi privati</a></span>
		<div class="tolltipclick row-fluid">
			<div class="radiocont span6">
				<div class="row-fluid">
					<div class="span6 no-desktop">
						<span class="closed">
							<span id="consenso1" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
								<span class="uniqTooltipPos">
									<a href="javascript:;"><label><span class="hovfin"></span><input type="radio" name="consenso" id="consenso" disabled>do il consenso</label></a>
									<span class="uniqTooltipInnerHTML">
										<p>prima di fornire il consenso devi leggere l'informativa privacy</p>
									</span>
								</span>
							</span>
						</span>
					</div>
					<div class="span6 no-desktop">
						<span class="closed">
							<span id="consenso2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
								<span class="uniqTooltipPos">
									<a href="javascript:;"><label><span class="hovfin"></span><input type="radio" name="consenso" id="noconsenso" disabled>non do il consenso</label></a>
									<span class="uniqTooltipInnerHTML">
										<p>prima di fornire il consenso devi leggere l'informativa privacy</p>
									</span>
								</span>
							</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<div class="tolltipclick row-fluid disabledField">
		<label class="nomefield">Informative</label>
			<span class="closed">
				<span id="informative" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' && $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="informative2" disabled></a>
						<span class="uniqTooltipInnerHTML">
							<p>per procedere occorre prendere visione</p>
						</span>
					</span>
						  
					</span>
			</span>
			<span class="text nopadd">Dichiaro di aver preso visione dopo averla stampata e/o salvata su supporto durevole <a href="javascript:;" onclick="ableinput(this)" target="_blank">&quot;la Documentazione Precontrattuale&quot;</a> sui contratti e servizi a distanza (documento di sintesi, informativa precontrattuale, contratto).<br/> Puoi consultare se desideri anche il <a target="_blank" href="#">Foglio informativo</a> </span>	
	</div>

	
	<div class="row-fluid">
		<legend>Attivazione</legend>
		<label>
		<input type="checkbox"  class="placeholder"/><span class="text nopadd">Dopo aver ricevuto la carta e il relativo Pin la attiver&ograve; chiamamando il numero verde indicato nella lettera di spedizione</span></label>
	</div>
	<div class="row-fluid">
		<label class="nomefield">Recesso</label>
		<span class="text nopadd">Puoi recedere dalla richiesta della carta entro 14 giorni senza oneri penali. <a href="#">Leggi il documento</a></span>
	</div>
</form>