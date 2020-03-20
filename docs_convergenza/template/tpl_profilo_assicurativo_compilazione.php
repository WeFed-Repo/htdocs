<!-- Blocco intestazione -->

<div class="titolo">
    <h1>
        <div class="row">
            <div class="col-sm-<?php print ($site=="youweb")? "8": "12";?>">
                <span>Il tuo profilo assicurativo</span>
            </div>
            <?php if($site=="youweb") {
            ?>
            <!-- Stepper YouWeb-->
            <div class="col-sm-4">
                <div class="pager pull-right">
                    <div class="circle current_page">1</div>
                    <div class="circle ">2</div>
                </div>
            </div>
            <!-- Fine stepper YouWeb-->
            <?php
            }
            ?>
        </div>
    </h1>
</div>
<!-- Fine blocco intestazione -->
<!-- Blocco introduttivo -->
<p>
Prima di procedere con il preventivo o l'acquisto di un prodotto assicurativo in filiale, siamo tenuti a raccogliere li tuoi bisogni assicurativi in modo da offrirti un prodotto coerente con le tue necessità. Ricorda che potrai modificare il tuo profilo assicurativo in qualsiasi momento.
</p>
<!-- Fine blocco introduttivo -->
<!-- Riepilogo -->
<section>
	<div class="borderFormRoundedWrapper">
		<form class="formGenerico borderFormRounded output" role="form" id="form02">
            <div class="form-group">
                <!--RIGA DIVISA IN QUATTRO CAMPI -->
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <label class="control-label-output">Intestatario</label>
                        <span class="output">Mario Rossi</span>
                    </div>
                    <div class="col-sm-6 col-xs-12">	
                        <label class="control-label-output">Data di Nascita</label>
                        <span class="output">00/00/0000</span>
                    </div>
                    <div class="col-sm-6 col-xs-12">	
                        <label class="control-label-output">NDG</label>
                        <span class="output">123456789091234</span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Fine riepilogo -->
<br class="clear">
<form action="#" id="qForm" class="formWrapper">
<!-- Esempio di domanda -->
<section class="clearfix">
    <h3 class="titleSection titleForm">1. Che genere di esigenze assicurative hai?</h3>
        <p>Risposta multipla</p>

        <div class="form-group">
            <div class="row">
                <div class="col-xs-12">
                    <label class="input-rcb-inline">
                        <input type="checkbox" name="risposta" value="1">
                        <span class="input-rcb-text">Investimento in ambito assicurativo</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12">
                    <label class="input-rcb-inline">
                        <input type="checkbox" name="risposta" value="2">
                        <span class="input-rcb-text">Protezione</span>
                    </label>
                    <span class="no-underline btn-icon input-rcb-btn-icon"><i class="icon icon-info_fill icon-2x" data-title="Testo da definire testo da definire." data-toggle="tooltip" data-container="#qForm"></i></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12">
                    <label class="input-rcb-inline">
                        <input type="checkbox" name="risposta" value="3">
                        <span class="input-rcb-text">Protezione finanziamento</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12">
                    <label class="input-rcb-inline">
                        <input type="checkbox" name="risposta" value="4">
                        <span class="input-rcb-text">Nessuna esigenza delle precedenti</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12">
                    <label class="input-rcb-inline">
                        <input type="checkbox" name="risposta" value="5">
                        <span class="input-rcb-text">Non rispondo</span>
                    </label>
                </div>
            </div>
        </div>


</section>

<!-- Esempio modale per conferma -->
<!-- Modal -->
<div id="modaleConferma" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h1 class="modal-title">MODIFICA PROFILO ASSICURATIVO</h1>
       </div>

        <div class="modal-body">
            Stai per modificare il tuo profilo assicurativo.<br>
            Le modifiche che apporterai andranno ad aggiornare il tuo profilo. (testo TBD).
        </div>

        <div class="modal-footer">
            <div class="align-right">
                <input type="button" name="conferma" value="Ho capito" data-dismiss="modal" class="btn  btn-primary" alt="Ho capito">
            </div>
        </div>
      </div>
    </div>
</div>

</form>

<!-- Fine esempio modale per conferma -->

<!-- Sezione errori -->
<section class="clearfix" id="esempioErrori" style="display:none">
	<div class="row">
		<div class="col-sm-12">
			<div class="messagePanel success hidden-print bgBoxBonif bgBoxError">
				<div class="row">
					<div class="col-xs-12 linHeighVert"><i class="icon iconBig icon-alert_error"></i><h3>Errore di compilazione</h3></div>					
				</div>
				<div class="row lh">
					<div class="col-sm-1 hidden-xs"></div>
					<div class="col-xs-12 col-sm-5">Lorem ipsum:</div>
					<div class="col-xs-12 col-sm-6">Lorem ipsum dolor sit amet</div>
				</div>
				<div class="row lh">
					<div class="col-sm-1 hidden-xs"></div>
					<div class="col-xs-12 col-sm-5">Lorem ipsum:</div>
					<div class="col-xs-12 col-sm-6">Lorem ipsum dolor sit amet</div>
				</div>
				<div class="row lh">
					<div class="col-sm-1 hidden-xs"></div>
					<div class="col-xs-12 col-sm-5">Lorem ipsum:</div>
					<div class="col-xs-12 col-sm-6">Lorem ipsum dolor sit amet</div>
				</div>
				<div class="row lh">
					<div class="col-sm-1 hidden-xs"></div>
					<div class="col-xs-12 col-sm-5">Lorem ipsum:</div>
					<div class="col-xs-12 col-sm-6">Lorem ipsum dolor sit amet</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Fine sezione errori --> 

<!-- ESEMPIO DI INTERATTIVITA' -->
<script type="text/javascript">
    $(function(){

        // Mostra la modale (caso MODIFICA)
        $("#modaleConferma").modal("show");

        // Funzioni indicative per check e visualizzazione errori
        $("#btnAvanti").click(function(){

            // Reset errori 
            $("#esempioErrori").hide();
            var errors = false;

            // Esmepio check compilazione di un campo
            if (!$("input[name='risposta']:checked").val()) errors = true;

            if (errors) {
                $("#esempioErrori").show();
            }
            
        });
    });
</script>
<!-- FINE ESEMPIO DI INTERATTIVITA' -->


<!-- Pulsantiera -->
<section>
    <div class="form-group btnWrapper clearfix">
        <?php if ($site==="webank") { ?><!-- Stepper Webank --><div class="stepBtn">Step <strong>1</strong> di 2</div><!-- Fine stepper Webank --><?php }?>
        <div class="btn-align-left">
          <div>
            <a type="button" href="#" class="btn btn-default">Indietro</a>
          </div>
        </div>
        <div class="btn-align-right">
          <div>
            <a type="button" class="btn btn-primary" id="btnAvanti">Avanti</a>
          </div>
        </div>
    </div>
 </section>
<!-- Fine pulsantiera -->