<!-- JAVASCRIPT GESTIONE HOME PAGE -->
<script type="text/javascript">
$.getScript("/wbresp/js/home.js");
</script>
<div id="homeCarouselTop">
	<div class="slide carousel-moveplus" id="carouselHome" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselHome" data-slide-to="0" class="active"></li>
			<li data-target="#carouselHome" data-slide-to="1" class=""></li>
			<li data-target="#carouselHome" data-slide-to="2" class=""></li>
			<li data-target="#carouselHome" data-slide-to="3" class=""></li>
			<li data-target="#carouselHome" data-slide-to="4" class=""></li>
		</ol>
		<!-- 
		Colori testi
		bianco = text-color-white
		verde = text-color-green

			Grandezze testi in caousel top
			
			paragrafo
			paragrafo-grande
			titolo
			titolo-grande
		-->
		<!--TESTO PUO' AVERE 4 CLASSI SIZE: paragrafo (tag p class="paragrafo"),paragrafo-grande (tag h2 class="paragrafo-grande"), titolo(tag h2 class="titolo"), titolo-grande(tag h2 class="titolo-grande") -->
		<!--ELENCO PUO' AVERE 2 CLASSI SIZE: paragrafo (tag ul class="paragrafo"),paragrafo-grande (tag ul class="paragrafo-grande") -->
			
			<!--SINGOLO OGGETTO CONTENT-->
			<div class="item bck-responsive active" style="background-image:url('/wbresp/img/hero-home/home_visual_promo.jpg')">
				<div class="carousel-caption">
					<!-- CAMPO TESTO-->
					<h2 class="titolo"><span class="text-color-green">CONTO WEBANK</span></h2>
					<ul class="paragrafo-grande">
						<li>Zero canone</li>
						<li>Zero <strong>spese</strong></li>
						<li>Anche su mobile</li>
					</ul>
					<!-- FINE CAMPO TESTO-->
					<div>
						<a class="btn-whlit btn-245 fleft" href="">LOREM IPSUM</a>
						<a class="btn-grlit btn-245 fleft">LOREM IPSUM DOLOR</a>
					</div>
				</div>
			</div>
			
			<div class="item bck-responsive" style="background-image:url('/wbresp/img/hero-home/home_visual_trading.jpg')">
				<div class="carousel-caption">
					<!-- CAMPO TESTO-->
					<h2 class="paragrafo-grande">QUALUNQUE SIA IL TUO TRADING<br><span class="text-color-green">WEBANK &Egrave; LA SOLUZIONE</span></h2>
					<ul class="paragrafo">
						<li>Scegli la piattaforma pi&ugrave; adatta a te</li>
						<li>Accedi ai mercati di <a href="#">tutto il mondo</a> anche in mobilit&agrave;</li>
						<li>Operi alle migliori condizioni</li>
					</ul>
					<!-- FINE CAMPO TESTO-->
					<div>
						<a class="btn-grlit btn-245 fleft">LOREM IPSUM DOLOR</a>
					</div>
				</div>
			</div>
			<div class="item bck-responsive" style="background-image:url('/wbresp/img/hero-home/home_visual_investimenti.jpg')">
				<div class="carousel-caption">
					<!-- CAMPO TESTO-->
					<h2 class="titolo">INVESTI</h2>
					<h2 class="paragrafo-grande"><span class="text-color-green">SCEGLIENDO TRA OLTRE</span></h2>
					<h2 class="titolo-grande">3.000</h2>	
					<p class="paragrafo">FONDI DELLE MIGLIORI<br>CASE DI GESTIONE</p>	
					<!-- CAMPO TESTO-->
					<div>
						<a class="btn-whlit btn-245 fleft" href="">LOREM IPSUM</a>
					</div>
				</div>
			</div>
			<div class="item bck-responsive" style="background-image:url('/wbresp/img/hero-home/home_visual_mutuo.jpg')">
				<div class="carousel-caption">
					<!-- CAMPO TESTO-->
					<h2 class="paragrafo-grande">IL FUTURO &Egrave; SEMPLICE<br>
					 <span class="text-color-green">CON MUTUO WEBANK</span>
					</h2>
					<ul class="paragrafo">
						<li>Zero spese di attivazione e gestione</li>
						<li>Un consulente dedicato in un click</li>
						<li>Polizza casa gratuita</li>
					</ul>
					<!-- CAMPO TESTO-->
					<div>
						<a class="btn-grlit btn-245 fleft">LOREM IPSUM DOLOR</a>
					</div>
				</div>
			</div>
			<div class="item bck-responsive" style="background-image:url('/wbresp/img/hero-home/home_visual_promo2.jpg')">
				<div class="carousel-caption">
					<!-- CAMPO TESTO-->
					<h2 class="paragrafo-grande"><span class="text-color-green">PER I NUOVI CLIENTI</span> FINO AL</h2>
					<h2 class="titolo-grande">2,00%</h2>
					<p class="paragrafo">lorem ipsum dolor sit dolor sit <span class="text-color-green">dolor sit</span></p>
					<!-- CAMPO TESTO-->
					<div>
						<a class="btn-whlit btn-245 fleft" href="">LOREM IPSUM</a>
						<a class="btn-grlit btn-245 fleft">LOREM IPSUM DOLOR</a>
					</div>
					<p class="note">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <a href="#" target="blank">sed do eiusmod</a> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
				</div>
				
			</div>
		
		<a class="left carousel-control" href="#" role="button" data-slide="prev" data-target="#carouselHome"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
		<a class="right carousel-control" href="#!" role="button" data-slide="next" data-target="#carouselHome"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
	</div>
</div>
			
<div class="container">
		<div class="row homeFR homeFRMob">
			<div class="col-md-3 col-sm-6">
				<a href="/webankpub/wbresp/calcolatore_mutuo.do"><h2>Mutui</h2></a>
				<a href="/webankpub/wbresp/calcolatore_mutuo.do"><img src="/wbresp/img/home/ico-mutui.png" alt="Mutui"></a>
				<p>
					<a href="/webankpub/wbresp/t1/mutuo.do">Calcola la rata in un click e attiva il contatto con un consulente.<br>Semplice, con Mutuo Webank</a>
				</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<a href="/webankpub/wbresp/trading.do"><h2>Trading</h2></a>
				<a href="/webankpub/wbresp/trading.do"><img src="/wbresp/img/home/ico-trading.png" alt="Trading"></a>
				<p>
					<a href="/webankpub/wbresp/trading.do">Scegli la piattaforma pi&ugrave; adatta a te ed operi anche in mobilit&agrave; su migliaia di strumenti alle migliori condizioni.</a>
				</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<a href="/webankpub/wbresp/t1/investimenti.do"><h2>Investimenti</h2></a>
				<a href="/webankpub/wbresp/t1/investimenti.do"><img src="/wbresp/img/home/ico-investimenti.png" alt="Investimenti"></a>
				<p>
					<a href="/webankpub/wbresp/t1/investimenti.do">Scopri le soluzioni Webank: a tua disposizione i migliori strumenti per investire con i leader globali del risparmio gestito.</a>
				</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<a href="/webankpub/wbresp/t1/mobile_banking.do"><h2>App</h2></a>
				<a href="/webankpub/wbresp/t1/mobile_banking.do"><img src="/wbresp/img/home/ico-app.png" alt="App"></a>
				<p>
					<a href="/webankpub/wbresp/t1/mobile_banking.do">Scarica subito l'ultima App di Webank, premiata come la migliore App finanziaria 2015.</a>
				</p>
			</div>
		</div>
		<div class="row homeFR">
			<div class="col-xs-12">
				<a class="btn-grlit alignCenter">APRI IL CONTO</a>
			</div>
		</div>
	</div>
<div class="futuroSemplice">
    <div class="futuroSempliceV"></div>
	<div class="container">
	  <div class="row">
		<div class="col-sm-6 leftText">
		  
		  <!--FORMATTAZIONE TITOLO FISSA NON CON CLASSI SIZE -->
		  <h2>IL FUTURO &Egrave; <strong>SEMPLICE</strong><br><span class="text-color-green">CON MUTUO WEBANK</span></h2>
		  
		  <!--FORMATTAZIONE TESTI 1 SIZE: paragrafo -->
		  <p class="paragrafo">Lorem ispum dolor <strong>sit lorem</strong> ipsum dolor sit</p>
		  <ul class="paragrafo">
				<li>Zero spese di <span class="text-color-green">attivazione</span> e gestione</li>
				<li>Un consulente dedicato in un click</li>
		  </ul>
		   <br>
		   <div class="col-sm-6">
				<a class="btn-grlit alignCenter">LOREM IPSUM</a>
			</div>
		   <br>
		   <br>
		</div>
		<div class="col-sm-6 rightImage">
			   <img src="/wbresp/img/home/coppia.jpg" alt="Il futuro è semplice con mutuo Webank">
		</div>
	  </div>
  </div>
 </div>
	
	
<div class="container">
      <div class="row bancaCheVorrei">
          <div class="col-md-12">
            <h2>La Banca che vorrei</h2>
            <p>
              Aiutaci a diventare la tua Banca ideale!<br>&nbsp;
            </p>

          </div>
          <div class="col-md-4">
            <div class="divButton visible-xs visible-sm">
				<div class="col-xs-12">
					<a class="btn-grlit alignCenter">PARTECIPA</a>
				</div>
            </div>
            <a href="#"><img src="/wbresp/img/home/idea.png" class="mainImg" alt="Scrivici la tua idea" /></a>
            <h3>Scrivici la tua idea</h3>
            <p>
              <strong>Pensa </strong> a cosa dovrebbe offrire la tua Banca oppure a cosa cambieresti;
            </p>
          </div>
          <div class="col-md-4">
            <div class="divButton hidden-xs hidden-sm">
              <div class="col-xs-12">
					<a class="btn-grlit alignCenter">PARTECIPA</a>
				</div>
            </div>
            <a href="#"><img src="/wbresp/img/home/partecipa.png" class="mainImg" alt="Posta le tue idee oppure vota quelle gi&agrave; inserite dagli altri utenti" /></a>
            <h3>Partecipa</h3>
            <p>
              <strong>Posta </strong> le tue idee oppure vota quelle gi&agrave; inserite dagli altri utenti all'interno della sezione
            </p>
          </div>
          <div class="col-md-4">
            <a href="#"><img src="/wbresp/img/home/guarda.png" class="mainImg"  alt="Guarda crescere la banca" /></a>
            <h3>Guarda crescere la banca</h3>
            <p>
              <strong>Scopri </strong> lo stato di avanzamento delle proposte nelle sezioni <a href="#"><strong>Idee da realizzare </strong></a> e <strong><a href="#">Idee realizzate</a></strong>
            </p>
          </div>
      </div>

      <!-- Example row of columns -->
  </div>
  <!-- MAGAZINE -->
<div id="homeMagazineCarousel" class="loading"></div>
<!-- FINE MAGAZINE -->