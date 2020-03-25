<link rel="stylesheet" href="/wscmn/fe/css/delega.css" type="text/css">

<h2>Pagamento</h2>

<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">F24</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_f23_output.php&responsive=y&liv0=1&liv1=1&liv2=7&liv3=0">F23</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">

	<table>
		<tr>
			<td class="nota">I campi marcati con '*' sono obbligatori - <img src="/wscmn/img//campovis.gif"/> Campi di sola visualizzazione - <img src="/wscmn/img//campoerr.gif" alt=""/> Campi in errore</td>
		</tr>
	</table>
			
	<div id="Table1">
	<!-- HEADER DEL MODULO ( grafica profilata per tipo modulo )  -->
		<table>
			<tr>	
					
						<td class="contornoTabellaCompleta"><img src="/wscmn/img/immagineTitolo.jpg" alt="" align="middle"/></td>	
												
			</tr>
		</table>

	<!-- CORPO DEL MODULO ( include delle sezioni specifiche per ogni tipo di delega )  -->
		<form method="post" name="f24MainForm" action="">
			
	<!-- Sezione dati di personalizzazione -->
	  <input id="hdModPag" type="hidden" name="hdModPag" > 
	  <input id="hdBanca" type="hidden" name="hdBanca"> 
	  <input id="hdProf" type="hidden" name="hdProf"> 
	  <input id="hdAccise" type="hidden" name="hdAccise"> 
	  <input id="hdUltimaPagDiRiepilogo" type="hidden" name="hdUltimaPagDiRiepilogo">
	  
	  
	<!-- Sezione dati delega --> 
	  <input type="hidden" id="hdChiave" name="hdChiave" value=""/>
	  <input type="hidden" id="hdStato" name="hdStato" value=""/>

	  <input type="hidden" id="toDetails" name="toDetails" value=""/>
	  <input type="hidden" id="whatBack" name="whatBack" value=""/>

	  <!-- Sezione paginazione ricerca --> 
	  <input type="hidden" name="paginaDestinazione" id="paginaDestinazione" value=""/>
	  <input type="hidden" name="hdOrder" id="hdOrder" value=""/>
	  <input type="hidden" id="from" name="from" value=""/>
			








	<input name="tabId"	type="hidden"	value="nav_priv_wbx_sportello" />
	<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_pagamento_f23_24" />

	<input name="OBSKEY3"	type="hidden"	value="nav_priv_wbx_f24" />

	<input name="OBSCNT"	type="hidden"	value="" />
	<input name="cf"	type="hidden"	value="0.912464752508474" />
	<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
	<input name="siglaAzione"	type="hidden"	value="" />

	 

			
			<input type="hidden" name="id_transazione" id="id_transazione" value="1"/>
			













	<table>
		<tbody>
			<tr>
				<th>CONTRIBUENTE</th>
			</tr>
		</tbody>	
	</table>
	<table class="contribuente">
		<tbody>
		<tr>
			<td class="co01"><span>CODICE FISCALE</span></td>
			<td class="co02"><strong>MMMNNN73A19A205U</strong></td>
			<td class="co03">Barrare in caso di anno d'imposta non coincidente con anno solare</td>	
			
				
				
					<td class="co04" align="center"><input class="ckb" type="checkbox" name="flagAnnoSolare" tabindex="2" onfocus="this.style.backgroundColor=0xFFFFFF;" value="1" /></td>
				
				
			
		</tr>
		<tr>
			<td><span>DATI ANAGRAFICI</span></td>
			<td id="labelC_R">cognome, denominazione o ragione sociale</td>
			<td colspan="2" valign="bottom">nome</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td id="contribuente.cognomeTD" style="display: none;"><strong>Lorem ipsum</strong></td>
			<td id="contribuente.ragSocTD"><strong>Lorem ipsum</strong></td>
			<td colspan="2"><strong>Lorem ipsum</strong></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<table class="datses"><tbody>
					<tr>					
						<td>data di nascita (ggmmaaaa)<br /><strong>00/00/0000</strong></td>
						
						<td>sesso<br /><strong>S</strong></td>
			 		</tr>
			 		</tbody>
			 	</table>
			 </td> 
			<td>comune (o Stato estero) di nascita<br /><strong>Lorem ipsum</strong></td>
			<td>provincia<br><strong>MI</strong></td>
		</tr>				
		<tr>
			<td><span>DOMICILIO FISCALE</span></td>
			<td>Comune*<br /><strong>Lorem ipsum</strong></td>
			<td colspan="2">
			<table class="provia">
				<tr>					
					<td>prov*<br><strong>MI</strong></td>
			<td>via e numero civico*<br /><strong>Lorem ipsum</strong></td>
			</tr></table>
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<table>					
					<tr>
						<td><span>CODICE FISCALE del coobbligato, erede, genitore, tutore o curatore fallimentare</span></td>
						<td><strong>Lorem ipsum</strong></td>
						<td>codice identificativo</td>
						<td><strong>00</strong></td>
					</tr>				
				</table>
			</td>
		</tr>	
		</tbody>						
	</table>

			









	<table>		
		<tr>
			<th>DATI TITOLARE CONTO</th>
		</tr>
	</table>
	<table>
		<tr>
			<td colspan="4">codice fiscale*<br /><strong>MMMNNN73A19A205U</strong></td>
		</tr>
		<tr>
			<td>comune*<br /><strong>Lorem ipsum</strong></td>
			<td>prov<br /><strong>MI</strong></td>
			<td>via e numero civico*<br /><strong>Lorem ipsum</strong></td>
			<td>cap*<br /><strong>00000</strong></td>
		</tr>
	</table>

		
		
				









	<table>		
		<tr>
			<th>SEZIONE ERARIO:<span> Imposte Dirette - IVA  - Ritenute alla Fonte -  Altri Tributi ed Interessi</span></th>
		</tr>
	</table>
	<table id="erario_hidden" style="display: none;" >		
		<tr >
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table id="TableErario" class="erario">
		<tr>
			<td class="er01">codice tributo</td>
			<td class="er01b">rateazione<br />regione/prov.</td></td>
			<td class="er01">anno<br />(aaaa)</td>
			<td class="er02">importi a debito<br />versati</td>
			<td class="er03">importi a credito<br>compensati</td>
			<td class="er04" rowspan="7">&nbsp;</td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td class="alright" colspan="3"><br />Totale</td>
			<td><div class="lettera">A</div><strong>00</strong>,<strong>00</strong></td>
			<td><div class="lettera">B</div><strong>00</strong>,<strong>00</strong></td>			
			<td class="saldo"><span class="lettera">Saldo A-B</span><br><strong>00</strong>,<strong>00</strong></td>		
		</tr>				
		<tr>
			<td class="alleft">codice ufficio<br /><strong>0000</strong></td>  
			<td class="alleft" colspan="5">codice atto<br /><strong>0000</strong></td>
		
		</tr>
	</table>


				









	<table>		
		<tr>
			<th>SEZIONE INPS</th>
		</tr>
	</table>
	<table id="inps_hidden" style="display: none;" >		
		<tr >
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table class="inps" id="TableInps">
		<tr>
			<td class="in01" rowspan="2">codice sede</td>
			<td class="in02" rowspan="2">causale contributo</td>
			<td class="in03" rowspan="2">matricola INPS/ codice INPS/ filiale azienda</td>
			<td colspan="2">periodo di riferim.:</td>
			<td class="er02" rowspan="2">importi a debito<br />versati</td>
			<td class="er03" rowspan="2">importi a credito<br />compensati</td>
			<td class="er04" rowspan="6">&nbsp;</td>
		</tr>
		<tr>
			<td>da<br />(mmaaaa)</td>
			<td>a<br />(mmaaaa)</td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td class="alright" colspan="5"><br />Totale</td>
			<td><div class="lettera">C</div><strong>00</strong>,<strong>00</strong></td>
			<td><div class="lettera">D</div><strong>00</strong>,<strong>00</strong></td>
			<td class="saldo"><span class="lettera">Saldo C-D</span><br><strong>00</strong>,<strong>00</strong></td>
		</tr>
	</table>


				









	<table>		
		<tr>
			<th>SEZIONE REGIONI</th>
		</tr>
	</table>
	<table id="regioni_hidden" style="display: none;" >		
		<tr >
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table class="regioni" id="TableRegioni">
		<tr>
			<td class="re01">codice<br />regione</td>
			<td class="re02">codice tributo</td>
			<td class="re01">rateazione</td>
			<td class="re03">anno<br />(aaaa)</td>
			<td class="er02">importi a debito<br />versati</td>
			<td class="er03">importi a credito<br />compensati</td>
			<td class="er04" rowspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td class="alright" colspan="4"><br />Totale</td>
			<td><div class="lettera">E</div><strong>00</strong>,<strong>00</strong></td>
			<td><div class="lettera">F</div><strong>00</strong>,<strong>00</strong></td>
			<td class="saldo"><span class="lettera">Saldo E-F</span><br><strong>00</strong>,<strong>00</strong></td>
		</tr>
	</table>

				













	<table>	
		<tbody>
			<tr>
				<th class="imu">SEZIONE IMU ED ALTRI TRIBUTI LOCALI</th>	
				<th class="alright"><span>IDENTIFICATIVO OPERAZIONE</span>
					<strong>123456789012345678</strong>
				</th>
			</tr>
		</tbody>	
	</table>
	<table id="ici_hidden" style="display: none;">		
		<tr>
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table class="ici" id="TableICI">
		<tr>
			<td class="ic01">cod.ente/<br />comune</td>
			<td class="ic02"><span style="font:8px Arial,sans-serif;">Ravv.</span></td>
			<td class="ic03"><span style="font:8px Arial,sans-serif;">immob.<br />variati</span></td>
			<td class="ic04"><span style="font:8px Arial,sans-serif;">Acc.</span></td>
			<td class="ic05"><span style="font:8px Arial,sans-serif;">Saldo</span></td>
			<td class="ic06">num.<br />immob.</td>
			<td class="ic07">codice<br />Tributo</td>
			<td class="ic08">rateaz.</td>
			<td class="ic09">anno<br />(aaaa)</td>
			<td class="er02">importi a debito<br />versati</td>
			<td class="er03">importi a credito<br />compensati</td>
			<td class="er04" rowspan="5">&nbsp;</td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>						
				<td></td>
				<td></td>			
				<td></td>			 	
				<td></td>			 			
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>						
				<td></td>
				<td></td>			
				<td></td>			 	
				<td></td>			 			
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>						
				<td></td>
				<td></td>			
				<td></td>			 	
				<td></td>			 			
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0000</strong></td>						
				<td></td>
				<td></td>			
				<td></td>			 	
				<td></td>			 			
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td class="alright" colspan="9"><br />Totale</td>
			<td><div class="lettera">G</div><strong>00</strong>,<strong>00</strong></td>
			<td><div class="lettera">H</div><strong>00</strong>,<strong>00</strong></td>
			<td class="saldo"><span class="lettera">Saldo G-H</span><br><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td class="alleft" colspan="12">Detrazione<br /><strong>00</strong>,<strong>00</strong></td>
		</tr>
	</table>

				
		
					









	<table>	
		<tr>
			<th>SEZIONE ALTRI ENTI PREVIDENZIALI ED ASSICURATIVI</th>
		</tr>
	</table>

	<table id="altriEnti_hidden" style="display: none;" >		
		<tr >
			<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
		</tr>
	</table>
	<table class="enti" id="TableINAIL">
	<tr>
		<td class="en01" rowspan="4">INAIL</td>
		<td class="en02">codice<br />sede</td>
		<td class="en03">codice ditta<br />numero c.c.</td>
		<td class="en04">numero di<br />riferimento</td>
		<td class="en05">causale</td>
		<td class="er02">importi a debito<br />versati</td>
		<td class="er03">importi a credito<br />compensati</td>
		<td class="er04" rowspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong>&nbsp;<strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong>&nbsp;<strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong>&nbsp;<strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td class="alright" colspan="5"><br /><b>Totale</td>
		<td><div class="lettera">I</div><strong>00</strong>,<strong>00</strong></td>
		<td><div class="lettera">L</div><strong>00</strong>,<strong>00</strong></td>
		<td class="saldo"><span class="lettera">Saldo I-L</span><br><strong>00</strong>,<strong>00</strong></td>
	</tr>		
	</table>
	<table class="enti2" id="TableAltriEnti">
	<tr>
		<td class="en201" rowspan="2">codice<br />ente</td>
		<td class="en202" rowspan="2">codice<br />codice<br/>sede</td>
		<td class="en203" rowspan="2">causale<br/>contributo</td>
		<td class="en204" rowspan="2">codice<br />posizione</td>
		<td colspan="2">da<br />(mmaaaa)</td>			
		<td class="er02" rowspan="2">importi a debito<br />versati</td>
		<td class="er03" rowspan="2">importi a credito<br />compensati</td>
		<td class="er04" rowspan="4">&nbsp;</td>
	</tr>
	<tr>
		<td>da<br />(mmaaaa)</td>
		<td>a<br />(mmaaaa)</td>
	</tr>		
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>				
		<td><strong>00</strong>,<strong>00</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>				
		<td><strong>00</strong>,<strong>00</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td class="alright" colspan="6"><br />Totale</td>
		<td><div class="lettera">M</div><strong>00</strong>,<strong>00</strong></td>
		<td><div class="lettera">N</div><strong>00</strong>,<strong>00</strong></td>
		<td class="saldo"><span class="lettera">Saldo M-N</span><br><strong>00</strong>,<strong>00</strong></td>
	</tr>		
	</table>


		
			

<table>
	<tbody>
		<tr>
			<th class="imu">MOTIVO DEL PAGAMENTO</th>
			<th class="alright">
				<span>IDENTIFICATIVO OPERAZIONE</span>
				<strong>123456789012345678</strong>
			</th>
		</tr>
	</tbody>
</table>
<table id="semplificato_hidden" style="display: none;" >		
	<tr >
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table id="TableSemplificato" class="ici">

	
		<tr>
			<td class="">Sezione</td>
			<td class="">codice<br>Tributo</td>
			<td class="">cod.ente</td>
			<td class=""><span style="font: 8px Arial,sans-serif;">Ravv.</span></td>
			<td class=""><span style="font: 8px Arial,sans-serif;">immob.<br>variati</span></td>
			<td class=""><span style="font: 8px Arial,sans-serif;">Acc.</span></td>
			<td class=""><span style="font: 8px Arial,sans-serif;">Saldo</span></td>
			<td class="">num.<br>immob.</td>
			<td class="">rateaz.</td>
			<td class="">anno<br>(aaaa)</td>
			<td class="">detrazione</td>
			<td class="">importi a debito<br>versati</td>
			<td class="">importi a credito<br>compensati</td>
		</tr>		
		
				
		<tr id="row1">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
				
		<tr id="row2">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
				
		<tr id="row3">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
				
		<tr id="row4">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
				
		<tr id="row5">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
				
		<tr id="row6">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
				
		<tr id="row7">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
				
		<tr id="row8">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
				
		<tr id="row9">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
				
		<tr id="row10">
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>	
			<td><strong>0000</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>
			<td><strong>00</strong>,<strong>00</strong></td>		
		</tr>
	
		
			
		<tr>
			<td class="alleft" colspan="2">codice ufficio<br>
				<strong>0000</strong>
			</td>
			<td class="alleft" colspan="11">codice atto<br>
				<strong>0000</strong>
			</td>
		</tr>			

</table>




<table>	
	<tr>
		<th>SEZIONE ACCISE/MONOPOLI ED ALTRI VERSAMENTI NON AMMESSI IN COMPENSAZIONE</th>
	</tr>
</table>
<table id="accise_hidden" style="display: none;" >		
	<tr >
		<th class="sezioni_hidden">SEZIONE NON COMPILATA</th>
	</tr>
</table>
<table class="accise" id="TableAccise">
	<tr>
		<td class="ac01">ente</td>
		<td class="ac02">prov.</td>
		<td class="ac03">codice<br />tributo</td>
		<td class="ac04">codice<br />identificativo</td>
		<td class="ac05">rateazione</td>
		<td class="ac05">periodo<br />di riferimento<br />(mmaaaa)</td>
		<td class="er02">importi a debito<br />versati</td>
		<td class="er03" rowspan="8">&nbsp;</td>
		<td class="er04" rowspan="8">&nbsp;</td>
	</tr>
	<tr>
		<td><strong>00</strong></td>
		<td><strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td><strong>00</strong></td>
		<td><strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td><strong>00</strong></td>
		<td><strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td><strong>00</strong></td>
		<td><strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td><strong>00</strong></td>
		<td><strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td><strong>00</strong></td>
		<td><strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>
		<td><strong>00</strong></td>
		<td><strong>00</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>0000</strong></td>
		<td><strong>00</strong>,<strong>00</strong></td>
	</tr>
	<tr>		
		<td class="alright" colspan="6"><br />Totale</td>
		<td><div class="lettera">O</div><strong>00</strong>,<strong>00</strong></td>
		<td>&nbsp;</td>
		<td class="saldo"><span class="lettera">Saldo O</span><br><strong>00</strong>,<strong>00</strong></td>
	</tr>
<!-- Campi codice atto e ufficio specifici per accise, NB: devono assolutamente essere alternativi all'utilizzo di quelli dell'erario -->	
	<tr>
		<td class="alleft" colspan="2">codice ufficio<br><strong>0000</strong></td>
		<td class="alleft" colspan="7">codice atto<br><strong>0000</strong></td>
	</tr>
</table>



<table>	
	<tr>
		<th>SEZIONE ERARIO ED ALTRO</th>
	</tr>
</table>
<table id="TableErarioMotori" class="erimm">
		<tr>
			<td class="alleft">codice ufficio<br /><strong>0000</strong></td>
			<td class="alleft" colspan="5">codice atto<br /><strong>0000</strong></td>
		</tr>
		<tr>
			<td class="erimm01">tipo</td>
			<td class="erimm02">elementi identificativi</td>
			<td class="erimm03">codice tributo</td>
			<td class="erimm04">anno di riferimento</td>
			<td class="erimm05">importi a debito<br>versati</td>
		</tr>
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>
			<td><strong>0</strong></td>
			<td><strong>0000000000</strong></td>
			<td><strong>0000</strong></td>
			<td><strong>0000</strong></td>																				   	 
			<td><strong>00</strong>,<strong>00</strong></td>
		</tr>			
		<tr>	
			<td colspan="5">	
				<input name="sezione(immatricolazioni).interiTotaleDebito"  type="hidden" />
				<input name="sezione(immatricolazioni).centTotaleDebito"  type="hidden" />			
				<input name="sezione(immatricolazioni).interiSaldo"  type="hidden" />
				<input name="sezione(immatricolazioni).centSaldo"  type="hidden" />			
			</td>
		</tr>
		<tr>
		<!-- 	<td colspan="5" class="erileft">&nbsp;(*) tipo veicolo: A autoveicolo, M motoveicolo, R rimorchio</td> -->
		</tr>			
	</table>















	<table>
		<tr>
			<th>ESTREMI DEL VERSAMENTO</th>
		</tr>
	</table>
	<table class="f23 f24">
		<tr>
			<td colspan="5">
				<table class="f23sub f24sub">
					<tr>
						<td class="alright">Saldo parziale<br />
							<strong>00</strong>,<strong>00</strong>
						</td>
						<td class="alright">Saldo finale*<br />
							<strong>00</strong>,<strong>00</strong>
						</td>
					</tr>	
				</table>		
			</td>					
		</tr>
		<tr>
			<td>
				Numero conto*<br/>
				<strong>123456789012345678</strong>
			</td>
			<td>
				Abi*<br/>
				<strong>0000</strong>
			</td>
			<td>
				Cab*<br/>
				<strong>0000</strong>
			</td>	
			<td>
				Cin<br />
				<strong>0000</strong>
			</td>						
		
			<td>Data pagamento (ggmmaaaa)<br/>
				<strong>00/00/0000</strong>

				<!--div class="input-group-addon date"><i class="icon icon-calendar"></i ></div-->
			</td>		
		</tr>
		<tr>
			<td colspan="5">Autorizzo addebito su conto corrente codice IBAN IT43N0558401799000000081500</td>
		</tr>
	</table>


			
			
		
				
			<br class="clear" /><br/>
			












	<script type="text/javascript">

		function chcekDateOnSave(){
			
			elementsError = new Array;
		    form = document.forms["f24MainForm"];
		    errMsg = "";
		 
		    //Data delega non vuota
		    if (form["dataIncassoHtml"].value.length != 0) {
			    //Data delega corretta nel formato
			    if (form["dataIncassoHtml"].value.length != 0 && checkDateFormat(form["dataIncassoHtml"].value)) {
			        errMsg += "\nLa data di pagamento inserita non e' nel formato corretto (ggmmaaaa)";
			        elementsError[elementsError.length] = form["dataIncassoHtml"];
			    }
			       //Data delega possibile
			    if (form["dataIncassoHtml"].value.length != 0 && checkDate(form["dataIncassoHtml"].value)) {
			        errMsg += "\nLa data di pagamento inserita non e' possibile";
			        elementsError[elementsError.length] = form["dataIncassoHtml"];
			    }
		    }
		    if (form["contribuente.dataNascitaHtml"].value.length != 0) {
			     //Data nascita corretta nel formato
			    if (form["contribuente.dataNascitaHtml"].value.length != 0 && checkDateFormat(form["contribuente.dataNascitaHtml"].value)) {
			        errMsg += "\nLa data di nascita inserita non e' nel formato corretto (ggmmaaaa)";
			        elementsError[elementsError.length] = form["contribuente.dataNascitaHtml"];
			    }
			     //Data nascita possibile
			    if (form["contribuente.dataNascitaHtml"].value.length != 0 && checkDate(form["contribuente.dataNascitaHtml"].value)) {
			        errMsg += "\nLa data di nascita inserita non e' possibile";
			        elementsError[elementsError.length] = form["contribuente.dataNascitaHtml"];
			    }
		    }
		
		    if (elementsError.length == 0) {
		        return true;
		    } else {
		        for (var i = 0; i < elementsError.length; i++) {
		            elementsError[i].style.backgroundColor = colorErr;
		        }
		    }
		    alert(errMsg);
		    els = document.getElementsByTagName("a");
		    return false;
		}
		
		
	//	controllo solo per delega accise: evita la valorizzazione simultanea dei codici atto e ufficio per le sezioni erario e accise.
	//	Questo può accadere con IE8 e superiori, navigando con i tasti back e forward del browser
		function checkAlternativeCod()	{
		    form = document.forms["f24MainForm"];
		    errMsg = "";
		
			
			
			return true;
		}

	//	funzione prosegui allo step successivo da modPag = ins
		function goNext(){
			if(checkModulo()){
				if(checkCodFiscale()){
					block_a();
					document.getElementById('hdModPag').value = 'ins2'; 
					document.getElementById('hdChiave').value = decodeTag('');
					document.f24MainForm.action = '/webankpri/wbOnetoone/3l/do/banking/F24WEB/proseguiStep2.do';
					document.f24MainForm.submit();
				}
			}
		}
		// modpagina ins
	</script>


	<section>
	    <div class="form-group btnWrapper">
	        <div class="stepBtn">Step 2  di 2</div>
	        <div class="btn-align-left">
				<a type="button" class="btn btn-default" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_f24.php&responsive=y&liv0=1&liv1=1&liv2=7&liv3=0">indietro</a>
			</div>
	        <div class="btn-align-right">
	            <a type="button" class="btn btn-primary" id="btnInvio" href="#">prosegui</a>
	        </div>
	        <div class="clear"></div>
	    </div>

	</section>





			





















	<script type="text/javascript">	
		var showOverlay = false;

		function openOverlay(){
			if(showOverlay){
				openPopOverLayer('contoTerziOverlay','floated', 1);
			} 
		}
	</script>

	<div class="layeralert3" id="contoTerziOverlay" style="display: none;">
		<div class="roundedCornersSmall paddMedium">
			<div class="boxesito attenzione">
				<div class="middle">
					<span class="imgCont"></span>
					<div class="text">
						
							<!-- WEBANK TESTI CAMBIATI-->
							<div class="row-fluid">
								<div class="span12">
									Ai sensi del provvedimento di Banca d'Italia entrato in vigore il 1/1/2014, 
									in caso di <strong>operazioni</strong> di importo <strong>pari o superiore a 5.000 &euro;</strong>
									effettuate per conto di una persona diversa dal titolare effettivo 
									del conto corrente sei  tenuto a fornirci tutte le informazioni necessarie 
									all'<strong>identificazione</strong> della persona per la quale stai disponendo l'operazione.
								</div>
							</div>				
							
								<div class="row-fluid">
									<div class="span12">
										Una volta inserita la disposizione ti sar&agrave; chiesto di scaricare e 
										<strong>compilare</strong> il modulo <strong>"Identificazione del titolare effettivo occasionale"</strong> 
										che dovrai poi spedirci via email o fax.<br><br>
										Se <strong>non</strong> dovessimo <strong>ricevere il modulo, l'operazione</strong> s'intender&agrave; effettuata <strong>a tuo nome</strong>. 
									</div>
								</div>
							
										
						<br>
						<div class="row-fluid">
							<div class="span12">
								<div class="aButtonconsLeft">
									<span class="btnc"><a href="javascript:submit('backStep1.do');" class="aButtonClear"><span>indietro</span></a></span>
								</div>
								<div class="aButtonconsRight">
									<span class="btnc"><a id="demoSetErrorBtn" href="javascript:closePopOverLayer('contoTerziOverlay');" class="aButton"><span>prosegui</span></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br class="clear">
	</div>

	<script type="text/javascript">
	$(document).ready(function() {
		openOverlay();
	});
	</script>
		
		</form>
	</div>


				


		<script type="text/javascript"> 
			setFormOnChange_CF_PIVA(true); 
		</script>	


		
	<script type="text/javascript">
		
		var modPag = 'ins'; 
		var banca = 'WEB';
		var prof = 'ute';
		var accise = 'no';
		var ultimaPR = '';
		var immatricolazioni = 'false';
		
		
		
		document.getElementById('hdModPag').value = modPag;
		document.getElementById('hdBanca').value = banca;
		document.getElementById('hdProf').value = prof;
		document.getElementById('hdAccise').value = accise;	
		document.getElementById('hdUltimaPagDiRiepilogo').value = ultimaPR;		 

		<!-- Dichiarare tutte le variabili di modello per poter utilizzare gli script common di calcoliF24.js	 -->
		var sempli = 'false';
		
		if (document.getElementById('hdModPag').value == 'ins2' || 
			document.getElementById('hdModPag').value == 'vis' || 
			document.getElementById('hdModPag').value == 'pre'|| 
			document.getElementById('hdModPag').value == 'pag')		{ 	

			disabilitaTutto();
	//	nascondi calendario
			$("#f1-0-1").datepicker({buttonImage: "none"});
		}else{
			start();	// controlla i campi importo: mette spazio se importo = 0,00
		}

		//	controlli da eseguire onload su visualizzazione modulo (se delega per modulo accise)
		
				

			
		//	versione onload del "makeRedField" specifico per campo cod. fiscale se incoerente con dati anagrafici del contribuente
		//	NB: il test per rilevare la casistica è strettamente legato al messaggio d'errore gestito dalla classe: CoreMakeDelegaBodyAction
			
			

	</script>


		</div>

	</div><!--fine div contenuti -->
								
						</div>
						<!-- FINE WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
					</div>
				</div>
			</div>
			<!-- /CONTENT -->
</div>
</div>			


<script type="text/javascript">
$("#f1-0-1").mask("99/99/9999");
	$("#f1-0-1").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper1').modal('hide');
    }
    });
   appendDatePickerIcon('f1-0-1');
 </script> 