<?php
$tipoOggettiPub = Array(
	
	"bottoni" => "Bottoni",
	"box" => "Box",
	"navigazione" => "Navigazione",
	"promo" => "Promo",
	"tabelle" => "Tabelle",
	"testi" => "Titoli e testi",
	"widget" => "Widget"
);


?>
<div id="main" class="librerie">
	<div class="wrapper">
			<div class="row">
				<!-- STRUTTURE -->
				<div class="col-sm-6 col-md-4">
					<!-- STRUTTURE -->
					<h2 class="color borderlightcolor">Strutture</h2>
					<ul>
						<li><a href="/template/strutt_wbresp.php?tpl=wbresp_home.php">Home</a></li>
						<li><a href="/template/strutt_wbresp.php?tpl=wbresp_placeholder.php">Pagina interna 3 colonne</a></li>
						<li><a href="/template/strutt_wbresp.php?tpl=wbresp_big_placeholder.php">Pagina interna 2 colonne</a></li>
						<li><a href="/template/strutt_wbresp.php?tpl=wbresp_full_placeholder.php">Pagina interna 100%</a></li>
					</ul>
					<!-- FINE STRUTTURE -->
				</div>

				<!-- OGGETTI -->
				<div class="col-sm-6 col-md-4">
					<h2 class="color borderlightcolor">Oggetti</h2>
					<ul>
						<?php
						// Elenco delle tipologie di oggetti (riassunto)
						asort($tipoOggettiPub);
						foreach ($tipoOggettiPub as $key => $oggetto) {
					    ?>
						<li><a href="/librerie_catalogo_pubblica.php?type=<?php print $key; ?>&amp;responsive=y"><?php print $oggetto; ?></a></li>
						<?php
						}
						?>
					</ul>
				</div>

				<!-- PAGINE -->
				<div class="col-sm-12 col-md-4">
					<script type="text/javascript">
						$(function(){
							$(".full-opener").click(function(){
								$($(this).parents('.template-title').attr("data-target")).toggle();
								$(this).toggleClass("opened");
							});
						})
					</script>
					<div id="pubblica">
						<!-- template divisi tra statici e CMS-->
						<h2 class="template-title" data-target="#template_statici">Template statici <a class="full-opener opened" href="javascript:;"><span class="plus">+</span><span class="min">&ndash;</span></a></h2>
						<div id="template_statici">
							<?php
							include("librerie_wb_pubblica.php"); 
							?>
						</div>
						<h2 class="template-title"  data-target="#template_cms">CMS<a class="full-opener" href="javascript:;"><span class="plus">+</span><span class="min">&ndash;</span></a></h2>
							<div id="template_cms"  style="display:none">
							<?php
							include("librerie_wb_pubblica_cms.php"); 
							?>
							</div>
						</div>
					
					
			</div>
		
	</div>
</div>