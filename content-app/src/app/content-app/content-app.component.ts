import { Component,OnInit, Input} from '@angular/core';
import { CarrelloService } from './pages/pmodello/carrello.service';

@Component({
  selector: 'content-app',
  templateUrl: './content-app.component.html',
  styleUrls: ['./content-app.component.css']
})

export class ContentAppComponent  implements OnInit {

  // Contenuto di default
  @Input() contenuto = "overview";

  constructor(public  carrelloService: CarrelloService) {}

  // Funzioni locali
  naviga = (cont:string) => {
    this.contenuto = cont;
  }

  setloading = (state?:boolean)=> {
    state = (typeof state!=="undefined" && state=== false)? false : true;
    this.loadingclass = (state)? "loading": "";
    return(state);
  }
  
  // Variabili "stato"
  loadingclass: string = "loading";

  // Inizializzazione
  ngOnInit(){

    this.naviga(this.contenuto);
    this.setloading(false);
    this.carrelloService.isCarrelloVisible;
 }
}
