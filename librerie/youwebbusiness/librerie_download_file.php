<?php
    header("content-type: application/json; charset=utf-8");

    // Variabili locali
    $localroot = "http://librerie.wefed.local/";
    $remoteroot = "https://test.tecmarket.it/";

    // Inizializzazioni
    $esito = "ok";
    $msg = "scaricato";

    $localurl = $_POST["localurl"];

    // Scompone l'url
    $url = pathinfo($localurl);

    // Path
    $filepath = str_replace($localroot,"",$url["dirname"]);

    // Scarica il file

    // Crea l'eventuale alberatura per il file
    if (!file_exists($filepath)) {
        mkdir($filepath, 0755, true);
    }
    if (!file_exists($filepath.$url["filename"])) {
        $file = file_get_contents(str_replace($localroot,$remoteroot,$localurl));
        if(!$file) {
            $esito = "ko";
            $msg = "Il file non e' raggiungibile";
        }
        else
        {
            $esito = (file_put_contents($filepath.$url["filename"],$file))? "ok" : "ko";
        }
    }
    else
    {
        $esito = "ok";
        $msg = "File esistente";
    }
    
?>{
    "esito": "<?php print $esito; ?>",
    "msg": "<?php print $msg;?>",
    "localfilename": "<?php print $localurl; ?>",
    "var": "<?php print $filepath;?>"
}