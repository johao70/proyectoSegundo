import { HttpClient, HttpHeaders, } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import { Reserva } from '../models/reserva'

const httpOptions = {
    headers: new HttpHeaders({ 'Content-type': 'aplication/json' })
};
// const API_URL = '/reserva/get', ['uses' => 'ReservaController@index';
const API_URL_CREATE = 'http://localhost:8000/reserva/crear';
const API_URL_DELETE = 'http://localhost:8000/reserva/eliminar';

@Injectable( )

export class ReservasService {
    apiUrl: string;
    constructor(private http: HttpClient) { }

    crearActualizar(reserva: Reserva): Observable.Observable<Reserva[]> {
        return this.http.post<Reserva[]>(API_URL_CREATE, reserva);
    }
}