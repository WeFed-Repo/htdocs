<?php
	$pagTit = $_GET["pagTit"];
	$pagCont = $_GET["pagCont"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div id="divHelp" class="clearfix">
	<div class="riquadro">
		<?php if($pagTit) {;?>
		<h1>
			<div class="flag hidden-xxs info">&nbsp;</div>
			<?php print $pagTit;?>
		</h1>
		<?php }?>
		<?php virtual ("/template/modaleCont_".$pagCont.".php") ;?>

	</div>
	<div class="col-xs-12 ">
		<div class="pull-right">
			<input type="button" name="chiudi" value="Chiudi" onclick="javascript:CloseHelp();" class="btn  btn-primary" alt="Chiudi">
		</div>
	</div>
</div>
