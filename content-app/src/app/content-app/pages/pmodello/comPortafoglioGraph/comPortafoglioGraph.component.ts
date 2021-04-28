import { Component,OnInit, Input} from '@angular/core';


@Component({
  selector: 'comPortafoglioGraph',
  templateUrl: 'comPortafoglioGraph.component.html',
 
})

export class comPortafoglioGraph  implements OnInit {
  @Input() textIntro;
  @Input() DataFromService;
  
  
  constructor() { }
// Inizializzazione
  ngOnInit(){
  }
}
