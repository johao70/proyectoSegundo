import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';
import { Http } from '@angular/http';

@Component({
    selector: 'app-tables',
    templateUrl: './tables.component.html',
    styleUrls: ['./tables.component.scss'],
    animations: [routerTransition()]
})
export class TablesComponent implements OnInit {
  constructor(private http: Http) { }
    
    ngOnInit() {}
    }