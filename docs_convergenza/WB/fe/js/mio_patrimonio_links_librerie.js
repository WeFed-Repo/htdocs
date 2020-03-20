var mioPatrimonioLinks = {
    staticLinks: {
        "cdDetail" : cgi_script + "/wbOnetoone/ctfpBanking.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello_ct&OBSKEY=nav_priv_wbx_sportello_ct",
        "cdPromo" : cgi_script + "/wbOnetoone/2l/do/banking/depositAccounts/WsDepositAccountsMigrationInput.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_passa_al_nuovo_conto",
        "lvPromo": cgi_script + "/wbOnetoone/2l/do/bnkg/vincoloConti.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_apri_nl"
    },
    dynamicLinks: {
        "dett1CCMulti": cgi_script + "/wbOnetoone/2l/do/banking/WsAccountsList.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo",
        "dett1CCSingle": cgi_script + "/wbOnetoone/2l/do/banking/WsAvailableBalanceMultiAction.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=",
        "dett2CCSingle": cgi_script + "/wbOnetoone/2l/do/banking/WsAvailableBalanceCD.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=",
        "dett3CCSingle": cgi_script + "/wbOnetoone/2l/do/banking/WsAvailableBalanceDER.do?tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=&OBSCNT=",
        "dett1CTMulti": cgi_script + "/wbOnetoone/2l/do/banking/WsAccountsListTechnical.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt",
        "dett1CTSingle": cgi_script + "/wbOnetoone/2l/do/banking/WsAvailableBalanceMultiAction.do?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=",
        "dett2CTSingle": cgi_script + "/wbOnetoone/2l/do/banking/WsAvailableBalanceCD.do?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=",
        "dett3CTSingle": cgi_script + "/wbOnetoone/2l/do/banking/WsAvailableBalanceDER.do?tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_saldo_liquidita_wt&OBSKEY3=&OBSCNT=",
        "legenda3": cgi_script + "/wbOnetoone/2l/do/bnkg/listaVincoliConti.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_riepilogo_le&account=",
        "legenda5": cgi_script + "/wbOnetoone/2l/do/pktrading/portafoglioReale.do?OBSCNT=TAB&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_tit_in_portaf_wt&OBSKEY3=portafoglio_reale&account=",
        "legenda6": cgi_script + "/wbOnetoone/2l/jsp/pktrading/investimenti/portafoglioInvestimenti.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf&tipo=fondi&account=",
        "legenda7": cgi_script + "/wbOnetoone/2l/jsp/pktrading/investimenti/portafoglioInvestimenti.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf&tipo=pct&account="
    },
    dataLinks: {
        "listaLVinc": pathLibrerie + pathPatrimonio + "/listaLVinc.php",
        "chart": pathLibrerie + pathPatrimonio + "/posizioneFinanziaria.php"
    },
    dispoLinks: {
        "removeBoxTesto": pathLibrerie + pathPatrimonio + "situazionePatrimonialeNote.php"
    }
};
