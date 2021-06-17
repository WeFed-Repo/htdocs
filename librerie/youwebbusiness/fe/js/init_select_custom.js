//funzione di inizializzazione delle finta select 
//parametri: oggetto per costruire le option + eventuale funzione di callmeback

    $.fn.initSelectCustom = function (sourceOptions,cmbfunction) {
      //definisco variabili di partenza
      var scWrapper = $(this),
          scName =  $(this).attr("name"),
          scId=  $(this).attr("id"),
          scDefaultText = scWrapper.attr("data-placeholder") ? scWrapper.attr("data-placeholder") : "Seleziona";
    
      //definisco le variabili semaforo per determinare il tipo di finta select
        //casistica checkbox
        var isTypeCheckbox = function() {
            return scWrapper.attr("data-checkbox")!== "undefined" && scWrapper.attr("data-checkbox")==="true"  ? true : false
        }
        //casistica bottone funzionale
        var isTypeBtnFunc = function() {
            return scWrapper.attr(" data-btn")!== "undefined" && scWrapper.attr("data-btn")==="true"  ? true : false
        }
    
        //componenti per costruzione html
        var classType = isTypeBtnFunc() ? "btn" : "form-control"  // se è un bottoe funzionale aggiungo classe type altrimenti classe per le select
        scEl = $("<a>")
        .attr("class","dropdown-toggle select-custom-option-el option-selected " + classType)
        .attr("id","dp"+scId)
        .attr("data-toggle","dropdown")
        .attr("aria-haspopup","true") //elemento select a seconda del tip diventa una select o un bottone
        .attr("aria-expanded","true"),  
        inputHidden = $("<input type='hidden' value=''>").attr("name", "inputHidden" + scName), //input hidden da completare con il value se già selected
          
        optionsWrapperEl = $("<ul class='select-custom-options-wrapper dropdown-menu'>").attr("aria-labelledby","dp" + scId), //wrapper delle options
        optionElAll = $("<li class='select-custom-option all'>") //elemento options select all
        .attr("data-value","all")
        .append($("<a class='form-check-inline checkbox'><input type='checkbox' value='all' id='scCheckboxAll'><label class='select-custom-option-el' for='scCheckboxAll'>Seleziona tutti</label></a>"));
          
          
          
          //costruzione html 
          var selectObj =  scEl.html(scDefaultText); //crea la select con il placeholder
          scWrapper.append(selectObj,inputHidden,optionsWrapperEl); //appende al div esterno la select, l'input hidden e ul wrapper della options
          
          //se con check prevedere check all come prima voce della tendina di options
         
          if(isTypeCheckbox()){
             optionsWrapperEl.append(optionElAll);
          }
          
          //cicla creando le options a seconda della tipologia
          $(sourceOptions).each(function(index){
             var optionEl = $("<li class='select-custom-option'>").attr("data-value",sourceOptions[index].id);
                //select semplice o select multipla con checkbox a seconda dell'attributo presente nella select
                 optionsWrapperEl.append(optionEl);
                
                 //se è semplice select stilizzata
                if(!isTypeCheckbox()){
                  var optionText = $("<a class='select-custom-option-el dropdown-item'>");
                  optionEl.append(optionText.html(sourceOptions[index].text));
                }
                //se è con checkbox
                else {
                  var optionText = $("<a class='form-check-inline checkbox'><input type='checkbox' id='checkbox" + index + "'" + "value=" + sourceOptions[index].id +"><label for='checkbox" + index + "'" + "class='select-custom-option-el'></label></a>");
                  optionEl.append(optionText).find("label").html(sourceOptions[index].text);
                }
         })

        //azioni al click sulle voci
        scWrapper.find(".select-custom-option .select-custom-option-el").click(function (e) {
          // Caso select checkbox
          if (isTypeCheckbox()) {
            $('.dropdown-menu.show').on('click', function (e) {
                e.stopPropagation();
             });
             alert("type checkbox");
          }
          //caso select button funzionale
          else if (isTypeBtnFunc()){
            alert("type functional btn");
          }
          //caso select di defaul
          else {
            alert("type normal");
          }
        })
        
        //eventuale funzione di callmeback
        if (cmbfunction) cmbfunction();
       
    }