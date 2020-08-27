<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<title>Librerie YouBusiness | GUIDELINES</title>

		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<link href="./librerie/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" >
		<link href="./librerie/css/librerie.css" rel="stylesheet" type="text/css" media="all" >
		<link href="./librerie/css/guidelines.css" rel="stylesheet" type="text/css" media="all" >
		<script type="text/javascript" language="javascript" src="./librerie/js/jquery.min.js"></script>
		<script type="text/javascript" language="javascript" src="./librerie/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

	</head>
	<body>

	<header class="librerie">
			<div class="wrapper">
				<h1><a href="./index.php" class="btn-bak">&laquo;</a> Guidelines - Librerie YouBusiness</h1>
			</div>
		</header>
		<div id="main" class="librerie">
			<div class="wrapper">

		    <main>
		      <aside><nav><ul></ul></nav></aside>
		      <section>

						<h2 id="risorse">Risorse e condivisione</h2>
		        <p>
							<ul>
								<li><strong>TOOL CONDIVISIONE:</strong> per gli ASSETS con il reparto grafico
									e gli HTML STATICI con sviluppo sviluppo (per info vedere la <a href="#rilascio"></a>).
									<ul>
										<li><a href="https://drive.google.com/drive/u/0/folders/11_LB7cCbMCq0bQUVV99GTSDzdrLV_Q7C" target="_blank">GOOGLE DRIVE</a></li>
									</ul>
								</li>
								<li>
									<strong>TOOL GRAFICI:</strong> <br /> <i>(NOTE: richiedere al reparto grafico che tool prendere come
										riferimento in quanto è stato più volte cambiata la board "ufficiale")</i>.
									<ul>
										<li><a href="https://www.sketch.com/s/4e97e2ce-49b8-4e1d-9496-ef88d0096588" target="_blank">SKETCH</a></li>
										<li><a href="https://miro.com/app/board/o9J_kyEnXhc=/" target="_blank">MIRO</a></li>
										<li><a href="https://bpmbusiness11921.invisionapp.com/" target="_blank">INVISION</a></li>
									</ul>
								</li>
							</ul>
						</p>
						<blockquote>
							NOTE: In caso manchino i permessi di accesso ai vari ambienti, contattare al responsabile
							del reparto grafico Angelo Artuso (<a href="mailto:angelo.artuso@bancobpm.it">angelo.artuso@bancobpm.it</a>)
						</blockquote>

						<h2 id="compilare">Compilare lo stile</h2>
		        <p>Per la corretta modifica dello stile, è <strong>OBBLIGATORIO</strong> modificare i
							file SCSS del tema, senza <strong>MAI TOCCARE</strong> i file CSS.</p>
		        <p>Per poter compilare, è possibile usare <a target="_blank" href="https://gruntjs.com/">GRUNT</a> con il comando
		        <code>grunt</code>, oppure <a target="_blank" href="http://compass-style.org/">COMPASS</a> con il comando
		        <code>compass watch</code>.</p>
		        <p>Gli stili SCSS si trovano nella cartella <b>fe/sass</b> mentre i CSS generati si trovano nella cartella <b>fe/css</b>.</p>

						<h2 id="librerie">Librerie e vendors</h2>
						<p>Elenco delle librerie esterne utilizzate:</p>
						<h3 id="bootstrap">Bootstrap</h3>
						<p>Framework di base per grafica. Versione 4.0.0.
							[<a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/" target="_blank">sorgente</a>].</p>
						<h3 id="bootstrap-table">Bootstrap Table</h3>
						<p>Usato per lo styling delle tabelle. [<a href="https://bootstrap-table.com/" target="_blank">sorgente</a>].</p>
						<h3 id="bootstrap-timepicker">Bootstrap Timepicker</h3>
						<p>Usato per lo styling del timepicker. [<a href="https://github.com/jdewit/bootstrap-timepicker" target="_blank">sorgente</a>].</p>
						<h3 id="awesome-bootstrap-checkbox">Awesome Checkbox</h3>
						<p>Usato per lo styling di alcune checkbox particolari.</p>
						<h3 id="jquery">Jquery</h3>
						<p>Framework di base per JS. Versione 3.3.1.</p>
						<h3 id="jquery">Jquery UI</h3>
						<p>Usato per lo styling e il comportamento di molti componenti e inputs. Versione 1.12.1. [<a href="https://jqueryui.com/" target="_blank">sorgente</a>]</p>

						<h2 id="architettura">Architettura file di stile</h2>
		        <p>I due file generati da SCSS a CSS sono <b>priv_generic</b> (per il layout generico) e <b>priv_base</b> (per i componenti).</p>
		        <p>Sia <b>priv_generic.scss</b> che <b>priv_base.scss</b> sono liste di file importati e organizzati in varie sottocartelle.
							Come primo import, entrambi i file hanno <b>_commons.scss</b>, che a sua volta importa i file della cartella <b>fe/sass/commons</b>.</p>
						<p>Di seguito una lista delle cartelle distile e del loro contenuto:</p>

						<h3 id="commons">Commons</h3>
		        <p>Importa i file di variabili, mixins e funzioni utili sia alla costruzione del layout che dei componenti. E' inclusa sia in <b>priv_generic.scss</b> che in <b>priv_base.scss</b></p>

						<h3 id="components">Components</h3>
		        <p>I componenti sono oggetti atomici e riutilizzabili in qualsiasi punto del sito.
		          <br />Possono essere, ad esempio, una lista di icone, un box o una form.</p>
		        <p><strong>Per ogni componente specifico del sito, è stato creato un file ad hoc.</strong>
		          <br />Questo permette di tenere il <strong>codice in ordine</strong> e di non perdere alcun riferimento a un determinato componente in quanto tutto lo stile SCSS
							che lo differenzia dallo stile globale si trova <strong>sempre e solo nel medesimo punto</strong>.
		        <br /> Per convenzione, il nome di ogni componente è identico a quello del SCSS al quale corrisponde, questo per facilitare la ricerca dello stile.
		        <br />Quindi, per esempio, possiamo avere il componente <code>&lt;div class="<strong>test</strong>"&gt; ...contenuto... &lt;/div&gt;</code> al quale
						corrisponderà il file <b>fe/sass/components/_test.scss</b>. </p>

		        <h3 id="fonts">Fonts</h3>
		        <p>Inclusione di tutti fonts, compreso il font iconico creato con ICOMOON, e di un file redatto per alcune eccezioni particolari delle classi relative alle icone.

						<h3 id="layout">Layout</h3>
						<p>In questa cartella troviamo gli stili generici, che riguardano la struttura globale del sito, come la header, il footer e i tag di base.</p>

						<h2 id="rilascio">Rilascio per sviluppo</h2>
						<p>Per passare i files statici delle librerie allo sviluppo, è necessario esportare un pacchetto statico delle librerie:</p>
						<p>
							<ul>
								<li>Compilare il file <b>changelog.html</b> descrivendo in breve le modifiche effettuate;</li>
								<li>Usare il tool <a href="/youwebbusiness/librerie_genera_statico.php" target="_blank">Genera statico</a> per rigenerare la cartella <b>html_statico</b>
									<u>(passaggio importantissimo perchè lo statico sia aggionato!)</u>;</li>
								<li>Creare un file <b>.zip</b> contenente il <b>changelog.html</b> e la cartella <b>html_statico</b>;</li>
								<li>Nominare il file .zip "<b>html_statico_<strong>YYMMDD_hhmm</strong>.zip</b>" dove:
									<blockquote><small>
										YY => 2 cifre anno <br />
										MM => 2 cifre mese <br />
										DD => 2 cifre giorno <br />
										hh => 2 cifre ora <br />
										mm => 2 cifre minuto (qui va bene anche scrivere solo 00)
									</small></blockquote>
								</li>
								<li>Caricare il nuovo file nella cartella Google Drive <a target="_blank" href="https://drive.google.com/drive/u/0/folders/17Qak-Bs1Ge2Z3NW7_ftwf27Ekxqmm7R8">HTML_STATICO(versionato)</a>;</li>
							<li>Avvisare via email gli sviluppatori mettendo in copia sempre <a href="mailto:tecgroup@itecons.it">tecgroup@itecons.it</a> e WEFED.</li>
						</p>
		      </section>
		    </main>
		  </body>
		  <script>
				// SMOOTH SCROLLL
				var scroll = new SmoothScroll('a[href*="#"]',{ header: 'header.librerie' });
				// CREAZIONE NAVIGAZIONE ASIDE
		    $('section h2, section h3').each(function(){
		      $('aside ul').append('<li class="'+( $(this).is( "h3" ) ? 'secondary' : 'primary' )+'"><a href="#'+$(this).attr('id')+'"> '+$(this).html()+'</a></li>');
		    });
		    $('section a[href^="#"]').each(function(){ $(this).html( $('aside ul a[href="'+$(this).attr('href')+'"]').html() ); });
			</script>
		</div>

	</body>
</body>
