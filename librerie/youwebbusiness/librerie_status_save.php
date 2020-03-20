<?php

    $tpl = $_POST["tpl"];
    $id = $_POST["id"];
    $status = $_POST["status"];

    // Apre il file corrente per editarlo con PHP
    $oldstatus = json_decode(file_get_contents("./librerie_menu_old_status.json"),true);

    // Modifica o inserisce il nuovo nodo
    $oldstatus[$tpl]["id"] = $id;
    $oldstatus[$tpl]["status"] = $status;

    // Risalva il JSON
    $newstatus = json_encode($oldstatus);
    file_put_contents ("./librerie_menu_old_status.json",$newstatus);

?>
{
    "esito": "ok"
}