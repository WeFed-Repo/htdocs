import { Component,Input,OnInit, Output, EventEmitter} from '@angular/core';



@Component({
  selector: '<simple-table>',
  templateUrl: './simpleTable.component.html'
})
//finti rowspan
export class SimpleTableComponent  implements OnInit {
  @Input() headingsCol:Array<any>;
  @Input() rowData:Array<object>;
  @Input() cellClassName:Array<any>;
  @Input() colsTemplate:Array<any>;
  @Input() colsThTemplate;
  columnssref;
  
  isObject(val): boolean { return typeof val === 'object'; }
  
  ngOnInit(){
    this.columnssref = Object.keys(this.rowData[0]);
  }
}