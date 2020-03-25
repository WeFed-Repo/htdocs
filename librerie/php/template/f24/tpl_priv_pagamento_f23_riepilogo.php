








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Modello F23 On Line</title>
  












<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<script type="text/javascript" src='/sapef23/f23/javascript/jquery-1.9.0.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/scroll.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/jquery-migrate-1.0.0.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/bootstrap.min.js'></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src='/sapef23/f23/javascript/ie10-viewport-bug-workaround.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/jquery-ui.min.js'></script>
<script type="text/javascript" src="/sapef23/f23/javascript/totali.js"></script>
<script type="text/javascript" src="/sapef23/f23/javascript/digitation.js"></script>

<!--nostro-->
	<script type="text/javascript"  src='/sapef23/f23/javascript/jquery.ui.touch-punch.min.js'></script>
<!-- * -->
<script type="text/javascript" src='/sapef23/f23/javascript/swfobject.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/funzioniHT.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/funzioniHB.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/jquery.blockUI.js'></script>


<script type="text/javascript" src='/sapef23/f23/javascript/jquery.dataTables.min.js'></script>    
<script type="text/javascript" src='/sapef23/f23/javascript/help.js'></script>
	
<script type="text/javascript" src='/sapef23/f23/javascript/controlli.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/doubleClickPrevention.js'></script>

<script type="text/javascript" src='/sapef23/f23/javascript/contribuenti/rubricaContribuenti.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/moduloF23/pulsantiInserimento.js'></script>
<script type="text/javascript" src='/sapef23/f23/javascript/moduloF23/sezioni.js'></script>

<link media="screen,print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/jquery-ui.css' />
<link media="screen,print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/bootstrap.min.css' />
<link media="screen,print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/essentials.css' />
<link media="screen,print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/header-default.css.jsp' />
<link media="print" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/stylePrint.css' />





	
	<script type="text/javascript">
		function getPathImages() { return '/sapef23/f23/images/';}
	</script>
	<link media="screen" rel="stylesheet" type="text/css" href='/sapef23/f23/styles/style.css.jsp' />
	




<script type="text/javascript">
	(function(){   
	  if (window.addEventListener)
	  {
		window.addEventListener("load", nascondi_loading_screen, false);
	  }else{
		window.attachEvent("onload", nascondi_loading_screen);
	  }
	})();
	function mostra_loading_screen()
	{
	  document.getElementById("loading_screen").style.display = 'block';
	}
	function nascondi_loading_screen()
	{
	  document.getElementById("loading_screen").style.display = 'none';
	}
</script>


















	<script type="text/javascript">
		
		function noBack(){
			window.history.forward();
			
		}
		
		noBack();
		
		window.onload = noBack;
		window.onpageshow = function(evt) {
			if (evt.persisted) {
				noBack();
			}
		}
		
		window.onunload = function() {
			void(0);
		}
	
	</script>



<script type="text/javascript">

	if (window.opera) {
		window.opera.setOverrideHistoryNavigationMode('compatible');
		
		if (history.navigationMode) {
			history.navigationMode = 'compatible';
		}
	}
	
</script>
	
<!--[if lt IE 9]>
  	<script type="text/javascript" src='/sapef23/f23/javascript/respond.min.js'></script>
  	<script type="text/javascript" src='/sapef23/f23/javascript/html5.js'></script>
  <![endif]-->

  <script type="text/javascript" src='/sapef23/f23/javascript/alten.js'></script>
  
  
 

<style type="text/css">
	 #loading_screen{  
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;	
		opacity: 0.5;
		filter: alpha(opacity=50);
}

		#loading_screen{  
			background: url(/sapef23/f23/images/loading.gif) 50% no-repeat;
		}
	
</style>


</head>

<body>
	<div class="wrapper">
		<div class="main row">
			<div class="container">				
				<div id="mainContent" class="center col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="riquadro clearfix"> 
						<div class="messagePanel error" style="display: block;">
							<h3 class="titleSection">Attenzione: si sono verificati degli errori</h3>
							<p>								
								<b><br />&Egrave; stata rilevata una pressione dei tasti <i>BACK</i> o <i>RELOAD</i> del browser.</b><br />
		        		<b><br />L'uso di questi tasti durante la navigazione &egrave; fortemente sconsigliato<br />e pu&ograve; portare ad anomalie nell'elaborazione delle deleghe.<br /></b><br />
		        		<b><br />L'operazione non pu&ograve; essere processata.</b><br />
		       			<b><br />&Egrave;necessario tornare alla home page ed effettuare una nuova richiesta.<br /></b><br />								
							</p>
						</div>
						
					</div>
					<form target="frCenter" action='/sapef23/f23/home.do'>
						<div class="pull-right margin-bottom20">
							<button class="btn btn-primary" type="submit">home page</button>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>