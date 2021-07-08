<section>
  <!--
      - Ricordarsi di caricare un solo HTAG come attivo nel caso ci si trovi in modalità monotag!!!
  -->
  <div class="bordered htag-module mono-htag" id="myhtagcomponent">
    <div class="row">
      <div class="col-12">
        <h2>Crea qui il tuo hashtag</h4>
        <p>Per creare il tuo hashtag digita e clicca invio</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="htag-subtitle">
          <p>Selezionalo tra gli hashtag già creati</p>
        </div>      
        <div class="htag-wall">
          <!-- Area Caricamento Htag -->
        </div>
        <a id="more-htag" class="more-minus-htag text-with-icon right-icon float-right">
          <span class="icon icon-circle_plus"></span>
          Vedi tutti
        </a>
        <a id="minus-htag" class="more-minus-htag text-with-icon right-icon float-right d-none">
          <span class="icon icon-circle_minus"></span>
          Vedi meno
        </a>
      </div>
      <div class="col-12 col-md-6">
        <div class="htag-subtitle">
          <p>oppure creane uno nuovo</p>
        </div>
        <form class="form-grid">
          <div class="form-row">
            <div class="form-group col-12">
                <label class="control-label"><strong>Scrivi qui l’hashtag</strong></label>
                <div class="form-row">
                  <div class="col-12 col-sm-8 col-md-9 col-lg-10">
                    <input type="text" class="form-control input-all-border" name="htag-input" placeholder="Inserisci hashtag" id="htag-input" value="">
                  </div>
                  <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                    <a class="btn btn-white brd-green fl-right btn-xs-full w-100" id="btnCreaTag">Crea</a>
                  </div>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <div class="htag-subtitle">
          <p><strong>L’hashtag che hai scelto:</strong></p>
        </div> 
        <!-- Nel caso la modalità sia "monotag" ricordarsi di caricare un solo HTAG come attivo!!!
        -->
        <div class="htag-added-wall">
          <!-- Area Caricamento Htag -->
        </div>
      </div>
    </div>
  </div>
</section>

<script>
            // Esempio Configurazione Oggetto Htag
            var defHtag = {
                "Htag": {
                    "ShowNumber": 3,
                    // monotag | multitag
                    "Type": "multitag",
                    "TagExisting": [
                        {
                            "Name": "Progetto1",
                            "Value": "Progetto1",
                            "State": "selected",
                            "Origin": "old"
                        },
                        {
                            "Name": "Progetto2",
                            "Value": "Progetto2",
                            "State": "unselected",
                            "Origin": "old"
                        },
                        {
                            "Name": "Progetto3",
                            "Value": "Progetto3",
                            "State": "unselected",
                            "Origin": "old"
                        },
                        {
                            "Name": "Progetto4",
                            "Value": "Progetto4",
                            "State": "unselected",
                            "Origin": "old"
                        },
                        {
                            "Name": "Progetto5",
                            "Value": "Progetto5",
                            "State": "unselected",
                            "Origin": "old"
                        }
                    ]
                }
            }


            /* ########## START componente Htag[SG] ######### */
            /* Oggetti relativi all htg */
            var htg;
            var myid;
            /* Avvio dell htg con parametri */
            var startHtag = function (params) {

                // Crea l'oggetto con i valori di default
                htg = new Object({
                    type: "multitag",
                    shownumber: 3,
                    tagexisting: []
                })

                myid = '';

                // Assegna i valori leggendo l'oggetto di configurazione in ingresso (se ricevuto)
                if (params.objConf) {
                    htg.tagexisting = params.objConf.Htag.TagExisting;
                    htg.type = params.objConf.Htag.Type;
                    htg.shownumber = params.objConf.Htag.ShowNumber;
                } 
                
                if (params.id) {
                  myid = params.id;
                } 
                                                

                // #### Funzioni di Appoggio ####
                // Generazione dei contenuti in base al nuovo oggetto
                function htgupdate(){
                  // Pulisco tutti i tag
                  $(myid + ' .htag-tag').remove();
                  $(myid + ' input[name=htag-input]').prop('disabled', false);
                  $(myid + ' #btnCreaTag').removeClass('disabled');
                  $(myid + ' input[name=htag-input]').val('');
                  // Rigenero i Tag in base all'oggetto
                  let counter = 1
                  $.each(htg.tagexisting,function(){                                    
                    let newtag = '<div id="tg-' + counter + '" class="htag-tag ' + ($(this)[0].State=="selected"? 'selected' : '') + ' ' + (counter>htg.shownumber? 'htag-hide' : '') + '" value="' + $(this)[0].Value + '" title="' + $(this)[0].Name + '"><i class="icon icon-round_check"></i><span class="htag-text">#' + $(this)[0].Name + '</span></div>';
                    // Verifico se sia un tag di configurazione o nuovo 
                    if($(this)[0].Origin=="old"){
                      $(myid + " .htag-wall").append(newtag);
                    }
                    // Generazione Tag nel selected Wall  
                    if($(this)[0].State == "selected") {
                      let newtag = '<div id="tg-' + counter + '-add" class="htag-tag selected" value="' + $(this)[0].Value + '" title="' + $(this)[0].Name + '"><i class="icon icon-close"></i><span class="htag-text">#' + $(this)[0].Name + '</span></div>';
                      $(myid + " .htag-added-wall").append(newtag);
                      if(htg.type == "monotag"){
                        $(myid + ' input[name=htag-input]').prop('disabled', true);
                        $(myid + ' #btnCreaTag').addClass('disabled');
                      }
                    }
                    counter++;
                  });
                  console.log(htg);
                }  

                // Funzione per aggiornare l'oggetto al click sul tag esistente
                function htagChangeObj() { 
                  let tagpos = $(this).attr('id').replace('tg-','').replace('-add','') - 1;                  
                  if(htg.type == "monotag"){
                    // Nel caso siamo nella gestione monotag
                    $.each(htg.tagexisting,function(index){ 
                      if(tagpos == index) {
                        if(htg.tagexisting[tagpos].Origin == "old"){
                          if(htg.tagexisting[tagpos].State == "selected"){
                            htg.tagexisting[tagpos].State = "unselected";
                          } else {
                            htg.tagexisting[tagpos].State = "selected";
                          }
                        } else {
                          htg.tagexisting.splice(tagpos,1);
                        }
                      } else {
                        if(htg.tagexisting[index].Origin == "old"){
                          htg.tagexisting[index].State = "unselected";
                        } else {                          
                          htg.tagexisting.splice(index,1);
                        }
                      }                     
                    });                 
                  } else {
                    // Nel caso siamo nella gestione multitag
                    if(htg.tagexisting[tagpos].Origin == "old"){
                      if(htg.tagexisting[tagpos].State == "selected"){
                        htg.tagexisting[tagpos].State = "unselected";
                      } else {
                        htg.tagexisting[tagpos].State = "selected";
                      }
                    } else {
                      htg.tagexisting.splice(tagpos,1);
                    }
                  } 
                  htgupdate();
                }

                // Funzione per aggiornare l'oggetto al click sul crea
                function htagPushObj() {                
                  if(htg.type == "monotag"){
                    // Nel caso siamo nella gestione monotag pulisco tutto
                    $.each(htg.tagexisting,function(index){ 
                      htg.tagexisting[index].State = "unselected";                  
                    }); 
                  }
                  // Push del nuovo tag
                  let newtagtext = '';
                  if($(myid + ' input[name=htag-input]').val().trim().charAt(0)=="#") {
                    newtagtext = $(myid + ' input[name=htag-input]').val().trim().substring(1);
                  }else{
                    newtagtext = $(myid + ' input[name=htag-input]').val().trim();
                  }
                  let data = {
                              "Name": newtagtext,
                              "Value": newtagtext,
                              "State": "selected",
                              "Origin": "new"
                            }
                  htg.tagexisting.push(data);           
                  htgupdate();
                }

                // Funzione mostra tutti
                function htagshowall(){
                  if(htg.tagexisting.lenght != htg.shownumber){
                    htg.shownumber = htg.tagexisting.lenght;
                  } else {
                    htg.shownumber = params.objConf.Htag.ShowNumber;
                  }
                  $(myid + ' .more-minus-htag').toggleClass("d-none");
                  htgupdate();
                }

                // ControlloRegex
                $(myid + ' input[name=htag-input]').keyup(function() {
                  $(this).val($(this).val().replace(/[^A-Z0-9]/ig, ''));
                });

                // Attribuzione               
                $(document).on('click', (myid + ' .htag-tag'), htagChangeObj);
                $(myid + ' #btnCreaTag').click(htagPushObj);
                $(myid + ' .more-minus-htag').click(htagshowall);
                
                // Init
                htgupdate();
            } 


            /* Chiamata del componente Htag */
            startHtag({
                id: "#myhtagcomponent",
                objConf: defHtag,
                
                // Handler Htag attivi [rivedere]
            
            })
        </script>