<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >

<html><head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>jobWheredispo</title>
		<meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
		<meta name="CODE_LANGUAGE" content="C#">
		<meta name="vs_defaultClientScript" content="JavaScript">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
		
        <script src="../common/client/tm_utility.js" language="javascript"></script>
		<script language="javascript">
            var maxLen = 150;
            function WarningctrlValue()
            {
                var toretOption="";
                var toretValueMessage = "";
                if (document.Form1.txtSourcePath.value.length>maxLen)
                {
                    toretOption = 'Attenzione! La lunghezza del path valorizzato supera i 150 caratteri.\nSi consiglia di utilizzare path di lunghezza inferiore.\nSi desidera comunque procedere?!';
                }
                else
                {
                    toretValueMessage = chekValuePath(document.Form1.txtSourcePath.value);
                    if(toretValueMessage!="")
                    {
                        toretOption = toretValueMessage;
                    }    
                }

                if (document.Form1.rdPathAltern.checked)
                {
                    toretValueMessage = chekValuePath(document.Form1.txtMovePath.value);
                    if(toretValueMessage!="") {
                        toretOption = toretValueMessage;
                    }   
                    if (document.Form1.txtMovePath.value.length>maxLen)
                    {
                        toretOption = 'Attenzione! La lunghezza del path alternativo valorizzato supera i 150 caratteri.\nSi consiglia di utilizzare path di lunghezza inferiore.\nSi desidera comunque procedere?!';
                    }   
                }
                return toretOption;
            }

            function ctrlErrorValue()
            {
                if (isNullOrEmpty(document.Form1.txtSourcePath.value))
                {
                    alert('Attenzione! Campo Path obbligatorio!');
                    return false;
                }

                if(SearchCharactersBlock(document.Form1.txtSourcePath.value))
                {
                    alert('Attenzione! Caratteri non validi.');
                    return false;
                }
                if (document.Form1.rdPathAltern.checked)
                {
                    if (isNullOrEmpty(document.Form1.txtMovePath.value))
                    {
                        alert('Attenzione! Campo Path alternativo obbligatorio.');
                        return false;
                    }
                    else
                    {
                        if(SearchCharactersBlock(document.Form1.txtMovePath.value))
                        {
                            alert('Attenzione! Caratteri non validi.');
                            return false;
                        }
                        
                        if(EqualsString(document.Form1.txtMovePath.value,document.Form1.txtSourcePath.value))
                        {
                            alert('Attenzione! Non e\' consentita la valorizzazione di path uguali.\nSi consiglia l\'utilizzo di un path alternativo diverso da quello di upload.');
                            return false;
                        }
                    }
                }
                return true;
            }
            
            function chekValuePath(valuectr){
                var pathLocal=true;
                var pathRete=true;
                var toret = "";
                var SourcePath = valuectr;
                var myRegexLocal = /^(([a-zA-Z]:)|(\\{2}\w+)\$?)/;
                if (myRegexLocal.test(SourcePath) == false) 
                {                
                    pathLocal = false;                  
                } else {
                    pathLocal = true;
                }

                var myRegexRete = /^(.\\[a-zA-Z0-9\\])/;
                if (myRegexRete.test(SourcePath) == false) 
                {                
                    pathRete = false;                  
                } else {
                    pathRete = true;
                }

                if(pathLocal == false)
                {
                    if(pathRete == false)
                    {
                        //errore generico
                        toret = 'Attenzione! Si sta utilizzando un path non corretto!\nSi desidera comunque procedere?';
                    }
                    if(pathRete == true)
                    {
                        //errore path rete
                        toret = 'Attenzione! Si sta utilizzando un path di rete.\nSi consiglia l\'utilizzo di path locali.\nSi desidera comunque procedere?';
                    }
                }
                else
                {
                    if(pathRete == true)
                    {
                        toret = 'Attenzione! Si sta utilizzando un path di rete.\nSi consiglia l\'utilizzo di path locali.\nSi desidera comunque procedere?';
                    }
                }
                return toret;
			}
			
            function CheckedPathPredef(chk)
            {
                document.Form1.rdPathPredef.checked = chk;
                document.Form1.rdPathAltern.checked = false;
                document.Form1.txtMovePath.value = '';
                document.getElementById("idSpanx").style.display = "inline";
                document.getElementById("idSpanT").style.display = "inline";
            }

            function CheckedPathAltern(chk)
            {
                document.Form1.rdPathAltern.checked = chk;
                document.Form1.rdPathPredef.checked = false;
                document.getElementById("idSpanx").style.display = "none";
                document.getElementById("idSpanT").style.display = "none";
            }

			function Salva(pkJob){
                var toretcontrolli;
                if (ctrlErrorValue())
                {
                    //****************
                    document.frmSalvaJobWhereDispo.SourcePath.value=document.Form1.txtSourcePath.value;
                    document.frmSalvaJobWhereDispo.FileExstensions.value=document.Form1.cboFileExstensions.value;
                    document.frmSalvaJobWhereDispo.checkFileSpia.value=document.Form1.chkFileSpia.checked;
                    //modifica david 03/01/2012 richiesta da sonia-cristian
                    if(document.Form1.chkFileSpia.checked)
                    {
                      document.frmSalvaJobWhereDispo.lockExtension.value =".LCK";
                    }
                    
                    document.frmSalvaJobWhereDispo.optionPathPredef.value = document.Form1.rdPathPredef.checked;
                    document.frmSalvaJobWhereDispo.optionPathAltern.value = document.Form1.rdPathAltern.checked;
                    if (document.Form1.rdPathPredef.checked)
                            document.frmSalvaJobWhereDispo.codPathPred.value='DONE';
						    document.frmSalvaJobWhereDispo.MovePath.value=document.Form1.txtSourcePath.value;
                    if (document.Form1.rdPathAltern.checked)
                            document.frmSalvaJobWhereDispo.codPathPred.value="";
						    document.frmSalvaJobWhereDispo.MovePath.value=document.Form1.txtMovePath.value;	
                    //****************
                    if(WarningctrlValue().length>0)
                    {
                        toretcontrolli = confirm(WarningctrlValue());
                        if(toretcontrolli)
                        {
                            document.frmSalvaJobWhereDispo.submit();
                        }
                    }
                    else
                    {
                        document.frmSalvaJobWhereDispo.submit();
                    }
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
    <table class="larghezzaEsterna" cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
	    <tbody><tr>
		    <td valign="top">
	        <!--pagina da includere nel body per menu -->
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div><form name="Form1" method="post" action="jobWhereDispo.aspx?pkSchedSel=850&amp;pkJobSel=20010&amp;idApplicazione=4" id="Form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTc4ODI5OTQ0MWQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgMFDHJkUGF0aFByZWRlZgUMcmRQYXRoQWx0ZXJuBQtjaGtGaWxlU3BpYZ5Wvt81rJ5NVmqqUqwaAQNSKXXW">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="E5AD1890">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBwKk4oqNAQK10r7OC2ZmAq/FpPELAsrQtZkEAvSMqosESwnCZaj6wfIknQT5DW+A9kguRE8=">
</div>
		        
			    <table width="100%" class="rigascura" cellpadding="0" cellspacing="0" border="0">
				
				    
				    <tbody><tr>
					    <td>
						    <table width="100%" class="rigascura" cellspacing="1" cellpadding="1" border="0">
						        <tbody>
							    <tr>
								    <td>
									    <table border="0" cellspacing="1" cellpadding="1" class="rigascura" width="100%">
									        <tbody><tr class="titoloTabella" id="youBizHelp"><td class="right"><h1 style="background-color: transparent; border-bottom: transparent; margin: 0px; line-height: 10px;"><a class="old-pageHelp" href="#" onclick="goTMHelp('jobWhereDispo.aspx','0','7')"><img src="/resources/YouBiz/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td></tr>
											    <tr class="rigascura">
												    <td>
												    <fieldset>
													    
                                                        <div><b>Impostazioni per acquisizione dati</b></div>
													    <table class="testoBlackSmall" border="0">
														    <tbody><tr>
															    <td colspan="3">
															    <br>Il path è la cartella da cui lo schedulatore effettua l'upload dei files
															    </td>
														    </tr>
														    <tr>
															    <td colspan="3" class="testoBlackSmall left">
                                                                Path:&nbsp;&nbsp;
															        <input name="txtSourcePath" type="text" id="txtSourcePath" size="100" class="new-form-control">
															    </td>
														    </tr>
                                                            <tr>
                                                                <td class="testoBlackSmall left">Sposta files elaborati in</td>
                                                                <td class="testoBlackSmall left"><input value="rdPathPredef" name="rdPathPredef" type="radio" id="rdPathPredef" onclick="javascript:CheckedPathPredef(this.checked);" checked="checked">path predefinito</td>
                                                                <td class="testoBlackSmall">(DirPath\DONE)&nbsp;<span id="idSpanx" name="idSpanx" class="testoRedSmallBold" style="display: inline;">*</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td class="testoBlackSmall left"><input value="rdPathAltern" name="rdPathAltern" type="radio" id="rdPathAltern" onclick="javascript:CheckedPathAltern(this.checked);">path alternativo</td>
                                                                <td class="testoBlackSmall"><input name="txtMovePath" type="text" id="txtMovePath" size="63" class="new-form-control"></td>
                                                            </tr>
                                                            <tr>
															    <td class="testoBlackSmall left" colspan="3">
                                                                File:&nbsp;&nbsp;
															    <select name="cboFileExstensions" id="cboFileExstensions" style="width:200px" class="new-form-control">
	<option selected="selected" value="*.*">Tutti i files(*.*)</option>
	<option value="*.aea">Files di testo(*.aea)</option>
	<option value="*.avv">Files di testo(*.avv)</option>
	<option value="*.bes">Files di testo(*.bes)</option>
	<option value="*.dlg">Files di testo(*.dlg)</option>
	<option value="*.mav">Files di testo(*.mav)</option>
	<option value="*.rib">Files di testo(*.rib)</option>
	<option value="*.rid">Files di testo(*.rid)</option>
	<option value="*.stf">Files di testo(*.stf)</option>
	<option value="*.sti">Files di testo(*.sti)</option>
	<option value="*.txt">Files di testo(*.txt)</option>
	<option value="*.xml">Files di testo(*.xml)</option>
</select>
															    </td>
														    </tr>
                                                            <tr>
															    <td colspan="3" class="testoBlackSmall left">
															        Utilizza files di controllo (nome file.estensione.LCK)&nbsp;<input name="chkFileSpia" type="checkbox" id="chkFileSpia"> 
															    </td>
														    </tr>
                                                        
													    </tbody></table>
												    
												    </fieldset></td> 
											    </tr>
									    </tbody></table> 		
								    </td> 
							    </tr> 
						    </tbody></table> 
					    </td> 
				    </tr> 
				    <tr>
					    <td>
						    
						    
                            &nbsp;<span id="idSpanT" name="idSpanT" class="testoRedSmallBold" style="display: inline;">*&nbsp;In caso di selezione del path predefinito la cartella DONE dovrà essere creata manualmente dall'utente prima dell'avvio della schedulazione.</span><br><br>
						    &nbsp;&nbsp;<input type="button" class="btn1" name="cmdSalva" value="Salva" onclick="javascript:Salva(20010)">&nbsp;
						    
					    </td>
				    </tr>
				
			    </tbody></table> 
                
		    </form>
		    <form name="frmSalvaJobWhereDispo" method="post" action="../common/eseguioperazione.aspx">
			    <input type="hidden" name="pkSched" value="850"> 
			    <input type="hidden" name="pkJob" value="20010">
			
                <input type="hidden" name="SourcePath" value="">
                <input type="hidden" name="codPathPred" value="">
			    <input type="hidden" name="FileExstensions" value="">
                <input type="hidden" name="MovePath" value="">
                <input type="hidden" name="optionPathPredef" value="">
                <input type="hidden" name="optionPathAltern" value="">
                <input type="hidden" name="checkFileSpia" value="">
                <input type="hidden" name="lockExtension" value="">

			    <input type="hidden" name="tm_tipo_operazione" value="tminsertjobwheredispo_new">
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