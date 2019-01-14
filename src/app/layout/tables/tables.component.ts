import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';

@Component({
    selector: 'app-tables',
    templateUrl: './tables.component.html',
    styleUrls: ['./tables.component.scss'],
    animations: [routerTransition()]
})
export class TablesComponent implements OnInit {
  nombre = '';
  prioridad = '';
  date = '';
  texto = '';
  lista = '';
  Seleccione = '';
  create: any;
  busy: Promise<any>;
  entidadSeleccionada: any;
  Seleccionada: number;
  constructor( ) { }
  estaSeleccionado(porVerificar): boolean {
    if (this.entidadSeleccionada == null) {
        return false;
    }
    return porVerificar.id === this.entidadSeleccionada.id;
}
    ngOnInit() {}
}
