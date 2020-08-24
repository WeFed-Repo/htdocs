/* ritorna l'ambiente tra locale, librerie, sviluppo, produzione*/
export const ambiente = function () {
    // Default
    let amb = "locale",
        url = window.location.hostname;
    
    if (url === "aletti.wefed.local" || url === "aletti.webank.local" || url==="localhost:3000" || url==="localhost") {
        amb = "librerie";
        
    } else 
    {
        if (url.match(/promotorisvi\w+web\.webank\.local/g)) {
            amb = "sviluppo";
        }
        else if (url==="alettitool.intranet.servizi"){
            amb = "produzione";
        }
    }
    return {
        name: amb,
        isLocale: amb === 'locale',
        isLibrerie: amb === 'librerie',
        isSviluppo: amb === 'sviluppo',
        isProduzione: amb === 'produzione'
    };
}();
