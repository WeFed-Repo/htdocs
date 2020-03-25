<?php  if ($isWebank) {  ?>
<!-- popup movimenti $conto tecnico -->
<div class="popUpMovimenti layeralert3" id="popUpMovimenti1" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body instestazionePopUp">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">MOVIMENTI $conto TECNICO</h2></div>
			<br class="clear">
		</div>
		<div class="clear"></div>
		<table class="tab17 tab17nob" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<th class="uno">Data contabile</th>
					<th>Data valuta</th>
					<th>Dettaglio</th>
					<th class="ultimo">Entrate <span class="valuta"></span></th>
					<th class="ultimo">Uscite <span class="valuta"></span></th>
				</tr>
				<tr class="b bb" id="nessunoCT">
					<td colspan="4">Nessun movimento presente</td>
				</tr>
				<tr class="b bb" id="rigaCT0">
					<td id="dataContabileCT0" class="data"></td>
					<td id="dataValutaCT0" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCT0_1"></li>
							<li id="dettaglioCT0_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT0"></td>
					<td class="dx ultimo nega" id="tdUscitaCT0"></td>
				</tr>
				<tr class="c bb" id="rigaCT1">
					<td id="dataContabileCT1" class="data"></td>
					<td id="dataValutaCT1" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCT1_1"></li>
							<li id="dettaglioCT1_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT1"></td>
					<td class="dx ultimo nega" id="tdUscitaCT1"></td>
				</tr>
				<tr class="b bb" id="rigaCT2">
					<td id="dataContabileCT2" class="data"></td>
					<td id="dataValutaCT2" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCT2_1"></li>
							<li id="dettaglioCT2_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT2"></td>
					<td class="dx ultimo nega" id="tdUscitaCT2"></td>
				</tr>
				<tr class="c bb" id="rigaCT3">
					<td id="dataContabileCT3" class="data"></td>
					<td id="dataValutaCT3" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCT3_1"></li>
							<li id="dettaglioCT3_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT3"></td>
					<td class="dx ultimo nega" id="tdUscitaCT3"></td>
				</tr>
				<tr class="b bb" id="rigaCT4">
					<td id="dataContabileCT4" class="data"></td>
					<td id="dataValutaCT4" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCT4_1"></li>
							<li id="dettaglioCT4_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT4"></td>
					<td class="dx ultimo nega" id="tdUscitaCT4"></td>
				</tr>
				<tr class="c bb" id="rigaCT5">
					<td id="dataContabileCT5" class="data"></td>
					<td id="dataValutaCT5" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCT5_1"></li>
							<li id="dettaglioCT5_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT5"></td>
					<td class="dx ultimo nega" id="tdUscitaCT5"></td>
				</tr>
				<tr class="b bb" id="rigaCT6">
					<td id="dataContabileCT6" class="data"></td>
					<td id="dataValutaCT6" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCT6_1"></li>
							<li id="dettaglioCT6_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT6"></td>
					<td class="dx ultimo nega" id="tdUscitaCT6"></td>
				</tr>
				<tr class="c bb"  id="rigaCT7">
					<td id="dataContabileCT7" class="data"></td>
					<td id="dataValutaCT7" class="data"></td>
					<td class="sx">
						<ul id='listafrecCT7' class="listafrec">
							<li id="dettaglioCT7_1"></li>
							<li id="dettaglioCT7_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT7"></td>
					<td class="dx ultimo nega" id="tdUscitaCT7"></td>
				</tr>
				<tr class="b bb" id="rigaCT8">
					<td id="dataContabileCT8" class="data"></td>
					<td id="dataValutaCT8" class="data"></td>
					<td class="sx">
						<ul id='listafrecCT8' class="listafrec">
							<li id="dettaglioCT8_1"></li>
							<li id="dettaglioCT8_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT8"></td>
					<td class="dx ultimo nega" id="tdUscitaCT8"></td>
				</tr>
				<tr class="c bb" id="rigaCT9">
					<td id="dataContabileCT9" class="data"></td>
					<td id="dataValutaCT9" class="data"></td>
					<td class="sx">
						<ul id='listafrecCT9' class="listafrec">
							<li id="dettaglioCT9_1"></li>
							<li id="dettaglioCT9_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCT9"></td>
					<td class="dx ultimo nega" id="tdUscitaCT9"></td>
				</tr>
			</tbody>
		</table>
		<div class="piePopUp"><a id="linkMovimentiCT" href="javascript:;" title="Vai a tutti i movimenti del $conto tecnico">Vai a tutti i movimenti del $conto tecnico</a>&nbsp;</div>
        <div class="clear"></div>
	</div>
	<div class="foot"></div>
</div>
<!-- /popup movimenti $conto tecnico -->
<?php  }  ?>

<!-- popup movimenti $conto corrente -->
<div class="popUpMovimenti layeralert3" id="popUpMovimenti2" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body instestazionePopUp">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">MOVIMENTI <?php echo strtoupper($contoLabelLongSingLow) ?></h2></div>
			<br class="clear">
		</div>
		<div class="clear"></div>
		<table class="tab17 tab17nob" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<th class="uno">Data contabile</th>
					<th>Data valuta</th>
					<th>Dettaglio</th>
					<th class="ultimo" >Entrate <span class="valuta"></span></th>
					<th class="ultimo" >Uscite <span class="valuta"></span></th>
				</tr>
				<tr class="b bb" id="nessunoCC">
					<td colspan="4">Nessun movimento presente</td>
				</tr>
				<tr class="b bb" id="rigaCC0">
					<td id="dataContabileCC0"></td>
					<td id="dataValutaCC0"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC0_1"></li>
							<li id="dettaglioCC0_2"></li>
						</ul>						
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC0"></td>
					<td class="dx ultimo nega" id="tdUscitaCC0"></td>
				</tr>
				<tr class="c bb" id="rigaCC1">
					<td id="dataContabileCC1" class="data"></td>
					<td id="dataValutaCC1" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC1_1"></li>
							<li id="dettaglioCC1_2"></li>
						</ul>
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC1"></td>
					<td class="dx ultimo nega" id="tdUscitaCC1"></td>
				</tr>
				<tr class="b bb" id="rigaCC2">
					<td id="dataContabileCC2" class="data"></td>
					<td id="dataValutaCC2" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC2_1"></li>
							<li id="dettaglioCC2_2"></li>
						</ul>
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC2"></td>
					<td class="dx ultimo nega" id="tdUscitaCC2"></td>
				</tr>
				<tr class="c bb" id="rigaCC3">
					<td id="dataContabileCC3" class="data"></td>
					<td id="dataValutaCC3" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC3_1"></li>
							<li id="dettaglioCC3_2"></li>
						</ul>
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC3"></td>
					<td class="dx ultimo nega" id="tdUscitaCC3"></td>
				</tr>
				<tr class="b bb" id="rigaCC4">
					<td id="dataContabileCC4" class="data"></td>
					<td id="dataValutaCC4" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC4_1"></li>
							<li id="dettaglioCC4_2"></li>
						</ul>
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC4"></td>
					<td class="dx ultimo nega" id="tdUscitaCC4"></td>
				</tr>
				<tr class="c bb" id="rigaCC5">
					<td id="dataContabileCC5" class="data"></td>
					<td id="dataValutaCC5" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC5_1"></li>
							<li id="dettaglioCC5_2"></li>
						</ul>
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC5"></td>
					<td class="dx ultimo nega" id="tdUscitaCC5"></td>
				</tr>
				<tr class="b bb" id="rigaCC6">
					<td id="dataContabileCC6" class="data"></td>
					<td id="dataValutaCC6" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC6_1"></li>
							<li id="dettaglioCC6_2"></li>
						</ul>
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC6"></td>
					<td class="dx ultimo nega" id="tdUscitaCC6"></td>
				</tr>
				<tr class="c bb" id="rigaCC7">
					<td id="dataContabileCC7" class="data"></td>
					<td id="dataValutaCC7" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC7_1"></li>
							<li id="dettaglioCC7_2"></li>
						</ul>
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC7"></td>
					<td class="dx ultimo nega" id="tdUscitaCC7"></td>
				</tr>
				<tr class="b bb" id="rigaCC8">
					<td id="dataContabileCC8" class="data"></td>
					<td id="dataValutaCC8" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC8_1"></li>
							<li id="dettaglioCC8_2"></li>
						</ul>
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC8"></td>
					<td class="dx ultimo nega" id="tdUscitaCC8"></td>
				</tr>
				<tr class="c bb" id="rigaCC9">
					<td id="dataContabileCC9" class="data"></td>
					<td id="dataValutaCC9" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCC9_1"></li>
							<li id="dettaglioCC9_2"></li>
						</ul>
						<div class="vedidett"><a href="javascript:;">Vedi dettagli</a></div>
						<div class="clear"></div>
						<div style="display:none" class="dettaglio">Lorem ipsum lorem ipsum lorem ipsum</div>
					</td>
					<td class="dx" id="tdEntrataCC9"></td>
					<td class="dx ultimo nega" id="tdUscitaCC9"></td>
				</tr>
			</tbody>
		</table>
		<div class="piePopUp"><a id="linkMovimentiCC" href="javascript:;" title="Vai a tutti i movimenti del <?php echo $contoLabelLongSingLow ?>">Vai a tutti i movimenti del <?php echo $contoLabelLongSingLow ?></a>&nbsp;</div>
        <div class="clear"></div>
	</div>
	<div class="foot"></div>
</div>
<!-- /popup movimenti $conto corrente -->

<!-- popup movimenti deposito -->
<div class="popUpMovimenti layeralert3" id="popUpMovimenti3" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body instestazionePopUp">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">MOVIMENTI DEPOSITO</h2></div>
			<br class="clear">
		</div>
		<div class="clear"></div>
		<table class="tab17 tab17nob" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<th class="uno">Data contabile</th>
					<th>Data valuta</th>
					<th>Dettaglio</th>
					<th class="ultimo">Entrate <span class="valuta"></span></th>
					<th class="ultimo">Uscite <span class="valuta"></span></th>
				</tr>
				<tr class="b bb" id="nessunoCD">
					<td colspan="4">Nessun movimento presente</td>
				</tr>
				<tr class="b bb" id="rigaCD0">
					<td id="dataContabileCD0" class="data"></td>
					<td id="dataValutaCD0" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCD0_1"></li>
							<li id="dettaglioCD0_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD0"></td>
					<td class="dx ultimo nega" id="tdUscitaCD0"></td>
				</tr>
				<tr class="c bb" id="rigaCD1">
					<td id="dataContabileCD1" class="data"></td>
					<td id="dataValutaCD1" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCD1_1"></li>
							<li id="dettaglioCD1_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD1"></td>
					<td class="dx ultimo nega" id="tdUscitaCD1"></td>
				</tr>
				<tr class="b bb" id="rigaCD2">
					<td id="dataContabileCD2" class="data"></td>
					<td id="dataValutaCD2" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCD2_1"></li>
							<li id="dettaglioCD2_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD2"></td>
					<td class="dx ultimo nega" id="tdUscitaCD2"></td>
				</tr>
				<tr class="c bb" id="rigaCD3">
					<td id="dataContabileCD3" class="data"></td>
					<td id="dataValutaCD3" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCD3_1"></li>
							<li id="dettaglioCD3_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD3"></td>
					<td class="dx ultimo nega" id="tdUscitaCD3"></td>
				</tr>
				<tr class="b bb" id="rigaCD4">
					<td id="dataContabileCD4" class="data"></td>
					<td id="dataValutaCD4" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCD4_1"></li>
							<li id="dettaglioCD4_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD4"></td>
					<td class="dx ultimo nega" id="tdUscitaCD4"></td>
				</tr>
				<tr class="c bb" id="rigaCD5">
					<td id="dataContabileCD5" class="data"></td>
					<td id="dataValutaCD5" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCD5_1"></li>
							<li id="dettaglioCD5_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD5"></td>
					<td class="dx ultimo nega" id="tdUscitaCD5"></td>
				</tr>
				<tr class="b bb" id="rigaCD6">
					<td id="dataContabileCD6" class="data"></td>
					<td id="dataValutaCD6" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCD6_1"></li>
							<li id="dettaglioCD6_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD6"></td>
					<td class="dx ultimo nega" id="tdUscitaCD6"></td>
				</tr>
				<tr class="c bb"  id="rigaCD7">
					<td id="dataContabileCD7" class="data"></td>
					<td id="dataValutaCD7" class="data"></td>
					<td class="sx">
						<ul id='listafrecCD7' class="listafrec">
							<li id="dettaglioCD7_1"></li>
							<li id="dettaglioCD7_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD7"></td>
					<td class="dx ultimo nega" id="tdUscitaCD7"></td>
				</tr>
				<tr class="b bb" id="rigaCD8">
					<td id="dataContabileCD8" class="data"></td>
					<td id="dataValutaCD8" class="data"></td>
					<td class="sx">
						<ul id='listafrecCD8' class="listafrec">
							<li id="dettaglioCD8_1"></li>
							<li id="dettaglioCD8_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD8"></td>
					<td class="dx ultimo nega" id="tdUscitaCD8"></td>
				</tr>
				<tr class="c bb" id="rigaCD9">
					<td id="dataContabileCD9" class="data"></td>
					<td id="dataValutaCD9" class="data"></td>
					<td class="sx">
						<ul id='listafrecCD9' class="listafrec">
							<li id="dettaglioCD9_1"></li>
							<li id="dettaglioCD9_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCD9"></td>
					<td class="dx ultimo nega" id="tdUscitaCD9"></td>
				</tr>
			</tbody>
		</table>
		<div class="piePopUp"><a id="linkMovimentiCD" href="javascript:;" title="Vai a tutti i movimenti del deposito">Vai a tutti i movimenti del deposito</a>&nbsp;</div>
        <div class="clear"></div>
	</div>
	<div class="foot"></div>
</div>
<!-- /popup movimenti deposito -->

<?php  if ($isWebank) {  ?>
<!-- popup movimenti liquidità derivati -->
<div class="popUpMovimenti layeralert3" id="popUpMovimenti4" style="display: none;">
	<div class="head handle">
		<img src="/img/ret/layeralert_x.gif" alt="chiudi">
	</div>
	<div class="body instestazionePopUp">
		<div class="tithelp wt">	
			<div class="helpleft"><h2 class="titTable">MOVIMENTI LIQUIDIT&Agrave; DERIVATI</h2></div>
			<br class="clear">
		</div>
		<div class="clear"></div>
		<table class="tab17 tab17nob" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<th class="uno">Data contabile</th>
					<th>Data valuta</th>
					<th>Dettaglio</th>
					<th class="ultimo">Entrate <span class="valuta"></span></th>
					<th class="ultimo">Uscite <span class="valuta"></span></th>
				</tr>
				<tr class="b bb" id="nessunoCDER">
					<td colspan="4">Nessun movimento presente</td>
				</tr>
				<tr class="b bb" id="rigaCDER0">
					<td id="dataContabileCDER0" class="data"></td>
					<td id="dataValutaCDER0" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCDER0_1"></li>
							<li id="dettaglioCDER0_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER0"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER0"></td>
				</tr>
				<tr class="c bb" id="rigaCDER1">
					<td id="dataContabileCDER1" class="data"></td>
					<td id="dataValutaCDER1" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCDER1_1"></li>
							<li id="dettaglioCDER1_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER1"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER1"></td>
				</tr>
				<tr class="b bb" id="rigaCDER2">
					<td id="dataContabileCDER2" class="data"></td>
					<td id="dataValutaCDER2" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCDER2_1"></li>
							<li id="dettaglioCDER2_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER2"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER2"></td>
				</tr>
				<tr class="c bb" id="rigaCDER3">
					<td id="dataContabileCDER3" class="data"></td>
					<td id="dataValutaCDER3" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCDER3_1"></li>
							<li id="dettaglioCDER3_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER3"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER3"></td>
				</tr>
				<tr class="b bb" id="rigaCDER4">
					<td id="dataContabileCDER4" class="data"></td>
					<td id="dataValutaCDER4" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCDER4_1"></li>
							<li id="dettaglioCDER4_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER4"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER4"></td>
				</tr>
				<tr class="c bb" id="rigaCDER5">
					<td id="dataContabileCDER5" class="data"></td>
					<td id="dataValutaCDER5" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCDER5_1"></li>
							<li id="dettaglioCDER5_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER5"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER5"></td>
				</tr>
				<tr class="b bb" id="rigaCDER6">
					<td id="dataContabileCDER6" class="data"></td>
					<td id="dataValutaCDER6" class="data"></td>
					<td class="sx">
						<ul class="listafrec">
							<li id="dettaglioCDER6_1"></li>
							<li id="dettaglioCDER6_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER6"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER6"></td>
				</tr>
				<tr class="c bb"  id="rigaCDER7">
					<td id="dataContabileCDER7" class="data"></td>
					<td id="dataValutaCDER7" class="data"></td>
					<td class="sx">
						<ul id='listafrecCDER7' class="listafrec">
							<li id="dettaglioCDER7_1"></li>
							<li id="dettaglioCDER7_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER7"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER7"></td>
				</tr>
				<tr class="b bb" id="rigaCDER8">
					<td id="dataContabileCDER8" class="data"></td>
					<td id="dataValutaCDER8" class="data"></td>
					<td class="sx">
						<ul id='listafrecCDER8' class="listafrec">
							<li id="dettaglioCDER8_1"></li>
							<li id="dettaglioCDER8_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER8"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER8"></td>
				</tr>
				<tr class="c bb" id="rigaCDER9">
					<td id="dataContabileCDER9" class="data"></td>
					<td id="dataValutaCDER9" class="data"></td>
					<td class="sx">
						<ul id='listafrecCDER9' class="listafrec">
							<li id="dettaglioCDER9_1"></li>
							<li id="dettaglioCDER9_2"></li>
						</ul>
					</td>
					<td class="dx" id="tdEntrataCDER9"></td>
					<td class="dx ultimo nega" id="tdUscitaCDER9"></td>
				</tr>
			</tbody>
		</table>
		<div class="piePopUp"><a id="linkMovimentiCDER" href="javascript:;" title="Vai a tutti i movimenti della liquidit&agrave; derivati">Vai a tutti i movimenti della liquidit&agrave; derivati</a>&nbsp;</div>
        <div class="clear"></div>
	</div>
	<div class="foot"></div>
</div>
<!-- /popup movimenti liquidità derivati -->
<?php  }  ?>
