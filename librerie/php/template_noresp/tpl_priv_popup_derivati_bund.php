<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LIBRERIE BPM &raquo; Template pagina &raquo; Popup privata</title>
 	<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
	<link href="/wscmn/css/popup_gen.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php virtual ("/librerie/include/commons/navigazione/nav_wb_priv_009.html"); ?>
<div id="contenuti">
<div class="popupcontent">
		
		<div id="contcont">


<h3 class="verde">Sottotitolo pagina</h3><br />

<div class="borderFormRounded">
	<div class="formGeneric">
		
		<form>
			<!--RIGA DIVISA IN DUE CAMPI -->
			<div class="row-fluid">
				<div class="span6">
						<label class="nomefield">Strumento</label>
						<span class="output">Option Bund 06/12 CALL 140</span>
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span4">
							<label class="nomefield">Mercato</label>
							<span class="output">Eurex</span>
						</div>
						<div class="span8">
							<label class="nomefield">Quantità in portafoglio</label>
							<span class="output">2</span>
						</div>
					</div>		
				</div>
			</div>
			
				
		</form>
	
 </div>
</div><br class="clear" /><br />
<table cellspacing="0" cellpadding="0" class="form01">
	<tbody>
	<tr>
		<td id="labelQuantita" class="uno label">Quantit&agrave; da esercitare*</td>
		<td><input class="piccolo" type="text" name="" id="" value="" maxlength="3">
			<img class="frecce" src="/img/ret/frecce.gif" usemap="#map1">
			<map id="map1" name="map1">
				<area shape="rect" coords="0,0,9,5" href="#" alt="Aumenta di..." title="Aumenta di...">
				<area shape="rect" coords="0,9,9,14" href="#" alt="Diminuisci di 1000" title="Diminuisci di 1000">
			</map>
		</td>
		<td>
			<div class="alright"><div class="nobor3"><a href="#1" class="btnevid1" title="Conferma"><img src="/img/ret/btn_left_sm1.gif" alt=""><span>conferma</span><img src="/img/ret/btn_right_sm1.gif" alt=""></a></div></div>
		</td>
		
	</tr>	
	</tbody>
</table>

</div>
</div>
</body>
</html>
