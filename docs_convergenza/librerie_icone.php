<?php include("./core/base.php"); ?>
<?php
    
    // Calcolo path del file selection
    $selectionpath = ($site=="webank")? "/WB" : "/HT";

?>
<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        virtual("/include/struttura/head_meta.php");
        virtual("/include/struttura/head_css.php");
        virtual("/include/struttura/head_js.php");
        ?>

        <!-- ASSET LIBRERIE -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- / ASSET LIBRERIE -->
        
        <!-- JS LIBRERIE (non includere in sviluppo) -->
        <script src="/js/priv_librerie.js"></script>
        <!-- / JS LIBRERIE -->
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
            url: "<?php print $selectionpath; ?>/fe/font/selection.json",
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
                alert("ATTENZIONE!\nCatalogo icone non caricato:\n\"<?php print $selectionpath; ?>/fe/font/selection.json\"");
            }
        });

    });
        
    </script>
   

    <style>
   

    </style>
        
    </head>
    <body class="<?php print($site); ?>">
        <header class="librerie">
            <div class="wrapper">
                <h1><a class="back" href="./index.php?site=<?php print $site; ?>">&lsaquo;</a> Icone - <?php print(ucwords($site)); ?> <span id="icototale"></span>
                </h1>
				<?php if ((file_exists("include/oggetti/" . $tipo . "/Milano") && file_exists("include/oggetti/" . $tipo . "/Verona")) || file_exists("include/oggetti/" . $tipo . "/commons")) { ?>
                    <div class="code-console"><span>HTML</span>
                        <div class="console"><a class="<?php print (($html == "mi")
								? "on"
								: ""); ?>" href="/librerie_catalogo.php?html=mi&tipo=<?php print $tipo; ?>&site=<?php print $site; ?>">MI</a> <a
                                    class="vr <?php print (($html == "vr")
										? "on"
										: ""); ?>" href="/librerie_catalogo.php?html=vr&tipo=<?php print $tipo; ?>&site=<?php print $site; ?>">VR</a>
                        </div>
                    </div>
				<?php } ?>
				<?php include("./librerie_switch.php"); ?>
            </div>
        </header>


        <!-- CONTENITORE DIVERSO A SECONDA DEL CONTESTO -->
        <div id="main">
            <div class="wrapper">
                
                    <div id="icone">
                        <div id="iconSet"></div>
                    <?php if ($site=="webank") { ?>
                         <script type="text/javascript">  

                            $(function(){

                                // Lista delle icone MULTICOLOR64 
                                $.ajax({
                                    url: "<?php print $selectionpath; ?>/fe/font/selection_color.json",
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
                                        alert("ATTENZIONE!\nCatalogo icone non caricato:\n\"<?php print $selectionpath; ?>/fe/font/selection_color.json\"");
                                    }
                                });

                            });
                        </script>
                        <h2>Elenco glifi colorati <span class="note" id="glifitotale"></span></h2>
                        <div id="iconSetColor"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
        <!-- FINE CONTENITORE <->

    </body>
</html>