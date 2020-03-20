<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html><head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>jobSched</title> 
		
		<meta name="GENERATOR" content="Microsoft Visual Studio .NET 7.1">
		<meta name="CODE_LANGUAGE" content="C#">
		<meta name="vs_defaultClientScript" content="JavaScript">
		<meta name="vs_targetSchema" content="http://schemas.microsoft.com/intellisense/ie5">
		
		<script src="../common/client/tm_calendario.js" language="javascript"></script>
		<script language="javascript">
		function goEditSched(){
			document.frmGoSched.submit();
		}
		
		function abilitaEndDate(){
            
		    //Sonia 22/03/2016: inserita a seguito della modifica del calendario da flash al datepicker di jquery-ui
		    if (document.Form1.chkEndDate.checked) {
                $(".old-fieldCalendar.EndDateYBW").css("display", "");
		    } else {
		        $(".old-fieldCalendar.EndDateYBW").css("display","none");
		        document.Form1.EndDate.value="";
		    }
            
		}
            
		function abilitaRepeat(){
			document.Form1.cboOraRepeat.disabled=document.Form1.rdNoRepeat.checked ;
			document.Form1.cboMinRepeat.disabled=document.Form1.rdNoRepeat.checked ;
			
			document.Form1.cboOraStart.disabled=document.Form1.rdNoRepeat.checked ;
			document.Form1.cboOraEnd.disabled=document.Form1.rdNoRepeat.checked ;
			document.Form1.cboMinStart.disabled=document.Form1.rdNoRepeat.checked ;
			document.Form1.cboMinEnd.disabled=document.Form1.rdNoRepeat.checked ;
			
			document.Form1.cboOraStartOnce.disabled=document.Form1.rdRepeat[1].checked ;
			document.Form1.cboMinStartOnce.disabled=document.Form1.rdRepeat[1].checked ;
		}
		
		function Salva(pk){
			if (CtrlCampiObb()){
			
				document.frmSalvaJob.dtStart.value=document.Form1.StartDate.value.replace("/","-").replace("/","-");
				document.frmSalvaJob.dtEnd.value=document.Form1.EndDate.value.replace("/","-").replace("/","-");
				
				if (document.Form1.rdRepeat[1].checked){
				    //piu' volte al giorno
					document.frmSalvaJob.hRepeat.value=document.Form1.cboOraRepeat.value;
					document.frmSalvaJob.mRepeat.value=document.Form1.cboMinRepeat.value;
				    
				    document.frmSalvaJob.hStart.value=document.Form1.cboOraStart.value;
				    document.frmSalvaJob.mStart.value =document.Form1.cboMinStart.value;
				    document.frmSalvaJob.hEnd.value=document.Form1.cboOraEnd.value;
				    document.frmSalvaJob.mEnd.value =document.Form1.cboMinEnd.value;
				}
				else{
					document.frmSalvaJob.hRepeat.value='';
					document.frmSalvaJob.mRepeat.value='';
				    
				    document.frmSalvaJob.hStart.value=document.Form1.cboOraStartOnce.value;
				    document.frmSalvaJob.mStart.value =document.Form1.cboMinStartOnce.value;
				    document.frmSalvaJob.hEnd.value='23';//23
				    document.frmSalvaJob.mEnd.value ='55';//55
				}
				
				var weekDays='';
				if (document.Form1.chkDay1.checked) weekDays+=document.Form1.chkDay1.value+"," ;
				if (document.Form1.chkDay2.checked) weekDays+=document.Form1.chkDay2.value+"," ;
				if (document.Form1.chkDay3.checked) weekDays+=document.Form1.chkDay3.value+"," ;
				if (document.Form1.chkDay4.checked) weekDays+=document.Form1.chkDay4.value+"," ;
				if (document.Form1.chkDay5.checked) weekDays+=document.Form1.chkDay5.value+"," ;
				if (document.Form1.chkDay6.checked) weekDays+=document.Form1.chkDay6.value+"," ;
				if (document.Form1.chkDay7.checked) weekDays+=document.Form1.chkDay7.value+"," ;
				document.frmSalvaJob.weekDays.value=weekDays.substring(0,weekDays.length-1);
				
				document.frmSalvaJob.submit();
			}
		}
		
		function CtrlCampiObb(){
			
			if (document.Form1.StartDate.value=='') {
				alert("Inserire la data di inizio validità del job!");
				document.Form1.StartDate.focus();
				return false;
			}

		    if (!ControllaDate()){
			    return false;
		    }
			
			var chkSel=false;
			if (!chkSel && document.Form1.chkDay1.checked ) chkSel=true;
			if (!chkSel && document.Form1.chkDay2.checked ) chkSel=true;
			if (!chkSel && document.Form1.chkDay3.checked ) chkSel=true;
			if (!chkSel && document.Form1.chkDay4.checked ) chkSel=true;
			if (!chkSel && document.Form1.chkDay5.checked ) chkSel=true;
			if (!chkSel && document.Form1.chkDay6.checked ) chkSel=true;
			if (!chkSel && document.Form1.chkDay7.checked ) chkSel=true;
			
			if (!chkSel) {
				alert("Selezionare un giorno per la schedulazione del job!");
				return false;
			}
			
            if (document.Form1.rdRepeat[1].checked){
			    if (!CtrlOre()){
				    alert("L\'ora finale deve essere maggiore di quella iniziale!");
				    return false;
			    }
                if (!CtrlOrePiuVolteGiorno()){
				    alert("Se scelto più volte al giorno\ni menù combinati ore-minuti\nnon possono essere valorizzati entrambi a zero!");
				    return false;
			    }
			}

			return true;
		}
		
		function EliminaJob(){
			document.frmEliminaJob.submit();
		}
		
        function ControllaDate(){
            if (document.Form1.StartDate.value!='' && document.Form1.EndDate.value!=''){
		    	    // controllo che la data non sia antecedente a quella attuale
                    var strData_da = new String(document.Form1.StartDate.value);
                    var strData_a = new String(document.Form1.EndDate.value);

		    	    var anno_da,mese_da,giorno_da,anno_a,mese_a,giorno_a;
		    	    anno_da = strData_da.substring(6,10);
		    	    mese_da = strData_da.substring(3,5)-1; // 0-11 gennaio-dicembre
		    	    giorno_da = strData_da.substring(0,2);
		    	    anno_a = strData_a.substring(6,10);
		    	    mese_a = strData_a.substring(3,5)-1; // 0-11 gennaio-dicembre
		    	    giorno_a = strData_a.substring(0,2);
    		    	
		    	    var dtDa = new Date(anno_da,mese_da,giorno_da);
		    	    var dtA = new Date(anno_a,mese_a,giorno_a);
                    
                    
		    	    if ( dtA <= dtDa ){
		    	      alert("La data finale deve essere maggiore di quella iniziale!");
		    	      return false;
		    	    }
		    	    else{
		    	        return true;
		    	    }
		    }
		    return true;
		}

        function CtrlOrePiuVolteGiorno() {
            var oraRepeat=document.Form1.cboOraRepeat.value;
            var minRepeat = document.Form1.cboMinRepeat.value;
            
            if ( (parseInt(oraRepeat) == parseInt("00")) && (parseInt(minRepeat) == parseInt("00"))) {
                return false;
            }
            
            return true;
        }

		function CtrlOre(){
		    var oraIni=document.Form1.cboOraStart.value;
		    var oraFin=document.Form1.cboOraEnd.value;
		    var minIni=document.Form1.cboMinStart.value;
		    var minFin=document.Form1.cboMinEnd.value;

		    if (parseInt(oraIni)>parseInt(oraFin))
		        return false;
		    
		    if (parseInt(oraIni)==parseInt(oraFin)){
                if (parseInt(minIni)>parseInt(minFin))
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
        <table class="larghezzaEsterna " cellspacing="0" cellpadding="0" border="0" align="center" height="100%" style="width=100%">
	        <tbody><tr>
		        <td valign="top">
	            <!--pagina da includere nel body per menu -->
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div><form name="Form1" method="post" action="jobWhen.aspx?pkSchedSel=850&amp;pkJobSel=20010&amp;idApplicazione=4" id="Form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTU2Mjg0NDU4MA9kFgJmD2QWEAILDxAWAh4IZGlzYWJsZWRkEBUYAjAwAjAxAjAyAjAzAjA0AjA1AjA2AjA3AjA4AjA5AjEwAjExAjEyAjEzAjE0AjE1AjE2AjE3AjE4AjE5AjIwAjIxAjIyAjIzFRgCMDACMDECMDICMDMCMDQCMDUCMDYCMDcCMDgCMDkCMTACMTECMTICMTMCMTQCMTUCMTYCMTcCMTgCMTkCMjACMjECMjICMjMUKwMYZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZGQCDA8QFgIfAGQQFQwCMDACMDUCMTACMTUCMjACMjUCMzACMzUCNDACNDUCNTACNTUVDAIwMAIwNQIxMAIxNQIyMAIyNQIzMAIzNQI0MAI0NQI1MAI1NRQrAwxnZ2dnZ2dnZ2dnZ2dkZAIODxAWAh8ABQhkaXNhYmxlZBAVGAIwMAIwMQIwMgIwMwIwNAIwNQIwNgIwNwIwOAIwOQIxMAIxMQIxMgIxMwIxNAIxNQIxNgIxNwIxOAIxOQIyMAIyMQIyMgIyMxUYAjAwAjAxAjAyAjAzAjA0AjA1AjA2AjA3AjA4AjA5AjEwAjExAjEyAjEzAjE0AjE1AjE2AjE3AjE4AjE5AjIwAjIxAjIyAjIzFCsDGGdnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZxQrAQBkAg8PEBYCHwAFCGRpc2FibGVkEBUMAjAwAjA1AjEwAjE1AjIwAjI1AjMwAjM1AjQwAjQ1AjUwAjU1FQwCMDACMDUCMTACMTUCMjACMjUCMzACMzUCNDACNDUCNTACNTUUKwMMZ2dnZ2dnZ2dnZ2dnFCsBAGQCEA8QFgIfAAUIZGlzYWJsZWQQFRgCMDACMDECMDICMDMCMDQCMDUCMDYCMDcCMDgCMDkCMTACMTECMTICMTMCMTQCMTUCMTYCMTcCMTgCMTkCMjACMjECMjICMjMVGAIwMAIwMQIwMgIwMwIwNAIwNQIwNgIwNwIwOAIwOQIxMAIxMQIxMgIxMwIxNAIxNQIxNgIxNwIxOAIxOQIyMAIyMQIyMgIyMxQrAxhnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2cUKwEAZAIRDxAWAh8ABQhkaXNhYmxlZBAVDAIwMAIwNQIxMAIxNQIyMAIyNQIzMAIzNQI0MAI0NQI1MAI1NRUMAjAwAjA1AjEwAjE1AjIwAjI1AjMwAjM1AjQwAjQ1AjUwAjU1FCsDDGdnZ2dnZ2dnZ2dnZxQrAQBkAhIPEBYCHwAFCGRpc2FibGVkEBUYAjAwAjAxAjAyAjAzAjA0AjA1AjA2AjA3AjA4AjA5AjEwAjExAjEyAjEzAjE0AjE1AjE2AjE3AjE4AjE5AjIwAjIxAjIyAjIzFRgCMDACMDECMDICMDMCMDQCMDUCMDYCMDcCMDgCMDkCMTACMTECMTICMTMCMTQCMTUCMTYCMTcCMTgCMTkCMjACMjECMjICMjMUKwMYZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnFCsBAQIXZAITDxAWAh8ABQhkaXNhYmxlZBAVDAIwMAIwNQIxMAIxNQIyMAIyNQIzMAIzNQI0MAI0NQI1MAI1NRUMAjAwAjA1AjEwAjE1AjIwAjI1AjMwAjM1AjQwAjQ1AjUwAjU1FCsDDGdnZ2dnZ2dnZ2dnZxQrAQECC2QYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgoFCmNoa0VuZERhdGUFB2Noa0RheTEFB2Noa0RheTIFB2Noa0RheTMFB2Noa0RheTQFB2Noa0RheTUFB2Noa0RheTYFB2Noa0RheTcFCnJkTm9SZXBlYXQFCHJkUmVwZWF06CUBhCxN06MS0LG9+Zt4Z1ipGz4=">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="0FC67090">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWFQLfu9v5BAL6z4jVBALzj8XmDQLluv3tCgK6r+PzCwKL67yzCgLwgZ8eAunzibQNAs6K7J4DAp/Gxd4BAoTdp8kHAp+g99INAr7LwpgHArTR08ALZgLMzcvvDwLX0O+mDwL/rImoAgLsr7W1DQK4ktmNCwKrlYXFC6HYCo7cOEC//vtH0YP2xMkcM+GQ">
</div>
		            
			        <table width="100%" class="rigascura" cellpadding="0" cellspacing="0" border="0">
				
				        
				        <tbody><tr>
					        <td>
						        <table width="100%" class="rigascura" cellspacing="1" cellpadding="1" border="0">
						            <tbody>
							        <tr>
								        <td>
									        <table border="0" cellspacing="1" cellpadding="1" class="rigascura" width="100%">
									            <tbody><tr class="titoloTabella" id="youBizHelp"><td class="right"><h1 style="background-color: transparent; border-bottom: transparent; margin: 0px; line-height: 10px;"><a class="old-pageHelp" href="#" onclick="goTMHelp('jobWhen.aspx','0','7')"><img src="/resources/YouBiz/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td></tr>
										        <tr class="rigascura">
											        <td>
											        
                                                    <div><b>Validità</b></div>
											        <table border="0" cellspacing="0" class="rigascura">
												        <tbody><tr>
													        <td colspan="2" class="left">Da 
													            <input name="StartDate" type="text" id="StartDate" style="WIDTH:75px" readonly="" class="datepicker StartDateYBW new-form-control hasDatepicker">
                                                                <a class="icon-replace icon-calendar active" onclick="$('.datepicker.StartDateYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar StartDateYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1570454603346"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".StartDateYBW").datepicker();});
                                        </script> 
                                      
                                                                
													            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="chkEndDate" type="checkbox" id="chkEndDate" onclick="javascript:abilitaEndDate();">
                                                                A 
													            <input name="EndDate" type="text" id="EndDate" style="WIDTH:75px" readonly="" class="datepicker EndDateYBW new-form-control hasDatepicker">
                                                                <a class="icon-replace icon-calendar active" onclick="$('.datepicker.EndDateYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar EndDateYBW" src="/resources/YouBiz/images/calendar.png" style="display: none;" border="0" height="20" width="20" id="dp1570454603347"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".EndDateYBW").datepicker();});
                                        </script> 
                                      
                                                                
													        </td>
												        </tr>
											        </tbody></table>
											        
											        </td> 
										        </tr>
										        <tr><td>&nbsp;</td></tr>
										        <tr class="rigascura">
											        <td>
												        
                                                        <div><b>Collegamento programmato nei giorni </b></div>
												        <!--br-->
												            <input name="chkDay1" type="checkbox" id="chkDay1" value="1" checked="checked">Lun 
												            <input name="chkDay2" type="checkbox" id="chkDay2" value="2" checked="checked">Mar
												            <input name="chkDay3" type="checkbox" id="chkDay3" value="3" checked="checked">Mer 
												            <input name="chkDay4" type="checkbox" id="chkDay4" value="4" checked="checked">Gio
												            <input name="chkDay5" type="checkbox" id="chkDay5" value="5" checked="checked">Ven 
												            <input name="chkDay6" type="checkbox" id="chkDay6" value="6">Sab
												            <input name="chkDay7" type="checkbox" id="chkDay7" value="7">Dom
												        
											        </td>
										        </tr>
										        <tr class="rigascura"><td>&nbsp;</td></tr>

										        <tr class="rigascura">
											        <td>
											        
                                                    <div><b>Ripetere il collegamento </b></div>
                                                        <table class="rigascura" border="0">
                                                            <tbody><tr>
                                                                <td class="rigascura">
                                                                    <input value="rdNoRepeat" name="rdRepeat" type="radio" id="rdNoRepeat" onclick="javascript:abilitaRepeat()" checked="checked">
                                                                    una volta al giorno&nbsp;
                                                                    alle ore 
                                                                </td>
                                                                <td>
														            <select name="cboOraStartOnce" id="cboOraStartOnce" class="new-form-control">
	<option value="00">00</option>
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
</select>
														        </td>
														        <td class="txt_center">:</td>
														        <td>
														            <select name="cboMinStartOnce" id="cboMinStartOnce" class="new-form-control">
	<option value="00">00</option>
	<option value="05">05</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="35">35</option>
	<option value="40">40</option>
	<option value="45">45</option>
	<option value="50">50</option>
	<option value="55">55</option>
</select>
                                                                </td>
                                                                <td>&nbsp;</td>                                               
                                                            </tr>
                                                            <tr>
                                                                <td class="rigascura">
                                                                    <input value="rdRepeat" name="rdRepeat" type="radio" id="rdRepeat" onclick="javascript:abilitaRepeat()">più volte al giorno ogni 
                                                                </td>
                                                                <td>
												                    <select name="cboOraRepeat" id="cboOraRepeat" disabled="disabled" class="new-form-control">
	<option value="00">00</option>
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
</select>
														        </td>
														        <td>ore </td>
														        <td>
														            <select name="cboMinRepeat" id="cboMinRepeat" disabled="disabled" class="new-form-control">
	<option value="00">00</option>
	<option value="05">05</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="35">35</option>
	<option value="40">40</option>
	<option value="45">45</option>
	<option value="50">50</option>
	<option value="55">55</option>
</select>
                                                                </td>
                                                                <td>minuti</td>                                               
                                                            </tr>
                                                            <tr>
									                            <td class="rigascura right">
									                                a partire dalle ore 
									                            </td>
												                <td>
													                <select name="cboOraStart" id="cboOraStart" disabled="disabled" class="new-form-control">
	<option value="00">00</option>
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
</select>
													            </td>
													            <td class="txt_center">:</td>
													            <td>
													                <select name="cboMinStart" id="cboMinStart" disabled="disabled" class="new-form-control">
	<option value="00">00</option>
	<option value="05">05</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="35">35</option>
	<option value="40">40</option>
	<option value="45">45</option>
	<option value="50">50</option>
	<option value="55">55</option>
</select>
												                </td>
												                <td>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="rigascura right">
													                 non oltre le ore 
													            </td>
													            <td>
													                <select name="cboOraEnd" id="cboOraEnd" disabled="disabled" class="new-form-control">
	<option value="00">00</option>
	<option value="01">01</option>
	<option value="02">02</option>
	<option value="03">03</option>
	<option value="04">04</option>
	<option value="05">05</option>
	<option value="06">06</option>
	<option value="07">07</option>
	<option value="08">08</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option selected="selected" value="23">23</option>
</select>
													            </td>
													            <td class="txt_center">:</td>
													            <td>
													                <select name="cboMinEnd" id="cboMinEnd" disabled="disabled" class="new-form-control">
	<option value="00">00</option>
	<option value="05">05</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="35">35</option>
	<option value="40">40</option>
	<option value="45">45</option>
	<option value="50">50</option>
	<option selected="selected" value="55">55</option>
</select>
													            </td>
													            <td>&nbsp;</td>
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
				        <tr>
					        <td>
						        
						        
						            &nbsp;&nbsp;<input type="button" class="btn1" name="cmdSalva" value="Salva" onclick="javascript:Salva(20010)">&nbsp;
						        
					        </td>
				        </tr>
			        </tbody></table>

		        </form>
		        <form name="frmGoSched" action="sched.aspx" method="post">
			        <input type="hidden" name="pkSchedSel" value="850"> 
			        <input type="hidden" name="goTipo" value="edit_sched">
                    <input type="hidden" name="idRobot" value="390271">
                    <input type="hidden" name="dsRobot" value="RU8AJ">
		        </form>
		        <form name="frmSalvaJob" action="../common/eseguioperazione.aspx" method="post">
			        <input type="hidden" name="pkSched" value="850"> 
			        <input type="hidden" name="dtStart">
			        <input type="hidden" name="dtEnd"> 
			        <input type="hidden" name="hStart">
			        <input type="hidden" name="mStart">
			        <input type="hidden" name="hEnd">
			        <input type="hidden" name="mEnd"> 
			        <input type="hidden" name="weekDays">
			        <input type="hidden" name="hRepeat"><input type="hidden" name="mRepeat">
			        <input type="hidden" name="tm_tipo_operazione" value="tminsertjobwhen_new">
			        <input type="hidden" name="description">
			        <input type="hidden" name="pkJob" value="20010">
                    <input type="hidden" name="idRobot" value="390271">
                    <input type="hidden" name="dsRobot" value="RU8AJ">
		        </form>

		        <script language="javascript">
		            abilitaEndDate();
		        </script>
		        
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
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>