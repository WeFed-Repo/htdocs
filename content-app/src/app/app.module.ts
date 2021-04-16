import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import  { Injector} from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import  { createCustomElement } from '@angular/elements';
import { ContentAppComponent } from './content-app/content-app.component';

// Viste e pagine (diverranno moduli)
import { Overview} from "./content-app/pages/overview/overview.component";
import { TopSelection} from "./content-app/pages/topselection/topselection.component";
import { PModello} from "./content-app/pages/pmodello/pmodello.component";

// Componenti contestuali
import { TabsComponent } from './content-app/components/tabs/tabs.component';
import { TabComponent } from './content-app/components/tabs/tab/tab.component';

import { PModelloContent } from './content-app/pages/pmodello/pmodelloContent/pmodellocontent';
import { BoxLinkComponent } from './content-app/components/boxLink/boxLink.component';
import { SimpleTableComponent } from './content-app/components/table/simpleTable.component';

// Componenti funzionali trasversali
import { Disclaimer } from './content-app/components/disclaimer/disclaimer.component';

 
@NgModule({  
  declarations: [
    // Componente principale
    ContentAppComponent, 

    // Variabili e funzioni "trasversali"
   

    // Sottocomponenti
    Overview, TopSelection,PModello,

    //contenuti dei sottocomponenti
    PModelloContent,

    //componenti generici
    TabsComponent,TabComponent,BoxLinkComponent, SimpleTableComponent, Disclaimer

  ],
  imports: [
    BrowserModule,

    // Componenti funzionali
    HttpClientModule,

  ],
  providers: []
})

/* Esportazione "diretta" */
export class AppModule {
  constructor (private injector: Injector) {
    const el = createCustomElement(ContentAppComponent, { injector });
    customElements.define('content-app', el);
 }
 ngDoBootstrap() {}
}
