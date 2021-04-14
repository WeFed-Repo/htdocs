import { Component,Input,OnInit, Output, EventEmitter} from '@angular/core';
import { isArray } from 'util';


@Component({
  selector: '<simple-table>',
  templateUrl: './simpleTable.component.html'
})
//finti rowspan
export class SimpleTableComponent  implements OnInit {
  @Input() headingsCol:Array<object>;
  @Input() rowData:Array<object>;
  @Input() colsTemplate;
  @Input() colsThTemplate;
  
  
  
  isObject(val): boolean { return typeof val === 'object'; }
  
  isArray(val):  boolean { return Array.isArray(val) }
   constructor() { 
  }
  ngOnInit(){
   
    console.log(this.colsThTemplate);
  }
}