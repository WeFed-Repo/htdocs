<!--i link dei tab devono corrisppndere all'attributo  aria-labelledby dei contenitori del testo (esempio: viaggi)-->
<div class="section outerWrapperTab no-backgr">
	<div class="navContSecondLev" id="secondTab">
		<div class="innerWrapperTab content-tab">
			<ul class="tabWrapper">
				<li class=""><a href="#viaggi">Viaggi</a></li>
				<li class=""><a href="#vita_privata">Vita privata</a></li>
				<li class=""><a href="#circolazione_stradale">Circolazione stradale</a></li>
			</ul>
		</div>
		<div class="separator"></div>
		<div class="panel-group panel-fill" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-collapse collapse" role="tabpanel" aria-labelledby="viaggi">
					<div class="panel-body">
						<div class="tab-wrap">
							<h4>Le guide viaggi</h4>
							<p>Tutte le informazioni che devi avere prima di intraprendere il tuo viaggio.<p>
							<div class="box-link">
								<div class="row">
									<div class="col-xs-6 col-sm-10"><p>AUSTRIA<p></div>
									<div class="col-xs-6 col-sm-2 alignRight"><a target="blank" href="/HT/doc/guide_legali/Guida_viaggi_VERA_Austria.pdf" class="btn btn-link" title="Guida viaggi VERA Austria"><span>Apri il PDF</span><i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a></div>
								</div>
							</div>
							<div class="box-link">
								<div class="row">
									<div class="col-xs-6 col-sm-10"><p>BALI<p></div>
									<div class="col-xs-6 col-sm-2 alignRight"><a target="blank" href="/HT/doc/guide_legali/Guida_viaggi_VERA_Bali.pdf" class="btn btn-link" title="Guida viaggi VERA Bali"><span>Apri il PDF</span><i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div  class="panel-collapse collapse" role="tabpanel" aria-labelledby="vita_privata">
					<div class="panel-body">
						<!--ZONA TESTO CONTENUTO PRIMO TAB -->
					    <div class="tab-wrap">
							<h4>Orientati meglio e tutela i tuoi diritti nella vita di tutti i giorni</h4>
							<p>Il rapporto di lavoro domestico, la responsabilit&agrave; civile per i danni cagionati da animali, la legittima difesa, ecc.<p>
							<div class="box-link">
								<div class="row">
									<div class="col-xs-6 col-sm-10"><p>Il nuovo concetto di famiglia, tra interventi normativi e giurisprudenziali<p></div>
									<div class="col-xs-6 col-sm-2 alignRight"><a target="blank" href="" class="btn btn-link" title=""><span>Apri il PDF</span><i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a></div>
								</div>
							</div>
							<div class="box-link">
								<div class="row">
									<div class="col-xs-6 col-sm-10"><p>Figli minori a casa da soli. Quando è reato<p></div>
									<div class="col-xs-6 col-sm-2 alignRight"><a target="blank" href="" class="btn btn-link" title=""><span>Apri il PDF</span><i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a></div>
								</div>
							</div>
						</div>
						<!--FINE ZONA TESTO CONTENUTO PRIMO TAB -->
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-collapse collapse" role="tabpanel" aria-labelledby="circolazione_stradal">
					<div class="panel-body">
					<div class="tab-wrap">
							<h4>Le normative attualmente in vigore in Italia</h4>
							<p>Le regole principali, i casi di ritiro, sospensione o revoca della patente, come funziona la patente a punti e molto altro.<p>
							<div class="box-link">
								<div class="row">
									<div class="col-xs-6 col-sm-10"><p>Guida alle violazioni e sanzioni del codice della strada<p></div>
									<div class="col-xs-6 col-sm-2 alignRight"><a target="blank" href="" class="btn btn-link"  title=""><span>Apri il PDF</span><i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a></div>
								</div>
							</div>
							<div class="box-link">
								<div class="row">
									<div class="col-xs-6 col-sm-10"><p>Guida per ricorso contro una multa<p></div>
									<div class="col-xs-6 col-sm-2 alignRight"><a target="blank" href="" class="btn btn-link" title=""><span>Apri il PDF</span><i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
//inizializzazione dei tab-accordion
//TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
//possono coesistere più gruppo di tab/accordion in pagina
//parametri: id contenitore e incice tab ch edeve essere aperto al load

$(function(){
	resizeTab('secondTab',0);
});


</script>

