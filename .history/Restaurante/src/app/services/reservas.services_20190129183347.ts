import { HttpClient, HttpHeaders, } from '@angular/common/http';
import { Injectable, Observable } from '@angular/core';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import { Reservas } from '../models';




const httpOptions = {
    headers: new HttpHeaders({ 'Content-type': 'aplication/json' })
};
const API_URL_CREATE = 'http://localhost:8000/reserva/create';
@Injectable( )

export class ReservasService {
    apiUrl: string;
    constructor(private http: HttpClient) { }



    crearOActualizar(reservas: Reservas): Observable.Observable<Reservas[]> {
        return this.http.post<Reservas[]>(API_URL_CREATE, reservas);
    }
}
