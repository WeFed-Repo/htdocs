$(function () {
    var wbPath = '/webankpri';

    // imposto i links
    sportello.setLinks({
        dynamicLinks: {
            "linkMovimenti": wbPath + "/wbOnetoone/2l/action/banking/WsRiaMovements.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&OBSKEY3=nav_priv_wbx_movimenti&accountId=",
            "linkModContatto": wbPath + "/wbOnetoone/2l/action/banking/WsRubricaModify.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_rubricha&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&id=",
            "linkRicevutaatm": "/pri/banking/WsAtmMiRechargeRicevuta.do",
            "linkPdfBollo": wbPath + "/banking/vehicleTaxPayment/WsPaymentVehicleTaxQuietanza.do"
        },
        staticLinks: {
            "linkBonifico": wbPath + "/wbOnetoone/2l/action/banking/WsBonificoSepaInput.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bonifico_ordinario&cf=",
            "linkDiposizioni": wbPath + "/wbOnetoone/2l/action/banking/WsDispositionsState0.action?useXml=true&OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_esito_disp_on_line_new&OBSKEY3=nav_priv_wbx_esito_disp_on_line_new",
            "linkModLimite": wbPath + "/wbOnetoone/3l/do/banking/WsTransChangeMax.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_bonif_italia&OBSKEY3=nav_priv_wbx_bonif_singolo&OBSCNT=&BV_UseBVCookie=Yes",
            "linkAccredStipendio": wbPath + "/wbOnetoone/2l/do/banking/WsSalaryCredit0.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_accredito_stip",
            "linkRubrica": wbPath + "/wbOnetoone/2l/action/banking/WsGestioneRubrica.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_rubricha",
            "linkEstrattoContab": wbPath + urllinkEstrattoContab,
            "linkCoordinate": wbPath + "/wbOnetoone/2l/action/banking/WsCoordinate.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_coordin_bancarie",
            "linkAlert": wbPath + "/wbOnetoone/2l/do/wbOnetoone/sms/alertAttivi.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_sms_elenco_alert"
        },
        dataLinks: {
            "init": '/sportello-init.do',
            "nazioni": '/ListaNazioni.do',
            "rubriche": '/sportello-rubriche.do',
            "contattiVeloci": '/RubricaContattoVeloce.do',
            "movimenti": '/listaMovimenti.do',
            "disposizioni": '/WsTutteDisposizioni.do',
            "disposizioniDetail": '/WsStatoDispDetailedJson.do'
        },
        dispoLinks: {
            "createPush": "/QuickDispositionCreatePush.do",
            "checkPush": "/DispositionCheckPush.do",
            "updateBollo": "/WsPaymentVehicleTaxVerifyPDA.do",
            "richiestaOTP": "/RichiestaOTP.do",
            "tagliTelefonica": "/TagliTelefonica.do",
            "checkCartaRequest": "/WsJsonInquiryRicaricaPrepagata.do",
            "checkBollettino": "/WsVerificaBollettinoPDA.do",
            "checkBolloCommissioni": "/WsPaymentVehicleTaxCommissioniPDA.do",
            "checkTagli": "/WsAtmMiRechargeTagli.do",
            "checkMavrav": "/WsBillsPaymentVerifyPDA.do",
            "sendImportoPreferito": "/RubricaImportoPreferitoInsert.do",
            "sendBonifico": "/BonificoItalia.do",
            "sendPrepagata": "/RicaricaPrepagata.do",
            "sendCellulare": "/RicaricaTelefonica.do",
            "sendBollettino": "/Bollettino.do",
            "sendBollo": "/WsPaymentVehicleTaxConfirmPDA.do",
            "sendAtm": "/WsAtmMiRechargeConfirm.do",
            "sendMavrav": "/WsBillsPaymentConfirmPDA.do",
            "addContatto": "/RubricaContattoVeloceInsert.do",
            "deleteContatto": "/RubricaContattoVeloceDelete.do"
        }
    });

    // Inizializzo l'oggetto sportello
    sportello.init();
});
