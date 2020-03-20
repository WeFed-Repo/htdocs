<div class="with-stepper">
	<h1>
		Bollo Auto: Conferma
	</h1>
	<div class="stepper">
		<div class="dot on"></div>
		<div class="dot on"></div>
		<div class="dot on"></div>
	</div>
</div>

<div class="row">
	<div class="col-12 col-md-6 d-flex flex-column align-items-stretch">
		<!-- le classi d-flex flex-column align-items-stretch sul col e la classe flex-grow-1 sul bordered allineano in altezza i box quando necessario. -->
		<div class="bordered pb-2 mt-3"><!-- il primo box NON deve avere flex-grow-1 -->
			<h3>Ordinante</h3>
			<div class="row">
				<div class="col-12">
					<div class="list">
						<dt class="list-key">Intestato a</dt>
						<dd class="list-value">Nome</dd>
					</div>
					<div class="list">
						<dt class="list-key">IBAN</dt>
						<dd class="list-value">IT24V03237464463443253425</dd>
					</div>
				</div>
			</div>
		</div>

		
	</div>
	<!-- le classi d-flex flex-column align-items-stretch sul col e la classe flex-grow-1 sul bordered allineano in altezza i box quando necessario. -->
	<div class="col-12 col-md-6 d-flex flex-column align-items-stretch">
		<div class="bordered pb-2 mt-3 flex-grow-1">
			<h3>Dati bolletta</h3>
			<div class="row">
				<div class="col-12">
					<div class="list">
						<dt class="list-key">Targa</dt>
						<dd class="list-value">DF23532</dd>
					</div>
					<div class="list">
						<dt class="list-key">Validità mesi</dt>
						<dd class="list-value">12</dd>
					</div>

					<div class="list">
						<dt class="list-key">Id. Pagamento</dt>
						<dd class="list-value">123123123</dd>
					</div>

					<div class="list">
						<dt class="list-key">Numero Delibera</dt>
						<dd class="list-value">234342424324</dd>
					</div>

					<div class="list">
						<dt class="list-key">Importo</dt>
						<dd class="list-value">00,00 EUR</dd>
					</div>

					<div class="list">
						<dt class="list-key">Commissioni</dt>
						<dd class="list-value">00,00 EUR</dd>
					</div>

					<div class="list">
						<dt class="list-key">Totale</dt>
						<dd class="list-value">00,00 EUR</dd>
					</div>
					<div class="list">
						<dt class="list-key">Info aggiuntive</dt>
						<dd class="list-value full-w">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- TOKEN -->

<div class="bordered pb-2 mt-3 mb-3 pb-3">
	<h3>Conferma</h3>
	<div class="row align-items-center">
		<div class="col-12 col-md-6">
			<p>Per proseguire è necessario inserire la password usa e getta riportata sul display del tuo dispositivo di sicurezza token</p>
		</div>
		<div class="col">
			<div class="d-flex align-items-center justify-content-between">
				<img class="display-icon d-none d-lg-block" src="./fe/img/display.svg">
				<form class="w-100 ml-0 ml-lg-4 mr-3 my-3">
	        		<input type="text" class="form-control mb-0" placeholder="Inserire il codice token">
				</form>
				<button type="button" class="btn-icon-help" data-toggle="tooltip" title="Token"></button>
			</div>
		</div>
	</div>
</div>

<?php 
pulsantiera_obj(array(
	'right' => array(
		array(
		'class'=>'secondary',
		'label'=>'Indietro',
		'link'=>'tpl_bollo_auto'
		),
		array(
		'class'=>'primary',
		'label'=>'Avanti',
		'link'=>'tpl_bollo_auto_3'
		)
	),
));
?>