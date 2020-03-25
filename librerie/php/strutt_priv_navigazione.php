<?php
	// determina le classi da utilizzare a seconda della struttura selezionata (full,fp o normale (con spalla))
$porting = empty($_GET["porting"]) ? "" : $_GET["porting"];
?>
<!-- WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
<div class="row">
	<?php
	if ($structure == "standard") {
	?>
	<!-- SPALLA SINISTRA : MENU DI TERZO/QUARTO LIVELLO -->
	<div id="leftmenu" class="col-sm-12 col-md-2">

		<!-- Solo librerie: non includere in sviluppo -->
		<script type="text/javascript">getCodeOf(menuLev3);</script>
		<!-- Non includere in sviluppo -->

		<!-- STRUTTURA DI NAVIGAZIONE DEL MENU DI TERZO LIVELLO DA UTILIZZARE  
		<h2>Titolo della sezione</h2>
		<ul>
			<li><a href="#">Quarto livello 1</a></li>
			<li class="selected"><a href="#">Quarto livello dolor sit amet consectetur</a></li>
			<li><a href="#">Quarto livello 3</a></li>
			<li><a href="#">Quarto livello 4</a></li>
			<li><a href="#">Quarto livello 5</a></li>
		</ul>
			FINE DELLA STRUTTURA DI NAVIGAZIONE -->
		<?php if ($liv0=="4") { ?>

		<!-- Esempio carrello -->
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
	if ($structure == "full") $containerClass = "col-md-12";
	else if ($structure == "fp") $containerClass = "col-md-9";
	?>
	<!--- ############################ CONTENUTI ################################## -->
	<!--  #### ATTENZIONE alla classe da utilizzare per cambiare la larghezza a seconda del tipo di pagina -->
	<div id="contenuti" class="contenuti col-sm-12<?php echo ' ' . $containerClass; ?><?php echo ($isResponsive)? ' resp' : ' noresp' ?><?php if ($porting == "true") print " porting" ?>">
		<?php
			if ($tpl != "") virtual("/librerie/php/template/".$tpl);
		?>
	</div>
	<!-- FINE DEI CONTENUTI -->
	<?php
	if ($structure == "fp") {
	?>
	<!-- SPALLA DESTRA -->
	<div id="ctnboxdx" class="col-sm-12 col-md-3 hidden-xs">
	<?php
		if ($isResponsive == "y") { 

		// SPALLA DESTRA RESPONSIVE 
	?>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-12">
				<div class="boxdx celletta">
		            <div class="carouselPlus" data-loop="true">
					    <div class="carouselPlusPages">
					        

							<?php if ($fdeb!="true") { ?>
					        <div class="carouselPlusPage">
		            			<a href="#!"><img src="/wscmn/fe/img/Celletta_test.png"></a>
					        </div>
					        <div class="carouselPlusPage">
					            <div class="carouselPlusPageWrap">
					            	<h4>Slide 2</h4>
					            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus officia. Atque quis, eos voluptas labore, dolores placeat accusantium officia pariatur fugiat asperiores, temporibus. Aliquam.</p>
					            </div>
					        </div>
					        <div class="carouselPlusPage">
					            <div class="carouselPlusPageWrap">
					            	<h4>Slide 3</h4>
					            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus officia. Atque quis, eos voluptas labore, dolores placeat accusantium officia pariatur fugiat asperiores, temporibus. Aliquam.</p>
					            </div>
					        </div>
					        <?php } 
					        else
					        { ?>
							<div class="carouselPlusPage">
					           <a href="#!"><img src="/img/ret/ban_sicurezza_sms.jpg"></a>
					        </div>
					         <div class="carouselPlusPage">
					            <div class="carouselPlusPageWrap">
					            	<h4>Slide 2</h4>
					            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis.</p>
					            </div>
					        </div>
					        <div class="carouselPlusPage">
					            <div class="carouselPlusPageWrap">
					            	<h4>Slide 3</h4>
					            	<p>Atque quis, eos voluptas labore, dolores placeat accusantium officia pariatur fugiat asperiores, temporibus. Aliquam.</p>
					            </div>
					        </div>
					        <?php 
					    	}

					        ?>

					    </div>
					    <div class="carouselPlusNav">
					        <div class="carouselPlusBtn on"></div><!--
					        --><div class="carouselPlusBtn"></div><!--
					        --><div class="carouselPlusBtn"></div>
					    </div>
					</div>
		        </div>
				<div class="boxdx eventi">
					<a type="button" href="#!" class="btn btn-large-ico btn-primary" title="Eventi e corsi"><i class="icon icon-2x icon-calendar_circle"></i><span class="icon-text">EVENTI E CORSI</span></a>
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
					                    	<a href="#!">Titolo 1</a>
					                    </h4>
					                    <p>
					                        Lorem ipsum lorem ipsum lorem ipsum lorem ipsum
					                    </p>
					                </div>
					                <div class="notizia">
					                	<p class="note">01/02/17</p>
					                    <h4 class="link">
					                    	<a href="#!">Titolo 2  lorem ipsum lorem ipsum</a>
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
					                    	<a href="#!" class="alertTitolo">Titolo 3</a>
					                    </h4>
					                    <p>
					                        Lorem ipsum lorem ipsum lorem ipsum lorem ipsum
					                    </p>
					                </div>
					                <div class="notizia">
					                	<p class="note">01/04/17</p>
					                    <h4 class="link">
					                    	<a href="#!">Titolo 4</a>
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
					                    	<a href="#!">Titolo 5</a>
					                    </h4>
					                    <p>
					                        Lorem ipsum lorem ipsum lorem ipsum lorem ipsum
					                    </p>
					                </div>
					                 <div class="notizia">
					                	<p class="note">02/05/17</p>
					                    <h4 class="link">
					                    	<a href="#!">Titolo 6</a>
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
	<?php
		} else { 
			// SPALLA DESTRA NON RESPONSIVE
	?>
		<?php if ($liv1 == "MH") { ?>
			<!-- BOX ASSISTENTE VIRTUALE RIGHT
			<style>
			#rightAss {float:left;width:191px;clear:left;height:80px;display:block;margin:0 0 15px;padding:0;background: transparent url(/wscmn/img/ret/rightass_bg.gif) no-repeat 0 0}
			#rightAss form {text-align:center;width:175px;padding-top:20px}
			#rightAss input {display:inline-block;margin:0 auto 5px; background: #fff url(/wscmn/img/ico2inf_search.gif) no-repeat scroll right 1px; border:solid 1px #dedede;clear:both;width:140px;padding:2px 16px 2px 0}
			#rightAss a {display:inline-block;clear:both}
			</style>
			<div id="rightAss">
				<form method="post" action="javascript:;" autocomplete="off">
					<input type="text" id="rightAssInput" placeholder="Fammi una domanda..." value="">
					<a class="btnformright" href="javascript:;" title="Chiedi a Paolo, l'assistente virtuale"><img alt="" src="/img/ret/btn_left_ar.gif"><span>chiedi</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
					<a href="javascript:;"></a>
				</form>
			</div>
			<br class="clear">
			FINE BOX ASSISTENTE VIRTUALE RIGHT -->
		<?php } ?>
		<!-- INIZIO CODICE-->
		<?php
			if ($liv1 == "MH" || $liv1 == "BA" || $liv1 == "" || $liv1==RI) {
				/* Cellette*/
				virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_001.html");
				/* FINE Cellette*/
				
				/* Firma digitale (richiesta) + PEC (richiesta) */
				if ($liv1 == "MH" && $customer != "bus" && $tpl == "tpl_priv_fp_my_ria_new.php") {
					virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_20.php");
				}
				/* FINE Firma digitale (richiesta) + PEC (richiesta) */
			} // else virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_001b.html");
				
		?>
		<!-- FINE CODICE-->
		<!-- INIZIO CODICE-->
		<?php
			if($bank == 'webank') {
				virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_080.php");
			}	
		?>
			<div class="clear"></div>
		<?php
			/* News a rotazione*/
			virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_010.html");
			/* FINE News a rotazione*/
			
			
			/* PEC Box Messaggi certificati*/
			if ($liv1 == "MH" && $customer != "bus" && $tpl == "tpl_priv_fp_my_ria_new.php") {
				virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_30.php");
				virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_30b.php");
			}
			/* FINE PEC Box Messaggi certificati*/
			
			/* EVENTI bottone a sezione*/
			if ($liv1 == "RI" && $customer != "bus") {
				virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_080.php");
			}
			/* FINE EVENTI bottone a sezione*/
		?>
		<!-- FINE CODICE-->
	<?php
		}
	?>
	</div>
	<!-- FINE SPALLA DESTRA -->
<?php
	}
?>
</div>
<!-- FINE WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->