<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
	<head>
		<title>WeLend</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Language" content="it" />
		<link href="/prestitotitoli/css/style.css?a=223" rel="stylesheet" type="text/css" media="all">
		<script src="/js/frontEnd.js?a=223" type="text/javascript"></script>
		<script src="/wscmn/js/jquery.js?a=223" type="text/javascript"></script>
		<script type="text/javascript" src="/prestitotitoli/js/pt_utilities.js?a=223"></script>
		
		
		<script type="text/javascript">
			//document.observe("dom:loaded", function() {
				//getHeaderTable(false);
			//});
		
		
			function getHeaderTable(refresh) {
				resetHeader();
				var url = '/admin/WelendingHeaderSummary.do';
				if(refresh)
					url = url + "?forceRefresh=S";
				var urlStats = ( '/wetools'+url);				
				jqAJAXCall('POST', 'json', urlStats, fillHeaderTable, null, null);				
			}
			
			function fillHeaderTable(request) {
				var input = request;
				var data;
				var tot;
				var perc;
				var ok;
				
				$(input.monte).each(function(i,d) {
					data = d.data;
					tot = d.totale;
					$('#monte_'+data).html(tot);
				});
				
				$(input.prestiti).each(function(i,d) {
					data = d.data;
					tot = d.totale;
					perc = d.perc;
					ok = d.ok;
					
					var close_span = "</span>"
					var span;
					if(ok=="OK") {
						span = "<span style=\"color:green;\">";
					} else {
						span = "<span style=\"color:red;\">";
					}
					
					$('#prestiti_'+data).html(span + tot + " " + perc + close_span);
				});
			}
			
			function resetHeader() {
				var m = $('td[id^=monte_]');
				var p = $('td[id^=prestiti_]');
				m.each(function(index,mm) {
					$(mm).html('&nbsp;');
				});
				p.each(function(index,pp) {
					$(pp).html('&nbsp;');
				});
			}
		</script>
		
		
<style>


</style>

</head>

<!-- false -->
<body >
<div id="header">
	<div class=bglogo>
		<a title="WeLending" href="/wetools/admin/2lprt/do/admin/MonteTitoliList.do?tabId=WeL_Pri_TitPre&obsKey=WeL_Pri_TitPre_Mnt" class="blockEl">
		<h1 class=logo>
			<span>WeLending</span>
		</h1>
		</a>
	</div>
	<div class="headcenter">
		
	</div>
	<div class="cerca">
		<a class="button btnformright" title="esci" href="/wetools/admin/logoutprt.jsp"><span class="btndx"></span><span>esci</span><span class="btnsx"></span></a>
		<br class="clear" />
		<!--form>
			<fieldset class="loginField">
				<input type="text" name="cerca" id="cerca" class="loginInput" value="- campo ricerca -" onfocus="if (this.value == '- campo ricerca -') {this.value='';}" onblur="if (this.value == '') {this.value='- campo ricerca -';};">
				<a class="btninvia" href="#"><img src="/prestitotitoli/img/str_bg_invia.gif" alt="cerca" /></a>
			</fieldset>
		</form-->
	</div>
</div>
<ul id="menu">

	
				<li class="vociFirstlevel" >
					<a href="/wetools/admin/2lprt/do/admin/MonteTitoliList.do?tabId=WeL_Pri_TitPre&obsKey=WeL_Pri_TitPre_Mnt"  onclick="selected(this)">Titoli Prestabili</a>
					

				<ul class="sottomenu" id="" >					

								<li class="vociSecondlevel" >
										<img src="/prestitotitoli/img/ico1gr_menusecond_left_on.gif" style="visibility: hidden;" />
											<a href="/wetools/admin/2lprt/do/admin/MonteTitoliList.do?tabId=WeL_Pri_TitPre&obsKey=WeL_Pri_TitPre_Mnt" onclick="selectedSecond(this)" class="">Monte Titoli</a>
										<img src="/prestitotitoli/img/ico1gr_menusecond_right_on.gif" style="visibility: hidden;" />
									</li>
					
				</ul>	

				</li>
			
	
				<li class="vociFirstlevel" >
					<a href="/wetools/admin/2lprt/do/admin/PrestitiList.do?tabId=WeL_Pri_MyP&obsKey=WeL_Pri_MyP_PrA"  onclick="selected(this)">I miei prestiti</a>
					

				<ul class="sottomenu" id="" >					

								<li class="vociSecondlevel" >
										<img src="/prestitotitoli/img/ico1gr_menusecond_left_on.gif" style="visibility: hidden;" />
											<a href="/wetools/admin/2lprt/do/admin/PrestitiList.do?tabId=WeL_Pri_MyP&obsKey=WeL_Pri_MyP_PrA" onclick="selectedSecond(this)" class="">Prestiti Attivi</a>
										<img src="/prestitotitoli/img/ico1gr_menusecond_right_on.gif" style="visibility: hidden;" />
									</li>

								<li class="vociSecondlevel" >
										<img src="/prestitotitoli/img/ico1gr_menusecond_left_on.gif" style="visibility: hidden;" />
											<a href="/wetools/admin/2lprt/do/admin/RichiesteList.do?tabId=WeL_Pri_MyP&obsKey=WeL_Pri_MyP_Ric" onclick="selectedSecond(this)" class="">Richieste</a>
										<img src="/prestitotitoli/img/ico1gr_menusecond_right_on.gif" style="visibility: hidden;" />
									</li>

								<li class="vociSecondlevel" >
										<img src="/prestitotitoli/img/ico1gr_menusecond_left_on.gif" style="visibility: hidden;" />
											<a href="/wetools/admin/2lprt/do/admin/PrestitiRecallList.do?tabId=WeL_Pri_MyP&obsKey=WeL_Pri_MyP_TiR" onclick="selectedSecond(this)" class="">Titoli in recall</a>
										<img src="/prestitotitoli/img/ico1gr_menusecond_right_on.gif" style="visibility: hidden;" />
									</li>
					
				</ul>	

				</li>
			
	
				<li class="vociFirstlevel" >
					<a href="/wetools/admin/2lprt/do/admin/ReportsList.do?tabId=WeL_Pri_Rep&obsKey=WeL_Pri_Rep"  onclick="selected(this)">Report</a>
					

				<ul class="sottomenu" id="" >					
					
				</ul>	

				</li>
			
	
				<li class="vociFirstlevel" >
					<a href="/wetools/admin/2lprt/do/admin/LongOvernightLoansList.do?tabId=WeL_Pri_Lov&obsKey=WeL_Pri_Lov_Poa"  onclick="selected(this)">Long Overnight</a>
					

				<ul class="sottomenu" id="" >					

								<li class="vociSecondlevel" >
										<img src="/prestitotitoli/img/ico1gr_menusecond_left_on.gif" style="visibility: hidden;" />
											<a href="/wetools/admin/2lprt/do/admin/LongOvernightLoansList.do?tabId=WeL_Pri_Lov&obsKey=WeL_Pri_Lov_Poa" onclick="selectedSecond(this)" class="">Posizione Aperte</a>
										<img src="/prestitotitoli/img/ico1gr_menusecond_right_on.gif" style="visibility: hidden;" />
									</li>

								<li class="vociSecondlevel" >
										<img src="/prestitotitoli/img/ico1gr_menusecond_left_on.gif" style="visibility: hidden;" />
											<a href="/wetools/admin/2lprt/do/admin/LongOvernightReportsList.do?tabId=WeL_Pri_Lov&obsKey=WeL_Pri_Lov_Rep" onclick="selectedSecond(this)" class="">Report</a>
										<img src="/prestitotitoli/img/ico1gr_menusecond_right_on.gif" style="visibility: hidden;" />
									</li>
					
				</ul>	

				</li>
			
	
				<li class="vociFirstlevel on"" id="fst">
					<a href="/wetools/admin/2lprt/do/admin/AllIn.do?tabId=WeL_Pri_Aog&obsKey=WeL_Pri_Aog_Ain" class="active" onclick="selected(this)">Apri oggi</a>
					

				<ul class="sottomenu" id="secondUl"" style="display: block;">					

								<li class="vociSecondlevel sel"" id="secondfst">
										<img src="/prestitotitoli/img/ico1gr_menusecond_left_on.gif" style="visibility: visible;" />
											<a href="/wetools/admin/2lprt/do/admin/AllIn.do?tabId=WeL_Pri_Aog&obsKey=WeL_Pri_Aog_Ain" onclick="selectedSecond(this)" class="selected">All in</a>
										<img src="/prestitotitoli/img/ico1gr_menusecond_right_on.gif" style="visibility: visible;" />
									</li>
					
				</ul>	

				</li>
			

				
</ul>	
		<div id="contenuti">
			<div id="content">
	<script src="/wscmn/js/ret/setiframe.js" type="text/javascript"></script>
	<script type="text/javascript">
	<!--
		var larghezza = 980;
		var frames = new Array();
		var principale = new Object();
		frames[0] = top;
		frames[1] = top;

		function getPrincipale() {
			return principale;
		}

		function setPrincipale(p) {
			principale = p;
			principale.document = p;
			frames[2] = principale;
		}
	//-->
	</script>

	<p>


<script type="text/javascript">

	function checkAll(formname)
	{
		//alert("porto tutti a " + document.DATI.checc.value);
	  var checkboxes = new Array(); 
	  checkboxes = document[formname].getElementsByTagName('input');
	  var flag= false;
	  if (document.DATI.checc.value == 'ok') {
		  flag= true;
		  document.DATI.checc.value='ko';
	  	}else{
	  		flag= false;
	  		document.DATI.checc.value = 'ok';
	  	}
	  for (var i=0; i<checkboxes.length; i++)  {
	    if (checkboxes[i].type == 'checkbox'){
	      		checkboxes[i].checked = flag;
	    	}
	    }
	}
	function cerca() {
		document.DATI.keep.value="yes";
		document.DATI.action="AllIn.do";
		document.DATI.submit();
	}
	
	function apri() {
		document.DATI.keep.value="yes";
		document.DATI.action="AllInConfirm.do?tabId=WeL_Pri_Aog&obsKey=WeL_Pri_Aog_Ain";
		document.DATI.submit();
	}

	function cercaPerData(valueDate) {
		document.DATI.valueDate.value=valueDate;
		document.DATI.keep.value="yes";
		document.DATI.action="AllIn.do";
		document.DATI.submit();
	}
	
	function cercaBond(isBond) {
		document.DATI.bond.value=isBond;
		document.DATI.keep.value="yes";
		document.DATI.action="AllInConfirm.do?tabId=WeL_Pri_Aog&obsKey=WeL_Pri_Aog_Ain";
		document.DATI.submit();
	}

	function esporta() {
		var form=document.DATI;
		form.action='/wetools/admin/AllIn.do';
		form.submit();
	}

	function setMarket_desc(select) {
		document.DATI.market_desc.value=select.options[select.selectedIndex].text;
	}
	
	
	function checkQuantita(obj)
	{	 
	  var hidden=$(obj).next("input");
	  var qtaMinima=parseInt($(obj).attr("qtaMinima"));
	  var lottoMinimo=parseInt($(obj).attr("lottoMinimo"));
	  var qtaTotale=parseInt($(obj).attr("qtaTotale"));
	  var qta=parseInt($(obj).val());
	  
	  if(qta<qtaMinima){
		  alert('La quantità chiesta in prestito è inferiore al minimo negoziabile.');
		  $(obj).val($(hidden).val());
	  }
	  else if(qta%qtaMinima!=0){
		  alert('La quantità chiesta in prestito non è multiplo del minimo negoziabile.');
		  $(obj).val($(hidden).val());
	  }
	  else if(qta>qtaTotale){
		  alert('La quantità chiesta in prestito è superiore alla disponibilità in monte titoli.');
		  $(obj).val($(hidden).val());
	  }
	  else {
		  $(hidden).val($(obj).val()); 
	  }
	}
	
	function aggiornaCTVTOT(){
		 //alert("entro in aggiornaCTVTOT");
		 var av = new Array(); 
		 av=document.getElementsByName("open");
		 var somma= 0;
		 //alert("trovati n " + av.length + " checkbox open");
		 for (e=0;e<av.length;e++) {
			 if (av[e].checked==true) {
		   		//alert("includo nel calcolo campo open"+av[e].value);
		   		//eval("document.forms[0].mySentence" + sentenceCount + ".value")
		   		somma= somma+ ( eval("document.DATI.telq"+av[e].value+".value") * eval("document.DATI.openQ"+av[e].value+".value") / 100 );
			 }
		  }
		 //alert("somma totale=" + somma.toFixed(2));
		 //alert( document.getElementById("CTV_TOT1").InnerHTML);
		 $('#CTV_TOT1').html(somma.toFixed(2))
		 //document.getElementById('CTV_TOT1').InnerHTML=somma.toFixed(2);
	} 
	
</script>

	<div class="wtcontent">
	
	<form name="DATI" method="post" action="" onsubmit="cerca()">
		

<input name="tabId"	type="hidden"	value="WeL_Pri_Aog" />
<input name="obsKey"	type="hidden"	value="WeL_Pri_Aog_Ain" />

<input name="OBSCNT"	type="hidden"	value="" />
<input name="cf"	type="hidden"	value="0.43486548971120087" />
<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />

		<input type="hidden" name="keep" value=""/>
		<input type="hidden" name="checc" value="ok" />
		<input type="hidden" name="valueDate" value="2013-05-15">
		<input type="hidden" name="market_desc" value="MTA"/>
		<input type="hidden" name="bond" value="true">
		
		<table class="inputtable" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<th colspan="2">Inserisci i parametri di ricerca</th>
				</tr>
				<tr>
					<td>
						<fieldset>
							<label>MERCATO</label>
								<select name="market" onchange="javascript:setMarket_desc(this);">
								<option value="" selected>Tutti i mercati</option>
								
										<option value="011" >MTA</option>
								
										<option value="012" >MOT</option>
								
										<option value="018" >OTC</option>
								
										<option value="018" >AKIS</option>
								
										<option value="020" >MTA-TAH</option>
								
										<option value="026" >BEL</option>
								
										<option value="036" >ETLX</option>
								
										<option value="053" >IBEX</option>
								
										<option value="059" >SBF</option>
								
										<option value="078" >AEX</option>
								
										<option value="144" >XETRA</option>
								
										<option value="000" >Fuori Mercato</option>
								
								</select>
						</fieldset>
					</td>
					<td>
						<fieldset>
							<label>ISIN</label>
							<input type="text" name="isin" size="40" maxlength=12 value=""/>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td>
						<fieldset>
							<label>DESCRIZIONE</label>
							<input type="text" name="description" size="60" value=""/>
						</fieldset>
					</td>
					<td>
						<fieldset>
							<label>CONTROVALORE</label>
							da 
							<input type="text" name="ctv_int" size="10" maxlength=20 value="0"/>,
							<input type="text" name="ctv_dec" size="2" maxlength=2 value="00"/>
							 a 
							<input type="text" name="ctv_int_max" size="10" maxlength=20 value="0"/>,
							<input type="text" name="ctv_dec_max" size="2" maxlength=2 value="00"/>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<fieldset>
							<label>TIPO</label>
							<select name="type">
								
									<option value="999999-999999-999999" 
									>Tutti i tipi</option>
								
									<option value="1-1-1" 
									>OBBLIGAZIONI - OBBL.ITALIA</option>
								
									<option value="1-2-1" 
									>OBBLIGAZIONI - OBBL.DOMEST. ESTERO</option>
								
									<option value="1-3-11" 
									>OBBLIGAZIONI - EUROBBL.EMESSE IN IT</option>
								
									<option value="1-5-1" 
									>OBBLIGAZIONI - TITOLI DI STATO ITA</option>
								
									<option value="1-8-12" 
									>OBBLIGAZIONI - TIT.STATO ITALIA V.E</option>
								
									<option value="2-1-1" 
									>AZIONI ITALIANE</option>
								
									<option value="2-2-1" 
									>AZIONI ESTERE</option>
								
									<option value="4-4-1" 
									>ETF - ITALIANI - EURO</option>
								
									<option value="4-5-1" 
									>ETF - ITALIANI - DIVISA</option>
								
									<option value="4-6-1" 
									>ETF-ARMONIZZATI ESTE - EURO</option>
								
									<option value="4-7-1" 
									>ETF-ARMONIZZATI ESTE - DIVISA</option>
								
									<option value="4-8-1" 
									>ETF NON ARMONIZ ESTE - EURO</option>
								
									<option value="4-9-1" 
									>ETF NON ARMONIZ ESTE - DIVISA</option>
								
							</select>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td>
						<fieldset>
							<label>ELIGIBLE</label>
							<select name="eligible">								
								<option value="true" >SI</option>
								<option value="false" >NO</option>
								<option value="" selected="selected">TUTTI</option>
							</select>							
						</fieldset>
					</td>
					<td>
						<fieldset>
							<label>BUFFER MINIMO</label>
							<input type="text" name="buffer" size="10" maxlength="20" value="100.000"/>,
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
		
		<div class="buttonpanel">
			<a class="button" href="javascript:cerca();">CERCA</a>
			<a class="button" href="javascript:esporta();">ESPORTA</a>
		</div>
		
		<br class="clear">
										
		
		<div class="divtabellalist">
			<div style="float:right;">
				<table class="resulttable" cellspacing="0" cellpadding="0">
					<tr class="oro2">
						<td>* ELIGIBLE</td>
					</tr>
				</table>
			</div>
			
			<table border="0" class="tabellalist">
				<tbody><tr>																	
					<td class="off first">OBBLIGAZIONI</td>
					<td class="end"></td>
				</tr>
			</tbody></table>
			
			
			
			<table border="0" class="tabellabgsublist">
				<tbody><tr>
					<td width="6"><img alt="" src="/prestitotitoli/img/bg_subtab_left.gif" class="sx"></td>				
					<td>
						<table border="0" class="tabellasublist">
							<tbody><tr>
									
									<td class="on 
										first"><a href="javascript:cercaPerData('2013-05-15')" title="">
										15/05/2013</a>
									</td>
									
									<td class="off 
										"><a href="javascript:cercaPerData('2013-05-16')" title="">
										16/05/2013</a>
									</td>
										
							</tr>
						</tbody></table>
					</td>
					<td width="6"><img alt="" src="/prestitotitoli/img/bg_subtab_right.gif" class="sx"></td>
				</tr>
			</tbody></table>
		</div>
				
		
		
			
								
				<div class="selez_top">
					<img class="sx" alt="" src="/prestitotitoli/img/bg_selez_top_left.gif">
					<img class="dx" alt="" src="/prestitotitoli/img/bg_selez_top_right.gif">
					<div class="selez_link">
						CTV Nuovi Prestiti <label id="CTV_TOT1">0000000</label> &nbsp;&nbsp;&nbsp;<a href="javascript:void()" onclick="javascript:apri();">Apri Prestiti</a>
					</div>
					<br class="clear">
				</div>
				<table class="resulttable" cellspacing="0" cellpadding="0">
					<tbody>
						<tr>
													
							<th width="220">DESCRIZIONE</th>
							<th>ISIN</th>
							<th>PRZ</th>
							
							<th>MKT</th>
							<th>MONTE</th>
							<th>CTV</th>
							<th width="104">Q.T&Agrave;<br/>DA APRIRE</th>
							<th>Q.T&Agrave;<br/>DISP</th>
							<th width="104">Q.T&Agrave;<br/>DA APRIRE</th>
							<th width="90" class="right">AZIONI    <input type="checkbox" name="all" onclick="checkAll('DATI')"></th>
						</tr>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						  
						
						  
						
						  
							
							<tr class="espandibile oro2" >
															
								<td style="">BOT SCAD 14/06/2013 ANNUALE  (364 GG) </td>
								<td style="">IT0004822034</td>
								<td style="" title="Data ultimo prezzo: 15/04/2013">99,978</td>
								
									<input type="hidden" name="telq61" value="99.97800">
								
								<td style="">MOT</td>
								<td style="">347.000</td>
								<td style="">346.923,66</td>
								<td style="">7.000</td>
								<td style="">340.000</td>
										<td style=""> 
										<input type="text" value="240000" name="openQ61" size='15' lottoMinimo="0" qtaMinima="1000" qtaTotale="340000" onChange="checkQuantita(this);aggiornaCTVTOT()"> 
										<input type="hidden" value="240000" name="hidden_openQ61"/>
										</td>
									<td class="right">
										
											<input type="checkbox" name="open" value="61" onclick="aggiornaCTVTOT()">
										
									</td>	
							</tr>
							
						  	
						  
							
							<tr class="espandibile oro" >
															
								<td style="">BOT SCAD 14/08/2013 ANNUALE  (364 GG) </td>
								<td style="">IT0004844608</td>
								<td style="" title="Data ultimo prezzo: 15/04/2013">99,871</td>
								
									<input type="hidden" name="telq62" value="99.87100">
								
								<td style="">MOT</td>
								<td style="">223.000</td>
								<td style="">222.712,33</td>
								<td style="">3.000</td>
								<td style="">220.000</td>
										<td style=""> 
										<input type="text" value="120000" name="openQ62" size='15' lottoMinimo="0" qtaMinima="1000" qtaTotale="220000" onChange="checkQuantita(this);aggiornaCTVTOT()"> 
										<input type="hidden" value="120000" name="hidden_openQ62"/>
										</td>
									<td class="right">
										
											<input type="checkbox" name="open" value="62" onclick="aggiornaCTVTOT()">
										
									</td>	
							</tr>
							
						  	
						  
							
							<tr class="espandibile oro2" >
															
								<td style="">BOT SCAD 14/10/2013 ANNUALE  (364 GG) </td>
								<td style="">IT0004854888</td>
								<td style="" title="Data ultimo prezzo: 15/04/2013">99,752</td>
								
									<input type="hidden" name="telq63" value="99.75200">
								
								<td style="">MOT</td>
								<td style="">131.000</td>
								<td style="">130.675,12</td>
								<td style="">1.000</td>
								<td style="">130.000</td>
										<td style=""> 
										<input type="text" value="30000" name="openQ63" size='15' lottoMinimo="0" qtaMinima="1000" qtaTotale="130000" onChange="checkQuantita(this);aggiornaCTVTOT()"> 
										<input type="hidden" value="30000" name="hidden_openQ63"/>
										</td>
									<td class="right">
										
											<input type="checkbox" name="open" value="63" onclick="aggiornaCTVTOT()">
										
									</td>	
							</tr>
							
						  	
						  
						
						  
						
						  
						
						  
							
							<tr class="espandibile oro" >
															
								<td style="">BOT SCADENZA 14/05/2013 ANNUALI (364 GIORNI) </td>
								<td style="">IT0004815814</td>
								<td style="" title="Data ultimo prezzo: 15/04/2013">99,981</td>
								
									<input type="hidden" name="telq67" value="99.98100">
								
								<td style="">MOT</td>
								<td style="">122.000</td>
								<td style="">121.976,82</td>
								<td style="">2.000</td>
								<td style="">120.000</td>
										<td style=""> 
										<input type="text" value="20000" name="openQ67" size='15' lottoMinimo="0" qtaMinima="1000" qtaTotale="120000" onChange="checkQuantita(this);aggiornaCTVTOT()"> 
										<input type="hidden" value="20000" name="hidden_openQ67"/>
										</td>
									<td class="right">
										
											<input type="checkbox" name="open" value="67" onclick="aggiornaCTVTOT()">
										
									</td>	
							</tr>
							
						  	
						  
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					</tbody>
				</table>
				
				<div class="selez_bottom">
					<img class="sx" alt="" src="/prestitotitoli/img/bg_selez_bottom_left.gif">
					<img class="dx" alt="" src="/prestitotitoli/img/bg_selez_bottom_right.gif">
					<div class="selez_link">
						CTV Nuovi Prestiti <label id="CTV_TOT3">0000000</label> &nbsp;&nbsp;&nbsp;<a href="javascript:void()" onclick="javascript:apri();">Apri Prestiti</a>
					</div>
					<br class="clear">
				</div>

			
		
	
	</form>
	<br class="clear">
</div>
	</p>
</div>
</div>

	<div id="footer">
		<div class="bgfooter">
			<div class="bglogo_footer">
				<a title="WeBank" href="#1" class="blockEl">
					<h2 class="logo">
						<span>WeBank</span>
					</h2>
				</a>
			</div>
			<p>&copy; We/Bpm lending all copyright reserved by Webank spa</p>
			<div class="footer_vuoto">&nbsp;</div>
		</div>
	</div>


</body>
</html>