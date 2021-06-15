<!-- Titolo -->
<h1>
    Entrate e Uscite <button type="button" class="btn-icon-help" data-modal-help=""></button>
</h1>
<!-- /Titolo -->

<!-- Tabber -->
<div class="no-margin-section">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#">Andamento</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Categorie</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Ricorrenti</a></li>
    </ul>
</div>
<!-- /Tabber -->

<!-- SELETTORE RAPPORTO BFM -->
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_bfm/oggetto.php'); ?>
<!-- ./ SELETTORE RAPPORTO BFM -->

<!-- Esempio grafico interattivo -->
<div class="bordered">
    <?php include("parts/grafico_entrateuscite.php"); ?>
</div>
<!-- /Esempio grafico interattivo -->

