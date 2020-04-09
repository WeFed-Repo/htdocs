<!-- TITOLO DI PAGINA -->
<section>
    <div class="titolo">
            <h1>
                <div class="row">

                    
                    <div class="col-sm-8">
                        <span>Richiedi il preventivo<br><span>Consensi privacy</span></span>
                    </div>
                    <div class="col-sm-4">	
                        <div class="pager pull-right">
                            <div class="circle">1</div>
                            <div class="circle current_page">2</div>
                            <div class="circle">3</div>
                            <div class="circle">4</div>
                        </div>
                    </div>
                    
                </div>
            </h1>
    </div>
</section>
<!-- FORM CON DATI CONTRAENTI -->
<section>
<form method="post" action="">
	<h3 class="titleSection titleForm">Dati personali</h3>
        <div class="formWrapper">
            <div class="form-group">
                <div class="row">
                    <div class="form-field-input col-xs-12 col-sm-4">
                        <label class="control-label">Contraente</label>
                        <div class="form-field">
                            <div class="row">
                                <div class="col-xs-12">
                                    <span class="resume">nome_cognome</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" form-field-input col-xs-12 col-sm-4">
                        <label class="control-label">Assicurato</label>
                        <div class="form-field">
                            <div class="row">
                                <div class="col-xs-12">
                                    <span class="resume">nome_cognome</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--SELECT CON DETTAGLI -->
                        <div class="col-xs-12 col-sm-4 form-field-input">
                        <label class="control-label">
                        Seleziona la tua filiale
                        <a class="btn-icon"><i class="icon icon-info_fill icon-2x" data-toggle="tooltip"  title="A quale filiale vuoi associare la tua polizza? Scegli l'indirizzo che ti è più comodo. Potresti aver bisogno di andarci per ottenere la documentazione cartacea, ricevere assistenza dopo l'acquisto, disdire la tua polizza, ecc."></i></a>
                        </label>
                        <script type="text/javascript">
                            /* Esempio inizializzazione */
                            $(function(){
                                // Inizializza la special-select tipo "default" (esempio di callback)
                                $("#spselDetail").spSel();
                            });

                        </script>
                        <div class="spsel nosel" id="spselDetail"  placeholder="Seleziona...">
                            <input type="hidden" name="spselDetailInput">
                            <div class="spsel-options">
                                <div class="spsel-option" data-value="0">
                                    <a class="spsel-option-el">Elemento 0 lorem ipsum dolor sit amet<span class="only-detail"><br>Lorem <strong>ipsum</strong> dolor<br><span>XXXX</span></a>
                                </div>
                                <div class="spsel-option" data-value="1">
                                    <a class="spsel-option-el">Elemento 0 lorem ipsum dolor sit amet<span class="only-detail"><br>Lorem <strong>ipsum</strong> dolor<br><span>XXXX</span></a>
                                </div>
                            </div>
                        </div>
                    
                        </div>
            </div>
        </div>
</form>
</section>
<!-- -->
<!-- FORM BENI DA ASSICURARE -->
<section>
    <form method="post" action="" id="aggiungiAssicurazioni">
        <h3 class="titleSection titleForm">Beni da assicurare</h3>
        <p>Puoi indicare fino ad un massimo di due fabbricati (a scelta tra abitazione abituale, saltuaria e box) e una persona (soggetto fisico).</p>        
        <div class="formWrapper">
            <div class="form-group">
                <div class="row">
                    <div class="form-field-input col-xs-12 col-sm-46">
                        <label class="control-label">Bene/soggetto da assicurare</label>
                        <div class="form-field">
                            <div class="row">
                                <div class="form-field-input col-xs-6 col-sm-6">
                                <select name="" class="form-control bene-assicurato" id="bene-assicurato_0">
                                    <option id="" selected="selected" value="">Seleziona</option>             
                                    <option id="" value="DA">Dimora abituale</option>
                                    <option id="" value="DS">Dimora saltuaria</option>
                                    <option id="" value="B">Box</option>
                                    <option id="" value="SF">Soggetto fisico</option>
                                </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-wrapper"></div>
         </div>
         <div class="formWrapper hidden">
            <div class="form-group">
               <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <a class="link-text btn-aggiungi" href="javascript:;"><i class="icon icon-f-row_expand"></i> Aggiungi bene</a>
                        <a class="link-text btn-elimina hidden" href="javascript:;" data-select-rel="#bene-assicurato_1"><i class="icon icon-f-row_contract"></i> Elimina bene</a>
                    </div>
                </div>
                <div class="row next-select hidden" >
                    <div class="form-field-input col-xs-12 col-sm-46">
                        <label class="control-label">Bene/soggetto da assicurare</label>
                        <div class="form-field">
                            <div class="row">
                                <div class="form-field-input col-xs-6 col-sm-6">
                                    <select name="" class="form-control bene-assicurato" id="bene-assicurato_1"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-wrapper"></div>
         </div>
         <div class="formWrapper hidden">
            <div class="form-group">
               <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <a class="link-text btn-aggiungi" href="javascript:;"><i class="icon icon-f-row_expand"></i> Aggiungi bene</a>
                        <a class="link-text btn-elimina hidden" href="javascript:;"><i class="icon icon-f-row_contract"></i> Elimina bene</a>
                    </div>
                </div>
                <div class="row next-select hidden" >
                    <div class="form-field-input col-xs-12 col-sm-46">
                        <label class="control-label">Bene/soggetto da assicurare</label>
                        <div class="form-field">
                            <div class="row">
                                <div class="form-field-input col-xs-6 col-sm-6">
                                    <select name="" class="form-control bene-assicurato" id="bene-assicurato_2"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-wrapper"></div>
         </div>
    </form>
</section>
<script>
  	//chiamata per caricare html aggiunto
    var  selectAggiungiAss= $('.bene-assicurato'),
          btnAggiungi = $('.btn-aggiungi'),
          btnElimina = $('.btn-elimina'),
          arrayOption = [{value:"DA",text:"Dimora abituale"}, {value:"DS",text:"Dimora saltuaria"}, {value:"B",text:"box"},{ value:"SF", text:"Soggetto fisico"}],
          arrayOptionSelected = [],
          nextArrayOptions = [],
          optionList = []
          
    $.each(selectAggiungiAss, function(index, value ) {
        $(this).on("change", function() {
            var  selectAggiungiAss = $(this),
            urlToCall;
            arrayOptionSelected = [];
            nextArrayOptions[index] = [];
            optionList[index] = [];
            arrayOptionSelected.push({value: $(this).val(), text: $(this).find("option:selected").text() });
            nextArrayOptions[index] = arrayOption.filter(function(value,index) {
              return value =! arrayOptionSelected[index] 
            });
            optionList[index] = nextArrayOptions[index].map(el => {return "<option value=" + el["value"] +">" + el["text"] +"</option>"})
            $("#bene-assicurato_" + (index+1)).html('<option id="" selected="selected" value="">Seleziona</option>' + optionList[index]);
       
        switch (selectAggiungiAss.val()) {
    	 	case 'DA':
            case 'DS':
            urlToCall = "/include/aggiungiDimora.html";
    	 	break;

    	 	case 'B':
                urlToCall = "/include/aggiungiBox.html";
    	 	break;

    	 	case 'SF':
            urlToCall = "/include/aggiungiPersona.html";
    	 	break;
            default:
            break;
    	 	
    	}
        
        $.ajax({
	          type: "POST",
	              url: urlToCall,
	              dataType: 'html',
	              success: function(result){
	                var addWrapper = selectAggiungiAss.closest('.formWrapper').find('.add-wrapper'),
                        nextFormWrapper =  selectAggiungiAss.closest('.formWrapper').next('.formWrapper').eq(0);
                    addWrapper.html("")
    	            addWrapper.html(result);
                    nextFormWrapper.removeClass("hidden");
                }
        })
       })
        })
      
      
      btnAggiungi.on('click', function(){
        
        //TOGLIE NELLA SELECT LA CATEGORIA GIA' SELEZIONATA
       
        $(this).closest(".form-group").find(".hidden").removeClass("hidden");
        $(this).addClass("hidden");
      })
      btnElimina.on('click', function(){
        $($(this).attr("data-select-rel")).html("");
        $(this).closest(".form-group").find(".hidden").removeClass("hidden");
        $(this).closest('.formWrapper').find(".next-select").addClass("hidden");;
        $(this).addClass("hidden");
        
     })

</script>