import { Component,OnInit, Input} from '@angular/core';
// Client Http
import { HttpClient } from '@angular/common/http';
import {ElencoFondi} from './elencofondi/elencofondi';

@Component({
  selector: 'top-selection',
  templateUrl: './topselection.component.html'
})

export class TopSelection  implements OnInit {

  // Variabili di configurazione
  tsUrl = "/assets/json/top_selection.json";

  constructor(private httpClient: HttpClient) {}

  // Input
  @Input() setloading: any;

  // Lettura dei dati
  updateData(){
    this.setloading();
    this.httpClient.get(this.tsUrl).subscribe((data: any[])=>{

      // Controllo e manipolazione dei dati
      console.log(data);

      // Rimuove il loading
      this.setloading(false);
      
    })  
  }


  // Inizializzazione
  ngOnInit(){
    console.log("top selection");
    
    this.updateData();
    
  }
}
