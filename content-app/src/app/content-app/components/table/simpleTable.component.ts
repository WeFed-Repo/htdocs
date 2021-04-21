import { Component,Input,OnInit } from '@angular/core';
declare function initTooltip();


@Component({
  selector: '<simple-table>',
  templateUrl: './simpleTable.component.html'
})
//finti rowspan
export class SimpleTableComponent  implements OnInit {
  @Input() headingsCol:Array<any>;
  @Input() rowData:Array<object>;
  @Input() cellClassName:Array<any>;
  @Input() rowClassName:Array<any>;
  @Input() colsTemplate:Array<any>;
  @Input() colsThTemplate;
  columnssref=[];
  classTdSimpleTable = [];
  classTrSimpleTable = [];
  headers = []
  
  isObject(val): boolean { 
    return typeof val === 'object'; 
  }
  
  ngOnInit(){
    if (this.rowData[0]) {
        this.columnssref = Object.keys(this.rowData[0]);
        this.columnssref.forEach((element,index) => {
          this.headers.push(element);
        });
     }
    if(this.cellClassName) {
      this.cellClassName.forEach(element => {
        this.classTdSimpleTable.push(element);
      });
    }
    
  }
  
  ngOnChanges() {
   if(this.rowClassName) {
      this.classTrSimpleTable = [];
       this.rowClassName.forEach(element => {
        this.classTrSimpleTable.push(element);
      });
    }
  }
  ngAfterViewChecked() {
    initTooltip();
  };
}