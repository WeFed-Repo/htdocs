import { Component,OnInit, Input} from '@angular/core';

@Component({
  selector: 'pmodello',
  templateUrl: './pmodello.component.html'
})

export class PModello  implements OnInit {

  constructor() {}

  // Inizializzazione
  ngOnInit(){

    console.log("pmodello");
    
  }
}
