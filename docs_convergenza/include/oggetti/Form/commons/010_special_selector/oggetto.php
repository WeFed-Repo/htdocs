<?php if ($site==="webank") {
?>
<script>
$(function(){
	$("#btnTest").click(function () {
			// Setta gli errori sui campi
			var errors = [];
			errors.push({ field: $("#spselCTA"), text: "Lorem ipsum dolor sit amet, consectetur adipisicing." });
			errors.push({ field: $("#spselCTA2"), text: "Lorem ipsum dolor sit amet, consectetur adipisicing." });

			setHasErrors(errors);
	});
});
</script>
<?php
} ?>

<div class="formGenerico borderFormRounded">
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6 form-field-input">
				<label class="control-label">Versione "grafica" con CTA</label>
				<script type="text/javascript">

					/* Esempio inizializzazione */
					$(function(){
						// Inizializza la special-select tipo "default" (esempio di callback)
						$("#spselCTA").spSel(
							function(){
								console.log($("input[name=spselCTAinput]").val())}
						);
						// Inizializzazione personalizzata degli elementi correlati alla special select (nel caso specifico sono delle iconcine)
						// La funzione deve essere uguale per tutti e verra' riportata anche nell'elemento selezionato
						$("#spselCTA .spsel-addel.btn-icon").click(function(e){
							e.stopPropagation();
							alert("Elemento selezionato: " + $(this).attr("data-el"));
						})
					});

				</script>
				<div class="spsel spsel-hasicon nosel" id="spselCTA" placeholder="Seleziona...">
					<input type="hidden" name="spselCTAinput" value="3">
					<div class="spsel-options">
						<?php for($i=0;$i<=20;$i++) { ?>
						<div class="spsel-option" data-value="<?php print($i);?>">
							<a class="spsel-addel btn-icon" data-el="icona_informativa_<?php print($i);?>"><i class="icon <?php print ($site==="webank") ? "icon-info": "icon-info_fill";?>"></i></a>
							<a class="spsel-option-el">Elemento <?php print($i);?> lorem ipsum dolor sit amet</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 form-field-input">
				<label class="control-label">Versione "grafica" con CTA senza preselezione</label>
				<script type="text/javascript">

					/* Esempio inizializzazione */
					$(function(){
						// Inizializza la special-select tipo "default" (esempio di callback)
						$("#spselCTA2").spSel(
							function(){console.log($("input[name=spselCTAinput2]").val())}
						);
						// Inizializzazione personalizzata degli elementi correlati alla special select (nel caso specifico sono delle iconcine)
						// La funzione deve essere uguale per tutti e verra' riportata anche nell'elemento selezionato
						$("#spselCTA2 .spsel-addel.btn-icon").click(function(e){
							e.stopPropagation();
							alert("Elemento selezionato: " + $(this).attr("data-el"));
						})
					});

				</script>
				<div class="spsel spsel-hasicon nosel" id="spselCTA2"  placeholder="Seleziona...">
					<input type="hidden" name="spselCTAinput2">
					<div class="spsel-options">
						<?php for($i=0;$i<=20;$i++) { ?>
						<div class="spsel-option" data-value="<?php print($i);?>">
							<a class="spsel-addel btn-icon" data-el="icona_informativa_<?php print($i);?>"><i class="icon <?php print ($site==="webank") ? "icon-info": "icon-info_fill";?>"></i></a>
							<a class="spsel-option-el">Elemento <?php print($i);?> lorem ipsum dolor sit amet</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6 form-field-input">
				<label class="control-label">Versione "output"</label>
				<script type="text/javascript">

					/* Esempio inizializzazione */
					$(function(){

						// Inizializzazione personalizzata degli elementi correlati alla special select (nel caso specifico sono delle iconcine)
						// La funzione deve essere uguale per tutti e verra' riportata anche nell'elemento selezionato
						$("#spselOutIco").click(function(e){
							alert("Click sull'iconcina informativa");
						})
					});

				</script>
				<div class="spsel spsel-hasicon output">
					<input type="hidden" name="spselOutput" val="0932180931">
					<div class="spsel-option spsel-selected">
						<a class="spsel-addel btn-icon" data-el="icona_informativa_3" id="spselOutIco"><i class="icon <?php print ($site==="webank") ? "icon-info": "icon-info_fill";?>"></i></a>
						<span class="spsel-option-el">Lorem ipsum dolor sit amet consectetur</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 form-field-input">
				<script type="text/javascript">
					// Esempio di automazione completamente "custom"
					$(function(){
						$("#spSelCustom .spsel-option-el").click(function(){

							// Riempie con una serie di elementi la finta "select"
							$(this).parents(".spsel").removeClass("nosel").addClass("spsel-hasicon");
							// Esempio funzione custom
							alert("Esempio funzione custom!")
							$(this).parents(".spsel-option").empty().append('<a class="spsel-addel btn-icon" data-el="icona_informativa_3"><i class="icon <?php print ($site==="webank") ? "icon-info": "icon-info_fill";?>"></i></a><a class="spsel-option-el">Elemento 3 lorem ipsum dolor sit amet</a></div>');

						});
					});
				</script>

				<label class="control-label">Versione "finta select" con tutte le funzioni customizzate (solo layout)</label>
				<div class="spsel custom nosel" id="spSelCustom">
					<input type="hidden" name="spSelCust">
					<div class="spsel-option spsel-selected">
						<a class="spsel-option-el">Clicca per riempire la "select"</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6 form-field-input">
				<label class="control-label">Versione "lista" con scelta multipla</label>
				<script type="text/javascript">
				/* Esempio inizializzazione */
					$(function(){
						// Inizializza la special-select tipo "default" (esempio di callback)
						$("#spselCheck").spSel(
							function(){
								console.log($("input[name=spselCheckinput]").val())
							}
						);
					});
				</script>
				<div class="spsel spsel-check nosel" id="spselCheck" placeholder="Seleziona un elemento...">
					<input type="hidden" name="spselCheckinput">
					<div class="spsel-options">
						<?php for($i=0;$i<=20;$i++) { ?>
						<div class="spsel-option" data-value="<?php print($i);?>">
							<label>
								<input type="checkbox" value="<?php print($i);?>" name="spselCTAinputCB">
								<span class="spsel-option-el">Elemento <?php print($i);?> lorem ipsum dolor sit amet</span>
								<span class="spse-countdetail">(<?php print($i * 3 );?>)</span>
							</label>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 form-field-input">
				<label class="control-label">Versione "lista" con dettagli</label>
				<script type="text/javascript">

					/* Esempio inizializzazione */
					$(function(){
						// Inizializza la special-select tipo "default" (esempio di callback)
						$("#spselDetail").spSel(
							function(){console.log($("input[name=spselDetailInput]").val())}
						);
					});

				</script>
				<div class="spsel nosel" id="spselDetail"  placeholder="Seleziona...">
					<input type="hidden" name="spselDetailInput">
					<div class="spsel-options">
						<?php for($i=0;$i<=20;$i++) { ?>
						<div class="spsel-option" data-value="<?php print($i);?>">
							<a class="spsel-option-el">Elemento <?php print($i);?> lorem ipsum dolor sit amet<span class="only-detail"><br>Lorem <strong>ipsum</strong> dolor<br><strong>333.333,31</strong> EUR</span></a>
						</div>
						<?php } ?>
					</div>
				</div>

			</div>

		</div>
	</div>
	<div class="form-group">
		<div class="row">


			<div class="col-xs-12 col-sm-6 form-field-input">
				<label class="control-label">Versione "grafica" con due azioni a destra del testo</label>
				<script type="text/javascript">

                        /* Esempio inizializzazione */
                        $(function(){
                            // Inizializza la special-select tipo "default" (esempio di callback)
                            $("#spselCol").spSel(
                                function(){
                                    console.log($("input[name=spselCTAinput]").val())
                                }
                            );

                            $("#spselCol .btn-icon[data-function=edit]").click(function(event){
                                event.preventDefault();
                                alert("edit");
								event.stopPropagation();
                            });

                            $("#spselCol .btn-icon[data-function=delete]").click(function(event){
                               event.preventDefault();
                               alert("delete")
                               event.stopPropagation();
                            });

                        });

                    </script>
                    <div class="spsel spsel-hasconsole nosel" id="spselCol" placeholder="Seleziona...">
                        <input type="hidden" name="spselColinput" value="predefinite">
                        <div class="spsel-options">
                            <div class="spsel-option" data-value="predefinite">
                                <a class="spsel-option-el">Predefinite</a>
                            </div>
                            <div class="spsel-option" data-value="mercati">
                                <a class="spsel-option-el">Mercati e prezzi</a>
                                <div class="spsel-btn-console">
                                    <a class="btn-icon" data-list-name="Mercati e prezzi" data-function="edit"><i class="icon icon-edit_fill"></i></a>
                                    <a class="btn-icon" data-list-name="Mercati e prezzi" data-function="delete"><i class="icon icon-delete_table"></i></a>
                                </div>
                            </div>
                            <div class="spsel-option" data-value="vista2">
                                <a class="spsel-option-el">Vista 2</a>
                                <div class="spsel-btn-console">
                                    <a class="btn-icon" data-list-name="Vista 2" data-function="edit"><i class="icon icon-edit_fill"></i></a>
                                    <a class="btn-icon" data-list-name="Vista 2" data-function="delete"><i class="icon icon-delete_table"></i></a>
                                </div>
                            </div>
                            <div class="spsel-option spsel-custom" id="selColonne">
                                <a class="spsel-option-el">Scegli colonne</a>
                                <div class="spsel-btn-console">
                                    <i class="icon icon-row_expand"></i>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
                <!-- FINE SELECT MULTIFUNZIONE -->
			</div>

		</div>
	</div>
</div>
<?php if ($site==="webank") {
?>
<div class="form-group btnWrapper">
    <div class="btn-align-right">
        <a type="button" class="btn btn-primary" id="btnTest">Setta errori</a>
    </div>
    <br class="clear">
</div>
<?php
}
?>
