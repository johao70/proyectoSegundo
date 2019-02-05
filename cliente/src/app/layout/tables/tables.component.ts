import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';

import { ReservaService } from '../../service/reserva.service';
import { Reserva } from '../../models/reserva';
// import { DetalleReservaService } from '../../service/detalle-reserva.service';
// import { Detalle_reserva } from '../../models/detalle_reserva';

@Component({
    selector: 'app-tables',
    templateUrl: './tables.component.html',
    styleUrls: ['./tables.component.scss'],
    animations: [routerTransition()]
})
export class TablesComponent implements OnInit {

  reserva: Reserva;
//   detallereserva: Detalle_reserva;

  constructor(private ReservaService: ReservaService
    // , private DetalleReservaService: DetalleReservaService
    ) { }

  addReserva(data) {
    this.ReservaService.addReserva(data).subscribe(
        response => {
            console.log(response);
        }
    )
  };

//   addDetallereserva(data) {
//     this.DetalleReservaService.addDetallereserva(data).subscribe(
//         response => {
//             console.log(response);
//         }
//     )
//   };


    ngOnInit() {
      this.reserva = new Reserva();
    //   this.detallereserva = new Detalle_reserva();
    }
}