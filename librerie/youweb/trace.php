<?php
$fname = "/etc/httpd/librerie/htdocs/librerie/youweb/template/iplog.txt";
$iplog = fopen($fname, "ab");

fwrite($iplog, "\r\n".$_SERVER['REMOTE_ADDR']);
fclose($iplog);
chmod($fname, 0777) ;
?>