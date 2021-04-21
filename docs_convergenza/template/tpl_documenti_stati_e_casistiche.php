<style>
    /* # Utility Only for display # */
    .row.boxed {
        border: 1px solid black;
        padding-top: 10px;
        margin-bottom: 5px;
    }

    /* # Text-with-Icon Element, wrapper and right float # */
    /* ## List Container ## */
    .list-icon-wrapper {
        margin-bottom: 30px;
    }

    .list-icon-wrapper.not-inline .text-with-icon{
        margin-bottom: 6px;
    }

    /* ## Text with icon Element ## */
    .text-with-icon {
        position: relative;
        width: fit-content;
    }

    .text-with-icon .linker {
        text-decoration: none;
        padding-left: 0px;
    }

    .text-with-icon .glyph {
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        display: block;
        font-size: 24px;
    }

    .text-with-icon .icon {
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        display: block;
        font-size: 18px;
        color: #0e977f;
    }

    .text-with-icon .image {
        position: absolute;
        z-index: 1;
        top: 0px;
        left: 0px;
        width: 20px;
        height: 20px;
        display: block;
        background-repeat: no-repeat;
        background-size: contain;
        background-color: lightgray;
    }

    /* Change Positions */
    .text-with-icon.right a, .text-with-icon.right .text, .text-with-icon.right .sub-text{
        padding-left: 0px;
        padding-right: 24px;
    }

    .text-with-icon.right .image, .text-with-icon.right .glyph, .text-with-icon.right .icon{
        right: 0px;
        left: auto;
    }

    /* Change Texts */
    .text-with-icon a {
        font-size: 16px;
        text-decoration: underline;
        color: #0e977f;
        padding-left: 24px;
    }

    .text-with-icon .text {
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        padding-left: 24px;
        color: black;
    }

    /* ## Declinazione All Link ## */
    .text-with-icon .underline {
        text-decoration: underline;
    }

    .text-with-icon .sub-text {
        font-size: 12px;
        font-weight: normal;
        text-decoration: none;
        padding-left: 24px;
        color: black;
        display: block;
    }

</style>

<!-- NEW -->
<section>
    <!-- ROW 1 -->
    <div class="row boxed">
        <div class="col-sm-3">
            <!-- Text with Icon + sub-text -->
            <div class="text-with-icon">
                <a class="linker" href="#">
                    <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                    <span class="text underline">NOME_PRATICA_UNIVOCO_1</span>
                    <span class="sub-text">INV-0018</span>
                </a>
            </div>
        </div>

	    <div class="col-sm-2">
            <!-- Casistica Icon -->
            <div class="text-with-icon">
                <span class="icon icon-numeroverde_desktop" title="icon-numeroverde_desktop"></span>
                <a href="#">Gestore</a>
            </div>
        </div>

        <div class="col-sm-2">
            <span class="text">20/03/2021</span>
        </div>

        <div class="col-sm-2">
            <h3 class="titleSection titleForm">NUOVA
                <a href="#" class="general-help help-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i></a>
            </h3>
        </div>

        <div class="col-sm-2">
            <div class="form-group btnWrapper clearfix">     
                <div class="btn-align-right">
                    <div>
                        <!-- <a type="button" href="#" class="btn btn-default disabled" title="sottoscrivi">sottoscrivi</a> -->
                        <!-- <a type="button" href="#" class="btn btn-default">sottoscrivi</a> -->
                        <a type="button" href="#" class="btn btn-primary" title="sottoscrivii">Sottoscrivi</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-1">
            <div class="linked-icon">
                <a href="#" type="button" data-toggle="dropdown" title="Alert">
                    <span class="icon icon-trash_filled"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- END ROW 1 -->

    <!-- ROW 2 -->
    <div class="row boxed">
        <div class="col-sm-3">
            <!-- Text with Icon + sub-text -->
            <div class="text-with-icon">
                <a class="linker" href="#">
                    <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                    <span class="text underline">NOME_PRATICA_UNIVOCO_1</span>
                    <span class="sub-text">INV-0018</span>
                </a>
            </div>
        </div>
	    <div class="col-sm-2">
            <!-- Casistica Icon -->
            <div class="text-with-icon">
                <span class="icon icon-numeroverde_desktop" title="icon-numeroverde_desktop"></span>
                <a href="#">Gestore</a>
            </div>
        </div>
        <div class="col-sm-2">
            <span class="text">20/03/2021</span>
        </div>
        <div class="col-sm-2">
            <div class="text-with-icon right">
                <span class="icon icon-info_fill" title="icon-info_fill"></span>
                <span class="text">NUOVA</span>
                <span class="sub-text">in attesa cointestatario</span>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group btnWrapper clearfix">     
                <div class="btn-align-right">
                    <div>
                        <a type="button" href="#" class="btn btn-default disabled" title="sottoscrivi">sottoscrivi</a> 
                        <!-- <a type="button" href="#" class="btn btn-default">sottoscrivi</a> -->
                        <!-- <a type="button" href="#" class="btn btn-primary" title="sottoscrivi">Sottoscrivi</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-1">
            <div class="linked-icon">
                <a href="#" type="button" data-toggle="dropdown" title="Alert">
                    <span class="icon icon-trash_filled"></span>
                </a>
            </div>
        </div>
    </div>
    <!-- END ROW 2 -->
</section>