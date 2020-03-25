<script type="text/javascript">
	$(function(){

		// Open overlay
		iconDetail = function(){
			iconDataDett = iconData[$(this).attr("iconid")];
			var iconPanelNode = function(size,name){
				iconSample = $("<div>").addClass("iconWrap").append(
					$("<i>").addClass("icon icon-" + name + " icon-"+ size +"x"),
					$("<span>").html("icon-"+ size +"x")
				);
				return iconSample;
			}
			var olCont = $("<div>").append(
					$("<h2>").html("Dettagli icona:<span>"+iconDataDett.properties.name+"</span>"),
					$("<div>").addClass("iconPanel").append(iconPanelNode(1,iconDataDett.properties.name),iconPanelNode(2,iconDataDett.properties.name),iconPanelNode(3,iconDataDett.properties.name)),
					$("<div>").addClass("details").append($("<span>").addClass("title").html("Codice:"),$("<span>").addClass("Codice").html("&lt;i class=\"icon icon-"+iconDataDett.properties.name+"\"&gt&lt/i &gt"))
				);

			lib.openOverlay(olCont);

		}

		// Inizializzazione SWITCH 
		$("#iconOptions a").click(function(){
			var bt = $(this);
			var btSel = bt.parent().find("a");
			if(btSel.length>1) {
				btSel.removeClass("on");
				bt.addClass("on");
			}
			else
				{bt.toggleClass("on")}
			var btClass = bt.attr("data-class");
			if (btClass.indexOf("ico")<0){
				$("#iconSet").toggleClass(btClass);
			}
			else
			{
				$("#iconSet").removeClass("ico1x ico2x ico3x ico4x").addClass(btClass);
			}
			});

		// Lista delle icone ICOMOON 
		$.ajax({
			url: "/wscmn/fe/font/selection.json",
			success: function (data) {
				// Raccoglie i dati e li ordina per il nome
				iconData = data.icons.sort(function(v1, v2) {return (v1.properties.name > v2.properties.name) ? 1 : -1});
				iw = $("#iconSet");
				
				$.each(iconData,function(i,v){
					iconWrap = $("<div>").addClass("iconWrap");
					icon = $("<i>").addClass("icon").addClass("icon-" + v.properties.name).attr("title","icon-" + v.properties.name);
					iconWrap.append(
							$("<div>").attr("iconid",i).click(iconDetail).addClass("iconIndex").append(icon),
							$("<span>").addClass("name").html(v.properties.name)
					);
					iw.append(iconWrap);
				});	

				$("#icototale").html("(tot. "+ iconData.length +" glifi)")
			},
			error: function (){
				alert("ATTENZIONE!\nCatalogo icone non caricato:\n\"/wscmn/fe/font/selection.json\"");
			}
		});

		// Lista delle icone MULTICOLOR64 
		$.ajax({
			url: "/wscmn/fe/font/selection_color.json",
			success: function (data) {
				// Raccoglie i dati e li ordina per il nome
				var glyphData = data.icons.sort(function(v1, v2) {return (v1.properties.name > v2.properties.name) ? 1 : -1});
				var iw = $("#iconSetColor");
				
				$.each(glyphData,function(i,v){
					var iconWrap = $("<div>").addClass("glyphWrap");
					var icon = $("<span>").addClass("glyph").addClass("glyph-" + v.properties.name).attr("title","glyph-" + v.properties.name);
					
					if (v.properties.codes) {
						for (var c=1;c<=6;c++){
							icon.append($("<span>").addClass("path" + (c)));
						}
					}

					iconWrap.append(
							$("<div>").attr("iconid",i).addClass("glyphIndex").append(icon),
							$("<span>").addClass("name").html(v.properties.name)
					);
					iw.append(iconWrap);
				});	

				$("#glifitotale").html("(tot. "+ glyphData.length +" glifi)")
			},
			error: function (){
				alert("ATTENZIONE!\nCatalogo icone non caricato:\n\"/wscmn/fe/font/selection_color.json\"");
			}
		});

	});
</script>
<!-- CONTENT -->
<div id="librerie">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="color borderlightcolor">Elenco icone <span class="note" id="icototale"></span></h2>
					<div id="iconOptions">
						<div class="optionWrap">
							<span>Nomi</span><a data-class="nomi"><i class="icon icon-spunta"></i></a>
						</div>
						<div class="optionWrap">
							<span>Ingombri</span><a data-class="ingombri"><i class="icon icon-spunta"></i></a>
						</div>
						<div class="optionWrap selettori">
							<span>Dimensioni</span>
							<a data-class="ico1x"><strong>1X</strong> (16px)</a>
							<a data-class="ico2x" class="on"><strong>2X</strong> (32px)</a>
							<a data-class="ico3x"><strong>3X</strong> (48px) </a>
							<a data-class="ico4x"><strong>4X</strong> (64px)</a>
						</div>	
					</div>
					<div id="iconSet" class="ico2x"></div>

					<h2 class="color borderlightcolor">Elenco glifi colorati <span class="note" id="glifitotale"></span></h2>
					<div id="iconSetColor"></div>
				</div>
			</div>
		</div>
	</div>
</div>

