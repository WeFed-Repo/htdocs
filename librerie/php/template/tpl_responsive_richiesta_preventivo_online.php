<h2>Preventivo online</h2>

<section>


	<div class="row">
		<div class="col-sm-3 col-xs-12" style="text-align:center">
			<span class="glyph glyph-2x glyph-insurance" title="glyph-insurance"></span>
		</div>	
		<div class="col-sm-9 col-xs-12">
    		<strong>Stai per accedere al sito esterno del nostro partner Zurich Connect, dove puoi calcolare il tuo preventivo e acquistare la tua polizza.</strong>
			<p>Per il calcolo del tuo preventivo ti consigliamo di tenere a portata di mano:</p>		
			<ul>
    			<li><strong>attestato di rischio</strong>, dove &egrave; indicata la tua classe Bonus/Malus;</li>
    			<li><strong>libretto di circolazione</strong>, con i dati dell'auto da assicurare;</li>
    			<li><strong>attuale polizza</strong>, dove &egrave; indicata la data di scadenza;</li>
    			<li><strong>il tuo codice fiscale</strong>.</li>
    		</ul>   		
    	</div>    			
	</div>




	<div class="row">
		<div class="col-xs-12"><p><strong>Sul sito del partner puoi salvare il preventivo e bloccare cos&igrave; il prezzo, senza obbligo di acquisto.</strong><br>In questo modo, anche se la tua polizza scadr&agrave; tra un po', hai la certezza di esserti garantito l'offerta migliore di Zurich Connect!</p>
			<p>Prima della sottoscrizione leggere il fascicolo informativo su www.zurich-connect.it.<br>
Messaggio finalizzato al collocamento di polizze auto.</p>
<p><strong>Puoi accedere al preventivo solo dopo aver preso visione della comunicazione informativa che segue.</strong><br>
Stai per abbandonare il sito Webank e, per motivi di sicurezza, <strong>l'area privata del sito verr&agrave; chiusa</strong>.</p>
		</div>
	</div>


	<div id="datiInput">
        <form class="formGenerico" role="form" id="form01">
			 <div class="form-group">
		        <div class="row">
		            <div class="col-sm-12 requiredField">
		               <div class="checkbox">
		                    <label id="richiesta1" class="textWrapper disabledField richiesta-1">              
		                        <input type="checkbox" name="" id="contratto2" disabled>
		                         <span class="text">Dichiaro di aver letto e salvato su supporto durevole la <a href="#!" target="_blank" onclick="enableInput('#richiesta1');">comunicazione informativa</a> sugli obblighi di comportamento degli intermediari verso i contraenti.</span>
		                    </label>
		                </div>
		            </div>
		        </div>
		    </div>
		</form>
    </div>


	<div class="form-group btnWrapper">
		<div class="stepBtn"></div>		
        <div class="btn-align-right" id="disattivo">
            <a type="button" class="btn btn-disabled" id="" disabled="disabled">fai il preventivo</a>	
        </div>
         <div class="btn-align-right" id="attivo" style="display:none">
            <a type="button" class="btn btn-primary" id="" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_wecare_vita_preventivatore.php&responsive=y&liv0=6&liv1=3&liv2=0&liv3=1">fai il preventivo</a>	
        </div>

        <div class="clear"></div>
    </div>


</section>

<script type="text/javascript">
$(function() {
	check1 = $("#contratto2");        

	check1.on('click' , function(){

		if (check1.is(':checked')) {
	        $('#disattivo').hide();
	        $('#attivo').show();
	    }else {
	    	$('#attivo').hide();
	        $('#disattivo').show();
	    }

    });
    });
</script>
