<ul class="liv01">
    <?php
    $navmenu = json_decode(file_get_contents($menuurl),true);
    $strutt = ($tipotemplate==="old") ? "_old": "";
    foreach ($navmenu as $lev1voice) {
        ?>
        <li class="liv01">
            <?php if(!isset($lev1voice["tpl"])) { ?>
                <span class="<?php print ($lev1voice["voices"])? "": "disabled" ?>"><?php print ($lev1voice["title"]); ?></span>
                <?php
                if (isset($lev1voice["voices"])) {
                    ?>
                    <ul class="liv02">
                    <?php foreach($lev1voice["voices"] as $lev2voice) { ?>
                        <li class="liv02">
                            <?php if (isset($lev2voice["tpl"])) {
                                ?>
                                <a <?php print ($tipotemplate==="old") ? "data-noexport=\"true\"": "";?> href="strutt_priv<?php print $strutt; ?>.php?tpl=<?php print $lev2voice["tpl"];?><?php if($tipotemplate==="old") {?>&cantiere=<?php print (isset($lev2voice["cantiere"])) ? $lev2voice["cantiere"] : "" ; ?><?php } ?>"><?php print ($lev2voice["title"]); ?></a>
                                <?php
                            }
                            else
                            {
                                ?>
                                <span class="disabled"><?php print ($lev2voice["title"]); ?></span>
                                <?php
                            }
                            if(isset($lev2voice["voices"])) {
                                ?><ul class="liv03">
                                <?php
                                foreach($lev2voice["voices"] as $lev3voice) { ?>
                                <li class="liv03">
                                    <?php if (isset($lev3voice["tpl"])) {
                                        ?>
                                        <a <?php print ($tipotemplate==="old") ? "data-noexport=\"true\"": "";?> href="strutt_priv<?php print $strutt; ?>.php?tpl=<?php print $lev3voice["tpl"];?><?php if($tipotemplate==="old") {?>&cantiere=<?php print (isset($lev3voice["cantiere"])) ? $lev3voice["cantiere"] : "" ; ?><?php } ?>"><?php print ($lev3voice["title"]); ?></a>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <span class="disabled"><?php print ($lev3voice["title"]); ?></span>
                                        <?php
                                    }
                                    
                                        if(isset($lev3voice["voices"])) {
                                        ?><ul class="liv04">
                                            <?php
                                            foreach($lev3voice["voices"] as $lev4voice) { ?>
                                            <li class="liv04">
                                                <?php 
                                                    if (isset($lev4voice["tpl"])) {
                                                    ?>
                                                    <a <?php print ($tipotemplate==="old") ? "data-noexport=\"true\"": "";?> href="strutt_priv<?php print $strutt; ?>.php?tpl=<?php print $lev4voice["tpl"];?><?php if($tipotemplate==="old") {?>&cantiere=<?php print (isset($lev4voice["cantiere"])) ? $lev4voice["cantiere"] : "" ; ?><?php } ?>"><?php print ($lev4voice["title"]); ?></a>
                                                    <?php 
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <span class="disabled"><?php print ($lev4voice["title"]); ?></span>
                                                        <?php
                                                    }    
                                                    if(isset($lev4voice["voices"])) {
                                                        ?><ul  class="liv05">
                                                            <?php
                                                            foreach($lev4voice["voices"] as $lev5voice) { ?>
                                                                <li>
                                                                    <?php 
                                                                        if (isset($lev5voice["tpl"])) 
                                                                        {
                                                                        ?>
                                                                        <a <?php print ($tipotemplate==="old") ? "data-noexport=\"true\"": "";?> href="strutt_priv<?php print $strutt; ?>.php?tpl=<?php print $lev5voice["tpl"];?><?php if($tipotemplate==="old") {?>&cantiere=<?php print (isset($lev5voice["cantiere"])) ? $lev5voice["cantiere"] : "" ; ?><?php } ?>"><?php print ($lev5voice["title"]); ?></a>
                                                                        <?php 
                                                                        }
                                                                        else
                                                                        {
                                                                            ?>
                                                                            <span class="disabled"><?php print ($lev5voice["title"]); ?></span>
                                                                            <?php
                                                                        }
                                                                        if(isset($lev5voice["voices"])) {
                                                                            ?><ul class="liv06">
                                                                                <?php
                                                                                foreach($lev5voice["voices"] as $lev6voice) { ?>
                                                                                    <li>
                                                                                        <?php 
                                                                                            if (isset($lev6voice["tpl"])) 
                                                                                            {
                                                                                            ?>
                                                                                                <a <?php print ($tipotemplate==="old") ? "data-noexport=\"true\"": "";?> href="strutt_priv<?php print $strutt; ?>.php?tpl=<?php print $lev6voice["tpl"];?><?php if($tipotemplate==="old") {?>&cantiere=<?php print (isset($lev6voice["cantiere"])) ? $lev5voice["cantiere"] : "" ; ?><?php } ?>"><?php print ($lev6voice["title"]); ?></a>
                                                                                            <?php 
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                                ?>
                                                                                                <span class="disabled"><?php print ($lev6voice["title"]); ?></span>
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
                } ?>


                <?php
                }
            else
                {
                ?>
                    <a <?php print ($tipotemplate==="old") ? "data-noexport=\"true\"": "";?> href="strutt_priv<?php print $strutt; ?>.php?tpl=<?php print $lev1voice["tpl"];?>"><?php print ($lev1voice["title"]); ?></a>
                <?php
            }
            ?>
        </li>
        <?php
    };
    ?>
</ul>