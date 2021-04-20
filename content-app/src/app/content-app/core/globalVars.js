// Inizializzazione funzionale "locale"
var ambiente  = ()=>{
    var ambiente = "local";
    return ambiente;
}

export const GlobalVars = {
    amb: ambiente,
    apibaseurl: {
        "local": "/assets/json",
        "lib": "/include/ajax/fida",
        "prod": "/pathdiproduzione"
    }[ambiente]
};