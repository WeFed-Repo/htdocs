<script type="text/javascript" src="/wscmn/js/ret/priv_fes.js"></script>
<h1>Alert</h1>
<p>
	Lorem ipsum dolor sit amet,:
</p>
<ul class="lista">
	<li class="lista">Lorem ipsum dolor sit amet, <strong>consectetuer</strong></li>
	<li class="lista">Lorem ipsum , consectetuer</li>
	<li class="lista">Lorem ipsum dolor sit amet, consectetuer</li>
</ul>
<!--messaggio-->
	<div class="boxesito positivo">
		<div class="middle"><span class="imgCont"></span>
			<div class="text">
				<div class="row-fluid">
					<div class="span10">
						<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
					et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
						<ul class="listafrec">
							<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--fine messaggio-->

	
<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
<script type="text/javascript">	
	$(function () {
				$("#datepicker").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
					
				});
				$("#datepicker").mask("99/99/9999");
			});
	
</script>
<div class="fondiwatchlist">
	<div class="tithelp">
		<div class="helpleft">Titolo di form</div>
		<br class="clear">
	</div>

	<div class="borderFormRounded">
		<div class="formGeneric">
			<form>
				<div class="row-fluid">
					<div class="span6">
						<div class="row-fluid margBottomMedium">
							<div class="span8">
								<label class="nomefield">Lorem watchlist</label>
								<input type="text" id="descrizione" name="descrizione" autocomplete="off">
								<script type="text/javascript">
								$(window).on("load", function(){
									$("#descrizione").magicSearch(fesAutocompleteUrl, function(){$("#datiFondo").css({ display:'block'})}, "noButton")
									}
								)
								</script>
							</div>
						</div>
						<div class="row-fluid noMargbottom">
							<label class="nomefield">Lorem ipsum dolor sit</label>
							<div class="row-fluid noMargbottom">
								<div class="span4" id="">
									<input type="text" class="withIco" id="datepicker" placeholder="gg/mm/aaaa" value="22/11/2013">
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="borderFormRounded" id="datiFondo" style="display:none">
							<div class="formGeneric">
								<div class="row-fluid margBottomMedium">
									<div class="span12">
										<label class="nomefield">Lorem watchlist nome fondo che va su una riga...</label>
									</div>
								</div>
								<div class="row-fluid margBottomMedium">
									<div class="span6">
										<label class="nomefield">Lorem watchlist</label>
										<span class="output">Lorem ipsum dolor</span>
									</div>
									<div class="span6">
										<label class="nomefield">Lorem ipsum dolor sit</label>
										<span class="output">Lorem ipsum dolor sit</span>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<label class="nomefield">Lorem watchlist</label>
										<span class="output">Lorem ipsum dolor</span>
									</div>
									<div class="span6">
										<label class="nomefield">Lorem ipsum dolor sit</label>
										<span class="output">Lorem ipsum dolor sit</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<br class="clear"><br>
	
	<div class="tithelp">
		<div class="helpleft">Titolo di form</div>
		<br class="clear">
	</div>
	<div class="borderFormRounded">
		<div class="formGeneric">
			<form>
				<div class="row-fluid">
					<div class="span12">
						<label class="nomefield"><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet, consectetur</label><br>
						<div class="row-fluid margBottomMedium">
							<div class="span2">
								<span class="output">soglia minima <img src="/wscmn/img/ret/bl_minuguale.gif"></span>
							</div>
							<div class="span3">
								<input type="text">
							</div>
							<div class="span1">
								&nbsp;
							</div>
							<div class="span2">
								<span class="output">soglia massima <img src="/wscmn/img/ret/bl_maguguale.gif"></span>
							</div>
							<div class="span3">
								<input type="text">
							</div>
							<div class="span1">
								&nbsp;
							</div>
						</div>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span12">
						<label class="nomefield"><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet, consectetur</label><br>
						<div class="row-fluid margBottomMedium">
							<div class="span2">
								<span class="output">soglia minima <img src="/wscmn/img/ret/bl_minuguale.gif"></span>
							</div>
							<div class="span3">
								<input type="text">
							</div>
							<div class="span1">
								&nbsp;
							</div>
							<div class="span2">
								<span class="output">soglia massima <img src="/wscmn/img/ret/bl_maguguale.gif"></span>
							</div>
							<div class="span3">
								<input type="text">
							</div>
							<div class="span1">
								&nbsp;
							</div>
						</div>
					</div>
				</div>
				
				<div class="row-fluid">
					<div class="span12">
						<label class="nomefield"><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet, consectetur</label><br>
						<div class="row-fluid margBottomMedium">
							<div class="span2">
								<span class="output">soglia minima <img src="/wscmn/img/ret/bl_minuguale.gif"></span>
							</div>
							<div class="span3">
								<input type="text">
							</div>
							<div class="span1">
								&nbsp;
							</div>
							<div class="span2">
								<span class="output">soglia massima <img src="/wscmn/img/ret/bl_maguguale.gif"></span>
							</div>
							<div class="span3">
								<input type="text">
							</div>
							<div class="span1">
								&nbsp;
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	
	
	
	
	<br class="clear"><br>
	<div class="fooform">
		<div class="fooformleft">
			<div><a href="#1" class="btnformleft" title="lorem ipsum"><img src="/img/ret/btn_left_bi.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_bi.gif" alt="" /></a></div>	
		</div>
		<div class="fooformright">
			<div><a href="#1" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a></div>
		<br class="clear" />
		</div>	
		<br class="clear" />
	</div>
</div>


