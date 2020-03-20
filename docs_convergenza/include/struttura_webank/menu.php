<nav role="navigation">
            <div class="wrapper">
                <!-- MENU DESKTOP -->
                <!-- PRIMO LIVELLO -->
                <ul class="level1" role="menubar" aria-hidden="false">
                    <?php

                     foreach($menu as $key1=>$l1) {
                            
                        if (!$l1["hidden-nav"]) {

                            $liv1opener = ($l1["voices"])? "<a class=\"opener\"><span class='plus'>+</span><span class='min'>&minus;</span></a>" : "<span class='dot'></span>"; 
                            $liv1class = $liv1class.(($l1["hidden-nav"])?  " hidden-nav" : "");
                            $liv1key = getId($l1["nome"]);
                            $liv1html = ($l1["html"])? "&html=".$l1["html"] : "";
                            $liv1url = ($l1["tpl"])? "/template/strutt_".$site.".php?tpl=".$l1["tpl"]."&liv1=".$liv1key  : "#";
                            
                            /* Voce selezionata */
                            if($liv1 === $liv1key) {
                                $menu2lev = $l1["voices"];
                            }
                            ?>
                            <li class="<?php if($liv1 === $liv1key) { ?>selected<?php } ?> <?php if($l1["new"]) print "new"; ?>"><a href="<?php print( $liv1url); ?>" title="<?php print($l1["nome"]); ?>"><span class="voice"><?php print($l1["nome"]); ?></span></a><?php if($l1["new"]) { ?><span class="new">New</span><?php } ?></li>
                            <?php
                        }
                    }
                    ?>
                </ul>
                <!-- FINE PRIMO LIVELLO -->

                <!-- SECONDO LIVELLO -->
                <ul class="level2" role="menubar" aria-hidden="false">

                    <?php
                    if ($menu2lev) {
                        foreach($menu2lev as $k2=>$l2) {
                             $liv2key = getId($l2["nome"]);
                             $liv2html = ($l2["html"])? "&html=".$l2["html"] : "";
                             $liv2url = ($l2["tpl"])? "/template/strutt_".$site.".php?tpl=".$l2["tpl"]."&liv1=".$liv1."&liv2=".$liv2key.$liv2html  : "#";
                            ?>
                             <li class="<?php if($liv2 === $liv2key) { ?>selected<?php } ?>">
                                <a href="<?php print $liv2url;?>" aria-expanded="false" aria-haspopup="true" id="level2_<?php print $k2; ?>" aria-owns="level2_0_sub" aria-hidden="false" aria-controls="level2_0_sub"><span class="voice"><?php print $l2["nome"]; ?></span></a>
                                <?php 
                                if($l2["voices"]) {
                                ?>
                                <div class="tlWrap">
                                    <!-- TERZO LIVELLO -->
                                    <ul id="level2_<?php print $k2; ?>_sub" aria-labelledby="level2_<?php print $k2; ?>" aria-expanded="false">
                                        <?php
                                        foreach($l2["voices"] as $k3=>$l3) {
                                            $liv3key = getId($l3["nome"]);
                                            $liv3html = ($l3["html"])? "&html=".$l3["html"] : "";
                                            $liv3url = ($l3["tpl"])? "/template/strutt_".$site.".php?tpl=".$l3["tpl"]."&liv1=".$liv1."&liv2=".$liv2key."&liv3=".$liv3key.$liv3html  : "#";

                                            /* Se una voce non ha un template punta al primo della lista (se esiste)*/
                                            if ($liv3url === "#" && $l3["voices"] && $l3["voices"][0]["tpl"]) {

                                                $liv3url = ($l3["voices"][0]["tpl"])? "/template/strutt_".$site.".php?tpl=".$l3["voices"][0]["tpl"]."&liv1=".$liv1."&liv2=".$liv2key."&liv3=".$liv3key."&liv4=".getId($l3["voices"][0]["nome"]).$liv3html : "#";
                                            }

                                            /* Controllo menu spalla*/
                                            if($liv3 === $liv3key && $liv2===$liv2key) {
                                              $menu4nome = $l3["nome"];  
                                              $menu4voices = $l3["voices"];  
                                            } 


                                        ?>
                                        <li class="<?php if($liv3 === $liv3key && $liv2===$liv2key) { ?>selected<?php } ?>"><a href="<?php print($liv3url); ?>" aria-expanded="false" title="<?php print($l3["nome"]); ?>"><span class="voice"><?php print $l3["nome"]; ?></span></a></li>
                                        <?php
                                        }
                                        ?>                                    
                                    </ul>
                                    <!-- FINE TERZO LIVELLO -->
                                </div>
                                <?php
                                }
                                ?>
                            </li>
                            <?php
                        }
                    }
                    ?>
            </div>
        </nav>
