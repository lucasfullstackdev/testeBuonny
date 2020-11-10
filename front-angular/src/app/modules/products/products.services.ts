import { HttpClient } from '@angular/common/http';
import { environment } from './../../../environments/environment';

import { Observable } from 'rxjs';
import { Injectable } from '@angular/core';

@Injectable({
    providedIn: 'root'
})
export class ProductsService {

    constructor(private http: HttpClient) { }

    getUrl(url: string): Observable<[]> {
        return this.http.get<[]>(`${environment.apiUrl}/${url}`);
    }

    products(): Observable<[]> {
        return this.http.get<[]>(`${environment.apiUrl}/products`);
    }
}
