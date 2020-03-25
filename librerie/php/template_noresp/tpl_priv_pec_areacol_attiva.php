<h1>Estratto conto e contabili</h1>

<!-- TAB -->
<div class="divtabellalist">
	<table border="0" class="tabellalist">
		<tr>
			<td class="on"><a href="#" title="archivio documenti">archivio documenti</a></td>
			<td class="off"><a href="#" title="cartelle personali">cartelle personali</a></td>
			<td class="off"><a href="#" title="cartelle personali">gestione servizio</a></td>
			<td class="off"><a href="#" title="cartelle personali">info servizio</a></td>
		</tr>
	</table>
</div>
<ul class="listablack">
	<li>Nella tabella sotto, sono presenti i <a href="#" title="documenti bancari">documenti bancari</a> disponibili online relativi al 2010.</li>
	<li>Per visualizzare gli altri documenti utilizza la <strong>ricerca avanzata.</strong></li>
	<li>I documenti prodotti dopo l'eventuale <strong>disattivazione</strong> del servizio saranno inviati in formato cartaceo.</li>
	<li>Le note informative relative all'operativit&agrave; in derivati sono fruibili nel dettaglio della <a href="#" title="situazione ordini">situazione ordini</a>, allegati all'ordine relativo.</li>
</ul>

<table cellspacing="0" cellpadding="0" class="prepa" style="width: 465px; float: left;">
<tr class="tabcarttit"> 
<th colspan="3" class="tabcartleft"><span>Documenti 2009</span></th></tr>
           <tr class="tabcarttit2" style="height: 20px;"> 
            <th class="tabcart2left" style="padding: 0pt 4px; width: 196px;">Tipo documento</th>
            <th class="tabcart2center" style="padding: 0pt; width: 126px; text-align: right;">Tutti i doc.</th>
            <th class="tabcart2right" style="padding: 0pt 4px; width: 143px; text-align: right;">Doc. non letti</th>
          </tr>                 

         <tr class="tabcarttit3" style="height: 31px;"> 
            <td class="tabcart3left" style="padding: 0px 3px;">Estratti conto/deposito</td>     
            <td class="tabcart3center" style="text-align: right;">0</td> 
            <td class="tabcart3right" style="padding: 0px 4px; text-align: right;">0 </td> 
          </tr>                         
         <tr class="tabcarttit4" style="height: 31px;"> 
            <td class="tabcart3left" style="padding: 0px 3px;">Contabili</td>     
            <td class="tabcart3center" style="text-align: right;">0</td> 
            <td class="tabcart3right" style="padding: 0px 4px; text-align: right;">0</td>
		</tr>
		 <tr class="tabcarttit3" style="height: 31px;"> 
            <td class="tabcart3left" style="padding: 0px 3px;">Documenti di sintesi</td>     
            <td class="tabcart3center" style="text-align: right;">0</td> 
            <td class="tabcart3right" style="padding: 0px 4px; text-align: right;">0</td> 
          </tr>
</table>

<div class="box01_col">        
        
       		<ul class="col01">
       			<li><img alt="" src="/img/ret/bullet1.gif"/> <a class="tipod" href="">Ultimo estratto conto</a></li>
        		<li><img alt="" src="/img/ret/bullet1.gif"/> <a class="tipod" href=""> Ultime 10 contabili - 2009</a></li>
        		<li><img alt="" src="/img/ret/bullet1.gif"/> <a class="tipod" href="">Tutti i documenti non letti - 2009</a></li>
        		<li><img alt="" src="/img/ret/bullet1.gif"/> <a class="tipod" href="">Tutte le contabili del mese mcorrente</a></li>        		                
        	</ul>
      	</div>

	<br class="clear" />


<div class="ricerca"><br/>
<img title="Ricerca avanzata" alt="Ricerca avanzata" src="/img/ret/ricerca_avanzata.gif"></div>


<!-- FORM DI RICERCA-->
<div class="tithelp">
	<div class="helpleft">Inserisci i parametri di ricerca (sono esclusi i conti estinti)</div>
	<div align="right" class="BvTableHeaderHelp">    
	<a title="help" href="#"><img src="/img/ret/help.gif"></a> 
	<a title="help" href="#">help </a>	
	</div>
<br class="clear"></div>

<table width="100%" border="0" class="form01">
		<tr>
			<td>Rapporto</td>
			<td colspan="3">
			<select class="tipoc" onchange="fixStar(this);" size="1" name="numeroRapporto">			
 				<option class="staroff%00599 - 0000081500 - EUR!00599 - 0000081500 - EUR" value="0599-00000000081500">C/C 00599 - 0000081500 - EUR</option>				
				<option disabled="disabled" value="---">---</option>
				<option class="nostar" value="Solo conti correnti">Solo conti correnti</option>
				<option class="nostar" value="Tutti">Tutti</option>
			</select>
			</td>
		</tr>
		<tr>
			<td width="100" class="tipoc">Categoria documenti</td>
			<td width="140">
			<select onchange="javascript:caricaTipiDoc(selectedIndex)" id="list1" class="tipoc" size="1" name="categoria">				
				<option value="ESTRATTI C/C">Estratti Conto Corrente</option>
				<option value="">Tutti</option>
			</select></td>	
			<td width="80" id="cellaTipo" style="display: none;">Tipo documento</td>	
			<td></td>
		</tr>		
		<tr>
			<td class="tipoc">Stato</td>
			<td colspan="3"><select class="tipoc" size="1" name="statoDocumenti">
				<option value="">-- seleziona --</option>
				<option value="L">Letto</option>
				<option value="N">Non
				letto</option>
				<option value="T">Tutti</option>
			</select></td>
			<input type="hidden" value="" name="cartella">
		</tr>
		<tr>
			<td>Periodo</td>
			<td colspan="3">anno: <select class="tipoc" size="1" name="anno">
				<option selected="" value="2010">2010</option>				
			</select> &nbsp;mese: da&nbsp; 
			<select class="tipoc" size="1">
				<option selected="" value="">-- seleziona --</option>				
				<option value="01">Gennaio</option>				
			</select> &nbsp;mese: a&nbsp; 
			<select class="tipoc" size="1">
				<option selected="" value="">-- seleziona --</option>				
				<option value="01">Gennaio</option>
			</select></td>
		</tr>		
</table>



<div class="fooform">	
	<div class="fooformtop"></div>
	<div class="fooformleftb">
		<div class="text">I parametri indicati negli ultimi due campi editabili sono applicabili<br />ai documenti prodotti dopo il 23/7/2008.</div>	
	</div>
	<div class="fooformrightb">
		<div><a href="#1" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>ricerca</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
	<br class="clear" />
	</div>	
<br class="clear" />
</div>
<?php 
virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_30.php");
?>