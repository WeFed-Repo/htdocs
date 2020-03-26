<?php
	$pagTit = $_GET["pagTit"];
	$pagCont = $_GET["pagCont"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<div id="divHelp">
	<section>
		<?php virtual ("/template/modaleCont_".$pagCont.".php") ;?>
	</section>
	<section>
		<div class="row">
			<div class="col-xs-12 ">
				<input type="button" name="chiudi" value="Chiudi" onclick="javascript:CloseHelp();" class="btn  btn-primary pull-right" alt="Chiudi">
			</div>
		</div>
	</section>
</div>
