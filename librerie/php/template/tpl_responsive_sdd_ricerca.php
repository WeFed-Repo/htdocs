<script type="text/javascript">	
//inizializzazione datepicker

$(function () {
	
	$("#datepickerTool2").mask("99/99/9999");
	$("#datepickerTool2").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onSelect : setMaxDate,
    onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
   appendDatePickerIcon('datepickerTool2');
    function setMaxDate(){
		var dateSelected = $("#datepickerTool2").datepicker('getDate');
		var dateSelected = (dateSelected.getDate()) + '/' + (dateSelected.getMonth() +1)  + '/' + dateSelected.getFullYear();
		console.log(dateSelected);
		$("#datepickerTool3").mask("99/99/9999");
		$("#datepickerTool3").datepicker({
		minDate: 1,
		maxDate: dateSelected,
		showOtherMonths: true,
		showOn: "button",
		prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
		nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
		buttonImage: "/img/ret/pixel_trasp.gif",
		buttonImageOnly:true,
		beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
	    onClose: function(){
	    	$('#datePickerWrapper').modal('hide');
	    }
	    })
	    appendDatePickerIcon('datepickerTool3');
	}
	
	});
	
$(function () {
	
	
	
    
    
	});
</script>
<h2>Sepa Direct Debit</h2>
<section>
	<div class="navContFirstLev outerTab">
		<div class="innerTab">
			<ul class="tabmedium">
				<li><a href="#"  href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_sdd.php&responsive=y&liv0=1&liv1=1&liv2=10&liv3=1#">inserisci nuovo mandato</a></li>
				<li class="on"><a href="#">gestione mandati</a></li>
			</ul>
		</div>
		<div class="separator"></div>
		<div class="panel-nofill">
			
			<form class="formGenerico" role="form" id="form02">
			<section>
				
					<div class="borderFormRounded">
						<div class="form-group marginBottomNone">
						<!-- UNICA RIGA CON CAMPO-->
							<div class="row">
			 					<div class="col-sm-12">
			 						<label class="control-label-output">Mandato relativo all'azienda</label>
			 						<span class="output">REGIONE LOMBARDIA</span>
			 					</div>
			 				</div>
			 			</div>
					</div>
				
			</section>
			<section>
				<div class="tithelp">
                        <h4>Ricerca</h4>
                        <br class="clear">
            </div>
            <div class="formGenerico borderFormRounded searchFilter">
                        <div class="form-group" id="standardSearch" >
                                   <div class="row">
                                               <div class="col-sm-6">
                                                           <label class="control-label">Stato</label>
                                                           <select class="form-control" name="statoDD">
                                                                       <option selected="selected"value="T">Tutti
                                                                       <option value="10">Addebitato
                                                                       <option value="41">Stornato
                                                           </select>
                                               </div>
                                               <div class="col-sm-6">
                                                           <div class="row">                                                                   
                                                                       <div class="col-sm-6">
                                                                                  <label class="control-label">Data scadenza dal</label>
                                                                                  <div class="form-inline">
                                                                                              <div class="input-group">
                                                                                                         <input type="text" class="form-control clear-x" id="datFiltro1" name="dataDa" maxlength="10" size="15"  placeholder="gg/mm/aaaa" value="">
                                                                                                         <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
                                                                                              </div>
                                                                                  </div> 
                                                                       </div>  
                                                                       <div class="col-sm-6">
                                                                                  <label class="control-label">Al</label>
                                                                                  <div class="form-inline">
                                                                                              <div class="input-group">
                                                                                                          <input id="datFiltro2" name="dataA" type="text" class="form-control clear-x" maxlength="10" size="15" placeholder="gg/mm/aaaa" value="">
                                                                                                          <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
                                                                                              </div>
                                                                                  </div>
                                                                       </div>
                                                           </div>
                                               </div>
                                   </div>                         
                                   <div class="row">
                                               <div class="form-group btnWrapper" id="linkMod" style="display:block;">
                                                <div class="btn-align-right">
                                    <a type="button" class="btn btn-primary" title="filtro lista" onclick="javascript:goToSearch();">Filtra</a>
                                                </div>
                                               </div>
                                   </div>                         
                        </div>
            </div>
				<table cellspacing="0" cellpadding="0" border="0" id="esitovecchi" class="sortableTable" data-sortable="true" data-sort-order="desc" data-sort-name="Importo" data-toggle="table">
	    <thead>
	        <tr>
	            <th class="center" data-field="accordion" style="width:20px"></th>
	            <th class="right no-border-left" data-field="Importo" data-sortable="true">Importo</th>
	            <th class="center" data-field="DataSc" data-sortable="true" data-sorter="fixDate">Data scadenza</th>
	            <th class="left" data-field="stato" data-sortable="false">Stato</th>
	        </tr>
	    </thead>
		<tbody>
			<tr class="pari">
	            <td class="center td-accordion" width="20px">
	            	<a data-toggle="collapse" href="#collapserow1" aria-expanded="false" aria-controls="collapse" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i>
	            	</a>
	            </td>
	            <td class="right no-border-left">268,03</td>
	            <td class="center">30/11/2017</td>
	            <td class="left">addebitato</td>
	         </tr>
			<tr class="dispari" width="20px">
	            <td class="center td-accordion">
	            	<a data-toggle="collapse" href="#collapserow2" aria-expanded="false" aria-controls="collapse"  class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i>
	            	</a>
	            </td>
	            <td class="right no-border-left">280,03</td>
	            <td class="center">19/11/2017</td>
	            <td class="left">addebitato</td>
	            
	        </tr>
					    </tbody>
					    	<tfoot>
							


							
							<tr id="collapserow1" class="collapse" aria-expanded="false">
								<td colspan="4">
									<div class="wrapperSubTable">
										DESCRIZIONE UNO LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT
									</div>
								</td>
							</tr>
							<tr id="collapserow2" class="collapse" aria-expanded="false">
								<td colspan="4">
									DESCRIZIONE DUELOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT

								</td>
							</tr>
							</tfoot>
					  </tbody>


					</table>
					<div class="form-group btnWrapper">
						<div class="btn-align-left">
							<a type="button" class="btn btn-default">lorem</a>
						</div>
						<div class="btn-align-right">
							<a type="button" class="btn btn-primary" id="">lorem</a>
						</div>
						<br class="clear">
					</div>
			</section>
			</form>
		</div>
	</div>
</section>






<script>
	$('#esitovecchi').bootstrapTable({
		sortable: true,
    	sortName: "Importo",
    	sortOrder: "asc",
    	onSort: function () {
        $('#esitovecchi .collapse').appendTo('#esitovecchi tfoot').removeClass('in').attr('aria-expanded','false');
   		$('#esitovecchi').delegate( "a[data-toggle=\"collapse\"]", "click", function() {$(this).toggleClass('collapsed')})
   		},
   		onPostBody: function() {
   		styleSortTable();
   		$('#esitovecchi td').on('mouseover',function(){
   			$(this).css({
   				cursor: 'pointer'
   			})
   		})
   		$('#esitovecchi tr td').eq(0).css('width','20px');
   		$('#esitovecchi tbody tr').on('click', function (event) {
   			event.stopPropagation();
   			var idToCollapse = $(this).find('a').attr('href');
   			$(idToCollapse).collapse('toggle');
  		})
  		$('#esitovecchi tr a').on('click', function (event) {
  			event.preventDefault();
  		})
   	}
	})
	//appende e rimuove righe dettaglio
	$('#esitovecchi .collapse').on('show.bs.collapse', function () {
	  idToOpen = $(this).attr('id');
	  $(this).insertAfter($("a[href='#" + idToOpen +"']").closest('tr'));
	})
	$('#esitovecchi .collapse').on('hidden.bs.collapse', function () {
	  $(this).appendTo('#esitovecchi tfoot');
	  
	})


</script>




