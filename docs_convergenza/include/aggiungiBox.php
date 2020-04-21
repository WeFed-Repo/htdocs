<div class="form-group">
<div class="row">
        <div class="form-field-input col-xs-12 col-sm-5">
            <label class="control-label">Tipologia catastale</label>
            <select name="" class="form-control">
                <option>Seleziona</option>
                <option>A1</option>
                <option>A2</option>
            </select>
        </div>
        <div class="form-field-input col-xs-12 col-sm-2">
            <label class="control-label">Mq</label>
            <input type="text" name="" class="form-control" />
            <span class="note">Min 25 mq</pan>
        </div>
    </div>

<div class="row">
        <div class="col-xs-12">
            <label class="control-label">Indirizzo del bene/soggetto da assicurare</label>
            <div class="form-field" id="indirizzoOutput">
                <span class="resume">Via Roma 5, Milano 20122 (MI)</span> 
                <a id="changeInd" href="javascript:;" title="modifica" class="link-text paddingLeftMedium">
                    <i class="icon icon-edit_fill ico-title"></i>
                </a>
            </div>
        </div>
     </div>
</div>
</div>
<div class="form-group selezioneCCNoBor paddingMedium" id="changeIndwrapper" style="display: none">
    <div class="row">
        <div class="form-field-input col-xs-12">
            <label class="control-label">Indirizzo</label>
            <div class="form-field">
                <input type="text" placeholder="Es. Viale Monte Bianco, 4" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-field-input col-xs-5">
            <label class="control-label">Provincia</label>
            <div class="form-field">
                <select name="" class="form-control">
                    <option>Seleziona</option>
                    <option>Lorem</option>
                    <option>Lorem</option>
                </select>
            </div>
        </div>
        <div class="form-field-input col-xs-5">
            <label class="control-label">Comune</label>
            <div class="form-field">
                <select name="" class="form-control">
                    <option>Seleziona</option>
                    <option>Lorem</option>
                    <option>Lorem</option>
                </select>
            </div>
        </div>
        <div class="form-field-input col-xs-2">
            <label class="control-label">Cap</label>
            <div class="form-field">
                <input type="text"  class="form-control" />
            </div>
        </div>
    </div>
    <div class="alignRight btnWrapper">
        <a type="button" href="javascript:;" class="btn btn-default" id="indietroInd" title="Indietro">Indietro</a>
        <a type="button" href="javascript:;" class="btn btn-primary" id="confermaInd" title="Prosegui">Conferma</a>
    </div>
</div>
<div class="form-group">
    <h3 class="titleSection titleForm">Seleziona le garanzie</h3>
    <div class="row">
        <div class="form-field-input col-xs-12 col-sm-6">
          <label>
              <input type="checkbox" name="" id="checkedFirst" class="input-toggle-hidden">Danni al fabbricato
           </label>
           <a class="flLeft width100 paddingForBox link-text text-underline" data-toggle="modal" data-target="#modaleGaranzia">Dettagli garanzia</a>  
        </div>
        <div class="form-field-input col-xs-12 col-sm-12 paddingLeftExtraLarge" id="checkedFirstCont" style="display: none;">
            <label class="control-label">Valore immobile 
                <a class="btn-icon" href="javascript:;">
                    <i class="icon icon-info_fill icon-2x"  data-toggle="tooltip" data-title="Corrisponde al valore di ricostruzione dell'immobile calcolato sulla base dei mq e della categoria catastale."></i>
                </a>
            </label>
            <div class="input-group"><span class="output">xxx.xxx,xx &euro;</span></div>
        </div>
    </div>
</div>
<script>
    initTooltip();
    $("#changeInd").on("click", function(){
        $("#indirizzoOutput").hide();
        $("#changeIndwrapper").show();
    })
    var resetCampi = function() {
        $("#indirizzoOutput").show();
        $("#changeIndwrapper").hide();
         $("#changeIndwrapper").find("input").val("");
        $("#changeIndwrapper").find("select").val("Seleziona");
    }
    $("#indietroInd").on("click", function(){
        resetCampi();
    })
    $("#confermaInd").on("click", function(){
       //MODIFICARE DINAMICAMENTE L'INDIRIZZO E POI:
       resetCampi();
    })
    $("#checkedFirst").on("click", function(){
       if($(this).is(":checked")) {
         $("#checkedFirstCont").show();
       }
       else {
        $("#checkedFirstCont").hide();
       }
    })
    
</script>
<div id="modaleGaranzia" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h1 class="modal-title">DANNI AL FABBRICATO</h1>
        </div>
        <div class="modal-body">
          
        Risarcimento dei <strong>danni provocati all’abitazione da incendio o altri eventi inaspettati</strong> (fulmine, esplosione e scoppio, urto veicoli, eventi atmosferici, acqua condotta, ecc.).
        </div>
        <div class="modal-footer">
             <div class="align-right">
              <input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
          </div>
          </div>
      </div>
      </div>
</div>