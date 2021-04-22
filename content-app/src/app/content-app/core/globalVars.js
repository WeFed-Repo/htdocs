// Inizializzazione funzionale "locale"
var ambiente  = function (){
    var ambiente = "local";
    if (location.href.indexOf("wefed.local")>0|| location.href.indexOf("webank.local")>0) ambiente = "lib";
    return ambiente;
}();

export const GlobalVars = {
    amb: ambiente,
    apibaseurl: {
        "local": "/assets/json",
        "lib": "/common/fe/content-app/assets/json",
        "prod": "/pathdiproduzione"
    }[ambiente]
};