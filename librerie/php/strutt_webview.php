<?php
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$isMobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)));
	$tpl = $_GET["tpl"];
	$area = "pri" ;
	$customer = "ret";
	$liv0 = ($_GET["liv0"] != "") ? $_GET["liv0"] : 0;
	$responsive = $_GET["responsive"];
	$isResponsive = ($responsive != 'n');

	// Assembla le chiavi di navigazione
	$navIndex = array($liv0);
	if ($_GET["liv1"] != "") array_push($navIndex,$_GET["liv1"]);
	if ($_GET["liv2"] != "") array_push($navIndex,$_GET["liv2"]);
	if ($_GET["liv3"] != "") array_push($navIndex,$_GET["liv3"]);
?><!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="utf-8">
		<title><?php print $fullname; ?></title>
		<meta http-equiv="Page-Enter" content="blendTrans(Duration=0.1)">

		<!-- MOBILE -->
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<!-- Allows fullscreen mode from the Homescreen -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Sets the color of the text/battery, wireless icons etc -->
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="HandheldFriendly" content="true"/>
		<meta name="MobileOptimized" content="320"/>
		<meta name="format-detection" content="telephone=no">
		<!-- / MOBILE -->

		<!-- CSS -->
		<!-- Css strutturale -->
		<link href="/wscmn/fe/css/priv_base<?php print ("_".$bank) ?>.css" rel="stylesheet" type="text/css" media="all">
		<?php
		if (!$isResponsive) {
		?>

			<!-- Css non responsive -->
			<link rel="stylesheet" type="text/css" href="/wscmn/fe/css/noresp_priv_generic.css" media="all">
			<!--[if lt IE 9]>	
			<link rel="stylesheet" type="text/css" href="/wscmn/css/priv_generic_compat.css" />
			<![endif]-->
			<link rel="stylesheet" type="text/css" href="/wscmn/fe/css/noresp_priv_special.css" media="all">
			<link rel="stylesheet" type="text/css" href="/wscmn/fe/css/noresp_priv_fes.css" media="all">
			<link rel="stylesheet" type="text/css" href="/fe/css/noresp_priv_color.css" media="all">
			<link rel="stylesheet" type="text/css" href="/wscmn/fe/css/noresp_priv_print.css" media="print">
			<link rel="stylesheet" type="text/css" href="/wscmn/css/priv_calendar.css" media="all">
			<!-- Fine css non responsive -->

		<?php
			// CSS di compatibilità per le FP vecchie
			$isFpCarte = ($tpl == "tpl_priv_full_carte.php");
			$isFpTrading = ($tpl == "tpl_priv_fp_trading.php");
			$isFpInvestimenti = ($tpl == "tpl_priv_fp_investimenti.php");
			$isFpFinanziamenti = ($tpl == "tpl_priv_fp_finanz.php");
			$isFpAssicurazioni = ($tpl == "tpl_priv_fp_assic.php");
			
			if ($isFpCarte) {
		?>
				<link rel="stylesheet" type="text/css" href="/wscmn/fe/compat/css/carte.css" media="all" />
		<?php
			} elseif ($isFpTrading) {
		?>
				<link rel="stylesheet" type="text/css" href="/wscmn/fe/compat/css/trading.css" media="all" />
		<?php
			} elseif ($isFpInvestimenti) {
		?>
				<link rel="stylesheet" type="text/css" href="/wscmn/fe/compat/css/investimenti.css" media="all" />
		<?php
			} elseif ($isFpFinanziamenti) {
		?>
				<link rel="stylesheet" type="text/css" href="/wscmn/fe/compat/css/finanziamenti.css" media="all" />
		<?php
			} elseif ($isFpAssicurazioni) {
		?>
				<link rel="stylesheet" type="text/css" href="/wscmn/fe/compat/css/assicurazioni.css" media="all" />
		<?php
			}
		}
		else
		{
		?>
		<!-- Css nuovi responsive-->
		<link href="/wscmn/fe/css/priv_generic<?php print ("_".$bank) ?>.css" rel="stylesheet" type="text/css" media="all" >
		<link href="/wscmn/fe/css/priv_print<?php print ("_".$bank) ?>.css" rel="stylesheet" type="text/css" media="print">
		<?php
		}

		// CSS SPECIALI
		$isRIA = ($tpl == "tpl_priv_fp_my_ria.php" || $tpl == "tpl_priv_fp_my_ria_new.php" || $tpl == "tpl_priv_fp_my_riadisab.php");
	    if ($isRIA) {
	    ?>
			<!-- CSS speciali per RIA, BEN FATTO, ECC, da importare solo in alcune pagine -->
			<link rel="stylesheet" type="text/css" href="/wscmn/css/priv_ret_rbf.css" media="all" />
			<link rel="stylesheet" type="text/css" href="/wscmn/css/ret/ria.css" media="all" />
			<!-- FINE CSS SPECIALI -->
	    <?php
		}
		?>
		<!-- / CSS -->
		
		<script type="text/javascript">
			// Variabili per ambiente, riporta le chiavi del navigatore selezionate 
			var navIndex = [<?php print "'".implode("','",$navIndex)."'" ?>];

			var sectionTitle = "Webank";

			// Variabili per emulazione
			var cgi_script = "/webankpri";
			var imgPath = '/img/ret/';
			var pDis = true;
			var pCP = false;
			var abilOroCap = true;
			var isWebank = true;
			var hasCarte = false;
			var isComunita200Mov = true;
			var rbfLinkObj = {
				'bonifico': 'BON',
				'giroconto': 'GIR',
				'carta': 'PRJ'
			};
		</script>

		<!-- JS -->
		<script type="text/javascript" src="/wscmn/fe/js/jquery.js"></script>
		<script type="text/javascript" src="/wscmn/fe/js/bootstrap.min.js"></script>
		<!-- FINE JS LIBRERIE --> 
		<script type="text/javascript" src="/wscmn/fe/js/priv_generic.js"></script>
		<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_generic.js"></script>
		<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_utilities.js"></script>
		<script type="text/javascript" src="/wscmn/fe/js/bootstrap-table.js"></script>
		
		
		<!-- Css e JS di compatibilita' generica condizionato -->

		<!--[if lte IE 8]>
		<link href="/wscmn/fe/compat/js/css/priv_old.css" rel="stylesheet" type="text/css" media="all" >
		<script type="text/javascript" src="/wscmn/fe/compat/js/priv_old.js"></script>
		<![endif]-->

		<!-- /JS -->
		
	</head>
	<body class="webview<?php if ($navIndex[0] == "0" && sizeof($navIndex)==1) print " myhome" ;?> loading" style="display:none">
		<!-- CONTENT (dinamico a seconda del tipo di pagina da visualizzare - front page, pagina standard, pagina estesa) -->
		<div id="main">
			<div class="wrapper">
				<div class="container-fluid">
					<?php

						if ($tpl != "")
						{ 
						$structure = "full";
						virtual("/librerie/php/strutt_priv_navigazione.php");
						}
					?>
				</div>
			</div>
		</div>
		<!-- /CONTENT -->
		<?php
		// JS SPECIALI
		if ($isRIA) {
	    ?>
			<!-- JS testo tooltip -->
			<?php virtual("/librerie/include/commons/ria/part/testoTooltip.php") ?>
			<!-- /JS testo tooltip -->

			<script type="text/javascript" src="/wscmn/js/amcharts/amcharts.js"></script>
			<script type="text/javascript" src="/wscmn/js/calcoloInteressiVincoli.js"></script>
			<script type="text/javascript" src="/wscmn/js/privata/SWFObject.js"></script>
			<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
			<script type="text/javascript" src="/wscmn/js/privata/riaLinks.js"></script>
			<script type="text/javascript" src="/wscmn/js/privata/riaUtilities.js"></script>
			<script type="text/javascript" src="/wscmn/js/privata/riaAnimazioni.js"></script>
			<script type="text/javascript" src="/wscmn/js/privata/riaNavigazione.js"></script>
			<script type="text/javascript" src="/wscmn/js/privata/riaChiamate.js"></script>
			<script type="text/javascript" src="/wscmn/js/priv_ret_rbf.js"></script>

			<?php
				if ($permettiDispositive) {
			?>
			<script type="text/javascript" src="/wscmn/js/privata/riaDispositive.js"></script>
			<?php
				}
			?>

			<script type="text/javascript" src="/wscmn/js/privata/ria.js"></script>

			<!-- JS di personalizzazione per le librerie -->
			<script type="text/javascript" src="/librerie/include/commons/ria/ajax/librerie.js"></script>
			<!-- FINE - JS di personalizzazione per le librerie -->

			<script type="text/javascript">
			function layerconti(conto,intestatari) {
				openPopOverLayer('layeralertconti','float', 1);
				$('contenuto')
					.innerHTML = '<div><p>Per operare sul conto corrente indicato, &egrave; necessario che <strong>tutti gli intestatari</strong> richiedano '+
									'l\'\<strong>abilitazione</strong> al servizio <strong>---</strong> presso la propria <strong>agenzia ---</strong>.</p>'+
								'</div>'+	
								'<div class="row-fluid">'+
									'<div class="span4">'+
										'<label class="nomefield"><strong>Conto corrente n&deg;</strong></label><br>'+
										'<span class="output">'+conto+'</span>'+
									'</div>'+
									'<div class="span8">'+
										'<label class="nomefield"><strong>Intestato a</strong></label><br>'+
										'<span class="output">'+intestatari+'</span>'+
									'</div>'+
								'</div>';
			}
			</script>
	    <?php
		}
		?>
	</body>
</html>
