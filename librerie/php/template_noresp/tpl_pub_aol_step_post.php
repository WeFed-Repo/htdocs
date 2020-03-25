<!-- ESEMPIO GESTIONE ERRORI NON COPIARE -->
		<script type="text/javascript">
			//Esempio di setting di alcuni errori
			errori = false;
			function esempioErrori()
			{
				if (errori)
				{
					parent.location.href = "/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_post_ok.php";
					return 0;
				}
				setError('perTe','Non hai selezionato nessuna preferenza');
				
				
				//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
				errori = true;
			}
		</script>
	<!-- FINE ESEMPIO GESTIONE ERRORI NON COPIARE -->


<div id="aolcontainer" class="post">
	<h2 class="title">Webank &egrave; molto altro ancora!</h2>
	<br class="clear" />
	<p class="large"><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Duis id metus erat. Cras consectetur varius est eu consequa. Sed eu nisl a dui 
venenatis fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae!</p>
	<!-- primo box-->
	<form>
	<fieldset class="check">
	<div class="boxperte">
		<img src="/img/celletta_promo1.gif" alt=""/>
		<label><input type="checkbox" id="perTe1" title="Lorem ipsum dolor sit amet"><span class="">Mi interessa</span></label>
	</div>
	<!-- secondo box-->
	<div class="boxperte">
		<img src="/img/celletta_promo2.gif" alt=""/>
		<label><input type="checkbox" id="" title="Lorem ipsum dolor sit amet"><span class="">Mi interessa</span></label>
	</div>
	<!-- terzo box-->
	<div class="boxperte">
		<img src="/img/celletta_promo3.gif" alt=""/>
		<label><input type="checkbox" id="" title="Lorem ipsum dolor sit amet"><span class="">Mi interessa</span></label>
	</div>
	<!-- quarto box-->
	<div class="boxperte last">
		<img src="/img/celletta_promo4.gif" alt=""/>
		<label><input type="checkbox" id="" title="Lorem ipsum dolor sit amet"><span class="">Mi interessa</span></label>
	</div>
	
	<span class="errortext" id="perTe">Non hai selezionato nessuna preferenza</span>
	</fieldset>
	</form>
	<br class="clear" />
	<div class="filettobuttonAll">
			<a class="greenbutton" href="javascript:;" title="invia preferenza" onclick="javascript:esempioErrori();"><span>invia preferenza</span></a>
			<a class="greybutton" href="" title="non sono interessato"><span>non sono interessato</span></a>
	</div>

</div>