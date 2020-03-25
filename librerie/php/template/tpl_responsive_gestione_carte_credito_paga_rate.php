

<h2>Paga a rate</h2>
<section>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_carte_credito_one.php&responsive=y&liv0=2&liv1=1&liv2=1&liv3=0">plafond - linea di credito</a></li>
			<li class="on"><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_carte_credito_paga_rate.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y">Paga a rate</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_carta_sicurezza.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y">sicurezza<br> ed estinzione</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_carte_saldo_movimenti.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y">Saldo e movimenti</a></li>
			<li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_carte_stato_pratica.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y">Stato pratica</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
</section>	
<section>
	<h4>Guarda come funziona il pagamento rateale con Cartimpronta Classic</h4>
	
	<div class="box-generico-border">
		<div class="box-generico-text">
			<div class="row">	
				<div class="col-sm-6">
				<h3 style="padding:0; background-color:#FFF;">Cartimpronta Classic Webank</h3>
					<p id="test"></p>
					<p id="test_1"></p>	
				</div>
				<div class="col-sm-6">
					<img src="/fe/img/carta_small_cartiprone.gif" />
				</div>
			</div>	
		</div>
	</div>	
</section>
<section>
	<p>Scegli la <strong>formula rateale</strong> e le tue spese le paghi poco alla volta.</br>
	Puoi <strong>decidere l'importo</strong> della rata mensile di rimborso e <strong>modificarla</strong> ogni volta che vuoi.</p>

	<p>
		Prima di cambiare la modalit&agrave; di pagamento da "a saldo" a "rateale" ti invitiamo a prendere visione del documento 
		<a href="#" class="btn-icon">Informazioni Europee di Base sul Credito ai Consumatori</a> che contiene le condizioni economiche applicate all'utilizzo della carta. 
	</p>




<div class="form-group btnWrapper">
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="">Richiedi pagamento rateale</a>
	</div>
	<br class="clear">
</div>


<p>Per maggiori informazioni chiama il <strong>Servizio Clienti Carte</strong> al numero <strong>0432 744254.</strong></p>


</section>


	
	</div>
</div>



<script type="text/javascript">
var str_1 = "Usi la tua disponibilit&agrave; <strong>come e quando vuoi,</strong><br/> entro il limite massimo di spesa della tua carta."; 
var str_2 = "Utilizzi normalmente la carta per i tuoi acquisti <br/>";

var str_2_bis = "sia nei negozi sia su internet, in <strong>modo sicuro</strong><br/> con il servizio <strong>protezione acquisti"+
"online </strong>";

var str_3 = "...e se hai bisogno di contante, <br/> con Cartimpronta Classic puoi <strong>accreditare <br/>" + 
"la somma che ti serve sul tuo Conto Webank!</strong>";

var str_4 = "A fine mese puoi scegliere di <strong>rimborsare</strong><br/> i tuoi acquisti <strong> in piccole rate mensili,</strong><br/>" + 
"ricreando a poco a poco la <strong>disponibilit&agrave; iniziale.</strong>";

var str_5 = "E le <strong>rate</strong> dei rimborsi rimangono<br/> <strong>sempre uguali, senza commissioni <br/> e senza spese di bollo!</strong>";

var str_6 = ' Rivedi la demo ';
var str_7 = '  Rateizza ora ';
	


function cardAnimation(){
		$("#test").html('');
		$(this).queue(function(){
    		$("#test").animate({color: '#000'},'fast', function(){
    		$('#test').html(str_1);
    		console.log("1");
    		});

			
    		$("#test").fadeIn().animate({color: '#000'},2000, function(){
    			$(this).html(str_2).fadeIn("slow");;
    			console.log("2");
    		});

    	    $("#test").animate({color: '#000'},2000, function(){
    			$(this).append(str_2_bis);
    			console.log("2bis");	
    		});

    	    $("#test").animate({color: '#000'},2000, function(){
    			$(this).append().html(str_3);
    			console.log("3");	
    		});

    	    $("#test").animate({color: '#000'},2000, function(){
    			$(this).append().html(str_4);
    			console.log("4");	
    		});

    		$("#test").animate({color: '#000'},2000, function(){
    			$(this).append().html(str_5);
    			console.log("5");	
    		});

			
			$("#test_1").animate({color: '#000'},12000, function(){
    			$(this).append().html(str_6 + " - " + str_7 );
    			console.log("6");	
    		});    		
		}).dequeue();
}



$("#vediDemo").on('click' , function(){
	cardAnimation();
});


$(function(){
	cardAnimation();
});


</script>
