import { Component, ViewChild } from '@angular/core';
import { MatDrawer } from '@angular/material/sidenav';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  public links = [
    { route: 'products', label: 'Produtos', icon: 'widgets' },
    { route: 'clients', label: 'Clientes', icon: 'groups' }
  ];
  @ViewChild('drawer') drawer: MatDrawer;
  public toggleDrawer(): void {
    this.drawer.toggle();
  }
}
