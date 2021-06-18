

<div class="bordered mb-4">
 <form class="form-grid needs-validation" novalidate>
    <div class="form-row">
      <div class="form-group col-sm-4">
        <label class="control-label">Select normal</label>
        <!- aggiugere classe disabled e attributo disabled per select disabilitata-->
        <!- attributi select normale name/id/data-placeholder (facoltativo, in mancanza viene appeso un placeholder di default) -->
        <div class="dropdown select-custom" name="sc" id="sc"></div>
      </div>
      <div class="form-group col-sm-4">
        <label class="control-label">Select con checkbox</label>
        <!- attributi select con checkbox: 
          name
          id
          data-checkbox=true (ne determina la tipologia)
          data-placeholder (facoltativo, in mancanza viene appeso un placeholder di default) 
        -->
        <div class=" dropdown select-custom" name="scCheckbox" id="scCheckbox" data-checkbox=true data-placeholder="Seleziona"></div>
      </div>
      <div class="form-group col-sm-4">
        <label class="control-label">Select bottone funzionale</label>
        <!- attributi select con checkbox: 
          name
          id
          data-btn=true (ne determina la tipologia)
          data-placeholder (facoltativo, in mancanza viene appeso un placeholder di default) 
        -->
        <div class=" dropdown select-custom" name="scBtn" id="scBtn" data-btn=true data-placeholder="lorem ipsum"></div>
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
        var dataOptionsCheckSelect =  [
              {
                "id": 0,
                "text": "Seleziona tutti",
                "value": "all" //importante passare questo value perché lo raccolgo nel js e ne determina il funzionamento di selezione di tutte le voci
                
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
                "value": "2"
                
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
