import { Component,OnInit, Input} from '@angular/core';

@Component({
  selector: 'top-selection',
  templateUrl: './topselection.component.html'
})

export class TopSelection  implements OnInit {

  constructor() {}

  // Inizializzazione
  ngOnInit(){

    console.log("top selection");
    
  }
}
