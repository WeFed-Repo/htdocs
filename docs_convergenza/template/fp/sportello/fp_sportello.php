<?php
$isBM = ($bank == 'bm');
$isBPM = ($bank == 'bpm');
$isWebank = ($bank == 'webank');
$auth = strtolower($_GET['auth']);
$cons = strtolower($_GET['cons']);

if ($auth != 'a' && $auth != 'f' && $auth != 'n') {
	$auth = false;
}
if ($cons != 'y') {
	$cons = 'n';
}

$consultare = ($cons == 'y');

global $isResp;
?>
<style type="text/css">
    @import url("/WB/fe/css/fp_sportello.css");
</style>
<script type="text/javascript">
    window.librerie = true;
    window.cgi_script = '/webankpri';
    window.initPeriodo = '';
    window.isWebank = <?= $isWebank
		? 'true'
		: 'false'; ?>;
    window.today = new Date();
    window.consultare = <?= ($consultare)
		? 'true'
		: 'false'; ?>;
    window.datiUtente = {
        "eseguitoDa": "Mario Rossi",
        "residenteIn": "Corso Sempione, 1",
        "provincia": "MI",
        "cap": "20100",
        "localita": "Milano",
        "auth": <?= $auth
			? "'" . $auth . "'"
			: 'false' ?>,
        "cons": '<?= $cons ?>'
    };
</script>

<?php include("configuratore.php"); ?>

<form name="Movements" action="" method="post">
    <input type="hidden" id="requestIdInPage" name="requestIdInPage" value="123123123123">
</form>
<form id="dati" action="" method="post">
    <input type="hidden" id="sportello" name="sportello" value="1"/>
    <input type="hidden" id="hdModPag" name="hdModPag" value=""/>
    <input type="hidden" id="hdChiave" name="hdChiave" value=""/>
    <input type="hidden" id="hdStato" name="hdStato" value=""/>
</form>

<div id="fpLoading" class="loading">
    <div class="boxesito negativo">
        <div class="text">
            <p><strong>Errore caricamento dati</strong><br>
                Prova a ricaricare la pagina.</p>
        </div>
    </div>
</div>
<div id="fpData">
    <div class="spHead formGenerico">
        <div class="row spHeadBg">
            <div class="col-md-4">
                <div class="spInfo spConto">
                    <label class="control-label" for="conti">Conto n&deg;</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <select class="form-control" id="conti" name="conti">
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR"
                                        accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR
                                </option>
                                <option value="01077 - 0000049478 - EUR" accountid="01077 - 0000049478 - EUR"
                                        accountidtoshow="CC 01077 0000049478 EUR">CC 01077 0000049478 EUR
                                </option>
                            </select>
                            <div class="input-group-addon input-group-star">
                                <a class="btn-icon" data-toggle="modal" data-target="#starAlert1">
                                    <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                    <!--<i class="icon icon-star" title="icon-star"></i>-->
                                </a>
                            </div>
                        </div>
                    </div>
                    <strong id="contoUnico"></strong>
                </div>
            </div><!--/span-->
            <div class="col-md-4">
                <div class="spInfo spNome">
                    <label class="control-label">Intestato a</label>
                    <span id="intestatario" class="output textinline"></span>
                </div>
            </div><!--/span-->
            <div class="col-md-4">
                <div class="spInfo spSaldo">
                    <label class="control-label">Saldo disponibile</label>
                    <span id="saldo" class="output textinline"></span>
                </div>
            </div><!--/span-->
        </div>
    </div><!--/row-->

    <!--RIGA TOP -->
    <div class="row">
		<?php include("section_movimenti_disposizioni.php"); ?>
		<?php include("section_operazioni_veloci.php"); ?>
    </div><!--/row-->
    <!--RIGA MIDDLE -->
	<?php if (!$isResp) { ?>
        <div class="row">
			<?php include("section_contatti.php"); ?>
        </div><!--/row-->
              <!--RIGA BOTTOM-->
        <div class="row">
			<?php include("section_servizi_per_te.php"); ?>
			<?php include("section_impostazioni.php"); ?>
        </div><!--/row-->
	<?php } ?>
    <!--hr-->
    <!--footer>
		<p class="spCopy">Banca Popolare di Milano Società Cooperativa a r.l. Piazza F. Meda, 4 - 20121 Milano - tel. 02 77001 - P.IVA 00715120150 Gruppo Bipiemme. Tutti i diritti riservati.</p>
	</footer-->

    <div class="modal fade" id="starAlert1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Imposta conto preferito</h3>
                    Vuoi impostare il conto <strong>CC 01077 0000049477 EUR </strong> come preferito?
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="btn-align-left">
                            <button type="button" class="btn btn-default" data-dismiss="modal">annulla</button>
                        </div>
                        <div class="btn-align-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">conferma</button>
                        </div>
                        <br class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="titolareEffettivo" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                    <h2 class="modal-title" id="mioPatrimonioLabel">Conferma titolare effettivo</h2>
                </div>
                <div class="modal-body">
                    <div class="riquadro clearifx margin-bottom-xs-10">
                        <h3 class="titleSection"><strong class="negativo">Messaggio al cliente</strong></h3>
                        <div class="row">
                            <div class="col-xs-12">
                                <div style="text-align: justify;">
                                    <span style="font-weight: bold;">Stai per inserire una disposizione per importo pari o superiore a 5.000 € per conto di un'altra persona?&nbsp;</span>
                                </div>

                                <strong> <br> INVIA IL MODULO PER L'IDENTIFICAZIONE DEL TITOLARE EFFETTIVO DELL'OPERAZIONE </strong><br>
                                <br>
                                Ai sensi della vigente normativa antiriclaggio, in caso di operazioni di importo pari o superiore a
                                5.000 € effettuate per conto di una persona diversa dal titolare effettivo del conto corrente sei tenuto a
                                fornirci tutte le informazioni necessarie all'identificazione della persona per la quale stai disponendo
                                l'operazione.<br>
                                <br>
                                <strong>1. Stampa </strong> il modulo <strong>"Identificazione titolare effettivo occasionale"</strong>
                                dalla sezione Modulistica, da Sportello - Il mio conto e compilalo in ogni sua parte.<br>
                                <br>
                                <strong>2. Allega</strong> la fotocopia di un documento d'identità valido e del codice fiscale della persona
                                per la quale stai effettuando l'operazione.<br>
                                <br>
                                <strong>3. Spedisci</strong>, entro 7 giorni dalla data di pagamento, tutta la documentazione:<br>
                                - via email all'indirizzo webank@webank.it<br>
                                - oppure via fax al numero 04 5821 7261<br>
                                <br>
                                Se non dovessimo ricevere il modulo l'operazione s'intenderà effettuata a tuo nome.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="btn-align-right">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="titolareEffettivoSubmit">conferma</button>
                        </div>
                        <br class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- |FINE| Overlayer grafico movimenti -->
<?php include("script.php"); ?>
