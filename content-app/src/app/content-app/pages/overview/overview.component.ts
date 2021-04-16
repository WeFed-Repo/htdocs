import { Component,OnInit, Input} from '@angular/core';

@Component({
  selector: 'overview',
  templateUrl: './overview.component.html'
})


export class Overview  implements OnInit {

  // Parametri in input
  @Input() navto: any;
  @Input() setloading: any;

  constructor() {}

  // Inizializzazione
  ngOnInit(){
    this.setloading();
    console.log("overview");
  }

  // Fase post inizializzazione
  ngAfterViewInit(){
    this.setloading(false);
  }

}
