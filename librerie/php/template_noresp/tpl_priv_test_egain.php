<script type="text/javascript">
$(function(){
	loadEgain = function() {
		if ($("#toolChatBtn").length) {
			$.getScript("/wscmn/js/tool_chat.js",function(){
				defineEntryPoint(objInfoChat.thisEntryPoint); //AUTOMATICO DAL PATH?
				setTimerCheckVisibility(30000, 'toolChatBtn', 1);				
			});
		}
	}();

	/*
	function btnIsAgentAvailable(){
		alert(isAgentAvailable());
	}
	*/
});

</script>
<h1>Test chat eGain</h1>
<!-- CONFIGURAZIONE OGGETTO CHAT -->
<script>
	var objInfoChat = {
		nome : "Marco",
		email : "ba@libero.it",
		telefono : "3346777751",
		tipoRichiesta : "Assistenza Tecnica",
		ndg : "987654321",
		tipoCliente : "prospect",
		cbk : "CmN",
		device : "PC",
		data : "20151001",
		time : "124000",
		uniqueID : "99999",
		thisEntryPoint : "1005"
	};
</script>
<!-- FINE CONFIGURAZIONE -->
<div id="toolChatBtn"></div>
