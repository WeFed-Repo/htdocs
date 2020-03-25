<h2>Imposta alert</h2>


<section>
    <ul>
        <li>
            In questa pagina puoi impostare alert automatici (<strong>SMS</strong> e <strong>EMAIL</strong>) che ti avvisano quando si verificano determinati eventi che selezioni online. Per esempio, quando ricevi lo stipendio o quando fai sul sito una operazione.
        </li>
        <li>
            <strong>Per alcuni Sms è previsto un costo; gli alert via email sono invece gratuiti.</strong>
        </li>
    </ul>
    <p><a href="#" class="btn-icon" data-toggle="modal" data-target="#layerSepa">Costi Sms</a><br/><a href="#" class="btn-icon">Dettagli</a></p>
</section>

<section>
    <form class="formGenerico borderFormRounded output" role="form" id="form04">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                        <label class="control-label">N di cellulare</label>
                        <span class="output">339*****99</span>
                </div>
                <div class="col-sm-6">
                        <label class="control-label">Operatore:</label>
                        <span class="output">Wind</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                        <label class="control-label">Indirizzo e-mail:</label>
                        <span class="output">pippoplutopaperino@paperopoli.com</span>
                </div>
            </div>
        </div>
    </form>
</section>



<section>
    <p>&Egrave; possibile modificare il proprio numero telefonico ed il proprio indirizzo mail nell'apposita 
    sezione <a href="#" class="btn-icon">Modifica recapiti.</a></p>
<!-- NAVIGATION -->

<div class="navContFirstLev outerTab">
    <div class="innerTab">
        <ul class="tabsmall">
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Conto</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_deposito.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Deposito</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_bancomat.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Bancomat</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_trading.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Trading</a></li>
            <li class="on"><a href="#">Titoli e indici</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_fondi_sicav.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Fondi e sicav</a></li>
            <li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_sicurezza.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">Sicurezza</a></li>
        </ul>
    </div>
    <div class="separator"></div>
    <div class="panel-nofill">
</section>


<section>
    <h4>Conto sul quale attivare gli alert</h4>
    <form class="formGenerico borderFormRounded" role="form" id="" autocomple="off">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 ">
                    <label for="" class="control-label">Conto corrente</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <select class="form-control" name="" id="">
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                            </select>
                            <div class="input-group-addon">
                                <a class="btn-icon" data-toggle="modal" data-target="#starAlert1" data-animation="false"> <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</section>
    

<section>
<h4>Aggiungi alert su un titolo</h4>
<p>Cerca il titolo su cui vuoi attivare un alert.</p>

<form class="formGenerico borderFormRounded" role="form" id="form01">
<div class="form-group">
    <div class="row">   
        <div class="col-sm-12">
            <label class="control-label">Titolo</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-4 col-xs-4">
                        <div class="radio inline">
                            <label class="textWrapper">
                                <input type="radio" name="smsTitoli" id="nome" value="nome">
                                <span class="text">Nome</span>   
                            </label>
                        </div>    
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <div class="editable-input">
                            <input type="text" name="" id="nomeIndice" class="form-control clear-x" data-toggle="tooltip" data-title="Puoi cercare sia per simbolo che per nome titolo" data-original-title="" title="">
                            <span class="editable-clear-x" style="display: none">
                                <i class="icon icon-close icon-1x"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-3 col-xs-4">
                        <div class="radio inline">
                            <label class="textWrapper">
                                <input type="radio" name="smsTitoli" id="iniziale" value="iniziale">
                                <span class="text">Iniziale</span>
                            </label>
                        </div>    
                    </div>
                    <div class="col-sm-2 col-xs-2">
                        <select name="" class="form-control" id="inizialeIndice">
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                            <option>F</option>
                            <option>G</option>
                            <option>H</option>
                            <option>I</option>
                            <option>L</option>
                            <option>M</option>
                            <option>N</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-sm-6">
        <label class="control-label">Mercato</label>
            <select class="form-control">
                <optgroup label="Azioni"> 
                    <option value="MI|EQCON|B">MTA</option><option value="MI|EQCON|BI">BIT GEM</option><option value="TLX|ELX|B">EuroTLX</option><option value="FR|EQXET|B">XETRA</option><option value="EUR|EQPA|B">SBF</option><option value="LON|EQLSE|B">FTSE100</option><option value="MA|EQIBE|B">IBEX35</option><option value="EUR|EQAMS|B">AEX25</option><option value="EUR|EQBRU|B">BEL20</option><option value="EUR|EQPSI|B">PSI20</option><option value="NY|EQNY|B">NYSE</option><option value="NQ|EQNQ|B">NASDAQ</option>
                </optgroup> 
                <optgroup label="ETF-ETC">
                    <option value="MI|EQCON|E">ETFplus</option>
                </optgroup> 
                <optgroup label="CW E CERTIFICATES"> 
                    <option value="MI|CW|C">SEDEX</option><option value="TLX|ELX|C">EuroTLX</option>
                </optgroup> 
                <optgroup label="OBBLIGAZIONI" class="optiongroup">
                    <option value="MI|MRT|O">MOT - EuroMOT</option><option value="TLX|ELX|O">EuroTLX</option><option value="MI|HIMTF|O">Hi-MTF</option>
                </optgroup> 
            </select>
        </div>
    </div>
</div>
</form>

<div class="form-group btnWrapper">
    <div class="btn-align-left">
        <a type="button" class="btn btn-default" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_titoli_indici.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#">vai alla lista titoli</a>
    </div>
    <div class="btn-align-right">
        <a type="button" class="btn btn-primary" id="" data-toggle="modal" data-target="#layerSepa">prosegui</a>
    </div>
    <br class="clear">
</div>

</section>







    </div>  <!-- END panel-nofill -->
</div>  <!-- END navContFirstLev outerTab -->





<!-- GESTIONE DEI RADIO  -->
    <script type="text/javascript">
<!-- -->
        $(function() {
            $('input[name="smsTitoli"]').on('click' , function(){      
                if($(this).val() === "nome"){
                   $("#inizialeIndice").attr( "disabled", "disabled" );
                   $("#nomeIndice").removeAttr("disabled", "disabled");
                }
                else{

                    $("#nomeIndice").attr( "disabled", "disabled" );
                    $("#inizialeIndice").removeAttr("disabled", "disabled");
                    $("#nomeIndice").val("");
                }
                    
            });
                


        });
    </script>
<!-- GESTIONE DEI RADIO -->



<!-- OVERLAYER -->
<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">RISULTATI DELLA RICERCA</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3>Visualizzati: 5 elementi</h3>


                            
                         <table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
                             <thead>
                                <tr>
                                    <th data-field="radio" class="center"></th>
                                    <th data-field="simbolo">Simbolo</th>
                                    <th data-field="titolo">Titolo</th>
                                    <th data-field="mercato">Mercato</th>
                                </tr>
                             </thead>
                        </table>

                <div class="form-group btnWrapper">
                    <div class="btn-align-right">
                       <a type="button"  href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_titoli_2.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1#" class="btn btn-primary">prosegui</a>
                    </div>
                    <br class="clear">
                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OVERLAYER -->




<script>
    var $tableOrdered = $('#tableOrdered');
    $(function () {
        var data = [
    {
        "simbolo": "A2A",
        "titolo": "A2A",
        "mercato": "MTA",
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "ABT",
        "titolo": "ABITARE IN AZ ORD",
        "mercato": "MTA",
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "ACE",
        "titolo": "ACEA",
        "mercato": "MTA",
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },  
    {
        "simbolo": "INT",
        "titolo": "INTESA SAN PAOLO",
        "mercato": "MTA",
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "UBI",
        "titolo": "UBI BANCA ",
        "mercato": "MTA",
        "radio": "<input type='radio'  id='' name='listaTitoli'>"    
    },
    {
        "simbolo": "UDC",
        "titolo": "UNICREDIT",
        "mercato": "MTA",
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "MPS",
        "titolo": "MONTE DEI PASCHI DI SIENA",
        "mercato": "MTA",
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "BPM",
        "titolo": "BANCA POPOLARE MILANO",
        "mercato": "MTA",
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "AMH",
        "titolo": "ANIMA HOLDING",
        "mercato": "MTA",
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "PST",
        "titolo": "POSTE ITALIANE",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "MCL",
        "titolo": "MONCLER",
        "mercato": "MTA",       
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "FRA",
        "titolo": "FERRARI",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "ACE",
        "titolo": "BBBBBB",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "CCC",
        "titolo": "ADFDFD",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "ACE",
        "titolo": "ACEA",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },  
    {
        "simbolo": "ADADA",
        "titolo": "ACEAAAAA",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "ACE",
        "titolo": "ACEA",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },  
    {
        "simbolo": "FBS",
        "titolo": "FACEBOOK",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "LKD",
        "titolo": "LINKEDIN",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "MDS",
        "titolo": "MEDIASET",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    },
    {
        "simbolo": "TCL",
        "titolo": "TELECOM ITALIA",
        "mercato": "MTA",        
        "radio": "<input type='radio'  id='' name='listaTitoli'>"
    }
    
    ];

    $tableOrdered.bootstrapTable({
            data: data,
            pagination : "true",
            pageSize: 5,
             rowStyle: function(row, index) {
                if(index % 2 == 0)
                {
                    return {
                        classes: 'dispari'
                    }
                }
                else {
                    return {
                        classes: 'pari'
                    }
                }
               },
        });
   });


</script>