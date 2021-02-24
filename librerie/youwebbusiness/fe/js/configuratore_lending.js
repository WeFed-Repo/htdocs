/* Oggetti relativi alla smart lending */
var sml;

/* Avvio del configuratore con parametri */
var startLending = function(params) {

    console.log(params);

    // Inizializzazione dei parametri e dei vari oggetti del configuratore
    sml = new Object({
            wrap: $(params.id).addClass("loading")
        }
    );

    sml.wrap.append("<span>prova</span>");


    setTimeout(function(){
        
        // Fine caricamento oggetto
        sml.wrap.removeClass("loading");
        
    },
    1000);

}
   
    
/* inserisce onload il configuratore */
var confLending = function(params){

    $(function(){startLending(params)});

} 