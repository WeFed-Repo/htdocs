{"data": 
<?php 
$tiporichiesta = $_GET["tiporichiesta"];

if ($tiporichiesta == "fes") {
?>
[
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', ''],'Titolo della finestra 1');\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"3.271,36",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=2015&codicecomparto=97572&fondosicav=S&divisa=EUR&codiceIsin=LU0171309270&fondo=true&cf=0.42582554034801046';\">BGF World Healthscience E2 EUR<\/a>",
      "quote":"113,510",
      "rendimento-key":28.86,
      "rendimento":"<span style=\"color:green\">28,86<br\/>0,89<\/span>",
      "controvaloreinv":"3.242,50",
      "nav":"28,820<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"BGF World Healthscience E2 EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', ''],'Titolo della finestra 1');\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"6.653,38",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=103891&fondosicav=S&divisa=EUR&codiceIsin=LU0211332563&fondo=true&cf=0.5019350241015024';\">Templeton Global Income A EUR<\/a>",
      "quote":"299,837",
      "rendimento-key":1303.97,
      "rendimento":"<span style=\"color:green\">1.303,97<br\/>24,38<\/span>",
      "controvaloreinv":"5.349,41",
      "nav":"22,190<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Templeton Global Income A EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', ''],'Titolo della finestra 3');\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"4.126,84",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=104101&fondosicav=S&divisa=EUR&codiceIsin=LU0260870661&fondo=true&cf=0.6511683653755217';\">Templeton Global Total Return A EUR<\/a>",
      "quote":"151,111",
      "rendimento-key":151.84,
      "rendimento":"<span style=\"color:green\">151,84<br\/>3,82<\/span>",
      "controvaloreinv":"3.975,00",
      "nav":"27,310<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Templeton Global Total Return A EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"9.422,73",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=104479&fondosicav=S&divisa=EUR&codiceIsin=LU0109395268&fondo=true&cf=0.9150370177028722';\">Franklin Euro High Yield A DisY EUR<\/a>",
      "quote":"1.486,235",
      "rendimento-key":-564.77,
      "rendimento":"<span style=\"color:red\">-564,77<br\/>-5,65<\/span>",
      "controvaloreinv":"9.987,50",
      "nav":"6,340<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Franklin Euro High Yield A DisY EUR"
   }
]
<?php
}
else if ($tiporichiesta == "pir") {
?>
[]
<?php
}
else if ($tiporichiesta == "pac") {
?>
[
   <?php
   $total = 99;
   for ($x=0;$x<=$total;$x++) {
   ?>
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"3.271,36",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=2015&codicecomparto=97572&fondosicav=S&divisa=EUR&codiceIsin=LU0171309270&fondo=true&cf=0.42582554034801046';\">BGF World Healthscience E2 EUR<\/a>",
      "quote":"113,510",
      "rendimento-key":28.86,
      "rendimento":"<span style=\"color:green\">28,86<br\/>0,89<\/span>",
      "controvaloreinv":"3.242,50",
      "nav":"28,820<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"BGF World Healthscience E2 EUR"
   }
   <?php
   if ($x < $total) print ",";
   }
   ?>
]

<?php
}
else {

?>

[
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"3.271,36",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=2015&codicecomparto=97572&fondosicav=S&divisa=EUR&codiceIsin=LU0171309270&fondo=true&cf=0.42582554034801046';\">BGF World Healthscience E2 EUR<\/a>",
      "quote":"113,510",
      "rendimento-key":28.86,
      "rendimento":"<span style=\"color:green\">28,86<br\/>0,89<\/span>",
      "controvaloreinv":"3.242,50",
      "nav":"28,820<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"BGF World Healthscience E2 EUR"
   },
   {  
     "ico1":"<i class=\"icon icon-2x icon-ico_azioni02A disabled\" title=\"Lorem ipsum dolor sit amet, consectetur adipisicing elit.\" data-toggle=\"tooltip\"></i>",
      "controvaloreatt":"6.653,38",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=103891&fondosicav=S&divisa=EUR&codiceIsin=LU0211332563&fondo=true&cf=0.5019350241015024';\">Templeton Global Income A EUR<\/a>",
      "quote":"299,837",
      "rendimento-key":1303.97,
      "rendimento":"<span style=\"color:green\">1.303,97<br\/>24,38<\/span>",
      "controvaloreinv":"5.349,41",
      "nav":"22,190<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Templeton Global Income A EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"4.126,84",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=104101&fondosicav=S&divisa=EUR&codiceIsin=LU0260870661&fondo=true&cf=0.6511683653755217';\">Templeton Global Total Return A EUR<\/a>",
      "quote":"151,111",
      "rendimento-key":151.84,
      "rendimento":"<span style=\"color:green\">151,84<br\/>3,82<\/span>",
      "controvaloreinv":"3.975,00",
      "nav":"27,310<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Templeton Global Total Return A EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"9.422,73",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=104479&fondosicav=S&divisa=EUR&codiceIsin=LU0109395268&fondo=true&cf=0.9150370177028722';\">Franklin Euro High Yield A DisY EUR<\/a>",
      "quote":"1.486,235",
      "rendimento-key":-564.77,
      "rendimento":"<span style=\"color:red\">-564,77<br\/>-5,65<\/span>",
      "controvaloreinv":"9.987,50",
      "nav":"6,340<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Franklin Euro High Yield A DisY EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"2.615,28",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=1736&codicecomparto=145538&fondosicav=S&divisa=EUR&codiceIsin=LU0395794307&fondo=true&cf=0.3874019576474447';\">JPM Global Income A Dis EUR<\/a>",
      "quote":"18,304",
      "rendimento-key":-38.54,
      "rendimento":"<span style=\"color:red\">-38,54<br\/>-1,45<\/span>",
      "controvaloreinv":"2.653,82",
      "nav":"142,880<br\/>13\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"JPM Global Income A Dis EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"6.194,56",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=380705&fondosicav=F&divisa=EUR&codiceIsin=IT0000380706&fondo=true&cf=0.5858771137434479';\">Anima Visconteo A EUR<\/a>",
      "quote":"135,959",
      "rendimento-key":1131.22,
      "rendimento":"<span style=\"color:green\">1.131,22<br\/>22,34<\/span>",
      "controvaloreinv":"5.063,34",
      "nav":"45,562<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Anima Visconteo A EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"9.765,56",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=386025&fondosicav=F&divisa=EUR&codiceIsin=IT0000386026&fondo=true&cf=0.5687251762374532';\">Anima Valore Globale A EUR<\/a>",
      "quote":"245,181",
      "rendimento-key":4229.12,
      "rendimento":"<span style=\"color:green\">4.229,12<br\/>76,39<\/span>",
      "controvaloreinv":"5.536,44",
      "nav":"39,830<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Anima Valore Globale A EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"5.910,02",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=1015925&fondosicav=F&divisa=EUR&codiceIsin=IT0001015921&fondo=true&cf=0.49968673668809716';\">Anima Pianeta A EUR<\/a>",
      "quote":"476,499",
      "rendimento-key":614.31,
      "rendimento":"<span style=\"color:green\">614,31<br\/>11,60<\/span>",
      "controvaloreinv":"5.295,71",
      "nav":"12,403<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Anima Pianeta A EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"12.257,49",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=1415875&fondosicav=F&divisa=EUR&codiceIsin=IT0001415873&fondo=true&cf=0.3020350057669978';\">Anima Emergenti A EUR<\/a>",
      "quote":"1.109,777",
      "rendimento-key":1134.89,
      "rendimento":"<span style=\"color:green\">1.134,89<br\/>10,20<\/span>",
      "controvaloreinv":"11.122,60",
      "nav":"11,045<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Anima Emergenti A EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"2.769,07",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=3825515&fondosicav=F&divisa=EUR&codiceIsin=IT0003825517&fondo=true&cf=0.30127947049987036';\">Anima Obbligazionario Emergente A EUR<\/a>",
      "quote":"363,872",
      "rendimento-key":123.28,
      "rendimento":"<span style=\"color:green\">123,28<br\/>4,66<\/span>",
      "controvaloreinv":"2.645,79",
      "nav":"7,610<br\/>12\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Anima Obbligazionario Emergente A EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"5.980,00",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=79999067566&fondosicav=S&divisa=EUR&codiceIsin=LU0727122938&fondo=true&cf=0.6447141002906468';\">Franklin Global Conv. Securities A Dis EUR<\/a>",
      "quote":"400,000",
      "rendimento-key":1452.0,
      "rendimento":"<span style=\"color:green\">1.452,00<br\/>32,07<\/span>",
      "controvaloreinv":"4.528,00",
      "nav":"14,950<br\/>11\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Franklin Global Conv. Securities A Dis EUR"
   },
   {  
      "ico1":"<div class=\"linkTooltip\" data-toggle=\"modal\"><a title=\"scegli l'operazione da effettuare\" id=\"link48\" class=\"linkVai no-underline btn-icon\" onclick=\"multiLinks('iconaOperativaMenu1.html', 'right', this, ['', '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', null, '', 'par1=eee&par2=333', 'javascript:alert(\\'test link\\')', '']);\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a></div>",
      "controvaloreatt":"7.469,54",
      "divisa":"EUR",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=79999067570&fondosicav=S&divisa=EUR&codiceIsin=LU0744128744&fondo=true&cf=0.5807734842092155';\">Templeton Africa A Dis EUR<\/a>",
      "quote":"885,017",
      "rendimento-key":-2929.96,
      "rendimento":"<span style=\"color:red\">-2.929,96<br\/>-28,17<\/span>",
      "controvaloreinv":"10.399,50",
      "nav":"8,440<br\/>11\/01\/2017",
      "tasso":"n.d",
      "descrizione-key":"Templeton Africa A Dis EUR"
   }
]
<?php
   }

/*
?>

TAB : FONDI E SICAV

var data =[  
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link12\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'LU0171309270\\',\\'97572\\')','javascript:vendiFS(1099,535379,0,\\'LU0171309270\\',\\'97572\\')','javascript:switchFS(1099,535379,0,\\'LU0171309270\\',\\'97572\\')','javascript:dettaglioFS(1099,535379,0,\\'LU0171309270\\',\\'97572\\',\\'F\\',\\'\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"3.271,36",
      "controvalorecarico":"3.242,50",
      "asset":"Azionari Salute",
      "controvaloreatt-key":3271.36,
      "descrizione-key":"BGF World Healthscience E2 EUR",
      "prezzocarico":"28,5658",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=2015&codicecomparto=97572&fondosicav=S&divisa=EUR&codiceIsin=LU0171309270&fondo=true&cf=0.5113503240273317';\">BGF World Healthscience E2 EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Azionari Salute",
      "quote":"113,510",
      "rendimento":"<span style=\"color:green;\">28,86<br\/>0,89<\/span>",
      "rendimento-key":28.86,
      "prezzochiusura":"28,820<br\/>12\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link13\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'LU0211332563\\',\\'103891\\')','javascript:vendiFS(1099,535379,0,\\'LU0211332563\\',\\'103891\\')','javascript:switchFS(1099,535379,0,\\'LU0211332563\\',\\'103891\\')','javascript:dettaglioFS(1099,535379,0,\\'LU0211332563\\',\\'103891\\',\\'F\\',\\'\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"6.653,38",
      "controvalorecarico":"5.349,41",
      "asset":"Bilanciati",
      "controvaloreatt-key":6653.38,
      "descrizione-key":"Templeton Global Income A EUR",
      "prezzocarico":"17,8411",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=103891&fondosicav=S&divisa=EUR&codiceIsin=LU0211332563&fondo=true&cf=0.21909872385304696';\">Templeton Global Income A EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Bilanciati",
      "quote":"299,837",
      "rendimento":"<span style=\"color:green;\">1.303,97<br\/>24,38<\/span>",
      "rendimento-key":1303.97,
      "prezzochiusura":"22,190<br\/>12\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link14\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'LU0260870661\\',\\'104101\\')','javascript:vendiFS(1099,535379,0,\\'LU0260870661\\',\\'104101\\')','javascript:switchFS(1099,535379,0,\\'LU0260870661\\',\\'104101\\')','javascript:dettaglioFS(1099,535379,0,\\'LU0260870661\\',\\'104101\\',\\'F\\',\\'\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"4.126,84",
      "controvalorecarico":"3.975,00",
      "asset":"Obb. Altre Special.",
      "controvaloreatt-key":4126.84,
      "descrizione-key":"Templeton Global Total Return A EUR",
      "prezzocarico":"26,3052",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=104101&fondosicav=S&divisa=EUR&codiceIsin=LU0260870661&fondo=true&cf=0.3791355597452103';\">Templeton Global Total Return A EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Obb. Altre Special.",
      "quote":"151,111",
      "rendimento":"<span style=\"color:green;\">151,84<br\/>3,82<\/span>",
      "rendimento-key":151.84,
      "prezzochiusura":"27,310<br\/>12\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link15\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'LU0109395268\\',\\'104479\\')','javascript:vendiFS(1099,535379,0,\\'LU0109395268\\',\\'104479\\')','javascript:switchFS(1099,535379,0,\\'LU0109395268\\',\\'104479\\')','javascript:dettaglioFS(1099,535379,0,\\'LU0109395268\\',\\'104479\\',\\'F\\',\\'\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"9.422,73",
      "controvalorecarico":"9.987,50",
      "asset":"Obb. Euro High Yield",
      "controvaloreatt-key":9422.73,
      "descrizione-key":"Franklin Euro High Yield A DisY EUR",
      "prezzocarico":"6,7200",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=104479&fondosicav=S&divisa=EUR&codiceIsin=LU0109395268&fondo=true&cf=0.8056031513380988';\">Franklin Euro High Yield A DisY EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Obb. Euro High Yield",
      "quote":"1.486,235",
      "rendimento":"<span style=\"color:red;\">-564,77<br\/>-5,65<\/span>",
      "rendimento-key":-564.77,
      "prezzochiusura":"6,340<br\/>12\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link16\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'LU0395794307\\',\\'145538\\')','javascript:vendiFS(1099,535379,0,\\'LU0395794307\\',\\'145538\\')','javascript:switchFS(1099,535379,0,\\'LU0395794307\\',\\'145538\\')','javascript:dettaglioFS(1099,535379,0,\\'LU0395794307\\',\\'145538\\',\\'F\\',\\'\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"2.615,28",
      "controvalorecarico":"2.653,82",
      "asset":"Bilanciati",
      "controvaloreatt-key":2615.28,
      "descrizione-key":"JPM Global Income A Dis EUR",
      "prezzocarico":"144,9858",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=1736&codicecomparto=145538&fondosicav=S&divisa=EUR&codiceIsin=LU0395794307&fondo=true&cf=0.32445210100724653';\">JPM Global Income A Dis EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Bilanciati",
      "quote":"18,304",
      "rendimento":"<span style=\"color:red;\">-38,54<br\/>-1,45<\/span>",
      "rendimento-key":-38.54,
      "prezzochiusura":"142,880<br\/>13\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link17\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'IT0000380706\\',\\'380705\\')','javascript:vendiFS(1099,535379,0,\\'IT0000380706\\',\\'380705\\')','javascript:switchFS(1099,535379,0,\\'IT0000380706\\',\\'380705\\')','javascript:dettaglioFS(1099,535379,0,\\'IT0000380706\\',\\'380705\\',\\'F\\',\\'Obbl. Euro\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"6.194,56",
      "controvalorecarico":"5.063,34",
      "asset":"Bilanciati Obbligazionari",
      "controvaloreatt-key":6194.56,
      "descrizione-key":"Anima Visconteo A EUR",
      "prezzocarico":"37,2417",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=380705&fondosicav=F&divisa=EUR&codiceIsin=IT0000380706&fondo=true&cf=0.23339404781863782';\">Anima Visconteo A EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Bilanciati Obbligazionari",
      "quote":"135,959",
      "rendimento":"<span style=\"color:green;\">1.131,22<br\/>22,34<\/span>",
      "rendimento-key":1131.22,
      "prezzochiusura":"45,562<br\/>12\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link18\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'IT0000386026\\',\\'386025\\')','javascript:vendiFS(1099,535379,0,\\'IT0000386026\\',\\'386025\\')','javascript:switchFS(1099,535379,0,\\'IT0000386026\\',\\'386025\\')','javascript:dettaglioFS(1099,535379,0,\\'IT0000386026\\',\\'386025\\',\\'F\\',\\'Az. Euro.\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"9.765,56",
      "controvalorecarico":"5.536,44",
      "asset":"Azionari Internazionali",
      "controvaloreatt-key":9765.56,
      "descrizione-key":"Anima Valore Globale A EUR",
      "prezzocarico":"22,5810",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=386025&fondosicav=F&divisa=EUR&codiceIsin=IT0000386026&fondo=true&cf=0.5354689602694148';\">Anima Valore Globale A EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Azionari Internazionali",
      "quote":"245,181",
      "rendimento":"<span style=\"color:green;\">4.229,12<br\/>76,39<\/span>",
      "rendimento-key":4229.12,
      "prezzochiusura":"39,830<br\/>12\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link19\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'IT0001015921\\',\\'1015925\\')','javascript:vendiFS(1099,535379,0,\\'IT0001015921\\',\\'1015925\\')','javascript:switchFS(1099,535379,0,\\'IT0001015921\\',\\'1015925\\')','javascript:dettaglioFS(1099,535379,0,\\'IT0001015921\\',\\'1015925\\',\\'F\\',\\'Obbl. Euro\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"5.910,02",
      "controvalorecarico":"5.295,71",
      "asset":"Obb. Intern. Governativi",
      "controvaloreatt-key":5910.02,
      "descrizione-key":"Anima Pianeta A EUR",
      "prezzocarico":"11,1138",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=1015925&fondosicav=F&divisa=EUR&codiceIsin=IT0001015921&fondo=true&cf=0.07678457881799006';\">Anima Pianeta A EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Obb. Intern. Governativi",
      "quote":"476,499",
      "rendimento":"<span style=\"color:green;\">614,31<br\/>11,60<\/span>",
      "rendimento-key":614.31,
      "prezzochiusura":"12,403<br\/>12\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link20\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'IT0001415873\\',\\'1415875\\')','javascript:vendiFS(1099,535379,0,\\'IT0001415873\\',\\'1415875\\')','javascript:switchFS(1099,535379,0,\\'IT0001415873\\',\\'1415875\\')','javascript:dettaglioFS(1099,535379,0,\\'IT0001415873\\',\\'1415875\\',\\'F\\',\\'Az. Euro.\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"12.257,49",
      "controvalorecarico":"11.122,60",
      "asset":"Azionari Paesi Emergenti",
      "controvaloreatt-key":12257.49,
      "descrizione-key":"Anima Emergenti A EUR",
      "prezzocarico":"10,0224",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=1415875&fondosicav=F&divisa=EUR&codiceIsin=IT0001415873&fondo=true&cf=0.3815256428793521';\">Anima Emergenti A EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Azionari Paesi Emergenti",
      "quote":"1.109,777",
      "rendimento":"<span style=\"color:green;\">1.134,89<br\/>10,20<\/span>",
      "rendimento-key":1134.89,
      "prezzochiusura":"11,045<br\/>12\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link21\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'IT0003825517\\',\\'3825515\\')','javascript:vendiFS(1099,535379,0,\\'IT0003825517\\',\\'3825515\\')','javascript:switchFS(1099,535379,0,\\'IT0003825517\\',\\'3825515\\')','javascript:dettaglioFS(1099,535379,0,\\'IT0003825517\\',\\'3825515\\',\\'F\\',\\'Obbl. Euro\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"2.769,07",
      "controvalorecarico":"2.645,79",
      "asset":"Obb. Paesi Emergenti",
      "controvaloreatt-key":2769.07,
      "descrizione-key":"Anima Obbligazionario Emergente A EUR",
      "prezzocarico":"7,2712",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=3&codicecomparto=3825515&fondosicav=F&divisa=EUR&codiceIsin=IT0003825517&fondo=true&cf=0.6120917836055084';\">Anima Obbligazionario Emergente A EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Obb. Paesi Emergenti",
      "quote":"363,872",
      "rendimento":"<span style=\"color:green;\">123,28<br\/>4,66<\/span>",
      "rendimento-key":123.28,
      "prezzochiusura":"7,610<br\/>12\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link22\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'LU0727122938\\',\\'79999067566\\')','javascript:vendiFS(1099,535379,0,\\'LU0727122938\\',\\'79999067566\\')','javascript:switchFS(1099,535379,0,\\'LU0727122938\\',\\'79999067566\\')','javascript:dettaglioFS(1099,535379,0,\\'LU0727122938\\',\\'79999067566\\',\\'F\\',\\'\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"5.980,00",
      "controvalorecarico":"4.528,00",
      "asset":"Obb. Altre Special.",
      "controvaloreatt-key":5980.0,
      "descrizione-key":"Franklin Global Conv. Securities A Dis EUR",
      "prezzocarico":"11,3200",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=79999067566&fondosicav=S&divisa=EUR&codiceIsin=LU0727122938&fondo=true&cf=0.4423496939067669';\">Franklin Global Conv. Securities A Dis EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Obb. Altre Special.",
      "quote":"400,000",
      "rendimento":"<span style=\"color:green;\">1.452,00<br\/>32,07<\/span>",
      "rendimento-key":1452.0,
      "prezzochiusura":"14,950<br\/>11\/01\/2017"
   },
   {  
      "ico1":"<div class=\"linkTooltip\"><a title=\"Scegli quale operazione effettuare\" id=\"link23\" class=\"linkVai\" onclick=\"multiLinks('iconaOperativaMenu3.html', 'left', this, ['javascript:compraFS(1099,535379,0,\\'LU0744128744\\',\\'79999067570\\')','javascript:vendiFS(1099,535379,0,\\'LU0744128744\\',\\'79999067570\\')','javascript:switchFS(1099,535379,0,\\'LU0744128744\\',\\'79999067570\\')','javascript:dettaglioFS(1099,535379,0,\\'LU0744128744\\',\\'79999067570\\',\\'F\\',\\'\\',\\'Non quotato\\')']);\" href=\"javascript:;\"><\/a><\/div>",
      "controvaloreatt":"7.469,54",
      "controvalorecarico":"10.399,50",
      "asset":"Azionari Paesi Emergenti",
      "controvaloreatt-key":7469.54,
      "descrizione-key":"Templeton Africa A Dis EUR",
      "prezzocarico":"11,7506",
      "descrizione":"<a href=\"javascript:document.location.href='\/webankpri\/wbOnetoone\/2l\/jsp\/FMP\/fida\/ricerca.do?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&codicesocieta=198&codicecomparto=79999067570&fondosicav=S&divisa=EUR&codiceIsin=LU0744128744&fondo=true&cf=0.8367727150286948';\">Templeton Africa A Dis EUR<\/a>",
      "divisa":"EUR",
      "asset-key":"Azionari Paesi Emergenti",
      "quote":"885,017",
      "rendimento":"<span style=\"color:red;\">-2.929,96<br\/>-28,17<\/span>",
      "rendimento-key":-2929.96,
      "prezzochiusura":"8,440<br\/>11\/01\/2017"
   }
];


TAB : PRONTI CONTRO TERMINE
var data = [];

<? 

*/

?>

}
