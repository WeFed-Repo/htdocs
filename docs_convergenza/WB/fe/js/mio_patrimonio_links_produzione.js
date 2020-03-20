var mioPatrimonioLinks = {
    staticLinks: {
        "cdDetail": wrp_invest + "/wbOnetoone/ctfpBanking.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello_ct&OBSKEY=nav_priv_wbx_sportello_ct",
        "cdPromo": wrp_invest + "/wbOnetoone/2l/do/banking/depositAccounts/WsDepositAccountsMigrationInput.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_passa_al_nuovo_conto",
        "lvPromo": wrp_invest + "/wbOnetoone/2l/do/bnkg/vincoloConti.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_apri_nl"
    },
    dynamicLinks: {
        "dett1CCMulti": wrp_trad + "/wbOnetoone/2l/do/banking/WsAccountsList.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo",
        "dett1CCSingle": wrp_trad + "/wbOnetoone/2l/do/banking/WsAvailableBalanceMultiAction.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=",
        "dett2CCSingle": wrp_trad + "/wbOnetoone/2l/do/banking/WsAvailableBalanceCD.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=",
        "dett3CCSingle": wrp_trad + "/wbOnetoone/2l/do/banking/WsAvailableBalanceDER.action?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=",
        "dett1CTMulti": wrp_trad + "/wbOnetoone/2l/do/banking/WsAccountsListTechnical.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt",
        "dett1CTSingle": wrp_trad + "/wbOnetoone/2l/do/banking/WsAvailableBalanceMultiAction.action?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=",
        "dett2CTSingle": wrp_trad + "/wbOnetoone/2l/do/banking/WsAvailableBalanceCD.action?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=",
        "dett3CTSingle": wrp_trad + "/wbOnetoone/2l/do/banking/WsAvailableBalanceDER.action?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=",
        "legenda3": wrp_invest + "/wbOnetoone/2l/do/bnkg/listaVincoliConti.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_riepilogo_le&account=",
        "legenda5": wrp_trad + "/wbOnetoone/2l/do/pktrading/portafoglioReale.action?OBSCNT=TAB&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_tit_in_portaf_wt&OBSKEY3=portafoglio_reale&account=",
        "legenda6": wrp_invest + "/wbOnetoone/2l/jsp/pktrading/investimenti/portafoglioInvestimenti.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf&tipo=fondi&account=",
        "legenda7": wrp_invest + "/wbOnetoone/2l/jsp/pktrading/investimenti/portafoglioInvestimenti.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf&tipo=pct&account="
    },
    dataLinks: {
        "listaLVinc": wrp_invest_direct + "/investimenti/listaLVinc.action",
        "chart": wrp_trad_direct + "/trading/posizioneFinanziaria.action"
    },
    dispoLinks: {
        "removeBoxTesto": wrp_trad + "/pktrading/situazionePatrimonialeNote.jsp"
    }
};