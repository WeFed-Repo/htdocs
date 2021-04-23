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
    .text-with-icon.right-icon .text, .text-with-icon.right-icon .sub-text{
        padding-left: 0px;
        padding-right: 24px;
    }

    .text-with-icon.right-icon .image, .text-with-icon.right-icon .glyph, .text-with-icon.right-icon .icon{
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

    /* # All Accords Header */
    .header-col{
        display:block;
    }   

    .ellips {
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
    }       

    /* # Accordion Header # */
    .pract-toggle .right-space{
        padding-right:60px; 
        position:relative;
    }

    .pract-toggle .wrapper-icon-fixed {
        position:absolute; 
        right:20px; 
        top:6px;
    }

    .pract-toggle .mobile-label{
        display: none; 
    }

    /* # Accordion Content # */
    .accord-content {
        padding: 20px 24px;
    }
    
    .accord-content .text {
        margin-bottom: 20px;
        display: block;
    }

    .accord-content .read-more {
        color: #0e977f;
        text-decoration: underline;
        font-weight: bold;
    }

    /* ## Bullet Route ## */
    .accord-content .history-element{
        display:inline-block;
    }

    .accord-content .history-element .bullet-wrapper-target{
        position: absolute;
        left: 0px;
    }

    .accord-content .history-element .text-with-icon-target{
        position: absolute;
        left: 34px;
        width: calc(100% - 150px);
    }

    .accord-content .history-element .text-with-icon{
        display:inline-block;
        text-overflow: ellipsis;
        width: 100%;
        overflow: hidden;
    }

    .accord-content .history-element.inactive .bullet, .accord-content .history-element.inactive .bullet-route {
        background-color:#EBEDEE;
    }

    .accord-content .history-element.inactive a{
        color: black;
    }

    .accord-content .history-elements>*:first-child .bullet-route{
        display:none;
    }

    .bullet-wrapper {
        position:relative; 
        display:inline-block; 
        height:30px; 
        width:30px;
    }

    .bullet-wrapper .bullet {
        position:absolute; 
        width:10px; 
        height: 10px; 
        left:11px; 
        top: 8px; 
        background-color:#0e977f; 
        border-radius:5px;
        z-index:1;
    }

    .bullet-wrapper .bullet-route {
        position:absolute; 
        width:2px; 
        height: 40px; 
        left:15px; 
        top: -30px; 
        background-color:#0e977f;
    }

    .accord-content .group-wrapper {
        float:right;
    }
    
    .accord-content .group-element{
        display: inline-block; 
        margin: 0px 40px;
    }

    .accord-content .group-element .text{
        margin-bottom: 16px;
    }

    @media only screen and (max-width: 780px) {
        .header-col{
            display:none;
        }

        .accord-content .group-element{
            display: block; 
            margin: 0px 20px;
        }

        .accord-content .group-element .text{
            margin-bottom: 10px;
        }

        .pract-toggle .right-space{
            padding-right:0px; 
        }

        .pract-toggle-head .mobile-label{
            display: block; 
            margin-top: 16px;
        }

        .pract-toggle-head .btnWrapper{ 
            margin-top: 30px;
        }

        .pract-toggle-head>div:nth-child(1){
            padding-right:50px; 
        }

        /* CHild mobile elements align*/
        .pract-toggle-head>div:nth-child(2), .pract-toggle-head>div:nth-child(4){
            padding-left: 40px;
        }
    }


    /* # Linked Icon */
    .linked-icon .icon {
        color: #0e977f;
    }

    .linked-icon.disabled .icon {
        color: #EBEDEE;
        cursor: default;
    }


</style>

<section>
    <!-- Titolo_001 -->
    <div class="titolo">
        <h1>
            <div class="row">
                <div class="col-sm-8">
                    <span>CONTRATTI E PROPOSTE</span>
                </div>
            </div>
        </h1>  
    </div>
</section>

<div class="section outerWrapperTab no-backgr">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li class="on"><a href="#" title="" role="button">In corso</a></li>
					<li><a href="#"  role="button">Archivio</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>

<!-- NEW -->
<section>
    <!-- ROW 0 -->
    <div class="row header-col">       
        <div class="col-sm-12">
            <!-- ROW 0.1 -->
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="titleSection titleForm">Pratica</h3>
                </div>
                <div class="col-sm-2">
                    <h3 class="titleSection titleForm">Avviata da</h3>
                </div>
                <div class="col-sm-2">
                    <h3 class="titleSection titleForm">Scadenza</h3>
                </div>
                <div class="col-sm-2">
                    <h3 class="titleSection titleForm">Stato</h3>
                </div>
                <div class="col-sm-2">   
                </div>
            </div>
            <!-- END ROW 0.1 -->
        </div>
    </div>
    <!-- END ROW 0 -->
    <!-- ROW 1 -->
    <div class="row pract-toggle boxed">       
        <div class="col-sm-12">
            <!-- ROW 1.1 -->
            <div class="row pract-toggle-head right-space">
                <div class="col-sm-4 col-xs-12">
                    <!-- Text with Icon + sub-text -->                    
                    <div class="text-with-icon ellips">
                        <a class="linker" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                            <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                            <span class="text underline">NOME_PRATICA_UNIVOCO_1</span>
                            <span class="sub-text">INV-0018</span>
                        </a>
                    </div>
                </div>

                <div class="col-sm-2 col-xs-6">
                    <div class="mobile-label">Avviata da</div>
                    <!-- Casistica Icon -->
                    <div class="text-with-icon ellips">
                        <span class="icon icon-numeroverde_desktop" title="icon-numeroverde_desktop"></span>
                        <a href="#">Gestore</a>
                    </div>
                </div>

                <div class="col-sm-2 col-xs-6">
                    <div class="mobile-label">Scadenza</div>
                    <span class="text ellips">20/03/2021</span>
                </div>

                <div class="col-sm-2 col-xs-12">
                    <div class="mobile-label">Stato</div>
                    <div class="text-with-icon right-icon ellips">
                        <a class="linker" href="#">
                            <span class="icon icon-info_fill" data-toggle="tooltip" title="" data-original-title="Non hai ancora iniziato la sottoscrizione di questa pratica. Clicca il pulsante SOTTOSCRIVI per cominciare."></span>
                            <span class="text">NUOVA</span>
                        </a>
                    </div>
                </div>

                <div class="col-sm-2 col-xs-12">
                    <div class="form-group btnWrapper clearfix">     
                        <div class="btn-align-center">
                            <div>
                                <!-- <a type="button" href="#" class="btn btn-default disabled" title="sottoscrivi">sottoscrivi</a> -->
                                <!-- <a type="button" href="#" class="btn btn-default">sottoscrivi</a> -->
                                <a type="button" href="#" class="btn btn-primary ellips" title="sottoscrivi">Sottoscrivi</a>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="wrapper-icon-fixed">
                    <div class="linked-icon">
                        <a href="#">
                            <span class="icon icon-trash_filled"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END ROW 1.1 -->

            <!-- ROW 1.2 -->
            <div class="row collapse" id="collapse1">
                <div class="col-sm-12">
                    <div class="accord-content">
                        <h3>NOME_PRATICA_UNIVOCO_1</h3>
                        <span class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium, et accumsan 
                        eros pharetra. In vitae dolor condimentum, fringilla nunc vitae, molestie sem. Nulla maximus fermentum mauris congue 
                        pellentesque. Mauris turpis sapien, vestibulum a egestas ut, luctus sed justo. Aenean felis nisl, molestie id sapien 
                        <a class="read-more" href="#">VEDI DI PI&#218; ></a></span>
                        <div class="history-elements">
                            <!-- ROW 1.2.1 -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- NEW ELEMENT -->
                                    <div class="history-element">
                                        <div class="bullet-wrapper-target">                                  
                                            <div class="bullet-wrapper">
                                                <div class="bullet"></div> 
                                                <div class="bullet-route"></div>                               
                                            </div>
                                        </div>
                                        <div class="text-with-icon-target">
                                            <!-- Casistica Icon -->
                                            <div class="text-with-icon">
                                                <span class="glyph glyph-uread_pdf layered" title="glyph-uread_pdf layered"></span>
                                                <a href="#">Nome_documento_1</a>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="group-wrapper">
                                        <div class="group-element">
                                            <span class="icon icon-check_ok"></span>
                                        </div>
                                        <div class="group-element">
                                            <span class="text">20/03/2021</span>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <!-- END ROW 1.2.1 -->

                            <!-- ROW 1.2.2 -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- NEW ELEMENT -->
                                    <div class="history-element">
                                        <div class="bullet-wrapper-target">                                  
                                            <div class="bullet-wrapper">
                                                <div class="bullet"></div> 
                                                <div class="bullet-route"></div>                               
                                            </div>
                                        </div>
                                        <div class="text-with-icon-target">
                                            <!-- Casistica Icon -->
                                            <div class="text-with-icon">
                                                <span class="glyph glyph-uread_pdf layered" title="glyph-uread_pdf layered"></span>
                                                <a href="#">Nome_documento_2</a>
                                            </div>
                                        </div>
                                    </div>     
                                    <div class="group-wrapper">
                                        <div class="group-element">
                                            <span class="icon icon-check_ok"></span>
                                        </div>
                                        <div class="group-element">
                                            <span class="text">20/03/2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW 1.2.2 -->
                            <!-- ROW 1.2.3 -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- NEW ELEMENT -->
                                    <div class="history-element inactive">
                                        <div class="bullet-wrapper-target">                                  
                                            <div class="bullet-wrapper">
                                                <div class="bullet"></div> 
                                                <div class="bullet-route"></div>                               
                                            </div>
                                        </div>
                                        <div class="text-with-icon-target">
                                            <!-- Casistica Icon -->
                                            <div class="text-with-icon">
                                                <span class="glyph glyph-uread_pdf layered" title="glyph-uread_pdf layered"></span>
                                                <a href="#">Nome_documento_3</a>
                                            </div>
                                        </div>
                                    </div>     
                                    <div class="group-wrapper">
                                        <div class="group-element">
                                            <span class="icon icon-check_ok"></span>
                                        </div>
                                        <div class="group-element">
                                            <span class="text">20/03/2021</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END ROW 1.2.3 -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ROW 1.2 -->
        </div>
    </div>
    <!-- END ROW 1 -->

    <!-- ROW 2 -->
    <div class="row pract-toggle boxed">       
        <div class="col-sm-12">
            <!-- ROW 2.1 -->
            <div class="row pract-toggle-head right-space">
                <div class="col-sm-4 col-xs-12">
                    <!-- Text with Icon + sub-text -->
                    <div class="text-with-icon ellips">
                        <a class="linker" href="#">
                            <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                            <span class="text underline">NOME_PRATICA_UNIVOCO_2</span>
                            <span class="sub-text">INV-0019</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="mobile-label">Avviata da</div>
                    <!-- Casistica Icon -->
                    <div class="text-with-icon ellips">
                        <span class="icon icon-numeroverde_desktop" title="icon-numeroverde_desktop"></span>
                        <a href="#">Gestore</a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="mobile-label">Scadenza</div>
                    <span class="text ellips">20/03/2021</span>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="mobile-label">Stato</div>
                    <div class="text-with-icon right-icon ellips">
                        <a class="linker" href="#">
                            <span class="icon icon-info_fill" data-toggle="tooltip" title="" data-original-title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte."></span>
                            <span class="text">NUOVA</span>
                            <span class="sub-text">in attesa cointestatario</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-12">
                    <div class="form-group btnWrapper clearfix">     
                        <div class="btn-align-center">
                            <div>
                                <a type="button" href="#" class="btn btn-default disabled ellips" title="sottoscrivi">sottoscrivi</a> 
                                <!-- <a type="button" href="#" class="btn btn-default">sottoscrivi</a> -->
                                <!-- <a type="button" href="#" class="btn btn-primary" title="sottoscrivi">Sottoscrivi</a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper-icon-fixed">
                    <div class="linked-icon disabled">
                        <a href="#">
                            <span class="icon icon-trash_filled"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ROW 2 -->
</section>

<p>Non trovi una pratica? Le pratiche <strong>vengono spostate nell’Archivio a partire dal giorno successivo</strong> la sottoscrizione, scadenza o rifiuto.</p>