import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';

import { ServiciosService } from '../../service/servicios.service';
import { Reserva } from '../../models/reserva';

@Component({
    selector: 'app-tables',
    templateUrl: './tables.component.html',
    styleUrls: ['./tables.component.scss'],
    animations: [routerTransition()]
})
export class TablesComponent implements OnInit {

  reserva: Reserva;
  reservation: Array<Reserva>;

  constructor(private Servicios: ServiciosService) { }

  ngOnInit() {
    this.get();
    this.reserva = new Reserva();
  }

  get() {
    this.Servicios.get('reserva').subscribe(
        response => {
            this.reservation = response as Array<Reserva>;
        },
        error => {
            console.log(error);
        }
    );
}

post(){
    this.Servicios.post('reserva',this.reserva).subscribe(
      response => {
        this.get();
      },
      error => {
        console.log(error);
      }
      
    );
  }

put(reserva:Reserva){
    this.Servicios.put('reserva',reserva).subscribe(
      response => {
        this.get();
      },
      error => {
        console.log(error);
      }          
    );
}

delete(reserva:Reserva){
    this.Servicios.delete('reserva',reserva).subscribe(
      response => {
        this.get();
      },
      error => {
        console.log(error);
      }          
    );
}
}