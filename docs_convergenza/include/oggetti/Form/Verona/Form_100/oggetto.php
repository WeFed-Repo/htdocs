<?php
    $site = $_GET['site'];
    if($site == 'youweb') {
?>
<form method="post" action="" id="formQRCode">
    <div class="formWrapper alignCenter">
        <div class="form-group">
            <div class="row">
                <div class="form-field-input col-xs-6">
                    <label>
                        <input type="radio" name="attivaCon" value="QRC" onclick="visualizzaContenuto('QRC');" id="attivaConQRCode" checked="checked">
                        Attiva con QR Code
                    </label>
                </div>
                <div class="form-field-input col-xs-6">
                    <label>
                        <input type="radio" name="attivaCon" value="BP" onclick="visualizzaContenuto('BP');" id="attivaConBancomatPay">
                        Attiva con BANCOMAT Pay
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group pb-0" id="boxQRCode">
            <div class="row">
                <div class="col-xs-12 description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <section class="sec-tion mb-0">
                <div class="row">
                    <div class="form-field-input col-xs-12">
                        <div class="row">
                            <div class="form-field-input col-xs-12">
                                <div class="alignCenter">
                                    <a type="button" href="#" class="btn btn-primary mt-20 btn-reverse" id="btnQRCode" title="Genera il QR Code">Genera il QR Code</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field-input col-xs-12">
                                <div class="mt-20">
                                    <img src="/HT/fe/img/QR_code@2x.png" class="img-responsive m-auto width-x" id="imgQRCode">
                                    <label class="m-auto" id="placeholderQRCode"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="form-group pb-0" id="boxBancomatPay">
            <div class="row">
                <div class="col-xs-12 description">
                    dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <section class="sec-tion mb-0">
                <div class="row">
                    <div class="form-field-input col-xs-12">
                        <div class="row">
                            <div class="form-field-input col-xs-12">
                                <div class="alignCenter">
                                    <a type="button" href="#" class="btn btn-primary mt-20 btn-reverse" id="btnBancomatPay" title="Genera codice">Genera codice</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-field-input col-xs-12">
                                <div id="divBancomatPay">
                                    <img src="/HT/fe/img/block_Sx@2x.png" class="img-responsive img-fixed">
                                    <input type="text" id="outputBancomatPay" value="" readonly>
                                    <img src="/HT/fe/img/block_Dx@2x.png" class="img-responsive img-fixed">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="form-field-input col-xs-12">
                    <div class="alignRight">
                        <a type="button" href="#" class="btn btn-primary mt-20" id="btnFinito" title="Ho finito">Ho finito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        $('#boxQRCode').hide();
        $('#boxBancomatPay').hide();
        $('#imgQRCode').hide();
        $('#btnFinito').hide();
        if ($('#attivaConQRCode').attr('checked')) {
            visualizzaContenuto('QRC');
        } else if ($('#attivaConBancomatPay').attr('checked')) {
            visualizzaContenuto('BP');
        }

        $('#btnQRCode').click(function(e) {
            e.preventDefault();
            $('#imgQRCode').show();
            $('#btnFinito').show();
            $('#placeholderQRCode').hide();
        });

        $('#btnBancomatPay').click(function(e) {
            e.preventDefault();
            $('#outputBancomatPay').attr('value', '12345678901234567');
            $('#btnFinito').show();
        });
    });
    function visualizzaContenuto(attivaCon) {
        if (attivaCon=='QRC') {
            $('#boxQRCode').show();
            $('#boxBancomatPay').hide();
        } else if (attivaCon=='BP') {
            $('#boxQRCode').hide();
            $('#boxBancomatPay').show();
        }
    }
</script>
<?php } ?>