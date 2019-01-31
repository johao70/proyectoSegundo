import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';
import { ReservaService } from '../../service/reserva.service'

@Component({
    selector: 'app-tables',
    templateUrl: './tables.component.html',
    styleUrls: ['./tables.component.scss'],
    animations: [routerTransition()]
})
export class TablesComponent implements OnInit {
  constructor(private reservaservice: ReservaService) { }
    
    ngOnInit() {}
    }