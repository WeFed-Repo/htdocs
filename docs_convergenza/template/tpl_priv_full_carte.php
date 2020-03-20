<?php
$carte = (!isset($_GET['carte']) || $_GET['carte'] != 'n');
if ($carte) {
	virtual("/include/oggetti/Tabelle/Milano/Tabella_001__Carte/oggetto.php");
}
?>

<!-- Testo introduttivo -->
<section>
    <h4 class="strongTitle">Lorem ipsum dolor</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet necessitatibus unde accusamus possimus libero
        est nisi vitae, dolorum sapiente, consequuntur, ipsam. Odit labore dolor aspernatur, sit, <strong>fugit quia
            sequi</strong>! Itaque eveniet iure, consectetur vitae tempora enim, ducimus nesciunt!</p>
</section>
<!-- Fine testo introduttivo -->

<!-- Carousel -->
<section>
    <div id="carouselCarte" class="carousel carousel-catalogo slide">
        <!-- Lista elementi del carousel -->
        <div class="carousel-inner">

            <!-- scheda carousel -->
            <div class="item active">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/WB/fe/img/carta_big_bancomat.png" alt="Immagine carta">
                    </div>
                    <div class="col-sm-8">
                        <h3>Bancomat Webank</h3>
                        <p>Lo utilizzi per acquisti e prelievi in Italia e all'estero. Compila la richiesta e riceverai
                            la carta, insieme al Pin, direttamente a casa tua.</p>
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non esse ut expedita inventore
                                animi odit.
                            </li>
                            <li>Consectetur <strong>adipisicing elit</strong>. Non esse ut expedita inventore animi
                                odit.
                            </li>
                            <li>Dolor sit amet, consectetur adipisicing elit. Non esse ut expedita inventore animi
                                odit.
                            </li>
                        </ul>
                        <div class="btn-align-left">
                            <a type="button" class="btn btn-primary" id="">Lista movimenti</a>
                            <br class="clear">
                        </div>
                    </div>
                </div>
            </div>
            <!-- scheda carousel -->

            <!-- scheda carousel -->
            <div class="item">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/WB/fe/img/carta_big_impronta.png" alt="Immagine carta">
                    </div>
                    <div class="col-sm-8">
                        <h3>Carta di credito</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt autem laudantium, ipsa vel
                            maxime inventore exercitationem odit doloribus nostrum repellat qui placeat repellendus.<br>
                            <br>
                            Voluptatem, harum, illo! Eius cumque officiis exercitationem molestias, eum voluptatem
                            dolores animi iure quo deserunt itaque quod, voluptas ipsa doloribus est minima, porro
                            similique eaque earum deleniti rerum!</p>
                        <div class="btn-align-left">
                            <a type="button" class="btn btn-primary" id="">Richiedi subito</a>
                            <a type="button" class="btn btn-primary" id="">Scopri di pi&ugrave;</a>
                            <br class="clear">
                        </div>
                    </div>
                </div>
            </div>
            <!-- scheda carousel -->


            <!-- scheda carousel -->
            <!--
            <div class="item">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/WB/fe/img/carta_big_prepaid.png" alt="Immagine carta">
                    </div>
                    <div class="col-sm-8">
                        <h3>Carta prepagata</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt autem laudantium, ipsa vel
                            maxime inventore exercitationem odit doloribus nostrum repellat qui placeat repellendus.<br>
                            <br>
                            Voluptatem, harum, illo! Eius cumque officiis exercitationem molestias, eum voluptatem
                            dolores animi iure quo deserunt itaque quod, voluptas ipsa doloribus est minima, porro
                            similique eaque earum deleniti rerum!</p>
                        <div class="btn-align-left">
                            <a type="button" class="btn btn-primary" id="">Richiedi subito</a>
                            <a type="button" class="btn btn-primary" id="">Scopri di pi&ugrave;</a>
                            <br class="clear">
                        </div>
                    </div>
                </div>
            </div>
            -->
            <!-- scheda carousel -->

            <!-- scheda carousel -->
            <div class="item">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/WB/fe/img/vis_cards_640.png" alt="Immagine carta">
                    </div>
                    <div class="col-sm-8">
                        <h3>Card news</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt autem laudantium, ipsa vel
                            maxime inventore exercitationem odit doloribus nostrum repellat qui placeat repellendus.<br>
                            <br>
                            Voluptatem, harum, illo! Eius cumque officiis exercitationem molestias, eum voluptatem
                            dolores animi iure quo deserunt itaque quod, voluptas ipsa doloribus est minima, porro
                            similique eaque earum deleniti rerum!</p>
                        <div class="btn-align-left">
                            <a type="button" class="btn btn-primary" id="">Leggi</a>
                            <br class="clear">
                        </div>
                    </div>
                </div>
            </div>
            <!-- scheda carousel -->
        </div>

        <!-- Carousel indicators -->
        <hr class="hidden-xs hidden-sm">
        <div class="row">
            <div class="col-md-4 hidden-sm hidden-xs"></div>
            <div class="col-md-8 col-xs-12">
                <div class="carousel-indicators">
                    <a data-target="#carouselCarte" data-slide-to="0" class="active">
                        <img src="/WB/fe/img/carta_small_bancomat.gif" alt="Immagine carta">
                        <span>Bancomat</span>
                    </a>
                    <a data-target="#carouselCarte" data-slide-to="1">
                        <img src="/WB/fe/img/carta_small_cartiprone.gif" alt="Immagine carta">
                        <span>Carta di credito</span>
                    </a>
                    <!--
                    <a data-target="#carouselCarte" data-slide-to="2">
                        <img src="/WB/fe/img/carta_small_cartaprepaid.gif" alt="Immagine carta">
                        <span>Carta prepagata</span>
                    </a>
                    -->
                    <a data-target="#carouselCarte" data-slide-to="2">
                        <img src="/WB/fe/img/news_icon.png" alt="Immagine carta">
                    </a>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fine carousel -->

<!-- testo introduttivo -->
<section>
    <h4 class="strongTitle">Lorem ipsum dolor sit amet</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim eius cum vitae perferendis dolorem repellendus,
        autem minima ratione dignissimos omnis. Recusandae, mollitia autem tempore distinctio cupiditate cum consequatur
        corporis hic!</p>
</section>

<!-- Fine testo introduttivo -->
<style>
</style>

<!-- Configuratore -->
<?php /*
<script type="text/javascript">
	featChartInit("<%3Fxml%20version%3D%221.0%22%20encoding%3D%22windows-1250%22%3F><cards><card id=%22nav_priv_wbx_compara_carte_bancomat%22><name><![CDATA[ Bancomat ]]></name><link><![CDATA[ %2FwbOnetoone%2F3l%2Fdo%2FwbOnetoone%2FschedaProdotto.do%3FOBSCNT%3DTAB%26tabId%3Dnav_priv_wbx_carte%26OBSKEY%3Dnav_priv_wbx_info_gestione_carta%26OBSKEY3%3Dnav_priv_wbx_bancomat_int_cosa_e ]]></link></card><card id=%22nav_priv_wbx_compara_carte_cartiprOne%22><name><![CDATA[ Cartimpronta One ]]></name><link><![CDATA[ %2FwbOnetoone%2F3l%2Fdo%2FwbOnetoone%2FschedaProdotto.do%3FCOL%3Dcarte%26OBSCNT%3DTAB%26tabId%3Dnav_priv_wbx_carte%26OBSKEY%3Dnav_priv_wbx_info_gestione_cartimp_one%26OBSKEY3%3Dnav_priv_wbx_cartimp_one]]></link></card><card id=%22nav_priv_wbx_compara_carte_cartiprGoldPlus%22><name><![CDATA[ Cartimpronta Gold Plus ]]></name><link><![CDATA[ /wbOnetoone/3l/do/wbOnetoone/schedaProdotto.do?OBSCNT=TAB&tabId=nav_priv_wbx_carte&OBSKEY=nav_priv_wbx_info_gestione_gold&OBSKEY3=nav_priv_wbx_cartimpr_gold_cosa_e]]></link></card><card id=%22nav_priv_wbx_compara_carte_cartaJeans%22><name><![CDATA[ Carta Jeans ]]></name><link><![CDATA[ /wbOnetoone/3l/do/wbOnetoone/schedaProdotto.do?OBSCNT=TAB&tabId=nav_priv_wbx_carte&OBSKEY=nav_priv_wbx_info_gestione_carta_jeans&OBSKEY3=nav_priv_wbx_cartajeans_cosa_e]]></link></card></cards>");</script>
</script>
*/ ?>

<section>
    <div id="confrontaCarte" class="loading">
        <div id="cardSelection">
            <div class="row"></div>
        </div>
        <hr>
        <div id="cardResults">
            <div id="noCardSelected">
                <span><img src="/WB/fe/img/arrow_indicazione_left.png" class="imgleft"
                           alt="Freccia sinistra">Nessun risultato presente in assenza di parametri selezionati<img
                            src="/WB/fe/img/arrow_indicazione_right.png" class="imgright"
                            alt="Freccia destra"></span>
            </div>
            <div class="row"></div>
        </div>
        <hr>
        <form method="post" action="" name="featConfrontaForm"><input type="hidden" name="elencoCarte" id="elCarte" value=""></form>
        <div class="form-group btnWrapper">
            <div class="btn-align-center">
                <a type="button" class="btn btn-disabled" id="btConfrontaCarte">Confronta carte</a>
                <br class="clear">
            </div>
        </div>
    </div>
</section>
<!-- fine configuratore -->

<script type="text/javascript" src="/WB/fe/js/fp_carte_links_librerie.js"></script>
<script type="text/javascript" src="/WB/fe/js/fp_carte.js"></script>
