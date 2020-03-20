<?php include("./core/base.php"); ?>
<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Wiki</title>

		<?php include("include/struttura/head_meta.php"); ?>

        <!-- CSS -->
        <link rel="stylesheet" href="/common/fe/assets/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
        <!-- / CSS -->

        <!-- JS -->
        <script type="text/javascript" src="/common/fe/assets/jquery/jquery.js"></script>
        <!-- / JS -->
    </head>
    <body class="<?php print($site); ?>">
        <header class="librerie">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1>Wiki librerie convergenza</h1>
                        </div>
                        <div class="col-sm-4">
							<?php include("./librerie_switch.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="main" class="librerie">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4" id="menu">
                            <h2>Menu</h2>
                            <ul>
                                <li><a href="#intro">Intro</a></li>
                                <li>
                                    <span class="categoria">Struttura</span>
                                    <ul>
                                        <li><a href="#struttura-casistiche">Casistiche</a></li>
                                        <li><a href="#struttura-css">CSS</a></li>
                                        <li><a href="#struttura-js">JS</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="categoria">Front page</span>
                                    <ul>
                                        <li><a href="#fp-ria">RIA</a></li>
                                        <li><a href="#fp-sportello">Sportello</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="categoria">Aletti</span>
                                    <ul>
                                        <li><a href="#aletti-onboarding">Onboarding</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-8" id="contenuti">
                            <div id="intro" class="page loaded">
                                <h2>Intro</h2>
								<?php include("./include/wiki/intro.php"); ?>
                            </div>
                            <div id="struttura-casistiche" class="page"></div>
                            <div id="struttura-css" class="page"></div>
                            <div id="struttura-js" class="page"></div>
                            <div id="fp-ria" class="page"></div>
                            <div id="fp-sportello" class="page"></div>
                            <div id="aletti-onboarding" class="page"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function () {
                var $intro = $('#intro');

                var changePage = function () {
                    var hash = window.location.hash;
                    var $page = $(hash);

                    if (!$page.length) {
                        $page = $intro;
                    }

                    if (!$page.hasClass('loaded')) {
                        loadPage($page);
                    } else {
                        showPage($page);
                    }
                };

                var addPageTitle = function ($page) {
                    var $menuItem = $('a[href="#' + $page.attr('id') + '"]');
                    var $categoria = $menuItem.closest('ul').prevAll('.categoria');
                    var title = $menuItem.text();

                    if ($categoria.length) {
                        title = $categoria.text() + ' - ' + title;
                    }

                    $page.append('<h2>' + title + '</h2>');
                };

                var loadPage = function ($page) {
                    $.ajax({
                        "url": "/include/wiki/" + $page.attr('id') + ".php",
                        "dataType ": "html"
                    })
                        .done(function (html) {
                            addPageTitle($page);
                            $page.append(html).addClass('loaded');
                            showPage($page);
                        })
                        .fail(function () {
                            showPage($intro);
                        });
                };

                var showPage = function ($page) {
                    if (!$page.hasClass('visible')) {
                        $('.page.visible').removeClass('visible');
                        $page.addClass('visible');
                    }
                };

                $(window).on('hashchange', changePage).trigger('hashchange');
            });
        </script>
    </body>
</html>
