import { Component,Input,OnInit, Output, EventEmitter} from '@angular/core';


@Component({
  selector: 'box-link',
  templateUrl: './boxLink.component.html'
})

export class BoxLinkComponent  implements OnInit {
   constructor() { }
  @Input() titleBox;
  @Input() textBox;
  @Input() linkBox;
  @Input() gotoBox;
  @Input() backgroundBox;
  
  
  
  // Inizializzazione

  ngOnInit(){
   }
}