<div id="sx_login_header" class="sx_login_header">
	<div id="sx_login_header_title">
		<a href="javascript:toggleLoginBox();" title="Apri/Chiudi box di login">&nbsp;<img src="/prepagate/img/login_arrow_0.png" id="login-arrow" alt="freccia" /></a>
	</div>
</div>
<div id="sx_login_body_container" style="display:none">
	<div id="sx_login_body" class="sx_login_body">
		<div id="sx_login_body_padding" class="sx_login_body_padding"><br class="IELoginSpaceFixer"/>
<!-- form -->
	    <!form name="loginForm" action="index_priv.php" method="post" onsubmit="return validateLoginForm(this)">
	        <?php 
					  virtual("/librerie/include/sgcr/login.php");
				  ?>
	         <?php 
					  virtual("/librerie/include/sgcr/javascript.php");
				  ?>
	    <!/form>
<!-- fine form -->

<!-- link login -->
	    <!--div id="sx_login_body_options" class="sx_login_body_options right">
	        <?php 
						//virtual("/librerie/include/sgcr/login_link.php");
					?>
	    </div-->
<!-- fine link login -->
		</div>
	</div>
</div>
<div id="sx_login_bottom">
	<div id="sx_login_bottom_cx">
		<div id="sx_login_bottom_sx">
			<div id="sx_login_bottom_dx">&nbsp;</div>
		</div>
	</div>
</div>