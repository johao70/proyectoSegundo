import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})

export class ReservaService {
  constructor(private http: HttpClient) { }

  addReserva(data: any) {
    const url = environment.API_URL + 'reserva';
    console.log(data);
    return this.http.post(url,JSON.stringify(data));
  }
}