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
  tsUrl = GlobalVars.apibaseurl + "/top_selection.json";
  top10fondi = [];

  // Variabili locali
  selectedFund = null;

  constructor(private httpClient: HttpClient) {}

  // Input
  @Input() setloading: any;

  // Lettura dei dati
  updateData(){

    this.httpClient.get(this.tsUrl).subscribe((data: any)=>{

      // Controllo e manipolazione dei dati
      
      this.top10fondi = data && data.fondi;

      // Rimuove il loading
      this.setloading(false);
      
    })
  }

  // Dettagli di un fondo
  selectFund(fondo) {
    this.selectedFund = fondo;

    console.log((this.selectedFund))
  }
  

  // Inizializzazione
  ngOnInit(){
    console.log("top selection");
  }

  ngAfterViewInit() {
    this.updateData();
  };
}
