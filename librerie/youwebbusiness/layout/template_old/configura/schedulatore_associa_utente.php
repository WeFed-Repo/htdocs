<!--pagina da includere nel body per menu -->
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div>
    <div id="pp">
    </div>
    <table height="100%" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" class="old-container">
        <tbody><tr valign="top">
            <td>
                <div class="container"><div class="old-pageContent new-riquadro">
                <table height="100%" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
                    <tbody><tr valign="top">
                        <td>
                            <table cellspacing="0" cellpadding="0" border="0" align="center" height="100%" width="100%">
                                <tbody><tr valign="top" height="10">
                                    <td>
                                        <table width="100%" cellspacing="0" cellpadding="2" border="0">
                                            <tbody><tr>
                                                <td width="33%" class="right">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                
			                    <tr>
				                    <td height="19" colspan="2" class="pageTitle old-pageTitle page-title left" nowrap=""><div class="new-flag"></div><h1>Associa Utente</h1></td>
			                    </tr>
                                

                                <tr>
                                    <td valign="top">
                                        <table height="100%" cellspacing="0" cellpadding="0" border="0" class="sfondoTabelle">
                                            <tbody><tr>
                                                <td colspan="2" height="20" class="titoloTabella txt_center">
                                                    &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <table cellspacing="1" cellpadding="1" border="0" width="100%" height="100%" class="sfondotabelle">
                                                        <tbody><tr>
                                                            <td class="interno_2 txt_center" valign="top">
                                                                <table width="98%" border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody cellpadding="0" cellspacing="0"><tr cellpadding="0" cellspacing="0">
                                                                        <td class="left">
                                                                            
                                                                            <span class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">Informazioni Schedulatore</h3></span><br>
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top">
                                                                            <div id="tblTesto">
                                                                                <table width="100%" border="0" class="testoBlackSmall old-table table" cellpadding="0" cellspacing="0">
                                                                                    <tbody><tr>
                                                                                        <td class="testoBlackSmall left" valign="top">
                                                                                            
			<b>ASSOCIAZIONE UTENTE:</b>
			<br>
      <br>
      L'associazione dell'utente master deve essere effettuata in fase di prima installazione dello Schedulatore.
      <br>
      <br>
      <span style="text-decoration: underline">ATTENZIONE</span>: Effettuata l'associazione utente è necessario procedere con la sincronizzazione tramite l'"Applicazione Schedulatore YouBusiness Web" installata sul computer. Per il corretto funzionamento dello Schedulatore lo Stato
      dell'Utente deve risultare "Sincronizzato".
		
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            &nbsp;
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <form id="frmOperatoreScheduler" name="frmOperatoreScheduler" method="post">
                                                                                                     
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
__grid_form = document.frmOperatoreScheduler;
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
						                                                                             
<input type="hidden" name="__PL_elencodataop_PL____sort_field_name" value="IDRES_PAGE_OPERATORI_SCHEDULER_PAGELIST_TITLE_OPERATORE_COMPLETE"> 
<input type="hidden" name="__PL_elencodataop_PL____sort_type" value="a">
<input type="hidden" name="__PL_elencodataop_PL____current_page" value="0">
<input type="hidden" name="__PL_elencodataop_PL____total_pages" value="1">
<input type="hidden" name="__PL_elencodataop_PL____rows_per_page" value="10">

                                                                                                   <input type="hidden" name="tm_tipo_operazione" id="tm_tipo_operazione">
                                                                                                   <input type="hidden" name="nOpPage" value="10">
                                                                                                   <input type="hidden" name="PageSelected" value="-1">
                                                                                                   <input type="hidden" name="strListIDOp" value="">
                                                                                                   <input type="hidden" name="toretstatoDiv" value="">
                                                                                                   <input type="hidden" name="tm_idApplicazione" value="28">
		                                                                                           <input type="hidden" name="tm_idSubApplicazione" value="0">
                       
                                                                                                   <script type="text/javascript">
                                                                                                       function goOpPage(nOp) {
                                                                                                           document.frmOperatoreScheduler.toretstatoDiv.value = 'block';//$('#tblTesto').css('display');
                                                                                                           document.frmOperatoreScheduler.nOpPage.value = nOp;
                                                                                                           document.frmOperatoreScheduler.PageSelected.value = '0';
                                                                                                           document.frmOperatoreScheduler.submit();
                                                                                                       }
                                                                                                       function SetAbilitaOp(idOp) {
                               
                                                                                                           var retVal;
                                                                                                           retVal = confirm("Attenzione!\nProseguendo il servizio Schedulatore\n\rverra' associato all'utente selezionato.\nSi desidera procedere?");
                                                                                                           if (retVal==true) {
                                                                                                               document.frmOperatoreScheduler.tm_tipo_operazione.value="tm_operation_attiva_schedulatore_operatore" ;
                                                                                                               document.frmOperatoreScheduler.strListIDOp.value = idOp;
                                    
                                                                                                               document.frmOperatoreScheduler.toretstatoDiv.value = 'block';//$('#tblTesto').css('display');
                                    
                                                                                                               document.frmOperatoreScheduler.PageSelected.value = '0';
                                                                                                               document.frmOperatoreScheduler.action="../eseguioperazione.aspx";
                                                                                                               document.frmOperatoreScheduler.submit();           
                                                                                                           }
                                                                                                       }

                                                                                                       function SetDisabilitaOp(idOp) {
                                                                                                           var retVal;
                                                                                                           retVal = confirm("Attenzione!\nProseguendo verrà disabilitato lo schedulatore.\nSi desidera procedere?");
                                                                                                           if (retVal==true) {
                                                                                                               document.frmOperatoreScheduler.tm_tipo_operazione.value = "tm_operation_disattiva_schedulatore_operatore";
                                                                                                               document.frmOperatoreScheduler.strListIDOp.value = idOp;
                                    
                                                                                                               document.frmOperatoreScheduler.toretstatoDiv.value ='block';// $('#tblTesto').css('display');

                                                                                                               document.frmOperatoreScheduler.PageSelected.value = '0';
                                                                                                               document.frmOperatoreScheduler.action = "../eseguioperazione.aspx";
                                                                                                               document.frmOperatoreScheduler.submit();
                                                                                                           }
                                                                                                       }

                                                                                                   </script>

                                                                                                   <table width="100%" border="0" id="tblOperatori">
                                                                                                       <tbody><tr class="testoBlackSmallBold">
                                                                                                        
					                                                                                   </tr>
                                                                                                       <tr>
								                                                                            <td>
									                                                                            <table class="sfondoTabelle" cellspacing="0" cellpadding="0" border="0" align="center"> 
										                                                                            <tbody cellpadding="0" cellspacing="0"><tr height="20" class="titoloTabella"><td colspan="100" align="center" class="old-sectionTitle" style="padding-left: 0px;"><h3 class="new-titleSection">&nbsp;Associazione Utente</h3></td></tr>
										                                                                            <tr>
											                                                                            <td>
												                                                                            <table border="0" cellspacing="0" class="pl_header_table" width="100%" cellpadding="0">
												                                                                            
                                                                                                                                <tbody><tr>
                                                                                                                                    
<th colspan="1">
    <table border="0" class="pl_header" cellpadding="1" cellspacing="0">
     <tbody><tr>
      <td nowrap="" colspan="2" valign="top" class="txt_center">
       <b></b>
      </td>
		 </tr>
		 <tr>
      <td valign="top" class="right">
       <img border="0" src="/resources/YouBiz/images/i_sort_asc-disabled.png" width="20" class="right">
      </td>
      <td valign="top" class="left">
       <a href="#" onclick="javascript:__sortByField('__PL_elencodataop_PL__','IDRES_PAGE_OPERATORI_SCHEDULER_PAGELIST_TITLE_OPERATORE_COMPLETE','d')"><img border="0" src="/resources/YouBiz/images/i_sort_desc-enabled.png" alt="Ordinamento descrescente" width="20" class="left"></a>
      </td>
     </tr>
    </tbody></table>
</th><th colspan="1"></th><th colspan="1"><b>Stato</b></th><th colspan="1"></th><th colspan="1"><b>Data ultimo accesso</b></th><th colspan="1"></th><th colspan="1"><b>Data Impostazione Chiave Privata</b></th><th colspan="1"></th>
<th colspan="1">
    <table border="0" class="pl_header" cellpadding="0" cellspacing="0">
     <tbody><tr>
      <td nowrap="" valign="top" class="txt_center">
       <b>Azione</b>
      </td>
		 </tr>
		 <tr>	
      <td valign="top" class="right">&nbsp;</td>
		</tr>
	 </tbody></table>
</th>
                                                                                                                                </tr>
                                                                                                                                <tr class="odd"><td class="left">&nbsp;RU8AJ-MARIO ROSARIO VERDEROSA</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center">Non attivo</td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center"></td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center"></td><td class="txt_center"></td><td nowrap="" class="pl_txt txt_center"><a href="#" onclick="javascript:SetAbilitaOp('390271');">Attiva</a></td></tr>
                                                                                                                                
												                                                                            </tbody></table>
											                                                                            </td>
										                                                                            </tr>                                        
									                                                                            </tbody></table>
								                                                                            </td>
							                                                                            </tr>
							                                                                            <tr><td>&nbsp;</td></tr>
							                                                                            <tr>
								                                                                            <td>
									                                                                            <table id="tblNavigator" width="100%" cellpadding="0" cellspacing="0">
									                                                                                
									                                                                            </table>
								                                                                            </td>
							                                                                            </tr>
                                                                                                   </tbody></table>
                       
                                                                                            </form>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </div>
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
                                <tr height="10">
                                    <td>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
                </div><div class="new-buttons"></div></div>
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

    
    <script type="text/javascript">
        
    </script>

    </tbody></table>
