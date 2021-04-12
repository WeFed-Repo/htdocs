<?php
    $statpath = ($site === "webank")? "/WB" : "/HT";
    $gifanimpath = ($site === "webank")? "/WB/fe/img/wbapp/" : "/HT/fe/img/youapp/";


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
  
<?php if ($site==="youweb") {  ?>
<!-- Bottom linkbox -->
<div class="link-box">
    <h3><i class="icon icon-play"></i><span>Guarda tutti i video tutorial</span></h3>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <a href="javascript:;" class="text-link" onclick="showVideo('487138384')">Comoda, sicura, veloce: &egrave; You App!</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489824861')">Da You App tutto l'aiuto di cui hai bisogno</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('487136160')">You App: la tua banca in una mano</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489822710')">Con You App il bonifico &egrave; semplice e intuitivo</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489824222')">La nuova sezione Investimenti di You App</a>
        </div>
        <div class="col-xs-12 col-sm-6">
            <a href="javascript:;" class="text-link" onclick="showVideo('489823051')">Il tuo conto su You App</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489823407')">Le tue carte su You App</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489824602')">Con You App zero sorprese, controlli tu le spese</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489825070')">Gestisci le impostazioni e gli Alert in You App</a>
            <a href="javascript:;" class="text-link" onclick="showVideo('489825373')">Grazie a You App la Filiale &egrave; pi&ugrave; vicina</a>
        </div>
    </div>
</div>
<!-- / linkbox -->
<?php 
 } 
?>