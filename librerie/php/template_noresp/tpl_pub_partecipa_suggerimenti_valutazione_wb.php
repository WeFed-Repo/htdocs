<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<!--- OGGETTO OVERLAYER -->
<?php
	$overlayertipo = "piaceanche";
	virtual('/librerie/include/commons/boxeditoriali/pub_wb_int_box_006.php');
?>
<!--/OGGETTO OVERLAYER -->
<div id="maincontent">
	<div class="maincontenttopper"></div>
	<!-- titolo -->
		<?php virtual("/librerie/include/commons/titoli/pub_wb_int_tit_003.php"); ?>
		
		<!--fine  titolo -->
		
		<div class="upperbox valutazione">
			
			<p>
				In questa sezione sono riportati i contributi in fase di valutazione.<br>
				Torna spesso su questa pagina per verificare l'avanzamento lavori relativo alla tua proposta.	
			</p>
			<div class="filetto"></div>
		</div>	
		<!-- BOX ESPANDIBILE -->
		<div class="expandableitem">
			<h3 class="expandableitemtitle">Nome idea 1 lorem ipsum lorem ipsum</h3>
			<span>Suggerito da: Alex, Mario</span>
			<!-- commento di webank -->
			<span class="commevid">
				<span class="commwb">Webank risponde - 26/02/2010</span>
				<p>
					dolore eu feugiat nulla facilisis at vero eros et 
					accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue 
					duis dolore te feugait
				</p>
			</span>
			<!-- fine commento di webank -->
			<div class="expandableitembody" style="display:none;">
				<span><strong>Alex</strong> - 20 Marzo 2009</span>
				<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lortis 
				nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure ad minim ve 
				quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commo 
				consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse 
				molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et 
				accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue 
				duis dolore te feugait nulla facilisi.
				</p>
				<br />
				<span><strong>Mario Rossi</strong> - 20 Marzo 2009</span>
				<p>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.<br>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. 
				</p>
			</div>
			<div class="expandablecommand">
				<a href="javascript:;" onclick="expandaccordion(this);">Espandi</a>
			<!-- votazione + piace anche a... -->
				<a href="javascript:;" title="" class="clspiace2" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);" rel="nofollow" >
					<span class="tooltip">
						<span class="toollarge">
							<strong>Piace a:</strong><br />
							<p class="colonna">Giovanni,<br />Antonio,<br />mmmmmmmmmmmm,<br />Giovanni,<br /> Antonio,<br />Giovanni<br />Antonio<br />Banana39<br />Giovanni,<br /> Antonio,<br/>Giovanni<br />Antonio</p>
							<p class="colonna">Banana39, <br />Giovanni,<br>mmmmmmmmmmmm, <br>Banana39<br />Banana39, <br />Giovanni,<br>Antonio, <br>Banana39<br />Banana39<br />Giovanni,<br />Antonio,</p>
							<br class="clear">... e piance anche ad altri <strong>33</strong> utenti
						</span>
					</span><img src="/img/ico2or_gradimento_notop.gif" class="icostato" alt="gradimento 3"></a>
				<a href="javascript:;" onclick="openPopOverLayer ('<?php print $overlayertipo;?>');" title="" class="clspiace" rel="nofollow"><span>mi piace</span></a>
				<!-- fine votazione + piace anche a... -->	
			</div>
		</div>
		<!-- FINE BOX ESPANDIBILE -->
		
		<!-- BOX ESPANDIBILE -->
		<div class="expandableitem">
			<h3 class="expandableitemtitle">Nome idea 2 <br />lorem ipsum lorem ipsum</h3>
			<span>Suggerito da: Alex</span>
			<!-- commento di webank -->
			<span class="commevid">
				<span class="commwb">Webank risponde - 26/02/2010</span>
				<p>
					dolore eu feugiat nulla facilisis at vero eros et 
					accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue 
					duis dolore te feugait
				</p>
			</span>
			<!-- fine commento di webank -->
			<div class="expandableitembody" style="display:none;">
				<span><strong>Alex</strong> - 20 Marzo 2009</span>
				<p>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.<br>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. 
				</p>
			</div>
			<div class="expandablecommand">
				<a href="javascript:;" onclick="expandaccordion(this);">Espandi</a>
				<!-- votazione + piace anche a... -->
				<a href="javascript:;" title="" class="clspiace2" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);" rel="nofollow" >
					<span class="tooltip">
						<span class="toollarge">
							<strong>Piace a:</strong><br />
							<p class="colonna">Giovanni,<br />Antonio,<br />mmmmmmmmmmmm,<br />Giovanni,<br /> Antonio,<br />Giovanni<br />Antonio<br />Banana39<br />Giovanni,<br /> Antonio,<br/>Giovanni<br />Antonio</p>
							<p class="colonna">Banana39, <br />Giovanni,<br>mmmmmmmmmmmm, <br>Banana39<br />Banana39, <br />Giovanni,<br>Antonio, <br>Banana39<br />Banana39<br />Giovanni,<br />Antonio,</p>
							<br class="clear">... e piance anche ad altri <strong>33</strong> utenti
						</span>
					</span><img src="/img/ico2or_gradimento_notop.gif" class="icostato" alt="gradimento 3"></a>
				<a href="javascript:;" onclick="openPopOverLayer ('<?php print $overlayertipo;?>');" title="" class="clspiace" rel="nofollow"><span>mi piace</span></a>
				<!-- fine votazione + piace anche a... -->
			</div>
		</div>
		<!-- FINE BOX ESPANDIBILE -->
		
		<!-- BOX ESPANDIBILE -->
		<div class="expandableitem">
			<h3 class="expandableitemtitle">Nome idea 3 <br />lorem ipsum lorem ipsum</h3>
			<span>Suggerito da: Alex</span>
			<!-- commento di webank -->
			<span class="commevid">
				<span class="commwb">Webank risponde - 26/02/2010</span>
				<p>
					dolore eu feugiat nulla facilisis at vero eros et 
					accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue 
					duis dolore te feugait
				</p>
			</span>
			<!-- fine commento di webank -->
			<div class="expandableitembody" style="display:none;">
				<span><strong>Alex</strong> - 20 Marzo 2009 - 15:13:00</span>
				<p>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.<br>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. 
				</p>
			</div>
			
			<div class="expandablecommand">
				<a href="javascript:;" onclick="expandaccordion(this);">Espandi</a>
				<!-- votazione + piace anche a... -->
				<a href="javascript:;" title="" class="clspiace2" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);" rel="nofollow" >
					<span class="tooltip">
						<span class="toollarge">
							<strong>Piace a:</strong><br />
							<p class="colonna">Giovanni,<br />Antonio,<br />mmmmmmmmmmmm,<br />Giovanni,<br /> Antonio,<br />Giovanni<br />Antonio<br />Banana39<br />Giovanni,<br /> Antonio,<br/>Giovanni<br />Antonio</p>
							<p class="colonna">Banana39, <br />Giovanni,<br>mmmmmmmmmmmm, <br>Banana39<br />Banana39, <br />Giovanni,<br>Antonio, <br>Banana39<br />Banana39<br />Giovanni,<br />Antonio,</p>
							<br class="clear">... e piance anche ad altri <strong>33</strong> utenti
						</span>
					</span><img src="/img/ico2or_gradimento_notop.gif" class="icostato" alt="gradimento 3"></a>
				<a href="javascript:;" onclick="openPopOverLayer ('<?php print $overlayertipo;?>');" title="" class="clspiace" rel="nofollow"><span>mi piace</span></a>
				<!-- fine votazione + piace anche a... -->
			</div>
		</div>
		<!-- FINE BOX ESPANDIBILE -->
		
		<!-- BOX ESPANDIBILE -->
		<div class="expandableitem">
			<h3 class="expandableitemtitle">Nome idea 4 <br />lorem ipsum lorem ipsum</h3>
			<span>Suggerito da: Alex</span>
			<!-- commento di webank -->
			<span class="commevid">
				<span class="commwb">Webank risponde - 26/02/2010</span>
				<p>
					dolore eu feugiat nulla facilisis at vero eros et 
					accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue 
					duis dolore te feugait
				</p>
			</span>
			<!-- fine commento di webank -->
			<div class="expandableitembody" style="display:none;">
				<span><strong>Alex</strong> - 20 Marzo 2009 - 15:13:00</span>
				<p>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.<br>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. 
				</p>
			</div>
			<div class="expandablecommand">
				<a href="javascript:;" onclick="expandaccordion(this);">Espandi</a>
			<!-- votazione + piace anche a... -->
				<a href="javascript:;" title="" class="clspiace2" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);" rel="nofollow" >
					<span class="tooltip">
						<span class="toollarge">
							<strong>Piace a:</strong><br />
							<p class="colonna">Giovanni,<br />Antonio,<br />mmmmmmmmmmmm,<br />Giovanni,<br /> Antonio,<br />Giovanni<br />Antonio<br />Banana39<br />Giovanni,<br /> Antonio,<br/>Giovanni<br />Antonio</p>
							<p class="colonna">Banana39, <br />Giovanni,<br>mmmmmmmmmmmm, <br>Banana39<br />Banana39, <br />Giovanni,<br>Antonio, <br>Banana39<br />Banana39<br />Giovanni,<br />Antonio,</p>
							<br class="clear">... e piance anche ad altri <strong>33</strong> utenti
						</span>
					</span><img src="/img/ico2or_gradimento_notop.gif" class="icostato" alt="gradimento 3"></a>
				<a href="javascript:;" onclick="openPopOverLayer ('<?php print $overlayertipo;?>');" title="" class="clspiace" rel="nofollow"><span>mi piace</span></a>
				<!-- fine votazione + piace anche a... -->
			</div>
		</div>
		<!-- FINE BOX ESPANDIBILE -->
		<!-- BOX ESPANDIBILE -->
		<div class="expandableitem">
			<h3 class="expandableitemtitle">Nome idea 5 lorem ipsum lorem ipsum</h3>
			<span>Suggerito da: Alex</span>
			<!-- commento di webank -->
			<span class="commevid">
				<strong class="commwb">Webank risponde - 26/02/2010</strong>
				<p>
					dolore eu feugiat nulla facilisis at vero eros et 
					accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue 
					duis dolore te feugait
				</p>
			</span>
			<!-- fine commento di webank -->
			<div class="expandableitembody" style="display:none;">
				<span><strong>Alex</strong> - 20 Marzo 2009 - 15:13:00</span>
				<p>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.<br>
					Lorem ipsum dolor sit amet consectetur adipiscing elit. 
				</p>
			</div>
			<div class="expandablecommand">
				<a href="javascript:;" onclick="expandaccordion(this);">Espandi</a>
			<!-- votazione + piace anche a... -->
				<a href="javascript:;" title="" class="clspiace2" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);" rel="nofollow" >
					<span class="tooltip">
						<span class="toollarge">
							<strong>Piace a:</strong><br />
							<p class="colonna">Giovanni,<br />Antonio,<br />mmmmmmmmmmmm,<br />Giovanni,<br /> Antonio,<br />Giovanni<br />Antonio<br />Banana39<br />Giovanni,<br /> Antonio,<br/>Giovanni<br />Antonio</p>
							<p class="colonna">Banana39, <br />Giovanni,<br>mmmmmmmmmmmm, <br>Banana39<br />Banana39, <br />Giovanni,<br>Antonio, <br>Banana39<br />Banana39<br />Giovanni,<br />Antonio,</p>
							<br class="clear">... e piance anche ad altri <strong>33</strong> utenti
						</span>
					</span><img src="/img/ico2or_gradimento_notop.gif" class="icostato" alt="gradimento 3"></a>
				<a href="javascript:;" onclick="openPopOverLayer ('<?php print $overlayertipo;?>');" title="" class="clspiace" rel="nofollow"><span>mi piace</span></a>
				<!-- fine votazione + piace anche a... -->
			</div>
		</div>
		<!-- FINE BOX ESPANDIBILE -->
		
	
	<!-- titolo -->
		<?php virtual("/librerie/include/commons/navigazione/pub_wb_con_nav_015.php"); ?>
	<!--fine  titolo -->
	
	</div>
<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
