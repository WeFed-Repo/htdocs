<?php
$fontbasepath = "HT/fe/font/";
$destfile = "HT/fe/css/youweb_skin/fonts/_icon_remap.less";

// Apre il JSON di remapping WB->YOU
$json_remap = file_get_contents($fontbasepath."icon_porting.json");
$remap = json_decode($json_remap,true);


// Apre il JSON selection.js con le icone di You
$json_selection = file_get_contents($fontbasepath."selection.json");
$ywi = json_decode($json_selection,true);

// Statistiche
$ported =0;

// Crea il contenuto del file
foreach($ywi["icons"] as $key=>$value) {
    // Se esiste il corrispettivo "nuovo" lo scrive
    if(!empty($remap[$value["properties"]["name"]])) {
       $fcont = $fcont."\n.icon-".$remap[$value["properties"]["name"]].":before {content:\"\\".strval(dechex($value["properties"]["code"]))."\"}";
       $ported +=1;
    }
}

// Scrive _icon_remap.less
$esito = (file_put_contents($destfile,$fcont))? "ok" : "ko";

?>
{
    "esito": "<?php print $esito; ?>",
    "ported": "<?php print $ported; ?>"
}