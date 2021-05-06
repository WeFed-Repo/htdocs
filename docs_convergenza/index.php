<?php include("./core/base.php"); ?>
<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Indice</title>

		<?php include("include/struttura/head_meta.php"); ?>

        <!-- CSS -->
        <link rel="stylesheet" href="/common/fe/assets/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
        <!-- / CSS -->
 
        <!-- JS -->
        <script type="text/javascript" src="/common/fe/assets/jquery/jquery.js"></script>
        <!-- / JS -->
    </head>
    <body class="<?php print($site); ?>">
        <header class="librerie"> 
            <div class="wrapper">
                <h1>Librerie convergenza <?php print(ucwords($site)); ?><?php if($site==="webank") {?><div class="switch-pp"><a href="index.php" class="on">Privata</a><a href="index_wb_pubblica.php">Pubblica</a></div><?php } ?></h1>
				<?php include("./librerie_switch.php"); ?>
            </div>
        </header>
        <div id="main" class="librerie"> 
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <h2>Strutture</h2>
                        <ul>
                            <li><a href="./template/strutt_<?php print $site ?>.php">Pagina interna</a></li>
                            <?php if ($site == "youweb" || $site == "aletti") { ?>
                                <li><a href="./template/strutt_youweb.php?tpl=tpl_priv_dashboard.php">Home privata</a></li>
                                <li><a href="./template/strutt_<?php print $site ?>_pub.php">Pagina pubblica</a></li>
                            <?php  }?>
							<?php if ($site == "webank") { ?>
                                <li><a href="./template/strutt_<?php print $site ?>.php?tpl=tpl_priv_fp_placeholder.php">Front page</a></li>
                                <li><a href="./template/strutt_<?php print $site ?>.php?tpl=tpl_priv_full_placeholder.php">Pagina Full</a></li>
                                <li><a href="./template/strutt_webank_webview.php?tpl=tpl_priv_full_placeholder.php">Webview</a></li>
							<?php } ?>
                        </ul>
                        
                       
                        <h2>Glifi</h2>
                        <ul>
                            <li><a href="librerie_icone.php?site=<?php print $site; ?>">Icomoon</a></li>
                            <?php if($site=="youweb") {?><li><a href="librerie_porting_icone.php?site=<?php print $site; ?>">Porting icone Webank</a></li><?php } ?>
                        </ul>
                        <h2>Wiki</h2>
                        <ul>
                            <li><a href="index_wiki.php">Documentazione sulle librerie</a></li>
                        </ul>
                        <?php if ($site==="youweb") {?> 
                        <!-- QCUX -->
                        <h2>Questionario CS</h2>
                        <ul>
                            <li><a class="new" href="/template/qcux/tpl_quest_strutt.php?bank=bbpm&tpl=tpl_quest_radio.php" target="_blank">Domanda standard (radio buttons)</a></li>
                            <li><a class="new" href="/template/qcux/tpl_quest_strutt.php?bank=bbpm&tpl=tpl_quest_voto.php" target="_blank">Valutazione</a></li>
                            <li><a class="new" href="/template/qcux/tpl_quest_strutt.php?bank=bbpm&tpl=tpl_quest_textarea.php" target="_blank">Textarea</a></li>
                            <li><a class="new" href="/template/qcux/tpl_quest_strutt.php?bank=bbpm&tpl=tpl_quest_feedback.php" target="_blank">Feedback</a></li>
                            <li><a class="new" href="/template/qcux/tpl_quest_strutt.php?bank=bbpm&tpl=tpl_quest_dissuasione.php" target="_blank">Dissuasione</a></li>
                        </ul>
                        <!-- QCUX -->
                        <?php } ?>

                    </div>
                    <div class="col-sm-6 col-md-4">
                        <h2>Oggetti</h2>
                        <ul class="elenco-oggetti">
							<?php
							$folder = "include/oggetti/";
							$elencocart = array();
							$dh = opendir($folder);
							while (($file = readdir($dh)) !== false) {
								if (($file != '.') && ($file != '..')) {
									$elencocart[] = $file;
								}
							}
							closedir($dh);
							asort($elencocart);
							foreach ($elencocart as $tipooggetto) {

                                if ($tipooggetto !=="Widget home") {
                                    ?>

                                        <li>
                                            <span><?php print $tipooggetto; ?></span>
                                            <div class="links">
                                                <?php if (file_exists("include/oggetti/" . $tipooggetto . "/Milano") || file_exists("include/oggetti/" . $tipooggetto . "/commons")) { ?>
                                                    <a href="./librerie_catalogo.php?html=mi&tipo=<?php print $tipooggetto; ?>&site=<?php print $site; ?>"
                                                    class="mi">MI</a>
                                                <?php } ?>
                                                <?php if (file_exists("include/oggetti/" . $tipooggetto . "/Verona") || file_exists("include/oggetti/" . $tipooggetto . "/commons")) { ?>
                                                    <a href="./librerie_catalogo.php?html=vr&tipo=<?php print $tipooggetto; ?>&site=<?php print $site; ?>"
                                                    class="vr">VR</a>
                                                <?php } ?>
                                            </div>
                                        </li>
                                    <?php
                                }

							}
							?>
                        </ul>
                    </div>   
                    <div class="col-xs-12 col-md-4">
                        <?php include("index_template.php"); ?>
                        <?php ($site === "youweb") && include("index_template_pubblica.php"); ?>                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
