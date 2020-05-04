<div class="wrapper-garanzie">       
    <div class="form-group">
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
            <div class="form-field-input col-xs-5">
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
            <div class="form-field-input col-xs-12 col-sm-12">
            <label>
                <input class="flLeft" type="checkbox" name="" id="respCiv" class="input-toggle-hidden"><span class="text-checkbox">Responsabilità civile verso terzi e Assistenza</span>
            </label>
            <a class="flLeft width100 paddingForBox link-text text-underline" data-toggle="modal" data-target="#modaleGaranzia4">Dettagli garanzia</a>  
            </div>
            <div class="form-field-input col-xs-12 col-sm-6 paddingLeftExtraLarge">
                <label class="control-label">Massimale RC</label>
                <div class="input-group">
                    <span class="output">1.000.000 &euro; </span>
                </div>
            </div>
            <div class="form-field-input col-xs-12 col-sm-6 paddingLeftExtraLarge">
                <label class="control-label">Massimale Assistenza</label>
                <div class="input-group">
                    <span class="output">2.500  &euro; </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-field-input col-xs-12 col-sm-12">
            <label>
                <input class="flLeft" type="checkbox" name="" id="tutelaCheck" class="input-toggle-hidden">
                <span class="text-checkbox">Tutela legale (acquistabile solo in abbinamento con la garanzia "Responsabilità civile verso terzi e Assistenza")</span>
            </label>
            <a class="flLeft width100 paddingForBox link-text text-underline" data-toggle="modal" data-target="#modaleGaranzia5">Dettagli garanzia</a>  
            </div>
            <div class="form-field-input col-xs-12 col-sm-6 paddingLeftExtraLarge">
                <label class="control-label">Massimale RC</label>
                <div class="input-group">
                    <span class="output">20.000 &euro; </span>
                </div>
            </div>
            
        </div>
        <hr>
    </div>
</div>
<script>
     initTooltip();
    var changeBtn = $(".changeInd");
   
    $("#tutelaCheck").on("click", function(){
       if($(this).is(":checked")) {
         $("#respCiv").attr("checked",true);
       }
    })
    
</script>


