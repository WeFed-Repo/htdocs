<?php
header('Content-Type: application/json');
?>
{
    "dati": [<?php 
    $today = rand(12,18);
    
    for ($x=1;$x<=31;$x++){ 
        if ($x>1) print ",";  
        ?>
        {
            "giorno":<?php print $x; ?>,
            "entrate": <?php print rand(0,250000)/100; ?>,
            "uscite":<?php print rand(0,250000)/100; ?>,
            "classi": "<?php print($x== $today? "selected": "")." ".($x > $today ? "previsione": ""); ?>"
        }
    <?php 
    }
?>]
}