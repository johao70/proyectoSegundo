import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

@Injectable()
export class ReservaService {

  constructor(private http: Http) { }

  addReserva(pers_ci, fecha) {
    this.http.post('http://localhost:8000/reserva',JSON.stringify(this.addReserva)).toPromise().then(r => {console.log(r);}).catch(
      e => console.log(e));    
  }
}