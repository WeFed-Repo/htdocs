

<div class="titolo">
<h1>
<div class="row">
<div class="col-sm-8">
<!-- TITOLO -->





<span>IL TUO PROFILO ASSICURATIVO</span>




<span class="hidden-xs">:&nbsp; ESITO</span>






<!-- /TITOLO -->

<!-- HELP -->

<!-- /HELP -->

<!-- DOCUMENTI OBBLIGATORI MOBILE -->		
<i class="icon icon-documento hidden-sm hidden-md hidden-lg" title="Documenti" id="ico-documenti" style="display:none"></i>
<!-- /DOCUMENTI OBBLIGATORI MOBILE -->
</div>


<!-- NUMERO PAGINA -->


<div class="col-sm-4">
<div class="pager pull-right">





<div class="circle current_page">1</div>





<div class="circle current_page">2</div>





<div class="circle current_page">3</div>

</div>
</div>

<!-- /NUMERO PAGINA -->

</div>
</h1>
</div>




</section>


















































<!-- Per il settaggio della section senza class settare prima il booleano "useSectionWithoutClass" a "true" -->












<section>




<div class="row">
<div class="col-sm-12">
<div class="messagePanel success hidden-print bgBoxBonif bgBoxSucc">
<div class="row">
<div class="col-xs-12 linHeighVert"><i class="icon iconBig icon-alert_ok"></i><h3>Grazie per aver compilato il tuo profilo assicurativo.</h3></div>					
</div>



<div class="row lh">
<div class="col-sm-1 hidden-xs"></div>
<div class="col-xs-12 col-sm-12">Richiedi appuntamento in filiale per avere maggiori informazioni su un prodotto o sottoscrivere una polizza.</div>
</div>


</div>
</div>
</div>
</section>


<br>

<section class="wrapper-fixed">
    <div class="row boxAction">
        <div class="col-xs-12">
            <h3>COSA PUOI FARE ORA</h3>
        </div>
    </div>
    <form name="formQuestionarioAssicurazioni" method="post" action="/WEBHT/assicurazioni/questionario.do">
        <div class="row boxAction">
            <div class="col-sm-7 hidden-xs">
                <p>Richiedi appuntamento in filiale</p>
            </div>
            <div class="col-sm-5 col-xs-12 alignRight">
                <!--da mettere il link che manda alla richiesta -->
                <a class="btn btn-link" title="Richiedi appuntamento in filiale"><span>Richiedi</span><i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a>
            </div>
        </div>
    </form>
    <div class="row boxAction">
		<div class="col-sm-7 hidden-xs"><p>Salva o stampa il riepilogo</p></div>
		<div class="col-sm-5 col-xs-12 alignRight"><a href="#" class="btn btn-link"><span>Apri pdf</span><i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a></div>
	</div>
    <form name="formQuestionarioAssicurazioni" method="post" action="/WEBHT/assicurazioni/questionario/stampa.do">
        <div class="row boxAction">
            <div class="col-sm-7 hidden-xs">
                <p>Salva o stampa il riepilogo</p>
            </div>
            <div class="col-sm-5 col-xs-12 alignRight">
                <p>
                    <input type="submit" name="scaricoModulo" value="APRI PDF >" class="btn btn-primary" alt="APRI PDF >">
                </p>
            </div>
        </div>
    </form>
    <form name="formQuestionarioAssicurazioni" method="post" action="/WEBHT/assicurazioni/questionario.do">
        <div class="row boxAction">
            <div class="col-sm-7 hidden-xs">
                <p>Consulta o modifica il tuo profilo assicurativo</p>
            </div>
            <div class="col-sm-5 col-xs-12 alignRight">
                <p>
                    <input type="submit" value="VAI AL TUO PROFILO >" class="btn btn-primary" alt="VAI AL TUO PROFILO >">
                </p>
            </div>
        </div>
    </form>
</section>
