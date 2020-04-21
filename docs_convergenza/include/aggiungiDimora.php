<?php
    $dimoratype = $_GET['dimoratype'];
    if ($dimoratype == 'DA') {
        $importoMax =  "50.000";
    }
    else {
        $importoMax =  "25.000";
    }
?>

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
    <hr>
    <div class="row"> 
        <div class="form-field-input col-xs-12 col-sm-6">
          <label>
              <input type="checkbox" name="" id="checkedSecond" class="input-toggle-hidden"> Furto, rapina e scippo
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
              <input type="checkbox" name="" id="checkedThird" class="input-toggle-hidden"> Danni al contenuto
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
    <hr>
</div>
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
<div id="modaleGaranzia2" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h1 class="modal-title">FURTO, RAPINA E SCIPPO</h1>
        </div>
        <div class="modal-body">
            <p>Risarcimento dei danni derivanti da furto, rapina o scippo di beni sottratti all'interno o al di fuori dell'abitazione.</p>
            <ul>
                <li>beni mobili; sono inoltre coperti i guasti al contenuto assicurato per commettere il furto o la rapina o per tentare di commetterli, compresi gli atti dolosi;</li>
                <li>beni mobili rientranti nella definizione di contenuto delle dipendenze;</li>
                <li>serramenti; sono inoltre coperti i guasti ai locali ed ai serramenti causati dagli autori del furto o della rapina tentati o consumati, compresi gli atti dolosi. La garanzia non opera per i fabbricati in stato di abbandono, in corso di costruzione, ristrutturazione o non completamente ultimati.</li>
            </ul>
            <p>È inoltre coperta sia la rapina avvenuta all'interno dei locali nonché quella iniziata fuori, purché
            l'impossessamento dei beni mobili avvenga all'interno dei locali stessi.</p>
        </div>
        <div class="modal-footer">
             <div class="align-right">
              <input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
          </div>
          </div>
      </div>
      </div>
</div>
<div id="modaleGaranzia3" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h1 class="modal-title">DANNI AL CONTENUTO</h1>
        </div>
        <div class="modal-body">
            <h3 class="titleSection titleForm">Danni al contenuto</h3>
            <p>Risarcimento <strong>dei danni ai beni mobili situati all’interno dell'abitazione</strong> (di proprietà o in affitto) e <strong>dei locali collegati</strong> (box, cantine, ecc.), provocati da incendio o altri eventi inaspettati (fulmine, esplosione e scoppio, urto veicoli, eventi atmosferici, acqua condotta, ecc.).</p>
            <p><strong>La garanzia è venduta in abbinamento alla garanzia RC e Assistenza.</strong></p>
            <h3 class="titleSection titleForm">Responsabilità civile (RC)</h3>
            <p>Risarcimento dei danni involontariamente causati ad altri individui in conseguenza di un evento accidentale legato a:</p>
            <ul>
                <li>proprietà e/o conduzione dell'abitazione (es. una tegola che si stacca dal tetto);</li>
                <li>ambito della vita privata (danni dovuti a esercizio di sport e attività del tempo libero, danni provocati dagli animali domestici, ecc.);</li>
            </ul>
            <p>Sono assicurati il Contraente, i suoi figli minori (anche se non conviventi) e ogni familiare o persona presente nel suo stato di famiglia.</p>
            <h3 class="titleSection titleForm">Assistenza</h3>
            <p>Prestazione di aiuto immediato nel caso in cui il Contraente si trovi in una situazione di difficoltà a seguito di un evento fortuito tra quelli previsti nella presente polizza (e avvenuto durante il periodo di copertura della polizza stessa).<br>
            Alcune casistiche:</p>
            <ul>
                <li>invio di un elettricista in caso di danni all'impianto elettrico dell'abitazione del Contraente;</li>
                <li>invio di un fabbro in caso di tentata effrazione o guasti a serrature dell'abitazione del Contraente;</li>
                <li>prenotazione e pagamento delle spese alberghiere in caso di sinistri che rendano l’abitazione inagibile;</li>
            </ul>
            <p><strong>È assicurato Il Contraente.</strong></p>
        </div>
        <div class="modal-footer">
             <div class="align-right">
              <input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
          </div>
          </div>
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