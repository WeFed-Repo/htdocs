<?php

$datadelta = $_POST["datadelta"];
$changelist = $_POST["changelist"];

// Calcolo della data per il delta
$datecheck = strtotime(substr($datadelta,0,4)."-".substr($datadelta,4,2)."-".substr($datadelta,6,2));


$filelogger = array();
$datelog = "";

function deleteDir($dirPath) {
	if (is_dir($dirPath)) {
		$objects = scandir($dirPath);
		foreach ($objects as $object) {
			if ($object != "." && $object !="..") {
				if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
					deleteDir($dirPath . DIRECTORY_SEPARATOR . $object);
				} else {
					unlink($dirPath . DIRECTORY_SEPARATOR . $object);
				}
			}
		}
	reset($objects);
	rmdir($dirPath);
	}
}

function recurse_copy($src,$dst) { 
	global $filelogger;
	global $datelog;
	global $datecheck;
	$dir = opendir($src); 
	@mkdir($dst); 
	while(false !== ( $file = readdir($dir)) ) { 
		if (( $file != '.' ) && ( $file != '..' )) { 
			if ( is_dir($src . '/' . $file) ) { 
				recurse_copy($src . '/' . $file,$dst . '/' . $file); 
			} 
			else { 
				if(filemtime($src . '/' . $file) >= $datecheck) array_push($filelogger,$src . '/' . $file);
				copy($src . '/' . $file,$dst . '/' . $file); 
			} 
		} 
	} 
	closedir($dir); 
} 


// Elimina eventuale materiale preesistente
deleteDir("html_statico");
mkdir("html_statico");

// Copia tutte le cartelle con il materiale necessario (attinge dal JSON di configurazione)
// Cartelle di "base"
recurse_copy("librerie","html_statico/librerie");
recurse_copy("fe","html_statico/fe");

// Copia tutte le cartelle del materiale OLD (attingendo dal JSON)
/*
$oldfolders = json_decode(file_get_contents("./librerie_path_resources_porting.json"),true);
foreach ($oldfolders as $id=>$value) {
	recurse_copy($value["basefolder"],"html_statico/".$value["basefolder"]);
}
*/

// Scrittura changelog
unlink("changelog.html");
$clhtml = file_get_contents("cl_template.html");
// Formatta la changelist


$clarr= explode("\n",$changelist);


// Replacements
$clhtml = str_replace("[*FILENAME*]", date("Ymd"), $clhtml);
$clhtml = str_replace("[*DELTADATE*]", date("d/m/Y",$datecheck), $clhtml);
$clhtml = str_replace("[*CHANGELIST*]", "<li>".implode("</li><li>",$clarr)."</li>", $clhtml);
$clhtml = str_replace("[*FILELIST*]", implode("</br>", $filelogger), $clhtml);

file_put_contents("changelog.html", $clhtml);

// Salva la configurazione nel json
$conf = [];

if (file_exists("./crono_statico.json") ) {
	if (!empty(json_decode(file_get_contents("./crono_statico.json")))) { $conf = json_decode(file_get_contents("./crono_statico.json"),TRUE);}
}
	// Assembla l'oggetto per il json di configurazione
$cnode = Array(
	"datapacchetto"=>date("Ymd"),
	"datacreazionefull"=>date("d-m-Y h:m:s"),
	"datadelta"=>$datadelta,
	"changelist"=>$changelist
);

array_push($conf, $cnode);
file_put_contents("crono_statico.json", json_encode($conf));

?>{
	"esito":"ok",
	"datadelta": "<?php print $datadelta; ?>",
	"filelist":  [ "<?php print implode("\",\"", $filelogger); ?>"],
	"datelog": "<?php print $datelog; ?>"
}