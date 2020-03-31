<h3>Titolo della pagina</h3>
	<!-- NAVIGATORE TAB -->
	<div id="navtab">
		<a href="#">Ipsum sit conse</a>
		<a href="#" class="selected">Lorem dolor</a>
		<a href="#">Mela amet</a>
		<a href="#">Lorem amet</a>
		<span class="limiter"></span>
	</div>
	<!-- FINE NAVIGATORE TAB -->
	<div class="wtcontent">
	<h2>Ricerca per gruppo</h2>
		<form autocomplete="off" id="searchVis">
			<table cellspacing="0" cellpadding="0" class="inputtable">	
			<tr>
				<th colspan="2">Inserisci i parametri di ricerca:</th>
			</tr>
			<tr>
				<td>
				<fieldset>
					<label style="width:100px;">Gruppo</label>
					<select style="width:150px">
							<option value="">Gruppo 01</option>
							<option value="">Gruppo 02</option>
							<option value="">Gruppo 03</option>
							<option value="">Gruppo 04</option>
							<option value="">Gruppo 05</option>
							<option value="">Gruppo 06</option>
							<option value="">Gruppo 07</option>
							<option value="">Gruppo 08</option>
							<option value="">Gruppo 09</option>
							<option value="">Gruppo 10</option>
					</select>
					<input type="text" size="36">
				</fieldset>
				</td>
				<td>
				<!-- Colonna destra -->
				<fieldset>
					<label>Tipo visualizzazione</label>
					<div style="float:left"><input type="radio" name="visualizza" style="float:left; border:0;" checked value="espansa"><span style="float:left; font-size:11px; line-height:20px;">espansa</span></div>
					<div style="float:left"><input type="radio" name="visualizza" style="float:left;border:0;" value="ridotta"><span style="float:left; font-size:11px; line-height:20px;">ridotta</span></div>
				</fieldset>
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<fieldset>
					<label style="width:100px;">Utente</label>
					<input type="text" size="36">
				</fieldset>
				</td>
				
			</tr>
			</table>
		
			<div class="buttonpanel">
				<a href="javascript:;" class="button" onclick="treeviewInit()">Cerca</a>
			</div>
				
			
			</form>
		<div  id="idBoxDatiRicerca" style="display: none;">
		<table cellspacing="0" cellpadding="0" class="resulttable">
			<tr>
				<th>Matricola</th>
				<th>Gruppi di appartenenza</th>
			</tr>
			<tr>
				<td id="tdUtenti"></td>
				<td id="tdGruppi"></td>
			</tr>
		</table>
	</div>
	<div class="boxalert" id="idBoxError" style="display: none;">
		<div class="boxalertimage">
			<img src="/img/img_or_warning.gif">
		</div>
		<div class="boxalertdescription">
			<span class="boxalerttitle">Attenzione si è verificato un errore!</span>
			<p id="idMsg"></p>
			<a class="btnboxgray" title="lorem ipsum" href="#1"></a>
		</div>
	</div>
		<div  id="idBoxDatiRicerca" style="display: none;">	
			<table cellspacing="0" cellpadding="0" class="resulttable">
				<tr>
					<th>Matricola</th>
					<th>Nome e Cognome</th>
					<th>Gruppi di appartenenza</th>
				</tr>
				<tr>
					<td>bp77002</td>
					<td>Sara Strepponi</td>
					<td>WEFED | WEEXT</td>
				</tr>
			</table>
		</div>
			<!-- box di errore-->
			<div class="boxalert">
				<div class="boxalertimage">
					<img src="/img/img_or_warning.gif">
				</div>
				<div class="boxalertdescription">
					<span class="boxalerttitle">Attenzione si &egrave; verificato un errore nel caricamento della tabella</span>
					<p>
						Lorem ipsum dolor sit amet, CONSECTETUR ADIPISCING ELIT, lorem dolor amet con Dolor amet lorem ipsum.
					</p>
					<a href="#1" class="btnboxgray" title="lorem ipsum"><img src="/img/btn_left_bi.gif" alt=""><span>lorem ipsum</span><img src="/img/btn_right_bi.gif" alt=""></a>
				</div>
			</div>
			<br class="clear" />
			<!-- fine box di errore-->
	<div class="actTree"><a href="javascript:;" onclick="treeviewExpandall();" class="">Espandi tutti</a> - <a href="javascript:;" onclick="treeviewCollapseall()" class="">Contrai tutti</a></div>
	<div id="treeMenu"></div>
	
	<script type="text/javascript">
		//treeviewInit("treeMenu","/json/jsondata_orig.php?visualizza=espansa&rand=" + Math.round(), 2);
		treeviewInit("treeMenu","/json/json.php?rand=" + Math.round(), 2);
		//treeviewInit("treeMenu","https://www.wetoolssvi8web.webank.local/wetools/admin/showPermissionForUser.jsp?utente=&gruppo=WTL_INFO_EVENTI", 2);
	</script>
	<br class="clear">
	<br /><br />
	
	<br /><br /><br /><br />
</div>