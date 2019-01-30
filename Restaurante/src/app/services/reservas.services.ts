import { HttpClient, HttpHeaders, } from '@angular/common/http';
import { Injectable, Observable } from '@angular/core';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import { Reserva } from '../models/reserva';

const httpOptions = {
    headers: new HttpHeaders({ 'Content-type': 'aplication/json' })
};
const API_URL_CREATE = 'http://localhost:8000/reserva/create';
export class ReservasService {
    apiUrl: string;
    constructor(private http: HttpClient) { }

    crearOActualizar(reservas: Reserva): Observable.Observable<Reserva[]> {
        return this.http.post<Reserva[]>(API_URL_CREATE, reservas);
    }
}