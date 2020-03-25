<!-- PAGINA RICERCA -->
<?php 
// Eventuali variabili per emulazione
$codSocieta = (empty($_GET["codSocieta"]))? "": $_GET["codSocieta"];
?>

<!-- INCLUSIONI ESTERNE -->
<script type="text/javascript" src="/wscmn/js/amcharts/amcharts.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/priv_fes.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/priv_fes_ricerca.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/priv_fes_fondo.js"></script>
<!-- FINE INCLUSIONI ESTERNE -->
<!-- ACQUISIZIONE DEI DATI ESTERNI ED INNESCHI VARI -->
<?php
$fondo = $_GET["fondo"];
$confronta = $_GET["confronta"];
// Se non viene specificato un fondo, avvia la classica ricerca oppure il confronta
if (empty($fondo))
{
	if (empty($confronta))
	{
	?>
		<script type="text/javascript">
		// Inizializza la ricerca da zero
			fesRicStart();
		</script>
	<?php
	}
	else
	{?>
	<script type="text/javascript">
		// Attiva il confronta (passare i codici FIDA separati da "pipe"
		fesConfStart("<?php print $confronta ?>");
	</script>
	<?php
	}

}
else
{
?>
<script type="text/javascript">
// Attiva direttamente la scheda fondo
fesFondoStart({"codicesocieta": "09123","codicecomparto": "09132","divisa": "189312", "fondosicav":"03129"});
</script>
<?php
}
?>
<!-- FINE ACQUISIZIONE DEI DATI ESTERNI -->
<!-- CONFIGURAZIONE DATI ESTERNI -->
<script type="text/javascript">
var fesConf = {"fesCategoria": {"COD_CATEGORIA_BRATING|XXXXX":{"codCategoria":"Obbligazionari","nome":"Non categorizzati"},"COD_CATEGORIA_BRATING|SCI166":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Globali (Mercati Emergenti) - Governativi"},"COD_CATEGORIA_BRATING|SCI179":{"codCategoria":"Altri","nome":"Ritorno Assoluto (Alta Volatilita')"},"COD_CATEGORIA_BRATING|SCI126":{"codCategoria":"Flessibili","nome":"Ritorno Assoluto - Materie Prime"},"COD_CATEGORIA_BRATING|SCI127":{"codCategoria":"Monetari","nome":"Ritorno Assoluto - Tassi e Valute"},"COD_CATEGORIA_BRATING|SCI2":{"codCategoria":"Azionari","nome":"Azionari America Latina - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI4":{"codCategoria":"Azionari","nome":"Azionari Area Euro - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI5":{"codCategoria":"Azionari","nome":"Azionari Area Euro - Large & Mid Cap Value"},"COD_CATEGORIA_BRATING|SCI8":{"codCategoria":"Azionari","nome":"Azionari Asia Pacifico (Mercati Emergenti e Sviluppati escl. Giappone)"},"COD_CATEGORIA_BRATING|SCI9":{"codCategoria":"Azionari","nome":"Azionari Asia Pacifico (Mercati Emergenti e Sviluppati escl. Giappone) - Growth"},"COD_CATEGORIA_BRATING|SCI10":{"codCategoria":"Azionari","nome":"Azionari Asia Pacifico (Mercati Emergenti e Sviluppati escl. Giappone) - Value"},"COD_CATEGORIA_BRATING|SCI11":{"codCategoria":"Azionari","nome":"Azionari Asia Pacifico (Mercati Emergenti e Sviluppati)"},"COD_CATEGORIA_BRATING|SCI12":{"codCategoria":"Azionari","nome":"Azionari Asia Pacifico (Mercati Emergenti)"},"COD_CATEGORIA_BRATING|SCI13":{"codCategoria":"Azionari","nome":"Azionari Asia Pacifico (Mercati Sviluppati escl. Giappone)"},"COD_CATEGORIA_BRATING|SCI14":{"codCategoria":"Azionari","nome":"Azionari Asia Pacifico (Mercati Sviluppati)"},"COD_CATEGORIA_BRATING|SCI7":{"codCategoria":"Azionari","nome":"Azionari Asia Pacifico - Mid & Small Cap"},"COD_CATEGORIA_BRATING|SCI15":{"codCategoria":"Azionari","nome":"Azionari Australia"},"COD_CATEGORIA_BRATING|SCI19":{"codCategoria":"Azionari","nome":"Azionari BRIC (Brasile, Russia, India, Cina)"},"COD_CATEGORIA_BRATING|SCI18":{"codCategoria":"Azionari","nome":"Azionari Brasile"},"COD_CATEGORIA_BRATING|SCI21":{"codCategoria":"Azionari","nome":"Azionari Cina"},"COD_CATEGORIA_BRATING|SCI22":{"codCategoria":"Azionari","nome":"Azionari Corea"},"COD_CATEGORIA_BRATING|SCI24":{"codCategoria":"Azionari","nome":"Azionari EMOA (Mercati Emergenti Europa, Medio Oriente, Africa)"},"COD_CATEGORIA_BRATING|SCI25":{"codCategoria":"Azionari","nome":"Azionari Europa (Mercati Emergenti e Sviluppati)"},"COD_CATEGORIA_BRATING|SCI26":{"codCategoria":"Azionari","nome":"Azionari Europa (Mercati Emergenti esclusa Russia)"},"COD_CATEGORIA_BRATING|SCI27":{"codCategoria":"Azionari","nome":"Azionari Europa (Mercati Emergenti)"},"COD_CATEGORIA_BRATING|SCI28":{"codCategoria":"Azionari","nome":"Azionari Europa (Mercati Sviluppati escl. Regno Unito) - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI30":{"codCategoria":"Azionari","nome":"Azionari Europa (Mercati Sviluppati) - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI31":{"codCategoria":"Azionari","nome":"Azionari Europa (Mercati Sviluppati) - Large & Mid Cap Growth"},"COD_CATEGORIA_BRATING|SCI32":{"codCategoria":"Azionari","nome":"Azionari Europa (Mercati Sviluppati) - Large & Mid Cap Value"},"COD_CATEGORIA_BRATING|SCI33":{"codCategoria":"Azionari","nome":"Azionari Europa (Mercati Sviluppati) - Mid & Small Cap"},"COD_CATEGORIA_BRATING|SCI34":{"codCategoria":"Azionari","nome":"Azionari Europa (Mercati Sviluppati) - Mid & Small Cap Growth"},"COD_CATEGORIA_BRATING|SCI35":{"codCategoria":"Azionari","nome":"Azionari Europa Orientale"},"COD_CATEGORIA_BRATING|SCI37":{"codCategoria":"Azionari","nome":"Azionari Francia"},"COD_CATEGORIA_BRATING|SCI38":{"codCategoria":"Azionari","nome":"Azionari Germania"},"COD_CATEGORIA_BRATING|SCI251":{"codCategoria":"Azionari","nome":"Azionari Giappone - Euro Hedged"},"COD_CATEGORIA_BRATING|SCI39":{"codCategoria":"Azionari","nome":"Azionari Giappone - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI40":{"codCategoria":"Azionari","nome":"Azionari Giappone - Large & Mid Cap Growth"},"COD_CATEGORIA_BRATING|SCI41":{"codCategoria":"Azionari","nome":"Azionari Giappone - Large & Mid Cap Value"},"COD_CATEGORIA_BRATING|SCI42":{"codCategoria":"Azionari","nome":"Azionari Giappone - Mid & Small Cap"},"COD_CATEGORIA_BRATING|SCI254":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti e Sviluppati) - Euro Hedged"},"COD_CATEGORIA_BRATING|SCI44":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti e Sviluppati) - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI45":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti e Sviluppati) - Large & Mid Cap Growth"},"COD_CATEGORIA_BRATING|SCI46":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti e Sviluppati) - Large & Mid Cap Value"},"COD_CATEGORIA_BRATING|SCI252":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti) - Euro Hedged"},"COD_CATEGORIA_BRATING|SCI270":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti) - Frontier Markets"},"COD_CATEGORIA_BRATING|SCI47":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti) - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI48":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti) - Large & Mid Cap Growth"},"COD_CATEGORIA_BRATING|SCI49":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti) - Large & Mid Cap Value"},"COD_CATEGORIA_BRATING|SCI50":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Emergenti) - Mid & Small Cap"},"COD_CATEGORIA_BRATING|SCI253":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Sviluppati) - Euro Hedged"},"COD_CATEGORIA_BRATING|SCI51":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Sviluppati) - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI52":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Sviluppati) - Large & Mid Cap Growth"},"COD_CATEGORIA_BRATING|SCI53":{"codCategoria":"Azionari","nome":"Azionari Globali (Mercati Sviluppati) - Large & Mid Cap Value"},"COD_CATEGORIA_BRATING|SCI43":{"codCategoria":"Azionari","nome":"Azionari Globali - Mid & Small Cap"},"COD_CATEGORIA_BRATING|SCI54":{"codCategoria":"Azionari","nome":"Azionari Grande Cina (Cina, Hong Kong, Taiwan)"},"COD_CATEGORIA_BRATING|SCI56":{"codCategoria":"Azionari","nome":"Azionari Hong Kong"},"COD_CATEGORIA_BRATING|SCI57":{"codCategoria":"Azionari","nome":"Azionari India"},"COD_CATEGORIA_BRATING|SCI59":{"codCategoria":"Azionari","nome":"Azionari Indonesia"},"COD_CATEGORIA_BRATING|SCI61":{"codCategoria":"Azionari","nome":"Azionari Italia - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI62":{"codCategoria":"Azionari","nome":"Azionari Italia - Large & Mid Cap Value"},"COD_CATEGORIA_BRATING|SCI63":{"codCategoria":"Azionari","nome":"Azionari Italia - Mid & Small Cap"},"COD_CATEGORIA_BRATING|SCI64":{"codCategoria":"Azionari","nome":"Azionari Malesia"},"COD_CATEGORIA_BRATING|SCI65":{"codCategoria":"Azionari","nome":"Azionari Nord America"},"COD_CATEGORIA_BRATING|SCI68":{"codCategoria":"Azionari","nome":"Azionari Paesi Iberici"},"COD_CATEGORIA_BRATING|SCI69":{"codCategoria":"Azionari","nome":"Azionari Paesi Nordici"},"COD_CATEGORIA_BRATING|SCI70":{"codCategoria":"Azionari","nome":"Azionari Regno Unito - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI71":{"codCategoria":"Azionari","nome":"Azionari Regno Unito - Large & Mid Cap Value"},"COD_CATEGORIA_BRATING|SCI72":{"codCategoria":"Azionari","nome":"Azionari Russia"},"COD_CATEGORIA_BRATING|SCI325":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Agricoltura"},"COD_CATEGORIA_BRATING|SCI75":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Beni di Consumo Primari e Secondari"},"COD_CATEGORIA_BRATING|SCI76":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Beni di Consumo Secondari (incl. Beni di Lusso)"},"COD_CATEGORIA_BRATING|SCI78":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Beni e Servizi Industriali"},"COD_CATEGORIA_BRATING|SCI79":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Biotecnologia"},"COD_CATEGORIA_BRATING|SCI80":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Energia"},"COD_CATEGORIA_BRATING|SCI81":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Energie Alternative"},"COD_CATEGORIA_BRATING|SCI83":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Farmaceutico e Sanitario"},"COD_CATEGORIA_BRATING|SCI85":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Finanza (Globale)"},"COD_CATEGORIA_BRATING|SCI87":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Immobiliare (Asia Pacifico)"},"COD_CATEGORIA_BRATING|SCI89":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Immobiliare (Globale)"},"COD_CATEGORIA_BRATING|SCI90":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Informatica e Tecnologia (Asia Pacifico)"},"COD_CATEGORIA_BRATING|SCI91":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Informatica e Tecnologia (Europa)"},"COD_CATEGORIA_BRATING|SCI92":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Informatica e Tecnologia (Globale)"},"COD_CATEGORIA_BRATING|SCI322":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Informatica e Tecnologia (USA)"},"COD_CATEGORIA_BRATING|SCI188":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Infrastrutture"},"COD_CATEGORIA_BRATING|SCI95":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Materie Prime e Chimiche"},"COD_CATEGORIA_BRATING|SCI96":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Metalli e Minerali"},"COD_CATEGORIA_BRATING|SCI73":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Risorse Idriche"},"COD_CATEGORIA_BRATING|SCI97":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Risorse Naturali (Energia e Materie Prime)"},"COD_CATEGORIA_BRATING|SCI94":{"codCategoria":"Azionari","nome":"Azionari Settoriali - TMT (Informatica, Telecom., Media)"},"COD_CATEGORIA_BRATING|SCI99":{"codCategoria":"Azionari","nome":"Azionari Settoriali - Telecomunicazioni"},"COD_CATEGORIA_BRATING|SCI100":{"codCategoria":"Azionari","nome":"Azionari Singapore"},"COD_CATEGORIA_BRATING|SCI102":{"codCategoria":"Azionari","nome":"Azionari Svizzera - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI103":{"codCategoria":"Azionari","nome":"Azionari Svizzera - Mid & Small Cap"},"COD_CATEGORIA_BRATING|SCI105":{"codCategoria":"Azionari","nome":"Azionari Taiwan"},"COD_CATEGORIA_BRATING|SCI200":{"codCategoria":"Azionari","nome":"Azionari Tematici - Ecologia e Ambiente"},"COD_CATEGORIA_BRATING|SCI107":{"codCategoria":"Azionari","nome":"Azionari Tematici - Investimenti Etici e Socialmente Resp. (Globale)"},"COD_CATEGORIA_BRATING|SCI202":{"codCategoria":"Azionari","nome":"Azionari Tematici - Investimenti Sostenibili (Europa)"},"COD_CATEGORIA_BRATING|SCI203":{"codCategoria":"Azionari","nome":"Azionari Tematici - Investimenti Sostenibili (Globale)"},"COD_CATEGORIA_BRATING|SCI104":{"codCategoria":"Azionari","nome":"Azionari Thailandia"},"COD_CATEGORIA_BRATING|SCI109":{"codCategoria":"Azionari","nome":"Azionari Turchia"},"COD_CATEGORIA_BRATING|SCI110":{"codCategoria":"Azionari","nome":"Azionari Usa - Large & Mid Cap"},"COD_CATEGORIA_BRATING|SCI111":{"codCategoria":"Azionari","nome":"Azionari Usa - Large & Mid Cap Growth"},"COD_CATEGORIA_BRATING|SCI112":{"codCategoria":"Azionari","nome":"Azionari Usa - Large & Mid Cap Value"},"COD_CATEGORIA_BRATING|SCI113":{"codCategoria":"Azionari","nome":"Azionari Usa - Mid & Small Cap"},"COD_CATEGORIA_BRATING|SCI114":{"codCategoria":"Azionari","nome":"Azionari Usa - Mid & Small Cap Growth"},"COD_CATEGORIA_BRATING|SCI250":{"codCategoria":"Azionari","nome":"Azionari Usa Euro Hedged"},"COD_CATEGORIA_BRATING|SCI121":{"codCategoria":"Bilanciati","nome":"Diversificati Euro (Azioni 30-70%)"},"COD_CATEGORIA_BRATING|SCI178":{"codCategoria":"Flessibili","nome":"Ritorno Assoluto (Media Volatilita')"},"COD_CATEGORIA_BRATING|SCI213":{"codCategoria":"Flessibili","nome":"Ritorno Assoluto - Market Neutral"},"COD_CATEGORIA_BRATING|SCI116":{"codCategoria":"Bilanciati","nome":"Diversificati (Azioni 10-50%)"},"COD_CATEGORIA_BRATING|SCI117":{"codCategoria":"Bilanciati","nome":"Diversificati (Azioni 30-70%)"},"COD_CATEGORIA_BRATING|SCI118":{"codCategoria":"Flessibili","nome":"Diversificati (Azioni 50-90%)"},"COD_CATEGORIA_BRATING|SCI119":{"codCategoria":"Bilanciati","nome":"Diversificati Euro (Azioni 01-20%)"},"COD_CATEGORIA_BRATING|SCI120":{"codCategoria":"Bilanciati","nome":"Diversificati Euro (Azioni 10-50%)"},"COD_CATEGORIA_BRATING|SCI122":{"codCategoria":"Bilanciati","nome":"Diversificati Euro (Azioni 50-90%)"},"COD_CATEGORIA_BRATING|SCI123":{"codCategoria":"Obbligazionari","nome":"Fondi a Capitale Garantito"},"COD_CATEGORIA_BRATING|SCI177":{"codCategoria":"Flessibili","nome":"Ritorno Assoluto (Bassa Volatilita')"},"COD_CATEGORIA_BRATING|SCI216":{"codCategoria":"Flessibili","nome":"Ritorno Assoluto - Global Macro"},"COD_CATEGORIA_BRATING|SCI210":{"codCategoria":"Flessibili","nome":"Ritorno Assoluto - Long Short Strategy"},"COD_CATEGORIA_BRATING|SCI214":{"codCategoria":"Flessibili","nome":"Ritorno Assoluto - Multi-strategy"},"COD_CATEGORIA_BRATING|SCI181":{"codCategoria":"Obbligazionari","nome":"Ritorno Assoluto Obbligazionari"},"COD_CATEGORIA_BRATING|SCI180":{"codCategoria":"Obbligazionari","nome":"Ritorno Assoluto Obbligazionari (euro)"},"COD_CATEGORIA_BRATING|SCI128":{"codCategoria":"Obbligazionari","nome":"Monetari Dollaro Usa"},"COD_CATEGORIA_BRATING|SCI129":{"codCategoria":"Monetari","nome":"Monetari Euro"},"COD_CATEGORIA_BRATING|SCI206":{"codCategoria":"Obbligazionari","nome":"Monetari Euro (Alta Volatilita')"},"COD_CATEGORIA_BRATING|SCI130":{"codCategoria":"Monetari","nome":"Monetari Franco Svizzero"},"COD_CATEGORIA_BRATING|SCI131":{"codCategoria":"Monetari","nome":"Monetari Sterlina"},"COD_CATEGORIA_BRATING|SCI132":{"codCategoria":"Obbligazionari","nome":"Obbligazionari America Latina"},"COD_CATEGORIA_BRATING|SCI141":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Area Euro - Corporate e Governativi"},"COD_CATEGORIA_BRATING|SCI142":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Area Euro - Corporate e Governativi (1-3 Anni)"},"COD_CATEGORIA_BRATING|SCI143":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Area Euro - Governativi"},"COD_CATEGORIA_BRATING|SCI144":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Area Euro - Governativi (1-3 Anni)"},"COD_CATEGORIA_BRATING|SCI204":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Area Euro - Governativi (3-5 Anni)"},"COD_CATEGORIA_BRATING|SCI146":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Area Euro - Inflation Linked"},"COD_CATEGORIA_BRATING|SCI134":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Asia Pacifico"},"COD_CATEGORIA_BRATING|SCI135":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Convertibili Asia Pacifico"},"COD_CATEGORIA_BRATING|SCI136":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Convertibili Euro"},"COD_CATEGORIA_BRATING|SCI137":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Convertibili Globali"},"COD_CATEGORIA_BRATING|SCI140":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Euro - Corporate"},"COD_CATEGORIA_BRATING|SCI161":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Euro - Globali - Corporate e Governativi"},"COD_CATEGORIA_BRATING|SCI192":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Euro - Globali - Governativi"},"COD_CATEGORIA_BRATING|SCI191":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Euro Hedged Globali"},"COD_CATEGORIA_BRATING|SCI197":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Euro Hedged Globali - High Yield"},"COD_CATEGORIA_BRATING|SCI198":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Euro Hedged Globali Inflation Linked"},"COD_CATEGORIA_BRATING|SCI193":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Euro Hedged Mercati Emergenti"},"COD_CATEGORIA_BRATING|SCI194":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Euro Hedged Usa"},"COD_CATEGORIA_BRATING|SCI196":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Euro Hedged Usa Corporate High Yield"},"COD_CATEGORIA_BRATING|SCI189":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Europa (Mercati Emerg. e Sviluppati)"},"COD_CATEGORIA_BRATING|SCI152":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Europa (Mercati Emergenti)"},"COD_CATEGORIA_BRATING|SCI149":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Europa - Corporate e Governativi"},"COD_CATEGORIA_BRATING|SCI150":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Europa - Corporate e Governativi High Yield"},"COD_CATEGORIA_BRATING|SCI155":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Franco Svizzero"},"COD_CATEGORIA_BRATING|SCI164":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Globali (Mercati  Sviluppati) - Corporate High Yield"},"COD_CATEGORIA_BRATING|SCI199":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Globali (Mercati Emergenti) - Corporate"},"COD_CATEGORIA_BRATING|SCI165":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Globali (Mercati Emergenti) - Corporate e Governativi"},"COD_CATEGORIA_BRATING|SCI162":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Globali (Mercati Sviluppati) - Corporate"},"COD_CATEGORIA_BRATING|SCI160":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Globali - Corporate e Governativi High Yield"},"COD_CATEGORIA_BRATING|SCI159":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Globali - Corporate e Governativi Investment Grade"},"COD_CATEGORIA_BRATING|SCI163":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Globali - Governativi"},"COD_CATEGORIA_BRATING|SCI158":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Globali - Inflation Linked"},"COD_CATEGORIA_BRATING|SCI167":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Sterlina - Corporate e Governativi"},"COD_CATEGORIA_BRATING|SCI169":{"codCategoria":"Obbligazionari","nome":"Obbligazionari USA - Asset e Mortgage Backed"},"COD_CATEGORIA_BRATING|SCI173":{"codCategoria":"Obbligazionari","nome":"Obbligazionari USA - Corporate High Yield"},"COD_CATEGORIA_BRATING|SCI170":{"codCategoria":"Obbligazionari","nome":"Obbligazionari USA - Corporate e Governativi"},"COD_CATEGORIA_BRATING|SCI171":{"codCategoria":"Obbligazionari","nome":"Obbligazionari USA - Corporate e Governativi (Breve-Medio Term.)"},"COD_CATEGORIA_BRATING|SCI174":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Usa - Governativi"},"COD_CATEGORIA_BRATING|SCI175":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Usa - Governativi (Breve-Medio Term.)"},"COD_CATEGORIA_BRATING|SCI176":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Usa - Governativi (Medio-Lungo Term.)"},"COD_CATEGORIA_BRATING|SCI156":{"codCategoria":"Obbligazionari","nome":"Obbligazionari Yen Giapponese"},"CAT_ASSOGESTIONI|-1":{"codCategoria":"Altro","nome":"Altro"},"CAT_ASSOGESTIONI|15":{"codCategoria":"Azionari","nome":"Azionari Altre Specializzazioni"},"CAT_ASSOGESTIONI|44":{"codCategoria":"Azionari","nome":"Azionari Altri Settori"},"CAT_ASSOGESTIONI|4":{"codCategoria":"Azionari","nome":"Azionari America"},"CAT_ASSOGESTIONI|3":{"codCategoria":"Azionari","nome":"Azionari Area Euro"},"CAT_ASSOGESTIONI|38":{"codCategoria":"Azionari","nome":"Azionari Beni di Consumo"},"CAT_ASSOGESTIONI|36":{"codCategoria":"Azionari","nome":"Azionari Energia e Materie Prime"},"CAT_ASSOGESTIONI|5":{"codCategoria":"Azionari","nome":"Azionari Europa"},"CAT_ASSOGESTIONI|40":{"codCategoria":"Azionari","nome":"Azionari Finanza"},"CAT_ASSOGESTIONI|37":{"codCategoria":"Azionari","nome":"Azionari Industria"},"CAT_ASSOGESTIONI|41":{"codCategoria":"Azionari","nome":"Azionari Informatica"},"CAT_ASSOGESTIONI|2":{"codCategoria":"Azionari","nome":"Azionari Internazionali"},"CAT_ASSOGESTIONI|1":{"codCategoria":"Azionari","nome":"Azionari Italia"},"CAT_ASSOGESTIONI|6":{"codCategoria":"Azionari","nome":"Azionari Pacifico"},"CAT_ASSOGESTIONI|34":{"codCategoria":"Azionari","nome":"Azionari Paese"},"CAT_ASSOGESTIONI|14":{"codCategoria":"Azionari","nome":"Azionari Paesi Emergenti"},"CAT_ASSOGESTIONI|39":{"codCategoria":"Azionari","nome":"Azionari Salute"},"CAT_ASSOGESTIONI|43":{"codCategoria":"Azionari","nome":"Azionari Servizi di Pubblica Utilita'"},"CAT_ASSOGESTIONI|42":{"codCategoria":"Azionari","nome":"Azionari Servizi di Telecomunicazione"},"CAT_ASSOGESTIONI|7":{"codCategoria":"Bilanciati","nome":"Bilanciati "},"CAT_ASSOGESTIONI|25":{"codCategoria":"Bilanciati","nome":"Bilanciati Azionari"},"CAT_ASSOGESTIONI|26":{"codCategoria":"Bilanciati","nome":"Bilanciati Obbligazionari"},"CAT_ASSOGESTIONI|20":{"codCategoria":"Flessibili","nome":"Fondi Flessibili"},"CAT_ASSOGESTIONI|60":{"codCategoria":"Monetari","nome":"Fondi Liquidita Altre Valute"},"CAT_ASSOGESTIONI|58":{"codCategoria":"Monetari","nome":"Fondi Liquidita Area Dollaro"},"CAT_ASSOGESTIONI|19":{"codCategoria":"Monetari","nome":"Fondi Liquidita Area Euro"},"CAT_ASSOGESTIONI|59":{"codCategoria":"Monetari","nome":"Fondi di Mercato Monetario Area Yen"},"CAT_ASSOGESTIONI|22":{"codCategoria":"Non Categorizzato","nome":"Altri"},"CAT_ASSOGESTIONI|17":{"codCategoria":"Obbligazionari","nome":"Obb. Altre Special."},"CAT_ASSOGESTIONI|51":{"codCategoria":"Obbligazionari","nome":"Obb. Dollaro Corporate Investment Grade"},"CAT_ASSOGESTIONI|49":{"codCategoria":"Obbligazionari","nome":"Obb. Dollaro Governativi Breve Termine"},"CAT_ASSOGESTIONI|50":{"codCategoria":"Obbligazionari","nome":"Obb. Dollaro Governativi M/L Termine"},"CAT_ASSOGESTIONI|52":{"codCategoria":"Obbligazionari","nome":"Obb. Dollaro High Yield"},"CAT_ASSOGESTIONI|47":{"codCategoria":"Obbligazionari","nome":"Obb. Euro Corporate Investment Grade"},"CAT_ASSOGESTIONI|45":{"codCategoria":"Obbligazionari","nome":"Obb. Euro Governativi Breve Termine"},"CAT_ASSOGESTIONI|46":{"codCategoria":"Obbligazionari","nome":"Obb. Euro Governativi M/L Termine"},"CAT_ASSOGESTIONI|48":{"codCategoria":"Obbligazionari","nome":"Obb. Euro High Yield"},"CAT_ASSOGESTIONI|57":{"codCategoria":"Obbligazionari","nome":"Obb. Flessibili"},"CAT_ASSOGESTIONI|54":{"codCategoria":"Obbligazionari","nome":"Obb. Intern. Corporate Investment Grade"},"CAT_ASSOGESTIONI|53":{"codCategoria":"Obbligazionari","nome":"Obb. Intern. Governativi"},"CAT_ASSOGESTIONI|55":{"codCategoria":"Obbligazionari","nome":"Obb. Intern. High Yield"},"CAT_ASSOGESTIONI|68":{"codCategoria":"Obbligazionari","nome":"Obb. Italia"},"CAT_ASSOGESTIONI|8":{"codCategoria":"Obbligazionari","nome":"Obb. Misti"},"CAT_ASSOGESTIONI|13":{"codCategoria":"Obbligazionari","nome":"Obb. Paesi Emergenti"}},"tipoCategoria":{"CAT_ASSOGESTIONI":{"nome":"Categoria Assogestioni"},"COD_CATEGORIA_BRATING":{"nome":"Categoria BRating"}},"codCategoria":{"Altri":{"nome":"Altri"},"Azionari":{"nome":"Azionari"},"Bilanciati":{"nome":"Bilanciati"},"Flessibili":{"nome":"Flessibili"},"Monetari":{"nome":"Monetari"},"Obbligazionari":{"nome":"Obbligazionari"}},"valutaRif":{"AUD":{"nome":"AUD"},"CHF":{"nome":"CHF"},"CNY":{"nome":"CNY"},"EUR":{"nome":"EUR"},"GBP":{"nome":"GBP"},"JPY":{"nome":"JPY"},"SEK":{"nome":"SEK"},"USD":{"nome":"USD"}},"codArea":{"81":{"nome":"Altri Paesi"},"67":{"nome":"America Latina e Centrale "},"68":{"nome":"Asia"},"347":{"nome":"Asia Pacifico Ex Giappone"},"75":{"nome":"Europa"},"130":{"nome":"Europa Area Euro"},"60":{"nome":"Europa Occidentale - non EURO"},"348":{"nome":"Europa dell' Est"},"14":{"nome":"Giappone"},"61":{"nome":"Medio Oriente / Africa"},"-1":{"nome":"Non pervenuto"},"25":{"nome":"Usa"}},"codSettore":{"41":{"nome":"Altro"},"2":{"nome":"Beni di consumo"},"307":{"nome":"Consumi discrezionali"},"12":{"nome":"Energia"},"14":{"nome":"Finanza"},"17":{"nome":"Industria"},"666":{"nome":"Materiali e Materie Prime"},"-1":{"nome":"Non pervenuto"},"23":{"nome":"Sanita'"},"16":{"nome":"Tecnologia"},"39":{"nome":"Telecomunicazioni"}},"fesRendimento":{"PERFORMANCE_1_GG|-2.228|4.335|-5|5":{"defaultmin":"-5","min":"-2.228","defaultmax":"5","max":"4.335","periodo":"1 giorno"},"PERFORMANCE_1_SS|-7.819|8.916|-10|10":{"defaultmin":"-10","min":"-7.819","defaultmax":"10","max":"8.916","periodo":"1 settimana"},"PERFORMANCE_1_MM|-20.634|3.071|-20|20":{"defaultmin":"-20","min":"-20.634","defaultmax":"20","max":"3.071","periodo":"1 mese"},"PERFORMANCE_3_MM|-43.672|9.393|-20|20":{"defaultmin":"-20","min":"-43.672","defaultmax":"20","max":"9.393","periodo":"3 mesi"},"PERFORMANCE_6_MM|-50.897|33.83|-20|20":{"defaultmin":"-20","min":"-50.897","defaultmax":"20","max":"33.83","periodo":"6 mesi"},"PERFORMANCE_1_AA|-50.746|54.926|-40|40":{"defaultmin":"-40","min":"-50.746","defaultmax":"40","max":"54.926","periodo":"1 anno"},"PERFORMANCE_3_AA|-63.836|95.782|-50|50":{"defaultmin":"-50","min":"-63.836","defaultmax":"50","max":"95.782","periodo":"3 anno"},"PERFORMANCE_5_AA|-68.452|189.34|-50|50":{"defaultmin":"-50","min":"-68.452","defaultmax":"50","max":"189.34","periodo":"5 anno"},"PERFORMANCE_INIZIO_ANNO|-52.005|33.83|-40|40":{"defaultmin":"-40","min":"-52.005","defaultmax":"40","max":"33.83","periodo":"da inizio anno"}},"fesVolatilita":{"VOL_1_ANN|0|28.124|0|20":{"defaultmin":"0","min":"0","defaultmax":"20","max":"28.124","periodo":"1 anno"},"VOL_3_ANN|0|29.803|0|30":{"defaultmin":"0","min":"0","defaultmax":"30","max":"29.803","periodo":"3 anno"},"VOL_5_ANN|0|41.187|0|40":{"defaultmin":"0","min":"0","defaultmax":"40","max":"41.187","periodo":"5 anno"}},"invMinimo":{"500":{"nome":"500"},"1000":{"nome":"1000"},"1500":{"nome":"1500"}},"commissione":{"0":{"nome":"Commissione 1"},"1":{"nome":"Commissione 2"},"3":{"nome":"Commissione 3"}},"dividendi":{"0":{"nome":"Con Dividendi"},"1":{"nome":"Senza Dividendi"}},"codSocieta":{"1":{"img":"/wscmn/img/ret/img_or_S-allianz.gif","nome":"Allianz Global Investors Lux."},"2":{"img":"/wscmn/img/ret/img_or_prima_new.gif","nome":"Anima Prima Funds Plc"},"3":{"img":"/wscmn/img/ret/img_or_S-anima_new.gif","nome":"Anima Sgr Spa"},"4":{"img":"/wscmn/img/ret/img_or_S-Blackrock.gif","nome":"BlackRock (Luxembourg) S.A."},"5":{"img":"/wscmn/img/ret/img_or_S-carmignac_fondi.gif","nome":"Carmignac Gestion"},"6":{"img":"/wscmn/img/ret/img_or_S-carmignac_port.gif","nome":"Carmignac Portfolio Sicav"},"7":{"img":"/wscmn/img/ret/img_or_S-dws.gif","nome":"Dws Investments Sa"},"8":{"img":"/wscmn/img/ret/img_or_S-epsilon.gif","nome":"Epsilon Sgr Spa"},"9":{"img":"/wscmn/img/ret/img_or_S-etica.gif","nome":"Etica Sgr Spa"},"10":{"img":"/wscmn/img/ret/img_or_S-Eurizon.gif","nome":"Eurizon Capital Sgr Spa"},"11":{"img":"/wscmn/img/ret/img_or_S-fidelity.gif","nome":"Fidelity Investments Lux. S.A."},"12":{"img":"/wscmn/img/ret/img_or_S-Franklin.gif","nome":"Franklin Templeton Inv. Sicav"},"13":{"img":"/wscmn/img/ret/img_or_S-JPMorganAM.gif","nome":"JPMorgan Funds"},"14":{"img":"/wscmn/img/ret/img_or_S-JPMinv.gif","nome":"JPMorgan Investment Funds"},"15":{"img":"/wscmn/img/ret/img_or_MG.gif","nome":"M&G Global"},"16":{"img":"/wscmn/img/ret/img_or_S-morganstanley.gif","nome":"Morgan Stanley Investment Fund"},"17":{"img":"/wscmn/img/ret/img_or_S-pictet.gif","nome":"Pictet Funds (Europe) S.A."},"18":{"img":"/wscmn/img/ret/img_or_S-pimco.gif","nome":"Pimco Funds Gl.Inv. Series Plc"},"19":{"img":"/wscmn/img/ret/img_or_S-schroeder.gif","nome":"Schroder Int. Selection Fund"},"20":{"img":"/wscmn/img/ret/img_or_JB.gif","nome":"Swiss & Global AM Lux SA"},"21":{"img":"/wscmn/img/ret/img_or_S-threadneedle.gif","nome":"Threadneedle Management Lux SA"}, "22":{"img":"/wscmn/img/ret/img_or_S-invesco.gif","nome":"Invesco Stacked"}},"fondoSicav":{"F":{"nome":"Fondo"},"S":{"nome":"Sicav"}},"macroCat":{"Altro":{"nome":"Altro"},"Azionari":{"nome":"Azionari"},"Bilanciati":{"nome":"Bilanciati"},"Flessibili":{"nome":"Flessibili"},"Monetari":{"nome":"Monetari"},"Non Categorizzato":{"nome":"Non Categorizzato"},"Obbligazionari":{"nome":"Obbligazionari"},"Altri":{"nome":"Altri"}},"codRating":{"5":{"nome":"5 corone"},"4":{"nome":"4 corone"},"3":{"nome":"3 corone"},"2":{"nome":"2 corone"},"1":{"nome":"1 corone"},"0":{"nome":"0 corone"}}}
</script>
<!-- FINE CONFIGURAZIONE DATI ESTERNI -->
<h1>Ricerca e confronta</h1>
<!-- TABS -->

<!-- ******* WRAPPER PAGINA RICERCA (TAB COMPRESI) ******* -->
<div id="fesRicWrap" style="display:none">
	<ul class="tabGeneric">
		<li class="active" id="tabRicerca"><span class="tabBorder"><span class="tabGradient"><a href="javascript:;">Ricerca</a></span></span></li>
		<li id="tabConfronta"><span class="tabBorder"><span class="tabGradient"><a href="javascript:;" class="leftelement">Confronta</a><div id="fesConfButt" style="display:none"><span>2 fondi</span><a class="smallClose">&nbsp;</a></div></span></span></li>		
	</ul>
	<!-- FINE TABS -->
	<!-- WRAPPER -->
	<div id="fesRicercaCont">
		<div class="filettoGenericoVerticale">
			<div class="filettoGenericCorner">
				<div class="paddMedium">
					<div class="borderFormRounded searchFilter">
						<div class="formGeneric">
							<form autocomplete="off" id="fesSearchForm" action="javascript:;">
								<!-- CAMPI DI CONFIGURAZIONE "ESTERNI" -->
								<input type="hidden" name="fesCollocato" id="fesCollocato" value="S">
								<input type="hidden" name="orderby" id="orderby">
								<input type="hidden" name="orderdir" id="orderdir">
								<input type="hidden" name="firstpage" id="firstpage">
								<input type="hidden" name="fromPage" id="fromPage" value="">
								<div class="row-fluid">
									<div class="span4">
										<label class="nomefield">Nome o ISIN</label>
										<div>
											<input type="text" id="descrizione" name="descrizione" autocomplete="off">
										</div>								
									</div>
									<div class="span4">
										<label class="nomefield">Societ&agrave; di gestione</label>
										<div id="fesSocGest" class="btnMultiSel">
											<input type="hidden" id="codSocieta" name="codSocieta" value="<?php print $codSocieta;?>">
										</div>
									</div>
									<div class="span4">
										<label class="nomefield">Fondo o sicav</label>
										<div id="fesFondo" class="btnMultiSel">
											<input type="hidden" id="fondoSicav" name="fondoSicav">
										</div>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span4">
										<label class="nomefield">Tipologia di fondo</label>
										<div id="fesMacro" class="btnMultiSel">
											<input type="hidden" id="macroCat" name="macroCat">
										</div>
									</div>
									<div class="span4">
										<label class="nomefield">Rating</label>
										<div id="fesRating" class="btnMultiSel">
											<input type="hidden" id="codRating" name="codRating">
										</div>
									</div>
									<div class="span4">
										<label class="nomefield">Categoria Assogestioni o BRating</label>
										<div id="fesCategoria" class="btnMultiSel">
											<input type="hidden" id="fesCategoria" name="fesCategoria">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<br class="clear"/>
				</div>
			</div>
		</div>
		<!-- SATELLITE SELETTORE SPALLA SINISTRA -->
		<div id="fesLeftSel" style="display:none">
			<form id="fesSearchLeftForm" autocomplete="off" >
				<a id="fesSearchLeftSwitch">&nbsp;</a>
				<div class="fesSearchLeftMenu" style="display:none">
					<span class="fesSearchLeftTitle">Filtra risultati</span>
					<div class="fesAdvFiltro">
						<label class="nomefield">Valuta</label>
						<div class="btnMultiSel">
							<input type="hidden" id="valutaRif" name="valutaRif">
						</div>
					</div>
					<div class="fesAdvFiltro">
						<label class="nomefield">Area geografica</label>
						<div class="btnMultiSel">
							<input type="hidden" id="codArea" name="codArea">
						</div>
					</div>		
					<div class="fesAdvFiltro">
						<label class="nomefield">Settore predominante</label>
						<div class="btnMultiSel">
							<input type="hidden" id="codSettore" name="codSettore">
						</div>
					</div>		
					<div class="fesAdvFiltro">
						<label class="nomefield">Rendimento</label>
						<div class="btnMultiSel">
							<input type="hidden" id="fesRendimento" name="fesRendimento">
						</div>
					</div>		
					<div class="fesAdvFiltro">
						<label class="nomefield">Volatilit&agrave;</label>
						<div class="btnMultiSel">
							<input type="hidden" id="fesVolatilita" name="fesVolatilita">
						</div>
					</div>					
				</div>
				<div class="fesSearchLeftMenu" style="display:none">
					<span class="fesSearchLeftTitle">Il tuo investimento</span>
					<div class="fesAdvFiltro">
						<label class="nomefield">Investimento minimo</label>
						<div class="btnMultiSel">
							<input type="hidden" id="invMinimo" name="invMinimo">
						</div>
					</div>
					<div class="fesAdvFiltro">
						<label class="nomefield">Commissione di ingresso</label>
						<div class="btnMultiSel">
							<input type="hidden" id="commissione" name="commissione">
						</div>
					</div>		
					<div class="fesAdvFiltro">
						<label class="nomefield">Proventi</label>
						<div class="btnMultiSel">
							<input type="hidden" id="dividendi" name="dividendi">
						</div>
					</div>			
				</div>
			</form>
		</div>
		<!-- FINE SATELLITE SELETTORE SPALLA SINISTRA -->
		<!-- FINE WRAPPER -->
		<div id="fesSearchResults">
			<span class="fesTotRes"><span id="fesTotFiltered">1806</span> fondi selezionati su <span id="fesTot">1806</span></span>
			
			<!-- OVERLAY PERSONALIZZAZIONE DELLE COLONNE -->
			<div id="tablePersOverlay" class="selOverlay" style="display: none">
				<h3>Lorem ipsum dolor</h3><a class="close"></a>
				<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p>
				<h3>Lorem ipsum dolor</h3>
				<ul>
					<li>Lorem dolor sit amet consectetur adipiscing elit summa cum laude.</li>
					<li>Consectetur adipiscing elit summa cum laude lorem dolor dolor dolor e ancora dolor.</li>
					<li>Cabulorem dolor sit amet consectetur adipiscing elit summa cum laude.</li>
				</ul>
				<span id="tablePersCont"><b>0</b> di <b>5</b> selezionati</span>
				<div class="fesSelCont">
					<form autocomplete="off">	
					</form>
				</div>
				<div class="aButtoncons"><a class="aButton" href="javascript:;" title="Salva modifiche">Salva modifiche</a></div>
			</div>
			<!-- FINE OVERLAY PERSONALIZZAZIONE COLONNE -->
			<label>Mostra dettagli:
				<select id="fesSearchTableSelect" autocomplete="off">
					<option value="sintesi" selected>Sintesi</option>
					<option value="rendimenti">Rendimenti</option>
					<option value="rischio">Rating e rischio</option>
					<option value="composizione">Composizione</option>
					<option value="costi">Costi</option>
					<option value="perso">Personalizza</option>
				</select>
			</label>
		</div>
	</div>
</div>
<!-- ******* FINE WRAPPER PAGINA RICERCA (TAB COMPRESI) ******* -->