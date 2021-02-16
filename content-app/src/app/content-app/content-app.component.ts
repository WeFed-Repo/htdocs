import { Component,OnInit, Input, HostBinding} from '@angular/core';

@Component({
  selector: 'content-app',
  templateUrl: './content-app.component.html',
  styleUrls: ['./content-app.component.css']
})

export class ContentAppComponent  implements OnInit {

  @Input() contenuto = "default";

  constructor() {}
  
  // Variabili "stato"
  loadingclass: string = "loading";

  // Inizializzazione
  ngOnInit(){

    let tthis  = this;

    // Test caricamento
    setTimeout(
      function(){
        tthis.loadingclass = "";
      },1000
    )
   
    

  }

}
