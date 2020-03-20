/* Dichiarazioni  globali */
var bd, scrollpx;

// Formati per datepicker 
	$.datepicker.setDefaults({
		showOn: "both",
		dayNames: ["Domenica","Lunedi'","Martedi'","Mercoledi'","Giovedi'","Venerdi'","Sabato"],
		dayNamesMin: ["D", "L", "M", "M", "G", "V", "S"],
		monthNames:  ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
		monthNamesShort:  ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic"],
		dateFormat: "dd/mm/yy",
		currentText: "Oggi",
		buttonText: "",
		beforeShowDay: $.datepicker.noWeekends
	});

/* Inizializzazioni */
$(function(){

	/* inizializzazione oggetti "generici" */
	bd = $("body"),
	scrollpx = bd.scrollTop();



	/* Scrolling header su desktop */
	$(window).on("load scroll resize",function(){
		var st = $(window).scrollTop();
		if (st>70) {
			if(scrollpx<st) {
				if (!bd.hasClass("scroll-down")) bd.removeClass("scroll-up").addClass("scroll-down");
				
			}
			else
			{
				if (!bd.hasClass("scroll-up")) bd.removeClass("scroll-down").addClass("scroll-up");
			}
			
		}
		else {
			bd.removeClass("scroll-up scroll-down");
		}
			
		scrollpx = st;
	});

	/* Toggling del menu */
	$("#menutoggle").click(function(){
		bd.toggleClass("menu-opened");
	});

	/* Emulazione toggling voci menu */
	$("#menu nav .toggle").click(function(){

		/* chiude eventuali ul aperti */
		$("#menu nav li.opened").not($(this).parents("li")).removeClass("opened").find("ul").slideUp();

		var li = $(this).parents("li").toggleClass("opened");
		li.find("ul").slideToggle();		
	});

});