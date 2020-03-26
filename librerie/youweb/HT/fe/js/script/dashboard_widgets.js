// Inizializzazioni
$(function(){
    // Automazioni dei widget
    $(".dashboard-widgets .titlebar-console a").click(function(){
        var bt = $(this);
        var wdg = bt.parents(".dbwidget");
        wdg.find(".dettagli").hide();
        wdg.find(".titlebar-console .selected").removeClass("selected");
        bt.addClass("selected");
        wdg.find(".titlebar-console input").val(bt.attr("data-vista"));
    });
    
});