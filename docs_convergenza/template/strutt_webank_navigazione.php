<?php
// determina le classi da utilizzare a seconda della struttura selezionata (full,fp o normale (con spalla))
$porting = empty($_GET["porting"])
	? ""
	: $_GET["porting"];
?>
<!-- WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
<div class="row">
	<?php
	if ($structure == "standard") {
		?>
        <!-- SPALLA SINISTRA : MENU DI TERZO/QUARTO LIVELLO -->
        <div id="leftmenu" class="col-sm-12 col-md-2">

            <!-- MENU STATICO QUARTO LIVELLO  -->
            <?php
                include("../include/struttura_webank/nav_spalla.php");
            ?>
            
            <!-- FINE MENU STATICO QUARTO LIVELLO  -->
			<?php if ($liv1 === "investimenti") { ?>

                <!-- Esempio carrello -->
                <script type="text/javascript" src="/WB/fe/js/carrello_investimenti.js"></script>
                <div id="faseStart" class="boxWidgetCont">
                    <div class="boxWidget">
                        <div class="carrelloType">Lorem ipsum</div>
                        <div class="carrelloNum">0</div>
                        <div class="cta">
                            <a href="#" class="btncta">
                                <span>vai al carrello</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Fine esempio carrello -->
			<?php } ?>

        </div>
        <!-- FINE DELLA SPALLA SINISTRA-->
		<?php
	}

	$containerClass = "col-md-10";
	if ($structure == "full") {
		$containerClass = "col-md-12";
	} else {
		if ($structure == "fp") {
			$containerClass = "col-md-9";
		}
	}
	?>
    <!--- ############################ CONTENUTI ################################## -->
    <!--  #### ATTENZIONE alla classe da utilizzare per cambiare la larghezza a seconda del tipo di pagina -->
    <div id="contenuti" class="contenuti col-sm-12<?php
	echo ' ' . $containerClass;
	echo ($isResponsive)
		? ' resp'
		: ' noresp' ?><?php if ($porting == "true")
		print " porting" ?>">
		<?php
		if ($tpl != "") {
			virtual("/template/" . $tpl);
		}
		?>
    </div>
    <!-- FINE DEI CONTENUTI -->
	<?php
	if ($structure == "fp") {
	?>
    <!-- SPALLA DESTRA -->
    <div id="ctnboxdx" class="col-sm-12 col-md-3 hidden-xs">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-12">

				<?php virtual("/include/oggetti/Widget/commons/widget_ban/oggetto.php"); ?>

                <div class="boxdx eventi">
                    <a type="button" href="javascript:" class="btn btn-large-ico btn-primary" title="Eventi e corsi"><i
                                class="icon icon-2x icon-calendar_circle"></i><span class="icon-text">EVENTI E CORSI</span></a>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
                <!-- BOX COMUNICAZIONI-->
                <div class="boxdx news">
                    <h4>Comunicazioni</h4>

                    <div id="carouselPlusNews" class="carouselPlus" data-vertical="true" data-loop="true" data-interval="5000">
                        <div class="carouselPlusPages">
                            <div class="carouselPlusPage">
                                <div class="carouselPlusPageWrap">
                                    <div class="notizia">
                                        <p class="note">01/01/17</p>
                                        <h4 class="link">
                                            <a href="javascript:">Titolo 1</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                        </p>
                                    </div>
                                    <div class="notizia">
                                        <p class="note">01/02/17</p>
                                        <h4 class="link">
                                            <a href="javascript:">Titolo 2 lorem ipsum lorem ipsum</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carouselPlusPage">
                                <div class="carouselPlusPageWrap">
                                    <div class="notizia">
                                        <p class="note">01/03/17</p>
                                        <h4 class="link">
                                            <a href="javascript:" class="alertTitolo">Titolo 3</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                        </p>
                                    </div>
                                    <div class="notizia">
                                        <p class="note">01/04/17</p>
                                        <h4 class="link">
                                            <a href="javascript:">Titolo 4</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carouselPlusPage">
                                <div class="carouselPlusPageWrap">
                                    <div class="notizia">
                                        <p class="note">01/05/17</p>
                                        <h4 class="link">
                                            <a href="javascript:">Titolo 5</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                        </p>
                                    </div>
                                    <div class="notizia">
                                        <p class="note">02/05/17</p>
                                        <h4 class="link">
                                            <a href="javascript:">Titolo 6</a>
                                        </h4>
                                        <p>
                                            Lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="vaia" href="#">vedi tutte le news</a>
                </div>
                <!-- / BOX COMUNICAZIONI-->
            </div>
			<?php
			if ($tpl == "tpl_priv_fp_trading.php" && $dep != "y") {
			?>
            <div class="col-xs-12 col-sm-6 col-md-12">

                <!--<div id="boxinfoTrPlus">
					<div class="tit"></div>
					<div class="carouselPlus" data-loop="true" data-vertical="true">
						<div id="newsTrPlus">
						</div>
					</div>
					<span class="pagerSlider"></span>
					<div class="clear"></div>
				</div>
				-->
                <div id="boxinfoTrPlus">
                    <div class="tit"></div>
                    <div id="carouselPlusinfoTr">
                        <div class="carouselPlusPages">
                            <div class="carouselPlusPage">
                                <div class="carouselPlusPageWrap">
                                    <div class="text">
                                        lorem
                                    </div>
                                    <div class="text">
                                        dsad 2
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <script type="text/javascript">
                        initNewsTrFPCarouselPlus()
                    </script>
                </div>
				<?php } ?>
            </div>

        </div>
        <!-- FINE SPALLA DESTRA -->
		<?php
		}
		?>
    </div>
    <!-- FINE WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->