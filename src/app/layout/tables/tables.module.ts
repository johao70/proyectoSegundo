import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CalendarModule } from 'primeng/calendar';

import { TablesRoutingModule } from './tables-routing.module';
import { TablesComponent } from './tables.component';

@NgModule({
    imports: [
      CommonModule,
      TablesRoutingModule,
      CalendarModule
    ],
    declarations: [TablesComponent]
})
export class TablesModule {}