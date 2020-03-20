function showAllHelp() {
    if ($("#tooltipHelp").hasClass('popover_active')) {
        //	 	$("div[id^='popover']").each(function(){
        //			$(this).prev().popover('destroy');
        //		});
        //		$('#tooltipHelp').removeClass("popover_active");
        //
        removeAllHelp();
        return false;
    }
    $('#tooltipHelp').addClass("popover_active");
    $("#fumettoRepository > div").each(function () {
        parsePopover($(this).attr('id'));
    });
    $("#fumettoRepositoryMenu > div").each(function () {
        parsePopover($(this).attr('id'));
    });
}

function removeAllHelp() {
    if ($("#tooltipHelp").hasClass('popover_active')) {
        $("a[data-tag-title]").each(function () {
            $(this).attr('title', $(this).attr('data-tag-title'));
        });
        $("div[id^='popover']").each(function () {
            $(this).prev().popover('destroy');
        });
        $('#tooltipHelp').removeClass("popover_active");
    }
}

function parsePopover(help_id) {
    if ('undefined' != help_id) {
        var id = help_id.substr(5);
        var selidArray = $("[id='" + id + "']:visible");
        if ($(selidArray).length === 0) {
            return false;
        }

        var help_id = "#" + help_id;
        var title = $(help_id).find('.popover-title').text();
        var content = $(help_id).find('.popover-content').html();
        var placement = $(help_id).attr('class');
        var selid = selidArray[0];

        var original_title = "";
        if ($(selid).is('a')) {
            original_title = $(selid).attr("title");
        }

        $(selid).attr("data-toggle", "popover")
            .attr("title", title)
            .attr("data-html", "true")
            .attr("data-content", content)
            .attr("data-placement", placement)
            .attr("container", "body")
            .attr("data-animation", "fade")
            .attr("data-tag-title", original_title);

        $(".popover-content").addClass("clearfix");
        //$(selid).popover("show");

        $(selid).popover({ template: '<div class="popover fumetto" role="tooltip"><div class="arrow fumetto"></div><h3 class="popover-title fumetto"></h3><div class="popover-content fumetto"></div></div>' }).popover("show");
    }
}

// Sonia 15/07/2016: funzioni per la chiusura dei fumetti al click o al resize (messi nella default layout)
//(function($) {

//    $("body").click(function(event) {
//        try {
//            if (event.target.id == "tooltipHelp") return;
//            if ($(event.target).closest('#tooltipHelp').length) return;

//            removeAllHelp();
//        } catch (err) {
//        }
//    });

//    $(window).resize(function() {
//        try {
//            removeAllHelp();
//        } catch (err) {
//        }
//    });
//});

