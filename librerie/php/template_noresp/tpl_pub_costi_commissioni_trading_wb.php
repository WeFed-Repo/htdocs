<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<div id="maincontent">
	<div class="maincontenttopper"></div>

	<!-- titolo -->
	<?php virtual("/librerie/include/commons/titoli/pub_wb_int_tit_003.php"); ?>
	<!--fine  titolo -->
	<!-- visual dinamico -->
	<?php virtual("/librerie/include/commons/boxeditoriali/pub_wb_int_box_000.php"); ?>
	<!-- /visual dinamico -->
	<!-- titolo -->
	<div class="titimg">
	<img class="sx" title="T-cube" alt="T-cube" src="/img/ico2or_tcube.gif"/>
	<h3 class="title">Lorem ipsum dolor sit amet</h3>
	<h4>Lorem ipsum dolor sit amet</h4>
	</div>	
	<!--fine  titolo -->
	
	<!-- testo -->
	<p class="black">Lorem ipsum dolor sit amet, consectetur ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
	</p>
	<!--fine  testo -->
	
	<!-- elenco semplice -->
	<h5>Lorem ipsum</h5>
	<h6>Lorem ipsum Lorem ipsum</h6>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
</p>
	<ul class="simplelist">
	<li><a href="">Lorem ipsum</a></li>
	<li>Lorem ipsum</li>
	<li><strong>Lorem</strong> ipsum</li>
	</ul>

	<!-- fine elenco semplice -->

	<!-- fine elenco semplice -->
	
<!-- TABELLA COSTI E COMMISSIONI -->

<table class="activetable activetableColorTab" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td class="bgAtt">
			<div class="profFis"><a href="javascript:;" onclick="$('#ProfiloFis').show();$('#ProfiloVar').hide();$(this).parent().parent().next().removeClass('bgAtt');$(this).parent().parent().addClass('bgAtt');">PROFILO FISSO</a></div>
		</td>
		<td>
			<div class="profVar"><a href="javascript:;" onclick="$('#ProfiloVar').show();$('#ProfiloFis').hide();$(this).parent().parent().prev().removeClass('bgAtt');$(this).parent().parent().addClass('bgAtt');">PROFILO VARIABILE</a></div>
		</td>
	</tr>	
</table>
<table id="ProfiloFis" class="activetable activetableColor" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td colspan="2" class="bor textLeft col01"><strong>Commissioni mese precedente</strong></td>
		<td class="borLeft">da 0<br>a 500 &euro;</td>
		<td class="borLeft">da 500<br>a 1000 &euro;</td>
		<td class="borLeft">da 1000<br>a 1500 &euro;</td>
		<td class="borLeft">da 1500<br>a 2000 &euro;</td>
		<td class="borLeft">oltre i 2000 &euro;</td>
	</tr>
	<tr>
		<td colspan="2" rowspan="5" class="bor textLeft"><strong>Livello</strong></td>
		<td rowspan="5" class="bgCosti1 bor"><span class="circle">1</span></td>
		<td class="bgCostiPad">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
	</tr>
	<tr>
		<td rowspan="4" class="bgCosti2 bor"><span class="circle">2</span></td>
		<td class="bgCostiPad">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
	</tr>
	<tr>
		<td rowspan="3" class="bgCosti3 bor"><span class="circle">3</span></td>
		<td class="bgCostiPad">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
	</tr>
	<tr>
		<td rowspan="2" class="bgCosti4 bor"><span class="circle">4</span></td>
		<td class="bgCostiPad">&nbsp;</td>
	</tr>
	<tr>
		<td class="bgCosti5 bor"><span class="circle">5</span></td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni Italia,<br>Azioni Europa*,<br> Obbligazioni<br>ETF e SEDEX</strong></a></td>
		<td class="bgCosti1 bor fontBig">12 &euro;</td>
		<td class="bgCosti2 bor fontBig">8 &euro;</td>
		<td class="bgCosti3 bor fontBig">6 &euro;</td>
		<td class="bgCosti4 bor fontBig">4 &euro;</td>
		<td class="bgCosti5 bor fontBig">2,75 &euro;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">
				<strong>Azionario Italia</strong> (MTA - TAH, AIM, ETF, PLUS, azionario Euro TLX)<br>
				<strong>Azionario Europa</strong>(1) (Germania Xetra, Euronext Francia - Olanda - Belgio, Portogallo, Ibex Spagna)<br><strong>Obbligazionario</strong> (EUROTLX, MOT, ExtraMOT, Hi - MTF, Akros IS, Obbligazioni OTC)<br>
				<strong>Certificati e CW</strong> (Sedex)
			</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni USA</strong></a></td>
		<td class="bgCosti1 bor">15,9 &#36;</td>
		<td class="bgCosti2 bor">12,9 &#36;</td>
		<td class="bgCosti3 bor">9,9 &#36;</td>
		<td class="bgCosti4 bor">6,9 &#36;</td>
		<td class="bgCosti5 bor">6,9 &#36;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">Nasdaq, Nyse</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni Londra</strong></a></td>
		<td class="bgCosti1 bor">12,5 &pound;</td>
		<td class="bgCosti2 bor">12,5 &pound;</td>
		<td class="bgCosti3 bor">10 &pound;</td>
		<td class="bgCosti4 bor">10 &pound;</td>
		<td class="bgCosti5 bor">7,5 &pound;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">London Stock Exchange</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati A</strong></a></td>
		<td class="bgCosti1 bor">9 &euro;</td>
		<td class="bgCosti2 bor">5,9 &euro;</td>
		<td class="bgCosti3 bor">5,9 &euro;</td>
		<td class="bgCosti4 bor">3 &euro;</td>
		<td class="bgCosti5 bor">3 &euro;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">
				<strong>IDEM</strong> (FTSE MIB Future)<br>
				<strong>EUREX</strong> (Dax Future, Bund, Bobl ,Schatz, Buxl, BTP Long - Short -<br>Mid Term Futures, OAT Futures)<br>
				<strong>CME</strong> (Nikkei 225 Dollar based, Energy Futures,<br>5/10/30 Year Treasury Futures, Agricultural Futures (1), Metal Futures)<br>
				<strong>eCBOT</strong> (Metal Futures)<br>
				<strong>LIFFE</strong> (FTSE 100 Index Futures, Long Gilt Futures)<br><br>
				(1) Per gli strumenti Agricultural Futures è prevista una commissione minima pari a 5,90 Euro per lotto eseguito.</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati B</strong></a></td>
		<td class="bgCosti1 bor">5,9 &euro;</td>
		<td class="bgCosti2 bor">3,9 &euro;</td>
		<td class="bgCosti3 bor">3,9 &euro;</td>
		<td class="bgCosti4 bor">3 &euro;</td>
		<td class="bgCosti5 bor">3 &euro;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">
				<strong>IDEM</strong> (FTSE MIB Options, Opzioni su Azioni)<br>
				<strong>EUREX</strong> (DJ Eurostoxx 50 Futures, DjStoxx50, DJSettoriali, DJTitan30, Option Dax -  Option Dj, EuroStoxx 50 - Bund - Bobl - Schatz)<br>
				<strong>CME</strong> ( Eurodollaro 3 mesi, Futures, E-mini nasdaq100 - E mini S&amp;P500 Futures, Mini Dow Jones Futures, E-MiniS&amp;P MID 400, E-MiniS&amp;P SMCAP 600, Euro/Dollaro FX – E-mini, Euro/Dollaro FX Futures-Futures su Cambi:British Pound, Canadian Dollar, Australian Dollar, Swiss Franc)<br>
				<strong>LIFFE</strong> (AC40 Futures, AEX Futures)</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati C</strong></a></td>
		<td class="bgCosti1 bor">3,9 &euro;</td>
		<td class="bgCosti2 bor">1,9 &euro;</td>
		<td class="bgCosti3 bor">1,9 &euro;</td>
		<td class="bgCosti4 bor">1,9 &euro;</td>
		<td class="bgCosti5 bor">1,9 &euro;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">MiniFTSE MIB Future, MiniFTSE 100 Future, Stock Future</p>
		</td>
	</tr>
	<tr>
		<td colspan="7" class="textLeft">* Su ciascun ordine esguito sui mercati azionari europei sar&agrave; applicata una maggiorazione di 9 euro per spese e diritti fissi.</td>
	</tr>
</table>

<table id="ProfiloVar" style="display:none" class="activetable activetableColor" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td colspan="2" class="bor textLeft col01"><strong>Commissioni mese precedente</strong></td>
		<td class="borLeft">da 0<br>a 500 &euro;</td>
		<td class="borLeft">da 500<br>a 1000 &euro;</td>
		<td class="borLeft">da 1000<br>a 1500 &euro;</td>
		<td class="borLeft">da 1500<br>a 2000 &euro;</td>
		<td class="borLeft">oltre i 2000 &euro;</td>
	</tr>
	<tr>
		<td colspan="2" rowspan="5" class="bor textLeft"><strong>Livello</strong></td>
		<td rowspan="5" class="bgCosti1 bor"><span class="circle">1</span></td>
		<td class="bgCostiPad">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
	</tr>
	<tr>
		<td rowspan="4" class="bgCosti2 bor"><span class="circle">2</span></td>
		<td class="bgCostiPad">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
	</tr>
	<tr>
		<td rowspan="3" class="bgCosti3 bor"><span class="circle">3</span></td>
		<td class="bgCostiPad">&nbsp;</td>
		<td class="bgCostiPad borLeft">&nbsp;</td>
	</tr>
	<tr>
		<td rowspan="2" class="bgCosti4 bor"><span class="circle">4</span></td>
		<td class="bgCostiPad">&nbsp;</td>
	</tr>
	<tr>
		<td class="bgCosti5 bor"><span class="circle">5</span></td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni Italia,<br>Azioni Europa*,<br> Obbligazioni<br>ETF e SEDEX</strong></a></td>
		<td class="bgCosti1 bor fontBig">0,19%<br><span class="fontMin">Min 2,75 &euro;<br>Max 18,9 &euro;</span></td>
		<td class="bgCosti2 bor fontBig">0,17%<br><span class="fontMin">Min 2,75 &euro;<br>Max 12,9 &euro;</span></td>
		<td class="bgCosti3 bor fontBig">0,15%<br><span class="fontMin">Min 2,75 &euro;<br>Max 9,9 &euro;</span></td>
		<td class="bgCosti4 bor fontBig">0,13%<br><span class="fontMin">Min 2,75 &euro;<br>Max 6,9 &euro;</span></td>
		<td class="bgCosti5 bor fontBig">2,75 &euro;<br>&nbsp;<br>&nbsp;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">
				<strong>Azionario Italia</strong> (MTA - TAH, AIM, ETF, PLUS, azionario Euro TLX)<br>
				<strong>Azionario Europa</strong>(1) (Germania Xetra, Euronext Francia - Olanda - Belgio, Portogallo, Ibex Spagna)<br><strong>Obbligazionario</strong> (EUROTLX, MOT, ExtraMOT, Hi - MTF, Akros IS, Obbligazioni OTC)<br>
				<strong>Certificati e CW</strong> (Sedex)
			</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni USA</strong></a></td>
		<td class="bgCosti1 bor">15,9 &#36;</td>
		<td class="bgCosti2 bor">12,9 &#36;</td>
		<td class="bgCosti3 bor">9,9 &#36;</td>
		<td class="bgCosti4 bor">6,9 &#36;</td>
		<td class="bgCosti5 bor">6,9 &#36;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">Nasdaq, Nyse</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Azioni Londra</strong></a></td>
		<td class="bgCosti1 bor">12,5 &pound;</td>
		<td class="bgCosti2 bor">12,5 &pound;</td>
		<td class="bgCosti3 bor">10 &pound;</td>
		<td class="bgCosti4 bor">10 &pound;</td>
		<td class="bgCosti5 bor">7,5 &pound;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">London Stock Exchange</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati A</strong></a></td>
		<td class="bgCosti1 bor">9 &euro;</td>
		<td class="bgCosti2 bor">5,9 &euro;</td>
		<td class="bgCosti3 bor">5,9 &euro;</td>
		<td class="bgCosti4 bor">3 &euro;</td>
		<td class="bgCosti5 bor">3 &euro;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">
				<strong>IDEM</strong> (FTSE MIB Future)<br>
				<strong>EUREX</strong> (Dax Future, Bund, Bobl ,Schatz, Buxl, BTP Long - Short -<br>Mid Term Futures, OAT Futures)<br>
				<strong>CME</strong> (Nikkei 225 Dollar based, Energy Futures,<br>5/10/30 Year Treasury Futures, Agricultural Futures (1), Metal Futures)<br>
				<strong>eCBOT</strong> (Metal Futures)<br>
				<strong>LIFFE</strong> (FTSE 100 Index Futures, Long Gilt Futures)<br><br>
				(1) Per gli strumenti Agricultural Futures è prevista una commissione minima pari a 5,90 Euro per lotto eseguito.</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati B</strong></a></td>
		<td class="bgCosti1 bor">5,9 &euro;</td>
		<td class="bgCosti2 bor">3,9 &euro;</td>
		<td class="bgCosti3 bor">3,9 &euro;</td>
		<td class="bgCosti4 bor">3 &euro;</td>
		<td class="bgCosti5 bor">3 &euro;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">
				<strong>IDEM</strong> (FTSE MIB Options, Opzioni su Azioni)<br>
				<strong>EUREX</strong> (DJ Eurostoxx 50 Futures, DjStoxx50, DJSettoriali, DJTitan30, Option Dax -  Option Dj, EuroStoxx 50 - Bund - Bobl - Schatz)<br>
				<strong>CME</strong> ( Eurodollaro 3 mesi, Futures, E-mini nasdaq100 - E mini S&amp;P500 Futures, Mini Dow Jones Futures, E-MiniS&amp;P MID 400, E-MiniS&amp;P SMCAP 600, Euro/Dollaro FX – E-mini, Euro/Dollaro FX Futures-Futures su Cambi:British Pound, Canadian Dollar, Australian Dollar, Swiss Franc)<br>
				<strong>LIFFE</strong> (AC40 Futures, AEX Futures)</p>
		</td>
	</tr>
	<tr>
		<td class="openercontainer no_rightborder bor"><a alt="Apri" class="opener" onclick="javascript: activetabledetail(this);" href="javascript:;"></a></td>
		<td class="no_leftborder bor textLeft"><a onclick="javascript: activetabledetail(this);" href="javascript:;"><strong>Derivati C</strong></a></td>
		<td class="bgCosti1 bor">3,9 &euro;</td>
		<td class="bgCosti2 bor">1,9 &euro;</td>
		<td class="bgCosti3 bor">1,9 &euro;</td>
		<td class="bgCosti4 bor">1,9 &euro;</td>
		<td class="bgCosti5 bor">1,9 &euro;</td>
	</tr>
	<tr class="closed">
		<td colspan="7" class="bor textLeft">
			<p class="textLeftPie">MiniFTSE MIB Future, MiniFTSE 100 Future, Stock Future</p>
		</td>
	</tr>
	<tr>
		<td colspan="7" class="textLeft">* Su ciascun ordine esguito sui mercati azionari europei sar&agrave; applicata una maggiorazione di 9 euro per spese e diritti fissi.</td>
	</tr>
</table>


<!-- FINE TABELLA COSTI E COMMISSIONI -->	


</div>
<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>


