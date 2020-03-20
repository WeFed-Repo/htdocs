<?php breadcrumb() ?>
<!-- BLOCCO PREVENTIVATORE MUTUI -->
<link rel="stylesheet" href="/wbresp/css/preventivatoremutui.css" />
<script type="text/javascript" src="/wbresp/js/calcolatore_mutui.js"></script>
<script>
// Inizializzazioni o raccolta dati da form in post/get
// I valori sono gli stessi che vengono gestiti attualmente:
// qualora non venissero indicati le inizializzazioni sarebbero quelle "generiche"
var mCodice = "",
	mValoreimmobile = "",
	mImportomutuo = "",
	mDurata = "",
	mAssicurazioni = "",
	mFinalita  = "Acquisto",
	mPrimacasa = "SI",
	mPagetopost  = "/webankpub/wb/simulazioneMutui.do?tabId=nav_pub_wb_finanziamenti_nw&richiedi=&OBS_KEY=pro_wbn_mutui_nw1&KEY4=pro4_calcola_rata",
	mUrl = "/librerie/include/commons/ajax/calcolatore_mutui_json.php";

</script>
<div id="mutuiWrap" class="loading"></div>
<!-- FINE BLOCCO PREVENTIVATORE MUTUI -->