<?php include("./core/base.php"); ?>
<?php
/* Parametri specifici librerie */
$tipo = $_GET["tipo"];
if ($site == "aletti") $decl = "aletti";

/* Parametri generati per la pagina */
?>
<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        virtual("/include/struttura/head_meta.php");
        virtual("/include/struttura/head_css.php");
        virtual("/include/struttura/head_js.php");
        ?>

        <!-- ASSET LIBRERIE -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- / ASSET LIBRERIE -->
        
        <!-- JS LIBRERIE (non includere in sviluppo) -->
        <script src="/js/priv_librerie.js"></script>
        <!-- / JS LIBRERIE -->


        <!-- Funzioni per librerie -->
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
            });
        </script>
        <!-- Fine funzioni per librerie -->

    </head>
    <body class="<?php print($site); ?> catalogo-oggetti">
        <header class="librerie">
            <div class="wrapper">
                <h1><a class="back" href="./index.php?site=<?php print $site; ?>">&lsaquo;</a><?php print $tipo; ?> - <?php print(ucwords($site)); ?>
                </h1>
				<?php if ((file_exists("include/oggetti/" . $tipo . "/Milano") && file_exists("include/oggetti/" . $tipo . "/Verona")) || file_exists("include/oggetti/" . $tipo . "/commons")) { ?>
                    <div class="code-console"><span>HTML</span>
                        <div class="console"><a class="<?php print (($html == "mi")
								? "on"
								: ""); ?>" href="/librerie_catalogo.php?html=mi&tipo=<?php print $tipo; ?>&site=<?php print $site; ?>">MI</a> <a
                                    class="vr <?php print (($html == "vr")
										? "on"
										: ""); ?>" href="/librerie_catalogo.php?html=vr&tipo=<?php print $tipo; ?>&site=<?php print $site; ?>">VR</a>
                        </div>
                    </div>
				<?php } ?>
				<?php include("./librerie_switch.php"); ?>
            </div>
        </header>


        <!-- CONTENITORE DIVERSO A SECONDA DEL CONTESTO -->
        <div id="main">
            <div class="wrapper">
                <!-- MAIN WRAPPER -->
				<?php

				if ($site == 'youweb') {
					print '<div id="mainContent"><div class="riquadro clearfix">';
				}
				?>
				<?php

				if ($site == 'webank') {
					print '<div class="container-fluid"><div class="row"><div id="contenuti" class="contenuti col-xs-12 resp">';
				}
				?>
				<?php

				// Blocco oggetti "convergenti": stesso HTML su entrambi i siti, sviluppato ex-novo appositamente
				$basefolder = "include/oggetti/" . $tipo . "/commons";
				if (file_exists($basefolder)) {
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
                                <h2 href="/index_catalogo.php?tipo=<?php print $tipooggetto; ?>" class="oggettolib convergenza">
                                    Convergenza: <?php print $tipooggetto; ?>
                                    <span style="float:right;font-size:14px">
                                                   <?php print "include/oggetti/" . $tipo . "/" . $tipooggetto . "/oggetto.php" ?>
										           <a href="javascript:;"
                                                       onclick="javascript: windowdetail('<?php print $basefolder . "/" . $tipooggetto . "/oggetto.php" ?>');"
                                                       style="color:#fff">(Sorgente)</a></span>
                                </h2>
                                <?php if ($site=="youweb" && $tipo=="Widget") { ?> <div id="spalla"> <?php } ?>
								<?php virtual($basefolder . "/" . $tipooggetto . "/oggetto.php");?>
                                <?php if ($site=="youweb" && $tipo=="Widget") { ?> </div> <?php } ?>
								
                            </div>
                        </div>
                        <!-- Fine blocco oggetto -->
						<?php
					}
				}

				// Elenca gli oggetti usando il nome della cartella
				$basefolder = "include/oggetti/" . $tipo . "/" . (($html == "mi")
						? "Milano"
						: "Verona");
				if (file_exists($basefolder)) {
					/* Inserisce un eventuale separatore */

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
                                                       onclick="javascript: windowdetail('<?php print $basefolder . "/" . $tipooggetto . "/oggetto.php" ?>');"
                                                       style="color:#fff">(Sorgente)</a>										</span>
                                </h2>
                                <?php if ($site=="youweb" && $tipo=="Widget") { ?> <div id="spalla"> <?php } ?>
								<?php virtual($basefolder . "/" . $tipooggetto . "/oggetto.php");?>
                                <?php if ($site=="youweb" && $tipo=="Widget") { ?> </div> <?php } ?>
                            </div>
                        </div>
                        <!-- Fine blocco oggetto -->
						<?php
					}
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
        </div>
        <!-- FINE CONTENITORE <-->

    </body>
</html>