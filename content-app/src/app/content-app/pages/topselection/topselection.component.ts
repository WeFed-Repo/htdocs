import { Component,OnInit, Input} from '@angular/core';
// Client Http
import { HttpClient } from '@angular/common/http';
// import {ElencoFondi} from './elencofondi/elencofondi';

// Variabili e funzioni globali
import { GlobalVars } from "../../core/globalVars.js";

@Component({
  selector: 'top-selection',
  templateUrl: './topselection.component.html'
})

export class TopSelection  implements OnInit {

  // Variabili di configurazione
  tsUrl = GlobalVars.apibaseurl + "/fida/top_selection.json";

  constructor(private httpClient: HttpClient) {}

  // Input
  @Input() setloading: any;

  // Lettura dei dati
  updateData(){
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
  }

  ngAfterViewInit() {
    this.updateData();
  };
}
