// Formati per datepicker
	$.datepicker.setDefaults({
		showOn: "both",
		dayNames: ["Domenica","Lunedi'","Martedi'","Mercoledi'","Giovedi'","Venerdi'","Sabato"],
		dayNamesMin: ["D", "L", "M", "M", "G", "V", "S"],
		monthNames:  ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
		monthNamesShort:  ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic"],
		dateFormat: "dd/mm/yy",
		currentText: "Oggi",
		buttonText: "",
		beforeShowDay: $.datepicker.noWeekends
	});


	/* Funzioni di formattazione tabelle */
	var tableCellValue = function(value,row) {
		var v = parseFloat(value)
		return "<span class='" +((v<0)? "negativo" : "")+ "'>"+ value +"</span>";
	}

	var largeField = function(obj) {
			return ("<div class='largeFieldText'>"+ obj + "</div>");
	}

	/* MobileDataBlock - Blocco dati per mobile */
	var mobileDataBlock = function(obj) {
		var mbDb = $("<div>").addClass("mobile-data-block")
		$.each(obj,function(i,field){
			var fieldHtml = $("<div>").addClass((field.class) ? field.class : "").append(
				$("<label>").addClass("control-label").html(field["label"]),
				$("<span>").addClass("output").html(field["output"])
				);
			var fw = $("<div>").addClass("row").append($("<div>").addClass("col-12").append(fieldHtml));
			mbDb.append(fw);
		})
		return mbDb;
	}

	/* Formattazioni */
	var getValueString = function(value) {
		var valString = "";
		/*if (value) {
			//valStrings = value.toFixed(2).toString().split(".");
			valStrings = value.toString().split(".");
			valString = valStrings[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "," + valStrings[1];
		}*/
		valString = value;
		return valString;
	}

	var formatLink = function(value,row) {
		return "<a href='"+ row.link + "'>"+ value +"</a>";
	}
