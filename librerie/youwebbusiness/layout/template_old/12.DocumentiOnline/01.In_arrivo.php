<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
<script src="/resources/YouBiz/js/jquery-1.9.1.min.js?v=10" type="text/javascript"></script>
<script src="/resources/YouBiz/js/jquery-ui.min.js?v=10" type="text/javascript"></script>
<script src="/resources/YouBiz/js/alten-tmibbweb.js?v=10" type="text/javascript"></script>
<script src="/resources/YouBiz/js/calendarTM.js?v=10" type="text/javascript"></script>
 <!-- messo qui per tenere i js originali della pagina (con versione inferiore rispetto YouBiz) ma includere il js di alten per restyling-->
                
        <meta http-equiv="x-ua-compatible" content="IE=Edge"> 
        <title>Riepilogo</title>
        
	    <link href="/TMIBBWEBSecurity/css/custom-theme/jquery-ui.1.11.4_youbiz.css?v=17" rel="stylesheet" type="text/css">
	    <script src="/TMIBBWEBSecurity/common/client/jquery-1.8.3.min.js" type="text/javascript"></script>
	    <!--<script src="/TMIBBWEBSecurity/common/client/jquery-ui-1.9.2.custom.js" type="text/javascript"></script>-->
		<script src="/TMIBBWEBSecurity/common/client/jquery-ui-1.9.2.custom.js" type="text/javascript"></script>
	    <script src="/TMIBBWEBSecurity/common/client/jquery.ui.pinpad.js?v=17" type="text/javascript"></script>
        
        <link href="/TMIBBWEBServizi/common/client/Contents/style/bootstrap/bootstrap.3.1.1/css/bootstrap.3.1.1.min.css" type="text/css" rel="stylesheet">
        <link href="/TMIBBWEBServizi/common/client/Contents/style/bootstrap/bootstrap.3.1.1/css/bootstrap-theme.3.1.1.min.css" type="text/css" rel="stylesheet">
         
        <link href="/resources/05034/it-IT/TMIBBWEBServizi/style/mainInfoComm.css?V=6" type="text/css" rel="stylesheet">
        
        
        <script src="../common/client/utilityCheck.js" type="text/javascript"></script>
        <script src="../common/client/tm_calendario.js" type="text/javascript"></script>
        <script type="text/javascript" src="/TMIBBWEBServizi/common/client/Contents/scripts/jquery/jquery-1.11.0/jquery.json-2.4.min.js"></script>
        <script type="text/javascript" src="/TMIBBWEBServizi/common/client/Contents/scripts/moment/moment.2.6.0/moment.2.6.0.min.js"></script>
        <script type="text/javascript" src="/TMIBBWEBServizi/common/client/Contents/scripts/bootstrap/bootstrap.3.1.1/bootstrap.3.1.1.min.js"></script>
        <script type="text/javascript" src="/TMIBBWEBServizi/common/client/Contents/scripts/site/site.1.0.0/tm.communication.1.0.0.js"></script>
        <script type="text/javascript" src="/TMIBBWEBServizi/common/client/Contents/scripts/site/site.1.0.0/tm.comparison.1.0.0.js"></script>
        <script type="text/javascript" src="/TMIBBWEBServizi/common/client/Contents/scripts/site/site.1.0.0/tm.encoding.1.0.0.js"></script>
        <script type="text/javascript" src="/TMIBBWEBServizi/common/client/Contents/scripts/site/site.1.0.0/tm.form.1.0.0.js"></script>
        <script type="text/javascript" src="/TMIBBWEBServizi/common/client/Contents/scripts/site/site.1.0.0/tm.trace.1.0.0.js"></script>
        <script type="text/javascript" src="/TMIBBWEBServizi/common/client/Contents/scripts/site/site.1.0.0/tm.workflow.1.0.0.js"></script>
        
        <style>
            html,body {height: 100%;font-family: Verdana, Arial, Helvetica, Sans-Serif;font-size: 10px;}
            tr img {display: block;}	
	        .styDivInline {display: block;}
            .styDivNone {display: none;}
        </style>
  
        <script type="text/javascript">
            
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
			NewWindowHelp('height=240,width=440,toolbar=no,scrollbars=yes,status=no,menubar=no,personalbar=no,titlebar=no','/TMIBBWEBServizi/05034/common/helpmanager.aspx?tmhelppage='+escape(page)+'&tmhelppagepr='+progr+'&tmhelpapp='+idApp,'popUphelp',440,240);
			//window.top.frames['tm_top'].framehelp.location='/TMIBBWEBServizi/05034/common/helpmanager.aspx?tmhelppage='+escape(page)+'&tmhelppagepr='+progr+'&tmhelpapp='+idApp;
		}
        </script>
    

<link href="/resources/YouBiz/css-new/essentials.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/bootstrap.min.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/header-default.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/byWeb2014.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/byWeb-Business.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css-new/print.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css/site.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css/main.css?v=10" rel="stylesheet" type="text/css">
<link href="/resources/YouBiz/css/jquery-ui.1.11.4.css?v=10" rel="stylesheet" type="text/css">


</head>
        <body>
        <div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div>
<table style="width: 100%; height: 100%">
 <tbody>
  <tr>
   <td valign="top">
    <table style="width: 100%; height: 100%">
     <tbody>
      <tr>
       <td valign="top">
        <div class="container"><div class="old-pageContent new-riquadro">
            <div style="width:100%;margin:auto;padding-top:10px;" id="riepilogoMainPanel">
                
                
        
                <iframe name="download" width="1px" height="1px" style="display: none"></iframe>
                <form name="frmDownload" id="frmDownload" action="#" method="POST" target="download">
                    <input type="hidden" name="arrToken" value="">
                    <input type="hidden" name="NameSaveDoc" value="">
                    <input type="hidden" name="DTRiferimento" value="">
                    <input type="hidden" name="TypeRep" value="">
                </form>
                
                
                    <div class="titoloTabella old-pageTitle page-title"><div class="new-flag"></div><h1>In Arrivo</h1></div>
                

                <div id="riepilogoPanel">
                    <form action="#" id="input_form" name="input_form">
                     <input type="hidden" name="PagingInfo.SortColumn" id="SortColumnIndex" value="">
                     <input type="hidden" name="PagingInfo.SortAscending" id="SortOrder" value="">
                     <input type="hidden" name="PagingInfo.Index" id="ItemIndex" value="">
         
                     <div id="riepilogoFilterPanel" style="display: block;">
                         <!-- from function -->
                        <div class="panel-group vnt-filter" id="accordion" style="background-color: rgb(247, 252, 247);">
                             <div class="panel vnt-filter" id="youBizWhiteBackground" style="background-color: rgb(255, 255, 255); overflow: visible;">
                              
     
                                    <div class="section" style="padding-bottom: 0px; margin-top: 0px;">
                                    <table class="testoBlackSmall" style="width: 70%; border-spacing: 2px; border-collapse: separate;">
                                <thead>
                                    <tr>
                                    <th style="width: 15%;"></th>
                                    <th style="width: 100px;"></th>
                                    <th style="width: 1px;"></th>
                                    <th style="width: 15%;"></th>
                                    <th style="width: 100px;"></th>
                                    <th style="width: 1px;"></th>
                                    <th style="width: 0%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td nowrap=""><span class="testoRedSmallBold">*</span>&nbsp;Rag. Soc./Intestatario:&nbsp;</td>
                                        <td><select style="width: 285px" class="new-form-control" id="selAzienda" name="Piazzatura.IdAzienda"><option value="106609">AUTOMOBILE CLUB MODENA</option></select></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right" nowrap="">Sia:&nbsp;&nbsp;&nbsp;<input style="width: 80px" size="11" maxlength="10" type="text" id="codSia" name="codSia" class="new-form-control"></td>
                                    </tr>
                                    <tr>
                                        <td nowrap="">Rapporto:</td>
                                        <td><select style="width: 285px" class="new-form-control" id="selRapporto" name="Piazzatura.CodiceRapporto"><option value="-1">Tutti</option><option value="E6W5Jk8%2BRSVq5qv%2Bs9P0m%2BEJ%2BuvIKj6IFtmoYsgJUuupix%2BNThJyXo%2B7BnBnAkw%2BIDK2IZTein2Fn1oMDSCwpNwb6xzEFjESb1OklvjFeAhXvkSu%2B7cUxPw8NXZr03kKFBaOS2ycH1GxrfUS%2BHKLVadnwfEd7ikZX148Qw5RNmHgMbG3UAO7yH3cisB4WcGBSLPnvo0v77r3Q9zjC%2BU5twi4PoEDn2nkIETgeznfxjo%3D">00047658 C/C CORRISPONDENZA</option><option value="EhoF%2Fo7mQFKeA0IEvHepr6Pkfi0nrh5vrUYT%2BaRed2BfGzdcll%2BfSFeCLt2Ib%2B7HNYswWK4kTXD8vRWb%2BZU3WP%2B7rsY96a4cxQrEzkQR8aZ2kv5pJ0W5oQVbJiruWnUb7v7EaPeQ%2BMC4EALrv9YrBZPq7lGEak08RtOP6q762X%2Buh8uwq%2FYEXfpjbsFmIMuK2EbLpk9DN4XiUnkOaaJnABbrRa4zP3enEFdLxfy%2Boio%3D">00047661 C/C CORRISPONDENZA</option><option value="zXTatC6J90UjbZe8sVReW9qluK5ccEmAJsiSWpSv%2B0z%2B9vdbe9tkvGc4DNTTI2MdhNU%2Fcdkzc4%2Fj20%2FQQyjQcl4s63zJVQW3L2JyYunuLG6YRQdYHPHNUNISrP2qmKBBtuboH5XO5i5%2BjBueIpppfV6CdVgbrNv1Af%2BtYH1DpQIlA%2F135iFOEshVr160x9%2BedjspdS9MIvtorSpdC71%2BRcnYWwinvrVX4dhPKyqBK3k%3D">00047659 CONTO UNICO</option><option value="DGS%2FmLOwjBMQprtOzwQkWtIlqLnRfXBQR4qH73ceaebB4o9LhqDHwO8xwe9BgLizGeN%2Bn2sKTTdKJQCJBA8Yh3rvlpCw5Z9t90xteElUG8zsd1BSKYEaKWTDVDkjrmEsJtPgTchJw4aKP1uRKn2ohLzD1XbPT6XWQthVR1Q5WDQosHrX3d778vBgNJ00Ujt8ssJq2LGs0yxxu6aqjirdeV4TWbxP3DH2LFBi0qcVWY4%3D">001000136082 OPERATORE CON L'ESTERO</option><option value="59GehUGBgUBHGVe2wtUsIFxc%2FsosiMSwsGrVx48s01128%2Bv1dg5gXGX0B2DRuuzZtclh5LezCPzd5uSDQoErkFNy7rP2ZH23BfAmoLjw8sl0KCpP0BJV72zIGX9cX8hGPTwMiiaPe2ZLAMDd5pAppXJSCuTE5sf6hXHkGCa5Ga8BGXX3Py656a97%2F9gImZvnj1mQ1qNCUSWg%2BrALtoOWmQ7GCmxIew7HzKVUniOYtjs%3D">000053073596 PRES.PORTAFOGLIO CEI</option><option value="%2FeGdQwx%2B9VMH2NEy1ECNtuATl4ml4dMr9hnO2Akeo3N0wM%2F3aJVSsQ0%2FFieeA1MkflGPns9wKHwL8TbsfiPCabVGqBNfDoBsNthp5Gs1g7d3XZ4Bl4k0GFkirL%2Bq%2FtDyZijvFkA1i72LD%2ByKY%2Faq6MpbrbkpafxCJKbLhqyT49BWlRPMR8dZ6naLxnwN%2BgCeHC3xdwM3980jaOY5RwgoMMR3VC2vxhWlilAAUDVgIOQ%3D">000030077187 PRES.PORTAFOGLIO SBF M.V.</option><option value="WnwzQSrD0ci%2BPhEw%2BxpSNqa2rUto0NPU7Xm5RF5BXzhBgNTq5l%2FXa%2BJdYktvLnM5b%2FcQwjhzQ6EDYmb8ak2%2BlB16R%2BCBI9TCbUS5htLy6ERkIG9fABFtAXv9Njn7ov%2Bj%2FYm6D8Doli7ur5xrCXiq1D6ZHPRoTCyklV7%2F7lFm%2Bafz6W7750a2iiuPB4VqOfF1s9RvPEmNHhDyqgrWba3q6P6hp6kcbagqPlNMwhnedfs%3D">000034511820 PRES.SEPA DD SBF M.V</option><option value="Ycc7fJy8trL6cf6CtWo8bDvcz0iDooBPVs8Jwd%2FjBk%2BfqHhOgPINfmpseSoTRAR8gT2eAq6AQ3WswuGAVINh5q2K0ZOzq3Y2pVNL58OGsP45tXRo%2BziaY44EgKH7HkBMkXifyyl55eFU17Si%2FpNhwD9HW94WDiWQ0LcKPSccqr2ILBj31JvXaRxpAvBA1aKkFDQkrG3qCn9bBJxQ0E%2FGj6N28c1aeSuSAiCnebfFxW8%3D">000034511821 PRES.SEPA DD SBF M.V</option><option value="HHBWxvi0SF4ladb3DCKbzFoHF%2BEGehblfhgVP2w3yqdQP%2FLznU6X%2ByqMs025Nr1fjvAZ1NHjww3erHdnK0B0Celjb097VXBFPFQLzfRvzBduFtcEjVWRxWA8DXkKl9N9qwuItfrWv0j5BtKDp9embt2mTj0QITEv%2FGl5m%2BZhNlQIZskPvz%2FC%2BO5hVKIK7DyaN1k7oKs9yohiUYzQwf29hxUQzAquvLsiXrQ2qiH%2BiNrifGUDRE5FEzo5V0TK8s%2BW">015010028401 RB TIT. YOUBUSINESS WEB P</option></select></td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Data dal:</td>
                                        <td colspan="2">
                                            <table>
                                                <tbody><tr>
                                                    <td>
                                                        <input style="width: 100%" size="11" maxlength="10" type="text" id="fieldDataFrom" name="" onkeypress="return onlyDate(event)" class="datepicker fieldDataFromYBW new-form-control hasDatepicker">
                                                        <input type="hidden" id="fieldDataFromHidden" name="dataDa">
                                                    </td>
                                                    <td>&nbsp;&nbsp;</td>
                                                    <td>
                                                        <a class="icon-replace icon-calendar active" onclick="$('.datepicker.fieldDataFromYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar fieldDataFromYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1568744525246"></a>
                                         
                                      
                                                        
                                                    </td>
                                                    <td style="width: 47px">&nbsp;</td>
                                                    <td style="text-align: right">&nbsp;al:&nbsp;&nbsp;</td>
                                                    <td>
                                                        <input style="width: 100%" size="11" maxlength="10" type="text" id="fieldDataTo" name="" onkeypress="return onlyDate(event)" class="datepicker fieldDataToYBW new-form-control hasDatepicker">
                                                        <input type="hidden" id="fieldDataToHidden" name="dataA">
                                                    </td>
                                                    <td>&nbsp;&nbsp;</td>
                                                    <td>
                                                        <a class="icon-replace icon-calendar active" onclick="$('.datepicker.fieldDataToYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar fieldDataToYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1568744525247"></a>
                                         
                                      
                                                        
                                                    </td> 
                                                </tr>
                                            </tbody></table>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td style="text-align: right">
                                            <div data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne" id="riepilogoFilterToggler">
	                                            <input type="button" class="btn1 small" id="cmdAvanzate" style="margin-right: 0px; margin-bottom: 0px;" value="<< Avanzate">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                                        <br style="visibility: hidden; display: none;">
                                        <div style="background-image: url(&quot;/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif&quot;); height: 2px; visibility: hidden; display: none;"></div>
                                        <br style="visibility: hidden; display: none;">
                                     </div>
                             <div style="background-color:white;height:8px"></div>
                             <div id="collapseOne" class="panel-collapse section collapse in" style="padding-bottom: 0px; margin-top: 0px; height: auto;">
                              <div class="panel vnt-filter section" style="padding-bottom: 0px; margin-top: 0px; background-color: rgb(247, 252, 247); overflow: visible;">
                               <table class="testoBlackSmall" style="width:100%; border-spacing: 2px; border-collapse: separate;">
                                <thead>
                                 <tr>
                                    <th style="width:13%;"></th>
                                    <th style="width: 300px;"></th>
                                    <th style="width: 0%;"></th>
                                    <th style="width: 20%;"></th>
                                    <th style="width: 10%;"></th>
                                    <th style="width: 10%;"></th>
                                 </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tipo documento:&nbsp;</td>
                                    <td><select style="width: 350px" id="selTipoDocumento" name="dummyTipoDocumento" class="new-form-control">
                                            <option selected="selected" value="">Tutti</option>  
                                            <option value="3">Contabili</option>  
                                            <option value="2">Documenti di Sintesi e Proposte di Modifiche Unilaterali</option>  
                                            <option value="1">Estratto Conto</option>
                                        </select> 
                                        <input type="hidden" id="hiddenTipoDocumento" name="TipoDocumento" value=""> 
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Stato :&nbsp;</td>
                                    <td><select style="width: 180px" id="selStatoDocumento" name="dummyStatoDocumento" class="new-form-control">
                                            <option selected="selected" value="">Tutti</option>  
                                            <option value="1">Letto</option>  
                                            <option value="0">NonLetto</option>  
                                        </select>
                                        <input type="hidden" id="hiddenStatoDocumento" name="StatoDocumento" value="">
                                        <input type="hidden" id="selPagingItemsPerPage" name="PagingInfo.Count" value="10">
                                        <input type="hidden" id="fieldDocumentArrayPdf" name="ActionDocumento.Array" value="">
                                        <input type="hidden" id="fieldDocumentArrayPdfB" name="ActionDocumento.ArrayB" value="">
                                        <input type="hidden" id="fieldDocActionPdf" name="ActionDocumento.Action" value="">
                                        <input type="hidden" id="fieldDocActionDescrizionePdf" name="ActionDocumento.Descrizione" value="">
                                        <input type="hidden" id="fieldDocActionDataRiferimentoPdf" name="ActionDocumento.DataRiferimento" value="">            
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                </tbody>
                               </table>

                              </div> 
                              <br style="visibility: hidden; display: none;">
                              <div style="background-image: url(&quot;/resources/05034/it-IT/TMIBBWEBServizi/img/riga-filtro.gif&quot;); height: 2px; visibility: hidden; display: none;"></div>
                              <br style="visibility: hidden; display: none;">
                             </div>
                             <div class="panel vnt-filter section" style="text-align: center; padding-bottom: 0px; margin-top: 0px; background-color: rgb(247, 252, 247); overflow: visible;">
                                 <table style="width: 85%;">
                                     <tbody><tr>
                                         <td style="text-align: left"><span class="testoRedSmallBold">&nbsp;&nbsp;*	campi obbligatori</span></td>
                                         <td style="text-align: center" class="old-buttons">
                                             <div class="button-set" style="float:none;text-align:left">
                                                
                                            </div>
                                            <div style="clear: both"></div>
                                         </td>
                                     </tr>
                                 </tbody></table>
                             </div>
                              <span class="testoRedSmallBold " id="alertFiltriSet"></span>
                              <div class="vnt-filter section" style="padding-bottom: 0px; margin-top: 0px; background-color: rgb(247, 252, 247);"></div>
                              </div>
                        </div>
                    </div>
                     <div id="riepilogoSubFilterPanel" style="visibility: hidden; display: none;">
                            <table class="testoBlackSmall" style="width: 55%;padding-right:200px; border-spacing: 2px; border-collapse: separate;">
                                <thead>
                                     <tr>
                                        <th style="width: 20px;"></th>
                                        <th style="width: 40px;"></th>
                                        <th style="width: 40px;"></th>
                                        <th style="width: 0px;"></th>
                                        <th style="width: 0px;"></th>
                                        <th style="width: 0px;"></th>
                                     </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td style="text-align: left"><span class="testoBlackSmallBold">Rag. Soc./Intestatario</span></td>
                                        <td style="text-align: left"><span class="testoBlackSmallBold">Rapporto</span></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><select style="width: 300px;text-align: left;" class="new-form-control" id="selAziendaFiltroLista" name="Piazzatura.IdAzienda"><option value="106609">AUTOMOBILE CLUB MODENA</option></select></td>
                                        <td><select style="width: 300px;text-align: left;" class="new-form-control" id="selRapportoFiltroLista" name="Piazzatura.CodiceRapporto"><option value="-1">Tutti</option><option value="E6W5Jk8%2BRSVq5qv%2Bs9P0m%2BEJ%2BuvIKj6IFtmoYsgJUuupix%2BNThJyXo%2B7BnBnAkw%2BIDK2IZTein2Fn1oMDSCwpNwb6xzEFjESb1OklvjFeAhXvkSu%2B7cUxPw8NXZr03kKFBaOS2ycH1GxrfUS%2BHKLVadnwfEd7ikZX148Qw5RNmHgMbG3UAO7yH3cisB4WcGBSLPnvo0v77r3Q9zjC%2BU5twi4PoEDn2nkIETgeznfxjo%3D">00047658 C/C CORRISPONDENZA</option><option value="EhoF%2Fo7mQFKeA0IEvHepr6Pkfi0nrh5vrUYT%2BaRed2BfGzdcll%2BfSFeCLt2Ib%2B7HNYswWK4kTXD8vRWb%2BZU3WP%2B7rsY96a4cxQrEzkQR8aZ2kv5pJ0W5oQVbJiruWnUb7v7EaPeQ%2BMC4EALrv9YrBZPq7lGEak08RtOP6q762X%2Buh8uwq%2FYEXfpjbsFmIMuK2EbLpk9DN4XiUnkOaaJnABbrRa4zP3enEFdLxfy%2Boio%3D">00047661 C/C CORRISPONDENZA</option><option value="zXTatC6J90UjbZe8sVReW9qluK5ccEmAJsiSWpSv%2B0z%2B9vdbe9tkvGc4DNTTI2MdhNU%2Fcdkzc4%2Fj20%2FQQyjQcl4s63zJVQW3L2JyYunuLG6YRQdYHPHNUNISrP2qmKBBtuboH5XO5i5%2BjBueIpppfV6CdVgbrNv1Af%2BtYH1DpQIlA%2F135iFOEshVr160x9%2BedjspdS9MIvtorSpdC71%2BRcnYWwinvrVX4dhPKyqBK3k%3D">00047659 CONTO UNICO</option><option value="DGS%2FmLOwjBMQprtOzwQkWtIlqLnRfXBQR4qH73ceaebB4o9LhqDHwO8xwe9BgLizGeN%2Bn2sKTTdKJQCJBA8Yh3rvlpCw5Z9t90xteElUG8zsd1BSKYEaKWTDVDkjrmEsJtPgTchJw4aKP1uRKn2ohLzD1XbPT6XWQthVR1Q5WDQosHrX3d778vBgNJ00Ujt8ssJq2LGs0yxxu6aqjirdeV4TWbxP3DH2LFBi0qcVWY4%3D">001000136082 OPERATORE CON L'ESTERO</option><option value="59GehUGBgUBHGVe2wtUsIFxc%2FsosiMSwsGrVx48s01128%2Bv1dg5gXGX0B2DRuuzZtclh5LezCPzd5uSDQoErkFNy7rP2ZH23BfAmoLjw8sl0KCpP0BJV72zIGX9cX8hGPTwMiiaPe2ZLAMDd5pAppXJSCuTE5sf6hXHkGCa5Ga8BGXX3Py656a97%2F9gImZvnj1mQ1qNCUSWg%2BrALtoOWmQ7GCmxIew7HzKVUniOYtjs%3D">000053073596 PRES.PORTAFOGLIO CEI</option><option value="%2FeGdQwx%2B9VMH2NEy1ECNtuATl4ml4dMr9hnO2Akeo3N0wM%2F3aJVSsQ0%2FFieeA1MkflGPns9wKHwL8TbsfiPCabVGqBNfDoBsNthp5Gs1g7d3XZ4Bl4k0GFkirL%2Bq%2FtDyZijvFkA1i72LD%2ByKY%2Faq6MpbrbkpafxCJKbLhqyT49BWlRPMR8dZ6naLxnwN%2BgCeHC3xdwM3980jaOY5RwgoMMR3VC2vxhWlilAAUDVgIOQ%3D">000030077187 PRES.PORTAFOGLIO SBF M.V.</option><option value="WnwzQSrD0ci%2BPhEw%2BxpSNqa2rUto0NPU7Xm5RF5BXzhBgNTq5l%2FXa%2BJdYktvLnM5b%2FcQwjhzQ6EDYmb8ak2%2BlB16R%2BCBI9TCbUS5htLy6ERkIG9fABFtAXv9Njn7ov%2Bj%2FYm6D8Doli7ur5xrCXiq1D6ZHPRoTCyklV7%2F7lFm%2Bafz6W7750a2iiuPB4VqOfF1s9RvPEmNHhDyqgrWba3q6P6hp6kcbagqPlNMwhnedfs%3D">000034511820 PRES.SEPA DD SBF M.V</option><option value="Ycc7fJy8trL6cf6CtWo8bDvcz0iDooBPVs8Jwd%2FjBk%2BfqHhOgPINfmpseSoTRAR8gT2eAq6AQ3WswuGAVINh5q2K0ZOzq3Y2pVNL58OGsP45tXRo%2BziaY44EgKH7HkBMkXifyyl55eFU17Si%2FpNhwD9HW94WDiWQ0LcKPSccqr2ILBj31JvXaRxpAvBA1aKkFDQkrG3qCn9bBJxQ0E%2FGj6N28c1aeSuSAiCnebfFxW8%3D">000034511821 PRES.SEPA DD SBF M.V</option><option value="HHBWxvi0SF4ladb3DCKbzFoHF%2BEGehblfhgVP2w3yqdQP%2FLznU6X%2ByqMs025Nr1fjvAZ1NHjww3erHdnK0B0Celjb097VXBFPFQLzfRvzBduFtcEjVWRxWA8DXkKl9N9qwuItfrWv0j5BtKDp9embt2mTj0QITEv%2FGl5m%2BZhNlQIZskPvz%2FC%2BO5hVKIK7DyaN1k7oKs9yohiUYzQwf29hxUQzAquvLsiXrQ2qiH%2BiNrifGUDRE5FEzo5V0TK8s%2BW">015010028401 RB TIT. YOUBUSINESS WEB P</option></select></td>
                                        <td><img id="imgSearch" class="old-fieldQuickFilter" src="/resources/YouBiz/images/i_quick-filter.png" title="" style="cursor: pointer" border="0" height="20" width="20"></td>
                                        <td><img id="imgGoFiltro" class="old-fieldFilter" src="/resources/YouBiz/images/i_filter.png" style="cursor: pointer" title="Filtri" border="0" height="20" width="20"></td>
                                        <td><img id="imgAzzeraFiltri" class="old-fieldRemoveFilter" src="/resources/YouBiz/images/i_remove-filter.png" style="cursor: pointer" title="Azzera Filtri" border="0" height="20" width="20"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                     <input type="hidden" id="fieldPrintError" name="IdErr" value="">
                    </form>
                    <div id="riepilogoListPanel"></div>
                </div>
 
                <div id="cartaPanel" class="row">
                  <div id="cartaPanelContent" class="row"></div>
                  <div id="cartaPanelFunction" class="row"></div>
                </div>
            </div>
        </div><div class="new-buttons"><input id="btnVisualizza" type="button" class="btn1" value="Visualizza" style="display: inline-block;"></div></div>
       </td>
      </tr>
     </tbody>
    </table>
   </td>
 </tr>
    <tr>
			<td valign="bottom">
				<div class="divFooter">
		            <div class="row footer">
			            <div class="container">
				            <div class="col-xs-4">
					            <div class="assistenza clearfix">
						            <h4>Assistenza Clienti</h4>
						            <div class="clearfix">
							            <a class="ico-assistenza" href="#">&nbsp;</a>
							            <div>
								            Numero verde:&nbsp;<strong>800.607.227</strong><br>
								            Dall'estero:&nbsp;<strong>+39 02.43371097</strong>
							            </div>
						            </div>
						            <div class="clearfix">
							            <a class="ico-gestore" href="#">&nbsp;</a>
							            <div>Per qualsiasi altra esigenza è a tua disposizione<br>
							            il <strong>Gestore</strong> presso la tua filiale di riferimento</div>
						            </div>
					            </div>
				            </div>
				            <div class="col-xs-4">					            
				            </div>
				            <div class="col-xs-4">
					            <div class="footer-logo"> <span>Banco Popolare</span> </div>
				            </div>
				            <div class="col-xs-12 margin-top10 txt_center disclaimer">
					            © 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright
				            </div>
			            </div>
		            </div>
	            </div>
			</td>
		</tr>

 </tbody>
</table>
            <script type="text/javascript">
                
                var indx = 0;
                $(function() {
                    var mainPanel = $('#riepilogoMainPanel');
                    var communication = $('#connectionPanel',mainPanel).anchisecommunication({ dialogClass: "communication-dialog", delay: 1500, width: 'auto', height: 150, connect: { errorHandler: serverErrorHandler}} );
                    var riepilogoListPanel = $('#riepilogoListPanel', mainPanel);
                    var jListAziende = [{"Id":106609,"IdPostazione":66457,"CodiceSia":"AVLC9","CodiceAzienda":"100042308","Descrizione":"AUTOMOBILE CLUB MODENA","IsEnabled":true}];
                    var paramGetConfigurazione = {'bValue':false, 'idAzienda': null, 'codiceRapporto': null,'keyfordocument': null ,'countIndexCall': [{'tmp':null}] };
                
                    var rapporti = [];
                    var errore = [];

                    var popup = $('#pop', mainPanel).dialog({
                            modal: true,
                            autoOpen: false,
                            closeOnEscape: true,
                            dialogClass: 'popup-dialog',
                            //draggable: false,
                            resizable: false,
                            width: 'auto',
                            minWidth: 500
                        }
                    );
                
                    //variabili global******************************************************************************************
                    var riepilogoFilterPanel = $("#riepilogoFilterPanel", mainPanel);
                    var riepilogoSubFilterPanel = $("#riepilogoSubFilterPanel", mainPanel);
                    var codSia = $("#codSia", mainPanel);
                    var btnSearch = $("#imgSearch", mainPanel);
                    var itemPerPage = $('#selPagingItemsPerPage', mainPanel);
                    var jRiepilogoFilterToggler = $('#riepilogoFilterToggler', mainPanel);
                    var jEmptyFormValues = formToJsonFlat($("#input_form", mainPanel));
                    ////var jSkipKeys = [ 'Piazzatura.CodiceAzienda', 'Piazzatura.Posizione', 'PagingInfo.SortColumn', 'PagingInfo.SortAscending', 'PagingInfo.Index' ];
                    ////var jSkipKeys = [ 'Piazzatura.IdAzienda', 'Piazzatura.CodiceRapporto','codSia', 'PagingInfo.SortColumn', 'PagingInfo.SortAscending', 'PagingInfo.Index','PagingInfo.Count','dataDa','dataA'];
                
                    var fieldDocumentArrayPdf = $('#fieldDocumentArrayPdf');
                    var fieldDocumentArrayPdfB = $('#fieldDocumentArrayPdfB');
                    var fieldDocActionPdf = $('#fieldDocActionPdf');
                    var fieldDocActionDescrizionePdf = $('#fieldDocActionDescrizionePdf');
                    var fieldDocActionDataRiferimentoPdf = $('#fieldDocActionDataRiferimentoPdf');
                
                    ClearContentScaricoPdf();

                    //variabili global******************************************************************************************
                    //eventi******************************************************************************************

                    visibilityDiv(riepilogoFilterPanel, false);
                    visibilityDiv(riepilogoSubFilterPanel, false);

                    ////gestionePannelloFilterPanel(false);
                    ////gestionePannelloSubFilterPanel(false);

                    var listAziende = $("#selAzienda", mainPanel);
                    var listAziendeFiltroLista = $("#selAziendaFiltroLista", mainPanel);
                
                    var listRapporto = $("#selRapporto", mainPanel);
                    var listRapportoFiltroLista = $("#selRapportoFiltroLista", mainPanel);
                
                    var fieldPrintError = $('#fieldPrintError');

                    var cmdAvanzate = $("#cmdAvanzate", mainPanel);
                    cmdAvanzate.click(function() {
                        var attuale = $(this).val();
                        var apri = '>> Avanzate';
                        var chiudi = '<< Avanzate';
                        if(attuale == apri) {
                            $(this).val(chiudi);
                        }else {
                            $(this).val(apri);
                        }
                    });

                    listAziende.change(function() {
                        populateCodSia($(this).val());
                        populateListRapporto($(this).val());
                        riposizionaList($(this).val(), listAziendeFiltroLista);
                    });
                    listAziendeFiltroLista.change(function() {
                        populateListRapporto($(this).val());
                        riposizionaList($(this).val(), listAziende);
                        attivaBottoneRicercaFiltroLista();
                    });
                
                    listRapporto.change(function() {
                        riposizionaList($(this).val(), listRapportoFiltroLista);
                    });
                    listRapportoFiltroLista.change(function() {
                        riposizionaList($(this).val(), listRapporto);
                        attivaBottoneRicercaFiltroLista();
                    });
                
                    btnSearch.click(function() {
                        ClearContentScaricoPdf();
                        
                        if(btnSearch.attr('src') == '/resources/YouBiz/images/i_quick-filter.png') {
                            setSortInfo(2, 'desc');
                            setPagingInfo();
                            submitSearch();
                            
                        }
                    });

                    
                    $('#btnVisualizza').click(function() { visualizzaClick(); });                
                    
                    $('#imgGoFiltro', mainPanel).click(function() { visibilityFilter(true); });
                    $('#imgAzzeraFiltri', mainPanel).click(function() { azzeraFiltri(); });
                
                    $("#selTipoDocumento", mainPanel).change(function() {
                        $("#hiddenTipoDocumento", mainPanel).val($(this).val());
                    });
                    $("#selStatoDocumento", mainPanel).change(function() {
                        $("#hiddenStatoDocumento", mainPanel).val($(this).val());
                    });
                    jRiepilogoFilterToggler.click(function() { toggleFilter($(this)); });
                    //eventi******************************************************************************************
                    //chiamate funzioni********************************************
                    populateListAziende();
                    setDataInitial();
                    visibilityFilter(true);

                    //arrivo da configurazione
                    setAziendaByconfiguration();
                    //arrivo da configurazione
                
                    //chiamate funzioni********************************************

                    //funzioni**************************************************************************************************
                    function ClearContentScaricoPdf(){
                        fieldDocumentArrayPdf.val('');
                        fieldDocumentArrayPdfB.val('');
                        fieldDocActionPdf.val('');
                        fieldDocActionDescrizionePdf.val('');
                        fieldDocActionDataRiferimentoPdf.val('');
                    }

                    function setPathMenu(arrobj) {
                        window.top.frames["tm_top"].SetDescrPercorsoMenu(arrobj);
                    }
                    function serverErrorHandler(a,b,xhr) {
                        // metterlo in un popup
                        riepilogoListPanel.html(xhr.responseText);
                    }

                    function setDataInitial() {
                        $("#fieldDataFrom", mainPanel).val('09/06/2019');
                        $("#fieldDataTo", mainPanel).val('18/09/2019');
                    }

                    function riposizionaList(idkey,control) {
                        var ctrLista = control;
                        $.each(ctrLista, function(key, value) {
                            var eridu = value;
                            $.each(eridu, function(key1, value1) {
                                if(value1.value == idkey) {
                                    ctrLista.prop('selectedIndex', key1);
                                    return true;
                                }
                            });
                        });
                    }

                    function attivaBottoneRicercaFiltroLista() {
                        
                        btnSearch.attr('src', '/resources/YouBiz/images/i_quick-filter.png');
                        btnSearch.attr('cursor', 'pointer');                    
                    }
                
                    function isArrivalByconfiguration() {
                        ////debugger;
                        if(paramGetConfigurazione != undefined || paramGetConfigurazione != null) {
                            if(paramGetConfigurazione.countIndexCall.length == 4) {
                                //sbianco tutto
                                paramGetConfigurazione.idAzienda = '';
                                paramGetConfigurazione.codiceRapporto = '';
                                paramGetConfigurazione.keyfordocument = '';
                                paramGetConfigurazione.bValue = false;
                                return paramGetConfigurazione;
                            }
                            if(paramGetConfigurazione.bValue == false) {
                                paramGetConfigurazione.idAzienda = '';
                                paramGetConfigurazione.codiceRapporto = '';
                                paramGetConfigurazione.keyfordocument = '';
                                if((paramGetConfigurazione.idAzienda != undefined && paramGetConfigurazione.idAzienda != null) && (paramGetConfigurazione.codiceRapporto != undefined && paramGetConfigurazione.codiceRapporto != null) ) {
                                    if(paramGetConfigurazione.idAzienda.length > 0 && paramGetConfigurazione.codiceRapporto.length > 0) {
                                        paramGetConfigurazione.bValue = true;
                                        indx++;
                                        paramGetConfigurazione.countIndexCall[indx] = {'tmp':null};
                                    }
                                }
                            }else {
                            
                                indx++;
                                paramGetConfigurazione.countIndexCall[indx] = {'tmp':null};
                            }
                        }
                        else {
                            paramGetConfigurazione.idAzienda = '';
                            paramGetConfigurazione.codiceRapporto = '';
                            paramGetConfigurazione.keyfordocument = '';
                            paramGetConfigurazione.bValue = false;
                            return paramGetConfigurazione;
                        }
                        return paramGetConfigurazione;
                    }

                    function setAziendaByconfiguration() {
                    
                        var isParamConf = isArrivalByconfiguration();
                        if(isParamConf.bValue) {
                            visibilityFilter(false);
                        
                            var indxAzSel = 0;
                            $.each(listAziende, function(index, item) {
                                $.each(item, function(key, value) {
                                    if(value.value == isParamConf.idAzienda) {
                                        indxAzSel = key;
                                    }
                                }); 
                            });
                            listAziende.prop("selectedIndex", indxAzSel);
                            listAziende.change();
                        }
                    }

                    function populateListAziende() {
                        // verifica is array
                        if (jListAziende != undefined) {
                            listAziende.empty();
                            listAziendeFiltroLista.empty();
                            if (jListAziende.length > 0) {
                                if (jListAziende.length > 1) {
                                    listAziende.append("<option value=-1>"+'seleziona...'+"</option>");        
                                }
                                $.each(jListAziende, function(key, value) {
                                    var selection = '';
                                    listAziende.append('<option value="' + htmlEncode(value.Id) + '" ' + selection + '>' + htmlEncode(value.Descrizione) + '</option>');
                                });
                            } else {
                                listAziende.append('<option value="">' + htmlEncode('Non ci sono aziende attive') + '</option>');
                            }
                      
                            listAziende.prop("selectedIndex", 0);
                        
                            var isParamConf = isArrivalByconfiguration();
                            if(isParamConf.bValue == false) {
                                listAziende.change();
                            }

                            ////listAziende.change();
                            listAziende.find('option').clone().appendTo(listAziendeFiltroLista);
                        }
                    }

                    function populateCodSia(idAzienda) {
                        if (jListAziende != undefined) {
                            codSia.val('');
                            $.each(jListAziende, function(key, value) {
                                if(idAzienda == value.Id) {
                                    codSia.val(value.CodiceSia);      
                                    return true;
                                }
                            });
                        }
                    }
                
                    function  populateListRapporto(idAzienda) {
                        fieldPrintError.val('');
                        if (idAzienda != "-1") {
                            var foundRapporto = rapporti[idAzienda];
                            var foundErrore = errore[idAzienda];
                            listRapporto.empty();
                            listRapportoFiltroLista.empty();
                            if (foundRapporto) {
                                listRapporto.append("<option value='-1'>" + 'Tutti' + "</option>");
                                if(foundErrore) {
                                    if(foundErrore.IdErr != undefined || foundErrore.IdErr != null){
                                        fieldPrintError.val(foundErrore.IdErr);
                                    }
                                    else{
                                        fieldPrintError.val(foundErrore.DescrErr);
                                    }

                                    listRapporto.prop("selectedIndex", 0);
                                    listRapporto.change();
                                    listRapporto.find('option').clone().appendTo(listRapportoFiltroLista);
                                }else {
                                
                                    var isParamConf = isArrivalByconfiguration();
                                    if(isParamConf.bValue) {
                                        var indxRapp = 0;
                                        $.each(foundRapporto, function(index, item) {
                                            listRapporto.append("<option value=" + item.Piazzatura.CodiceRapporto + ">" + htmlEncode(item.DescrRapporto) + "</option>");
                                        
                                            if(isParamConf.keyfordocument == item.KeyForDocument) {
                                                indxRapp = index;
                                            }
                                        });
                                        listRapporto.find('option').clone().appendTo(listRapportoFiltroLista);
                                        var selIndx = indxRapp + 1;
                                        listRapporto.prop("selectedIndex", selIndx);
                                        listRapporto.change();
                                    
                                        ClearContentScaricoPdf();
                                        setSortInfo(2, 'desc');
                                        setPagingInfo();
                                        submitSearch();

                                    }else {
                                        $.each(foundRapporto, function(index, item) {
                                            listRapporto.append("<option value=" + item.Piazzatura.CodiceRapporto + ">" + htmlEncode(item.DescrRapporto) + "</option>");
                                        });

                                        listRapporto.prop("selectedIndex", 0);
                                        listRapporto.change();
                                        listRapporto.find('option').clone().appendTo(listRapportoFiltroLista);
                                    }
                                
                                    /*$.each(foundRapporto, function(index, item) {
                                            listRapporto.append("<option value=" + item.Piazzatura.CodiceRapporto + ">" + htmlEncode(item.DescrRapporto) + "</option>");
                                        });
                                        listRapporto.prop("selectedIndex", 0);
                                        listRapporto.change();*/
                                }
                            
                                ////listRapporto.find('option').clone().appendTo(listRapportoFiltroLista);
                            }
                            else
                            {
                                listRapporto.append("<option value=''>" + htmlEncode('Caricamento in corso ...') + "</option>");
                                var filter = formToJson($("#input_form", mainPanel));
                                var piazzatura = filter.Piazzatura;
                                piazzatura.IdAzienda = idAzienda;
                                piazzatura.CodiceRapporto = null;
                                var inputParameter = {'param':{'Piazzatura': null, 'Paging': null } };
                                inputParameter.param.Piazzatura = piazzatura;
                                inputParameter.param.Paging = null;
                                communication.anchisecommunication('connectjson',
                                    {
                                        url: '/TMIBBWEBServizi/ws/smaterializzazione/Smaterializzazione.asmx/GetRapporti',
                                        resultType: 'json',
                                        data: inputParameter,
                                        successHandler: function(txtData, isJson, jsonObject) {
                                            if (isJson && jsonObject) {
                                                rapporti[idAzienda] = jsonObject.Rapporti;
                                                errore[idAzienda] = jsonObject.Errore;
                                                populateListRapporto(idAzienda);    
                                            }
                                        }
                                    });
                            }
                        } 
                        else 
                        {
                            listRapporto.append("<option value='-1'>" + 'Tutti' + "</option>");
                        }
                    }

                    function azzeraFiltri() {
                        setDataInitial();
                        itemPerPage.val(10);

                        listRapporto.prop("selectedIndex", 0);
                        listRapporto.change();

                        $("#selStatoDocumento", mainPanel).prop("selectedIndex", 0);
                        $("#selStatoDocumento", mainPanel).change();
                    
                        $("#selTipoDocumento", mainPanel).prop("selectedIndex", 0);
                        $("#selTipoDocumento", mainPanel).change();
                    
                        $('#ItemIndex', mainPanel).val('0');
                        $('#Count', mainPanel).val('10');
                    
                        ClearContentScaricoPdf();
                        setSortInfo(2, 'desc');
                        setPagingInfo();
                        submitSearch();
                    }

                    function visualizzaClick() {
                        ClearContentScaricoPdf();
                        setSortInfo(2, 'desc');
                        setPagingInfo();
                        submitSearch();
                    }

                    function visibilityDiv(actualElement,visible) {
                        actualElement.attr("style", "display: none");
                        actualElement.attr("style", "visibility: hidden");
                        actualElement.hide();
                        if(visible) {
                            actualElement.removeAttr("style", "display: none").attr("style", "display: inline");
                            actualElement.removeAttr("style", "visibility: hidden").attr("style", "display: visible");
                            actualElement.show();
                        }
                        
                        $("#accordion").attr('style', 'background-color: #f7fcf7 !important');
                        
                    }

                    function visibilityFilter(firstFilter) {
                        if(firstFilter) {
                            visibilityDiv(riepilogoFilterPanel, true);
                            visibilityDiv(riepilogoSubFilterPanel, false);
                            riepilogoListPanel.empty();
                            
                            visibilityDiv($("#btnVisualizza","div.new-buttons"), true);
                            visibilityDiv($("#btnConfirm","div.new-buttons"), false);
                            
                            ////riepilogoFilterPanel.show();
                            ////riepilogoSubFilterPanel.hide();
                            ////gestionePannelloSubFilterPanel(false);
                        }
                        else {
                            visibilityDiv(riepilogoFilterPanel, false);
                            visibilityDiv(riepilogoSubFilterPanel, true);
                            riepilogoFilterPanel.hide();
                            
                            visibilityDiv($("#btnVisualizza","div.new-buttons"), false);
                            visibilityDiv($("#btnConfirm","div.new-buttons"), true);
                            

                            ////riepilogoSubFilterPanel.show();
                            ////gestionePannelloSubFilterPanel(true);
                        }
                        ////riepilogoSubFilterPanel.show();
                    }

                    function toggleFilter(toggler) {
                        if (jEmptyFormValues) {
                            var checkValue = false;
                            // se sono sull'evento del click
                            if (toggler) {
                                checkValue = !toggler.hasClass('collapsed');
                            } else {
                                // mi hanno richiamato applicativamente
                                checkValue = jRiepilogoFilterToggler.hasClass('collapsed');
                            }

                        /*if (checkValue && !compareObjects(formToJsonFlat($("#input_form", mainPanel)), jEmptyFormValues, jSkipKeys)) {
                        // valuta campi
                        var message = 'Filtri impostati';
                        $('#alertFiltriSet', mainPanel).html('<div title="' + message +'"><i class="glyphicon glyphicon-filter"></i> &nbsp; Filtri impostati</div>');
                         $('#alertFiltriSet', mainPanel).html('<i class="glyphicon glyphicon-filter"></i> &nbsp; Filtri impostati');
                        //
                        // $('#alertFiltriSet', mainPanel).text('Filtri impostati');
                        } else {
                        //$('#alertFiltriSet', mainPanel).text('');
                        $('#alertFiltriSet', mainPanel).html('');
                        }*/
                        }
                    }

                    function setSortInfo(colIndex, order) {
                        colIndex = colIndex || 2;
                        $('#SortColumnIndex', mainPanel).val(colIndex);
       
                        var value = order && order === 'asc' ? 'true' : 'false' ;
                        $('#SortOrder', mainPanel).val(value);
                    }
                    function setPagingInfo(pageNumber) {
                        if (pageNumber === undefined || isNaN(pageNumber) || pageNumber < 1) {
                            pageNumber = 1;
                        }
                        pageNumber--;
                        var itemsPerPage = itemPerPage.val();//$('#selPagingItemsPerPage', mainPanel).val();
                        if (itemsPerPage === undefined || isNaN(itemsPerPage)) {
                            itemsPerPage = 50;
                        }

                        if (typeof itemsPerPage === 'string') {
                            itemsPerPage = parseInt(itemsPerPage);
                        }

                        var index = pageNumber * itemsPerPage;
                        $('#ItemIndex', mainPanel).val(index);
                    }
                
                    function normalizeInputParam() {
                        ////debugger;
                        var toret = formToJson($('#input_form', mainPanel));                    
                        var idAziendaGlobal = toret.Piazzatura.IdAzienda;
                        toret.IncludeZeroRapp = false;
                        toret.TipoArchivio = 'OnLine';
                        var arrPiazzatura=[];
                        if(toret.Piazzatura.CodiceRapporto == "-1") {
                            //tutti i rapporti
                            toret.IncludeZeroRapp = true;
                            ////var listRapporto = $("#selRapporto", mainPanel);
                            var indx = 0;
                            $.each(listRapporto, function(key, value) {
                                $.each(value, function(key1, value1) {
                                    if(value1.value != "-1") {
                                        arrPiazzatura[indx] = { CodiceRapporto: value1.value, IdAzienda: idAziendaGlobal };
                                        indx++;
                                    }
                                });
                            });
                            toret.Piazzature = arrPiazzatura;
                        }else {
                            //piazzatura singola
                            arrPiazzatura[0] = { CodiceRapporto: toret.Piazzatura.CodiceRapporto, IdAzienda: idAziendaGlobal };
                            toret.Piazzature = arrPiazzatura;    
                        }   
                        return toret;
                    }

                    function getMsgError() {
                        ////var toret = '';
                    
                        var toretForm = formToJson($('#input_form', mainPanel));
                        if(toretForm.Piazzatura.IdAzienda=="-1") {
                            return 'Selezionare un intestatario.';
                        }

                        var toretErr = fieldPrintError.val();
                        if(toretErr != '') {
                            if(toretErr == "R10") {
                                return 'L\'intestatario selezionato non è il titolare della postazione, non è possibile abilitare il servizio.';
                            }else {
                                if (toretErr != "R05") {
                                    return 'Errore nel caricamento dei rapporti';
                                }
                            }
                        }
                        return '';
                    }
                 
                    function submitSearch() {
                        var isMsgError = getMsgError();
                        if(isMsgError == '') {
                            normalizeData();
                            var objData = normalizeInputParam();
                            //debugger;
                            setPathMenu(['Documenti On Line','In Arrivo']);
                            $('#eventDispatcher', riepilogoListPanel).unbind('fromControl', eventsFromControls);
                            riepilogoListPanel.html('');
                            communication.anchisecommunication('connectjson',
                                {
                                    url: 'partial/ListaInArrivo.aspx',
                                    callMode: 'ajax',
                                    resultType: 'html',
                                    data: objData,
                                    successHandler: function(htmlChunk, jsonObject, jsonObjectError) {
                                        if (jsonObject) {
                                            ////showPopup('Errore ' + jsonObjectError.Error);
                                            alert('Errore ' + jsonObjectError.Error);
                                        }
                                        else {
                                            $('#eventDispatcher', riepilogoListPanel).unbind('fromControl', eventsFromControls);

                                            riepilogoListPanel.html(htmlChunk);
                                            
                                            
                                            if ($("#youBizLinkHelp", "#riepilogoSubFilterPanel").length == 0) {
                                                $("#youBizLinkHelp", "#youBizCtxHelp").insertBefore("#riepilogoSubFilterPanel table");
                                            }
                                            else {
                                                $("#youBizLinkHelp", "#youBizCtxHelp").remove();
                                            }
                                            

                                            $('#eventDispatcher', riepilogoListPanel).bind('fromControl', eventsFromControls);
                                            visibilityFilter(false);
                                        }
                                    }
                                });
                        }
                        else {
                            ////showPopup(isMsgError);
                            alert(isMsgError);
                        }
                    }
                
                    function eventsFromControls(event, eventParam) {
                        ClearContentScaricoPdf();
                    
                        if (eventParam) {
                            // ricevuto richiesta di cambio sort
                            if (eventParam.sort) {
                                setPagingInfo();
                                setSortInfo(eventParam.sort.columnIndex, eventParam.sort.order);
                                submitSearch();
                                return;
                            }
                            // ricevuto richiesta di paginazione
                            if (eventParam.paging) {
                                setPagingInfo(eventParam.paging.pageNumber);
                                submitSearch();
                                return;
                            }
                            // ricevuto richiesta visualizzare righe per pagina 10/20/50/100/200
                            if (eventParam.rowxPage) {
                                if(eventParam.rowxPage.rowNumber != undefined || eventParam.rowxPage.rowNumber != null) {
                                    itemPerPage.val(eventParam.rowxPage.rowNumber);                                
                                    setPagingInfo();
                                    submitSearch();
                                }
                                return;
                            }
                        
                            if (eventParam.errorSelectMultiple) {
                            
                                if(eventParam.errorSelectMultiple != undefined || eventParam.errorSelectMultiple != null) {
                                    ////showPopup(eventParam.errorSelectMultiple.msg);
                                    alert(eventParam.errorSelectMultiple.msg);
                                }
                                return;
                            }
                        
                            if (eventParam.archiviaDoc) {
                            
                                if(eventParam.archiviaDoc != undefined || eventParam.archiviaDoc != null) {
                                    var arrTokenArchivia = eventParam.archiviaDoc.tokenArray;
                                    if(arrTokenArchivia.length > 0) {
                                        var retVal;
                                        retVal = confirm("Attenzione!\nProseguendo i documenti selezionati verranno trasferiti nella sezione Archivio.\nSi desidera procedere con l'operazione?");
                                        if (retVal==true)
                                        {
                                            actionDocument(arrTokenArchivia,'1');
                                            setPagingInfo();
                                            submitSearch();
                                        }
                                    }
                                }else {
                                    ////showPopup('Nessuna occorrenza selezionata');    
                                    alert('Nessuna occorrenza selezionata');
                                }
                                return;
                            }
                            // ricevuto richiesta scarico pdf
                            if (eventParam.downloadDocument) {
                                if(eventParam.downloadDocument.tokenArray != undefined || eventParam.downloadDocument.tokenArray != null) {
                                    var arrTokenDownload = eventParam.downloadDocument.tokenArray;
                                     var nmaxDoc = '20';


                                    if(arrTokenDownload.length > nmaxDoc)
                                    {
                                        ////Messaggio troppi documenti selezionati
                                        ////showPopup("Attenzione! \nE' possibile scaricare contemporaneamente fino a 20 documenti.");
                                        alert("Attenzione! \nE' possibile scaricare contemporaneamente fino a 20 documenti.");
                                    }
                                    else {
                                        //esegui
                                        if(arrTokenDownload.length == 0) {
                                            ////showPopup('Nessuna occorrenza selezionata');    
                                            alert('Nessuna occorrenza selezionata');
                                        }else {
                                            debugger;
                                            //inizio scarico
                                            if (arrTokenDownload.length == 1)
                                            {
                                                document.frmDownload.arrToken.value = arrTokenDownload[0].idToken;
                                                document.frmDownload.NameSaveDoc.value = '';
                                                document.frmDownload.DTRiferimento.value = '';
                                                if(arrTokenDownload[0].descr != undefined){
                                                    document.frmDownload.NameSaveDoc.value = arrTokenDownload[0].descr;
                                                }
                                                if(arrTokenDownload[0].dtRif != undefined){
                                                    document.frmDownload.DTRiferimento.value = arrTokenDownload[0].dtRif;
                                                }
                                                document.frmDownload.TypeRep.value = arrTokenDownload[0].repository;
                                            }else{
                                                var tokArray = '';
                                                var spl = '#-#';
                                                $.each(arrTokenDownload , function(index, item) {
                                                    tokArray +=  item.idToken + spl;
                                                });
                                                if(tokArray.length > 0){
                                                    tokArray = tokArray.substr(0,tokArray.length - spl.length);
                                                }

                                                document.frmDownload.arrToken.value = tokArray;
                                                document.frmDownload.NameSaveDoc.value = '';
                                                document.frmDownload.DTRiferimento.value = '';
                                                document.frmDownload.TypeRep.value = '';
                                            }
                                            document.frmDownload.action = "Download/DownloadDocument.aspx";
                                            document.frmDownload.method = "POST";
                                            document.frmDownload.submit();
                                            //fine scarico

                                            actionDocument(arrTokenDownload,'0');
                                            setPagingInfo(eventParam.downloadDocument.paging.pageNumber);
                                            submitSearch();
                                        }
                                    }
                                }else {
                                    ////showPopup('Nessuna occorrenza selezionata');    
                                    alert('Nessuna occorrenza selezionata');
                                }
                                return;
                            }

                            /*if (eventParam.scaricafileA) {
                                
                                 if(eventParam.scaricafileA != undefined || eventParam.scaricafileA != null) {
                                     scaricaA(eventParam.scaricafileA);
                                 }
                             }
                            if (eventParam.scaricafileB) {
                                
                                 if(eventParam.scaricafileB != undefined || eventParam.scaricafileB != null) {
                                     scaricaB(eventParam.scaricafileB);
                                 }
                             }*/

                            if (eventParam.listItemAction) {
                            }
                        }
                    }
                    
                    function actionDocument(arrToken,action) {
                
                        var token='';
                        var tokenB='';
                        var constSplit = "#-#";

                        ClearContentScaricoPdf();

                        $.each(arrToken, function(index, item) {
                        
                            
                            token += item.idToken + constSplit;
                            
                        });
                                      
                        fieldDocumentArrayPdf.val(token);
                        fieldDocumentArrayPdfB.val(tokenB);
                        fieldDocActionPdf.val(action);

                        if(arrToken.length == 1) {
                            if(arrToken[0].descr != undefined || arrToken[0].descr != null) {
                                fieldDocActionDescrizionePdf.val(arrToken[0].descr);
                            }
                            if(arrToken[0].dtRif != undefined || arrToken[0].dtRif != null) {
                                fieldDocActionDataRiferimentoPdf.val(arrToken[0].dtRif);
                            }
                        }
                        /*setPagingInfo();
                        submitSearch();*/
                    }

                    function showPopup(testo, isAlert, actionHandler) {
                        actionHandler = actionHandler || $.noop;

                        var btnClose = { text: "Ok", click: function () { $(this).dialog('close'); } };
                        var btnAnnulla = { text: "Annulla", click: function () { $(this).dialog('close'); } };
                        var btnOk = {
                            text: "Ok",
                            click: function() {
                                actionHandler();
                                $(this).dialog('close');
                            }
                        };
          
                        var buttons = [];
       
                        if (isAlert != undefined && isAlert == false) {
                            buttons = [btnAnnulla, btnOk];
                        } else {
                            buttons = [btnClose];
                        }
                        popup.html(testo);
                        popup.dialog('option', { 'buttons': buttons, 'title': 'Info'});
                        popup.dialog('open');
                    }  

                    function normalizeData() {
                        $('#fieldDataFromHidden').val(null);
                        $('#fieldDataToHidden').val(null);
            
                        var tmpFrom = $('#fieldDataFrom').val();
                        if(tmpFrom != null && tmpFrom != undefined && tmpFrom.length > 0) {
                            var toretForm = moment(tmpFrom, 'DD/MM/YYYY').format('MM DD YYYY HH:mm:ss a');
                            $('#fieldDataFromHidden').val(toretForm);    
                        }
            
                        var tmpTo = $('#fieldDataTo').val();
                        if(tmpTo != null && tmpTo != undefined && tmpTo.length > 0) {
                            var toretTo = moment(tmpTo, 'DD/MM/YYYY').format('MM DD YYYY HH:mm:ss a');
                            $('#fieldDataToHidden').val(toretTo);    
                        }
                    }

                });

            </script>
    
  


    <script type="text/javascript">
        $(function () {
            $(".section").css('padding-bottom', '0');
            $(".section").css('margin-top', '0');
            $(".vnt-filter").css('background-color', '#f7fcf7');
            $("#youBizWhiteBackground.vnt-filter").css('background-color', 'white');
            $("input.btn1.small").css('margin-bottom', 0);

            //overflow reimpostato a visible per portare completamente visibile il calendario
            $(".panel-group .panel").css("overflow", "visible");

        });
    </script>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>

<div class="ui-dialog ui-widget ui-widget-content ui-corner-all communication-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-1" style="outline: 0px; z-index: 1002; height: auto; width: auto; top: 399.5px; left: 729.5px; display: none;">
<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix">
<span id="ui-id-1" class="ui-dialog-title">&nbsp;</span>
<a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a>
</div>
<div id="connectionPanel" style="width: auto; height: 143px; display: block; opacity: 0; min-height: 0px;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0"><img src="/TMIBBWEBServizi/Common/Client/Contents/style/site/site.1.0.0/images/attesa.gif" style="margin: auto;"></div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all popup-dialog ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-id-2" style="display: none; outline: 0px; z-index: 1000;"><div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span id="ui-id-2" class="ui-dialog-title">&nbsp;</span><a href="#" class="ui-dialog-titlebar-close ui-corner-all" role="button"><span class="ui-icon ui-icon-closethick">close</span></a></div><div id="pop" class="ui-dialog-content ui-widget-content"></div></div>
</body>
</html>