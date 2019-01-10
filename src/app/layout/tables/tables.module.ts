import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CalendarModule } from 'primeng/calendar';

import { TablesRoutingModule } from './tables-routing.module';
import { TablesComponent } from './tables.component';
import { PageHeaderModule } from './../../shared';

@NgModule({
    imports: [
      CommonModule,
      TablesRoutingModule,
      CalendarModule,
      PageHeaderModule
    ],
    declarations: [TablesComponent]
})
export class TablesModule {}
