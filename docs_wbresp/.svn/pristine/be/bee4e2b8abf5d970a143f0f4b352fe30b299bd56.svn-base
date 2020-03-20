
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->




<html class="no-js" lang=""> <!--<![endif]-->






	

<head>
	<title>Webank</title>
	



<meta name="description"
	content="Conto Corrente + Conto di Deposito Webank: Zero spese, Interessi vantaggiosi e Trasferisci quando vuoi Liquidità tra deposito e Conto corrente online">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	


<script type="text/javascript" src="/dtagent_ICASTVq_7000000041003.js" data-dtconfig="agentUri=/dtagent_ICASTVq_7000000041003.js|rid=RID_113543901|rpid=-2144260381|domain=webank.it|lastModification=1501760174463|lab=1|reportUrl=dynaTraceMonitor|app=Default Application"></script><link rel="stylesheet" href="/wbresp/css/bootstrap.min.css?a=435">

<link rel="stylesheet" href="/wbresp/css/bootstrap-theme.css?a=435">
<link rel="stylesheet" href="/wbresp/css/bootstrap-slider.min.css?a=435">
<link rel="stylesheet" href="/wbresp/css/font-awesome.min.css?a=435" />
<link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox.min.css?a=435" />
<link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox-styles.min.css?a=435" />
<link rel="stylesheet" href="/wbresp/css/bootstrap-select.min.css?a=435" />

<!--  <link rel="stylesheet" href="/wbresp/css/main.css?a=435"> -->
<link rel="stylesheet" href="/wbresp/css/base.css?a=435">


<link rel="stylesheet" href="/wbresp/css/contenuti.css?a=435">

<link rel="stylesheet" href="/wbresp/css/buttons.css?a=435">


<script src="/wbresp/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="/wbresp/js/vendor/jquery-1.11.2.min.js"></script> 
</head>
<body>
	






<!--DOVE SONO = jboss08:webank01 -->


<script type="text/javascript">
	function checkUserAndPwdNew(userValue, pwdValue) {
		var check = true;
	
		check =  !((userValue.length == 0) || (userValue.toLowerCase() == "codice cliente") || (userValue.toLowerCase() == "codice utente") || (userValue.toLowerCase() == "user id") || (userValue.toLowerCase() == "idCl"));
		
		check = check && !((pwdValue.length == 0) || (pwdValue.toLowerCase() == "password"))
		
		return check;
	}
	$(function () {
		$("#buttonEntra").click(function() {
			if (checkUserAndPwdNew($("#idCl").prop("value"), $("#pwd1b").prop("value"))) {
				$("#toplogin").submit();
			}
		});
		
		$("#idCl, #pwd1b").keypress(function(event) {
			if (event.which == 13) {
				if (checkUserAndPwdNew($("#idCl").prop("value"), $("#pwd1b").prop("value"))) {
					event.preventDefault();
					$("#toplogin").submit();
				}
			}
		});
	} );
</script>

<!-- header -->
<?php include("header.php");?>
<!-- fine header -->	

<!-- blocco contenuto centrale -->
<?php include("");?>
<!-- fine blocco contenuto centrale -->			

<!-- footer -->
<?php include("footer.php");?>
<!-- fine footer -->

<script src="/wbresp/js/vendor/bootstrap.min.js"></script>
<script src="/wbresp/js/vendor/jquery.smooth-scroll.min.js"></script>
<script src="/wbresp/js/vendor/jquery.touchSwipe.min.js"></script>
<script src="/wbresp/js/bootstrap-slider.min.js"></script>
<script src="/wbresp/js/vendor/jquery.viewportchecker.min.js"></script>
<script src="/wbresp/js/bootstrap-select.min.js"></script>
<script src="/wbresp/js/main.js"></script>
<script src="/wbresp/js/utilities.js"></script>



<script src="/wbresp/js/jquery.validate.js"></script>
<script src="/wbresp/js/check_generic_form.js"></script>	
<script src="/wbresp/js/check_contatti_form.js"></script>
<script src="/wbresp/js/check_eventi_form.js"></script>
<script src="/wbresp/js/check_sales_team_form.js"></script>
<script src="/wbresp/js/check_errore_login.js"></script>
<script src="/wbresp/js/check_stato_pratica.js"></script>
<script src="/wbresp/js/check_trading_form.js"></script>
<script src="/wbresp/js/check_contatta_trading_form.js"></script>

<script>
    $(document).ready(function() {
        // $('ul.submenu a').smoothScroll();
        $('ul.submenu a').on('click', function(e) {
            e.preventDefault();

            var target = this.hash,
                $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 220 // - 200px (nav-height)
            }, 400, 'swing', function() {
                window.location.hash = '1' + target;
            });
        });

    });
    </script>

    <script>
    $( document ).ready(function() {
        $(".espandi").click(function(){
            $(this).hide();
            $(this).next().show();
            $(this).parent().next().show();
        });
        $(".comprimi").click(function(){
            $(this).hide();
            $(this).prev().show();
            $(this).parent().next().hide();
        });
    });
    </script>


<script>
$(document).ready(function() {
	$(".nav-tabs li a").click(function(){
		$(".nav-tabs li a").parent().removeClass("active");
		$(this).parent().addClass("active");
		if ($(this).hasClass("nav1")) {
			$("#myCarouselMutuo").show();
			$("#myCarouselMutuo2").hide();
		}
		else if ($(this).hasClass("nav2")) {
			$("#myCarouselMutuo2").show();
			$("#myCarouselMutuo").hide();
		}
	});

$("#ex6").slider();
$(".slider-handle").text("20");
$("#ex6").on("slide", function(slideEvt) {
	$("#ex6SliderVal").val(slideEvt.value);
  $(".slider-handle").text(slideEvt.value);
});




 });
</script>

<script>
$( document ).ready(function() {
  $("p.exp").click( function() {
  	$(this).next().toggle();
    if ($(this).hasClass("less")) {
      $(this).removeClass("less");
    }
    else {$(this).addClass("less");}

  });

  $(".nav-tabs a").click(function(){
    $(".nav-tabs li").removeClass("active");
    $(this).parent().addClass("active");
    if ($(this).hasClass("nav1")) {
      $("#tabella_variabile").hide();
      $("#tabella_fisso").show();
    }
    else {
      $("#tabella_fisso").hide();
      $("#tabella_variabile").show();
    }
  });

  $(".selectnav").on('change', function () {
    var v = $(this).val();
    if (v == 'nav1') {
      $("#tabella_variabile").hide();
      $("#tabella_fisso").show();
    }
    else {
      $("#tabella_fisso").hide();
      $("#tabella_variabile").show();
    }
    return false;
  });
});
</script>


 <script>
    function changeTab(item) {


        $('.tabellaMercati').hide();
        $('.testoMercati').hide();
        $('#trading-mercati-azioni-labels li').removeClass('active');
        $('#' + item + '-btn').addClass('active');
        $('#' + item.replace('trading-', 'tabella_')).show();
        $('#' + item.replace('trading-', 'testo_')).show();

    }


    $(function() {
        // bind change event to select
        $('.selectnav').on('change', function() {
            var panelC = $(this).val(); // get selected value
            if (panelC) { // require a URL
                changeTab(panelC);

            }
            return false;
        });


        if (window.location.hash) {
            var hash = window.location.hash.substring(1);
            if (hash == 'azioni') {
                changeTab('trading-azioni');
            } else if (hash == 'obbligazioni') {
                changeTab('trading-obbligazioni');
            } else if (hash == 'etf-cw-certificates') {
                changeTab('trading-etf');
            } else if (hash == 'derivati') {
                changeTab('trading-derivati');
            }
        }


    });
    </script>


<script>
  $(function(){
      // bind change event to select
      $('.selectnav').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>

</body>
</html>
