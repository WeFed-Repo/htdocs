<?php
    $statpath = ($site === "webank")? "/WB" : "/HT";
    $gifanimpath = ($site === "webank")? "/WB/fe/img/wbapp/" : "/HT/fe/img/youapp/";

    // Array con nomi file per animazioni
    $anim = Array(
        "01_pre_login.gif",
        "02_navigazione.gif",
        "03_silos.gif",
        "04_fare_bonifico.gif",
        "05_revoca_bonifico.gif",
        "06_dettaglio_conto.gif",
        "07_carte.gif",
        "08_ordine_fondo.gif",
        "09_portafoglio.gif",
        "10_revoca_ordine.gif",
        "11_ordine_titolo.gif",
        "12_movimenti.gif",
        "13_assistenza.gif",
        "14_alert_conto.gif",
        "15_alert_trading.gif",
        "16_presa_appuntamento.gif",
        "17_portafoglio_simulato.gif",
        "18_impostazioni_funzioni_veloci.gif",
        "19_impostazione_saldo.gif"
    );

?><!-- Titolo -->
<div class="titolo">
    <h1>
        <div class="row">
            <div class="col-sm-8">
                <span>Tutte le funzionalit&agrave; della tua App</span>
            </div>
            </div>
    </h1>
</div>
<!-- / Titolo -->

<!-- Box Hero -->
<section>
    <div class="box-hero">
        <div class="box-bg-dark">
            <div class="hero-block">
                <div class="smartphone-wrapper">
                    <img src="<?php print($gifanimpath); ?>static.jpg" />
                </div>
            </div>
            <div class="hero-promo-text hidden-xs">
                <div class="bullet-hero">
                    <img src="<?php print $statpath; ?>/fe/img/bullet_dito.png" class="bullet" />
                    <span class="bullet-text">
                        <span class="title">FACILE</span><br>
                        La installi con un tap e operi con un gesto!
                    </span>
                </div>
                <div class="bullet-hero">
                    <img src="<?php print $statpath; ?>/fe/img/bullet_grafico.png" class="bullet" />
                    <span class="bullet-text">
                        <span class="title">COMPLETA</span><br>
                        Gestisci le operazioni bancarie e gli investimenti
                    </span>
                </div>
                <div class="bullet-hero">
                    <img src="<?php print $statpath; ?>/fe/img/bullet_cassaforte.png" class="bullet" />
                    <span class="bullet-text">
                    <span class="title">SICURA</span><br>
                        La puoi usare come Token app gratuito
                    </span>
                </div>
            </div>
        </div>
        <div class="box-bg-light">    
            <p>
                <strong>LA BANCA SEMPRE A PORTATA DI MANO</strong><br>
                Scaricala o aggiornala subito per scoprire tutte le novità!
            </p>
            <p>Di seguito i requisiti minimi:<br>
                iPhone/iPad: versione 12<br>
                Apple Watch: OS 4.2<br>
                Android/Tablet Android/Android Wear: versione 6</p>
             <!-- Pulsanti app -->
             <div class="btn-app-console">
                <a href="#" class="btn-app btn-appstore"></a>
                <a href="#" class="btn-app btn-googleplay"></a>
                <a href="#" class="btn-app btn-appgallery"></a>
            </div>
            <!-- / pulsanti app -->
        </div>
    </div>            
</section>
<!-- / Box Hero -->

<section>

    <!-- Catena di box descrittivi immagine e testo con impaginazione automatica destra/sinistra-->
    <div class="auto-lr-boxes">

    <?php include ("tpl_pagina_widget_box_".$site.".php"); ?>

    </div>
    <!-- Fine catena do box descrittivi -->

</section>


    <?php /* 
    <div class="auto-lr-boxes">
        <?php foreach ($anim as $an) { 
        ?>
        <!-- box autoimpaginato -->
        <div class="lr-box">
            <div class="box-image">
                <!-- Wrapper smartphone -->
                <div class="smartphone-wrapper small">
                    <img src="<?php print($gifanimpath.$an); ?>" />
                </div>
                <!-- fine Wrapper smartphone -->
            </div>
            <div class="box-description light-bg">
                <h3>Lorem ipsum dolor sit amet</h3>
                <p><strong>Dolor</strong> lorem dolor ipsum sit amet consectetur adipiscing elit summa cum laude. </p>
                <ul>
                    <li>Lorem dolor sit amet consectetur adipiscing elit summa</li>
                    <li>Lorem dolor sit amet consectetur <strong>adipiscing</strong> elit summa</li>
                    <li>Lorem dolor sit amet consectetur adipiscing elit summa</li>
                    <li>Lorem dolor sit amet consectetur adipiscing elit summa</li>
                </ul>
                <?php if ($site!=="webank") { ?>
                    <div class="btnWrapper">
                        <div class="btn-align-left">
                            <a class="btn-link-icon text-mobile" href="#" ><i class="icon icon-play"></i><span>Nome_video_tutorial</span></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- Fine box autoimpaginato -->
        <?php
        }?>
    </div>
    */ ?>
<!-- /Box descrittivo immagine e testo -->


<?php if ($site==="youweb") {  ?>
<!-- Bottom linkbox -->
<div class="link-box">
    <h3><i class="icon icon-play"></i><span>Guarda tutti i video tutorial</span></h3>
    <div class="row">
        <div class="col-xs-12">
            <a href="javascript:;" class="text-link" onclick="showVideo('487138384')">Comoda, sicura, veloce: &egrave; You App!</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489824861')">Da You App tutto l'aiuto di cui hai bisogno</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('487136160')">You App: la tua banca in una mano</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489822710')">Con You App il bonifico &egrave; semplice e intuitivo</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489824222')">La nuova sezione Investimenti di You App</a>
        </div>
    </div>
</div>
<!-- / linkbox -->
<?php 
 } 
?>