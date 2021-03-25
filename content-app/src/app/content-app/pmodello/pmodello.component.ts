import { Component,OnInit, Input} from '@angular/core';

@Component({
  selector: 'pmodello',
  templateUrl: './pmodello.component.html'
})

export class PModello  implements OnInit {
  tabLabels: string[] = ['Difensivo','Prudente','Moderato']; //label dei tab da portere in un 'istanza
  
  constructor() {}

  // Inizializzazione
  ngOnInit(){
   console.log("pmodello");
  
  }
}
