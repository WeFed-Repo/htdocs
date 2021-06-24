

<div class="bordered mb-4">
 <form class="form-grid needs-validation" novalidate>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label class="control-label">Select normal</label>
        <!-- aggiugere classe disabled e attributo disabled per select disabilitata-->
        <!-- attributi select normale name/id/data-placeholder (facoltativo, in mancanza viene appeso un placeholder di default) -->
        <div class="dropdown select-custom" name="sc" id="sc"></div>
      </div>
      <div class="form-group col-md-4">
        <label class="control-label">Select con checkbox</label>
        <!-- attributi select con checkbox: 
          name
          id
          class has-checkbox se è di tipo checkbox
          data-placeholder (facoltativo, in mancanza viene appeso un placeholder di default) 
        -->
        <div class="dropdown select-custom has-checkbox" name="scCheckbox" id="scCheckbox" data-placeholder="Seleziona"></div>
      </div>
      <div class="form-group col-md-4">
        <label class="control-label">Select bottone funzionale</label>
        <!-- attributi select con checkbox: 
          name
          id
          has-btn se è di tipo btn
          data-placeholder (facoltativo, in mancanza viene appeso un placeholder di default) 
        -->
        <div class="dropdown select-custom has-btn" name="scBtn" id="scBtn" data-placeholder="OPERAZIONI MASSIVE"></div>
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
                "id": 0,
                "text": "Seleziona",
                "value":"0",
                "selected": true
              },
              {
                "id": 1,
                "text": "Option 1",
                "value": "1"
              },
              {
                "id": 2,
                "text": "Option 2",
                "value": "2"
               
              },
              {
                "id": 3,
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
                "id": 0,
                "text": "Seleziona tutti",
                "value": "all" //importante passare questo value perché lo raccolgo nel js e ne determina il funzionamento di selezione di tutte le voci
                
          },
          {
                "id": 1,
                "text": "Option 1",
                "value": "1",
                
          },
          {
                "id": 2,
                "text": "Option 2",
                "value": "2"
          }
        ]
      }
      
      var paramsFintaSelectBtn = {
        "idSel": "scBtn",
        "nameSel":"scBtn",
         //esempio di array con i valori per la select
        "dataOptions" : [
          {
                "id": 1,
                "text": "Associa progetto",
                "value": "10",
                "selected": false
              },
              {
                "id": 2,
                "text": "Modifica categoria/sottocategoria",
                "value": "200",
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
      //esegue la finta select con i check
      $("#" + paramsFintaSelectBtn.idSel).initSelectCustom(paramsFintaSelectBtn, function(){
        $("input[name='checkFieldCb']").on("click",function(e) {
          var dropDown = $("#scBtn"),
              valueToPass = $("input[name='checkFieldCb']:checked").length;
          $(".value-btn").html(valueToPass);
            e.stopPropagation();
            dropDown.find('.dropdown-toggle').dropdown('toggle');
            dropDown.find(".dropdown-menu .select-custom-option").attr("data-value",valueToPass).click();
        })
      })
     
    })
    
    
    //funzione di inizializzazione della finta select passo i valori per costriuire la select e le callback
</script>
