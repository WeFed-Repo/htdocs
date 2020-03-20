<div class="dhb-configuratore">

	<?php virtual('/youwebbusiness/layout/oggetti/dashboard/configuratore/script.php');?>

	<div class="dhb-configuratore__list-desktop">
		<div class="dhb-bar box bordered p-3 mb-3">
		  <div class="row">
		    <div class="col-12">
		      <h4>Personalizza la tua home page</h4>
		      <p class="mt-3 mb-md-0">
				Organizza al meglio la tua operatività: scegli le funzioni (widget) che utilizzi più spesso,
				trascinale nell'area sottostante e ordinale in base alle tue esigenze. <br /> Le ritroverai nella tua home page.
		      </p>
		    </div>
				<?php //virtual('/youwebbusiness/layout/oggetti/dashboard/configuratore/carousel.php');?>
		  </div>
		</div>
	</div>

	<h2>Widget disponibili</h2>
	<ul class="dhb-configuratore__list"></ul>
	<hr />

	<div id="phAlert" style="display:none" class="alert alert-warning">
		<strong>ATTENZIONE!</strong> &nbsp; Per salvare, trascina almeno 2 widget sulla tua homepage.
	</div>

	<div id="pershome" class="loading">
		<h2>Widget in pagina</h2>
		<ul id="phWidgetBoxes" class="dhb-configuratore__boxes"></ul>
	</div>

</div>
