<img src="/img/ret/logo_print.gif" class="printlogo" alt=""/>
<?php	
if ($bank != "webank" && $bank != "bpm") {
?>	
	<div id="headercontainer">
		<div class="tophead">
			<div class="header_ctr">
				<div  class="nome_header">Pierfrancesco Rossini</div>
			</div>
		</div>
	</div>
	
	
<?php
}
?>
<?php	
if ($bank == "bpm") {
?>	
	<div id="headercontainerFlat">
		<img src="/img/logo_print_new.gif" class="printlogoNew" alt=""/>
		<img src="/img/logo_bpm_flat2.png"  class="logo" alt="Banca Popolare di Milano"/>
		<img src="/wscmn/img/ret/logo_mybank.png" class="logoMybank" alt="MyBank">
		<div class="headerFloat">
			<ul class="headerRightTop">
				<li>
					<span><i class="icon-phone"></i>800 880 088</span>
				</li>
			</ul>
			<br class="clear" />
			<ul class="headerRightBottom">
				<li class="nameConto">
					<span>Massimiliano Rossi Vincenzi</span>
				</li>
			</ul>
		</div>
	</div>
	
	
<?php
}
?>
	
	<!-- FINE BLOCCO TESTATA -->
</div>