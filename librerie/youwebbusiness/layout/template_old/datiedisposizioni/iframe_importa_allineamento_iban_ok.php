<html><head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>dialog-parser-message-html</title><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/bootstrap.min.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/header-default.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/byWeb2014.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/essentials.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/byWeb-Business.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/alten.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/common.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/forms.css?v=1&amp;vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/layout.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/main.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/menu.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/stile.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/style.css?v=2&amp;vtm=10"><link rel="STYLESHEET" type="text/css" href="newstyle/css/css-new/jquery-ui.1.11.4.css?vtm=10"><link rel="STYLESHEET" type="text/css" href="fe/css/youbusinessweb_restyling_vr2.css">
<link href="newstyle/css/css-new/bootstrap.min.css" rel="STYLESHEET" type="text/css">
<link href="newstyle/css/css-new/byWeb2014.css" rel="STYLESHEET" type="text/css">
<link href="newstyle/css/css-new/byWeb-Business.css" rel="STYLESHEET" type="text/css">
<link href="newstyle/css/css-new/common.css" rel="STYLESHEET" type="text/css">
<link href="newstyle/css/css-new/layout.css" rel="STYLESHEET" type="text/css">
<link href="newstyle/css/css-new/menu.css" rel="STYLESHEET" type="text/css">
<link href="newstyle/css/css-new/style.css" rel="STYLESHEET" type="text/css">
<script type="text/javascript" src="newstyle/js/jquery-1.9.1.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/jquery-ui.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/transactionMonitor/json2.js?vrsn=2?vtm=10"></script><script type="text/javascript" src="newstyle/js/alten.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/respond.min.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/tab.js?vtm=10"></script><script type="text/javascript" src="newstyle/js/calendarTM.js?vtm=10"></script><script src="newstyle/js/jquery-1.9.1.min.js" type="text/javascript"></script><script src="newstyle/newstyle/js/jquery-ui.min.js?vtm=10" type="text/javascript"></script><script src="newstyle/newstyle/js/alten.js?vtm=10" type="text/javascript"></script><script src="newstyle/newstyle/js/respond.min.js?vtm=10" type="text/javascript"></script><script src="newstyle/newstyle/js/tab.js?vtm=10" type="text/javascript"></script><script>
						$(function(){
							$('body').css('overflow','auto');
						});
					</script>
<script>
			
				function goFirme(tofirme)
				{
					document.dialogform.action='/ibbweb2/firma/dispatchFirmaDistinte.action';
					document.dialogform.submit();
				}
			
			</script><script>
				var tipoDistinta = '';
				
				    function go(){
					
						//se provengo da 2800 Firma Distinta
						var orig = null;
						try{
							orig = document.getElementById('orig').value;
							}
						catch(ex){
						}	
						if (orig == '2800')
						{
							document.dialogform.action='/ibbweb2/firma/dispatchFirmaDistinte.action';
							document.dialogform.submit();						  
						}
						
					    
				    }
				
			</script></head>

<body background="img/05034/backg round5.gif" class="sfondo cant-vr2" leftmargin="0" marginheight="0" marginleft="0" marginwidth="0" style="width: auto; overflow: auto;" topmargin="0">
<table style="width:100%;height:100%">
<tbody><tr valign="top">
<td>
<div id="menu1" onmouseout="parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<div id="menu2" onmouseout="parent.middle.layerTimeOut('menu2','onmouseoutDalLayer');" onmouseover="parent.middle.clearTimeOut();" style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;"></div>
<form action="/ibbweb/uploadfilealvarmain" method="POST" name="dialogform">
<table class="larghezzaEsterna">
<tbody><tr>
<td align="center">
<div class="container" style="padding: 0px 15px;">
<div class="old-pageContent new-riquadro">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="" height="100%" id="progressbarContainer" width="100%">
<tbody><tr>
<td align="center" valign="top">
<table border="0" cellpadding="1" cellspacing="0" class="sfondoTabelle" style="">
<tbody><tr>
<td style="margin: 0; padding: 0;">
<table border="0" cellpadding="0" cellspacing="0" class="old-inputForm" width="100%">
<tbody><tr class="sottotitoloTabella" height="20">
<td align="left" class="old-pageTitle titoloTabella"><div class="new-flag"></div><h1>Allineamento Iban</h1></td>
</tr>
<tr class="rigachiara">
<td align="center" class="testoBlackSmallBold" style="margin: 0; padding: 0;">
<div class="messagePanel success" style="display: block; text-align: left; font-size:16px;">
<h3 class="titleSection">Esito Operazione</h3>
<p>
<script>
																												var message = "Tipologia dispositiva non importabile da questa pagina";
																												
																													while(message.indexOf("%a_capo_cedac%")!=-1){
																														message = message.replace("%a_capo_cedac%","<br/>");
																													}
																													while(message.indexOf("%a_sinistra_cedac_start%")!=-1){
																														message = message.replace("%a_sinistra_cedac_start%",'<div style="float:left">');
																													}
																													while(message.indexOf("%a_sinistra_cedac_end%")!=-1){
																														message = message.replace("%a_sinistra_cedac_end%","</div>");
																													}
																													while(message.indexOf("%tabella_cedac_start%")!=-1){
																														message = message.replace("%tabella_cedac_start%",'<table class="testoBlackSmallBold"><tr><td>');
																													}
																													while(message.indexOf("%tabella_cedac_end%")!=-1){
																														message = message.replace("%tabella_cedac_end%","</td></tr></table></table>");
																													}
																													
																													document.write(message);
																												
																											</script>Tipologia dispositiva non importabile da questa pagina
</p>
</div>
<div align="right">
<input class="btn" name="dlg_ok" onclick="   go();    " style="cursor:Hand" type="submit" value="OK"><table border="0" cellpadding="2px" cellspacing="0" class="old-inputForm" width="100%">

</table>
</div>
</td><input id="com.cedac.servlet.servlet_status_id" name="com.cedac.servlet.servlet_status_id" type="hidden" value="fgvrdxZZ2dWF16TqPlMZxnF9HJ7fkTCDjfmQg32SppGnTp7C1ybS!-1178415038!15719202811701571920660163"><input id="dialog_message_title" name="dialog_message_title" type="hidden" value="Allineamento Iban"><input id="verify" name="verify" type="hidden" value="false">
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</div><div class="new-buttons"></div>
</div>
</td>
</tr>
</tbody></table>
</form>
</td>
</tr>
<tr valign="bottom">
<td style="height:50px"><script src="newstyle/js/05034/footerTestoUx.js"></script></td>
</tr>
</tbody></table>


</body></html>