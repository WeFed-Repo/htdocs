<form class="formGenerico borderFormRounded" role="form">
    <!-- Esempio selettore radio -->
        <p>Esempio selettore singolo</p>
        <!-- pannello selettore -->
        <div class="selector-wrap" data-input-type="radio" data-input-name="selectBoxes">
            <input name="selectBoxes" type="hidden" value="">
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <div class="selector-box" data-value="x1">BOX1</div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="selector-box" data-value="x2">BOX2</div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="selector-box disabled" data-value="x3">BOX3</div>
                </div>
                <div class="col-sm-3 col-xs-12">
                    <div class="selector-box" data-value="x4">BOX4</div>
                </div>
            </div>
        </div>
        <!-- fine pannello selettori --> 
    <!-- Fine esempio selettore radio -->

    <style></style>

    <!-- Esempio selettore mini (multiplo) -->
        <p>Esempio selettori piccoli</p>
        <!-- pannello selettore -->
        <div class="selector-wrap selector-mini" data-input-type="checkbox" data-input-name="selectBoxesMini">
            <input name="selectBoxesMini" type="hidden" value="x9,x11">
            <?php for ($i==1;$i<25;$i++) { ?>
                <div class="selector-box <?php if($i==16) print "disabled"; ?>" data-value="x<?php print $i;?>">
                    <img src="/wscmn/fe/img/placeholder_1-1.png" class="img100"></a>
                    <span class="definition">BOX<?php print $i;?></span>
                </div>
            <?php } ?>
        </div>
        <!-- fine pannello selettori --> 
    <!-- Fine esempio selettore radio -->
</form>
