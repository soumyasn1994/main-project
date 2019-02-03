import { Injectable } from '@angular/core';
import { Hero } from './hero';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { map, catchError } from 'rxjs/operators';



@Injectable({
  providedIn: 'root'
})
export class DemoService {

  hero:Hero[];

  constructor(private http: HttpClient) {
  }

  store(hero: Hero): Observable<Hero[]> {

    return this.http.post('http://blake/reg.php', {data:hero}). pipe(map((res) => {
      this.hero = (res['data']);
      return this.hero;
    }), catchError(this.handleError));
  
  }

  private handleError(error:HttpErrorResponse) {
    console.log(error);
    return throwError('err');
  }

}
