<script type="text/javascript">
$(function() {
	$("#leftmenu").append($("#faseStart").show());
});	
</script>

<div id="faseStart" class="boxWidgetCont" style="display:none">
	<div class="boxWidget">
		<span class="carrelloType">sicuro</span>
		<span class="carrelloNum">1234567890</span>
		<div class="cta"><a href="#" class="btncta"><span>vai al carrello</span></a></div>
	</div>
</div>

<h1>CARRELLO</h1>
<div id="boxAllDone" class="box49">
	<div class="dispo_esito_top"> </div>
	<div class="dispo_esito_center">
		<div class="dispo_esito_txt2">
			<span class="msg">HAI INSERITO GLI ORDINI PER TUTTI I FONDI PRESENTI NEL PORTAFOGLIO SICURO</span>
			<p>Se vuoi essere aggiornato sulle variazioni di composizione di questo portafoglio,
				iscriviti al <a href="javascript:;">servizio di alert sui fondi</a>.</p>
		</div>
	</div>
	<br class="clear" />
	<div class="dispo_esito_bottom"> </div>
</div>


<div id="boxToFinish" class="boxModello">
	<div class="boxModelloTop">
		<img src="/img/ret/str_boxmodello_top.gif" alt="" />
	</div>
	<div class="boxModelloMiddle">
		<img src="/img/ret/ico2or_modello_carrello.gif" alt="modello sicuro"  class="icobgr"/>
		<div class="boxModelloTxt">
			<h3>SICURO</h3>
			<p class="boxModelloPar">
				Prima di inserire nuovi ordini, <strong>verifica la tua situazione attuale</strong>.
				Se vuoi adeguare i tuoi investimenti ai modelli proposti,
				controlla che il carrello che hai composto modifichi le <strong>percentuali	delle categorie</strong>
				del tuo portafoglio attuale, <strong>adattandole</strong> a quelle indicate nel portafoglio modello.</p>
			
			<p id="titCarrelloDep">Guarda la tua situazione attuale</p>
			<table class="form01 nopadd carrello">
				<tbody>
					<tr>
						<td class="rappWt">
							<div id="sceltaRapportoPopup" class="selectRapp">
								<input id="sceltaRapportoValPopup" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
								<a href="javascript:;" class="inputOption inputSx">
									<span class="inputDx">
										<span class="input">
											xxx/aaaaaa
										</span>
									</span>
								</a>
								<div class="selectorSpacer" style="display: none;"></div>
								<div class="selector" style="display: none;">
									<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
										<strong>xxx/aaaaaa</strong><br/>
										Nome Nome Cognome Cognome1</a>
									<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
										<strong>xxx/bbbbbb</strong><br/>
										Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
									<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc</strong><br/>
										Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
										Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
										Nome Nome Cognome Cognome5</a>
								</div>
							</div>
						</td>
						<td class="btnWt"><a id="btnPortafoglio" href="javascript:;" onclick=""></a></td>
					</tr>
				</tbody>
			</table>
			
			<p class="boxModelloPar">
				Se, prima di acquistare nuovi fondi,
				vuoi <strong>vendere</strong> o effettuare <strong>switch</strong> tra i fondi in tuo possesso,
				procedi tramite il tuo <a href="javascript:;">portafoglio operativo</a>.</p>
		</div>
	</div>
	<div class="boxModelloBottom">
		<img src="/img/ret/str_boxmodello_bottom.gif" alt="" />
	</div>
	<br class="clear" />
</div>

<h3>Elenco fondi selezionati</h3>

<table id="tbFondi" cellspacing="0" cellpadding="0" class="condiz2 sortable">
	<tr class="color"> 
		<td width="250px"><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_giu.gif"/></a><br/>Fondo</td>
		<td><a title="#" href="#"><img title="" alt="" src="/img/ret/ico_giu.gif"/></a><br/>Categorie</td>
		<td width="60px">Peso</td>
		<td width="100px">Tot. da investire<br/><input id="importoFondi" type="text" name="text" class="importo" value="" autocomplete="off"></td>
		<td width="125px">Importo minimo prima sottoscrizione</td>
		<td width="35" class="center">&nbsp;</td>
	</tr>
	<tr class="dispari"> 
		<td class="left">Fondo Lorem Ipsum 1</td>
		<td class="left">Azionario 1</td>
		<td class="right perc">10,00%</td>
		<td class="right imp">//</td>
		<td class="right minInv">1.000</td>
		<td class="center"><a href="javascript:;"><img src ="img/ret/ico1gr_revoca.gif" alt=""/></a></td>
	</tr>
	<tr class="pari"> 
		<td class="left">Fondo Sit Amet 1</td>
		<td class="left">Azionario 2</td>
		<td class="right perc">5,05%</td>
		<td class="right imp">//</td>
		<td class="right minInv">1.000</td>
		<td class="center"><a href="javascript:;"><img src ="img/ret/ico1gr_revoca.gif" alt=""/></a></td>
	</tr>
	<tr class="dispari"> 
		<td class="left">Fondo Lorem Ipsum 2</td>
		<td class="left">Azionario 1</td>
		<td class="right perc">12,15%</td>
		<td class="right imp">//</td>
		<td class="right minInv">2.000</td>
		<td class="center"><a href="javascript:;"><img src ="img/ret/ico1gr_revoca.gif" alt=""/></a></td>
	</tr>
	<tr class="pari"> 
		<td class="left">Fondo Sit Amet 2</td>
		<td class="left">Azionario 2</td>
		<td class="right perc">30,35%</td>
		<td class="right imp">//</td>
		<td class="right minInv">1.000</td>
		<td class="center"><a href="javascript:;"><img src ="img/ret/ico1gr_revoca.gif" alt=""/></a></td>
	</tr>
	<tr class="dispari"> 
		<td class="left">Fondo Lorem Ipsum 3</td>
		<td class="left">Azionario 1</td>
		<td class="right perc">27,35%</td>
		<td class="right imp">//</td>
		<td class="right minInv">1.500</td>
		<td class="center"><a href="javascript:;"><img src ="img/ret/ico1gr_revoca.gif" alt=""/></a></td>
	</tr>
	<tr class="pari"> 
		<td class="left">Fondo Sit Amet 3</td>
		<td class="left">Azionario 2</td>
		<td class="right perc">15,10%</td>
		<td class="right imp">//</td>
		<td class="right minInv">2.500</td>
		<td class="center"><a href="javascript:;"><img src ="img/ret/ico1gr_revoca.gif" alt=""/></a></td>
	</tr>
	<tr class="color"> 
		<td colspan="2" class="left">Categorie per cui non sono stati selezionati fondi:</td>
		<td class="right totPerc">0%</td>
		<td class="right totImp">0</td>
		<td colspan="2" class="center">
			<a id="aggiungiFondi" href="javascript:;" class="btnevid1" title="lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>AGGIUNGI FONDI</span><img src="/img/ret/btn_right_sm1.gif" alt="" /></a>			
		</td>
	</tr>
</table>
<div class="fooform">
	<div class="fooformleft">
		<div><a href="javascript:;" class="btnformleft" title="lorem ipsum"><img src="/img/ret/btn_left_bi.gif" alt="" /><span>elimina carrello</span><img src="/img/ret/btn_right_bi.gif" alt="" /></a></div>	
	</div>
	<div class="fooformright">
		<div><a href="javascript:;" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>inserisci gli ordini</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
		<div><a href="javascript:;" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>modifica fondi</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
		<div><a href="javascript:;" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>portafoglio operativo</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
		<br class="clear" />
	</div>	
	<br class="clear" />
</div>
				
<script type="text/javascript">
document.observe('dom:loaded', function() {
	createSelectRapp('sceltaRapportoPopup', 'sceltaRapportoValPopup', sceltaRapportoFuncPopup);
	
	// Handler per gestire l'importo da investire nei fondi del carrello
	Event.observe('importoFondi', 'keyup', aggiornaInvestimenti);
	Event.observe('importoFondi', 'blur', aggiornaInvestimenti);
});

function sceltaRapportoFuncPopup (option) {
	// Testo selezione: option.text
	// Valore selezione: option.value
	// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}

function sceltaSottoRapportoFuncPopup (option) {
	// Testo selezione: option.text
	// Valore selezione: option.value
	// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
}
</script>