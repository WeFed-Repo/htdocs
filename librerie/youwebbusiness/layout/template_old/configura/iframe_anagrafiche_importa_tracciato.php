<!DOCTYPE html>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head></head>
<body>

<script language="javascript">
				var progress_message = new Array;
				progress_message[0] = 'Attendere prego...'
				progress_message[1] = 'Upload distinta.'
				progress_message[2] = 'Controllo CC.'
				progress_message[3] = 'Controllo validità.'				
				progress_message[4] = 'Importazione distinta.'				
			</script>
<div id="progressbar" style="position: absolute; visibility: hidden; padding: 5px; text-align: center; width: 500px; height: 250px; bottom: 228px; left: 414px;">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" class="sfondoTabelle" style="border: 1px;">
<tbody><tr>
<td class="titoloTabella old-pageTitle" id="messaggio"><div class="new-flag"></div><h1>Importazione distinta in corso, attendere prego...<a href="#" onclick="popHelp('./html/help/Anagrafica/ImportaAnagraficheCSV.htm','NewWin1','toolbar=no,scrollbars=yes,status=no,width=534,height=240' ,534, 240);" class="old-pageHelp"><img src="./newstyle/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
</tr>
<tr align="center">
<td align="center" class="rigaScura">
<table align="center" border="0" style="margin-top: 0px; margin-bottom: 0px;">
<tbody><tr>
<td class="rigaScura"><img id="pb_img1" name="pb_img1" src="img/semaforogrigio.gif"></td><td class="rigaScura">Upload distinta.</td>
</tr>
<tr>
<td class="rigaScura"><img id="pb_img4" name="pb_img4" src="img/semaforogrigio.gif"></td><td class="rigaScura">Importazione distinta.</td>
</tr>
<tr>
<td class="rigaScura" colspan="2">
<div class="rigaScura" id="barra"><table class="rigaScura" align="center" style="text-weight: bold; border: 1px solid #003365" cellspacing="0" cellpadding="0"><tbody><tr><td id="progress_0" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_1" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_2" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_3" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_4" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_5" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_6" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_7" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_8" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_9" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_10" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_11" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_12" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_13" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_14" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_15" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_16" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_17" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_18" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_19" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_20" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_21" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_22" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_23" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_24" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_25" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_26" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_27" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_28" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_29" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_30" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_31" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_32" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_33" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_34" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_35" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_36" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_37" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_38" width="10" height="15" bgcolor="#F7921E"></td><td id="progress_39" width="10" height="15" bgcolor="#F7921E"></td></tr></tbody></table></div>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</div><div class="new-buttons"></div>
</div>
</div>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden; z-index: 10;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden; z-index: 10;"></div>
<div id="main-div">
<div class="container" style="padding: 0px 15px;">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" width="100%">
<form enctype="multipart/form-data" action="uploadanagraficayoubizcsv" method="POST" name="setfilter" onsubmit="return controlla(this);"></form>
<input name="tipo_anagrafica" type="hidden" value="csv">
<tbody><tr>
<td>
<div align="center" id="wait" style="visibility:hidden; position: absolute;top:50">
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
<tbody><tr>
<td valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td align="center"><object align="" height="290" width="390" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="./flash/swflash5r42.cab#version=5,0,0,0" id="attesa"><param name="movie" value="./flash/attesa.swf"><param name="menu" value="false"><param name="quality" value="high"><param name="wmode" value="transparent">
<embed align="" height="300" name="attesa" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="480" loop="false" menu="false" quality="high" src="./flash/attesa.swf">
</object><input name="wait" type="hidden" value=""></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</div>
<div class="old-pageContent new-riquadro" id="main">
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
<tbody><tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" height="100%" width="100%">
<tbody><tr>
<td>
<table align="center" border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody>
</tbody></table>
</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="1" cellspacing="0" class="sfondoTabelle">
<tbody><tr>
<td>
<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr>
<td align="left" class="titoloTabella old-pageTitle" colspan="2"><div class="new-flag"></div><h1>
																						Importazione Tracciato CSV - Excel
																					</h1></td>
</tr>
<script>
			
				initializeContextSelectorLibrary(parent.context);
			
		</script>
<tr class="rigaScura">
<td align="left" class="testoBlackSmall col-1" height="20" width="22%" style="width: 15%; text-align: left;">
				Rag. Soc./Intestatario:
				<span class="testoRedSmallBold">*</span></td><td class="col-2" width="78%" style="width: 50%;"><input name="codice_sia" type="hidden" value="AYRLG"><select name="intestatario" onchange="document.setfilter.codice_sia.value = fitToLength(getSiaCode(this, ''),0,5);" style="width:300" class="new-form-control"><option value=""></option><option value="12">CONSORZIO P.R.U. STADIO CONE..</option><option value="318683">GE.CO.VE. IMMOBILIARE S.R.L.</option><option value="10">GE.CO.VE. SRL</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="8">QUERCIA SRL</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option><option value="49308">SARTI ANTONIO</option></select><script>
					fillIntestatari(createParameterObject(), "", "", NO_ALL, NO_ALL, document.setfilter.intestatario, true, true);
					document.setfilter.codice_sia.value = fitToLength(getSiaCode(document.setfilter.intestatario, ''),0,5);
				</script></td><td class="col-3" style="width: 12%; text-align: left;"></td><td class="col-4-pe" style="width: 33%; text-align: left;"></td>
</tr>
<tr>
<td align="left" class="rigaScura col-1" height="20" width="22%" style="width: 15%; text-align: left;">
																						File
																						<span class="testoRedSmallBold">*</span></td><td class="rigaScura col-2" style="width: 50%;"><input type="file" size="95" name="extfile" value="seleziona..." class="testoBlackSmall"></td><td class="col-3" style="width: 12%; text-align: left;"></td><td class="col-4-pe" style="width: 33%; text-align: left;"></td>
</tr>
<tr align="center">
<td class="col-1" style="width: 15%; text-align: left;"></td><td class="col-2" style="width: 50%;"></td><td class="col-3" style="width: 12%; text-align: left;"></td>
</tr>
<tr class="rigaScura">
<td align="left" class="testoRedSmallBold col-1" colspan="2" style="width: 15%; text-align: left;">
<div class="addSpace"></div>
																						* campi obbligatori
																					</td><td class="col-3" style="width: 12%; text-align: left;"></td><td class="col-4-pe" style="width: 33%; text-align: left;"></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</div><div class="new-buttons"></div>
<div class="new-buttons">
<input type="submit" value="Importa" class="btn" style="cursor:Hand">
</div>
</td>
</tr>

</tbody></table>
</div>
</div>
</body>
</html>