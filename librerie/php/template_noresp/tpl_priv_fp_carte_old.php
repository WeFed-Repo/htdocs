<?php 
	virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_110.html");

	virtual("/librerie/include/commons/titoli/tit_priv_ret_001.php");
?>
<!-- INIZIO CODICE-->
<?php 
	if ($type == "ret") virtual("/librerie/include/commons/tabelle/tab_black_priv_050.html");
	else virtual("/librerie/include/commons/tabelle/tab_black_priv_050_bus.html");
?>
<!-- FINE CODICE-->
<!-- INIZIO CODICE-->
<h2>Lorem ipsum dolor sit</h2>
<div id="selezb">
	<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td>Lorem ipsum dolor sit amet</td>
		<td><select name="select"><option>12345-1234567890123 - EUR - MMMMMMMMMMMM</option><option>12345-1234567890123 - EUR</option></select>
		<a href="#" class="preferito"><img src="img/ico1gr_preferito.gif" alt ="Conto Preferito"/></a>
		</td>
	</tr>
	</table>
</div>
<table cellspacing="0" cellpadding="0" class="tab17 tab17nob">
<tr> 
	<th class="uno sx r1 b3" width="330">Lorem ipsum</th>
	<th class="uno cent b3">Lorem</th>	
	<th class="uno cent b3" colspan="2" width="68">Ipsum</th>				
</tr>         
<tr class="b"> 
	<td class="sx r2 b2">Lorem ipsum</td>
	<td class="b2 cent"><img src="/wscmn/img/ico2inf_ok.gif" alt="Servizio attivo" title="Servizio attivo" /></td>			
	<td class="b2 cent" width="32"><a href="#1" title="Modifica"><img src="/img/ret/ico1gr_modifica.gif" alt="Modifica" /></a></td> 
	<td class="ultimo b3" width="36"><a href="#1" title="Cancella"><img src="/wscmn/img/ico1gr_revoca.gif" alt="Cancella" /></a></td> 
</tr>

<tr class="c"> 
	<td class="sx r2 b2">Lorem ipsum</td>
	<td class="b2 cent"><img src="/wscmn/img/ico2inf_ok.gif" alt="Servizio attivo" title="Servizio attivo" /></td>			
	<td class="b2" width="32"><a href="#1" title="Modifica"><img src="/img/ret/ico1gr_modifica.gif" alt="Modifica" /></a></td> 
	<td class="ultimo b3" width="36"><a href="#1" title="Cancella"><img src="/wscmn/img/ico1gr_revoca.gif" alt="Cancella" /></a></td> 
</tr>
<tr class="b"> 
	<td class="sx r2 b2 lastrow">Lorem ipsum</td>
	<td class="b2 cent lastrow"><div class="btncenter"><a href="#1" class="btnevid2" title="Lorem ipsum"><img src="/img/ret/btn_left_sm2.gif" alt="" /><span>attiva</span><img alt="" src="/img/ret/btn_right_sm2.gif"/></a></div></td>
	<td class="b2 cent lastrow" width="32"><a href="#1" title="Modifica"><img src="/img/ret/ico1gr_modifica.gif" alt="Modifica" /></a></td> 
	<td class="ultimo b3 lastrow" width="36"><a href="#1" title="Cancella"><img src="/wscmn/img/ico1gr_revoca.gif" alt="Cancella" /></a></td>
</tr>
</table>
<!-- FINE CODICE-->
<br />
<table cellspacing="0" cellpadding="0"class="tab50">
	<tr>
		<th colspan="9" class="tit sx">carte prepagate</th>
	</tr>
	<tr class="br">
					<th width="" class="sx first">Carta</th>
					<th width="" class="center">Stato</th>
					<th width="75" class="center">Iban</th>
					<th width="" class="center">Numero</th>
					<th width="" class="center">Scadenza</th>
					<th width="" class="center saldo">Saldo</th>
					<th width="30" class="center">Ricarica</th>
					<th width="30" class="center">Movim. carta</th>
					<th width="30" class="center last">Movim. su C/C</th>
				</tr>
				<tr class="b">
						<td class="sx first">Carta je@ns Mastercard <br /> Int [<strong>Nome Cognome</strong>]</td>
						<td class="center"><img title="Attivo" alt="Attivo" src="/wscmn/img/ico2inf_ok.gif"></td>
						<td class="sx iban" width="75"><span class="noTooltipCont"><span class="noTooltip">***123456</span><span class="imgTooltip"><a href="javascript:;" onclick="openPopOverLayer('layeralert', 'floating', 1)" title="Invia mail"><img alt="Invia mail" src="/img/ret/ico1gr_mail.gif" id="imgInviaCoordinate"></a></span></span><a onclick="openPopOverLayer('layeralert', 'floating', 1)" id="visualizza" title="visualizza dettaglio" href="javascript:;" class="onerow">visualizza</a></td>
						<td class="sx">***123456</td>
						<td class="center">00/00/0000</td>
						<td class="sx">xxx.xxx.xxx</td>
						<td class="center"><img title="Ricarica" alt="Ricarica" src="/img/ret/ico1gr_ricarica.gif"></td>
						<td class="center"><img title="Movimenti carta" alt="Movimenti carta" src="/img/ret/ico1gr_mov-su-cc.gif"></td>
						<td class="center"><img title="Movimenti carta" alt="Movimenti carta" src="/img/ret/ico1gr_mov-su-cc.gif"></td>
						
				</tr>
			</table>
<p>Lorem ipsum dolor sit amet:</p>
<ul class="listafrec">
	<li><a title="#" href="#1">Lorem ipsum dolor sit amet, consectetuer</a></li>
	<li><a title="#" href="#1">Lorem ipsum dolor sit amet, consectetuer</a></li>
</ul>
<?php 
	//virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_060.html");
?>
<br class="clear" /><br /><br />

<!-- ovwelayer carte prepagate-->
<!-- OVERLAYER PIU' RISULTATI-->

<div class="layeralert2" id="layeralert" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert').dragHandle = new Draggable('layeralert',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert')"/></div>
	<div class="body">
		
		<p>Se vuoi farti ricaricare la tua carta con un bonifico, <strong>invia l'Iban via email</strong>. Inserisci gli indirizzi dei destinatari separati da una virgola.</p>
		<br />
		<h2>CARTE PREPAGATE</h2>
			<table cellpadding="0" cellspacing="0" class="pop">
				
				<tr class="pari">
					<td>CARTA</td>
					<td class="posdx">Carta je@ns Mastercard</td>
				</tr>
				<tr class="dispari">
					<td>NUMERO CARTA</td>
					<td class="posdx">0</td>
				</tr>
				<tr class="pari">
					<td>IBAN</td>
					<td class="posdx">XXXXXXXXXXXXXXXXXXXXXX</td>
				</tr>
								
			</table>
				<div class="tithelp">
					<div class="helpleft">Invia coordinate</div>
					<br class="clear">
				</div>
				<br class="clear"/>
					<form action="" name="" id="">
				<table class="form01 formpop">
					<tr> 
						<td width="95" id="" class="uno">Email destinatari</td>
						<td> <input type="text" id="" class="grande" name="" style="width: 250px;"></td>
					</tr>
						<tr> 
						<td width="95px" class="uno">Messaggio</td>
						<td> <textarea class="piccolo" name=""></textarea> </td>
					</tr>
				</table>
				</form>
				<div class="fooform">	
					<div class="fooformrightb">
						<a title="lorem ipsum" class="btnformright" href="#1" onclick="closePopOverLayer('layeralert');openPopOverLayer('layeralert2', 'floating',1);"><img alt="" src="/img/ret/btn_left_ar.gif"><span>invia</span><img alt="" src="/img/ret/btn_right_ar.gif"></a><a title="lorem ipsum" class="btnformright" href="javascript:;" onclick="closePopOverLayer('layeralert')"><img alt="" src="/img/ret/btn_left_ar.gif"><span>annulla</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
					<br class="clear">
					</div>	
				<br class="clear">
				</div>
	</div>
		

	<div class="foot"></div>
</div>
<!-- FINE  OVERLAYER PIU' RISULTATI--->
<!-- OVERLAYER conferma--->
<div class="layeralert2" id="layeralert2" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert2').dragHandle = new Draggable('layeralert2',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert2')"/></div>
	<div class="body">
		 <h3 class="verde">MAIL INVIATA CORRETTAMENTE</h3>
				<div class="fooform">	
					<div class="fooformright">
						<div><a title="lorem ipsum" class="btnformright" href="#1" onclick="closePopOverLayer('layeralert2');"><img alt="" src="/img/ret/btn_left_ar.gif"><span>chiudi</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
					<br class="clear">
					</div>	
				<br class="clear">
				</div>
	</div>
		

	<div class="foot"></div>
</div>
<!-- FINE  OVERLAYER conferma--->
