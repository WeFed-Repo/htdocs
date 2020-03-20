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
				<li class="toolbtn"><a href="javascript:;" title="Assistente virtuale" class="icon" id="toolbtnpaolo" data-toolid="virtAss"><img src="/WB/fe/img/priv_tool_paolo.png"></a></li>
				<li class="toolbtn"><a href="#" title="Servizio clienti" class="icon icon-helpcenter" ></a></li>
				<span id="vvcButton"></span>
				<li class="toolbtn"><a href="javascript:;" title="Webank ti richiama" class="icon icon-prenota" id="toolCmbBtn" data-toolid="tool2"></a></li>
				<li class="toolbtn"><a href="#" title="Scrivici" class="icon icon-scrivici"></a></li>
				<!-- <li class="toolbtn"><a href="javascript:;" title="Appuntamento in agenzia" class="icon icon-appuntamento" id="toolAppuntamentoBtn" data-toolid="tool9"></a></li>-->
			</ul>

		</div>
	</div>
<!-- FINE TOOLBOX -->

