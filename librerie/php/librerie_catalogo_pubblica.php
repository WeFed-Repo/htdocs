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
							
							$htdocspath = ($hostsuffix == "fix")? "c:/apache24/librerie/htdocs/" : realpath("..");


							//scorrimento degli oggetti nelle cartelle
							$filenames = array_filter(scandir($htdocspath."/librerie/include/".$pathoggetti."/".$type), 'remove_some_dir');

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
												virtual("/librerie/include/".$pathoggetti."/".$type."/".$filename);
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
