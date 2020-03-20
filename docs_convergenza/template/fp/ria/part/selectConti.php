<select onchange="<?php echo $selectOnChange; ?>" id="<?php echo $selectContiId; ?>" name="<?php echo $selectContiId; ?>" class="form-control" aria-label="Seleziona un conto">
    <option accountidtoshow="CT 01069 0000027152 EUR" accountid="01069 - 0000027152 - EUR"
            value="01069 - 0000027152 - EUR">CT 01069 0000027152 EUR
    </option>
    <option accountidtoshow="CT 01069 0000026986 EUR +DER" accountid="01069 - 0000026986 - EUR"
            value="01069 - 0000026986 - EUR">CT 01069 0000026986 EUR +DER
    </option>
    <option accountidtoshow="CC 00599 0000089342 EUR" accountid="00599 - 0000089342 - EUR" value="00599 - 0000089342 - EUR">CC 00599 0000089342 EUR
        @me
    </option>
    <option accountidtoshow="CC 00599 0000074978 EUR +DER" accountid="00599 - 0000074978 - EUR" value="00599 - 0000074978 - EUR">CC 00599 0000074978
        EUR @me +DER
    </option>
    <option accountidtoshow="EMpos0 CC 00599 0000099102 EUR +DEP"
            accountid="00599 - 0000099102 - EUR" value="00599 - 0000099102 - EUR"
            selected="selected">EMpos0 CC 00599 0000099102 EUR +DEP
    </option>
    <option accountidtoshow="EMpos1 CC 00599 0000099112 EUR +DEP"
            accountid="00599 - 0000099112 - EUR" value="00599 - 0000099112 - EUR">EMpos1 CC
        00599 0000099112 EUR +DEP
    </option>
    <option accountidtoshow="EMsenza0 CC 00599 0000099103 EUR +DEP"
            accountid="00599 - 0000099103 - EUR" value="00599 - 0000099103 - EUR">EMsenza0 CC
        00599 0000099103 EUR +DEP
    </option>
    <option accountidtoshow="EMsenza1 CC 00599 0000099113 EUR +DEP"
            accountid="00599 - 0000099113 - EUR" value="00599 - 0000099113 - EUR">EMsenza1 CC
        00599 0000099113 EUR +DEP
    </option>
    <option accountidtoshow="EMsenza2 CC 00599 0000099123 EUR +DEP"
            accountid="00599 - 0000099123 - EUR" value="00599 - 0000099123 - EUR">EMsenza2 CC
        00599 0000099123 EUR +DEP
    </option>
    <option accountidtoshow="EMsenza3 CC 00599 0000099133 EUR +DEP"
            accountid="00599 - 0000099133 - EUR" value="00599 - 0000099133 - EUR">EMsenza3 CC
        00599 0000099133 EUR +DEP
    </option>
    <option accountidtoshow="CC 00599 0000081080 EUR +DEP +DER"
            accountid="00599 - 0000081080 - EUR" value="00599 - 0000081080 - EUR">CC 00599
        0000081080 EUR +DEP +DER
    </option>
</select>
<div class="input-group-addon">
    <a class="btn-icon" data-toggle="modal" data-target="#starAlert1"
       title="La stella indica il conto che hai impostato come preferito">
        <i class="icon icon-star_fill" title="icon-star_fill"></i>
    </a>
</div>
<div class="modal fade" id="starAlert1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Imposta conto preferito</h3> Vuoi impostare il conto <strong>CC 01077 0000049477 EUR </strong> come preferito?
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

<script>
    $(function () {
        $('#starAlert1').appendTo($('body'));
    });
</script>