<?php
$authMsgKO = "il bonifico";
?>
<div class="formGeneric spTopWrap">
    <div class="saldoGroup">
        <div class="row">
            <div class="col-xs-3">
                <span class="saldoLabel">IBAN</span>
            </div>
            <div class="col-xs-9">
                <span class="saldoVal ibanVal"></span>
            </div>
        </div>
    </div>
    <div class="saldoGroup">
        <div class="row">
            <div class="col-xs-6">
                <span class="saldoLabel">Importo <span class="valuta">€</span></span>
            </div>
            <div class="col-xs-6">
                <span class="saldoVal"></span>
            </div>
        </div>
    </div>
</div>
<?php include("autorizzazione_contatto.php"); ?>
<!--/row-->