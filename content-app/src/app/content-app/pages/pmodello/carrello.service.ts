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
  callbackprocess = true;

  callCarrello(cart) {
    console.log(cart)
    //varie chiamate al carrello
    
    /*callbackprocess = true;
    top.setCarrello(carr, callbackSet);
    callbacktimeout = window.setTimeout(waitForCallback, 30000);*/
    
    
   
    //this.isCarrelloVisible = true
  }
  public isCarrelloVisible: boolean= false;
}

