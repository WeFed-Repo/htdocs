<!DOCTYPE html>
<!-- !DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Riepilogo F23 - Dettaglio</title>	                                                                    
	














	<script type="text/javascript">
		var contiImprese = [];
		function getPathImages() { return '/sapef23/f23/images/';}	
	</script>
	<link media="screen" rel="stylesheet" type="text/css" href="/sapef23/f23/styles/youbusinessweb/style.css.jsp">








<script type="text/javascript">
	var activeLoadingScreen = 0;
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
	  activeLoadingScreen = activeLoadingScreen + 1;
	  document.getElementById("loading_screen").style.display = 'block';
	}
	function nascondi_loading_screen()
	{
	  activeLoadingScreen = activeLoadingScreen - 1;
	  if (activeLoadingScreen <= 0) {
		  activeLoadingScreen = 0;
	  	  document.getElementById("loading_screen").style.display = 'none';
	  }
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

  <script type="text/javascript" src="/sapef23/f23/javascript/alten.js"></script>
  
  
 

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
		iframe {
    display: block;
    width: 100%;
    height: 600px;
    border: none;
    overflow: auto;
    overflow-y: scroll;
    overflow-x: hidden;
    /* min-height: 500px; */
}
</style>

</head>


<body onload="visualizzaSegnalazione();" onclick="deselezionaTutti();" style="zoom: 1;" marginwidth="0" marginheight="0">
<div id="loading_screen" style="display: none;"></div>
<script type="text/javascript">
mostra_loading_screen();
</script>
	<div class="wrapper">
 
	
		<div style="height: 7px; box-shadow: inset 0px 8px 8px -7px rgba(0,0,0,0.5)">&nbsp;</div>
	
		








	<input type="hidden" name="DelegaUniqueToken" value="MTU2ODc1MDcyNjY1Mw==">
	<input type="hidden" name="_control.identificativoDelega" value="602">



	
	<input type="hidden" name="_control.reload" value="false">

	  <script type="text/javascript">
	  	function visualizzaSegnalazione() {
	  	
	  	}
	  </script>
	
		<div class="container">
			<ol class="breadcrumb pull-right">
				<li>Pagamenti</li>
				<li>Modulo F23</li>
			</ol>
		</div>
	
		<div class="main row">
			<div class="container">
				<div id="mainContent" class="center col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="riquadro clearfix">

<!-- 					  		<div class="pager clearfix pull-right"> -->

<!-- 									<a href="#" class="current_page" title="Pagina 1 di 3">1</a> -->
<!-- 									<a href="#" class="" title="Pagina 2 di 3">2</a> -->
<!-- 									<a href="#" class="" title="Pagina 3 di 3">3</a> -->


<!-- 									<a href="#" class="" title="Pagina 1 di 3">1</a> -->
<!-- 									<a href="#" class="" title="Pagina 2 di 3">2</a> -->
<!-- 									<a href="#" class="current_page" title="Pagina 3 di 3">3</a> -->

<!-- 							</div> -->

						<div class="clearfix">
							<div class="flag pagamentoF23">&nbsp;</div>
							<h1>Riepilogo - Dettaglio</h1>
						
						</div>
						
 			<iframe id="iframef23" src="strutt_iframe.php?iframe=01.f23/iframe_riepilogo_dettaglio.php&cantiere=sdkext" scrolling="yes"></iframe> </frame>	


						
















	

	
		
		
		
			
			
			
			
		
	
	





						
					  		














					  	
					
				</div>
				
















<script type="text/javascript">
	  
		  
		  
		  	  
	      
      
      
      
      
      
      
      function stampa() {
         window.print();
      }

	  function indietro(forward) {
	  	  var url = '/sapef23/f23/stepBackConferma.do?forwarding=';
    	  moduloF23functionJS(url + forward);
      }
</script>

	<div class="pull-right margin-bottom20">
		<input type="button" class="btn btn-primary" value="Stampa" href="#" onclick="javascript: stampa();">
		
		
			<input type="button" class="btn btn-primary btn-white" value="Indietro" href="#" onclick="javascript: indietro('listaRiepilogo');">
		
		
			
			
				
			
			
			
			
			
				
					
				
			
		
	    
        &nbsp;
   		
	</div>










			<div class="clearfix"></div>
		</div>
</div>
	</div>
</div>


 










<iframe name="footerFrame" id="footer" width="" height="" frameborder="0" scrolling="no" seamless="true" src=""></iframe>




<iframe name="keepAlive" id="keepAlive" width="0" height="0" seamless="true" src=""></iframe>










<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>