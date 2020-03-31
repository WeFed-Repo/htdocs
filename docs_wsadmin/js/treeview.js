/* Compatta/allarga i nodi */
function treeviewSwitchNode(nodeclick)
{
	var assUl = nodeclick.closest('li').find('ul:first');
	if(assUl)
	{
		assLi = nodeclick.closest('li').find('ul:first >li');
		var x = 0;
		if ($(assLi).eq(0).is(':hidden'))
		{
			if(assLi.closest('ul').is(assUl)) $(assLi).fadeIn(200);
		}
		else
		{
		
			if(assLi.closest('ul').is(assUl)) $(assLi).fadeOut(200);
			
		}
		
	}
}


/* Inizializza il contenitore */
function treeviewRenderNode(jnode,nodeclass)
{
  var nodeObj = document.createElement("li");
  
  nodeObj = $(nodeObj);
  nodeObj.attr('class',nodeclass);
  nodeObj.css('display','none');
  
  var nodeA = document.createElement("a");
  nodeA = $(nodeA);
  nodeA.html(jnode.name);
  
  nodeA.click(function() {treeviewSwitchNode($(this))})
  /* Associa il tooltip se presente */
  if (jnode.groups || jnode.users)
	{
		/* Assembla il tooltip */
		var TT = ""; 
		if (jnode.groups)
		{
			TT = TT + "<span>Gruppi</span><ul><li>" + jnode.groups.split("|").join("</li><li>") + "</li></ul>";
		}
		
		if (jnode.users)
		{
			TT = TT + "<span>Utenti</span><ul><li>" + jnode.users.split("|").join("</li><li>") + "</li></ul>";
		}
		TT = TT + "<br class=\"clear\">";
		nodeA.toolTipText = TT;
		nodeA.mouseover(function(){showTooltip(this, TT);})
        nodeA.mouseout(function(){hideTooltip()})
	}

  /* fine Associa il tooltip se presente */
  nodeA.appendTo(nodeObj);
  if (jnode.children.length>0)
	{
		var subNodeUl = document.createElement("ul");
		subNodeUl = $(subNodeUl);
		subNodeUl.appendTo(nodeObj);
		var x = 0;
		for(x=0; x<jnode.children.length; x++)
		{
			nodeclass="";
			if(x == 0) nodeclass = "first";
			if(x == (jnode.children.length-1)) nodeclass = "last";
			if(x == 0 && x == (jnode.children.length-1)) nodeclass = "unico";
			$(treeviewRenderNode(jnode.children[x], nodeclass)).appendTo(subNodeUl);
		}
		
	}
	else
	{
		nodeObj.addClass('noson');
	}
		/* Se il gruppo &egrave; attivo fa vedere una i nodi in verde*/
		if (jnode.activegroup) nodeA.attr('class','activegroup');
		return nodeObj;
		

}

/* Espandi tutti */
function treeviewExpandall()
{
	var allNodes = treeContainer.find("li");
	$(allNodes).each(function(index){
	if ($(this).is(':hidden'))$(this).fadeIn(200);
	})
}


/* Contrai tutti */
function treeviewCollapseall()
{
	var allNodes = treeContainer.find("li");
	allNodes = allNodes.get().reverse();
	$(allNodes).each(function(index){
	if ($(this).not(':hidden') && !($(this).closest('ul').hasClass('treeView')))
	{ 
		
		$(this).fadeOut(200);
		
	}
	})
	
}
function customTreeviewStart(){
   treeContainer = $('#' + idTreeContainer);
   jqAJAXCall('get', 'json', treeXml, function(data)
   {
	 
	 if(data.error!='')
	 {
		$('#idMsg').html(data.error);
		$('#idBoxError').css('display', 'block');
	 }
	 if(data){	
		$('#tdUtenti').html(data.utenti);
		$('#tdGruppi').html(data.gruppi);
		$('#idBoxDatiRicerca').css('display','block');
		var jsonData = data.data;
		var treeMain = document.createElement("ul");
		$(treeMain).attr('class','treeView');
		$(treeviewRenderNode(jsonData,"")).appendTo(treeMain); 
		$(treeMain).appendTo(treeContainer);
		var nodeSelector = $(nodeSelector);
		nodeSelector = "#" + idTreeContainer +">ul>li";
		for (y=0; y<treeLevels; y ++){
		    liNodes = $(treeContainer.parent()).find(nodeSelector);
			$(liNodes).fadeIn(200);
            nodeSelector = nodeSelector +">ul>li";			
		}	
	 }
	 
	 
	
	}
   
	   
   );
	
} 
/* Collega onload */
function treeviewInit (idTree, fileXml, treeLevelToShow)
{	
	idTreeContainer = idTree; 
	treeXml = fileXml; 
	treeLevels = treeLevelToShow;
	$(document).ready(function() {customTreeviewStart()});
}
