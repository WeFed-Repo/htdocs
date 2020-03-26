/* INIZIALIZZAZIONE TOOLBOX */
$(function(){
	

	// Stato iniziale toolbox
	if (wStore.read("toolboxStatus") != "closed") {
		$(".toolbox").addClass("opened")
	}

	// Toggle toolbox
	$("#tools .toolbox-toggle").click(function(){
		var tb =$(this).parents(".toolbox");
		if(tb.hasClass("opened")) {
			wStore.write("toolboxStatus","closed");
			tb.removeClass("opened");
		}
		else
		{
			wStore.write("toolboxStatus","opened");
			tb.addClass("opened");
		}
		
		
	});

	// Click sugli elementi 
	$("#tools .tool-btn").click(function(){
		var tbtn = $(this);
		if (tbtn.hasClass("virtass")) {
			// Assistente virtuale
			vaOpen();
		}
		tbtn.addClass("active");
	});

});

/* INIZIALIZZAZIONE CHAT eGAIN */
$(function() {
	// Inserisce il bottone chat dinamicamente
	/*
	$("#chatBtn").append(
		$("<a>").addClass("tool-btn chat").append(
				$("<span>").addClass("tool-icon"),
				$("<span>").html("Chatta con un operatore")
			)
		);
*/
});