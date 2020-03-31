<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Contatore</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
	<meta http-equiv="refresh" content="300" />
	<meta content="MSHTML 6.00.2800.1515" name="GENERATOR" />

	<style type="text/css">
		body {margin: 0;padding: 0;background: #000;}
		body,table,div,p,ul,ol,td,select,input,textarea{font-family:Arial, Helvetica, tahoma,sans-serif;font-size:12px; color:#fff}
		h3 {color:#fff;margin:5px 0 0 0}
		br.clear{display:block;margin:0;padding:0;height:0; width:0; line-height:0; clear:both; font-size:1px;}
		table.dati {width:98%; margin:10px auto;}
		table.dati th.titolo {width:26% }
		table.dati th {border-bottom:1px solid #fff; border-right:1px solid #999; width:12%; padding:0 2px 8px 2px }
		table.dati th.total {font-size:18px; border-right:none; padding:0 0 0 10px; width:20%}
		table.dati td {height:40px; border-bottom:1px solid #fff; border-right:1px solid #999;padding:5px 10px 5px 5px; text-align:right }
		table.dati td.riga_tit {border-bottom:1px solid #fff; border-right:1px solid #999;font-size:18px; padding:5px 10px 5px 0 ; text-align:right }
		table.dati td.riga_tot {border-right:none; padding:5px 10px 0 5px; color:#7eee23; font-weight:bold; width:120px}
		table.dati td.riga_last {border-right:1px solid #999; padding:5px 8px 0 5px; color:#7eee23; font-weight:bold}
		table.dati  a {color:#7eee23}
		span.numero_percent {font-size:10px; float:left; color:#fc8901;  font-weight:normal}
		span.numero_uscite {font-size:12px; float:left; color:#fff;  font-weight:bold}
		span.numero_entrate {font-size:12px; float:right; color:#000;  font-weight:bold; padding-top:6px;}
		span.white {font-size:12px; float:right; color:#000;  font-weight:bold}
		span.black {font-size:18px; float:right; font-weight:normal}
		.colored {background-color:#333333}
		table.dati td.bicolor {background: url(/img/sfondo_cruscotto.gif) center center; padding:0 8px 0 5px; margin:0}
		.altezza {height:2px !important;padding:0px !important;font-size:1px; line-height:2px}
		table.dati td.riga_bot {border-bottom:1px solid #999;}
		table.dati td, table.dati td.riga_last, table.dati td.riga_tot {font-size:22px;}
		
	</style>
	<script language="JavaScript" src="./FusionCharts.js"></script>


	<style>
		/* Stili per overlayer */
		.overlayer {background-color: #fff; border: solid 1px #dedede; padding: 10px; position: absolute; display: none; clear:left; float:left; width: 800px; height: auto; text-align:left;}
		.overlayer .overlayertop {float:left; padding: 0; margin:0;clear:both; width :800px; text-align:right; display:block; height: 20px;}
		.overlayer div {display: block;}
	</style>


	<script type="text/javascript">
		
		
		function getNextHighestZindex()
		{
			var highestIndex = 0;
			var currentIndex = 0;
			var elArray = Array();
			if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
			{
				elArray = document.all;
			}
			else
			{
				elArray = document.getElementsByTagName('*');
			}
		
			for(var i=0; i < elArray.length; i++){
				if(window.getComputedStyle){
					currentIndex = parseFloat(document.defaultView.getComputedStyle(elArray[i],null).getPropertyValue('z-index'));
					if(!isNaN(currentIndex) && currentIndex >= highestIndex){highestIndex = currentIndex;}
				}
				if (elArray[i].currentStyle){
					//stile dell'elemento
					currentIndex = parseFloat(elArray[i].currentStyle['zIndex']);
					if(!isNaN(currentIndex) && currentIndex >= highestIndex){highestIndex = currentIndex;}
				}
				if (elArray[i].style.zIndex){
					//stile dell'elemento
					currentIndex = parseFloat(elArray[i].style.zIndex);
					if(!isNaN(currentIndex) && currentIndex >= highestIndex){highestIndex = currentIndex;}
				}
			}
			return(highestIndex+1);
		}

		
		function getPageWidth ()
		{
			if (navigator.appName != "Microsoft Internet Explorer")
			{
				return document.body.clientWidth;
			} 
			else 
			{
				if(navigator.userAgent.indexOf("MSIE 5.5") > -1)
				{
					return document.body.offsetWidth;
				}
				else
				{
					return document.documentElement.clientWidth;
				}
			}
		}

		function getPageHeight ()
		{
			if (navigator.appName != "Microsoft Internet Explorer")
			{
				return window.innerHeight;
			} 
			else 
			{
				if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
				{
					return document.body.offsetHeight;
				}
				else
				{
					return document.documentElement.clientHeight;
				}
		
			}
		}

		
		function getScrollY() {
			if(navigator.appName != "Microsoft Internet Explorer"){
				return window.pageYOffset;
			}
			else
			{
				if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
				{
					return document.body.scrollTop;
				}
				else
				{
					return document.documentElement.scrollTop;
				}
			}
		}

		
		function arrangeSelect (idElement)
		{
			if (idElement)
			{
				var x = document.getElementsByTagName("select").length;	
				x = document.getElementsByTagName("select");
				for (i = x.length; i; x[--i].style.visibility='hidden');
				var y = document.getElementById(idElement).getElementsByTagName('select');
				for (i = y.length; i; x[--i].style.visibility='visible');
			}
			else
			{
				x = document.getElementsByTagName("select");
				for (i = x.length; i; x[--i].style.visibility='visible');
			}
		}

		
		function openAlert (idElement)
		{
			arrangeSelect (idElement);
			//appende il layer direttamente al body
			document.body.insertBefore(document.getElementById(idElement), document.body.getElementsByTagName('div')[0]);
			document.getElementById(idElement).style.display = 'block';
			document.getElementById(idElement).style.zIndex = getNextHighestZindex();
			document.getElementById(idElement).style.top = '0px';
			document.getElementById(idElement).style.left = '0px';
			document.getElementById(idElement).style.marginLeft = Math.round ( (getPageWidth() - document.getElementById(idElement).offsetWidth )/2) + 'px'; 
			
			if (document.getElementById(idElement).offsetHeight < getPageHeight ())
			{
				document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';
				
				alertscroll = new Function('document.getElementById(\''+ idElement + '\').style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(\''+ idElement + '\').offsetHeight)/2) + \'px\';');
				alertresize = new Function('document.getElementById(\''+ idElement + '\').style.marginLeft = Math.round ( (getPageWidth() - document.getElementById(\''+ idElement + '\').offsetWidth )/2) + \'px\'; document.getElementById(\''+ idElement + '\').style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(\''+ idElement + '\').offsetHeight)/2) + \'px\';');
				
				if (window.attachEvent)
				{
					window.attachEvent("onresize", alertresize);
					window.attachEvent("onscroll", alertscroll);
				}
				else
				{
					window.addEventListener("resize", alertresize, false);
					window.addEventListener("scroll", alertscroll, false);
				}
			}
			else
			{
					if (getScrollY() + getPageHeight() - document.getElementById(idElement).offsetHeight < 0)
					{
						document.getElementById(idElement).style.marginTop = '0px';
					}
					else
					{
						document.getElementById(idElement).style.marginTop = getScrollY() + getPageHeight() - document.getElementById(idElement).offsetHeight  + 'px';
					}
			}
			
		}

		
		function closeAlert (idElement,idFather)
		{
			document.getElementById(idElement).style.display = 'none';
			
			//rimuove tutti gli eventi associati agli alert
			if (window.attachEvent)
			{
				if (typeof(alertresize) != 'undefined' ) window.detachEvent("onresize", alertresize);
				if (typeof(alertscroll) != 'undefined' ) window.detachEvent("onscroll", alertscroll);
				if (typeof(anchoralertresize) != 'undefined' ) window.detachEvent("onresize", anchoralertresize);
				if (typeof(fixedalertresize) != 'undefined' ) window.detachEvent("onresize", fixedalertresize);
			}
			else
			{
				if (typeof(alertresize) != 'undefined' ) window.removeEventListener("resize", alertresize, false);
				if (typeof(alertscroll) != 'undefined' ) window.removeEventListener("scroll", alertscroll, false);
				if (typeof(anchoralertresize) != 'undefined' ) window.removeEventListener("resize", anchoralertresize, false);
				if (typeof(fixedalertresize) != 'undefined' ) window.removeEventListener("resize", fixedalertresize, false);
			}
			if (idFather)
			{
				arrangeSelect (idFather);
			}
			else
			{
				arrangeSelect ();
			}
		}
	</script>

	<script type = "text/javascript">
		
		function caricaDinamico(tipo, sito)
		{
			var chart = new FusionCharts("./MultiAxisLine.swf", "ChartId", "620", "380", "0", "0");
			chart.setDataURL("./grafico.jsp?tipo=" + tipo + "%26sito=" + sito);
			chart.render("chartdiv");
			openAlert('indicechedesideri');
			var chart1 = new FusionCharts("./Column2D.swf", "ChartId1", "620", "200", "0", "0");
			chart1.setDataURL("./totali.jsp?tipo=" + tipo + "%26sito=" + sito);
			chart1.render("chartdiv1");
			var chart2 = new FusionCharts("./Bar2D.swf", "ChartId1", "180", "580", "0", "0");
			chart2.setDataURL("./totali_mese.jsp?tipo=" + tipo + "%26sito=" + sito);
			chart2.render("chartdiv2");
			openAlert('indicechedesideri');
		}

		function caricaDinamicoAOL()
		{
			var chart = new FusionCharts("./Pie3D.swf", "ChartId", "620", "380", "0", "0");
			chart.setDataURL("./dettagli_aol.jsp");
			chart.render("chartdiv");
			openAlert('indicechedesideri');
		}
	</script>
</head>

<body style="border:none;text-align:center">
	<div style="width:99%;text-align:center;margin:0px auto;">
	
		<div class="overlayer" id="indicechedesideri">
			<div class="overlayertop"><a href="javascript:;" onclick="closeAlert ('indicechedesideri');">[chiudi]</a></div>
			<div style="float:left">
			<div id="chartdiv"></div>

			<div id="chartdiv1"></div>
			</div>
			<div id="chartdiv2" style="float:right"></div>
		</div>
	

		<h3>Dati Odierni</h3>
		<table cellpadding="0" cellspacing="0" border="0" class="dati">
			<tr>
				<th class="titolo">Dati del 20 04 2012<br /><i>ultimo aggiornamento ore&nbsp; 14.04</i></th>

				<th><img src="/img/logo_mail_bgblack_wb.gif" alt="logo webank" /></th>
				<th><img src="/img/logo_mail_bgblack_bpm.gif" alt="logo bpm" /></th>
				<th><img src="/img/logo_mail_bgblack_bl.gif" alt="logo bl" /></th>				
				<th><img src="/img/logo_mail_bgblack_bm.gif" alt="logo bm" /></th>
				<th class="total"><strong>TOT</strong></th>
			</tr>
			<tr>
				<td class="riga_tit">Imprese</td>

				<td><span class="numero_percent">0%</span><br class="clear" />3</td>
				<td><span class="numero_percent">82%</span><br class="clear" />654</td>
				<td><span class="numero_percent">16%</span><br class="clear" />132</td>
				
				<td><span class="numero_percent">1%</span><br class="clear" />10</td>
				<td class="riga_tot"><span class="numero_percent">100%</span><br class="clear" />800</td>

			</tr>
			<tr>
				<td class="riga_tit">Privati</td>
				<td><span class="numero_percent">41%</span><br class="clear" />722</td>
				<td><span class="numero_percent">47%</span><br class="clear" />828</td>
				<td><span class="numero_percent">12%</span><br class="clear" />203</td>

				<!-- td><span class="numero_percent">0%</span><br class="clear" />1</td -->
				<td><span class="numero_percent">0%</span><br class="clear" />5</td>
				<td class="riga_tot"><span class="numero_percent">100%</span><br class="clear" />1759</td>
			</tr>
			<tr>
				<td class="riga_tit">Totale siti</td>

				<td class="riga_last">725</td>
				<td class="riga_last">1482</td>
				<td class="riga_last">335</td>
				
				<td class="riga_last">15</td>
				<td class="riga_tot">2559</td>
			</tr>

			<tr>
				<td class="riga_tit altezza">&nbsp;</td>
				<td class="riga_tit altezza">&nbsp;</td>
				<td class="riga_tit altezza">&nbsp;</td>
				<td class="riga_tit altezza">&nbsp;</td>
				
				<td class="riga_last altezza">&nbsp;</td>
				<td class="riga_tot altezza">&nbsp;</td>
			</tr>
			<tr>

				<td class="riga_tit">AOL (tel) - DT  /&nbsp;<span class="black">Migr CD</span></td>
				<td class="riga_last colored">38(0) - 8 / &nbsp;<span class="black"><a href="javascript:;" onclick="caricaDinamicoAOL();">0</a></span></td>
				<td class="riga_tit">&nbsp;</td>
				<td class="riga_tit">&nbsp;</td>
				
				<td class="riga_last">&nbsp;</td>
				<td class="riga_tot">&nbsp;</td>
			</tr>

			<tr>
				<td class="riga_tit altezza">&nbsp;</td>
				<td class="riga_tit altezza">&nbsp;</td>
				<td class="riga_tit altezza">&nbsp;</td>
				<td class="riga_tit altezza">&nbsp;</td>
				
				<td class="riga_last altezza">&nbsp;</td>
				<td class="riga_tot altezza">&nbsp;</td>
			</tr>
			<tr>

				<td class="riga_tit">Bilancia pagamenti a ieri</td>
				<td class="riga_last bicolor"><span class="numero_uscite">OUT 90.710K</span><br class="clear" /><span class="numero_entrate">IN 93.727K</span></td>
				<td class="riga_last"><span class="white">OUT 301.184K</span><br class="clear" /><span class="white">IN 316.520K</span></td>
				<td class="riga_last"><span class="white">OUT 51.514K</span><br class="clear" /><span class="white">IN 47.319K</span></td>
				
				<td class="riga_last"><span class="white">OUT 5.965K</span><br class="clear" /><span class="white">IN 6.358K</span></td>

				<td class="riga_tot"><span class="numero_uscite"></span><br class="clear" /></td>
			</tr>
			<tr>
				<td class="riga_tit" title="202,203,205,211,216,217,221,222,225,226,230,232,233,235,243,244,249,258,259">Informative banking</td>
				<td class="riga_last colored riga_bot"><span class="numero_percent">21 %</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(0,3);">8104</a></td>
				<td class="riga_last colored riga_bot"><span class="numero_percent">65%</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(0,0);">24852</a></td>

				<td class="riga_last colored riga_bot"><span class="numero_percent">13%</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(0,1);">5148</a></td>
				
				<td class="riga_last colored riga_bot"><span class="numero_percent">0%</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(0,7);">143</a></td>
				<td class="riga_tot colored riga_bot"><span class="numero_percent">100%</span><br class="clear" />38.247</td>
			</tr>
			<tr>
				<td class="riga_tit" title="204,210,212,213,214,218,219,220,223,224,227,231,234,236,237,238,239,240,241,242,245,246,247,248,250,251,254,255,261,263">Dispositive banking</td>

				<td class="riga_last colored"><span class="numero_percent">18 %</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(1,3);">1830</a></td>
				<td class="riga_last colored"><span class="numero_percent">65%</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(1,0);">6580</a></td>
				<td class="riga_last colored"><span class="numero_percent">16%</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(1,1);">1618</a></td>
				
				<td class="riga_last colored"><span class="numero_percent">0%</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(1,7);">40</a></td>
				<td class="riga_tot colored"><span class="numero_percent">100%</span><br class="clear" />10.068</td>

			</tr>
			<tr>
				<td class="riga_tit" title="212,213,214,218,219,238,240,251,227"> --- bonifici</td>
				<td><span class="numero_percent">1.602K&nbsp;&nbsp;&nbsp; AVG 2.127</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(2,3);">753</a></td>
				<td><span class="numero_percent">10.713K&nbsp;&nbsp;&nbsp; AVG 2.123</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(2,0);">5045</a></td>

				<td><span class="numero_percent">2.352K&nbsp;&nbsp;&nbsp; AVG 1.957</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(2,1);">1202</a></td>
				
				<td><span class="numero_percent">045K&nbsp;&nbsp;&nbsp; AVG 1.421</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(2,7);">32</a></td>
				<td class="riga_tot"><span class="numero_percent">14.713K&nbsp;&nbsp;&nbsp; AVG 2.092</span><br class="clear" />7032</td>

			</tr>
			<tr>
				<td class="riga_tit" title="254,255"> --- trasf da/vs CDEP</td>
				<td><span class="numero_percent">7.126K&nbsp;&nbsp;&nbsp; AVG 11.402</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(2,3);">625</a></td>
				<td class="riga_tit">&nbsp;</td>
				<td class="riga_tit">&nbsp;</td>

				
				<td class="riga_last">&nbsp;</td>
				<td class="riga_tot">&nbsp;</td>
			</tr>
			<tr>
				<td class="riga_tit " title="206,247,231,234,245"> --- ric. cell/carte/mediaset</td>
				<td ><a href="javascript:;" onclick="caricaDinamico(3,3);">315</a></td>
				<td ><a href="javascript:;" onclick="caricaDinamico(3,0);">1153</a></td>

				<td ><a href="javascript:;" onclick="caricaDinamico(3,1);">303</a></td>
				
				<td ><a href="javascript:;" onclick="caricaDinamico(3,7);">2</a></td>
				<td class="riga_tot">1773</td>
			</tr>
			<tr>
				<td class="riga_tit ">Trading</td>
				<td class="riga_last colored"><a href="http://10.13.112.35/ordini/ordini_online.php">WeBank</a></td>

				<td colspan="4" class="riga_tot colored">&nbsp;</td>
			</tr>
			<tr>
				<td class="riga_tit" title="600"> --- ordini inseriti</td>
				<td class="riga_last"><span class="numero_percent">000K&nbsp;&nbsp;&nbsp; AVG </span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(4,3);"/>0</td>
				<td class="riga_last"><span class="numero_percent">11.123K&nbsp;&nbsp;&nbsp; AVG 13.499</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(4,0);"/>824</td>

				<td class="riga_last"><span class="numero_percent">2.999K&nbsp;&nbsp;&nbsp; AVG 16.945</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(4,1);"/>177</td>
				
				<td class="riga_last"><span class="numero_percent">009K&nbsp;&nbsp;&nbsp; AVG 1.221</span><br class="clear" /><a href="javascript:;" onclick="caricaDinamico(4,7);"/>8</td>
				<td class="riga_tot"><span class="numero_percent">14.132K&nbsp;&nbsp;&nbsp; AVG 14.006</span><br class="clear" />1009</td>

			</tr>
			<tr>
				<td class="riga_tit"> --- ordini eseguiti</td>
				<td class="riga_last"><span class="numero_percent">000K&nbsp;&nbsp;&nbsp; AVG 000</span><br class="clear" />0</td>
				<td class="riga_last"><span class="numero_percent">000K&nbsp;&nbsp;&nbsp; AVG 000</span><br class="clear" />475</td>

				<td class="riga_last"><span class="numero_percent">000K&nbsp;&nbsp;&nbsp; AVG 000</span><br class="clear" />104</td>
				
				<td class="riga_last"><span class="numero_percent">000K&nbsp;&nbsp;&nbsp; AVG 000</span><br class="clear" />2</td>
				<td class="riga_tot"><span class="numero_percent">000K&nbsp;&nbsp;&nbsp; AVG 000</span><br class="clear" />581</td>

			</tr>
		</table>

		<br />
	</div>
</body>
</html>
