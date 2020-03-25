<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<title>inLineaNet - Cos'&egrave; inLineaNet</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />
	<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="script" http-equiv="Content-Style-Type" content="text/css" />
	<meta name="description" content="inLineaNet: l'Internet Banking per le aziende" />
	<meta name="keywords" content="" />
	<meta name="distribution" content="Global" />
	<meta name="robots" content="all"  />
	<link href="/INLINEANET/iln/css/commonpr.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="/wscmn/INLINEANET/iln/js/utilities.js"></script>
	<!--CSS PER NUOVO LAYOUT BPM -->
	<?php
		if ($bank=="bpm")
	{
	?>
		<link href="/css/priv_new_layout.css" rel="stylesheet" type="text/css"  media="all"/>
		<link href="/css/font-awesome.min.css" rel="stylesheet">
		<!--[if IE 7]>
		<link rel="stylesheet" href="/css/font-awesome-ie7.min.css">
		<![endif]-->
		<?php } ?>
</head>
<body>
<div id="page">
	
	<div id="headercontainerFlat">
	<img src="/img/logo_print_new.gif" class="printlogoNew" alt=""/>
	<a href="#"><img src="/img/logo_bpm_flat2.png"  class="logo" alt="Banca Popolare di Milano"/></a>
	<div class="headerFloat">
		<ul class="headerRightTop">
			<li class="tipoConto">
				<span>Basic</span>
			</li>
			<li>
				<a href="#"><span><i class="icon-phone"></i>Help Center</span></a>
			</li>
			<li>
				<a href="#"><span><i class="icon-sitemap"></i>Mappa</span></a>
			</li>
			<li>
				<a href="#"><span><i class="icon-envelope"></i>Contatti</span></a>
			</li>
			<li class="btnEsci"><a class="buttonFlat" onclick=""><span><i class="icon-off"></i>Esci</span></a></li>
		</ul>
		<br class="clear" />
		<ul class="headerRightBottom">
			<li id="help"><a class="buttonFlat" onclick=""><span><i class="icon-phone"></i>Help</span></a></li>
		</ul>
	</div>
	</div>
	
	
	
	<div id="ctnmenulevel1" class="basic">
		<a href="#"><img src="/INLINEANET/iln/img/tab_corporatehome.gif" title="Vai alla Corporate home" alt="Vai alla Corporate home" /></a><br />
		<div class="nomenu"></div>
	</div>
	<div id="content">		
		<div id="colsx">
			<ul id="menulevel2">
				<li class="tit">Titoletto</li>
				<li><a href="javascript:mmenu('submenu-0');" id="submenu-0link">Lorem ipsum dolor sit</a>
					<ul class="menulevel3" id="submenu-0">
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
					</ul>
				</li>
				<li><a href="javascript:mmenu('submenu-1');" id="submenu-1link">Lorem ipsum dolor sit</a>
					<ul class="menulevel3" id="submenu-1">
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
					</ul>
				</li>
				<li class="tit">Titoletto</li>
				<li><a href="javascript:mmenu('submenu-2')" id="submenu-2link">Lorem ipsum dolor sit</a>
					<ul class="menulevel3" id="submenu-2">
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
					</ul>
				</li>
				<li class="tit">Titoletto</li>
				<li><a href="javascript:mmenu('submenu-3')" id="submenu-3link">Lorem ipsum dolor sit</a>
					<ul class="menulevel3" id="submenu-3">
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
						<li><a href="#">Lorem ipsum</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div id="mainch">
			<div id="top">
				<div id="welcome">La tua email: <b>mario.rossi@mail.it</b></div>
				<div id="lastlogin">Ultimo accesso &gt; <b>04/09/2006</b></div>
			</div>
			<div class="ctntop">
				<!-- LAYERINO -->
				<div id="newcol">
					<a href="#1" onclick="closeAlert('newcol');" class="close"><img src="/INLINEANET/iln/img/btn_popup_chiudi.gif" alt="Chiudi" title="Chiudi" class="chiudi" /></a> 
					<div class="contcol">
						<p style="line-height:14px"><b>Hai a disposizione i nuovi documenti sotto elencati:</b></p>
					</div>
					<br class="clear">
					<div class="newcolw">
						<div class="newcolh">
							<ul>
								<li>00000-0000061941-EUR - <a href="#1"><b>Estratto conto corrente</b></a>, <a href="#1"><b>Estratto deposito titoli</b></a>, <a href="#1"><b>Lorem ipsum</b></a><br><br></li>
								<li>00000-0000012345-EUR - <a href="#1"><b>Estratto deposito titoli</b></a><br><br></li>
								<li>00000-0000012345-EUR - <a href="#1"><b>Estratto deposito titoli</b></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- FINE LAYERINO -->
				
			<div class="colsxinprova">
						
				<div class="dx" id="boxcontosmall">
	
	<form name="selectForm" action="">
			<select onchange="loadXMLDoc();" id="selectBal" name="selectBal">
			
				<option value="0">00206 - 0000098926 - EUR</option>
			
				<option selected="" value="1">01032 - 0000038926 - EUR</option>
			
				<option value="2">Nascondi dati</option>
			
		</select>
	</form>

						<table cellspacing="0" cellpadding="0" border="0" id="boxsaldo">
							<tr><td class="valuta">Saldo contabile</td></tr>
							<tr><td class="importopad bor"><b>1.000.000,00 &euro;</b></td></tr>
							<tr><td class="valuta bor">Saldo disponibile &euro;</td></tr>
							<tr><td class="importopad"><b>1.000.000,00 &euro;</b></td></tr>
						</table>

					<br>
				
					<a href="https://www.bpmbanking.it/imprpri/wbOnetoone/2l/do/banking/WsCoordinate.do?cf=0.25959738242374486&amp;tabId=nav_priv_iln_situaz_az&amp;OBS_KEY=nav_priv_iln_coordinate_bancarie&amp;OBS_KEY3=nav_priv_iln_coordinate_bancarie&amp;contoNum=01032 - 0000038926 - EUR" id="ajaxCoordinateBancarie"><img class="btn" title="Coordinate bancarie" alt="Coordinate bancarie" src="/INLINEANET/iln/img/btn_coordinate.gif"></a><br><br><br>	

					<a href="https://www.bpmbanking.it/imprpri/wbOnetoone/nvt/do/banking/WsSearchMovements.do?cf=0.6473880362499503&amp;tabId=nav_priv_iln_situaz_az&amp;OBS_KEY=nav_priv_iln_inter_conto_BPM&amp;OBS_KEY3=nav_priv_iln_movimenti_oggi&amp;categRicerca=ultimoMese&amp;contonum=01032 - 0000038926 - EUR" id="ajaxMovimentiUltimoMese"><img class="btn" title="Movimenti mese in corso" alt="Movimenti mese in corso" src="/INLINEANET/iln/img/btn_movimenti_mese.gif"></a><br>

				</div>	
				</div>
				<div class="coldxinprova">
					<div id="ctnboxmessaggismall">
						<img src="/INLINEANET/iln/img/tit_boxmessaggi.gif" alt="Messaggi per l'azienda" title="Messaggi per l'azienda" /><br />
						<table border="0" cellpadding="0" cellspacing="0" id="boxmessaggiwide">
							<tr>
								<td class="ico"><img src="/INLINEANET/iln/img/ico_msg_comm.gif" alt="" /></td>
								<td class="text"><a href="#1"><b>Lorem ipsum dolor sit amet</b>, consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer</a></td>
								<td class="data">12/10/06</td>
							</tr>
							<tr>
								<td></td>
								<td colspan="2" class="btn"><a href="#1"><img src="/INLINEANET/iln/img/btn_altri_messaggi.gif" alt="Altri messaggi" title="Altri messaggi" /></a></td>
							</tr>
						</table>
					</div>
					
				</div>					
			</div>
		<div class="ctnbottom">
			<!-- TIPO CONTENITORE PRINCIPALE 1 -->
			<div class="ctnbottom_heading">
				<img src="/INLINEANET/iln/img/tt_estratto_conto_contabile.gif" alt="Estratto conto contabile" title="Estratto conto contabile" />
			</div>		
			<div class="ctnbottom_content">
			   <div class="ctnbottom_contentsx">
				<table>
			   	<tr class="heading">
			   		<td>Documenti 2009</td>
					<td colspan="2"><a href="javascript:;" onclick="openAlert('newcol');" class="new"><img title="Nuovo estratto conto" alt="Nuovo estratto conto" src="/INLINEANET/iln/img/col_new.gif"/></a></td>
				</tr>
				<tr>
					<th width="130" >Tipo documenti</th>
					<th width="65" class="right">Tutti i doc.</th>
					<th class="right">Doc. non letti</th>
				</tr>
				<tr>
					<td width="130px">Estratti conto/deposito</td>
					<td width="65px" class="right"><a href="#">0</a></td>
					<td class="right"><a href="#">00,00</a></td>
				</tr>
				<tr>
					<td width="130px">Contabili</td>
					<td class="right"><a href="#">00,00</a></td>
					<td class="right"><a href="#">00,00</a></td>
				</tr>
				<tr>
					<td width="130px">Documento di sintesi</td>
					<td class="right"><a href="#">00,00</a></td>
					<td class="right"><a href="#">00,00</a></td>
				</tr>
	
			   </table>
			   </div>
			   <div class="ctnbottom_contentdx">
					<ul>
						<li><a href="#">Ultimo estratto conto</a></li>
						<li><a href="#">Ultime 10 contabili - 2009</a></li>
						<li><a href="#">Tutti i documenti non letti - 2009</a></li>
						<li><a href="#">Tutte le contabili del mese corrente</a></li>
					</ul>
			  		<div class="button_archivio">
			  			<a href="#"><img src="/INLINEANET/iln/img/btn_archivio_ricerca.gif" alt="Ricerca l'archivio" title="Ricerca l'archivio" /></a>
			  		</div>
			   	</div>		
		   </div>
		   <!-- FINE TIPO CONTENITORE PRINCIPALE 1 -->
		   
		   <!-- TIPO CONTENITORE PRINCIPALE 2 -->
			<div class="ctnbottom_heading">
				<img src="/INLINEANET/iln/img/tt_estratto_conto_contabile.gif" alt="Estratto conto contabile" title="Estratto conto contabile" />
			</div>		
			<div class="estratto_box">
				<div class="estratto_box_body">
					<p>Lorem ipsum dolor sit amet. Consectetur adipiscing elit. Lorem <strong>ipsum dolor</strong> sit amet. Consectetur adipiscing elit. Lorem ipsum dolor sit amet. Consectetur adipiscing elit. Lorem <strong>ipsum</strong> dolor sit amet. Consectetur adipiscing elit. Lorem ipsum dolor sit amet. Consectetur adipiscing elit. Lorem ipsum dolor sit amet. Consectetur adipiscing elit. </p>
					<a href="#" class="button_attiva" title="Attiva il servizio"><img src="/INLINEANET/iln/img/ico1bt_attiva.gif"></a>
					<br class="clear">
				</div>   
				<div class="estratto_box_bottom"></div>
		   	</div>
		   <!-- FINE TIPO CONTENITORE PRINCIPALE 2 -->
		   	
		<br class="clear">
		<a href="#" title="Confronta le versioni" class="fpbanner"><img src="/INLINEANET/iln/img/ban_basic_ch.jpg"></a>
		</div>
			
		</div>
	</div>
</div>
 <!-- INIZIO CODICE--> 
<?php virtual ("/librerie/include/commons/footer/foot_priv_001.html"); ?>
<!-- FINE CODICE-->
</body>
</html>
