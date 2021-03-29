import { Component, ContentChildren,QueryList,AfterContentInit} from '@angular/core';
import { TabComponent } from  './tab/tab.component'
@Component({
  selector: 'tabs',
  templateUrl: './tabs.component.html'
})
export class TabsComponent implements AfterContentInit {
  
  @ContentChildren(TabComponent) tabsList: QueryList<TabComponent>;
  
 
  ngAfterContentInit() {
    let activeTabs = this.tabsList.filter((tab)=>tab.active);
    if(activeTabs.length === 0) {
      this.selectTab(this.tabsList.first);
    }
  }
  
  selectTab(tab){
    this.tabsList.toArray().forEach(tab => tab.active = false);
    tab.active = true;
  }
}
