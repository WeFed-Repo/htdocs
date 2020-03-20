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
    </head>
    <body class="<?php print($site); ?>">
        <header class="librerie">
            <div class="wrapper">
                <h1><a class="back" href="./index.php?site=<?php print $site; ?>">&lsaquo;</a> Porting icone WB - <?php print(ucwords($site)); ?> <span id="icototale"></span>
                </h1>
				<?php // include("./librerie_switch.php"); ?>
            </div>

            <script>
                // Automazione salvataggio .less
                $(function(){

                    $("#prosegui").click(function(){
                        $("#preImport").addClass("loading");    
                       $.ajax({
                            url: "librerie_porting_icone_save.php",
                            dataType: "json",
                            success: function(data){
                                if(data.esito==="ok") {
                                    $("#preImport").hide();  
                                    $("#esito_fb").html("<strong>"+data.ported + "</strong> glifi importati correttamente.")
                                    $("#postImport").show();
                                }
                                else
                                {
                                    alert("Si sono verificati degli errori.\nVerifica la formattazione del file icon_porting.json")
                                }
                            },
                            error: function(){
                                alert("Si sono verificati degli errori. Impossibile procedere")
                            }

                       }) 
                    });

                })
                

            </script>
        </header>
        <!-- CONTENITORE DIVERSO A SECONDA DEL CONTESTO -->
        <div id="main" class="librerie">
            <div class="wrapper">
                <div class="row">
                    <div class="col-xs-12">
                        <section id="preImport">
                            <h2>Procedura</h2>
                            <p>Per inserire il corrispettivo glifo You partendo dalla sua classe WB:</p>
                            <ol class="instcode">
                                <li><strong>Annotare</strong> il nome della classe del glifo mancante (al netto del prefisso "icon-") sulla pagina di riferimento You in fase di implementazione.<br>
                                    <code>&lt;i class="icon icon-<u>nomeglifo_di_webank</u>"&gt;</i><br>
                                    </code>
                                </li>
                                <li><strong>Identificare</strong> nelle librerie alla <a href="/librerie_icone.php?site=youweb">pagina apposita</a> il glifo You che andra' associato alla classe WB ed annotarne il nome (es: "<strong>nomeglifo_di_youweb</strong>")</strong></li>
                                <li><strong>Integrare</strong> i glifi da importare nel file <strong>"/HT/fe/font/icon_porting.json"</strong>, inserendo la classe selezionata nel modo seguente
                                <br>
                                <code>
                                    {<br>
                                        &nbsp;&nbsp;&nbsp;[...],<br>
                                        &nbsp;&nbsp;&nbsp;"<u>nomeglifo_di_youweb</u>":"<u>nomeglifo_di_webank</u>"<br>
                                    }
                                </code><br>
                                al termine dell'operazione, salvare il file.
                                </li>
                                <li><strong>Premere</strong> il sottostante pulsante "PROSEGUI" per generare automaticamente il file .less di porting (<i>HT\fe\css\youweb_skin\fonts\_icon_remap.less</i>) ed attendere il feedback dell'operazione</li>
                            </ol>
                            <button class="btnLib" id="prosegui">Prosegui</button>
                        </section>
                        <section id="postImport" style="display:none">
                            <div class="esito"> <div id="esito_fb"></div></div>
                            <p>
                                Ora &grave; possibile compilare i less di riferimento ("youweb_skin.less") per terminare il porting.<br>
                                <br>
                                <strong>Ricordati di versionare anche il file di porting ("icon_porting.json")!</strong>
                            </p>
                            
                        </section>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FINE CONTENITORE -->

    </body>
</html>