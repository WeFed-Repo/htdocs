<h3>Titolo della pagina</h3>
			<!-- NAVIGATORE TAB -->
			<div id="navtab">
				<a href="#">Estinzione conti</a>
				<a href="#" class="selected">Lorem dolor</a>
				<a href="#">Mela amet</a>
				<a href="#">Lorem amet</a>
				<span class="limiter"></span>
			</div>
			<!-- FINE NAVIGATORE TAB -->
		<div class="boxleftinput" id="elementoCaricamento">	
			<table class="inputtableb" cellpadding="0" cellspacing="0">	
				<tr>
					<th>Cerca per:</th>
				</tr>
				<tr>
					<td>
					<fieldset>
				<input type="radio" class="radiofl" name="tipoRicerca" value="nome" id="tipoRicercaCognome" checked="checked"/>
				<label>Cognome e Nome</label>
				<input type="text" name="nome" value="" size="50" onfocus="document.getElementById('tipoRicercaCognome').checked=true;"/>
			</fieldset>
			<fieldset>
				<input type="radio" class="radiofl" name="tipoRicerca" id="tipoRicercaConto" value="conto" />
				<label>Rapporto<br /><span class="pic">(agenzia / numero)</span></label>
				<div class="wrapper">
					<select name="tipoProdotto"/>
						<option value="CC" selected="selected">Conto corrente</option>
						<option value="CT">Conto tecnico</option>
						<option value="CCDEP">Conto deposito</option>
						<option value="CUS">Custodia titoli</option>
						<option value="CDER">Conto derivati</option>
					</select>&nbsp;
					<input type="text" name="agenzia" size="5" onfocus="document.getElementById('tipoRicercaConto').checked=true;" value="599">
					<input type="text" name="numero" size="11" onfocus="document.getElementById('tipoRicercaConto').checked=true;">
				</div>
			</fieldset>
			<fieldset>
				<input type="radio" class="radiofl" name="tipoRicerca" id="tipoRicercaData" value="data" />
				<label>Data</label>
				<span class="pic">da</span><input name="dataDa" id="1" type="text" value="gg/mm/aaaa" class="data" style="color:#7f7f7f;" onfocus="document.getElementById('1').value='';document.getElementById('tipoRicercaData').checked=true;">
				<span class="pic">a</span><input name="dataA" id="2" type="text" value="gg/mm/aaaa" class="data" style="color:#7f7f7f;" onfocus="document.getElementById('2').value='';document.getElementById('tipoRicercaData').checked=true;">
			</fieldset>
			<fieldset>
				<input type="radio" class="radiofl" name="tipoRicerca" id="tipoRicercaCanale" value="canale" />
				<label>Canale</label>
				<div class="wrapper">
					<select name="tipoCanale" onfocus="document.getElementById('tipoRicercaCanale').checked=true;"/>
						<option value="WEB">Cliente</option>
						<option value="BAT">Past due</option>
						<option value="NOT">Import notes</option>
						<option value="UFF">Chiusura d'ufficio</option>
					</select>
				</div>
			</fieldset>
					</td>				
				</tr>
			</table>
			<br />
			<div class="buttonpanel">
				<a href="javascript:;" class="button" onclick="setLoadingOnObject('elementoCaricamento'); setTimeout(function(){unsetLoadingOnObject('elementoCaricamento')},2000); ">Cerca</a>
			</div>
		</div>
		<div class="boxrightinput">	
			<table class="inputtableb" cellpadding="0" cellspacing="0">	
		<tr>
			<th colspan="5">Shortcut:</th>
		</tr>
		<tr>
			<td>C. CORRENTE
				<ul>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=INS&tipoProdotto=CC">inseriti</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=REST&tipoProdotto=CC">sospesi</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=GEST&tipoProdotto=CC">attesa estinz .serv</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=DALIQ&tipoProdotto=CC">da liquidare</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=LIQ&tipoProdotto=CC">da azzerare</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=DEST&tipoProdotto=CC">da estinguere</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=EST_E&tipoProdotto=CC">da verificare</a>
					</li>
					<li>
						
						<a href="./RicercaPratiche.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&ibanMancante=TRUE">iban mancante</a>
					</li>
				</ul>					
			</td>	
			<td>C. TECNICO
				<ul>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=INS&tipoProdotto=CT">inseriti</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=REST&tipoProdotto=CT">sospesi</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=GEST&tipoProdotto=CT">attesa estinz .serv</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=LIQ&tipoProdotto=CT">da azzerare</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=DEST&tipoProdotto=CT">da estinguere</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=EST_E&tipoProdotto=CT">da verificare</a>
					</li>
					<li>
						
						<a href="./RicercaPratiche.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&custodiaMancante=TRUE">custodia mancante</a>
					</li>
				</ul>					
			</td>	
			<td>C. DEPOSITO
				<ul>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=INS&tipoProdotto=CCDEP">inseriti</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=GEST&tipoProdotto=CCDEP">attesa estinz .serv</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=DALIQ&tipoProdotto=CCDEP">da liquidare</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=LIQ&tipoProdotto=CCDEP">da azzerare</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=DEST&tipoProdotto=CCDEP">da estinguere</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=EST_E&tipoProdotto=CCDEP">da verificare</a>
					</li>
				</ul>					
			</td>
			<td>C. DERIVATI
				<ul>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=INS&tipoProdotto=CDER">inseriti</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=REST&tipoProdotto=CDER">sospesi</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=LIQ&tipoProdotto=CDER">da azzerare</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=DEST&tipoProdotto=CDER">da estinguere</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=EST_E&tipoProdotto=CDER">da verificare</a>
					</li>
				</ul>					
			</td>	
			<td>C. DERIVATI
				<ul>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=INS&tipoProdotto=CDER">inseriti</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=REST&tipoProdotto=CDER">sospesi</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=LIQ&tipoProdotto=CDER">da azzerare</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=DEST&tipoProdotto=CDER">da estinguere</a>
					</li>
					<li>
						
						<a href="./RicercaProdotti.do?obsKey=WeT_Pri_Aol_Gcc&tabId=WeT_Pri_Aol&obsKey3=WeT_Pri_Aol_Ger&statoProdotto=EST_E&tipoProdotto=CDER">da verificare</a>
					</li>
				</ul>					
			</td>
		</tr>
	</table>
		</div>
		<br class="clear" />
		
		<div class="selez_topb">
			<img class="sx" src="/img/bg_selez_top_left.gif" alt="" />
			<img class="dx" src="/img/bg_selez_top_right.gif" alt="" />
			<br class="clear" />
		</div>
		<table class="resulttableb" cellpadding="0" cellspacing="0">	
		<tr>
			<th></th>
			<th>Num conto base</th>
			<th>Cliente</th>
			<th>Data inserimento</th>
			<th>Stato</th>
			<th>ID pratica</th>
			<th></th>
			<th></th>
		</tr>
		<?php
			for($i=0;$i<2;$i++)
			{
		?>
		<tr class="espandibile">
			<td class="colonnaespansione"><a href="javascript:;" class="espansione" onclick="switchDetail(this);"></a></td>
			<td>000000001</td>
			<td>Rossi Mario</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>				
			<td class="center"><a href="/index.php?layout=int&page=599_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
		</tr>
		<tr class="dettaglioespandibile">
			<td colspan="8">
				<table cellpadding="0" cellspacing="0" class="tableint">
					<tr>
						<th>Tipo rapporto</th>
						<th>Num. conto</th>
						<th>Stato</th>
						<th>Data estinzione</th>
						<th>Iban mancante</th>
						<th></th>
					</tr>
					<tr>
						<td>ctit</td>
						<td>599-000000001</td>
						<td></td>
						<td></td>
						<td></td>
						<td><div><a class="buttontab red" href="#">Lorem ipsum</a></div></td>
					</tr>
					<tr>
						<td>cdep</td>
						<td>599-000000002</td>
						<td></td>
						<td></td>
						<td></td>
						<td><div><a class="buttontab" href="#">Lorem ipsum</a></div></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php
			}
		?>
		<tr class="espandibile">
			<td></td>
			<td>000000001</td>
			<td>Rossi Mario</td>
			<td></td>
			<td></td>
			<td></td>
			<td align="center"><div><a class="buttontab" href="#">Lorem ipsum</a></div></td>				
			<td class="center"><a href="/index.php?layout=int&page=599_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
		</tr>
		<?php
			for($i=0;$i<4;$i++)
			{
		?>
		<tr class="espandibile">
			<td class="colonnaespansione"><a href="javascript:;" class="espansione" onclick="switchDetail(this);"></a></td>
			<td>000000001</td>
			<td>Rossi Mario</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>				
			<td class="center"><a href="/index.php?layout=int&page=599_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
		</tr>
		<tr class="dettaglioespandibile">
			<td colspan="8">
				<table cellpadding="0" cellspacing="0" class="tableint">
					<tr>
						<th>Tipo rapporto</th>
						<th>Num. conto</th>
						<th>Stato</th>
						<th>Data estinzione</th>
						<th>Iban mancante</th>
						<th></th>
					</tr>
					<tr>
						<td>ctit</td>
						<td>599-000000001</td>
						<td></td>
						<td></td>
						<td></td>
						<td><div><a class="buttontab red" href="#">Lorem ipsum</a></div></td>
					</tr>
					<tr>
						<td>cdep</td>
						<td>599-000000002</td>
						<td></td>
						<td></td>
						<td></td>
						<td><div><a class="buttontab" href="#">Lorem ipsum</a></div></td>
					</tr>
				</table>
			</td>
		</tr>
		<?php
			}
		?>
		<tr class="espandibile">
			<td></td>
			<td>000000001</td>
			<td>Rossi Mario</td>
			<td></td>
			<td></td>
			<td></td>
			<td><div><a class="buttontab" href="#">Lorem ipsum</a></div></td>				
			<td class="center"><a href="/index.php?layout=int&page=599_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
		</tr>
	</table>
	<div class="selez_bottomb">
			<img class="sx" src="/img/bg_selez_bottom_left.gif" alt="" />
			<img class="dx" src="/img/bg_selez_bottom_right.gif" alt="" />
			<br class="clear" />
		</div>

	
	<table class="inputtable bonificict" cellpadding="0" cellspacing="0" >	
		<tr>
			<td class="label inputtablert">			
			<div class="multiRight">							
				<div class="multibuttonpanel">
					<a class="button" href="#">ESTINGUI</a>
				</div>
			</div>
			</td>
		</tr>
	</table><br />		
	
		<table class="resulttableb" cellpadding="0" cellspacing="0">	
		<tr>
			<th>Conto base</th>
			<th>Conto derivati</th>
			<th>Cliente</th>
			<th>Data</th>
			<th></th>
			<th><input type="checkbox" id=""  value="" name="" onclick="selectallcheck(this);" class="noSelect" /><Tutti</a></th>
		</tr>		
		<tr>
			<td>000000001</td>
			<td>1068-000000000001</td>
			<td>Rossi Mario</td>
			<td></td>							
			<td class="center"><a href="/index.php?layout=int&page=599_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			<td><input type="checkbox" id=""  value="" name="" /></td>
		</tr>		
		<tr>
			<td>000000002</td>
			<td>1068-000000000002</td>
			<td>Bianchi Antonio</td>
			<td></td>							
			<td class="center"><a href="/index.php?layout=int&page=599_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			<td><input type="checkbox" id=""  value="" name="" /></td>
		</tr>		
		<tr>
			<td>000000003</td>
			<td>1068-000000000003</td>
			<td>Bianchi Antonio</td>
			<td></td>							
			<td class="center"><a href="/index.php?layout=int&page=599_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			<td><input type="checkbox" id=""  value="" name="" /></td>
		</tr>
		<tr>
			<td>000000004</td>
			<td>1068-000000000004</td>
			<td>Bianchi Antonio</td>
			<td></td>							
			<td class="center"><a href="/index.php?layout=int&page=599_dettagli" class="icobutton"><img src="/img/bt_matita.gif"></td>
			<td><input type="checkbox" id=""  value="" name="" /></td>
		</tr>
	</table><br />
	
	
	
	
	
	
		<table class="inputtable bonificict" cellpadding="0" cellspacing="0" >	
		<tr>
			<td class="label inputtablert">			
			<div class="multiRight">						
				<div class="multibuttonpanel">
					<a class="button" href="#">ESTINGUI</a>
				</div>
			</div>
			</td>
		</tr>
	</table><br />
	<!-- HTML PAGINAZIONE -->
	<table class="paginazione">
		<tr>
			<td>
				<div class="lettere">
					<a href="#" class="tutti">Tutti</a>
					<?php
					for($x=65; $x<91; $x++)
					{
					?>
						<a href="#" title="<?php print (chr($x)); ?>" <?php if ($x==80) {print ("class='unactive'");}?><?php if ($x==70) {print ("class='selected'");}?>><?php print (chr($x)); ?></a>
					<?php
					}
					?>
				</div>
			</td>
		</tr>
	</table><br>
	<!-- FINE HTML PAGINAZIONE -->
	
	<!-- PAGINAZIONE N. PAGINA -->
	<div class="pagination">
		<p>Portafoglio clienti</p>
		<div class="pagConsole">
			<ul id="pagination-wt">
				<li class="previous-off">
					&lt;&lt; Precedente
				</li>
				<li>
					<a href="javascript:goToPage(1)" class="active">1</a>
				</li>
				<li>
					<a href="javascript:goToPage(2)">2</a>
				</li>
				<li class="next">
						<a href="javascript:goToPage(2)">Successiva &gt;&gt;</a>
				</li>
			</ul>
			<button onclick="clicca('goToPage_1');" title="vai a pagina">Vai</button>
			<input type="text" size="2" maxlength="10" id="goToPage_1">
		</div>
	</div>
	<!-- FINE PAGINAZIONE N. PAGINA -->
