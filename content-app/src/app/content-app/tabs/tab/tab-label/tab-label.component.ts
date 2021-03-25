import { Component, Input } from "@angular/core";

@Component({
  selector: 'tabLabel',
  templateUrl: './tab-label.component.html'
})
export class TabLabelComponent {
  @Input() tabLabels;

}
