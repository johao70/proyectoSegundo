import { CommonModule } from '@angular/common';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AuthGuard } from './shared';
import { CalendarModule } from 'primeng/calendar';

// AoT requires an exported function for factories
export const createTranslateLoader = (http: HttpClient) => {
};

@NgModule({
    imports: [
        CommonModule,
        BrowserModule,
        CalendarModule,
        BrowserAnimationsModule,
        HttpClientModule,
        AppRoutingModule
    ],
    declarations: [AppComponent],
    providers: [AuthGuard],
    bootstrap: [AppComponent]
})
export class AppModule {}
