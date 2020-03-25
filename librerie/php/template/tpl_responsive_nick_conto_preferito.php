<h2>Nickname e conto preferito</h2>

<section>
	<div class="boxesitoWrap">
		<div class="boxesito positivo">
			<i class="icon icon-alert_ok icon-2x"></i>
				<div class="text">
					<div class="row">
						<div class="col-xs-12">
						<p>Le tue impostazioni sono state salvate</p>
						</div>
					</div>
				</div>
		</div>
	</div>
</section>

<section>
	<ul>
		<li>Scegli tra i tuoi conti <strong>quello che più utilizzi.</strong> Una volta impostato, lo troverai <strong>preselezionato</strong> in tutte le operazioni, senza doverlo scegliere ogni volta. Sarà contraddistinto da una stellina gialla.</li>
		<li>Hai inoltre la possibilit&agrave; di <strong>associare</strong> al numero di conto <strong>un nome</strong> (il <strong>nickname</strong>), che ti aiuti a <strong>riconoscerlo</strong> e <strong>ricordarlo</strong> nelle tue operazioni.</li>
		<li>Il <strong>nickname</strong> pu&ograve; essere composto al massimo da <strong>12</strong> caratteri (lettere e numeri).</li>
	</ul>
</section>

<section>
	<h4>Conti correnti e depositi</h4>

	<table cellspacing="0" cellpadding="0" border="0" class="dettTable" data-toggle="table">
		<thead>
			<tr>
				<th>Preferito</th>
				<th>N. conto corrente e deposito</th>
				<th>Intestatari</th>
				<th>Nickname</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="center">
					<input type="radio" value="01077 - 0000049477 - EUR" name="preferredAcount" class="prefConto" checked>
					<a href="#1" class="btn-icon"><i class="icon icon-star_fill" title="icon-star_fill"></i></a>
	     		</td>
				<td class="center">CC 01077 0000049477 EUR<br>DEP 01076 0000049477 EUR</td>
				<td class="center">FRANCO PALLONI</td>
				<td class="center"><input type="text" class="form-control clear-x" placeholder="inserire nickname"></td>
			</tr>
			<tr>
				<td class="center">
					<input type="radio" value="01077 - 0000049477 - EUR" name="preferredAcount" class="prefConto">
					<a href="#1" class="btn-icon"><i class="icon icon-star" title="icon-star_fill"></i></a>
	     		</td>
				<td class="center">CC 01077 0000012345 EUR<br>DEP 01076 0000012345 EUR</td>
				<td class="center">FRANCO PALLONI</td>
				<td class="center"><input type="text" class="form-control clear-x" placeholder="inserire nickname"></td>
			</tr>
		</tbody>
	</table>

	<div class="form-group btnWrapper">
		<div class="btn-align-right">
			<a type="button" class="btn btn-primary" id="">salva modifiche</a>
		</div>
		<br class="clear">
	</div>
</section>

<script>
 $(function () {
$('.prefConto').bind('click', function(){
	if($(this).is(":checked")){
	   	$('.prefConto').next('a.btn-icon').find('i').attr('class','icon icon-star');
	 	$(this).next('a.btn-icon').find('i').attr('class','icon icon-star_fill');
	}
	else{
		$(this).next('a.btn-icon').find('i').attr('class','icon icon-star');
	}
});
});
</script>
