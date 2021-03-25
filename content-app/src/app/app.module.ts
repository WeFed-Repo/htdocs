import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import  { Injector} from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import  { createCustomElement } from '@angular/elements';
import { ContentAppComponent } from './content-app/content-app.component';


// Viste e pagine
import { Overview} from "./content-app/overview/overview.component";
import { TopSelection} from "./content-app/topselection/topselection.component";
import { PModello} from "./content-app/pmodello/pmodello.component";
import { TabsComponent } from './content-app/tabs/tabs.component';
import { TabLabelComponent } from './content-app/tabs/tab/tab-label/tab-label.component';

@NgModule({
  declarations: [
    // Componente principale
    ContentAppComponent, 

    // Sottocomponenti
    Overview, TopSelection,PModello,

    //componenti generici
    TabsComponent,TabLabelComponent

  ],
  imports: [
    BrowserModule,

    // Componenti funzionali
    HttpClientModule
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
