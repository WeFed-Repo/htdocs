<h2><?php print $menu4nome; ?></h2>
<?php
    if($menu4voices) {
?>
<ul>
    <?php
    foreach($menu4voices as $k4=>$l4) {
        $liv4key = getId($l4["nome"]);
        $liv4html = ($l4["html"])? "&html=".$l4["html"] : "";
        $liv4url = ($l4["tpl"])? "/template/strutt_".$site.".php?tpl=".$l4["tpl"].$liv4html."&liv1=".$liv1."&liv2=".$liv2."&liv3=".$liv3."&liv4=".$liv4key : "#";
        ?>
        <li class="<?php if($liv4 === $liv4key) print "selected";?>"><a href="<?php print $liv4url;?>"><?php print $l4["nome"];?></a><?php if($liv4===$liv4key) { ?><i class="icon icon-ellipsis-v"></i><?php } ?>
        <?php if($liv4===$liv4key) { ?>
            <ul id="thirdLevelMenu">
                <?php
                foreach($menu4voices as $k4_nested=>$l4_nested) {
                    $liv4key_nested = getId($l4_nested["nome"]);
                    $liv4html_nested = ($l4_nested["html"])? "&html=".$l4_nested["html"] : "";
                    $liv4url_nested = ($l4_nested["tpl"])? "/template/strutt_".$site.".php?tpl=".$l4_nested["tpl"].$liv4html_nested."&liv1=".$liv1."&liv2=".$liv2."&liv3=".$liv3."&liv4=".$liv4key_nested : "#";

                    ?>
                    <li class="<?php if($liv4 === $liv4key_nested) print "selected";?>"><a href="<?php print $liv4url_nested; ?>"><?php print $l4_nested["nome"]; ?></a></li>
                    <?php
                }
            ?>
            </ul>
            <?php
            } ?>
        </li>
        <?php
        }
    ?>
</ul>

<?php
}
?>