

<div class="widget">
	<div id="carouselSpalla" class="carousel slide">
    		<!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
				<div class="item active">
			        <a href="javascript:;"><img src="/HT/fe/img/pl_carousel1.png" alt="Immagine 1 carousel"></a>
			     </div>
			     <div class="item">
			        <a href="javascript:;"><img src="/HT/fe/img/pl_carousel2.png" alt="Immagine 2 carousel"></a>
			     </div>
			     <div class="item">
			       <a href="javascript:;"><img src="/HT/fe/img/pl_carousel3.png" alt="Immagine 3 carousel"></a>
			     </div>
				
			</div>
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#carouselSpalla" data-slide-to="0" class="active"></li>
		      <li data-target="#carouselSpalla" data-slide-to="1"></li>
		      <li data-target="#carouselSpalla" data-slide-to="2"></li>
		    </ol>
  	</div>
</div>
<script>
	//se il numero degli elementi è inferiore a due il carousel non viene inizializzato e l'indicatore nascosto

	$(function() {
		var numberItem = $('#carouselSpalla').find('.item');
		if(typeof numberItem != undefined && numberItem.length>1)
		$('#carouselSpalla').carousel(
			{
				interval : 5000
			}
		)
		else{
			$('.carousel-indicators').hide();
		}
	})

</script>
