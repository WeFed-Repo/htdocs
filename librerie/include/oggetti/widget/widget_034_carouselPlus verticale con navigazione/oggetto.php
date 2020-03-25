<!--
	ATTRIBUTI PER INIZIALIZZAIONE
	data-loop: true o false => attiva/disattiva il loop
	data-interval: milliseconds => intervallo del loop
	data-currentPage: indice che parte da 0 => pagina iniziale

	METODI PER MODIFICHE RUNTIME
	$('#carouselPlusTest').carouselPlus('currentPage', 0);
	$('#carouselPlusTest').carouselPlus('interval', 1000);
	$('#carouselPlusTest').carouselPlus('startLoop');
	$('#carouselPlusTest').carouselPlus('stopLoop');
-->
<div id="carouselPlusVertical" class="carouselPlus" data-vertical="true" data-loop="true">
    <div class="carouselPlusPages">
        <div class="carouselPlusPage">
            <div class="carouselPlusPageWrap">
            	<h4>Slide 1</h4>
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus officia. Atque quis, eos voluptas labore, dolores placeat accusantium officia pariatur fugiat asperiores, temporibus. Aliquam.</p>
            </div>
        </div>
        <div class="carouselPlusPage">
            <div class="carouselPlusPageWrap">
            	<h4>Slide 2</h4>
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus officia. Atque quis, eos voluptas labore, dolores placeat accusantium officia pariatur fugiat asperiores, temporibus. Aliquam.<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus officia. Atque quis, eos voluptas labore, dolores placeat accusantium officia pariatur fugiat asperiores, temporibus. Aliquam.</p>
            </div>
        </div>
        <div class="carouselPlusPage">
            <div class="carouselPlusPageWrap">
            	<h4>Slide 3</h4>
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus officia. Atque quis, eos voluptas labore, dolores placeat accusantium officia pariatur fugiat asperiores, temporibus. Aliquam.<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus officia. Atque quis, eos voluptas labore, dolores placeat accusantium officia pariatur fugiat asperiores, temporibus. Aliquam.<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate suscipit animi ea perferendis, sint repellendus officia. Atque quis, eos voluptas labore, dolores placeat accusantium officia pariatur fugiat asperiores, temporibus. Aliquam.</p>
            </div>
        </div>
    </div>
    <div class="carouselPlusNav">
        <div class="carouselPlusBtn on"></div><!--
        --><div class="carouselPlusBtn"></div><!--
        --><div class="carouselPlusBtn"></div>
    </div>
</div>
