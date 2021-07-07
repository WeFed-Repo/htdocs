

<div class="bordered mb-4">
 <form class="form-grid needs-validation" novalidate>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label class="control-label">Select normal</label>
        <!-- aggiugere classe disabled e attributo disabled per select disabilitata-->
        <!-- attributi select normale name/id/data-attr-placeholder (facoltativo, in mancanza viene appeso un placeholder di default) -->
        <div class="dropdown select-custom" name="sc" id="sc"></div>
      </div>
      <div class="form-group col-md-4">
        <label class="control-label">Select con checkbox</label>
        <!-- attributi select con checkbox: 
          name
          id
          class has-checkbox se è di tipo checkbox
          data-attr-placeholder (facoltativo, in mancanza viene appeso un placeholder di default) 
        -->
        <div class="dropdown select-custom has-checkbox" name="scCheckbox" id="scCheckbox" data-attr-placeholder="Seleziona"></div>
      </div>
      <div class="form-group col-md-4">
        <label class="control-label">Select bottone funzionale</label>
        <!-- attributi select con checkbox: 
          name
          id
          has-btn se è di tipo btn
          data-attr-placeholder (facoltativo, in mancanza viene appeso un placeholder di default) 
        -->
        <div class="dropdown select-custom has-btn" name="scBtn" id="scBtn" data-attr-placeholder="OPERAZIONI MASSIVE"></div>
      </div>
    </div>
</form>
</div>
<!--HTML DI EMULAZIONE DEL COMPORTAMENTO -->
<div class="row">
  <div class="col-6">ESEMPIO DI CALLBACK PER CAMBIARE I VALUE DELLA SELECT BUTTON:<br> selezionare i check per modificare la select button con il numero dei check selezionati</div>
  <div class="col-6">
      <div class="form-check checkbox">
      <input class="form-check-input" type="checkbox"  name="checkFieldCb" value="">
      <label class="form-check-label"></label>
    </div>
      <div class="form-check checkbox">
        <input class="form-check-input" type="checkbox"  name="checkFieldCb" value="">
        <label class="form-check-label"></label>
      </div>
  </div>
</div>
<button class="btn btn-secondary" id="reset">Resetta le select e reinizializza</button>






<!-- includo funzione per inizializzare la select customizzate-->
<script src="./fe/js/init_select_custom.js"></script>
<script type="text/javascript">
    $(function () {
      //parametri per inizializzare finta select normale
      var paramsFintaSelect = {
        "idSel": "sc",
        "nameSel":"sc",
         //esempio di array con i valori per la select
        "dataOptions" : [
              {
                "id": "optionsel1",
                "text": "Seleziona",
                "value":"0",
                "selected": true
               
              },
              {
                "id": "optionsel2",
                "text": "Option 1",
                "value": "1"
                

              },
              {
                "id": "optionsel3",
                "text": "Option 2",
                "value": "2"
               
              },
              {
                "id": "optionsel4",
                "text": "Option 3",
                "value": "3"
               
              }
        ]
      }
      var paramsFintaSelectCheck = {
        "idSel": "scCheckbox",
        "nameSel":"scCheckbox",
         //esempio di array con i valori per la select
        "dataOptions" : [
          
          {
                "id": "optionselCheck1",
                "text": "Option 1",
                "value": "1",
                "selected" :false
                
          },
          {
                "id": "optionselCheck2",
                "text": "Option 2",
                "value": "2",
                "selected" :false
          },
          {
                "id": "optionselCheck3",
                "text": "Option 3",
                "value": "3",
                "selected" :false
          },
          {
                "id": "optionselCheck4",
                "text": "Option 4",
                "value": "4",
                "selected" :false
          }
        ],
        
        "labelSelectAll" : "Seleziona tutti", //solo se labelSelectAll è presente costruisce dinamicamente l'opzione di selezione globale
        "textSelectedAll" : "Tutti",
        "textSelectedSome" : "selezionati"
      }
      
      var paramsFintaSelectBtn = {
        "idSel": "scBtn",
        "nameSel":"scBtn",
         //esempio di array con i valori per la select
        "dataOptions" : [
              {
                "id": "optionbtn1",
                "text": "Associa progetto",
                "selected": false
              },
              {
                "id": "optionbtn2",
                "text": "Modifica categoria/sottocategoria",
                "selected": false
              }
        ]
      }
      
      
      
      //esegue la finta select normale
      $("#" + paramsFintaSelect.idSel).initSelectCustom(paramsFintaSelect, function(){
            console.log("funzione di cmb finta select normale");
      });
       //esegue la finta select con i check
       $("#" + paramsFintaSelectCheck.idSel).initSelectCustom(paramsFintaSelectCheck, function(){
            console.log("funzione di cmb finta select con checkbox");
      })
      
      //esegue la finta select con il bottone
      $("#" + paramsFintaSelectBtn.idSel).initSelectCustom(paramsFintaSelectBtn, function(){
        console.log("funzione di cmb finta select con bottone funzionale");
      })

      //update dei valori delle options
      //parametri per la funzione di update delle voci di options
      var paramsToUpdateOptions = {
         "idSel": "scBtn",
         "valuesOptions" : [
              {
                "id": "optionbtn1",
                "text": "Associa progetto",
                "value": 100
              },
              {
                "id": "optionbtn2",
                "text": "Modifica categoria/sottocategoria",
                "value": 20
              }
         ]
      }
      updateOptionsValue(paramsToUpdateOptions);

      //emulazione utilizzo funzione di aggiornamento del valore selected del bottone
      $("input[name='checkFieldCb']").on("click",function(e) {
          var dropDown = $("#scBtn"),
              //parametri per la funzione di update della voce selezionata
              paramsToUpdateSelected = {
                "idSel": "scBtn",
                "value": $("input[name='checkFieldCb']:checked").length !== 0 ? $("input[name='checkFieldCb']:checked").length : ""
              }
              updateSelectedValue(paramsToUpdateSelected)
             
      })

      //esempio di reset
      $("#reset").on("click",function(e) {
        $("#" + paramsFintaSelectBtn.idSel).initSelectCustom(paramsFintaSelectBtn, function(){
          console.log("funzione di cmb finta select con bottone funzionale dopo reset");
        });
        updateOptionsValue(paramsToUpdateOptions);
        //esegue la finta select normale
        $("#" + paramsFintaSelect.idSel).initSelectCustom(paramsFintaSelect, function(){
              console.log("funzione di cmb finta select normale dopo reset");
        });
       //esegue la finta select con i check
       $("#" + paramsFintaSelectCheck.idSel).initSelectCustom(paramsFintaSelectCheck, function(){
            console.log("funzione di cmb finta select con checkbox dopo reset");
      })
      })
     
    })
   
</script>
