<!--nuova sezione bonifici ordinari e veloci -->
<!-- titolo e stepper oggetti già esistenti-->
<section>
	<div class="titolo">
		<h1>
			<div class="row">
				<div class="col-sm-8">
					<span>Bonifico ordinario/veloce</span>
				</div>
                <?php 
					if ($site == "youweb") 
				
					{
				?>
                <div class="col-sm-4">	
			 		<div class="pager pull-right">
						<div class="circle current_page">1</div>
						<div class="circle ">2</div>
						<div class="circle ">3</div>
                        <div class="circle ">4</div>
					</div>
				</div>
                <?php
					}
				?>
			</div>
		</h1>
	</div>
</section>

<!-- selettore rapporto skinnato per selezione conti-->
<?php virtual ("/include/oggetti/Form/commons/021_Nuovo_selettore_rapporto_dispo/oggetto.php"); ?>



