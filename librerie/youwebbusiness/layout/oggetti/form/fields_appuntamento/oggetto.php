<div class="bordered mb-4 appuntamento-wrapper">
    <form class="form-grid needs-validation" novalidate="">
    <div class="form-row">
        <div class="form-group col-sm-12 col-md-12">
            <select class="form-control" id="argApp">
                <option selected="" value="0">Seleziona un argomento</option>
                <option value="1">lorem ispum</option>
                <option value="2">lorem ispum</option>
                <option value="3">lorem ispum</option>
          </select>
        </div>
    </div>
    
    <!-- stato normale -->
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label class="control-label">Maggiori dettagli sul motivo dell'appuntamento</label>
                <textarea id="dettApp" name="" rows="4" cols="50" class="form-control"></textarea>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <div class="form-row">
                    <div class="form-group col-sm-12 pb-3 col-md-12">
                        <label class="control-label">Scegli data appuntamento</label>
                        <div class="ca-calendario mb-10 w-100 d-flex"></div>
                    </div>
                    <div class="form-group col-sm-12 col-md-12">
                    <label class="control-label">Orari disponibili</label>
                        <select class="form-control" id="orApp">
                            <option selected=""></option>
                            <option>08.00</option>
                        </select>
                    </div>
                </div>
                
               
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <div class="form-check radio w-field">
                    <input class="form-check-input" type="radio" id="radioMailA" name="radioMail" value="" checked="checked">
                    <label class="form-check-label" for="radioMailA">Scegli tra le email censite a sistema</label>
                    <div class="form-row">
                        <div class="form-group col-sm-12 col-md-12">
                            <select class="form-control mt-1 ml-2 mb-0">
                                <option selected=""></option>
                                <option>pippo@libero.it</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <div class="form-check radio w-field">
                   <input class="form-check-input" type="radio" id="radioMailB" name="radioMail" value="">
                   <label class="form-check-label" for="radioMailB">Inserisci altra mail (non verr&agrave; registrata a sistema)</label>
                   <div class="form-row">
                        <div class="form-group col-sm-12 col-md-12">
                            <input type="text" class="form-control mt-1 ml-2" placeholder="Text">
                        </div>
                    </div>
                </div>
              </div>
         </div>
    </form>
</div>

<script>
    // DATI DI TEST
    var dateArrayNotAvailable = ['10/12/2020','13/12/2020', '30/12/2020']; //eventuale lista di date non disponibili

    //gestione disabilitazione campi textarea e select orari legata alla select scelta argomenti
    var checkFieldsDisabled = function(val) {
        areFieldsDisabled = false;
        val==="0" ? areFieldsDisabled=true : areFieldsDisabled=false;
        if(areFieldsDisabled) {
            $("#dettApp,#orApp").prop("disabled",true);
        }
        else {
            $("#dettApp,#orApp").prop("disabled",false);
        }
    }
    var datePickerFunction = function() {
        $(".ca-calendario").datepicker({
            dateFormat: 'dd-mm-yy', //escludere date antecedenti ad oggi
            minDate: new Date(),
            //se deve essere disabilitato bloccare la possibilità di andare al mese successivo
            maxDate: areFieldsDisabled ? 0 : "",
            beforeShowDay: function(e){
               
                var day = e.getDay();
                var d = ( '0' + e.getDate() ).slice(-2)
                var m = ( '0' + (e.getMonth()+1) ).slice(-2);
                var y = e.getFullYear();
                var n = d+'/'+m+'/'+y;
                //controllo che il campo non debba essere completamente disabilitato
                if(!areFieldsDisabled) {
                    return [  dateArrayNotAvailable.indexOf(n) == -1 && day != 0 && day !=6] ;
                }
                else {
                    $('.ui-datepicker').addClass("disabled");
                    return [false, "", "Unavailable"];
                }
             }
         })
    }
    $(function(){
        //richiamo la disabilitazione dei campi legata alla select scelta argomenti
        checkFieldsDisabled($("#argApp").val());
        $("#argApp").on("change",function(){
            checkFieldsDisabled($(this).val());
            //al change ricostruisco il calendario
            $(".ca-calendario").datepicker( "destroy");
            datePickerFunction();
           
        })
        //al load costruisco il calendario
        datePickerFunction();
    });
    
    
</script>