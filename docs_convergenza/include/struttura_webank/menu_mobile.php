<!-- ESEMPIO MENU STATICO MOBILE -->
<div id="mobileMenu" style="">
    <div id="mobileDetailTree">
        
   </div>
   <!-- Menu secondo livello -->
   <ul id="liv2mobile">
        

        <?php
        foreach($menu as $k1=>$l1) {
            
            if (!$l1["hidden-nav"]) {
                $liv1key = getId($l1["nome"]);
                $liv1html = ($l1["html"])? "&html=".$l1["html"] : "";
                $liv1url = ($l1["tpl"])? "/template/strutt_".$site.".php?tpl=".$l1["tpl"].$liv1html."&liv1=".$liv1key : "#";
                ?>
                <li <?php if($liv1 == $liv1key) print "class='selected'" ?>><a role="menuitem"><i class="icon icon-<?php print(str_replace("_","",$liv1key)) ?>"></i><span><?php print($l1["nome"]); ?></span></a>
                    <div class="liv3mobile">
                        <a href="#" class="back"><i class="icon icon-arrow_left"></i><span>Menu / <?php print($l1["nome"]); ?></span></a>
                        <a class="fplink <?php if($liv1key !== "my_home") print("hidden-xs"); ?>" href="<?php print $liv1url; ?>">Vista generale <?php print($l1["nome"]); ?></a>
                        <?php
                        if($l1["voices"]) {
                            ?>
                            <ul role="menu">
                            <?php
                                foreach($l1["voices"] as $key2=>$l2) {
                            
                                    $liv2key = getId($l2["nome"]);
                                    $liv2html = ($l2["html"])? "&html=".$l2["html"] : "";
                                    $liv2linkname = ($l2["tpl"])? "<a  role='menuitem' href=\"/template/strutt_".$site.".php?tpl=".$l2["tpl"].$liv2html."&liv1=".$liv1key."&liv2=".$liv2key."\">".$l2["nome"]."</a>" : "<span>".$l2["nome"]."</span>";
                                    ?>
                                    <li><?php print $liv2linkname ?>
                                        <?php
                                            if ($l2["voices"]) {
                                                ?>
                                                    <ul>
                                                        <?php
                                                        foreach($l2["voices"] as $key3=>$l3) {
                            
                                                            $liv3key = getId($l3["nome"]);
                                                            $liv3html = ($l3["html"])? "&html=".$l2["html"] : "";
                                                            $liv3linkname = ($l3["tpl"])? "<a role='menuitem' href=\"/template/strutt_".$site.".php?tpl=".$l3["tpl"].$liv2html."&liv1=".$liv1key."&liv2=".$liv2key."&liv3=".$liv3key."\">".$l3["nome"]."</a>" : "<span>".$l3["nome"]."</span>";
                                                            ?>
                                                            <li <?php if($liv3 == $liv3key) print "class='selected'" ?> ><?php print $liv3linkname ?></li>
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
                        <?php } ?>
                        </div>
                    <?php
                    
                }
            }            
         ?>
   
   </ul>
</div>
<!-- FINE MENU STATICO MOBILE -->