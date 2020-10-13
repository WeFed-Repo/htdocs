<!-- Titolo -->
<h2>Tutte le funzionalit&agrave; della tua App</h2>
<!-- / Titolo -->
<style>
/* BOX HERO */
.box-hero {width:100%;display:block; position:relative; background-color: #EBEDEE;min-height:460px;}
.box-hero .box-bg-dark {background-color:#122e5c;padding:20px 20px 20px 340px;}
.box-hero .box-bg-dark .hero-block {position:absolute;width:300px;left:20px;top:20;}
.box-hero .box-bg-dark .hero {height: 360px; margin: 0px auto 25px; display:block;}
.box-hero .box-bg-dark .hero-promo-text {color:#fff}
.box-hero .box-bg-light {padding:20px 20px 20px 340px;display:block;clear:both;}
.box-hero .bullet-hero {padding:0 0 20px 80px; position:relative;min-height:60px;}
.box-hero .bullet-hero img {position:absolute;top:0;left:0;width:60px;}
.box-hero .bullet-text {padding:8px 0 5px 0; font-size:16px; display:inline-block}
@media (max-width:767px) {
    .box-bg-dark,.box-bg-light {padding-left:20px}
    .box-hero .box-bg-dark .hero-block {width:100%;}
    .box-hero .box-bg-dark .hero {height:220px}
    .box-hero .box-bg-dark .hero-promo-text {display:none}
}

/* Bottoni app */
.btn-app-console {text-align:center;}
.btn-app-console .btn-app {margin-left:15px}
.btn-app-console .btn-app:first-child {margin-left:0}
.btn-app {width:135px;height:40px;display:inline-block;background-size:contain;background: transparent none no-repeat center center;}
.btn-appstore {background-image: url("/common/fe/img/btn_appstore.png");}
.btn-googleplay {background-image: url("/common/fe/img/btn_googleplay.png");}

/* Light bg box */
.light-bg-box {background:#EBEDEE;width:100%;display:inline-block;position:relative;text-align:center; margin-bottom:15px;}
.light-bg-box img {height:250px;display:inline-block; padding:20px;}

</style>
<!-- Box Hero -->
<section>
    <div class="box-hero">
        <div class="box-bg-dark">
            <div class="hero-block">
                <img src="/common/fe/img/ph_phone.png" class="hero">
                <!-- Pulsanti app -->
                <div class="btn-app-console">
                    <a href="#" class="btn-app btn-appstore"></a>
                    <a href="#" class="btn-app btn-googleplay"></a>
                </div>
                <!-- / pulsanti app -->
            </div>
            <div class="hero-promo-text hidden-xs">
                <div class="bullet-hero">
                    <img src="/HT/fe/img/bullet_ingranaggi.png" class="bullet" />
                    <span class="bullet-text">
                        <strong>FACILE</strong><br>
                        La installi con un tap
                    </span>
                </div>
                <div class="bullet-hero">
                    <img src="/HT/fe/img/bullet_scudo.png" class="bullet" />
                    <span class="bullet-text">
                        <strong>SICURA</strong><br>
                        La usi come Dispositivo di Sicurezza
                    </span>
                </div>
                <div class="bullet-hero">
                    <img src="/HT/fe/img/bullet_grafico.png" class="bullet" />
                    <span class="bullet-text">
                        <strong>COMPLETA</strong><br>
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
        </div>
    </div>            
</section>
<!-- / Box Hero -->

<!-- Box descrittivo immagine e testo -->
<div class="row">
    <div class="col-sm-6">
        <h3>Lorem ipsum dolor sit amet</h3>
        <div class="light-bg-box visible-xs">
            <img src="/common/fe/img/ph_phone.png">
        </div>
        <p><strong>Dolor</strong> lorem dolor ipsum sit amet consectetur adipiscing elit summa cum laude. </p>
        <ul>
            <li>Lorem dolor sit amet consectetur adipiscing elit summa</li>
            <li>Lorem dolor sit amet consectetur adipiscing elit summa</li>
            <li>Lorem dolor sit amet consectetur adipiscing elit summa</li>
            <li>Lorem dolor sit amet consectetur adipiscing elit summa</li>
        </ul>
        <a href="#"><i class="icon icon-play"></i> Nome_video_tutorial</a>
    </div>
    <div class="col-sm-6 hidden-xs">
        <div class="light-bg-box">
            <img src="/common/fe/img/ph_phone.png">
        </div>
    </div>
</div>
<!-- /Box descrittivo immagine e testo -->