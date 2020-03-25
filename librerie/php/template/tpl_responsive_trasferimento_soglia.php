<section>
	<h2>A soglia</h2>	
<p>

</p>
<p>
	In questa pagina &egrave; possibile impostare una <strong>soglia minima e/o soglia massima</strong> sul saldo del tuo conto corrente
</p>


<ul>
	<li>
		L'<strong>impostazione</strong> di una <strong>soglia</strong> sul conto corrente ti permette di tenere <strong>sotto 
		controllo</strong> la tua <strong>liquidit&agrave;</strong> e il tuo <strong>risparmio</strong>. Una volta impostata la soglia, non dovrai fare pi&ugrave; nulla: <span class="txthelp"><strong data-title="Il ripristino della soglia avviene a fine giornata verificando il valore del saldo disponibile." data-toggle="tooltip" data-original-title="" title="">automaticamente</strong></span> il tuo <strong>deposito</strong> verr&agrave; <strong>alimentato</strong> e/o il tuo <strong>conto corrente</strong> verr&agrave; <strong>ripianato.</strong>
	</li>
	<li>	
		Se imposti una <strong>soglia massima,</strong> quando il saldo del conto corrente supera la soglia, 
		l'<strong>eccedenza</strong> viene trasferita automaticamente sul tuo <strong>deposito.</strong>
	</li>
	<li>	
		Se imposti una <strong>soglia minima,</strong> quando il saldo del conto corrente scende sotto la soglia, la
		 <strong>differenza</strong> viene <strong>ripianata,</strong> recuperando l'importo automaticamente dal tuo deposito.
	</li>
	<li>	
		Puoi <strong>ottimizzare</strong> la gestione dei tuoi soldi <strong>impostando</strong> contemporaneamente <strong>soglia massima e minima.</strong> Potrai cos&igrave; <strong>essere certo</strong> che il <strong>saldo</strong> del tuo conto corrente rester&agrave; sempre <strong>all'interno delle soglie impostate.</strong>
	</li>	
</ul>



</section>


<section>

<div class="tithelp">
	<h4>Imposta le soglie</h4>
	<div class="flRight">
		<a href="#" class="no-underline btn-icon" data-toggle="modal" data-target="#layerSepa">
			<i class="icon icon-info_fill icon-2x"></i >
		</a>
		<br class="clear">
	</div>
	<br class="clear">
</div>





<!-- FORM -->
<form class="formGenerico borderFormRounded" role="form" id="form01">
	
	<div class="form-group">
	    <div class="row">
			<div class="col-sm-6">
			<label class="control-label">Conto corrente deposito</label>
					<select class="form-control">
						<option>seleziona conto</option>
						<option>CC 01099 0000083891 EUR+DEP</option>
						<option>CC 01077 0000099882 EUR+DEP</option>
					</select>
			</div>
	   	</div>
	</div>

	<div class="form-group">
	    <div class="row">
			<div class="col-sm-6">
			<label class="control-label">Importo massimo sul conto</label>
				<div class="form-inline">
					<div class="requiredField">
						<div class="input-group" id="">
							<input maxlength="10" id="importoMassimo" value="" type="number"  name="importo" class="form-control clear-x">
							<div class="input-group-addon">,00</div>
						</div>
					</div>
				</div>		
			</div>
			<div class="col-sm-6">
			<label class="control-label">Importo minimo sul conto</label>
				<div class="form-inline">
					<div class="requiredField">
						<div class="input-group" id="">
							<input maxlength="10" id="importoMinimo" value="" type="number" name="importo" class="form-control clear-x">
							<div class="input-group-addon">,00</div>
						</div>
					</div>
				</div>
			</div>
	   	</div>
	</div>

	



	   


 
    	<div class="form-group btnWrapper">
			<div class="btn-align-right">
				<a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_trasferimento_soglia_step_2.php&responsive=y&liv0=4&liv1=1&liv2=0&liv3=2" type="button" class="btn btn-primary" id="">Prosegui</a>
			</div>
			<br class="clear">
		</div>
</form>



</section>



<!-- Overlayer-->


<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Impostazione soglia</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							
							<p>
								In questa pagina &egrave; possibile impostare una soglia minima e/o soglia massima sul saldo del tuo conto corrente.
							</p>
							<ul>
								<li>
									Se il saldo del conto corrente scende sotto la soglia minima, sar&agrave; effettuato un trasferimento dal deposito al conto corrente. Il trasferimento andr&agrave; a colmare la differenza tra il valore di soglia impostata e il saldo disponibile sul conto corrente.
								</li>
								<li>
									Se il saldo del conto corrente supera la soglia massima, sar&agrave; effettuato un trasferimento dal conto corrente al deposito pari alla differenza tra il saldo contabile e il valore di soglia impostata. 
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Overlayer-->

<!-------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------------------->

<hr/>
<hr/>
	<p class="align-center "><strong>DI SEGUITO il template con la soglia già impostata </strong></p>
<hr/>
<hr/>



<section>
	<h2>A soglia</h2>	
<p>
	<strong>Soglia impostata</strong>
</p>
<p>
	In questa pagina è possibile impostare una soglia minima e/o soglia massima sul saldo del tuo conto corrente.
</p>

<ul>
	<li>
		Se il saldo scende sotto la soglia minima, sar&agrave; effettuato un trasferimento <strong>dal deposito al conto corrente.
		</strong> 
		Il trasferimento andr&agrave; a colmare la differenza tra il valore di soglia impostata e il saldo disponibile sul conto corrente.
	</li>
	<li>
		Se il saldo del conto supera la soglia massima, sar&agrave; effettuato un trasferimento <strong>dal conto corrente al deposito
		</strong> pari alla differenza tra il saldo contabile e il valore di soglia impostata.		
	</li>
</ul>



</section>


<section>

<div class="tithelp">
	<h4><span class="flLeft">Riepilogo dati</span> <a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_trasferimento_soglia.php&responsive=y&liv0=4&liv1=1&liv2=0&liv3=1#" class="iconFormUpdate btn-icon"><i class="icon icon-edit_fill icon-2x"></i></a></h4>														
	<br class="clear">
</div>

<!-- FORM -->
<form class="formGenerico borderFormRounded" role="form" id="form01">
	
	<div class="form-group">
	    <div class="row">
			<div class="col-sm-6">
				<label class="control-label-output">Conto corrente deposito</label>
				<span class="output">CC 01099 0000083891 EUR+DEP</span>
			</div>
	   	</div>
	</div>

	<div class="form-group">
	    <div class="row">
			<div class="col-sm-6">
				<label class="control-label-output">Importo massimo sul conto</label>
				<span class="output">150,00</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Importo minimo sul conto</label>
				<span class="output">20,00</span>
			</div>
	   	</div>
	</div>

<!-- BTN-->
<div class="form-group btnWrapper">

	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id=""   data-toggle="modal" data-target="#layerElimina" href="#">Elimina</a>
	</div>
	<br class="clear">
</div>
<!-- BTN-->

</form>
</section>











<!-- Overlayer-->


<div class="modal fade" id="layerElimina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Elimina soglia</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							
							<p>
								Sei sicuro di voler eliminare questa soglia ? 
							</p>
							
								

								<!-- BTN-->
								<div class="form-group btnWrapper">
									<div class="btn-align-right">
										<a type="button" class="btn btn-primary" id="" 
										href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_trasferimento_soglia.php&responsive=y&liv0=4&liv1=1&liv2=0&liv3=2">Elimina soglia</a>
									</div>
									<br class="clear">
								</div>
								<!-- BTN-->


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Overlayer-->


