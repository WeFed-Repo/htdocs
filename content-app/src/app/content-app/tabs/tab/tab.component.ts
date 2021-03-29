import { Component,OnInit,Input} from '@angular/core';

@Component({
  selector: 'tab',
  templateUrl: './tab.component.html'
})
export class TabComponent implements OnInit{
  @Input() tabTitle: string;
  @Input() active=false;
 constructor() {

  }
  ngOnInit(){
  }
}
