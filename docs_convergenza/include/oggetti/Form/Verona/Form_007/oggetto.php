<script src="/docs_convergenza/common/fe/js/bonifico.js"></script>
<style>
  .ui-autocomplete.all-visible {display:block!important;}
</style>

<section>
<div class="wrapper-fixed">
<form method="post" action="" id="formBonifico">
  <h3 class="titleSection titleForm">Quanto vuoi accreditare?</h3>
      <div class="formWrapper">
          <div class="form-group">
              <div class="row">
                  <div class="form-field-input col-xs-12 col-sm-6">
                      <label class="control-label">Importo*</label>
                      <a class="link-text fRight" href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01','Help: lorem ipsum')">Verifica massimali</a>
                      <div class="form-field">
                          <input type="text" name="firstField" id="firstField"  value="" class="form-control clear-x input-required">
                      </div>
                  </div>
                  <div class="form-field-input col-xs-12 col-sm-6">
                      <label class="control-label">Valuta</label>
                      <div class="form-field">
                          Euro
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <h3 class="titleSection titleForm">A chi vuoi effettuare il bonifico?</h3>
      <div class="formWrapper">
         <div class="form-group">
              <div class="row">
                <div class="form-field-input col-xs-12 col-sm-6 ui-combobox-input">
                   <label class="control-label">Beneficiario/intestazione*</label>
                   <input type="text" id="autocompletamentoBonifico" name="autocompletamentoBonifico" size="30" class="form-control ui-autocomplete-input input-required" autocomplete="off" placeholder="Inserisci il nome del beneficiario">
                   <button tabindex="-1" type="button" class="ui-button ui-combobox-button dropdown-arrow" role="button" title=""><span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-s"></span><span class="ui-button-text"></span><i class="icon icon-arrow_down"></i></button>
                </div>
                <div class="form-field-input col-xs-12 col-sm-6">
                  <label class="control-label">Destinazione bonifico*</label>
                    <a class="link-text fRight" href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01','Help: lorem ipsum')">Solo paesi SEPA</a>
                  <select class="form-control" id="sevenField" name="sevenField">
                      <option>Italia</option>
                      <option>Lorem ipsum</option>
                      <option>Lorem ipsum</option>
                  </select>
                </div>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                 <div class="form-field-input col-xs-12 col-sm-6">
                   <label class="control-label">Iban*</label>
                    <input type="text" name="ibanField" id="ibanField"  value="" class="form-control clear-x input-required">
                 </div>
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="form-field-input col-xs-12 col-sm12">
                      <label class="control-label">Causale (max 140 caratteri)</label>
                     <div class="form-field">
                          <input type="text" name="secondField" id="secondField" value="" class="form-control clear-x input-required" maxlength="140">
                      </div>
                  </div>
               </div>
          </div>
      </div>
      <h3 class="titleSection titleForm">Quando vuoi effettuare il bonifico?</h3>
      <div class="formWrapper">
        <div class="form-group">
             <div class="row">
              <div class="form-field-input col-sm-4 col-xs-12">
                  <label class="control-label" for="causale">Data esecuzione*</label> 
                  <div class="form-field">
                      <div class="input-group">
                        <input type="text" name="dateField" size="12"  id="dateField" class="form-control datepicker input-inline clear-x wauto input-required" />
                        <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                    </div>
                  </div>
              </div>
              <div class="form-field-input col-sm-4 col-xs-12">
                <label class="control-label">Data di accredito</label> 
                <div class="form-field"><strong>Entro xx giorni lavorativi</strong><br>dalla data di esecuzione</div>
              </div>
               <div class="form-field-input col-sm-4 col-xs-12">
                <label class="control-label">Commissione</label> 
                <div class="form-field"><strong>XX,00 &euro;</strong></div>
              </div>
            </div>
          </div>
      </div>
     
      
          <div class="hidden-wrapper" id="aggiungiBeneficiario">
            <div class="form-group">
                <div class="row">
                  <div class="form-field-input col-xs-12 col-sm-6">
                    <label><input type="checkbox" name="thirdField" id="thirdField" class="input-toggle-hidden">Aggiungi beneficiario a rubrica</label>
                  </div>
                </div> 
            </div>
            <div class="form-group input-hidden" style="display:none" id="beneficiario">
                <div class="row">
                    <div class="form-field-input col-xs-12 col-sm-6">
                       <label class="control-label">Contatto*</label>
                       <div class="form-field">
                            <input type="text" name="fourField" id="fourField"  value="eccp" class="form-control clear-x prefilled">
                        </div>
                    </div>
                    <!--<div class="form-field-input col-xs-12 col-sm-6">
                         <label class="control-label">Descrizione*</label>
                       <div class="form-field">
                            <input type="text" name="fiveField" id="fiveField"  value="" class="form-control clear-x">
                        </div>
                    </div>-->
                </div>
            </div>
          </div>
      <div class="form-group btnWrapper">
         <div class="btn-align-right">
            <a type="button" href="#" class="btn btn-primary to-able disabled" title="prosegui" disabled id="btnProseguiBonifico">prosegui</a>
        </div>
     </div>
</form>
<br>
<p class="note"> I campi contrassegnati da un asterisco (*) sono obbligatori.<br>
La Banca è sollevata da ogni responsabilità derivante da un' eventuale errata digitazione dei dati obbligatori inseriti.</p>
</div>
<script>
    
    checkFocusOutToAble('formBonifico', ableButton)
    
   $(function () { 
        
        const arrayFields = ['fourField','fiveField','dateField']
        const arrayPlaceholders = ['Mario Rossi','Descrivi il conto del beneficiario','gg/mm/aaaa']
        $.each(arrayFields,function(index,campo){
           $('#' + arrayFields[index]).attr('placeholder',arrayPlaceholders[index]);
        })
    })
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#dateField').datepicker({
    minDdateFieldte: new Date(),
    maxDate: '+1Y',
    buttonImage: 'common/fe/img/pixel_trasp.gif',
    onSelect: function(dateText) {
      $(this).focus();
    }
  });
  //$('.datepicker').datepicker("option","disabled",true)
});
</script>
</section>

<!-- AUTOCOMPLETE -->

<script>isOpenMenu = true;
  $( function() {
     var inputAutocomplete =  $("#autocompletamentoBonifico"),
         isOpenMenu = false;
    
    
    inputAutocomplete.next('button').on('click',function(event){
       if(!isOpenMenu) {
          inputAutocomplete.val('');
          inputAutocomplete.trigger('keydown');
          inputAutocomplete.focus();
          isOpenMenu = true;
          }
        else {
          inputAutocomplete.autocomplete("close");
           isOpenMenu = false;
        }
        
    })
    function crea(req, resp) {
    var re = $.ui.autocomplete.escapeRegex(req.term);
    isOpenMenu = true;
    var matcher = new RegExp( re, "i" );
      
      resp($.map(lista, function(item,event) {
        var stringa = item.label + item.nome;
           if(matcher.test(stringa))
            {
            return {id: item.id, label: item.label, nome: item.nome, descrizione: item.descrizione, iban: item.iban};
            }
       }));
      
      
    }
    $( "#autocompletamentoBonifico" ).autocomplete({
        minLength: 0,
        source: function(req, resp) {
        $.ajax({
          type: "POST",
              url: "/docs_convergenza/include/bonificoBeneficiari.php",
              data: "stringaRicerca="+$("#autocompletamento").val(),      
              dataType: 'json',
              success: function(result){
                lista = result["rows"];
                crea(req, resp);
                 $('#aggiungiBeneficiario').show();
              }
          });
        },
        response: function(event, ui){

            ui.content.push({id: 'nuovo-contatto', label: '', nome: $( "#autocompletamentoBonifico" ).val() + ' ' + '(nuovo beneficiario)', descrizione: '', iban: ''});
        },
        
        select: function( event, ui ) {
          updateField(ui.item.nome,ui.item.id);
         
          $('#aggiungiBeneficiario').hide();
          if($('#thirdField').is(':checked')) {
              
              $('#thirdField').trigger('click');
          }
          if(ui.item.id==='nuovo-contatto')
          {
            $('#aggiungiBeneficiario').show();
          }
          isOpenMenu = false;
          event.preventDefault();
        },
        focus: function( event, ui ) {
          
          updateField(ui.item.nome,ui.item.id);
          event.preventDefault();
        },

      create: function(event, ui) {

           $(this).data('ui-autocomplete')._renderItem  = function( ul, item ) {
           var classNameNuovo =  (item.id == 'nuovo-contatto') ? 'nuovoContatto' : 'border-bottom';
            return $( "<li class='" + classNameNuovo + "'>")
            .append( "<div>" + item.label + '<span class="sep">-</span>'  + item.nome + '<br>' + item.descrizione + '<br>' + item.iban)
            .addClass('ui-menu-item')
            .appendTo( ul );
            }
        }
      }
    )
     
    function updateField(value,idEl) {
    $("#autocompletamentoBonifico").focus();
    if(idEl==='nuovo-contatto')
       {
         $("#autocompletamentoBonifico").val(value.replace(' (nuovo beneficiario)',''));  
       }
       else {
           $("#autocompletamentoBonifico").val(value);  
       } 
    }

  });

  checkFocusOutToAble('formBonificoNuovo', ableButton)
  </script>
