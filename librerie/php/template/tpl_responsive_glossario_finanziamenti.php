<h2>Glossario</h2>




<script>    

// Array con le letterine
var funLetters = new Array ('#letteraA','#letteraB','#letteraC','#letteraD','#letteraE','#letteraF','#letteraG','#letteraH','#letteraI','#letteraJ','#letteraK','#letteraL','#letteraM','#letteraN','#letteraO','#letteraP','#letteraQ','#letteraR','#letteraS','#letteraT','#letteraU','#letteraV','#letteraW','#letteraX','#letteraY','#letteraZ');

function funShowLetterGloss(lettera,menu)
{
  lettera = jqc(lettera);
  menu = jqc (menu);
  $(funLetters.join(",")).hide();
  $(lettera).show();
  $(lettera).find("li:first-child").addClass("open");
  $(lettera).find("li:first-child div").show();
  $('#glossario li').removeClass("on");
  $(menu).addClass("on");
}

// Funzione "mostra tutti"
function abilitaLetterGloss()
{
  $('#glossario li').addClass("on");
  $(funLetters.join(",")).find("li:first-child").removeClass("open").addClass("close");
  $(funLetters.join(",")).find("li:first-child div").hide();
  $(funLetters.join(",")).show();
}

</script>




<div class="glossarioSX">

<div id="glossario">
    <ul class="ben">

      <li class="first on" id="MenuA"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraA','MenuA')">A</a></li>

      <li class="off" id="MenuB">B</li>

      <li  id="MenuC"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraC','MenuC')">C</a></li>

      <li  id="MenuD"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraD','MenuD')">D</a></li>

      <li  id="MenuE"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraE','MenuE')">E</a></li>

      <li  id="MenuF"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraF','MenuF')">F</a></li>

      <li  id="MenuG"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraG','MenuG')">G</a></li>

      <li class="off" id="MenuH">H</li>

      <li  id="MenuI"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraI','MenuI')">I</a></li>

      <li class="off" id="MenuJ">J</li>

      <li class="off" id="MenuK">K</li>

      <li class="off" id="MenuL">L</li>

      <li class="off" id="MenuM">M</li>

      <li class="off" id="MenuN">N</li>

      <li  id="MenuO"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraO','MenuO')">O</a></li>

      <li  id="MenuP"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraP','MenuP')">P</a></li>

      <li class="off" id="MenuQ">Q</li>

      <li  id="MenuR"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraR','MenuR')">R</a></li>

      <li  id="MenuS"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraS','MenuS')">S</a></li>

      <li  id="MenuT"><a href="javascript:;" onclick="javascript: funShowLetterGloss('letteraT','MenuT')">T</a></li>

      <li class="off" id="MenuU">U</li>

      <li class="off" id="MenuV">V</li>

      <li class="off" id="MenuW">W</li>

      <li class="off" id="MenuX">X</li>

      <li class="off" id="MenuY">Y</li>

      <li class="off" id="MenuZ">Z</li>

      <li class="tutti" id="Tutti"><a href="javascript:;" onclick="javascript: abilitaLetterGloss()">Tutti</a></li>   

    </ul>
  </div>

</div>

<div class="glossarioDX">


<!-- A -->
<div id="letteraA" style="display: block;">
  <div class="panel-group" id="accordionA" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingA">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" href="#collapseA" aria-expanded="false" aria-controls="collapseA">
            Ammortamento <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapseA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingA">
        <div class="panel-body">
         L'ammortamento del capitale &egrave; il processo di estinzione graduale di un finanziamento mediante il pagamento periodico di rate comprendenti una quota di capitale e una quota in conto interessi, secondo il piano di rimborso definito.
        </div>
      </div>
    </div>
  </div>
</div>
<!-- A -->

<!-- C -->
<div id="letteraC" style="display: none;">
  <div class="panel-group" id="accordionC" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingC">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" href="#collapseC" aria-expanded="false" aria-controls="collapseC">
            Capitale<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapseC" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingC">
        <div class="panel-body">
          Si intende l'importo totale del finanziamento concesso dalla banca al cliente. La quota capitale &egrave; quella parte di rata che serve a restituire, nel tempo stabilito, il capitale richiesto.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingCC">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" href="#collapseCC" aria-expanded="false" aria-controls="collapseCC">
            Conto corrente bancario e/o di corrispondenza <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapseCC" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCC">
        <div class="panel-body">
          Rapporto di credito e di debito che si instaura tra la banca e il cliente in cui il correntista pu&ograve; disporre in qualsiasi momento delle somme risultanti a suo credito e pu&ograve; dare mandato alla banca di svolgere incarichi vari come effettuare pagamenti, riscossioni ecc. E' necessario per l'erogazione del finanziamento il regolamento delle rate periodiche.
        </div>
      </div>
    </div>
  </div>
</div>
<!-- C -->





<!-- D -->
<div id="letteraD" style="display: none;">
  <div class="panel-group" id="accordionD" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingD">
        <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseD" aria-expanded="false" aria-controls="collapseD">
            Durata del prestito<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapseD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingD">
        <div class="panel-body">
          Rappresenta il numero di mesi concordato tra la banca e il cliente per l'estinzione del prestito.
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingDD">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" href="#collapseDD" aria-expanded="false" aria-controls="collapseDD">
            Debito residuo <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapseDD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDD">
        <div class="panel-body">
          &Egrave; la quota di capitale che i titolari di una linea di credito, o nel caso di prestito o mutuo i contraenti del finanziamento, devono  ancora restituire a una certa data.
        </div>
      </div>
    </div>
    
      <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingDDD">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" href="#collapseDDD" aria-expanded="false" aria-controls="collapseDDD">
            Domanda del prestito <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
          </a>
        </h4>
      </div>
      <div id="collapseDDD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDDD">
        <div class="panel-body">
          Documento attraverso il quale i clienti ufficializzano la richiesta di prestito alla banca. Nella domanda sono specificati i nominativi dei richiedenti e garanti proposti e i dettagli relativi al finanziamento. Il cliente autorizza inoltre la banca a effettuare le verifiche necessarie per la valutazione della pratica. 
        </div>
      </div>
    </div>
  </div>
</div>
<!-- D -->


<!-- E -->
<div id="letteraE" style="display: none;">
<div class="panel-group" id="accordionE" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingE">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseE" aria-expanded="false" aria-controls="collapseE">
          Erogazione del prestito<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingE">
      <div class="panel-body">
        Processo attraverso il quale la banca trasferisce concretamente la somma concessa al richiedente.
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEE">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseEE" aria-expanded="false" aria-controls="collapseEE">
          Euribor <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseEE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEE">
      <div class="panel-body">
        EURo InterBank Offered Rate &egrave; il tasso diffuso giornalmente dalla Federazione Bancaria Europea come media ponderata dei tassi di interesse ai quali le banche operanti nell'Unione Europea cedono i depositi in prestito. L'Euribor viene rilevato per durate da 1 a 12 mesi.
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingEEE">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseEEE" aria-expanded="false" aria-controls="collapseEEE">
          Euribor a 3 mesi<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseEEE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEEE">
      <div class="panel-body">
       E' il tasso Euribor riferito ai depositi ceduti in prestito per un periodo di 3 mesi. E' il parametro comunemente utilizzato per l'indicizzazione dei mutui ipotecari a tasso variabile.
      </div>
    </div>
  </div>
</div>
</div>
<!-- E  -->



<!-- F -->
<div id="letteraF" style="display: none;">
<div class="panel-group" id="accordionF" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingF">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseF" aria-expanded="false" aria-controls="collapseF">
         Fidejussione <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseF" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingF">
      <div class="panel-body">
        E' l'atto di garanzia personale con cui un soggetto si impegna a garantire alla banca creditrice il pagamento di quanto dovuto dal debitore nel caso in cui risultasse insolvente.
      </div>
    </div>
  </div>
</div>
</div>
<!-- F -->


<!-- G -->
<div id="letteraG" style="display: none;">
<div class="panel-group" id="accordionG" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingG">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseG" aria-expanded="false" aria-controls="collapseG">
         Garante<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseG" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingG">
      <div class="panel-body">
       Colui che offre la garanzia reale o personale per il debitore.
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingGG">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseGG" aria-expanded="false" aria-controls="collapseGG">
          Garanzia personale <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseGG" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingGG">
      <div class="panel-body">
       E' l'atto con cui un soggetto, obbligandosi personalmente verso il creditore, garantisce l'adempimento di una obbligazione altrui. La garanzia &egrave; personale perch? il creditore pu&ograve; soddisfarsi sul patrimonio di una persona diversa dal debitore.
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingGGG">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseGGG" aria-expanded="false" aria-controls="collapseGGG">
          Garanzia reale <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseGGG" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingGGG">
      <div class="panel-body">
        Le garanzie si dicono reali quando sono costituite attraverso l'offerta in garanzia di un bene specifico. Ipoteca e pegno sono esempi di garanzie reali.
      </div>
    </div>
  </div>
  
</div>
</div>
<!-- G -->




<!-- I -->
<div id="letteraI" style="display: none;">
<div class="panel-group" id="accordionI" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingI">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseI" aria-expanded="false" aria-controls="collapseI">
          Indice di riferimento del prestito<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseI" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingI">
      <div class="panel-body">
      E' il parametro utilizzato come riferimento per la determinazione del tasso di interesse a regime del prestito. I parametri utilizzati sono l'Euribor per i prestiti a tasso variabile e l'IRS per quelli a tasso fisso. All'indice di riferimento viene sommato lo Spread specifico del prodotto per la determinazione del tasso di interesse del prestito.
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingII">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseII" aria-expanded="false" aria-controls="collapseII">
          Interessi di mora <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseII" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingII">
      <div class="panel-body">
        Sono gli interessi aggiuntivi rispetto al tasso del finanziamento, che sono applicati dalla banca in caso di ritardo dei pagamenti delle rate rispetto alle scadenze. Viene applicato sui giorni di ritardo del pagamento.
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingIII">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseIII" aria-expanded="false" aria-controls="collapseIII">
          Istruttoria di prestito <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseIII" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingIII">
      <div class="panel-body">
        Nel caso di prestito bancario, la banca prima di concedere il prestito procede a una analisi del cliente (istruttoria di merito) finalizzata a definire la sua capacit&agrave; di rimborso. Se questa prima fase si conclude positivamente, d&agrave; avvio alle procedure per la formalizzazione del contratto di prestito (istruttoria di forma tecnica).
      </div>
    </div>
  </div>
  
</div>
</div>
<!-- I -->


<!-- O -->
<div id="letteraO" style="display: none;">
<div class="panel-group" id="accordionO" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingO">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseO" aria-expanded="false" aria-controls="collapseO">
          Oneri accessori per i prestiti <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingO">
      <div class="panel-body">
        Rappresentano tutte le spese da sostenere per accendere e per rimborsare il prestito. Comprendono le spese per l'istruttoria della pratica e le commissioni per l'incasso delle rate dovute alla banca. Per approfondimenti sulle spese collegate al prestito e all'acquisto della casa &egrave; possibile consultare la sezione spese in ABC dei prestiti.
      </div>
    </div>
  </div>
</div>
</div>
<!-- O -->


<!-- P -->
<div id="letteraP" style="display: none;">
<div class="panel-group" id="accordionP" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingP1">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseP1" aria-expanded="false" aria-controls="collapseP1">
          Preammortamento<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseP1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP1">
      <div class="panel-body">
        Periodo iniziale del finanziamento in cui le rate pagate sono costituite dalla sola quota interessi. Il preammortamento &egrave; previsto solo per alcuni prodotti ed &egrave; facolt&agrave; del cliente richiederlo. Nel periodo iniziale le rate da sostenere saranno dunque pi&ugrave; leggere, in quanto non viene restituita alcuna quota di capitale.
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingP2">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseP2" aria-expanded="false" aria-controls="collapseP2">
          Prestito a tasso fisso <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseP2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP2">
      <div class="panel-body">
        Il tasso di interesse rimane fisso e la rata &egrave; costante per tutta la durata del prestito.
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingP3">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseP3" aria-expanded="false" aria-controls="collapseP3">
          Prestito <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseP3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP3">
      <div class="panel-body">
      E' il contratto con il quale la Banca consegna a un soggetto (cliente) una determinata quantit&agrave; di denaro e quest'ultimo si impegna a restituire, in un determinato periodo di tempo, altrettanto denaro pi&ugrave; gli interessi pattuiti.
      </div>
    </div>
  </div>
  
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingP4">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseP4" aria-expanded="false" aria-controls="collapseP4">
          Piano di rimborso (o di ammortamento) <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseP4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP4">
      <div class="panel-body">
       Piano di rimborso (o di ammortamento)</a>
         Il piano di rimborso &egrave; costituito dall'insieme delle rate ed &egrave; rappresentato da un prospetto in cui sono indicati la composizione delle rate e gli importi da versare per giungere al rimborso del finanziamento. Il piano di rimborso pi&ugrave; comune prevede la formula di ammortamento alla francese, in cui ogni rata &egrave; caratterizzata da una quota di capitale restituito e da una quota di interessi sul finanziamento, e per ogni rata le quote di capitale rimborsate sono crescenti nel tempo, mentre gli interessi sono decrescenti.
      </div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingP5">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseP5" aria-expanded="false" aria-controls="collapseP5">
         Prestito a tasso variabile <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseP5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingP5">
      <div class="panel-body">
      Il tasso di interesse applicato varia in relazione all'andamento di uno o pi&ugrave; parametri specificamente indicati nel contratto di prestito. 
      </div>
    </div>
  </div>

</div>
</div>
<!-- P -->


<!-- R -->
<div id="letteraR" style="display: none;">
<div class="panel-group" id="accordionR" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingR">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseR" aria-expanded="false" aria-controls="collapseR">
          Rata costante<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingR">
      <div class="panel-body">
        La rata si definisce costante quando la somma tra quota capitale e quota interessi rimane uguale per tutta la durata del finanziamento.
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingRR">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseRR" aria-expanded="false" aria-controls="collapseRR">
          Rata del prestito <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseRR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRR">
      <div class="panel-body">
       Pagamento che l'intestatario effettua periodicamente per la restituzione del prestito secondo cadenze stabilite contrattualmente. La rata &egrave; composta da una quota capitale, cio&egrave; una parte dell'importo prestato, e da una quota interessi, relativa a una parte degli interessi dovuti alla banca per il prestito.
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingRRR">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" href="#collapseRRR" aria-expanded="false" aria-controls="collapseRRR">
          Rata variabile <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseRRR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingRRR">
      <div class="panel-body">
        La rata si definisce variabile quando la somma tra quota capitale e quota interessi cresce o decresce durante il rimborso al variare dell'indice di riferimento (e quindi del tasso) del finanziamento.
      </div>
    </div>
  </div>
  
</div>
</div>
<!-- R -->




<!-- S -->
<div id="letteraS" style="display: none;">
<div class="panel-group" id="accordionS" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingS1">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseS1" aria-expanded="false" aria-controls="collapseS1">
          Scadenza delle rate per il prestito<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseS1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingS1">
      <div class="panel-body">
        Consiste nella data fissa di scadenza delle rate periodiche del prestito. Per i prestiti &egrave; di solito il giorno dell'erogazione del prestito a partire dal mese successivo alla stessa (o dopo un periodo diverso specificatamente previsto per la tipologia di prodotto).
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingS2">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseS2" aria-expanded="false" aria-controls="collapseS2">
          Spese d'istruttoria <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseS2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingS2">
      <div class="panel-body">
        E' il contributo chiesto dalla banca per l'espletamento delle pratiche e delle formalit&agrave; necessarie all'erogazione del finanziamento.
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingS3">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseS3" aria-expanded="false" aria-controls="collapseS3">
          Spese di addebito in conto corrente <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseS3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingS3">
      <div class="panel-body">
        Costo della disposizione di addebito automatico delle rate periodiche su conto corrente.
      </div>
    </div>
  </div>
  
      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingS4">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseS4" aria-expanded="false" aria-controls="collapseS4">
          Spread sul tasso <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseS4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingS4">
      <div class="panel-body">
        E' l'aliquota (maggiorazione) che si somma al valore dell'indice di riferimento utilizzato dalla banca per determinare il tasso effettivo del finanziamento.
      </div>
    </div>
  </div>

</div>
</div>
<!-- S -->



<!-- T -->
<div id="letteraT" style="display: none;">
<div class="panel-group" id="accordionT" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingT1">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseT1" aria-expanded="false" aria-controls="collapseT1">
          TAEG (Tasso Annuo Effettivo Globale)<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseT1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingT1">
      <div class="panel-body">
        Si tratta del tasso che esprime il costo effettivo di un finanziamento, tenendo conto anche di tutte le commissioni e le spese sostenute per ottenere il finanziamento e per pagare le rate.
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingT2">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseT2" aria-expanded="false" aria-controls="collapseT2">
          TAN (Tasso Annuo Nominale) <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseT2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingT2">
      <div class="panel-body">
        Il TAN indica il tasso applicato al finanziamento, calcolato su base annua. Il TAN indica esclusivamente la misura degli interessi dovuti su un finanziamento, senza tenere conto delle spese.
      </div>
    </div>
  </div>
  
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingT3">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseT3" aria-expanded="false" aria-controls="collapseT3">
          Tasso di usura <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseT3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingT3">
      <div class="panel-body">
        E' il tasso di interesse massimo cui pu&ograve; essere prestato denaro o erogato un finanziamento, definito dalla legge. Il valore limite &egrave; dichiarato dalla Banca d'Italia ed &egrave; calcolato maggiorando del 50% il TAEG medio registrato nel trimestre precedente per ogni categoria di finanziamento.
      </div>
    </div>
  </div>

      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingT4">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseT4" aria-expanded="false" aria-controls="collapseT4">
          Tasso di interesse<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseT4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingT4">
      <div class="panel-body">
        La misura degli interessi &egrave; denominata: tasso o saggio. Il tasso si distingue in legale e convenzionale: il primo &egrave; fissato dal legislatore; il secondo dalle parti. <br>Praticamente, il tasso di interesse &egrave;  il costo che il cliente corrisponde alla banca per detenere il finanziamento. E' calcolato come percentuale del capitale erogato (ovvero del residuo da restituire) durante tutta la durata del finanziamento.
      </div>
    </div>
  </div>

      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingT5">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseT5" aria-expanded="false" aria-controls="collapseT5">
          Tasso variabile <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseT5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingT5">
      <div class="panel-body">
        Viene definito variabile il tasso che varia in funzione dell'andamento di mercato dell'indice di riferimento definito. 
      </div>
    </div>
  </div>

      <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingT6">
      <h4 class="panel-title">
      <a class="collapsed" data-toggle="collapse" href="#collapseT6" aria-expanded="false" aria-controls="collapseT6">
         Tasso fisso <i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
        </a>
      </h4>
    </div>
    <div id="collapseT6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingT6">
      <div class="panel-body">
        Viene definito fisso il tasso che rimane costante per tutta la durata del finanziamento.
      </div>
    </div>
  </div>
  
</div>
</div>
<!-- T -->






</div>




