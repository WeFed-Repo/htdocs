<?php
$lnum = (isset($_GET['lnum']))? $_GET['lnum'] : 21;

if (is_numeric($lnum))
{	if ($lnum < 1)  $lnum = 1;
	elseif ($lnum > 21)  $lnum = 21;
}
?>
<div id="logoBox" class="logoLowZ" onmouseover="riseZIndexLogo(this);" onmouseout="lowerZIndexLogo(this);">
	<div class="linkdx"><a href="#"><img src="/wscmn/img/ret/str_btn_carousel_left.gif" /><span>Vai alla ricerca</span><img src="/img/ret/str_btn_carousel_right.gif" alt="vai alla ricerca"/></a></div>
	<div id="logoCarousel">
		<span class="leftarrow"><a href="javascript:;" onclick="logoCarouselScroll('left'); return false;"></a></span>
		
		<div id="logosDiv">	
			<!-- Inserisce un logo vuoto all'inizio per fare gli spostamenti -->
			<div class="tab"><div><img src="/wscmn/img/ret/str_bglogo.gif" class="logo"><img src="/wscmn/img/ret/str_bglogogrande.gif" class="logoGrande" style="display: none;"></div></div>
			
			<!-- Loghi reali - PARTE DINAMICA
				Bisogna mettere tanti div quanti loghi bisogna mostrare,
				e i path delle immagini dei div devono essere gli stessi del JSON sottostante -->
			<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-anima.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-anima.gif" class="logoGrande" style="display: none;"></div></div>
			<?php if ($lnum > 1) { ?><div class="tab"><div><img src="/wscmn/img/ret/img_or_S-schroeder.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-schroeder.gif" class="logoGrande" style="display: none;"></div></div>
				<?php if ($lnum > 2) { ?>
					<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-etica.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-etica.gif" class="logoGrande" style="display: none;"></div></div>
					<?php if ($lnum > 3) { ?>
						<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-epsilon.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-epsilon.gif" class="logoGrande" style="display: none;"></div></div>
						<?php if ($lnum > 4) { ?>
							<div class="tab"><div><img src="/wscmn/img/ret/str_bglogo2.gif" class="logo"><img src="/wscmn/img/ret/str_bglogogrande2.gif" class="logoGrande" style="display: none;"></div></div>
							<?php if ($lnum > 5) { ?>
								<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-dws.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-dws.gif" class="logoGrande" style="display: none;"></div></div>
								<?php if ($lnum > 6) { ?>
								<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-carmignac_port.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-carmignac_port.gif" class="logoGrande" style="display: none;"></div></div>
									<?php if ($lnum > 7) { ?>
										<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-carmignac_fondi.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-carmignac_fondi.gif" class="logoGrande" style="display: none;"></div></div>
										<?php if ($lnum > 8) { ?>
										<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-pictet.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-pictet.gif" class="logoGrande" style="display: none;"></div></div>
											<?php if ($lnum > 9) { ?>
												<div class="tab"><div><img src="/wscmn/img/ret/img_or_MG.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-MG.gif" class="logoGrande" style="display: none;"></div></div>
												<?php if ($lnum > 10) { ?>
													<div class="tab"><div><img src="/wscmn/img/ret/img_or_MG2.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-MG2.gif" class="logoGrande" style="display: none;"></div></div>
													<?php if ($lnum > 11) { ?>
													<div class="tab"><div><img src="/wscmn/img/ret/img_or_MG3.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-MG3.gif" class="logoGrande" style="display: none;"></div></div>
														<?php if ($lnum > 12) { ?>
														<div class="tab"><div><img src="/wscmn/img/ret/img_or_MG7.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-MG7.gif" class="logoGrande" style="display: none;"></div></div>
															<?php if ($lnum > 13) { ?>
															<div class="tab"><div><img src="/wscmn/img/ret/img_or_MG9.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-MG9.gif" class="logoGrande" style="display: none;"></div></div>
																<?php if ($lnum > 14) { ?>
																<div class="tab"><div><img src="/wscmn/img/ret/img_or_MGdynamic.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-MGdynamic.gif" class="logoGrande" style="display: none;"></div></div>
																	<?php if ($lnum > 15) { ?>
																	<div class="tab"><div><img src="/wscmn/img/ret/img_or_JB.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-JB.gif" class="logoGrande" style="display: none;"></div></div>
																		<?php if ($lnum > 16) { ?>
																		<div class="tab"><div><img src="/wscmn/img/ret/img_or_prima.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-prima.gif" class="logoGrande" style="display: none;"></div></div>
																			<?php if ($lnum > 17) { ?>
																			<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-allianz.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-allianz.gif" class="logoGrande" style="display: none;"></div></div>
																				<?php if ($lnum > 18) { ?>
																				<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-pimco.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-pimco.gif" class="logoGrande" style="display: none;"></div></div>
																					<?php if ($lnum > 19) { ?>
																					<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-fidelity.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-fidelity.gif" class="logoGrande" style="display: none;"></div></div>
																						<?php if ($lnum > 20) { ?>
																							<div class="tab"><div><img src="/wscmn/img/ret/img_or_S-morganstanley.gif" class="logo"><img src="/wscmn/img/ret/img_or_B-morganstanley.gif" class="logoGrande" style="display: none;"></div></div>
																						<?php } ?>
																					<?php } ?>
																				<?php } ?>
																			<?php } ?>
																		<?php } ?>
																	<?php } ?>
																<?php } ?>
															<?php } ?>
														<?php } ?>
													<?php } ?>
												<?php } ?>
											<?php } ?>
										<?php } ?>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						<?php } ?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
			
			<!-- FINE - PARTE DINAMICA -->
		</div>
		
		<span class="rightarrow"><a href="javascript:;" onclick="logoCarouselScroll('right'); return false;"></a></span>
	</div>
	<div id="logoText">
		<div id="logoTextBgLeft">
			<div id="logoTextBgRight">
				<div id="logoInnerText1" class="logoInnerText">
					<div class="cercaFondiTop"></div>
					<table class="cercaFondi"><tr><td><a id="cercaFondi1" href="javascript:;">sssss sss s s s s ss<br/>asdaasd asda asda</a></td></tr></table>
					<div class="cercaFondiBottom"></div>
					<div class="cercaFondiTop top2"></div>
					<table class="cercaFondi fondi2"><tr><td><a class="docLeg" href="javascript:;" onclick="obscurateAll(1); openAlert('layeralert3');">documentazione legale</a></td></tr></table>
					<div class="cercaFondiBottom2"></div>
					<div class="companyText">
						<span id="companyDescription1" class="companyDescription"><span class="CDcontent"></span>...
							<a class="toggleProfileA" href="javascript:;">read more</a>
							<a class="toggleProfileA" href="javascript:;"><img src="/img/ret/str_piu.gif"/></a></span>
						<span id="companyProfile1" class="companyProfile"><span class="CPcontent"></span></span>
						<div>
							<a class="toggleProfileB" href="javascript:;">chiudi</a>
							<a class="toggleProfileB" href="javascript:;"><img src="/img/ret/str_meno.gif"/></a></span>
						</div>
					</div>
					<p class="note"><br/><br/>
						<strong>Fonte</strong>: <a class="linkFonte" href="javascript:;">link alla fonte</a></p>
				</div>
				<div id="logoInnerText2" class="logoInnerText" style="display: none;">
					<div class="cercaFondiTop"></div>
					<table class="cercaFondi"><tr><td class="out"><a id="cercaFondi2" href="javascript:;">sssss sss s s s s ss<br/>asdaasd asda asda</a></td></tr></table>
					<div class="cercaFondiBottom"></div>
					<div class="cercaFondiTop top2"></div>
					<table class="cercaFondi fondi2"><tr><td><a class="docLeg" href="javascript:;" onclick="obscurateAll(1); openAlert('layeralert3');">documentazione legale</a></td></tr></table>
					<div class="cercaFondiBottom2"></div>
					<div class="companyText">
						<span id="companyDescription2" class="companyDescription"><span class="CDcontent"></span>...
							<a class="toggleProfileA" href="javascript:;">read more</a>
							<a class="toggleProfileA" href="javascript:;"><img src="/img/ret/str_piu.gif"/></a></span>
						<span id="companyProfile2" class="companyProfile"><span class="CPcontent"></span></span>
						<div>
							<a class="toggleProfileB" href="javascript:;">chiudi</a>
							<a class="toggleProfileB" href="javascript:;"><img src="/img/ret/str_meno.gif"/></a></span>
						</div>
					</div>
					<p class="note"><br/><br/>
						<strong>Fonte</strong>: <a class="linkFonte" href="javascript:;">link alla fonte</a></p>
				</div>
			</div>
		</div>
		<div id="logoTextBgBottom"></div>
	</div>
</div>

<div class="layeralert3" id="layeralert3" style="display: none; z-index: 2014; top: 0px; left: 0px; margin-left: 568px; margin-top: 484px;">
	<div style="cursor: move;" class="head handle" onmouseover="this.style.cursor='move'; dragHandleAlert3 = new Draggable('layeralert3', {handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="unobscurateAll(); dragHandleAlert3.destroy(); $('layeralert3').hide();"></div>
	
	<div class="body">
		<div class="tithelp">
			<div class="helpleft">Documentazione legale</div>
			<br class="clear">
		</div>
		<table id="tableDocLegale" class="form01 out">
		</table>
		<br class="clear">
	</div>
	
	<div class="foot"></div>
</div>
<script language ="javascript" type="text/javascript">
// Il JSON deve essere creato dinamicamente dalla JSP, al caricamento della pagina.
var corouselData = {
	"loghi": [
		{	"imgSmall": "/wscmn/img/ret/img_or_S-anima.gif",
			"imgBig": "/wscmn/img/ret/img_or_B-anima.gif",
			"profile": "Company profile 1 company profile 1 company profile 1 company profile 1 company profile 1",
			"descrizione": "Descrizione company 1 descrizione company 1 descrizione company 1 descrizione company 1 descrizione company 1",
			"testoBottone": "cerca tutti i fondi di<br/>company 1",
			"linkBottone": "/path/pagina/fondo",
			"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 1</a>",
			"documentazioneLegale": [
				{	"nome": "Nome documento legale 11",
					"path": "/pdf/percorso/logo_1_file_1.pdf"
				},
				{	"nome": "Nome documento legale 12",
					"path": "/pdf/percorso/logo_1_file_2.pdf"
				},
				{	"nome": "Nome documento legale 13",
					"path": "/pdf/percorso/logo_1_file_3.pdf"
				}
			]
		}
		<?php if ($lnum > 1) { ?>
			,{	"imgSmall": "/wscmn/img/ret/img_or_S-schroeder.gif",
				"imgBig": "/wscmn/img/ret/img_or_B-schroeder.gif",
				"profile": "Company profile 2 company profile 2 company profile 2 company profile 2 company profile 2",
				"descrizione": "Descrizione company 2 descrizione company 2 descrizione company 2 descrizione company 2 descrizione company 2",
				"testoBottone": "cerca tutti i fondi di<br/>company 2",
				"linkBottone": "/path/pagina/fondo",
				"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 2</a>",
				"documentazioneLegale": [
					{	"nome": "Nome documento legale 21",
						"path": "/pdf/percorso/logo_2_file_1.pdf"
					},
					{	"nome": "Nome documento legale 22",
						"path": "/pdf/percorso/logo_2_file_2.pdf"
					},
					{	"nome": "Nome documento legale 23",
						"path": "/pdf/percorso/logo_2_file_3.pdf"
					}
				]
			}
			<?php if ($lnum > 2) { ?>
				,{	"imgSmall": "/wscmn/img/ret/img_or_S-etica.gif",
					"imgBig": "/wscmn/img/ret/img_or_B-etica.gif",
					"profile": "Company profile 3 company profile 3 company profile 3 company profile 3 company profile 3",
					"descrizione": "Descrizione company 3 descrizione company 3 descrizione company 3 descrizione company 3 descrizione company 3",
					"testoBottone": "cerca tutti i fondi di<br/>company 3",
					"linkBottone": "/path/pagina/fondo",
				"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 3</a>",
					"documentazioneLegale": [
						{	"nome": "Nome documento legale 31",
							"path": "/pdf/percorso/logo_2_file_1.pdf"
						},
						{	"nome": "Nome documento legale 32",
							"path": "/pdf/percorso/logo_2_file_2.pdf"
						},
						{	"nome": "Nome documento legale 33",
							"path": "/pdf/percorso/logo_2_file_3.pdf"
						}
					]
				}
				<?php if ($lnum > 3) { ?>
					,{	"imgSmall": "/wscmn/img/ret/img_or_S-epsilon.gif",
						"imgBig": "/wscmn/img/ret/img_or_B-epsilon.gif",
						"profile": "Company profile 4 company profile 4 company profile 4 company profile 4 company profile 4",
						"descrizione": "Descrizione company 4 descrizione company 4 descrizione company 4 descrizione company 4 descrizione company 4",
						"testoBottone": "cerca tutti i fondi di<br/>company 4",
						"linkBottone": "/path/pagina/fondo",
						"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 4</a>",
						"documentazioneLegale": [
							{	"nome": "Nome documento legale 41",
								"path": "/pdf/percorso/logo_2_file_1.pdf"
							},
							{	"nome": "Nome documento legale 42",
								"path": "/pdf/percorso/logo_2_file_2.pdf"
							},
							{	"nome": "Nome documento legale 43",
								"path": "/pdf/percorso/logo_2_file_3.pdf"
							}
						]
					}
					<?php if ($lnum > 4) { ?>
						,{	"imgSmall": "/wscmn/img/ret/str_bglogo2.gif",
							"imgBig": "/wscmn/img/ret/str_bglogogrande2.gif",
							"profile": "Company profile 6 company profile 6 company profile 6 company profile 6 company profile 6",
							"descrizione": "Descrizione company 6 descrizione company 6 descrizione company 6 descrizione company 6 descrizione company 6",
							"testoBottone": "cerca tutti i fondi di<br/>company 6",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 6</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}
					
						<?php if ($lnum > 5) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_S-dws.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-dws.gif",
							"profile": "Company profile 7 company profile 6 company profile 6 company profile 6 company profile 6",
							"descrizione": "Descrizione company 6 descrizione company 6 descrizione company 6 descrizione company 6 descrizione company 6",
							"testoBottone": "cerca tutti i fondi di<br/>company 6",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 6</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}
					 	<?php if ($lnum > 6) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_S-carmignac_port.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-carmignac_port.gif",
							"profile": "Company profile 8 company profile 6 company profile 6 company profile 6 company profile 6",
							"descrizione": "Descrizione company 6 descrizione company 6 descrizione company 6 descrizione company 6 descrizione company 6",
							"testoBottone": "cerca tutti i fondi di<br/>company 6",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 6</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}
					
					 <?php if ($lnum > 7) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_S-carmignac_fondi.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-carmignac_fondi.gif",
							"profile": "Company profile 9 company profile 6 company profile 6 company profile 6 company profile 6",
							"descrizione": "Descrizione company 6 descrizione company 6 descrizione company 6 descrizione company 6 descrizione company 6",
							"testoBottone": "cerca tutti i fondi di<br/>company 6",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 6</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}
					
					<?php if ($lnum > 8) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_S-pictet.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-pictet.gif",
							"profile": "Company profile 10 company profile 6 company profile 6 company profile 6 company profile 6",
							"descrizione": "Descrizione company 10 descrizione company 6 descrizione company 6 descrizione company 6 descrizione company 6",
							"testoBottone": "cerca tutti i fondi di<br/>company 6",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 6</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}
					<?php if ($lnum > 9) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_MG.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-MG.gif",
							"profile": "Company profile 10 company profile 9 company profile 9 company profile 9 company profile 9",
							"descrizione": "Descrizione company 10 descrizione company 9 descrizione company 9 descrizione company 9 descrizione company 6",
							"testoBottone": "cerca tutti i fondi di<br/>company 9",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 9</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}
						<?php if ($lnum > 10) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_MG2.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-MG2.gif",
							"profile": "Company profile 10 company profile 10 company profile 10 company profile 10 company profile 10",
							"descrizione": "Descrizione company 10 descrizione company 10 descrizione company 10 descrizione company 10 descrizione company 6",
							"testoBottone": "cerca tutti i fondi di<br/>company 10",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 10</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}
						<?php if ($lnum > 11) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_MG3.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-MG3.gif",
							"profile": "Company profile 11 company profile 11 company profile 11 company profile 11 company profile 11",
							"descrizione": "Descrizione company 11 descrizione company 11 descrizione company 11 descrizione company 11 descrizione company 11",
							"testoBottone": "cerca tutti i fondi di<br/>company 11",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 11</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}
						<?php if ($lnum > 12) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_MG7.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-MG7.gif",
							"profile": "Company profile 11 company profile 12 company profile 12 company profile 11 company profile 12",
							"descrizione": "Descrizione company 11 descrizione company 11 descrizione company 11 descrizione company 12 descrizione company 12",
							"testoBottone": "cerca tutti i fondi di<br/>company 12",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 12</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}						
						<?php if ($lnum > 13) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_MG9.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-MG9.gif",
							"profile": "Company profile 11 company profile 13 company profile 12 company profile 11 company profile 13",
							"descrizione": "Descrizione company 11 descrizione company 11 descrizione company 11 descrizione company 13 descrizione company 13",
							"testoBottone": "cerca tutti i fondi di<br/>company 13",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 13</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}		
						<?php if ($lnum > 14) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_MGdynamic.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-MGdynamic.gif",
							"profile": "Company profile 11 company profile 14 company profile 14 company profile 11 company profile 14",
							"descrizione": "Descrizione company 11 descrizione company 14 descrizione company 14 descrizione company 14 descrizione company 14",
							"testoBottone": "cerca tutti i fondi di<br/>company 14",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 14</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}		
						<?php if ($lnum > 15) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_JB.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-JB.gif",
							"profile": "Company profile 11 company profile 15 company profile 15 company profile 11 company profile 15",
							"descrizione": "Descrizione company 11 descrizione company 15 descrizione company 15 descrizione company 15 descrizione company 15",
							"testoBottone": "cerca tutti i fondi di<br/>company 15",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 15</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}		
						<?php if ($lnum > 16) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_prima.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-prima.gif",
							"profile": "Company profile 11 company profile 15 company profile 15 company profile 11 company profile 15",
							"descrizione": "Descrizione company 11 descrizione company 15 descrizione company 15 descrizione company 15 descrizione company 15",
							"testoBottone": "cerca tutti i fondi di<br/>company 15",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 16</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}		
						<?php if ($lnum > 17) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_S-allianz.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-allianz.gif",
							"profile": "Company profile 11 company profile 17 company profile 15 company profile 11 company profile 17",
							"descrizione": "Descrizione company 11 descrizione company 15 descrizione company 17 descrizione company 17 descrizione company 17",
							"testoBottone": "cerca tutti i fondi di<br/>company 17",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 16</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}		
						
						<?php if ($lnum > 18) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_S-pimco.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-pimco.gif",
							"profile": "Company profile 11 company profile 18 company profile 18 company profile 11 company profile 18",
							"descrizione": "Descrizione company 11 descrizione company 18 descrizione company 18 descrizione company 18 descrizione company 18",
							"testoBottone": "cerca tutti i fondi di<br/>company 18",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 16</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}		
						<?php if ($lnum > 19) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_S-fidelity.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-fidelity.gif",
							"profile": "Company profile 11 company profile 18 company profile 18 company profile 11 company profile 18",
							"descrizione": "Descrizione company 11 descrizione company 18 descrizione company 18 descrizione company 18 descrizione company 18",
							"testoBottone": "cerca tutti i fondi di<br/>company 18",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 16</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}			
						<?php if ($lnum > 20) { ?>
						,{	"imgSmall": "/wscmn/img/ret/img_or_S-morganstanley.gif",
							"imgBig": "/wscmn/img/ret/img_or_B-morganstanley.gif",
							"profile": "Company profile 11 company profile 18 company profile 18 company profile 11 company profile 18",
							"descrizione": "Descrizione company 11 descrizione company 18 descrizione company 18 descrizione company 18 descrizione company 18",
							"testoBottone": "cerca tutti i fondi di<br/>company 18",
							"linkBottone": "/path/pagina/fondo",
							"linkFonte": "<a class=\"linkFonte\" href=\"javascript:;\">link alla fonte 16</a>",
							"documentazioneLegale": [
								{	"nome": "Nome documento legale 61",
									"path": "/pdf/percorso/logo_2_file_1.pdf"
								},
								{	"nome": "Nome documento legale 62",
									"path": "/pdf/percorso/logo_2_file_2.pdf"
								},
								{	"nome": "Nome documento legale 63",
									"path": "/pdf/percorso/logo_2_file_3.pdf"
								}
							]
						}														
																				<?php } ?>
																			<?php } ?>
																		<?php } ?>										
																	<?php } ?>
																<?php } ?>
															<?php } ?>
														<?php } ?>
													<?php } ?>
												<?php } ?>
											<?php } ?>
										<?php } ?>
									<?php } ?>
								<?php } ?>
							<?php } ?>
						<?php } ?>
					  <?php } ?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	]
}
</script>