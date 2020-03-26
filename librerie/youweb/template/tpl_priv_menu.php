<script type="text/javascript">
$(function(){

	ele = $("#elenco");

	$.each($("#topMain>li"),function(i,v){

		var base = $(v);
		var ul = $("<ul>");
		$.each(base.find("ul li"),function(ind,val){
			var liaor = $(val).find("a");
			var liaphp = (typeof liaor.html() == "undefined") ? "" : liaor.html().toLowerCase().replace(" ","_");
			var lia = $("<a>").append(liaor.html()).attr({"data-original-link":liaor.attr("href"),"href":"/strutt_priv.php?pag=" + liaphp})
			var getOrLink = $("<span>").addClass("link getor").html("apri youweb");
			ul.append($("<li>").append(lia,getOrLink));
		});
		ele.append($("<li>").append(
			$("<strong>").append(base.find(">a>strong").html()),
			ul
		))
	});

});
</script>


<ul id="elenco">
</ul>