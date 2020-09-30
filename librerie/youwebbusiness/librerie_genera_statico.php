<?php

	$def_datadelta = "";
	$def_changelist = "";

	// Se esiste una configurazione, raccoglie l'ultima esportazione e ne estrae i dati
	if (file_exists("./crono_statico.json") ) {
		if (!empty(json_decode(file_get_contents("./crono_statico.json",TRUE)))) {
			$conf = json_decode(file_get_contents("./crono_statico.json",TRUE));
			$lnode =array_pop($conf);
			print_r($lnode);
			$def_datadelta = $lnode->datapacchetto;
			$def_changelist =  $lnode->changelist;
		}
	}
		
?>
<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		
		<title>Librerie YouBusiness</title>

		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		
		<link href="./librerie/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" >
		<link href="./librerie/css/librerie.css" rel="stylesheet" type="text/css" media="all" >
		<script type="text/javascript" language="javascript" src="./librerie/js/jquery.min.js"></script>
		<script type="text/javascript" language="javascript" src="./librerie/js/bootstrap.min.js"></script>
	</head>
	<body>
		
	<header class="librerie">
			<div class="wrapper"> 
				<h1><a href="./index.php" class="btn-bak">&laquo;</a> Genera statico html - Librerie YouBusiness</h1>
			</div>
		</header>
		<div id="main" class="librerie">
			<div class="wrapper">
			<script type="text/javascript">

				var replaceLink = function(url) {
					lurl = url.replace(/=/g,"_")
						.replace(/\//g,"-")
						.replace(/&asis_true/g,"_ASIS")
						.replace(/\&/g,"-")
						.replace("strutt_priv.php?","")
						.replace(/.php/g,"")
						.replace(/\?/g,"_")
						.replace(/tpl_tpl/g,"tpl");
					return lurl + ".html";
				}


				var stfolders = <?php echo file_get_contents("librerie_path_resources_porting.json"); ?>


				function addLog (row) {
					$("#generalog").append(row + "<br>");
				}


				function salvaFilesHtml() {
					var urls = new Array();

					$.ajax({
							url: "index.php",
							dataType: "text",
							success: function(data) {
								addLog ("Directory  <strong>html_statico</strong> creata con successo nella root");
								addLog("Estrazione link da file <strong>index.php</strong>");
								urls.push({url: "index.php",newurl:"index.html"})
								$.each($(data).find("*[href]").not("*[data-noexport=true]"),function(i,v){
									var href= $(v).attr("href");
									urls.push({url: href,newurl:replaceLink(href)})
								});
								
								// Mette in lista gli "old" per creare pagine non linkate ma comunque visibili da browser 
								$.each($(data).find("*[href].old"),function(i,v){
									var href= $(v).attr("href") + "&asis=true";
									urls.push({url: href,newurl:replaceLink(href)})
								});

								addLog ("-trovati <strong>"+ urls.length +"</strong> template da salvare");

								var totFileToSave = urls.length;

								// Salva tutti i file con i replacement corretti
								$.each(urls,function(ind,val){

									// Effettua una chiamata ed un replacement per ogni file proposto
									$.ajax({
										url: val.url,
										dataType: "text",
										success: function(data) {	

											// Mette il display:none a quanto non deve essere esportato
											data = data.replace(/data-noexport=\"true\"/g,"style=\"display:none\"");

											// Effettua i replacements agli url
											$.each(urls,function(index,value){
												data = data.replace(value.url,value.newurl);
											});

											// Effettua i replacements agli src "locali"
											$.each(stfolders, function(key,val){
												data = data.replace('"/"'+val.basefolder, '"./' + val.basefolder)
											});
										

											// Salva il file
											$.ajax({
												url: "librerie_salva_file.php",
												method: "POST",
												data: {
													"fname":val.newurl,
													"fcont": data
												},
												dataType: "json",
													success: function(data) {
													}
												}).done(function(){
													totFileToSave -= 1;
													if(totFileToSave <= 0) {
														addLog(data.msg);
														addLog("<strong>FINE</strong>")
														alert("CREAZIONE STATICO TERMINATA.");
													}
												});


										}
									});

								});
							}
						});
				}


				checkall = function(){

					var corretto = false;
					var dd = $("#datadelta").val();
					if(dd.length===8) {
						if (!isNaN(dd)) {
							if (parseInt(dd)==dd) {
								var ds =  dd.toString().substring(0,4) + "-" +  dd.toString().substring(4,6) + "-" + dd.toString().substring(6,8);
								if (Date.parse(ds)) corretto= true;
							}
						}
						
					}
					$("#btngenera").toggle(corretto);

				}

				$(function(){

					$("#btngenera").click(function(){
						$("#generalog").empty();
						
							// Operazioni preliminari per la preparazione della cartella
							$.ajax({
								url: "librerie_prepara_pacchetto.php",
								dataType: "json",
								method: "POST",
								data: {
									datadelta: $("#datadelta").val(),
									changelist: $("#changelist").val()
								},
								success: function(data) {
									addLog("Directory <strong>statiche</strong> (/fe e /librerie) copiate.");
									addLog("Terminata scrittura di <strong>changelog.html</strong>")
									// salvaFilesHtml();
								}
							});
					}) 

				})
				</script>
				<p style="padding:30px 0">Selezionare una data "delta" (data di riferimento per il changelog), descrivere le lavorazioni effettuate e quindi premere il pulsante sottostante ("genera statico"): verra' creata una versione statica delle librerie sotto la root in "html_statico".<br>
				Attendere il completamento nella finestra di log prima di procedere (viene riportata la parola "FINE" e generato un alert Js).</p>
				<style>
					#btngenera {
						float:none;
						display:block;
						width:200px;
						margin:15px auto;
						background:#666;
						border-radius:10px;padding:15px 20px;
						font-weight:bold;
						color:#fff;
						cursor:pointer;
						text-align:center;
					}

					.loglabel {color:#aaa}
					#generalog {
						border:solid 1px #ddd;
						background:#fff;
						min-height:100px;
						max-height:300px; 
						overflow:auto;
						font-size:12px;line-height:14px;
						padding:10px;
						color:#666;
					}
					.form-group {width:100%;clear:both;display:inline-block;}
					.form-group label {font-size:14px;font-weight:bold; margin-bottom:5px; width:100%;}
					.form-group input {font-size:14px;width:100%; max-width:100px;display:inline-block;clear:both;}
					.form-group textarea {font-size:14px;width:100%;max-width:500px;display:inline-block;clear:both;height:150px;}
				</style>
				<form>
					<div class="form-group">
						<label>Data "delta" (es:20200929)</label>
						<input name="datadelta" placeholder="AAAAMMGG" id="datadelta" maxlength="8" onkeyup="checkall()" value="<?php print $def_datadelta; ?>">
					</div>
					<div class="form-group">
						<label>Lista dei cambiamenti effettuati (separati da "INVIO")</label>
						<textarea name="changelist" placeholder="lista" id="changelist" onkeyup="checkall()"><?php print $def_changelist; ?></textarea>
					</div>
				</form>
				<a id="btngenera" style="display:none">GENERA STATICO</a>
				<section>
				<label class="loglabel">Log</label>
				<div id="generalog">
				</div>
				</section>


			</div>
		</div>
		
	</body>
</body>