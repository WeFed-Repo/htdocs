<!-- TOOLBOX -->
    
    <!-- TOOLBOX -->
	<div id="toolbox">
		<script src="/WB/fe/js/toolbox.js" type="text/javascript"></script>
		<div id="toolwrap">
			<div id="toolhandle"><a class="btn-icon"><i class="icon icon-ellipsis-h"></i></a></div>
			<div id="toolcontainer">
				<!-- Vari tool -->
				<?php virtual("/include/struttura_webank/tools/assistente_virtuale.php"); ?>
				<?php virtual("/include/struttura_webank/tools/call_me_back.php"); ?>
				<?php /* virtual("/include/struttura_webank/tools/appuntamento_in_agenzia.php"); */ ?>
				<!-- Fine dei vari tool -->
			</div>

			<!-- Pulsantiera -->
			<ul id="toolbtns">
				<li class="toolbtn toolbtns-first"><a href="javascript:;" title="Assistente virtuale" class="icon " id="toolbtnpaolo" data-toolid="virtAss"><img src="/WB/fe/img/priv_tool_paolo.png"> </a></li>
				<li class="toolbtn toolbtns-second"><a href="/WEBWB/wb/content/helpcenterContatti.do" class="icon icon-helpcenter" title="Servizio clienti"></a></li>
				<li class="toolbtn toolbtns-fourth"><a href="/WEBWB/wb/content/contattaci.do" class="icon icon-scrivici" title="Scrivici"></a></li>
			</ul>

		</div>
	</div>
<!-- FINE TOOLBOX -->

