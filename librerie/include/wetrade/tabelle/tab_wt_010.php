<script type="text/javascript">
window.onload = function() 
{
	var tabella = $('table.tab17.ind.grafindici');
	
	var ancore = $('table.tab17.ind.grafindici td.grafselected');
	
	for(i=0; i< ancore.length; i++) 
	{
		if(ancore[i].innerHTML.indexOf('imggrafselected') >=0) 
		{
			ancore[i].innerHTML = '<a href="javascript:;" class="imggrafselected" onclick="borsaclick(' +i + ')' + '">' + '</a>';
		}
		else {ancore[i].innerHTML = '<a href="javascript:;" class="normal" onclick="borsaclick(' +i + ')' + '">' + '</a>';}
	
	}
	
}

function borsaclick(indice) 
{
	var imgindex = 0;
	var cellaselected = $('table.tab17.ind.grafindici td.grafselected a');
	for(i = 0; i<cellaselected.length;i++) 
	{
		imgindex = i;
		if(imgindex == indice) 
		{
			cellaselected[i].className='imggrafselected';
		}
		
	
		else {cellaselected[i].className='normal';}
	}
}
/*function  tabAttivo() 
	{
		$('2').className= 'tab17 ind grafindici visible';
	}*/
</script>
<div class="graintfp">
<div class="tithelp">	
	<div class="helpleft"><h2 class="titTable"> Indici di borsa </h2></div>			
	<br class="clear"/>
</div>
<div class="graintfpleft">
<table cellspacing="0" cellpadding="0" class="tab17 ind grafindici" id="grafindiciTab1">
	<tr>
		<th class="uno" width="130">Mercati</th>
		<th class="uno">Valore</th>
		<th class="uno">Tendenza</th>
		<th class="uno">Grafico</th>
	</tr>				  
	
	<tr class="b bb"> 
		<td class="sx"><a href="#">FTSE MIB</a></td>
		<td class="dx">xx.xxx,xx</td>
		<td>x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="imggrafselected"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx"><a href="#">Down Jones</a></td>
		<td class="dx">xx.xxx,xx</td>
		<td class="posi">x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="b bb"> 
		<td class="sx"><a href="#">Mini NY Gold</a></td>
		<td class="dx">xx.xxx,xx</td>
		<td> x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx"><a href="#">Euro/Usd FX</a></td>
		<td class="dx">xx.xxx,xx</td>
		<td class="posi">x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="b bb"> 
		<td class="sx"><a href="#">E-mini S&P500 </a></td>
		<td class="dx">xx.xxx,xx</td>
		<td > x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx"><a href="#">30 Year Treasury Notes</a></td>
		<td class="dx">xx.xxx,xx</td>
		<td >x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="b bb"> 
		<td class="sx"><a href="#">E-miNY Crude Oil</a></td>
		<td class="dx">xx.xxx,xx</td>
		<td class="nega">x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx"><a href="#">30 Year Treasury Notes</a></td>
		<td class="dx">xx.xxx,xx</td>
		<td >x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="b bb"> 
		<td class="sx"><a href="#">E-miNY Crude Oil</a></td>
		<td class="dx">xx.xxx,xx</td>
		<td class="nega">x,xx%</td>
		<td class="grafselected"><a href="javascript:;" class="normal"></a></td>
	</tr>
	<tr class="c bb"> 
		<td class="sx">Mercato Nikkei</td>
		<td class="dx">xx.xxx,xx</td>
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
		<td><a onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&tpl=/wetrade/tpl_priv_lib_wt_visualizza_garfico_grande_pop_up.php&flg=WT&sid=priv');" href="javascript:;"><img border="0" src="img/ret/wt_chart.gif" alt="Clicca qui per il grafico multiday" name="Grafici"/></a></td>
	</tr>
	<tr>
		<td>Stato <strong>APERTO</strong></td>
	</tr>
</table>




</div>



</div>

