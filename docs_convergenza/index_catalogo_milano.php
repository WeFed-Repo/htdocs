<?php
$site = $_GET["site"];
$tipo = $_GET["tipo"];
$libs = 'webank';
$libsurl = 'http://convergenza.webank.local'; 
$colorLink = "#8ab10b";

if ($site == 'youweb') {
	$libs = "youweb";
	$colorLink = "#122e5c";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php print $fullname; ?></title>

        <meta name="description" content="convergenza"/>

        <!-- MOBILE -->

        <meta name="viewport"
              content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <!-- Allows fullscreen mode from the Homescreen -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!-- Sets the color of the text/battery, wireless icons etc>
		<!-- / MOBILE -->

        <!-- FAVICON -->
        <link rel="icon" href="/favicon.ico">
        <link rel="manifest" href="/manifest.json">
        <meta name="apple-mobile-web-app-title" content="Webank Resp">
        <meta name="application-name" content="Webank Resp">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- CSS -->

        <link rel="stylesheet" href="/css/librerie.css">
        <!-- / CSS -->

        <link href="/WB/fe/css/priv_struttura_webank_full_responsive.css?r=" rel="stylesheet" type="text/css" media="all">
        <link href="/WB/fe/css/priv_base_webank.css?r=" rel="stylesheet" type="text/css" media="all">
        <link href="/WB/fe/css/priv_generic_webank.css?r=" rel="stylesheet" type="text/css" media="all">
        <link media="screen" rel="stylesheet" type="text/css" href="/common/fe/css/main.css"/>
        <link media="screen" rel="stylesheet" type="text/css" href="/WB/fe/css/webank_skin.css"/>

        <link media="print" rel="stylesheet" type="text/css" href="/WB/fe/css/priv_print.css?a=452"/>


        <script type="text/javascript">
            // Variabili per ambiente, riporta le chiavi del navigatore selezionate
            navIndex = ['0'];

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
        <script type="text/javascript" src="/include/ajax/priv_menu.php?bank=webank&"></script>
        <script type="text/javascript" src="/common/fe/js/jquery.js?r="></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.ui.touch-punch.min.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/ie10-viewport.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jsapi.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.dateIT.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.altImg.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.formattedNum.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.form.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.blockUI.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery-ui.selectToUISlider.js"></script>
        <script type="text/javascript" src="/common/fe/js/bootstrap.min.js?r="></script>
        <!-- JS LIBRERIE (non includere in sviluppo) -->


        <!-- FINE JS LIBRERIE -->
        <script type="text/javascript" src="/common/fe/js/priv_generic.js?r="></script>
        <script type="text/javascript" src="/common/fe/js/bootstrap-table.js?r="></script>
        <script type="text/javascript">
            function getPathImages() {
                return "/HT/fe/css/";
            }

            function getPathContext() {
                return "/WEBHT";
            }

            function getKBanca() {
                return "1";
            }

            function getLineaTol() {
                return "";
            }
        </script>
        <!-- ADD-IN Convergenza -->
        <link media="screen" rel="stylesheet" type="text/css" href="/WB/fe/css/webank_skin.css?v=161229"/>
        <script type="text/javascript" language="javascript" src="/common/fe/js/funzioni_convergenza.js?v=161229"></script>
        <!-- Fine ADD-IN Convergenza -->


        <title>Librerie Covergenza</title>
        <style>

            /* STILI PER LIBRERIE OGGETTI */
            #main {
                margin: 0 auto;
                max-width: 1110px;
            }

            header {
                background: #fff;
                width: 100%;
                height: 70px;
            }

            h1.librerie {
                border-bottom: 0;
                box-shadow: none;
                font-size: 25px;
                color: #fff;
                padding: 15px 15px;
                font-weight: bold;
                margin: 0;
                font-size: 32px;
                float: left;
            }

            h1.librerie a {
                text-decoration: none;
            }

            h1.librerie span {
                color: #000;
            }

            #mainContent {
                background: #fff;
                padding: 20px
            }

            h2.oggettolib {
                color: #fff;
                background-color: #666;
                padding: 5px;
                font-weight: bold;
                margin-bottom: 20px
            }

            a.libBtn {
                width: 32px;
                height: 32px;
                margin: 0 10px 0 5px;
                color: #fff;
                text-align: center;
                line-height: 32px;
                padding: 0;
                border-radius: 50%;
                display: inline-block;
                border: solid 2px #666;
                border-radius: 50%;
                color: #000;
            }

            a.libBtn img {
                display: inline-block;
                margin-top: 5px;
            }

            .container {
                width: 100% !important;
                padding: 0;
            }

            /* Switch */
            #lib-switch {
                float: right;
                padding: 15px;
            }

            #lib-switch a.pulsante {
                width: 40px;
                height: 40px;
                background: #999;
                border-radius: 50%;
                line-height: 40px;
                margin: 0 0 0 15px;
                text-align: center;
                display: block;
                color: #fff;
                float: left;
            }

            #lib-switch a.pulsante:hover {
                text-decoration: none
            }

            #lib-switch a.pulsante.webank {
                background: #8ab10b;
            }

            #lib-switch a.pulsante.youweb {
                background: #007c66;
            }

            body.webank h1.librerie {
                color: #8ab10b !important;
            }

            body.youweb h1.librerie {
                color: #007c66 !important;
            }

            header {
                background-color: #fff !important
            }

            #contenuti {
                width: 100%;
            }
        </style>
        <!-- CSS COMUNI WEBANK E YOUWEB-->
        <link media="screen, print" rel="stylesheet" type="text/css" href="/common/fe/css/jquery-ui_ng.min.css"/>
        <link media="screen, print" rel="stylesheet" type="text/css" href="/common/fe/css/bootstrap.css"/>
        <link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/bootstrap.height.plugin.css"/>
        <link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/ie10-viewport.css"/>
        <link media="screen" rel="stylesheet" type="text/css" href="/common/fe/css/main.css?v="/>
		<?php

		if ($site == 'youweb') {
			print '<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/youweb_generic.css?v=161229"  />';
		} else {
			print '<link href="/WB/fe/css/priv_struttura_webank_full_responsive.css?r=" rel="stylesheet" type="text/css" media="all">
		<link href="/WB/fe/css/priv_base_webank.css?r=" rel="stylesheet" type="text/css" media="all">
		<link href="/WB/fe/css/priv_generic_webank.css?r=" rel="stylesheet" type="text/css" media="all" >
		<link media="print" rel="stylesheet" type="text/css" href="/WB/fe/css/priv_print.css?a=452"  />
		<link media="screen" rel="stylesheet" type="text/css" href="/WB/fe/css/webank_skin.css?v=161229"  />';
		}

		?>
        <!--JS INCLUSI IN COMMON -->
        <script type="text/javascript" src="/common/fe/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery-ui.min.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/bootstrap.min.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.ui.touch-punch.min.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/ie10-viewport.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jsapi.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.dateIT.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.altImg.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.dataTables.formattedNum.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.form.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery.blockUI.js"></script>
        <script type="text/javascript" language="javascript" src="/common/fe/js/jquery-ui.selectToUISlider.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" language="javascript" src="/HT/fe/js/script/html5.js"></script>
        <script type="text/javascript" language="javascript" src="/HT/fe/js/script/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" language="javascript" src="/HT/fe/js/script/funzioniYW.js?v=161229"></script>
        <script type="text/javascript" language="javascript" src="/HT/fe/js/script/struttura.js"></script>

        <!--JS DI WEBANK PER SEZIONE INVESTIMENTI-->

        <script type="text/javascript" src="/common/fe/js/priv_generic.js?r=<?php echo $random ?>"></script>
        <script type="text/javascript" src="/common/fe/js/noresp_priv_generic.js?r=<?php echo $random ?>"></script>
        <script type="text/javascript" src="/common/fe/js/noresp_priv_utilities.js?r=<?php echo $random ?>"></script>
        <script type="text/javascript" src="/common/fe/js/bootstrap-table.js?r="></script>
        <script type="text/javascript">
            var cgi_script = "";

            function getPathImages() {
                return "/HT/fe/css/";
            }

            function getPathContext() {
                return "/WEBHT";
            }

            function getKBanca() {
                return "1";
            }

            function getLineaTol() {
                return "";
            }
        </script>

    </head>

    <body class="<?php print 'librerie' . ' ' . $libs; ?>">
        <!-- FUNZIONI IN PAGINA -->
        <script type="text/javascript">
            function windowdetail(filename) {
                // Raccoglie il codice come testo
                $.ajax({
                    url: "/popup_codice.php?objurl=" + filename + "&site=<?php print $site; ?>",
                    dataType: "html",
                    success: function (data) {
                        var htmlcode = data;
                        // Se c'e' un overlay tipo "OpenHelp()" raccoglie il contenuto
                        if (htmlcode.toString().indexOf("OpenHelp") > 0) {

                            var recode = $("<div>").append($(htmlcode));
                            var modalUrl = "";

                            // Estrae l'URL per raccogliere il corpo della modale
                            $.each(recode.find("a[href^='javascript:OpenHelp']").attr("href").split("'"), function (x, val) {
                                if (val.indexOf("/template/") >= 0) {
                                    modalUrl = val;
                                }
                            });
                            $.ajax({
                                url: modalUrl,
                                dataType: "html",
                                success: function (modaldata) {
                                    recode.find(".modal-body").html(modaldata);
                                    var recodeToHtml = "";
                                    $.each(recode.children(), function (i, v) {
                                        if (v.outerHTML != undefined) recodeToHtml += v.outerHTML;
                                    });
                                    forcoderwin = window.open('', 'name', 'height=500,width=700,toolbar=no,directories=no,status=no,menubar=no,scrollbars=vertical,resizable=no');
                                    forcoderwin.document.write('<html><body style="margin:0"><textarea style="width: 700px; height: 500px;" >' + recodeToHtml.replace(/</g, "&lt;").replace(/>/g, "&gt;") + '</textarea></body></html>');
                                }
                            })
                        } else {
                            forcoderwin = window.open('', 'name', 'height=500,width=700,toolbar=no,directories=no,status=no,menubar=no,scrollbars=vertical,resizable=no');
                            forcoderwin.document.write('<html><body style="margin:0"><textarea style="width: 700px; height: 500px;" >' + htmlcode.toString().replace(/</g, "&lt;").replace(/>/g, "&gt;") + '</textarea></body></html>');
                        }
                    }
                });
            }

            function ridimensionaWidth() {
                var larghezzaWindow = parseFloat($('#selectScreen').val());
                var finestraPopup = window.open('', 'name', 'height=700, width=' + larghezzaWindow + ',toolbar=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no');
                finestraPopup.document.write('<html><body>' + $('#maincontent').html() + '</body></html>');
            }

            $(document).ready(function () {
                $('#content').css('max-width', 1024)
            })
            $('#selectScreen').change(function () {
                ridimensionaWidth();
            })
        </script>
        <!-- FINE FUNZIONI IN PAGINA -->
        <div id="main">
            <header>
                <h1 class="librerie"><a href="<?php print $libsurl ?>/index.php?site=<?php print $libs ?>" class="libBtn">&lt;</a>Librerie Convergenza
                    - <?php print($tipo); ?></h1>
                <div id="lib-switch">
                    <a href="<?php print $libsurl ?>/index_catalogo_milano.php?tipo=<?php print($tipo); ?>&site=webank" class="pulsante webank">Wb</a>
                    <a href="<?php print $libsurl ?>/index_catalogo_milano.php?tipo=<?php print($tipo); ?>&site=youweb" class="pulsante youweb">Yw</a>
                </div>
            </header>
            <div class="wrapper">
                <!-- MAIN WRAPPER -->
				<?php

				if ($site == 'youweb') {
					print '<div id="mainContent"><div class="riquadro clearfix">';
				}
				?>
				<?php

				if ($site == 'webank') {
					print '<div class="container-fluid"><div class="row"><div id="contenuti" class="contenuti col-sm-12 col-md-10 resp">';
				}
				?>
				<?php
				// Elenca gli oggetti usando il nome della cartella
				$basefolder = "include/oggetti/" . $tipo . "/Milano";
				$elencocart = array();
				$dh = opendir($basefolder);
				while (($file = readdir($dh)) !== false) {
					if (($file != '.') && ($file != '..')) {
						$elencocart[] = $file;
					}
				}
				closedir($dh);

				// Elenco delle tipologie di oggetti (riassunto)
				asort($elencocart);
				foreach ($elencocart as $tipooggetto) {
					?>
                    <!-- Blocco oggetto -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 href="/index_catalogo.php?tipo=<?php print $tipooggetto; ?>" class="oggettolib"><?php print $tipooggetto; ?>
                                <span style="float:right;font-size:14px">
												<?php print "include/oggetti/" . $tipo . "/" . $tipooggetto . "/oggetto.php" ?>
												<a href="javascript:;"
                                                   onclick="javascript: windowdetail('<?php print "include/oggetti/" . $tipo . "/" . $tipooggetto . "/oggetto.php" ?>');"
                                                   style="color:#fff">(Sorgente)</a>										</span>
                            </h2>
							<?php virtual("include/oggetti/" . $tipo . "/Milano/" . $tipooggetto . "/oggetto.php");
							?>
                        </div>
                    </div>
                    <!-- Fine blocco oggetto -->
					<?php
				}
				?>
				<?php

				if ($site == 'youweb') {
					print '</div></div>';
				}
				?>
				<?php

				if ($site == 'webank') {
					print '</div></div></div>';
				}
				?>


            </div>

        </div>
    </body>
</html>
