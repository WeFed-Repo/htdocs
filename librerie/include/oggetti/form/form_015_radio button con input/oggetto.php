<form class="formGenerico borderFormRounded" role="form" id="form01">
    <!-- La classe radioInput serve per far abilitare/disabilitare il campo input
        quando la checkbox viene rispettivamente selezionata/deselezionata.
        Se non si desidera questo comportamento, togliere la classe. -->
    <div class="form-group radioInput">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="radio inline">
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="textWrapper marginTopMicro">
                                <input type="radio" name="testradioinput" checked="checked"> <span class="text">Lorem ipsum dolor sit amet</span> </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="radio inline">
                    <div class="row">
                        <label class="textWrapper flLeft marginTopMicro">
                            <input type="radio" name="testradioinput"> <span>&nbsp;</span>&nbsp;&nbsp;Altro</label>
                        <br class="visible-xs">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" disabled="disabled"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>