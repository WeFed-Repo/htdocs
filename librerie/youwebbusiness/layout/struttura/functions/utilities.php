<?php  

function listFolderFiles($dir,$arr){
    $ffs = scandir($dir);
    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);
    if (count($ffs) < 1) return;
    foreach($ffs as $entry){
        $format = '.svg';
            if(is_dir($dir.'/'.$entry)) { 
                $arr = listFolderFiles($dir.'/'.$entry,$arr);
            } else {
                if( substr($entry, 0, 1)!='.'  && substr($entry, 0, 1)!='_'  && substr($entry, -( strlen($format) ) ) === $format  ) {
                    $arr[] = array('dir'=>$dir,'entry'=>$entry);
                }
            }
    }
    return $arr;
}

?>