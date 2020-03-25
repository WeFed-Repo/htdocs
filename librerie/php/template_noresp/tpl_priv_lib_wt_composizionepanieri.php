<h1>MERCATI</h1>
<!-- AREA DI AGGIORNAMENTO PAGINA -->     
<div class="box3c2Col">    

		
	
	<form name="formqm" method="post" action="/wt/schedatitolo/schedaazioni"  >
		<input type="hidden" name="borsa" value="">
		<input type="hidden" name="mercato" value="">
		<input type="hidden" name="stock_code" value="">
	</form>
	
	<form name="formcv" method="post" action="/wt/pr/compravendi/ordineitalia/"    >
		<input type="hidden" name="borsa" value="">
		<input type="hidden" name="mercato" value="">
		<input type="hidden" name="stock_code" value="">
	</form>
	
	<form NAME="formBook" METHOD=post>
		<input type="hidden" name="borsa" value="">
		<input type="hidden" name="mercato" value="">
		<input type="hidden" name="stock_code" value="">
	</form>
	
	<form name="tradermade" method="post" action="/wt/pr/ufficio/schedatradermade/"  >
		<input type="hidden" name="IsinTitolo" value=""/>
		<input type="hidden" name="TipoRicerca" value="TITOLO"/>
		<input type="hidden" name="stock_code" value=""/>
		<input type="hidden" name="borsa" value=""/>
		<input type="hidden" name="mercato" value=""/>
	</form>
	
	<form name="push" method="post" action="/wt/push/framepanieri/"  >
		<input type="hidden" name="id" value="1"/>
		<input type="hidden" name="ispush" value="N"/>
	</form>
<script language="javascript">
function getPosY(obj) {
	layerElement = document.getElementById(obj);
	var curtop = 0;
	if (layerElement.offsetParent) {
	while (layerElement.offsetParent) {
	curtop += layerElement.offsetTop
	layerElement = layerElement.offsetParent;
	}
	}
	else if (layerElement.y)
	curtop += layerElement.y;
	return curtop;
	}

function getPosX(obj) {
	layerElement = document.getElementById(obj);
	var curleft = 0;
	if (layerElement.offsetParent) {
	while (layerElement.offsetParent) {
	curleft += layerElement.offsetLeft
	layerElement = layerElement.offsetParent;
	}
	}
	else if (layerElement.x)
	curleft += layerElement.x;
	return curleft;
	}


function multiLinks(id, act){
	var element  = document.getElementById("links"+id);
	
	if (act=="off") {
		element.style.visibility = "hidden"; 
	} else {
		element.style.top = getPosY("link"+id) + 'px';
		element.style.left = getPosX("link"+id)- 50 + 'px';
		element.style.visibility = "visible";
	}			
	return true;
}
</script>	

	<div id="contcont">
		<div class="tithelp">	
			<div class="helpleft"> <h2 class="titTable">COMPOSIZIONE Indice FTSE MIB </h2></div>
			<div class="helpright2">FTSE MIB Val: 19237.46 Var: <span class="nega">-5.48%</span><br class="clear"/></div>
			<br class="clear"/>
		</div>
		<table cellspacing="0" cellpadding="0" class="condiz2 wt">
		<tr class="color"> 
			<td>Simb.</td>
			<td>Titolo</td>
			<td>Ult.Prezzo</td>
			<td>Var.%</td>
			<td>Prezzo Min.</td>
			<td>Prezzo Max.</td>
			<td>Ora</td>
			<td>Vai</td>
		</tr>
			
		<tr class="dispari"> 
			<td class="left">A2A</td>
			<td class="left"><a href="#1">A2A</a></td>
			<td class="right">1.206</td>
			<td class="rosso right">-3.21%</td>
			<td class="right">1.201</td>
			<td class="right">1.256</td>
			<td class="center">17:12:10</td>
			<td class="center">
				<a href="javascript:;" onMouseOver="multiLinks(1, 'on');" class="linkVai" id="link1" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a>
				<div onmouseover="multiLinks(1, 'on');" onmouseout="multiLinks(1, 'off')" class="sezioneLinks" id="links1">
					<ul>
						<li class=""><a href="#1" title="Analisi Tecnica">AT</a></li>
						<li class=""><a href="#1" title="Book">Book</a></li>
						<li class="ultimo"><a href="#1" title="Compra/Vendi">C/V </a></li>
					</ul>
				</div>
			</td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">STS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.115585')">ANSALDO STS</a></td>
			<td class="right">13.52</td>
			<td class="rosso right">-2.03%</td>
			<td class="right">13.5</td>
			<td class="right">13.88</td>
			<td class="center">17:11:15</td>
			<td class="center">
				<a href="javascript:;" onMouseOver="multiLinks(2, 'on');" class="linkVai" id="link2" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a>
				<div onmouseover="multiLinks(2, 'on');" onmouseout="multiLinks(2, 'off')" class="sezioneLinks" id="links2">
					<ul>
						<li class=""><a href="#1" title="Analisi Tecnica">AT</a></li>
						<li class=""><a href="#1" title="Book">Book</a></li>
						<li class="ultimo"><a href="#1" title="Compra/Vendi">C/V </a></li>
					</ul>
				</div>
			</td>
		</tr>
			
		<tr class="dispari"> 
			<td class="left">ATL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.69421')">ATLANTIA</a></td>
			<td class="right">14.91</td>
			<td class="rosso right">-3.93%</td>
			<td class="right">14.89</td>
			<td class="right">15.67</td>
			<td class="center">17:12:12</td>
			<td class="center">
				<a href="javascript:;" onMouseOver="multiLinks(3, 'on');" class="linkVai" id="link3" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a>
				<div onmouseover="multiLinks(3, 'on');" onmouseout="multiLinks(3, 'off')" class="sezioneLinks" id="links3">
					<ul>
						<li class=""><a href="#1" title="Analisi Tecnica">AT</a></li>
						<li class=""><a href="#1" title="Book">Book</a></li>
						<li class="ultimo"><a href="#1" title="Compra/Vendi">C/V </a></li>
					</ul>
				</div>
			</td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">AGL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.818')">AUTOGRILL SPA</a></td>
			<td class="right">8.545</td>
			<td class="right nega">-1.5%</td>
			<td class="right">8.48</td>
			<td class="right">8.48</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">AZM</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.82516')">AZIMUT</a></td>
			<td class="right">7.9</td>
			<td class="right posi">-0.06%</td>
			<td class="right">7.7</td>
			<td class="right">18.13</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">BP</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.136039')">BANCO POPOLARE</a></td>
			<td class="right">4.09</td>
			<td class="right posi">-7.26%</td>
			<td class="right">4.08</td>
			<td class="right">4.4675</td>
			<td class="center">17:11:36</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
			
		<tr class="dispari"> 
			<td class="left">BMPS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2069')">BCA MPS</a></td>
			<td class="right">0.882</td>
			<td class="right posi">-7.45%</td>
			<td class="right">0.88</td>
			<td class="right">0.965</td>
			<td class="center">17:12:11</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">PMI</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.20')">BCA POP MILANO</a></td>
			<td class="right">3.61</td>
			<td class="rosso right">-7.73%</td>
			<td class="right">3.6</td>
			<td class="right">3.9375</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
			
		<tr class="dispari"> 
			<td class="left">BUL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.769')">BULGARI.</a></td>
			<td class="right">6.145</td>
			<td class="right nega">0.66%</td>
			<td class="right">6.05</td>
			<td class="right">6.265</td>
			<td class="center">17:12:13</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">BUZ</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2735')">BUZZI UNICEM</a></td>
			<td class="right">9.85</td>
			<td class="right nega">-3.9%</td>
			<td class="right">9.83</td>
			<td class="right">10.43</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
			
		<tr class="dispari"> 
			<td class="left">CPR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.99679')">CAMPARI.</a></td>
			<td class="right">7.61</td>
			<td class="right nega">-1.04%</td>
			<td class="right">7.615</td>
			<td class="right">7.75</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
	
		<tr class="pari">    
			<td class="left">CIR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.89')">CIR-COMP IND RIUNITE</a></td>
			<td class="right">1.48</td>
			<td class="right nega">-2.18%</td>
			<td class="right">1.475</td>
			<td class="right"> 1.537</td>
			<td class="center">17:11:56</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>

		<tr class="dispari"> 
			<td class="left">A2A</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.1061')">A2A</a></td>
			<td class="right">1.206</td>
			<td class="right posi">-3.21%</td>
			<td class="right">1.201</td>
			<td class="right">1.256</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">STS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.115585')">ANSALDO STS</a></td>
			<td class="right">13.52</td>
			<td class="right posi">-2.03%</td>
			<td class="right">13.5</td>
			<td class="right">13.88</td>
			<td class="center">17:11:15</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">ATL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.69421')">ATLANTIA</a></td>
			<td class="right">14.91</td>
			<td class="right posi">-3.93%</td>
			<td class="right">14.89</td>
			<td class="right">15.67</td>
			<td class="center">17:12:12</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">AGL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.818')">AUTOGRILL SPA</a></td>
			<td class="right">8.545</td>
			<td class="right posi">-1.5%</td>
			<td class="right">8.48</td>
			<td class="right">8.48</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
	
	
		<tr class="dispari"> 
			<td class="left">AZM</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.82516')">AZIMUT</a></td>
			<td class="right">7.9</td>
			<td class="right nega">-0.06%</td>
			<td class="right">7.7</td>
			<td class="right">18.13</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">BP</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.136039')">BANCO POPOLARE</a></td>
			<td class="right">4.09</td>
			<td class="right nega">-7.26%</td>
			<td class="right">4.08</td>
			<td class="right">4.4675</td>
			<td class="center">17:11:36</td>
			<td class="center">
				<a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a>
			</td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">BMPS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2069')">BCA MPS</a></td>
			<td class="right">0.882</td>
			<td class="right posi">-7.45%</td>
			<td class="right">0.88</td>
			<td class="right">0.965</td>
			<td class="center">17:12:11</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">PMI</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.20')">BCA POP MILANO</a></td>
			<td class="right">3.61</td>
			<td class="right posi">-7.73%</td>
			<td class="right">3.6</td>
			<td class="right">3.9375</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">BUL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.769')">BULGARI.</a></td>
			<td class="right">6.145</td>
			<td class="right nega">0.66%</td>
			<td class="right">6.05</td>
			<td class="right">6.265</td>
			<td class="center">17:12:13</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">BUZ</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2735')">BUZZI UNICEM</a></td>
			<td class="right">9.85</td>
			<td class="right">-3.9%</td>
			<td class="right">9.83</td>
			<td class="right">10.43</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">CPR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.99679')">CAMPARI.</a></td>
			<td class="right">7.61</td>
			<td class="right nega">-1.04%</td>
			<td class="right">7.615</td>
			<td class="right">7.75</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
	
		<tr class="pari">    
			<td class="left">CIR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.89')">CIR-COMP IND RIUNITE</a></td>
			<td class="right">1.48</td>
			<td class="right">-2.18%</td>
			<td class="right">1.475</td>
			<td class="right"> 1.537</td>
			<td class="center">17:11:56</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td> 
		</tr>
	
		<tr class="dispari"> 
			<td class="left">A2A</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.1061')">A2A</a></td>
			<td class="right">1.206</td>
			<td class="right posi">-3.21%</td>
			<td class="right">1.201</td>
			<td class="right">1.256</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">STS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.115585')">ANSALDO STS</a></td>
			<td class="right">13.52</td>
			<td class="right posi">-2.03%</td>
			<td class="right">13.5</td>
			<td class="right">13.88</td>
			<td class="center">17:11:15</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">ATL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.69421')">ATLANTIA</a></td>
			<td class="right">14.91</td>
			<td class="right nega">-3.93%</td>
			<td class="right">14.89</td>
			<td class="right">15.67</td>
			<td class="center">17:12:12</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">AGL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.818')">AUTOGRILL SPA</a></td>
			<td class="right">8.545</td>
			<td class="right">-1.5%</td>
			<td class="right">8.48</td>
			<td class="right">8.48</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
	
	
		<tr class="dispari"> 
			<td class="left">AZM</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.82516')">AZIMUT</a></td>
			<td class="right">7.9</td>
			<td class="right posi">-0.06%</td>
			<td class="right">7.7</td>
			<td class="right">18.13</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">BP</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.136039')">BANCO POPOLARE</a></td>
			<td class="right">4.09</td>
			<td class="right nega">-7.26%</td>
			<td class="right">4.08</td>
			<td class="right">4.4675</td>
			<td class="center">17:11:36</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">BMPS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2069')">BCA MPS</a></td>
			<td class="right">0.882</td>
			<td class="right">-7.45%</td>
			<td class="right">0.88</td>
			<td class="right">0.965</td>
			<td class="center">17:12:11</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">PMI</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.20')">BCA POP MILANO</a></td>
			<td class="right">3.61</td>
			<td class="right nega">-7.73%</td>
			<td class="right">3.6</td>
			<td class="right">3.9375</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">BUL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.769')">BULGARI            .</a></td>
			<td class="right">6.145</td>
			<td class="right">0.66%</td>
			<td class="right">6.05</td>
			<td class="right">6.265</td>
			<td class="center">17:12:13</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">BUZ</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2735')">BUZZI UNICEM</a></td>
			<td class="right">9.85</td>
			<td class="right">-3.9%</td>
			<td class="right">9.83</td>
			<td class="right">10.43</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">CPR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.99679')">CAMPARI .</a></td>
			<td class="right">7.61</td>
			<td class="right">-1.04%</td>
			<td class="right">7.615</td>
			<td class="right">7.75</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
	
		<tr class="pari">    
			<td class="left">CIR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.89')">CIR-COMP IND RIUNITE</a></td>
			<td class="right">1.48</td>
			<td class="right">-2.18%</td>
			<td class="right">1.475</td>
			<td class="right"> 1.537</td>
			<td class="center">17:11:56</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="compravendita"><img src="/img/ret/ico1gr_compravendi.gif" title="compravendita" alt="compravendita" /></a></td>
		</tr>
		</table>
	</div>

	<div class="fooform wt">
		<form name="vai_ricerca" action="/wt/pr/mercati/mercatoitaliano" method="post" >
			<input type="hidden" name="ms" value="1">
			<input type="hidden" name="NumMercato" value="">
		</form>
		<div class="fooformleft">
			<div><a title="lorem ipsum" class="btnformleft" href="#1"><img alt="" src="/img/ret/btn_left_bi.gif"/><span>Indietro</span><img alt="" src="/img/ret/btn_right_bi.gif"/></a></div>
		</div>
	 	<div class="fooformright">
   	 		<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>Mercato Italiano</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
		</div>
	</div>	
</div> 

<div class="box3cRight">
	<h2 class="titTable">Composizione indici</h2>
	<table class="box01">
	<tr> 
		<td><ul>
			<li><a href="#1">FTSE MIB</a></li>
			<li><a href="#1">FTSE Italia All Share</a></li>
			<li><a href="#1">FTSE Italia Mid Cap</a></li>
			<li><a href="#1">FTSE Italia Star</a></li>
			<li><a href="#1">MTA International</a></li>
			<li><a href="#1">DOW JONES</a></li>
			<li><a href="#1">NASDAQ 100</a></li>
			<li><a href="#1">DAX100</a></li>
			<li><a href="#1">CAC40</a></li>
			<li><a href="#1">FTSE 100</a></li>
			<li><a href="#1">IBEX 35</a></li>
			<li><a href="#1">AEX</a></li>
			<li><a href="#1">BEL 20</a></li>
		</ul></td>
	</tr>
	</table>
	
	<h2 class="titTable">ETF</h2>
	<table class="box01">
	<tr> 
		<td><ul>
		<li><a href="#1">MTF-MTA</a></li>
		</ul></td>
	</tr>
	</table>
	
	<h2 class="titTable">AFTER HOURS</h2>
	<table class="box01">
	<tr>
		<td><ul>
		<li><a href="#1">FTSE MIB-TAH</a></li>
		<li><a href="#1">FTSE Italia Mid Cap-TAH</a></li>
		</ul></td>
	</tr>
	</table>
	
	<table width="100%">
	<tr>
		<td>
			<a title="Lorem ipsum" class="btnevid1" href="#1">
			<img alt="" src="/img/ret/btn_left_sm1.gif"/><span>Guida ai Mercati</span><img alt="" src="/img/ret/btn_right_sm1.gif"/></a>
		</td>
	</tr>
	</table>
</div>

<br class="clear" />
	
<div id="footerwt">
     <!-- BOX INFORMATIVI -->
      <div class="box">
    <strong>Attenzione:</strong> le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). Se non ti sei ancora registrato il ritardo &egrave; di 20 minuti anche sui mercati italiani.
Desideri le quotazioni in tempo reale sui mercati di tuo interesse? Aderisci all'opzione <b>Su Misura</b>. 
</div>

<div class="box">
    <strong>NYSE Disclaimer:</strong> As your agreement for the receipt and use of market data provides, the securities markets reserve all rights to the market data that they make available; do not to guarantee that data; and shall not be liable for any loss due either to their negligence or to any cause beyond their reasonable control. 
</div>

<div class="box">
<b>In questa pagina puoi:<br/></b>

<ul>
  <li>
   consultare l'elenco e le principali caratteristiche dei titoli che compongono l'indice di borsa da te selezionato;
  </li>
  <li>
    accedere alla sezione Mercato Italiano o Mercato Estero dove puoi ottenere informazioni di dettaglio sul titolo che ti interessa.
  </li>
</ul>
</div>
 
      



<div class="box">  

Per ulteriori informazioni clicca su <a href="javascript:;" onclick="javascript:window.open('connect.php?page=tpl_priv_popup_wt.php','main','width=450,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes')"><img src="/img/ret/ico2or_help2.gif" alt="help"/></a>

</div>
      <!-- AREA INFORMAZIONI E FEEDBACK -->
      
    </div>