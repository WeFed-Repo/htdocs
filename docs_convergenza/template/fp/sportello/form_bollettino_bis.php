<?php
global $strongAuth;
global $authPrefix;
?>
<form id="<?php echo $authPrefix ?>FormBis" class="formGenerico">
    <div class="form-group">
        <div class="row" id="boxNuovoEseBoll">
            <div class="col-sm-12">
                <label class="control-label" for="inputNuovoEseBollettino">Eseguito da</label>
                <input type="text" class="form-control clear-x" name="inputNuovoEseBollettino"
                       id="inputNuovoEseBollettino" maxlength="50">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-12">
                <label class="control-label" for="residenzaEsecutore">Indirizzo di residenza</label>
                <input type="text" class="form-control clear-x" id="residenzaEsecutore" name="residenzaEsecutore"
                       maxlength="50">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label class="control-label" for="localitaEsecutore">Comune</label>
                <input type="text" class="form-control clear-x" id="localitaEsecutore" name="localitaEsecutore"
                       maxlength="50">
            </div>
            <div class="col-sm-3">
                <label class="control-label" for="provinciaEsecutore">Provincia</label>
                <select type="text" class="form-control" id="provinciaEsecutore" name="provinciaEsecutore">
                    <option value="0">Scegli</option>
                    <option value="AG">AG</option>
                    <option value="AL">AL</option>
                    <option value="AN">AN</option>
                    <option value="AO">AO</option>
                    <option value="AR">AR</option>
                    <option value="AP">AP</option>
                    <option value="AT">AT</option>
                    <option value="AV">AV</option>
                    <option value="BA">BA</option>
                    <option value="BT">BT</option>
                    <option value="BL">BL</option>
                    <option value="BN">BN</option>
                    <option value="BG">BG</option>
                    <option value="BI">BI</option>
                    <option value="BO">BO</option>
                    <option value="BZ">BZ</option>
                    <option value="BS">BS</option>
                    <option value="BR">BR</option>
                    <option value="CA">CA</option>
                    <option value="CL">CL</option>
                    <option value="CB">CB</option>
                    <option value="CI">CI</option>
                    <option value="CE">CE</option>
                    <option value="CT">CT</option>
                    <option value="CZ">CZ</option>
                    <option value="CH">CH</option>
                    <option value="CO">CO</option>
                    <option value="CS">CS</option>
                    <option value="CR">CR</option>
                    <option value="KR">KR</option>
                    <option value="CN">CN</option>
                    <option value="EN">EN</option>
                    <option value="FM">FM</option>
                    <option value="FE">FE</option>
                    <option value="FI">FI</option>
                    <option value="FG">FG</option>
                    <option value="FC">FC</option>
                    <option value="FR">FR</option>
                    <option value="GE">GE</option>
                    <option value="GO">GO</option>
                    <option value="GR">GR</option>
                    <option value="IM">IM</option>
                    <option value="IS">IS</option>
                    <option value="SP">SP</option>
                    <option value="AQ">AQ</option>
                    <option value="LT">LT</option>
                    <option value="LE">LE</option>
                    <option value="LC">LC</option>
                    <option value="LI">LI</option>
                    <option value="LO">LO</option>
                    <option value="LU">LU</option>
                    <option value="MC">MC</option>
                    <option value="MN">MN</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="ME">ME</option>
                    <option value="MI">MI</option>
                    <option value="MO">MO</option>
                    <option value="MB">MB</option>
                    <option value="NA">NA</option>
                    <option value="NO">NO</option>
                    <option value="NU">NU</option>
                    <option value="OT">OT</option>
                    <option value="OR">OR</option>
                    <option value="PD">PD</option>
                    <option value="PA">PA</option>
                    <option value="PR">PR</option>
                    <option value="PV">PV</option>
                    <option value="PG">PG</option>
                    <option value="PU">PU</option>
                    <option value="PE">PE</option>
                    <option value="PC">PC</option>
                    <option value="PI">PI</option>
                    <option value="PT">PT</option>
                    <option value="PN">PN</option>
                    <option value="PZ">PZ</option>
                    <option value="PO">PO</option>
                    <option value="RG">RG</option>
                    <option value="RA">RA</option>
                    <option value="RC">RC</option>
                    <option value="RE">RE</option>
                    <option value="RI">RI</option>
                    <option value="RN">RN</option>
                    <option value="RM">RM</option>
                    <option value="RO">RO</option>
                    <option value="SA">SA</option>
                    <option value="VS">VS</option>
                    <option value="SS">SS</option>
                    <option value="SV">SV</option>
                    <option value="SI">SI</option>
                    <option value="SR">SR</option>
                    <option value="SO">SO</option>
                    <option value="TA">TA</option>
                    <option value="TE">TE</option>
                    <option value="TR">TR</option>
                    <option value="TO">TO</option>
                    <option value="OG">OG</option>
                    <option value="TP">TP</option>
                    <option value="TN">TN</option>
                    <option value="TV">TV</option>
                    <option value="TS">TS</option>
                    <option value="UD">UD</option>
                    <option value="VA">VA</option>
                    <option value="VE">VE</option>
                    <option value="VB">VB</option>
                    <option value="VC">VC</option>
                    <option value="VR">VR</option>
                    <option value="VV">VV</option>
                    <option value="VI">VI</option>
                    <option value="VT">VT</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label class="control-label" for="capEsecutore">CAP</label>
                <input type="tel" class="form-control clear-x" id="capEsecutore" name="capEsecutore" maxlength="5">
            </div>
        </div>
    </div>

    <hr class="btnSeparator">

    <div class="form-group">
        <div class="row">
            <div class="col-sm-4"><a type="button" class="btn btn-default btn-full spBack" href="javascript:">Indietro</a></div>
            <div class="col-sm-4 col-sm-offset-4"><a type="button" class="btn btn-primary btn-full" href="javascript:"
                                                     id="<?php echo $authPrefix ?>Page1BisSubmit">Prosegui</a></div>
        </div>
    </div>
</form>
