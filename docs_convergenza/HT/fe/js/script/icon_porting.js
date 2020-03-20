/* Porting icone Wb in You */
var iconPort = {
	"icon-info": "icon-user",
},

iconReplaceWB = function(){
	$.each(iconPort,function(k,v){
		$(".icon."+ k).removeClass(k).addClass(v);
	});	

};

$(iconReplaceWB);

