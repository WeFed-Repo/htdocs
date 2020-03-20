$(function () {
    var wbPath = '/webankpri';
    var pathLibrerie = '/include/ajax';
    var pathSportello = pathLibrerie + '/sportello';
    var pathMovimenti = pathLibrerie + '/movimenti';
    var urlLinkEstrattoContab = '';

    // imposto i links
    sportello.setLinks({
        dynamicLinks: {
            "linkMovimenti": wbPath + "/wbOnetoone/2l/action/banking/WsRiaMovements.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&OBSKEY3=nav_priv_wbx_movimenti&accountId=",
            "linkModContatto": wbPath + "/wbOnetoone/2l/action/banking/WsRubricaModify.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_rubricha&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&id=",
            "linkRicevutaAtm": "/pri/banking/WsAtmMiRechargeRicevuta.do",
            "linkPdfBollo": wbPath + "/banking/vehicleTaxPayment/WsPaymentVehicleTaxQuietanza.do",
            "linkCoordinate": wbPath + "/wbOnetoone/2l/action/banking/WsCoordinate.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_coordin_bancarie",
            "linkDisposizioni": "javascript:"
        },
        staticLinks: {
            "linkBonifico": wbPath + "/wbOnetoone/2l/action/banking/WsBonificoSepaInput.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bonifico_ordinario&cf=",
            "linkDiposizioni": wbPath + "/wbOnetoone/2l/action/banking/WsDispositionsState0.action?useXml=true&OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_esito_disp_on_line_new&OBSKEY3=nav_priv_wbx_esito_disp_on_line_new",
            "linkModLimite": wbPath + "/wbOnetoone/3l/do/banking/WsTransChangeMax.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bonif_italia&OBSKEY3=nav_priv_wbx_bonif_singolo&OBSCNT=&BV_UseBVCookie=Yes",
            "linkAccredStipendio": wbPath + "/wbOnetoone/2l/do/banking/WsSalaryCredit0.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_accredito_stip",
            "linkRubrica": wbPath + "/wbOnetoone/2l/action/banking/WsGestioneRubrica.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_rubricha",
            "linkEstrattoContab": wbPath + urlLinkEstrattoContab,
            "linkAlert": wbPath + "/wbOnetoone/2l/do/wbOnetoone/sms/alertAttivi.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_sms_elenco_alert"
        },
        dataLinks: {
            "init": pathSportello + '/sportello-init.php',
            "nazioni": pathSportello + '/ListaNazioni.php',
            "rubriche": pathSportello + '/sportello-rubriche.php',
            "contattiVeloci": pathSportello + '/RubricaContattoVeloce.php',
            "movimenti": pathMovimenti + '/listaMovimenti.php',
            "disposizioni": pathMovimenti + '/WsTutteDisposizioni.php',
            "disposizioniDetail": pathMovimenti + '/WsStatoDispDetailedJson.php'
        },
        dispoLinks: {
            "createPush":  pathSportello + "/createPush.php",
            "checkPush": pathSportello + "/checkPush.php",
            "verifyPush": pathSportello + "/verifyPush.php",
            "changePush": pathSportello + "/changePush.php",
            "updateBollo": pathSportello + "/WsPaymentVehicleTaxVerifyPDA.php",
            "richiestaOTPSms": pathSportello + "/richiestaOTPSms.php",
            "tagliTelefonica": pathSportello + "/TagliTelefonica.php",
            "checkAtm": pathSportello + "/checkAtm.php",
            "checkCellulare": pathSportello + "/checkCellulare.php",
            "checkCartaRequest": pathSportello + "/WsJsonInquiryRicaricaPrepagata.php",
            "checkBonifico": pathSportello + "/WsVerificaBonifico.php",
            "checkBollettino": pathSportello + "/WsVerificaBollettinoPDA.php",
            "checkBolloCommissioni": pathSportello + "/WsPaymentVehicleTaxCommissioniPDA.php",
            "checkTagli": pathSportello + "/WsAtmMiRechargeTagli.php",
            "checkMavrav": pathSportello + "/WsBillsPaymentVerifyPDA.php",
            "sendImportoPreferito": pathSportello + "/RubricaImportoPreferitoInsert.php",
            "sendBonifico": pathSportello + "/BonificoItalia.php",
            "sendPrepagata": pathSportello + "/RicaricaPrepagata.php",
            "sendCellulare": pathSportello + "/RicaricaTelefonica.php",
            "sendBollettino": pathSportello + "/Bollettino.php",
            "sendBollo": pathSportello + "/WsPaymentVehicleTaxConfirmPDA.php",
            "sendAtm": pathSportello + "/WsAtmMiRechargeConfirm.php",
            "sendMavrav": pathSportello + "/WsBillsPaymentConfirmPDA.php",
            "addContatto": pathSportello + "/RubricaContattoVeloceInsert.php",
            "deleteContatto": pathSportello + "/RubricaContattoVeloceDelete.php",
            "detailContatto": "javascript:"
        }
    });

    // Inizializzo l'oggetto sportello
    sportello.init();
});
