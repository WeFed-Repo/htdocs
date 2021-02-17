import { Component,OnInit, Input} from '@angular/core';

@Component({
  selector: 'content-app',
  templateUrl: './content-app.component.html',
  styleUrls: ['./content-app.component.css']
})

export class ContentAppComponent  implements OnInit {

  // Contenuto di default
  @Input() contenuto = "overview";

  constructor() {}

  // Funzioni locali
  naviga = (cont:string) => {
    this.setloading();
    this.contenuto = cont;
    // Azione
    this.setloading(false);
  }

  setloading = (state?:boolean)=> {
    state = (typeof state!=="undefined" && state=== false)? false : true;
    this.loadingclass = (state)? "loading": "";
  }
  
  // Variabili "stato"
  loadingclass: string = "loading";

  // Inizializzazione
  ngOnInit(){

    this.naviga(this.contenuto);
    
  }
}
