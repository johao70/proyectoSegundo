import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

@Injectable({
  providedIn: 'root'
})
export class DetalleReservaService {

  constructor(private http: Http) { }

  addDetalleReserva(reserva_id, mesa_id, numerousuarios) {
    this.http.post('http://localhost:8000/detalle_reserva',JSON.stringify(this.addDetalleReserva)).toPromise().then(r => {console.log(r);}).catch(
      e => console.log(e));    
  }
}
