<h4>Ultimi 15 movimenti</h4>
<div class="console-top-movimenti">
  <div class="row">
  
  <div class="col-sm-3">
      <div class="radio inline">
              <label class="textWrapper">
               <input type="radio" name="tipoMov" id="">
                  <span class="text">Ultimi movimenti</span>
              </label>
        </div>
  </div>
  <div class="col-sm-3">
      <div class="radio inline">
              <label class="textWrapper">
               <input type="radio" name="tipoMov" id="">
                  <span class="text">Ultimo estratto conto</span>
              </label>
        </div>
   </div>
</div>
</div>
<div class="console-top-movimenti">
    <div class="flLeft hidden-xs">
      <a href="">Scarica in formato MS Money</a>
    </div>
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
      <a href="javascript:;" class="no-underline btn-icon"><i class="icon icon-2x icon-pdf_circle_filled"></i ></a>
    </div>
</div>
<table id="data-grid-movimenti" cellspacing="0" cellpadding="0" border="0" class="sortableTable mov" data-unique-id="id">
	<thead>
      <tr>
        <th data-field="dataC" data-sorter="fixDate" data-sortable="true" class="center">Data contabile</th>
        <th data-field="VTa" data-sorter="fixDate" data-sortable="true" class="center">Data valuta</th>
        <th data-field="descB" data-formatter="setDetailsFormat" data-sortable="true" class="left">Descrizione</th>
  			<th data-field="val" data-formatter="setEntrate" data-sortable="true" class="right">Entrate</th>
  			<th data-field="val" data-formatter="setUscite" data-sortable="true" class="right">Uscite</th>
  			<th data-field="id" data-formatter="setPdfIcon" data-sortable="false" class="center nodet">Pdf</th>
  			<th data-field="state" data-sortable="false" class="center nodet" data-checkbox="true"></th>
  		</tr>
  </thead>
  <tfoot>
    <tr class="totali">
        <td colspan="2"><strong>Totale entrate ed uscite</strong></td>
        <td "no-border-left"></td>
        <td id="totMovEnt" class="right bgWhite"></td>
        <td id="totMovUsc" class="right bgWhite"></td>
        <td colspan="2" class="bgWhite brdWhite"></td>
    </tr>
     <tr class="totali">
        <td colspan="2"><strong>Saldo</strong></td>
        <td class="no-border-left"></td>
        <td id="totMovGen" class="right bgWhite" colspan="2"></td>
        <td colspan="2" class="bgWhite brdWhite"></td>
    </tr>
  </tfoot>
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




    loadMov = function() {

      $.ajax({
       url: '/librerie/include/commons/ajax/movimenti/WsMovementsSearch.php',
       dataType: 'json',
       success: function(data) {

          console.log(data.movTab.lista);

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
                    $('<td>', {'colspan': 7}).html(item.descE)
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