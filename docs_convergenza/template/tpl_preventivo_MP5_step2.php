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
        <p>Puoi indicare fino ad un massimo di <strong>due fabbricati</strong> (a scelta tra abitazione abituale, saltuaria e box) e <strong>una persona</strong> (soggetto fisico).</p>        
        <div class="formWrapper garanzia-box visible">
            <div class="form-group">
                <div class="row">
                    <div class="form-field-input col-xs-12 col-sm-12">
                        <div class="form-field">
                            <div class="row">
                                <div class="form-field-input col-xs-12 col-sm-6">
                                    <label class="control-label">Bene/soggetto da assicurare</label>
                                    <select name="" class="form-control bene-assicurato" id="bene-assicurato_0">
                                        <option selected="selected" value="">Seleziona</option>
                                        <option value="DA">Dimora abituale</option>
                                        <option value="DS">Dimora saltuaria</option>
                                        <option value="B">box</option>
                                        <option value="SF">Soggetto fisico</option>
                                    </select>
                                </div>
                                <div class="form-field-input col-xs-12 col-sm-6" id="datiAssicurato" style="display:none">
                                    <label class="control-label">Assicurato
                                        <a class="btn-icon"><i class="icon icon-info_fill icon-2x" data-toggle="tooltip"  title="Per la Tutela legale sono assicurati il Contraente, i figli minori anche se non conviventi, ed ogni familiare e/o persona con lui convivente se presente nello Stato di Famiglia.
                                        Per RC e Assistenza: Il Contraente e i familiari conviventi."></i></a>
                                    </label>
                                    <div class="input-group"><span class="output">Lorem ipsum</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-wrapper"></div>
        </div>
        <div class="formWrapper garanzia-box hidden">
            <a class="link-text btn-elimina" href="javascript:;"><i class="icon icon-f-row_contract"></i> Elimina bene</a>
            <div class="form-group">
               <div class="row next-select" >
                    <div class="form-field-input col-xs-12 col-sm-6">
                        <label class="control-label">Bene/soggetto da assicurare</label>
                        <div class="form-field">
                            <div class="row">
                                <div class="form-field-input col-xs-12 col-sm-6">
                                    <select name="" class="form-control bene-assicurato" id="bene-assicurato_1">
                                        <option selected="selected" value="">Seleziona</option>
                                        <option value="DA">Dimora abituale</option>
                                        <option value="DS">Dimora saltuaria</option>
                                        <option value="B">box</option>
                                        <option value="SF">Soggetto fisico</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-wrapper"></div>
        </div>
        <div class="formWrapper garanzia-box hidden">
            <a class="link-text btn-elimina" href="javascript:;"><i class="icon icon-f-row_contract"></i> Elimina bene</a>
            <div class="form-group">
               <div class="row next-select" >
                    <div class="form-field-input col-xs-12 col-sm-6">
                        <label class="control-label">Bene/soggetto da assicurare</label>
                        <div class="form-field">
                            <div class="row">
                                <div class="form-field-input col-xs-12 col-sm-6">
                                    <select name="" class="form-control bene-assicurato" id="bene-assicurato_3">
                                        <option selected="selected" value="">Seleziona</option>
                                        <option value="DA">Dimora abituale</option>
                                        <option value="DS">Dimora saltuaria</option>
                                        <option value="B">box</option>
                                        <option value="SF">Soggetto fisico</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-wrapper"></div>
        </div>
        <div class="formWrapper garanzia-add hidden">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                <a class="link-text btn-aggiungi" href="javascript:;"><i class="icon icon-f-row_expand"></i> Aggiungi bene</a>
            </div>
        </div>
    </form>
</section>
<section>
    <p>Frazionamento</p>
    <p><strong>Per questa polizza è previsto solo il frazionamento annuale.</strong></p>
    <div class="form-group btnWrapper clearfix">
        <div class="btn-align-right">
  		 	<div>
               <a type="button" href="javascript:vai('back')" class="btn btn-default">indietro</a>
  				<a type="button" href="#" class="btn btn-primary" title="prosegui">prosegui</a>
  			</div>
      </div>
  </div>
</section>
<script>
  	//chiamata per caricare html aggiunto
    var   selectAggiungiAss= $('.bene-assicurato'), //select di selezione
          btnAggiungi = $('.btn-aggiungi'),
          btnElimina = $('.btn-elimina')
  
   //alla selezione di una categoria aggiungo o tolgo dall'array di partenza
    $.each(selectAggiungiAss, function(index, value ) {
        $(this).on("change", function() {
            //popolo l'array per l'eventuale select successiva
            valSelected = $(this).find("option:selected").val();
            $("#datiAssicurato").hide();
            if($(".garanzia-box.visible").length<3)
            {
                $(".garanzia-add").removeClass("hidden");
            }
            //Chiamata ad html relativo con switch di contenuto
                switch (valSelected) {
                    case 'DA':
                    urlToCall = "/include/aggiungiDimora.php";
                    dimoraType = "DA";
                    break;
                    case 'DS':
                    urlToCall = "/include/aggiungiDimora.php";
                    dimoraType = "DS";
                    break;
                    case 'B':
                    urlToCall = "/include/aggiungiBox.php";
                    dimoraType = "";
                    break;
                    case 'SF':
                    urlToCall = "/include/aggiungiPersona.php";
                    dimoraType = "";
                    $("#datiAssicurato").show();
                     break;
                    default:
                    $('.add-wrapper').eq(index).html("");
                    $(".garanzia-add").addClass("hidden");
                    break;
                }
            
            if(valSelected!=="")
            {
                $.ajax({
	            type: "GET",
	              url: urlToCall,
	              dataType: 'html',
                  data: "dimoratype=" + dimoraType,
	              success: function(result){
                      //appende html relativo
	                $('.add-wrapper').eq(index).html(result);
                }
             })
            }
        })
        
    
    })

    btnAggiungi.on('click', function(){
       $('.formWrapper.hidden').eq(0).removeClass("hidden").addClass("visible");
        $(".garanzia-add").addClass("hidden");
     })
     btnElimina.on('click', function(){
       var wrapperBox = $(this).closest(".garanzia-box");
       wrapperBox.removeClass("visible").addClass("hidden");
       $(".garanzia-add").removeClass("hidden");
       wrapperBox.find(".bene-assicurato").val("");
       wrapperBox.find(".add-wrapper").html("");
     })
     
    //BOX HIDDEN INDIRIZZO
    var changeInd = function(el) {
        var changeBtn = $(el);
        changeBtn.closest(".indirizzoOutput").hide();
        changeBtn.closest(".wrapper-garanzie").find(".det-modifica").show();
    }
    var resetCampi = function(el) {
            var changeBtn = $(el);
            changeBtn.closest(".wrapper-garanzie").find(".indirizzoOutput").show();
            changeBtn.closest(".wrapper-garanzie").find(".det-modifica").hide();
            changeBtn.closest(".wrapper-garanzie").find(".det-modifica").find("input").val("");
            changeBtn.closest(".wrapper-garanzie").find(".det-modifica").find("select").val("Seleziona");
    }
    
</script>


<!-- HTML modali -->

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
            <p class="noPadding">Risarcimento dei danni derivanti da furto, rapina o scippo di beni sottratti all'interno o al di fuori dell'abitazione.</p>
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
            <p class="noPadding">Risarcimento dei danni involontariamente causati ad altri individui in conseguenza di un evento accidentale legato a:</p>
            <ul>
                <li>proprietà e/o conduzione dell'abitazione (es. una tegola che si stacca dal tetto);</li>
                <li>ambito della vita privata (danni dovuti a esercizio di sport e attività del tempo libero, danni provocati dagli animali domestici, ecc.);</li>
            </ul>
            <p>Sono assicurati il Contraente, i suoi figli minori (anche se non conviventi) e ogni familiare o persona presente nel suo stato di famiglia.</p>
            <h3 class="titleSection titleForm">Assistenza</h3>
            <p class="noPadding">Prestazione di aiuto immediato nel caso in cui il Contraente si trovi in una situazione di difficoltà a seguito di un evento fortuito tra quelli previsti nella presente polizza (e avvenuto durante il periodo di copertura della polizza stessa).<br>
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
<div id="modaleGaranziaDanni" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h1 class="modal-title">ATTENZIONE</h1>
        </div>
        <div class="modal-body">
            <p>La <strong>garanzia Danni al contenuto</strong> per l’abitazione è abbinata alla <strong>garanzia RC e Assistenza</strong>.</p>
            <p>Se decidi di proseguire la <strong>garanzia RC e Assistenza non sarà inserita</strong> nel tuo preventivo.</p>
        </div>
        <div class="modal-footer">
            <div class="alignRight btnWrapper">
              <input type="button" name="annulla" value="annulla" data-dismiss="modal" class="btn btn-default" alt="annulla">   
              <input type="button" name="prosegui" value="prosegui" data-dismiss="modal" class="btn  btn-primary" alt="prosegui">
          </div>
          </div>
      </div>
      </div>
</div>
<div id="modaleGaranzia4" class="modal fade" role="dialog">
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
<div id="modaleGaranzia5" class="modal fade" role="dialog">
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
