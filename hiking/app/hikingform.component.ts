import {Component, ElementRef, OnInit, Inject} from '@angular/core';
import { Hiking }    from './model/hiking';
import { Venue }    from './model/venue';
import {HikingService} from './hiking.service';
import {HttpModule}    from '@angular/http';

declare var jQuery:any;

@Component({
  selector: 'hiking-form',
  templateUrl: 'app/template/hiking-form.component.html',
  providers: [
        HttpModule,
        HikingService
    ]
})
export class HikingFormComponent implements OnInit {
  levels = ['Easy', 'Medium',
            'Sportive', 'Alpine'];
  displayListVenuesError = false;
  newVenue = false;
  model = new Hiking('','','',0,'','','','','','20','20',20, new Venue(), '');
  searchedQuery = 'Nice';
  venues: Venue[] = [];
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
    
    this.getVenues();
  }
  submitted = false;
  displaySearchMapBtn = false;
  
  getVenues() {
        var errorMessage = '';
        this.displayListVenuesError = false;
        this._hikingService.getVenues()
                     .subscribe(
                       data => this.venues = data,
                       error =>  this.displayVenuesError());
   }
   
   selectVenue(selectedVenue: Venue) {
       this.model.venue = selectedVenue;
       
       if(selectedVenue.id == 0) {
           this.newVenue = true;
           this.displaySearchMapBtn = true;
       } else {
           this.newVenue = false;
           this.displaySearchMapBtn = false;
       }
       
       var testElementsMap = document.getElementsByClassName('gllpLatlonPicker');
       Array.prototype.filter.call(testElementsMap, function(testElement){
           var map = jQuery().gMapsLatLonPicker();
           map.init(testElement );
           map.changePosition(selectedVenue.lat, selectedVenue.lon);
       });
   }
   
   searchMap() {
       var queryString = this.model.venue.address+' '+this.model.venue.city
       var testElementsMap = document.getElementsByClassName('gllpLatlonPicker');
       Array.prototype.filter.call(testElementsMap, function(testElement){
           var map = jQuery().gMapsLatLonPicker();
           map.init(testElement );
           map.changeQuery(queryString);
       });
   }
   
   displayVenuesError() {
        this.displayListVenuesError = true;
   }
  
  onSubmit() { 
      this.submitted = false;
      this.model.longitude = (<HTMLInputElement>document.getElementById("longitude")).value; 
      this.model.latitude = (<HTMLInputElement>document.getElementById("latitude")).value; 
      this.model.date = (<HTMLInputElement>document.getElementById("date")).value;
      
      this._hikingService.createEvent(this.model)
                    .subscribe(
                    data =>  this.hikingConfirmationStatus = data,
                    error =>  this.displayConfirmationError());
                    
      return false; 
  }
  
  displayConfirmationError() {
        this.hikingConfirmationStatus = 'error;'
   }
  // TODO: Remove this when we're done
  get diagnostic() { return JSON.stringify(this.model); }
}