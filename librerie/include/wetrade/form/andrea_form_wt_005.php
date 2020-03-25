

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
				setLoadingOnObjects('sampleData1', 'sampleData1', 'sampleLoading', false, null);
			}
		}
		
		function unsetTitoloLoading() {
			$('ordiniLoading').hide();
			$('bookLoading').hide();
			$('sampleLoading').hide();
			
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
			<div class="helpleft"><div class="lastupdate" id="sampleData1">
		<div style="display: none;" id="sampleLoading"></div>
		Dati alle 14:20:42 del 01.01.2011</div></div>	
			<div align="right" class="helpright2 wt">
				<a title="aggiorna" href="javascript:;" onclick="if (!titoloIsLoading) { setTitoloLoading(); setTimeout(unsetTitoloLoading, 5000); }">aggiorna</a>
			</div>	
			<br class="clear"/>
	</div>
	<div id="bookPosition">
<div id="bookLoading" style="display: none;"></div>
<table cellspacing="0" cellpadding="0" class="condiz2 insord">
	<tr class="color">
		<td>Ultimo</td>
		<td>Var %</td>
		<td>Vol. dom</td>
		<td>Prezzo dom</td>
		<td>Prezzo off</td>
		<td>Vol. off</td>
	</tr>
	<tr class="dispari" id="rigavalori">
		<td class="center large">119,1825</td>
		<td class="center large posi" id="valpuls">+10,35</td>
		<td class="center">88888888,88</td>
		<td class="center"><a href="">88888888,88</a></td>
		<td class="center"><a href="">88888888,88</a></td>
		<td class="center">88888888,88</td>
	</tr>
</table>

</div>


<div id="tabordini2" class="tabordini2b">
<table class="form03">
	<tr> 
		<td class="uno">Quantità*</td>
		<td><input type="text" class="piccolo" name="text"/></td>
		<td><select class="grande" name="select">
			<option>Esegui e Cancella</option>
			<option>-----------------------</option>
		</select> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa2');" onmouseover="nascondi('lampa2'); " href="#2"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"/><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
	</tr>
	<tr> 
		<td class="uno">Prezzo</td>
		<td><input type="text" class="piccolo" name="text"/>  <img usemap="#map1" src="/img/ret/frecce.gif"/><map name="map1" id="map1"><area title="Aumenta di..." alt="Aumenta di..." href="#" coords="0,0,9,5" shape="rect"/><area title="Diminuisci di 1000" alt="Diminuisci di 1000" href="#" coords="0,9,9,14" shape="rect"/></map></td>
		<td><select class="grande" name="select">
			<option>Al limite</option>
			<option>-----------------------</option>
		</select> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa2');" onmouseover="nascondi('lampa2'); " href="#2"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"/><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
	</tr>
	<tr> 
		<td class="uno">Fase di mercato</td>
		<td colspan="2"><strong>Apertura/Continua/Chiusura</strong> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa2');" onmouseover="nascondi('lampa2'); " href="#2"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"/><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
	</tr>
	<tr> 
			<td class="uno">Validità</td>
			<td colspan="2"><select class="medio" name="select">
				<option>Al limite</option>
				<option>-----------------------</option>
			</select> <span class="tooltip"><a class="nounderline" onmouseout="vedi('lampa2');" onmouseover="nascondi('lampa2'); " href="#2"><img class="lampa" id="lampa2" src="/img/ret/lampa_off.gif"/><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
		</tr>
	<tr> 
		<td class="uno">Tipo ordine</td>
		<td colspan="2">
			<div class="inputdom">
				
				<div class="nobor3 padd7"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3" id="radiopulsate"/>ordinaria</div>
				<div class="nobor3 padd7"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3"/>marginata</div>
				<div class="nobor3 padd7"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3"/> Short overnight</div>
			</div>
			</td>
	</tr>
	</table>
</div>
<div class="fooform">
		<div class="fooformwt">
			<div class="fooformwtleft"><a title="lorem ipsum" class="btnformright" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_inserim_ordini_inserito_rie.php&amp;liv1=TR&amp;tr2=1&amp;tr3=1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
			<div class="fooformwtright"><a title="lorem ipsum" class="btnformright" href="/connect.php?page=str_interna_priv.php&amp;tpl=wetrade/tpl_priv_lib_wt_blocco_ordini.php&amp;liv1=TR&amp;tr2=1&amp;tr3=1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
		</div>
		
	</div>
</div>

<div class="tabordinib" id="tabordini">
<div class="tithelp">	
	<div class="helpright2 wt"><a title="book" href="">book</a> <a title="scheda" href="">scheda</a> <a title="mercato" href="">mercato</a></div>
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
			<td></td>
			<td class="uno"><p>Codice ISIN</p></td>
			<td class="outputmk"><p>IT0001976403</p></td>
			<td></td>
		</tr>
		<tr> 
			<td></td>
			<td class="uno"><p>Mercato</p></td>
			<td class="outputmk"><p>IDEM - Derivati italiani</p></td>
			<td></td>
		</tr>
		<tr  id="faseStart"> 
			<td></td>
			<td class="uno"><p>Fase</p></td>
			<td class="outputmk"><p>CONTINUA</p></td>
			<td></td>
		</tr>
		<tr id="faseEnd"> 
			<td></td>
			<td class="uno"><p>Quantità acquistabile</p></td>
			<td class="outputmk"><p><strong>3</strong></p></td>
			<td></td>
		</tr>
		<tr id="varStart"> 
			<td></td>
			<td class="uno"><p>Max giornata</p></td>
			<td class="outputmk"><p><strong>6.615</strong></p></td>
			<td></td>
		</tr>
		<tr> 
			<td></td>
			<td class="uno"><p>Min giornata</p></td>
			<td class="outputmk"><p><strong>6.020</strong></p></td>
			<td></td>
		</tr>
		<tr id="varEnd"> 
			<td></td>
			<td class="uno"><p>Volume scambiato</p></td>
			<td class="outputmk"><p><strong>20.265</strong></p></td>
			<td></td>
		</tr>
		<tr> 
			<td></td>
			<td class="uno"><p>Lotto minimo</p></td>
			<td class="outputmk"><p><strong>3</strong></p></td>
			<td></td>
		</tr>
		<tr class="separator"> 
			<td width="2"></td>
			<td class="uno"><p>Regolamento</p></td>
			<td class="outputmk"><p><strong>+3gg lavorativi</strong></p></td>
			<td width="3"></td>
		</tr>		
		</table>
		
</div>
</div>
</div>


