<?php header("content-type: application/json; charset=utf-8"); ?>
{"esito":"<?php print (rand(1,10)>=5)? "ok":"ko"; ?>"}