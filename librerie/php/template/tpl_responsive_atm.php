<h2>Abbonamento ATM Milano</h2>
<ul>
	<li>Per acquistare un abbonamento ATM seleziona il conto corrente di addebito, inserisci il numero di tessera senza spazi e clicca su prosegui.</li>
	<li>Saranno <strong>mostrati solo gli abbonamenti disponibili all'acquisto.</strong></li>
</ul>
<section>
	<div class="tithelp">
		<h4>Inserisci i dati</h4>
	</div>
	<form class="formGenerico borderFormRounded" role="form" id="">
		<div class="form-group">	 
			<div class="row">
			    <div class="col-sm-6">
					<label class="control-label-output">Conto di addebito</label>
					<span class="output">01077 0000049477 EUR</span>
				</div>
				<div class="col-sm-3">
					<label class="control-label-output">Data esecuzione</label>
					<span class="output">01/04/2016</span>
				</div>
				<div class="col-sm-3">
					<label class="control-label-output">Saldo disponibile</label>
					<a href="#">38,73&nbsp;&euro;</a>
				</div>
			</div>
		</div>
		<div class="form-group">	 
			<div class="row">
			    <div class="col-xs-3 requiredField">
					<label class="control-label txthelp closeable" data-placement="bottom" data-toggle="tooltip"  data-title="<img alt='tessera atm' src='/wscmn/img/img_dati_atm.jpg'><p>Inserisci tutte le cifre senza spazi</p>">Tessera n&deg; *</label>
					<input type="text" name="" class="form-control clear-x">
				</div>
				<div class="col-sm-3 no-label">
					<div class="checkbox">
       					<label class="textWrapper">
		         			<input type="checkbox" name="" id="">
		          			<span class="text">Inserisci in rubrica</span>
		        		</label>
     				</div>
				</div>
				 <div class="col-xs-3 ">
					<label class="control-label">Intestata a</label>
					<input type="text" name="" class="form-control clear-x">
				</div>
				<div class="col-sm-3">
					<label class="control-label">Servizio</label>
					<img src="/wscmn/img/ret/logo_atm.gif">
				</div>
			</div>
		</div>
	</form>
</section>
<section>
    <div class="form-group btnWrapper">
        <div class="stepBtn">Step <strong> 1 </strong> di 3</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="#">prosegui</a>
        </div>
        <div class="clear"></div>
    </div>
</section>

<div class="modal fade" id="layerATM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>Attenzione! Dopo la ricarica dell'abbonamento, per poter viaggiare &egrave; necessario attivare l'abbonamento recandosi presso uno dei totem presenti in tutte le stazioni della metropolitana o uno dei 500 parcometri a Milano.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(window).load(function() {
  $("#layerATM").modal("show");
});
</script>