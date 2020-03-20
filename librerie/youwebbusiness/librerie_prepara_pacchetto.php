<?php

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
	$dir = opendir($src); 
	@mkdir($dst); 
	while(false !== ( $file = readdir($dir)) ) { 
		if (( $file != '.' ) && ( $file != '..' )) { 
			if ( is_dir($src . '/' . $file) ) { 
				recurse_copy($src . '/' . $file,$dst . '/' . $file); 
			} 
			else { 
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

?>{"esito":"ok"}