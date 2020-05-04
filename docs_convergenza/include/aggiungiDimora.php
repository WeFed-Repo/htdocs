<?php
    $dimoratype = $_GET['dimoratype'];
    if ($dimoratype == 'DA') {
        $importoMax =  "50.000";
    }
    else {
        $importoMax =  "25.000";
    }
?>
<div class="wrapper-garanzie">
    <div class="form-group">
        <div class="row">
            <div class="form-field-input col-xs-12 col-sm-5">
                <label class="control-label">Tipo di abitazione</label>
                <select name="" class="form-control">
                    <option>Seleziona</option>
                    <option>Appartamento/villa a schiera</option>
                    <option>Villa</option>
                </select>
            </div>
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
                <input type="text" name="" class="form-control" placeholder="mq"/>
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
            <div class="form-field-input col-sm-5">
                <label class="control-label">Indirizzo</label>
                <div class="form-field">
                    <input type="text" placeholder="Es. Viale Monte Bianco, 4" class="form-control" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-field-input col-xs-12 col-sm-5">
                <label class="control-label">Provincia</label>
                <div class="form-field">
                    <select name="" class="form-control">
                        <option>Seleziona</option>
                        <option>Lorem</option>
                        <option>Lorem</option>
                    </select>
                </div>
            </div>
            <div class="form-field-input col-xs-12 col-sm-5">
                <label class="control-label">Comune</label>
                <div class="form-field">
                    <select name="" class="form-control">
                        <option>Seleziona</option>
                        <option>Lorem</option>
                        <option>Lorem</option>
                    </select>
                </div>
            </div>
            <div class="form-field-input col-xs-12 col-sm-2">
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
                <input class="flLeft" type="checkbox" name="" id="checkedFirst" class="input-toggle-hidden">
                <span class="text-checkbox">Danni al fabbricato</span>
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
        <hr>
        <div class="row"> 
            <div class="form-field-input col-xs-12 col-sm-6">
            <label>
                <input  class="flLeft" type="checkbox" name="" id="checkedSecond" class="input-toggle-hidden"> 
                <span class="text-checkbox">Furto, rapina e scippo</span>
            </label>
            <a class="flLeft width100 paddingForBox link-text text-underline" data-toggle="modal" data-target="#modaleGaranzia2">Dettagli garanzia</a>  
            </div>
            <div class="form-field-input col-xs-12 col-sm-12 paddingLeftExtraLarge" id="checkedSecondCont">
                <label class="control-label">Somma assicurata </label>
                <div class="input-group">
                    <input type="text" placeholder="€" class="form-control wauto" /> <span class="note flLeft input-line"> Min 2.000 &euro;- max <?php echo $importoMax ?> &euro;</span>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="form-field-input col-xs-12 col-sm-6">
            <label>
                <input class="flLeft" type="checkbox" name="" id="checkedThird" class="input-toggle-hidden"> 
                <span class="text-checkbox">Danni al contenuto</span>
            </label>
            <a class="flLeft width100 paddingForBox link-text text-underline" data-toggle="modal" data-target="#modaleGaranzia3">Dettagli garanzia</a>  
            </div>
            <div class="form-field-input col-xs-12 col-sm-12 paddingLeftExtraLarge" id="checkedThird">
                <label class="control-label">Somma assicurata</label>
                <div class="input-group">
                    <input type="text" placeholder="€" class="form-control wauto" /> <span class="note flLeft input-line"> Min 5.000 &euro; -max 500.000 &euro;</span>
                </div>
            </div>
        </div>
    
    </div>
</div>


<script>
    initTooltip();
    $("#checkedFirst").on("click", function(){
       if($(this).is(":checked")) {
         $("#checkedFirstCont").show();
       }
       else {
        $("#checkedFirstCont").hide();
       }
    })
    $("#checkedThird").on("click", function(){
       if($(this).is(":checked")) {
          $("#modaleGaranziaDanni").modal("show");
       }
       else {
         $("#modaleGaranziaDanni").modal("hide");
       }
    })
    $("#modaleGaranziaDanni .btn-default").on("click", function(){
        $("#modaleGaranziaDanni").modal("hide");
        $("#checkedThird").attr("checked",false);
    })

</script>