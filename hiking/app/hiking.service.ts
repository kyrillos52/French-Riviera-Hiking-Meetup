import {Injectable}     from 'angular2/core';
import {Http, Response, Headers, RequestOptions} from 'angular2/http';
import {Hiking} from './model/hiking';
import {Observable}     from 'rxjs/Observable';

@Injectable()
export class HikingService {
  constructor (private http: Http) {}
  
  private _createEventUrl = 'http://hiking.cyril-grandjean.fr/add-event.php';
  
  makeAnAppointment(hiking: Hiking) {
      let body = JSON.stringify({
                    organiserName: hiking.organiserName,
                    organiserPhone: hiking.organiserPhone,
                    name: hiking.name,
                    duration: hiking.duration,
                    elevation: hiking.elevation,
                    level: hiking.level,
                    date: hiking.date,
                    location: hiking.location,
                    link: hiking.link,
                    limit: hiking.limit,
                    latitude: hiking.latitude,
                    longitude: hiking.longitude,
                    numberOfPeople: hiking.numberOfPeople,
                    additionalInfo: hiking.additionalInfo
                 });
      let headers = new Headers({ 'Content-Type': 'application/json' });
      let options = new RequestOptions({ headers: headers });
      return this.http.post(this._createEventUrl, body, options)
                    .map(res => res.json().data)
                    .do(data => console.log(data)) // eyeball results in the console
                    .catch(this.handleErrorConfirm);
  }
  private handleErrorList (error: Response) {
    // in a real world app, we may send the server to some remote logging infrastructure
    // instead of just logging it to the console
    return Observable.throw(error.json().error || 'Server error');
  }
  
  private handleErrorConfirm (error: Response) {
    // in a real world app, we may send the server to some remote logging infrastructure
    // instead of just logging it to the console
    return Observable.throw(error.json().error || 'Server error');
  }
}