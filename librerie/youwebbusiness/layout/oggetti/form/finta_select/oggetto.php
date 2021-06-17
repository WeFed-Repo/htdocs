

<div class="bordered mb-4">
 <form class="form-grid needs-validation" novalidate>
    <div class="form-row">
      <div class="form-group col-sm-4">
        <label class="control-label">Select normal</label>
        <div class="dropdown select-custom" name="sc" id="sc"></div>
      </div>
      <div class="form-group col-sm-4">
        <label class="control-label">Select con checkbox</label>
        <div class=" dropdown select-custom" name="scCheckbox" id="scCheckbox" data-checkbox=true data-placeholder="Seleziona.."></div>
      </div>
      <div class="form-group col-sm-4">
        <label class="control-label">Select bottone funzionale</label>
        <div class=" dropdown select-custom" name="scBtn" id="scBtn" data-btn=true data-placeholder="Operazioni massive"></div>
      </div>
    </div>
</form>
</div>

<!-- includo funzione per inizializzare la select customizzate-->
<script src="./fe/js/init_select_custom.js"></script>
<script type="text/javascript">
    $(function () {
      //esempio di array con i valori per la select
      var dataOptionsSimpleSelect =  [
              {
                "id": 0,
                "text": "Seleziona",
                "value":"0",
                "selected": true
              },
              {
                "id": 1,
                "text": "Option 1",
                "value": "1",
                "selected": false
              },
              {
                "id": 2,
                "text": "Option 2",
                "value": "2",
                "disabled": true
              },
              {
                "id": 3,
                "text": "Option 3",
                "value": "3",
                "disabled": true
              }
        ]
        var dataOptionsCheckSelect =  [
              {
                "id": 1,
                "text": "Option 1",
                "value": "1",
                "selected": false
              },
              {
                "id": 2,
                "text": "Option 2",
                "value": "2",
                "disabled": true
              }
        ]
        var dataOptionsBtn =  [
              {
                "id": 1,
                "text": "Option 1",
                "value": "1",
                "selected": false
              },
              {
                "id": 2,
                "text": "Option 2",
                "value": "2",
                "disabled": true
              }
        ]
      
      //esegue la finta select normale
      $("#sc").initSelectCustom(dataOptionsSimpleSelect, function(){
            console.log("funzione di cmb");
      });
       //esegue la finta select con i check
      $("#scCheckbox").initSelectCustom(dataOptionsCheckSelect, function(){
            console.log("funzione di cmb");
      })
      //esegue la finta select con i check
      $("#scBtn").initSelectCustom(dataOptionsBtn, function(){
            console.log("funzione di cmb");
      })
     
    })
    
    
    //funzione di inizializzazione della finta select passo i valori per costriuire la select e le callback
</script>
