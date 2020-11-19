<?php
   //casistiche tabelle colonne
      $clientiYou = true; //bpm o ex bpm
      $allLine = true; //5 o sei colonne
      $isOverlayer = false; //in pagina o in overlayer
   ?>
<?php if($isOverlayer == true) {;?>
<a href="#" data-toggle="modal"  data-target="#modaleTabellaCosti"> Apri tabella in overlayer</a>
<div id="modaleTabellaCosti" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h1 class="modal-title">TITOLO MODALE</h1>
         </div>
         <div class="modal-body">
            <?php }?>
            <?php if($clientiYou != true) {;?>
            <div class="ex-bpm">
               <?php }?>
               <section>
                  <div class="linee-wrapper desktop-label">
                     <?php if($clientiYou == true) {;?> 
                     <div class="lineaT">LINEA ATTUALE</div>
                     <?php }?>
                     <div class="lineaN">NUOVE LINEE DI TRADING ONLINE</div>
                  </div>
                  <?php if($clientiYou != true) {;?>
                  <table id="tbFixedColumn" class="fixedColumns scelta-profilo ex-bpm">
                  <?php }?>  
                  <?php if($clientiYou == true) {;?>
                  <table id="tbFixedColumn" class="fixedColumns scelta-profilo">
                     <?php }?> 
                     <thead>
                        <tr>
                           <th class="left" data-index="0"></th>
                           <?php if($clientiYou == true) {;?>
                           <th class="evidenziato" data-index="1">
                              <span class="mobile-label">La tua Linea ATTUALE</span>
                           </th>
                           <?php }?>
                           <th class="center" data-index="2">
                              Base
                              <?php if($isOverlayer != true) {;?><label><input class="radioVerify" type="radio" data-column="cgp" name="linea" value="Base"></label><?php }?>
                           </th>
                           <th class="center" data-index="3">
                              Silver
                              <?php if($isOverlayer != true) {;?><label> <input class="radioVerify" type="radio" data-column="cgp" name="linea"  value="Silver"></label><?php }?>
                           </th>
                           <th class="center" data-index="4">Gold
                              <?php if($isOverlayer != true) {;?><label><input class="radioVerify" type="radio" data-column="cgp" name="linea" value="Gold"></label><?php }?>
                           </th>
                           <?php if($allLine == true) {;?>
                           <th class="center" data-index="5">YouBanking
                              <?php if($isOverlayer != true) {;?><label><input class="radioVerify" type="radio" data-column="cgp" name="linea" value="YouBanking"></label><?php }?>
                           </th>
                           <?php }?>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="dispari">
                           <td class="left">Canone mensile</td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">6,00 &euro;</td>
                           <?php }?>
                           <td class="right">0,00 &euro;</td>
                           <td class="right">8,00 &euro;</td>
                           <td class="right">20,00 &euro;</td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">0,00 &euro;</td>
                           <?php }?>   
                        </tr>
                        <tr class="pari">
                           <td class="left">N. operazioni mensili per riaccredito canone</td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              2&nbsp;ese/mese
                           </td>
                           <?php }?>
                           <td class="right">1&nbsp;ese/mese</td>
                           <td class="right">3&nbsp;ese/mese</td>
                           <td class="right">20&nbsp;ese/mese</td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">15&nbsp;ese/mese</td>
                           <?php }?>
                        </tr>
                        <tr class="dispari title-row hidden-xs">
                           <td class="left">
                              TITOLO ITALIA
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato"></td>
                           <?php }?>
                           <td class="right"></td>
                           <td class="right"></td>
                           <td class="right"></td>
                           <?php if($allLine == true) {;?> 
                           <td class="right"></td>
                           <?php }?>
                        </tr>
                        <tr class="pari">
                           <td class="left">
                              Comm. Percentuale
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              0.1900%
                           </td>
                           <?php }?>
                           <td class="right">
                              0,1900%             
                           </td>
                           <td class="right">
                              0,1900%             
                           </td>
                           <td class="right">
                              0,1000%             
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">
                              0,1900%
                           </td>
                           <?php }?>
                        </tr>
                        <tr class="dispari">
                           <td class="left">
                              Comm. Minimo
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              10,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              13,00&euro;
                           </td>
                           <td class="right">
                              11,00&euro;
                           </td>
                           <td class="right">
                              5,00&euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">
                              7,00&euro;
                           </td>
                           <?php }?>
                        </tr>
                        <tr class="pari">
                           <td class="left">
                              Comm. Massimo
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              25,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              28,00&euro;
                           </td>
                           <td class="right">
                              28,00&euro;
                           </td>
                           <td class="right">
                              15,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">
                              20,00&euro;
                           </td>
                           <?php }?>
                        </tr>
                        <tr class="dispari">
                           <td class="left">
                              Spese operazione
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              0,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              0,00 &euro;
                           </td>
                           <td class="right">
                              0,00 &euro;
                           </td>
                           <td class="right">
                              0,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">0,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="pari">
                           <td class="left">
                              Spese fisse per ineseguito
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              0,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              0,00 &euro;
                           </td>
                           <td class="right">
                              0,00 &euro;
                           </td>
                           <td class="right">
                              0,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">0,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="dispari title-row hidden-xs">
                           <td class="left">
                              TITOLO ESTERO
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato"></td>
                           <?php }?>
                           <td class="right"></td>
                           <td class="right"></td>
                           <td class="right"></td>
                           <?php if($allLine == true) {;?> 
                           <td class="right"></td>
                           <?php }?>
                        </tr>
                        <tr class="pari">
                           <td class="left">
                              Comm. Percentuale
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              0.1900%
                           </td>
                           <?php }?>
                           <td class="right">
                              0,1900%             
                           </td>
                           <td class="right">
                              0,1900%             
                           </td>
                           <td class="right">
                              0,1000%             
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">0,1900%&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="dispari">
                           <td class="left">
                              Comm. Fisse per operazione borse estere
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              0,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              0,0 &euro;
                           </td>
                           <td class="right">
                              0,00 &euro;
                           </td>
                           <td class="right">
                              0,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">0,00%</td>
                           <?php }?>
                        </tr>
                        <tr class="pari">
                           <td class="left">
                              Comm. Minimo
                           </td>
                           <?php if($clientiYou == true) {;?>	
                           <td class="center evidenziato">
                              30,00 &euro;
                           </td>
                           <?php }?>	
                           <td class="right">
                              35,00 &euro;
                           </td>
                           <td class="right">
                              30,00n&euro;
                           </td>
                           <td class="right">
                              27,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">25,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="dispari">
                           <td class="left">
                              Comm. Massimo
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              30,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              35,00 &euro;
                           </td>
                           <td class="right">
                              30,00 &euro;
                           </td>
                           <td class="right">
                              27,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">25,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="pari">
                           <td class="left">
                              Comm. di intervento tasso di cambio su operazioni diverse da euro
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              0,15%
                           </td>
                           <?php }?>
                           <td class="right">
                              0,1500%             
                           </td>
                           <td class="right">
                              0,1500%             
                           </td>
                           <td class="right">
                              0,1500%             
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">0,1500%&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="dispari">
                           <td class="left">
                              Spese fisse per ineseguito
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              1,00 &euro;
                           </td>
                           <?php }?>	
                           <td class="right">
                              1,00 &euro;
                           </td>
                           <td class="right">
                              1,00 &euro;
                           </td>
                           <td class="right">
                              1,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">1,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="pari title-row hidden-xs">
                           <td class="left">
                              INFORMATIVE IN TEMPO REALE
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato"></td>
                           <?php }?>
                           <td class="right"></td>
                           <td class="right"></td>
                           <td class="right"></td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">;</td>
                           <?php }?>
                        </tr>
                        <tr class="dispari">
                           <td class="left">
                              Quotazioni New York (NYSE, NASDAQ, AMEX) in tempo reale
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              10,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              12,00 &euro;
                           </td>
                           <td class="right">
                              12,00 &euro;
                           </td>
                           <td class="right">
                              12,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">12,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="pari">
                           <td class="left">
                              Quotazioni Francoforte in tempo reale
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              10,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              15,00 &euro;
                           </td>
                           <td class="right">
                              15,00 &euro;
                           </td>
                           <td class="right">
                              15,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">15,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="dispari">
                           <td class="left">
                              Quotazioni Parigi e Amsterdam in tempo reale
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              10,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              10,00 &euro;
                           </td>
                           <td class="right">
                              10,00 &euro;
                           </td>
                           <td class="right">
                              10,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">10,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="pari">
                           <td class="left">
                              Quotazioni NYSE in tempo reale
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              0,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              6,00 &euro;
                           </td>
                           <td class="right">
                              6,00 &euro;
                           </td>
                           <td class="right">
                              6,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">6,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="dispari">
                           <td class="left">
                              Quotazioni Nasdaq in tempo reale
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              0,00 &euro;
                           </td>
                           <?php }?>
                           <td class="right">
                              6,00 &euro;
                           </td>
                           <td class="right">
                              6,00 &euro;
                           </td>
                           <td class="right">
                              6,00 &euro;
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">6,00&euro;</td>
                           <?php }?>
                        </tr>
                        <tr class="pari">
                           <td class="left">
                              Analisi tecnica e fondamentale
                           </td>
                           <?php if($clientiYou == true) {;?>
                           <td class="center evidenziato">
                              Inclusa
                           </td>
                           <?php }?>
                           <td class="right">Non inclusa</td>
                           <td class="right">Inclusa</td>
                           <td class="right">Inclusa</td>
                           <?php if($allLine == true) {;?> 
                           <td class="right">Inclusa</td>
                           <?php }?>
                        </tr>
                        <tr class="radio-mobile">
                           <td class="left">
                              <span class="desktop-label">
                              Trading Online
                              </span>
                              <span class="mobile-label">
                              Linea
                              </span>
                           </td>
                           <?php if($clientiYou == true) {;?> 
                           <td class="left evidenziato">
                              <span class="desktop-label">
                              La tua Linea ATTUALE
                              </span>
                              <span class="mobile-label">
                              La tua Linea ATTUALE
                              </span>
                           </td>
                           <?php }?>
                           <td class="center">
                              Base
                              <?php if($isOverlayer != true) {;?><label><input class="radioVerify" type="radio" data-column="cgp" name="linea" value="Base"></label><?php }?>
                           </td>
                           <td class="center">
                              Silver
                              <?php if($isOverlayer != true) {;?><label><input class="radioVerify" type="radio" data-column="cgp" name="linea" value="Silver"></label><?php }?>
                           </td>
                           <td class="center">
                              Gold
                              <?php if($isOverlayer != true) {;?><label><input class="radioVerify" type="radio" data-column="cgp" name="linea" value="Gold"></label><?php }?>
                           </td>
                           <?php if($allLine == true) {;?> 
                           <td class="center">YouBanking
                           <?php if($isOverlayer != true) {;?><label><input class="radioVerify" type="radio" data-column="cgp" name="linea" value="YouBanking"></label><?php }?>
                           </td>
                           <?php }?>
                        </tr>
                     </tbody>
                  </table>
               </section>
               <?php if($clientiYou != true) {;?>
            </div>
            <?php }?> 
            <?php if($isOverlayer == true) {;?>
         </div>
      </div>
   </div>
</div>
<?php }?> 
<script>
   function checkSelected() {
   if(!!$('#nomeLineaAttivataHidden').val() && !$('#nomeLineaAttivataHidden').val() !== '') {
   var radioSelected = $('.radioVerify[value="' + $('#nomeLineaAttivataHidden').val() + '"]');
   radioSelected.attr('checked', 'checked');
   radioSelected.trigger('click');
   $('.linea-selected').html($('#nomeLineaAttivataHidden').val());
   
   }
   }
   
   function fixColonna() {
       var isExBpm = "<?= !$clientiYou; ?>";
    if(isSmallDevice) {
        $('#tbFixedColumn').bootstrapTable('destroy').bootstrapTable({
            fixedColumns: true,
            fixedNumber: isExBpm ? 1 : 2,
            onPostBody : selectRadioColumn
        })
    }
    else {
        $('#tbFixedColumn').bootstrapTable('destroy').bootstrapTable({
            fixedColumns: false,
               fixedNumber: isExBpm ? 1 : 2,
            onPostBody : selectRadioColumn
        });
    }
   }
   
   var selectRadioColumn = function() {
    var tableC = $('#tbFixedColumn'),
        trTable = tableC.find('tr'),
        tdTable = trTable.find('td'),
        thTable = tableC.find('th'),
        inTable = tableC.find('input[type="radio"]')
    tdTable.on('click', function(index) {
        var indexSel;
        if(isSmallDevice) {
        tdTable.removeClass('highlight');
        $(this).addClass('highlight');
        $(this).closest('tr').find('td').each(function(index) {
            if ($(this).attr('class').indexOf('highlight')!= -1) {
                indexSel = index;
           }
         })
        
        thTable.eq(indexSel).find('input[type="radio"]').trigger('click');
        if($(this).closest('tr').attr('class').indexOf('radio-mobile')!= -1)
         {
            $(this).find('input[type="radio"]').attr('checked','checked');;
         }
        }
    })
    inTable.on('click', function(el,index) {
        var textBtn = $(this).val();
        $('#nomeLineaAttivataHidden').val(textBtn);
        $('.linea-selected').html(textBtn);
        thTable.removeClass('highlight');
        $(this).closest('th').addClass('highlight');
        var indexSel;
        $('#tbFixedColumn').find('th').each(function(index){
            if ($(this).attr('class').indexOf('highlight')!= -1) {
                indexSel = index;
           }
        })
        
        trTable.each(function(){
            $(this).find('td').removeClass('highlight');
            $(this).find('td').eq(indexSel).addClass('highlight');
        })
     }
    )
    
   }
   $(function() {
       fixColonna();
       $('#modaleTabellaCosti').on('shown.bs.modal', function () {
           fixColonna();
       })
       checkSelected();
   });
   
   $(window).resize(function() {
       fixColonna()
       
   });
   
</script>
