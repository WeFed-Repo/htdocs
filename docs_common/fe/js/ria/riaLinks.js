/* jshint strict:false */
/* global cgi_script, urlFpInv, rbfLinkObj */
/* exported links */
/**
 * @author Andrea Colanicchia, Michele Schino - Thera
 */

// Link statici forniti dal backend
var links = {
    dettaglioCoordinate: cgi_script + "/wbOnetoone/2l/action/banking/WsCoordinate.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_coordin_bancarie&cf=" + Math.random(),
    // inviaCoordinate: ""
    stampaCoordinate: cgi_script + "/banking/WsCoordinate1.do?cf=" + Math.random(),
    condizioniCD: cgi_script + "/wbOnetoone/2l/do/bnkg/condizioniere.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_le_mie_condiz_contome&cf=" + Math.random(),
    movimentiCT: cgi_script + "/wbOnetoone/2l/do/banking/WsCategorizedMovementsTechnical0.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_movimenti_liquidita_wt&cf=" + Math.random(),
    movimentiCC: cgi_script + "/wbOnetoone/2l/do/banking/WsCategorizedMovements0.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&cf=" + Math.random(),
    movimentiCD: cgi_script + "/wbOnetoone/2l/do/banking/WsCategorizedMovements0.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&cf=" + Math.random(),
    movimentiCDER: cgi_script + "/wbOnetoone/2l/do/banking/WsCategorizedMovements0.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&cf=" + Math.random(),
    movimentiCDER2: cgi_script + "/wbOnetoone/2l/do/banking/WsCategorizedMovementsTechnical0.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_movimenti_liquidita_wt&cf=" + Math.random(),
    movimenti200CC: cgi_script + "/wbOnetoone/2l/action/banking/WsRiaMovements.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&cf=" + Math.random(),
    movimenti200CT: cgi_script + "/wbOnetoone/2l/do/banking/WsRiaMovementsTechnical.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_movimenti_liquidita_wt&cf=" + Math.random(),
    movimenti200EVO: cgi_script + "/wbOnetoone/2l/do/banking/WsRiaMovementsEvo.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_elenco_trasf&cf=" + Math.random(),
    sezioneEstrattiConto: cgi_script + "/wbOnetoone/3l/do/banking/WsManageCOL_0.do?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_NN_ABIL&OBSKEY3=nav_priv_wbx_gestione_nn_ab&cf=" + Math.random(),
    excelLV: cgi_script + "/bnkg/WsLineeVincolateAsExcelAction.do?reportFormat=XLSTemplate&cf=" + Math.random(),
    /* testato il link di RIA mista, funziona il cambio della pagina con la select*/
    linkRiaMista: cgi_script + "/wbOnetoone/myHome.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_myhome&AselectConti=DEP&cf=" + Math.random(),
    linkBannerCC: cgi_script + "/wbOnetoone/2l/action/banking/depositAccounts/WsDepositAccountsMigrationInput.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_passa_al_nuovo_conto&cf=" + Math.random(),
    linkBannerCT: "/lndpage/lndvid_trading_wt.pdf",
    contabiliXB: cgi_script + "/wbOnetoone/3l/do/col/WsSearchLast10Action.do?keep=Yes&statoDocumenti=T&filtroMese=no&tipoOrdinamento=DD&tipoRicerca=N&ultimeDieci=si&nomeRicerca=WsSearchLast10Action&OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_ABIL&OBSKEY3=nav_priv_wbx_archivio_doc&storico=&cf=" + Math.random(),
    estrattoXB: cgi_script + "/wbOnetoone/3l/do/col/WsSearchLastECAction.do?keep=Yes&tipoOrdinamento=DD&tipoRicerca=N&nomeRicerca=WsSearchLastECAction&OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_ABIL&OBSKEY3=nav_priv_wbx_archivio_doc&storico=&cf=" + Math.random(),
    colXB: cgi_script + "/wbOnetoone/3l/do/banking/WsManageCOL_0.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_NN_ABIL&OBSKEY3=nav_priv_wbx_gestione_nn_ab&cf=" + Math.random(),
    colContoXB: cgi_script + "/wbOnetoone/3l/do/banking/WsManageCOL_0.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_ABIL&OBSKEY3=nav_priv_wbx_gestione_serv&OBSCNT=TAB&cf=" + Math.random(),
    dettLiquiditaCT: cgi_script + "/wbOnetoone/2l/action/banking/WsAvailableBalanceMultiAction.action?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaCC: cgi_script + "/wbOnetoone/2l/action/banking/WsAvailableBalanceMultiAction.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaCD: cgi_script + "/wbOnetoone/2l/action/banking/WsAvailableBalanceCD.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaCCDER: cgi_script + "/wbOnetoone/2l/action/banking/WsAvailableBalanceDER.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaCTDER: cgi_script + "/wbOnetoone/2l/action/banking/WsAvailableBalanceDER.action?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaEVO: cgi_script + "/wbOnetoone/2l/action/banking/WsAvailableBalanceMultiAction.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    extraMoney: cgi_script + "/wbOnetoone/2l/jsp/banking/webank/WsFreshMoneyStatus.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_promo_extra_money&cf=" + Math.random(),
    oroCapitano: cgi_script + "/wbOnetoone/2l/jsp/pktrading/situazioneFinanziaria.do?tabId=nav_priv_wbx_il_mio_patrimonio&OBSKEY=nav_priv_wbx_il_mio_patrimonio&cf=" + Math.random(),
    fpInvestimenti: cgi_script + urlFpInv + "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_investimenti&cf=" + Math.random(),
    linkListaLV: cgi_script + "/wbOnetoone/2l/action/banking/WsLineeVincolate.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&cf=" + Math.random(),
    lnkAppApple: 'https://itunes.apple.com/it/app/bpm-ben-fatto/id705922917?mt=8',
    lnkAppAndroid: 'https://play.google.com/store/apps/details?id=it.bpm.ptbandroid',
    lnkAppSamsung: 'http://apps.samsung.com/venus/topApps/topAppsDetail.as?productId=000000770505&srchClickURL=|@sn=SAPS|@qh=-496029510|@qid=SAPS.SRCH.PRX|@q=bpm|@tot=1|@idx=0|@doc=G00018977489|@title=nil',
    creaObiettivo: cgi_script + "/wbOnetoone/2l/do/banking/EasySavingCreaObiettivo.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_crea_obiettivo&OBSKEY3=&OBSCNT=&cf=0.042111604697193994&BV_UseBVCookie=Yes&siglaAzione=&forwardto=&id=&cf=" + Math.random(),
    gestisciObiettivo: cgi_script + "/wbOnetoone/2l/do/banking/EasySavingDettaglioObiettivo.do?tabId=nav_priv_wbx_rbf&OBSKEY=nav_priv_wbx_risparmio_libero&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&siglaAzione=&keep=&fromGestioneObiettivi=Y&cf=" + Math.random(),
    versaObiettivo: cgi_script + "/banking/EasySavingDispoForward.do?tipo=CRW&cf=" + Math.random(),
    trasfSport: cgi_script + "/wbOnetoone/2l/do/banking/EasySavingDettaglioRisparmio.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_crea_obiettivo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&siglaAzione=&forwardto=&keep=&id=&showObiettivi=on&cf=" + Math.random(),
    bonifico: cgi_script + "/wbOnetoone/2l/do/banking/EasySavingDispoForward.do?tabId=nav_priv_wbx_rbf&OBSKEY=nav_priv_wbx_risparmio_libero&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&tipo=" + rbfLinkObj.bonifico + "&cf=" + Math.random(),
    giroconto: cgi_script + "/wbOnetoone/2l/do/banking/EasySavingDispoForward.do?tabId=nav_priv_wbx_rbf&OBSKEY=nav_priv_wbx_risparmio_libero&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&tipo=" + rbfLinkObj.giroconto + "&cf=" + Math.random(),
    carta: cgi_script + "/wbOnetoone/2l/do/banking/EasySavingDispoForward.do?tabId=nav_priv_wbx_rbf&OBSKEY=nav_priv_wbx_risparmio_libero&OBSCNT=&BV_UseBVCookie=Yes&tipo=" + rbfLinkObj.carta + "&cf=" + Math.random()
};
