var parameters = new Array();

/*
	<FUNZIONE label="initializeCGILibrary">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione.......</COMMENTO>
	</FUNZIONE>
*/

function initializeCGILibrary()
{
    var query = document.location.search.substr(1);
    var elements = query.split("&");
    for (var i=0; i<elements.length; i++)
    {
        var data = elements[i].split("=");
        if (data.length == 1)
        {
            parameters[data[0]] = "";
        }
        else
        {
            parameters[data[0]] = data[1];
        }
    }
}