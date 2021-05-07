<?php

/* Normalizza il nome per intercettare la chiave corrispondente al livello */
function getId($name) {

    $id = strtolower(str_replace(" ","_",$name));
    return $id;
}

$menusite = ($site === "aletti")? "youweb" : $site;

$jsonstr = file_get_contents("include/menu_".$menusite.".json");
$menu = json_decode($jsonstr,true);

?>
<h2 class="template-title">Template<a class="full-opener" id="fullTemplateOpener"><span class='plus'>+</span><span class='min'>&minus;</span></a></h2>
<ul id="tproot" class="template template-root loading">
    <?php

        // Variabili globali
        $lavTpl = "<div class='badge-wip'><span>In lavorazione</span></div>";
       
        foreach($menu as $key1=>$liv1) {
            $liv1aletti = ($liv1["aletti"])? "" : "aletti-hidden";
            $liv1opener = ($liv1["voices"])? "<a class=\"opener\"><span class='plus'>+</span><span class='min'>&minus;</span></a>" : "<span class='dot'></span>"; 
            $liv1class = ($liv1["voices"])? "has-opener": ""; 
            $liv1class = $liv1class.(($liv1["hidden-nav"])?  " hidden-nav" : "");
            $liv1key = getId($liv1["nome"]);
            $liv1html = ($liv1["html"])? "&html=".$liv1["html"] : "";
            $liv1linkname = ($liv1["tpl"] || $liv1["link"])? "<a href=\"".(($liv1["tpl"]) ? "/template/strutt_".$site.".php?tpl=".$liv1["tpl"].$liv1foreign."&liv1=".$liv1key : $liv1["link"])."\" class=\"pagelink\" target=\"_blank\">".$liv1["nome"]."</a>" : "<span>".$liv1["nome"]."</span>";
            ?>
            <li class="<?php print $liv1class." ".$liv1aletti;?> <?php print $liv1["html"];?>" data-key1="<?php print("$liv1key");?>"><span><?php print $liv1opener.$liv1linkname ;?></span>
            <?php
                if($liv1["voices"]) {
                    ?>
                    <ul>
                        <?php
                            foreach($liv1["voices"] as $key2=>$liv2) {
                            $liv2aletti = ($liv2["aletti"])? "" : "aletti-hidden";
                            $liv2opener = ($liv2["voices"])? "<a class=\"opener ".$liv2aletti."\"><span class='plus'>+</span><span class='min'>&minus;</span></a>" : "<span class='dot".$liv2aletti."'></span>";  
                            $liv2class = ($liv2["voices"])? "has-opener": ""; 

                            $liv2key = getId($liv2["nome"]);
                            $liv2html = ($liv2["html"])? "&html=".$liv2["html"] : "";
                            $liv2linkname = ($liv2["tpl"] || $liv2["link"]) ? "<a href=\"".(($liv2["tpl"] ) ? "/template/strutt_".$site.".php?tpl=".$liv2["tpl"].$liv2html."&liv1=".$liv1key."&liv2=".$liv2key : $liv2["link"] )."\" class=\"pagelink\" target=\"_blank\">".$liv2["nome"]."</a>" : "<span>".$liv2["nome"]."</span>";
                            $liv2lav = ($liv2["inlavorazione"])? $lavTpl : "";
                           
                            ?>
                            <li class="<?php print $liv2class." ".$liv2aletti ;?> <?php print $liv2["html"];?>" data-key2="<?php print("$liv2key");?>"><span><?php print $liv2opener.$liv2linkname.$liv2lav ;?></span>
                            <?php
                                if($liv2["voices"]) {
                                    ?>
                                    <ul>
                                        <?php
                                            foreach($liv2["voices"] as $key3=>$liv3) {
                                            $liv3aletti = ($liv3["aletti"])? "" : "aletti-hidden";
                                            $liv3opener = ($liv3["voices"])? "<a class=\"opener\"><span class='plus'>+</span><span class='min'>&minus;</span></a>" : "<span class='dot'></span>";  
                                            $liv3key = getId($liv3["nome"]);
                                            $liv3class = ($liv3["voices"])? "has-opener": ""; 
                                            $liv3html = ($liv3["html"])? "&html=".$liv3["html"] : "";
                                            $liv3linkname = ($liv3["tpl"] || $liv3["link"])? "<a href=\"".(($liv3["tpl"]) ? "/template/strutt_".$site.".php?tpl=".$liv3["tpl"].$liv3html."&liv1=".$liv1key."&liv2=".$liv2key."&liv3=".$liv3key : $liv3["link"] )."\" class=\"pagelink\" target=\"_blank\">".$liv3["nome"]."</a>" : "<span>".$liv3["nome"]."</span>";
                                            $liv3lav = ($liv3["inlavorazione"])?  $lavTpl : "";
                                            ?>
                                            <li class="<?php print $liv3class." ".$liv3aletti ;?> <?php print $liv3["html"];?>"  data-key3="<?php print("$liv3key");?>"><span><?php print $liv3opener.$liv3linkname.$liv3lav ;?></span>
                                            <?php
                                                if($liv3["voices"]) {
                                                   ?>
                                                    <ul>
                                                        <?php
                                                            foreach($liv3["voices"] as $key4=>$liv4) {
                                                            $liv4aletti = ($liv4["aletti"])? "" : "aletti-hidden";
                                                            $liv4opener = ($liv4["voices"])? "<a class=\"opener\"><span class='plus'>+</span><span class='min'>&minus;</span></a>" : "<span class='dot'></span>";  
                                                            $liv4key = getId($liv4["nome"]);
                                                            $liv4html = ($liv4["html"])? "&html=".$liv4["html"] : "";
                                                            $liv4linkname = ($liv4["tpl"] || $liv4["link"])? "<a href=\"".(($liv4["tpl"]) ? "/template/strutt_".$site.".php?tpl=".$liv4["tpl"].$liv4html."&liv1=".$liv1key."&liv2=".$liv2key."&liv3=".$liv3key."&liv4=".$liv4key : $liv4["link"])."\" class=\"pagelink\" target=\"_blank\">".$liv4["nome"]."</a>" : "<span>".$liv4["nome"]."</span>";
                                                            $liv4lav = ($liv4["inlavorazione"])? $lavTpl : "";
                                                            $skinAletti=  ($liv4["alettistyle"])? "true" : "";
                                                            $liv4linknameAletti = ($liv4["tpl"])? "<a href=\"/template/strutt_".$site.".php?tpl=".$liv4["tpl"].$liv4html."&liv1=".$liv1key."&liv2=".$liv2key."&liv3=".$liv3key."&liv4=".$liv4key."&app_skin_aletti=".$skinAletti."\" class=\"aletti-style\" target=\"_blank\">AL</a>" : "<span>".$liv4["nome"]."</span>";
                                                            $AlettiTpl =  $liv4linknameAletti;
                                                            $liv4Ale=  ($liv4["alettistyle"])? $AlettiTpl : "";
                                                            ?>
                                                            <li class="<?php print $liv4["html"]." ".$liv4aletti;?>"><span><?php print $liv4opener.$liv4linkname.$liv4lav.$liv4Ale ;?></span></li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                    <?php
                                                }
                                            ?>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                    <?php
                                }
                            ?>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                }
            ?>
            </li>
            <?php
        }

    ?>  
</ul>
<script type="text/javascript">
$(function(){

    var saveOpenerStatus = function(){
        if (typeof localStorage != "undefined") {
            var opKey1 = $.map($("*[data-key1].opened"),function(obj){return $(obj).attr("data-key1")}),
                opKey2 = $.map($("*[data-key2].opened"),function(obj){return $(obj).attr("data-key2")}),
                opKey3 = $.map($("*[data-key3].opened"),function(obj){return $(obj).attr("data-key3")});

           localStorage.setItem("libmenu_<?php print $site ?>_key1", opKey1);
           localStorage.setItem("libmenu_<?php print $site ?>_key2", opKey2);
           localStorage.setItem("libmenu_<?php print $site ?>_key3", opKey3);
        }
    }


    $("#tproot .opener").click(function(){
        var bt = $(this);
        bt.closest("li").toggleClass("opened");
        // Salva lo stato delle aperture/chiusure nel session storage
        saveOpenerStatus();
    });

    // Applica lo stato di aperti/chiusi nella sessione
    if(typeof localStorage != "undefined") {

        var setOpened = function(key,arraystring) {
            $.each(arraystring.split(","),function(i,v){
                $("[data-key"+ key +"='"+ v +"']").addClass("opened");
            });
           
        }
        for (x=1;x<=3;x++) { if (localStorage.getItem("libmenu_<?php print $site ?>_key"+x)) setOpened(x,localStorage.getItem("libmenu_<?php print $site ?>_key"+x))};
        
    }
    $("#tproot").removeClass("loading");

    $("#fullTemplateOpener").click(function(){
        var bt = $(this);
        bt.toggleClass("opened");
        if(!bt.hasClass("opened")){
            $("#tproot li.has-opener.opened").removeClass("opened");
        }
        else
        {
            $("#tproot li.has-opener").addClass("opened");
        }
        saveOpenerStatus();

    });
});
</script>