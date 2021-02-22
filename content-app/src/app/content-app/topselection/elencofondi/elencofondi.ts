import { Component,OnInit, Input} from '@angular/core';

@Component({
  selector: 'elenco-fondi',
  templateUrl: './elencofondi.html'
})

export class ElencoFondi implements OnInit {

  constructor() {}

  // Input
  @Input() data: any;

  // Inizializzazione
  ngOnInit(){
    
  }
}
