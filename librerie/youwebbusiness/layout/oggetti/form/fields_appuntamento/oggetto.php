<div class="bordered mb-4 appuntamento-wrapper">
    <form class="form-grid needs-validation" novalidate="">
    <!-- stato normale -->
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-6">
                <label class="control-label">Maggiori dettagli sul motivo dell'appuntamento</label>
                <textarea id="" name="" rows="4" cols="50" class="form-control"></textarea>
            </div>
            <div class="form-group col-sm-12 col-md-6">
                <div class="form-row">
                    <div class="form-group col-sm-12 pb-3 col-md-12">
                        <label class="control-label">Scegli data appuntamento</label>
                        <div class="ca-calendario mb-10 w-100 d-flex"></div>
                    </div>
                    <div class="form-group col-sm-12 col-md-12">
                    <label class="control-label">Orari disponibili</label>
                        <select class="form-control">
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
    var dateArrayNotAvailable = ['25/11/2020','13/11/2020', '30/11/2020']; //eventuale lista di date non disponibili
    $(function(){
        $(".ca-calendario").datepicker({
            dateFormat: 'dd-mm-yy', //escludere date antecedenti ad oggi
            minDate: new Date(),
            beforeShowDay: function(e){
                var day = e.getDay();
                var d = ( '0' + e.getDate() ).slice(-2)
                var m = ( '0' + (e.getMonth()+1) ).slice(-2);
                var y = e.getFullYear();
                var n = d+'/'+m+'/'+y;
               return [  dateArrayNotAvailable.indexOf(n) == -1 && day != 0 && day !=6] ;
             },
            
        })
    });
    
    
</script>