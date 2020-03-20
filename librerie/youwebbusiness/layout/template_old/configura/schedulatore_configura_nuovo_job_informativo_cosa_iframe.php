<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html><head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>jobWhat</title>
		<meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
		<meta name="CODE_LANGUAGE" content="C#">
		<meta name="vs_defaultClientScript" content="JavaScript">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
		
		<script language="javascript">
			function Salva(pkJob){
				if (CtrlParamCBI()){
				    
					document.frmSalvaJobCBI.idAzienda.value=document.Form1.cboAzienda.value;
				    document.frmSalvaJobCBI.idTipo.value = document.Form1.cboTipo.value;
				    document.frmSalvaJobCBI.banca.value = document.Form1.cboBanca.value;
					document.frmSalvaJobCBI.submit();
				}
			}
			
			function CtrlParamCBI(){
				if (document.Form1.cboAzienda.selectedIndex==0){
					alert("Selezionare un\'azienda");
					return false;
				}
				
				if (document.Form1.cboBanca.selectedIndex==0){
					alert("Selezionare una banca");
					return false;
				}
			    
                if (document.Form1.cboTipo.selectedIndex==0){
					alert("Selezionare una tipologia");
					return false;
				}
				
				return true;
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
	<!--pagina da includere nel body per menu -->
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div>
    <table class="larghezzaEsterna " cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
	    <tbody><tr>
		    <td valign="top">
		    <form name="Form1" method="post" action="jobWhat.aspx?pkSchedSel=864&amp;pkJobSel=20011&amp;idApplicazione=3" id="Form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTEwNjc2OTgzNDMPZBYCZg9kFgZmDxBkEBUCDHNlbGV6aW9uYS4uLhZBVVRPTU9CSUxFIENMVUIgTU9ERU5BFQIDc2VsBjEwNjYwORQrAwJnZ2RkAgEPEGQQFQMMc2VsZXppb25hLi4uCy0tIFR1dHRpIC0tGDA1MDM0IC0gQkFOQ08gQlBNIFMuUC5BLhUDA3NlbAAFMDUwMzQUKwMDZ2dnZGQCAg8QZBAVIAxzZWxlemlvbmEuLi4LLS0gVHV0dGkgLS0hQUwgLSBBTExJTkVBTUVOVE8gRUwuIEFSQ0hJVkktUklEF0FWIC0gQVZWSVNBVFVSQSBFRkZFVFRJGkNOIC0gQ09ORkVSTUEgREkgUklDRVpJT05FDUJCIC0gRVNJVE8gQkIOQTQgLSBFU0lUTyBGMjQOSU0gLSBFU0lUTyBNQVYURVAgLSBFU0lUTyBQQUdBTUVOVE8PSUIgLSBFU0lUTyBSSUJBDklSIC0gRVNJVE8gUklEHUVDIC0gRVNUUkFUVE8gQ09OVE8gUEVSSU9ESUNPElE0IC0gUVVJRVRBTlpBIEYyNCNSUCAtIFJFTkRJQ09OVEFaSU9ORSBESSBQT1JUQUZPR0xJTyNEVCAtIFJFTkRJQ09OVEFaSU9ORSBET1NTSUVSIFRJVE9MSRRSSCAtIFJFTkRJQ09OVEFaSU9OSSNSQSAtIFJFTkRJQ09OVEFaSU9OSSBDT05USSBBTlRJQ0lQSRVTTCAtIFNUUlVUVFVSRSBMSUJFUkUYQUxTWCAtIEFMTElORUFNRU5UTyBTRURBKEFMU1MgLSBBTExJTkVBTUVOVE8gU0VEQSAoRkxVU1NPIExPR0lDTykaRUJTWCAtIEVTSVRJIEJPTklGSUNJIFNFUEEqRUJTUyAtIEVTSVRJIEJPTklGSUNJIFNFUEEgKEZMVVNTTyBMT0dJQ08pJkVERFggLSBFU0lUSSBJTkNBU1NJIFNFUEEgRElSRUNUIERFQklUNkVERFMgLSBFU0lUSSBJTkNBU1NJIFNFUEEgRElSRUNUIERFQklUIChGTFVTU08gTE9HSUNPKR9FU0JYIC0gRVNJVEkgUEFHLiBTRVBBIEFMIEJFTkVGL0VTQlMgLSBFU0lUSSBQQUcuIFNFUEEgQUwgQkVORUYgKEZMVVNTTyBMT0dJQ08pFkVTUFggLSBFU0lUSSBQQUdBTUVOVEkmRVNQUyAtIEVTSVRJIFBBR0FNRU5USSAoRkxVU1NPIExPR0lDTykYUk1TWCAtIFJFTVVORVJBVElPTiBTRURBKFJNU1MgLSBSRU1VTkVSQVRJT04gU0VEQSAoRkxVU1NPIExPR0lDTykkRUJUWCDigJMgRVNJVEkgVEVDTklDSSBCT05JRklDSSBTRVBBNEVCVFMg4oCTIEVTSVRJIFRFQ05JQ0kgQk9OSUZJQ0kgU0VQQSAoRkxVU1NPIExPR0lDTykVIANzZWwAATUCMTACMTgCMjMCMjACMTMCMjUCMTICMTQBOAIyMQIyNgE5ATYBNwIxNwMxMDYDMTA3AzEwMAMxMDEDMTA0AzEwNQMxMDIDMTAzAzExMAMxMTEDMTA4AzEwOQMxMTIDMTEzFCsDIGdnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZGRkJGpCm2NEFDhd4yC2kJGF6pq4Fds=">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="F78A504E">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBAK/lp67BAKQt5esDwKM1eThDALIw7bYAtWp/dRpftf89gO96gvHrWL14N/N">
</div>
			    <table width="100%" class="rigascura" cellpadding="0" cellspacing="0" border="0">
				    
				    <tbody><tr>
					    <td>
						    <table width="100%" class="rigascura" cellspacing="1" cellpadding="1" border="0">
						        <tbody>
							    <tr>
								    <td>
									    <table border="0" cellspacing="1" cellpadding="1" class="rigascura" width="100%">
									        <tbody><tr class="titoloTabella" id="youBizHelp"><td class="right"><h1 style="background-color: transparent; border-bottom: transparent; margin: 0px; line-height: 10px;"><a class="old-pageHelp" href="#" onclick="goTMHelp('jobWhat.aspx','0','7')"><img src="/resources/YouBiz/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td></tr>
											    <tr class="rigascura">
												    <td>
												    
                                                        <div><b>Criteri di estrazione CBI</b></div>
													    <table>
													        <tbody><tr><td>&nbsp;</td></tr>
														    <tr>
															    <td class="testoBlackSmall right">Rag. Soc./Intestatario:</td>
															    <td><select name="cboAzienda" id="cboAzienda" style="width:300px" class="new-form-control">
	<option value="sel">seleziona...</option>
	<option value="106609">AUTOMOBILE CLUB MODENA</option>
</select></td>
														    </tr>
														    <tr>
															    <td class="testoBlackSmall right">Banca:</td>
															    <td><select name="cboBanca" id="cboBanca" style="width:300px" class="new-form-control">
	<option value="sel">seleziona...</option>
	<option value="">-- Tutti --</option>
	<option value="05034">05034 - BANCO BPM S.P.A.</option>
</select></td>
														    </tr>
														    <tr>
															    <td class="testoBlackSmall right">Tipologia:</td>
															    <td><select name="cboTipo" id="cboTipo" style="width:300px" class="new-form-control">
	<option value="sel">seleziona...</option>
	<option value="">-- Tutti --</option>
	<option value="5">AL - ALLINEAMENTO EL. ARCHIVI-RID</option>
	<option value="10">AV - AVVISATURA EFFETTI</option>
	<option value="18">CN - CONFERMA DI RICEZIONE</option>
	<option value="23">BB - ESITO BB</option>
	<option value="20">A4 - ESITO F24</option>
	<option value="13">IM - ESITO MAV</option>
	<option value="25">EP - ESITO PAGAMENTO</option>
	<option value="12">IB - ESITO RIBA</option>
	<option value="14">IR - ESITO RID</option>
	<option value="8">EC - ESTRATTO CONTO PERIODICO</option>
	<option value="21">Q4 - QUIETANZA F24</option>
	<option value="26">RP - RENDICONTAZIONE DI PORTAFOGLIO</option>
	<option value="9">DT - RENDICONTAZIONE DOSSIER TITOLI</option>
	<option value="6">RH - RENDICONTAZIONI</option>
	<option value="7">RA - RENDICONTAZIONI CONTI ANTICIPI</option>
	<option value="17">SL - STRUTTURE LIBERE</option>
	<option value="106">ALSX - ALLINEAMENTO SEDA</option>
	<option value="107">ALSS - ALLINEAMENTO SEDA (FLUSSO LOGICO)</option>
	<option value="100">EBSX - ESITI BONIFICI SEPA</option>
	<option value="101">EBSS - ESITI BONIFICI SEPA (FLUSSO LOGICO)</option>
	<option value="104">EDDX - ESITI INCASSI SEPA DIRECT DEBIT</option>
	<option value="105">EDDS - ESITI INCASSI SEPA DIRECT DEBIT (FLUSSO LOGICO)</option>
	<option value="102">ESBX - ESITI PAG. SEPA AL BENEF</option>
	<option value="103">ESBS - ESITI PAG. SEPA AL BENEF (FLUSSO LOGICO)</option>
	<option value="110">ESPX - ESITI PAGAMENTI</option>
	<option value="111">ESPS - ESITI PAGAMENTI (FLUSSO LOGICO)</option>
	<option value="108">RMSX - REMUNERATION SEDA</option>
	<option value="109">RMSS - REMUNERATION SEDA (FLUSSO LOGICO)</option>
	<option value="112">EBTX – ESITI TECNICI BONIFICI SEPA</option>
	<option value="113">EBTS – ESITI TECNICI BONIFICI SEPA (FLUSSO LOGICO)</option>
</select></td>
														    </tr>
														    <tr>
															    <td></td>
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
					    <td id="td_salva2">
						    
						    <!--&nbsp;<a href="javascript:Salva(20011)" class="rigascura"><img src="/resources/05034/it-IT/TMIBBWEBScheduler/img/save.gif" border="0" alt="Salva"/></a>&nbsp;-->
						    &nbsp;&nbsp;<input type="button" class="btn1" name="cmdSalva" value="Salva" onclick="javascript:Salva(20011)">&nbsp;
						    
					    </td>
				    </tr>
				
			    </tbody></table> 
                <input type="hidden" name="idRobot" value="390271">
                <input type="hidden" name="dsRobot" value="RU8AJ">
			
		    </form>
		    <form name="frmSalvaJobCBI" method="post" action="../common/eseguioperazione.aspx">
			    <input type="hidden" name="idApplicazione" value="3">
			    <input type="hidden" name="idAzienda" value="">
			    <input type="hidden" name="idTipo" value="">
			    <input type="hidden" name="banca" value="">
			    <input type="hidden" name="pkSched" value="864"> 
			    <input type="hidden" name="pkJob" value="20011">
			    <input type="hidden" name="tm_tipo_operazione" value="tminsertjobwhatCBI_new">
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