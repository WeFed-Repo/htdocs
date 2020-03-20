/* jshint strict:false */
/* global wrp_invest, wrp_invest_direct, wrp_remote_caller, urlFpInv, rbfLinkObj, wrp_trad */
/* exported links */
/**
 * @author Andrea Colanicchia, Michele Schino - Thera
 */

// Link statici forniti dal backend
var links = {
    /* CHIAMATE */
    listaConti: wrp_invest_direct + "/investimenti/listaConti.action",
    situazioneContiVerona: wrp_invest_direct + "/investimenti/situazioneConti.action",
    situazioneContiMilano: wrp_invest_direct + "/investimenti/situazioneConti.action",
    caricaSessioneCarte: wrp_remote_caller + "/carte/tableOnly.do", //wrp_invest_direct + "/wbOnetoone/wbblack/jsp/inquiryCreditCards.jsp",
    listaDateValute: wrp_invest_direct + "/investimenti/listaDateValute.action",
    dataValuta: wrp_invest_direct + "/investimenti/dataValuta.action",
    andamentoConti: wrp_invest_direct + "/investimenti/andamentoConti.action",
    listaTRic: wrp_invest_direct + "/investimenti/listaTRic.action",
    listaLVinc: wrp_invest_direct + "/investimenti/listaLVinc.action",
    WsMovementsDetail: wrp_invest_direct + "/banking/WsMovementsDetail.action",
    movimentiConto: wrp_invest_direct + "/investimenti/movimentiConto.action",
    estrattiConto: wrp_invest_direct + "/investimenti/estrattiConto.action",
    aggiornaDescLVinc: wrp_invest_direct + "/investimenti/aggiornaDescLVinc.action",
    trasferimentoManuale: wrp_invest_direct + "/investimenti/trasferimentoManuale.action",
    eliminaTRic: wrp_invest_direct + "/investimenti/eliminaTRic.action",
    trasferimentoRicorrente: wrp_invest_direct + "/investimenti/trasferimentoRicorrente.action",
    getBannerRetention: wrp_invest_direct + "/investimenti/getBannerRetention.action",
    eliminaLVinc: wrp_invest_direct + "/investimenti/eliminaLVinc.action",
    creaLVinc: wrp_invest_direct + "/investimenti/creaLVinc.action",
    openLBcoord: wrp_invest_direct + "/investimenti/getCoordBancarieSimple.action",
//    loadInfoCarte: wrp_script_direct + "/carte/loadInfoCarte.action",
    
        /* PAGINE */
    dettaglioCoordinate: wrp_remote_caller + "/serviziPerTe/coordinateIban.do?cf=" + Math.random(),
    // inviaCoordinate: ""
    stampaCoordinate: wrp_invest_direct + "/investimenti/WsCoordinate1.action?cf=" + Math.random(),
    condizioniCD: wrp_invest + "/investimenti/condizioniere.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_le_mie_condiz_contome&cf=" + Math.random(),
    movimentiCT: wrp_invest + "/wbOnetoone/2l/do/banking/WsCategorizedMovementsTechnical0.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_movimenti_liquidita_wt&cf=" + Math.random(),
    movimentiCC: wrp_remote_caller + "/cc/movimentiConto.do?idItem=wb_movimenti&cf=" + Math.random(), // wrp_invest + "/wbOnetoone/2l/do/banking/WsCategorizedMovements0.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&cf=" + Math.random(),
    movimentiCD: wrp_remote_caller + "/cc/movimentiConto.do?idItem=wb_movimenti&cf=" + Math.random(),// wrp_invest + "/wbOnetoone/2l/do/banking/WsCategorizedMovements0.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&cf=" + Math.random(),
    movimentiCDER: wrp_remote_caller + "/cc/movimentiConto.do?idItem=wb_movimenti&cf=" + Math.random(), // wrp_invest + "/wbOnetoone/2l/do/banking/WsCategorizedMovements0.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&cf=" + Math.random(),
    movimentiCDER2: wrp_invest + "/wbOnetoone/2l/do/banking/WsCategorizedMovementsTechnical0.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_movimenti_liquidita_wt&cf=" + Math.random(),
    movimenti200CC: wrp_invest + "/wbOnetoone/2l/action/banking/WsRiaMovements.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_movimenti&cf=" + Math.random(),
    movimenti200CT: wrp_invest + "/wbOnetoone/2l/do/banking/WsRiaMovementsTechnical.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_movimenti_liquidita_wt&cf=" + Math.random(),
    movimenti200EVO: wrp_invest + "/wbOnetoone/2l/do/banking/WsRiaMovementsEvo.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_elenco_trasf&cf=" + Math.random(),
    sezioneEstrattiConto: wrp_invest + "/wbOnetoone/3l/do/banking/WsManageCOL_0.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_NN_ABIL&OBSKEY3=nav_priv_wbx_gestione_nn_ab&cf=" + Math.random(),
    excelLV: wrp_invest_direct + "/conti/WsLineeVincolateAsExcelAction.action?reportFormat=XLSTemplate&cf=" + Math.random(),
    /* testato il link di RIA mista, funziona il cambio della pagina con la select*/
    linkRiaMista: wrp_invest + "/wbOnetoone/myHome.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_myhome&AselectConti=DEP&cf=" + Math.random(),
    linkBannerCC: wrp_invest + "/wbOnetoone/2l/action/banking/depositAccounts/WsDepositAccountsMigrationInput.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_passa_al_nuovo_conto&cf=" + Math.random(),
    linkBannerCT: "/lndpage/lndvid_trading_wt.pdf",
    contabiliXB: wrp_invest + "/wbOnetoone/3l/do/col/WsSearchLast10Action.action?keep=Yes&statoDocumenti=T&filtroMese=no&tipoOrdinamento=DD&tipoRicerca=N&ultimeDieci=si&nomeRicerca=WsSearchLast10Action&OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_ABIL&OBSKEY3=nav_priv_wbx_archivio_doc&storico=&cf=" + Math.random(),
    estrattoXB: wrp_invest + "/wbOnetoone/3l/do/col/WsSearchLastECAction.action?keep=Yes&tipoOrdinamento=DD&tipoRicerca=N&nomeRicerca=WsSearchLastECAction&OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_ABIL&OBSKEY3=nav_priv_wbx_archivio_doc&storico=&cf=" + Math.random(),
    colXB: wrp_invest + "/wbOnetoone/3l/do/banking/WsManageCOL_0.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_NN_ABIL&OBSKEY3=nav_priv_wbx_gestione_nn_ab&cf=" + Math.random(),
    colContoXB: wrp_invest + "/wbOnetoone/3l/do/banking/WsManageCOL_0.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_col_ABIL&OBSKEY3=nav_priv_wbx_gestione_serv&OBSCNT=TAB&cf=" + Math.random(),
    dettLiquiditaCT: wrp_invest + "/wbOnetoone/2l/action/banking/WsAvailableBalanceMultiAction.action?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaCC: wrp_remote_caller + "/cc/movimentiConto.do?idItem=wb_movimenti&cf=" + Math.random(), //wrp_invest + "/wbOnetoone/2l/action/banking/WsAvailableBalanceMultiAction.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaCD: wrp_remote_caller + "/cc/movimentiConto.do?idItem=wb_movimenti&cf=" + Math.random(), //wrp_invest + "/wbOnetoone/2l/action/banking/WsAvailableBalanceCD.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaCCDER: wrp_remote_caller + "/cc/movimentiConto.do?idItem=wb_movimenti&cf=" + Math.random(), //wrp_invest + "/wbOnetoone/2l/action/banking/WsAvailableBalanceDER.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaCTDER: wrp_invest + "/wbOnetoone/2l/action/banking/WsAvailableBalanceDER.action?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    dettLiquiditaEVO: wrp_remote_caller + "/cc/movimentiConto.do?idItem=wb_movimenti&cf=" + Math.random(), //wrp_invest + "/wbOnetoone/2l/action/banking/WsAvailableBalanceMultiAction.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&cf=" + Math.random(),
    extraMoney: wrp_invest + "/wbOnetoone/2l/jsp/banking/webank/WsFreshMoneyStatus.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_promo_extra_money&cf=" + Math.random(),
    fpInvestimenti: wrp_invest + "/wbOnetoone/fpInvestimentiWb.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_investimenti&cf=" + Math.random(),
    linkListaLV: wrp_invest + "/wbOnetoone/2l/action/banking/WsLineeVincolate.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&cf=" + Math.random(),
    lnkAppApple: "https://itunes.apple.com/it/app/bpm-ben-fatto/id705922917?mt=8",
    lnkAppAndroid: "https://play.google.com/store/apps/details?id=it.bpm.ptbandroid",
    lnkAppSamsung: "http://apps.samsung.com/venus/topApps/topAppsDetail.as?productId=000000770505&srchClickURL=|@sn=SAPS|@qh=-496029510|@qid=SAPS.SRCH.PRX|@q=bpm|@tot=1|@idx=0|@doc=G00018977489|@title=nil",
    creaObiettivo: wrp_invest + "/wbOnetoone/2l/do/banking/EasySavingCreaObiettivo.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_crea_obiettivo&OBSKEY3=&OBSCNT=&cf=0.042111604697193994&BV_UseBVCookie=Yes&siglaAzione=&forwardto=&id=&cf=" + Math.random(),
    gestisciObiettivo: wrp_invest + "/wbOnetoone/2l/do/banking/EasySavingDettaglioObiettivo.action?tabId=nav_priv_wbx_rbf&OBSKEY=nav_priv_wbx_risparmio_libero&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&siglaAzione=&keep=&fromGestioneObiettivi=Y&cf=" + Math.random(),
    versaObiettivo: wrp_invest + "/banking/EasySavingDispoForward.action?tipo=CRW&cf=" + Math.random(),
    trasfSport: wrp_invest + "/wbOnetoone/2l/do/banking/EasySavingDettaglioRisparmio.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_crea_obiettivo&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&siglaAzione=&forwardto=&keep=&id=&showObiettivi=on&cf=" + Math.random(),
    bonifico: wrp_invest + "/wbOnetoone/2l/do/banking/EasySavingDispoForward.action?tabId=nav_priv_wbx_rbf&OBSKEY=nav_priv_wbx_risparmio_libero&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&tipo=" + rbfLinkObj.bonifico + "&cf=" + Math.random(),
    giroconto: wrp_invest + "/wbOnetoone/2l/do/banking/EasySavingDispoForward.action?tabId=nav_priv_wbx_rbf&OBSKEY=nav_priv_wbx_risparmio_libero&OBSKEY3=&OBSCNT=&BV_UseBVCookie=Yes&tipo=" + rbfLinkObj.giroconto + "&cf=" + Math.random(),
    carta: wrp_invest + "/wbOnetoone/2l/do/banking/EasySavingDispoForward.action?tabId=nav_priv_wbx_rbf&OBSKEY=nav_priv_wbx_risparmio_libero&OBSCNT=&BV_UseBVCookie=Yes&tipo=" + rbfLinkObj.carta + "&cf=" + Math.random()
};
