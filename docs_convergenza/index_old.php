<?php

    $site = $_GET["site"];
    $libs = 'webank';
    $libsurl = '';
    $colorLink = "#8ab10b";
    if ($site == 'youweb') {
		$libs ="youweb";
		$colorLink = "#122e5c";
	}
	else
	{
		$site == "webank";
		$libs ="webank";
		$colorLink = "#8ab10b";
	}
	
?>

 <!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- CSS -->
		<link rel="stylesheet" href="/librerie/css/bootstrap.css">
		<link rel="stylesheet" href="/css/librerie.css"> 
		
		<!-- / CSS -->

		<script type="text/javascript" src="/common/fe/js/jquery.js"></script>
		<script type="text/javascript" src="/common/fe/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/common/fe/js/priv_generic.js"></script>
		<script type="text/javascript" src="/common/fe/js/noresp_priv_generic.js"></script>
		<script type="text/javascript" src="/common/fe/js/noresp_priv_utilities.js"></script>
		<script type="text/javascript">

		$(function(){
			
			$("#msswitch a").click(function(){
				if(!$("#msswitch .status").hasClass("on")) {
					$(this).hide();
					$("#mspwd").show();
				}
				else
				{
					$("#pwdtest").val("");
					$("#mspwd .btn").trigger("click");
				}
			});


			pwdtestCb = function(data) {
				totcheck += 1;
				if (totcheck == 2) {
					$("#mspwd").removeClass("waiting");
					location.href="";
				};
			}


			$("#mspwd .btn").click(function(){
				if (!$("#mspwd").hasClass("waiting")) {

				$("#mspwd").addClass("waiting");

				totcheck = 0;

				$.ajax({

					url: "http://libreriewebank.<?php print $hostArr[1];?>.local/librerie/opt/libsvil.php",
					data: {
						"pwdtest" : $("#pwdtest").val()
					},
					crossdomain: true,
					dataType: "jsonp"
				});

				$.ajax({

					url: "http://youweb.<?php print $hostArr[1];?>.local/librerie/opt/libsvil.php",
					data: {
						"pwdtest" : $("#pwdtest").val()
					},
					crossdomain: true,
					dataType: "jsonp"
				});

				}

			})

		});

		cgi_script = "";

		</script>

	</head>
	<body class="<?php print $site; ?>">
		<div id="main" >
			<header class="librerie">
				<h1>Librerie Covergenza <?php print ucwords($libs); ?></h1>
				<div id="lib-switch">
					<div id="modsviluppo">
						<div id="mspwd" style="display:none;">
							<input id="pwdtest" type="password" placeholder="password">
							<a class="btn">Attiva</a>
						</div>
						<div id="msswitch">
							<a class="btn">Modo sviluppo <span class="status <?php if($_SESSION["libsvil"] == true) print("on"); ?>"></span></a>
						</div>
					</div>
					<a href="<?php print $libsurl?>./index.php?site=webank" class="pulsante webank">Wb</a>
					<a href="<?php print $libsurl?>./index.php?site=youweb" class="pulsante youweb">Yw</a>
				</div>
			</header>
			<div id="maincontent">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-4"><h2>Struttura</h2>
							<ul class="librerie">
								<li><a href="<?php print $libsurl?>/template/strutt_<?php print $libs?>.php">Pagina interna</a></li>
								<?php if ($libs =="webank") {
									?>
								<li><a href="<?php print $libsurl?>/template/strutt_<?php print $libs?>.php?tpl=tpl_priv_fp_placeholder.php">Front page</a></li>
								<li><a href="<?php print $libsurl?>/template/strutt_<?php print $libs?>.php?tpl=tpl_priv_full_placeholder.php">Pagina Full</a></li>
								<li><a href="/template/strutt_webview.php?tpl=tpl_priv_full_placeholder.php">Webview</a></li>
									<?php
								}
								?>
							</ul>
						</div>
						<div class="col-sm-4">
							<h2>Oggetti</h2>
							<table style="width:100%;">
							<tr>
								<th style="text-align: left;padding: 5px;">Tipologia</th>
								<th style="padding: 5px;"><span -htmlid = "tooltipSez1" data-toggle="tooltip"   style="cursor:pointer;border-bottom:1px dotted #000">Milano</span>
									<?php 
										if ($site == "webank") 
										
										{
										    print '<div id="tooltipSez1" class="htmlTooltip">
											<p style=\'margin:0\'>SEZIONI:</p>
												<ul>
													<li style=\'border-bottom:0\'>Trading</li>
													<li style=\'border-bottom:0\'>Investimenti</li>
													<li style=\'border-bottom:0\'>Finanziamenti</li>
													<li style=\'border-bottom:0\'>Assicurazioni</li>
													<li style=\'border-bottom:0\'>Assistente virtuale</li>
												</ul>
											</div>';
										}
										



										else
										{
										    print '<div id="tooltipSez1" class="htmlTooltip">
												<p style=\'margin:0\'>SEZIONI:</p>
												<ul>
													<li style=\'border-bottom:0\'>Investimenti</li>
													<li style=\'border-bottom:0\'>Servizi?</li>
												</ul>
												</div>';
										}

										?>
								</th>
								
								<th style="padding: 5px;"><span  -htmlid = "tooltipSez2" data-toggle="tooltip"  style="cursor:pointer;border-bottom:1px dotted #000">Verona</span>
									<?php 
										if ($site == "webank") 
										{
										    print '<div id="tooltipSez2" class="htmlTooltip">
											<p style=\'margin:0\'>SEZIONI:</p>
												<ul>
													<li style=\'border-bottom:0\'>My home</li>
													<li style=\'border-bottom:0\'>Sportello</li>
													<li style=\'border-bottom:0\'>Carte</li>
													<li style=\'border-bottom:0\'>Assistente virtuale</li>
												</ul>
											</div>';
										}
										else
										{
										    print '<div id="tooltipSez2" class="htmlTooltip">
												<p style=\'margin:0\'>SEZIONI:</p>
												<ul>
													<li style=\'border-bottom:0\'>Conti</li>
													<li style=\'border-bottom:0\'>Pagamenti</li>
													<li style=\'border-bottom:0\'>Carte</li>
													<li style=\'border-bottom:0\'>Alert</li>
													<li style=\'border-bottom:0\'>Posta</li>
													<li style=\'border-bottom:0\'>Servizi?</li>
												</ul>
												</div>';
										}

										?>
									
									
								</th>
							</tr>
								<?php
									$folder = "include/oggetti/";
									$elencocart = array();
								    $dh = opendir($folder);
									while (($file = readdir($dh)) !== false) {
							            if( ($file !='.')&&($file !='..') ){
							            	$elencocart[] = $file;

							           }
						    		}
						    		closedir($dh);
						    		asort($elencocart);
						foreach ($elencocart as $tipooggetto) {
					   	?>
							<tr>
								<td width="40%" style="padding: 5px;border-bottom:solid 1px #eee;"><?php print $tipooggetto; ?></td>
								<td width="20%" style="padding: 5px;border-bottom:solid 1px #eee;text-align: center">
									<?php if (file_exists("include/oggetti/".$tipooggetto."/Milano")) { ?>
									<a <a href="/index_catalogo_milano.php?tipo=<?php print $tipooggetto; ?>&site=<?php print $site; ?>" class="btlink old" style="display:inline-block;text-decoration:none;"> <span style="border:solid <?php print $colorLink; ?>; border-width:0 2px 2px 0;padding:3px;transform:rotate(-45deg);display: inline-block"></span> </a>
									<?php } ?>
								</td>
								<td width="20%" style="padding: 5px;border-bottom:solid 1px #eee;text-align: center">
									<?php if (file_exists("include/oggetti/".$tipooggetto."/Verona")) { ?>
									<a href="/index_catalogo_verona.php?tipo=<?php print $tipooggetto; ?>&site=<?php print $site; ?>" <span style="border:solid <?php print $colorLink; ?>; border-width:0 2px 2px 0;padding:3px;transform:rotate(-45deg);display: inline-block"></span> </a></td>
									<?php }?>
							</tr>
				            <?php 	
						}
								?>
						</table>

						</div>
						<div class="col-sm-4">
							<h2 style="margin-top:0">Template</h2>
							<strong>
								MILANO
							</strong><br>
							<script type="text/javascript">
						
						$(function(){

							$.ajax({
								url: "/include/ajax/menu_milano.php",
								dataType: "json",
								success: function(data) {
									var menu = $("#navigazione_webank");
									$.each(data,function(i,v) {
										var li = $("<li>").append($("<span>").append(v.voce));
										menu.append(li);
									});
								}
							});		
						});

					</script>
					<!--  MENU WEBANK -->
					<ul id="navigazione_webank" class="librerie"></ul>
					<!--  FINE MENU WEBANK -->

							<strong>
								VERONA
							</strong>
							<script type="text/javascript">
						
						$(function(){

							$.ajax({
								url: "/include/ajax/menu_verona.php",
								dataType: "json",
								success: function(data) {
									var menu = $("#navigazione_youweb");
									$.each(data,function(i,v) {
										var li = $("<li>").append($("<span>").append(v.codice).addClass("titoletto"));
										menu.append(li);
									});
								}
							});		
						});

					</script>
							<!--  MENU WEBANK -->
							<ul id="navigazione_youweb" class="librerie"></ul>
							<!--  FINE MENU WEBANK -->
						</div>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>
