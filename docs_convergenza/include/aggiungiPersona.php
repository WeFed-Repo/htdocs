<div class="form-group">
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
        <div class="form-field-input col-xs-12 col-sm-12">
          <label>
              <input type="checkbox" name="" id="" class="input-toggle-hidden">Responsabilità civile verso terzi e Assistenza
           </label>
           <a class="flLeft width100 paddingForBox link-text text-underline" data-toggle="modal" data-target="#modaleGaranzia">Dettagli garanzia</a>  
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
              <input type="checkbox" name="" id="" class="input-toggle-hidden">Tutela legale (acquistabile solo in abbinamento con la garanzia "Responsabilità civile verso terzi e Assistenza")
           </label>
           <a class="flLeft width100 paddingForBox link-text text-underline" data-toggle="modal" data-target="#modaleGaranzia2">Dettagli garanzia</a>  
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
    
</script>
<div id="modaleGaranzia" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h1 class="modal-title">RC E ASSISTENZA</h1>
        </div>
        <div class="modal-body">
        <strong>RC</strong><br>
        Responsabilità civile: <strong>risarcimento dei danni causati</strong> involontariamente ad altri individui <strong>in conseguenza di un fatto accidentale legato alla proprietà del fabbricato e/o alla sua conduzione o attinente la vita privata</strong> (danni dovuti a esercizio di sport e attività del tempo libero, danni provocati dagli animali domestici…).
<br>
<strong>Sono assicurati il Contraente e i familiari conviventi.</strong>
<br>
La copertura è estesa anche ai figli minori anche se non conviventi e ad ogni familiare e/o persona presente nello stato di famiglia del Contraente con esso convivente.
<strong>Assistenza</strong><br> 
<p>Prestazione di <strong>aiuto immediato</strong> nei casi previsti dalla polizza, nel caso in cui il contraente si trovi in una situazione di difficoltà a seguito del verificarsi di un evento fortuito tra quelli previsti nella presente polizza e comunque occorso durante il periodo di copertura della polizza stessa.</p>
<ul>
    <li>invio di elettricista in caso di sinistri all’impianto elettrico dell’abitazione</li>
    <li>invio di idraulico in caso di sinistri all’impianto idraulico dell’abitazione</li>
    <li>prenotazione e pagamento delle spese alberghiere in caso di sinistri che rendano l’abitazione inagibile…).</li>
</ul>
<strong>È assicurato Il Contraente.</strong>
        </div>
        <div class="modal-footer">
             <div class="align-right">
              <input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
          </div>
          </div>
      </div>
      </div>
</div>

<div id="modaleGaranzia2" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h1 class="modal-title">TUTELA LEGALE</h1>
        </div>
        <div class="modal-body">
        Risarcimento delle spese da sostenere in caso di controversie legali, penali o civili legate alla proprietà/locazione dell’abitazione o attinenti la vita privata.
        </div>
        <div class="modal-footer">
             <div class="align-right">
              <input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
          </div>
          </div>
      </div>
      </div>
</div>