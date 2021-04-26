//servizio per gestire il carrello
import { Injectable} from '@angular/core';
import { HttpClient} from '@angular/common/http';
// Variabili e funzioni globali
import { GlobalVars } from "../../core/globalVars.js";


//servizio per ora con dati statici da costruire a seguito delle chiamate
//valori recuperati da collaudo
@Injectable({
  providedIn: 'root'
})
export class CarrelloService {
  constructor(private httpClient: HttpClient) {}
  //componente carrello
  callCarrello(cart) {
    //chiamata al carrello
    console.log(cart)
    //this.isCarrelloVisible = true
  }
  public isCarrelloVisible: boolean= false;
}

