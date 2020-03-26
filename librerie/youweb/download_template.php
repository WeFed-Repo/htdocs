var code_Div = $("<div>").css({"width":"100%","z-index":"999999","display":"block","padding":"20px"});
var code_Tarea = $("<textarea>").css({"height":"600px","margin-bottom":"20px","width":"100%"});
var code_input = $("<input>").attr("type","text").css({"margin-bottom":"20px","width":"85%","float":"left"});
var code_btn = $("<button>").attr("type","text").css({"margin-bottom":"20px","width":"10%","float":"right"}).html("Raccogli codice");

code_btn.click(function(){
$.ajax({
		url: code_input.val(),
		datatype: "html",
		success:function(data) {
			var wrappy = $(data).find("#content2Col");
			if (!wrappy.length) {
				wrappy = $(data).find("#mainContent");

			}

			code_Tarea.val(wrappy[0].innerHTML)
		}
	});

});
code_Div.append(code_input, code_btn,code_Tarea)
$("body").empty().prepend(code_Div);
