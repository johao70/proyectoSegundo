import { HttpClient, HttpHeaders, } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import { Reserva } from '../models/reserva'

const httpOptions = {
    headers: new HttpHeaders({ 'Content-type': 'aplication/json' })
};
<<<<<<< HEAD:Restaurante/src/app/services/reservas.service.ts
// const API_URL = '/reserva/get', ['uses' => 'ReservaController@index';
const API_URL_CREATE = 'http://localhost:8000/reserva/crear';
const API_URL_DELETE = 'http://localhost:8000/reserva/eliminar';

=======
const API_URL_CREATE = 'http://localhost:8000/reserva/create';
>>>>>>> 8d85061723323ba3c1970713e4ed1a00a11f92c5:.history/Restaurante/src/app/services/reservas.services_20190129180501.ts
@Injectable( )

export class ReservasService {
    apiUrl: string;
    constructor(private http: HttpClient) { }

    crearActualizar(reserva: Reserva): Observable.Observable<Reserva[]> {
        return this.http.post<Reserva[]>(API_URL_CREATE, reserva);
    }
}