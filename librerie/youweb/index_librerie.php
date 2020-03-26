<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="language" content="it"> 
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
		<meta name="HandheldFriendly" content="True" /> 	
		<meta name="MobileOptimized" content="320" /> 		
		<meta http-equiv="cleartype" content="on"> 			
		<meta name="description" content="YouWeb - Banco BPM">	
		<meta name="format-detection" content="telephone=no">		
		<meta name="apple-mobile-web-app-title" content="YouWeb"> 

		<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/JS/jquery/bootstrap.min.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.min.js"></script>

		<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css"  />


		<style> 
			body {background-color:#fff;font-size:12px;font-family:Arial,Serif;padding:0;margin:0;}
			body * {box-sizing:border-box;}		
			
			#main {margin:0 auto; max-width:1200px;}

			h1 {color:#202d50;padding:10px;font-weight:bold;margin:0;font-size:35px;}
			h2 {display:block;width:100%;background:#0E977F;padding:10px;font-size:16px;font-weight:bold;color:#fff}
			h3 {display:block;width:100%;background:#65B7A9;padding:10px 10px;color:#6689af;font-size:14px;font-weight:bold;color:#fff}
			h3 button {height:30px;font-weight:bold;margin: 0 0 0 20px;font-size:12px;}
			
			ul {padding-left:0;}
			ul ul {padding-left:15px;}
			ul li {padding: 5px 0; width:100%;display:inline-block; border-top:dotted 1px #ccc}
			ul li span {padding: 8px 0 0;display:inline-block; color:#666;text-transform:none;max-width:65%;}
			ul li .btlink {cursor:pointer;float:right;display: inline-block; margin: 0 0 0 10px;color: #fff;padding: 0;font-size: 10px; height:30px;width:40px;text-align:center;line-height:30px;text-decoration: none;background: #aaa;border-radius:3px;text-transform:uppercase;font-weight:bold;border-radius:7px;}
			ul li .btlink.edit {background-color:#666;}
			ul li .btlink.new {background-color:#a00;}
			ul li .btlink.new.ok{background-color:#080;}
			ul li .btlink.new.rw{background-color:#EADA10;color:#000}
			ul li .btlink.new.no{background-color:#000000;color:#fff}
			ul li.mancante {background-color:#ffcccc;}
			ul li span.titoletto {font-weight:bold;font-size:14px;text-transform:uppercase;}
			ul li ul li ul li {border-bottom:none;}

			#tpleditor {width: 825px;padding: 15px;position: fixed;top: 0px;right: 10px; background:#fff; border:solid 1px #ccc;}
			#tpleditor.loading {background:#fff url(/lib_img/loading.gif) no-repeat center center;}
			#tpleditor textarea {width:100%;min-height:400px;font-size:11px;}
			#tpleditor .btneditor {font-size:16px;font-weight:bold;}
			#tplfilesave {float:right;}

		</style>
	</head>
	<body>
		<div id="main">
			<header><h1>Librerie BANCO-BPM (YouWeb)</h1></header>
		
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-xs-12 col-sm-6 col-md-2">
						<h2>Strutture</h2>
						<ul>
							<li>
								<span>Pubblica</span>
								<a href="/strutt_pub_new.php?pag=placeholder&lev1" class="btlink new ok">New</a>
								<a href="strutt_pub.php" class="btlink">Old</a>
							</li>
							<li>
								<span>Privata</span>
								<a href="/strutt_priv_new.php?pag=placeholder&lev1=pagamenti&wdg=02|17|18|19" class="btlink new ok">New</a>
								<a href="strutt_priv.php?&wdg=02|17|18" class="btlink">Old</a>
							</li>
							<li>
								<span>Intermedia</span>
								<a href="/strutt_int_new.php?pag=placeholder&lev1=pagamenti&wdg=02|17|18|19" class="btlink new ok">New</a>
								<a href="strutt_int.php" class="btlink">Old</a>
							</li>
						</ul>

						<h2>Glifi</h2>
						<ul>
							<li>
								<span>Icone</span>
								<a href="/index_librerie_glifi.php" class="btlink new ok">Glifi</a>
							</li>
						</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<h2>Oggetti</h2>
						<ul>
						<?php
						// Elenca gli oggetti usando il nome della cartella
						$folder = "include/oggetti/";
						$elencocart = array();  
						$dh = opendir($folder);
					        while (($file = readdir($dh)) !== false) { 
					            if( ($file !='.')&&($file !='..') ){
					            	$elencocart[] = $file;
					            
					           } 
						    } 
					    closedir($dh); 

					    // Elenco delle tipologie di oggetti (riassunto)
						asort($elencocart);
						foreach ($elencocart as $tipooggetto) {
					   	?>
							<li>
								<span><?php print $tipooggetto; ?></span>
								<?php if ($tipooggetto == "Widget" || $tipooggetto == "Widget home"){?>
								<a href="/index_catalogo_new.php?tipo=<?php print $tipooggetto; ?>" class="btlink new ok">New</a>
								<?php }
								else { ?>
								<div style="width:50px;float:right">&nbsp;</div>
								<?php } ?>
								<a href="/index_catalogo.php?tipo=<?php print $tipooggetto; ?>" class="btlink old">Old</a>
							</li>
				            <?php 	
						}
						?>
						</ul>
					</div>

					<div class="col-xs-12 col-md-6">
						<h2>Template</h2>

						<!-- PRIVATA -->
						<h3>Parte privata</h3>
						<script type="text/javascript">
						
						$(function(){

							$.ajax({
								url: "/include/ajax/menu.php",
								dataType: "json",
								success: function(data) {
									var menu = $("#navigazione");
									$.each(data,function(i,v) {
										var li = $("<li>").append($("<span>").append(v.nome).addClass("titoletto"));
										
										/* Ciclo sottovoci */
										if (v.voci) {
											var ulwrap = $("<ul>");
											$.each(v.voci,function(ind,val) {

												var valstrutt = "";
												if (val.strutt) valstrutt = "&strutt=" + val.strutt;
												var lname = val.nome;
												if (val.addinfo) lname+= "&nbsp;<span style='font-weight:bold;color:#12b912'>"+val.addinfo+"</span>"
												var basestrutt = "";
												if (val.basestrutt) basestrutt = "_"+val.basestrutt;


												if (val.linkdiretto == "true") {
													var liwrap = $("<li>").append(
														$("<span>").html(lname),
														$("<a>").html("New").addClass("btlink new " + ((val.status)? val.status : "")).attr("href",val.pag_new),
														$("<a>").html("Old").addClass("btlink").attr("href",val.pag)
													);

												}
												else
												{

													// Calcola i widget associati
													var wdg = v.wdg;
													if (val.wdg.length>0) wdg = val.wdg;
													

													var liwrap = $("<li>").append(
														$("<span>").html(lname)
													).attr("data-original-link",val.linkoriginale);
													if (val.file) {
														liwrap.append($("<a>").html("New").addClass("btlink new " + ((val.status)? val.status : "")).attr("href","strutt_priv_new"+basestrutt+".php?pag="+val.file+"&lev1="+v.codice+"&wdg="+wdg.join("|")+ valstrutt),
														$("<a>").html("Old").addClass("btlink").attr("href","strutt_priv"+ basestrutt +".php?pag="+val.file+"&lev1="+v.codice+"&wdg="+wdg.join("|")+ valstrutt)
													)
													}
													// Se presenti ulteriori voci le appende
													
													if (val.voci) {
														var subUlwrap = $("<ul>");
														$.each(val.voci,function(index,value) {

															var subbasestrutt = "";
															if (value.basestrutt) subbasestrutt = "_" + value.basestrutt;
															
															var liSub = $("<li>");

															if (value.linkdiretto == "true") {
																liSub.append(
																	$("<span>").html(value.nome),
																	$("<a>").html("New").addClass("btlink new " + ((value.status)? value.status : "")).attr("href",value.pag_new),
																	$("<a>").html("Old").addClass("btlink").attr("href",value.pag)
																	);

															}
															else if (value.file.length>0)
															{
																liSub.append(
																		$("<span>").html(value.nome),
																 		$("<a>").html("New").addClass("btlink new" + ((value.status)? value.status : "")).attr("href","strutt_priv_new"+ subbasestrutt +".php?pag="+value.file+"&lev1=" + v.codice+"&wdg="+wdg.join("|")),
																		$("<a>").html("Old").addClass("btlink").attr("href","strutt_priv"+ subbasestrutt +".php?pag="+value.file+"&lev1="+v.codice+"&wdg=" + wdg.join("|"))
																);
															}
															else (
																liSub.append($("<span>").html(value.nome))
															)

															// Se e' presente un ulteriore livello
															if(value.voci) {

																var subSubUl = $("<ul>");

																$.each(value.voci,function(subind,subval){
																	var subsubbasestrutt = "";
																	if (subval.basestrutt) subsubbasestrutt = "_" + subval.basestrutt;
																	
																	var subSubLi = $("<li>");

																	if (subval.linkdiretto == "true") {
																		subSubLi.append(
																			$("<span>").html(subval.nome),
																			$("<a>").html("New").addClass("btlink new " + ((subval.status)? subval.status : "")).attr("href",subval.pag_new),
																			$("<a>").html("Old").addClass("btlink").attr("href",subval.pag)
																			);

																	}
																	else if (subval.file.length>0)
																	{
																		subSubLi.append(
																				$("<span>").html(subval.nome),
																		 		$("<a>").html("New").addClass("btlink new" + ((subval.status)? subval.status : "")).attr("href","strutt_priv_new"+ subbasestrutt +".php?pag="+subval.file+"&lev1=" + v.codice+"&wdg="+wdg.join("|")),
																				$("<a>").html("Old").addClass("btlink").attr("href","strutt_priv"+ subbasestrutt +".php?pag="+subval.file+"&lev1="+v.codice+"&wdg=" + wdg.join("|"))
																		);
																	}
																	else (
																		subSubLi.append($("<span>").html(subval.nome))
																	)

																	subSubUl.append(subSubLi);
																});

																



																liSub.append(subSubUl);

															}

															subUlwrap.append(liSub);

														});
														liwrap.append(subUlwrap);
													}


												}
												ulwrap.append(liwrap);
											}); 
											li.append(ulwrap);	
										}
										menu.append(li);
									});
								}
							});		
						});

					</script>

					<!-- NUOVO MENU -->
					<ul id="navigazione">
						<li><span>Home</span>
							<a class="btlink new ok" href="strutt_priv_new.php?pag=homepage&wdg=02|17|18">New</a>
							<a class="btlink" href="strutt_priv.php?pag=homepage&wdg=02|17|18">Old</a>
						</li>
						<li><span>Personalizza dashboard</span>
							<a class="btlink new ok" href="strutt_priv_new.php?pag=personalizza_homepage">New</a>
						</li>
					</ul>
					<!-- / NUOVO MENU -->
					
					

					<!-- PUBBLICA -->
					<h3>Parte pubblica</h3>
					<ul>
						<li><span>Login</span><a class="btlink new ok" href="strutt_pub_new.php?pag=login">New</a><a class="btlink" href="strutt_pub.php?pag=login">Old</a></li>
						<li><span>Strong authentication (token fisico)</span><a class="btlink new ok" href="strutt_pub_new.php?pag=strong1">New</a></li>
						<li><span>Strong authentication (token software notifica)</span><a class="btlink new ok" href="strutt_pub_new.php?pag=strong2">New</a></li>
						<li><span>Strong authentication (token software notifica + codice sblocco app online)</span><a class="btlink new ok" href="strutt_pub_new.php?pag=strong3">New</a></li>
						<li><span>Strong authentication (token software notifica + codice sblocco app offline)</span><a class="btlink new ok" href="strutt_pub_new.php?pag=strong4">New</a></li>
						<li><span>Strong authentication (via sms)</span><a class="btlink new ok" href="strutt_pub_new.php?pag=strong5">New</a></li>
						<li><span>Strong authentication (token software per utenti ex BPM)</span><a class="btlink new rw" href="strutt_pub_new.php?pag=strong6">New</a></li>
						<li><span>Istruzioni_primo_accesso</span><a class="btlink new rw" href="strutt_pub_new.php?pag=istruzioni_primo_accesso">New</a></li>

						<li><span>Easy</span><a class="btlink new ok" href="strutt_pub_new.php?pag=login_easy">New</a><a class="btlink" href="strutt_pub.php?pag=login_easy">Old</a></li>
						<li><span>Leggi le F.A.Q.</span><a class="btlink new ok" href="strutt_pub_new.php?pag=faq">New</a><a class="btlink" href="strutt_pub.php?pag=faq">Old</a></li>
						<li><span>Contatta l'assistenza</span><a class="btlink new ok" href="strutt_pub_new.php?pag=assistenza">New</a><a class="btlink" href="strutt_pub.php?pag=assistenza">Old</a></li>
						<li><span>Recupera codici</span><a class="btlink new ok" href="strutt_pub_new.php?pag=recupera_codici">New</a><a class="btlink" href="strutt_pub.php?pag=recupera_codici">Old</a>
							<ul>
								<li><span>Recupera Codice Identificativo</span><a class="btlink new ok" href="strutt_pub_new.php?pag=recupera_codici_identificativo">New</a><a class="btlink"  href="strutt_pub.php?pag=recupera_codici_identificativo">Old</a>
								<li><span>Reset PIN</span><a class="btlink new ok" href="strutt_pub_new.php?pag=recupera_codici_pin">New</a><a class="btlink"  href="strutt_pub.php?pag=recupera_codici_pin">Old</a>
								<li><span>Reset PIN step 2</span><a class="btlink new ok" href="strutt_pub_new.php?pag=recupera_codici_pin2">New</a><a class="btlink"  href="strutt_pub.php?pag=recupera_codici_pin">Old</a>
							</ul>
						</li>
						<li><span>Info sicurezza</span><a class="btlink new ok" href="strutt_pub_new.php?pag=info_sicurezza">New</a><a class="btlink" href="strutt_pub.php?pag=info_sicurezza">Old</a></li>
						<li><span>Requisiti sistema</span><a class="btlink new ok" href="strutt_pub_new.php?pag=requisiti">New</a><a class="btlink" href="strutt_pub.php?pag=requisiti">Old</a></li>
						<li>
							<span>Gestione Errori</span>
							<a class="btlink new ok" href="strutt_pub_new.php?pag=gestione_errori">New</a>
						</li>
						<li><span>Sessione scaduta</span><a class="btlink new ok" href="strutt_pub_new.php?pag=sessione-scaduta">New</a></li>
						<li><span>Logout-2</span><a class="btlink new ok" href="strutt_pub_new.php?pag=logout-2">New</a></li>
						<li><span>Logout</span><a class="btlink new ok" href="strutt_pub_new.php?pag=logout">New</a><a class="btlink" href="/template_pub/tpl_pub_logout.php">Old</a></li>
					</ul>
					
					<!-- INTERMEDIA -->
					<h3>Parte intermedia</h3>
					<ul>
						<?php for ($x=1;$x<=7;$x++) { ?>
						<li>
							<span>0<?php print ($x) ;?></span>
							<div style="width:50px;float:right">&nbsp;</div>
							<a href="strutt_int_new.php?pag=0<?php print ($x) ;?>" class="btlink new ok">New</a>
							<a href="strutt_int.php?pag=0<?php print ($x) ;?>" class="btlink">Old</a>
						</li>
						<?php
						}
						?>
					</ul>


					</div>

				</div>	

			</div>
	</div>
	</body>
</html>
