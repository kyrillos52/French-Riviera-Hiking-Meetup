import {Component, ElementRef, OnInit, Inject} from 'angular2/core';
import {NgForm}    from 'angular2/common';
import { Hiking }    from './model/hiking';
import {HikingService} from './hiking.service';
import {HTTP_PROVIDERS}    from 'angular2/http';

declare var jQuery:any;

@Component({
  selector: 'hiking-form',
  templateUrl: 'app/template/hiking-form.component.html',
  providers: [
        HTTP_PROVIDERS,
        HikingService
    ]
})
export class HikingFormComponent implements OnInit {
  levels = ['Easy', 'Medium',
            'Sportive', 'Alpine'];
  model = new Hiking('','','',0,'','','','','',20,'20','20',20,'');
  hikingConfirmationStatus : string = 'notSubmitted';
  elementRef: ElementRef;
  constructor(@Inject(ElementRef) elementRef: ElementRef, private _hikingService: HikingService) {
        this.elementRef = elementRef;
  }
  ngOnInit() {
      
    var testElementsMap = document.getElementsByClassName('gllpLatlonPicker');
    Array.prototype.filter.call(testElementsMap, function(testElement){
        jQuery().gMapsLatLonPicker().init(testElement );
    });
    var testElementsDateTime = document.getElementsByClassName('datetimepicker');
    Array.prototype.filter.call(testElementsDateTime, function(testElement){
        jQuery(testElement).datetimepicker({
                format: 'DD/MM/YYYY HH:mm'
            });
    });
    
  }
  submitted = false;
  onSubmit() { 
      this.submitted = false;
      this.model.longitude = (<HTMLInputElement>document.getElementById("longitude")).value; 
      this.model.latitude = (<HTMLInputElement>document.getElementById("latitude")).value; 
      this.model.date = (<HTMLInputElement>document.getElementById("date")).value;
      
      this._hikingService.createEvent(this.model)
                    .subscribe(
                    data =>  this.hikingConfirmationStatus = data);
                    
      return false; 
  }
  // TODO: Remove this when we're done
  get diagnostic() { return JSON.stringify(this.model); }
}