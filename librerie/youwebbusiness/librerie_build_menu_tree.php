<?php

    $statsTotali = 0;
    $statsCollegati = 0;
    $statsLavorazione = 0;
    $statsCompletati = 0;

    function buildNode($voices,$tipotemplate,$oldstatus) {

        global $statsTotali,$statsCollegati,$statsLavorazione,$statsCompletati;

        $strutt = ($tipotemplate==="old") ? "_old": "";
        ?>
        <ul>
            <?php
            foreach($voices as $voice) { 
                
                ?>
                <li>
                    <?php 
                        if (isset($voice["tpl"])) 
                        {
                        ?>
                            <?php 
                            // Segnaposto interattivo 
                                if($tipotemplate == "old"){

                                    $stato = ($oldstatus[$voice["tpl"]]) ? $oldstatus[$voice["tpl"]] : ["status"=>"collegato","id"=>"..."] ;

                                    if ($voice["tpl"]) {
                                        $statsTotali+=1;

                                        switch ($stato["status"]) {
                                            
                                            case "lavorazione":
                                                $statsLavorazione +=1;
                                            break;

                                            case "completato":
                                                $statsCompletati +=1;
                                            break;

                                            default:
                                                $statsCollegati +=1;
                                            break;
                                        }
                                    }
                                    
                                    ?> 
                                    <a class="dot dot-enabled <?php print $stato["status"]; ?>" data-tpl="<?php print $voice["tpl"] ?>" title="<?php print $stato["status"]." -> ".$stato["id"]; ?>"></a>
                                    <?php 
                                }
                                else
                                {
                                    ?> 
                                    <div class="dot dot-disabled"></div>
                                    <?php 
                                }
                           
                            // Fine segnaposto interattivo 
                            
                            ?>
                            <a <?php print ($tipotemplate==="old") ? "data-noexport=\"true\"": "";?> href="strutt_priv<?php print $strutt; ?>.php?tpl=<?php print $voice["tpl"];?><?php if($tipotemplate==="old") {?>&cantiere=<?php print (isset($voice["cantiere"])) ? $voice["cantiere"] : "" ; ?><?php } ?>"><?php print ($voice["title"]); ?></a>
                        <?php 
                        }
                        else
                        {
                            ?>
                            <div class="dot dot-disabled"></div>
                            <span><?php print ($voice["title"]); ?></span>
                            <?php
                        }
                        if(isset($voice["voices"])) {
                            buildNode($voice["voices"],$tipotemplate,$oldstatus);
                        } 
                    ?>
                </li>
            <?php
            }
            ?>
        </ul>
        <?php        
    }
    
    function buildTree($url,$tipotemplate) {
        $navmenu = json_decode(file_get_contents($url),true);
        $oldstatus = ($tipotemplate == "old")? $oldstatus = json_decode(file_get_contents("./librerie_menu_old_status.json"),true) : [];
        buildNode($navmenu,$tipotemplate,$oldstatus);
    }

?>
<div class="template-tree-group" id="templateNew">
    <h3><a class="opener"></a> Template NEW</h3>
    <?php buildTree("./librerie_menu.php","new"); ?>
</div>
<div class="template-tree-group" data-noexport="true" id="templateOld">
    <h3><a  class="opener"></a>Template OLD<a class="tips" data-toggle="modal" data-target="#statsModal">Statistiche</a></h3>
    
    <!-- Modale per la gestione dello status -->
    <div class="modal" tabindex="-1" role="dialog" id="cambiaStatoModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambia stato</h5>
                <a href="#" data-dismiss="modal" aria-label="Close" >
                  <img src="./fe/img/icon/close.svg">
                </a>
            </div>
            <div class="modal-body">
                <form action="#" id="statusForm">
                    <input type="hidden" name="template" />    
                    <div class="form-group">
                        <label class="control-label">Template:</label>
                        <span class="output" id="tplText"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Il tuo id:</label>
                        <select id="fid" class="form-control">
                            <option selected value="">Seleziona...</option>
                            <option value="Andrea">Andrea</option>
                            <option value="Beatrice">Beatrice</option>
                            <option value="Davide">Davide</option>
                            <option value="Domenico">Domenico</option>
                            <option value="Fabrizio">Fabrizio</option>
                            <option value="Sara">Sara</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Stato del template:</label>
                        <select id="fstatus" class="form-control">
                            <option selected value="">Collegato</option>
                            <option value="lavorazione">In lavorazione</option>
                            <option value="completato">Completato</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                <button type="button" class="btn btn-primary" id="salvaStato">Salva stato</button>
            </div>
            </div>
        </div>
     </div>
    <!-- Fine modale -->
    <?php buildTree("./librerie_menu_porting.php","old"); ?>
    <!-- Modale statistiche -->
    <div class="modal" tabindex="-1" role="dialog" id="statsModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Statistiche template OLD</h5>
                    <a href="#" data-dismiss="modal" aria-label="Close" >
                    <img src="./fe/img/icon/close.svg">
                    </a>
                </div>
                <div class="modal-body">
                    <table>
                        <tbody>
                            <tr><td>Totali: </td><td style="text-align:right"><strong><?php print $statsTotali; ?></strong></td></tr>
                            <tr><td>Collegati: </td><td style="text-align:right"><strong><?php print $statsCollegati; ?></strong></td></tr>
                            <tr><td>In lavorazione: </td><td style="text-align:right"><strong><?php print $statsLavorazione; ?></strong></td></tr>
                            <tr><td>Completati: </td><td style="text-align:right"><strong><?php print $statsCompletati; ?></strong></td></tr>
                        </tbody>   
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Fine modale statistiche-->
</div>
<script type="text/javascript">
var wScroll = 0;
var cTpl = "";
var cStatus = "collegato";
    $(function(){
        $(".template-tree h3").click(function(){
            $(this).parents(".template-tree-group").toggleClass("opened");
            if(window["localStorage"]) {
                setTimeout(function(){
                    localStorage.setItem("ybTemplateTree",($.map($(".template-tree-group.opened"),function(v,i){
                    return $(v).attr("id");
                    })));
                },10);
            }
        });

        // Stato iniziale
        if(window["localStorage"]) {
            if(localStorage.getItem("ybTemplateTree")){
                $.each(localStorage.getItem("ybTemplateTree").split(","),function(i,v){
                    $("#"+v).addClass("opened");
                });
            }
        }

        // salva lo stato di scrolling
        if(window["localStorage"]) {
            $(window).on("scroll",function(){
                localStorage.setItem("ybScrollHome",window.scrollY); 
            });
            var scroll = localStorage.getItem("ybScrollHome");
            wScroll = (scroll)? scroll :0 ;
        }
        
        window.scrollTo(0,wScroll);

        // Gestione status old
        $(".dot.dot-enabled").click(function(){
            var dot = $(this);
            cTpl = dot.attr("data-tpl");
            $("#tplText").html(cTpl);
            cStatus = "";
            if (dot.hasClass("lavorazione")) cStatus ="lavorazione";
            if (dot.hasClass("completato")) cStatus = "completato";
            $("#fstatus").val(cStatus);
            $("#cambiaStatoModal").modal("show");
        });

        // Setting dell'id del programmatore di competenza
        if(window["localStorage"]) {
            $("#fid").on("change",function(){
                localStorage.setItem("ybProgId",$(this).val()); 
            });
            $("#fid").val( localStorage.getItem("ybProgId"))
        }   
        $(".template-tree h3 .tips").click(function(e){
            e.stopPropagation();
            $("#statsModal").modal("show");
        })

        // Salvataggio dello status 
        $("#salvaStato").click(function(){
            
            var fData = $("#statusForm");
            // Check del form
            var errors = "";
            if((fData).find("#fid").val() == "") errors += "\n- Inserire un ID valido";
            if((fData).find("#fstatus").val() == "") errors += "\n- Selezionare uno stato per il template che non sia collegato";

            if (errors !="") {
                alert(errors);
            }
            else
            {
                $.ajax({
                    url: "./librerie_status_save.php",
                    method: "POST",
                    data: {
                        "id": $("#fid").val(),
                        "tpl": cTpl,
                        "status": $("#fstatus").val()
                    },
                    dataType: "json",
                    success: function(data) {
                        // Se e' ok ricarica la pagina
                        if (data.esito==="ok") location.href="";
                    }
                })
            }
         });

    });
</script>							