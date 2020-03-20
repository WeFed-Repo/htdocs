<div id="librerie">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<!-- STRUTTURE -->
				<div class="col-sm-6 col-md-3">
					<!-- STRUTTURE -->
					<h2 class="color borderlightcolor">Strutture</h2>
					<ul>
						<li><a href="/connect.php?page=strutt_wbresp.php&amp;tpl=wbresp_home.php">Home</a></li>
						<li><a href="/connect.php?page=strutt_wbresp.php&amp;tpl=wbresp_placeholder.php">Pagina interna 3 colonne</a></li>
						<li><a href="/connect.php?page=strutt_wbresp.php&amp;tpl=wbresp_big_placeholder.php">Pagina interna 2 colonne</a></li>
						<li><a href="/connect.php?page=strutt_wbresp.php&amp;tpl=wbresp_full_placeholder.php">Pagina interna 100%</a></li>
					</ul>
					<!-- FINE STRUTTURE -->
				</div>

				<!-- OGGETTI -->
				<div class="col-sm-6 col-md-3">
					<h2 class="color borderlightcolor">Oggetti</h2>
					<ul>
						<?php
						// Elenco delle tipologie di oggetti (riassunto)
						asort($tipoOggetti);
						foreach ($tipoOggetti as $key => $oggetto) {
					    ?>
						<li><a href="/connect.php?page=librerie.php&amp;pag=catalogo_pubblica&amp;customer=ret&amp;type=<?php print $key; ?>&amp;responsive=y"><?php print $oggetto; ?></a></li>
						<?php
						}
						?>
					</ul>
				</div>

				<!-- PAGINE -->
				<div class="col-sm-12 col-md-6">
					
					<!-- FINE PAGINE NON ALBERATE -->
					<?php
					if ($bank == "webank") {?>
					
					<h2 class="color borderlightcolor">Template</h2>
					<script type="text/javascript">
						$(function(){
							$(".aprichiudi").click(function(){
								$(this).closest('h2').nextAll('div').eq(0).toggle();
								$(this).toggleClass("opened");
							});
						})
					</script>
					<style>
						#pubblica {border:dashed 1px #ccc; width:100%; float:left; padding: 10px 10px 0 10px; border-top:none;border-radius: 0 0 10px 10px;}
						.aprichiudi,.aprichiudi:focus {float:right;  height: 25px;width: 25px;cursor: pointer;border-radius: 50%;margin: 5px 0;line-height: 27px;  padding: 0;text-align: center;text-decoration:none!important;}
						.aprichiudi.opened {opacity:0.5;}
						.aprichiudi i {color:#fff;}
						.aprichiudi i.icon-arrow_right,.aprichiudi.opened i.icon-arrow_down {display:block;}
						.aprichiudi.opened i.icon-arrow_right, .aprichiudi i.icon-arrow_down {display:none;}
						.borderlightcolor.small{font-size:15px!important;border-bottom-width:1px!important;margin-bottom:10px!important}
					</style>
					<div id="pubblica">
						<!-- template divisi tra statici e CMS-->
						<h2 class="color borderlightcolor small">Statici<a class="aprichiudi bgcolor opened" href="javascript:;"><i class="icon icon-arrow_down icon-1x"></i><i class="icon icon-arrow_right icon-1x"></i></a></h2>
						<div id="template_statici">
							<?php
							include("librerie_wb_pubblica.php"); 
							?>
						</div>
						<h2 class="color borderlightcolor small">CMS<a class="aprichiudi bgcolor" href="javascript:;"><i class="icon icon-arrow_down icon-1x"></i><i class="icon icon-arrow_right icon-1x"></i></a></h2>
							<div id="template_cms"  style="display:none">
							<?php
							include("librerie_wb_pubblica_cms.php"); 
							?>
							</div>
						</div>
						<?php
						}
						?>
				</div>
			</div>
		</div>
	</div>
</div>
