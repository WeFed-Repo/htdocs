<?php /* 

<!-- 
  PLUGIN PER LA VISUALIZZAZIONE TREE-VIEW (importare solo in pagine che necessitano di un componente treeview)
  REF: https://www.jqueryscript.net/other/Collapsible-Tree-View-Checkboxes-jQuery-hummingbird.html 
-->
<link href="https://www.jqueryscript.net/demo/Collapsible-Tree-View-Checkboxes-jQuery-hummingbird/hummingbird-treeview-1.3.css" rel="stylesheet">
<script src="https://www.jqueryscript.net/demo/Collapsible-Tree-View-Checkboxes-jQuery-hummingbird/hummingbird-treeview-1.3.js"></script>

<ul id="treeview">
  <li> <i class="fa fa-plus"></i>
    <label>
      <input id="xnode-0" data-id="custom-0" type="checkbox" />
      node-0 </label>
    <ul>
      <li> <i class="fa fa-plus"></i>
        <label>
          <input  id="xnode-0-1" data-id="custom-0-1" type="checkbox" />
          node-0-1 </label>
        <ul>
          <li>
            <label>
              <input class="hummingbirdNoParent" id="xnode-0-1-1" data-id="custom-0-1-1" type="checkbox" />
              node-0-1-1 </label>
          </li>
          <li>
            <label>
              <input class="hummingbirdNoParent" id="xnode-0-1-2" data-id="custom-0-1-2" type="checkbox" />
              node-0-1-2 </label>
          </li>
        </ul>
      </li>
      <li> <i class="fa fa-plus"></i>
        <label>
          <input  id="xnode-0-2" data-id="custom-0-2" type="checkbox" />
          node-0-2 </label>
        <ul>
          <li>
            <label>
              <input class="hummingbirdNoParent" id="xnode-0-2-1" data-id="custom-0-2-1" type="checkbox" />
              node-0-2-1 </label>
          </li>
          <li>
            <label>
              <input class="hummingbirdNoParent" id="xnode-0-2-2" data-id="custom-0-2-2" type="checkbox" />
              node-0-2-2 </label>
          </li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<script>
$("#treeview").hummingbird();
</script>

*/ ?>