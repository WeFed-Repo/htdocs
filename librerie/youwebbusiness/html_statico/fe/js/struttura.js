$(function(){
	/* inizializzazione oggetti "generici" */
	bd = $("body"),
	scrollpx = bd.scrollTop();

    // MENU

    /* Toggling del menu */
    $("#menutoggle").click(function(){
        bd.toggleClass("menu-opened");
    });
    $("body").click(function(e){
        if($(e.target).is("#menu")) bd.toggleClass("menu-opened");
    });

    /* Emulazione toggling voci menu */
    $("#menu nav .toggle").click(function(){
        /* chiude eventuali ul aperti */
        $("#menu nav li.opened").not($(this).parents("li")).removeClass("opened").find("ul").slideUp();
        var li = $(this).parents("li").toggleClass("opened");
        li.find("ul").slideToggle();
    });

});