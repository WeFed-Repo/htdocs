<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html><head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>jobWhere</title>
		<meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
		<meta name="CODE_LANGUAGE" content="C#">
		<meta name="vs_defaultClientScript" content="JavaScript">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
		
		<script language="javascript">
			function chekPath(){
				var re=/^\.\\[a-zA-Z0-9\\]+$/;
				if (re.test(document.Form1.txtPath.value))
				    
					return true;
				else
					return false;
			}
			
			function Salva(pkJob){
				if (chekPath()){
					document.frmSalvaJobWhere.pathJob.value=document.Form1.txtPath.value;
				
					if (document.Form1.rdTipo1.checked)
						document.frmSalvaJobWhere.typeJob.value=document.Form1.rdTipo1.value;
					if (document.Form1.rdTipo2.checked)
						document.frmSalvaJobWhere.typeJob.value=document.Form1.rdTipo2.value;
					if (document.Form1.rdTipo3.checked)
						document.frmSalvaJobWhere.typeJob.value=document.Form1.rdTipo3.value;
					if (document.Form1.rdTipo4.checked)
						document.frmSalvaJobWhere.typeJob.value=document.Form1.rdTipo4.value;
										
					document.frmSalvaJobWhere.submit();
				}
				else{
					alert("Path non valido!");
				}
			}
			
			
			function NewWindowHelp(strOpzioni,strUrl,strNome,larghezza,altezza)
			{
				var	sinistra;
				var	sopra;
				if(window.screenX)
				{
					sinistra	= (window.outerWidth/2)+window.screenX-(larghezza/2);
					sopra		= (window.outerHeight/2)+window.screenY-(altezza/2);
				}
				else
				{
					sinistra	= (screen.availWidth/2)-(larghezza/2);
					sopra		= (screen.availHeight/2)-(altezza/2);
				}			
				if (window.top.frames['tm_top'].openWindow!=null)
				{
					window.top.frames['tm_top'].openWindow.close();
					window.top.frames['tm_top'].openWindow=null;
					finestra=null;
				}		
				var	finestra = window.open(strUrl,strNome,strOpzioni+',screenX='+sinistra+',left='+sinistra+',screenY='+sopra+',top='+sopra) ;
				window.top.frames['tm_top'].openWindow=finestra;
			}		

		function goTMHelp(page,progr,idApp){
			NewWindowHelp('height=240,width=440,toolbar=no,scrollbars=yes,status=no,menubar=no,personalbar=no,titlebar=no','/TMIBBWEBSecurity/05034/frames/helpmanager.aspx?tmhelppage='+escape(page)+'&tmhelppagepr='+progr+'&tmhelpapp='+idApp,'popUphelp',440,240);
			//window.top.frames['tm_top'].framehelp.location='/TMIBBWEBSecurity/05034/frames/helpmanager.aspx?tmhelppage='+escape(page)+'&tmhelppagepr='+progr+'&tmhelpapp='+idApp;
		}
		</script>
        
<link href="/resources/YouBiz/css-new/essentials.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/bootstrap.min.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/header-default.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/byWeb2014.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/byWeb-Business.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css/site.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css/main.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css/jquery-ui.1.11.4.css?v=10" rel="stylesheet" type="text/css">

        
<script src="/resources/YouBiz/js/jquery-1.9.1.min.js?v=10" type="text/javascript"></script>
<script src="/resources/YouBiz/js/jquery-ui.min.js?v=10" type="text/javascript"></script>
<script src="/resources/YouBiz/js/alten-tmibbweb.js?v=10" type="text/javascript"></script>
<script src="/resources/YouBiz/js/calendarTM.js?v={0}" type="text/javascript"></script>
    
    </head>

    <body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0" class="rigascura">
        <table class="larghezzaEsterna " cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
	        <tbody><tr>
		        <td valign="top">
	            <!--pagina da includere nel body per menu -->
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div><form name="Form1" method="post" action="jobWhere.aspx?pkSchedSel=864&amp;pkJobSel=20011&amp;idApplicazione=3" id="Form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTQzODg1MDM0OWQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgQFB3JkVGlwbzEFB3JkVGlwbzIFB3JkVGlwbzMFB3JkVGlwbzTo5CnlC1OqwcQ/X8YkHyozMKOWTA==">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="18798457">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBgKL15i0BALtiYDwAwK3mP7gBQLq+OCqCALjusetCALjupvJAiP8RkSweJs21pzrpVf+YZB3Liph">
</div>
			        <table width="100%" class="rigascura" cellpadding="0" cellspacing="0" border="0">
			            
                        
				        <tbody><tr>
					        <td>
						        <table width="100%" class="rigascura" cellspacing="1" cellpadding="1" border="0">
						            <tbody>
							        <tr>
								        <td>
									        <table border="0" cellspacing="1" cellpadding="1" class="rigascura" width="100%">
									            <tbody><tr class="titoloTabella" id="youBizHelp"><td class="right"><h1 style="background-color: transparent; border-bottom: transparent; margin: 0px; line-height: 10px;"><a class="old-pageHelp" href="#" onclick="goTMHelp('jobWhere.aspx','0','7')"><img src="/resources/YouBiz/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td></tr>
											        <tr class="rigascura">
												        <td>
												        
                                                            <div><b>Impostazioni per salvataggio dati</b></div>
													        <table class="testoBlackSmall" border="0">
														        <tbody><tr>
															        <td colspan="2">
															        <br>Il path è relativo alla cartella DATA dell’installazione dello schedulatore<br>Path richiesto nel formato: .\DIR
															        </td>
														        </tr>
														        <tr>
															        <td class="testoBlackSmall left">
															        Path:
															        </td>
															        <td>
															            <input name="txtPath" type="text" id="txtPath" size="80" class="new-form-control"> 
															        </td>
														        </tr>
														        <tr>
															        <td colspan="2">
															            <input value="%fname%" name="rdTypeSave" type="radio" id="rdTipo1" checked="checked">File (Nome file nel formato SIA_ABI_TIPOLOGIA_DATA_NOMESUPPORTO.ID) 
															        </td>
														        </tr>
														        <tr>
															        <td colspan="2">
															            <input value="%d0%\%fname%" name="rdTypeSave" type="radio" id="rdTipo2">Dir SIA \ File (Nome file nel formato SIA_ABI_TIPOLOGIA_DATA_NOMESUPPORTO.ID) 
															        </td>
														        </tr>
														        <tr>
															        <td colspan="2">
															            <input value="%d0%\%d1%\%fname%" name="rdTypeSave" type="radio" id="rdTipo3">Dir SIA \ Dir ABI \ File (Nome file nel formato SIA_ABI_TIPOLOGIA_DATA_NOMESUPPORTO.ID) 
															        </td>
														        </tr>
														        <tr>
															        <td colspan="2">
															            <input value="%d0%\%d2%\%fname%" name="rdTypeSave" type="radio" id="rdTipo4">Dir SIA \ Dir TIPOLOGIA \ File (Nome file nel formato SIA_ABI_TIPOLOGIA_DATA_NOMESUPPORTO.ID) 
															        </td>
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
                        <tr><td>&nbsp;</td></tr>
				        <tr>
					        <td>
						        
						        
						        &nbsp;&nbsp;<input type="button" class="btn1" name="cmdSalva" value="Salva" onclick="javascript:Salva(20011)">&nbsp;
						        
					        </td>
				        </tr>
				
			        </tbody></table> 
                    
		        </form>
		        <form name="frmSalvaJobWhere" method="post" action="../common/eseguioperazione.aspx">
			        <input type="hidden" name="pkSched" value="864"> 
			        <input type="hidden" name="pkJob" value="20011">
			        <input type="hidden" name="pathJob" value="">
			        <input type="hidden" name="typeJob" value="">
			        <input type="hidden" name="tm_tipo_operazione" value="tminsertjobwhere_new">
                    <input type="hidden" name="idRobot" value="390271">
                    <input type="hidden" name="dsRobot" value="RU8AJ">
		        </form>
		
		        </td>
	        </tr>
	
        </tbody></table> 
		
	
	



    <script type="text/javascript">
        $(function () {
            $("#youBizHelp h1").css("margin", "0");
            $("#youBizHelp h1").css("line-height", "10px");
            $("h1").css("behavior","none");
        });
    </script>
</body></html>