<p>
  Se si vuole che una voce sia aperta di default: eliminare la classe .collapsed da card-header.
  <br /> Lo stile differente dei due accordion mostrati è dato solo dalla presenza della classe 
  <strong>.bordered-style</strong> applicata al parent con classe .accordion
</p>

<p>
    Bottoni di Collapse/Expand all : 
    <ol>
      <li>Creare un bottone con attributo data-collapser uguale all'ID dell'accordion che si vuole comandare</li>
      <li>Impostare, sempre al bottone, l'attributo data-collapser-dir con valore "show" o "hide"</li>
      <li>Se l'attributo data-collapser-dir non viene settato, il comportamento è di tipo "toggle".</li>
    </ol>
</p>