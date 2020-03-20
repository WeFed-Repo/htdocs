<!-- ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- script type="text/javascript" src="/common/fe/assets/ResizeSensor.js?a="></script -->
<script type="text/javascript" src="/WB/fe/js/fp_sportello.js?a="></script>
<script type="text/javascript" src="/WB/fe/js/fp_sportello_form.js?a="></script>
<script type="text/javascript" src="/WB/fe/js/fp_sportello_init_librerie.js?a="></script>

<script type="text/javascript">
    var initPeriodo = '',
        initCategory = '',
        vaiDettaglioF23 = function (k, s) {
            $('#hdModPag').val('pre');
            $('#hdChiave').val(k);
            $('#hdStato').val(s);
            $('#dati').attr('action', cgi_script + '/wbOnetoone/2l/do/banking/gestisciF23.do?OBSKEY=nav_priv_wbx_esito_disp_on_line_new&cf=' + Math.random()).submit();
        },
        vaiDettaglioF24 = function (k, s) {
            $('#hdModPag').val('pre');
            $('#hdChiave').val(k);
            $('#hdStato').val(s);
            $('#dati').attr('action', cgi_script + '/wbOnetoone/2l/do/banking/gestisciF24.do?OBSKEY=nav_priv_wbx_esito_disp_on_line_new&cf=' + Math.random()).submit();
        };
    /*! NAVIGATORE MOBILE  */
    $(window).on("load", function () {
        //Funzioni di apertura navigatore
        btMenuOpen = $("#openMenuButton");
        navMenu = $(".nav").eq(0);
        btMenuOpen.click(function () {
            if (!$(this).hasClass("active")) {
                navMenu.slideDown();
                $(this).addClass("active")
            } else {
                navMenu.slideUp();
                $(this).removeClass("active");
            }
        });

        //Setting operazioni menu' + status iniziale

        var allAs = navMenu.find("li a:first-child");
        $.each(allAs, function (index, menua) {
            $(menua).click(function () {
                menuli = $(this).parent("li");
                submenu = menuli.find("> ul");
                if (!menuli.hasClass("active")) {
                    // disattiva tutti i "parent" fratelli ev. attivi e li chiude
                    var siblingLi = menuli.siblings();
                    $.each(siblingLi, function (index, li) {
                            $(li).find("ul").slideUp();
                            $(li).removeClass("active");
                            $(li).find("li").removeClass("active");
                        }
                    );

                    menuli.addClass("active");
                    submenu.slideDown();
                } else {
                    menuli.removeClass("active");
                    submenu.slideUp();
                }
            });
        });

    });
</script>
