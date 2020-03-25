

	<!-- LA FUNZIONE INCLUSA NELLA SEGUENTE RIGA E' IMPLEMENTATA ESCLUSIVAMENTE
			A FINI DI PREVIEW E NON DEVE ESSERE CONSIDERATA PER LO SVILUPPO -->
	<script type="text/javascript">
		var titoloIsLoading = false;
		
		function setTitoloLoading() {
			if (!titoloIsLoading) {
				titoloIsLoading = true;
				
				var faseStart = $('faseStart');
				var varStart = $('varStart');
				var modOrdini = {
					top: 0,
					left: 0,
					width: -1,
					height: -1
				};
				var modBook = {
					top: 0,
					left: 1,
					width: -1,
					height: -1
				};
				
				
				if (Prototype.Browser.IE) {
					++modOrdini.width;
					
					// Modifica per IE6
					if (typeof document.body.style.maxHeight == "undefined") ++modOrdini.top;
				}
				
				if (Prototype.Browser.WebKit) {
					++modOrdini.top;
					++modOrdini.left;
					++modBook.top;
				}
				
				// Caso in cui sia presente il primo blocco
				if (faseStart != null) {
					// Caso in cui sia presente anche il secondo blocco
					if (varStart != null) setLoadingOnObjects(faseStart, 'varEnd', 'ordiniLoading', true, modOrdini);
					// Caso in cui sia presente solo il primo blocco
					else setLoadingOnObjects(faseStart, 'faseEnd', 'ordiniLoading', true, modOrdini);
				}
				// Caso in cui sia presente solo il secondo blocco
				else setLoadingOnObjects(varStart, 'varEnd', 'ordiniLoading', true, modOrdini);
				
				$('rigavalori').setStyle({
					zoom: 1
				});		
				
				setLoadingOnObjects('rigavalori', 'rigavalori', 'bookLoading', false, modBook);			
				/*setLoadingOnObjects('sampleData1', 'sampleData1', 'sampleLoading', false, null);*/
			}
		}
		
		function unsetTitoloLoading() {
			$('ordiniLoading').hide();
			$('bookLoading').hide();
			/*$('sampleLoading').hide();*/
			
			titoloIsLoading = false;
		}
		
		function setLoadingOnObjects (startObj, endObj, loadingDiv, isBig, mod) {
			var startObj = $(startObj);
			var endObj = $(endObj);
			var loadingDiv = $(loadingDiv);
			var backgroundImage = isBig? 'ico2inf_loadingbig.gif' : 'ico2inf_loading.gif';
						
			if (mod == null) mod = {
				top: 0,
				left: 0,
				width: 0,
				height: 0
			};
			
			var startObjDim = startObj.getDimensions();
			var endObjDim = endObj.getDimensions();
			
			var startObjPos = null;
			var endObjPos = null;
			
			if (startObj.nodeName.toLowerCase() == 'tr') startObjPos = startObj.select('td')[0].positionedOffset();
			else startObjPos = startObj.positionedOffset();
			
			if (endObj.nodeName.toLowerCase() == 'tr') endObjPos = endObj.select('td')[0].positionedOffset();
			else endObjPos = endObj.positionedOffset();
			
			var loadingTop = startObjPos.top + mod.top;
			var loadingLeft = startObjPos.left + mod.left;
			var loadingWidth = endObjDim.width + mod.width;
			var loadingHeight = (endObjPos.top - loadingTop) + endObjDim.height + mod.height;
			
			loadingDiv.setStyle({
				top: loadingTop + 'px',
				left: loadingLeft + 'px',
				width: loadingWidth + 'px',
				height: loadingHeight + 'px',
				background: 'url(/wscmn/img/' + backgroundImage + ') #FFF no-repeat center center'
			}).show();
		}
	</script>
	<!-- FINE FUNZIONI PER EMULAZIONE -->
<div id="boxHidden">
<div class="insordcont">
	<div class="tithelppic">
			<div class="helpleft">Book di primo livello</div>	
			<div align="right" class="helpright2 wt">
				<a href="#1" id="sampleBut1" class="hlp" href="javascript:;" onclick="if (!titoloIsLoading) { setTitoloLoading(); setTimeout(unsetTitoloLoading, 5000); }" >aggiorna</a>
				<a href="#1" class="hlp" onclick="window.open('connect.php?page=/php/wetrade/tpl_priv_lib_wt_tipo_ordine_pop_up.php','main','width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes')" >book</a>
				
			</div>	
			<br class="clear"/>
	</div>
	<div id="bookPosition">
		<div id="bookLoading" style="display: none;"></div>
		<table class="condiz2" cellspacing="0">
			<tr class="color" id="firstRow">
				<td>Volume domanda</td>
				<td>Prezzo domanda</td>
				<td>Prezzo offerta</td>
				<td>Volume offerta</td>
			</tr>
			<tr class="dispari" id="rigavalori">
				<td class="right">2</td>
				<td class="right"><a href="">21770</a></td>
				<td class="right"><a href="">21770</a></td>
				<td class="right">2</td>
			</tr>
		</table>
	</div>


	<div id="tabordini2" class="tabordini2b">
		<div class="tithelppic">
			<div class="helpleft">Dati ordine</div>				
			<br class="clear" />
		</div>
		
		<table class="form03">
		<tr> 
			<td class="uno">Quantità*</td>
			<td><input type="text" class="piccolo" name="text"/></td>
			<td><select class="grande" name="select">
				<option>Esegui e Cancella</option>
				<option>-----------------------</option>
			</select> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa2');" onmouseover="nascondi('lampa2'); " href="#2"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
		</tr>
		<tr> 
			<td class="uno">Prezzo</td>
			<td><input type="text" class="piccolo" name="text"/>  <img usemap="#map1" src="/img/ret/frecce.gif"><map name="map1" id="map1"><area title="Aumenta di..." alt="Aumenta di..." href="#" coords="0,0,9,5" shape="rect"><area title="Diminuisci di 1000" alt="Diminuisci di 1000" href="#" coords="0,9,9,14" shape="rect"></map></td>
			<td><select class="grande" name="select">
				<option>Al limite</option>
				<option>-----------------------</option>
			</select> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa2');" onmouseover="nascondi('lampa2'); " href="#2"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
		</tr>
		<tr> 
			<td class="uno">Fase di mercato</td>
			<td colspan="2"><strong>Apertura/Continua/Chiusura</strong> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa2');" onmouseover="nascondi('lampa2'); " href="#2"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
		</tr>
		<tr> 
			<td class="uno">Validità</td>
			<td colspan="2"><select class="medio" name="select">
				<option>Al limite</option>
				<option>-----------------------</option>
			</select> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa2');" onmouseover="nascondi('lampa2'); " href="#2"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
		</tr>
		</table>
		<div class="tithelppic">
		<div class="helpleft">Tipo ordine</div>
		<div align="right" class="BvTableHeaderHelp"><a href="#1" class="hlp" onclick="javascript:window.open('connect.php?page=/php/wetrade/tpl_priv_lib_wt_tipo_ordine_pop_up.php','main','width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes')" >help</a><br class="clear"></div>
	<br class="clear"></div>

	<table class="form03">
	<tr> 
		<td>
			<div class="inputdom">
				
				<div class="nobor3 padd7"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3"> Operativit&agrave; ordinaria</div>
				<div class="nobor3 padd7"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3"> Operativit&agrave; marginata</div>
				<div class="nobor3 padd7"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3"> Short overnight</div>
			</div>
			</td>
		</tr>
	</table>

		<div class="fooform">
		<div class="fooformright">
			<div><a title="lorem ipsum" class="btnformright" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_inserim_ordini_inserito_rie.php&amp;liv1=TR&amp;tr2=1&amp;tr3=1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>vendi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
			<div><a title="lorem ipsum" class="btnformright" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_blocco_ordini.php&amp;liv1=TR&amp;tr2=1&amp;tr3=1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>compra</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
		</div>
		
	</div>
	</div>
</div>

<div id="tabordini" class="tabordinib">
	<div class="tithelp">	
		<div class="helpleft">Dettaglio titolo</div>
		<div align="right" class="helpright2 wt"><a href="#1" class="hlp" onclick="window.open('connect.php?page=/php/wetrade/tpl_priv_lib_wt_tipo_ordine_pop_up.php','main','width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes')" >scheda</a>
		
		<a href="#1" class="hlp" onclick="window.open('connect.php?page=/php/wetrade/tpl_priv_lib_wt_tipo_ordine_pop_up.php','main','width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes')" >mercato</a>
		<br class="clear"></div>
		<br class="clear"/>
	</div>

	<div id="ordiniPosition">
		<div id="ordiniLoading" style="display: none;"></div>
		<table class="box03wt">
		<tr> 
			<td width="2"></td>
			<td class="uno"><p>Descrizione</p></td>
			<td class="outputmk"><p>STMICROELECTRON NV</p></td>
			<td width="3"></td>
		</tr>
		<tr> 
			<td width="2"></td>
			<td class="uno"><p>Codice ISIN</p></td>
			<td class="outputmk"><p>IT0001976403</p></td>
			<td width="3"></td>
		</tr>
		<tr class="separator"> 
			<td width="2"></td>
			<td class="uno"><p>Mercato</p></td>
			<td class="outputmk"><p>MTA - Azionario telematico italiano</p></td>
			<td width="3"></td>
		</tr>		  
		</table>
		<table class="box03wtgrey">
		<tr id="faseStart">
			<td width="2"></td>
			<td class="uno" colspan="2"><p>Fase</p><p class="right">CONTINUA</p></td>

			<td width="3"></td>
		</tr>
		<tr class="underline"> 
			<td width="2"></td>
			<td class="uno" colspan="2"><strong>Ultimo prezzo</strong><strong class="right"><a href="">6,50</a></strong></td>
			<td width="3"></td>
		</tr>
		<tr id="faseEnd" class="underline"> 
			<td width="2"></td>
			<td class="uno" colspan="2"><strong>Quantità acquistabile</strong><strong class="right">167</strong></td>
			<td width="3"></td>
		</tr>
		
		<tr id="varStart"> 
			<td width="2"></td>
			<td class="uno" colspan="2"><p>Variazione</p><img src="img/ret/wt_indice_neg.gif" /><strong class="right nega">-0,38%</strong></td>
			<td width="3"></td>
		</tr>
		<tr class="grey"> 
			<td width="2"></td>
			<td class="uno" colspan="2"><p>Prezzo di controllo</p><strong class="right">6,535</strong></td>
			<td width="3"></td>
		</tr>
		<tr class="grey"> 
			<td width="2"></td>
			<td class="uno" colspan="2"><p>Max giornata</p><strong class="right">6,615</strong></td>
			<td width="3"></td>
		</tr>
		<tr class="grey"> 
			<td width="2"></td>
			<td class="uno" colspan="2"><p>Min giornata</p><strong class="right">6,415</strong></td>
			<td width="3"></td>
		</tr>
		<tr id="varEnd" class="grey">
			<td width="2"></td>
			<td class="uno" colspan="2"><p>Volume scambiato</p><strong class="right">2.212.757</strong></td>
			<td width="3"></td>
		</tr>

		<tr class="grey"> 
			<td width="2"></td>
			<td class="uno" colspan="2"><p>Lotto minimo</p><strong class="right">1</strong></td>
			<td width="3"></td>
		</tr>
		<tr class="grey"> 
			<td width="2"></td>
			<td class="uno" colspan="2"><p>Regolamento</p><strong class="right">+ 3 gg lavorativi</strong></td>
			
			<td width="3"></td>
		</tr>
		</table>
	</div>
</div>
</div>


