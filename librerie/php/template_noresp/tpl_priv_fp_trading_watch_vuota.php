<?php if ($bank != "webank")
				{
				?>

<div class="topbanner">
	<a title="Lorem" href="#"><img src="/img/ret/ban_nodeptitoli.jpg"/></a>
</div>
<?php 
	virtual("/librerie/include/commons/titoli/tit_priv_ret_001.php");
?>
<div id="selezb">
<table cellspacing="0" cellpadding="0" border="0">
	<tbody><tr>
		<td>Lorem ipsum dolor sit amet</td>
		<td><select name="select"><option>12345-1234567890123 - EUR</option><option/></select></td>
	</tr>
</tbody></table>
</div>
<table cellspacing="0" cellpadding="0" class="tab17 tab17nob">
          <tbody>
          <tr> 
            <th width="94" class="uno"> </th>
			<th width="110">Lorem ipsum lorem ipsum</th>
            <th width="119">Lorem ipsum lorem ipsum</th>
            <th width="119">Lorem ipsum lorem ipsum</th>
            <th width="99" class="ultimo">Lore.</th>
          </tr>
          <tr class="b"> 
            <td class="sx lastrow"><a href="#">Lorem ipsum</a></td>
            <td class="dx lastrow">10.000,00</td>
            <td class="dx lastrow">10.000,00</td> 
            <td class="dx lastrow">10.000,00</td> 
            <td class="dx ultimo vb lastrow">+4,00</td>
          </tr>         
        </tbody>
</table>
<div class="fooform">
	<div class="fooformright">
		<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
		<br class="clear"/>
	</div><br class="clear"/>
</div>
<?php //if ($hidden == "true") { ?>
<br class="clear">
<?php 
	virtual("/librerie/include/commons/titoli/tit_priv_ret_001.php");
	virtual("/librerie/include/commons/navigazione/nav_black_priv_018.php");
?>
<?php //}; ?>
<br class="clear">

	<div class="tabber">
	<div class="tablistcellc">
		<a href="javascript:;" onclick="opentab(this);" class="active">Lorem ipsum 1</a>
		<a href="javascript:;" onclick="opentab(this);">Lorem ipsum 2</a>
		<a href="javascript:;" onclick="opentab(this);">Lorem ipsum 3</a>
	</div>
	<div class="boxcontainer">
		<?php 
			virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_070.html");
		?>
	
		<div class="boxfpnews" style="display: none;">
			<table>
				<tr>
					<td class="">00/00/0000</td>
					<td class=""><a href="#" class="link">Lorem ipsum dolor sit amet consectetur adip isc ing elit amet consecte tur elit</a></td>
				</tr>
				<tr>
					<td class="">00/00/0000</td>
					<td class=""><a href="#" class="link">Lorem ipsum dolor sit amet conse ctetur adip isc ing elit amet consec tetur elit</a></td>
				</tr>
				<tr>
					<td class="">00/00/0000</td>
					<td class=""><a href="#" class="link">Lorem ipsum dolor sit amet conse ctetur adip isc ing elit amet con sectetur elit</a></td>
				</tr>
				<tr>
					<td colspan="3" class="last"><a href="" class="goto">Vedi tutte</a></td>
				</tr>
			</table>
			<br class="clear">
		</div>	
		
		<div class="boxfpnews" style="display: none;">
			<table>
				<tr>
					<td class="">00/00/0000<br><i>00:00</i></td>
					<td class="">www.otherwebsite.com</td>
			
					
					<td class=""><a href="#" class="link">Lo rem ipsum dolor sit amet consec tetur adip isc ing elit amet consectetur elit</a></td>
				</tr>
				
				<tr>
					<td class="">00/00/0000<br><i>00:00</i></td>
					<td class="">www.website.com</td>
					<td class=""><a href="#" class="link">Lorem ipsum dolor sit amet consectetur adip isc ing elit amet consectetur elit</a></td>
				</tr>
			
				<tr>
					<td class="">00/00/0000<br><i>00:00</i></td>
					<td class="">www.sample.com</td>
					<td class=""><a href="#" class="link">Lorem ipsum dolor sit amet conse ctetur adip isc ing elit amet consectetur elit</a></td>
				</tr>
				<tr>
					<td colspan="3" class="last"><a href="" class="goto">Vedi tutte</a></td>
				</tr>
			</table>
			<br class="clear">
		</div>
	
		<br class="clear">
	</div>	
	<div class="shadow2"></div>

</div> 
<?php } ?>




<!-- NUOVA GRAFICA WEBANK WETRADE-->

<?php if ($bank == "webank")
				{
				?>

<?php virtual ("/librerie/include/wetrade/bottoni/bot_wt_003c.php"); ?>				
<h2>Il mio portafoglio titoli</h2>
<?php virtual ("/librerie/include/wetrade/boxeditoriali/box_wt_004.php"); ?>


<table cellspacing="0" cellpadding="0" width="" class="tab17 tab17nob tab17nobot">
<tr> 
	<th width="114">Tipologia</th>
	<th width="141" class="uno">Controvalore EUR<br/>attuale</th>
	<th width="138">Controvalore EUR<br/>investito</th>            
	<th width="58">Var assol.</th>
	<th width="38">Var %</th>
	<th width="38" class="ultimo">Dett.</th>
</tr>
<tr class="b bb"> 
	<td class="sx nocap">Azioni Italia</td>
    <td class="dx">xxx,xx</td>
    <td class="dx">xxx,xx</td> 
    <td class="dx v">xx,xx</td> 
    <td class="dx v">xx,xx</td>
	<td class="ultimo"><a title="Dettagli Azioni Italia" href="#1"><img alt="Dettagli Azioni Italia" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
</tr>
<tr class="c bb"> 
	<td class="sx nocap">Azioni Estero</td>
    <td class="dx">xxx,xx</td>
    <td class="dx">xxx,xx</td> 
    <td class="dx r">-xx,xx</td> 
    <td class="dx r">-xx,xx</td>
	<td class="ultimo"><a title="Dettagli Azioni Estero" href="#1"><img alt="Dettagli Azioni Estero" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
</tr>
<tr class="b bb"> 
	<td class="sx nocap">Obbligazioni</td>
    <td class="dx">xxx,xx</td>
    <td class="dx">xxx,xx</td> 
    <td class="dx v">xx,xx</td> 
    <td class="dx v">xx,xx</td>
	<td class="ultimo"><a title="Dettagli Obbligazioni" href="#1"><img alt="Dettagli Obbligazioni" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
</tr>
<tr class="c bb"> 
	<td class="sx nocap">Derivati</td>
    <td class="dx">xxx,xx</td>
    <td class="dx">xxx,xx</td> 
    <td class="dx r">-xx,xx</td> 
    <td class="dx r">-xx,xx</td>
	<td class="ultimo"><a title="Dettagli Derivati" href="#1"><img alt="Dettagli Derivati" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
</tr>
<tr class="b bb"> 
	<td class="sx nocap">Coverred Warrant/Certificates</td>
    <td class="dx">xxx,xx</td>
    <td class="dx">xxx,xx</td> 
    <td class="dx v">xx,xx</td> 
    <td class="dx v">xx,xx</td>
	<td class="ultimo"><a title="Dettagli Coverred Warrant/Certificates" href="#1"><img alt="Dettagli Coverred Warrant/Certificates" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
</tr>
<tr class="c bb"> 
	<td class="sx nocap">ETF</td>
    <td class="dx">xxx,xx</td>
    <td class="dx">xxx,xx</td> 
    <td class="dx v">xx,xx</td> 
    <td class="dx v">xx,xx</td>
	<td class="ultimo"><a title="Dettagli ETF" href="#1"><img alt="Dettagli ETF" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
</tr>
<tr class="b bb"> 
	<td class="sx nocap">Marginazione</td>
    <td class="dx">xxx,xx</td>
    <td class="dx">xxx,xx</td> 
    <td class="dx v">xx,xx</td> 
    <td class="dx v">xx,xx</td>
	<td class="ultimo"><a title="Dettagli Marginazione" href="#1"><img alt="Dettagli Marginazione" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
</tr>
<tr class="b"> 
    <td class="sx lastrow lastrowdb"><b>TOTALE</b></td>
    <td class="lastrow lastrownobot"><b>xxx,xx</b></td>
    <td class="dx lastrow lastrowdb"><b>xxx,xx</b></td> 
    <td class="dx vb lastrow lastrowdb">xx,xx</td> 
	<td class="dx vb lastrow lastrowdb">xx,xx</td> 
    <td class="dx ultimo lastrow lastrowdb">&nbsp;</td>
</tr>

</table>

<?php virtual ("/librerie/include/wetrade/boxeditoriali/box_wt_007.php"); ?>

<div class="fooform">
	<div class="fooformright">
		<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>portafoglio</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
	<br class="clear">
	</div>	
<br class="clear">
</div>
<br class="clear" /><br/>
<h2>Piattaforme di trading</h2>
<div style="background-color: rgb(232, 232, 232); width: 100%; height: 80px; text-align: center; line-height: 30px;">PLACEHOLDER BANNER T3 PROFILATO DA DISEGNARE</div>

<br class="clear" /><br/>
<div class="tabber">
<div class="tablistcellc">
		<a class="active" onclick="opentab(this);" href="javascript:;">Indici</a>
		<a onclick="opentab(this);" href="javascript:;">Futures</a>
		<a onclick="opentab(this);" href="javascript:;">Watchlist</a>
		<a onclick="opentab(this);" href="javascript:;">Cambi</a>
		<a onclick="opentab(this);" href="javascript:;">News</a>
	</div>
	<div class="boxcontainer">
		<div class="boxfpnews">
		<?php virtual ("/librerie/include/wetrade/tabelle/tab_wt_010.php"); ?>
		<br class="clear">
		</div>	
		<div class="boxfpnews" style="display:none">
		
		<div class="graintfp">
<div class="tithelp">	
	<div class="helpleft"><h2 class="titTable"> Indici di borsa </h2></div>			
	<br class="clear"/>
</div>
<div class="graintfpleft">



<table cellspacing="0" cellpadding="0" class="tab17 ind grafindici">
	<tr>
		<th class="uno" width="130">Mercati</th>
		<th class="uno">Valore in punti</th>
		<th class="uno" colspan="2">Tendenza</th>
		<th class="uno">Grafico</th>
	</tr>				  
	
	<tr class="b bb"> 
		<td class="sx">FTSE MIB</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="equal"> </td>
		<td>x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx">Down Jones</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="pos"> </td>
		<td class="posi">x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal" ></a></td>
	</tr>
	<tr class="b bb"> 
		<td class="sx">Mini NY Gold</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="equal"> </td>
		<td> x,xx%</td>
		<td class="grafselected"><a href="javascript:;"  class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx">Euro/Usd FX</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="pos"> </td>
		<td class="posi"> x,xx%</td>
		<td class="grafselected"><a href="javascript:;"  class="normal"></a></td>
	</tr>
	<tr class="b bb"> 
		<td class="sx">E-mini S&P500</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="equal"> </td>
		<td > x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx">30 Year Treasury Notes</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="equal"> </td>
		<td > x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="b bb"> 
		<td class="sx">E-miNY Crude Oil</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="neg"> </td>
		<td class="nega"> x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx">30 Year Treasury Notes</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="equal"> </td>
		<td > x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="b bb"> 
		<td class="sx">E-miNY Crude Oil</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="neg"> </td>
		<td class="nega"> x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx">Mercato Nikkei</td>
		<td class="dx">xx.xxx,xx</td>
		<td class="equal"> </td>
		<td > x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td colspan="5" class="sx legenda">
			<div>
			<span><img alt="Rialzo" src="/img/ret/indice_pos.gif"/>Rialzo</span>
			<span><img alt="Ribasso" src="/img/ret/indice_neg.gif"/>Ribasso</span>
			<span><img alt="Invariato" src="/img/ret/indice_equal.gif"/>Invariato</span>
			<span><img alt="Chiuso" src="/img/ret/indice_close.gif"/>Chiuso</span>	
			</div>
		</td>
	</tr>
	
	
</table>
<p class="note">nota dati real time/no real time</p>
</div>

<div class="graintfpright">

<table cellspacing="0" cellpadding="0" class="tab17 ind">
	<tr>
		<th>Grafico Intraday</th>
	</tr>
	<tr>
		<td><a onclick="javascript:window.open('connect.php?page=/php/wetrade/tpl_priv_lib_wt_visualizza_garfico_grande_pop_up.php','main','width=610,height=445,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes')" href="javascript:;"><img border="0" src="img/ret/wt_chart.gif" alt="Clicca qui per il grafico multiday" name="Grafici"/></a></td>
	</tr>
	<tr>
		<td>Stato <strong>APERTO</strong></td>
	</tr>
</table>




</div>



</div>

		<br class="clear" />
		</div>	
		<!--<div class="boxfpnews" style="display:none">		
			<div class="graintfp">
			<div style="background-color: rgb(232, 232, 232); width: 100%; height: 80px; text-align: center; line-height: 30px;">PLACEHOLDER BANNER WATCHLIST DA DISEGNARE</div>
			</div>
		<br class="clear" />
		</div>	-->
		<div class="boxfpnews" style="display:none">	
		
		<!-- tabella attivazione deposito titoli-->
		<table cellspacing="0" cellpadding="0" border="0" class="TableF24">
			<tr>
				<td class="TopF24"><img hspace="0" border="0" alt="" src="/img/ret/f24_top_grey.gif"/></td>
			</tr>
			<tr>
				<td class="BoxF24"><img border="0" align="left" alt="" class="icoF24" src="/img/ret/ico2_or_warning.gif"/>Ti ricordiamo che per effettuare operazioni di trading � necesasrio aprire un <a href="#">deposito titoli</a> appoggiato al conto corrente</td>
			</tr>
			<tr>
				<td class="BottomF24"><img border="0" alt="" src="/img/ret/f24_bottom_grey.gif"/></td>
			</tr>
		</table>
		<div class="fooform">
				<div class="fooformright">
				<div><a href="" class="btnformright" title="apri deposito titoli"><img alt="" src="/img/ret/btn_left_ar.gif"/><span>apri deposito titoli</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a></div>
			</div>
		
		</div>
		<br class="clear" />
		<!-- box assenza di titoli-->
		
		<?php virtual ("/librerie/include/commons/boxeditoriali/box_black_priv_210.php"); ?>

		
		</div>
		
		
		<div class="boxfpcambi" style="display:none">
		<?php virtual ("/librerie/include/wetrade/tabelle/tab_wt_011.php"); ?>
		</div>
			<div class="boxfpnews" style="display:none">
		<?php virtual ("/librerie/include/wetrade/tabelle/tab_wt_012.php"); ?>
		</div>
	</div>	
	<div class="shadow2"></div>
</div>



<?php } ?>

<!-- FINE NUOVA GRAFICA WEBANK WETRADE-->