	
	
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



		function multiLinks(num, act) {
			var tooltip = $('links' + num);
				
			if ( act == 'off' ) {
				tooltip.style.display = 'none';
			} else {
				var link = $('link' + num);
				var linkOffset = link.positionedOffset();
				
				tooltip.left = linkOffset.left + link.getWidth() + 'px';
				tooltip.top = linkOffset.top + 'px';
				tooltip.style.display = 'block';
			}
			
			return true;
		}
</script>	

	<div id="contcont">
		<div class="tithelp">	
			<div class="helpleft"><h2 class="titTable"> LOREM Ipsum </h2> </div>
			<div class="helpright2">Lorem ipsum dolor sit amet: <span class="nega">-5.48%</span><br class="clear"/></div>
			<br class="clear"/>
		</div>
		<table cellspacing="0" cellpadding="0" class="condiz2 wt" id="mktpush">
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
				<a href="javascript:;" onMouseOver="multiLinks(1, 'on');" class="linkVai" id="link1" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a>
				<?php
	$svil = $_GET['svil'];
	if($svil.length >0)
	{
?>
			<div id="links1" class="sezioneLinks2" onmouseout="multiLinks(1, 'off')" onmouseover="multiLinks(1, 'on');" style="display: none;">
								<ul>
									<li class=""><a title="Analisi Tecnica" href="#1">AT</a></li>
									<li class=""><a title="Book" href="#1">Book</a></li>
									<li class="ultimo"><a title="Compra/Vendi" href="#1">C/V </a></li>
								</ul>
							</div>				
<?php
	}
	else
	{
?>
	<div id="links1" class="sezioneLinks2" onmouseout="multiLinks(1, 'off')" onmouseover="multiLinks(1, 'on');" style="display: none;">Oggetto in sviluppo</div>
<?php
	}
?>
			</td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">STS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.115585')">ANSALDO STS</a></td>
			<td class="right">13.52</td>
			<td class="nega right">-2.03%</td>
			<td class="right">13.5</td>
			<td class="right">13.88</td>
			<td class="center">17:11:15</td>
			<td class="center">
				<a href="javascript:;" onMouseOver="multiLinks(2, 'on');" class="linkVai" id="link2" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a>
				<?php
	$svil = $_GET['svil'];
	if($svil.length >0)
	{
?>
			<div id="links2" class="sezioneLinks2" onmouseout="multiLinks(2, 'off')" onmouseover="multiLinks(2, 'on');" style="display: none;">
								<ul>
									<li class=""><a title="Analisi Tecnica" href="#1">AT</a></li>
									<li class=""><a title="Book" href="#1">Book</a></li>
									<li class="ultimo"><a title="Compra/Vendi" href="#1">C/V </a></li>
								</ul>
							</div>				
<?php
	}
	else
	{
?>
	<div id="links2" class="sezioneLinks2" onmouseout="multiLinks(2, 'off')" onmouseover="multiLinks(2, 'on');" style="display: none;">Oggetto in sviluppo</div>
<?php
	}
?>
			</td>
		</tr>
			
		<tr class="dispari"> 
			<td class="left" id="sette">ATL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.69421')">ATLANTIA</a></td>
			<td class="right">14.91</td>
			<td class="nega right " >-3.93%</td>
			<td class="right">14.89</td>
			<td class="right">15.67</td>
			<td class="center">17:12:12</td>
			<td class="center">
				<a href="javascript:;" onMouseOver="multiLinks(3, 'on');" class="linkVai" id="link3" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a>
				<?php
	$svil = $_GET['svil'];
	if($svil.length >0)
	{
?>
			<div id="links3" class="sezioneLinks2" onmouseout="multiLinks(3, 'off')" onmouseover="multiLinks(3, 'on');" style="display: none;">
								<ul>
									<li class=""><a title="Analisi Tecnica" href="#1">AT</a></li>
									<li class=""><a title="Book" href="#1">Book</a></li>
									<li class="ultimo"><a title="Compra/Vendi" href="#1">C/V </a></li>
								</ul>
							</div>				
<?php
	}
	else
	{
?>
	<div id="links3" class="sezioneLinks2" onmouseout="multiLinks(3, 'off')" onmouseover="multiLinks(3, 'on');" style="display: none;">Oggetto in sviluppo</div>
<?php
	}
?>
			</td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">AGL</td>
			<td class="left" id="cinque"><a href="javascript:vaiQM('MI.EQCON.818')">AUTOGRILL SPA</a></td>
			<td class="right" id="uno">8.545</td>
			<td class="right nega">-1.5%</td>
			<td class="right">8.48</td>
			<td class="right">8.48</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">AZM</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.82516')">AZIMUT</a></td>
			<td class="right">7.9</td>
			<td class="right posi"  id="quattro" >-0.06%</td>
			<td class="right">7.7</td>
			<td class="right">18.13</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">BP</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.136039')">BANCO POPOLARE</a></td>
			<td class="right">4.09</td>
			<td class="right posi" id="due">-7.26%</td>
			<td class="right" id="tre">4.08</td>
			<td class="right">4.4675</td>
			<td class="center">17:11:36</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
			
		<tr class="dispari"> 
			<td class="left">BMPS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2069')">BCA MPS</a></td>
			<td class="right">0.882</td>
			<td class="right posi" >-7.45%</td>
			<td class="right">0.88</td>
			<td class="right" id="otto">0.965</td>
			<td class="center">17:12:11</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">PMI</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.20')">BCA POP MILANO</a></td>
			<td class="right">3.61</td>
			<td class="nega right" id="sei">-7.73%</td>
			<td class="right">3.6</td>
			<td class="right">3.9375</td>
			<td class="center" id="nove">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
			
		<tr class="dispari"> 
			<td class="left">BUL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.769')">BULGARI.</a></td>
			<td class="right">6.145</td>
			<td class="right nega">0.66%</td>
			<td class="right">6.05</td>
			<td class="right">6.265</td>
			<td class="center">17:12:13</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
			
		<tr class="pari"> 
			<td class="left">BUZ</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2735')">BUZZI UNICEM</a></td>
			<td class="right">9.85</td>
			<td class="right nega">-3.9%</td>
			<td class="right">9.83</td>
			<td class="right">10.43</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
			
		<tr class="dispari"> 
			<td class="left">CPR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.99679')">CAMPARI.</a></td>
			<td class="right">7.61</td>
			<td class="right nega">-1.04%</td>
			<td class="right">7.615</td>
			<td class="right">7.75</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
	
		<tr class="pari">    
			<td class="left">CIR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.89')">CIR-COMP IND RIUNITE</a></td>
			<td class="right">1.48</td>
			<td class="right nega">-2.18%</td>
			<td class="right">1.475</td>
			<td class="right"> 1.537</td>
			<td class="center">17:11:56</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>

		<tr class="dispari"> 
			<td class="left">A2A</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.1061')">A2A</a></td>
			<td class="right">1.206</td>
			<td class="right posi">-3.21%</td>
			<td class="right">1.201</td>
			<td class="right">1.256</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">STS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.115585')">ANSALDO STS</a></td>
			<td class="right">13.52</td>
			<td class="right posi">-2.03%</td>
			<td class="right">13.5</td>
			<td class="right">13.88</td>
			<td class="center">17:11:15</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">ATL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.69421')">ATLANTIA</a></td>
			<td class="right">14.91</td>
			<td class="right posi">-3.93%</td>
			<td class="right">14.89</td>
			<td class="right">15.67</td>
			<td class="center">17:12:12</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">AGL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.818')">AUTOGRILL SPA</a></td>
			<td class="right">8.545</td>
			<td class="right posi">-1.5%</td>
			<td class="right">8.48</td>
			<td class="right">8.48</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
	
	
		<tr class="dispari"> 
			<td class="left">AZM</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.82516')">AZIMUT</a></td>
			<td class="right">7.9</td>
			<td class="right nega">-0.06%</td>
			<td class="right">7.7</td>
			<td class="right">18.13</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
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
				<a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a>
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
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">PMI</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.20')">BCA POP MILANO</a></td>
			<td class="right">3.61</td>
			<td class="right posi">-7.73%</td>
			<td class="right">3.6</td>
			<td class="right">3.9375</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">BUL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.769')">BULGARI.</a></td>
			<td class="right">6.145</td>
			<td class="right nega">0.66%</td>
			<td class="right">6.05</td>
			<td class="right">6.265</td>
			<td class="center">17:12:13</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">BUZ</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2735')">BUZZI UNICEM</a></td>
			<td class="right">9.85</td>
			<td class="right">-3.9%</td>
			<td class="right">9.83</td>
			<td class="right">10.43</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">CPR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.99679')">CAMPARI.</a></td>
			<td class="right">7.61</td>
			<td class="right nega">-1.04%</td>
			<td class="right">7.615</td>
			<td class="right">7.75</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
	
		<tr class="pari">    
			<td class="left">CIR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.89')">CIR-COMP IND RIUNITE</a></td>
			<td class="right">1.48</td>
			<td class="right">-2.18%</td>
			<td class="right">1.475</td>
			<td class="right"> 1.537</td>
			<td class="center">17:11:56</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td> 
		</tr>
	
		<tr class="dispari"> 
			<td class="left">A2A</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.1061')">A2A</a></td>
			<td class="right">1.206</td>
			<td class="right posi">-3.21%</td>
			<td class="right">1.201</td>
			<td class="right">1.256</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">STS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.115585')">ANSALDO STS</a></td>
			<td class="right">13.52</td>
			<td class="right posi">-2.03%</td>
			<td class="right">13.5</td>
			<td class="right">13.88</td>
			<td class="center">17:11:15</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">ATL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.69421')">ATLANTIA</a></td>
			<td class="right">14.91</td>
			<td class="right nega">-3.93%</td>
			<td class="right">14.89</td>
			<td class="right">15.67</td>
			<td class="center">17:12:12</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">AGL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.818')">AUTOGRILL SPA</a></td>
			<td class="right">8.545</td>
			<td class="right">-1.5%</td>
			<td class="right">8.48</td>
			<td class="right">8.48</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
	
	
		<tr class="dispari"> 
			<td class="left">AZM</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.82516')">AZIMUT</a></td>
			<td class="right">7.9</td>
			<td class="right posi">-0.06%</td>
			<td class="right">7.7</td>
			<td class="right">18.13</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">BP</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.136039')">BANCO POPOLARE</a></td>
			<td class="right">4.09</td>
			<td class="right nega">-7.26%</td>
			<td class="right">4.08</td>
			<td class="right">4.4675</td>
			<td class="center">17:11:36</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">BMPS</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2069')">BCA MPS</a></td>
			<td class="right">0.882</td>
			<td class="right">-7.45%</td>
			<td class="right">0.88</td>
			<td class="right">0.965</td>
			<td class="center">17:12:11</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">PMI</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.20')">BCA POP MILANO</a></td>
			<td class="right">3.61</td>
			<td class="right nega">-7.73%</td>
			<td class="right">3.6</td>
			<td class="right">3.9375</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">BUL</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.769')">BULGARI            .</a></td>
			<td class="right">6.145</td>
			<td class="right">0.66%</td>
			<td class="right">6.05</td>
			<td class="right">6.265</td>
			<td class="center">17:12:13</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="pari"> 
			<td class="left">BUZ</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.2735')">BUZZI UNICEM</a></td>
			<td class="right">9.85</td>
			<td class="right">-3.9%</td>
			<td class="right">9.83</td>
			<td class="right">10.43</td>
			<td class="center">17:12:10</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		
		<tr class="dispari"> 
			<td class="left">CPR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.99679')">CAMPARI .</a></td>
			<td class="right">7.61</td>
			<td class="right">-1.04%</td>
			<td class="right">7.615</td>
			<td class="right">7.75</td>
			<td class="center">17:12:09</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
	
		<tr class="pari">    
			<td class="left">CIR</td>
			<td class="left"><a href="javascript:vaiQM('MI.EQCON.89')">CIR-COMP IND RIUNITE</a></td>
			<td class="right">1.48</td>
			<td class="right">-2.18%</td>
			<td class="right">1.475</td>
			<td class="right"> 1.537</td>
			<td class="center">17:11:56</td>
			<td class="center"><a href="javascript:;" class="linkVai" title="azioni"><img src="/img/ret/ico1gr_azioni.gif" title="azioni" alt="azioni" /></a></td>
		</tr>
		</table>
	</div>
