<script type="text/javascript">
/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
addEvent(window, 'load', function() {
	createSelectRapp('sceltaRapporto_old');
	createSelectRapp('sceltaSottoRapporto_old');
});

var uniqTooltip = null;

function createTooltip () {
	if (uniqTooltip == null) {
		
	}
	else {
		
	}
}
/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>

<table class="form01">
	<tbody>
		<tr>
			<td class="unowt">Deposito titoli</td>
			<td class="rappWt">
				<div id="sceltaRapporto_old" class="selectRapp">
					<input type="hidden" class="value" id="rapporto_old" name="rapporto" value="xxx/aaaaaa"/>
					<a href="javascript:;" class="inputOption inputSx">
						<span class="inputDx">
							<span class="input">
								xxx/aaaaaa
							</span>
						</span>
					</a>
					<div class="selectorSpacer" style="display: none;"></div>
					<div class="selector" style="display: none;">
						<a value="xxx/aaaaaa" href="javascript:;" class="selectorOptions first">
							<strong>xxx/aaaaaa</strong><br/>
							Nome Nome Cognome Cognome1</a>
						<a value="xxx/bbbbbb" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
						<a value="xxx/cccccc" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
							Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
							Nome Nome Cognome Cognome5</a>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td class="unowt">Deposito titoli</td>
			<td class="rappWt">
				<div id="sceltaSottoRapporto_old" class="selectRapp">
					<input type="hidden" class="value" id="sottorapporto_old"  name="sottorapporto" value="xxx/aaaaaa"/>
					<a href="javascript:;" class="inputOption inputSx">
						<span class="inputDx">
							<span class="input">
								xxx/aaaaaa
							</span>
						</span>
					</a>
					<div class="selectorSpacer" style="display: none;"></div>
					<div class="selector" style="display: none;">
						<a value="xxx/aaaaaa" href="javascript:;" class="selectorOptions between first">
							<strong>xxx/aaaaaa</strong><br/>
							Nome Nome Cognome Cognome1</a>
						<a value="xxx/bbbbbb - tutti i sottodepositi" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
						<a value="xxx/bbbbbb/0" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/0</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
						<a value="xxx/bbbbbb/1" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/1</strong><br/>
							Nome Nome Cognome Cognome1</a>
						<a value="xxx/bbbbbb/2" href="javascript:;" class="selectorOptions between">
							<strong>xxx/bbbbbb/2</strong><br/>
							Nome Nome Cognome Cognome2</a>
						<a value="xxx/cccccc - tutti i sottodepositi" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
							Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
							Nome Nome Cognome Cognome5</a>
						<a value="xxx/cccccc/0" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc/0</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
							Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
							Nome Nome Cognome Cognome5</a>
						<a value="xxx/cccccc/1" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc/1</strong><br/>
							Nome Nome Cognome Cognome1</a>
						<a value="xxx/cccccc/2" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc/2</strong><br/>
							Nome Nome Cognome Cognome2</a>
						<a value="xxx/cccccc/3" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc/3</strong><br/>
							Nome Nome Cognome Cognome3</a>
						<a value="xxx/cccccc/4" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc/4</strong><br/>
							Nome Nome Cognome Cognome4</a>
						<a value="xxx/cccccc/5" href="javascript:;" class="selectorOptions">
							<strong>xxx/cccccc/5</strong><br/>
							Nome Nome Cognome Cognome5</a>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td class="unowt">Totale liquidit&agrave;:</td>
			<td class="importoWt">
				<div class="importoDeposito">
					<span class="uniqTooltipText"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span> C/C 00599 - 000009999 - EUR - WWWWWWWWWWWW
				</div>
				<a href="#1" class="btnformright rightPos" title="Dettaglio">
					<img src="/img/ret/btn_left_ar.gif" alt="" />
					<span>dettaglio</span>
					<img src="/img/ret/btn_right_ar.gif" alt="" />
				</a>
			</td>
		</tr>
	</tbody>
</table>

<div class="uniqTooltip">
	<div class="uniqTooltipArrow"></div>
	<div class="uniqTooltipBody">
	Lorem ipsum dolor <strong>sit amet</strong> adispicing.
	<strong>Dolor amet</strong> consecteur.
	</div>
</div>