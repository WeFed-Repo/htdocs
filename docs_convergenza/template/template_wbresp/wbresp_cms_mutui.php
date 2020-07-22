<?php
	$nonMutui = false;
	$imgBackHero= '/wbresp/img/hero/main_hero_mutuo.jpg';
?>
<!--MINI HERO -->
<?php virtual ("/include/oggetti_wbresp/box/box_010.php")?>
<!--FINE MINI HERO -->

<!--titoli e tab fissi non modificabili via content -->
<h4 class="text-align-center">SCEGLI IL MUTUO CHE FA PER TE!</h4>
<div class="mutuo large-mob-carousel" id="">
	<ul class="nav nav-tabs">
		<li class="active"><a class="nav1">Acquisto<span class="hidden-xs"> o ristrutturazione</span></a></li>
		<li><a class="nav2">Surroga</a></li>
	</ul>
	<?php
		$idCar= 'myCarouselMutuo';
		$boxdueCol = 'myCarouselMutuoWrapper';
	?>
	<?php virtual ("/include/oggetti_wbresp/box/box_030.php")?>
	<?php
		$idCar= 'myCarouselMutuo2';
		$boxdueCol = 'myCarouselMutuoWrapper2';
		$styleDisplay = 'none'
	?>
	<?php virtual ("/include/oggetti_wbresp/box/box_030.php")?>
</div>
<script>
$(document).ready(function() {
	$(".nav-tabs li a").click(function(){
		$(".nav-tabs li a").parent().removeClass("active");
		$(this).parent().addClass("active");
		if ($(this).hasClass("nav1")) {
			$("#myCarouselMutuoWrapper").show();
			$("#myCarouselMutuoWrapper2").hide();
		}
		else if ($(this).hasClass("nav2")) {
			$("#myCarouselMutuoWrapper2").show();
			$("#myCarouselMutuoWrapper").hide();
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
