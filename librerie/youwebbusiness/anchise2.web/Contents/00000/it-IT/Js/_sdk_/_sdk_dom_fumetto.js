var sdk;
(function (sdk, $, args) {
    // namespace sdk.dom
    sdk.dom = (function (dom, $, args) {
        // namespace sdk.dom
        dom.fumetto = (function (fumetto, $, args) {
            
            

            var _removeAllHelp = function() {
                if ($("#tooltipHelp").hasClass('popover_active')) {
                    $("a[data-tag-title]")
                        .each(function() {
                            $(this).attr('title', $(this).attr('data-tag-title'));
                        });
                    $("div[id^='popover']")
                        .each(function() {
                            $(this).prev().popover('destroy');
                        });
                    $('#tooltipHelp').removeClass("popover_active");
                }
            };

            var _parsePopover = function(helpId) {
                if ('undefined' !== helpId) {
                    var id = helpId.substr(5);
                    var selidArray = $("[id='" + id + "']:visible");
                    if ($(selidArray).length === 0) {
                        return false;
                    }

                    helpId = "#" + helpId;
                    var title = $(helpId).find('.popover-title').text();
                    var content = $(helpId).find('.popover-content').html();
                    var placement = $(helpId).attr('class');
                    var selid = selidArray[0];

                    var originalTitle = "";
                    if ($(selid).is('a')) {
                        originalTitle = $(selid).attr("title");
                    }

                    $(selid)
                        .attr("data-toggle", "popover")
                        .attr("title", title)
                        .attr("data-html", "true")
                        .attr("data-content", content)
                        .attr("data-placement", placement)
                        .attr("container", "body")
                        .attr("data-animation", "fade")
                        .attr("data-tag-title", originalTitle);

                    $(".popover-content").addClass("clearfix");
                    $(selid)
                        .popover({
                            template:
                                '<div class="popover fumetto" role="tooltip"><div class="arrow fumetto"></div><h3 class="popover-title fumetto"></h3><div class="popover-content fumetto"></div></div>'
                        })
                        .popover("show");
                }
            };


            var _init = function () {

                sdk.utils.log.debugMessage("fumetto initialized");

                    if ($("#tooltipHelp").hasClass('popover_active')) {
                        _removeAllHelp();
                        return false;
                    }

                    $('#tooltipHelp').addClass("popover_active");

                    $("#fumettoRepository > div").each(function () {
                        _parsePopover($(this).attr('id'));
                    });
                    $("#fumettoRepositoryMenu > div").each(function () {
                        _parsePopover($(this).attr('id'));
                    });
                


                $("body").click(function (event) {
                    try {
                        if (event.target.id === "tooltipHelp") return;
                        if ($(event.target).closest('#tooltipHelp').length) return;

                        _removeAllHelp();
                    } catch (err) {
                        sdk.utils.log.errorException("fumetto error init", err);
                    }
                });

                $(window).resize(function () {
                    try {
                        _removeAllHelp();
                    } catch (err) {
                        sdk.utils.log.errorException("fumetto error resize", err);
                    }
                });
            }

            fumetto["init"] = _init;


            return fumetto;
        })(dom.fumetto || {}, $, args.fumetto || {});
        // namespace sdk.dom
        return dom;
    })(sdk.dom|| {}, $, args.dom || {});
    // end namespace sdk.core
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
