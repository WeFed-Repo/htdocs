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
      let newtag = '<div id="tg-' + counter + '" class="htag-tag ' + ($(this)[0].State=="selected"? 'selected' : '') + ' ' + (counter>htg.shownumber? 'htag-hide' : '') + '" value="' + $(this)[0].Value + '" title="' + $(this)[0].Name + '"><i class="icon icon-round_check"></i><span class="htag-text">#' + $(this)[0].Name.substring(0,18) + '</span></div>';
      // Verifico se sia un tag di configurazione o nuovo 
      if($(this)[0].Origin=="old"){
        $(myid + " .htag-wall").append(newtag);
      }
      // Generazione Tag nel selected Wall  
      if($(this)[0].State == "selected") {
        let newtag = '<div id="tg-' + counter + '-add" class="htag-tag selected" value="' + $(this)[0].Value + '" title="' + $(this)[0].Name + '"><i class="icon icon-close"></i><span class="htag-text">#' + $(this)[0].Name.substring(0,18) + '</span></div>';
        $(myid + " .htag-added-wall").append(newtag);
        if(htg.type == "monotag"){
          $(myid + ' input[name=htag-input]').prop('disabled', true);
          $(myid + ' #btnCreaTag').addClass('disabled');
        }
      }
      counter++;
    });
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
  
  // ### CallBack ###
  if(params.handlerModal) handlerModal();
  if(params.handlerGetHtag) handlerGetHtag()
  
}