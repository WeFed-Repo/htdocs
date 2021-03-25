import { Component,OnInit, Input} from '@angular/core';

@Component({
  selector: 'tabs',
  templateUrl: './tabs.component.html'
})
export class TabsComponent implements OnInit{
  @Input() tabLabels;
 
  constructor() {

  }
  ngOnInit(){
   console.log(this.tabLabels);
    
  }


}
