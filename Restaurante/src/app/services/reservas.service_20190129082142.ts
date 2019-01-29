import { HttpClient, HttpHeaders, HttpErrorResponse, HttpResponse } from '@angular/common/http';
import { Http, Response } from '@angular/http';
import { Injectable, Type } from '@angular/core';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import { Reservas } from '../models/reservas';




const httpOptions = {
    headers: new HttpHeaders({ 'Content-type': 'aplication/json' })
};
// const API_URL = '/reserva/get', ['uses' => 'ReservaController@index';
const API_URL_CREATE = 'http://localhost:8080/sisEventosWs/saveOrUpdateOpcion/';
const API_URL_DELATE = 'http://localhost:8080/sisEventosWs/deleteMultimedia/';
@Injectable()

export class OpcionService {
    apiUrl: string;
    constructor(private http: HttpClient) { }



    crearOActualizar(reservas: Reservas): Observable<Reservas[]> {
        return this.http.post<Reservas[]>(API_URL_CREATE, reservas);
    }
}
