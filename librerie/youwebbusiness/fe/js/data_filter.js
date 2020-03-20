// RIPORTATO IN INIT. QUESTO é UN BKP.

//       // FILTRI E BOTTONI

//       /*
//       "data-filter" è l'identificativo (tipo id ma non univoco) del campo.
//       "data-filter-on" mostra gli elementi elencati quando l'elemento cliccato è ATTIVO
//       "data-filter-off" nasconde gli elementi elencati quando l'elemento cliccato è ATTIVO
//       "data-filter-var" indica la logica di filtro delle righe della tabella
//       */

//       // ATTIVATORE DEI FILTRI AL CLICK

//       let $table;
//       let tableData;

//       $(function(){
//         $('[data-filter]').on('click',function() {
//           filtraElementi($(this))
//         });
//       });

//       function filtraElementi($t) {

//         $table.bootstrapTable('destroy').bootstrapTable({ data : tableData });

//         // classe del bottone attivo
//         const s = 'is-selected'
//         // salva lo stato iniziale
//         const initStateOn = $t.hasClass(s);
//         // se NON sono un checkbox, rimuovo la classe "is-selected"
//         // da tutti gli elementi eccetto me stesso
//         $('[data-filter]').not(this).each(function(){
//           $(this).removeClass(s);
//           dataFilterStatus( $t.data('filter-on') , false);
//           dataFilterStatus( $t.data('filter-off') , true);
//         })
//         // se lo stato è on rimetto o tolgo la classe selezionata all'elemento corrente
//         if( !initStateOn ) $t.addClass(s);
//         // attivo/disattivo e mostro/nascondo gli elementi interni ed esterni al bottone
//         // come da istruzione dei data attributes "data-filter-on" e "data-filter-off"
//         dataFilterStatus( $t.data('filter-on') , initStateOn);
//         dataFilterStatus( $t.data('filter-off') , !initStateOn);
//         // Lancio il filtro sulle righe della tabella
//         dataFilterActions( $t.data('filter-val') , initStateOn );
//         // Ridisegna l'HTML delle checkbox e dei radiobuttons
//         redrawCheckBoxes();

//       }

//       // resetta tutti i filtri
//       function filtraElementiReset() {
//         const s = 'is-selected'
//         $table.bootstrapTable('destroy').bootstrapTable({ data : tableData });
//         $('[data-filter]').each(function(){
//           $(this).removeClass(s)
//           $(this).removeAttr('disabled');
//           //console.log( $(this).hasClass(s) );
//         })
//         $('[data-filter="label_desc"]').show();
//         $('[data-filter="submit_confirm"]').hide();
//       }

//       /*
//       Init della tabella (il json dei dati è da mettere direttamente in pagina).
//       Struttura di esempio del json:
//       <script>
//       const tableData = [
//         {
//           'lorem': 'dolor sit amet'
//           'ipsum' : '12 EUR'
//           'is_editable' : true
//         },
//         ...
//       ];
//       $(function(){
//         initFilteredTable('#NOMETABELLA',tableData)
//       });
//       </script>
//       I parametri che iniziano per "is_" sono i filtri, che possono essere creati
//       a piacere e che devono essere indicati nel "data-filter-var" dei bottoni
//       che si vuole attivino un determinato filtraggio.
//       Esempio: se voglio che al click di un bottone si filtri un determinato valore,
//       nel json indicherò "is_NOMEFILTRO" e nel bottone
//       <button data-filter-var="is_NOMEFILTRO">CLICK HERE</button>.
//       In questo modo. al click sul bottone tutti gli elementi del json che posseggono
//       l'attributo "is_NOMEFILTRO" : true si vedranno mentre gli altri verranno nascosti.
//       */

//       /*

//       function initFilteredTable(selectedtable,selectedTbdata) {
//         $table = $(selectedtable); // popolo la variabile globale.
//         tableData = selectedTbdata; // popolo la variabile globale.
//         $table.bootstrapTable({
//           data : tableData,
//           sortable: true,
//           sortOrder: "desc",
//           checkboxHeader : true,
//           onPostBody : function(e,t) {
//             $('.bootstrap-table').each(function(){
//             // $table.each(function(){
//               $(this).tableStyle()
//               $(this).tableCreateMobileVr()
//               $(this).addClass('table-initialized')
//               redrawCheckBoxes();
//             });
//           },
//         });
//       }

//       */

//       // Determina il comportamento dell'attributo "data-filter-var"
//       function dataFilterActions(str,disable) {
//         str = str ? str.trim() : ''
//         if( disable ) {
//           filterTab()
//         } else {
//           let a = str.trim().split(' ')
//           // se il valore è vuoto, lancio la funzione di filtro vuota (restituisce tutti i valori)
//           if(a[0]=='') {
//             filterTab()
//           } else {
//             let t = []
//             a.forEach(function(v){
//               t.push(v)
//             })
//             filterTab(t)
//           }
//         }
//       }

//       // Comportamento del filtro dei valori del json
//       function filterTab(action) {


//         $tableMobile = $('.mobile-data[data-table-mobilized-mobile="modaleTable"]')

//         console.log( $tableMobile );


//         console.log( 'filterTab', action );

//         if( !action ) {
//           $table.bootstrapTable('filterBy', {})

//           console.log( ' togli check ' );
          
//         } else {
//           action.forEach(function(key,i){
//             let obj = {};
//             obj[key] = true;
//             $table.bootstrapTable('filterBy', obj)
//           })

//           console.log( ' metti check ' );

//         }
//       }

//       // Determina il comportamento degli attributi "data-filter-on" e "data-filter-off"
//       function dataFilterStatus(str,disable) {
//         if(!!str) {
//           let a = str.trim().split(' ')
//           a.forEach(function(v){
//             const isBtn = v.startsWith("btn_")
//             const isCol = v.startsWith("col_")
//             if(isCol) {
//               $table.bootstrapTable(
//                 (disable ? 'hideColumn' : 'showColumn'),
//                 ( v.replace('col_', '') )
//               );
//             } else {
//               const $e = $('[data-filter="'+v+'"]')
//               $e.each(function(){
//                 if( disable ) {
//                   if( isBtn ) {
//                     $e.attr('disabled',true)
//                   } else {
//                     $e.hide()
//                   }
//                 } else {
//                   if( isBtn ) {
//                     $e.removeAttr('disabled')
//                   } else {
//                     $e.show()
//                   }
//                 }
//               });
//             }
//           })
//         }
//       }

//       // Ridisegna l'HTML delle checkbox e dei radiobuttons
//       function redrawCheckBoxes() {
//         $table.find('input[type="checkbox"]').each(function(i){
//           $(this)
//             .attr('id','chkbx_'+i)
//             .wrap('<div data-filter="check_row" class="form-check checkbox mb-0">')
//             .after('<label class="form-check-label" for="chkbx_'+i+'"></label>')
//         });
//         $table.find('input[type="radio"]').each(function(i){
//           $(this)
//             .attr('id','chkbx_'+i)
//             .wrap('<div data-filter="check_row" class="form-check radio mb-0">')
//             .after('<label class="form-check-label" for="chkbx_'+i+'"></label>')
//         });
//       }

//       function showConfirmAlert(alert) {
//         $(alert).show();
//         setTimeout(function() {
//           hideConfirmAlert(alert)
//         }, 3000);
//       }

//       function hideConfirmAlert(alert) {
//         filtraElementiReset();
//         $(alert).fadeOut('fast');
//       }
