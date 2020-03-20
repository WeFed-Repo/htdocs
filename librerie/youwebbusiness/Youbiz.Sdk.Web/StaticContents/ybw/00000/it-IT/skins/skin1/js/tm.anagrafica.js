var model = {
    "DataUltimoAggiornamento": undefined,
    "AbiProponente": undefined,
    "TipoAnagrafica": undefined,
    "CodStatoRecord": undefined,
    "ModalitaInserimento": undefined,
    "ModalitaCodifica": undefined,
    "SIA": undefined,
    "IdGruppo": undefined,
    "CodFiscale": undefined,
    "PartitaIVA": undefined,
    "DataNascita": undefined,
    "Sesso": undefined,
    "IndirizzoNascita": {
        "CAP": undefined,
        "Comune": undefined,
        "IndirizzoAna": undefined,
        "Localita": undefined,
        "Nazione": undefined,
        "Provincia": undefined,
        "TpeIndirizzo": undefined,
        "NroIndirizzo": undefined,
        "DesProvincia": undefined,
        "GestoreTel": undefined,
        "PrefissoTel": undefined,
        "NumeroTel": undefined
    },
    "CoordinateBanca": {
        "ABI": undefined,
        "CAB": undefined,
        "CIN": undefined,
        "checkDigit": undefined,
        "codPaese": undefined,
        "desBanca": undefined,
        "IBAN": undefined,
        "locSportello": undefined,
        "numConto": undefined,
        "codDivisaDebitore": undefined,
        "codDivisaConto": undefined,
        "codDivisaBeneficiario": undefined,
        "IBANEstero": undefined,
        "BIC": undefined,
        "AbiCab": undefined,

        "IBANRadioValue": 'iban',
        "RadioSelectedValue": 'abicab',
        "AbiCabRadioValue": 'abicab'
    },
    "TipoIncasso": undefined,
    "CodCausale": undefined,
    "DefEsitiRiba": undefined,
    "StatoAvviso": undefined,
    "DefDes": undefined,
    "Quietanza": undefined,
    "AddebitoSpese": undefined,
    "CodClienteRid": undefined,
    "QuietanzaF24RagioneSociale": undefined,
    "Firma": undefined,
    "IndirizzoQuietanzaF24": {
        "CAP": undefined,
        "Comune": undefined,
        "IndirizzoAna": undefined,
        "Localita": undefined,
        "Nazione": undefined,
        "Provincia": undefined,
        "TpeIndirizzo": undefined,
        "NroIndirizzo": undefined,
        "DesProvincia": undefined,
        "GestoreTel": undefined,
        "PrefissoTel": undefined,
        "NumeroTel": undefined
    },
    "TpeDtaCreazioneDisp": undefined,
    "DefEsitiRid": undefined,
    "TipoDataBeneficiario": undefined,
    "TipoCuc": undefined,
    "TipoCodice": undefined,
    "TipoCucEnabled": false,
    "CodCuc": undefined,
    "CodCucEnabled": false,
    "TpeSoggettoAnagGen": undefined,
    "TipoSoggetto":undefined,
    "CodEntePropAnagGen": undefined,
    "CodEntePropAnagGenEnabled": false,
    "CodCUCIdentAnagGen": undefined,
    "IndirizzoParticolare": {
        "CAP": undefined,
        "Comune": undefined,
        "IndirizzoAna": undefined,
        "Localita": undefined,
        "Nazione": undefined,
        "Provincia": undefined,
        "TpeIndirizzo": undefined,
        "NroIndirizzo": undefined,
        "DesProvincia": undefined,
        "GestoreTel": undefined,
        "PrefissoTel": undefined,
        "NumeroTel": undefined
    },
    "IdentificativoMandato": undefined,
    "DataMandato": undefined,
    "CodFiscaleSottoscrittore": undefined,
    "CodClasseAnagGen": undefined,
    "TpeValutaBeneficiario": undefined,
    "Identifier": {
        "Crypted": undefined
    },
    "Cognome": undefined,
    "Nome": undefined,
    "CodEsterna": undefined,
    "DefDisposizione": undefined,
    "Email": undefined,
    "IndirizzoResidenza": {
        "CAP": undefined,
        "Comune": undefined,
        "IndirizzoAna": undefined,
        "Localita": undefined,
        "Nazione": undefined,
        "Provincia": undefined,
        "TpeIndirizzo": undefined,
        "NroIndirizzo": undefined,
        "DesProvincia": undefined,
        "GestoreTel": undefined,
        "PrefissoTel": undefined,
        "NumeroTel": undefined
    },
    "Certificazione": undefined
};

var init = function (parameters) {

    var ko = parameters.ko;
    var tipiCodice = parameters.tipiCodice;
    var selectUtil = parameters.selectUtil;

    ko._tmpVm.TpeSoggettoAnagGen.subscribe(function (tipoSoggetto) {
        selectUtil.filterCbo('tipocodice', tipoSoggetto);
        if (tipoSoggetto == '') {
            ko._tmpVm.CodCuc(undefined);
            ko._tmpVm.CodCucEnabled(false);
            ko._tmpVm.CodEntePropAnagGenEnabled(false);
            ko._tmpVm.TipoCucEnabled(false);
            ko._tmpVm.CodEntePropAnagGen(undefined);
        } else {
            ko._tmpVm.TipoCuc(undefined);
            ko._tmpVm.TipoCucEnabled(true);
            ko._tmpVm.CodCucEnabled(true);
            ko._tmpVm.CodEntePropAnagGenEnabled(true);
        }
    });

    ko._tmpVm.TipoCuc.subscribe(function (tipoCodice) {
       
        if (tipoCodice != undefined) {
            if (tipoCodice == 'BEI') {
                ko._tmpVm.CodEntePropAnagGen(undefined);
                ko._tmpVm.CodEntePropAnagGenEnabled(false);
            } else {
                ko._tmpVm.CodEntePropAnagGenEnabled(true);
                var codiceDes = ko._tmpVm.CodEntePropAnagGen();
                if (codiceDes == undefined || codiceDes.length == 0 || codiceDes == 'ADE' || codiceDes == 'CBI') {
                    if (tipoCodice == 'FIS') {
                        ko._tmpVm.CodEntePropAnagGen('ADE');
                    } else if (tipoCodice == 'PRO') {
                        ko._tmpVm.CodEntePropAnagGen('CBI');
                    } else if (tipoCodice == 'ALT') {
                        ko._tmpVm.CodEntePropAnagGen(undefined);
                    }
                }
            }
        }
    });
} 