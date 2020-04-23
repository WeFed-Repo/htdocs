<div class="wrapper-garanzie">   
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
                <div class="form-field indirizzoOutput">
                    <span class="resume">Via Roma 5, Milano 20122 (MI)</span> 
                    <a href="javascript:;" title="modifica" class="link-text paddingLeftMedium changeInd" onclick="changeInd(this)">
                        <i class="icon icon-edit_fill ico-title"></i>
                    </a>
                </div>
            </div>
        </div>
     </div>
    <div class="form-group selezioneCCNoBor det-modifica" style="display: none">
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
        <div class="alignLeft btnWrapper">
            <a type="button" href="javascript:;" class="btn btn-default small" title="Indietro" onclick="resetCampi(this)">Indietro</a>
            <a type="button" href="javascript:;" class="btn btn-primary small" title="Prosegui" onclick="resetCampi(this)">Conferma</a>
        </div>
    </div>
    <div class="form-group">
        <h3 class="titleSection titleForm">Seleziona le garanzie</h3>
        <div class="row">
            <div class="form-field-input col-xs-12 col-sm-6">
            <label>
                <input type="checkbox" name="" id="checkedFirstBox" class="input-toggle-hidden">Danni al fabbricato
            </label>
            <a class="flLeft width100 paddingForBox link-text text-underline" data-toggle="modal" data-target="#modaleGaranzia">Dettagli garanzia</a>  
            </div>
            <div class="form-field-input col-xs-12 col-sm-12 paddingLeftExtraLarge" id="checkedFirstContBox" style="display: none;">
                <label class="control-label">Valore immobile 
                    <a class="btn-icon" href="javascript:;">
                        <i class="icon icon-info_fill icon-2x"  data-toggle="tooltip" data-title="Corrisponde al valore di ricostruzione dell'immobile calcolato sulla base dei mq e della categoria catastale."></i>
                    </a>
                </label>
                <div class="input-group"><span class="output">xxx.xxx,xx &euro;</span></div>
            </div>
        </div>
    </div>
</div>
<script>
     initTooltip();
  
    $("#checkedFirstBox").on("click", function(){
       if($(this).is(":checked")) {
         $("#checkedFirstContBox").show();
       }
       else {
        $("#checkedFirstContBox").hide();
       }
    })
    
</script>
