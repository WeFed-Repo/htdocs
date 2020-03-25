<!-- INIZIO CODICE--> 
<h1>IMPOSTA ALERT</h1><br />
<p>Lorem ipsum dolor <strong>sit amet</strong>, consectetuer adipiscing elit. Nullam libero ligula, lobortis id, accumsan ac, consectetuer id, augue. Donec <strong>viverra</strong>, metus in <a href="#">consequat fermentum</a>, erat <strong>ipsum eleifend dolor</strong>, a fringilla metus lacus porttitor diam. Fusce metus est, tempor</p>

	<ul class="listafrec">
	<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
	<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
	</ul><br />
<!-- FINE CODICE-->
<!-- INIZIO CODICE-->
<table class="form01 out">
	<tr> 
		<td class="uno">N&ordm; di cellulare:</td>
		<td><strong>0000000000</strong></td>
		<td class="uno">Operatore:</td>
		<td><strong>Wind</strong></td>
	</tr>
	<tr> 
		<td class="uno">Indirizzo e-mail:</td>
		<td colspan="3"><strong>lorem@lorem.it</strong></td>
	</tr>
</table>
<!-- FINE CODICE-->

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam libero ligula, lobortis id,</p>
<br />	
<div class="divtabellatabs">
<table class="tabellatabs" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td class="oninizio"></td>
		<td class="off"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">lorem ipsum lorem</a></td><td class="off2">&nbsp;</td>
		<td class="on" isselected="true"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">Titoli e indici</a></td><td class="on2b">&nbsp;</td>
		<td class="off"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">lorem ipsum</a></td><td class="off2">&nbsp;</td>
		<td class="off"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">lorem ipsum<br>lorem ipsum</a></td><td class="off2">&nbsp;</td>
		<td class="off"><a title="Lorem ipsum" href="javascript:;" onmouseover="newTabOn(this);" onmouseout="newTabOff(this);" onclick="newTabSelected(this);">lorem ipsum</a></td><td class="off2">&nbsp;</td>
	</tr>
</table>

<div class="divtabellacont">

	<h3 class="verde">Sottotitolo pagina</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute.</p>
	
	
	<!-- CONTENUTI TAB-->
	<div class="boxalert">
	<div class="boxalertimage">
		<img src="/wscmn/img/ret/img_or_warning_FP.gif">
	</div>
	<div class="boxalertdescription">
		<span class="boxalerttitle">Attenzione</span>
		<p>
			L'ultima quotazione non &egrave; al momento disponibile e pertanto non puoi inserire un alert a soglia.<br /> Puoi inserire un alert periodico oppure riprovare pi&ugrave; tardi.
		</p>
		
	</div>
</div>
	
	<!-- contenuti di riepilogo-->
	<div>
		<div class="insordcont">
			<div class="tithelppic">
				<div class="helpleft">Titolo trovato</div>	
				<br class="clear"/>
			</div>
			
		
			<table class="form01 insord insordout">
				<tr> 
					<td>Mercato</td>
					<td width="40%"><strong id="output1">MTA</strong></td>
					<td>Titolo</td>
					<td width="60%"><strong id="output2">A.S Roma</strong></td>
					
				</tr>		
			</table>
			
			<!-- tabella di input-->
			<div class="tabordini2b" id="tabordini2">
				<!--<table class="form03">
					<tr> 
						<td class="uno" width="115">Scadenza (Max 30 gg)</td>
						<td>
						<select name="select" class="grande">
							<option>04/12/2010</option>
							<option>05/12/2010</option>
						</select> <span class="tooltip"><a href="#1" onmouseover="nascondi('lampa1'); " onmouseout="vedi('lampa1');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="lampa1" class="lampa"/><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span></td>
					</tr>
				</table>
			
			<script type="text/javascript">
			function disableRadio()
				{
				var radiobtn = $('tabordini2').select('input.attivo');
				for(i=0; i<radiobtn.length; i++) 
					{
						var fieldtodis = radiobtn[i].up('table.form03').select('.fieldtype');
						for(j=0; j<fieldtodis.length;j++) 
						{
							
							if(radiobtn[i].checked){fieldtodis[j].removeAttribute("disabled");}
							else {fieldtodis[j].setAttribute("disabled","disabled")}
						}	
					}
				
				}
			</script>
			<table class="form03">
				<tr>
					<td><div class="nobor3"><input class ="attivo" type="radio" value="radiobutton" name="radiobutton" checked="checked" onclick="disableRadio()"  /><strong>Imposta soglie</strong></div></td>
					<td><p class="note">Inserire almeno una soglia di riferimento (min e/o max) per determinare la condizione.</p></td>
				</tr>
				<tr> 
				<td class="indenttd" width="115">Soglia minima</td>
				<td>
					<span class="condizfirst">
						<img src="/img/ret/str_minore_uguale.gif" alt=""/>
						<span id="liquiditaDep1" class="uniqTooltipText over static">
							<span class="uniqTooltipPos"><input type="text" onblur="checkValuePrice (event, this, '>=', 'valore');" onfocus="removeUniqTooltip(event, this)" class="fieldtype" name="text" id="fieldfirst"/> </span>
							<span class="uniqTooltipInnerHTML">
								Condizione già verificata. Inserisci un valore inferiore al prezzo attuale. 
							</span>
						</span>
						<img class="arrowmap" usemap="#map3" src="/img/ret/frecce.gif"/><map name="map3" id="map3"><area title="Aumenta di..." alt="Aumenta di..." href="javascript:;" coords="0,0,9,5" shape="rect"/><area onclick="checkValuePrice (event, this.parentNode.parentNode.select('input')[0], '>=', 'valore'); " title="Diminuisci di 1000" alt="Diminuisci di 1000" href="javascript:;" coords="0,9,9,14" shape="rect"/></map>
						<span class="tooltip"><a href="#8" onmouseover="nascondi('lampa8'); " onmouseout="vedi('lampa8');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="lampa8" class="lampa"/><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span>
						
					
					</span>
				</td>
				</tr>
				<tr> 
					<td class="indenttd" width="115">Soglia massima</td>
					<td>
					<span class="condizfirst">
						
						<img src="/img/ret/str_maggiore_uguale.gif" alt=""/>
						<span id="liquiditaDep2" class="uniqTooltipText under static">
							<span class="uniqTooltipPos"><input type="text" onblur="checkValuePrice (event, this, '<=', 'valore');" onfocus="removeUniqTooltip(event, this)" class="fieldtype" name="text"/> </span>
							<span class="uniqTooltipInnerHTML">
								Condizione già verificata. Inserisci un valore superiore al prezzo attuale.
							</span>
						</span>
						<img class="arrowmap" usemap="#map4" src="/img/ret/frecce.gif"/><map name="map4" id="map4"><area onclick="checkValuePrice (event, this.parentNode.parentNode.select('input')[0], '<=', 'valore');" title="Aumenta di..." alt="Aumenta di..." href="javascript:;" coords="0,0,9,5" shape="rect"/><area title="Diminuisci di 1000" alt="Diminuisci di 1000" href="#" coords="0,9,9,14" shape="rect"/></map>
						<span class="tooltip"><a href="#7" onmouseover="nascondi('lampa7'); " onmouseout="vedi('lampa7');" class="nounderline"><img src="/img/ret/lampa_off.gif" id="lampa7" class="lampa"/><span><span><span>lorem ipsum dolor dolor sit</span></span></span></a></span>
					</span>
				
				</td>
			</tr>
				</table>-->
			<div class="tithelppic">
				<div class="helpleft">Attiva periodicit&agrave; alert</div>	
				<br class="clear"/>
			</div>
			<table class="form03">
			
				<tr> 
					
					<td class="indenttd"><input type="radio" value=""  class="fieldtype"/>Settimanale<br/><input type="radio" value=""   class="fieldtype"/>Giornaliero</td>
					<td>
						<table class="tabletxttr">
							<tr> 
								<td class="txtr nobordtop">Giorno:</td>
								<td class="nobordtop"><select class="fieldtype" name="select">
								<option>-- seleziona --</option>
								<option></option>
								</select></td>
								<td class="txtr nobordtop">Orario:</td>
								<td class="nobordtop"><select class="fieldtype" name="select">
								<option>hh</option>
								<option></option>
								</select></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<div class="fooform">
				<div class="fooformleft">
					<div><a title="lorem ipsum" class="btnformleft" href="#1"><img alt="" src="/img/ret/btn_left_bi.gif"/><span>indietro</span><img alt="" src="/img/ret/btn_right_bi.gif"/></a></div>	
				</div>
				<div class="fooformright">
					<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>conferma</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
					<div><a title="lorem ipsum" class="linkformright" href="#1">annulla</a></div>
				</div>
			</div>
			</div>
		
		</div>
		<div id="tabordini" class="tabordinib">
		<div class="tithelp">	
			<div class="helpright2 wt"><a href="javascript:;" title="aggiorna" onclick="setLoadingOnObject('tabellavalori'); setTimeout(function() {unsetLoadingOnObject('tabellavalori')}, 2800);">aggiorna</a></div>
			<br class="clear"/>
		</div>
		
		<table class="box03wt" id="tabellavalori">
		<tbody><tr> 
			<td width="2"></td>
			<td class="uno"><p>Ultimo prezzo</p></td>
			<td class="outputmk"><p><strong id="valore">0,85</strong></p></td>
			<td width="3"></td>
		</tr>
		<tr> 
			<td/>
			<td class="uno"><p>Ora</p></td>
			<td class="outputmk"><p><strong>15:55:25</strong></p></td>
			<td/>
		</tr>
		<tr> 
			<td/>
			<td class="uno"><p>Variazione %</p></td>
			<td class="outputmk"><p><strong>-0,85%</strong></p></td>
			<td/>
		</tr>
		<tr id="faseStart"> 
			<td/>
			<td class="uno"><p>Max giornata</p></td>
			<td class="outputmk"><p><strong>0,8575</strong></p></td>
			<td/>
		</tr>
		<tr id="sampleQuant"> 
			<td/>
			<td class="uno"><p>Min giornata</p></td>
			<td class="outputmk"><p><strong>-0,86%</strong></p></td>
			<td/>
		</tr>
		<tr> 
			<td/>
			<td class="uno"><p>Pr domanda</p></td>
			<td class="outputmk"><p><strong>0,8575</strong></p></td>
			<td/>
		</tr>
		<tr> 
			<td/>
			<td class="uno"><p>Pr offerta</p></td>
			<td class="outputmk"><p><strong>-0,86%</strong></p></td>
			<td/>
		</tr>
			
		</tbody></table>
		</div>
	</div>

	<!-- fine contenuti di riepilogo-->
	</div>
<img class="chiusura" alt="" src="/wscmn/img/str_tab_chiusura.gif"/>
</div>