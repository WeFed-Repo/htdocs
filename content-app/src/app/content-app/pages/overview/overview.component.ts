import { Component,OnInit, Input} from '@angular/core';

@Component({
  selector: 'overview',
  templateUrl: './overview.component.html'
})


export class Overview  implements OnInit {

  // Parametri in input
  @Input() navto: any;

  constructor() {}

  // Inizializzazione
  ngOnInit(){

    console.log("overview");
     
  }
}
