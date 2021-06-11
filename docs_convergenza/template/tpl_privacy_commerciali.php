<!-- Sezione introduttiva -->
<section>
	<div class="titolo"><h1><span>Gestione della privacy</span></h1></div>
    <p>
    In questa pagina puoi visualizzare e modificare i <strong>consensi espressi in materia di privacy</strong> e scegliere <strong>dove ricevere le eventuali comunicazioni commerciali</strong> (queste impostazioni non riguardano le comunicazioni operative che continuerai a ricevere come di consuetudine).<br>
    <br>
    Trovi tutte le informazioni utili sulla protezione dei Dati Personali nella <a href="#">sezione Privacy del sito istituzionale</a>.
    </p>
</section>
<!-- Fine sezione introduttiva -->

<!-- Tab di selezione dei contenuti -->
<div class="section outerWrapperTab no-backgr">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li class="on"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_privacy_commerciali.php&html=vr"  title="" role="button">Comunicazioni commerciali</a></li>
					<li><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_privacy_consensi.php&html=vr" role="button">Consensi privacy</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>
<!-- Fine tab di selezione dei contenuti -->

<!-- Info box warning -->
<div class="infobox infobox-warning">
    <a class="infobox-close" onclick="$(this).parents('.infobox').hide();"><i class="icon icon-close"></i></a>
    <h3>Attenzione</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit <a href="#">amet consectetur adipiscing</a> elit summa cum laude.</p>
 </div>
<!-- Fine info box warning -->

<!-- Introduzione -->
<h3 class="titleSection titleForm">Dove ricevere le comunicazioni commerciali</h3>
<p>Di seguito puoi scegliere dove ricevere le eventuali comunicazioni commerciali derivanti dai consensi privacy che hai espresso.</p>
<!-- Fine introduzione -->
<!-- Form gestione consensi -->
<script type="text/javascript">
    // Emulazione dei comportamenti della pagina
    $(function(){
        
        // Pulsante modifica
        $("#modifica").click(function(){
            $(this).hide();
            $("#salva").show();
            $("#form_configurazione").toggleClass("mode-input");
        });

        // Pulsante salva modifiche
        $("#salva").click(function(){
            $(this).hide();
            $("#modifica").show();
            $("#form_configurazione").toggleClass("mode-input");
        });

    });
</script>
<!--- Form -->
<div class="indented">
    <div class="list-icon-wrapper not-inline more-spaced" id="form_configurazione">
        <?php foreach(["SMS","E-mail","Contact center", "Paolo l'assistente virtuale","Notifiche app","Sportello ATM"] as $input) { ?>
        <div class="text-with-icon">
            <div class="mode-output"><span class="image-icon <?php print ( $input === "E-mail"? "stato-neutro":"stato-ok");?>"></span><span class="text"><?php print $input; ?></span><?php if ($input === "SMS") { ?><i class="icon icon-alert_caution icon-inline"></i><?php } ?></div>
            <div class="mode-input"><input type="checkbox" class="twi-checkbox" value="<?php print $input; ?>" <?php print ( $input != "E-mail"? "checked":"");?>><span class="text"><?php print $input; ?></span></div>
        </div>
        <?php } ?>
    </div>
</div>
<!--- fine form -->
<!-- Fine form gestione consensi -->

<!-- Conclusione -->
<p>Ti informiamo che, una volta effettuata una modifica, potranno essere necessarie fino a 24 ore perch&egrave; questa diventi effettiva.</p>
<!-- Fine conclusione -->
<!-- Pulsantiera -->
<section>
  <div class="form-group btnWrapper clearfix">
      <div class="btn-align-right">
          <div>
            <a type="button" class="btn btn-primary" id="modifica" title="Modifica">Modifica</a>
            <a type="button" class="btn btn-primary" id="salva" title="Salva" style="display:none">Salva</a>
          </div>
      </div>
  </div>
</section>

<!-- Fine pulsantiera -->