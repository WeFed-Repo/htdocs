<style>
	.has-feedback input[type="radio"] {
    	margin-top:0;
	}
	.informativa label.has-feedback { width:100%}
</style>

<p><strong>CASO CHECKBOX</strong></p>
<section>
	<div class="form-group informativa">
		<div class="row">
			<div class="form-field-input col-xs-12 col-sm-12">
				<label class="has-feedback">
					<span data-toggle="tooltip" class="tooltip-masked" data-title="Per procedere, apri e leggi tutta la documentazione"></span>
					<input disabled type="checkbox" name="" id="" class="flLeft">
					<span class="flLeft text-checkbox">Dichiaro di aver preso visione del <a href="#" target="_blank" class="link-text text-underline doc">documento uno</a>, <a href="#" target="_blank" class="link-text text-underline doc">documento due</a>, <a href="#" target="_blank" class="link-text text-underline doc">documento tre</a></span>
				</label>
			</div>
		</div> 
	</div>
</section>

<hr>
<p><strong>CASO RADIO</strong></p>
<section>
	<div class="form-group informativa">
		<p>Dichiaro di aver preso visione del <a href="#" target="_blank" class="link-text text-underline doc">documento uno</a>, <a href="#" target="_blank" class="link-text text-underline doc">documento due</a>, <a href="#" target="_blank" class="link-text text-underline doc">documento tre</a></p>
		<div class="row">
			<div class="form-field-input col-xs-4">
				<label class="has-feedback" for="radioInf">
				<span data-toggle="tooltip" class="tooltip-masked" data-title="Per procedere, apri e leggi tutta la documentazione"></span>
				<input type="radio" name="radioInf"  disabled>
				<span class="flLef">lorem ipsum</span>
				</label>
			</div>
			<div class="form-field-input col-xs-4">
				<label class="has-feedback" for="radioInf">
				<span data-toggle="tooltip" class="tooltip-masked" data-title="Per procedere, apri e leggi tutta la documentazione"></span>
				<input type="radio" name="radioInf"  disabled>
				<span class="flLef">lorem ipsum</span>
				</label>
			</div>
		</div>
	</div>
</section>
<hr>
<p><strong>CASO TEXT</strong></p>
<section>
	<div class="form-group informativa">
	<p>Dichiaro di aver preso visione del <a href="#" target="_blank" class="link-text text-underline doc">documento uno</a>, <a href="#" target="_blank" class="link-text text-underline doc">documento due</a>, <a href="#" target="_blank" class="link-text text-underline doc">documento tre</a></p>
		<div class="row">
			<div class="col-xs-12 col-sm-4 form-field-input has-feedback">
				<span data-toggle="tooltip" class="tooltip-masked input-text" data-title="Per procedere, apri e leggi tutta la documentazione" data-original-title="" title=""></span>
				<input type="text" disabled="" id="" value="" name="" autocomplete="off" class="form-control">
			</div>
		</div>
	</div>
</section>
<script>
bloccoDoc = $(".informativa");
bloccoDoc.each(function(index){
	var openedLink = 0,
	el = $(this);
	el.find("a.doc:not(.opened)").on("click", function(){
		el.addClass("opened");
		openedLink++
		if(openedLink === el.find("a.doc").length)
		{
			el.find(".tooltip-masked").remove();
			el.find("input").attr("disabled", false);
		}
})
})
</script> 