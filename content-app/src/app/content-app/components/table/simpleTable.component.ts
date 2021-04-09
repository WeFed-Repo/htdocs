import { Component,Input,OnInit, Output, EventEmitter} from '@angular/core';


@Component({
  selector: '<simple-table>',
  templateUrl: './simpleTable.component.html'
})
//finti rowspan
export class SimpleTableComponent  implements OnInit {
  @Input() dateTable;
  @Input() TableColumnsLabel;
  columns;
  columsid;
  
  
  isObject(val): boolean { return typeof val === 'object'; }
 
   constructor() { 
  }
  ngOnInit(){
    this.columns = Object.keys(this.dateTable[0]);
    this.columsid = this.columns;
    console.log(this.dateTable);
   
  }
}