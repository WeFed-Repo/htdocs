<?php
    $statpath = ($site === "webank")? "/WB" : "/HT";

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
                    <img src="/HT/fe/img/youapp/static.jpg" />
                </div>
            </div>
            <div class="hero-promo-text hidden-xs">
                <div class="bullet-hero">
                    <img src="<?php print $statpath; ?>/fe/img/bullet_ingranaggi.png" class="bullet" />
                    <span class="bullet-text">
                        <span class="title">FACILE</span><br>
                        La installi con un tap
                    </span>
                </div>
                <div class="bullet-hero">
                    <img src="<?php print $statpath; ?>/fe/img/bullet_scudo.png" class="bullet" />
                    <span class="bullet-text">
                    <span class="title">SICURA</span><br>
                        La usi come Dispositivo di Sicurezza
                    </span>
                </div>
                <div class="bullet-hero">
                    <img src="<?php print $statpath; ?>/fe/img/bullet_grafico.png" class="bullet" />
                    <span class="bullet-text">
                        <span class="title">COMPLETA</span><br>
                        Gestisci le operazioni bancarie e gli investimenti
                    </span>
                </div>
            </div>
        </div>
        <div class="box-bg-light">    
            <p>
                <strong>SEMPRE CON TE</strong><br>
                Se hai gi&agrave; l'app, aggiornala ora per avere tutte le novit&agrave;.<br>
                Non l'hai ancora scaricata?<br>
                Clicca sul pulsante dello Store del tuo dispositivo (solo da smartphone)!
            </p>
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

<!-- Importazione videoplayer -->
<script src="/common/fe/js/videoplayer.js" type="text/javascript"></script>	
<!-- / importazione videoplayer -->

<!-- Catena di box descrittivi immagine e testo con impaginazione automatica destra/sinistra-->
<section>

    <div class="auto-lr-boxes">
        <?php foreach ($anim as $an) { 
        ?>
        <!-- box autoimpaginato -->
        <div clasS="lr-box">
            <div class="box-image">
                <!-- Wrapper smartphone -->
                <div class="smartphone-wrapper small">
                    <img src="/HT/fe/img/youapp/<?php print($an); ?>" />
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
                <div class="btnWrapper">
                    <div class="btn-align-left">
                        <a class="btn-link-icon text-mobile"  data-video-url="/template/video/video_esempio.mp4" data-toggle="video-overlay" ><i class="icon icon-play"></i><span>Nome_video_tutorial</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fine box autoimpaginato -->
        <?php
        }?>
    </div>
</section>
<!-- /Box descrittivo immagine e testo -->



<!-- Bottom linkbox -->
<div class="link-box">
    <h3><i class="icon icon-play"></i><span>Guarda tutti i video tutorial</span></h3>
    <div class="row">
        <div class="col-sm-6">
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
        </div>
        <div class="col-sm-6">
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
            <a href="#" class="text-link">Nome_video_tutorial</a>
        </div>
    </div>
</div>
<!-- / linkbox -->