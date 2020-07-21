<!DOCTYPE html>
<?php
    $forecolor="#6f8f0a";
	$backcolor="#dce7b5";
	
	$tipoOggettiPub = Array(
	
		"bottoni" => "Bottoni",
		"box" => "Box",
		"navigazione" => "Navigazione",
		"form" => "Form input e output",
		"promo" => "Promo",
		"tabelle" => "Tabelle",
		"testi" => "Titoli e testi",
		"widget" => "Widget"
	);

?>
<html class="librerie">
<head>
    <?php
    $pag = $_GET["pag"];
    $responsive = (empty($_GET["responsive"])) ? "y" : $_GET["responsive"];
    $resp = ($responsive == "n") ? false : true;
    ?>
    <title>Librerie <?php print $fullname ?> <?php print $customer ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- MOBILE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,height=device-height">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Team Cup"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Team Cup"/>
    <!-- / MOBILE -->
    <meta http-equiv="Content-Language" content="it">

    <!-- JS -->
    <script type="text/javascript" src="/common/fe/assets/jquery/jquery.js"></script>
    <!-- / JS -->

    <!-- CSS -->
    <link rel="stylesheet" href="/css/librerie_pubblica.css"/>
    <link rel="stylesheet" href="/wbresp/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wbresp/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/wbresp/css/bootstrap-slider.min.css">
    <script src="/wbresp/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" href="/wbresp/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox.min.css"/>
    <link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox-styles.min.css"/>
        <!--NUOVI CSS -->
    <link rel="stylesheet" href="/wbresp/css/contenuti_pubblica.css"/>

   

    
</head>

<body class="bglightcolor">
<div id="heading">
    <div class="wrapper bgcolor">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <h1><a href="/index_wb_pubblica.php" class="btmenu"><</a>
                        Librerie Webank Pubblica
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FUNZIONI IN PAGINA -->
<script type="text/javascript">
	function windowdetail (filename)
	{
		// Raccoglie il codice come testo
		$.ajax({
			url: filename,
			dataType: "text",
			success: function(data){
				var htmlcode = data;
				forcoderwin = window.open('','name','height=500,width=700,toolbar=no,directories=no,status=no,menubar=no,scrollbars=vertical,resizable=no');
				forcoderwin.document.write('<html><body style="margin:0"><textarea style="width: 700px; height: 500px;" >'+ htmlcode.replace(/</g,"&lt;").replace(/>/g,"&gt;") + '</textarea></body></html>');
				
			}
		});
	}
	function ridimensionaWidth() {
		var larghezzaWindow = parseFloat($('#selectScreen').val());
		var finestraPopup = window.open('','name', 'height=700, width=' + larghezzaWindow +',toolbar=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no');
		finestraPopup.document.write('<html><body>' + $('#maincontent').html() +'</body></html>');
	}
	$(document).ready(function() {
		$('#content').css('max-width',1024)
	})
	$('#selectScreen').change(function() {	
		ridimensionaWidth();
	})
</script>
<!-- FINE FUNZIONI IN PAGINA -->
<?php
	//acquisizione dei filtri
	$customer = $_GET["customer"];
	$type = $_GET["type"];
	$noobject = true;
			
		?>
		<div id="librerie">
			<div class="wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="color borderlightcolor">Elenco oggetti: <?php print($tipoOggettiPub[$type]) ?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- RIGHE PER I VARI OGGETTI -->
		<div id="main">
			<div class="wrapper">
				<div class="container-fluid">
					<?php

							$pathoggetti = "oggetti_wbresp";
							
							function remove_some_dir($filename)
							{
								$some_dir = array(".", "..", ".svn");
								return !in_array(strtolower($filename), $some_dir);
							}
							
							$htdocspath =  realpath(".");


							//scorrimento degli oggetti nelle cartelle
							$filenames = array_filter(scandir($htdocspath."/include/".$pathoggetti."/".$type), 'remove_some_dir');

							if (count($filenames) > 0) 
							{	
								foreach($filenames as $filename)
								{
									if ($noobject) $noobject = false;
									// Assembla il nome del file
									$objectname = str_replace(".php","",$filename);
									?>
									<div class="row">
										<div class="col-xs-12">
											<div class="lib2">
												<a name="<?php print $objectname; ?>"></a>
												<a id="<?php print $objectname; ?>" href="#<?php print $objectname; ?>" class="libtitle"><?php print strtoupper($objectname); ?></a>
												<span><?php print $pathoggetti."/".$type."/".$filename ?> <a href="javascript:;" onclick="javascript: windowdetail('<?php print "/librerie/include/".$pathoggetti."/".$type."/".$filename ?>');"><strong>(Sorgente)</strong></a></span>
											</div>

										</div>
									</div>
									
									<div class="row">
										<div class="col-xs-12">
											<div class="col-sm-6">
											<!--AGGIUNTA DI SELECT PER CLASSE -->
											<?php
												if ( $objectname=="box_170") { ?>
												<script>
													function appendImgBgr(el) {
														if($(el).prop("selectedIndex")== 0)
														{
															$(el).closest('div').nextAll('div').removeClass('bgrLight').addClass('bgrDark');
														}
														else if($(el).prop("selectedIndex")== 1){
															$(el).closest('div').nextAll('div').addClass('bgrLight').removeClass('bgrDark');
														}
														
													}
												</script>
												<span style="padding-right:20px;padding-bottom:20px;float:left">Seleziona la classe sfondo al box</span>
												<select onchange="appendImgBgr(this)">
													<option>Immagine scura di sfondo</option>
													<option>Immagine chiara di sfondo</option>
												</select>
											<?php } ?>
											</div>
											<div class="col-sm-6">
											
											</div>
											<!-- INIZIO OGGETTO <?php print (strtoupper($objectname)) ?> -->
											<?php
												virtual("/include/".$pathoggetti."/".$type."/".$filename);
											?>
											<!-- FINE OGGETTO <?php print (strtoupper($objectname)) ?> -->
										</div>
									</div>	
									<?php
								}
							}
							if ($noobject == true)
								{
									print ("<p>Non sono presenti oggetti in questa categoria.</p>");
								}

							?>

					<!-- FINE RIGHE PER I VARI OGGETTI -->
				</div>
			</div>
		</div>
</body>
</html>






