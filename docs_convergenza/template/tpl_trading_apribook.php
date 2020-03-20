<script type="text/javascript">
/* Funzione apertura book (indicativa) */
var openTradingBook  = function(newbook) {
    var bWidth = 768,
        bHeight = 680,
        bTop = 0,
        bLeft = 0,
        bWName = "";
        
    if (newbook && newbook == true) {
        console.log(window.screen.availLeft);
        bWName = " " + Math.random();
    }

    var newBook = window.open("/template/tpl_responsive_trading_book_<?php print $site;?>.php","Webank - Book" + bWName, "width="+ bWidth + ",height=" + bHeight + ",top="+ bTop + ",left="+ bLeft + ",menubar=no,status=no,scrollbars") 
   
}
</script>

<a href="#" onclick="openTradingBook()">Apri book</a>