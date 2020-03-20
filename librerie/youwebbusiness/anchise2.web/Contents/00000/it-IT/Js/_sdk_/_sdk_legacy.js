// script per la compatibilità di SDK alle logiche legacy
// funzioni del menu 

// funzione di attivazione del fumetto
function showAllHelp() {
    try {
        sdk.dom.fumetto.init();
    } catch (exception) {
        sdk.utils.log.errorException(exception);
    }
}

// invocato dalle voci di menu
function navigateForm(navigateParams) {
    try {
        sdk.utils.navigateFormByTag(navigateParams);
    } catch (exception) {
        sdk.utils.log.errorException(exception);
    }

}

// invocato da scopri di più delle voci di menu
function navigateFormByParam(navigateParams) {
    try {
        sdk.utils.navigateFormByTag(navigateParams);
    } catch (exception) {
        sdk.utils.log.errorException(exception);
    }
}

