<img src="/img/ret/logo_print.gif" class="printlogo" alt=""/>
<?php	
	if ($bank != "webank")
	{
?>	
	<div id="headercontainer">
		<div class="tophead">
			<img alt="MyBank" class="logoMybank" src="/wscmn/img/ret/logo_mybank.png">
			<div class="header_ctr">
				<div  class="nome_header">Pierfrancesco Rossini</div>
			</div>
		</div>
	</div>
	
	
<?php
	}
?>
<div id="header"> 
	<!-- BLOCCO TESTATA -->
<?php	
	if ($bank == "webank" )
	{
?>	
	
	<div id="headnero"> 
	    <div id="ctnloghi">
			<img src="/img/ret/logo_webank2.gif" usemap="#logoimg" border="0" alt="Webank.it" />
		</div>
		<div class="header_ctr">
			<div class="nome_header">Benvenuto, Pierfrancesco Rossini</div>
		</div>
		<img style="float:left;margin-top:17px;" alt="" src="/wscmn/img/header_pubblico_right_mybank.png" class="logoMyBank flRight">
		<br class="clear" />
    </div>
<?php
	}
?>	
	
	<!-- FINE BLOCCO TESTATA -->
</div>