<?php
function remove_some_dir ($filename)
{
	$some_dir = array(".", "..", ".svn");
	return !in_array(strtolower($filename), $some_dir);
}

//scorrimento degli oggetti nelle cartelle
$filenames = array_filter(scandir(realpath("../../../htdocs/docs_wbresp/wbresp/html/")), 'remove_some_dir');

?>
<script>
$(function(){

	wCont = $("#widgetspace .widgetCont").eq(0); 

	$("#elencowidget a").click( function(){
		$("#elencowidget a").removeClass("selected");
		wCont.addClass("loading")
		var filename = $(this).addClass("selected").attr("data-file");
		window.localStorage["lib_widget_selected"] = filename;
		$.ajax({
			url: "/wbresp/html/" + filename,
			dataType: "html",
			success: function(data) {
				filenamecont = $("<span>").addClass("filename").html(filename).hide();
				wCont.empty().append(filenamecont,data);
				var widget = wCont.find(".widget").hide();
				wCont.removeClass("loading");
				filenamecont.fadeIn(1000);
				widget.fadeIn();
			} 
		})
	});

	// Se l'utente ha già fruito dell'oggetto 
	$("#elencowidget a[data-file='" + window.localStorage["lib_widget_selected"] + "']").trigger("click");
});
</script>
<style>
#elencowidget {max-height:500px; float:left; overflow-y:scroll; width:100%;}
#elencowidget a {cursor:pointer;float:left; background-color:#eee; border:solid 1px #ddd; border-radius:5px; clear:left; width:100%; margin:0 0 10px;padding:8px; text-decoration:none;}
#elencowidget a:hover {background-color:#fff;}
#elencowidget a.selected {background:#999; color:#fff;}
#widgetspace .widgetCont .filename {padding: 10px;font-size: 14px; display:block;background: #333;color: #fff;font-weight: bold;display: block;width: 100%;margin: 0 0 10px;clear: both;}

</style>
<div class="row">
	<div class="col-lg-9 col-md-12 col-sm-12">
		<h3>Widget tester</h3>
		<p>Seleziona un widget dall'elenco sottostante per vederlo nella spalla destra.</p>
		<div id="elencowidget">
			<?php
				if (count($filenames) > 0) 
					{	
						sort($filenames);
						foreach($filenames as $filename)
						{
							if (strrpos ($filename, "wdg_") === 0) {
							?>
							<a data-file="<?php print $filename; ?>"><?php print $filename; ?></a><br>
							<?php
							}
						}
					}
			?>
		</div>
	</div>
	<div class="col-lg-3 col-md-12 col-sm-12 widget-container" id="widgetspace">
		<div class="widgetCont loading">
		</div>
	</div>
</div>