<h2>Tempi e costi</h2>

<!-- Navigatore tab -->
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabbig">
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_tempi.php&responsive=y&liv0=4&liv1=2&liv2=1&liv3=1">tempi</a></li>
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_costi_commissioni.php&responsive=y&liv0=4&liv1=2&liv2=1&liv3=1">costi e commissioni</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_investimenti_minimi.php&responsive=y&liv0=4&liv1=2&liv2=1&liv3=1">investimenti minimi</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_tassazione.php&responsive=y&liv0=4&liv1=2&liv2=1&liv3=1">tassazione</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>
<!-- Fine navigatore tab -->

<!-- Testo introduttivo -->
<ul>
	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius <strong>mollitia</strong> quae iste numquam eaque assumenda harum, vero pariatur corporis doloribus. Fugit inventore numquam cumque quas molestiae in incidunt, tempore rerum.</li>
	<li>Amet, consectetur adipisicing elit. Eius mollitia quae iste numquam eaque assumenda harum, vero pariatur corporis doloribus. Fugit inventore numquam cumque quas molestiae in incidunt, tempore rerum.</li>
</ul>
<p>Seleziona la società di gestione per visualizzarne le tempistiche operative.</p>
<!-- fine testo introduttivo -->
<form class="formGenerico borderFormRounded" role="form">
	<div class="form-group">
        <div class="row">
            <div class="col-xs-12 requiredField">
                <label class="control-label">Societ&agrave; di gestione</label>
                <select name="" class="form-control">
                  	<option value="190" selected>Algebris Ucits Funds plc</option> 

					<option value="151">Allianz Global Investors Lux.</option> 

					<option value="7017">Amundi Funds</option> 

					<option value="144">Anima Asset Management ltd</option> 

					<option value="888" selected="">Anima Sgr Spa</option> 

					<option value="900">BlackRock (Luxembourg) S.A.</option> 

					<option value="125">Carmignac Gestion</option> 

					<option value="126">Carmignac Portfolio Sicav</option> 

					<option value="380">Morgan Stanley Investment Fund</option> 

					<option value="180">NN(L) Investment Funds</option> 

					<option value="901">Pictet Funds (Europe) S.A.</option> 

					<option value="7014">Pimco Funds Gl.Inv. Series Plc</option> 

					<option value="195">Raiffeisen Capital Management</option> 

					<option value="902">Schroder Int. Selection Fund</option> 
                </select>
            </div>
        </div>

    </div>



	<!-- Tabella di riepilogo -->
    <div class="row">
    	<div class="col-xs-12">

    		<table border="0" cellspacing="0" cellpadding="0" data-toggle="table" class="valign-middle">
    		<!-- Header -->	
    		<tr>
			    <th colspan="2">Operazione</th>
			    <th colspan="2">Commissioni</th>
			    <th>Diritti Banca Corrispondente</th>
			</tr>

			<!-- Sottoscrizione -->
			<tr>
			    <td rowspan="6"><strong>Sottoscrizione</strong></td>
			    <td rowspan="2">Azioni Classe AT</td>
			    <td>Obbligazionari</td>
			    <td><strike>Min 4%  Max 5%</strike> <strong>ZERO</strong></td>
				<td rowspan="6">€ 10,00 PIC<br><br>
				€ 10 Versamento iniziale PAC + <br>
				€ 1,00 su ogni rata successiva<br>
				<br>
				Stacco cedola:  <strong>ZERO</strong></td>
			</tr>
			<tr>
			    <td>Azionari</td>
			    <td><strike>Min 4%  Max 5%</strike> <strong class="heavy">ZERO</strong></td>
			</tr>

			<tr>
			    <td rowspan="3">Azioni Classe CT - CT2</td>
				<td>Obbligazionari</td>
			    <td><strike>Min 4%  Max 5%</strike> <strong class="heavy">ZERO</strong></td>
			</tr>

			<tr>
				<td>Azionari</td>
			    <td><strike>Min 4%  Max 5%</strike> <strong class="heavy">ZERO</strong></td>
			</tr>

			<tr>
				<td>Liquidit&agrave;</td>
			    <td><strike>Min 4%  Max 5%</strike> <strong class="heavy">ZERO</strong></td>
			</tr>
			
			<tr>
				
			    <td>Azioni Classe C</td>
			    <td colspan="2"><strike>3%</strike> <strong class="heavy">ZERO</strong></td>
			
			</tr>
			<!-- fine sottoscrizione -->

			<!-- Switch -->
			<tr class="pari">
				<td><strong>Switch</strong></td>
			    <td>Tutte le classi di azioni</td>
			    <td colspan="2"> <strong class="heavy">ZERO</strong></td>
			    <td> <strong>ZERO</strong></td>
			</tr>
			<!-- Fine switch -->


			<!-- Switch -->
			<tr>
				<td><strong>Rimborso</strong></td>
			    <td>Tutte le classi di azioni</td>
			    <td colspan="2"> <strong>ZERO</strong></td>
			    <td> <strong>ZERO</strong></td>
			</tr>
			<!-- Fine switch -->

			
			</tbody>
			
			</table>

    	</div>

    </div>
    <!-- Fine tabella di riepilogo -->
	
	<?php print randomPar(30); ?>
	<ul>
		<li><?php print randomText(10); ?></li>
		<li><?php print randomText(15); ?></li>
		<li><?php print randomText(8); ?></li>
		<li><?php print randomText(12); ?></li>
	</ul>
	<?php print randomPar(40); ?>
	
	


	<!-- CTA -->
    <div class="form-group">
		<div class="row">
	      <div class="col-xs-12">
	        <div class="btn-align-right">
	          <a type="button" class="btn btn-primary">Vedi tutti i fondi di questa societ&agrave;</a>
	        </div>
	      </div>
	    </div>
    </div>
    <!-- FINE CTA -->

</div>

</form>