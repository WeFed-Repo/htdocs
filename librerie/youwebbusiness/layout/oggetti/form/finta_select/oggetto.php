

<div class="bordered mb-4">
 <form class="form-grid needs-validation" novalidate>
    <div class="form-row">
      <div class="form-group col-sm-4">
        <label class="control-label">Select normal</label>
        <div class="dropdown select-custom" name="sc" id="sc" data-placeholder="Seleziona"></div>
      </div>
      <div class="form-group col-sm-4">
        <label class="control-label">Select con checkbox</label>
        <div class=" dropdown select-custom" name="scCheckbox" id="scCheckbox" data-checkbox=true data-placeholder="Seleziona"></div>
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
      var dataOptions =  [
              {
                "id": 0,
                "text": "Option 1",
                "value":"1"
              },
              {
                "id": 1,
                "text": "Option 2",
                "value": "2",
                "selected": true
              },
              {
                "id": 2,
                "text": "Option 3",
                "value": "3",
                "disabled": true
              }
        ]
      
      
      $(".select-custom").each(function(){
        $(this).initSelectCustom(dataOptions, function(){
            console.log("funzione di cmb");
        })
      }) 
    })
    
    
    //funzione di inizializzazione della finta select passo i valori per costriuire la select e le callback
</script>
