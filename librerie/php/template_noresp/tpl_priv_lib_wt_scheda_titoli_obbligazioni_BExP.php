<h1>obbligazioni</h1>
<div class="schedaTitoliCont">
	<div class="aggiornamento">Ultimo aggiornamento DD/MM/YYYY ore MM/HH</div>
	<br class="clear" />
	<div class="schedaTitoliContTop">
		<div class="titolo">Lorem ipsum</div>
		
	</div>
	<div class="schedaTitoliContMdl">
		<div class="variazioni">
			<div class="variazioniLeft">
				<span class="label">variazioni</span>
				<br class="clear" />
				<img src="/img/ret/indicatore_trend_pos1.gif" alt="" />
				<br class="clear" />
				<span class="up">+2,13<span class="small">%</span></span>
			</div>
			<div class="variazioniRight small">
				<ul>
					<li class="first"><span class="label">ultimo prezzo<br /><span class="date">gg/mm/aa - hh/mm:ss</span></span><span class="up">5,13</span></li>
					<li><span class="valoreNullo">-</span></li>
					<li class="third"><span class="label">Ultima quantit&agrave; scambiata<br /> in acquisto o vendita</span><span class="num">3,33 - 3,33</span></li>
					<li><span class="label onerow">valuta standard</span><span class="num">xx gg</span><br class="clear" /><span class="date">lavorativi da data eseguito</span></li>
					
					
				</ul>
			
			</div>
		</div>

	<style>
	ul.menuPrimo{float:left; position:relative}
	ul.menuPrimo li{float:left;width:150px; background-color:red}
	ul.menuSecondo{float:none;width:100px;display:none}
	ul.menuSecondo li{background-color:grey}
	ul.menuTerzo{float:left;width:100px;display:none}
	ul.menuTerzo li{float:none;width:100px;background-color:green}
	</style>
	
	<div class="toolbar">
	<ul class="menuPrimo" id="menuTool">
	<li onmouseover="showMenu(this)" onmouseout="hideMenu(this)">prima voce <ul class="menuSecondo" style="display:none"><li onmouseover="showMenu(this)" onmouseout="hideMenu(this)">sottovoce 1 <ul class="menuTerzo" style="display:none"><li onmouseover="showMenu(this)" onmouseout="hideMenu(this)">sottovoce 1.1</li><li onmouseover="showMenu(this)" onmouseout="hideMenu(this)">sottovoce 1.2</li></ul></li><li onmouseover="showMenu(this)" onmouseout="hideMenu(this)">sottovoce 2<ul class="menuTerzo" style="display:none"><li>sottovoce 1.1</li><li onmouseover="showMenu(this)" onmouseout="hideMenu(this)">sottovoce 1.2</li></ul></li><li>sottovoce 3</li></ul></li>
	<li onmouseover="showMenu(this)" onmouseout="hideMenu(this)">seconda voce<ul class="menuSecondo" style="display:none"><li>sottovoce 1 <ul class="menuTerzo" style="display:none"><li>sottovoce 1.1</li><li>sottovoce 1.2</li></ul></li><li>sottovoce 2</li><li>sottovoce 3</li></ul></li>
	<li onmouseover="showMenu(this)" onmouseout="hideMenu(this)">terza voce<ul class="menuSecondo" style="display:none"><li>sottovoce 7</li><li>sottovoce 8</li><li>sottovoce 9</li></ul></li>
	</ul>
	
	</div>
	<script type="text/javascript">
	
	function showMenu(btn){
		var sottoMenu = btn.getElementsByTagName('ul');
		if(sottoMenu){
		for(i=0;i<sottoMenu.length;i++) {
		if(sottoMenu[0].style.display == 'none') {sottoMenu[0].style.display = 'block'}
		}
		}
	}
	function hideMenu(btn){
		var sottoMenu = btn.getElementsByTagName('ul');
		if(sottoMenu){
		for(i=0;i<sottoMenu.length;i++) {
		if(sottoMenu[0].style.display == 'block') {sottoMenu[0].style.display = 'none'}
		}
		}
	}
	/*function init(){
	var ele = document.getElementById('menuTool').getElementsByTagName('li');
	if(navigator.appName != "Microsoft Internet Explorer"){
		for(i=0;i<ele.length;i++){
		ele[i].addEventListener("mouseover", function () {showMenu(this)}, false); 
		ele[i].addEventListener("mouseout", function () {hideMenu(this)}, false); 
		}
    }	
	if(navigator.appName == "Microsoft Internet Explorer"){
		for(i=0;i<ele.length;i++){
		ele[i].setAttribute('onmouseover',function(){showMenu(this)});
		ele[i].setAttribute('onmouseout',function(){hideMenu(this)});
		}
    }
	}
	
	window.onload = function() {init()}*/
	</script>
	
	<div class="dettagli">
				
		
		<div>
			<div class="toolbarSpace"></div>
			<div class="graficoSpace"><img src="/img/ret/grafico_placeholder.gif" alt=""/></div>
			<div class="boxInfo">
				<img src="/img/ret/str_bg_infoTitoli_Top.gif"  alt=""/>
				<div class="boxInfoCont">
					<ul>
						<li>Prz. Apertura: <span>9,9999</span></li>
						<li>Prz. Min/Max: <span>9,9998/9,9999</span></li>
						<li>Prz. rif.: <span>9,9999</span></li>
						<li>Q.t&agrave; tot.: <span>X.XXX,XXX</span></li>
						<li>Stato: <span>Lorem ipsum</span></li>
					</ul>
				</div>
				<img src="/img/ret/str_bg_infoTitoli_Bot.gif"  alt=""/>
			</div>
		
			<div class="schedadati">
				<br class="clear">
		
			<div class="titTable">Titolo</div>
			<table cellspacing="0" cellpadding="0" class="pop">
						<tr class="dispari"> 
							<td>Emittente</td>
							<td><strong>Lorem ipsum</strong></td>
							<td>Codice ISIN</td>
							<td><strong>XXXXXXXXXXX</strong></td>
						</tr>
						<tr class="pari"> 
							<td>Descrizione titolo</td>
							<td><strong>Lorem ipsum</strong></td>
							<td>Ticker</td>
							<td><strong>XXXXX</strong></td>
						</tr>
						<tr class="dispari"> 
							<td>Rating</td>
							<td><strong><a href="">xxx</a></strong></td>
							<td colspan="2"><div class="nobor3"><img src="/img/ret/pdf.gif" alt=""></div><div class="nobor3"><a href="#1">Scheda titolo emittente</a></div></td>
							
						</tr>
					
			</table>
			<div class="col">
					<div class="titTable">Cedole</div>
					<table cellspacing="0" cellpadding="0" class="pop">
						<tr class="dispari"> 
								<td>Cedola</td>
								<td class="posdx"><strong>x,xxx%</strong></td>
							</tr>
							<tr class="pari"> 
								<td>Frequenza cedola </td>
								<td class="posdx"> <strong>annuale</strong></td>
							</tr>
							<tr class="dispari"> 
								<td class="doubleRow">Data inizio<br />maturazione interessi</td>
								<td class="posdx"> <strong>gg/mm/aaaa</strong></td>
							</tr>
							<tr class="pari"> 
								<td class="doubleRow">Data primo stacco<br /> cedola</td>
								<td class="posdx"> <strong>gg/mm/aaaa</strong></td>
							</tr>
						<tr class="dispari"> 
								<td class="doubleRow">Valuta pagamento<br /> cedola</td>
								<td class="posdx"> <strong>EUR</strong></td>
							</tr>
							<tr class="pari"> 
								<td>&nbsp;</td>
								<td> </td>
							</tr>
					</table>
			</div>
			<div class="col">
					<div class="titTable">Descrizione emissione</div>
					<table cellspacing="0" cellpadding="0" class="pop">
						<tr class="dispari"> 
								<td>Tipologia</td>
								<td class="posdx"><strong>lorem ipsum</strong></td>
							</tr>
							<tr class="pari"> 
								<td>Settore </td>
								<td class="posdx"> <strong>lorem ipsum</strong></td>
							</tr>
							<tr class="dispari"> 
								<td class="doubleRow">Domicilio emittente</td>
								<td class="posdx"> <strong>lorem ipsum</strong></td>
							</tr>
							<tr class="pari"> 
								<td class="doubleRow">Valuta</td>
								<td class="posdx"> <strong>EUR</strong></td>
							</tr>
						<tr class="dispari"> 
								<td class="doubleRow">Rimborso in unica<br /> soluzione</td>
								<td class="posdx"> <strong>SI</strong></td>
							</tr>
							<tr class="pari"> 
								<td>Tipo tasso</td>
								<td class="posdx"> <strong>fisso</strong></td>
							</tr>
					</table>
			</div>
			<div class="col">
					<div class="titTable">Dettagli emissione</div>
					<table cellspacing="0" cellpadding="0" class="pop">
						<tr class="dispari"> 
								<td>Data emissione</td>
								<td class="posdx"><strong>gg/mm/aaaa</strong></td>
							</tr>
							<tr class="pari"> 
								<td>Data scadenza </td>
								<td class="posdx"> <strong>gg/mm/aaaa</strong></td>
							</tr>
							<tr class="dispari"> 
								<td class="doubleRow">Prz.emissione</td>
								<td class="posdx"> <strong>xxxxxx</strong></td>
							</tr>
							<tr class="pari"> 
								<td class="doubleRow">Prz.rimborso</td>
								<td class="posdx"> <strong>xxxxxx</strong></td>
							</tr>
						   <tr class="dispari"> 
								<td class="doubleRow">Q.t&agrave; min. negoziabile</td>
								<td class="posdx"> <strong>xxx</strong></td>
							</tr>
							<tr class="pari"> 
								<td>Q.t&agrave; incrementale</td>
								<td class="posdx"> <strong>xxxxxx</strong></td>
							</tr>
					</table>
			</div>
			<br class="clear" />
			<p class="note">Dati forniti da: <strong>Reuters</strong></p>
			
			</div>
			
		</div>
	</div>
	</div>

	
	<div class="schedaTitoliContBot">
		<img src="/img/ret/str_bg_dettagli_bottom.gif" alt=""/>
		<div class="btnCont">
			<table class="form01 nopadd">
			<tbody><tr>
				<td class="depwt">Aggiungi a watchlist</td>
				<td class="rappWt">
					
					<div class="selectRapp" id="sceltaRapporto">
						<input type="hidden" value="xxxaaaaaa" name="rapporto" class="value" id="sceltaRapportoVal">
						<a class="inputOption inputSx" href="javascript:;" id="">
							<span class="inputDx">
								<span class="input">xxx/aaaaaa</span>
							</span>
						</a>
						<div style="display: none;" class="selectorSpacer"></div>
						<div style="display: none;" class="selector">
							<a class="selectorOptions first selected" href="javascript:;" value="Seleziona Watchlist" id="">
								<strong>- Seleziona Watchlist -</strong><br>
								</a>
							<a class="selectorOptions" href="javascript:;" value="xxxbbbbbb">
								<strong>xxx/bbbbbb</strong><br>
								</a>
							<a class="selectorOptions" href="javascript:;" value="xxxcccccc">
								<strong>xxx/cccccc</strong><br>
							 </a>
						</div>
					</div>
				
					
				</td>
				<td><a href="#"><img src="/img/ret/ico1gr_aggiungi.gif" alt="" /></a></td>
			</tr>
			</tbody></table>
			<div class="fooform">
			<div class="fooformright">
			<div><a title="lorem ipsum" class="btnformright black" href="#1"><img alt="" src="/wscmn/img/ret/btn_left_ne.gif"><span>compra/vendi</span><img alt="" src="/wscmn/img/ret/btn_right_ne.gif"></a></div>
			<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>book</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
			<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>ordini condizionati</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
			<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>alert</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div></div>
			
			<br class="clear">
			</div>
			</div>
		</div>
		
	
</div>