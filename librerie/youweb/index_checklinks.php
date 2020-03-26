<?php
	$larr = $_POST["larr"];
	$destarr = array();

	foreach ($larr as $value) {

		if (!file_exists ("./template/tpl_priv_".$value.".php" ))
			{
				array_push ($destarr ,$value);
			}

	}

?>
{
	"esito": "ok",
	"notfound" : ["<?php echo join('","',$destarr); ?>"]
}