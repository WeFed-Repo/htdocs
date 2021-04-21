import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

// Importazione dei componenti "oggetto"
import { BoxLinkComponent } from './boxLink/boxLink.component';
import { SimpleTableComponent } from './table/simpleTable.component';
import { TabsComponent } from './tabs/tabs.component';
import { TabComponent } from './tabs/tab/tab.component';
import { Disclaimer } from './disclaimer/disclaimer.component';

// Importazione di moduli features
import { Form } from "./form/form.module";


@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [
    Disclaimer,
    TabsComponent,TabComponent,BoxLinkComponent, SimpleTableComponent,
  ],
  exports: [
    Disclaimer,
    TabsComponent,TabComponent,BoxLinkComponent, SimpleTableComponent,
    Form
  ]
})
export class PageComponents { }