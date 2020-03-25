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
	

	
<!--nuova FP investimenti -->	
<style>
.boxSoluzioniInv{width:591px;margin:0 auto}
.boxSoluzioniInvLeft{width:376px;float:left;height:158px}
.boxSoluzioniInvRight{width:183px;float:right;height:158px}

</style>

<div class="boxSoluzioniInv">
	<div class="boxSoluzioniInvLeft">
		<img src="/img/ret/str_fpinv_soluzioni_guidate.gif" alt="soluzioni guidate" />
	</div>
	<div class="boxSoluzioniInvRight">
		<img src="/img/ret/str_fpinv_soluzioni_faidate.gif" alt="soluzioni fai da te" />
	</div>
</div>
<br class="clear" />	
<!--nuova FP investimenti -->	
<h2>Il mio portafoglio investimenti</h2>
<?php virtual ("/librerie/include/wetrade/boxeditoriali/box_wt_004.php"); ?>
<table cellspacing="0" cellpadding="0" width="" class="tab17 tab17nob tab17nobot">
<tr> 
	<th>Tipologia</th>
	<th class="uno">Controvalore<br/>attuale/alla scadenza</th>
	<th>Controvalore<br/>investito</th>            
	<th class="nocap">Var assol.</th>
	<th class="nocap">Var %</th>
	<th class="ultimo">Dett.</th>
</tr>
<tr class="b bb"> 
	<td class="sx">Fondi e Sicav</td>
    <td class="dx">xxx,xx</td>
    <td class="dx">xxx,xx</td> 
    <td class="dx v">xx,xx</td> 
    <td class="dx v">xx,xx</td>
	<td  class="ultimo"><a title="Dettagli Fondi e Sicav" href="#1"><img alt="Dettagli Fondi e Sicav" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
</tr>
<tr class="c bb"> 
	<td class="sx nocap">PCT<br/><span class="note"><span class="grigio">(per i PCT il controvalore è calcolato alla scadenza)</span></span></td>
    <td class="dx">xxx,xx</td>
    <td class="dx">xxx,xx</td> 
    <td class="dx v">xx,xx</td> 
    <td class="dx v">xx,xx</td>
	<td  class="ultimo"><a title="Dettagli PCT" href="#1"><img alt="Dettagli PCT" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
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
		<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>portafoglio operativo</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
	<br class="clear">
	</div>	
<br class="clear">
</div>
<br class="clear" /><br/>

<div class="tabber">
						<div class="tablistcellc">

							<a href="javascript:;" onclick="opentab(this);" class="active">News</a>
							<a href="javascript:;" onclick="opentab(this);">Rumors</a>
							<a href="javascript:;" onclick="opentab(this);">Rassegna stampa</a>
						</div>
							
						<div class="boxcontainer">
							



								<div class="boxfpnews">
									<table>

										<tbody>

											<tr>
												<td>18/08/10 09:54:07</td>
												<td>Finanza.com</td>
												<td><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_newsFinanziarie.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_news&amp;from=nav&amp;codiceBlo=NEB046" class="link">&nbsp;Crucell: Ubs abbassa il rating a neutral dal precedente buy</a></td>
											</tr>

											<tr>
												<td>18/08/10 09:52:15</td>
												<td>Finanza.com</td>
												<td><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_newsFinanziarie.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_news&amp;from=nav&amp;codiceBlo=NEB045" class="link">&nbsp;Carlsberg: Ubs aumenta tp da 520 a 550 corone danesi, rating neutral</a></td>
											</tr>

											<tr>
												<td>18/08/10 09:48:35</td>

												<td>Finanza.com</td>
												<td><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_newsFinanziarie.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_news&amp;from=nav&amp;codiceBlo=NEB044" class="link">&nbsp;***Piazza Affari accelera al ribasso, -0,99% il Ftse Mib***</a></td>
											</tr>

											<tr>
												<td colspan="3" class="last"><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_newsFinanziarie.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_news&amp;from=nav" class="goto">Vedi tutte</a></td>
											</tr>				

										</tbody>

									</table>
								</div>
							



								<div class="boxfpnews" style="display: none;">
									<table>
										<tbody>

											<tr>
												<td>27/05/10 09:56:57</td>
												<td><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_rumorsBloomberg.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_rumors&amp;from=nav&amp;codiceBlo=RMB000" class="link">&nbsp;Prysmian: Tamburi punta a salire al 10%, il mercato fiuta odore di scalata (Sole 24 Ore)</a></td>

											</tr>

											<tr>
												<td>24/05/10 11:21:57</td>
												<td><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_rumorsBloomberg.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_rumors&amp;from=nav&amp;codiceBlo=RMB001" class="link">&nbsp;Anche Pirelli Real Estate nella partita per rilevare Karstadt</a></td>
											</tr>

											<tr>
												<td>06/04/10 09:29:25</td>

												<td><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_rumorsBloomberg.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_rumors&amp;from=nav&amp;codiceBlo=RMB002" class="link">&nbsp;ArcelorMittal e quella licenza nello stato di Stato del Jharkhand (Press Trust of India)</a></td>
											</tr>

											<tr>
												<td colspan="3" class="last"><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_rumorsBloomberg.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_rumors&amp;from=nav" class="goto">Vedi tutti</a></td>
											</tr>				

										</tbody>
									</table>
								</div>

							



								<div class="boxfpnews" style="display: none;">
									<table>
										<tbody>								

											<tr>
												<td>05/03/10 08:06:08</td>
												<td><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_headlinesBloomberg.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_rassegna_stampa&amp;from=nav&amp;codiceBlo=HLB019" class="link">&nbsp;Classifica Fortune: Apple resta prima al mondo</a></td>
											</tr>

											<tr>

												<td>05/03/10 08:06:08</td>
												<td><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_headlinesBloomberg.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_rassegna_stampa&amp;from=nav&amp;codiceBlo=HLB053" class="link">&nbsp;Classifica Fortune: Apple resta prima al mondo</a></td>
											</tr>

											<tr>
												<td>05/03/10 08:04:53</td>
												<td><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_headlinesBloomberg.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_rassegna_stampa&amp;from=nav&amp;codiceBlo=HLB018" class="link">&nbsp;Grecia, a ruba il bond decennale</a></td>

											</tr>

											<tr>
												<td colspan="2" class="last"><a href="/webankpri/wbOnetoone/mf/jsp/wbOnetoone/user_headlinesBloomberg.do?tabId=nav_priv_wbx_trading&amp;OBSKEY=nav_priv_wbx_rassegna_stampa&amp;from=nav" class="goto">Vedi tutti</a></td>
											</tr>				
	
										</tbody>
									</table>								
								</div>
						</div>
						<div class="shadow2"></div>

					</div>



<?php } ?>

<!-- FINE NUOVA GRAFICA WEBANK WETRADE-->