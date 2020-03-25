<h2>Saldo e movimenti</h2>

<section>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_saldo_mov.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">saldo e <br>movimenti</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_extra_max.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">extraPrelievo<br> e Massimali</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_profilo_internazionale.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">profilo<br> internazionale</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_sicurezza.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">sicurezza<br> ed estinzione</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_stato_pratica.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">stato pratica</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>
	<div class="panel-nofill">

<!-- TESTO INTRODUTTIVO-->	
	<section>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe mollitia nesciunt voluptates commodi quam, hic explicabo non, et. At maxime distinctio alias dolores necessitatibus temporibus perferendis ab quidem deserunt rerum!</p>
		<ul>
			<li>Consectetur adipisicing elit. Sed, aperiam!</li>
			<li>Lorem ipsum dolor sit amet.</li>
		</ul>
	</section>
<!-- FINE TESTO INTRODUTTIVO-->	
	
<!-- PARAMETRI DI RICERCA-->
	<script type="text/javascript">
	/* Inizializzazioni */
	$(function(){
		/* Emulazione interattivita' in pagina*/
		$("#ricercaSwitch").click(function(){
			var rSem = $("#ricercaSemplice"),
			rAva= $("#ricercaAvanzata"),
			rSwi = $(this);
			if (rSwi.hasClass("avanzata")) {
				rSwi.removeClass("avanzata").html("ricerca avanzata");
				rAva.hide();
				rSem.show();
			}
			else
			{
				rSwi.addClass("avanzata").html("ricerca semplice");
				rAva.show();
				rSem.hide();
			}
		});
		$("#ricercaSwitch2").click(function(){
			$('#ricercaSwitch').trigger('click');
			$("html, body").animate({scrollTop: $('#ricercaAncora').eq(0).offset().top})
		});
		
		$("#datepickerToolTo").mask("99/99/9994");
		$("#datepickerToolTo").datepicker({
			minDate: 1,
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
	    appendDatePickerIcon('datepickerToolTo');


		/*inizializzazione datePicker */
	 	$("#datepickerToolFrom").mask("99/99/9999");
	 	$("#datepickerToolFrom").datepicker({
			minDate: 1,
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
	    appendDatePickerIcon('datepickerToolFrom');
    	/*tootlip saldi */
	    formatDataString = function (dataString) {
			return dataString.substr(0, 2) + '/' + dataString.substr(2, 2) + '/' + dataString.substr(4, 4);
		};

	    $('#saldoDisp').click(function(eRif, elRif) 
	    {
			$.ajax({
			url: '/librerie/include/commons/ajax/movimenti/situazioneConti.php',
        	dataType: 'json',
        	success: function (data, eRif, elRif) {
				$('.loadingDet').hide();
				$('#saldoText .spacer').show();
				var saldiDetailText = $('#saldoText');
				saldiDetailText.find('.CCdataT1:first').html(formatDataString(data.dataT1));
				saldiDetailText.find('.CCdataT2:first').html(formatDataString(data.dataT2));
				saldiDetailText.find('.CCdataT3:first').html(formatDataString(data.dataT3));
				
				saldiDetailText.find('.CCsaldoT1:first').html(format2DecNum(moveToInteger(data.margineT1)));
				saldiDetailText.find('.CCsaldoT2:first').html(format2DecNum(moveToInteger(data.margineT2)));
				saldiDetailText.find('.CCsaldoT3:first').html(format2DecNum(moveToInteger(data.margineT3)));
			},
			error: function(e) {
				$('#saldoText .spacer').hide();
         		console.log(e.responseText);
		  	}
        	})
        })
	    })

</script>
	<section id="ricercaAncora">
		<div class="row">
			<div class="col-xs-6">
				<h4>Parametri di ricerca</h4>
			</div>
			<div class="col-xs-6 align-right">
				<a href="javascript:;" id="ricercaSwitch">ricerca avanzata</a>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<form class="formGenerico borderFormRounded searchFilter" role="form">
					<!-- Ricerca semplice -->
					<div id="ricercaSemplice">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-3 col-xs-12">
									<label class="control-label">Numero carta</label>
									<div class="row">
										<div class="col-xs-9 col-md-9 col-sm-9 col-lg-9">
											<span class="output">***123</span>
										</div>
									</div>
								</div>
								<div class="col-sm-3 col-xs-12">
									<label class="control-label">Periodo</label>
									<select class="form-control">
										<option>lorem ipsum</option>
										<option>lorem</option>
										<option>lorem</option>
									</select>
								</div>
								<div class="col-sm-4 col-xs-12">
									<label class="control-label">Tipo movimenti</label>
									<select class="form-control">
										<option>lorem ipsum</option>
										<option>lorem</option>
										<option>lorem</option>
									</select>
								</div>							
								<div class="no-label col-sm-2 col-xs-12">
									<div class="btn-align-left">
										<a type="button" class="btn btn-primary" id="">Cerca</a>
									</div>
								</div>								
							</div>
						</div>
					</div>
					<!-- Fine ricerca semplice -->

					<!-- Ricerca avanzata -->
					<div id="ricercaAvanzata" style="display:none">
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<label class="control-label">Numero carta</label>
								<div class="form-inline">
									<div class="form-group">
										<div class="input-group">
											<div class="row">
												<div class="col-xs-9 col-md-9 col-sm-9 col-lg-9">
													<select class="form-control">
														<option>***123</option>
														<option>lorem</option>
														<option>lorem</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
								
							<div class="col-sm-6 col-xs-12">
								<label class="control-label">Tipo di movimento</label>
								<div class="form-inline">
									<div class="form-group">
										<div class="input-group">
											<div class="row">
												<div class="col-xs-9 col-md-9 col-sm-9 col-lg-9">
													<select class="form-control">
														<option>lorem ipsum</option>
														<option>lorem</option>
														<option>lorem</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>							
						</div>
					
						<div class="row">						
							<div class="col-sm-3 col-xs-12">
								<label class="control-label">Periodo dal</label>
								<div class="form-inline">
									<div class="form-group">
									  <div class="input-group">
										 <input type="text" id="datepickerToolFrom" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
										 <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
									  </div>
									</div>
								</div> 
							</div>  
							<div class="col-sm-3 col-xs-12">
								<label class="control-label">Al</label>
								<div class="form-inline">
									 <div class="form-group">
									  <div class="input-group">
										 <input type="text" id="datepickerToolTo" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
										 <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
									  </div>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-xs-12">
								<label class="control-label">Da</label>
								<input type="text" class="form-control clear-x" placeholder="importo minimo" id="minImport1"> 
							</div> 
							<div class="col-sm-3 col-xs-12">
								<label class="control-label">a</label>
								<input type="text" class="form-control clear-x" placeholder="importo massimo" id="maxImport1"> 
							</div>						
						</div>
						<div class="row">
							<div class="col-sm-12 col-xs-12 no-label">
								<div class="btn-align-center">
									<a type="button" class="btn btn-primary no-margin-right" id="">Cerca</a>
								</div>
							</div>	
						</div>
					</div>
					<!-- Fine ricerca avanzata -->
				</form>
			</div>
		</div>
	</section>	
<!-- FINE PARAMETRI DI RICERCA-->

<!-- DATI CARTA-->	
	<section>
		<div class="row">
			<div class="col-xs-6">
				<h4>Dati bancomat</h4>
			</div>
		</div>
		<form class="formGenerico borderFormRounded searchFilter" role="form">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<label class="control-label">Conto di appoggio</label>
					<span class="output">***123</span>
				</div>
				<div class="col-sm-4 col-xs-12">
					<label class="control-label">Residuo giornaliero</label>
					<span class="output">lorem ipsum</span>
				</div>
				<div class="col-sm-4 col-xs-12">
					<label class="control-label">Residuo mensile</label>
					<span class="output">lorem ipsum</span>
				</div>	
			</div>
		</form>			
	</section>	
<!-- FINE DATI CARTA-->		

<section class="formGenerico">
	<h4>Ultimi 15 movimenti</h4>
	<div class="console-top-movimenti">
		
		<div class="flRight pulsantiera">
			<a href="javascript:;" class="no-underline btn-icon filteritem hidden-xs"><i class="icon icon-2x  icon-filtra_filled"></i ></a>
			<ul id="filtermenu" class="movmenu" style="display:none">
				<li><a href="javascript:;" class="showSel">Mostra solo i movimenti selezionati</a></li>
				<li>Seleziona almeno 1 movimento per filtrare</li>
				<li><a href="javascript:;" class="showAll">Mostra tutti i movimenti</a></li>
			</ul>
			<a href="javascript:;" class="no-underline btn-icon zoomitem hidden-xs"><i class="icon icon-2x icon-zoom_piu_filled"></i>  </a>
			<ul id="zoommenu" class="movmenu" style="display:none">
				<li><a href="javascript:;" class="openAll">Apri tutti</a></li>
				<li><a href="javascript:;" class="closeAll">Chiudi tutti</a></li>
				<li><a href="javascript:;" class="openSelected">Apri selezionati</a></li>
				<li><a href="javascript:;" class="closeSelected">Chiudi selezionati</a></li>
			</ul>
			<a href="javascript:;" class="no-underline btn-icon"><i class="icon icon-2x icon-excel_filled"></i ></a>
		</div>
	</div>
	
	<table id="data-grid-movimenti" cellspacing="0" cellpadding="0" border="0" class="sortableTable mov" data-unique-id="id">
	<thead>
		<tr>
			<th data-field="dataC" data-sorter="fixDate" data-sortable="true" class="center">Data</th>
			<th data-field="descB" data-formatter="setDetailsFormat" data-sortable="true" class="left">Tipologia di movimento</th>
			<th data-field="val" data-formatter="setUscite" data-sortable="true" class="right">Importo (EUR)</th>
			<th data-field="state" data-sortable="false" class="center nodet" data-checkbox="true"></th>
		</tr>
	</thead>
	</table>
	<div class="console-bottom-movimenti visible-xs">
		<div>
			<a href="">Scarica in formato MS Money</a>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
		  <div class="col-xs-12">
			<div class="btn-align-right">
			  <a type="button" class="btn btn-primary" id="linkGrafMov">lorem ipsum dolor sit</a>
			</div>
		  </div>
		</div>
	</div>
<!--select di scelta moviemnti -->
	<div>
	</div>
<script>
    /* tabella popolata con chiamata ai movimenti*/

    var $tableMovimenti= $('#data-grid-movimenti');
    
    $(function () {
     
     $('#minImport1, #maxImport1').each(function (index, item) {
      item = $(item);
      item.keyup(function (e) {
        var el = $(e.target);
          if (!/^\d+$/.test(el.val())) { el.val(''); }
      });
      });




     addMov = function() {
     $.ajax({
       url: '/librerie/include/commons/ajax/movimenti/WsMovementsSearch2.php',
       dataType: 'json',
       success: function(data) {
         $tableMovimenti.bootstrapTable('append', data.movTab.lista);
         }
    
      }); 
	  }




    loadMov = function() {$.ajax({
       url: '/librerie/include/commons/ajax/movimenti/WsMovementsSearch.php',
       dataType: 'json',
       success: function(data) {
          $tableMovimenti.bootstrapTable({
              data: data.movTab.lista,
              sortable: true,
              sortName: "dataC",
              sortOrder: "desc",
			 rowStyle: function(row, index) {
				if(index % 2 == 0)
				{
					return {
						classes: 'dispari'
					}
				}
				else {
					return {
						classes: 'pari'
					}
				}
			   },
              onPostBody: function() {
              	fixCols(); 
              	$('#selTutti').click(selectAllCheck);
                $tableMovimenti.find('input:checkbox').click(function() {$('.movmenu').hide()});
              	$tableMovimenti.find('tr:not(\'.totali\')').has('.detMov').mouseover(function () { $(this).addClass('evident')});
              	$tableMovimenti.find('tr:not(\'.totali\')').has('.detMov').mouseout(function () { $(this).removeClass('evident')});
                setMovInTable(data);
                },
              onClickCell: function(field, value, row, $element) {
                if($element.closest('tr').find('.detMov').length>0)
                {
                detailIdArray = [];
                detailIdArray.push($element.closest('tr').find('.detMov').attr('data-detail'));
                
                if(!isSmallDevice && !$element.hasClass('nodet')) {
                if($element.closest('tr').next('tr.detail').length==0) //se non è già stato caricato il dettaglio
                  {
                    loadDetail(detailIdArray);	
                  }
                //toggle della riga con dettaglio
                else{
                    $element.closest('tr').next('tr').toggle();
                    $element.closest('tr').toggleClass('master');
                  
                 }
                }
                }
              },
              onExpandRow: function(index, row, $detail) {
                  var detailId = $(event.target).closest('tr').find('.detMov').attr('data-detail');
                  if(isSmallDevice) {
                     addDetail(detailId,index, row, $detail);
                  }  
                },
              onCheck: function() {
                 $('.movmenu').hide();
              }
              //detailView:  isSmallDevice, //se sono su  mobile innesco il meccanismo per costruire riga accordion
			        //detailFormatter:"detailFormatterAccordionMov" //costruisce la riga di dettaglio su mobile
           });
       },
       error: function(e) {
         console.log(e.responseText);
		  }
    })
     
    }
	  loadMov();
    zoomMenu();
    filterMenu();
	 });
    
     //settare entrate e uscite
     var setMovInTable = function(data) {
        var totEntrate = 0,
            totUscite = 0,
            totGen = 0;
        $.each(data.movTab.lista, function (index, item) {
          var entrata = '&nbsp;',
              uscita = '&nbsp;',
              intVal = moveToInteger(item.val);
              if (item.val > 0) {
                entrata = format2DecNum(intVal);
                totEntrate += intVal;
                totGen += intVal;
              }
              else {
                uscita = format2DecNum(intVal);
                totUscite += intVal;
                totGen += intVal;
              }
              
          })
          $('#totMovEnt').html(format2DecNum(totEntrate));
          $('#totMovUsc').html(format2DecNum(totUscite));
          $('#totMovGen').html(format2DecNum(totGen));
      }
     //icona di zoom menu top
     var zoomMenu = function() {
        $('.zoomitem').click(function() {
           checkSel =  $tableMovimenti.find('.detMov').closest('tr').find('input:checked');
           rowDetailOpened =  $tableMovimenti.find('.detail:visible');
           rowDetailToOpen =  $tableMovimenti.find('.detMov');
           ischeckSelOpened = checkSel.closest('tr').next('.detail:visible');
           ischeckSelClosed = checkSel.closest('tr').next('.detail');
          
           $('#zoommenu').toggle();
           $('#zoommenu li,#filtermenu').hide();
           if (checkSel.length == 0)
           {
               if(rowDetailOpened.length==0) 
                {
                  $('#zoommenu li').eq(0).show();
                }
               else if (rowDetailOpened.length==rowDetailToOpen.length)
               {
                $('#zoommenu li').eq(1).show();
               }
               else if (rowDetailOpened.length<rowDetailToOpen.length)
               {
                 $('#zoommenu li').eq(0).show();
                 $('#zoommenu li').eq(1).show();
               }
           }
           else 
           {
             checkSel.each(function(index) {
                var rowDettV =  $(this).closest('tr').next('.detail:visible');
                 
                 if(rowDettV.length>0) 
                 {
                    $('#zoommenu li').eq(3).show();
                 }
                 else if (rowDettV.length==0) 
                 {
                    $('#zoommenu li').eq(2).show();
                 }
               })
          }
        });
          
        $('.openAll').click(function(){
            detailIdArray = [];
            rowDet = $tableMovimenti.find('tr:visible:not(\'.master\') .detMov');
                rowDet.each(function(index) 
                {  
                   var detailAttr = $(this).attr('data-detail');
                   detailIdArray.push(detailAttr)
                }
                );
            loadDetail(detailIdArray);
            

            $('.zoomitem').trigger('click')
        });
        $('.closeAll').click(function(){
            $tableMovimenti.find('.detail').hide().prev('.master').removeClass('master');
            $('.zoomitem').trigger('click')
        });
       
        $('.openSelected').click(function(){
          detailIdArray = [];
            rowDet = $tableMovimenti.find('input:checked').closest('tr:not(\'.master\')').find('.detMov');
              rowDet.each(function(index) 
                {  
                   var detailAttr = $(this).attr('data-detail');
                   detailIdArray.push(detailAttr)
                }
                );
          if($tableMovimenti.find('input:checked').closest('tr:not(\'.master\')').next('tr.detail').length==0) //se non è già stato caricato il dettaglio
           {
            loadDetail(detailIdArray);
          }
          $tableMovimenti.find('tr.selected').addClass('master').next('.detail').show()
          
          $('.zoomitem').trigger('click') 
        })
        $('.closeSelected').click(function(){
          $tableMovimenti.find('.detail').hide();
          //$tableMovimenti.find('tr.selected.master .detMov').trigger('click');
          $('.zoomitem').trigger('click') })
     }
     var filterMenu = function() {
        $('.filteritem').click(function() {
          var checkSel =  $tableMovimenti.find('td input:checked'),
              checkTot =  $tableMovimenti.find('td input');
			  $('#filtermenu').toggle();
          $('#filtermenu li,#zoommenu').hide();
          if(checkSel.length > 0 && $('.filtredRow').length==0) {
			 $('#filtermenu li').eq(0).show();
		  }
		  else if(checkSel.length > 0 == 0 && $('.filtredRow').length==0) {
			 $('#filtermenu li').eq(1).show();
		  }
		  else {
			 $('#filtermenu li').eq(2).show();
		  }
		  /*if(checkSel.length == 0) {
             $('#filtermenu li').eq(1).show();
          }
          else if (checkSel.length>0 && checkSel.length<checkTot.length)
          { 
            $('#filtermenu li').eq(0).show();
          }
          else
          { 
            $('#filtermenu li').eq(2).show();
          }*/
        })
        $('.showSel').click(function(){
           var noRowSelected = $tableMovimenti.find('tbody tr:not(\'.selected\'):not(\'.detail \')'),
               stateRow = [];
			   noRowSelected.hide().addClass('filtredRow');
               noRowSelected.next('.detail').hide();
			   /*noRowSelected.each(function(index) {
               var ids = $(this).attr('data-uniqueid');
                  $tableMovimenti.bootstrapTable('removeByUniqueId', ids);
				})*/
              $('.movmenu').hide(); 
          })
          
          
          $('.showAll').click(function(){
              /*$tableMovimenti.bootstrapTable('destroy'); 
              loadMov();*/
			  $('.filtredRow').show().removeClass('filtredRow');;
              $('.movmenu').hide();
          })
     }
    /*determina se sono entrate o uscite */
     var setEntrate = function(value, row){
     	intVal = moveToInteger(value);
     	if (value > 0 )
     		{
				return format2DecNum(intVal);
			}
     	else
     		{
     			return '';
     		}
     }
     var setUscite = function(value, row){
     	intVal = moveToInteger(value);
     	if (value < 0 )
     		{
				return format2DecNum(intVal);
			}
     	else
     		{
     			return '';
     		}
     }
     var setPdfIcon = function(value,row) {
      var idLink = 'pdfMov' + value,
     		  hrefLink = '#'
     	return '<a class="no-underline btn-icon" id="' + idLink + '"' + 'href="' + hrefLink + '"' + 'target="_blank"' + 'title="Clicca per vedere e scaricare la ricevuta in formato Pdf"' + '>' + '<i class="icon icon-2x icon-pdf_circle_filled"></i >' + '</a>';

     }
     /*var setCheck = function(value,row) {
     	return '<input type="checkbox" id="cbxMov'+ value + '">'
     }*/
     var setDetailsFormat = function(value,row) {
     	if(row.hasDescE)
     		{
     			return '<a href="javascript:;" class="detMov" data-detail=' + row.id + '>' + value +'</a>';
     		}
     	else{
     			return value;
     		}
     }
     var selectAllCheck = function(e) {
     	var el = $(e.target);
		  var checked = (el.is(':checked'));
		  el.closest('table').find('tr:not([class~=hidden]) input[type=checkbox]').each(function (index, item) {
			item = $(item);
			item.prop('checked', checked);
		  });
     }
    var loadDetail = function(detailIdArray) {
    	$.ajax({
       		url: '/librerie/include/commons/ajax/movimenti/WsMovementsDetail.php',
       		dataType: 'json',
       		success: function(data,event) {
       			console.log(detailIdArray);
            $.each(data.descExt, function (index, item) {
               for(i=0; i<=detailIdArray.length; i++) {
               var targetDet = $("a[data-detail=" + detailIdArray[i] +"]");
                 if(detailIdArray[i]==item.id) {
                  targetDet.closest('tr').addClass('master').after(
                  $('<tr>', {id: 'movDetail' + item.id, 'class': 'detail'}).append(
                    $('<td>', {'colspan': 4}).html(item.descE)
                  )
                  );
                 }
              }
              });
            

            }
       	});
    }
    var addDetail = function(id,index, row, $detail) {
      $.ajax({
          url: '/librerie/include/commons/ajax/movimenti/WsMovementsDetail.php',
          dataType: 'json',
          success: function(data,event) {
            $.each(data.descExt, function (index, item) {
             var targetDet= $("a[data-detail=" +id +"]");
             if(id==item.id) {
              $detail.append('<p><strong>Descrizione</strong></p>' + item.descE)
             }
          });
          }
        });
    }



    /*FINE determina se sono entrate o uscite */
   
    function detailFormatterAccordionMov(index, row) {
        
        var html = [];
        $.each(row, function (key, value) {
           
            if(key=='VTa' || key=='descB' || key=='val')
            {
            	html.push('<p><strong>' + key + ':</strong>' + '</p>' + '<p class="value-hidden">' + value + '</p>');
            }
        });
        return html.join('');
    }

    $(window).resize(function() {
	  
	  $tableMovimenti.bootstrapTable('refreshOptions', {
	         detailView:  isSmallDevice,
	         detailFormatter:"detailFormatterAccordionMov"
	    });
	  fixCols();
 	});
	
</script>
</section>
<section>
<!--sesione ricarica movimenti e form ricerca -->
<h4>Sono mostrati <strong>x</strong> di <strong>x</strong> movimenti</h4>
<!--a href="#" onclick="addMov()">Aggiungi movimenti</a-->
<form class="formGenerico borderFormRounded" role="form" id="">
	<div class="form-group">
		<div class="row">
	 		<div class="col-sm-8">
	 			<select class="form-control">
					<option>Aggiungi alla ricerca altri 15 movimenti precedenti</option>
					<option>Aggiungi alla ricerca altri 30 movimenti precedenti</option>
					<option>Aggiungi alla ricerca altri 50 movimenti precedenti</option>
				</select>
	 		</div>
	 		<div class="col-sm-4 col-xs-12">
				<div class="btn-align-left">
					<a href="#" class="no-underline btn-icon link-ancora" id="ricercaSwitch2"><strong><span>Vai alla ricerca</span><i class="icon icon-arrow_up"></i></strong></a>
					<!--<a type="button" class="btn btn-primary no-margin-right" id="ricercaSwitch2">Nuova ricerca</a>-->
				</div>
	 		</div>
	 	</div>
	</div>
</form>
</section>
	
	
	
	
<!--	
	
	
	
		FARE RIFERIMENTO A TPL MOVIMENTI:
		
		<a href="http://libreriewebank.webank.local/connect.php?page=strutt_priv.php&tpl=tpl_priv_movimenti.php&liv0=1&liv1=0&liv2=0&liv3=0&responsive=y">Vai a tpl movimenti</a>
		-->
	</div>
</div>
</section>