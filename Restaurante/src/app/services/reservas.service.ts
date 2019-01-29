import { HttpClient, HttpHeaders, } from '@angular/common/http';
import { Injectable, Observable } from '@angular/core';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import { Reservas } from '../models/reservas';




const httpOptions = {
    headers: new HttpHeaders({ 'Content-type': 'aplication/json' })
};
// const API_URL = '/reserva/get', ['uses' => 'ReservaController@index';
const API_URL_CREATE = 'http://localhost:8000/reserva/create';
const API_URL_DELATE = 'http://localhost:8080/sisEventosWs/deleteMultimedia/';
@Injectable( )

export class ReservasService {
    apiUrl: string;
    constructor(private http: HttpClient) { }



    crearOActualizar(reservas: Reservas): Observable.Observable<Reservas[]> {
        return this.http.post<Reservas[]>(API_URL_CREATE, reservas);
    }
}