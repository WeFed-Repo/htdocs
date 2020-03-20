	<!--pagina da includere nel body per menu -->
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div><form name="Form1" method="post" action="InvoicesList.aspx" id="Form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTcxNzQ5MTk2NWRk3EOTON46EjBtBoh4LCTwdCH8v5c=">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B887CF1A">
</div>

<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0" class="old-container">
	<tbody><tr>
		<td valign="top">
        <div class="container"><div class="old-pageContent new-riquadro">
		<table align="center" border="0" width="100%">
            
            <tbody><tr>
                <td class="titoloTabella">
                <table>
                    <tbody><tr>
                        <td class="old-pageTitle page-title"><div class="new-flag"></div><h1>Documenti Addebito/Accredito<a class="old-pageHelp" href="#" onclick="goTMHelp('InvoicesList.aspx','0','3')"><img src="/resources/YouBiz/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
                    </tr>                                
                </tbody></table>
                <br>
                </td>
            </tr>
                   		    
			<tr>
				<td>
					<table border="0" width="100%">


						<tbody><tr>
							<td valign="middle" width="20">
								
                                <img src="/resources/YouBiz/images/fatture.png" border="0">
                                
							</td>
							<td valign="middle" class="testoBlackSmall left">
								<table width="100%" border="0" class="testoBlackSmall">
                                    <tbody>
									<tr>
										<td nowrap="">
											I documenti di YouBusiness Web sono scaricabili in formato Pdf e non vengono inviati a mezzo posta.<br>Hanno <b>validità ai fini fiscali</b> le stampe dei documenti <b>emessi fino al 2018</b>, le stampe dei<br>documenti emessi a partire dal 1 gennaio 2019 non hanno più validità ai fini fiscali.
										</td>
										<td class="right">

											<table border="0">
											<tbody><tr class="testoBlackSmall">
											<td width="50">&nbsp;</td>
											<td class="txt_center">
												<table cellpadding="0" cellspacing="0" width="105">
													<tbody><tr class="testoBlackSmall">
														
                                                        <td width="105" valign="middle" height="25" style="background-image:url(/resources/05034/it-IT/Accounting/img/numtel.gif)" class="txt_center"><span class="testoBlackSmall">800.901.570</span></td>
													</tr>
												</tbody></table>	

											</td><td class="txt_center">
												<table cellpadding="0" cellspacing="0">
													<tbody><tr class="testoBlackSmall">
														<!--<td align="">Per informazioni relative alla fattura di Vantaggio, <br>siamo a Vostra disposizione al numero 045-8281999 dal lunedì al venerdì, <br>dalle 8.30 alle 13.00 e dalle 14.00 alle 17.30</td>-->
														<!--<td align="">Da contattare per informazioni relative alla fattura di Vantaggio,<br>dal lunedì al venerdì dalle 8.30 alle 13.00 e dalle 14.00 alle 17.30</td>-->
														<td>è il numero verde da contattare per informazioni relative ai documenti di YouBusiness Web<br>ed è raggiungibile dal Lunedì al Venerdì, esclusi festivi, dalle ore 8.30 alle ore 17.30.<br>Dall'estero contattare il +39.02.43371269</td>
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
				</td>
			</tr>
		</tbody></table>

		<br>

		
<script type="text/javascript">
var debug = false;
var __grid_form = null;
var __grid_form_order_field_id = null;
var __grid_form_order_mode = null;
var __grid_form_order_current_page_id = null;
var __grid_form_order_num_pages = null;

function DebugParameters(ds_name)
{
if (debug && LoadForm(ds_name))
	alert(
	"\r\n__grid_form_order_field_id=" + __grid_form_order_field_id.value +
	"\r\n__grid_form_order_mode = null=" + __grid_form_order_mode.value + 
	"\r\n__grid_form_order_current_page_id=" + __grid_form_order_current_page_id.value +
	"\r\n__grid_form_order_num_pages=" + __grid_form_order_num_pages.value);
}

function LoadForm(table_name){
__grid_form = document.Form1;
__grid_form_order_field_id = eval('__grid_form.' + table_name + '__sort_field_name');
__grid_form_order_mode = eval('__grid_form.' + table_name + '__sort_type');
__grid_form_order_current_page_id = eval('__grid_form.' + table_name + '__current_page');
__grid_form_order_num_pages = eval('__grid_form.' + table_name + '__total_pages');
}
function __sortByField(tablename,sort_field_id,sort_mode){
LoadForm(tablename);
__grid_form.target = '_self';
__grid_form_order_field_id.value=sort_field_id;
__grid_form_order_mode.value=sort_mode;
__grid_form_order_current_page_id.value='0';
DebugParameters(form, tablename);
__grid_form.submit();
}

function __sortByField(tablename,sort_field_id,sort_mode){
LoadForm(tablename);
__grid_form.target = '_self';
__grid_form_order_field_id.value=sort_field_id;
__grid_form_order_mode.value=sort_mode;
__grid_form_order_current_page_id.value='0';
DebugParameters(tablename);
__grid_form.submit();
}

function __goToNextPrevPage(tablename,direzione) {
if (isNaN(direzione)){
 alert('Parametro ' + direzione + ' non valido');
 return false;
}
else {
 LoadForm(tablename);
 __grid_form.target = '_self';
 var pagina=__grid_form_order_current_page_id.value ;
 pagina=Number(pagina)+Number(direzione);
 __grid_form_order_current_page_id.value =pagina;
 DebugParameters(tablename);
 __grid_form.submit();
 return true;
}
} 
  
function __goToBegin(tablename){
LoadForm(tablename);
__grid_form.target = '_self';
__grid_form_order_current_page_id.value=0;
DebugParameters(tablename);
__grid_form.submit();
return true;
}  

function __goToEnd(tablename){
	LoadForm(tablename);
__grid_form.target = '_self';
__grid_form_order_current_page_id.value=__grid_form_order_num_pages.value-1;
DebugParameters(tablename);
__grid_form.submit();
return true;
}

function __SetPageNumber(tablename,fielditem,fieldvalue){
LoadForm(tablename);
 if ('' + eval('__grid_form.' + fielditem + '[0]')!='undefined'){
  for (var i=0;i<eval('__grid_form.'+ fielditem).length;i++){
   eval('__grid_form.'+ fielditem)[i].value=fieldvalue;
  }
 }
}

function __goToPageNumber(tablename, fielditem){
LoadForm(tablename);

var valore =null;
if ('' + eval('__grid_form.' + fielditem + '[0]')!='undefined')
	valore = eval('__grid_form.' + fielditem + '[0].value');
else
	valore = eval('__grid_form.' + fielditem + '.value');

if (isNaN(valore)){
 alert('Parametro ' + valore + ' non valido');
 return false;
}
else {
 __grid_form.target = '_self';
 __grid_form_order_current_page_id.value = Number(valore) - 1;
 DebugParameters(tablename);
 __grid_form.submit();
 return true;
}
}  
</script>
		
<input type="hidden" name="__PL_dtInvoices_PL____sort_field_name" value="ACCOUNTING_INVOICESLIST_TABLE_DATA_FATTURA"> 
<input type="hidden" name="__PL_dtInvoices_PL____sort_type" value="d">
<input type="hidden" name="__PL_dtInvoices_PL____current_page" value="0">
<input type="hidden" name="__PL_dtInvoices_PL____total_pages" value="0">
<input type="hidden" name="__PL_dtInvoices_PL____rows_per_page" value="0">

		<table class="sfondoTabelle old-table table" cellspacing="0" cellpadding="0" border="0" align="center" style="width: 100%"> 
			<tbody cellpadding="0" cellspacing="0"><tr height="20" class="titoloTabella"><td colspan="100" align="center" class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">&nbsp;Elenco Documenti </h3></td></tr>
			<tr>
				<td>
					<div class="col-xs-12 messagePanel alert" style="margin-top: 0px; margin-bottom: 0px; display: block; text-align: left !important;">
	<h3 class="titleSection">Attenzione</h3>
	<p>
		<strong>Nessuna fattura emessa per l'azienda</strong>
	</p>
</div><table border="0" cellpadding="0" cellspacing="0" class="pl_header_table" width="100%">
                    
        

					</table>
				</td>
			</tr>
		</tbody></table>

	    </div><div class="new-buttons"></div></div>
		</td>
	</tr>
</tbody></table>
    </form>
	<form id="frmDettFatture" name="frmDettFatture" method="post">
		<input type="hidden" name="pkFattura" value="">
		<input type="hidden" name="userId" value="">
	</form>

	<iframe name="download" src="../common/blank.htm" width="0" height="0" frameborder="0">
	</iframe>
	<form id="frmDownload" name="frmDownload" method="post" action="./Download.aspx" target="download">
		<input type="hidden" name="pkFattura" value="">
	</form>
      <form id="frmDownloadPolipo" name="frmDownloadPolipo" method="post" action="./DownloadPolipo.aspx" target="download">
		<input type="hidden" name="arrToken" value="">
        
	</form>
	
			
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
			
		


	
  



    <script type="text/javascript">
        $(function () {
            $("#youBizHelp h1").css("margin", "0");
            $("#youBizHelp h1").css("line-height", "10px");
            $("#youBizHelp").css("height", "25px");
            $("h1").css("behavior", "none");
        });
    </script>