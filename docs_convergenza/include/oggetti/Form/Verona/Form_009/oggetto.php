<section>
<div class="wrapper-fixed">
<form method="post" action="" id="formBonificoDetrazione">
     <h3 class="titleSection titleForm">A chi vuoi effettuare il bonifico?</h3>
      <div class="formWrapper">
        <div class="form-group">
            <div class="row">
              <div class="form-field-input col-xs-12 col-sm-6 ui-combobox-input">
                   <label class="control-label">Beneficiario/intestazione*</label>
                   <input type="text" id="autocompletamentoBonificoLast" name="autocompletamentoBonificoLast" size="30" class="form-control ui-autocomplete-input input-required" autocomplete="off" placeholder="Inserisci il nome del beneficiario">
                   <button tabindex="-1" type="button" class="ui-button ui-combobox-button dropdown-arrow" role="button" title=""><span class="ui-button-icon-primary ui-icon ui-icon-triangle-1-s"></span><span class="ui-button-text"></span><i class="icon icon-arrow_down"></i></button>
                </div>
              <div class="form-field-input col-xs-12 col-sm-6">
                <label class="control-label">Iban*</label>aggiungi
                 <input type="text" name="ibanDetr" id="ibanDetr"  value="" class="form-control clear-x input-required">
               </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="form-field-input col-xs-12 col-sm-6">
                    <label class="control-label" for="causale">P.Iva/Codice fiscale*</label> 
                    <input type="text" name="codiceF" id="codiceF" value="" class="form-control clear-x input-required">
                </div>
             </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="form-field-input col-xs-12 col-sm-6">
                      <label class="control-label">Importo*</label>
                      <a class="link-text fRight" href="javascript:OpenHelp('/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01','Help: lorem ipsum')">Verifica massimali</a>
                      <div class="form-field">
                        <div class="input-group">
                          <input type="text" name="imp" id="imp"  value="" class="form-control clear-x input-required">
                           <span class="input-group-addon light">Euro</span>
                        </div>
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
                  <label class="control-label">Data esecuzione*</label> 
                  <div class="form-field">
                      <div class="input-group">
                        <input type="text" name="dateBonifico" size="12"  id="dateBonifico" class="form-control datepicker input-inline clear-x wauto input-required" />
                        <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
        <h3 class="titleSection titleForm">Inserisci i dati per detrazione</h3>
       <div class="formWrapper">
      <div class="form-group">
             <div class="row">
              <div class="form-field-input col-sm-6 col-xs-12">
                  <label class="control-label">Tipologia bonifico*</label> 
                   <select class="form-control input-required" id="tipologia" name="tipologia">
                          <option>Seleziona</option>
                          <option>lorem ipsum</option>
                          <option>Lorem ipsum</option>
                    </select>
                </div>
                 <div class="form-field-input col-sm-6 col-xs-12">
                  <label class="control-label">Tipologia ordinante*</label> 
                   <select class="form-control input-required" id="ordinante" name="ordinante">
                          <option>Seleziona</option>
                          <option>lorem ipsum</option>
                          <option>Lorem ipsum</option>
                    </select>
                </div>
          </div>
      </div>
      </div>
       <div class="formWrapper">
        <div class="hidden-wrapper">
          <div class="form-group">
            <div class="row">
                <div class="form-field-input col-xs-12 col-sm-6">
                    <label class="control-label">P.Iva/Codice fiscale ordinante*</label> 
                    <input type="text" name="cfField" id="cfField" value="" class="form-control clear-x input-required">
                </div>
                 <div class="form-field-input col-xs-12 col-sm-6 paddingTopMedium">
                    <a class="link-text btn-show" href="javascript:;"><i class="icon icon-f-row_expand"></i> Aggiungi</a>
                </div>
            </div>
          </div>
          <div class="form-group input-hidden" style="display:none" id="cf2">
              <div class="row">
                    <div class="form-field-input col-xs-12 col-sm-6">
                       <label class="control-label">P.Iva/Codice fiscale ordinante* 2</label>
                       <div class="form-field">
                            <input type="text" name="ordinante" id="ordinante"  value="" class="form-control clear-x">
                        </div>
                    </div>
                    <div class="form-field-input col-xs-12 col-sm-6 paddingTopMedium">
                         <a class="link-text btn-hide" href="javascript:;"><i class="icon icon-f-row_contract"></i> Elimina</a>
                    </div>
              </div>
          </div>
        </div>
         <div class="form-group">
            <div class="row">
                <div class="form-field-input col-xs-12 col-sm-6">
                    <label class="control-label">Numero fattura*</label> 
                    <input type="text" name="numeroF" id="numeroF" value="" class="form-control clear-x input-required">
                </div>
                 <div class="form-field-input col-xs-12 col-sm-6">
                    <label class="control-label" for="causale">Data fattura(facoltativo)</label> 
                  <div class="form-field">
                      <div class="input-group">
                        <input type="text" name="dateFac" size="12"  id="dateFac" class="form-control datepicker input-inline clear-x wauto" />
                        <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
         
          <div class="form-group">
            <div class="row">
                <div class="form-field-input col-xs-12 col-sm-12">
                    <label class="control-label">Descrizione*(max 100 caratteri)</label> 
                    <textarea  name="descrizione" id="descrizione" value="" class="form-control clear-x input-required"></textarea>
                </div>
               
            </div>
          </div>
      </div>
      
   <div class="form-group btnWrapper">
       <div class="btn-align-right">
          <a type="button" href="#" class="btn btn-primary to-able disabled" title="prosegui" disabled id="btnProseguiBonificoDesc">prosegui</a>
      </div>
   </div>
</form>
<br>
<p class="note"> I campi contrassegnati da un asterisco (*) sono obbligatori.<br>
La Banca è sollevata da ogni responsabilità derivante da un' eventuale errata digitazione dei dati obbligatori inseriti.</p>
</div>

</section>


<!-- AUTOCOMPLETE -->

<script>
  $( function() {
     var inputAutocomplete =  $("#autocompletamentoBonificoLast");
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
    $( "#autocompletamentoBonificoLast" ).autocomplete({
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
                

             }
          });
        },
        
        
        select: function( event, ui ) {
          updateField(ui.item.nome,ui.item.id);
          if($('#addBen').is(':checked')) {
              
              $('#addBen').trigger('click');
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
            return $( "<li>")
            .append( "<div>" + item.label + '<span class="sep">-</span>'  + item.nome + '<br>' + item.descrizione + '<br>' + item.iban)
            .addClass('ui-menu-item')
            .appendTo( ul );
            }
        }
      }
    )
     
    function updateField(value,idEl) {
    $("#autocompletamentoBonificoLast").focus();
    if(idEl==='nuovo-contatto')
       {
         $("#autocompletamentoBonificoLast").val(value.replace(' (nuovo beneficiario)',''));  
       }
       else {
           $("#autocompletamentoBonificoLast").val(value);  
       } 
    }

  });

  checkFocusOutToAble('formBonificoDetrazione', ableButton)
  </script>
